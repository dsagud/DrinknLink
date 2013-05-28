		<div class="column-center">
			<div id="grid-login" class="column-center">
			<div class="column column-1">				
				<div class="row">
					<div class="column column-1-1">
						<div class="dnl-section">
							<form id="frm-register" class="form-needs-validation dnl-ui-form">
								<fieldset>
									<h1><?php echo _('REGISTER'); ?></h1>
									<h2><?php echo _('FREE_USER_ACCOUNT'); ?></h2>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<a href="/registerfree" id="register-free" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite plus"></span></span><label><?php echo _('CREATE_FREE_USER_ACCOUNT'); ?></label></a>
									<h2><?php echo _('BAR_OWNER'); ?></h2>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<a href="/registerbar" id="register-barowner" class="dnl-ui-button"><span class="icon-container"><span class="dnl-ui-sprite plus"></span></span><label><?php echo _('REGISTER_AS_BAR_OWNER'); ?></label></a>									
								</fieldset>													
							</form>
						</div>
					</div>			
					<div class="column column-1-2">						
						<div class="dnl-section">
							<form id="frm-login" class="form-needs-validation dnl-ui-form" action="/auth/login/barowner" method="post">
								<fieldset>
									<h1><?php echo _('LOGIN'); ?></h1>
									<?php if($this->model->getLoginError()): ?>
										<h2><?php echo _('LOGIN_ERROR'); ?></h2>
									<?php endif; ?>
									<ul>
										<li><label><?php echo _('EMAIL_OR_USERNAME'); ?></label><input name="username" type="text" tabindex="1" /></li>									
										<li><label><?php echo _('PASSWORD'); ?></label><input type="password" name="password" tabindex="2" /></li>
										<li><label></label><button type="submit" class="dnl-ui-button"><?php echo _('LOGIN'); ?></button></li>																							
									</ul>									
								</fieldset>													
							</form>	
						</div>					
					</div>
					<div class="dnl-ui-clearfix"></div>
				</div>
				
			</div>
			<div class="column column-2">
				<div class="row">
					<div class="advert"></div>
				</div>
				<div class="row">
					<div class="advert"></div>
				</div>
				<div class="row">
					<div class="advert"></div>
				</div>
			</div>
			<?php $this->loadSnippet('footerSocialMedia.phtml'); ?>
		</div>	
		
		<div id="footer">
			<div class="column-center">			
				<?php $this->loadSnippet('footer.phtml'); ?>			
			</div>		
		</div>
		<div id="designby"><?php echo _('DESIGN_BY'); ?> <strong>Snelle koppen</strong></div>
	</body>
</html>	

			
	

			
	