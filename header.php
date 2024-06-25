<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body data-scroll-container>
    
<div>
<div>
<header>
    <h1>this is the header</h1>
</header>

<?php
    wp_nav_menu(
        array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
        )
    )
    ?>
</div>
