<div class="card feature d-inline-block text-center p-4 shadow">
  <?php if (!empty($icon)): ?>
    <i class="<?=$icon?> icon-giant"></i>
  <?php endif;
  write_if_not_empty('<h2 class="feature-title">', '</h2>', $title);
  write_if_not_empty('<p class="feature-text">', '</p>', $content);
  ?>
</div>
