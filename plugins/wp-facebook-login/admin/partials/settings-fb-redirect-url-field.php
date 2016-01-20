<?php
/**
 * Represents the partial view for where users can enter fb app id
 *
 * @since      1.0.0
 *
 * @subpackage Facebook_Login/Admin/Partials
 * @package    Facebook_Login
 *
 */
?>

<input type="text" name="fbl_settings[fb_redirect_url]" value="<?php echo $fb_redirect_url; ?>" placeholder="Redirect After Login" />
<p class="description" ><?php _e('Enter url redirect after login', 'fbl');?></p>