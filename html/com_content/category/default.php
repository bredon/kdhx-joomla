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
    <section class="category-list <?php echo $this->pageclass_sfx;?>">
	<?php if ($this->params->get('show_category_title', 1) or $this->params->get('page_subheading')) : ?>
    <header>
	<h2>
		<?php echo $this->escape($this->params->get('page_subheading')); ?>
		<?php if ($this->params->get('show_category_title')) : ?>
			<span class="subheading-category"><?php echo $this->category->title;?></span>
		<?php endif; ?>
	</h2>
    </header>
	<?php endif; ?>

	<?php if ($this->params->get('show_description', 1) || $this->params->def('show_description_image', 1)) : ?>
	<section class="category-desc">
		<?php if ($this->params->get('show_description_image') && $this->category->getParams()->get('image')) : ?>
			<img src="<?php echo $this->category->getParams()->get('image'); ?>"/>
		<?php endif; ?>
		<?php if ($this->params->get('show_description') && $this->category->description) : ?>
			<?php echo JHtml::_('content.prepare', $this->category->description, '', 'com_content.category'); ?>
		<?php endif; ?>
	</section>
	<?php endif; ?>

	<section class="cat-items">
		<?php echo $this->loadTemplate('articles'); ?>
	</section>

	<?php if (!empty($this->children[$this->category->id])&& $this->maxLevel != 0) : ?>
	<section class="cat-children">
    <header>
		<h3>
			<?php echo JTEXT::_('JGLOBAL_SUBCATEGORIES'); ?>
		</h3>
	</header>
		<?php echo $this->loadTemplate('children'); ?>
	</section>
	<?php endif; ?>
</section>
