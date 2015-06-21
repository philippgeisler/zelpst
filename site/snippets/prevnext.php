<nav>
	<div class="art-nav prev">
		<?php if($page->hasPrevVisible()): ?>
		&#60;–&nbsp;voriger Beitrag:&nbsp;<a href="<?php echo $page->prevVisible()->url() ?>">&nbsp;<?php echo $page->prevVisible()->title() ?>&nbsp;</a>
		<?php endif ?>
	</div>

	<div class="art-nav next">
		<?php if($page->hasNextVisible()): ?>
		nächster Beitrag:&nbsp;<a href="<?php echo $page->nextVisible()->url() ?>">&nbsp;<?php echo $page->nextVisible()->title() ?>&nbsp;</a>&nbsp;-&#62;
		<?php endif ?>
	</div>
</nav>