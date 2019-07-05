<?php
$args = array(
  'numberposts' => 3,
  'orderby' => 'post_date',
  'order' => 'DESC',
  'post_type' => 'post',
  'post_status' => 'publish'
);
$recent_posts = wp_get_recent_posts( $args, OBJECT );
$date = strtotime($post->post_date);
$post = $recent_posts[0];
?>
<div class="emergence-articles d-flex flex-wrap flex-md-nowrap mt-4">
  <div class="article-principal mb-md-4 mb-4 wow slideInLeft" style="background-image: url('<?=wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];?>')">
    <div class="overlay d-flex">
      <div class="article-meta d-flex">
        <div class="article-date text-center bg-light">
          <span class="font-weight-bold text-secondary d-block"><?=date('d',$date)?></span>
          <span class="font-weight-bold d-block"><?=date_i18n('M',$date)?></span>
        </div>
        <div class="article-content">
          <h3 class="text-light text-bold">
            <a class="text-white text-bold" href="<?=get_permalink($post->ID)?>"><?=$post->post_title?></a>
          </h3>
          <a class="text-white text-bold" href="<?=get_permalink($post->ID)?>">
            <p><?=$post->post_excerpt?></p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="articles-secondary d-flex flex-column">
  <?php for ($i = 1; $i < count($recent_posts); $i++):
    $post = $recent_posts[$i];
    ?>
    <div class="article mb-md-4 ml-md-4 mb-4 wow slideInRight" style="background-image: url('<?=wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];?>')">
      <div class="overlay d-flex">
        <div class="article-meta d-flex">
          <div class="article-date text-center bg-light">
            <span class="font-weight-bold text-secondary d-block"><?=date('d',$date)?></span>
            <span class="font-weight-bold d-block"><?=date_i18n('M',$date)?></span>
          </div>
          <div class="article-content">
            <h4 class="text-white text-bold">
              <a class="text-white text-bold" href="<?=get_permalink($post->ID)?>"><?=$post->post_title?></a>
            </h3>
          </div>
        </div>
      </div>
    </div>
  <?php endfor; ?>
  </div>
</div>
