<hr>
<center>
<p>HELLO VOUS ETES MEMBRE DU SITE</p>
<table class="table-condense">
	<tr>
		<td><label for="mailuser">name </label></td>
		<td><?php  echo $this->session->userdata('names'); ?> </td>
	</tr>
	
	<tr>
		<td><label for="mdp">email</label></td>
		<td><?php // echo $mail  ?></td>
	</tr>
	
	<tr>
		<td><a href="">Logout</a></td>
		<td></td>
	</tr>
<hr>
</center>
