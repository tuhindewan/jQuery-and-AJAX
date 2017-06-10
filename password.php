<?php include 'inc/header.php'; ?>
<h2>AJAX:- Show Password Button</h2>
<div class="content">

	<form action="" method="post">
	  <table>
	  	<tr>
	  		<td>Username</td>
	  		<td>:</td>
	  		<td>
	  			<input type="text"  placeholder="Enter Your Username....">
	  		</td>
	  	</tr>
	  	<tr>
	  		<td>Password</td>
	  		<td>:</td>
	  		<td>
	  			<input type="password" name="password" id="password"  placeholder="Enter Your Password....">
	  		</td>
	  	</tr>
	  	<tr>
	  		<td></td>
	  		<td></td>
	  		<td>
	  			<button type="button" id="showpassword" name="showpassword" class="btn btn-primary">Show Password</button>
	  		</td>
	  	</tr>
	  </table>
	  <div id="statusSkill"></div>
	</form>
</div>
<script>
	$(document).ready(function(){
  $('#showpassword').on('click',function(){
    var pass = $('#password');
    var fieldtype = pass.attr('type');

    if (fieldtype=='password') {
      pass.attr('type','text');
      $(this).text('Hide Password');
    }else{
      pass.attr('type','password');
      $(this).text('Show Password');
    }
  });
});
</script>

<?php include 'inc/footer.php'; ?>