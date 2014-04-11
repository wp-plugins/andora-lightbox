<?php
/*
 *TODO:
 */
function abcfal_txtbldr($id, $suffix='') {

    switch ($id){
        case 0:
            $out = '';
            break;
        case 1:
            $out = __('Help', 'abcfal-td');
            break;
        case 2:
            $out = __('Collection', 'abcfal-td');
            break;
        case 3:
            $out = __('Shortcode', 'abcfal-td');
            break;
        case 4:
            $out = __('Uninstall', 'abcfal-td');
            break;
        case 5:
            $out = __('Yes', 'abcfal-td');
            break;
        case 6:
            $out = __('No', 'abcfal-td');
            break;
        case 7:
            $out = __('Default Options', 'abcfal-td');
            break;
        case 9:
            $out = __('Copy this code and paste it into your post, page or text widget content.', 'abcfal-td');
            break;
       case 11:
            $out = __('Full Documentation and Help Files:', 'abcfal-td');
            break;
       case 12:
            $out = __('Error: Images Collection not selected!.', 'abcfal-td');
            break;
       case 13:
            $out = __('Error: Function count published images failed.', 'abcfal-td');
            break;
       case 14:
            $out = __('Error: There are no images to display!. Collection has no images.', 'abcfal-td');
            break;
       case 15:
            $out = __('Error: There are no images to display!. <p>Collection has images but all of them have status: Unpublished.</p>', 'abcfal-td');
            break;
       case 16:
            $out = __('See Image Collections FAQ:  <a href="http://abcfolio.com/help/wordpress-image-collections-faq/#publish_images">How to Publish images.</a>', 'abcfal-td');
            break;
        case 17:
            $out = __('Image Collections plugin is missing. Please install the plugin.', 'abcffs-td');
            break;
        case 30:
            $out = __('Grid Container - Width.', 'abcfal-td');
            break;
        case 31:
            $out = __('Grid Container - Height.', 'abcfal-td');
            break;
        case 32:
            $out = __('Leave it blank to have it expand with content.', 'abcfal-td');
            break;
        case 33:
            $out = __('Grid Container - Left Margin', 'abcfal-td');
            break;
        case 34:
            $out = __('Grid Container - Top Margin', 'abcfal-td');
            break;
          case 35:
            $out = __('Grid Container', 'abcfal-td');
            break;
        case 37:
            $out = __('Sample of valid entries: 15, 15px, 15%, 15em or blank. Number only = pixels (px). Blank = default value.', 'abcfal-td');
            break;
        case 38:
            $out = __('Default value = 100% of the parent container. Leave it blank to keep the default value.', 'abcfal-td');
            break;
        case 39:
            $out = __('Leave it blank to keep default value of 0 (zero pixels).', 'abcfal-td');
             break;
        case 42:
            $out = __('Leave it blank to keep the default value of 20 pixels.', 'abcfal-td');
            break;
        default:
            $out = '';
            break;
    }
    return $out . $suffix;

}