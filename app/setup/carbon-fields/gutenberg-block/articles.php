<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field\Field;

Block::make(__('Articles'))
->add_fields([])
->set_description(__('Afficher les derniers articles'))
->set_category('Emergence')
->set_render_callback(function($fields = [], $attributes = []){
  WPEmerge\render('gutenberg-block/articles',array_merge($fields, $attributes));
});
