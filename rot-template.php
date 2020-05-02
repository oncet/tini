<?php
/**
 * Template Name: Link Rot
 */

$context = Timber::context();

$context['posts'] = new Timber\PostQuery();

Timber::render(['rot-template.twig'], $context);