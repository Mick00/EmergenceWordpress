<?php

function get_supported_social_medias(){
  return [
    'facebook'   => '<i class="fab fa-facebook-square"></i>',
    'linkedin'   => '<i class="fab fa-linkedin"></i>',
    'twitter'    => '<i class="fab fa-twitter-square"></i>',
  ];
}
function get_social_links(){
  $links = [];
  foreach (get_supported_social_medias() as $key => $icon) {
    $link = carbon_get_theme_option($key);
    if(!empty($link)){
      $links[$key] = $link;
    }
  }
  return $links;
}

function add_socials_to_menu($items="", $args=[]){
  if( $args->theme_location == 'main-menu'){
    $socials_links = get_social_links();
    if (count($socials_links) > 0) {
      $social_links_tags = get_socials_icon_link("nav-link icon-big");
      $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11 nav-item">'.$social_links_tags.'</li>';
    }
  }
  return $items;
}

function get_socials_icon_link($class=""){
  $social_links_tags = "";
  $socials_links = get_social_links();
  if (count($socials_links) > 0) {
    $social_icons = get_supported_social_medias();
    foreach ($socials_links as $social => $link) {
      $social_links_tags .= '<a class="social-icon d-inline '.$class.'" href="'.$link.'">'.$social_icons[$social].'</a>';
    }
    return $social_links_tags;
  }
}
