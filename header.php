<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <!-- Links to our Style.css file -->
	<link rel="stylesheet" type="text/css" href="
        <?php bloginfo('stylesheet_url'); ?>
    " />
</head>
<body>
    <div class="container"> <!-- Begin Header Div -->
        <header class="row">
            <div clas="twelve columns">
                <h1><?php bloginfo('name'); ?></h1>
                <h2><?php bloginfo('description'); ?></h2>
                <hr />
            </div>
        </header>