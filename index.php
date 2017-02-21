<?php
	include_once 'class/Util.class.php';
	
	$vetor = (isset($_GET['pagina'])) ? explode('-', $_GET['pagina']) : array() ;
	$pagina = (array_key_exists( 0, $vetor) && $vetor[0] != null ) ? $vetor[0] : 'home' ;
	
	$site = "JF Manufaturados";
	$author = "Ineo sites e sistemas";
	$description = "JF Manufatura é uma empresa que produz e comercializa linhas e cordões resinados / encerados. Cordão para cabedal, waster, string.";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="<?= $author; ?>">
	<meta name="description" content="<?= $description; ?>">
	<meta name="keywords" content="Cordão Encerado, Cordão para cabedal, Cordão Waster, Cordão String, Cordão" >

	<title><?php echo ucfirst($pagina)." | ".$site; ?> </title>

	<!-- Font -->
	<!--<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' >-->
	<!-- Font Awesome -->
	<link rel='stylesheet' href='font-awesome/css/font-awesome.min.css'>
	<!-- Boot -->
	<link rel="stylesheet" href="css/boot.min.css">
	<!-- My Style -->
	<link rel="stylesheet" href="css/my.min.css">
	
	<!-- Icon -->
	<link rel="shortcut icon" href="img/ico.ico" type="image/x-icon">
	<link rel="icon" href="img/ico.ico" type="image/x-icon">

</head>

<body>
	
	<?php include_once 'include/menu.php'; ?>
	<?php QueryString('pages/', $pagina, 'home'); ?>
	<?php include_once 'include/rodape.php'; ?>
	
<!-- CSS Plugin -->
<link rel="stylesheet" href="css/slider/settings.min.css">
<link rel="stylesheet" href="css/slider/slider.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/hover.min.css">
<link rel="stylesheet" href="css/sequence/sequence-theme.modern-slide-in.min.css">

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script async type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Slider Revolution plugin -->
<script src="js/slider/slider.min.js"></script>			
<script src="js/slider/revolution.min.js"></script>

<script async src="js/slider/superfish.min.js"></script>

<script async  src="js/sequence/imagesloaded.pkgd.min.js"></script>
<script  async src="js/sequence/hammer.min.js"></script>
<script async  src="js/sequence/sequence.min.js"></script>
<script async  src="js/sequence/sequence-theme.modern-slide-in.min.js"></script>

<link rel="stylesheet" href="css/venobox/venobox.min.css" type="text/css" media="screen" />
<script async  type="text/javascript" src="js/venobox/venobox.min.js"></script>

<script  async type="text/javascript" src="js/ajax-submit.min.js"></script>
<script async  src="js/this.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3206976-85', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>