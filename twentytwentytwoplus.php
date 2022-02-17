<?php

/**
 * Plugin Name: TwentyTwentyTwoPlus
 * Author: The Resasadr dev team
 * Description: Add twentytwentytwoplus css to theme
 * Version: 0.0.2
 * Requires at least: 5.8
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

const STYLE_SOURCE = "https://cdn.cleveraj.net/twentytwentytwoplus/style.css";

function add_css(): void
{
    wp_enqueue_style('tttpStyle', STYLE_SOURCE);
}
add_action('wp_enqueue_scripts', 'add_css');
