<?php snippet('header') ?>
<!-- default.php -->
<section class="content">
	<article>
<!-- better/proper way for publication date, apparently: <time pubdate datetime="2009-10-10T19:15-08:00">~1 hour ago</time> !?! -->
<aside class="createdAt">
<time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo strftime('%e. %B ’%y', $page->date()) ?></time>
</aside>
		<h1><?php echo html($page->title()) ?></h1>
		<?php echo kirbytext($page->text()) ?>
	</article>
</section>
<?php snippet('prevnext') ?>
<?php snippet('footer') ?>
