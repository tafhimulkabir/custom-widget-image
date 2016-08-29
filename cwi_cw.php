<?php
/**
 * This file is responsible for cwi custom widget.
 *
 * Register custom widget for CWI Plugin.
 *
 * @package Custom Widget Image
 * @subpackage CWI
 * @since Custom Widget Image 1.0
 */

# Class for custom widget ...
class cwi_custom_widget_uploader extends WP_Widget {

    public function __construct () {
        parent :: __construct (
            'cwi_custom_widget_uploader',
            'Image Uploader',
            array (
                'description'   => 'Add a custom image to your sidebar. '
            )
        );
    }

    # CWI widget front end part ...
    public function widget ( $args, $instance ) {

            # Custom variable for data show ...
            $cwiFeTitle   = $instance['title'];
            $cwiFeImgLoc  = $instance['wbe_img_loc'];
            # $cwiFeImgUpl  = $instance['wbe_img_upload'];
            $cwiFeLink    = $instance['wbe_link'];
            $cwiFeAlt     = $instance['wbe_alt'];
            $cwiFeCap     = $instance['wbe_caption'];
            $cwiFeImgSiW  = $instance['wbe_img_size_wi'];
            $cwiFeImgSiH  = $instance['wbe_img_size_he'];
            $cwiFeShoTit  = $instance['wbe_show_title'];
            $cwiFeTarg    = $instance['wbe_target_bl'];


        # Display widget data ...
        echo $args['before_widget']
        .$args['before_title'].$cwiFeTitle.$args['after_title'].

        '<img src="http://keenthemes.com/preview/metronic/theme/assets/global/plugins/jcrop/demos/demo_files/image1.jpg" alt="'.$cwiFeAlt.'" title="'.$cwiFeCap.'">'.

        $args['after_widget'];



    }

    # CWI widget front end part ...
    public function form ( $instance ) {

          # Custom variable for data save ...
          $cwiBeTitle   = $instance['title'];
          $cwiBeImgLoc  = $instance['wbe_img_loc'];
          # $cwiBeImgUpl  = $instance['wbe_img_upload'];
          $cwiBeLink    = $instance['wbe_link'];
          $cwiBeAlt     = $instance['wbe_alt'];
          $cwiBeCap     = $instance['wbe_caption'];
          $cwiBeImgSiW  = $instance['wbe_img_size_wi'];
          $cwiBeImgSiH  = $instance['wbe_img_size_he'];
          $cwiBeShoTit  = $instance['wbe_show_title'];
          $cwiBeTarg    = $instance['wbe_target_bl'];

      ?>

        <p>
            <label for="<?php echo $this-> get_field_id('title'); ?>">Title : </label>
            <input type="text" id="<?php echo $this-> get_field_id('title'); ?>" value="<?php echo $cwiBeTitle; ?>" name="<?php echo $this-> get_field_name('title'); ?>" class="widefat">
        </p>
        <p>
            <img src="" alt="" title="">
        </p>
        <p>
            <label for="<?php echo $this-> get_field_id('wbe_img_loc'); ?>">Image locetion : </label>
            <input type="text" id="<?php echo $this-> get_field_id('wbe_img_loc'); ?>" value="<?php echo $cwiBeImgLoc; ?>" name="<?php echo $this-> get_field_name('wbe_img_loc'); ?>" class="widefat">
        </p>
        <p>
            <button class="button media-button  select-mode-toggle-button" name="<?php echo $this-> get_field_name('wbe_img_upload'); ?>">Add Image</button>
            <button class="button media-button  select-mode-toggle-button">Remove Image</button>
        </p>
        <p>
            <label for="<?php echo $this-> get_field_id('wbe_link'); ?>">Link : </label>
            <input type="text" id="<?php echo $this-> get_field_id('wbe_link'); ?>" value="<?php echo $cwiBeLink; ?>" name="<?php echo $this-> get_field_name('wbe_link'); ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this-> get_field_id('wbe_alt'); ?>">Altertext : </label>
            <input type="text" id="<?php echo $this-> get_field_id('wbe_alt'); ?>" value="<?php echo $cwiBeAlt; ?>" name="<?php echo $this-> get_field_name('wbe_alt'); ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this-> get_field_id('wbe_caption'); ?>">Caption : </label>
            <input type="text" id="<?php echo $this-> get_field_id('wbe_caption'); ?>" value="<?php echo $cwiBeCap; ?>" name="<?php echo $this-> get_field_name('wbe_caption'); ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this-> get_field_id('wbe_img_size_wi'); ?>">Add custom image size</label>
            <input id="<?php echo $this-> get_field_id('wbe_img_size_wi'); ?>" type="number" class="tiny-text" value="<?php echo $cwiBeImgSiW; ?>" name="<?php echo $this-> get_field_name('wbe_img_size_wi'); ?>"> <i>px</i>
            <input id="<?php echo $this-> get_field_id('wbe_img_size_he'); ?>" type="number" class="tiny-text" value="<?php echo $cwiBeImgSiH; ?>" name="<?php echo $this-> get_field_name('wbe_img_size_he'); ?>"> <i>px</i>
        </p>
        <p>
            <input type="checkbox" id="<?php echo $this-> get_field_id('wbe_show_title'); ?>" class="" value="<?php echo $cwiBeShoTit; ?>" name="<?php echo $this-> get_field_name('wbe_show_title'); ?>">
            <label for="<?php echo $this-> get_field_id('wbe_show_title'); ?>">Showe the title</label>
        </p>
        <p>
            <input type="checkbox" id="<?php echo $this-> get_field_id('wbe_target_bl'); ?>" class="" value="<?php echo $cwiBeTarg; ?>" name="<?php echo $this-> get_field_name('wbe_target_bl'); ?>">
            <label for="<?php echo $this-> get_field_id('wbe_target_bl'); ?>">Open with new tab</label>
        </p>

    <?php }

}


# Register CWI custom widget ...
function cwi_custom_widget_uploader_reg () {
    register_widget( 'cwi_custom_widget_uploader' );
}
add_action( 'widgets_init', 'cwi_custom_widget_uploader_reg' );
