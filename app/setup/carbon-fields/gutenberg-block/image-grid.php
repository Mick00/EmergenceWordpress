<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field\Field;



Block::make(__('Image Grid'))
->add_fields([
  Field::make('select', 'col', __('Nombre de colonne'))
  ->set_options([
    'grid-2'      => '2',
    'grid-3'      => '3',
    'grid-4'      => '4',
  ]),
  Field::make('complex', 'images', __('Images'))
  ->add_fields([
    Field::make('image', 'image', __('image')),
  ]),
])
->set_description(__('Grille d\'image'))
->set_category('Emergence')
->set_render_callback(function($fields, $attributes){
  $class = $fields['col'];
  if (!empty($attributes['className'])) {
    $class .= " ".$attributes['className'];
  }
  ?>
<div class="grid image-grid <?=$class?>">
  <?php
  foreach ($fields['images'] as $image_field) {
    echo "<div class='grid-image-item'>".wp_get_attachment_image($image_field['image'])."</div>";
  }
  ?>
</div>
  <?php

});
