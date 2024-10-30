<?php
/**
 * Loginify image radio.
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );


class Loginify_Image_Radio_Control extends WP_Customize_Control {
    public $type = 'radio';

    public function enqueue() {
        wp_enqueue_style( 'loginify-image-radio', LOGINIFY_URL . '/assets/css/loginify.css', array(), LOGINIFY_VERSION );
    }

    public function render_content() {
        if (empty($this->choices))
            return;
        ?>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
 
        <?php foreach ($this->choices as $value => $label) : ?>
            <span class="customize-inside-control-row image-radio-row">
                <input id="_customize-input-<?php echo esc_attr($this->id); ?>-<?php echo esc_attr($this->type); ?>-<?php echo esc_attr($value); ?>" type="radio" value="<?php echo esc_attr($value); ?>" name="_customize-<?php echo esc_attr($this->type); ?>-<?php echo esc_attr($this->id); ?>" <?php $this->link(); checked($this->value(), $value); ?>>
                <label for="_customize-input-<?php echo esc_attr($this->id); ?>-<?php echo esc_attr($this->type); ?>-<?php echo esc_attr($value); ?>">
                    <img src="<?php echo esc_url($label); ?>" alt="<?php echo esc_attr($value); ?>" />
                </label>
            </span>
        <?php endforeach;
    }
}
