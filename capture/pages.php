<?php Shield::get('header'); ?>
<main>
  <?php echo $message; ?>
  <?php foreach ($pages as $page): ?>
  <article id="page-<?php echo $page->id; ?>">
    <figure>
      <p><img alt="" src="<?php echo $page->image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'); ?>"></p>
	  <figcaption>
	    <h3>
          <?php if ($page->link): ?>
          <a href="<?php echo $page->link; ?>" rel="nofollow" target="_blank"><?php echo $page->title; ?> &#x21E2;</a>
          <?php else: ?>
          <a href="<?php echo $page->url; ?>"><?php echo $page->title; ?></a>
          <?php endif; ?>
		</h3>
		<p><?php echo To::snippet($page->description, false, 40); ?></p>
	  </figcaption>
	</figure>
  </article>
  <?php endforeach; ?>
</main>
<nav><?php echo $pager; ?></nav>
<?php Shield::get('footer'); ?>