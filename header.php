<?php
	$context['path'] = get_template_directory_uri();
	$context['sitename'] = get_bloginfo('name');
	$context['charset'] = get_bloginfo('charset');
	$context['title'] = woocommerce_page_title(false);

	Timber::render('header.twig', $context);
?>