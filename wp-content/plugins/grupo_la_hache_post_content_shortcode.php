<?php
/*
Plugin Name: ShortCode La H
Description: Brujula que califica de acuerdo a respuestas.
Version:1.0
Author: EleAnGL
Author URI: #
License: eleangel
*/
add_shortcode('carrousel_original', 'funcion_carrousel' );
function funcion_carrousel($atts){
  $elcodigo="";
  $args = array(
      'posts_per_page'   => 1000,
      'offset'           => 0,
      'category'         => array(9),
      'orderby'          => 'post__in',
      'order'            => 'DESC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'post_status'      => 'publish',
      'suppress_filters' => true );
  $posts = get_posts($args);
  $items = "";
  foreach ($posts as $post) {
    $i++;
    $thispage = get_page($post->ID);
    $link = get_permalink($post->ID);
    $nombre = $post->post_title;
    $cargo = get_post_meta($thispage->ID, 'wpcf-elcargo', true);
    $contenido = nl2br($post->post_content);
    $html1.='el nombre:'.$nombre.'<br>';
    $html1.='el cargo:'.$cargo.'<br>';
    $html1.='el contenido:'.$thispage->post_content;
    $imagen = get_the_post_thumbnail_url( $thispage->ID, array(250,250) );
    $datos = get_the_excerpt($thispage->ID);

    $items.='
      <div class="item_carusel madreaa1">
          <div class="item_carusel_perfil tooltip11" data-contenido="'.$contenido.'">
              <p><a  href="javascript:void(0)"  class="thumbnail eletumbnail_carusel">
                    <img class="imagen_carusel" src="'.$imagen.'" alt="Image" style="max-width:100%;">
                  </a></p>
              <div class="texto">
                  <h4 class="elcargonombre" >'.$nombre.'</h4>
                  <p class="elcargocargo">'.$datos.'</p>
                </div>
          </div>
      </div>
    ';

  }
  $elcodigo.='
            <div class="">
              <div class="row">
                <div class="col-md-12">
                  <div id="Carousel" class="carousel slide">
                    <div class="slider center">
                      '.$items.'
                    </div>
                  </div>
                </div>
              </div>
            </div>
  ';
  return do_shortcode($elcodigo);
}

add_shortcode('carrousel_original_movil_noo', 'funcion_carrousel_original_movil_no0' );
function funcion_carrousel_original_movil_noo($atts){
  $elcodigo="";
  $args = array(
      'posts_per_page'   => 1000,
      'offset'           => 0,
      'category'         => array(9),
      'orderby'          => 'post__in',
      'order'            => 'DESC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'post_status'      => 'publish',
      'suppress_filters' => true );
  $posts = get_posts($args);
  $items = "";
  foreach ($posts as $post) {
    $i++;
    $thispage = get_page($post->ID);
    $link = get_permalink($post->ID);
    $nombre = $post->post_title;
    $cargo = get_post_meta($thispage->ID, 'wpcf-elcargo', true);
    $contenido = $post->post_content;
    $html1.='el nombre:'.$nombre.'<br>';
    $html1.='el cargo:'.$cargo.'<br>';
    $html1.='el contenido:'.$thispage->post_content;
    $imagen = get_the_post_thumbnail_url( $thispage->ID, array(250,250) );
    $datos = get_the_excerpt($thispage->ID);

    $items.='
      <div class="item_carusel madreaa1">
          <div class="item_carusel_perfil tooltip11" data-contenido="'.$contenido.'">
              <p><a  href="javascript:void(0)"  class="thumbnail eletumbnail_carusel">
                    <img class="imagen_carusel" src="'.$imagen.'" alt="Image" style="max-width:100%;">
                  </a></p>
              <div class="texto">
                  <h4 class="elcargonombre" >'.$nombre.'</h4>
                  <p class="elcargocargo">'.$datos.'</p>
                </div>
          </div>
      </div>
    ';

  }
  $elcodigo.='
            <div class="">
              <div class="row">
                <div class="col-md-12">
                  <div id="Carousel" class="carousel slide">
                    <div class="slider Carousel_movil">
                      '.$items.'
                    </div>
                  </div>
                </div>
              </div>
            </div>
  ';
  return do_shortcode($elcodigo);
}


add_shortcode('carrousel_original444', 'funcion_carrousel444' );
function funcion_carrousel444($atts){
  $elcodigo="";
  $args = array(
      'posts_per_page'   => 1000,
      'offset'           => 0,
      'category'         => array(9),
      'orderby'          => 'post__in',
      'order'            => 'DESC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'post_status'      => 'publish',
      'suppress_filters' => true );
  $posts = get_posts($args);
  $items = "";
  foreach ($posts as $post) {
    $i++;
    $thispage = get_page($post->ID);
    $link = get_permalink($post->ID);
    $nombre = $post->post_title;
    $cargo = get_post_meta($thispage->ID, 'wpcf-elcargo', true);
    $contenido = $post->post_content;
    $html1.='el nombre:'.$nombre.'<br>';
    $html1.='el cargo:'.$cargo.'<br>';
    $html1.='el contenido:'.$thispage->post_content;
    $imagen = get_the_post_thumbnail_url( $thispage->ID, array(250,250) );
    $datos = get_the_excerpt($thispage->ID);

    $items.='
      <div class="item">
          <div class="tooltip11 perfil_pop1" data-contenido="'.$contenido.'">
              <p><a  href="javascript:void(0)"  class="thumbnail eletumbnail">
                    <img class="imagen_carru" src="'.$imagen.'" alt="Image" style="max-width:100%;">
                  </a></p>
              <div class="texto">
                  <h4 class="elcargonombre" >'.$nombre.'</h4>
                  <p class="elcargocargo">'.$datos.'</p>
                </div>
          </div>
      </div>
    ';
  }
  $elcodigo.='
    <div class="Carrucel">
      <div class="row">
        <div class="MultiCarousel" data-items="1,3,5,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    '.$items.'
                </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
  </div>
</div>
  ';
  return do_shortcode($elcodigo);
}

add_shortcode('carrousel_original3333', 'funcion_carrousel3333' );
function funcion_carrousel3333($atts){
  $elcodigo="";

  $elcodigo.='
              <style>
                body{
                  padding-top:20px;
                }
                .carousel {
                    margin-bottom: 0;
                    padding: 0 40px 30px 40px;
                }
                /* The controlsy */
                .carousel-control {
                  left: -12px;
                    height: 40px;
                  width: 40px;
                    background: none repeat scroll 0 0 #222222;
                    border: 4px solid #FFFFFF;
                    border-radius: 23px 23px 23px 23px;
                    margin-top: 90px;
                }
                .carousel-control.right {
                  right: -12px;
                }
                /* The indicators */
                .carousel-indicators {
                  right: 50%;
                  top: auto;
                  bottom: -10px;
                  margin-right: -19px;
                }
                /* The colour of the indicators */
                .carousel-indicators li {
                  background: #cecece;
                }
                .carousel-indicators .active {
                background: #428bca;
                }
              </style>';

  $args = array(
      'posts_per_page'   => 1000,
      'offset'           => 0,
      'category'         => array(9),
      'orderby'          => 'post__in',
      'order'            => 'DESC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'post_status'      => 'publish',
      'suppress_filters' => true );
  $posts = get_posts($args);

  $elcodigo.='<div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div id="Carousel" class="carousel slide">
                   
                  <!--ol class="carousel-indicators">
                      <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#Carousel" data-slide-to="1"></li>
                      <li data-target="#Carousel" data-slide-to="2"></li>
                  </o--l>
                   
                  <!-- Carousel items -->
                  <div class="carousel-inner">';
  foreach ($posts as $post) {
    $i++;
    $thispage = get_page($post->ID);
    $link = get_permalink($post->ID);
    $nombre = $post->post_title;
    $cargo = get_post_meta($thispage->ID, 'wpcf-elcargo', true);
    $contenido = $post->post_content;
    $html1.='el nombre:'.$nombre.'<br>';
    $html1.='el cargo:'.$cargo.'<br>';
    $html1.='el contenido:'.$thispage->post_content;
    $imagen = get_the_post_thumbnail_url( $thispage->ID, array(250,250) );
    $datos = get_the_excerpt($thispage->ID);

    if ($i==1) {
      $elcodigo.='<div class="item active">
                <div class="row madreaa1">';
    }
 
    $elcodigo.='<div class="col-md-3 tooltip11 perfil_pop1" data-contenido="'.$contenido.'">
                  <a  href="javascript:void(0)"  class="thumbnail eletumbnail">
                    <img class="imagen_carru" src="'.$imagen.'" alt="Image" style="max-width:100%;">
                  </a>
                  <div class="texto">
                    <h4 class="elcargonombre" >'.$nombre.'</h4>
                    <p class="elcargocargo">'.$datos.'</p>
                  </div>
                </div>';
    if (($i%4)==0) {
      $elcodigo.='</div>
                </div>';
        $elcodigo.='<div class="item">
                <div class="row madreaa1">';
    }

    if ($i==(count($posts))) {
      $elcodigo.='</div>
                </div>';
    }


  }
   
             
             
             
            $elcodigo.=' </div><!--.carousel-inner-->
              <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
              <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
            </div><!--.Carousel-->
                   
          </div>
        </div>
      </div><!--.container-->';
  return do_shortcode($elcodigo);
}


add_shortcode('carrousel_original2223', 'funcion_carrousel2223' );
function funcion_carrousel2223($atts){
  $elcodigo="";

  $elcodigo.='
              <style>
                body{
                  padding-top:20px;
                }
                .carousel {
                    margin-bottom: 0;
                    padding: 0 40px 30px 40px;
                }
                /* The controlsy */
                .carousel-control {
                  left: -12px;
                    height: 40px;
                  width: 40px;
                    background: none repeat scroll 0 0 #222222;
                    border: 4px solid #FFFFFF;
                    border-radius: 23px 23px 23px 23px;
                    margin-top: 90px;
                }
                .carousel-control.right {
                  right: -12px;
                }
                /* The indicators */
                .carousel-indicators {
                  right: 50%;
                  top: auto;
                  bottom: -10px;
                  margin-right: -19px;
                }
                /* The colour of the indicators */
                .carousel-indicators li {
                  background: #cecece;
                }
                .carousel-indicators .active {
                background: #428bca;
                }
              </style>';

  $args = array(
      'posts_per_page'   => 1000,
      'offset'           => 0,
      'category'         => array(9),
      'orderby'          => 'post__in',
      'order'            => 'DESC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'post_status'      => 'publish',
      'suppress_filters' => true );
  $posts = get_posts($args);

  $elcodigo.='<div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div id="Carousel2" class="carousel slide">
                   
                  <!--ol class="carousel-indicators">
                      <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#Carousel" data-slide-to="1"></li>
                      <li data-target="#Carousel" data-slide-to="2"></li>
                  </o--l>
                   
                  <!-- Carousel items -->
                  <div class="carousel-inner">';
  foreach ($posts as $post) {
    $i++;
    $thispage = get_page($post->ID);
    $link = get_permalink($post->ID);
    $nombre = $post->post_title;
    $cargo = get_post_meta($thispage->ID, 'wpcf-elcargo', true);
    $contenido = $post->post_content;
    $html1.='el nombre:'.$nombre.'<br>';
    $html1.='el cargo:'.$cargo.'<br>';
    $html1.='el contenido:'.$thispage->post_content;
    $imagen = get_the_post_thumbnail_url( $thispage->ID, array(250,250) );

    if ($i==1) {
      $elcodigo.='<div class="item active">
                <div class="row">';
    }
 
    $elcodigo.='<div class="col-md-3 tooltip11" data-toggle="tooltip" data-placement="right">
                  <a href="#"  class="thumbnail eletumbnail">
                    <img class="imagen_carru"  data-toggle="tooltip" data-placement="bottom" title="'.$contenido.'" src="'.$imagen.'" alt="Image" style="max-width:100%;">
                  </a>
                  <div class="texto">
                    <h4 class="elcargonombre" >'.$nombre.'</h4>
                    <p class="elcargocargo">'.$cargo.'</p>
                  </div>
                </div>';
    if (($i%1)==0) {
      $elcodigo.='</div>
                </div>';
        $elcodigo.='<div class="item">
                <div class="row">';
    }

    if ($i==(count($posts))) {
      $elcodigo.='</div>
                </div>';
    }


  }
   
             
             
             
            $elcodigo.=' </div><!--.carousel-inner-->
              <a data-slide="prev" href="#Carousel2" class="left carousel-control">‹</a>
              <a data-slide="next" href="#Carousel2" class="right carousel-control">›</a>
            </div><!--.Carousel-->
                   
          </div>
        </div>
      </div><!--.container-->';
  return do_shortcode($elcodigo);
}



add_shortcode('carrousel_original_movil', 'funcion_carrousel_original_movil' );
function funcion_carrousel_original_movil($atts){
  $elcodigo="";

  $elcodigo.='
              <style>
                body{
                  padding-top:20px;
                }
                .carousel {
                    margin-bottom: 0;
                    padding: 0 40px 30px 40px;
                }
                /* The controlsy */
                .carousel-control {
                  left: -12px;
                    height: 40px;
                  width: 40px;
                    background: none repeat scroll 0 0 #222222;
                    border: 4px solid #FFFFFF;
                    border-radius: 23px 23px 23px 23px;
                    margin-top: 90px;
                }
                .carousel-control.right {
                  right: -12px;
                }
                /* The indicators */
                .carousel-indicators {
                  right: 50%;
                  top: auto;
                  bottom: -10px;
                  margin-right: -19px;
                }
                /* The colour of the indicators */
                .carousel-indicators li {
                  background: #cecece;
                }
                .carousel-indicators .active {
                background: #428bca;
                }
              </style>';

  $args = array(
      'posts_per_page'   => 1000,
      'offset'           => 0,
      'category'         => array(9),
      'orderby'          => 'post__in',
      'order'            => 'DESC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'post_status'      => 'publish',
      'suppress_filters' => true );
  $posts = get_posts($args);

  $elcodigo.='<div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div id="Carousel23" class="carousel slide">
                  <div class="carousel-inner">';
  foreach ($posts as $post) {
    $i++;
    $thispage = get_page($post->ID);
    $link = get_permalink($post->ID);
    $nombre = $post->post_title;
    $cargo = get_post_meta($thispage->ID, 'wpcf-elcargo', true);
    $contenido = $post->post_content;
    $html1.='el nombre:'.$nombre.'<br>';
    $html1.='el cargo:'.$cargo.'<br>';
    $html1.='el contenido:'.$thispage->post_content;
    $imagen = get_the_post_thumbnail_url( $thispage->ID, array(250,250) );
    $datos = get_the_excerpt($thispage->ID);

    if ($i==1) {
      $elcodigo.='<div class="item active madreaa1">
                <div class="row ">';
    }
 
    $elcodigo.='<div class="col-md-6 tooltip11 " >
                  <a href="javascript:void(0)"  class="thumbnail eletumbnail item_carusel_perfil imagen_carru" data-contenido="'.$contenido.'">
                    <img class=""  data-toggle="tooltip" data-placement="bottom" src="'.$imagen.'" alt="Image" style="max-width:100%;">
                  </a>
                  <div class="texto">
                    <h4 class="elcargonombre" >'.$nombre.'</h4>
                    <p class="elcargocargo">'.$cargo.'</p>
                  </div>
                </div>';
    if (($i%1)==0) {
      $elcodigo.='</div>
                </div>';
        $elcodigo.='<div class="item madreaa1">
                <div class="row">';
    }

    if ($i==(count($posts))) {
      $elcodigo.='</div>
                </div>';
    }


  }
   
             
             
             
            $elcodigo.=' </div><!--.carousel-inner-->
              <a data-slide="prev" href="#Carousel23" class="left carousel-control">‹</a>
              <a data-slide="next" href="#Carousel23" class="right carousel-control">›</a>
            </div><!--.Carousel-->
                   
          </div>
        </div>
      </div><!--.container-->';
  return do_shortcode($elcodigo);
}


add_shortcode('get_junta_durectiva', 'funcion_get_junta_durectiva' );
function funcion_get_junta_durectiva($atts){
  $elcodigo="";
  $args = array(
      'posts_per_page'   => 1000,
      'offset'           => 0,
      'category'         => $atts['id'],
      'orderby'          => 'post__in',
      'order'            => 'DESC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'post_status'      => 'publish',
      'suppress_filters' => true );
  $posts = get_posts($args);
  $items = "";
  foreach ($posts as $post) {
    $i++;
    $thispage = get_page($post->ID);
    $link = get_permalink($post->ID);
    $nombre = $post->post_title;
    $cargo = get_post_meta($thispage->ID, 'wpcf-elcargo', true);
    $contenido = $post->post_content;
    $html1.='el nombre:'.$nombre.'<br>';
    $html1.='el cargo:'.$cargo.'<br>';
    $html1.='el contenido:'.$thispage->post_content;
    $imagen = get_the_post_thumbnail_url( $thispage->ID, array(250,250) );
    $datos = get_the_excerpt($thispage->ID);

    $items.='
      <div class="item_junta madreaa1">
          <div class="item_carusel_perfil tooltip11" data-contenido="'.$contenido.'">
              <p><a  href="javascript:void(0)"  class="thumbnail eletumbnail_carusel">
                    <img class="imagen_carusel" src="'.$imagen.'" alt="Image" style="max-width:100%;">
                  </a></p>
              <div class="texto">
                  <h4 class="elcargonombre" >'.$nombre.'</h4>
                  <p class="elcargocargo">'.$datos.'</p>
                </div>
          </div>
      </div>
    ';

  }
  $elcodigo.='
      <div class="junta_cintent">
              '.$items.'
      </div>

  ';
  return do_shortcode($elcodigo);
}




add_shortcode( 'sacar_tooltips', 'lostooltips' );
function lostooltips($atts){

    $posts = get_posts(array('post__in'=>array($atts['elpost'])));
    /*print_r($posts);
    exit();*/
    $post = $posts[0];

    $thispage = get_page($post->ID);
    $link = get_permalink($post->ID);
    $contenido = $post->post_content;
    $title = $post->post_title;
    $image = get_the_post_thumbnail_url( $thispage->ID, array(711,474) );
    set_post_thumbnail_size( 230,170, array( 'center', 'center')  );


 
    $html.='<div class="tolltipsele2 " >
            <div class="eleimage" data-title="'.$title.'" data-contenido="'.$contenido.'" data-img="" style="background-image:url('.$image.')"></div>
            <p class="elep">'.$title.'</p>
            <!--img class="eleimage" data-title="'.$title.'" data-contenido="'.$contenido.'" data-img="'.$image.'" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/04/plus.png"-->';
    $html.='</div>';

    return do_shortcode($html);

}
add_shortcode( 'saacar_noticias', 'losposts' );

function losposts($atts){
     
    

    $args = array(
      'category'         => array($atts['categoroa']),
      'orderby'          => 'post__in',
      'order'            => 'DESC',
      'post_type'        => 'post',
      'post_status'      => 'publish',
      'numberposts'      => 4,
      'paged'            => $paged
    );

    $posts = get_posts($args);
    $html1.='<div class="row">';
    foreach ($posts as $post) {
      $thispage = get_page($post->ID);
      $link = get_permalink($post->ID);
      $title = $post->post_title;
      $image = get_the_post_thumbnail_url( $thispage->ID, array(711,474) );
      set_post_thumbnail_size( 230,170, array( 'center', 'center')  );

      $html1.='<div class="row">
                <div class="col-md-3 imagen1" style="background: url(http://estudioagil.com/hencorp/wp-content/uploads/2018/04/1-02-1.png) no-repeat center;">.col-md-4</div>
                
              </div>';
      
    }
    $html1.='</div>';


    return do_shortcode($html1);

}

add_shortcode( 'post-content-gh_formcontaco', 'post_content_gh_contactoformulario' );/*shortcode, nombrefuncion*/
//retorno el formulario ya sea ingles o español
function post_content_gh_contactoformulario($atts){
     if (qtranxf_getLanguage() == 'es') {
        $titulo = '[contact-form-7 id="118" title="Contacto HENCORP"]';
     }else{
        $titulo = '[contact-form-7 id="250" title="Contacto HENCORP_Ingles"]';
     }
      return do_shortcode($titulo);

}

add_shortcode( 'sacar_los_positos', 'page_content_shortcode1' );
 

function page_content_shortcode1($atts) {

  $thispage = get_page($atts["id"]);
  $datos = $thispage->post_content;
    return do_shortcode($datos);

}

//////////////////////////////////////////////////////////////////////////////////////////
add_shortcode( 'descargar_documentos1', 'page_content_descargar_documentos1' );
 

function page_content_descargar_documentos1($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document1 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Documentos Legales
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
        </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document1 descaga_document">
            <p class="document1_titulo">
              Legal Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_documentos2', 'page_content_descargar_documentos2' );
 

function page_content_descargar_documentos2($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document2 descaga_document" data-datos=\''.traducciones(array("id"=>"626")).'\'>
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Documentos Financieros
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
     	</div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document2 descaga_document"  data-datos=\''.traducciones(array("id"=>"626")).'\'>
            <p class="document1_titulo">
            Financial Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_documentos3', 'page_content_descargar_documentos3' );
 

function page_content_descargar_documentos3($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document3 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
               Otros Documentos
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
     	</div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document3 descaga_document">
            <p class="document1_titulo">
              Other Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_documentos4', 'page_content_descargar_documentos4' );
 

function page_content_descargar_documentos4($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document4 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Documentos Legales
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document4 descaga_document">
            <p class="document1_titulo">
              Legal Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_documentos5', 'page_content_descargar_documentos5' );
 

function page_content_descargar_documentos5($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document5 descaga_document"  data-datos=\''.traducciones(array("id"=>"660")).'\'>
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Documentos Financieros
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document5 descaga_document" data-datos=\''.traducciones(array("id"=>"660")).'\'>
            <p class="document1_titulo">
              Financial Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_documentos6', 'page_content_descargar_documentos6' );
 

function page_content_descargar_documentos6($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document6 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Otros Documentos
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document6 descaga_document">
            <p class="document1_titulo">
              Other Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_documentos7', 'page_content_descargar_documentos7' );
 

function page_content_descargar_documentos7($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document7 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
             Documentos Legales
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document7 descaga_document">
            <p class="document1_titulo">
              Legal Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_documentos8', 'page_content_descargar_documentos8' );
 

function page_content_descargar_documentos8($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document8 descaga_document" data-datos=\''.traducciones(array("id"=>"663")).'\'>
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Documentos Financieros
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document8 descaga_document" data-datos=\''.traducciones(array("id"=>"663")).'\'>
            <p class="document1_titulo">
              Financial Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_documentos9', 'page_content_descargar_documentos9' );
 

function page_content_descargar_documentos9($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document9 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Otros Documentos
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document9 descaga_document">
            <p class="document1_titulo">
              Other Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}


////////////////////////////////////////////////////////////////////////////////////////////////

add_shortcode( 'descargar_doc_panama1', 'page_content_descargar_doc_panama1' );
 

function page_content_descargar_doc_panama1($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document_panama1 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Documentos Legales
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
        </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document_panama1 descaga_document">
            <p class="document1_titulo">
              Legal Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_doc_panama2', 'page_content_descargar_doc_panama2' );
 

function page_content_descargar_doc_panama2($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document_panama2 descaga_document" data-datos=\''.traducciones(array("id"=>"679")).'\'>
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Documentos Financieros
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document_panama2 descaga_document" data-datos=\''.traducciones(array("id"=>"679")).'\'>
            <p class="document1_titulo">
            Financial Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_doc_panama3', 'page_content_descargar_doc_panama3' );
 

function page_content_descargar_doc_panama3($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document_panama3 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
               Otros Documentos
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document_panama3 descaga_document">
            <p class="document1_titulo">
              Other Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_doc_panama4', 'page_content_descargar_doc_panama4' );
 

function page_content_descargar_doc_panama4($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document_panama4 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Documentos Legales
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document_panama4 descaga_document">
            <p class="document1_titulo">
              Legal Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_doc_panama5', 'page_content_descargar_doc_panama5' );
 

function page_content_descargar_doc_panama5($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document_panama5 descaga_document" data-datos=\''.traducciones(array("id"=>"682")).'\'>
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Documentos Financieros
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document_panama5 descaga_document" data-datos=\''.traducciones(array("id"=>"682")).'\'>
            <p class="document1_titulo">
              Financial Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_doc_panama6', 'page_content_descargar_doc_panama6' );
 

function page_content_descargar_doc_panama6($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document_panama6 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Otros Documentos
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document_panama6 descaga_document">
            <p class="document1_titulo">
              Other Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_doc_panama7', 'page_content_descargar_doc_panama7' );
 

function page_content_descargar_doc_panama7($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document_panama7 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
             Documentos Legales
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document_panama7 descaga_document">
            <p class="document1_titulo">
              Legal Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_doc_panama8', 'page_content_descargar_doc_panama8' );
 

function page_content_descargar_doc_panama8($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document_panama8 descaga_document"  data-datos=\''.traducciones(array("id"=>"686")).'\'>
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Documentos Financieros
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document_panama8 descaga_document"  data-datos=\''.traducciones(array("id"=>"686")).'\'>
            <p class="document1_titulo">
              Financial Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}

add_shortcode( 'descargar_doc_panama9', 'page_content_descargar_doc_panama9' );
 

function page_content_descargar_doc_panama9($atts) {
  $html="";
  if (qtranxf_getLanguage() == 'es') {
        $html.='
        <div class="madreaa12">
          <div class="document_panama9 descaga_document">
            <p class="document1_titulo" style="color: #fff;font-size:12px;">
              Otros Documentos
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p style="color: #fff;"><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Descargar</span></p>
          </div>
      </div>
        ';
     }else{
        $html.='
        <div class="madreaa12">
          <div class="document_panama9 descaga_document">
            <p class="document1_titulo">
              Other Documents
            </p>
            <hr style="height: 1px;padding: 0px;margin: 0px;color: #fff;">
            <p ><img class="cuerpo_perfil_img" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/05/logo_botom.jpg"><span style="font-size: 12px;"> Download</span></p>
          </div>
        </div>
        ';
     }
    return do_shortcode($html);

}


////////////////////////////////////////////////////////////////////////////////////////////////
add_shortcode( 'sacar_linea_de_tiempo', 'page_content_linea_de_tiempo' );
 

function page_content_linea_de_tiempo($atts) {

  $thispage = get_page($atts["id"]);
  $datos = nl2br($thispage->post_content);
  //$datos = get_the_excerpt($atts["id"]);
  $titulo = $thispage->post_title;
  //madre1
  //

  $elspan='<p class="'.$atts["class"].'"><img src="'.$atts["imagen"].'" class="'.$atts["class2"].'" data-titulo="'.$titulo.'" data-datos=\''.$datos.'\'>';
  $elspan.='<a href="javascript:void(0)" data-toggle="modal" data-target="#modal_'.$titulo.'" class="'.$atts["class"].'" ><span class="'.$atts["class2"].'" data-titulo="'.$titulo.'" data-datos=\''.nl2br($thispage->post_content).'\'>'.$titulo.'</span></a><p>';
  $modal='
    <!-- Modal --><div id="modal_'.$titulo.'" class="modal fade" role="dialog"> <div class="modal-dialog"><!-- Modal content--> <div class="modal-content"> <div class="modal-header"> <button class="close" type="button" data-dismiss="modal">×</button> <h4 class="modal-title">'.$titulo.'</h4> </div> <div class="modal-body">'.nl2br($thispage->post_content).'</div> </div> </div> </div>
  ';
    return do_shortcode($elspan);

}


add_shortcode( 'sacar_footer', 'losfooters' );
 

function losfooters($atts) {


  $thispage = get_page($atts["id"]);
  $telefono = get_post_meta($thispage->ID, 'wpcf-telefono', true);
  $contenido = str_replace("</span>","<br></span>",$thispage->post_content);
  $datos.='<div class="text-center">
            <p class="titulof1"><strong>'.$thispage->post_title.'</strong></p>
            <p class="contenido1">'.nl2br($contenido).'</p>
          </div>';
  
    return do_shortcode($datos);

}




add_shortcode( 'sacar_linea_de_tiempo_movil', 'page_content_linea_de_tiempo_movil' );
 

function page_content_linea_de_tiempo_movil($atts) {

  $thispage = get_page($atts["id"]);
  $datos = $thispage->post_content;
  $titulo = $thispage->post_title;
/*
  <span class="madremovil1" data-titulo="'.$titulo.'" data-datos="'.$datos.'">
       2002
  </span>
  <span class="madremovil2" data-titulo="'.$titulo.'" data-datos="'.$datos.'">
     2010
  </span>*/
  $elspan="";
  if ($atts["lugar"]=='1') {
    $elspan.='<span class="madremovil1" data-titulo="'.$titulo.'" data-datos="'.$datos.'"></span>';
  }else{
    $elspan.='<span class="madremovil2" data-titulo="'.$titulo.'" data-datos="'.$datos.'"></span>';
  }
  //$elspan.='<span class="madre1" data-titulo="'.$titulo.'" data-datos="'.$datos.'">'.$titulo.'</span>';
    return do_shortcode($elspan);

}


add_shortcode( 'sacar_junta', 'page_content_sacar_junta' );
 

function page_content_sacar_junta($atts) {

  $thispage = get_page($atts["id"]);
  $datos = $thispage->post_content;
  $titulo = $thispage->post_title;
  $elspan.='<div class="junta_tool" style="height: 100%;width: 100%;" data-titulo="'.$titulo.'" data-datos="'.nl2br($datos).'"></div>';
  return do_shortcode($elspan);

}

add_shortcode( 'sacar_junta2', 'page_content_sacar_junta2' );
 

function page_content_sacar_junta2($atts) {

  $thispage = get_page($atts["id"]);
  $datos = $thispage->post_content;
  $titulo = $thispage->post_title;
  $elspan.='<div class="eledivtooltip"><h3 class="ele3">'.$titulo.'</h3>'.$datos.'</div>';
  return do_shortcode($elspan);

}

add_shortcode( 'sacar_imgen', 'page_content_sacar_imgen' );
 

function page_content_sacar_imgen($atts) {
  $espanyol='1429';
  $ingles='1432';
  $thispage = get_page((qtranxf_getLanguage() == 'es'?$espanyol:$ingles));
  $imagen = get_the_post_thumbnail_url( $thispage->ID, array(250,250) );
  return do_shortcode($imagen);

}


add_shortcode( 'formulario_sesion', 'funcion_sesion' );
  function funcion_sesion($atts) {
   //return wp_login_form( array( 'echo' => false ) );
    $html_ele="";
    global $current_user;
    get_currentuserinfo();
    //
    $html_ele.='
        <style>
          #form_contacto ::-webkit-input-placeholder { color: #000 !important; font-family: Montserrat !important;font-size: 16px;}
             #form_contacto :-moz-placeholder { color: #000; !important; font-family: Montserrat !important;font-size: 16px;}
             #form_contacto ::-moz-placeholder {  color: #000; !important; font-family: Montserrat !important;font-size: 16px;}
             #form_contacto :-ms-input-placeholder { color: #000; !important; font-family: Montserrat !important;font-size: 16px;}
             #form_contacto .error *::-webkit-input-placeholder { color: red !important; font-family: Montserrat !important;font-size: 16px;}
             #form_contacto .error *:-moz-placeholder { color: red !important; font-family: Montserrat !important;font-size: 16px;}
             #form_contacto .error *::-moz-placeholder {  color: red !important; font-family: Montserrat !important;font-size: 16px;}
             #form_contacto .error *:-ms-input-placeholder { color: red !important; font-family: Montserrat !important;font-size: 16px;}
            .login-form{
              background-color: #fff;
              padding-top:20px !important;
                padding-bottom: 20px !important;
                padding-left:80px !important;
                padding-right: 80px !important;
              border-radius: 20px;
                -moz-border-radius: 20px;
                -webkit-border-radius: 20px;
            }
            .box2{
              background: #EDEDED !important;
              color:#000 !important;
              border-radius: 20px !important;
                -moz-border-radius: 20px !important;
                -webkit-border-radius: 20px !important;
                font-size: 16px !important;
                padding:20px !important;
                
            }
              .login-form input.button,
               .login-form .btn_login1{
                  font-size: 17px !important;
                  padding: 8px !important;
                  padding-left: 30px !important;
                  padding-right: 30px !important;
              
              border-radius: 25px !important;
              -moz-border-radius: 25px !important;
              -webkit-border-radius: 25px !important;
              background: #3AAA35;
              border: 1px solid #3AAA35;
              color: #ffffff;
              font-size: 18px;
              height:40.075px;
              width: auto;
              }
              .pass{
                  margin: 20px 0px;
              }
          </style>
          ';
    $html_ele='

    


      <div class="login-form eleformulario" id="form_contacto">
          <form action="'.get_option('home').'/wp-login.php" method="post">
            <center style="margin-bottom: 15px;">
              <img src="http://estudioagil.com/hencorp/wp-content/uploads/2018/04/LOGO2-e1524514162342.png" alt="">
            </center>
             
              <div class="user" style="margin-top: 0px;">
                <input type="text" name="log" id="log" onfocus="this.placeholder=\'\'" onblur="this.placeholder=\''.((qtranxf_getLanguage() == 'es')?'Correo Electrónico':'E-mail').'\'" required  placeholder="'.((qtranxf_getLanguage() == 'es')?'Correo Electrónico':'E-mail').'" class="box2" />
              </div> <br>
              <div class="pass">
                <input type="password" name="pwd" onfocus="this.placeholder=\'\'" onblur="this.placeholder=\''.((qtranxf_getLanguage() == 'es')?'Clave':'Password').'\'" required id="pwd"  placeholder="'.((qtranxf_getLanguage() == 'es')?'Clave':'Password').'" class="box2" />
              </div>
              <center style="padding-bottom: 5px;"><a href="'.get_option('home').'/wp-login.php?action=lostpassword" style="color: #000000; font-size: 17px;">'.((qtranxf_getLanguage() == 'es')?'¿Olvidó su contraseña?':'Forgot password?').'</a></center> <div class="row">
                  <div class="col-md-12" style="text-aling:left;">
                      <center><input class="form-control btn btn_login1" type="submit" src="http://estudioagil.com/hencorp/wp-content/uploads/2018/04/LOGO2.png" name="submit" class="button" value="'.((qtranxf_getLanguage() == 'es')?'Ingresar':'Log In').'" /></center>
                      </div>
                  <!--div class="col-md-6" style="text-aling:right;">
                      <a class="form-control btn btn_login1" href="'.get_option('home').'/wp-login.php?action=lostpassword">&iquest;Olvid&oacute; su contrase&ntilde;a?</a>
                  </div-->
              </div>
          </form>
      </div>
      <br><br>';
    return $html_ele;
}


add_shortcode( 'traducciones', 'traducciones' );
 

function traducciones($atts) {


  $thispage = get_page($atts["id"]);
  $contenido = str_replace("</span>","<br></span>",$thispage->post_content);
  $datos.='<div class="contenido1_traducciones">
            '.nl2br($thispage->post_content).'
          </div>';
  
    return do_shortcode($datos);

}

add_shortcode( 'traducciones_titulos', 'traducciones_titulos' );
 

function traducciones_titulos($atts) {


  $thispage = get_page($atts["id"]);
  $contenido = str_replace("</span>","<br></span>",$thispage->post_content);
  $datos.='<div class="contenido1_traducciones">
            '.nl2br($thispage->post_title).'
          </div>';
  
    return do_shortcode(nl2br($thispage->post_title));

}

?>