<div class="stepwizard col-md-offset-3">
      <div class="stepwizard-row setup-panel">
         <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-circle btn-default1 btn-primary" style="display: none;">1</a>
            <p class="step-1 btn-circle">Basics</p>
         </div>
         <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default1 btn-circle" disabled="disabled" style="display: none;">2</a>
            <p class="step-2">Tasks/Slots</p>
         </div>
          <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default1 btn-circle" disabled="disabled" style="display: none;">3</a>
            <p class="step-3">Advanced Options</p>
         </div>
      </div>
   </div>
<div class=" col-md-offset-12" style="display: flex;">

      <div class="row setup-content" id="step-1" style="display: block;">
         <div class="col-md-12" >
            <?php include "pto_sign_ups_tabs_one.php"; ?>
         </div>
         
         <div class="col-md-12">
               <button class="nextBtn" type="button">Next</button>
         </div>
      </div>
      <div class="row setup-content" id="step-2" style="display: none;">
         <div class="col-md-6">
            <div class="col-md-12">
                    <?php include "pto_sign_ups_tabs_two.php"; ?>
            </div>
             <div class="col-md-12">
               <button id="next" class="nextBtn" type="button">next</button>
               <button id="prev" class="prev" type="button">Prev</button>
            </div>
         </div>
      </div>
         <div class="row setup-content" id="step-3" style="display: none;">
         <div class="col-md-6">
            <div class="col-md-12">
               
               <button id="prev" class="prev" type="button">Prev</button>

            </div>
         </div>
      </div>
</div>