
/*SIGN UP DIV TO DISSAPEAR*/
$(document).ready(function () {
	$("#loginform").hide();
	$("#signin").click(function () {
		$("#signupform").hide();
		$("#loginform").show();


	});
	
	$("#signingup").click(function () {

		$("#loginform").hide();
		$("#signupform").show();
	});


	$('#username').blur(function () {

		var username = $(this).val();

		$.ajax({
			url: 'check.php',
			method: "POST",
			data: { user_name: username },
			success: function (data) {
				if (data != '0') {
					$('#availability').html('<span class="text-danger">Username not available</span>');
					$('#register').attr("disabled", true);
				}
				else {
					$('#availability').html('<span class="text-success">Username Available</span>');
					$('#register').attr("disabled", false);
				}
			}
		})

	});
});  


