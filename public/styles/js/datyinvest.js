$.ajax({
            url: "?a=deposit_history",
            cache: false,
            success: function (html) {
				
			//Invest1
            var id_Invest1 = $(html).find('#Invest1').html();
			var setid_Invest1 = localStorage.setItem("setid_Invest1", id_Invest1);
			
			var id_Investdate1 = $(html).find('#Investdate1').html();
			var setid_Investdate1 = localStorage.setItem("setid_Investdate1", id_Investdate1);
			
						
			//Invest2
            var id_Invest2 = $(html).find('#Invest2').html();
			var setid_Invest2 = localStorage.setItem("setid_Invest2", id_Invest2);
			
			var id_Investdate2 = $(html).find('#Investdate2').html();
			var setid_Investdate2 = localStorage.setItem("setid_Investdate2", id_Investdate2);
			
			//Invest3
            var id_Invest3 = $(html).find('#Invest3').html();
			var setid_Invest3 = localStorage.setItem("setid_Invest3", id_Invest3);
			
			var id_Investdate3 = $(html).find('#Investdate3').html();
			var setid_Investdate3 = localStorage.setItem("setid_Investdate3", id_Investdate3);
			
			//Invest4
            var id_Invest4 = $(html).find('#Invest4').html();
			var setid_Invest4 = localStorage.setItem("setid_Invest4", id_Invest4);
			
			var id_Investdate4 = $(html).find('#Investdate4').html();
			var setid_Investdate4 = localStorage.setItem("setid_Investdate4", id_Investdate4);
   }
});




//Invest1
var id_get = localStorage.getItem("setid_Invest1");
var id_get2 = localStorage.getItem("setid_Investdate1");
if (localStorage.getItem("setid_Invest1") === null) {
$.get('?a=deposit_history', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Invest1').html();
	var neededHtml = $(receivedHtml).find('#Investdate1').html();
	
	if($(receivedHtml).find('#Invest1').length >= 1){
    //adding it to DOM
    $('#Invest1').attr('data-val',neededHtml);
	$('#Invest1').attr('data-lbl',neededHtml);
	}else{
	 $('#Invest1').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Invest1") !== 'undefined'){
//DEFINIED
$("#Invest1").attr('data-val',id_get);
$("#Invest1").attr('data-lbl',id_get2);
$("#invest-chart").removeClass("hiddenx");
$("#invchartx").removeClass("no-data");
}else{
//UNDEFINIED
$('#Invest1').attr('data-val',0);
};
//end

} 





//Invest2
var id_get = localStorage.getItem("setid_Invest2");
var id_get2 = localStorage.getItem("setid_Investdate2");
if (localStorage.getItem("setid_Invest2") === null) {
$.get('?a=deposit_history', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Invest2').html();
	var neededHtml = $(receivedHtml).find('#Investdate2').html();
	
	if($(receivedHtml).find('#Invest2').length >= 1){
    //adding it to DOM
    $('#Invest2').attr('data-val',neededHtml);
	$('#Invest2').attr('data-lbl',neededHtml);
	}else{
	 $('#Invest2').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Invest2") !== 'undefined'){
//DEFINIED
$("#Invest2").attr('data-val',id_get);
$("#Invest2").attr('data-lbl',id_get2);
}else{
//UNDEFINIED
$('#Invest2').attr('data-val',0);
};
//end

} 



//Invest3
var id_get = localStorage.getItem("setid_Invest3");
var id_get2 = localStorage.getItem("setid_Investdate3");
if (localStorage.getItem("setid_Invest3") === null) {
$.get('?a=deposit_history', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Invest3').html();
	var neededHtml = $(receivedHtml).find('#Investdate3').html();
	
	if($(receivedHtml).find('#Invest3').length >= 1){
    //adding it to DOM
    $('#Invest3').attr('data-val',neededHtml);
	$('#Invest3').attr('data-lbl',neededHtml);
	}else{
	 $('#Invest3').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Invest3") !== 'undefined'){
//DEFINIED
$("#Invest3").attr('data-val',id_get);
$("#Invest3").attr('data-lbl',id_get2);
}else{
//UNDEFINIED
$('#Invest3').attr('data-val',0);
};
//end

} 



//Invest4
var id_get = localStorage.getItem("setid_Invest4");
var id_get2 = localStorage.getItem("setid_Investdate3");
if (localStorage.getItem("setid_Invest4") === null) {
$.get('?a=deposit_history', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Invest4').html();
	var neededHtml = $(receivedHtml).find('#Investdate4').html();
	
	if($(receivedHtml).find('#Invest4').length >= 1){
    //adding it to DOM
    $('#Invest4').attr('data-val',neededHtml);
	$('#Invest4').attr('data-lbl',neededHtml);
	}else{
	 $('#Invest4').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Invest4") !== 'undefined'){
//DEFINIED
$("#Invest4").attr('data-val',id_get);
$("#Invest4").attr('data-lbl',id_get2);
$("#invest-chart").removeClass("hiddenx");
$("#invchartx").removeClass("no-data");
}else{
//UNDEFINIED
$('#Invest4').attr('data-val',0);
};
//end

} 

