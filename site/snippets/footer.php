<!-- footer.php -->
	<footer>
		<div class="feet">
			<div class="toe">&nbsp;<?php snippet('license') ?></div>
			<div class="toe"><a href="<?php echo $pages->find('impressum')->url() ?>">Impressum/Datenschutz</a></div>
			<div class="toe"><a href="<?php echo url('blog/feed') ?>">RSS</a></div>
			<div class="toe">title font <a href="http://z-x-x.org">ZXX</a> by <a href="http://www.sang-mun.com">Sang Mun</a></div>
			<div class="toe colophon">zɛlpst is running on <a href="http://getkirby.com">Kirby</a> in <a href="http://uberspace.de">Uberspace</a></div>
		</div>
	</footer>
	<?php if ($page->hasImages() || $page->title() == 'Zuhause') {
        echo '<!-- has images -->';
        echo js('assets/js/jquery-2.1.3.min.js');
        echo js('assets/js/featherlight.min.js');
        echo '<script>$.featherlight.defaults.closeOnClick = "anywhere";
            $.featherlight.defaults.closeIcon = "";</script>';
    } ?>
</body>
</html>
