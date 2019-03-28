<?php


class Super_Admin_Model extends CI_Model{
    
    //--------------------start menu category---------------
    
    public function save_category_information_successfully($data){
       
        $this->db->insert('tbl_category',$data);
       
    }
    public function manage_category_info(){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function publish_category_info($category_id){
        $this->db->select('*');
        $this->db->where('category_id',$category_id);
        $this->db->set('publication_status',0);
        $this->db->update('tbl_category');
    }
    public function unpublish_category_info($category_id){
        $this->db->select('*');
        $this->db->where('category_id',$category_id);
        $this->db->set('publication_status',1);
        $this->db->update('tbl_category');
    }
    public function edit_category_info($category_id){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id );
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
                
        
    }
    public function update_category_info($category_id,$data){
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category',$data);
    }

    public function delete_category_info($category_id){
     
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
    }
    //--------------------end menu category-------------------------------------
   
    //--------------------start sub menu news----------------------------------
     public function save_sub_menu_information($data){
         $this->db->insert('tbl_sub_menu_news',$data);
     }




     //--------------------end sub menu news-------------------
    
    
}
