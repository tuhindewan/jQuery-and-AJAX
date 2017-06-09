
$(document).ready(function(){ 
  	$("#username").blur(function(){
  		var username = $(this).val();
  		$.ajax({
  			url:"check/checkuser.php",
  			method:"POST",
  			data:{username:username},
  			datatype:"text",
  			success:function(data){
  				$("#status").html(data);
  			}
  		});
  	});
 });  