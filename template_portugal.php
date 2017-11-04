<?php  /* Template Name: Portugal*/
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

 <br />
</header>

<div class="description-cat text-center">
<?php echo the_content(); ?>   


 </div>


</article>
 </div> 
 </div> 

		<?php //comments_template(); ?>
		<?php endwhile; endif; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>