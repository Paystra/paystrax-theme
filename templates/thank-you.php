<?php
/** Template name: Thank you page */
?>
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

    <style>
    .message-body{
        display: flex;
    }
    .message{
        max-width: 1440px;
        min-width: 1440px;
	margin: auto;
    	padding: 30px 0px 0px 165px;
    }
    .message img{
    	width: 230px;
	height: 50px;
    }
    h3{
        font-family: 'Cabin', sans-serif;
	font-size: 24px;
    }
    .message-text{
        margin-top: 80px;
    }
    @media only screen and (max-width: 800px){
        .message{
        min-width: 100%;
	padding: 30px 0px 0px 10%;
        }
    }
    </style>
</head>
<body>
    <div class="message-body">
        <div class="message">
            <img src="https://www.paystrax.com/wp-content/uploads/2021/01/logo.svg
            " alt="">
            <div class="message-text">
            <h3>Thank you!</h3>
            <h3>Your application has been submitted.</h3>
            </div>
        </div>
    </div>
</body>