		<?php do_action('fl_content_close'); ?>
	
	</div><!-- .fl-page-content -->
	<?php 
		
	do_action('fl_after_content'); 
	
	if ( FLTheme::has_footer() ) :
	
	?>
	<footer class="fl-page-footer-wrap" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<?php 
			
		/*do_action('fl_footer_wrap_open');
		do_action('fl_before_footer_widgets');
		
		FLTheme::footer_widgets();
		
		do_action('fl_after_footer_widgets');
		do_action('fl_before_footer');
		
		FLTheme::footer();
		
		do_action('fl_after_footer');
		do_action('fl_footer_wrap_close');*/
		
		?>
	</footer>
	<?php endif; ?>
	<?php do_action('fl_page_close'); ?>
</div><!-- .fl-page -->
<?php 
	
wp_footer(); 

do_action('fl_body_close');

FLTheme::footer_code();

?>
	
	<style type="text/css">
		.current-menu-item-home222 a {
		    text-decoration: none;
		    outline: 0;
		    border-bottom-style: solid;
		    border-bottom: 8px solid #f08a00;
		    padding-bottom: 29px !important;
		}
	</style>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

	<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>

	<script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script 

	
 	<script>
 		var validar_carrosel1 = false;
 		var validar_carrosel2 = false;
 		var if_perfil=false;

 		var documentes = false;
 		var documentes2 = false;

 		var ncliks =0 ;
 		var ncliks_docu =0 ;
 		function estaEnPantalla(elemento) {
		    var estaEnPantalla = false;

		    var posicionElemento = $(elemento).get(0).getBoundingClientRect();

		    if (posicionElemento.top >= 0 && posicionElemento.left >= 0 
		            && posicionElemento.bottom <= (window.innerHeight || document.documentElement.clientHeight)
		            && posicionElemento.right <= (window.innerWidth || document.documentElement.clientWidth)) {
		        estaEnPantalla = true;
		    }

		    return estaEnPantalla;
		}
	 	$(function(){
	 		$( window ).scroll(function() {
			  if(estaEnPantalla("#historia")){
			  	console.log("#historia");
			  	$("#menu-item-13").addClass("current-menu-item-home");
			  }
			  else{
			  	console.log("noo");
			  	$("#menu-item-13").removeClass("current-menu-item-home");
			  }
			  if(estaEnPantalla("#nosotros")){
			  	$("#menu-item-14").addClass("current-menu-item-home");
			  }
			  else{
			  	$("#menu-item-14").removeClass("current-menu-item-home");
			  }
			  if(estaEnPantalla("#nuestros_servicios")){
			  	$("#menu-item-15").addClass("current-menu-item-home");
			  }
			  else{
			  	$("#menu-item-15").removeClass("current-menu-item-home");
			  }
			  if(estaEnPantalla("#contactanos")){
			  	$("#menu-item-16").addClass("current-menu-item-home");
			  }
			  else{
			  	$("#menu-item-16").removeClass("current-menu-item-home");
			  }
			});
	 		<?php
	 		if (isset($_GET['ids'])) {
 			 	echo '$("html, body").animate({
			        scrollTop: parseInt($("#'.$_GET['ids'].'").offset().top)
			    }, 2000);';
	 		}
	 		if (isset($_GET['lang'])) {
 			 	if($_GET['lang']=='en'){
 			 		echo '$("#menu-item-236").addClass("current-menu-item");';
 			 	}
 			 	else{
 			 		echo '$("#menu-item-237").addClass("current-menu-item");';
 			 	}
			    //
	 		}
	 		?>
	 		$(".slick-list. slick-active").on("click",function(e){
	 			console.log("hover");
	 			var este = $(this);
	 			$(".slick-active").remoClass("slick-current");
	 			este.addClass("slick-current");
	 		});
	 		$("#ir_becstone").click(function(e){
	 			window.location.href = "<?=home_url()?>/gobierno-corporativo-fbecstone/";
	 		});
	 		$("#ir_panama").click(function(e){
	 			window.location.href = "<?=home_url()?>/gobierno-corporativo-panama/";
	 		});
	 		$('.center').slick({
			  centerMode: false,
			  centerPadding: '60px',
			  slidesToShow: 5,
			  speed: 400,
			  responsive: [
			    {
			      breakpoint: 768,
			      settings: {
			        arrows: true,
			        centerMode: true,
			        centerPadding: '40px',
			        slidesToShow: 1
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        arrows: true,
			        centerMode: true,
			        centerPadding: '40px',
			        slidesToShow: 1
			      }
			    }
			  ]
			});
			$('.Carousel_movil').slick({
			  centerMode: false,
			  centerPadding: '60px',
			  slidesToShow: 1,
			  speed: 400,
			});
	 		$('.eleimage').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'top',
			  content: function(){
			  	//cerrar_pop();
			  	$(".popover.fade.bottom.in").remove();
			  	$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  	ncliks=0;validar_carrosel2=false;
			  	ncliks_docu=0;documentes2=false;
			  	//$(this).attr("src","http://estudioagil.com/hencorp/wp-content/uploads/2018/05/plus-over.png");
			  	console.log($(this).data());
			  	return '<!--div class="imagen_eleimage" style="background-image:url('+$(this).data('img')+')"></div--><div class="eledivtooltip"><h3 class="ele3">'+$(this).data('title')+'</h3>'+$(this).data('contenido')+'</div>';}
			});
			$('html').on('click', function(e) {
				console.log(ncliks,validar_carrosel1,validar_carrosel2,if_perfil);
				/*if(ncliks==-1){
					if (typeof $(e.target).data('original-title') == 'undefined' &&
				     !$(e.target).parents().is('.popover.in')) {
					  	console.log(typeof $(e.target).data('original-title'));
					    $('[data-original-title]').popover('hide');
					     ncliks=0;validar_carrosel2=false;
				  		ncliks_docu=0;documentes2=false;
					}
				}*/
				if(validar_carrosel1){
					if (typeof $(e.target).data('original-title') == 'undefined' &&
				     !$(e.target).parents().is('.popover.in')) {
				  	console.log(typeof $(e.target).data('original-title'));
				    $('[data-original-title]').popover('hide');
				     ncliks=0;validar_carrosel2=false;
			  		ncliks_docu=0;documentes2=false;
			  		

				     console.log(1);
				  }
				}
				else if(!validar_carrosel2){
					if (typeof $(e.target).data('original-title') == 'undefined' &&
				     !$(e.target).parents().is('.popover.in')) {
				  	console.log(typeof $(e.target).data('original-title'));
				    $('[data-original-title]').popover('hide');
				    ncliks=0;validar_carrosel2=false;
			  		ncliks_docu=0;documentes2=false;
			  		

				    console.log(2);
				  }
				}else if( ncliks==2){
					ncliks++;
					
				}else if(ncliks>=3){
					if (typeof $(e.target).data('original-title') == 'undefined' &&
				     !$(e.target).parents().is('.popover.in')) {
				  	console.log(typeof $(e.target).data('original-title'));
				    $('[data-original-title]').popover('hide');
				    ncliks=0;validar_carrosel2=false;
			  	ncliks_docu=0;documentes2=false;
			  	if_perfil=false;

				    console.log(3);
				   }
				}
			  
			});
			 
	 	});
	 	function cerrar_pop(){
			console.log('cerrar');
	 		$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').popover('hide');
	 		$(".popover.fade.bottom.in").remove();
	 		ncliks=0;validar_carrosel2=false;
			  	ncliks_docu=0;documentes2=false;
			  	if_perfil=false;

	 	}
	 	$(function(){
	 		$('.madre1').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'bottom',
			  content: function(){
			  	//$('.madre1').not(this).popover('hide');
			  	$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  	ncliks=0;validar_carrosel2=false;
			  	ncliks_docu=0;documentes2=false;

			  	return '<div class=""><p class="ele4">'+$(this).data('datos')+'</p></div>';}
			});
			$('.pop_der').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'right',
			  content: function(){
			  	$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  	return '<div class=""><p class="ele4">'+$(this).data('datos')+'</p></div>';}
			});
			$('.pop_iz').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'left',
			  content: function(){
			  	$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  	return '<div class=""><p class="ele4">'+$(this).data('datos')+'</p></div>';}
			});

			$('.item_carusel_perfil').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'bottom',
			  container: '.slider.center.slick-initialized.slick-slider',
			  content: function(){
			  	ncliks++;
				console.log(ncliks);
			  	validar_carrosel2 = true;
			  	if(if_perfil)ncliks=1;
			  	if_perfil=true;
			  	$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  	return '<div class=""><p class="ele4">'+$(this).data('contenido')+'</p></div>';}
			});
			$('.document2').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'right',
			  content: function(){
			  	$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  	ncliks++;
				console.log(ncliks);
			  	validar_carrosel2 = true;

			  	return '<div class=""><p class="ele4">'+$(this).data('datos')+'</p></div>';}
			});

			$('.document5').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'right',
			  content: function(){
			  	$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  	ncliks++;
				console.log(ncliks);
			  	validar_carrosel2 = true;

			  	return '<div class=""><p class="ele4">'+$(this).data('datos')+'</p></div>';}
			});

			$('.document8').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'left',
			  content: function(){
			  	$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  	ncliks++;
				console.log(ncliks);
			  	validar_carrosel2 = true;

			  	return '<div class=""><p class="ele4">'+$(this).data('datos')+'</p></div>';}
			});

			$('.document_panama2').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'right',
			  content: function(){
			  	$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  	ncliks++;
				console.log(ncliks);
			  	validar_carrosel2 = true;

			  	return '<div class=""><p class="ele4">'+$(this).data('datos')+'</p></div>';}
			});

			$('.document_panama5').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'right',
			  content: function(){
			  	$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  	ncliks++;
				console.log(ncliks);
			  	validar_carrosel2 = true;

			  	return '<div class=""><p class="ele4">'+$(this).data('datos')+'</p></div>';}
			});

			$('.document_panama8').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'left',
			  content: function(){
			  	$('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  	ncliks++;
				console.log(ncliks);
			  	validar_carrosel2 = true;

			  	return '<div class=""><p class="ele4">'+$(this).data('datos')+'</p></div>';}
			});
			 
	 	});


	 	$(function(){
	 		$('.madremovil1').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'bottom',
			  content: function(){console.log("la linea",$(this).data());
			  $('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  ncliks=0;validar_carrosel2=false;
			  	ncliks_docu=0;documentes2=false;

			  	return '<div class="eledivtooltip"><p class="ele4">'+$(this).data('datos')+'</p></div>';}
			});
			 
	 	});

	 	$(function(){
	 		$('.madremovil2').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'bottom',
			  content: function(){console.log("la linea",$(this).data());
			  $('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  ncliks=0;validar_carrosel2=false;
			  	ncliks_docu=0;documentes2=false;

			  	return '<div class="eledivtooltip"><p class="ele4">'+$(this).data('datos')+'</p></div>';}
			});

			$('.junta_tool').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'bottom',
			  content: function(){console.log("la linea",$(this).data());
			  $('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  ncliks=0;validar_carrosel2=false;
			  	ncliks_docu=0;documentes2=false;

			  	return '<div class="eledivtooltip"><p class="titulo">'+$(this).data('titulo')+'</p><p class="contenido">'+$(this).data('datos')+'</p></div>';}
			});
			 
	 	});

	 	$(function(){
	 		$('.simoncarrousel').popover({
			  html: true,
			  trigger: 'click',
			  placement: 'bottom',
			  content: function(){console.log("elcarrousel",$(this).data());
			  $('.item_carusel_perfil,.eleimage,.madre1,.pop_der,.pop_iz,.perfil_pop1,.document2,.document5,.document8,.document_panama2,.document_panama5,.document_panama8,.madremovil1,.madremovil2,.junta_tool,.simoncarrousel').not(this).popover('hide');
			  ncliks=0;validar_carrosel2=false;
			  	ncliks_docu=0;documentes2=false;

			  	return '<div class="eledivtooltip"><p class="ele4">'+$(this).data('datos2')+'</p></div>';}
			});
			 
	 	});
 	</script>
	<script>
	 	$(function(){
	 		var heder = $("header.fl-page-header.fl-page-header-fixed.fl-page-nav-right").html();
	 		$("header.fl-page-header.fl-page-header-fixed.fl-page-nav-right").empty().html('<div class="new_menu_class">'+$(".new_menu_class").html()+'</div>');
	 		$("header.fl-page-header.fl-page-header-fixed.fl-page-nav-right").append(heder);
	 		$('#Carousel').carousel({
		        interval: 1000000000
		    })
	 	});
	 	var modal = false;
	 	$(function () {
		  $('[data-toggle="tooltip"]').tooltip();
		  <?php global $post; if( $post->ID == 788 || $post->ID == 803 ): ?>
		  $(".botom_hencorp").click(function(e){
		  	modal = true;
		  });
			<?php endif; ?>
		});
	</script>
	<script type="text/javascript">
	$(function () {
		<?php 
			$fecha_actual = new DateTime();
			$cod = $fecha_actual->format("His");
		 ?>
    $(".fl-page-header-logo a").attr("href","<?=home_url( '/' )?>?v=<?=$cod?>");
    <?php if(is_user_logged_in()){?>
    $("body").addClass("esta_logged");
    <?php } if(!is_front_page()){?>
    	var link = "?v=<?=$cod?>&id="+$(".menu-item-13 a").attr("href").replace('#', '');
    	$(".menu-item-13 a").removeAttr("href");
    	$(".menu-item-13 a").attr("href","<?=home_url( '/' )?>"+link);

    	link = "?v=<?=$cod?>&id="+$(".menu-item-14 a").attr("href").replace('#', '');
    	$(".menu-item-14 a").removeAttr("href");
    	$(".menu-item-14 a").attr("href","<?=home_url( '/' )?>"+link);

    	link = "?v=<?=$cod?>&id="+$(".menu-item-15 a").attr("href").replace('#', '');
    	$(".menu-item-15 a").removeAttr("href");
    	$(".menu-item-15 a").attr("href","<?=home_url( '/' )?>"+link);

    	link = "?v=<?=$cod?>&id="+$(".menu-item-16 a").attr("href").replace('#', '');
    	$(".menu-item-16 a").removeAttr("href");
    	$(".menu-item-16 a").attr("href","<?=home_url( '/' )?>"+link);
    	/*$( "#menu-menu_header li" ).each(function( index ) {
    		var link=$(this);
    		var clase = $(this).attr("class");
    		var a = link.attr("href");
    		link.removeAttr("href");
    		link.attr("href","<?=home_url( '/' )?>"+a);
    		//$(this).empty()
    		console.log("oskrgl",clase);
    	});*/
    <?php }
    else {
    	?>
    	var link = $(".menu-item-13 a").attr("href").replace('#', '');
    	$(".menu-item-13 a").removeAttr("href");
    	$(".menu-item-13 a").attr("href","javascript:void(0);");
    	$(".menu-item-13 a").attr("data-link",link);

    	link = $(".menu-item-14 a").attr("href").replace('#', '');
    	$(".menu-item-14 a").removeAttr("href");
    	$(".menu-item-14 a").attr("href","javascript:void(0);");
    	$(".menu-item-14 a").attr("data-link",link);

    	link = $(".menu-item-15 a").attr("href").replace('#', '');
    	$(".menu-item-15 a").removeAttr("href");
    	$(".menu-item-15 a").attr("href","javascript:void(0);");
    	$(".menu-item-15 a").attr("data-link",link);

    	link = $(".menu-item-16 a").attr("href").replace('#', '');
    	$(".menu-item-16 a").removeAttr("href");
    	$(".menu-item-16 a").attr("href","javascript:void(0);");
    	$(".menu-item-16 a").attr("data-link",link);

    	$(".menu-item-13 a").click(function(e){
    		var link2 = $(this).data("link");
    		bajar(link2);
    	});

    	$(".menu-item-14 a").click(function(e){
    		var link2 = $(this).data("link");
    		bajar(link2);
    	});
    	$(".menu-item-15 a").click(function(e){
    		var link2 = $(this).data("link");
    		bajar(link2);
    	});
    	$(".menu-item-16 a").click(function(e){
    		var link2 = $(this).data("link");
    		bajar(link2);
    		
    	});

   	<?php
    }
    if(isset($_GET['id'])){
    	echo 'bajar("'.$_GET['id'].'");';
    }
    ?>
 });
	function bajar(link2){
		$("html,body").animate({
	        scrollTop: $("#"+link2).offset().top - 100
    	}, 800);
	}
</script>
</body>
</html>