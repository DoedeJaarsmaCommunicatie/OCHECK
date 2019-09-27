<?php

$context = \Timber\Timber::get_context();
$context['post'] = \Timber\Timber::get_post();

return \Timber\Timber::render(
    [
        'views/page.html.twig',
    ],
    $context
);
