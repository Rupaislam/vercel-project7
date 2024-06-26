<?php

class td_module_mega_menu extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();

        //replace h in header to pass lighthouse
        $title_tag = 'div';
        $additional_classes_array = array('td-cpt-'. $this->post->post_type);
        ?>

        <div class="<?php echo $this->get_module_classes( array_merge(array("td_mod_mega_menu"), $additional_classes_array ) ); ?>">
            <div class="td-module-image">
                <?php echo $this->get_image('td_180x135');?>
                <?php echo $this->get_video_duration(); ?>
                <?php if (td_util::get_option('tds_category_module_mega_menu') == 'yes') { echo $this->get_category(); }?>
            </div>

            <div class="item-details">
                <?php echo $this->get_title('', $title_tag);?>
            </div>
        </div>
        <?php return ob_get_clean();
    }
}