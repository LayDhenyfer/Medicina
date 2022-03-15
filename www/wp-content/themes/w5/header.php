<?php
#include(TEMPLATEPATH . '/inc/dfp/dfp-segmentation-attributes.php');
?>

<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>	
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="google-site-verification" content="MqNz7Hz8C9YDHwngz8MVu2LodFnA1WTQcNqWHSJ3XcY" />
    <meta name="publisher" content="layliadhennyfe20017@gmail.com" />

	<?php
		get_template_part('template-parts/header/seo');
		wp_head();
		global $current_user;
		wp_get_current_user();
	?>

	<?php echo get_template_part('template-parts/header/codes');?>
</head>

<body <?php body_class($post->post_name ?? ''); ?>>
	<?php
		get_template_part('template-parts/navigation/menu');
	?>