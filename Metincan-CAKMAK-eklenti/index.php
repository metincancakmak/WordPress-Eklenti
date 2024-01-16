<?php
/*
Plugin Name: Metincan Çakmak
Description: Bu bir deneme eklentidir.
Version: 1.0
Author: Metincan ÇAKMAK
*/

// Admin menüsüne bağlantı eklemek için işlev
function custom_admin_menu_page() {
    add_menu_page(
        'Metincan Çakmak', // Menü başlığı
        'Metincan Çakmak', // Menü adı
        'manage_options', // Kullanıcı yetkisi (manage_options, edit_posts, edit_pages, vs.)
        'custom-menu-slug', // Menü sayfasının slug'ı
        'custom_menu_page_content', // Menü sayfasının içeriğini gösteren işlev
        'dashicons-admin-generic', // Menü simgesi
        6 // Menü sırası
    );
}

// Menü sayfasının içeriği
function custom_menu_page_content() {
    include('icerik.php');
}

// Admin menüsü oluşturma işlemini başlat
add_action('admin_menu', 'custom_admin_menu_page');