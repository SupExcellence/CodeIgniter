<hr>
<center>
<form method="post" action="">
<table class="table">
	<tr>
		<td><label for="mailuser">Email </label></td>
		<td><input type="text" name="mailuser"/></td>
		<td><?php  echo form_error('mailuser');?></td>
	</tr>
	<tr>
		<td><label for="mdp">Mot de passe </label></td>
		<td><input type="password" name="mdp" value="" /></td>
		<td><?php  echo form_error('mdp');?></td>
	</tr>
	<tr>
		<td></td>
		<td><button type="submit" class="btn-small">Login</button></td>
		<td></td>
	</tr>
</table>
</form>
<hr>
</center>
