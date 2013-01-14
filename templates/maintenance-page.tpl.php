<?php
/**
 * @file
 * Theme's implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 */
?>

<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes; ?>><!--<![endif]-->

  <head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>

    <?php if ($default_mobile_metatags): ?>
      <meta name="MobileOptimized" content="width">
      <meta name="HandheldFriendly" content="true">
      <meta name="viewport" content="width=device-width">
    <?php endif; ?>
    <meta http-equiv="cleartype" content="on">

    <?php print $styles; ?>

    <?php print $scripts; ?>
    <?php if ($add_respond_js): ?>
      <!--[if lt IE 9]>
        <script src="<?php print $base_path . $path_to_theme; ?>/public/js/html5-respond.js"></script>
      <![endif]-->
    <?php elseif ($add_html5_shim): ?>
      <!--[if lt IE 9]>
        <script src="<?php print $base_path . $path_to_theme; ?>/public/js/html5.js"></script>
      <![endif]-->
    <?php endif; ?>
  </head>

  <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <div id="page">
      <div id="main">

        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>

        <div id="content" class="column" role="main">
          <?php print $highlighted; ?>
          <a id="main-content"></a>
          <?php print $messages; ?>
          <?php print $content; ?>
        </div><!-- /#content -->

      </div><!-- /#main -->
    </div><!-- /#page -->
  </body>

</html>
