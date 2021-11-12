<?php 

    global $post;
        $pto_field_type = "";
        $pto_field_type = get_post_meta($post->ID,"pto_field_type",true);
		$store_data = get_post_meta($post->ID,"selected_value_field",true);
            	
?>  
     <select name="pto_field_type" id="pto_field_type">
         <option value="text" <?php if($pto_field_type == "text"){ echo "selected"; } ?>>Text</option>
         <option value="text-area" <?php if($pto_field_type == "text-area"){ echo "selected"; } ?>>Textarea</option>
         <option value="number" <?php if($pto_field_type == "number"){ echo "selected"; } ?>>Number</option>
         <option value="checkbox" <?php if($pto_field_type == "checkbox"){ echo "selected"; } ?>>Checkbox</option>
         <option value="radio"  <?php if($pto_field_type == "radio"){ echo "selected"; } ?>>Radio</option>
         <option value="drop-down"  <?php if($pto_field_type == "drop-down"){ echo "selected"; } ?>>Drop Down</option>
     </select>

     <div class="pto_add_multipale_field">
            <input type="hidden" name="selected_value_field" id="selected_value_field" value="<?php echo $pto_field_type; ?>">
            <div id="multiple_append_field" style="<?php  if($pto_field_type == "checkbox" || $pto_field_type == "radio" || $pto_field_type == "drop-down"){ echo "display: block"; }else{ echo "display: none"; } ?>" >
           <?php 
           	foreach ($store_data as $key => $value) {
           		$i=0;
           		foreach($value as $key2 => $value2){
           			?>
           			<div class="pto_multipalfiled"><input type="text" required="" value="<?php echo $key2; ?>" name="custom-filed-key[]" placeholder="Enter Key">&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $value2; ?>" required="" name="custom-filed-value[]" placeholder="Enter value">&nbsp;
           				<input type="button" name="remove_filed" id="remove_filed" value="remove" onclick="jQuery(this).parent().remove();remove_last_one();">
           				
           			
           			</div>
           				<?php
           			$i++;
           		}
           		
           	}
           ?>
            </div>
            <div id="multiples_button_add" style="<?php  if($pto_field_type == "checkbox" || $pto_field_type == "radio" || $pto_field_type == "drop-down"){ echo "display: block"; }else{ echo "display: none"; } ?>">
                <input type="button" name="add_button_fields" id="add_button_fields" value="Add" onclick="custom_filed_add_in_field()">
                  
            </div>

        </div>
     <?php 
 	wp_reset_postdata();