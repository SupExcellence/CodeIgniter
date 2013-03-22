<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CodeIgniter</title>
</head>
<body>


<h1> Formulaire </h1>

<form method="post" action="">
<table>
	<tr>
		<td><label for="pseudo">Pseudo : </label></td>
		<td><input type="text" name="pseudo" value="<?php echo set_value('pseudo'); ?>" /></td>
		<td><?php echo form_error('pseudo'); ?></td>
	</tr>
	<tr>
		<td><label for="mdp">Mot de passe :</label></td>
		<td><input type="password" name="mdp" value="" /></td>
		<td> <?php echo form_error('mdp'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Envoyer" /></td>
		<td></td>
	</tr>
</table>
</form>





















































</body>
</html>