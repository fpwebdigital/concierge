<?php
/* Template Name: Aonde levamos */
 get_header(); 
 if (have_posts()) : while (have_posts()) : the_post(); ?> 
 <!--
 <div class="header-banner" style=" min-height: 600px; background: url(<?php the_post_thumbnail_url(); ?>) top center no-repeat fixed;
    background-size: 100%;"> 

 </div> 
 
 -->
 
<div class="header-banner"> 
 <?php  the_post_thumbnail('full'); ?> 
  <span id="down" class="bounceInDown"> 
 <i class="fa fa-angle-double-down" aria-hidden="true"></i>
 </span>
 </div> 
<div class="wrapper_safearea">
<div class="sercicos">
<header class="page-titulos text-center">  
<?php the_title('<h1>','</h1>');?>
</header>
<div class="description-cat text-center">
 
<?php echo the_content(); ?>   
  
 </div> 
  <br />
<div class="container">
<!--começo-->
<div class="row section relarive pages">
<a href="<?php bloginfo('url'); ?>/onde-te-levamos/romance/">
<div class="infos-concier">
<h2>Romance</h2>  
</div>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/11/romance-1.jpg" alt="Romance" title="Romance"/> 

<button class="btn center-block btn-categorias">Saiba Mais</button> 
</a>
</div>
<!--fim-->


<!--começo-->
<div class="row section relarive pages">
<a href="<?php bloginfo('url'); ?>/onde-te-levamos/em-familia/">
<div class="infos-concier">
<h2>Em Família</h2> 
</div>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/11/familia.jpeg" alt="Em Família" title="Em Família"/> 
<button class="btn center-block btn-categorias">Saiba Mais</button>
</a>
</div>
<!--fim-->




<!--começo-->
<div class="row section relarive pages">
<a href="<?php bloginfo('url'); ?>/onde-te-levamos/com-amigos/">

<div class="infos-concier">
<h2>Com Amigos</h2> 
</div> 
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/11/amigos.jpeg" alt="Com Amigos" title="Com Amigos"/> 
<button class="btn center-block btn-categorias">Saiba Mais</button>
</a>
</div>
<!--fim-->

<!--começo-->
<div class="row section relarive pages">
<a href="<?php bloginfo('url'); ?>/onde-te-levamos/relax/">
<div class="infos-concier">
<h2>Relax</h2> 
</div>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/11/relex.jpg" alt="Relax" title="Relax"/> 
<button class="btn center-block btn-categorias">Saiba Mais</button>
</a>
</div>
<!--fim-->


<!--começo-->
<div class="row section relarive pages">
<a href="<?php bloginfo('url'); ?>/onde-te-levamos/experiencias/">
<div class="infos-concier">
<h2>Experiências</h2> 
</div>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/11/expereiencia.jpeg" alt="Experiências" title="Experiências"/>  
<button class="btn center-block btn-categorias">Saiba Mais</button>
</a>
</div>
 
<!--fim-->


<!--começo-->
<div class="row section relarive pages">
<a href="<?php bloginfo('url'); ?>/onde-te-levamos/aventura/">
<div class="infos-concier">
<h2>Aventura</h2> 
</div>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/11/aventura.jpg" alt="Aventura" title="Aventura"/> 
<button class="btn center-block btn-categorias">Saiba Mais</button>
</a>
</div>
<!--fim-->


<!--começo-->
<div class="row section relarive pages">
<a href="<?php bloginfo('url'); ?>/onde-te-levamos/compras/">
<div class="infos-concier">
<h2>Compras</h2> 
</div>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/11/compras01.jpg" alt="Compras" title="Compras"/> 
<button class="btn center-block btn-categorias">Saiba Mais</button>
</a> 
</div>
<!--fim-->


<!--começo-->
<div class="row section relarive pages">
<a href="<?php bloginfo('url'); ?>/onde-te-levamos/gastronomia/">
<div class="infos-concier">
<h2>Gastronomia</h2> 
</div>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/11/009.jpg" alt="Gastronomia" title="Gastronomia"/> 
<button class="btn center-block btn-categorias">Saiba Mais</button>
</a>
</div>
<!--fim-->


<!--começo-->
<div class="row section relarive pages">
<a href="<?php bloginfo('url'); ?>">
<div class="infos-concier">
<h2>Cultura e Curiosidades</h2> 
</div>
<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/11/010.jpg" alt="Cultura e Curiosidades" title="Cultura e Curiosidades"/> 
<button class="btn center-block btn-categorias">Saiba Mais</button>
</a>
</div>
<!--fim-->
 








</div>
</div>

</div>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>