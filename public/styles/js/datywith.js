$.ajax({
            url: "?a=withdraw_history",
            cache: false,
            success: function (html) {
				
			//Withdra1
            var id_Withdra1 = $(html).find('#Withdra1').html();
			var setid_Withdra1 = localStorage.setItem("setid_Withdra1", id_Withdra1);
			
			var id_Withdradate1 = $(html).find('#Withdradate1').html();
			var setid_Withdradate1 = localStorage.setItem("setid_Withdradate1", id_Withdradate1);
			
						
			//Withdra2
            var id_Withdra2 = $(html).find('#Withdra2').html();
			var setid_Withdra2 = localStorage.setItem("setid_Withdra2", id_Withdra2);
			
			var id_Withdradate2 = $(html).find('#Withdradate2').html();
			var setid_Withdradate2 = localStorage.setItem("setid_Withdradate2", id_Withdradate2);
			
			//Withdra3
            var id_Withdra3 = $(html).find('#Withdra3').html();
			var setid_Withdra3 = localStorage.setItem("setid_Withdra3", id_Withdra3);
			
			var id_Withdradate3 = $(html).find('#Withdradate3').html();
			var setid_Withdradate3 = localStorage.setItem("setid_Withdradate3", id_Withdradate3);
			
			//Withdra4
            var id_Withdra4 = $(html).find('#Withdra4').html();
			var setid_Withdra4 = localStorage.setItem("setid_Withdra4", id_Withdra4);
			
			var id_Withdradate4 = $(html).find('#Withdradate4').html();
			var setid_Withdradate4 = localStorage.setItem("setid_Withdradate4", id_Withdradate4);
   }
});




//Withdra1
var id_get = localStorage.getItem("setid_Withdra1");
var id_get2 = localStorage.getItem("setid_Withdradate1");
if (localStorage.getItem("setid_Withdra1") === null) {
$.get('?a=withdraw_history', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Withdra1').html();
	var neededHtml = $(receivedHtml).find('#Withdradate1').html();
	
	if($(receivedHtml).find('#Withdra1').length >= 1){
    //adding it to DOM
    $('#Withdra1').attr('data-val',neededHtml);
	$('#Withdra1').attr('data-lbl',neededHtml);
	}else{
	 $('#Withdra1').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Withdra1") !== 'undefined'){
//DEFINIED
$("#Withdra1").attr('data-val',id_get);
$("#Withdra1").attr('data-lbl',id_get2);
$("#withdraw-chart").removeClass("hiddenx");
$("#withchartx").removeClass("no-data");
}else{
//UNDEFINIED
$('#Withdra1').attr('data-val',0);
};
//end

} 





//Withdra2
var id_get = localStorage.getItem("setid_Withdra2");
var id_get2 = localStorage.getItem("setid_Withdradate2");
if (localStorage.getItem("setid_Withdra2") === null) {
$.get('?a=withdraw_history', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Withdra2').html();
	var neededHtml = $(receivedHtml).find('#Withdradate2').html();
	
	if($(receivedHtml).find('#Withdra2').length >= 1){
    //adding it to DOM
    $('#Withdra2').attr('data-val',neededHtml);
	$('#Withdra2').attr('data-lbl',neededHtml);
	}else{
	 $('#Withdra2').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Withdra2") !== 'undefined'){
//DEFINIED
$("#Withdra2").attr('data-val',id_get);
$("#Withdra2").attr('data-lbl',id_get2);
}else{
//UNDEFINIED
$('#Withdra2').attr('data-val',0);
};
//end

} 



//Withdra3
var id_get = localStorage.getItem("setid_Withdra3");
var id_get2 = localStorage.getItem("setid_Withdradate3");
if (localStorage.getItem("setid_Withdra3") === null) {
$.get('?a=withdraw_history', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Withdra3').html();
	var neededHtml = $(receivedHtml).find('#Withdradate3').html();
	
	if($(receivedHtml).find('#Withdra3').length >= 1){
    //adding it to DOM
    $('#Withdra3').attr('data-val',neededHtml);
	$('#Withdra3').attr('data-lbl',neededHtml);
	}else{
	 $('#Withdra3').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Withdra3") !== 'undefined'){
//DEFINIED
$("#Withdra3").attr('data-val',id_get);
$("#Withdra3").attr('data-lbl',id_get2);
}else{
//UNDEFINIED
$('#Withdra3').attr('data-val',0);
};
//end

} 



//Withdra4
var id_get = localStorage.getItem("setid_Withdra4");
var id_get2 = localStorage.getItem("setid_Withdradate3");
if (localStorage.getItem("setid_Withdra4") === null) {
$.get('?a=withdraw_history', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Withdra4').html();
	var neededHtml = $(receivedHtml).find('#Withdradate4').html();
	
	if($(receivedHtml).find('#Withdra4').length >= 1){
    //adding it to DOM
    $('#Withdra4').attr('data-val',neededHtml);
	$('#Withdra4').attr('data-lbl',neededHtml);
	}else{
	 $('#Withdra4').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Withdra4") !== 'undefined'){
//DEFINIED
$("#Withdra4").attr('data-val',id_get);
$("#Withdra4").attr('data-lbl',id_get2);
$("#withdraw-chart").removeClass("hiddenx");
$("#withchartx").removeClass("no-data");
}else{
//UNDEFINIED
$('#Withdra4').attr('data-val',0);
};
//end

} 

