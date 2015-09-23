<?php snippet('header') ?>
<section class="content">
	<article id="impressum">
		<h1><?php echo html($page->title()) ?></h1>
		<address><?php echo kirbytext($page->address()) ?></address>
		<?php echo kirbytext($page->text()) ?>
	</article>
</section>
<?php snippet('footer') ?>