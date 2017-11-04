<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head id="<?php echo of_get_option('meta_headid'); ?>" >
<meta charset="<?php bloginfo('charset'); ?>">
<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
<?php if (is_search())echo '<meta name="robots" content="noindex, nofollow" />'; ?>
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
<?php
		if (true == of_get_option('meta_author'))
			echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';
		if (true == of_get_option('meta_google'))
			echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>
	
		<?php
		if (true == of_get_option('meta_viewport'))
			echo '<meta name="viewport" content="' . of_get_option("meta_viewport") . ' minimal-ui" />';

		if (true == of_get_option('head_favicon')) {
			echo '<meta name="mobile-web-app-capable" content="yes">';
			echo '<link rel="shortcut icon" sizes="1024x1024" href="' . of_get_option("head_favicon") . '" />';
		}
		if (true == of_get_option('meta_app_fb_title')) {
			echo '<meta property="og:title" content="' . of_get_option("meta_app_fb_title") . '" />';
			echo '<meta property="og:description" content="' . of_get_option("meta_app_fb_description") . '" />';
			echo '<meta property="og:url" content="' . of_get_option("meta_app_fb_url") . '" />';
			echo '<meta property="og:image" content="' . of_get_option("meta_app_fb_image") . '" />';
		}
	?>

	
<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if(is_front_page()){?>
<style>
h1 {margin: 0;font-size: initial;padding: 0!important;display: block;border:0!important;}@media(max-width:1180px) {header#header { position: fixed; width: 100%;}.col-sm-4.box-logo { width: 100%;}h1.logo { text-align: center;}header#header { top: 0; margin-top: 0!important;/*display:none;*/}}




</style>
    <link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Indie+Flower&#038;ver=4.7.1' type='text/css' media='all' />
<link rel='stylesheet'   href='<?php bloginfo('url'); ?>/wp-content/plugins/accordion-slider-lite/public/assets/css/accordion-slider.min.css?ver=1.3' type='text/css' media='all' />
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>

<?php }  if(is_page(241)){ echo '<script src="'.get_bloginfo('template_url').'/_/js/jquery.min.js"></script>
<script src="'.get_bloginfo('template_url').'/_/js/jquery.bxslider.js"></script>
<link rel="stylesheet" href="'.get_bloginfo('template_url').'/_/css/jquery.bxslider.css" type="text/css" />
<style>
.bx-wrapper {
    width: 100%!important;
    max-width: 1081px!important;
}
ul.bxslider.clearfix img {
    width: 100%;
    height: inherit;
}
</style>'; } ?>
 
<?php wp_head(); ?>

<style>

.redes-sociais {
    width: 156px!important;
 
} 
 

</style>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager --> 
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PG63292"; 
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': 
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], 
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); 
})(window,document,'script','dataLayer','GTM-PG63292');</script> 
<!-- End Google Tag Manager -->

<div style="clear:both;"></div>
<header id="header" class="clearfix">
  <div class="container relative">
    <div class="row">
      <div class="col-sm-12 box-logo" style="padding: 0;">

        <?php  
if(is_front_page()){ echo '<h1 class="logo">';} 
if (true == of_get_option('logotipo-header')){ echo '<a href="'.get_bloginfo('url').'"><img src="'.of_get_option('logotipo-header').'" alt="Concierge de Viagens | A Viagem do seu jeito" title="Concierge de Viagens | A Viagem do seu jeito"  class="logo-header bounceInLeft center-block"/></a>';}
if(is_front_page()){ echo '</h1>';} 
?>
      </div>
      <div style="clear:both;"></div>
	  <div class="redes-sociais"> 
	  <a href="https://www.facebook.com/Concierge-De-Viagem-E-Turismo-177873238985525/" class="circule" data-toggle="tooltip" data-placement="bottom" title="Nos siga no FaceBook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>

	  <a href="https://www.instagram.com/concierge_viagem/" class="circule" data-toggle="tooltip" data-placement="bottom" title="Nos siga no Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	  
	  <a href="mailto:contato@conciergedeviagem.com.br" class="circule" data-toggle="tooltip" data-placement="bottom" title="contato@conciergedeviagem.com.br"><i class="fa fa-envelope" aria-hidden="true"></i></a>	   
	  </div> 
    </div>
  </div>
  <div class="box-nav">
    <nav id="nav" class="clearfix fadeInRight">
      <div class="container"> <i class="fa fa-bars drop-mobile" aria-hidden="true"></i> <span id="close">X [ fechar ]</span>
        <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
      </div>
    </nav>
  </div>
</header>

<script>
(function ($){
	$(document).ready(function (){
/*

if(localStorage.getItem('OPTIONS') == 'full'){
}else{
$('.restrito').hide();
}
*/

$('i.fa.fa-bars.drop-mobile').on('click', function(){
	$('ul#menu-menu-principal').slideToggle(); 
	$('#close').show();
	
});

$('#close').on('click', function(){
	$('#close').hide();
	$('ul#menu-menu-principal').hide(); 
	
});
	});

}(window.jQuery || window.$));
</script> 