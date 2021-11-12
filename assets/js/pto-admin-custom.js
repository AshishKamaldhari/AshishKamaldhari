/* tabination data from database */
function numberOnly(input) {
    var regex = /[^0-9]/gi;
    input.value = input.value.replace(regex, "");
}
 
$(document).ready(function() {
   var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn');
    prev = $('.prev');
    allWells.hide();
    navListItems.click(function(e) {
     e.preventDefault();
     var $target = $($(this).attr('href')),
       $item = $(this);
     if (!$item.hasClass('disabled')) {
       navListItems.removeClass('btn-primary').addClass('btn-default');
       $item.addClass('btn-primary');
       allWells.hide();
       $target.show();
       $target.find('input:eq(0)').focus();
    }
   });
   allNextBtn.click(function() {
     var curStep = $(this).closest(".setup-content"),
       curStepBtn = curStep.attr("id"),
       nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
       curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
       isValid = true;
       let ids =  $(this).closest(".setup-content").next().attr("id");
       jQuery("."+ ids).addClass("btn-circle");
      if (isValid) 
       nextStepWizard.removeAttr('disabled').trigger('click');
   });
   prev.click(function() {
       var curStep = $(this).closest(".setup-content"),
       curStepBtn = curStep.attr("id"),
       nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
       curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
       isValid = true;
       let ids =  $(this).closest(".setup-content").prev().attr("id");
       jQuery("."+ ids).addClass("btn-circle");
       jQuery("."+ curStepBtn).removeClass("btn-circle");   
     if(isValid)
       nextStepWizard.removeAttr('disabled').trigger('click');
   });
   $('div.setup-panel div a.btn-primary').trigger('click');
 });


/*publish option hide show */
jQuery(document).on("click",".publish_checked",function(){
    let publish_check = jQuery(this).val();
    if(publish_check == "specifc_publish"){
        jQuery(".specific-timezone-pto").show();
    }else{
        jQuery(".specific-timezone-pto").hide();
    }
})

/* occurence days set */
jQuery(document).on("click",".occurrence-options",function(){
  let occurrence_value = jQuery(this).val();
  if(occurrence_value == "occurrence-specific"){
    jQuery(".pto-signup-specific-days").show();
  }else{
    jQuery(".pto-signup-specific-days").hide();
  }
})

/* reecurring modal open */
jQuery(document).on("click",".open-recurrence-popup",function(){
  jQuery("#task-recurrence").addClass("pto-modal-open");
})

/* advanced option hide show */
jQuery(document).on("click",".advanced_option",function(){
  let advance_option = jQuery(this).val();
  if(advance_option == "single")
  {
    jQuery("#advanced-option-radio-single").show();
    jQuery("#advanced-option-radio-shift").hide();
  }else if(advance_option == "shift")
  {
    jQuery("#advanced-option-radio-single").hide();
    jQuery("#advanced-option-radio-shift").show();
  }
})


/* custom filed optionfiled hide show */
jQuery("#pto_field_type").change(function(){
     jQuery("#multiple_append_field").hide();
      jQuery("#multiples_button_add").hide();
      jQuery("#multiple_append_field").html("");
    let pto_filed_value = jQuery(this).val();
    if(pto_filed_value == "checkbox" || pto_filed_value == "radio" || pto_filed_value == "drop-down"){
      let html = '<div class="pto_multipalfiled"><input type="text" required name="custom-filed-key[]" placeholder="Enter Key">&nbsp;&nbsp;&nbsp;<input type="text" required name="custom-filed-value[]" placeholder="Enter value"></div>';
      jQuery("#multiple_append_field").show();
      jQuery("#multiples_button_add").show();
       jQuery("#multiple_append_field").append(html);
       jQuery("#selected_value_field").val(pto_filed_value);
    }else{
      jQuery("#multiple_append_field").hide();
      jQuery("#multiples_button_add").hide();
      jQuery("#multiple_append_field").html("");
      jQuery("#selected_value_field").val("");
    }
})

function custom_filed_add_in_field(){
     let html = '<div class="pto_multipalfiled"><input type="text" required name="custom-filed-key[]" placeholder="Enter Key">&nbsp;&nbsp;&nbsp;<input type="text" required name="custom-filed-value[]" placeholder="Enter value"><input type="button" name="remove_filed" value="remove" onclick="jQuery(this).parent().remove();remove_last_one();"></div>';
     jQuery("#multiple_append_field").append(html);

     let i = 0;
     jQuery(".pto_multipalfiled").each(function(){
      i++;
     })
     if(i > 1){
      jQuery("#remove_filed").show();
     }else{
      jQuery("#remove_filed").hide();
     }
}
function remove_last_one(){
    let i = 0;
     jQuery(".pto_multipalfiled").each(function(){
      i++;
     })
     if(i > 1){
      jQuery("#remove_filed").show();
     }else{
      jQuery("#remove_filed").hide();
     }
}
