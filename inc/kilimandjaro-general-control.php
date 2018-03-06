<?php
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

class Kilimandjaro_General_Repeater extends WP_Customize_Control {

        private $options = array();

        public function __construct( $manager, $id, $args = array() ) {
            parent::__construct( $manager, $id, $args );
            $this->options = $args;
        }

        public function render_content() {


            $this_default = json_decode($this->setting->default);


            $values = $this->value();
            $json = json_decode($values);
            if(!is_array($json)) $json = array($values);
            $it = 0;

            $options = $this->options;
            if(!empty($options['kilimandjaro_image_control'])){
                $kilimandjaro_image_control = $options['kilimandjaro_image_control'];
            } else {
                $kilimandjaro_image_control = false;
            }
            if(!empty($options['kilimandjaro_icon_control'])){
                $kilimandjaro_icon_control = $options['kilimandjaro_icon_control'];
                $icons_array = array( 'No Icon','icon-social-googledrive','icon-social-googledrive-alt2','icon-social-googledrive-square','icon-social-googleplus','icon-social-googleplus-circle','icon-social-googleplus-square','icon-social-instagram','icon-social-instagram-circle','icon-social-instagram-square','icon-social-linkedin','icon-social-linkedin-circle','icon-social-linkedin-square','icon-social-myspace','icon-social-myspace-circle','icon-social-myspace-square','icon-social-picassa','icon-social-picassa-circle','icon-social-picassa-square','icon-social-pinterest','icon-social-pinterest-circle','icon-social-pinterest-square','icon-icon-house-alt','icon-icon-house','icon-icon-desktop');
            } else {
                 $kilimandjaro_icon_control = false;
            }
            if(!empty($options['kilimandjaro_title_control'])){
                $kilimandjaro_title_control = $options['kilimandjaro_title_control'];
            } else {
                $kilimandjaro_title_control = false;
            }
            if(!empty($options['kilimandjaro_subtitle_control'])){
                $kilimandjaro_subtitle_control = $options['kilimandjaro_subtitle_control'];
            } else {
                $kilimandjaro_subtitle_control = false;
            }                        
            if(!empty($options['kilimandjaro_text_control'])){
                $kilimandjaro_text_control = $options['kilimandjaro_text_control'];
            } else {
                $kilimandjaro_text_control = false;
            }
            if(!empty($options['kilimandjaro_link_control'])){
                $kilimandjaro_link_control = $options['kilimandjaro_link_control'];
            } else {
                $kilimandjaro_link_control = false;
            }

 ?>

            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <div class="kilimandjaro_general_control_repeater kilimandjaro_general_control_droppable">
                <?php
                    if(empty($json)) {
                        
                ?>
                        <div class="kilimandjaro_general_control_repeater_container">
                            <div class="kilimandjaro-customize-control-title"><?php esc_html_e('kilimandjaro','kilimandjaro')?></div>
                            <div class="kilimandjaro-box-content-hidden">
                                <?php
                                    if($kilimandjaro_image_control == true && $kilimandjaro_icon_control == true){ ?>
                                        <span class="customize-control-title"><?php esc_html_e('Image type','kilimandjaro');?></span>
                                        <select class="kilimandjaro_image_choice">
                                            <option value="kilimandjaro_icon" selected><?php esc_html_e('Icon','kilimandjaro'); ?></option>
                                            <option value="kilimandjaro_image"><?php esc_html_e('Image','kilimandjaro'); ?></option>
                                            <option value="kilimandjaro_"><?php esc_html_e('','kilimandjaro'); ?></option>
                                        </select>

                                        <p class="kilimandjaro_image_control" style="display:">
                                            <span class="customize-control-title"><?php esc_html_e('Image','kilimandjaro')?></span>
                                            <input type="text" class="widefat custom_media_url">
                                            <input type="button" class="button button-primary custom_media_button_kilimandjaro" value="<?php esc_html_e('Upload Image','kilimandjaro'); ?>" />
                                        </p>

                                        <div class="kilimandjaro_general_control_icon">
                                            <span class="customize-control-title"><?php esc_html_e('Icon','kilimandjaro');?></span>
                                            <select class="kilimandjaro_icon_control">
                                            <?php
                                                foreach($icons_array as $contact_icon) {
                                                    echo '<option value="'.esc_attr($contact_icon).'">'.esc_attr($contact_icon).'</option>';
                                                }
                                            ?>
                                            </select>
                                        </div>
                                <?php
                                    } else {
                                        if($kilimandjaro_image_control ==true){	?>
                                            <span class="customize-control-title"><?php esc_html_e('Image','kilimandjaro')?></span>
                                            <p class="kilimandjaro_image_control">
                                                <input type="text" class="widefat custom_media_url">
                                                <input type="button" class="button button-primary custom_media_button_kilimandjaro" value="<?php esc_html_e('Upload Image','kilimandjaro'); ?>" />
                                            </p>
                                <?php
                                        }

                                       if($kilimandjaro_icon_control ==true){
                                ?>
                                            <span class="customize-control-title"><?php esc_html_e('Icon','kilimandjaro')?></span>
                                            <select name="<?php echo esc_attr($this->id); ?>" class="kilimandjaro_icon_control">
                                                <?php
                                                    foreach($icons_array as $contact_icon) {
                                                        echo '<option value="'.esc_attr($contact_icon).'">'.esc_attr($contact_icon).'</option>';
                                                    }
                                                ?>
                                            </select>
                                <?php   }
                                    }
                        
                                    if($kilimandjaro_title_control==true){
                                ?>
                                        <span class="customize-control-title"><?php esc_html_e('Title','kilimandjaro')?></span>
                                        <input type="text" class="kilimandjaro_title_control" placeholder="<?php esc_html_e('Title','kilimandjaro'); ?>"/>
                                <?php
                                    }
                        
                                    if($kilimandjaro_subtitle_control==true){
                                ?>
                                        <span class="customize-control-title"><?php esc_html_e('Subtitle','kilimandjaro')?></span>
                                        <input type="text" class="kilimandjaro_subtitle_control" placeholder="<?php esc_html_e('Subtitle','kilimandjaro'); ?>"/>
                                <?php
                                    }
 

                                    if($kilimandjaro_text_control==true){?>
                                        <span class="customize-control-title"><?php esc_html_e('Text','kilimandjaro')?></span>
                                        <textarea class="kilimandjaro_text_control" placeholder="<?php esc_html_e('Text','kilimandjaro'); ?>"></textarea>
                                <?php }

                                    if($kilimandjaro_link_control==true){ ?>
                                        <span class="customize-control-title"><?php esc_html_e('Link','kilimandjaro')?></span>
                                        <input type="text" class="kilimandjaro_link_control" placeholder="<?php esc_html_e('Link','kilimandjaro'); ?>"/>
                                <?php } ?>
                            <button type="button" class="kilimandjaro_general_control_remove_field button" style="display:;"><?php esc_html_e('Delete field','kilimandjaro'); ?></button>
                            </div>
                        </div>
                <?php
                    } else {
                        if ( !empty($this_default) && empty($json)) {
                            foreach($this_default as $icon){
                             
                ?>
                                <div class="kilimandjaro_general_control_repeater_container kilimandjaro_draggable">
                                    <div class="kilimandjaro-customize-control-title"><?php esc_html_e('kilimandjaro','kilimandjaro')?></div>
                                    <div class="kilimandjaro-box-content-hidden">
                                         <?php
                                            if($kilimandjaro_image_control == true && $kilimandjaro_icon_control == true){ ?>
                                                <span class="customize-control-title"><?php esc_html_e('Image type','kilimandjaro');?></span>
                                                <select class="kilimandjaro_image_choice">
                                                    <option value="kilimandjaro_icon" <?php selected($icon->choice,'kilimandjaro_icon');?>><?php esc_html_e('Icon','kilimandjaro');?></option>
                                                    <option value="kilimandjaro_image" <?php selected($icon->choice,'kilimandjaro_image');?>><?php esc_html_e('Image','kilimandjaro');?></option>
                                                    <option value="kilimandjaro_" <?php selected($icon->choice,'kilimandjaro_');?>><?php esc_html_e('','kilimandjaro');?></option>
                                                </select>

                                                <p class="kilimandjaro_image_control"  <?php if(!empty($icon->choice) && $icon->choice!='kilimandjaro_image'){ echo 'style="display:"';}?>>
                                                    <span class="customize-control-title"><?php esc_html_e('Image','kilimandjaro');?></span>
                                                    <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                                    <input type="button" class="button button-primary custom_media_button_kilimandjaro" value="<?php esc_html_e('Upload Image','kilimandjaro'); ?>" />
                                                </p>

                                                <div class="kilimandjaro_general_control_icon" <?php  if(!empty($icon->choice) && $icon->choice!='kilimandjaro_icon'){ echo 'style="display:"';}?>>
                                                    <span class="customize-control-title"><?php esc_html_e('Icon','kilimandjaro');?></span>
                                                    <select name="<?php echo esc_attr($this->id); ?>" class="kilimandjaro_icon_control">
                                                        <?php
                                                            foreach($icons_array as $contact_icon) {
                                                                echo '<option value="'.esc_attr($contact_icon).'" '.selected($icon->icon_value,$contact_icon).'">'.esc_attr($contact_icon).'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>

                                        <?php
                                            } else {
                                        ?>
                                        <?php	if($kilimandjaro_image_control==true){ ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Image','kilimandjaro')?></span>
                                                    <p class="kilimandjaro_image_control">
                                                        <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                                        <input type="button" class="button button-primary custom_media_button_kilimandjaro" value="<?php esc_html_e('Upload Image','kilimandjaro'); ?>" />
                                                    </p>
                                        <?php	}

                                                if($kilimandjaro_icon_control==true){ ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Icon','kilimandjaro')?></span>
                                                    <select name="<?php echo esc_attr($this->id); ?>" class="kilimandjaro_icon_control">
                                                        <?php
                                                            foreach($icons_array as $contact_icon) {
                                                                echo '<option value="'.esc_attr($contact_icon).'" '.selected($icon->icon_value,$contact_icon).'">'.esc_attr($contact_icon).'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                        <?php
                                                }
                                            }
                                                if($kilimandjaro_title_control==true){
                                        ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Title','kilimandjaro')?></span>
                                                    <input type="text" value="<?php if(!empty($icon->title)) echo esc_attr($icon->title); ?>" class="kilimandjaro_title_control" placeholder="<?php esc_html_e('Title','kilimandjaro'); ?>"/>
                                        <?php
                                                }

                                                if($kilimandjaro_subtitle_control==true){
                                        ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Subtitle','kilimandjaro')?></span>
                                                    <input type="text" value="<?php if(!empty($icon->subtitle)) echo esc_attr($icon->subtitle); ?>" class="kilimandjaro_subtitle_control" placeholder="<?php esc_html_e('Subtitle','kilimandjaro'); ?>"/>
                                        <?php
                                                }
 
                                                if($kilimandjaro_text_control==true){ ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Text','kilimandjaro')?></span>
                                                    <textarea placeholder="<?php esc_html_e('Text','kilimandjaro'); ?>" class="kilimandjaro_text_control"><?php if(!empty($icon->text)) {echo esc_attr($icon->text);} ?></textarea>
                                        <?php	}
                                                if($kilimandjaro_link_control){ ?>
                                                    <span class="customize-control-title"><?php esc_html_e('Link','kilimandjaro')?></span>
                                                    <input type="text" value="<?php if(!empty($icon->link)) echo esc_url($icon->link); ?>" class="kilimandjaro_link_control" placeholder="<?php esc_html_e('Link','kilimandjaro'); ?>"/>
                                        <?php	}?>
                                    <button type="button" class="kilimandjaro_general_control_remove_field button" <?php if ($it == 0) echo 'style="display:;"'; ?>><?php esc_html_e('Delete field','kilimandjaro'); ?></button>
                                    </div>

                                </div>

                <?php
                                $it++;
                            }
                        } else {
                            foreach($json as $icon){
                    ?>
                                <div class="kilimandjaro_general_control_repeater_container kilimandjaro_draggable">
                                    <div class="kilimandjaro-customize-control-title"><?php esc_html_e('kilimandjaro','kilimandjaro')?></div>
                                    <div class="kilimandjaro-box-content-hidden">
                                    <?php
                                    if($kilimandjaro_image_control == true && $kilimandjaro_icon_control == true){ ?>
                                        <span class="customize-control-title"><?php esc_html_e('Image type','kilimandjaro');?></span>
                                        <select class="kilimandjaro_image_choice">
                                            <option value="kilimandjaro_icon" <?php selected($icon->choice,'kilimandjaro_icon');?>><?php esc_html_e('Icon','kilimandjaro');?></option>
                                            <option value="kilimandjaro_image" <?php selected($icon->choice,'kilimandjaro_image');?>><?php esc_html_e('Image','kilimandjaro');?></option>
                                            <option value="kilimandjaro_" <?php selected($icon->choice,'kilimandjaro_');?>><?php esc_html_e('','kilimandjaro');?></option>
                                        </select>


                                        <p class="kilimandjaro_image_control" <?php if(!empty($icon->choice) && $icon->choice!='kilimandjaro_image'){ echo 'style="display:"';}?>>
                                            <span class="customize-control-title"><?php esc_html_e('Image','kilimandjaro');?></span>
                                            <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                            <input type="button" class="button button-primary custom_media_button_kilimandjaro" value="<?php esc_html_e('Upload Image','kilimandjaro'); ?>" />
                                        </p>

                                        <div class="kilimandjaro_general_control_icon" <?php  if(!empty($icon->choice) && $icon->choice!='kilimandjaro_icon'){ echo 'style="display:"';}?>>
                                            <span class="customize-control-title"><?php esc_html_e('Icon','kilimandjaro');?></span>
                                            <select name="<?php echo esc_attr($this->id); ?>" class="kilimandjaro_icon_control">
                                            <?php
                                                foreach($icons_array as $contact_icon) {
                                                    echo '<option value="'.esc_attr($contact_icon).'" '.selected($icon->icon_value,$contact_icon).'">'.esc_attr($contact_icon).'</option>';
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    <?php

                                    } else {
                                    ?>
                                        <?php
                                            if($kilimandjaro_image_control == true){ ?>
                                                <span class="customize-control-title"><?php esc_html_e('Image','kilimandjaro')?></span>
                                                <p class="kilimandjaro_image_control">
                                                    <input type="text" class="widefat custom_media_url" value="<?php if(!empty($icon->image_url)) {echo esc_attr($icon->image_url);} ?>">
                                                    <input type="button" class="button button-primary custom_media_button_kilimandjaro" value="<?php esc_html_e('Upload Image','kilimandjaro'); ?>" />
                                                </p>
                                        <?php }

                                            if($kilimandjaro_icon_control==true){ ?>
                                                <span class="customize-control-title"><?php esc_html_e('Icon','kilimandjaro')?></span>
                                                <select name="<?php echo esc_attr($this->id); ?>" class="kilimandjaro_icon_control">
                                                <?php
                                                    foreach($icons_array as $contact_icon) {
                                                        echo '<option value="'.esc_attr($contact_icon).'" '.selected($icon->icon_value,$contact_icon).'">'.esc_attr($contact_icon).'</option>';
                                                    }
                                                ?>
                                                </select>
                                        <?php
                                            }
                                        }
                                        if($kilimandjaro_title_control==true){
                                        ?>
                                            <span class="customize-control-title"><?php esc_html_e('Title','kilimandjaro')?></span>
                                            <input type="text" value="<?php if(!empty($icon->title)) echo esc_attr($icon->title); ?>" class="kilimandjaro_title_control" placeholder="<?php esc_html_e('Title','kilimandjaro'); ?>"/>
                                        <?php
                                                }

                                        if($kilimandjaro_subtitle_control==true){
                                        ?>
                                            <span class="customize-control-title"><?php esc_html_e('Subtitle','kilimandjaro')?></span>
                                            <input type="text" value="<?php if(!empty($icon->subtitle)) echo esc_attr($icon->subtitle); ?>" class="kilimandjaro_subtitle_control" placeholder="<?php esc_html_e('Subtitle','kilimandjaro'); ?>"/>
                                        <?php
                                        }
                                        if($kilimandjaro_text_control==true ){?>
                                            <span class="customize-control-title"><?php esc_html_e('Text','kilimandjaro')?></span>
                                            <textarea class="kilimandjaro_text_control" placeholder="<?php esc_html_e('Text','kilimandjaro'); ?>"><?php if(!empty($icon->text)) {echo esc_attr($icon->text);} ?></textarea>
                                        <?php }

                                        if($kilimandjaro_link_control){ ?>
                                            <span class="customize-control-title"><?php esc_html_e('Link','kilimandjaro')?></span>
                                            <input type="text" value="<?php if(!empty($icon->link)) echo esc_url($icon->link); ?>" class="kilimandjaro_link_control" placeholder="<?php esc_html_e('Link','kilimandjaro'); ?>"/>
                                        <?php }?>

                                        <button type="button" class="kilimandjaro_general_control_remove_field button" <?php if ($it == 0) echo 'style="display:;"'; ?>><?php esc_html_e('Delete field','kilimandjaro'); ?></button>
                                    </div>

                                </div>
                    <?php
                                $it++;
                            }
                        }
                    }

                if ( !empty($this_default) && empty($json)) {
                     
                ?>
                    <input type="hidden" id="kilimandjaro_<?php echo $options['section']; ?>_repeater_colector" <?php $this->link(); ?> class="kilimandjaro_repeater_colector" value="<?php  echo esc_textarea( json_encode($this_default )); ?>" />
            <?php } else {	?>
                    <input type="hidden" id="kilimandjaro_<?php echo $options['section']; ?>_repeater_colector" <?php $this->link(); ?> class="kilimandjaro_repeater_colector" value="<?php echo esc_textarea( $this->value() ); ?>" />
            <?php } ?>
            </div>

            <button type="button"   class="button add_field kilimandjaro_general_control_new_field"><?php esc_html_e('Add new field','kilimandjaro'); ?></button>

            <?php

    }

}
