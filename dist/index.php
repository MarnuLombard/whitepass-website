<?php
	require 'config.php';
	$title = 'Whitepass Software Solutions | Under Construction';
	include_once 'static/head.php';
?>

<body>
<?php include_once 'static/noscript.php'; ?>

	<?php include_once 'static/nav.php'; ?>

	<section class="grid mt75">
		<div class="grid__item three-quarters lap--one-half desk--one-third center">
			<img src="img/logo.png" alt="Whitepass Software Solutions logo" class="maxImg">
		</div><!-- //logo -->
	</section>

	<section class="grid" role="main">
		<div class="grid__item one-whole text--center">
			<h3><small>(Pty) Ltd</small></h3>

			<h4 class="mt50">
				Our services:
			</h4>
		</div>
	</section>

	<section class="grid modular__wrapper text--center">
		<div class="grid__item one-third modular__mid-red">
			<p>&nbsp;</p>
			<div class="modular__item">
				Cosmetics &amp; Beauty
			</div>
			<div class="modular__item">
				Health &amp; Wellness
			</div>
			<div class="modular__item">
				Entertainment &amp; Adventure
			</div>
		</div>

		<div class="grid__item one-third modular__light-red">
			<div class="modular__item">
				Apps
			</div>
			<div class="modular__item">
				Consulting
			</div>
			<div class="modular__item modular__circle modular__black">
				Strategic Projects
			</div>
			<div class="modular__item modular__black">
				Imports, Exports &amp; Logistics
			</div>
		</div>
		<div class="grid__item one-third modular__dark-red">
			<p>&nbsp;</p>
			<div class="modular__item">
				Construction &amp; Manufacturing
			</div>
			<div class="modular__item">
				Industrial &amp; Energy
			</div>
			<div class="modular__item">
				Agriculture &amp; Mining
			</div>
		</div>
	</section>

  <section class="grid text--center mt75">
  	<div class="grid__item two-thirds">
  		<h4>Contact:</h4>
  		<?= hidemail('info@whitepass.co.za') ?>
  	</div>
  </section>


	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>
