<?php defined('_JEXEC') or die;
/* =====================================================================
Template:   KDHX for Joomla 2.5
Author:     Bredon Jones
Version:    0.1
Created:    April 2013
Copyright:  KDHX - (C) 2013 - All rights reserved
Licenses:	GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
Sources:
/* ===================================================================== */

// Load template logic
include_once JPATH_THEMES . '/' . $this->template . '/logic.php';
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <jdoc:include type="head" />
</head>
<body class="<?php echo $pageParams->get('pageclass_sfx'); ?> clearfix">
    <div id="wrapper">
        <div id="buttonRow" class="mobile clearfix">
          <?php if($this->countModules('search')) : ?>
        	<a id="mobileSearch" href="#search" title="Jump to search">Search</a>
          <?php endif; ?>
          <a id="mobileMenu" href="#menu" title="Jump to navigation">Menu</a>
        </div>
        <div id="logoRow" class="row clearfix">
        	<a href="<?php echo $this->baseurl ?>/" title="<?php echo htmlspecialchars($app->getCfg('sitename'));?>">
                <header id="logo"><?php echo htmlspecialchars($app->getCfg('sitename'));?></header>
            </a>
        </div>
        <div class="container">
        	<?php if($this->countModules('banner')) : ?>
            <header role="banner" id="banner">
                <jdoc:include type="modules" name="banner" style="kdhx" headerLevel="4"/>
            </header>
            <?php endif; ?>
            <?php if ($aboveModules > 0) : ?>
        	<div id="aboveRow" class="row clearfix">
        		<?php if($this->countModules('above1')) : ?>
                <div id="above1">
                        <jdoc:include type="modules" name="above1" style="kdhx" headerLevel="4"/>
                </div>
                <?php endif; ?>
                <?php if($this->countModules('above2')) : ?>
                <div id="above2">
                        <jdoc:include type="modules" name="above2" style="kdhx" headerLevel="4"/>
                </div>
                <?php endif; ?>
                <?php if($this->countModules('above3')) : ?>
                <div id="above3">
                        <jdoc:include type="modules" name="above3" style="kdhx" headerLevel="4"/>
                </div>
                <?php endif; ?>
                <?php if($this->countModules('above4')) : ?>
                <div id="above4">
                        <jdoc:include type="modules" name="above4" style="kdhx" headerLevel="4"/>
                </div>
                <?php endif; ?>
                </div>
        	<?php endif; ?>
            <?php if($this->countModules('breadcrumbs')) : ?>
            <div id="breadcrumbRow" class="row clearfix">
                <nav id="breadcrumbs" role="navigation">
                    <jdoc:include type="modules" name="breadcrumbs" style="kdhx" headerLevel="4"/>
                </nav>
            </div>
            <?php endif; ?>
            <?php if($siteHome == 'sub') : ?>
            <div id="mainRow" class="row clearfix">
                <?php if($this->countModules('left') or $this->countModules('search')) : ?>
                <div id="main" role="main" class="mainLeft last clearfix">
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                </div>
                <aside id="sidebar" class="clearfix" role="complementary">
        		  <?php if($this->countModules('left')) : ?>
                  <div id="left" class="clearfix">
                          <jdoc:include type="modules" name="left" style="kdhx"/>
                  </div>
                  <?php endif; ?>
                  <?php if($this->countModules('search')) : ?>
                    <div id="search" role="search">
                          <jdoc:include type="modules" name="search" style="kdhx" />
                    </div>
                  <?php endif; ?>
                </aside>
                <?php else : ?>
                <div id="main" role="main" class="main last clearfix">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <nav id="menu" role="navigation" class="row clearfix"> <!-- main nav is here for usability and SEO reasons -->
            	<jdoc:include type="modules" name="menu" />
            </nav>
            <?php if ($bottomModules > 0) : ?>
            <div id="bottomRow" class="row clearfix">
                <?php if($this->countModules('bottom1')) : ?>
                <div id="bottom1">
                      <jdoc:include type="modules" name="bottom1" style="kdhx" />
                </div>
                <?php endif; ?>
                <?php if($this->countModules('bottom2')) : ?>
                <div id="bottom2">
                      <jdoc:include type="modules" name="bottom2" style="kdhx" />
                </div>
                <?php endif; ?>
                <?php if($this->countModules('bottom3')) : ?>
                <div id="bottom3">
                      <jdoc:include type="modules" name="bottom3" style="kdhx" />
                </div>
                <?php endif; ?>
                <?php if($this->countModules('bottom4')) : ?>
                <div id="bottom4">
                      <jdoc:include type="modules" name="bottom4" style="kdhx" />
                </div>
                <?php endif; ?>
                    <?php if($this->countModules('bottom5')) : ?>
                <div id="bottom5">
                      <jdoc:include type="modules" name="bottom5" style="kdhx" />
                </div>
                <?php endif; ?>
                <?php if($this->countModules('bottom6')) : ?>
                <div id="bottom6">
                      <jdoc:include type="modules" name="bottom6" style="kdhx" />
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if ($footerModules > 0) : ?>
            <footer role="contentinfo" class="row clearfix">
                <?php if($this->countModules('footer1')) : ?>
                <div id="footer1">
                    <jdoc:include type="modules" name="footer1" style="kdhx" headerLevel="4" />
                </div>
                <?php endif; ?>
                <?php if($this->countModules('footer2')) : ?>
                <div id="footer2">
                    <jdoc:include type="modules" name="footer2" style="kdhx" headerLevel="4" />
                </div>
                <?php endif; ?>
                <?php if($this->countModules('footer3')) : ?>
                <div id="footer3">
                    <jdoc:include type="modules" name="footer3" style="kdhx" headerLevel="4" />
                </div>
                <?php endif; ?>
                <?php if($this->countModules('footer4')) : ?>
                <div id="footer4">
                    <jdoc:include type="modules" name="footer4" style="kdhx" headerLevel="4"/>
                </div>
                <?php endif; ?>
            </footer>
        	<?php endif; ?>
        </div>
        <footer id="creditRow" class="row clearfix">
            <div id="creditRight"></div>
        </footer>
    </div>
<jdoc:include type="modules" name="debug"/>
<!-- Custom template scripts. Place your plugin code and script calls in the following two file and enable custom script loading in the template settings -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scripts.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/plugins.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/helper.js"></script>
<!-- iOS scale bug fix -->
<script>
MBP.scaleFix();
</script>
<?php // TODO add Google Analytics script ?>
</body>
</html>
