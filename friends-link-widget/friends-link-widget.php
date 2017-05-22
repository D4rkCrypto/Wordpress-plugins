<?php
/**
 * Plugin Name: Friends Link Widget
 * Plugin URI: https://buffercode.com/project/friends-link-widget/
 * Description: Simple method to add your friends website url to your site through widget
 * Version: 1.7
 * Author: vinoth06
 * Author URI: https://buffercode.com/
 * License: GPLv2
 */

/**
 * Last modified by D4rk7r4c3r on May 22, 2017
 * New feature: Add more links, up to 8
 */

add_action( 'widgets_init', 'buffercode_fl_widget' );

function buffercode_fl_widget() {
	register_widget( 'buffercode_fl_widget_info' );
}

class buffercode_fl_widget_info extends WP_Widget {

	public function __construct() {
		$widget_ops = array( 'classname' => 'buffercode_fl_widget_info', 'description' => 'Friends Link Widget' );
		parent::__construct( 'buffercode_fl_widget_info', 'Friends Link', $widget_ops );
	}


	public function form( $instance ) {

		$buffercode_fl_name  = isset( $instance['buffercode_fl_name'] ) ? $instance['buffercode_fl_name'] : '';
		$buffercode_fl_text1 = isset( $instance['buffercode_fl_text1'] ) ? $instance['buffercode_fl_text1'] : '';
		$buffercode_fl_text2 = isset( $instance['buffercode_fl_text2'] ) ? $instance['buffercode_fl_text2'] : '';
		$buffercode_fl_text3 = isset( $instance['buffercode_fl_text3'] ) ? $instance['buffercode_fl_text3'] : '';
		$buffercode_fl_text4 = isset( $instance['buffercode_fl_text4'] ) ? $instance['buffercode_fl_text4'] : '';
		$buffercode_fl_text5 = isset( $instance['buffercode_fl_text5'] ) ? $instance['buffercode_fl_text5'] : '';
		$buffercode_fl_text6 = isset( $instance['buffercode_fl_text6'] ) ? $instance['buffercode_fl_text6'] : '';
		$buffercode_fl_text7 = isset( $instance['buffercode_fl_text7'] ) ? $instance['buffercode_fl_text7'] : '';
		$buffercode_fl_text8 = isset( $instance['buffercode_fl_text8'] ) ? $instance['buffercode_fl_text8'] : '';

		$buffercode_fl_link1 = isset( $instance['buffercode_fl_link1'] ) ? $instance['buffercode_fl_link1'] : '';
		$buffercode_fl_link2 = isset( $instance['buffercode_fl_link2'] ) ? $instance['buffercode_fl_link2'] : '';
		$buffercode_fl_link3 = isset( $instance['buffercode_fl_link3'] ) ? $instance['buffercode_fl_link3'] : '';
		$buffercode_fl_link4 = isset( $instance['buffercode_fl_link4'] ) ? $instance['buffercode_fl_link4'] : '';
		$buffercode_fl_link5 = isset( $instance['buffercode_fl_link5'] ) ? $instance['buffercode_fl_link5'] : '';
		$buffercode_fl_link6 = isset( $instance['buffercode_fl_link6'] ) ? $instance['buffercode_fl_link6'] : '';
		$buffercode_fl_link7 = isset( $instance['buffercode_fl_link7'] ) ? $instance['buffercode_fl_link7'] : '';
		$buffercode_fl_link8 = isset( $instance['buffercode_fl_link8'] ) ? $instance['buffercode_fl_link8'] : '';

		$buffercode_fl_bullet = isset( $instance['buffercode_fl_bullet'] ) ? $instance['buffercode_fl_bullet'] : 2;

		$buffercode_fl_target = isset( $instance['buffercode_fl_target'] ) ? $instance['buffercode_fl_target'] : 1;

		$buffercode_fl_favicon = isset( $instance['buffercode_fl_favicon'] ) ? $instance['buffercode_fl_favicon'] : 1;
		$buffercode_FB_favicon = isset( $instance['buffercode_FB_favicon'] ) ? $instance['buffercode_FB_favicon'] : 2;

		?>

		<p>Name:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_name' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_name ); ?>"/>
		</p>

		<p>Name 1:
			<input class="widefat" id="<?php echo $this->get_field_id( 'buffercode_fl_text1' ); ?>" name="<?php echo $this->get_field_name( 'buffercode_fl_text1' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text1 ); ?>"/>
		</p>
		<p>URL 1:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link1' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link1 ); ?>"/>
		</p>

		<p>Name 2:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text2' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text2 ); ?>"/>
		</p>
		<p>URL 2:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link2' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link2 ); ?>"/>
		</p>

		<p>Name 3:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text3' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text3 ); ?>"/>
		</p>
		<p>URL 3:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link3' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link3 ); ?>"/>
		</p>

		<p>Name 4:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text4' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text4 ); ?>"/>
		</p>
		<p>URL 4:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link4' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link4 ); ?>"/>
		</p>

		<p>Name 5:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text5' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text5 ); ?>"/>
		</p>
		<p>URL 5:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link5' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link5 ); ?>"/>
		</p>

		<p>Name 6:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text6' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text6 ); ?>"/>
		</p>
		<p>URL 6:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link6' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link6 ); ?>"/>
		</p>

		<p>Name 7:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text7' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text7 ); ?>"/>
		</p>
		<p>URL 7:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link7' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link7 ); ?>"/>
		</p>

		<p>Name 8:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_text8' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_text8 ); ?>"/>
		</p>
		<p>URL 8:
			<input class="widefat" name="<?php echo $this->get_field_name( 'buffercode_fl_link8' ); ?>" type="text" value="<?php echo esc_attr( $buffercode_fl_link8 ); ?>"/>
		</p>



		<!-- Open in Same or New Window BufferCode -->
		<p>Open in New Window:
			<select name="<?php echo $this->get_field_name( 'buffercode_fl_target' ); ?>" id="<?php echo $this->get_field_id( 'buffercode_fl_target' ); ?>" class="widefat">
				<?php
				$target_options = array( 'yes' => '1', 'no' => '2' );
				foreach ( $target_options as $target_value => $target_code ) {
					echo '<option value="' . $target_code . '" id="' . $target_code . '"', $buffercode_fl_target == $target_code ? ' selected="selected"' : '', '>', $target_value, '</option>';
				} ?>    </select>
		</p>

		<p>Show Bullet Style:
			<select name="<?php echo $this->get_field_name( 'buffercode_fl_bullet' ); ?>" id="<?php echo $this->get_field_id( 'buffercode_fl_bullet' ); ?>" class="widefat">
				<?php
				$bullet_options = array( 'yes' => '1', 'no' => '2' );
				foreach ( $bullet_options as $bullet_value => $bullet_code ) {
					echo '<option value="' . $bullet_code . '" id="' . $bullet_code . '"', $buffercode_fl_bullet == $bullet_code ? ' selected="selected"' : '', '>', $bullet_value, '</option>';
				} ?>    </select>
		</p>

		<p>Show Favicon:
			<select name="<?php echo $this->get_field_name( 'buffercode_fl_favicon' ); ?>" id="<?php echo $this->get_field_id( 'buffercode_fl_favicon' ); ?>" class="widefat">
				<?php
				$favicon_options = array( 'yes' => '1', 'no' => '2' );
				foreach ( $favicon_options as $favicon_value => $favicon_code ) {
					echo '<option value="' . $favicon_code . '" id="' . $favicon_code . '"', $buffercode_fl_favicon == $favicon_code ? ' selected="selected"' : '', '>', $favicon_value, '</option>';
				} ?>
			</select>
		</p>

		<p>Favicon in Front or Back:
			<select name="<?php echo $this->get_field_name( 'buffercode_FB_favicon' ); ?>" id="<?php echo $this->get_field_id( 'buffercode_FB_favicon' ); ?>" class="widefat">
				<?php
				$favicon_FB_option = array( 'Front' => '1', 'Back' => '2' );
				foreach ( $favicon_FB_option as $favicon_FB_value => $favicon_FB_code ) {
					echo '<option value="' . $favicon_FB_code . '" id="' . $favicon_FB_code . '"', $buffercode_FB_favicon == $favicon_FB_code ? ' selected="selected"' : '', '>', $favicon_FB_value, '</option>';
				} ?>
			</select>
		</p>
		<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance                       = $old_instance;
		$instance['buffercode_fl_name'] = ( ! empty( $new_instance['buffercode_fl_name'] ) ) ? strip_tags( $new_instance['buffercode_fl_name'] ) : '';

		$instance['buffercode_fl_text1'] = ( ! empty( $new_instance['buffercode_fl_text1'] ) ) ? strip_tags( $new_instance['buffercode_fl_text1'] ) : '';
		$instance['buffercode_fl_text2'] = ( ! empty( $new_instance['buffercode_fl_text2'] ) ) ? strip_tags( $new_instance['buffercode_fl_text2'] ) : '';
		$instance['buffercode_fl_text3'] = ( ! empty( $new_instance['buffercode_fl_text3'] ) ) ? strip_tags( $new_instance['buffercode_fl_text3'] ) : '';
		$instance['buffercode_fl_text4'] = ( ! empty( $new_instance['buffercode_fl_text4'] ) ) ? strip_tags( $new_instance['buffercode_fl_text4'] ) : '';
		$instance['buffercode_fl_text5'] = ( ! empty( $new_instance['buffercode_fl_text5'] ) ) ? strip_tags( $new_instance['buffercode_fl_text5'] ) : '';
		$instance['buffercode_fl_text6'] = ( ! empty( $new_instance['buffercode_fl_text6'] ) ) ? strip_tags( $new_instance['buffercode_fl_text6'] ) : '';
		$instance['buffercode_fl_text7'] = ( ! empty( $new_instance['buffercode_fl_text7'] ) ) ? strip_tags( $new_instance['buffercode_fl_text7'] ) : '';
		$instance['buffercode_fl_text8'] = ( ! empty( $new_instance['buffercode_fl_text8'] ) ) ? strip_tags( $new_instance['buffercode_fl_text8'] ) : '';

		$instance['buffercode_fl_link1'] = ( ! empty( $new_instance['buffercode_fl_link1'] ) ) ? strip_tags( $new_instance['buffercode_fl_link1'] ) : '';
		$instance['buffercode_fl_link2'] = ( ! empty( $new_instance['buffercode_fl_link2'] ) ) ? strip_tags( $new_instance['buffercode_fl_link2'] ) : '';
		$instance['buffercode_fl_link3'] = ( ! empty( $new_instance['buffercode_fl_link3'] ) ) ? strip_tags( $new_instance['buffercode_fl_link3'] ) : '';
		$instance['buffercode_fl_link4'] = ( ! empty( $new_instance['buffercode_fl_link4'] ) ) ? strip_tags( $new_instance['buffercode_fl_link4'] ) : '';
		$instance['buffercode_fl_link5'] = ( ! empty( $new_instance['buffercode_fl_link5'] ) ) ? strip_tags( $new_instance['buffercode_fl_link5'] ) : '';
		$instance['buffercode_fl_link6'] = ( ! empty( $new_instance['buffercode_fl_link6'] ) ) ? strip_tags( $new_instance['buffercode_fl_link6'] ) : '';
		$instance['buffercode_fl_link7'] = ( ! empty( $new_instance['buffercode_fl_link7'] ) ) ? strip_tags( $new_instance['buffercode_fl_link7'] ) : '';
		$instance['buffercode_fl_link8'] = ( ! empty( $new_instance['buffercode_fl_link8'] ) ) ? strip_tags( $new_instance['buffercode_fl_link8'] ) : '';

		$instance['buffercode_fl_bullet'] = ( ! empty( $new_instance['buffercode_fl_bullet'] ) ) ? strip_tags( $new_instance['buffercode_fl_bullet'] ) : '';

		$instance['buffercode_fl_target'] = ( ! empty( $new_instance['buffercode_fl_target'] ) ) ? strip_tags( $new_instance['buffercode_fl_target'] ) : '';

		$instance['buffercode_fl_favicon'] = ( ! empty( $new_instance['buffercode_fl_favicon'] ) ) ? strip_tags( $new_instance['buffercode_fl_favicon'] ) : '';

		$instance['buffercode_FB_favicon'] = ( ! empty( $new_instance['buffercode_FB_favicon'] ) ) ? strip_tags( $new_instance['buffercode_FB_favicon'] ) : '';

		return $instance;
	}

	function widget( $args, $instance ) {
		extract( $args );

		echo $before_widget;
		$buffercode_fl_name    = apply_filters( 'widget_title', $instance['buffercode_fl_name'] );
		$buffercode_fl_bullet  = empty( $instance['buffercode_fl_bullet'] ) ? '&nbsp;' :
			$instance['buffercode_fl_bullet'];
		$buffercode_fl_target  = empty( $instance['buffercode_fl_target'] ) ? '&nbsp;' : $instance['buffercode_fl_target'];
		$buffercode_fl_favicon = empty( $instance['buffercode_fl_favicon'] ) ? '&nbsp;' : $instance['buffercode_fl_favicon'];
		$buffercode_FB_favicon = empty( $instance['buffercode_FB_favicon'] ) ? '&nbsp;' : $instance['buffercode_FB_favicon'];

		$buffercode_fl_text1 = ( ! empty( $instance['buffercode_fl_text1'] ) ) ? strip_tags( $instance['buffercode_fl_text1'] ) : '';
		$buffercode_fl_text2 = ( ! empty( $instance['buffercode_fl_text2'] ) ) ? strip_tags( $instance['buffercode_fl_text2'] ) : '';
		$buffercode_fl_text3 = ( ! empty( $instance['buffercode_fl_text3'] ) ) ? strip_tags( $instance['buffercode_fl_text3'] ) : '';
		$buffercode_fl_text4 = ( ! empty( $instance['buffercode_fl_text4'] ) ) ? strip_tags( $instance['buffercode_fl_text4'] ) : '';
		$buffercode_fl_text5 = ( ! empty( $instance['buffercode_fl_text5'] ) ) ? strip_tags( $instance['buffercode_fl_text5'] ) : '';
		$buffercode_fl_text6 = ( ! empty( $instance['buffercode_fl_text6'] ) ) ? strip_tags( $instance['buffercode_fl_text6'] ) : '';
		$buffercode_fl_text7 = ( ! empty( $instance['buffercode_fl_text7'] ) ) ? strip_tags( $instance['buffercode_fl_text7'] ) : '';
		$buffercode_fl_text8 = ( ! empty( $instance['buffercode_fl_text8'] ) ) ? strip_tags( $instance['buffercode_fl_text8'] ) : '';

		$buffercode_fl_link1 = ( ! empty( $instance['buffercode_fl_link1'] ) ) ? strip_tags( $instance['buffercode_fl_link1'] ) : '';
		$buffercode_fl_link2 = ( ! empty( $instance['buffercode_fl_link2'] ) ) ? strip_tags( $instance['buffercode_fl_link2'] ) : '';
		$buffercode_fl_link3 = ( ! empty( $instance['buffercode_fl_link3'] ) ) ? strip_tags( $instance['buffercode_fl_link3'] ) : '';
		$buffercode_fl_link4 = ( ! empty( $instance['buffercode_fl_link4'] ) ) ? strip_tags( $instance['buffercode_fl_link4'] ) : '';
		$buffercode_fl_link5 = ( ! empty( $instance['buffercode_fl_link5'] ) ) ? strip_tags( $instance['buffercode_fl_link5'] ) : '';
		$buffercode_fl_link6 = ( ! empty( $instance['buffercode_fl_link6'] ) ) ? strip_tags( $instance['buffercode_fl_link6'] ) : '';
		$buffercode_fl_link7 = ( ! empty( $instance['buffercode_fl_link7'] ) ) ? strip_tags( $instance['buffercode_fl_link7'] ) : '';
		$buffercode_fl_link8 = ( ! empty( $instance['buffercode_fl_link8'] ) ) ? strip_tags( $instance['buffercode_fl_link8'] ) : '';


		if ( ! empty( $name ) ) {
			echo $before_title . $buffercode_fl_name . $after_title;
		};


		if ( $buffercode_FB_favicon == 2 ) {
			if ( ! empty( $buffercode_fl_link1 ) && ! empty( $buffercode_fl_text1 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<a href="<?php echo $buffercode_fl_link1; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text1; ?><?php if ( $buffercode_fl_favicon == 1 ) { ?>
							<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link1; ?>"/> <?php } ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link2 ) && ! empty( $buffercode_fl_text2 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<a href="<?php echo $buffercode_fl_link2; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text2; ?><?php if ( $buffercode_fl_favicon == 1 ) { ?>
							<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link2; ?>" /><?php } ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link3 ) && ! empty( $buffercode_fl_text3 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<a href="<?php echo $buffercode_fl_link3; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text3; ?><?php if ( $buffercode_fl_favicon == 1 ) { ?>
							<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link3; ?>" /><?php } ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link4 ) && ! empty( $buffercode_fl_text4 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<a href="<?php echo $buffercode_fl_link4; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text4; ?><?php if ( $buffercode_fl_favicon == 1 ) { ?>
							<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link4; ?>" /><?php } ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link5 ) && ! empty( $buffercode_fl_text5 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<a href="<?php echo $buffercode_fl_link5; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text5; ?><?php if ( $buffercode_fl_favicon == 1 ) { ?>
							<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link5; ?>" /><?php } ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link6 ) && ! empty( $buffercode_fl_text6 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<a href="<?php echo $buffercode_fl_link6; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text6; ?><?php if ( $buffercode_fl_favicon == 1 ) { ?>
							<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link6; ?>" /><?php } ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link7 ) && ! empty( $buffercode_fl_text7 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<a href="<?php echo $buffercode_fl_link7; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text7; ?><?php if ( $buffercode_fl_favicon == 1 ) { ?>
							<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link7; ?>" /><?php } ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link8 ) && ! empty( $buffercode_fl_text8 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<a href="<?php echo $buffercode_fl_link8; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_tex8; ?><?php if ( $buffercode_fl_favicon == 1 ) { ?>
							<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link8; ?>" /><?php } ?>
					</a>
				</li>
			<?php }

		} else {
			if ( ! empty( $buffercode_fl_link1 ) && ! empty( $buffercode_fl_text1 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<?php if ( $buffercode_fl_favicon == 1 ) { ?>
						<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link1; ?>"/> <?php } ?>
					<a href="<?php echo $buffercode_fl_link1; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text1; ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link2 ) && ! empty( $buffercode_fl_text2 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<?php if ( $buffercode_fl_favicon == 1 ) { ?>
						<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link2; ?>" /><?php } ?>
					<a href="<?php echo $buffercode_fl_link2; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text2; ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link3 ) && ! empty( $buffercode_fl_text3 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<?php if ( $buffercode_fl_favicon == 1 ) { ?>
						<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link3; ?>" /><?php } ?>
					<a href="<?php echo $buffercode_fl_link3; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text3; ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link4 ) && ! empty( $buffercode_fl_text4 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<?php if ( $buffercode_fl_favicon == 1 ) { ?>
						<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link4; ?>" /><?php } ?>
					<a href="<?php echo $buffercode_fl_link4; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text4; ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link5 ) && ! empty( $buffercode_fl_text5 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<?php if ( $buffercode_fl_favicon == 1 ) { ?>
						<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link5; ?>" /><?php } ?>
					<a href="<?php echo $buffercode_fl_link5; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text5; ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link6 ) && ! empty( $buffercode_fl_text6 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<?php if ( $buffercode_fl_favicon == 1 ) { ?>
						<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link6; ?>" /><?php } ?>
					<a href="<?php echo $buffercode_fl_link6; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text6; ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link7 ) && ! empty( $buffercode_fl_text7 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<?php if ( $buffercode_fl_favicon == 1 ) { ?>
						<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link7; ?>" /><?php } ?>
					<a href="<?php echo $buffercode_fl_link7; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text7; ?>
					</a>
				</li>
			<?php }

			if ( ! empty( $buffercode_fl_link8 ) && ! empty( $buffercode_fl_text8 ) ) { ?>
				<li <?php if ( $buffercode_fl_bullet == 2 ) { ?> style="list-style-type:none;" <?php } ?> >
					<?php if ( $buffercode_fl_favicon == 1 ) { ?>
						<img src="http://www.google.com/s2/favicons?domain=<?php echo $buffercode_fl_link8; ?>" /><?php } ?>
					<a href="<?php echo $buffercode_fl_link8; ?>" <?php if ( $buffercode_fl_target == 1 ) { ?> target="_blank" <?php } ?>><?php echo $buffercode_fl_text8; ?>
					</a>
				</li>
			<?php }

		}
		echo $after_widget;
	}
} ?>
