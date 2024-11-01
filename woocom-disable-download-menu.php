<?php
/**
 * Plugin Name: WooCommerce disable download menu
 * Plugin URI: http://hemthapa.com?ref=woodisdowmenu
 * Description: This lightweight plugin allows WooCommerce store owner to quickly disable DOWNLOAD menu in My-Account page
 * Version: 1.001
 * Author: Hem Thapa
 * Author URI: https://hemthapa.com/
 */

function woocom_disable_download_menu($items){
    unset( $items['downloads'] );
    return $items;
}
add_filter('woocommerce_account_menu_items', 'woocom_disable_download_menu', 10, 1);

?>