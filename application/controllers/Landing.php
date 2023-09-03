<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");

class Landing extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->db->query('SET time_zone="+7:00"');
	}

	public function index($page="home"){
		if (!in_array($page, array("home","contact","search"))) {
			$page = "e404";
		}
		$data = array("content"=>$page);


		if ($page=="home") {
			$kodeheadline = "KgfGQ0";

			$data["kelas"] = $this->db->get_where("data_kelas")->result();
			$data["kategori"] = $this->db->get_where("data_kategori")->result();
			$data["mapel"] = $this->db->get_where("data_mapel")->result();
			$data["kompetensi"] = $this->db->get_where("data_kompetensi")->result();

			$this->table = "data_modul";
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

			$this->db->where(array("kategori"=>$kodeheadline));
			$data["headline"] = $this->db->get()->result();
		}
        $this->load->view('html',$data);
	}

	public function detail($kode="kode"){
		$data = array("content"=>"detail");

			$kodeheadline = "KgfGQ0";


			$this->table = "data_modul";
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

			$this->db->where(array("kategori"=>$kodeheadline));
			$data["headline"] = $this->db->get()->result();

			$this->table = "data_modul";
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

			$this->db->where(array("data_modul.kode"=>$kode));
			$data["current"] = $this->db->get()->row();
			$data["kategori"] = $this->db->get_where("data_kategori")->result();

        $this->load->view('html',$data);
	}

	public function search($param1="",$param2="",$param3="",$param4="",$param5=""){
		$data = array("content"=>"searching");
			$this->uri->segment(3);

			$kodeheadline = "KgfGQ0";
			$data["kelas"] = $this->db->get_where("data_kelas")->result();
			$data["kategori"] = $this->db->get_where("data_kategori")->result();
			$data["mapel"] = $this->db->get_where("data_mapel")->result();
			$data["kompetensi"] = $this->db->get_where("data_kompetensi")->result();


			$this->table = "data_modul";
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


        	$where = array();
        	if($this->input->get("category")){
        		$where["kategori"] = $this->input->get("category");
        	}
        	if($this->input->get("class")){
        		$where["kelas"] = $this->input->get("class");
        	}
        	if($this->input->get("subject")){
        		$where["mapel"] = $this->input->get("subject");
        	}
        	if($this->input->get("competence")){
        		$where["kompetensi"] = $this->input->get("competence");
        	}

        	if($this->input->get("keyword")){
				$this->db->like('data_modul.name',$this->input->get("keyword"));
				$this->db->or_like('data_modul.desc',$this->input->get("keyword"));
        	}

			$this->db->where($where);
			$data["result"] = $this->db->get()->result();


			$this->table = "data_modul";
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

			$this->db->where(array("kategori"=>$kodeheadline));
			$data["headline"] = $this->db->get()->result();

			$data["kategori"] = $this->db->get_where("data_kategori")->result();

        $this->load->view('html',$data);
	}

}
