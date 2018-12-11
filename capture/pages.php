<?php Shield::get('header'); ?>
<?php $c = Extend::exist('comment') ? (Extend::state('comment', 'anchor')[1] ?? 'form-comment') : false; ?>
<main>
  <?php echo $message; ?>
  <?php foreach ($pages as $page): ?>
  <article id="page-<?php echo $page->id; ?>">
    <figure>
      <!-- 18 is the font size, 30 is magic number -->
      <p><a href="<?php echo $page->url; ?>"><img alt="" src="<?php echo $page->image($i = 18 * 30, $i) ?: 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'; ?>"></a></p>
      <?php if ($c): ?>
      <p><a href="<?php echo $page->url . '#' . $c; ?>"><?php echo $page->comments->text; ?></a></p>
      <?php endif; ?>
      <figcaption>
        <h3>
          <?php if ($page->link): ?>
          <a href="<?php echo $page->link; ?>" rel="nofollow" target="_blank"><?php echo $page->title; ?> &#x21E2;</a>
          <?php else: ?>
          <a href="<?php echo $page->url; ?>"><?php echo $page->title; ?></a>
          <?php endif; ?>
        </h3>
        <p><?php echo To::snippet((string) $page->description, true, 40); ?></p>
      </figcaption>
    </figure>
  </article>
  <?php endforeach; ?>
</main>
<nav><?php echo $pager; ?></nav>
<?php Shield::get('footer'); ?>