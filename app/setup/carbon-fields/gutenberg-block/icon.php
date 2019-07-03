<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field\Field;



Block::make(__('Icon'))
->add_fields([
  Field::make('text', 'classes',__('Classes')),
  Field::make('select', 'size', __('Taille'))
  ->set_options([
    'icon-small'      => __('Small'),
    'icon-normal'     => __('Normal'),
    'icon-big'        => __('Big'),
    'icon-huge'       => __('Huge'),
    'icon-giant'      => __('Giant'),
    'icon-giganormous'=> __('giganormous'),
  ]),
])
->set_description(__('Ajouter un icone'))
->set_category('Emergence')
->set_render_callback(function($fields){
    echo "<i class='".$fields['classes']." ".$fields['size']."'></i>";
});
