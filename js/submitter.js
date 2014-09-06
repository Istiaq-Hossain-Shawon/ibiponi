// JavaScript Document
$(document).ready(function(e){
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$("#btnRegistration").click(function(){
		if($('Password').val() == $('ConformPassword').val()){
			$.ajax({
				url:"submitter.php",
				type:"POST",
				dataType:"json",
				data: $("#frmRegistration").serialize(),
				success:function(msg){
					if(msg.success){
						$("#Registration-container").slideToggle(500);
						alert("Successfully Inserted.");					
					}
					else{
						alert(msg.message);
					}		
				},
				error:function(){
					alert("Error");
				}
			});
		}
		else{
			alert('Password is not match.');
		}
		
	});	//Registration
	
	$("#btnLogin").click(function(){
		$.ajax({
			url:"submitter.php",
			type:"POST",
			data: $("#frmLogin").serialize(),
			dataType:"json",
			success:function(msg){
				if(msg.success){
					//Change value span 1 and 2	110px 145px : 145px;
					$("#login-span1").text("Log out");
					$("#custName").css({"display":"block"});
					$("#header-container").css({"height":"145px"});
					alert("Successfully Login.");								
					$("#login-container").slideToggle(500);		
				}
				else{
					alert(msg.message);
				}		
			},
			error:function(error){
				alert("Error 	");
				alert(eval(error));
			}
		});	
		
	});	//Login
	
	$("#Logout").click(function(){
				$.ajax({
					url: "submitter.php",
					type: "POST",
					dataType:"json",
					data: { Logout : "Logout" },
					success:function(msg){
						if(msg.success){
							//Change value span 1 and 2	110px 145px : 145px;
							$("#login-span1").text("Log in");
							$("#header-container").css({"height":"110px"});
							$("#custName").css({"display":"none"});
							alert("Successfully Logout.");									
							$("#Logout-container").slideToggle(500);
						}
						else
							alert(msg.message);
					},
					error:function(error){
						alert(eval(error));
					}
				});
			}); //Logout
	
	$("#btnChangePassword").click(function(){
		$.ajax({
			url:"submitter.php",
			type:"POST",
			dataType:"json",
			data: $("#frmChangePassword").serialize(),
			success:function(msg){
				alert(msg.val);
				if(msg.success){
					$("#ChangePassword-container").slideToggle(500);
					alert(msg.message);					
				}
				else{
					alert(msg.message);
				}		
			},
			error:function(Error){
				alert(eval(Error));
			}
		});
	});	//Change Password
	
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
});