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
     
     $(".form-group").removeClass("has-error");
     for (var i = 0; i < curInputs.length; i++) {
       console.log(curInputs);
       if (!curInputs[i].validity.valid) {
         isValid = false;
         $(curInputs[i]).closest(".form-group").addClass("has-error");
       }
     }

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
     $(".form-group").removeClass("has-error");
     for (var i = 0; i < curInputs.length; i++) {
       console.log(curInputs);
       if (!curInputs[i].validity.valid) {
         isValid = false;
         $(curInputs[i]).closest(".form-group").addClass("has-error");
       }
     }

     if (isValid)
       nextStepWizard.removeAttr('disabled').trigger('click');
   });

   $('div.setup-panel div a.btn-primary').trigger('click');
 });