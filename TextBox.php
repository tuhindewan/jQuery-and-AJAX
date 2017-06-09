<?php include 'inc/header.php'; ?>
<h2>AJAX:- Autocomplete TextBox</h2>
<div class="content">
<style>
	.skill{background: #fba991;margin-left: 50px;padding: 6px 30px;width: 190px}
	.skill ul{margin: 0;padding: 0;list-style: none;}
	.skill ul li{}
</style>
	<form action="" method="post">
	  <table>
	  	<tr>
	  		<td>Skil</td>
	  		<td>:</td>
	  		<td>
	  			<input type="text" name="skill" id="skill" placeholder="Enter Your Skill....">
	  		</td>
	  	</tr>
	  </table>
	  <div id="statusSkill"></div>
	</form>
</div>

<?php include 'inc/footer.php'; ?>