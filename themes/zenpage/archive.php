<?php
// force UTF-8 Ø

if (!defined('WEBPATH'))
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php echo LOCAL_CHARSET; ?>">
		<?php zp_apply_filter('theme_head'); ?>
		<?php printHeadTitle(); ?>
		<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/style.css" type="text/css" />
		<?php if (class_exists('RSS')) printRSSHeaderLink('Gallery', gettext('Gallery RSS')); ?>
	</head>

	<body>
		<?php zp_apply_filter('theme_body_open'); ?>

		<div id="main">

			<div id="header">
				<h1><?php printGalleryTitle(); ?></h1>
				<?php
				if (getOption('Allow_search')) {
					printSearchForm("", "search", "", gettext("Search"));
				}
				?>
			</div>


			<div id="breadcrumb">
				<h2><?php printGalleryIndexURL(' » '); ?><strong><?php echo gettext("Archive View"); ?></strong></h2>
			</div>

			<div id="content">
				<div id="content-left">
					<div id="archive">
						<h3><?php echo gettext('Gallery archive'); ?></h3>
						<?php printAllDates(); ?>
						<hr />
						<?php if (extensionEnabled('zenpage') && ZP_NEWS_ENABLED) { ?>
							<h3><?php echo gettext('News archive'); ?></h3>
							<?php printNewsArchive("archive"); ?>
							<hr />
      <?php } ?>

						<h3><?php echo gettext('Popular Tags'); ?></h3>
						<div id="tag_cloud">
<?php printAllTagsAs('cloud', 'tags'); ?>
						</div>
					</div>
				</div><!-- content left-->



				<div id="sidebar">
<?php include("sidebar.php"); ?>
				</div><!-- sidebar -->

				<div id="footer">
<?php include("footer.php"); ?>
				</div>
			</div><!-- content -->

		</div><!-- main -->
		<?php
		zp_apply_filter('theme_body_close');
		?>
	</body>
</html>