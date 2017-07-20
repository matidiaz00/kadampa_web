<?php
/* ==========================================================================
   AGREGAR PROGRAMACION PARA SELECCIONAR CONTENIDO CON DROPDOWN
   ========================================================================== */
if (class_exists('WP_Customize_Control')) {
  class Post_Placeholder_control extends WP_Customize_Control {
    public function render_content() {
?>
  <label>
    <input type="text" value="" placeholder="<?php echo esc_html( $this->label ); ?>" data-customize-setting-link="<?php echo $this->id; ?>"/>
  </label>
<?php }}} ?>