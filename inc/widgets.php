<?php

// the widgets file: on y liste les divers widgets du thèmes

register_sidebar( array(
    'id'          => 'left-sidebar',
    'name'        => 'Sidebar Gauche',
    'description' => 'C est la sidebar qui s affiche à gauche',
) );

register_sidebar( array(
    'id'          => 'sub-footer',
    'name'        => 'Sub Footer',
    'description' => 'Sub Footer: affiche un jumbotron avec un background fix',
) );

register_sidebar( array(
    'id'          => 'footer',
    'name'        => 'Footer',
    'description' => 'Footer: flex',
) );
