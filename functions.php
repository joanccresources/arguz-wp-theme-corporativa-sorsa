<?php

/*** Editor clasico ***/
add_filter('use_block_editor_for_post', '__return_false', 10);

add_action('wp_enqueue_scripts', 'artech_child_theme_styles', 3);
function artech_child_theme_styles()
{
  wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/js/main.js?v=' . time(), array(), null, true);
  if (is_page("trabaja-con-nosotros")) {
    wp_enqueue_script('trabaja-script', get_stylesheet_directory_uri() . '/assets/js/trabaja-con-nosotros.js?v=' . time(), array(), null, true);
  }
  if (is_singular("convocatoria")) {
    wp_enqueue_script('convocatoria-detalle-script', get_stylesheet_directory_uri() . '/assets/js/convocatoria-detalle.js?v=' . time(), array(), null, true);
  }
  wp_enqueue_style('artech-parent-style', get_template_directory_uri() . '/style.css', array('bootstrap'));
  wp_enqueue_style('artech-child-style', get_stylesheet_uri(), array('artech-parent-style'));
}

/*** Agregar PHP template ELEMENTOR ***/
function wpc_elementor_shortcode($atts)
{
  // echo "Esta es mi salida PHP personalizada en Elementor";
  echo ("<h1>" . get_the_title() . "</h1>");
}
add_shortcode("my_elementor_php_output", "wpc_elementor_shortcode");

/*** Convocatorias ***/
// Vigencia
function wpc_elementor_shortcode_vigencia($atts)
{
  $vigencia = get_field('vigencia');
  echo '<div class="elementor-element elementor-element-8481363 elementor-widget elementor-widget-heading" data-id="8481363" data-element_type="widget" data-settings="{&quot;tc_dark_mode_responsive_hide_in_dark&quot;:&quot;no&quot;,&quot;tc_dark_mode_responsive_hide_in_light&quot;:&quot;no&quot;}" data-widget_type="heading.default">
    <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default">VIGENTE HASTA EL ' . $vigencia . '</h2>
    </div>
  </div>';
}
add_shortcode("convocatoria_vigencia", "wpc_elementor_shortcode_vigencia");

function wpc_elementor_shortcode_ciudad($atts)
{
  $ciudad = get_field('ciudad');
  echo '<div class="elementor-element elementor-element-2803b0a elementor-widget elementor-widget-heading" data-id="2803b0a" data-element_type="widget" data-settings="{&quot;tc_dark_mode_responsive_hide_in_dark&quot;:&quot;no&quot;,&quot;tc_dark_mode_responsive_hide_in_light&quot;:&quot;no&quot;}" data-widget_type="heading.default">
    <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default">' . $ciudad . '</h2>
    </div>
  </div>';
}
add_shortcode("convocatoria_ciudad", "wpc_elementor_shortcode_ciudad");

function wpc_elementor_shortcode_fecha_inicio($atts)
{
  $fecha_inicio = get_field('fecha_inicio');
  echo '<div class="elementor-element elementor-element-2803b0a elementor-widget elementor-widget-heading" data-id="2803b0a" data-element_type="widget" data-settings="{&quot;tc_dark_mode_responsive_hide_in_dark&quot;:&quot;no&quot;,&quot;tc_dark_mode_responsive_hide_in_light&quot;:&quot;no&quot;}" data-widget_type="heading.default">
    <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default">' . $fecha_inicio . '</h2>
    </div>
  </div>';
}
add_shortcode("convocatoria_fecha_inicio", "wpc_elementor_shortcode_fecha_inicio");

function wpc_elementor_shortcode_modalidad($atts)
{
  $modalidad = get_field('modalidad');
  echo '<div class="elementor-element elementor-element-2803b0a elementor-widget elementor-widget-heading" data-id="2803b0a" data-element_type="widget" data-settings="{&quot;tc_dark_mode_responsive_hide_in_dark&quot;:&quot;no&quot;,&quot;tc_dark_mode_responsive_hide_in_light&quot;:&quot;no&quot;}" data-widget_type="heading.default">
    <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default">' . $modalidad . '</h2>
    </div>
  </div>';
}
add_shortcode("convocatoria_modalidad", "wpc_elementor_shortcode_modalidad");

function wpc_elementor_shortcode_vacantes($atts)
{
  $vacantes = get_field('vacantes');
  echo '<div class="elementor-element elementor-element-2803b0a elementor-widget elementor-widget-heading" data-id="2803b0a" data-element_type="widget" data-settings="{&quot;tc_dark_mode_responsive_hide_in_dark&quot;:&quot;no&quot;,&quot;tc_dark_mode_responsive_hide_in_light&quot;:&quot;no&quot;}" data-widget_type="heading.default">
    <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default">' . $vacantes . '</h2>
    </div>
  </div>';
}
add_shortcode("convocatoria_vacantes", "wpc_elementor_shortcode_vacantes");

function wpc_elementor_shortcode_experiencia($atts)
{
  $experiencia = get_field('experiencia');
  echo '<div class="elementor-element elementor-element-2803b0a elementor-widget elementor-widget-heading" data-id="2803b0a" data-element_type="widget" data-settings="{&quot;tc_dark_mode_responsive_hide_in_dark&quot;:&quot;no&quot;,&quot;tc_dark_mode_responsive_hide_in_light&quot;:&quot;no&quot;}" data-widget_type="heading.default">
    <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default">' . $experiencia . '</h2>
    </div>
  </div>';
}
add_shortcode("convocatoria_experiencia", "wpc_elementor_shortcode_experiencia");

function wpc_elementor_shortcode_dias_de_trabajo($atts)
{
  $dias_de_trabajo = get_field('dias_de_trabajo');
  echo '<div class="elementor-element elementor-element-2803b0a elementor-widget elementor-widget-heading" data-id="2803b0a" data-element_type="widget" data-settings="{&quot;tc_dark_mode_responsive_hide_in_dark&quot;:&quot;no&quot;,&quot;tc_dark_mode_responsive_hide_in_light&quot;:&quot;no&quot;}" data-widget_type="heading.default">
    <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default">' . $dias_de_trabajo . '</h2>
    </div>
  </div>';
}
add_shortcode("convocatoria_dias_de_trabajo", "wpc_elementor_shortcode_dias_de_trabajo");

function wpc_elementor_shortcode_horario($atts)
{
  $horario = get_field('horario');
  echo '<div class="elementor-element elementor-element-2803b0a elementor-widget elementor-widget-heading" data-id="2803b0a" data-element_type="widget" data-settings="{&quot;tc_dark_mode_responsive_hide_in_dark&quot;:&quot;no&quot;,&quot;tc_dark_mode_responsive_hide_in_light&quot;:&quot;no&quot;}" data-widget_type="heading.default">
    <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default">' . $horario . '</h2>
    </div>
  </div>';
}
add_shortcode("convocatoria_horario", "wpc_elementor_shortcode_horario");

function wpc_elementor_shortcode_salario($atts)
{
  $salario = get_field('salario');
  echo '<div class="elementor-element elementor-element-2803b0a elementor-widget elementor-widget-heading" data-id="2803b0a" data-element_type="widget" data-settings="{&quot;tc_dark_mode_responsive_hide_in_dark&quot;:&quot;no&quot;,&quot;tc_dark_mode_responsive_hide_in_light&quot;:&quot;no&quot;}" data-widget_type="heading.default">
    <div class="elementor-widget-container">
      <h2 class="elementor-heading-title elementor-size-default">' . $salario . '</h2>
    </div>
  </div>';
}
add_shortcode("convocatoria_salario", "wpc_elementor_shortcode_salario");

function wpc_elementor_shortcode_requisitos($atts)
{
  $requisitos = get_field('requisitos');
  echo $requisitos;
}
add_shortcode("convocatoria_requisitos", "wpc_elementor_shortcode_requisitos");

function wpc_elementor_shortcode_responsabilidades($atts)
{
  $responsabilidades = get_field('responsabilidades');
  echo $responsabilidades;
}
add_shortcode("convocatoria_responsabilidades", "wpc_elementor_shortcode_responsabilidades");



// test-convocatorias
function wpc_elementor_shortcode_trabaja_convocatorias($atts)
{
  // Inicializa la variable de salida
  $output = '';

  // Argumentos para la consulta
  $args = array(
    'post_type' => 'convocatoria', // Nombre de tu post type
    'posts_per_page' => -1,        // -1 para obtener todos los posts
  );

  // La consulta
  $query = new WP_Query($args);

  // Verifica si hay posts
  if ($query->have_posts()) :
    $output .= '<div
  class="elementor-element elementor-element-61c273e convocatorias-disponibles elementor-widget elementor-widget-artech-careers"
  data-id="61c273e"
  data-element_type="widget"
  id="test-convocatorias"
  data-settings=\'{"tc_dark_mode_responsive_hide_in_dark":"no","tc_dark_mode_responsive_hide_in_light":"no"}\'
  data-widget_type="artech-careers.default">';
    $output .= '<div class="elementor-widget-container">';
    $output .= '<div class="artech-careers">';
    $count = 0;
    while ($query->have_posts()) : $query->the_post();
      $count++;
      // $terms = get_the_terms(get_the_ID(), 'tipo-de-convocatoria');
      $output .= '<a href="' . get_permalink() . '" class="career-card">';
      $output .= '<div class="row">';

      $output .= '<div class="col-lg-2 col-6">';
      if ($count <= 9):
        $output .= '<span class="num"> 0' . $count . '</span>';
      else:
        $output .= '<span class="num"> ' . $count . '</span>';
      endif;
      $output .= '</div>';

      $terms = get_the_terms(get_the_ID(), 'tipo-de-convocatoria');
      $output .= '<div class="col-lg-2 col-6">';
      if ($terms && !is_wp_error($terms)) :
        $output .= '<span class="tag"> ' . $terms[0]->name . ' </span>';
      endif;
      $output .= '</div>';

      $output .= '<div class="col-lg-4">';
      $output .= '<div class="inf my-4 my-lg-0">';
      $output .= '<h6 class="title mb-2">' . get_the_title() . '</h6>';

      $vigencia = get_field('vigencia');
      if ($vigencia):
        $output .= '<p class="description">Vigente hasta ' . $vigencia . '</p>';
      else:
        $output .= '<p class="description">Vigente hasta ---</p>';
      endif;

      $output .= '</div>';
      $output .= '</div>';

      $output .= '<div class="col-lg-2 col-6">';
      $modalidad = get_field('modalidad');
      if ($modalidad):
        $output .= '<div class="job text-lg-center">' . $modalidad . '</div>';
      else:
        $output .= '<div class="job text-lg-center"></div>';
      endif;
      $output .= '</div>';

      $output .= '<div class="col-lg-2 col-6">';
      $output .= '  <div class="artech-button fade-border-effect">';
      $output .= '    <span class="artech-button-content-wrapper">';
      $output .= '      <span class="artech-button-text">Ber_<br>convocatoria</span>';
      $output .= '      <img decoding="async" src="https://sorsa.pe/wp-content/uploads/2024/02/arrow_wh.svg&quot;" alt="Arrow" class="image">';
      $output .= '    </span>';
      $output .= '  </div>';
      $output .= '</div>';

      $output .= '</div>';
      $output .= '</a>';
    endwhile;
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';

    // Restablece la consulta global post data
    wp_reset_postdata();
  else :
    $output .= '<p>No se encontraron convocatorias.</p>';
  endif;

  // Retorna el contenido generado para ser mostrado en el shortcode
  return $output;
}
add_shortcode("trabaja_con_nosotros_convocatorias", "wpc_elementor_shortcode_trabaja_convocatorias");



// Shortcodes
require_once get_stylesheet_directory() . '/shortcodes/load-shortcodes.php';