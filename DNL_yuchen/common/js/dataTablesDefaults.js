
$.extend(true, $.fn.dataTable.defaults, {
	"bStateSave": false,
	"bJQueryUI": false,
	"bPaginate": true,
	"bLengthChange": true,
	"bFilter": true,
	"bSort": true,
	"bInfo": false,
	"bAutoWidth": true,
	"iDisplayLength": 25,									
	"sPaginationType": "full_numbers",
	"sDom": 'T<"clear"><"options"flp><"clear">rt>',
	"oTableTools": {
		"sSwfPath": "/js/swf/copy_csv_xls_pdf.swf"
	},
	"oLanguage": {								
		"sLengthMenu": "_MENU_",
		"sZeroRecords": "Geen resultaten",
		"sInfo": "Showing _START_ to _END_ of _TOTAL_ records",
		"sInfoEmpty": "Showing 0 to 0 of 0 records",
		"sInfoFiltered": "(filtered from _MAX_ total records)",
		"sSearch": "",
		"oPaginate": {
			"sFirst": "&lt;&lt;",
			"sPrevious": "&lt;",
			"sNext": "&gt;",
			"sLast": "&gt;&gt;"
		}
	}
} );

$.extend( jQuery.fn.dataTableExt.oSort, {
	"date-eur-asc": function(a,b) {
		var cleanA = a.replace(/(<([^>]+)>)/ig,"");
		var cleanB = b.replace(/(<([^>]+)>)/ig,"");
		
		var dateA = cleanA.split('-');
		var dateB = cleanB.split('-');
		
		var x = (dateA[2] + dateA[1] + dateA[0]) * 1;
		var y = (dateB[2] + dateB[1] + dateB[0]) * 1;
		
		return ((x < y) ? -1 : ((x > y) ?  1 : 0));
	},
	"date-eur-desc": function(a,b) {
		var cleanA = a.replace(/(<([^>]+)>)/ig,"");
		var cleanB = b.replace(/(<([^>]+)>)/ig,"");
		
		var dateA = cleanA.split('-');
		var dateB = cleanB.split('-');
		
		var x = (dateA[2] + dateA[1] + dateA[0]) * 1;
		var y = (dateB[2] + dateB[1] + dateB[0]) * 1;
		
		return ((x < y) ? 1 : ((x > y) ?  -1 : 0));
	}
});

$.extend( jQuery.fn.dataTableExt.oSort, {
	"time-asc": function(a, b) {
		var timeA = a.split(':');
		var timeB = b.split(':');
		
		var timeAHours = parseInt(timeA[0], 10);
		var timeAMinutes = parseInt(timeA[1], 10);
		var timeBHours = parseInt(timeB[0], 10);
		var timeBMinutes = parseInt(timeB[1], 10);
		
		if(timeAHours < timeBHours){
			return 1;
		} else if (timeAHours == timeBHours){
			return ((timeAMinutes < timeBMinutes) ? 1 : (timeAMinutes > timeBMinutes) ?  -1 : 0);
		} else {
			return -1;
		}	
	},
	"time-desc": function(a, b) {
		var timeA = a.split(':');
		var timeB = b.split(':');
		
		var timeAHours = parseInt(timeA[0], 10);
		var timeAMinutes = parseInt(timeA[1], 10);
		var timeBHours = parseInt(timeB[0], 10);
		var timeBMinutes = parseInt(timeB[1], 10);
		
		if(timeAHours > timeBHours){
			return 1;
		} else if (timeAHours == timeBHours){
			return ((timeAMinutes > timeBMinutes) ? 1 : (timeAMinutes < timeBMinutes) ?  -1 : 0);
		} else {
			return -1;
		}	
	}
}); 
