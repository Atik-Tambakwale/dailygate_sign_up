
var path=$("#host").val();

$("#signup_form").submit("click",function(e){
    e.preventDefault();
    if ($(this).parsley().isValid()) {
        var user_email=$("#user_email").val();
        $.ajax({
            url:path+"send_email",
            type:"POST",
            dataType:"JSON",
            data:{
                user_email
            },
            success: function (json) {
                console.log(json);
                if(json.status=="200"){
                    $("#message").html(json.msg);
                }
                else {
                    $("#message").html(json.msg);
                }
    		},
    		error: function (jqXHR, exception) {
    			toastr.error('Server Error '+jqXHR.status+' code', 'exception is '+exception+' On DailyGate Toturial View');
    	   	}
        })
    }
});
