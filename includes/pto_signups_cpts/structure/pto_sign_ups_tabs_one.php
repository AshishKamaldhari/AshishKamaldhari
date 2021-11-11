<div class="pto-sign-up-compelling-descreption">
	<div class="pto-sign-up-compelling-desc">
		<div class="pto-sign-up-compelling-descreption-title">
			<h4>Add a compelling sign up description (optional) <i class="fa fa-info-circle" aria-hidden="true"></i></h4>
		</div>
		<div class="pto-sign-up-compelling-descreption-textarea">
			<?php 
				$content = "";
			  wp_editor($content, 'signupdescreption', $settings = array(
		            'textarea_name' => 'signupdescreption',
		            'textarea_rows' => 10
		        ));
			?>
		</div>
	</div>
	<div class="pto-sign-up-compelling-address_areas">
		<div class="pto-sign-up-compelling-descreption-title">
			<h4>Add a location for this sign up (optional)</h4>
		</div>
		<div class="pto-sign-up-compelling-descreption-textarea">
			<input type="text" name="address1" placeholder="address1">
			<input type="text" name="address2" placeholder="address2" >
			<div class="pto_signup_areas">
				<input type="text" name="city" placeholder="city" >
				<input type="text" name="state" placeholder="state" >
				<input type="text" name="postalcode" placeholder="postcode" >
			</div>
		</div>
	</div>
	<div class="pto-sign-up-compelling-address_live_published">
		<div class="pto-sign-up-compelling-live_published-title">
			<h4>Choose when your sign up should go live / be published</h4>
		</div>
		<div class="pto-sign-up-compelling-live_published_details">
			<input type="radio" name="publish_date" class="publish_checked" value="immediately_publish" checked>		
			<label>Open my sign up immediately after I click PUBLISH</label>
			<br>
			<input type="radio" name="publish_date" value="specifc_publish" class="publish_checked">		
			<label>Open my sign up at a specifc day and time after I click PUBLISH</label>
			<div class="specific-timezone-pto" style="display:none">
				<div class="open-time-zone">
					<label>OPEN</label>
					<input type="date" name="opendate">at
					<input type="time" name="opentime">
				</div>
				<div class="close-time-zone">
					<label>CLOSE</label>
					<input type="date" name="closedate">at
					<input type="time" name="closetime">
				</div>
			</div>
		</div>
	</div>
</div>