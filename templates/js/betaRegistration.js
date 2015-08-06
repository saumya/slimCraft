// Handler Object
var iCraft = {};
iCraft.eventHandler = {
	onBetaRegisterClick : function(eventObj){
		console.log('onBetaRegisterClick',eventObj);
		console.log('onBetaRegisterClick',eventObj.data);//checking the dataObj passed
		//Get values
		var name = $("#id_name").val();
		var phone = $("#id_phone").val();
		var email = $("#id_email").val();
		var shippingAddress = $("#id_shipping").val();
		var pin = $("#id_pin").val();
		var dataToSend = { 'uName':name, 'phone':phone, 
							'email':email, 'address':shippingAddress, 'pin':pin };
		var sData = JSON.stringify(dataToSend);
		//AJAX
		$.ajax({
			type: "POST",
			contentType: 'application/json',
			url: "http://localhost:81/3_slim/1_iCraft/register_beta", //MBP
			//url: "http://localhost:8080/myDev/1_iCraft/register_beta", //Windows
			//url: "http://alphabate.hol.es/register_beta", //Hostinger
			data: sData,
			dataType: 'json',
			success: function(success){
				var r = JSON.parse(success);
				if(r.result==='SUCCESS'){
					//display User
					$("#id_alert_success").show();
					var iID = setInterval(function(){
						$("#id_alert_success").hide();
						clearInterval(iID);
					},2000);
				}else{
					alert('Something wrong happened! See console for info.');
					console.log('onSuccess : onAjaxError',success);
				}
			},
			error: function(error){
				console.log('onAjaxError',error);
			}
		});
	}
};
//ready : START
$(document).ready(function(){
	var dataObj = {'name':'DefaultData'};
	//UI intialisatioin
	$("#id_alert_success").hide();
	$("#id_alert_fail").hide();
	// Adding EventHandlers
	$("#id_btn_betaRegister").on('click',dataObj,iCraft.eventHandler.onBetaRegisterClick);
	//
});//ready : END