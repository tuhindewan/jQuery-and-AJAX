$(document).ready(function(){ 
  	$("#skill").keyup(function(){
  		var skill = $(this).val();
  		if (skill != "") {
  			$.ajax({
  				url:"check/checkSkill.php",
  				type:"POST",
  				data:{skill:skill},
  				success:function(data){
            $("#statusSkill").fadeIn();
  					$("#statusSkill").html(data);
  				}
  			});
  		}
  	});
 });  