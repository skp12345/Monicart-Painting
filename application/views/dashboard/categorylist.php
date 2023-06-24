<div class="mt-3">
<table class="table table-bordered">
            <tr>
                <th>SNO</th>
                <th>Cotegory</th>
                <th>Action</th>
            </tr>
            <?php
           $category_list=$this->db->get('image_category');
           foreach ($category_list->result() as $category) 
           { ?>
           <tr>
                <td><?php echo $category->category_id;?></td>
                <td><?php echo $category->category;?></td>         
                <td><a href="<?php echo site_url()?>Image_operation/delete_category_process/<?php echo $category->category_id;?>" class="btn btn-danger w-100 btn-xs">Delete</a></td>
                </tr>
                <?php } 
           ?>
           </table>
</div>