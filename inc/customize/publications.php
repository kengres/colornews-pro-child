<?php // add backround img to admin appearance customize screen


/* Publications SECTION */
    function kilimandjaro_customize_publications( $wp_customize ) {
       
        //require_once ( HOOKS_URL. '/kilimandjaro-general-control.php');
        

        //add publication section
        $wp_customize->add_section('kilimandjaro_publications_section', array(
            'title' => esc_html__('Publication Section', 'kilimandjaro'),
            'capability' => 'edit_theme_options',
            'priority'    => 32,
            'description' => __('Change Publication options here.', 'kilimandjaro'), 
            
        ));

        // publication title
        $wp_customize->add_setting('kilimandjaro_publications_title', array(
         'default' => esc_html__('All Publications', 'kilimandjaro'),

        ));
        $wp_customize->add_control( 'kilimandjaro_publications_title_control', array(
                'label'    => esc_html__('Main title', 'kilimandjaro'),
                'section'  => 'kilimandjaro_publications_section',
                'settings' => 'kilimandjaro_publications_title'
            ));

        // publication subtitle
        $wp_customize->add_setting('kilimandjaro_publications_subtitle', array(
         'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'kilimandjaro'),

        ));
        

        if( class_exists( 'WP_Customize_Control' ) ):
            class WP_Customize_Textarea_Control extends WP_Customize_Control {
                    public $type = 'textarea';
             
                    public function render_content() {
                       ?>
                    <label>
                        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                        <textarea rows="4" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
                    </label>
                        <?php
                    }
            }
       endif; 

       $wp_customize->add_control( new WP_Customize_Textarea_Control ($wp_customize, 'kilimandjaro_publications_subtitle_control', array(
                      'label'    => esc_html__('The subtitle', 'kilimandjaro'),
                      'section'  => 'kilimandjaro_publications_section',
                      'settings' => 'kilimandjaro_publications_subtitle',
                  )));
        
        // $wp_customize->add_control( 'kilimandjaro_publications_title_control', array(
        //     'label'    => __( 'Main title', 'kilimandjaro' ),
        //     'section'  => 'kilimandjaro_publications_section',
        //     'settings' =>
        // ));

        // publication subtitle
        // $wp_customize->add_setting('kilimandjaro_publications_subtitle', array(
        //  'default' => __('Example title one', 'kilimandjaro'),

        // ));

        // $wp_customize->add_control( 'kilimandjaro_publications_subtitle', array(
        //     'label'    => __( 'Main subtitle', 'kilimandjaro' ),
        //     'section'  => 'kilimandjaro_publications_section',
        //     'active_callback' => 'kilimandjaro_show_on_front',
        //     'priority'    => 1
        // ));

        /* Publications content */
            // $wp_customize->add_setting( 'kilimandjaro_publications_content', array(
            //     'default' => json_encode(
            //         array(
            //                 array(
            //                     'choice'=>'kilimandjaro_icon',
            //                     'icon_value' => 'icon-social-googledrive',
            //                     'title' => __('One Ipsum','kilimandjaro'),
            //                     'text' => __('One ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','kilimandjaro')
            //                 ),
            //                 array('choice'=>'kilimandjaro_icon',
            //                     'icon_value' => 'icon-social-googledrive',
            //                     'title' => __('Two Ipsum','kilimandjaro'),'text' => __('Two ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','kilimandjaro')
            //                 ),
            //                 array('choice'=>'kilimandjaro_icon',
            //                     'icon_value' => 'icon-social-googledrive',
            //                     'title' => __('Three Ipsum','kilimandjaro'),
            //                     'text' => __('Three ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','kilimandjaro')
            //                 )
            //         )
            //     )
            // ));
            $wp_customize->add_setting('kilimandjaro_publications_content', array(
                'default' => json_encode(
                    array(
                        array(
                            'choice'=>'kilimandjaro_icon',
                            'icon_value' => 'icon-social-googledrive',
                            'title' => __('One Ipsum','kilimandjaro'),
                            'text' => __('One ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','kilimandjaro')
                        ),
                    )
                )
            ));

            // $wp_customize->add_control( new Kilimandjaro_General_Repeater( $wp_customize, 'kilimandjaro_publications_content', array(
            //     'label'   => __('Add new service box','kilimandjaro'),
            //     'section' => 'kilimandjaro_publications_section',
            //     'priority' => 3,
            //     'kilimandjaro_icon_control' => true,
            //     'kilimandjaro_title_control' => true,
            //     'kilimandjaro_text_control' => true
            // ) ) );
            if( class_exists( 'WP_Customize_Control' ) ):
                class Kilimandjaro_General_Repeater extends WP_Customize_Control {
                    // private $options = array();

                            
              
                    public function render_content() {
                        

                     }//Render content
                }

            endif; 

            $wp_customize->add_control(new Kilimandjaro_General_Repeater($wp_customize, 'kilimandjaro_publications_content_control', array(
                    'label'   => __('Add new service box','kilimandjaro'),
                    'section' => 'kilimandjaro_publications_section',
                    'settings' => 'kilimandjaro_publications_content',
                    
                )));

        

    }

    add_action( 'customize_register', 'kilimandjaro_customize_publications' );

