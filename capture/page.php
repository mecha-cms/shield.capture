<?php Shield::get('header'); ?>
<main>
  <?php echo $message; ?>
  <article id="page-<?php echo $page->id; ?>">
    <header>
      <h2><span><?php echo $page->title; ?></span></h2>
      <p><strong><?php echo $language->author; ?>:</strong> <?php echo $page->author; ?></p>
    </header>
    <div>
      <?php echo $page->content; ?>
      <?php if ($page->link): ?>
      <p><a href="<?php echo $page->link; ?>" rel="nofollow" target="_blank"><?php echo $language->link; ?> &#x21E2;</a></p>
      <?php endif; ?>
    </div>
    <footer>
      <p><time datetime="<?php echo $page->date->W3C; ?>"><?php echo $page->date->{str_replace('-', '_', $config->language)}; ?></time></p>
    </footer>
  </article>
</main>
<?php if (strpos($url->path, '/') !== false): ?>
<nav><?php echo $pager; ?></nav>
<?php endif; ?>
<?php Shield::get('footer'); ?>