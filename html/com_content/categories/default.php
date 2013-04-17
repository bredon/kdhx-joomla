<?php

 /* =====================================================================
Template:	KDHX for Joomla 2.5
Author: 	Bredon Jones
Version: 	0.1
Created: 	April 2013
Copyright:	KDHX - (C) 2013 - All rights reserved
Licenses:	GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
Source:

/* ===================================================================== */

// no direct access
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');
?>

<?php if ($this->params->get('show_page_heading', 1)) : ?>
<header>
<h1>
	<?php echo $this->escape($this->params->get('page_heading')); ?>
</h1>
</header>
<?php endif; ?>
<section class="categories-list <?php echo $this->pageclass_sfx;?>">
<?php if ($this->params->get('show_base_description')) : ?>
	<?php 	//If there is a description in the menu parameters use that; ?>
		<?php if($this->params->get('categories_description')) : ?>
			<?php echo  JHtml::_('content.prepare', $this->params->get('categories_description'), '', 'com_content.categories'); ?>
		<?php  else: ?>
			<?php //Otherwise get one from the database if it exists. ?>
			<?php  if ($this->parent->description) : ?>
				<div class="category-desc">
					<?php  echo JHtml::_('content.prepare', $this->parent->description, '', 'com_content.categories'); ?>
				</div>
			<?php  endif; ?>
		<?php  endif; ?>
	<?php endif; ?>
<?php
echo $this->loadTemplate('items');
?>
</section>
