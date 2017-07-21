<?php
add_action( 'widgets_init', function(){
    register_widget( 'VidEnPro_Widget' );
});

class VidEnPro_Widget extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'videnpro_widget',
            'description' => 'Widget for VidEnPro Videos',
        );

        parent::__construct( 'videnpro_widget', 'VidEnPro Widget', $widget_ops );
    }


    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }
        echo do_shortcode( $instance['shortcode'] );
		echo $instance['video_footer'];
        echo $args['after_widget'];
    }


    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
        // outputs the options form on admin
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'videnpro' );
		$shortcode = ! empty( $instance['shortcode'] ) ? $instance['shortcode'] : __( 'Shortcode', 'videnpro' );
		$video_footer = ! empty( $instance['video_footer'] ) ? $instance['video_footer'] : __( 'Text', 'videnpro' );
        ?>
            <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
            </p>
			<p>
            <label for="<?php echo $this->get_field_id( 'shortcode' ); ?>"><?php _e( 'Shortcode:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'shortcode' ); ?>" name="<?php echo $this->get_field_name( 'shortcode' ); ?>" type="text" value="<?php echo esc_attr( $shortcode ); ?>">
            </p>
			<p>
            <label for="<?php echo $this->get_field_id( 'video_footer' ); ?>"><?php _e( 'Text:' ); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'video_footer' ); ?>" name="<?php echo $this->get_field_name( 'video_footer' ); ?>"><?php echo esc_attr( $video_footer ); ?></textarea>
            </p>
        <?php
    }


    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
        foreach( $new_instance as $key => $value )
        {
            $updated_instance[$key] = sanitize_text_field($value);
        }

        return $updated_instance;
    }
}