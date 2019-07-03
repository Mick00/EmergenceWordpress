<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field\Field;

Block::make(__('Feature'))
->add_fields([
  Field::make('text','icon', __('Classes de l\'icone')),
  Field::make('text', 'title', __('Titre')),
  Field::make('rich_text', 'content', __("content")),
  Field::make('text', 'link', __('Lien')),
])
->set_description(__('Afficher une fonctionnalité'))
->set_category('Emergence')
->set_render_callback(function($fields){
  WPEmerge\render('gutenberg-block/feature', $fields);
});
