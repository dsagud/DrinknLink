/** DEFAULTS **/

$.validator.setDefaults({	
	errorPlacement: function(error, element) {
		
	},
	showErrors: function(errorMap, errorList) {
		var nrOfErrors = this.numberOfInvalids();
		if(nrOfErrors > 0){			
			this.defaultShowErrors();
		}
	},
	highlight: function(input) {
		$(input).addClass("dnl-ui-form-validate-error");	
	},
	unhighlight: function(input) { 
		$(input).removeClass("dnl-ui-form-validate-error"); 
	}
});

$.datepicker.setDefaults({
   dateFormat: "dd-mm-yy",
   changeMonth: true,
   changeYear: true
});

/** DOCUMENT READY **/
$(document).ready(function(){	
	$(window).resize(function() {
		if($(window).width() <= '1140'){
			$("#header #locale-selector-list, #header #widget-apps").addClass('fixed right'); 
		} else {
			$("#header #locale-selector-list, #header #widget-apps").removeClass('fixed right');
		}
	});	
	
	$(".dnl-ui-button, .dnl-show-tooltip").tooltip({ 	
		tooltipClass: "dnl-tooltip",
		show:false,
		hide:false,
		position: {
	        my: "center top+15",
	        at: "center bottom"
	    }
	});
});

/** FUNCTIONS **/
function convertMinutesToTime(value){
	var hours = Math.floor(value / 60);
	var minutes = value - (hours * 60);

	if(hours.toString().length == 1) hours = '0' + hours;
	if(minutes.toString().length == 1) minutes = '0' + minutes;
	
	return hours + ':' + minutes;
}

function convertTimeToMinutes(value){
	var time = value.split(':'); 
	return parseInt(time[0]) * 60 + parseInt(time[1]);
}