<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author riaz
 */
class Admin extends CI_Controller {
     public function __construct() {
         parent::__construct();
        $id= $this->session->userdata('admin_id');
        if($id){
            redirect('Super_Admin');
        }
     }
    
    
    public function index(){
        $data=array();
        $data['title']='Login Page';
        $this->load->view('admin_master/admin_master_login',$data);
    }
    public function save_admin_information(){
       
        $admin_email=  $this->input->post('admin_email',TRUE);
        $admin_password=  md5($this->input->post('admin_password',TRUE));
        $result=$this->Admin_Model->save_admin_information($admin_email,$admin_password);
        if($result){
            $data=array();
            $data['admin_id']=$result->admin_id;
            $data['admin_password']=$result->admin_password;
            $data['admin_email']=$result->admin_email;
            $data['admin_name']=$result->admin_name;
            $this->session->set_userdata($data);
            redirect('Super_Admin');
        }
        else{
            $data=array();
            $data['message']='Your Login Email Or Password Invalied';
            $this->session->set_userdata($data);
            redirect('Admin');
        }
    }
   
}
