<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php 
        if(is_home() || is_front_page()){
            bloginfo('name'); 
        }elseif(is_single()) {

        }elseif(is_page()){

        }
    ?></title>
    <meta name="Description" content="<?php bloginfo("description")?>">
    <meta name="keywords" content="advocacia, advogado, processos"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="TopFaixa">
        <div class="Logomarca">
            <?php the_custom_logo(); ?>
        </div>
    </div>
    
    <div class="MidFaixaVerde">
        <div class="MidFaixaAmarelo"></div>
    </div>
    
    
    