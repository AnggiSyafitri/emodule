<?php

class Mod_Model extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
        $this->table = "data_modul";
    }

    function initData(){
        $kategori   = $this->db->get_where("data_kategori",array("status"=>"1"))->result();
        $kelas      = $this->db->get_where("data_kelas",array("status"=>"1"))->result();
        $mapel      = $this->db->get_where("data_mapel",array("status"=>"1"))->result();
        $kompetensi = $this->db->get_where("data_kompetensi",array("status"=>"1"))->result();
        return array(
            "kategori"=>$kategori,
            "kelas"=>$kelas,
            "mapel"=>$mapel,
            "kompetensi"=>$kompetensi,
        );
    }

    function datatotal($table,$where){
        return $this->db->select('count(kode) as total')->get_where($table,$where)->row()->total;
    }

    function get($post){
        $column = array('',$this->table.'.name');

        $this->db->select($this->table.".*,
            data_kelas.name as namakelas,
            data_kategori.name as namakategori,
            data_mapel.name as namamapel,
            data_kompetensi.name as namakompetensi");
        $this->db->from($this->table);
        $this->db->join("data_kelas","data_kelas.kode=".$this->table.".kelas AND data_kelas.status='1'","left");
        $this->db->join("data_kategori","data_kategori.kode=".$this->table.".kategori AND data_kategori.status='1'","left");
        $this->db->join("data_mapel","data_mapel.kode=".$this->table.".mapel AND data_mapel.status='1'","left");
        $this->db->join("data_kompetensi","data_kompetensi.kode=".$this->table.".kompetensi AND data_kompetensi.status='1'","left");
        $i=0;

        foreach ($column as $item) 
        {
                if(isset($post['search']) && $post['search']['value']!=='' && $item!=='')
                    ($i===0) ? $this->db->like($item, $post['search']['value']) : $this->db->or_like($item, $post['search']['value']);
                $column[$i] = $item;
                $i++;
        }


        $this->db->where(array($this->table.".status"=>'1'));
        if(isset($post['datapos']))
        {
            $where = array();
            foreach ($post['datapos'] as $key => $value) {
                $where[$key] = $value;
            }

            $this->db->where($where);
        } 

        if(isset($post['order']))
        {
            $this->db->order_by($column[$post['order']['0']['column']], $post['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $this->db->order_by($this->table.'.name','asc');
        }

        $this->db->limit($post['length'], $post['start']);

        $data = $this->db->get();

        return (array(
                "draw" => (int)$_POST['draw'],
                "recordsTotal" => (int)$this->datatotal($this->table,(isset($where) ? $where: array())),
                "recordsFiltered" => $this->datatotal($this->table,(isset($where) ? $where: array())),
                "data" => $data->result(),
                "query" => "",
        ));
    }

    public function uniq($len = 7) {
        $s = substr(str_shuffle("_abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"), 0, ($len+2));
        return $s;
    }


    function add($post){
        $post["kode"] = $this->uniq(strlen($this->datatotal($this->table,array()))+3);
        $this->db->insert($this->table,$post);
        return (array("message"=>"Success data!","success"=>true));
    }

    function updatepdf($post){
        $file = isset($_FILES['file']) ? $_FILES['file']: array();
        //jika ada file

        $filename="";

        if (isset($file['name'])) {
            $configfile['upload_path'] = realpath(APPPATH.'../assets/docs/pdf/');
            $configfile['allowed_types'] = 'pdf';
            //load library upload
            $this->load->library('upload', $configfile);
                //proses upload file
            if (!$this->upload->do_upload('file')) {
                $error = $this->upload->display_errors();
                echo $error." .. ";
            }
            $filename = $this->upload->data('file_name');

            $where = array("kode"=>$post["kode"]);
            $this->db->where($where);
            $this->db->update($this->table, array("file"=>$filename));
        }

        return (array("message"=>"Success data!","success"=>true));
    }

    function updatecover($post){
        $file = isset($_FILES['cover']) ? $_FILES['cover']: array();
        //jika ada file

        $filename="";

        if (isset($file['name'])) {
            $configfile['upload_path'] = realpath(APPPATH.'../assets/docs/cover/');
            $configfile['allowed_types'] = 'jpg|jpeg|png';
            //load library upload
            $this->load->library('upload', $configfile);
                //proses upload file
            if (!$this->upload->do_upload('cover')) {
                $error = $this->upload->display_errors();
                echo $error." .. ";
            }
            $filename = $this->upload->data('file_name');

            $where = array("kode"=>$post["kode"]);
            $this->db->where($where);
            $this->db->update($this->table, array("cover"=>$filename));
        }

        return (array("message"=>"Success data!","success"=>true));
    }

    function update($post){
        $where = array("kode"=>$post["kode"]);
        unset($post["kode"]);
        $this->db->where($where);
        $this->db->update($this->table, $post);
        return (array("message"=>"Success data!","success"=>true));
    }

    function download($post){
        $where = array("kode"=>$post["kode"]);
        $modul = $this->db->get_where($this->table,$where)->row();

        $this->db->where($where);
        $this->db->update($this->table, array(
            "downloads"=>(int)$modul->downloads+1
        ));
        return (array("message"=>"Success data!","success"=>true));
    }

    function view($post){
        $where = array("kode"=>$post["kode"]);
        $modul = $this->db->get_where($this->table,$where)->row();
        
        $this->db->where($where);
        $this->db->update($this->table, array(
            "views"=>(int)$modul->views+1
        ));
        return (array("message"=>"Success data!","success"=>true));
    }

    function delete($post){
        $where = array("kode"=>$post["kode"]);
        $this->db->where($where);
        $this->db->delete($this->table);
        return (array("success"=>true));
    }

    




}