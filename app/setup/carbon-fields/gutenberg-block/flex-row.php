<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field\Field;

Block::make(__('Flex row'))
->add_fields([
  Field::make('checkbox', 'wrap', __('Laisser le contenu s\'aligner verticalement'))
  ->set_option_value(__('Yes')),
  Field::make('select', 'gutter', __('Espacement entre les blocs'))
  ->add_options([
    false => __('No'),
    'flex-sm-gutter' => __('Small'),
    'flex-md-gutter' => __('Medium'),
    'flex-lg-gutter' => __('Large')
  ])
])
->set_inner_blocks( true )
->set_description(__('Ajouter une section contenant des fonctionnalités en vedette'))
->set_category('Emergence')
->set_render_callback(function($fields, $attributes = [], $innerblocs = ""){
  $class = ($fields['wrap'] ? " flex-wrap":"");
  $class .= ($fields['gutter'] ? " ".$fields['gutter']:"");
  if(!empty($attributes['className'])){
	  $class .= " ".$attributes['className'];
  }
  ?>
  <div class="emergence-flex-row d-flex <?=$class?>">
    <?=$innerblocs?>
  </div>
  <?php
});

Block::make(__('Flex item'))
->set_inner_blocks(true)
->set_description(__('Créer un bloc dans une rangée flexible'))
->set_category(__('Emergence'))
->set_render_callback(function ($fields, $attributes, $innerblocs =""){
  $class = !empty($attributes['className'])?" ".$attributes['className']:"";
  ?>
  <div class="emergence-item<?=$class?>">
    <?=$innerblocs?>
  </div>
  <?php
});
