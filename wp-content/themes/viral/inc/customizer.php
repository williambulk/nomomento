<?php
/**
 * Viral Theme Customizer.
 *
 * @package Viral
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function viral_customize_register( $wp_customize ) {
	$image_path_url = get_template_directory_uri().'/images/';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/*============GENERAL SETTINGS PANEL============*/
	$wp_customize->add_panel(
		'viral_general_settings_panel',
		array(
			'title' 			=> __( 'General Settings', 'viral' ),
			'priority'          => 2
		)
	);

	$wp_customize->get_section( 'static_front_page' )->panel = 'viral_general_settings_panel';
	$wp_customize->get_section( 'static_front_page' )->priority = 1;
	$wp_customize->get_section( 'title_tagline' )->panel = 'viral_general_settings_panel';
	$wp_customize->get_section( 'title_tagline' )->title = __( 'Site Title/Logo/Favicon', 'viral' );
	$wp_customize->get_section( 'static_front_page' )->panel = 'viral_general_settings_panel';
	$wp_customize->get_section( 'colors' )->panel = 'viral_general_settings_panel';
	$wp_customize->get_section( 'background_image' )->panel = 'viral_general_settings_panel';

	$wp_customize->add_section(
		'viral_website_layout_sec',
		array(
			'title'	=> __( 'Website Layout', 'viral' ),
			'panel' => 'viral_general_settings_panel'
		)
	);

	$wp_customize->add_setting(
		'viral_website_layout',
		array(
			'default'			=> 'fullwidth',
			'sanitize_callback' => 'viral_sanitize_choices'
		)
	);

	$wp_customize->add_control(
		'viral_website_layout',
		array(
			'type'			=> 'radio',
			'settings'		=> 'viral_website_layout',
			'section'		=> 'viral_website_layout_sec',	
			'label'			=> __( 'Choose the Layout', 'viral' ),
			'choices'		=> array(
				'fullwidth' => __( 'Full Width', 'viral' ),
				'boxed' => __( 'Boxed', 'viral' ),
				)
		)
	);

	/*============HEADER SETTING PANEL============*/
	$wp_customize->add_panel(
		'viral_header_setting_panel',
		array(
			'title'	=> __( 'Header Settings', 'viral' ),
			'priority' => 2
		)
	);

	$wp_customize->add_section(
		'viral_header_settings_sec',
		array(
			'title'	=> __( 'Header Settings', 'viral' ),
			'panel' => 'viral_header_setting_panel'
		)
	);

	$wp_customize->add_setting(
		'viral_left_header_date',
		array(
			'default'			=> true,
			'sanitize_callback' => 'viral_sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'viral_left_header_date',
		array(
			'type'			=> 'checkbox',
			'settings'		=> 'viral_left_header_date',
			'section'		=> 'viral_header_settings_sec',	
			'label'			=> __( 'Show Date in Header', 'viral' )
		)
	);

	$wp_customize->add_setting(
		'viral_left_header_text',
		array(
			'sanitize_callback' => 'viral_sanitize_text'
		)
	);

	$wp_customize->add_control(
		'viral_left_header_text',
		array(
			'type' => 'text',
			'settings'		=> 'viral_left_header_text',
			'section'		=> 'viral_header_settings_sec',
			'label'			=> __( 'Header Left Text', 'viral' )
		)
	);

	$wp_customize->add_setting(
		'viral_left_header_menu',
		array(
			'sanitize_callback' => 'viral_sanitize_text'
		)
	);

	$wp_customize->add_control(
		new Viral_Customize_Info(
			$wp_customize,
			'viral_left_header_menu',
			array(
				'settings'		=> 'viral_left_header_menu',
				'section'		=> 'viral_header_settings_sec',	
				'label'			=> __( 'Top Header Menu', 'viral' ),
				'description'	=> __( 'To add the Menu, Go to Appearance -> Menu and save it as Top Menu', 'viral' )
			)
		)
	);

	$wp_customize->add_section(
		'viral_social_icons_sec',
		array(
			'title'	=> __( 'Header Social Icons', 'viral' ),
			'panel' => 'viral_header_setting_panel'
		)
	);

	$wp_customize->add_setting(
		'viral_social_facebook',
		array(
			'default'			=> '',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'viral_social_facebook',
		array(
			'settings'		=> 'viral_social_facebook',
			'section'		=> 'viral_social_icons_sec',
			'type'			=> 'url',
			'label'			=> __( 'Facebook', 'viral' )
		)
	);

	$wp_customize->add_setting(
		'viral_social_twitter',
		array(
			'default'			=> '',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'viral_social_twitter',
		array(
			'settings'		=> 'viral_social_twitter',
			'section'		=> 'viral_social_icons_sec',
			'type'			=> 'url',
			'label'			=> __( 'Twitter', 'viral' )
		)
	);

	$wp_customize->add_setting(
		'viral_social_google_plus',
		array(
			'default'			=> '',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'viral_social_google_plus',
		array(
			'settings'		=> 'viral_social_google_plus',
			'section'		=> 'viral_social_icons_sec',
			'type'			=> 'url',
			'label'			=> __( 'Google Plus', 'viral' )
		)
	);

	$wp_customize->add_setting(
		'viral_social_pinterest',
		array(
			'default'			=> '',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'viral_social_pinterest',
		array(
			'settings'		=> 'viral_social_pinterest',
			'section'		=> 'viral_social_icons_sec',
			'type'			=> 'url',
			'label'			=> __( 'Pinterest', 'viral' )
		)
	);

	$wp_customize->add_setting(
		'viral_social_youtube',
		array(
			'default'			=> '',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'viral_social_youtube',
		array(
			'settings'		=> 'viral_social_youtube',
			'section'		=> 'viral_social_icons_sec',
			'type'			=> 'url',
			'label'			=> __( 'Youtube', 'viral' )
		)
	);

	$wp_customize->add_setting(
		'viral_social_linkedin',
		array(
			'default'			=> '',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'viral_social_linkedin',
		array(
			'settings'		=> 'viral_social_linkedin',
			'section'		=> 'viral_social_icons_sec',
			'type'			=> 'url',
			'label'			=> __( 'Linkedin', 'viral' )
		)
	);

	$wp_customize->add_setting(
		'viral_social_instagram',
		array(
			'default'			=> '',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'viral_social_instagram',
		array(
			'settings'		=> 'viral_social_instagram',
			'section'		=> 'viral_social_icons_sec',
			'type'			=> 'url',
			'label'			=> __( 'Instagram', 'viral' )
		)
	);

	/*============FRONT PAGE PANEL============*/
	$wp_customize->add_panel(
		'viral_front_page_panel',
		array(
			'title' 			=> __( 'Front Page Sections', 'viral' ),
			'priority'          => 20
		)
	);

	/*============FRONT PAGE TOP SECTION============*/
	$wp_customize->add_section(
		'viral_frontpage_top_sec',
		array(
			'title'			=> __( 'Home Top Section', 'viral' ),
			'panel'         => 'viral_front_page_panel',
			'priority'          => 10
		)
	);

	$wp_customize->add_setting(
		'viral_ticker_title',
		array(
			'default'			=> '',
			'sanitize_callback' => 'viral_sanitize_text'
		)
	);

	$wp_customize->add_control(
		'viral_ticker_title',
		array(
			'settings'		=> 'viral_ticker_title',
			'section'		=> 'viral_frontpage_top_sec',
			'label'			=> __( 'Ticker Title', 'viral' )
		)
	);

	$wp_customize->add_setting(
		'viral_ticker_category',
		array(
			'default'			=> '',
			'sanitize_callback' => 'viral_sanitize_integer'
		)
	);

	$wp_customize->add_control(
		new Viral_Category_Dropdown(
		$wp_customize,
		'viral_ticker_category',
			array(
				'settings'		=> 'viral_ticker_category',
				'section'		=> 'viral_frontpage_top_sec',
				'label'			=> __( 'Choose Ticker Category', 'viral' )
			)
		)
	);

	$wp_customize->add_setting( 
		'viral_frontpage_top_blocks', 
		array(
		'sanitize_callback' => 'viral_sanitize_repeater',
		'default' => json_encode(array(
			array(
				'title' => '' ,
				'category' => '0',
				'layout' => 'style1',
				'enable' => 'on'
				)
		))
	));

	$wp_customize->add_control( 
		new Viral_Repeater_Controler(
			$wp_customize, 
			'viral_frontpage_top_blocks', 
			array(
				'label'   => __('FrontPage Top Blocks - FullWidth','viral'),
				'section' => 'viral_frontpage_top_sec',
				'settings' => 'viral_frontpage_top_blocks',
				'viral_box_label' => __('News Section','viral'),
				'viral_box_add_control' => __('Add Section','viral'),
			),
			array(
				'category' => array(
					'type'        => 'multicategory',
					'label'       => __( 'Select Category', 'viral' ),
					'default'     => '-1'
				),				
				'layout' => array(
					'type'        => 'selector',
					'label'       => __( 'Layouts', 'viral' ),
					'description' => __( 'Select the Block Layout', 'viral' ),
					'options' => array(
						'style1' => $image_path_url.'top-layout1.png',
						'style2' => $image_path_url.'top-layout2.png',
						'style3' => $image_path_url.'top-layout3.png',
						'style4' => $image_path_url.'top-layout4.png',
						),
					'default'     => 'style1'
				),
				'enable' => array(
					'type'        => 'switch',
					'label'       => __( 'Enable Section', 'viral' ),
					'switch' => array(
						'on' => 'Yes',
						'off' => 'No'
						),
					'default'     => 'on'
				)
			)
		) 
	);

	/*============FRONT PAGE MIDDLE SECTION============*/
	$wp_customize->add_section(
		'viral_frontpage_middle_left_sec',
		array(
			'title'			=> __( 'Home Middle Section - Left Content', 'viral' ),
			'panel'         => 'viral_front_page_panel',
			'priority'          => 20
		)
	);

	$wp_customize->add_setting( 
		'viral_frontpage_middle_blocks', 
		array(
		'sanitize_callback' => 'viral_sanitize_repeater',
		'default' => json_encode(array(
			array(
				'title' => '' ,
				'category' => '0',
				'layout' => 'style1',
				'enable' => 'on'
				)
		))
	));

	$wp_customize->add_control( 
		new Viral_Repeater_Controler(
			$wp_customize, 
			'viral_frontpage_middle_blocks', 
			array(
				'label'   => __('FrontPage Middle Blocks - Left Content', 'viral'),
				'section' => 'viral_frontpage_middle_left_sec',
				'settings' => 'viral_frontpage_middle_blocks',
				'viral_box_label' => __('News Section','viral'),
				'viral_box_add_control' => __('Add Section','viral'),
			),
			array(
				'title' => array(
					'type'        => 'text',
					'label'       => __( 'Title', 'viral' ),
					'description' => __( 'Optional - Leave blank to hide Title', 'viral' )
				),
				'category' => array(
					'type'        => 'category',
					'label'       => __( 'Category', 'viral' ),
					'default'     => '0'
				),				
				'layout' => array(
					'type'        => 'selector',
					'label'       => __( 'Layouts', 'viral' ),
					'description' => __( 'Select the Block Layout', 'viral' ),
					'options' => array(
						'style1' => $image_path_url.'middle-layout1.png',
						'style2' => $image_path_url.'middle-layout2.png',
						'style3' => $image_path_url.'middle-layout3.png',
						'style4' => $image_path_url.'middle-layout4.png',
						),
					'default'     => 'style1'
				),
				'enable' => array(
					'type'        => 'switch',
					'label'       => esc_attr__( 'Enable Section', 'viral' ),
					'switch' => array(
						'on' => 'Yes',
						'off' => 'No'
						),
					'default'     => 'on'
				)
			)
		) 
	);

	/*============FRONT PAGE BOTTOM SECTION============*/
	$wp_customize->add_section(
		'viral_frontpage_bottom_sec',
		array(
			'title'			=> __( 'Home Bottom Section', 'viral' ),
			'panel'         => 'viral_front_page_panel',
			'priority'          => 40
		)
	);

	$wp_customize->add_setting( 
		'viral_frontpage_bottom_blocks', 
		array(
		'sanitize_callback' => 'viral_sanitize_repeater',
		'default' => json_encode(array(
			array(
				'title' => '' ,
				'category' => '0',
				'layout' => 'style1',
				'enable' => 'on'
				)
		))
	));

	$wp_customize->add_control( 
		new Viral_Repeater_Controler(
			$wp_customize, 
			'viral_frontpage_bottom_blocks', 
			array(
				'label'   => __('FrontPage Bottom Blocks - FullWidth','viral'),
				'section' => 'viral_frontpage_bottom_sec',
				'settings' => 'viral_frontpage_bottom_blocks',
				'viral_box_label' => __('News Section','viral'),
				'viral_box_add_control' => __('Add Section','viral'),
			),
			array(
				'category1' => array(
					'type'        => 'category',
					'label'       => __( 'Category', 'viral' ),
					'default'     => '0',
					'class'       => 'vl-bottom-block-cat1'
				),
				'category2' => array(
					'type'        => 'category',
					'label'       => __( 'Category', 'viral' ),
					'default'     => '0',
					'class'       => 'vl-bottom-block-cat2'
				),	
				'category3' => array(
					'type'        => 'category',
					'label'       => __( 'Category', 'viral' ),
					'default'     => '0',
					'class'       => 'vl-bottom-block-cat3'
				),					
				'layout' => array(
					'type'        => 'selector',
					'label'       => __( 'Layouts', 'viral' ),
					'description' => __( 'Select the Block Layout', 'viral' ),
					'options' => array(
						'style1' => $image_path_url.'bottom-layout1.png',
						'style2' => $image_path_url.'bottom-layout2.png',
						),
					'default'     => 'style1',
					'class'       => 'vl-bottom-block-layout'
				),
				'enable' => array(
					'type'        => 'switch',
					'label'       => __( 'Enable Section', 'viral' ),
					'switch' => array(
						'on' => 'Yes',
						'off' => 'No'
						),
					'default'     => 'on'
				)
			)
		) 
	);

	/*============IMPORTANT LINK SECTION============*/
	$wp_customize->add_section(
		'viral_frontpage_links_sec',
		array(
			'title'			=> __( 'Video Tutorial Link', 'viral' ),
			'priority'          => 1000
		)
	);

	/*============IMPORTANT LINKS============*/
	$wp_customize->add_section(
		'viral_implink_section',
		array(
			'title' 			=> __( 'Important Links', 'viral' ),
			'priority' 			=> 1
		)
	);

	$wp_customize->add_setting(
		'viral_imp_links',
		array(
			'sanitize_callback' => 'viral_sanitize_text'
		)
	);

	$wp_customize->add_control(
		new Viral_Customize_Info( 
			$wp_customize,
			'viral_imp_links',
			array(
				'settings'		=> 'viral_imp_links',
				'section'		=> 'viral_implink_section',
				'description'	=> '<div class="viral-info"><a href="https://hashthemes.com/documentation/viral-documentation/" target="_blank">'.__('Documentation', 'viral').'</a><a href="http://demo.hashthemes.com/viral/" target="_blank">'.__('Live Demo', 'viral').'</a><a href="http://hashthemes.com/support/" target="_blank">'.__('Support Forum', 'viral').'</a><a href="https://www.facebook.com/hashtheme/" target="_blank">'.__('Like Us in Facebook', 'viral').'</a></div>',
			)
		)
	);

	$wp_customize->add_setting(
		'viral_video_link',
		array(
			'sanitize_callback' => 'viral_sanitize_text'
		)
	);

	$wp_customize->add_control(
		new Viral_Customize_Info(
			$wp_customize,
			'viral_video_link',
			array(
				'settings'		=> 'viral_video_link',
				'section'		=> 'viral_implink_section',	
				'label'			=> __( 'Check out the video tutorial on how to set up the Home Page', 'viral' ),
				'description'	=> __( '<a href="https://www.youtube.com/watch?v=mfLt0pA-Kx8" target="_blank">https://www.youtube.com/watch?v=mfLt0pA-Kx8</a>', 'viral' )
			)
		)
	);

	$wp_customize->add_setting(
		'viral_support_link',
		array(
			'sanitize_callback' => 'viral_sanitize_text'
		)
	);

	$wp_customize->add_control(
		new Viral_Customize_Info(
			$wp_customize,
			'viral_support_link',
			array(
				'settings'		=> 'viral_support_link',
				'section'		=> 'viral_implink_section',	
				'description'	=> __( '<div class="viral-info"><a href="mailto:support@hashthemes.com" target="_blank">Support & Customization <br/>------<br/> support@hashthemes.com</a></div>', 'viral' )
			)
		)
	);	
}
add_action( 'customize_register', 'viral_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function viral_customize_preview_js() {
	wp_enqueue_script( 'viral_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20160903', true );
}
add_action( 'customize_preview_init', 'viral_customize_preview_js' );

function viral_customizer_script() {
	wp_enqueue_script( 'viral-customizer-script', get_template_directory_uri() .'/inc/js/customizer-scripts.js', array('jquery'),'20160903', true  );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.css');	
	wp_enqueue_style( 'viral-customizer-style', get_template_directory_uri() .'/inc/css/customizer-style.css');	
}
add_action( 'customize_controls_enqueue_scripts', 'viral_customizer_script' );

if ( class_exists( 'WP_Customize_Control' ) ):

class Viral_Repeater_Controler extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'repeater';

	public $viral_box_label = '';

	public $viral_box_add_control = '';

	private $cats = '';

	/**
	 * The fields that each container row will contain.
	 *
	 * @access public
	 * @var array
	 */
	public $fields = array();

	/**
	 * Repeater drag and drop controler
	 *
	 * @since  1.0.0
	 */
	public function __construct( $manager, $id, $args = array(), $fields = array() ) {
		$this->fields = $fields;
		$this->viral_box_label = $args['viral_box_label'] ;
		$this->viral_box_add_control = $args['viral_box_add_control'];
		$this->cats = get_categories(array( 'hide_empty' => false ));
		parent::__construct( $manager, $id, $args );
	}

	public function render_content() {

		$values = json_decode($this->value());
		?>
		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

		<?php if($this->description){ ?>
			<span class="description customize-control-description">
			<?php echo wp_kses_post($this->description); ?>
			</span>
		<?php } ?>

		<ul class="viral-repeater-field-control-wrap">
			<?php
			$this->viral_get_fields();
			?>
		</ul>

		<input type="hidden" <?php esc_attr( $this->link() ); ?> class="viral-repeater-collector" value="<?php echo esc_attr( $this->value() ); ?>" />
		<button type="button" class="button viral-add-control-field"><?php echo esc_html( $this->viral_box_add_control ); ?></button>
		<?php
	}

	private function viral_get_fields(){
		$fields = $this->fields;
		$values = json_decode($this->value());

		if(is_array($values)){
		foreach($values as $value){
		?>
		<li class="viral-repeater-field-control">
		<h3 class="viral-repeater-field-title"><?php echo esc_html( $this->viral_box_label ); ?></h3>
		
		<div class="viral-repeater-fields">
		<?php
			foreach ($fields as $key => $field) {
			$class = isset($field['class']) ? $field['class'] : '';
			?>
			<div class="viral-fields viral-type-<?php echo esc_attr($field['type']).' '.$class; ?>">

				<?php 
				$label = isset($field['label']) ? $field['label'] : '';
				$description = isset($field['description']) ? $field['description'] : '';
				if($field['type'] != 'checkbox'){ ?>
					<span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
					<span class="description customize-control-description"><?php echo esc_html( $description ); ?></span>
				<?php 
				}

				$new_value = isset($value->$key) ? $value->$key : '';
				$default = isset($field['default']) ? $field['default'] : '';

				switch ($field['type']) {
					case 'text':
						echo '<input data-default="'.esc_attr($default).'" data-name="'.esc_attr($key).'" type="text" value="'.esc_attr($new_value).'"/>';
						break;

					case 'textarea':
						echo '<textarea data-default="'.esc_attr($default).'"  data-name="'.esc_attr($key).'">'.esc_textarea($new_value).'</textarea>';
						break;

					case 'upload':
						$image = $image_class= "";
						if($new_value){	
							$image = '<img src="'.esc_url($new_value).'" style="max-width:100%;"/>';	
							$image_class = ' hidden';
						}
						echo '<div class="viral-fields-wrap">';
						echo '<div class="attachment-media-view">';
						echo '<div class="placeholder'.$image_class.'">';
						_e('No image selected', 'viral');
						echo '</div>';
						echo '<div class="thumbnail thumbnail-image">';
						echo $image;
						echo '</div>';
						echo '<div class="actions clearfix">';
						echo '<button type="button" class="button viral-delete-button align-left">'.__('Remove', 'viral').'</button>';
						echo '<button type="button" class="button viral-upload-button alignright">'.__('Select Image', 'viral').'</button>';
						echo '<input data-default="'.esc_attr($default).'" class="upload-id" data-name="'.esc_attr($key).'" type="hidden" value="'.esc_attr($new_value).'"/>';
						echo '</div>';
						echo '</div>';
						echo '</div>';							
						break;

					case 'category':
						echo '<select data-default="'.esc_attr($default).'"  data-name="'.esc_attr($key).'">';
						echo '<option value="0">'.__('Select Category', 'viral').'</option>';
						echo '<option value="-1">'.__('Latest Posts', 'viral').'</option>';
                            foreach ( $this->cats as $cat )
                            {
                                printf('<option value="%s" %s>%s</option>', esc_attr($cat->term_id), selected($new_value, $cat->term_id, false), esc_html($cat->name));
                            }
                  		echo '</select>';
						break;

					case 'select':
						$options = $field['options'];
						echo '<select  data-default="'.esc_attr($default).'"  data-name="'.esc_attr($key).'">';
                            foreach ( $options as $option => $val )
                            {
                                printf('<option value="%s" %s>%s</option>', esc_attr($option), selected($new_value, $option, false), esc_html($val));
                            }
                  		echo '</select>';
						break;

					case 'checkbox':
						echo '<label>';
						echo '<input data-default="'.esc_attr($default).'" value="'.$new_value.'" data-name="'.esc_attr($key).'" type="checkbox" '.checked($new_value, 'yes', false).'/>';
						echo esc_html( $label );
						echo '<span class="description customize-control-description">'.esc_html( $description ).'</span>';
						echo '</label>';
						break;
					
					case 'colorpicker':
						echo '<input data-default="'.esc_attr($default).'" class="viral-color-picker" data-alpha="true" data-name="'.esc_attr($key).'" type="text" value="'.esc_attr($new_value).'"/>';
						break;

					case 'selector':
						$options = $field['options'];
						echo '<div class="selector-labels">';
						foreach ( $options as $option => $val ){
							$class = ( $new_value == $option ) ? 'selector-selected': '';
							echo '<label class="'.$class.'" data-val="'.esc_attr($option).'">';
							echo '<img src="'.esc_url($val).'"/>';
							echo '</label>'; 
						}
						echo '</div>';
						echo '<input data-default="'.esc_attr($default).'" type="hidden" value="'.esc_attr($new_value).'" data-name="'.esc_attr($key).'"/>';
						break;

					case 'radio':
						$options = $field['options'];
						echo '<div class="radio-labels">';
						foreach ( $options as $option => $val ){
							echo '<label>';
							echo '<input value="'.esc_attr($option).'" type="radio" '.checked($new_value, $option, false).'/>';
							echo $val;
							echo '</label>'; 
						}
						echo '</div>';
						echo '<input data-default="'.esc_attr($default).'" type="hidden" value="'.esc_attr($new_value).'" data-name="'.esc_attr($key).'"/>';
						break;

					case 'switch':
						$switch = $field['switch'];
						$switch_class = ($new_value == 'on') ? 'switch-on' : '';
						echo '<div class="onoffswitch '.$switch_class.'">';
	                        echo '<div class="onoffswitch-inner">';
	                            echo '<div class="onoffswitch-active">';
	                                echo '<div class="onoffswitch-switch">'.esc_html($switch["on"]).'</div>';
	                            echo '</div>';
	                            echo '<div class="onoffswitch-inactive">';
	                                echo '<div class="onoffswitch-switch">'.esc_html($switch["off"]).'</div>';
	                            echo '</div>';
	                        echo '</div>';
		                echo '</div>';
		                echo '<input data-default="'.esc_attr($default).'" type="hidden" value="'.esc_attr($new_value).'" data-name="'.esc_attr($key).'"/>';
						break;

					case 'range':
						$options = $field['options'];
						$new_value = $new_value ? $new_value : $options['val'];
						echo '<div class="viral-range-slider" >';
						echo '<div class="range-input" data-defaultvalue="'. esc_attr($options['val']) .'" data-value="' . esc_attr($new_value) . '" data-min="' . esc_attr($options['min']) . '" data-max="' . esc_attr($options['max']) . '" data-step="' . esc_attr($options['step']) . '"></div>';
						echo '<input  class="range-input-selector" type="text" value="'.esc_attr($new_value).'"  data-name="'.esc_attr($key).'"/>';
						echo '<span class="unit">' . esc_html($options['unit']) . '</span>';
						echo '</div>';
						break;

					case 'icon':
						echo '<div class="viral-selected-icon">';
						echo '<i class="'.esc_attr($new_value).'"></i>';
						echo '<span><i class="fa fa-angle-down"></i></span>';
						echo '</div>';
						echo '<ul class="viral-icon-list clearfix">';
						$viral_font_awesome_icon_array = viral_font_awesome_icon_array();
						foreach ($viral_font_awesome_icon_array as $viral_font_awesome_icon) {
							$icon_class = $new_value == $viral_font_awesome_icon ? 'icon-active' : '';
							echo '<li class='.$icon_class.'><i class="'.$viral_font_awesome_icon.'"></i></li>';
						}
						echo '</ul>';
						echo '<input data-default="'.esc_attr($default).'" type="hidden" value="'.esc_attr($new_value).'" data-name="'.esc_attr($key).'"/>';
						break;

					case 'multicategory':
						$new_value_array = !is_array( $new_value ) ? explode( ',', $new_value ) : $new_value;
						echo '<ul class="viral-multi-category-list">';
						echo '<li><label><input type="checkbox" value="-1" '. checked('-1', $new_value, false ) .'/>'.__( 'Latest Posts', 'viral' ).'</label></li>';
						foreach ( $this->cats as $cat ){
							$checked = in_array( $cat->term_id, $new_value_array) ? 'checked="checked"' : '';
							echo '<li>';
							echo '<label>';
	                        echo '<input type="checkbox" value="'.esc_attr($cat->term_id).'" '. $checked .'/>'; 
	                        echo esc_html( $cat->name );
	                    	echo '</label>';
							echo '</li>';
						}
						echo '</ul>';
						echo '<input data-default="'.esc_attr($default).'" type="hidden" value="'.esc_attr(implode( ',', $new_value_array )).'" data-name="'.esc_attr($key).'"/>';
						break;

					default:
						break;
				}
			?>
			</div>
			<?php
			} ?>

			<div class="clearfix viral-repeater-footer">
				<div class="alignright">
				<a class="viral-repeater-field-remove" href="#remove"><?php _e('Delete', 'viral') ?></a> |
				<a class="viral-repeater-field-close" href="#close"><?php _e('Close', 'viral') ?></a>
				</div>
			</div>
		</div>
		</li>
		<?php	
		}
		}
	}

}

class Viral_Customize_Heading extends WP_Customize_Control {
    public function render_content() {
    	if ( !empty( $this->label ) ) : ?>
            <h3 class="viral-accordion-section-title"><?php echo esc_html( $this->label ); ?></h3>
        <?php endif; 
    }
}

class Viral_Customize_Info extends WP_Customize_Control {
    public function render_content() {
    	?>
    	<label>
            <span class="customize-control-title">
                <?php echo esc_html($this->label); ?>
            </span>
            <?php if($this->description){ ?>
            <span class="description customize-control-description">
            	<?php echo wp_kses_post($this->description); ?>
            </span>
            <?php } ?>
        </label>
    <?php }
}

class Viral_Dropdown_Chooser extends WP_Customize_Control{
	public function render_content(){
		if ( empty( $this->choices ) )
                return;
		?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <select class="hs-chosen-select" <?php $this->link(); ?>>
                    <?php
                    foreach ( $this->choices as $value => $label )
                        echo '<option value="' . esc_attr( $value ) . '"' . selected( $this->value(), $value, false ) . '>' . esc_html($label) . '</option>';
                    ?>
                </select>
            </label>
		<?php
	}
}

class Viral_Category_Dropdown extends WP_Customize_Control{
    private $cats = false;

    public function __construct($manager, $id, $args = array(), $options = array()){
        $this->cats = get_categories($options);

        parent::__construct( $manager, $id, $args );
    }

    public function render_content(){
		if(!empty($this->cats)){
		?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<span class="description customize-control-description">
				<?php echo esc_html($this->description); ?>
				</span>
				<select <?php $this->link(); ?>>
					<option value="0"><?php _e( 'Select Category', 'viral' ); ?></option>
					<option value="-1"><?php _e( 'Latest Posts', 'viral' ); ?></option>
					<?php
					foreach ( $this->cats as $cat ){
						printf('<option value="%s" %s>%s</option>', esc_attr($cat->term_id), selected($this->value(), $cat->term_id, false), esc_html($cat->name));
					}
					?>
				</select>
			</label>
		<?php
		}
    }
}
endif;


//SANITIZATION FUNCTIONS
function viral_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function viral_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function viral_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

function viral_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function viral_sanitize_repeater($input){
	  
	$input_decoded = json_decode( $input, true );
	$allowed_html = array(
		'br' => array(),
		'em' => array(),
		'strong' => array(),
		'a' => array(
			'href' => array(),
			'class' => array(),
			'id' => array(),
			'target' => array()
		),
		'button' => array(
			'class' => array(),
			'id' => array()
		)
	);
	
	
	if(!empty($input_decoded)) {
		foreach ($input_decoded as $boxes => $box ){
			foreach ($box as $key => $value){
				$input_decoded[$boxes][$key] = sanitize_text_field( $value );
			}
		}

		return json_encode($input_decoded);
	}
	
	return $input;
}