<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title><?php echo $this->title; ?></title>
		<?php echo $this->loadScriptFiles(); ?>
		<?php echo $this->loadCSSFiles(); ?>
		
		<script type="text/javascript">
			$(document).ready(function(){
										
			});
		</script>
		
	</head>
	<body>	
		<div id="background">
			<div id="layer-gradient"></div>			
			<div id="layer-bubbles"></div>
		</div>
					
		<?php $this->loadSnippet('localeBar.phtml'); ?>	
				
		<div id="grid-barowner" class="column-center">
			<div class="column column-1">				
				<div class="row">					
					<?php $this->loadSnippet('barOwnerMenu2.phtml');?>					
				</div>
				<div class="row">	
					<?php $this->loadSnippet('barOwnerAdminMenu.phtml');?>						
				</div>				
			</div>
			<div class="row">				
				<div class="column column-1-1">
					<div class="row dnl-section">
						<h1><?php echo $this->information['name_of_bar']; ?></h1>
						<div><label><?php echo _('ADDRESS'); ?></label><?php echo $this->information['address']; ?> <?php echo $this->information['address_number']; ?></div>
						<div><label><?php echo _('POSTAL_CODE'); ?></label><?php echo $this->information['postal_code']; ?></div>
						<div><label><?php echo _('CITY'); ?></label><?php echo $this->information['city']; ?></div>
						<div><label><?php echo _('PHONE_NUMBER'); ?></label><?php echo $this->information['phone_number']; ?></div>					
					</div>
					<div class="row dnl-section">
						<h1><?php echo _('OPENING_HOURS'); ?></h1>
						<ul><?php foreach($this->openingHours as $day=>$details): ?>
							<li><label><?php echo $details['label'] ?></label><span><?php echo $details['open']; ?> - <?php echo $details['close']; ?></span></li>
						<?php endforeach; ?></ul>					
					</div>
				</div>			
				<div class="column column-1-2">
					<div class="dnl-section">
						<h1><?php echo _('UPCOMING_EVENTS'); ?></h1>
						<ul><?php foreach($this->events as $id=>$details): ?>
							<li>
								<h2><?php echo $details['name']; ?></h2>
								<div><?php echo date('d-m-Y', strtotime($details['date'])); ?> (<?php echo date('d-m-Y', strtotime($details['start'])); ?> - <?php echo date('d-m-Y', strtotime($details['end'])); ?>)</div>
								<p><?php echo $details['description']; ?></p>															
							</li>
						<?php endforeach; ?></ul>						
					</div>						
				</div>
			</div>
			
			
			
			
		</div>
		<div id="footer">
			<div class="column-center">			
				<?php $this->loadSnippet('footer.phtml'); ?>			
			</div>		
		</div>
		<div id="designby"><?php echo _('DESIGN_BY'); ?> <strong>Snelle koppen</strong></div>
	</body>
</html>