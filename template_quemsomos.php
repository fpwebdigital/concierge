<?php  /* Template Name: quem somos*/ 
 get_header(); ?> 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

	<div class="header-banner"> 
 <?php  the_post_thumbnail('full'); ?> 
  <span id="down" class="bounceInDown"> 
 <i class="fa fa-angle-double-down" aria-hidden="true"></i>
 </span>
 </div>
 		<div class="post container">
		<div class="row">
	<article class="col-sm-12 clearfix">
 <header class="page-titulos text-center">  

<h1><?php the_title(); ?></h1>
 <br />
</header>
<div class="description-cat text-center">
 
<?php echo the_content(); ?>   
  
 </div> 
<?php get_template_part( 'template_parte_form' ); ?>
</article>
 </div> 
 </div> 

		<?php //comments_template(); ?>
		<?php endwhile; endif; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>