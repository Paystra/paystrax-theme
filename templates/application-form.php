<?php
/** Template name: Application-form */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
    	<!-- Google Tag Manager -->
    	<!-- End Google Tag Manager -->
	<!-- Google Analytics -->
	<!-- End Google Analytics -->
	<script src="https://www.google.com/recaptcha/api.js"></script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php img(); ?>/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php img(); ?>/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php img(); ?>/fav/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:image" content="https://paystra.com/wp-content/uploads/2020/01/paystra-og.jpg" />
    <link rel="stylesheet" href="https://use.typekit.net/ysy6loa.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap" rel="stylesheet">
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <?php wp_head(); ?>

</head>

<body>

<div class="main page page-contacts application">

<iframe onload="window.parent.scrollTo(0,0)" id="application" allowtransparency="true" src="https://paystrax.formtitan.com/EMAV1#/" frameborder="0" width="1440" height="2500" scrolling="no">
</iframe>

</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		const partnerId = (localStorage.getItem('id') != "null" ) ? localStorage.getItem('id') : "0013X00002fC28zQAC";
		const queryString = window.location.search;
		const urlParams = new URLSearchParams(queryString);
		const paramId = urlParams.get('id');
		window.localStorage.setItem('id', paramId);
		var iframe = document.getElementById("application");
		iframe.src = "https://paystrax.formtitan.com/EMAV1/?fld860="+partnerId;
		if(window.location != "https://www.paystrax.com/application/"){
			document.location.href="https://www.paystrax.com/application/"
		}
		if(document.body.clientWidth > 770 )
		{
			document.getElementById("application").width = 1440;
			document.getElementById("application").height = 2500;
		}
		else if(document.body.clientWidth < 770 & document.body.clientWidth > 400)
		{
 			document.getElementById("application").width = 770;
			document.getElementById("application").height = 3000;
		}

		else if(document.body.clientWidth < 400)
		{
 			document.getElementById("application").width = 330;
			document.getElementById("application").height = 3200;
		}
	});
</script>
</body>

</html>