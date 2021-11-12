  <div id="task-recurrence" class="pto-modal">
            <div class="pto-modal-content">
                <div class="pto-modal-container-header">
                    <span>Task Recurrence</span>
                <span onclick="jQuery('#task-recurrence').removeClass('pto-modal-open');" class="w3-button w3-display-topright">&times;</span>
                </div>
              <div class="pto-modal-container">
                <div class="pto-update-recurrence-details">
                    <h4>Custom recurrence</h4>
                    <div class="pto-sign-up-div-repeate-every">
                        <label>Repeat every</label>
                        <input type="number" name="daysofevery" value="1" min="1">
                        <select class="pto-sign-up-div-repeate-time">
                            <option>Day</option>
                            <option>Weeks</option>
                            <option>Month</option>
                            <option>Year</option>
                        </select>
                    </div>
                </div>
                <div class="pto-update-recurrence-repeat_on_month" id="pto-recurring-month">
                    <select name="pto-signup-reucr-month">
                        <option>Monthly on day 12</option>
                        <option>Monthly on the second Friday</option>
                    </select>
                </div>
                <div class="pto-update-recurrence-repeat_on" id="pto-recurring-week">
                     <label>Repeat on</label>
                     <?php
                     $today = date("D");
                   
                      ?>
                     <div class="pto-sign-up-radio-days-recurrence" id="pto-days-recurring">
                         <div class="pto-sign-up-radio-days-recurrence-single">
                            <input type="checkbox" name="pto_recurring_week[]" id="Sunday" <?php if($today == "Sun"){ echo "checked"; } ?>>
                            <label for="Sunday">S</label>
                         </div>
                         <div class="pto-sign-up-radio-days-recurrence-single">
                            <input type="checkbox" name="pto_recurring_week[]" id="Monday" <?php if($today == "Mon"){ echo "checked"; } ?>>
                            <label for="Monday">M</label>
                         </div>
                         <div class="pto-sign-up-radio-days-recurrence-single">
                            <input type="checkbox" name="pto_recurring_week[]" id="Tuesday" <?php if($today == "Tue"){ echo "checked"; } ?>>
                            <label for="Tuesday">T</label>
                         </div>
                         <div class="pto-sign-up-radio-days-recurrence-single">
                            <input type="checkbox" name="pto_recurring_week[]" id="Wednesday" <?php if($today == "Wed"){ echo "checked"; } ?>>
                            <label for="Wednesday">W</label>
                         </div>
                         <div class="pto-sign-up-radio-days-recurrence-single">
                            <input type="checkbox" name="pto_recurring_week[]" id="Thursday" <?php if($today == "Thu"){ echo "checked"; } ?>>
                            <label for="Thursday">T</label>
                         </div>
                         <div class="pto-sign-up-radio-days-recurrence-single">
                            <input type="checkbox" name="pto_recurring_week[]" id="Friday" <?php if($today == "Fri"){ echo "checked"; } ?> >
                            <label for="Friday">F</label>
                         </div>
                         <div class="pto-sign-up-radio-days-recurrence-single">
                            <input type="checkbox" name="pto_recurring_week[]" id="Saturday" <?php if($today == "Sat"){ echo "checked"; } ?>>
                            <label for="Saturday">S</label>
                         </div>
                     </div>
                </div>
                <div class="pto-update-recurrence-details">
                    <h4>Ends</h4>
                    <div class="pto-signup-rcurring-end">
                        <div class="pto-signup-rcurring-end-radio">
                            <input type="radio" name="endogrecurr" checked="">
                            <label>Never</label>
                        </div>
                        <div class="pto-signup-rcurring-end-radio">
                            <input type="radio" name="endogrecurr">
                            <label>ON</label>
                            <div class="pto-signup-rcurring-end-radio-extra" id="endogrecurr_on">
                                <?php
                                $d = date('Y-m-d');
                                ?>
                                <input type="date" name="date" value="<?php  echo $d; ?>" min="<?php  echo $d; ?>">
                            </div>
                        </div>  
                        <div class="pto-signup-rcurring-end-radio">
                            <input type="radio" name="endogrecurr">
                            <label>After</label>
                            <div class="pto-signup-rcurring-end-radio-extra" id="endogrecurr_after">
                                <input type="number" name="after_days" value="">
                                <span>occurrences</span>
                            </div>
                        </div>  
                    </div>
                </div>
              </div>
              <div class="pto-modal-footer">
                <input type="button" name="ok" value="submit" class="add_new outline_btn" onclick="jQuery('#task-recurrence').removeClass('pto-modal-open');">
                <input type="button" name="cancel" value="Cancel" class="add_new outline_btn" onclick="jQuery('#task-recurrence').removeClass('pto-modal-open');">
              </div>
            </div>
          </div>