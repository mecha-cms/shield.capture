<?php Shield::get('header'); ?>
<main>
  <?php echo $message; ?>
  <?php $c = Extend::exist('comment') ? Extend::state('comment', 'anchor', [1 => 'form-comment'])[1] : false; ?>
  <?php foreach ($pages as $page): ?>
  <article id="page-<?php echo $page->id; ?>">
    <figure>
      <!-- 18 is the font size, 20 is magic number -->
      <p><a href="<?php echo $page->url; ?>"><img alt="" src="<?php echo To::thumbnail($page->image('data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'), $i = 18 * 20, $i); ?>"></a></p>
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
        <p><?php echo To::snippet($page->description, false, 40); ?></p>
      </figcaption>
    </figure>
  </article>
  <?php endforeach; ?>
</main>
<nav><?php echo $pager; ?></nav>
<?php Shield::get('footer'); ?>