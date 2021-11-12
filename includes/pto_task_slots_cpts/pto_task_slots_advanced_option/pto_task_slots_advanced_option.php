<div class="pto-signup-task-slots-advanced-option">
	<div class="pto-signup-task-slots-advanced-option-input">
		<div class="pto-signup-task-slots-advanced-option-radio">
			<input type="radio" name="advanced_option" class="advanced_option" value="single" checked>
			<label>This is a single task/slot</label>
		</div>
		<div class="pto-signup-task-slots-advanced-option-radio">
			<input type="radio" name="advanced_option" class="advanced_option" value="shift">
			<label>There are shifts for this task/slo</label>
		</div>
	</div>

	<div class="pto-signup-task-slots-advanced-option-input">
		<div class="pto-signup-task-slots-advanced-option-radio-single" id="advanced-option-radio-single" style="display:block">
			<div class="pto-signup-task-slots-volunteers">
				<label>How many volunteers are needed for this task/slot?</label>
				<input type="number" name="how_money_volunteers">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
			</div>
			<div class="pto-signup-task-slots-volunteers-sign_ups">
				<label>How many times can a volunteer sign up for this task/slot?</label>
				<input type="number" name="how_money_volunteers_sign_ups">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
			</div>
			<div class="pto-signup-task-slots-volunteers-sign_ups_times">
				<label>How many times can a volunteer sign up for this task/slot?</label>
				<input type="time" name="how_money_volunteers_sign_ups-times">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
			</div>

			<div class="pto-signup-task-slots-volunteers-hours-point">
				<input type="checkbox" name="pto_sign_ups_hours_point" onclick="$( '#pto-sign-ups_volunteer' ).toggle('show');">
				<label>I want to track/credit volunteers with hours or points when they sign up to this task/slot</label>
				<i class="fa fa-info-circle" aria-hidden="true"></i>
				<br>
				<div class="pto-sign-ups_volunteer" id="pto-sign-ups_volunteer" style="display:none">
					<label>Credit this shift volunteer with this many hours/points?</label>
					<input type="number" name="pto_sign_ups_hour_points">
				</div>
			</div>


			<div class="pto-signup-task-slots-volunteers-custom-fileds">
				<input type="checkbox" name="pto_sign_ups_custom_fileds" onclick="$( '#pto-sign-ups_custom-fileds' ).toggle('show');">
				<label>I want to collect custom felds for this task/slot</label>
				<i class="fa fa-info-circle" aria-hidden="true"></i>
				<br>
				<div class="pto-sign-ups_volunteer" id="pto-sign-ups_custom-fileds" style="display:none">
					
				</div>
			</div>
		</div>
		<div class="pto-signup-task-slots-advanced-option-radio-shift" id="advanced-option-radio-shift" style="display:none">
			shift
		</div>
	</div>
</div>