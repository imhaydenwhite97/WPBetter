<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
// Load different headers based on page type
if (is_front_page()) {
    get_template_part('template-parts/header/custom-header');
} elseif (is_page('about')) {
    get_template_part('template-parts/header/about-header');
} elseif (is_page('services')) {
    get_template_part('template-parts/header/services-header');
} elseif (is_page('contact')) {
    get_template_part('template-parts/header/contact-header');
} else {
    get_template_part('template-parts/header/custom-header');
}
?>
