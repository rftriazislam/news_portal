
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form News Category</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
           
             <h4 class="text-center" style="color:red">
                <?php $p=$this->session->userdata('message');
                echo $p;
                if($p){
                    $this->session->unset_userdata('message');
                }
                        ?>
                </h4>
            <?php 
                        foreach ($select_category as $v_category) {
                            
                        
            ?>
            <form class="form-horizontal" name="edit_category" action="<?php echo base_url()?>Super_Admin/update_category" method="post"> 
               
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">News Category Name</label>
                        <div class="controls">
                            <input type="text" name="category_name" value="<?php echo $v_category->category_name ?>" class="span6 typeahead" id="typeahead"  data-provide='4'>
                            <input type="hidden" name="category_id"  value="<?php echo $v_category->category_id?>"  class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='4'>

                        </div>
                    </div>
                    
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">News Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="category_description" id="textarea2" rows="3"> <?php echo $v_category->category_description?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="selectError3"><b>Publication Status</b></label>
                        <div class="controls" >
                            <select id="selectError3" name="publication_status" style="color:#00ffcc;">
                                
                                 <?php 
                                $pub= $v_category->publication_status;
                                if($pub==1){?>
                                     <option style="color:red;" value="1"><b>Published</b></option>
                            
                              <?php  }else{
                                 ?>
                                <option style="color:red;" value="0"><b>Unpublished</b></option>
                               
                                  <?php }?>
                            
                            <option style="color:#14de16;" value="1">Published</option>
                            <option style="color:#14de16;" value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions" style="background-color:#b6c9f6">
                        <button type="submit" class="btn btn-primary">Save Update</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   
                        <?php }?>
        </div>
    </div><!--/span-->

</div><!--/row-->
