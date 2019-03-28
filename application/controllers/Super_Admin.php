<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Super_Admin
 *
 * @author riaz
 */
class Super_Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
      $id=  $this->session->userdata('admin_id');
      if($id==NUll){
          redirect('Admin');
      }
    }
    public function logout(){
        $this->session->unset_userdata('admin_id');
        redirect('Admin');
    }
    
 
    
    
    public function index(){
        $data=array();
        $data['title']='Home Page';
        $data['sub_breadcrumb']=FALSE;
        $data['main_content']=  $this->load->view('admin_master/admin_pages/home_page','',TRUE);
        $this->load->view('admin_master/admin_master_page',$data);
    }
    public function dashboard(){
        $data=array();
        $data['title']='Dashboard Page';
        $data['sub_breadcrumb']=TRUE;
        $data['sub_breadcrumb_name']='Dashboard';
        $data['sub_breadcrumb_url']='dashboard';
        $data['main_content']=  $this->load->view('admin_master/admin_pages/home_page','',TRUE);
        $this->load->view('admin_master/admin_master_page',$data);
    }
    
   // -------------------------start News menu category-------------------------------------
    public function  add_category(){
        $data=array();
        $data['title']='News Category Page';
        $data['sub_breadcrumb']=TRUE;
        $data['sub_breadcrumb_name']='Add Category';
        $data['sub_breadcrumb_url']='add_category';
        $data['main_content']=  $this->load->view('admin_master/admin_pages/add_news_category_page','',TRUE);
        $this->load->view('admin_master/admin_master_page',$data);
    }
    
    public function save_category(){
        $data=array();
        $data['category_name']=  $this->input->post('category_name',TRUE);
        $data['category_description']=  $this->input->post('category_description',TRUE);
        $data['publication_status']=  $this->input->post('publication_status',TRUE);
        
        if($data!=NULL){
            $sdata=array();
            $sdata['message']='Category Save Successfully';
            $this->session->set_userdata($sdata);
              $this->Super_Admin_Model->save_category_information_successfully($data);
              redirect('Super_Admin/add_category');
        }else{
            $sdata=array();
            $sdata['message']='Please Fill All Information';
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_category');
        }
      
    }
    public function manage_category(){
         $data=array();
        $data['title']='News Manage Category Page';
        $data['sub_breadcrumb']=TRUE;
        $data['sub_breadcrumb_name']='Manage Category';
        $data['sub_breadcrumb_url']='manage_category';
        $data['manage_category']=  $this->Super_Admin_Model->manage_category_info();
        $data['main_content']=  $this->load->view('admin_master/admin_pages/manage_news_category_page',$data,TRUE);
        $this->load->view('admin_master/admin_master_page',$data);
        
    }
    public function published_category($category_id){
        $this->Super_Admin_Model->publish_category_info($category_id);  
        redirect('Super_Admin/manage_category');
    }
    public function unpublished_category($category_id){
        $this->Super_Admin_Model->unpublish_category_info($category_id);  
        redirect('Super_Admin/manage_category');
    }
            
            
            
    public function edit_category($category_id){
          $data=array();
        $data['title']='Edit Category Page';
        $data['sub_breadcrumb']=TRUE;
        $data['sub_breadcrumb_name']='Edit Category';
        $data['sub_breadcrumb_url']='edit_category';
        $data['select_category']=  $this->Super_Admin_Model->edit_category_info($category_id);
        $data['main_content']=  $this->load->view('admin_master/admin_pages/edit_news_category_page',$data,TRUE);
        $this->load->view('admin_master/admin_master_page',$data);
    }
  public function update_category(){
      $category_id=  $this->input->post('category_id',TRUE);
      $data=array();
      $data['category_name']=  $this->input->post('category_name',TRUE);
      $data['category_description']=  $this->input->post('category_description',TRUE);
      $data['publication_status']=  $this->input->post('publication_status',TRUE);
      $this->Super_Admin_Model->update_category_info($category_id,$data);
      redirect('Super_Admin/manage_category');
  }

  
    
    
    public function delete_category($category_id){
        $this->Super_Admin_Model->delete_category_info($category_id);
        redirect('Super_Admin/manage_category');
    }




    // -------------------------end News Menu category-------------------------------------
   
    //--------------------------start News sub Menu----------------------------------------
   public function  add_sub_menu(){
       $data=array();
       $data['title']='News Sub Menu';
        $data['sub_breadcrumb']=TRUE;
        $data['sub_breadcrumb_name']='Add Sub Menu';
        $data['sub_breadcrumb_url']='add_sub_menu';
        $data['main_content']=  $this->load->view('admin_master/admin_pages/add_sub_menu_page','',TRUE);
        $this->load->view('admin_master/admin_master_page',$data);
   } 

    public function save_sub_menu(){
        $data=array();
        $data['sub_menu_name']=  $this->input->post('sub_menu_name',TRUE);
        $data['news_title_name']=  $this->input->post('news_title_name',TRUE);
        
        $data['sub_menu_description']=  $this->input->post('sub_menu_description',TRUE);
        $data['sub_menu_short_description']=  $this->input->post('sub_menu_short_description',TRUE);
        $data['publication_status']=  $this->input->post('publication_status',TRUE);
      
      
   
//      Start File Upload

        $config['upload_path'] = 'asset/back_end/news_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();


        if (!$this->upload->do_upload('news_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_sub_menu');
        } else {
            $fdata = $this->upload->data();
            $data['news_image'] = $config['upload_path'] . $fdata['file_name'];
        }
    
              if($data['sub_menu_name']!=NULL&&$data['news_title_name']!=NULL&&$data['sub_menu_description']!=NULL&&$data['sub_menu_short_description']!=NULL&&$data['publication_status']!=NULL){
            $sdata=array();
            $sdata['message']= 'Save Successfully';
             $this->session->set_userdata($sdata);
             $this->Super_Admin_Model->save_sub_menu_information($data);
             redirect('Super_Admin/add_sub_menu');     
        }else{
            $sdata=array();
            $sdata['message']= 'Please fill All information!';
            $this->session->set_userdata($sdata); 
            redirect('Super_Admin/add_sub_menu');
        }
        
    }

    //--------------------------End News sub Menu----------------------------------------
   
    
    
    
    
    
    
    
    
    
    
    
    
    
}
