<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body >
    
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div id="branding">
                <a href="http://planty.local/">
                    <img src="http://planty.local/wp-content/uploads/2023/05/logo-for-header-planty.png" alt="Logo Planty">
                </a>
            </div>
            <nav id="menu" >
                <?php wp_nav_menu( ); ?>
                <a href="http://planty.local/" class="commandbutton">
                        Commander                   
                </a>            
            </nav>
            
        </header>


        <div id="container">
            <main id="content" role="main">