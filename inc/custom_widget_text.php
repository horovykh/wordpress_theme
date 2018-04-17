<?php

	class Custom_Widget_Text extends WP_Widget{

		public function __construct(){
			$widget_text_options = array(
				'classname' => 'custom_widget_text',
				'description' => 'Показывает изображение перед заголовком и текстом',
			);
			parent::__construct('custom_widget_text_image', 'Текст и изображение', $widget_text_options);
		}

		public function form($instance){
			$title = $instance['title'];
			$desc = $instance['desc'];

			?>
			<p><label for="<?php echo $this->get_field_id('title'); ?>">Your Name: </label></p>
			<p>
				<input class="widefat" type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $title ?>">
			</p>
			<p><label for="<?php echo $this->get_field_id('desc'); ?>">Your Desc: </label></p>
			<p>
				<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('desc'); ?>"
                          name="<?php echo $this->get_field_name('desc'); ?>"><?php echo $desc ;?></textarea>
			</p>
            <p>
                <label for="<?php echo $this->get_field_id('image_uri'); ?>">Image</label><br />

				<?php
				if ( $instance['image_uri'] != '' ) :
					echo '<img src="'. $instance['image_uri'] . '"><br />';
				endif;
				?>

                <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>"
                       id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $instance['image_uri']; ?>" style="margin-top:5px;">

                <input type="button" class="button button-primary custom_media_button" id="custom_media_button"
                       name="<?php echo $this->get_field_name('image_uri'); ?>" value="Upload Image" style="margin-top:5px;" />
            </p>

			<?php
		}

		public function widget ($args, $instance){
			extract($args);
			$title = $instance['title'];
			$desc = $instance['desc'];	?>
            <img src="<?php echo esc_url($instance['image_uri']); ?>">
                    <?php echo $args['before_widget']; ?>

                    <?php echo $args['before_title'] . $title . $args['after_title']; ?>

                    <p><?php echo $desc ;?></p>
                    <?php echo $args['after_widget'];
		}

		public function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
			return $instance;
		}

	}

    function photo_upload_option($hook) {

            if ( $hook != 'widgets.php' ) {
                return;
            }
        wp_enqueue_media();
        wp_enqueue_script( 'upload_photo', ASSETS_URL. 'js/upload_image.js',
            array( 'jquery' ), '1.0', 'true' );
    }

    add_action('admin_enqueue_scripts', 'photo_upload_option');