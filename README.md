
This theme is aimed to integrate bootstrap in wordpress mainly for navigation menu.

You can directly paste theme in your wordpress/wp-contents/themes and use it.

installation
--------------------
Besides,you need to take several steps:

Step 1: 

Place **wp_bootstrap_navwalker.php** in your WordPress theme folder `/wp-content/your-theme/`

Open your WordPress themes **functions.php** file  `/wp-content/your-theme/functions.php` and add the following code:

```php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

Step 2:
paste the following code in your header.php 

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
		'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>


Notes:
--------------------
This wp_bootstrap_navwalker version is improved by SharkDeng in serveral aspects:
first,it trims superfluous style selectors.
second,it adds third layer style selector.


File description:
--------------------
style.css and index.php    is for theme install.
functions.php              is for load files including css,js,wp_bootstrap_navwalker.php
bs_dropdown_multi_example  is a htm example for 3 layers navmenu.If you don't get expected result,you can refer to this file to distinguish with correct bootstrap code with your source.It's a quick to find errors for bootstrat starters and free you from remembering bootstrap style selectors first.


Supports:
--------------------
For more information you can refer to 
1)original version: https://github.com/twittem/wp-bootstrap-navwalker
2)bootstrap website
or have any questions on this improved version you can contact me
Shark Deng
http;//www.9scoretrain.com htp://www.okokbay.com
muerbingsha@126.com



