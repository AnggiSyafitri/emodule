<?php

class Kd_Model extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
        $this->table = "data_kompetensi";
    }

    function initData(){
        return array();
    }

    function datatotal($table,$where){
        return $this->db->select('count(kode) as total')->get_where($table,$where)->row()->total;
    }

    function get($post){
        $column = array('',$this->table.'.name');

        $this->db->select($this->table.".*");
        $i=0;

        foreach ($column as $item) 
        {
                if(isset($post['search']) && $post['search']['value']!=='' && $item!=='')
                    ($i===0) ? $this->db->like($item, $post['search']['value']) : $this->db->or_like($item, $post['search']['value']);
                $column[$i] = $item;
                $i++;
        }

        if(isset($post['order']))
        {
            $this->db->order_by($column[$post['order']['0']['column']], $post['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $this->db->order_by($this->table.'.name','asc');
        }

        $this->db->where(array("status"=>'1'));
        if(isset($post['datapos']))
        {
            $where = array();
            foreach ($post['datapos'] as $key => $value) {
                $where[$key] = $value;
            }

            $this->db->where($where);
        } 

        $this->db->limit($post['length'], $post['start']);

        $data = $this->db->get($this->table);

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

    function update($post){
        $where = array("kode"=>$post["kode"]);
        unset($post["kode"]);
        $this->db->where($where);
        $this->db->update($this->table, $post);
        return (array("message"=>"Success data!","success"=>true));
    }

    function delete($post){
        $where = array("kode"=>$post["kode"]);
        $this->db->where($where);
        $this->db->delete($this->table);
        return (array("success"=>true));
    }

    




}