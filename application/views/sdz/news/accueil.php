<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CodeIgniter</title>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo css_url('bootstrap.min'); ?>" />
</head>
<body>


<h1>Bonjour</h1>
<button class="btn-inverse">hello</button>
<p>Ceci est mon paragraphe !</p>
<p>
    Votre pseudo est <?php echo $pseudo; ?>.
</p>
<p>
    Votre email est <?php echo $email; ?>.
</p>
<p>
<?php if($en_ligne): ?>
    Vous êtes en ligne.
<?php else: ?>
    Vous n'êtes pas en ligne.
<?php endif; ?>
</p>





















































</body>
</html>