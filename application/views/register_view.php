	<div class="large-12 columns padding">

				<h2>Register Account</h2>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
			
				<?php echo form_open(current_url()); ?>  	
					<fieldset>
						<legend>Personal Details</legend>
						<ul>
							<li class="info_req">
								<label for="first_name">First Name:</label>
								<input type="text" id="first_name" name="register_first_name" value="<?php echo set_value('register_first_name');?>"/>
							</li>
							<li class="info_req">
								<label for="last_name">Last Name:</label>
								<input type="text" id="last_name" name="register_last_name" value="<?php echo set_value('register_last_name');?>"/>
							</li>
						</ul>
					</fieldset>
					
					<fieldset>
						<legend>Login Details</legend>
						<ul>
							<li class="info_req">
								<label for="email_address">Email Address:</label>
								<input type="text" id="email_address" name="register_email_address" value="<?php echo set_value('register_email_address');?>" class="tooltip_trigger"
									title="This demo requires that upon registration, you will need to activate your account via clicking a link that is sent to your email address."
								/>
							</li>
							<li class="info_req">
								<label for="username">Username:</label>
								<input type="text" id="username" name="register_username" value="<?php echo set_value('register_username');?>" class="tooltip_trigger"
									title="Set a username that can be used to login with."
								/>
							</li>
							</li>
							<li class="info_req">
								<label for="class">Student Class:</label>
								<select id="class" name="register_class" class="tooltip_trigger"
									title="Set the students class.">
								<?php foreach($classes as $class) { ?>
									<option value="<?php echo $class[$this->flexi_auth->db_column('student_class', 'id')];?>" >
										<?php echo $class[$this->flexi_auth->db_column('student_class', 'name')];?>
									</option>
								<?php } ?>
								</select>
							</li>
							<br><br>
							<li>
								<label for="class">Register with random password:</label>
								<input type="checkbox" id="passwordcheckbox" value="1" name="register_random_password" checked="checked"> 
							</li>
							<li class="password_textbox">
								<label for="password">Password:</label>
								<input type="password" id="password" name="register_password" value="<?php echo set_value('register_password');?>" disabled/>
							</li>
							<li class="password_confirm_textbox">
								<label for="confirm_password">Confirm Password:</label>
								<input type="password" id="confirm_password" name="register_confirm_password" value="<?php echo set_value('register_confirm_password');?>" disabled/>
							</li>				
						</ul>
						<input type="submit" name="register_user" id="submit" value="Submit" class="small button"/>
					</fieldset>
					

				<?php echo form_close();?>
	</div> <!-- end large 12 columns -->
<script type="text/javascript">
$('#passwordcheckbox').change(function(){
    if ($('#passwordcheckbox').is(':checked') == true){
      $('#password').prop('disabled', true);
      $('#confirm_password').prop('disabled', true);
      console.log('checked');
   } else {
     $('#password').prop('disabled', false);
     $('#confirm_password').prop('disabled', false);
     console.log('unchecked');
   }

});
</script>