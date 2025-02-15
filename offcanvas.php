<?php

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Language\Text; // Load Joomla language helper

// Get Joomla Application
$app = Factory::getApplication();
$template = $app->getTemplate(true);
$moduleClassSfx = htmlspecialchars($params->get('moduleclass_sfx', ''), ENT_QUOTES, 'UTF-8');

// Unique IDs for Offcanvas Menu
$offcanvasId = 'offcanvasMenu';

// Load Bootstrap Offcanvas
HTMLHelper::_('bootstrap.offcanvas');

?>
<!-- Normal Menu (Visible on Medium & Large Screens: ≥992px) -->
<nav class="d-none d-lg-flex navbar navbar-expand">
	<div class="container">
		<ul class="navbar-nav">
			<?php require ModuleHelper::getLayoutPath('mod_menu', 'default'); ?>
		</ul>
	</div>
</nav>

<!-- Offcanvas Menu (Visible on Small Screens: <992px) -->
<nav class="d-flex d-lg-none mt-0">
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#<?php echo $offcanvasId; ?>" aria-controls="<?php echo $offcanvasId; ?>">
    <span class="icon-menu"></span>
	<span class="menu-text"><?php echo Text::_('MOD_OFFCANVAS_MENU_TITLE'); ?></span>
</button>

	<div class="offcanvas offcanvas-start" tabindex="-1" id="<?php echo $offcanvasId; ?>" aria-labelledby="<?php echo $offcanvasId; ?>Label">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title"><?php echo Text::_('MOD_OFFCANVAS_MENU_TITLE'); ?></h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<ul class="nav flex-column">
				<?php require ModuleHelper::getLayoutPath('mod_menu', 'default'); ?>
			</ul>
		</div>
	</div>
</nav>
