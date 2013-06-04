/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    $('#maximizeBtn').hide();
    $("#minimizeBtn").click(function() {
        $("#choiceDiv").hide("fast");
        $("#maximizeBtn").show("slow");
    });
    $("#maximizeBtn").click(function() {
        $("#choiceDiv").show("fast");
        $("#maximizeBtn").hide("slow");
    });
});

$(document).ready(function() {
    $("ul.pagination3").quickPagination({pagerLocation: "before", pageSize: "3"});
});

$(function(){
  dateSelector=$("#calendarFilterBox").calendarPicker({
    monthNames:["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    dayNames: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
    useWheel:false,
    callbackDelay:500,
    years:1,
    months:6,
    days:15,
    showDayArrows:true,
    callback:function(cal){
       $("#mydate").html(cal.currentDate+"");
  }});
});

(function($) {
    $(window).load(function() {
        $(".content").mCustomScrollbar({
            theme: "dark"
        });
    });
})(jQuery);


