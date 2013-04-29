<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>

  <link rel="apple-touch-icon" href="<?php drupal_get_path('theme', 'drupal_theme_template') ?>/assets/images/icons/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php drupal_get_path('theme', 'drupal_theme_template') ?>/assets/images/icons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php drupal_get_path('theme', 'drupal_theme_template') ?>/assets/images/icons/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php drupal_get_path('theme', 'drupal_theme_template') ?>/assets/images/icons/apple-touch-icon-144x144.png" />

  <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>