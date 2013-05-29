		<div id="grid-events" class="column-center">
			<div class="column column-1">				
				<div class="row">					
					<?php $this->loadSnippet('barOwnerMenu2.phtml');?>					
				</div>	
				<div class="row">	
					<?php $this->loadSnippet('barOwnerAdminMenu.phtml');?>						
				</div>
				
				<div class="row">
					<div id="tab">
						<ul>
							<li class="active"><a href="/<?php echo $this->route;?>/info">Bar info</a></li>
							<li class=""><a href="/<?php echo $this->route;?>/events"><?php echo _('EVENTS_AND_PROMOTIONS'); ?></a></li>
							<li class=""><a href="#">Social media</a></li>
							<li class=""><a href="#">Reserve or Book</a></li>			
						</ul>
						<div>
							<?php $this->loadSnippet($this->contentSnippet); ?>						
						</div>
					</div>
				</div>							
			</div>
			<?php /*
			<div class="row">				
				<div class="column column-1-1">
					<div class="dnl-section">
						<h1><?php echo _('NEW'); ?></h1>
						<form id="frm-event" class="dnl-ui-form" action="/<?php echo $this->route; ?>/eventadd" method="post">
							<fieldset>
								<ul>
									<li><label><?php echo _('NAME'); ?></label><input name="name" type="text" /></li>
									<li><label><?php echo _('DATE'); ?></label><input name="date" type="text" class="dnl-datepicker" /></li>
									<li>
										<label><?php echo _('TIME'); ?></label>
										<span id="time-start"></span> - <span id="time-end"></span>
									</li>
									<li>
										<label></label>								
										<div id="time-range"></div>
										<input type="hidden" id="hidden-time-start" name="start" />									
										<input type="hidden" id="hidden-time-end" name="end" />									
									</li>								
									<li><label><?php echo _('DESCRIPTON'); ?></label><textarea name="description"></textarea></li>
									<li><label></label><button type="submit" class="dnl-ui-button dnl-ui-button-black"><h2><?php echo _('ADD'); ?></h2></button></li>
								</ul>
							</fieldset>											
						</form>
					</div>					
				</div>			
				<div class="column column-1-2">						
					<div class="dnl-section">
						<h1><?php echo _('EVENTS_AND_PROMOTIONS'); ?></h1>
						<table id="tbl-events" class="display">
							<thead>
								<tr>
									<th><?php echo _('DATE'); ?></th>
									<th><?php echo _('START'); ?></th>
									<th><?php echo _('STOP'); ?></th>
									<th><?php echo _('NAME'); ?></th>									
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>							
							<?php foreach($this->events as $id=>$details): ?>
								<tr>
									<td class="nobr"><?php echo date('d-m-Y', strtotime($details['date'])); ?></td>
									<td><?php echo date('H:i', strtotime($details['start'])); ?></td>
									<td><?php echo date('H:i', strtotime($details['end'])); ?></td>
									<td class="full" title="<?php echo $details['description']; ?>"><?php echo $details['name']; ?></td>
									<td><a href="#"><?php echo _('EDIT'); ?></a>
									<td><a href="/<?php echo $this->route; ?>/eventdelete/<?php echo $id; ?>"/><?php echo _('DELETE'); ?></a></td>							
								</li>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>	*/ ?>		
		</div>
		<div id="footer">
			<div class="column-center">			
				<?php $this->loadSnippet('footer.phtml'); ?>			
			</div>		
		</div>
		<div id="designby"><?php echo _('DESIGN_BY'); ?> <strong>Snelle koppen</strong></div>
	</body>
</html>