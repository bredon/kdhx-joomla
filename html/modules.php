<?php defined('_JEXEC') or die;
/* =====================================================================
Template: KDHX for Joomla 2.5
Author:   Bredon Jones
Version:  0.1
Created:  April 2013
Copyright:  KDHX - (C) 2013 - All rights reserved
Licenses: GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
Source:
/* ===================================================================== */

/* Let's make the module output using HTML5 elements */

function modChrome_kdhx($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) : ?>
    <article class="moduletable<?php echo $params->get('moduleclass_sfx'); ?>" id="module-<?php echo $module->id; ?>">
		<?php if ($module->showtitle) : ?>
                <h<?php echo $headerLevel; ?> class="module-title"><?php echo $module->title; ?></h<?php echo $headerLevel; ?>>
		<?php endif; ?>
            <section class="module-content"><?php echo $module->content; ?></section>
    </article>
	<?php endif;
}