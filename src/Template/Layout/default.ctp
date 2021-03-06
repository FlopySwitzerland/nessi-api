<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Nessi';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <title>
            <?= $cakeDescription ?> - <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->fetch('meta') ?>

        <!-- Styles -->
        <?= $this->Html->css('materialize.min.css') ?>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Theme Styles -->
        <?= $this->Html->css('alpha.min.css') ?>
        <?= $this->Html->css('custom.css') ?>

        <?= $this->fetch('css') ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
    <div class="mn-content fixed-sidebar">
        <header class="mn-header navbar-fixed">
            <nav class="green darken-3">
                <div class="nav-wrapper row">
                    <section class="material-design-hamburger navigation-toggle">
                        <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                            <span class="material-design-hamburger__layer"></span>
                        </a>
                    </section>
                    <div class="header-title col s3">
                        <span class="chapter-title">Nessi</span>
                    </div>


                    <!-- <form class="left search col s6 hide-on-small-and-down">
                        <div class="input-field">
                            <input id="search" type="search" placeholder="Search" autocomplete="off">
                            <label for="search"><i class="material-icons search-icon">search</i></label>
                        </div>
                        <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                    </form>



                    <ul class="right col s9 m3 nav-right-menu">
                        <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                        <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>
                        <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                    </ul>-->

                    <?php //echo $this->element('aside/notifications-dropdown'); ?>
                </div>
            </nav>
        </header>

        <?php //echo $this->element('aside/chat-sidebar'); ?>
        <?php //echo $this->element('aside/chat-messages'); ?>
        <?= $this->element('aside/slide-out'); ?>
        <main class="mn-inner">
            <div class="row">
                <div class="col s12">
                    <div class="page-title"><?= $this->fetch('title'); ?></div>
                </div>
            </div>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </main>
    </div>
    <div class="left-sidebar-hover"></div>

    <script type="text/javascript">
        var baseUrl = '<?php echo $this->Url->build('/', true); ?>';
    </script>

    <!-- Javascripts -->
    <?= $this->Html->script('jquery/jquery-2.2.0.min.js') ?>
    <?= $this->Html->script('materialize.min.js') ?>
    <?= $this->Html->script('material-preloader/materialPreloader.min.js') ?>
    <?= $this->Html->script('jquery/jquery-blockui/jquery.blockui.js') ?>
    <?= $this->Html->script('alpha.min.js') ?>
    <?= $this->Html->script('global.js') ?>
    <?= $this->fetch('script') ?>
    </body>
</html>
