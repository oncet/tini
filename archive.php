<?php

$context = Timber::context();

$context['posts'] = new Timber\PostQuery();
$context['category'] = get_category(get_query_var('cat'));

Timber::render(['archive.twig'], $context);