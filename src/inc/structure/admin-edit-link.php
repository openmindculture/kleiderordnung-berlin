<?php
/*
 * Admin Edit Link Component (visible only to logged in admins, class set in js based on cookies for better caching)
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
  $kleiderordnung_currentAdminLink = get_admin_url();
  if (
    $post && (
      is_single() || (is_page() && !is_front_page())
    )) {
    $kleiderordnung_currentAdminLink = get_edit_post_link( $post );
  } elseif (defined('KLEIDERORDNUNG_IS_NEWS_ARCHIVE') && KLEIDERORDNUNG_IS_NEWS_ARCHIVE) {
    $kleiderordnung_currentAdminLink = get_admin_url() . 'edit.php';
  }
?>
<div class="admin__editlink no-print" tabindex="0">
  <a href="<?php echo $kleiderordnung_currentAdminLink ?>" class="admin__editlink__link" title="<?php _e( 'Seite bearbeiten', 'kleiderordnung' ) ?> (<?php _e( 'nur sichtbar für angemeldete Administrator:innen', 'kleiderordnung' ) ?>)">
    <span class="admin__editlink__icons">
      <img src="<?php echo get_template_directory_uri() ?>/img/icons/business-woman.svg" width="48" height="48" class="admin__editlink__icon admin__editlink__icon--business-woman" alt="business woman icon" />
      <img src="<?php echo get_template_directory_uri() ?>/img/icons/pencil.svg" width="48" height="48" class="admin__editlink__icon admin__editlink__icon--pencil" alt="pencil icon" />
    </span>
    <span class="admin__editlink__text"><?php _e( 'Seite bearbeiten', 'kleiderordnung' ) ?></span>
  </a>
</div>
