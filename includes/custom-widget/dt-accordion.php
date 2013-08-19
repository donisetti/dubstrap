<?phpfunction dt_accordion() {	register_widget( 'dt_accordion' );}add_action( 'widgets_init', 'dt_accordion' );class dt_accordion extends WP_Widget{    function dt_accordion()     {		$widget_ops = array(             'classname' => 'dt_accordion',             'description' => __( 'Accordion Widget.', 'dewitech' )        );		$control_ops = array( 'id_base' => 'dt_accordion' );		$this->WP_Widget( 'dt_accordion', __( 'DT Accordion', 'dewitech' ), $widget_ops, $control_ops );   	}		function form( $instance )	{		global $icons_name;				$defaults = array(             'title' => __( 'Area of Expertise', 'dewitech' ),			'title1' => __( 'Illustration', 'dewitech' ),			'text1' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dewitech' ),			'title2' => __( 'Web Design', 'dewitech' ),			'text2' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dewitech' ),			'title3' => __( 'Graphic and Photography', 'dewitech' ),			'text3' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dewitech' ),			'title4' => __( 'Video Editing', 'dewitech' ),			'text4' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dewitech' ),			        );        		$instance = wp_parse_args( (array) $instance, $defaults ); ?>				<p>			<label>				<strong><?php _e( 'Widget Title', 'dewitech' ) ?>:</strong><br />				<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />			</label>			<label>				<strong><?php _e( 'Title1', 'dewitech' ) ?>:</strong><br />				<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title1' ); ?>" name="<?php echo $this->get_field_name( 'title1' ); ?>" value="<?php echo $instance['title1']; ?>" />			</label>			<label>				<strong><?php _e( 'Text1', 'dewitech' ) ?>:</strong><br />				<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'text1' ); ?>" name="<?php echo $this->get_field_name( 'text1' ); ?>" value="<?php echo $instance['text1']; ?>" />			</label>			<label>					<strong><?php _e( 'Title2', 'dewitech' ) ?>:</strong><br />				<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title2' ); ?>" name="<?php echo $this->get_field_name( 'title2' ); ?>" value="<?php echo $instance['title2']; ?>" />			</label>			<label>					<strong><?php _e( 'Text2', 'dewitech' ) ?>:</strong><br />				<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'text2' ); ?>" name="<?php echo $this->get_field_name( 'text2' ); ?>" value="<?php echo $instance['text2']; ?>" />			</label>			<label>					<strong><?php _e( 'Title3', 'dewitech' ) ?>:</strong><br />				<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title3' ); ?>" name="<?php echo $this->get_field_name( 'title3' ); ?>" value="<?php echo $instance['title3']; ?>" />			</label>			<label>					<strong><?php _e( 'Text3', 'dewitech' ) ?>:</strong><br />				<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'text3' ); ?>" name="<?php echo $this->get_field_name( 'text3' ); ?>" value="<?php echo $instance['text3']; ?>" />			</label>			<label>					<strong><?php _e( 'Title4', 'dewitech' ) ?>:</strong><br />				<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title4' ); ?>" name="<?php echo $this->get_field_name( 'title4' ); ?>" value="<?php echo $instance['title4']; ?>" />			</label>			<label>					<strong><?php _e( 'Text4', 'dewitech' ) ?>:</strong><br />				<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'text4' ); ?>" name="<?php echo $this->get_field_name( 'text4' ); ?>" value="<?php echo $instance['text4']; ?>" />			</label>        </p>       		<?php	}		function widget( $args, $instance )	{		extract( $args );		$text = isset($text);		$title = $instance['title'];		$title1 = $instance['title1'];		$text1 = $instance['text1'];		$title2 = $instance['title2'];		$text2 = $instance['text2'];		$title3 = $instance['title3'];		$text3 = $instance['text3'];		$title4 = $instance['title4'];		$text4 = $instance['text4'];				echo $before_widget;                		        $text .= '<h4>'. $title .'</h4>									<div class="accordion" id="accordion2">																			<div class="accordion-group">  											<div class="accordion-heading">  												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">  												'. $title1 .' 												</a>  											</div>  											<div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">  												<div class="accordion-inner">  													'. $text1 .'												</div>  											</div>  										</div> 																				<div class="accordion-group">  											<div class="accordion-heading">  												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">  													'. $title2 .'  												</a>  											</div>  											<div id="collapseTwo" class="accordion-body collapse">  												<div class="accordion-inner"> 													'. $text2 .'												</div>  											</div>  										</div> 																				<div class="accordion-group">  											<div class="accordion-heading">  												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">  													'. $title3 .' 												</a>  											</div>  											<div id="collapseThree" class="accordion-body collapse">  												<div class="accordion-inner">													'. $text3 .'												</div>  											</div>  										</div> 																				<div class="accordion-group">  											<div class="accordion-heading">  												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">  													'. $title4 .'												</a>  											</div>  											<div id="collapseFour" class="accordion-body collapse">  												<div class="accordion-inner">													'. $text4 .'																			</div>  											</div>  										</div> 																			</div>';		echo $text . $after_widget;	}                         function update( $new_instance, $old_instance )     {		$instance = $old_instance;		$instance['title'] = strip_tags( $new_instance['title'] );		$instance['title1'] = strip_tags( $new_instance['title1'] );		$instance['text1'] = strip_tags( $new_instance['text1'] );		$instance['title2'] = strip_tags( $new_instance['title2'] );		$instance['text2'] = strip_tags( $new_instance['text2'] );		$instance['title3'] = strip_tags( $new_instance['title3'] );		$instance['text3'] = strip_tags( $new_instance['text3'] );		$instance['title4'] = strip_tags( $new_instance['title4'] );		$instance['text4'] = strip_tags( $new_instance['text4'] );		return $instance;	}	}     ?>