<?php

class Myaccount_Model extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
        $this->table = "app_admin";
    }

    function initData(){
        return array();
    }

    function update($post){
        $this->db->trans_start(); # Starting Transaction
            $this->db->trans_strict(FALSE); # See Note 01. If you wish can remove as well 

            if (isset($post["password"]) && strlen($post["password"])>0) {
                $this->updatepassword($this->input->post("kode"),$this->input->post());
            }
            
            $this->db->where(array("kode"=>$this->input->post("kode")));
            $this->db->update('app_admin', array(
                "name"          => $this->input->post("name"),
            ));


            $this->db->trans_complete(); # Completing transaction

            if ($this->db->trans_status() === FALSE) {
                # Something went wrong.
                $this->db->trans_rollback();
                redirect(base_url("admin/page/myaccount"));
            } 
            else {
                # Everything is Perfect. 
                # Committing data to the database.
                $this->db->trans_commit();
                $this->session->set_flashdata("message","YES");
                redirect(base_url("admin/page/myaccount"));
            }
    }

    function updatepassword($where,$post){
        $this->db->query("UPDATE {$this->table} SET password=AES_ENCRYPT('".$post["password"]."',username) WHERE kode='{$where}'");
    }

}