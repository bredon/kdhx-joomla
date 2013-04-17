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
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
?>
<section class="blog-featured <?php echo $this->pageclass_sfx;?>">
<?php if ( $this->params->get('show_page_heading')!=0) : ?>
<header>
	<h1>
	<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
</header>
<?php endif; ?>
<?php $leadingcount=0 ; ?>
<?php if (!empty($this->lead_items)) : ?>
<section class="leading-articles">
	<?php foreach ($this->lead_items as &$item) : ?>
		<article class="article <?php echo $leadingcount; ?><?php echo $item->state == 0 ? ' system-unpublished' : null; ?> clearfix">
			<?php
				$this->item = &$item;
				echo $this->loadTemplate('item');
			?>
		</article>
		<?php
			$leadingcount++;
		?>
	<?php endforeach; ?>
</section>
<?php endif; ?>

<?php
	$introcount=(count($this->intro_items));
	$counter=0;
?>
<?php if (!empty($this->intro_items)) : ?>
<section class="intro-articles">
	<?php foreach ($this->intro_items as $key => &$item) : ?>
		<article class="article <?php echo $counter; ?> clearfix">
			<?php
					$this->item = &$item;
					echo $this->loadTemplate('item');
			?>
		</article>
		<?php $counter++; ?>
	<?php endforeach; ?>
</section>
<?php endif; ?>

<?php if (!empty($this->link_items)) : ?>
	<section class="more-articles">
	<?php echo $this->loadTemplate('links'); ?>
	</section>
<?php endif; ?>

<?php if ($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2 && $this->pagination->get('pages.total') > 1)) : ?>
	<section class="pagination">

		<?php if ($this->params->def('show_pagination_results', 1)) : ?>
			<p class="counter">
				<?php echo $this->pagination->getPagesCounter(); ?>
			</p>
		<?php  endif; ?>
				<?php echo $this->pagination->getPagesLinks(); ?>
	</section>
<?php endif; ?>

</section>
