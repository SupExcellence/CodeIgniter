<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CodeIgniter</title>
</head>
<body>


<h1>
    Controleur Test
</h1>


<p>
 <a href="<?php echo site_url(); ?>">accueil I</a>
 <br />
 
 <a href="<?php echo site_url('test'); ?>">accueil II</a>
 <br />
 
 <a href="<?php echo site_url('test/secret'); ?>">page secrète I </a>
 <br />
 
 <a href="<?php echo site_url(array('test', 'secret')); ?>">page secrète II</a>
</p>



















































</body>
</html>