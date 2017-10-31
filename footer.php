<!-- Modal - formulário lightbox -->
<div class="modal fade text-center" id="myModal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title">Quero uma cotação</h2>
      </div>
      <div class="modal-body"> <?php echo do_shortcode('[contact-form-7 id="233" title="contato lithbox"]');?> </div>
    </div>
  </div>
</div>
<footer id="footer" class="source-org vcard copyright text-center <?php if(!is_page(6)){echo 'externas';};?>"> Todos os direitos Reservados &copy;<span>Desenvolvido por:<a href="http://agenciamseo.com.br" target="_blank" > <img src="<?php bloginfo('url');?>/wp-content/uploads/2016/12/agenciamseo.png" alt="" data-toggle="tooltip" data-placement="top" title="Agência M.SEO"/></a></span> </footer>
<!-- Latest compiled and minified JavaScript --> 
<script src="<?php bloginfo('template_url'); ?>/_/js/bootstrap.min.js" ></script>  

<?php if(is_page(241)){ echo '
<script>
$(".bxslider").bxSlider({
  minSlides: 2,
  maxSlides: 6,
  slideWidth: 260,
  slideMargin: 10
});
 
</script>
'; } ?>




<?php if(!is_page(6)){?>
<script>	
(function($){$(document).ready(function(){	
	$('span#down').click(function(){$('html, body').animate({scrollTop: $('h1').offset().top}, 1000);});	
	});
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});})(jQuery);  
 </script>
<?php } ?>
<?php wp_footer(); ?>
</body></html>