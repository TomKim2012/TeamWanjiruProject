	<div class="span3 well">
				<div class="account-container">
					<div class="account-avatar">
						<img src="https://graph.facebook.com/<?php echo $username;?>/picture" alt="" class="thumbnail" />
					</div> <!-- /account-avatar -->
					
					<div class="account-details">
						<span class="account-name"><?php echo $name; ?></span>						
						<span class="account-actions">
							<a href="javascript:;">My Profile</a> |<a href="<?php echo base_url().'index.php/home/log_out'; ?>"> Sign out</a>
						</span>					
					</div> <!-- /account-details -->
				</div> <!-- /account-container -->
				
				<hr />				
				<ul id="main-nav" class="nav nav-tabs nav-stacked">
					<li class="active">
						<a href="<?php echo base_url();?>index.php/home/members"><i class="icon-home"></i>About TeamWanjiru</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>index.php/home/friends"><i class="icon-signal"></i>My Friends Activity</a>
					</li>
					 <li>
						<a href="<?php echo base_url();?>index.php/home/volunteer"><i class="icon-heart"></i>Volunteer</a>
					</li>
					 <li>
						<a href="<?php echo base_url();?>index.php/home/donate"><i class="icon-gift"></i>Donate</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>index.php/home/events"><i class="icon-th-list"></i>Events</a>
					</li>
					<li class="">
						<a href="grid.html"><i class="icon-th-large"></i>Notifications
						</a>
					</li>
					
					<li>
						<a href="<?php echo base_url();?>index.php/home/account"><i class="icon-user"></i>Account Settings</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>index.php/home/faqs"><i class="icon-question-sign"></i>FAQ</a>
					</li>
				</ul>	

				<div class="fb-like-box" data-href="https://www.facebook.com/pages/Hon-Bsp-Margaret-Wanjiru-for-Nairobi-Governor-2013-Mama-na-Kazi/139670692841564" data-width="190" data-height="310" data-show-faces="true" data-stream="false" data-header="false"></div>	
					<div id="fb-root"></div>
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=312795372163536";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>

				<hr>
				<div class="sidebar-extra">
					<p>Thank-you for joining Team-Wanjiru. Let's join hands in transforming Nairobi County</p>
				</div> <!-- .sidebar-extra -->
				<br />
	</div> <!-- /span3 -->