<?php
/*
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    
<style>
.toolbar {
    background: #1f4a8a;
    #line-height: 38px;
    height: 38px;
    width: 100%;
    overflow: hidden;
   # font-size: 1.4em;
    
    
}

li {
    list-style: none;
    text-align: -webkit-match-parent;
    display: inline;
    color: #fff !important;
    float: right;
    margin: 0 0 0 0;
}

.rightmenu{
    color: #fff !important;
    font-size: 14px;
    vertical-align:middle;
}
.toolbar .rightmenu ul li a.myaccount { 
    background: url(http://cloudurl.com/templates/universe/images/icon-myaccount.png) left center no-repeat; 
    padding: 0 15px 0 15px; 
}
.toolbar .rightmenu ul li a.contact { 
    background: url(http://cloudurl.com/templates/universe/images/icon-contact.png) left center no-repeat; 
    padding: 0 15px 0 21px; 
}
.toolbar .rightmenu ul li a.register { 
    background: url(http://cloudurl.com/templates/universe/images/icon-register.png) left center no-repeat; 
    padding: 0 15px 0 17px; 
}
#menu-clientarea{
    margin: 8px 0 0 0;
}

nav li:hover, nav li.active { /* Hover background (gradients with single color fall-back) */
    background: #0f9d58 url("../images/menuhover.png") top left repeat-x !important; /* Background color (repeated image by default) */

}


.img-logo{
    max-width: 253px;
    float: left;
}
.logo{
    float: left;
    z-index: 10000;
}

nav li:hover, nav li.active { /* Hover background (gradients with single color fall-back) */
    background: #0f9d58 top left repeat-x !important; /* Background color (repeated image by default) */

}
nav ul li a {
    padding: 0 10px !important;
}

.mainmenuul{
    
}
.mainmenu{
    color: #000;
    padding: 12px 10px !important;
}   

.mainmenu:hover, .mainmenu.active{
    background: #0f9d58; /* green */
    color: #FFF;
    transition: all 0.4s ease-in-out 0s;
    -webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
    
}

header#masthead.site-header{
    height: 160px;
}

</style>
    
    
    
</head>

<body <?php body_class(); ?>>


<!-- tool bar -->
<div class="toolbar">
    <div class="toolbarinner">
		<div class="rightmenu">
			<ul id="menu-clientarea">
				<li><a href="http://cloudurl.com/clientarea.php" class="rightmenu myaccount">Client Area</a></li>
				<li><a href="http://cloudurl.com/register.php" class="rightmenu register">Register</a></li>			        
				<li><a href="http://cloudurl.com/contact.php" class="rightmenu contact">(866)560-9519 </a></li>          	
		    </ul>
        </div><!-- .rightmenu -->
	</div><!-- .toolbarinner -->
</div><!-- .toolbar -->

	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<ul class="mainmenuul">
                <li><a class="mainmenu" href="http://cloudurl.com/portal.php">Help</a></li>
                <li><a class="mainmenu" href="http://cloudurl.com/affiliate-program.php">Promote CloudURL</a></li>
                <li><a class="mainmenu" href="http://cloudurl.com/domainchecker.php">Domains</a></li>
                <li><a class="mainmenu" href="http://cloudurl.com/cart.php?a=add&amp;pid=4">WordPress Hosting</a></li>
                <li><a class="mainmenu" href="http://cloudurl.com/web-hosting.php">Web Hosting</a></li>
            </ul>
            <a class="home-link" href="http://www.cloudurl.com" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="http://cloudurl.com/templates/universe/images/logo.png" class="img-respond img-logo" alt="Cloud URL logo">
			</a>
            

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
                   
                    
                    
                    
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
                    
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
