/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(".products-item-img img").hover(function() {
    var dataAltSrc = $(this).attr("src");
    $(this).attr("src", $(this).attr("data-alt-src"));
    $(this).attr("data-alt-src", dataAltSrc);
});