<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="type:text/html;charset:<?php bloginfo('charset'); ?>" />
		<?php wp_head(); ?>
		
		
	<!-- Start bootstrap style navigation -->
	<nav class="navbar navbar-default" role="navigation">
	    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
			</div>

			<?php
				wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 3, //change_1 for triple layers navmenu
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'navbar',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker())
				);
			?>
		</div>
	</nav>
	<!--Supplement css for depth=3 -->
	<style>
	.dropdown-submenu{
		position:relative;
	}

	.dropdown-submenu > .dropdown-menu{
		top:0;
		left:100%;
		margin-top:-6px;
		margin-left:-1px;
		-webkit-border-radius:0 6px 6px 6px;
		-moz-border-radius:0 6px 6px 6px;
		border-radius:0 6px 6px 6px;
	}

	.dropdown-submenu:hover > .dropdown-menu{
		display:block;
	}


	.dropdown-submenu > a:after{
		display:block;
		content:" ";
		float:right;
		width:0;
		height:0;
		border-color:transparent;
		border-style:solid;
		border-width:5px 0 5px 5px;
		border-left-color:#cccccc;
		margin-top:5px;
		margin-right:-10px;
	}
	</style>
	<!-- End bootstrap style navigation -->
	
	</head>
	<body>
	</body>
</html>