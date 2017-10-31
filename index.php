<?php get_header(); ?>  

	<div class="header-banner"> 
<img src="<?php bloginfo('url')?>/wp-content/uploads/2016/12/novidades-1.jpg" alt="" />
 <span id="down" class="bounceInDown"> 
 <i class="fa fa-angle-double-down" aria-hidden="true"></i>
 </span>
 </div>
 		<div class="post container">
		<div class="row">
		<div class="col-sm-12">
		 <header class="page-titulos text-center">  
<h1>Novidades</h1> 
 <br />
</header>
		 
		</div>
		
		
	<div class="col-sm-8 clearfix">

<div class="description-cat text-center"> 
<?php //echo the_content(); ?>   
 </div> 
 </div> 



<div class="tiras-blog">
	<article>
	<div class="row tira-blog">
	<div class="col-md-8">	


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div class="col-md-12 relative img-destaque-blog">		
	<a href="<?php the_permalink() ?>">	
	<?php
// Must be inside a loop.
 
if ( has_post_thumbnail() ) {
    the_post_thumbnail('full');
}
else {
    echo '<img src="' . get_bloginfo("url").'/wp-content/uploads/2016/11/no-image-1.png" alt="imagem indisponível"  title="'.get_the_title().'" />'; 




}
?>	 
	</a>	
	   <div class="time-date col-md-3 blog-interna-date">   
      <div class="mes"> 
	  <div class="circle">
	<div>  <?php the_time('d') ?></div>
	<div>  <?php the_time('M') ?></div>	  
	  </div> 
	  </div> 
   
   </div>
	
	 

	


			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			
				<div class="postmetadata geosanslightregular">
				<i class="fa fa-pencil" aria-hidden="true"></i> <?php posted_on(); ?>&nbsp;&nbsp;
				<strong><i class="fa fa-folder-open-o" aria-hidden="true"></i> Categoria:</strong>	<?php //the_tags(__('Tags: ','html5reset'), ', ', ''); ?> <?php the_category(', ') ?> &nbsp;&nbsp;
				<strong><i class="fa fa-commenting-o" aria-hidden="true"></i> </strong> <?php  comments_popup_link(__('Sem Comentários','html5reset'), __('1 Comentário ','html5reset'), __('% Comentários ','html5reset')); ?>
				<?php // _e('Postado em','html5reset'); ?> 
				<hr />
				
			
			</div>
			

			<div class="entry geosanslightregular">
			<p><?php echo excerpt('150'); ?> [ ... ]</p> 
			
			<div style="clear:both"></div>
			<a href="<?php the_permalink(); ?>" class="saiba-mais-socias center color-blue geosanslightregular pull-left">Leia Tudo</a>
			
			</div>

		
	
</div>



 

	<?php endwhile; ?>

	<?php  post_navigation(); ?>

	<?php else : ?>

		<h2><?php  _e('Nada Encontrado','html5reset'); ?></h2>

	<?php endif; ?>


</div>


<div class="col-sm-4"><?php get_sidebar(); ?></div>

</div>


	</article>
</div>
</div>
</div>

	

<?php get_footer(); ?>
