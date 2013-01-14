<?php
/**
 * @file om_maximenu_submenu_content.tpl.php
 * Default theme implementation of om maximenu contents with submenu blocks
 *
 * Available variables:
 * - $content: blocks
 *
 * Helper variables:
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $user: (object) user properties
 *
 * @see template_preprocess_om_maximenu_submenu()
 * @see template_preprocess_om_maximenu_submenu_links()
 * @see template_preprocess_om_maximenu_submenu_content()
 */
?>

<?php if (!empty($content)): ?>
  <div class="om-maximenu-content om-maximenu-content-nofade closed">
    <?php print om_maximenu_content_render($content); ?>
  </div>
<?php endif; ?>

