
$(document).ready(function(){
$("#register").validate({
				 rules: {
				 	username: {
						required:true,
					},
					email: {
						required:true,
						email:true,
					},
					password: {
						required:true,
						checklowercase: true,
						checkuppercase: true,
						checknumber: true,
						checkspecialchar: true,
						minlength:8,
					},
					confirmpassword: {
						required:true,
						checklowercase: true,
						checkuppercase: true,
						checknumber: true,
						checkspecialchar: true,
						minlength:8,
						equalTo: '#password',
					},
					
				 },
				  messages: {
				  	name: {
						required:"Name is required.",						
					},
					email: {
						required:"An Email id is required.",
						email:"Please Enter valid Email ID"
						
					},
					password: {
						required:"Password is required",
						checklowercase:"At least 1 Lower case",
						checkuppercase:"At least 1 Upper case",
						checknumber:"At least 1 Number",
						checkspecialchar:"At least 1 Special Character",
						minlength:"Password must contain at least 8 characters.",
						//loginRegex: "Login format not valid"
						//pattern:"Your Password Must Be AlphaNumeric",
					},
					confirmpassword: {
						required:"Confirm Password is required.",
						minlength:"Password must contain at least 8 characters.",
						equalTo:"Password does not match!",
					},
					
				  },
					
					submitHandler: function(form) {
							form.submit();
						}
			});
		});