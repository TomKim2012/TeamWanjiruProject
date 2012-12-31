			<div class="span6">
					<div class="widget">
						<div class="widget-header">
							<h3>Basic Information</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<ul class="nav nav-tabs">
								  <li class="active">
								    <a href="#1" data-toggle="tab">Profile</a>
								  </li>
								  <li><a href="#2" data-toggle="tab">Settings</a></li>
								</ul>
					<br>
	<div class="tab-content">
		<div class="tab-pane active" id="1">
		<form id="edit-profile" class="form-horizontal">							
			<fieldset>	
				<div class="control-group">											
					<label class="control-label" for="firstname">First Name</label>
					<div class="controls">
						<input type="text" class="input-medium" id="firstname" value="<?php echo $firstname;?>">
					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
										
				<div class="control-group">											
					<label class="control-label" for="lastname">Last Name</label>
					<div class="controls">
						<input type="text" class="input-medium" id="lastname" value="<?php echo $lastname;?>">
					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
				
				<div class="control-group">											
					<label class="control-label" for="username">Username</label>
					<div class="controls">
						<input type="text" class="input-medium disabled" id="username" value="<?php echo $username;?>" >
						<p class="help-block">Your profile is set to: <?php echo base_url();?>/<?php echo $username;?></p>
					</div> <!-- /controls -->		

				</div> <!-- /control-group -->
				<div class="control-group">											
					<label class="control-label" for="email">Email Address</label>
					<div class="controls">
						<input type="text" class="input-large" id="email" value="<?php echo $email;?>">
					</div> <!-- /controls -->				
				</div> <!-- /control-group -->

				<br/>
				<div class="control-group">											
					<label class="control-label" for="password1">Password</label>
					<div class="controls">
						<input type="password" class="input-medium" id="password1" value="">
					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
				
				
				<div class="control-group">											
					<label class="control-label" for="password2">Confirm</label>
					<div class="controls">
						<input type="password" class="input-medium" id="password2" value="">
					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
				
					<br />
				
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save</button> 
					<button class="btn">Cancel</button>
				</div> <!-- /form-actions -->
			</fieldset>
		</form>
		</div>

			<div class="tab-pane" id="2">
				<form id="edit-profile2" class="form-horizontal">
					<fieldset>
						<br />					
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Save</button> <button class="btn">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
			
		</div>
	</div>
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span9 -->
</div> <!-- /row -->
</div> <!-- /span9 -->
</div> <!-- /row -->

