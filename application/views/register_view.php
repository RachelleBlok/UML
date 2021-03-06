	<div class="large-12 columns padding">

				<h2>Register New Student</h2>

			<?php if (! empty($message)) { ?>
				<div id="message">
					<?php echo $message; ?>
				</div>
			<?php } ?>
							
				<?php echo form_open(current_url()); ?>  	
					
						<h3>Personal Details</h3>
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
					
					
				
					<h3>Login Details</h3>
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
						<li class="info_req">
							<label for="password">Password: <i>has been generated randomly and will be mailed to user</i></label>
							<input type="password" id="password" name="register_password" value="<?php echo set_value('register_password', random_string('alnum', 13));?>"/>
						</li>		
					</ul>
					<input type="submit" name="register_user" id="submit" value="Submit" class="small button"/>
				
				<?php echo form_close();?>
			
				
	</div> <!-- end large 12 columns -->	