		<div id="grid-barowner" class="column-center">
			<div class="column column-1">				
				<div class="row">					
					<div id="barowner-menu" class="dnl-ui-rounded-corners dnl-ui-gradient-1">
						<div>
							<a href=""><span class="dnl-ui-sprite-user logo"></span></a>
						</div>
						<div>
							<div><?php echo $this->lang->line('main_LOGGED_IN_AS'); ?></div>
							<div><h1><?php //echo $this->clean($this->information['name_of_bar']); ?></h1></div>
							<div id="user-menu-settings">
								<ul>
									<li><span class="dnl-ui-sprite-user settings"></span><a href="/settings"><?php echo $this->lang->line('main_SETTINGS'); ?></a></li>
									<li><hr/></li>
									<li><span class="dnl-ui-sprite-user profile"></span><a href=""><?php echo $this->lang->line('main_EDIT_PROFLE'); ?></a></li>
								</ul>
							</div>					
						</div>
						<div>
							<a href="/events" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite plus"></span></span><label><?php echo $this->lang->line('main_BUTTON_EVENTS'); ?></label></a>							
						</div>
						<div>
							<a href="" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite-user notifications"></span></span><label><?php echo $this->lang->line('main_BUTTON_USER_NOTIFICATIONS'); ?></label></a>					
						</div>
						<div>
							<a href="" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite-user messages"></span></span><label><?php echo $this->lang->line('main_BUTTON_MESSAGES'); ?><div id="message-status">1 <?php echo $this->lang->line('main_MESSAGE_NEW'); ?>, 3 <?php echo $this->lang->line('main_MESSAGE_UNREAD'); ?></div></label></a>							
						</div>
						<div>
							<a href="" class="dnl-ui-button"><span class="icon-container"n><span class="dnl-ui-sprite-user fanpage"></span></span><label><?php echo $this->lang->line('main_BUTTON_ADD_FAN_PAGE_FOR_A_BAR'); ?></label></a>							
						</div>
						<div>
							<a href="" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite-user friends"></span></span><label><?php echo $this->lang->line('main_BUTTON_MY_DNL_FRIENDS'); ?></label></a>							
						</div>
						<div>
							<a href="" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite-user bars-and-drinks"></span></span><label><?php echo $this->lang->line('main_BUTTON_MY_BARS_AND_DRINKS'); ?><label></a>							
						</div>
						<div>
							<a href="/auth/logout" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite-user logout"></span></span><label><?php echo $this->lang->line('main_BUTTON_LOGOUT'); ?></label></a>							
						</div>					
					</div>				
				</div>				
			</div>
			<div class="row">				
				<div class="column column-1-1">
					<h1>Settings</h1>
				</div>			
				<div class="column column-1-2">						
					jj						
				</div>
			</div>
		</div>
