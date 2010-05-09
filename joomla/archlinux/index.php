<?php
/**
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined('_JEXEC') or die('Restricted access');
?>

<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/template.css" type="text/css" />
<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/favicon.ico" />

<!--[if IE 6]>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/template_ie6.css" type="text/css" />
<![endif]-->

</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                <a href="<?php echo $this->baseurl ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/logo.png" alt="logo"/></a>
            </div>
        </div>
        <div id="topmenu">
            <jdoc:include type="modules" name="user3" />
        </div>
        <div id="topmenu_nav">
        </div>

        <?php if($this->countModules('user4')) : ?>
            <div id="search">
                <jdoc:include type="modules" name="user4" style="xhtml" />
            </div>
        <?php endif; ?>

        <div id="content">

                <?php if(!($this->countModules('right'))&& !($this->countModules('user2'))) : ?>
                <div id="left_full">
                <?php else: ?>
                <div id="left">
                <?php endif; ?>

                <?php if($this->countModules('user1')) : ?>
                    <div class="box">
                        <jdoc:include type="modules" name="user1" style="xhtml" />
                    </div>
                <?php endif; ?>
                <br/>
                <div>
                    <jdoc:include type="component" />
                </div>
            </div>
            <div id="right">
                <?php if($this->countModules('user2')) : ?>
                    <div class="modulo">
                        <jdoc:include type="modules" name="user2"  style="xhtml" />
                    </div>
                <?php endif; ?>
                <div class="modulo1">
                    <jdoc:include type="modules" name="right" style="xhtml"/>
                </div>
            </div>
        </div>
        <div id="footer">
            <?php echo JText::_('Powered by') ?> <a href="http://www.joomla.org">Joomla!</a>.
            <?php echo JText::_('Valid') ?> <a href="http://validator.w3.org/check/referer">XHTML</a> <?php echo JText::_('and') ?> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>.
        </div>
    </div>
</body>

</html>
