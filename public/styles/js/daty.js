$.ajax({
            url: "?a=earnings",
            cache: false,
            success: function (html) {
				
			//Earning1
            var id_Earning1 = $(html).find('#Earning1').html();
			var setid_Earning1 = localStorage.setItem("setid_Earning1", id_Earning1);
			
			var id_Earndate1 = $(html).find('#Earndate1').html();
			var setid_Earndate1 = localStorage.setItem("setid_Earndate1", id_Earndate1);
			
						
			//Earning2
            var id_Earning2 = $(html).find('#Earning2').html();
			var setid_Earning2 = localStorage.setItem("setid_Earning2", id_Earning2);
			
			var id_Earndate2 = $(html).find('#Earndate2').html();
			var setid_Earndate2 = localStorage.setItem("setid_Earndate2", id_Earndate2);
			
			//Earning3
            var id_Earning3 = $(html).find('#Earning3').html();
			var setid_Earning3 = localStorage.setItem("setid_Earning3", id_Earning3);
			
			var id_Earndate3 = $(html).find('#Earndate3').html();
			var setid_Earndate3 = localStorage.setItem("setid_Earndate3", id_Earndate3);
			
			//Earning4
            var id_Earning4 = $(html).find('#Earning4').html();
			var setid_Earning4 = localStorage.setItem("setid_Earning4", id_Earning4);
			
			var id_Earndate4 = $(html).find('#Earndate4').html();
			var setid_Earndate4 = localStorage.setItem("setid_Earndate4", id_Earndate4);
   }
});




//Earning1
var id_get = localStorage.getItem("setid_Earning1");
var id_get2 = localStorage.getItem("setid_Earndate1");
if (localStorage.getItem("setid_Earning1") === null) {
$.get('?a=earnings', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Earning1').html();
	var neededHtml = $(receivedHtml).find('#Earndate1').html();
	
	if($(receivedHtml).find('#Earning1').length >= 1){
    //adding it to DOM
    $('#Earning1').attr('data-val',neededHtml);
	$('#Earning1').attr('data-lbl',neededHtml);
	}else{
	 $('#Earning1').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Earning1") !== 'undefined'){
//DEFINIED
$("#Earning1").attr('data-val',id_get);
$("#Earning1").attr('data-lbl',id_get2);
$("#line-chart").removeClass("hiddenx");
$("#earnchartx").removeClass("no-data");
}else{
//UNDEFINIED
$('#Earning1').attr('data-val',0);
};
//end

} 





//Earning2
var id_get = localStorage.getItem("setid_Earning2");
var id_get2 = localStorage.getItem("setid_Earndate2");
if (localStorage.getItem("setid_Earning2") === null) {
$.get('?a=earnings', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Earning2').html();
	var neededHtml = $(receivedHtml).find('#Earndate2').html();
	
	if($(receivedHtml).find('#Earning2').length >= 1){
    //adding it to DOM
    $('#Earning2').attr('data-val',neededHtml);
	$('#Earning2').attr('data-lbl',neededHtml);
	}else{
	 $('#Earning2').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Earning2") !== 'undefined'){
//DEFINIED
$("#Earning2").attr('data-val',id_get);
$("#Earning2").attr('data-lbl',id_get2);
}else{
//UNDEFINIED
$('#Earning2').attr('data-val',0);
};
//end

} 



//Earning3
var id_get = localStorage.getItem("setid_Earning3");
var id_get2 = localStorage.getItem("setid_Earndate3");
if (localStorage.getItem("setid_Earning3") === null) {
$.get('?a=earnings', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Earning3').html();
	var neededHtml = $(receivedHtml).find('#Earndate3').html();
	
	if($(receivedHtml).find('#Earning3').length >= 1){
    //adding it to DOM
    $('#Earning3').attr('data-val',neededHtml);
	$('#Earning3').attr('data-lbl',neededHtml);
	}else{
	 $('#Earning3').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Earning3") !== 'undefined'){
//DEFINIED
$("#Earning3").attr('data-val',id_get);
$("#Earning3").attr('data-lbl',id_get2);
}else{
//UNDEFINIED
$('#Earning3').attr('data-val',0);
};
//end

} 



//Earning4
var id_get = localStorage.getItem("setid_Earning4");
var id_get2 = localStorage.getItem("setid_Earndate3");
if (localStorage.getItem("setid_Earning4") === null) {
$.get('?a=earnings', function(receivedHtml) {
    //getting only the parts we need
    var neededHtml = $(receivedHtml).find('#Earning4').html();
	var neededHtml = $(receivedHtml).find('#Earndate4').html();
	
	if($(receivedHtml).find('#Earning4').length >= 1){
    //adding it to DOM
    $('#Earning4').attr('data-val',neededHtml);
	$('#Earning4').attr('data-lbl',neededHtml);
	}else{
	 $('#Earning4').attr('data-val',0);
	 };
	 
});


}else{

//start
if (localStorage.getItem("setid_Earning4") !== 'undefined'){
//DEFINIED
$("#Earning4").attr('data-val',id_get);
$("#Earning4").attr('data-lbl',id_get2);
$("#line-chart").removeClass("hiddenx");
$("#earnchartx").removeClass("no-data");
}else{
//UNDEFINIED
$('#Earning4').attr('data-val',0);
};
//end

} 

