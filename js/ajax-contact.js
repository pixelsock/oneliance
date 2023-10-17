
function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

$(function() {
	$("#contact_button").click(function() {
		// form variables
		var name = $("input#name").val();
		var email = $("input#email").val();
		var subject = $("input#subject").val();
		var message = $("textarea#message").val();
		var dataString = 'name='+ name +'&email='+ email +'&subject='+ subject +'&message='+ message;
			// form validation
			if(name=='') {
				$("#response").html('<div class="error-result">Insert the Name Please.</div>');
				return false;
			} else if (email=='') {
				$("#response").html('<div class="error-result">Insert The E-Mail Please.</div>');
				return false;
			} else if (!validateEmail(email)) {
				$("#response").html('<div class="error-result">Please Insert a Valid E-Mail Address.</div>');
				return false;
			} else if (message=='') {
				$("#response").html('<div class="error-result">Insert The Message Please.</div>');
				return false;
			} else {
				$("#response").hide();
				// AJAX functions
				$.ajax({
					type: "POST",
					url: "ajax-contact.php",
					data: dataString,
					cache: false,
					success: function(html){
						if (html == 1) {
							$("#response").html('<div class="success-result">Your Message Has Been Sent Successfully.</div>');
							document.getElementById('ajax_contact').reset();
						} else {
							$("#response").html('<div class="error-result">Error Happened. Please Try Again Later.</div>');
						}  
					}
				});
			}
		return false;
	});
});
