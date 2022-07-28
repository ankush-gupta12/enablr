<!doctype html>
<!--[if IE 9]>
<html class="ie9 no-js supports-no-cookies" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js supports-no-cookies" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#141414">
<link rel="shortcut icon" href="favicon.png" type="image/png">
<title>Shella HTML theme :: Fashion HTML theme demo&ndash; shella-demo</title>
<meta name="description" content="Checkout fashion HTML theme.">
<link rel="stylesheet" href="{{ asset('/public/front') }}/styles/start-style.css">
<script>
var Loader = {
settings: {
scripts: {
carousel_articles: {
postload: true
},
carousel_products: {
postload: true
},
carousel_brands: {
postload: true
}
},
styles: {
theme: {
loaded_class: 'css-theme-loaded'
},
theme_05: {
loaded_class: 'css-theme-loaded'
},
theme_06: {
loaded_class: 'css-theme-loaded'
},
theme_07: {
loaded_class: 'css-theme-loaded'
},
theme_08: {
loaded_class: 'css-theme-loaded'
},
theme_10: {
loaded_class: 'css-theme-loaded'
},
theme_11: {
loaded_class: 'css-theme-loaded'
},
theme_12: {
loaded_class: 'css-theme-loaded'
},
theme_14: {
loaded_class: 'css-theme-loaded'
},
theme_15: {
loaded_class: 'css-theme-loaded'
},
text_font: {
loaded_class: 'text-font-loaded'
}
}
},
main: {
scripts: ['vendor', 'theme'],
styles: []
},
includes: {
scripts: {
//plugins
plugin_popper: '{{ asset("/public/front") }}/scripts/plugin.popper.min.js',
plugin_tippy: '{{ asset("/public/front") }}/scripts/plugin.tippy.all.min.js',
plugin_fotorama: '{{ asset("/public/front") }}/scripts/plugin.fotorama.min.js',
plugin_instafeed: '{{ asset("/public/front") }}/scripts/plugin.instafeed.min.js',
plugin_ion_range_slider: '{{ asset("/public/front") }}/scripts/plugin.ion-range-slider.min.js',
plugin_masonry: '{{ asset("/public/front") }}/scripts/plugin.masonry.min.js',
plugin_revolution_slider: '{{ asset("/public/front") }}/scripts/plugin.revolution-slider.min.js',
plugin_sticky_sidebar: '{{ asset("/public/front") }}/scripts/plugin.sticky-sidebar.min.js',
//global
vendor: '{{ asset("/public/front") }}/scripts/vendor.min.js',
theme: '{{ asset("/public/front") }}/scripts/theme.min.js',
//modules
tooltip: '{{ asset("/public/front") }}/scripts/module.tooltip.min.js',
buttons_blocks_visibility: '{{ asset("/public/front") }}/scripts/module.buttons-blocks-visibility.min.js',
collections: '{{ asset("/public/public/front") }}/scripts/module.collections.min.js',
dynamic_checkout: '{{ asset("/public/front") }}/scripts/module.dynamic-checkout.min.js',
masonry: '{{ asset("/public/front") }}/scripts/module.masonry.min.js',
notifications: '{{ asset("/public/front") }}/scripts/module.notifications.min.js',
parallax: '{{ asset("/public/front") }}/scripts/module.parallax.min.js',
popup_subscription: '{{ asset("/public/front") }}/scripts/module.popup-subscription.min.js',
product_footbar: '{{ asset("/public/front") }}/scripts/module.product-footbar.min.js',
products_view: '{{ asset("/public/front") }}/scripts/module.products-view.min.js',
range_of_price: '{{ asset("/public/front") }}/scripts/module.range-of-price.min.js',
shipping_rates_calculation: '{{ asset("/public/front") }}/scripts/module.shipping-rates-calculation.min.js',
sticky_header: '{{ asset("/public/front") }}/scripts/module.sticky-header.min.js',
sticky_sidebar: '{{ asset("/public/front") }}/scripts/module.sticky-sidebar.min.js',
tabs: '{{ asset("/public/front") }}/scripts/module.tabs.min.js',
trigger: '{{ asset("/public/front") }}/scripts/module.trigger.min.js',
presentation: '{{ asset("/public/front") }}/scripts/module.presentation.min.js',
//sections
header: '{{ asset("/public/front") }}/scripts/section.header.min.js',
article_body: '{{ asset("/public/front") }}/scripts/section.article-body.min.js',
blog_body: '{{ asset("/public/front") }}/scripts/section.blog-body.min.js',
blog_sidebar: '{{ asset("/public/front") }}/scripts/section.blog-sidebar.min.js',
carousel_articles: '{{ asset("/public/front") }}/scripts/section.carousel-articles.min.js',
carousel_brands: '{{ asset("/public/front") }}/scripts/section.carousel-brands.min.js',
carousel_products: '{{ asset("/public/front") }}/scripts/section.carousel-products.min.js',
collection_body: '{{ asset("/public/front") }}/scripts/section.collection-body.min.js',
collection_head: '{{ asset("/public/front") }}/scripts/section.collection-head.min.js',
collection_sidebar: '{{ asset("/public/front") }}/scripts/section.collection-sidebar.min.js',
gallery: '{{ asset("/public/front") }}/scripts/section.gallery.min.js',
home_builder: '{{ asset("/public/front") }}/scripts/section.home-builder.min.js',
list_collections: '{{ asset("/public/front") }}/scripts/section.list-collections.min.js',
lookbook: '{{ asset("/public/front") }}/scripts/section.lookbook.min.js',
password_page_content: '{{ asset("/public/front") }}/scripts/section.password-page-content.min.js',
product: '{{ asset("/public/front") }}/scripts/section.product.min.js',
slider_revolution: '{{ asset("/public/front") }}/scripts/section.slider-revolution.min.js',
sorting_collections: '{{ asset("/public/front") }}/scripts/section.sorting-collections.min.js',
footbar: '{{ asset("/public/front") }}/scripts/section.footbar.min.js',
footer: '{{ asset("/public/front") }}/scripts/section.footer.min.js'
},
styles: {
//plugins
plugin_tippy: '{{ asset("/public/front") }}/styles/plugin.tippy.min.css',
plugin_fotorama: '{{ asset("/public/front") }}/styles/plugin.fotorama.min.css',
plugin_ion_range_slider: '{{ asset("/public/front") }}/styles/plugin.ion-range-slider.min.css',
plugin_revolution: '{{ asset("/public/front") }}/styles/plugin.revolution.min.css',
plugin_slick: '{{ asset("/public/front") }}/styles/plugin.slick.min.css',
//font
text_font: 'https://fonts.googleapis.com/css?family=Archivo',
//global
theme: '{{ asset("/public/front") }}/styles/theme.min.css',
theme_05: '{{ asset("/public/front") }}/styles/theme-05.min.css',
theme_06: '{{ asset("/public/front") }}/styles/theme-06.min.css',
theme_07: '{{ asset("/public/front") }}/styles/theme-07.min.css',
theme_08: '{{ asset("/public/front") }}/styles/theme-08.min.css',
theme_10: '{{ asset("/public/front") }}/styles/theme-10.min.css',
theme_11: '{{ asset("/public/front") }}/styles/theme-11.min.css',
theme_12: '{{ asset("/public/front") }}/styles/theme-12.min.css',
theme_14: '{{ asset("/public/front") }}/styles/theme-14.min.css',
theme_15: '{{ asset("/public/front") }}/styles/theme-15.min.css'
}
},
deps: {
scripts: {
//plugins
plugin_tippy: ['plugin_popper'],
//global
theme: ['vendor', 'plugin_fotorama'],
//modules
tooltip: ['plugin_tippy'],
collections: ['products_view'],
masonry: ['plugin_masonry'],
product_footbar: ['trigger'],
range_of_price: ['plugin_ion_range_slider', 'collections'],
sticky_sidebar: ['plugin_sticky_sidebar', 'sticky_header'],
tabs: ['plugin_sticky_sidebar', 'sticky_sidebar', 'sticky_header'],
//sections
header: ['sticky_header'],
blog_body: ['masonry'],
blog_sidebar: ['sticky_sidebar'],
collection_sidebar: ['range_of_price'],
gallery: ['plugin_fotorama', 'masonry'],
home_builder: ['plugin_instafeed', 'plugin_revolution_slider', 'parallax'],
list_collections: ['masonry'],
product: ['sticky_sidebar', 'tabs'],
article_body: ['plugin_slick'],
footbar: ['notifications', 'trigger', 'product_footbar']
},
styles: {
//global
theme: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme2: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme3: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme4: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme5: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme6: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme7: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme8: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme9: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme10: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme11: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme12: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme13: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme14: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick'],
theme15: ['plugin_tippy', 'plugin_fotorama', 'plugin_ion_range_slider', 'plugin_revolution', 'plugin_slick']
}
},
callback: {
scripts: {},
styles: {}
},
queue: {
scripts: [],
styles: []
},
initials: {
scripts: {},
styles: {}
},
loaded: {
scripts: {},
styles: {}
},
postload: {
scripts: {},
styles: {}
},
postload_offset: 400,
require: function (obj) {
var namespace;

switch (obj.type) {
case 'style':
{
namespace = 'styles';
break;
}
case 'script':
{
namespace = 'scripts';
break;
}
}

if (this.settings[namespace][obj.name] && this.settings[namespace][obj.name].postload) {
this.postload[namespace][obj.name] = true;
} else {
this.queue[namespace].push(obj.name);
}

this.initials[namespace][obj.name] = true;
},
load: function () {
var _ = this,
namespace,
i;

for (namespace in this.main) {
for (i = this.main[namespace].length - 1; i >= 0; i--) {
this.initials[namespace][this.main[namespace][i]] = true;
this.queue[namespace].unshift(this.main[namespace][i]);
}
}

function load_deps(namespace, name, j, callback) {
if (j < _.deps[namespace][name].length) {
if (_.initials[namespace][_.deps[namespace][name][j]]) {
delete _.initials[namespace][_.deps[namespace][name][j]];

_.loadTag(namespace, _.deps[namespace][name][j], function () {
j++;
load_deps(namespace, name, j, callback);
});
} else {
j++;
load_deps(namespace, name, j, callback);
}
} else {
if (callback) {
callback();
}
}
};

function iteration(namespace, i, callback) {
var name = _.queue[namespace][i];

if (i < _.queue[namespace].length && !_.initials[namespace][name]) {
i++;
iteration(namespace, i, callback);

return;
}

function load_deps_callback() {
delete _.initials[namespace][name];

_.loadTag(namespace, name, function () {
i++;
iteration(namespace, i, callback);
});
};

if (i < _.queue[namespace].length) {
if (_.checkDeps(namespace, name)) {
load_deps_callback();
} else {
load_deps(namespace, name, 0, load_deps_callback);
}
} else if (callback) {
callback();
}
};

iteration('styles', 0, function () {
iteration('scripts', 0);
});

function onPostload(namespace, name, elems, j) {
for (namespace in _.postload) {
for (name in _.postload[namespace]) {
elems = document.querySelectorAll('[data-postload="' + name + '"]');

for (j = 0; j < elems.length; j++) {
if (elems[j].getBoundingClientRect().top < window.innerHeight + _.postload_offset) {
_.queue[namespace].push(name);
delete _.postload[namespace][name];
continue;
}
}
}
}

iteration('styles', 0, function () {
iteration('scripts', 0);
});
};

window.addEventListener('load', function () {
onPostload();

window.addEventListener('scroll', onPostload);
});
},
checkDeps: function (namespace, name) {
var deps = this.deps[namespace][name],
clear_deps = true,
i;

if (deps) {
for (i = 0; i < deps.length; i++) {
if (!this.loaded[namespace][deps[i]] && this.initials[namespace][deps[i]] !== undefined) {
clear_deps = false;
break;
}
}
}

return clear_deps;
},
loadTag: function (namespace, name, callback) {
var _ = this,
tag,
onload;

if(document.querySelectorAll('[data-loader-name="' + namespace + '_' + name + '"]').length) {
/*console.log('double loading');*/
return;
}

onload = function () {
_.loaded[namespace][name] = true;

if (_.settings[namespace][name]) {
if (_.settings[namespace][name].loaded_class) {
document.getElementsByTagName('html')[0].classList.add(_.settings[namespace][name].loaded_class);
}
}

if (callback) {
if (_.callback[namespace][name]) {
_.callback[namespace][name](_);
}

callback();
}

//console.debug('loaded:', namespace, name);
};

switch (namespace) {
case 'styles':
{
tag = this.buildStyle(name, onload);
break;
}
case 'scripts':
{
tag = this.buildScript(name, onload);
break;
}
}

tag.setAttribute('data-loader-name', namespace + '_' + name);

document.head.insertBefore(tag, document.head.childNodes[document.head.childNodes.length - 1].nextSibling);
},
buildScript: function (name, onload) {
var tag = document.createElement('script');

tag.onload = onload;

tag.async = true;
tag.src = this.includes.scripts[name];

return tag;
},
buildStyle: function (name, onload) {
var tag = document.createElement('link');

tag.onload = onload;

tag.rel = 'stylesheet';
tag.href = this.includes.styles[name];

return tag;
}
};

window.page = {
default: {}
};
</script>
</head>
<body id="index" class="template-index theme-css-animate" data-currency-multiple="true">
<div id="theme-section-header" class="theme-section">
<div data-section-id="header" data-section-type="header"
>
<header id="header" class="header position-lg-relative js-header-sticky" data-js-sticky="desktop_and_mobile"
data-js-desktop-sticky-sidebar="true">
<div class="d-none js-header-tape" data-js-show-once="true" data-js-delay="0" data-js-cookies-life="1">
<div class="header__tape d-flex py-5">
<div class="container d-flex flex-center">
<div class="position-relative d-flex align-items-start align-items-lg-center px-35">
<p class="m-0 px-30 px-lg-0 text-center">FINAL CLEARANCE: Take 20% off ‘Sale Must-Haves'</p>
<i class="header__tape-close position-absolute right-0 cursor-pointer"
data-js-action="close">
<svg aria-hidden="true" focusable="false" role="presentation"
 class="icon icon-theme-190" viewBox="0 0 24 24">
<path d="M7.718 15.966a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449l3.32-3.301-3.32-3.301a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.131.176.28.176.449a.65.65 0 0 1-.176.449l-3.32 3.301 3.32 3.301c.117.131.176.28.176.449a.65.65 0 0 1-.176.449.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127l-3.301-3.32-3.301 3.32a.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .813.813 0 0 1-.215-.127z"/>
</svg>
</i>
</div>
</div>
</div>
<div class="header__border border-bottom d-none d-lg-block"></div>
</div>
<div class="header__content" data-js-mobile-sticky>
<div class="header__line-top position-relative d-flex px-10 px-lg-0 py-lg-2">
<div class="container d-flex align-items-center">
<span class="header__btn-menu d-flex align-items-center d-lg-none mr-20 cursor-pointer js-popup-button"
data-js-popup-button="navigation">
<i><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-191"
viewBox="0 0 24 24"><path
d="M3.438 5.479h17.375v1.25H3.438zM3.438 11.104h17.375v1.25H3.438zM3.438 16.729h17.375v1.25H3.438z"/></svg></i>
</span>
<div class="header__logo header__logo--sticky-hidden d-flex align-items-center w-100"
style="max-width: 64px;">
<h1 class="logo h6 w-100 m-0 text-hide" itemscope itemtype="http://schema.org/Organization"
data-js-sticky-replace-element="logo"><a href="#" itemprop="url"
                                     class="d-block text-hide">
<svg width="64" height="27" viewbox="0 0 64 27" fill="none"
 xmlns="http://www.w3.org/2000/svg">
<path d="M11.366 15.5817C11.0096 15.1577 10.6198 14.7294 10.1966 14.2964C9.773 13.8638 9.37369 13.4354 8.99834 13.0111C8.623 12.5871 8.29101 12.1587 8.00221 11.7257C7.7135 11.2932 7.53026 10.8604 7.4536 10.4275C7.39579 10.1334 7.48242 9.75692 7.7135 9.29805C7.94449 8.83963 8.26202 8.35028 8.66636 7.83101C9.07061 7.31165 9.53259 6.78836 10.0522 6.26003C10.572 5.73226 11.0917 5.23888 11.6114 4.78001C12.1311 4.32159 12.6265 3.92319 13.0983 3.58565C13.5698 3.2481 14.1235 3.01889 14.4317 2.89756C13.5844 4.36908 12.6697 5.71075 12.0156 6.92213C11.7269 7.4414 11.4526 7.96076 11.1927 8.48003C10.9328 8.9993 10.7019 9.47565 10.4997 9.90817C10.2976 10.3411 10.1338 10.7221 10.0089 11.0507C9.88351 11.3797 9.83072 11.6049 9.85012 11.7257C9.88845 12.0028 10.0617 12.284 10.3699 12.5697C10.6775 12.8552 11.024 13.1194 11.4094 13.3616C11.8519 13.6561 12.3428 13.9419 12.8819 14.2186C12.9779 13.7167 13.1656 13.1239 13.4449 12.4399C13.7238 11.7562 14.0463 11.0378 14.4122 10.2847C14.7776 9.53165 15.1628 8.77466 15.5671 8.01283C15.9713 7.25126 16.3418 6.55467 16.6788 5.92258C17.0153 5.29086 17.2946 4.7456 17.5161 4.28682C17.7371 3.8284 18.012 3.52086 18.012 3.36504C18.012 3.22669 17.901 2.95411 17.68 2.5472C17.4585 2.14066 17.1554 1.73824 16.7704 1.33985C16.3852 0.941819 15.7737 0.599789 15.2639 0.314215C14.7537 0.028549 14.2101 -0.0623114 13.6326 0.0415421C13.2284 0.110991 12.6797 0.336083 11.9868 0.716636C11.2938 1.09755 10.5526 1.57793 9.76348 2.15768C8.97392 2.7378 8.18993 3.39111 7.41024 4.11809C6.63064 4.84516 5.94719 5.57661 5.36025 6.31219C4.77286 7.04813 4.33028 7.77071 4.03205 8.4803C3.73337 9.19035 3.68058 9.82198 3.87324 10.3757C4.0465 10.895 4.29643 11.3754 4.62393 11.8168C4.95106 12.2582 5.31195 12.6697 5.70669 13.0502C6.10097 13.4311 6.51016 13.7948 6.93381 14.1408C7.357 14.4873 7.73737 14.8334 8.0743 15.1794C8.41094 15.526 8.69508 15.872 8.92607 16.2181C9.15715 16.5646 9.28202 16.9281 9.30142 17.3087C9.32035 17.6203 9.21936 18.0012 8.99825 18.4511C8.77678 18.9015 8.48303 19.3819 8.11766 19.8922C7.75174 20.403 7.34254 20.9138 6.89054 21.4242C6.43799 21.935 5.9954 22.3937 5.56234 22.8004C5.12917 23.2073 4.7295 23.5448 4.36403 23.813C3.9982 24.0816 3.71891 24.2244 3.52671 24.2413C3.39187 24.1376 3.36296 23.9168 3.44017 23.5793C3.51683 23.2418 3.66613 22.8481 3.8876 22.3979C4.10871 21.9479 4.38297 21.4591 4.71056 20.9307C5.03769 20.403 5.37919 19.8882 5.7356 19.3858C6.09155 18.884 6.44293 18.421 6.78945 17.9967C7.13598 17.5727 7.44354 17.2306 7.71341 16.971L4.5952 14.8156C4.20989 15.0233 3.83006 15.3349 3.45472 15.7505C3.07937 16.1659 2.72296 16.6293 2.38632 17.1397C2.0493 17.6505 1.73177 18.1783 1.43345 18.7236C1.13486 19.2688 0.874966 19.784 0.653858 20.2685C0.432384 20.7533 0.26406 21.1771 0.148611 21.5409C0.0331629 21.9044 -0.0152303 22.147 0.00416357 22.2678C0.0809157 22.9429 0.288027 23.5749 0.62495 24.1633C0.961507 24.7516 1.35625 25.2579 1.80871 25.6823C2.2608 26.1061 2.72772 26.4394 3.20909 26.6819C3.69 26.924 4.11365 27.028 4.47957 26.9936C4.74889 26.9761 5.12423 26.8548 5.60561 26.63C6.08652 26.4048 6.61619 26.1018 7.19371 25.7213C7.77113 25.3403 8.3631 24.8859 8.96943 24.3581C9.57577 23.8303 10.1338 23.246 10.6441 22.6055C11.1539 21.9652 11.5775 21.2728 11.9146 20.5283C12.2511 19.7842 12.4487 19.0138 12.5064 18.2174C12.5254 17.7674 12.4293 17.3216 12.2177 16.8802C12.0057 16.4386 11.722 16.0061 11.366 15.5817Z"
      fill="#141414"></path>
<path d="M63.1679 17.7373C63.1485 17.6683 63.0619 17.5945 62.908 17.5165C62.7537 17.4387 62.5905 17.3697 62.4172 17.3088C62.2439 17.2485 62.0802 17.1964 61.9264 17.153C61.7721 17.1101 61.6855 17.0881 61.6665 17.0881C61.6471 17.0881 61.5411 17.2224 61.349 17.4906C61.1563 17.7591 60.9109 18.1008 60.6127 18.5162C60.314 18.9317 59.9964 19.386 59.6598 19.8794C59.3228 20.3727 58.9957 20.8401 58.678 21.2814C58.3604 21.7229 58.0811 22.1039 57.8408 22.4239C57.5998 22.7445 57.441 22.9393 57.3644 23.0081C57.3256 23.043 57.3932 22.8392 57.5665 22.3979C57.7397 21.9564 57.9851 21.3898 58.3028 20.6972C58.6204 20.0051 58.9763 19.2301 59.3711 18.3733C59.7654 17.5165 60.1696 16.69 60.5838 15.8937C60.9974 15.0977 61.3871 14.3835 61.7531 13.7515C62.1184 13.1197 62.4266 12.6739 62.677 12.4142C62.7347 12.3622 62.5998 12.2628 62.2728 12.1155C61.9453 11.9687 61.5798 11.817 61.1756 11.6611C60.6748 11.4709 60.1167 11.2717 59.5009 11.0639C59.3466 11.1159 59.1255 11.3844 58.8368 11.8688C58.5481 12.3537 58.2205 12.9684 57.8552 13.7124C57.8935 13.3838 57.903 13.0938 57.884 12.8426C57.8646 12.5918 57.8069 12.4231 57.7107 12.3362C57.422 12.0595 56.9934 11.8299 56.4259 11.6481C55.8579 11.4664 55.3236 11.3756 54.8234 11.3756C54.3226 11.393 53.8272 11.6311 53.3364 12.0895C52.8456 12.5484 52.3641 13.1371 51.8927 13.8552C51.4209 14.5737 50.9832 15.3658 50.579 16.2311C50.418 16.576 50.2678 16.9154 50.1236 17.2519C50.0846 17.2944 50.0408 17.3451 49.9872 17.4126C49.8428 17.5943 49.6597 17.837 49.4386 18.1396C49.2171 18.4427 48.9667 18.7888 48.6879 19.1782C48.4087 19.5676 48.1248 19.9615 47.8361 20.3597C47.1622 21.3118 46.4114 22.3765 45.584 23.5534C45.276 23.4151 45.0643 23.1683 44.9488 22.8133C44.8334 22.4587 44.7945 22.0129 44.8334 21.4762C45.1604 21.0262 45.5885 20.4464 46.1182 19.7364C46.6474 19.0269 47.2249 18.2348 47.8506 17.3605C48.4759 16.4867 49.1255 15.5605 49.7996 14.5822C50.4731 13.6044 51.1133 12.6179 51.7197 11.6222C52.3261 10.6271 52.8746 9.64034 53.3654 8.66219C53.8563 7.68441 54.2461 6.77114 54.5349 5.92284C54.5926 5.73252 54.5926 5.48144 54.5349 5.16979C54.4771 4.85813 54.3516 4.55106 54.1595 4.24801C53.9669 3.94532 53.7119 3.68125 53.3944 3.45607C53.0768 3.23134 52.6965 3.1015 52.2539 3.06655C51.888 3.04953 51.4694 3.22686 50.998 3.5989C50.526 3.97131 50.0208 4.4817 49.4821 5.1309C48.943 5.78001 48.3943 6.53745 47.8363 7.40277C47.2778 8.26856 46.7292 9.18585 46.1906 10.1551C45.6515 11.1248 45.1411 12.1155 44.6603 13.1282C44.1789 14.1408 43.7458 15.1146 43.361 16.0494C43.2048 16.4282 43.0639 16.7935 42.9315 17.1511C42.8847 17.176 42.8034 17.2606 42.6827 17.4126C42.5382 17.5943 42.3551 17.837 42.1341 18.1396C41.9126 18.4427 41.6622 18.7888 41.3834 19.1782C41.1042 19.5676 40.8203 19.9615 40.5316 20.3597C39.8577 21.3118 39.1069 22.3765 38.2794 23.5534C37.9714 23.4151 37.7597 23.1683 37.6443 22.8133C37.5288 22.4587 37.49 22.0129 37.5288 21.4762C37.8559 21.0262 38.284 20.4464 38.8137 19.7364C39.3429 19.0269 39.9203 18.2348 40.546 17.3605C41.1714 16.4867 41.821 15.5605 42.495 14.5822C43.1686 13.6044 43.8088 12.6179 44.4151 11.6222C45.0215 10.6271 45.5701 9.64034 46.0609 8.66219C46.5517 7.68441 46.9415 6.77114 47.2303 5.92284C47.2881 5.73252 47.2881 5.48144 47.2303 5.16979C47.1725 4.85813 47.0471 4.55106 46.855 4.24801C46.6623 3.94532 46.4075 3.68125 46.0899 3.45607C45.7721 3.23134 45.392 3.1015 44.9494 3.06655C44.5834 3.04953 44.1648 3.22686 43.6934 3.5989C43.2215 3.97131 42.7162 4.4817 42.1776 5.1309C41.6384 5.78001 41.0898 6.53745 40.5318 7.40277C39.9733 8.26856 39.4247 9.18585 38.886 10.1551C38.347 11.1248 37.8366 12.1155 37.3558 13.1282C36.8744 14.1408 36.4412 15.1146 36.0565 16.0494C35.9609 16.2815 35.8697 16.5094 35.7831 16.7334C35.3906 17.3022 34.9672 17.8745 34.512 18.4512C34.0401 19.0484 33.5687 19.6242 33.0972 20.1779C32.6253 20.7322 32.1683 21.2514 31.7257 21.7358C31.2826 22.2207 30.8739 22.6361 30.4986 22.9821C30.1232 23.3286 29.8056 23.5884 29.5457 23.7611C29.2858 23.9344 29.1077 23.9947 29.0115 23.9428C28.819 23.6487 28.7179 23.2767 28.7084 22.8263C28.6985 22.3764 28.7517 21.8746 28.8672 21.3204C29.3292 21.0781 29.9111 20.7147 30.614 20.2298C31.3165 19.7454 32.0144 19.1957 32.7074 18.5812C33.4004 17.9669 34.0356 17.3217 34.613 16.6467C35.1904 15.9716 35.5948 15.3224 35.8257 14.6992C35.9601 14.3357 35.9363 13.9162 35.7535 13.4399C35.5703 12.964 35.3104 12.5271 34.9739 12.1287C34.6369 11.7307 34.2566 11.4105 33.8334 11.1679C33.4097 10.9257 33.025 10.8653 32.6785 10.9862C31.7734 11.2979 30.8883 11.8605 30.022 12.674C29.1558 13.4879 28.3907 14.4181 27.7266 15.4653C27.4066 15.9701 27.1198 16.4872 26.8646 17.0159C26.83 17.0429 26.7276 17.175 26.5573 17.4128C26.3647 17.6813 26.1192 18.0229 25.821 18.4384C25.5223 18.8538 25.2047 19.3082 24.8682 19.8016C24.5312 20.295 24.2042 20.7582 23.8864 21.1908C23.5689 21.6236 23.2895 22.0001 23.0492 22.3202C22.8083 22.6408 22.6494 22.8355 22.5728 22.9045C22.534 22.9394 22.6062 22.7357 22.7893 22.2943C22.972 21.853 23.2269 21.2776 23.5545 20.5676C23.8622 19.7716 24.1752 18.9967 24.4929 18.2438C24.8105 17.4907 25.1181 16.7986 25.4168 16.1665C25.715 15.5349 26.0038 14.9766 26.2831 14.4916C26.5618 14.0072 26.8267 13.6438 27.077 13.401C27.1537 13.3146 27.0671 13.1674 26.8171 12.9596C26.5667 12.7519 26.2541 12.5357 25.8787 12.3105C25.5034 12.0857 25.1181 11.891 24.7238 11.7263C24.329 11.5619 24.0164 11.4796 23.7854 11.4796C23.5928 11.4796 23.2513 11.7133 22.7604 12.1807C22.2695 12.6481 21.7209 13.2367 21.1146 13.9464C20.5083 14.6564 19.892 15.431 19.2667 16.2703C18.641 17.1102 18.1068 17.9106 17.6642 18.6721C17.9529 17.8243 18.2656 16.9544 18.6026 16.0627C18.9392 15.1713 19.329 14.2579 19.772 13.3232C20.2146 12.3885 20.715 11.4277 21.2735 10.4411C21.8315 9.45432 22.4668 8.42475 23.1791 7.35117C23.2369 7.29919 23.102 7.19534 22.775 7.03952C22.4474 6.88369 22.0819 6.72786 21.6777 6.57213C21.2735 6.41639 20.715 6.22607 20.0031 6.00098C18.9636 7.66273 18.0397 9.26848 17.2312 10.8175C16.4227 12.3669 15.7153 13.8904 15.109 15.3875C14.5027 16.8849 14.0019 18.3735 13.6075 19.8535C13.2128 21.3336 12.929 22.8354 12.7557 24.3584C12.7363 24.4624 12.8758 24.5967 13.1744 24.761C13.4726 24.9256 13.8048 25.0945 14.1706 25.2674C14.5938 25.4581 15.0751 25.6568 15.6142 25.8645L15.8453 24.9558C16.1724 24.3326 16.5671 23.5321 17.0291 22.554C17.491 21.5763 18.0203 20.5591 18.6172 19.5031C19.2136 18.4474 19.8682 17.4218 20.5806 16.4262C21.2925 15.4311 22.0721 14.5956 22.9193 13.9206C22.7844 14.0938 22.5917 14.3923 22.3419 14.8164C22.0915 15.2408 21.8222 15.7382 21.5335 16.3094C21.2448 16.8807 20.951 17.4998 20.6528 18.1659C20.3542 18.8325 20.0897 19.4817 19.8588 20.1134C19.6278 20.7454 19.4496 21.3338 19.3247 21.879C19.1994 22.4243 19.166 22.8703 19.2236 23.2163C19.2814 23.6317 19.4591 23.9912 19.7578 24.2938C20.0559 24.597 20.383 24.8521 20.7394 25.0599C21.0954 25.2676 21.4369 25.4192 21.7645 25.5142C22.0916 25.6096 22.3131 25.6485 22.4285 25.6311C22.5246 25.614 22.7461 25.4148 23.0926 25.0338C23.4391 24.6533 23.8334 24.173 24.2764 23.5928C24.7128 23.0211 25.173 22.4069 25.6564 21.7508C25.6583 21.8152 25.6585 21.8802 25.6624 21.9439C25.6813 22.3423 25.7441 22.7618 25.8501 23.2033C25.9556 23.6446 26.0955 24.056 26.2687 24.4367C26.442 24.8176 26.6535 25.1467 26.9039 25.4234C27.1539 25.7001 27.4426 25.8647 27.7702 25.9168C28.2321 26.0031 28.7181 25.9428 29.2284 25.7349C29.7382 25.5272 30.2628 25.2375 30.8019 24.8651C31.3406 24.4931 31.8747 24.0516 32.4044 23.541C32.9336 23.0305 33.4388 22.4982 33.9202 21.944C34.165 21.6679 34.4093 21.3811 34.6532 21.0873C34.6382 21.6521 34.6895 22.1897 34.8151 22.6971C34.9689 23.3201 35.2094 23.8613 35.5369 24.3198C35.864 24.7788 36.2682 25.1337 36.7495 25.3843C37.2304 25.6356 37.7601 25.7435 38.3376 25.7089C38.4721 25.7089 38.713 25.5187 39.0595 25.1377C39.4059 24.7571 39.8052 24.2809 40.2577 23.7097C40.7098 23.1384 41.1718 22.5241 41.6436 21.8661C41.7502 21.7174 41.8549 21.5714 41.9585 21.4267C41.9692 21.8677 42.0197 22.2924 42.1199 22.6971C42.2738 23.3201 42.5143 23.8613 42.8418 24.3198C43.1688 24.7788 43.573 25.1337 44.0544 25.3843C44.5353 25.6356 45.065 25.7435 45.6425 25.7089C45.777 25.7089 46.0179 25.5187 46.3644 25.1377C46.7108 24.7571 47.1101 24.2809 47.5626 23.7097C47.8806 23.3078 48.2037 22.8835 48.5315 22.439C48.531 22.4555 48.5298 22.4735 48.5298 22.4893C48.5109 23.1643 48.5731 23.7098 48.7175 24.1251C48.8619 24.5405 49.0351 24.8651 49.2372 25.0989C49.4393 25.3325 49.6414 25.4883 49.8436 25.5662C50.0457 25.6441 50.2045 25.6741 50.32 25.6571C50.4933 25.6401 50.7532 25.4928 51.0997 25.2156C51.4461 24.9389 51.826 24.5926 52.2402 24.177C52.6539 23.7616 53.0869 23.2987 53.5395 22.7878C53.9916 22.2775 54.4202 21.7797 54.8244 21.2948C54.6896 21.7453 54.5885 22.1477 54.5212 22.5023C54.4536 22.8572 54.4297 23.1299 54.4491 23.3201C54.4874 23.7185 54.6318 24.0731 54.8821 24.3848C55.1322 24.6963 55.4114 24.952 55.7195 25.1507C56.0272 25.3498 56.3303 25.4972 56.6291 25.5921C56.9272 25.6869 57.1343 25.726 57.2497 25.7089C57.3459 25.6914 57.5624 25.4927 57.8994 25.1118C58.236 24.7311 58.6259 24.2507 59.0689 23.6706C59.5115 23.091 59.9784 22.4678 60.4692 21.8011C60.96 21.135 61.4076 20.5074 61.8118 19.9186C62.216 19.3305 62.5481 18.8326 62.808 18.4257C63.0668 18.0189 63.1868 17.7892 63.1679 17.7373ZM47.3164 14.167C47.9516 12.8603 48.6058 11.6399 49.2798 10.5059C49.9534 9.37242 50.6031 8.3897 51.2288 7.55887C51.854 6.72795 52.3882 6.19158 52.8312 5.94901C52.7346 6.26066 52.5326 6.72795 52.2248 7.35117C51.9168 7.97429 51.5509 8.67985 51.1277 9.46731C50.704 10.2552 50.2371 11.0772 49.7273 11.934C49.217 12.7908 48.7118 13.6133 48.2115 14.4007C47.7108 15.1886 47.2443 15.8938 46.8111 16.5169C46.378 17.1401 46.0171 17.6075 45.7283 17.9192C46.1515 16.7247 46.6812 15.4742 47.3164 14.167ZM40.0116 14.167C40.6468 12.8603 41.3009 11.6399 41.975 10.5059C42.6486 9.37242 43.2982 8.3897 43.924 7.55887C44.5492 6.72795 45.0834 6.19158 45.5264 5.94901C45.4298 6.26066 45.2277 6.72795 44.92 7.35117C44.612 7.97429 44.2461 8.67985 43.8229 9.46731C43.3992 10.2552 42.9323 11.0772 42.4225 11.934C41.9122 12.7908 41.407 13.6133 40.9067 14.4007C40.406 15.1886 39.9394 15.8938 39.5063 16.5169C39.0732 17.1401 38.7123 17.6075 38.4235 17.9192C38.8467 16.7247 39.3764 15.4742 40.0116 14.167ZM30.1514 17.6594C30.5652 16.8115 30.9982 16.0411 31.4507 15.3485C31.9027 14.6563 32.3503 14.085 32.7934 13.6346C33.2359 13.1847 33.6208 12.951 33.9483 12.9335C33.9289 13.4703 33.7507 14.0675 33.4142 14.7251C33.0771 15.3833 32.673 16.041 32.2016 16.6986C31.7297 17.3566 31.2199 17.9883 30.6713 18.5941C30.1227 19.2002 29.6174 19.7194 29.1554 20.152C29.4053 19.3386 29.7374 18.5078 30.1514 17.6594ZM56.96 14.6474C56.9023 14.9764 56.8202 15.3356 56.7147 15.7251C56.6087 16.1145 56.5076 16.4999 56.4115 16.8805L55.8051 18.4125C55.6896 18.5856 55.5164 18.8194 55.2854 19.1136C55.0543 19.4081 54.799 19.7327 54.5202 20.0872C54.241 20.4422 53.9572 20.8056 53.6685 21.1778C53.3798 21.5503 53.1005 21.8918 52.8312 22.2034C52.5614 22.5151 52.3259 22.7746 52.1237 22.9823C51.9216 23.1902 51.7818 23.3029 51.7051 23.3198C51.6086 23.3373 51.6424 23.0907 51.8062 22.5798C51.9695 22.0695 52.2055 21.4244 52.5136 20.6455C52.8213 19.8665 53.1822 19.027 53.5964 18.1269C54.0101 17.2269 54.4193 16.4046 54.8235 15.6601C55.2278 14.916 55.6125 14.3144 55.9784 13.8555C56.3439 13.3971 56.6326 13.2283 56.8447 13.3491C56.9601 13.4185 57.0225 13.5698 57.0324 13.8035C57.0417 14.0371 57.0178 14.3188 56.96 14.6474Z"
      fill="#141414"></path>
</svg>
shella-demo
</a></h1>
</div>
<div class="header__sidebar d-flex align-items-center ml-auto">
<a href="#"
class="header__btn-services position-relative d-flex align-items-center ml-25 ml-lg-15 js-popup-button"
data-js-popup-button="services"
data-js-tooltip
data-tippy-content="Client service"
data-tippy-placement="bottom"
data-tippy-distance="6">
<i>
<svg aria-hidden="true" focusable="false" role="presentation"
     class="icon icon-theme-172" viewBox="0 0 24 24">
    <path d="M12.139 5.929c-.742 0-1.426.205-2.051.615S9 7.498 8.701 8.175c-.065.156-.068.315-.01.478s.173.277.342.342c.156.078.313.085.469.02s.273-.176.352-.332c.195-.456.501-.82.918-1.094.417-.273.872-.41 1.367-.41.69 0 1.279.244 1.768.732s.732 1.077.732 1.768-.244 1.279-.732 1.768-1.078.732-1.768.732a.598.598 0 0 0-.439.186.601.601 0 0 0-.186.439v1.875a.6.6 0 0 0 .186.439.6.6 0 0 0 .439.186.6.6 0 0 0 .439-.186.601.601 0 0 0 .186-.439V13.37c.885-.144 1.627-.563 2.227-1.26a3.614 3.614 0 0 0 .898-2.432c0-1.028-.368-1.911-1.104-2.646-.736-.735-1.618-1.103-2.646-1.103z"/>
    <path d="M21.348 7.917A10.212 10.212 0 0 0 19.2 4.743c-.905-.905-1.963-1.621-3.174-2.148s-2.507-.791-3.887-.791-2.676.264-3.887.791-2.269 1.243-3.174 2.148c-.905.905-1.621 1.963-2.148 3.174s-.791 2.507-.791 3.887.264 2.676.791 3.887 1.243 2.269 2.148 3.174c.905.905 1.963 1.621 3.174 2.148s2.506.791 3.887.791c1.38 0 2.676-.264 3.887-.791s2.269-1.243 3.174-2.148c.905-.905 1.621-1.963 2.148-3.174s.791-2.507.791-3.887-.264-2.676-.791-3.887zm-1.153 7.295a8.897 8.897 0 0 1-1.875 2.773 8.909 8.909 0 0 1-2.773 1.875c-1.062.462-2.197.693-3.408.693s-2.347-.231-3.409-.693a8.886 8.886 0 0 1-2.773-1.875 8.909 8.909 0 0 1-1.875-2.773c-.462-1.062-.693-2.197-.693-3.408s.231-2.347.693-3.408a8.902 8.902 0 0 1 1.875-2.774A8.909 8.909 0 0 1 8.73 3.747c1.061-.462 2.197-.693 3.408-.693s2.347.231 3.408.693a8.909 8.909 0 0 1 2.773 1.875 8.909 8.909 0 0 1 1.875 2.773c.462 1.062.693 2.197.693 3.408s-.23 2.347-.692 3.409z"/>
    <circle cx="12.139" cy="17.438" r=".74"/>
</svg>
</i>
</a>
<a href="account"
class="header__btn-account d-flex align-items-center position-relative ml-25 ml-lg-15 js-popup-button"
data-js-popup-button="account"
data-js-tooltip
data-tippy-content="Account"
data-tippy-placement="bottom"
data-tippy-distance="6">
<i>
<svg aria-hidden="true" focusable="false" role="presentation"
     class="icon icon-theme-201" viewBox="0 0 24 24">
    <path d="M4.023 22.167h-1.25v-.625c0-1.042.163-2.034.488-2.979a9.524 9.524 0 0 1 1.357-2.588 9.366 9.366 0 0 1 2.061-2.031 9.58 9.58 0 0 1 2.598-1.328 5.588 5.588 0 0 1-1.992-2.002 5.413 5.413 0 0 1-.762-2.822c0-.781.146-1.51.439-2.188A5.707 5.707 0 0 1 9.96 2.606c.677-.293 1.406-.439 2.188-.439s1.51.146 2.188.439a5.724 5.724 0 0 1 2.998 2.998c.293.677.439 1.406.439 2.188 0 1.029-.254 1.97-.762 2.822a5.588 5.588 0 0 1-1.992 2.002 9.623 9.623 0 0 1 2.598 1.328 9.41 9.41 0 0 1 3.418 4.619c.325.944.488 1.937.488 2.979v.625h-1.25v-.625c0-1.12-.212-2.174-.635-3.164A8.172 8.172 0 0 0 17.9 15.79a8.172 8.172 0 0 0-2.588-1.738 7.966 7.966 0 0 0-3.164-.635c-1.12 0-2.175.212-3.164.635a8.15 8.15 0 0 0-2.588 1.738 8.155 8.155 0 0 0-1.738 2.588 7.966 7.966 0 0 0-.635 3.164v.625zM8.115 9.491a4.364 4.364 0 0 0 2.334 2.334 4.28 4.28 0 0 0 1.699.342 4.375 4.375 0 0 0 4.033-2.676 4.28 4.28 0 0 0 .342-1.699 4.28 4.28 0 0 0-.342-1.699 4.392 4.392 0 0 0-.938-1.396 4.4 4.4 0 0 0-1.396-.937 4.284 4.284 0 0 0-1.699-.342c-.599 0-1.166.114-1.699.342-.534.228-1 .541-1.396.937-.397.397-.71.863-.938 1.396a4.28 4.28 0 0 0-.342 1.699c0 .599.114 1.165.342 1.699z"/>
</svg>
</i>
</a>
<div class="ml-25 ml-lg-15">
<a href="#"
class="header__btn-wishlist d-flex align-items-center position-relative text-nowrap js-popup-button"
data-js-popup-button="wishlist" data-js-sticky-replace-element="wishlist"
data-js-tooltip
data-tippy-content="Wish list"
data-tippy-placement="bottom"
data-tippy-distance="6">
<i>
    <svg aria-hidden="true" focusable="false" role="presentation"
         class="icon icon-theme-180" viewBox="0 0 24 24">
        <path d="M21.486 6.599a5.661 5.661 0 0 0-1.25-1.865c-.56-.56-1.191-.979-1.895-1.26a5.77 5.77 0 0 0-4.326 0c-.71.28-1.345.7-1.904 1.26-.026.039-.056.075-.088.107l-.107.107-.107-.107a.706.706 0 0 1-.088-.107c-.56-.56-1.194-.979-1.904-1.26s-1.433-.42-2.168-.42-1.455.14-2.158.42-1.335.7-1.895 1.26c-.547.546-.964 1.168-1.25 1.865s-.43 1.429-.43 2.197.144 1.501.43 2.197.703 1.318 1.25 1.865l7.871 7.871c.003.003.007.004.011.006l.439.436.439-.437c.003-.002.007-.003.01-.006l7.871-7.871c.547-.547.964-1.169 1.25-1.865s.43-1.429.43-2.197-.145-1.5-.431-2.196zm-1.162 3.916a4.436 4.436 0 0 1-.967 1.445l-7.441 7.441-7.441-7.441c-.417-.417-.739-.898-.967-1.445s-.342-1.12-.342-1.719.114-1.172.342-1.719.55-1.035.967-1.465c.442-.43.94-.755 1.494-.977s1.116-.332 1.689-.332a4.496 4.496 0 0 1 3.467 1.641c.098.117.186.241.264.371.117.169.293.254.527.254s.41-.085.527-.254c.078-.13.166-.254.264-.371s.198-.228.303-.332a4.5 4.5 0 0 1 3.164-1.309c.573 0 1.136.11 1.689.332s1.052.547 1.494.977c.417.43.739.918.967 1.465s.342 1.12.342 1.719-.114 1.172-.342 1.719z"/>
    </svg>
</i>

<span class="header__counter" data-js-wishlist-count="0">0</span>
</a>
</div>
<div class="ml-25 ml-lg-15">
<a href="#"
class="header__btn-compare d-flex align-items-center position-relative text-nowrap js-popup-button"
data-js-popup-button="compare-full" data-js-sticky-replace-element="compare"
data-js-tooltip
data-tippy-content="Compare"
data-tippy-placement="bottom"
data-tippy-distance="6">
<i>
    <svg aria-hidden="true" focusable="false" role="presentation"
         class="icon icon-theme-039" viewBox="0 0 24 24">
        <path d="M23.408 19.784c-.01.007-.024.012-.035.02l-4.275-12.11.005-.014-.011-.004-.114-.323v-.061h-6.394v-4.75a.6.6 0 0 0-.186-.439c-.124-.124-.271-.186-.439-.186s-.315.062-.439.186a.601.601 0 0 0-.186.439v4.75H4.939v.062l-.114.322-.011.004.005.014L.544 19.803c-.01-.007-.025-.012-.035-.02l-.388 1.081c1.345.846 3.203 1.363 5.286 1.363 2.08 0 3.935-.515 5.279-1.359l-.019-.054.02-.007L6.326 8.458H17.59l-4.36 12.349.02.007-.019.054c1.344.844 3.199 1.359 5.279 1.359 2.083 0 3.941-.517 5.286-1.363l-.388-1.08zm-14.122.563c-1.085.486-2.434.781-3.88.781-1.423 0-2.749-.288-3.825-.761l.326-.924h7.06l.319.904zm-.71-2.013H2.299l3.138-8.888 3.139 8.888zm9.903-8.888l3.138 8.888h-6.276l3.138-8.888zm.031 11.682c-1.446 0-2.796-.295-3.88-.781l.319-.904h7.06l.326.924c-1.076.473-2.402.761-3.825.761z"/>
    </svg>
</i>

<span class="header__counter" data-js-compare-count="0">0</span>
</a>
</div>
<div class="ml-25 ml-lg-15">
<a href="cart"
class="header__btn-cart position-relative d-flex align-items-center text-nowrap js-popup-button"
data-js-popup-button="cart" data-js-sticky-replace-element="cart">
<i class="mr-lg-7">
    <svg aria-hidden="true" focusable="false" role="presentation"
         class="icon icon-theme-109" viewBox="0 0 24 24">
        <path d="M19.884 21.897a.601.601 0 0 1-.439.186h-15a.6.6 0 0 1-.439-.186.601.601 0 0 1-.186-.439v-15a.6.6 0 0 1 .186-.439.601.601 0 0 1 .439-.186h3.75c0-1.028.368-1.911 1.104-2.646.735-.735 1.618-1.104 2.646-1.104s1.911.368 2.646 1.104c.735.736 1.104 1.618 1.104 2.646h3.75a.6.6 0 0 1 .439.186.601.601 0 0 1 .186.439v15a.604.604 0 0 1-.186.439zM18.819 7.083h-3.125v2.5a.598.598 0 0 1-.186.439c-.124.124-.271.186-.439.186s-.315-.062-.439-.186a.6.6 0 0 1-.186-.439v-2.5h-5v2.5a.598.598 0 0 1-.186.439c-.124.124-.271.186-.439.186s-.315-.062-.439-.186a.6.6 0 0 1-.186-.439v-2.5H5.069v13.75h13.75V7.083zm-8.642-3.018a2.409 2.409 0 0 0-.733 1.768h5c0-.69-.244-1.279-.732-1.768s-1.077-.732-1.768-.732-1.279.244-1.767.732z"/>
    </svg>
</i>
<span class="d-none d-lg-inline mt-lg-3"
      data-js-cart-count-desktop="0">Bag (3)</span>
<span class="header__counter d-lg-none" data-js-cart-count-mobile="3">3</span>
</a>
</div>
<div class="position-lg-relative d-none d-lg-block ml-lg-15"
data-js-position-desktop="currencies">
<div class="js-position js-dropdown js-currencies-list"
 data-js-position-name="currencies">
<div class="header__btn-currency position-relative d-none d-lg-flex align-items-lg-center cursor-pointer"
     data-js-dropdown-button>
    <span class="mt-lg-3" data-current-currency>US($)</span><i>
    <svg aria-hidden="true" focusable="false" role="presentation"
         class="icon icon-theme-229" viewBox="0 0 24 24">
        <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
    </svg>
</i></div>
<div class="header__dropdown dropdown d-lg-none position-lg-absolute top-lg-100 right-lg-0"
     data-js-dropdown>
    <ul class="list-unstyled w-100 px-15 py-30 py-lg-15">
        <li class="active" data-button-name="US($)" data-currency-code="USD"><a
                href="#USD">USD - US Dollar</a></li>
        <li data-button-name="UE(€)" data-currency-code="EUR"><a href="#EUR">EUR -
            Euro</a></li>
        <li data-button-name="BP(£)" data-currency-code="GBP"><a href="#GBP">GBP -
            British Pound</a></li>
    </ul>
</div>
</div>
</div>
<div class="position-lg-relative d-none d-lg-block ml-lg-15"
data-js-position-desktop="languages">
<div class="js-position js-dropdown js-languages-list"
 data-js-position-name="languages">
<div class="header__btn-language position-relative d-none d-lg-flex align-items-lg-center cursor-pointer"
     data-js-dropdown-button=""><span class="mt-lg-3">English</span> <i>
    <svg aria-hidden="true" focusable="false" role="presentation"
         class="icon icon-theme-229" viewBox="0 0 24 24">
        <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"></path>
    </svg>
</i></div>
<div class="header__dropdown dropdown d-lg-none position-lg-absolute top-lg-100 right-lg-0"
     data-js-dropdown="">
    <ul class="list-unstyled w-100 px-15 pb-30 py-lg-15">
        <li class="active" data-l="en"><span>English</span></li>
        <li data-l="fr"><span>Français</span></li>
        <li data-l="de"><span>Deutsch</span></li>
    </ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="header__border border-bottom d-none d-lg-block"></div>
<div data-js-desktop-sticky>
<div class="header__line-bottom position-relative d-lg-flex py-lg-6">
<div class="header__sticky-logo d-none align-items-lg-center w-100 h-100 header__sticky-logo--displaced position-absolute top-0 left-0 py-6 ml-15"
data-js-sticky-replace-here="logo" style="max-width: 64px;"></div>
<div class="container d-lg-flex">
<div class="header__nav d-none d-lg-flex" data-js-position-desktop="menu">
<nav class="menu js-menu js-position" data-js-position-name="menu">
<div class="menu__panel menu__list menu__level-01 d-flex flex-column flex-lg-row flex-lg-wrap menu__panel--bordered">
    <div class="menu__curtain d-none position-lg-absolute"></div>
    <div class="menu__item menu__item--has-children">

        <a href="index.html"
           class="d-flex align-items-center px-lg-7"><span>Layouts</span> <i
                class="d-none d-lg-inline position-lg-relative">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-229" viewBox="0 0 24 24">
                <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
            </svg>
        </i><i class="d-lg-none ml-auto">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-231" viewBox="0 0 24 24">
                <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
            </svg>
        </i></a>
        <div class="menu__megamenu d-lg-none position-lg-absolute">
            <div class="container py-lg-40">
                <div class="menu__grid menu__list menu__level-02 row">


                    <div class="menu__item menu__back d-lg-none"><a
                            href="index.html">Layouts</a>
                    </div>
                    <div class="menu__item menu__item--has-children col-lg-3">

                        <a href="index.html"
                           class="menu__title d-flex align-items-center mb-lg-10"><span>Frontpage Layouts</span>
                            <i class="d-lg-none ml-auto">
                                <svg aria-hidden="true" focusable="false"
                                     role="presentation" class="icon icon-theme-231"
                                     viewBox="0 0 24 24">
                                    <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                                </svg>
                            </i></a>
                        <div class="menu__list menu__level-03 row">
                            <div class="menu__item menu__back d-lg-none"><a
                                    href="index.html">Frontpage
                                Layouts</a></div>
                            <div class="col-lg">
                                <div class="menu__list--styled">

                                    <div class="menu__item"><a
                                            href="index.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V1</span><span
                                            class="menu__label menu__label--hot px-3 ml-5 order-1">HOT</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-02.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V2</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-03.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V3</span><span
                                            class="menu__label menu__label--hot px-3 ml-5 order-1">HOT</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-04.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V4</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-05.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V5</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-06.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V6</span><span
                                            class="menu__label menu__label--hot px-3 ml-5 order-1">HOT</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-07.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V7</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-08.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V8</span><span
                                            class="menu__label menu__label--new px-3 ml-5 order-1">SLIDER</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-09.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V9</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-10.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V10</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="menu__list--styled">

                                    <div class="menu__item"><a
                                            href="index-11.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V11</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-12.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V12</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-13.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V13</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-14.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V14</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="index-15.html"
                                            class="d-flex align-items-center px-lg-5"><span>Home V15</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 d-none d-lg-block mb-lg-30">
                    </div>
                    <div class="col-lg-4 d-none d-lg-block mb-lg-30">


                        <div class="promobox promobox--type-01 d-flex flex-column align-items-center text-center">
                            <a href="collection.html" class="w-100">

                                <div class="image-animation image-animation--from-default image-animation--to-center image-animation--to-opacity">
                                    <div class="rimage"
                                         style="padding-top:72.97297297297297%;">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="rimage__img rimage__img--fade-in lazyload"
                                             data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/01_77aed88e-38bb-4f19-a1e3-7d99dccda052_{width}x.progressive.png.jpg?v=1552403452"
                                             data-aspect-ratio="1.3703703703703705"


                                             data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/01_77aed88e-38bb-4f19-a1e3-7d99dccda052_400x.progressive.png.jpg?v=1552403452 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/01_77aed88e-38bb-4f19-a1e3-7d99dccda052_400x@2x.progressive.png.jpg?v=1552403452 2x"


                                             data-scale-perspective="1.1"

                                             alt="">
                                    </div>
                                </div>
                            </a><a href="collection.html"
                                   class="promobox__text-line-01 mt-15"><p
                                class="h5 mb-0">NEW IN</p></a><a
                                href="collection.html"><p
                                class="promobox__text-line-02 m-0">Spring/Summer
                            2019 Collection</p></a></div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block mb-lg-30">


                        <div class="promobox promobox--type-01 d-flex flex-column align-items-center text-center">
                            <a href="collection.html" class="w-100">

                                <div class="image-animation image-animation--from-default image-animation--to-center image-animation--to-opacity">
                                    <div class="rimage"
                                         style="padding-top:72.97297297297297%;">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="rimage__img rimage__img--fade-in lazyload"
                                             data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/02_94da7ef8-77bf-4355-9c75-dddabfa361b3_{width}x.progressive.png.jpg?v=1552403485"
                                             data-aspect-ratio="1.3703703703703705"


                                             data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/02_94da7ef8-77bf-4355-9c75-dddabfa361b3_400x.progressive.png.jpg?v=1552403485 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/02_94da7ef8-77bf-4355-9c75-dddabfa361b3_400x@2x.progressive.png.jpg?v=1552403485 2x"


                                             data-scale-perspective="1.1"

                                             alt="">
                                    </div>
                                </div>
                            </a><a href="collection.html"
                                   class="promobox__text-line-01 mt-15"><p
                                class="h5 mb-0">SALE & SPECIAL OFFERS</p></a><a
                                href="collection.html"><p
                                class="promobox__text-line-02 m-0">Get up to 20%
                            off</p></a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="menu__item menu__item--has-children">

        <a href="collection.html"
           class="d-flex align-items-center px-lg-7"><span>Shop</span> <i
                class="d-none d-lg-inline position-lg-relative">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-229" viewBox="0 0 24 24">
                <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
            </svg>
        </i><i class="d-lg-none ml-auto">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-231" viewBox="0 0 24 24">
                <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
            </svg>
        </i></a>
        <div class="menu__megamenu d-lg-none position-lg-absolute">
            <div class="container py-lg-40">
                <div class="menu__grid menu__list menu__level-02 row">


                    <div class="menu__item menu__back d-lg-none"><a
                            href="collection.html">Shop</a></div>
                    <div class="menu__item menu__item--has-children col-lg-2">

                        <a href="collection.html"
                           class="menu__title d-flex align-items-center mb-lg-10"><span>Collection Layouts</span>
                            <i class="d-lg-none ml-auto">
                                <svg aria-hidden="true" focusable="false"
                                     role="presentation" class="icon icon-theme-231"
                                     viewBox="0 0 24 24">
                                    <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                                </svg>
                            </i></a>
                        <div class="menu__list menu__level-03 row">
                            <div class="menu__item menu__back d-lg-none"><a
                                    href="collection.html">Collection Layouts</a>
                            </div>
                            <div class="col-lg">
                                <div class="menu__list--styled">

                                    <div class="menu__item"><a
                                            href="collection-list.html"
                                            class="d-flex align-items-center px-lg-5"><span>List Collection V1</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection-list-02.html"
                                            class="d-flex align-items-center px-lg-5"><span>List Collections V2</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection-2-products-per-row.html?products-view=reset"
                                            class="d-flex align-items-center px-lg-5"><span>2 Products per Row</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html?products-view=reset"
                                            class="d-flex align-items-center px-lg-5"><span>3 Products per Row</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection-4-products-per-row.html?products-view=reset"
                                            class="d-flex align-items-center px-lg-5"><span>4 Products per Row</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection-list-products.html?products-view=reset"
                                            class="d-flex align-items-center px-lg-5"><span>List Products</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection-left-sidebar.html"
                                            class="d-flex align-items-center px-lg-5"><span>Left Sidebar</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection-right-sidebar.html"
                                            class="d-flex align-items-center px-lg-5"><span>Right Sidebar</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection-without-sidebar.html"
                                            class="d-flex align-items-center px-lg-5"><span>Without Sidebar</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection-without-sidebar-with-banner.html"
                                            class="d-flex align-items-center px-lg-5"><span>Without Sidebar with Banner</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection-look-book.html"
                                            class="d-flex align-items-center px-lg-5"><span>Look Book</span><span
                                            class="menu__label menu__label--hot px-3 ml-5 order-1">HOT</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection-look-book-02.html"
                                            class="d-flex align-items-center px-lg-5"><span>Look Book V2</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection-catalog-mode.html"
                                            class="d-flex align-items-center px-lg-5"><span>Catalog Mode</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu__item menu__item--has-children col-lg-2">

                        <a href="product.html"
                           class="menu__title d-flex align-items-center mb-lg-10"><span>Single Product Layouts</span>
                            <i class="d-lg-none ml-auto">
                                <svg aria-hidden="true" focusable="false"
                                     role="presentation" class="icon icon-theme-231"
                                     viewBox="0 0 24 24">
                                    <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                                </svg>
                            </i></a>
                        <div class="menu__list menu__level-03 row">
                            <div class="menu__item menu__back d-lg-none"><a
                                    href="product.html">Single Product Layouts</a>
                            </div>
                            <div class="col-lg">
                                <div class="menu__list--styled">

                                    <div class="menu__item"><a
                                            href="product.html"
                                            class="d-flex align-items-center px-lg-5"><span>Product V1 — Classic</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="product-02.html"
                                            class="d-flex align-items-center px-lg-5"><span>Product V2 — Thumbs List</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="product-03.html"
                                            class="d-flex align-items-center px-lg-5"><span>Product V3 — 3 Columns</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="product-04.html"
                                            class="d-flex align-items-center px-lg-5"><span>Product V4 — Sticky Side</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="product-06.html"
                                            class="d-flex align-items-center px-lg-5"><span>Product V6 — Slider</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="product-02-with-column.html"
                                            class="d-flex align-items-center px-lg-5"><span>Product V2 — With Column</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="product-with-column.html"
                                            class="d-flex align-items-center px-lg-5"><span>Product V1 — With Column</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu__item menu__item--has-children col-lg-2">

                        <a href="other-login.html"
                           class="menu__title d-flex align-items-center mb-lg-10"><span>User Account Pages</span>
                            <i class="d-lg-none ml-auto">
                                <svg aria-hidden="true" focusable="false"
                                     role="presentation" class="icon icon-theme-231"
                                     viewBox="0 0 24 24">
                                    <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                                </svg>
                            </i></a>
                        <div class="menu__list menu__level-03 row">
                            <div class="menu__item menu__back d-lg-none"><a
                                    href="other-login.html">User Account Pages</a>
                            </div>
                            <div class="col-lg">
                                <div class="menu__list--styled">

                                    <div class="menu__item">
                                        <a href="other-login.html"
                                           class="d-flex align-items-center px-lg-5"><span>Login</span></a>
                                    </div>
                                    <div class="menu__item">
                                        <a href="other-register.html"
                                           class="d-flex align-items-center px-lg-5"><span>Register</span></a>
                                    </div>
                                    <div class="menu__item">
                                        <a href="other-account.html"
                                           class="d-flex align-items-center px-lg-5"><span>Account</span></a>
                                    </div>
                                    <div class="menu__item">
                                        <a href="other-cart.html"
                                           class="d-flex align-items-center px-lg-5"><span>Cart</span></a>
                                    </div>
                                    <div class="menu__item">
                                        <a href="other-wishlist.html"
                                           class="d-flex align-items-center px-lg-5"><span>Wishlist</span></a>
                                    </div>
                                    <div class="menu__item">
                                        <a href="other-compare.html"
                                           class="d-flex align-items-center px-lg-5"><span>Compare</span></a>
                                    </div>
                                    <div class="menu__item">
                                        <a href="other-search.html"
                                           class="d-flex align-items-center px-lg-5"><span>Search</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block mb-lg-30"><a
                            href="product.html"
                            class="menu__title mb-lg-10">Featured products</a>
                        <div class="menu__products row">
                            <div class="col-lg-6">

                                <div class="product-search d-flex flex-row flex-lg-column align-items-start align-items-lg-stretch mb-10">
                                    <div class="product-search__image position-relative mr-10 mr-lg-0">
                                        <a href="product.html"
                                           class="d-block">
                                            <div class="rimage"
                                                 style="padding-top:128.2307692%;">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="rimage__img rimage__img--fade-in lazyload"
                                                     data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/products/3410534250_1_1_1_67eb2dce-35d8-4dfa-8d93-fee6c4b56c49_{width}x.progressive.jpg?v=1542543797"
                                                     data-aspect-ratio="0.7798440311937612"


                                                     data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/products/3410534250_1_1_1_67eb2dce-35d8-4dfa-8d93-fee6c4b56c49_200x.progressive.jpg?v=1542543797 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/products/3410534250_1_1_1_67eb2dce-35d8-4dfa-8d93-fee6c4b56c49_200x@2x.progressive.jpg?v=1542543797 2x"


                                                     alt="Blend Field Jacket">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-search__content d-flex flex-column align-items-start mt-lg-15">
                                        <div class="product-search__title mb-3">
                                            <h3 class="h6 m-0">
                                                <a href="product.html">Blend
                                                    Field Jacket</a>
                                            </h3>
                                        </div>
                                        <div class="product-search__price mb-10">
                                                                            <span class="price"
                                                                                  data-js-product-price><span><span
                                                                                    class=money>$470.00</span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="product-search d-flex flex-row flex-lg-column align-items-start align-items-lg-stretch mb-10">
                                    <div class="product-search__image position-relative mr-10 mr-lg-0">
                                        <a href="product.html"
                                           class="d-block">
                                            <div class="rimage"
                                                 style="padding-top:128.2307692%;">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="rimage__img rimage__img--fade-in lazyload"
                                                     data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/products/2121900600_2_3_1_86b90065-d75b-4519-a95e-a02ae468f4e9_{width}x.progressive.jpg?v=1543244602"
                                                     data-aspect-ratio="0.7798440311937612"


                                                     data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/products/2121900600_2_3_1_86b90065-d75b-4519-a95e-a02ae468f4e9_200x.progressive.jpg?v=1543244602 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/products/2121900600_2_3_1_86b90065-d75b-4519-a95e-a02ae468f4e9_200x@2x.progressive.jpg?v=1543244602 2x"


                                                     alt="Jersey Graphic Tee">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-search__content d-flex flex-column align-items-start mt-lg-15">
                                        <div class="product-search__title mb-3">
                                            <h3 class="h6 m-0">
                                                <a href="product.html">Jersey
                                                    Graphic Tee</a>
                                            </h3>
                                        </div>
                                        <div class="product-search__price mb-10">
                                                                            <span class="price"
                                                                                  data-js-product-price><span><span
                                                                                    class=money>$330.00</span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block mb-lg-30"><a
                            href="collection.html" class="menu__title mb-lg-10">Top
                        brands</a>
                        <div class="menu__group menu__group--offset-small row">
                            <div class="col-lg-6 d-none d-lg-block px-lg-5 mb-lg-10">


                                <div class="promobox promobox--type-03 d-flex justify-content-center">
                                    <a href="collection.html"
                                       class="image-animation-trigger position-relative w-100">

                                        <div class="image-animation image-animation--from-default image-animation--to-default">
                                            <div class="rimage"
                                                 style="padding-top:100.0%;"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                    class="rimage__img rimage__img--fade-in lazyload"
                                                    data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand1_{width}x.png?v=1540454668"
                                                    data-aspect-ratio="1.0"


                                                    data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand1_80x.png?v=1540454668 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand1_80x@2x.png?v=1540454668 2x"


                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="promobox__border absolute-stretch"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block px-lg-5 mb-lg-10">


                                <div class="promobox promobox--type-03 d-flex justify-content-center">
                                    <a href="collection.html"
                                       class="image-animation-trigger position-relative w-100">

                                        <div class="image-animation image-animation--from-default image-animation--to-default">
                                            <div class="rimage"
                                                 style="padding-top:100.0%;"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                    class="rimage__img rimage__img--fade-in lazyload"
                                                    data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand2_{width}x.png?v=1540454864"
                                                    data-aspect-ratio="1.0"


                                                    data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand2_80x.png?v=1540454864 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand2_80x@2x.png?v=1540454864 2x"


                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="promobox__border absolute-stretch"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block px-lg-5 mb-lg-10">


                                <div class="promobox promobox--type-03 d-flex justify-content-center">
                                    <a href="collection.html"
                                       class="image-animation-trigger position-relative w-100">

                                        <div class="image-animation image-animation--from-default image-animation--to-default">
                                            <div class="rimage"
                                                 style="padding-top:100.0%;"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                    class="rimage__img rimage__img--fade-in lazyload"
                                                    data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand3_{width}x.png?v=1540454883"
                                                    data-aspect-ratio="1.0"


                                                    data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand3_80x.png?v=1540454883 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand3_80x@2x.png?v=1540454883 2x"


                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="promobox__border absolute-stretch"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block px-lg-5 mb-lg-10">


                                <div class="promobox promobox--type-03 d-flex justify-content-center">
                                    <a href="collection.html"
                                       class="image-animation-trigger position-relative w-100">

                                        <div class="image-animation image-animation--from-default image-animation--to-default">
                                            <div class="rimage"
                                                 style="padding-top:100.0%;"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                    class="rimage__img rimage__img--fade-in lazyload"
                                                    data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand4_{width}x.png?v=1540454899"
                                                    data-aspect-ratio="1.0"


                                                    data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand4_80x.png?v=1540454899 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand4_80x@2x.png?v=1540454899 2x"


                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="promobox__border absolute-stretch"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block px-lg-5 mb-lg-10">


                                <div class="promobox promobox--type-03 d-flex justify-content-center">
                                    <a href="collection.html"
                                       class="image-animation-trigger position-relative w-100">

                                        <div class="image-animation image-animation--from-default image-animation--to-default">
                                            <div class="rimage"
                                                 style="padding-top:100.0%;"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                    class="rimage__img rimage__img--fade-in lazyload"
                                                    data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand5_{width}x.png?v=1540454917"
                                                    data-aspect-ratio="1.0"


                                                    data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand5_80x.png?v=1540454917 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand5_80x@2x.png?v=1540454917 2x"


                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="promobox__border absolute-stretch"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block px-lg-5 mb-lg-10">


                                <div class="promobox promobox--type-03 d-flex justify-content-center">
                                    <a href="collection.html"
                                       class="image-animation-trigger position-relative w-100">

                                        <div class="image-animation image-animation--from-default image-animation--to-default">
                                            <div class="rimage"
                                                 style="padding-top:100.0%;"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                    class="rimage__img rimage__img--fade-in lazyload"
                                                    data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand6_{width}x.png?v=1540454931"
                                                    data-aspect-ratio="1.0"


                                                    data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand6_80x.png?v=1540454931 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/brand6_80x@2x.png?v=1540454931 2x"


                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="promobox__border absolute-stretch"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="menu__item menu__item--has-children position-lg-relative">

        <a href="blog.html"
           class="d-flex align-items-center px-lg-7"><span>Blog</span> <i
                class="d-none d-lg-inline position-lg-relative">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-229" viewBox="0 0 24 24">
                <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
            </svg>
        </i><i class="d-lg-none ml-auto">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-231" viewBox="0 0 24 24">
                <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
            </svg>
        </i></a>
        <div class="menu__dropdown d-lg-none position-lg-absolute">
            <div class="menu__list menu__list--styled menu__level-02 menu__level-02 p-lg-20">
                <div class="menu__item menu__back d-lg-none"><a href="blog.html">Blog</a>
                </div>
                <div class="menu__item">
                    <a href="blog.html"
                       class="d-flex align-items-center px-lg-5"><span>Blog V1 — Classic</span></a>
                </div>
                <div class="menu__item">
                    <a href="blog-02.html"
                       class="d-flex align-items-center px-lg-5"><span>Blog V2 — Grid</span></a>
                </div>
                <div class="menu__item">
                    <a href="blog-03.html"
                       class="d-flex align-items-center px-lg-5"><span>Blog V3 — Masonry</span></a>
                </div>
                <div class="menu__item">
                    <a href="blog-04.html"
                       class="d-flex align-items-center px-lg-5"><span>Blog V4 — With Sidebar</span></a>
                </div>
                <div class="menu__item menu__item--has-children position-lg-relative">
                    <a href="blog-post.html"
                       class="d-flex align-items-center px-lg-5"><span>Single Post</span>
                        <i class="ml-auto">
                            <svg aria-hidden="true" focusable="false"
                                 role="presentation" class="icon icon-theme-231"
                                 viewBox="0 0 24 24">
                                <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                            </svg>
                        </i></a>
                    <div class="menu__list menu__level-03 position-lg-absolute p-lg-15">
                        <div class="menu__item menu__back d-lg-none"><a
                                href="blog-post.html">Single
                            Post</a></div>
                        <div class="menu__item"><a
                                href="blog-post.html"
                                class="d-flex align-items-center px-lg-5"><span>Default</span></a>
                        </div>
                        <div class="menu__item"><a
                                href="blog-post-02.html"
                                class="d-flex align-items-center px-lg-5"><span>With Video</span></a>
                        </div>
                        <div class="menu__item"><a
                                href="blog-post-03.html"
                                class="d-flex align-items-center px-lg-5"><span>With Image Slider</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="menu__item menu__item--has-children position-lg-relative">

        <a href="gallery.html"
           class="d-flex align-items-center px-lg-7"><span>Gallery</span> <i
                class="d-none d-lg-inline position-lg-relative">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-229" viewBox="0 0 24 24">
                <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
            </svg>
        </i><i class="d-lg-none ml-auto">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-231" viewBox="0 0 24 24">
                <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
            </svg>
        </i></a>
        <div class="menu__dropdown d-lg-none position-lg-absolute">
            <div class="menu__list menu__list--styled menu__level-02 menu__level-02 p-lg-20">
                <div class="menu__item menu__back d-lg-none"><a
                        href="gallery.html">Gallery</a>
                </div>
                <div class="menu__item">
                    <a href="gallery.html"
                       class="d-flex align-items-center px-lg-5"><span>Gallery V1 — Masonry (3 Col)</span></a>
                </div>
                <div class="menu__item">
                    <a href="gallery-02.html"
                       class="d-flex align-items-center px-lg-5"><span>Gallery V2 — Masonry (4 Col)</span></a>
                </div>
                <div class="menu__item">
                    <a href="gallery-03.html"
                       class="d-flex align-items-center px-lg-5"><span>Gallery V3 — Grid (3 in row)</span></a>
                </div>
                <div class="menu__item">
                    <a href="gallery-04.html"
                       class="d-flex align-items-center px-lg-5"><span>Gallery V4 — Grid (4 in row)</span></a>
                </div>
            </div>
        </div>

    </div>
    <div class="menu__item menu__item--has-children position-lg-relative">

        <a href="page-about-us.html"
           class="d-flex align-items-center px-lg-7"><span>Pages</span> <i
                class="d-none d-lg-inline position-lg-relative">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-229" viewBox="0 0 24 24">
                <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
            </svg>
        </i><i class="d-lg-none ml-auto">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-231" viewBox="0 0 24 24">
                <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
            </svg>
        </i></a>
        <div class="menu__dropdown d-lg-none position-lg-absolute">
            <div class="menu__list menu__list--styled menu__level-02 menu__level-02 p-lg-20">
                <div class="menu__item menu__back d-lg-none"><a
                        href="page-about-us.html">Pages</a></div>
                <div class="menu__item">
                    <a href="page-about-us.html"
                       class="d-flex align-items-center px-lg-5"><span>About Us</span></a>
                </div>
                <div class="menu__item">
                    <a href="page-customer-service.html"
                       class="d-flex align-items-center px-lg-5"><span>Customer Service</span></a>
                </div>
                <div class="menu__item">
                    <a href="page-sizing-guide.html"
                       class="d-flex align-items-center px-lg-5"><span>Sizing Guide</span></a>
                </div>
                <div class="menu__item">
                    <a href="page-faqs.html"
                       class="d-flex align-items-center px-lg-5"><span>FAQs</span></a>
                </div>
                <div class="menu__item">
                    <a href="page-contact-us.html"
                       class="d-flex align-items-center px-lg-5"><span>Contact Us</span></a>
                </div>
                <div class="menu__item">
                    <a href="page-coming-soon.html"
                       class="d-flex align-items-center px-lg-5"><span>Coming Soon</span></a>
                </div>
                <div class="menu__item">
                    <a href="page-privacy-policy.html"
                       class="d-flex align-items-center px-lg-5"><span>Privacy Policy</span></a>
                </div>
                <div class="menu__item">
                    <a href="page-cookie-policy.html"
                       class="d-flex align-items-center px-lg-5"><span>Cookie Policy</span></a>
                </div>
                <div class="menu__item">
                    <a href="page-404.html"
                       class="d-flex align-items-center px-lg-5"><span>Page 404</span></a>
                </div>
                <div class="menu__item">
                    <a href="page-style.html"
                       class="d-flex align-items-center px-lg-5"><span>Style</span></a>
                </div>
                <div class="menu__item">
                    <a href="page-icons.html"
                       class="d-flex align-items-center px-lg-5"><span>Icons</span></a>
                </div>
                <div class="menu__item">
                    <a href="../../html-documentation/index.html"
                       class="d-flex align-items-center px-lg-5"><span>Documentation</span></a>
                </div>
            </div>
        </div>

    </div>
    <div class="menu__item menu__item--has-children">

        <a href="collection.html"
           class="d-flex align-items-center px-lg-7"><span>Women's</span> <i
                class="d-none d-lg-inline position-lg-relative">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-229" viewBox="0 0 24 24">
                <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
            </svg>
        </i><i class="d-lg-none ml-auto">
            <svg aria-hidden="true" focusable="false" role="presentation"
                 class="icon icon-theme-231" viewBox="0 0 24 24">
                <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
            </svg>
        </i></a>
        <div class="menu__megamenu d-lg-none position-lg-absolute">
            <div class="container py-lg-40">
                <div class="menu__grid menu__list menu__level-02 row">


                    <div class="menu__item menu__back d-lg-none"><a
                            href="collection.html">Women's</a></div>
                    <div class="menu__item menu__item--has-children col-lg-2">

                        <a href="collection.html"
                           class="menu__title d-flex align-items-center mb-lg-10"><span>Clothing</span>
                            <i class="d-lg-none ml-auto">
                                <svg aria-hidden="true" focusable="false"
                                     role="presentation" class="icon icon-theme-231"
                                     viewBox="0 0 24 24">
                                    <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                                </svg>
                            </i></a>
                        <div class="menu__list menu__level-03 row">
                            <div class="menu__item menu__back d-lg-none"><a
                                    href="collection.html">Clothing</a>
                            </div>
                            <div class="col-lg">
                                <div class="menu__list--styled">

                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Coats</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Jackets</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Blazers</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Dresses</span><span
                                            class="menu__label menu__label--new px-3 ml-5 order-1">NEW</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Playsuits & Jumpsuits</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Trousers</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Jeans</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Knitwear</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Sweatshirts & Hoodies</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>T-Shirts</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Bodysuits</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Shirts</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Skirts</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Shorts</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu__item menu__item--has-children col-lg-2">

                        <a href="collection.html"
                           class="menu__title d-flex align-items-center mb-lg-10"><span>Shoes</span>
                            <i class="d-lg-none ml-auto">
                                <svg aria-hidden="true" focusable="false"
                                     role="presentation" class="icon icon-theme-231"
                                     viewBox="0 0 24 24">
                                    <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                                </svg>
                            </i></a>
                        <div class="menu__list menu__level-03 row">
                            <div class="menu__item menu__back d-lg-none"><a
                                    href="collection.html">Shoes</a></div>
                            <div class="col-lg">
                                <div class="menu__list--styled">

                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Trainers</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Boots & Ankle Boots</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Heels</span><span
                                            class="menu__label menu__label--hot px-3 ml-5 order-1">HOT</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Flats</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Platforms</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Heeled Sandals</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu__item menu__item--has-children col-lg-2">

                        <a href="collection.html"
                           class="menu__title d-flex align-items-center mb-lg-10"><span>Accessories</span>
                            <i class="d-lg-none ml-auto">
                                <svg aria-hidden="true" focusable="false"
                                     role="presentation" class="icon icon-theme-231"
                                     viewBox="0 0 24 24">
                                    <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                                </svg>
                            </i></a>
                        <div class="menu__list menu__level-03 row">
                            <div class="menu__item menu__back d-lg-none"><a
                                    href="collection.html">Accessories</a>
                            </div>
                            <div class="col-lg">
                                <div class="menu__list--styled">

                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Bags</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Backpacks</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Glasses</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Jewellery</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Earrings</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>iPhone Cases</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Gadgets</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Hats & Beanie</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Purses</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Belts</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Socks</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block mb-lg-30">
                        <div class="menu__group row">
                            <div class="col-lg-6 d-none d-lg-block mb-lg-30">


                                <div class="promobox promobox--type-02 position-relative d-flex flex-column align-items-center text-center">
                                    <div class="w-100">
                                        <a href="collection.html" class="w-100">

                                            <div class="image-animation image-animation--from-default image-animation--to-center image-animation--to-opacity">
                                                <div class="rimage"
                                                     style="padding-top:72.97297297297297%;">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="rimage__img rimage__img--fade-in lazyload"
                                                         data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/04_2f27b276-6fed-4f96-8559-7b6b8c57af0e_{width}x.progressive.png.jpg?v=1552403570"
                                                         data-aspect-ratio="1.3703703703703705"


                                                         data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/04_2f27b276-6fed-4f96-8559-7b6b8c57af0e_400x.progressive.png.jpg?v=1552403570 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/04_2f27b276-6fed-4f96-8559-7b6b8c57af0e_400x@2x.progressive.png.jpg?v=1552403570 2x"


                                                         data-scale-perspective="1.1"

                                                         alt="">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="promobox__plate position-absolute d-flex flex-column flex-center px-10 py-7 pointer-events-none">
                                            <p class="promobox__text-line-01 h5 position-relative m-0">
                                                NEW IN</p>
                                            <p class="promobox__text-line-02 position-relative m-0">
                                                Spring/Summer 2019 Collection</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block mb-lg-30">


                                <div class="promobox promobox--type-02 position-relative d-flex flex-column align-items-center text-center">
                                    <div class="w-100">
                                        <a href="collection.html" class="w-100">

                                            <div class="image-animation image-animation--from-default image-animation--to-center image-animation--to-opacity">
                                                <div class="rimage"
                                                     style="padding-top:72.97297297297297%;">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="rimage__img rimage__img--fade-in lazyload"
                                                         data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/03_4780b01c-0a2c-4054-b73e-f7611bccd652_{width}x.progressive.png.jpg?v=1552403582"
                                                         data-aspect-ratio="1.3703703703703705"


                                                         data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/03_4780b01c-0a2c-4054-b73e-f7611bccd652_400x.progressive.png.jpg?v=1552403582 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/03_4780b01c-0a2c-4054-b73e-f7611bccd652_400x@2x.progressive.png.jpg?v=1552403582 2x"


                                                         data-scale-perspective="1.1"

                                                         alt="">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="promobox__plate position-absolute d-flex flex-column flex-center px-10 py-7 pointer-events-none">
                                            <p class="promobox__text-line-01 h5 position-relative m-0">
                                                SALE & SPECIAL OFFERS</p>
                                            <p class="promobox__text-line-02 position-relative m-0">
                                                Get up to 20% off</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block mb-lg-30">


                                <div class="promobox promobox--type-02 position-relative d-flex flex-column align-items-center text-center">
                                    <div class="w-100">
                                        <a href="collection.html" class="w-100">

                                            <div class="image-animation image-animation--from-default image-animation--to-center image-animation--to-opacity">
                                                <div class="rimage"
                                                     style="padding-top:72.97297297297297%;">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="rimage__img rimage__img--fade-in lazyload"
                                                         data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/06_de144e07-89ea-473c-bfa4-ce41f091ba0b_{width}x.progressive.png.jpg?v=1552403597"
                                                         data-aspect-ratio="1.3703703703703705"


                                                         data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/06_de144e07-89ea-473c-bfa4-ce41f091ba0b_400x.progressive.png.jpg?v=1552403597 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/06_de144e07-89ea-473c-bfa4-ce41f091ba0b_400x@2x.progressive.png.jpg?v=1552403597 2x"


                                                         data-scale-perspective="1.1"

                                                         alt="">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="promobox__plate position-absolute d-flex flex-column flex-center px-10 py-7 pointer-events-none">
                                            <p class="promobox__text-line-01 h5 position-relative m-0">
                                                FEATURED</p>
                                            <p class="promobox__text-line-02 position-relative m-0">
                                                Popular Items</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block mb-lg-30">


                                <div class="promobox promobox--type-02 position-relative d-flex flex-column align-items-center text-center">
                                    <div class="w-100">
                                        <a href="collection.html" class="w-100">

                                            <div class="image-animation image-animation--from-default image-animation--to-center image-animation--to-opacity">
                                                <div class="rimage"
                                                     style="padding-top:72.97297297297297%;">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="rimage__img rimage__img--fade-in lazyload"
                                                         data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/05_6cb404e2-636f-466d-88cf-13340b2c190a_{width}x.progressive.png.jpg?v=1552403608"
                                                         data-aspect-ratio="1.3703703703703705"


                                                         data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/05_6cb404e2-636f-466d-88cf-13340b2c190a_400x.progressive.png.jpg?v=1552403608 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/05_6cb404e2-636f-466d-88cf-13340b2c190a_400x@2x.progressive.png.jpg?v=1552403608 2x"


                                                         data-scale-perspective="1.1"

                                                         alt="">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="promobox__plate position-absolute d-flex flex-column flex-center px-10 py-7 pointer-events-none">
                                            <p class="promobox__text-line-01 h5 position-relative m-0">
                                                COMING SOON</p>
                                            <p class="promobox__text-line-02 position-relative m-0">
                                                Autumn 2019 Collection</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="menu__item menu__item--has-children">

        <a href="collection.html" class="d-flex align-items-center px-lg-7"><span>Men's</span>
            <i class="d-none d-lg-inline position-lg-relative">
                <svg aria-hidden="true" focusable="false" role="presentation"
                     class="icon icon-theme-229" viewBox="0 0 24 24">
                    <path d="M11.783 14.088l-3.75-3.75a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .841.841 0 0 1-.215-.127z"/>
                </svg>
            </i><i class="d-lg-none ml-auto">
                <svg aria-hidden="true" focusable="false" role="presentation"
                     class="icon icon-theme-231" viewBox="0 0 24 24">
                    <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                </svg>
            </i></a>
        <div class="menu__megamenu d-lg-none position-lg-absolute">
            <div class="container py-lg-40">
                <div class="menu__grid menu__list menu__level-02 row">
                    <div class="col-lg-3 d-none d-lg-block mb-lg-30">


                        <div class="promobox promobox--type-01 d-flex flex-column align-items-center text-center">
                            <a href="collection.html" class="w-100">

                                <div class="image-animation image-animation--from-default image-animation--to-center image-animation--to-opacity">
                                    <div class="rimage"
                                         style="padding-top:128.1481481%;"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                            class="rimage__img rimage__img--fade-in lazyload"
                                            data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/08_a2bc5350-5e78-460c-be3d-839d426fae28_{width}x.progressive.png.jpg?v=1552403624"
                                            data-aspect-ratio="0.7803468208092486"


                                            data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/08_a2bc5350-5e78-460c-be3d-839d426fae28_400x.progressive.png.jpg?v=1552403624 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/08_a2bc5350-5e78-460c-be3d-839d426fae28_400x@2x.progressive.png.jpg?v=1552403624 2x"


                                            data-scale-perspective="1.1"

                                            alt="">
                                    </div>
                                </div>
                            </a><a href="collection.html"
                                   class="promobox__text-line-01 mt-15"><p
                                class="h5 mb-0">NEW IN</p></a><a
                                href="collection.html"><p
                                class="promobox__text-line-02 m-0">Spring/Summer
                            2019 Collection</p></a></div>
                    </div>

                    <div class="menu__item menu__back d-lg-none"><a
                            href="collection.html">Men's</a></div>
                    <div class="menu__item menu__item--has-children col-lg-2">

                        <a href="collection.html"
                           class="menu__title d-flex align-items-center mb-lg-10"><span>Clothing</span>
                            <i class="d-lg-none ml-auto">
                                <svg aria-hidden="true" focusable="false"
                                     role="presentation" class="icon icon-theme-231"
                                     viewBox="0 0 24 24">
                                    <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                                </svg>
                            </i></a><a href="collection.html"
                                       class="d-none d-lg-block mb-10">
                        <div class="rimage" style="padding-top:72.94117647058825%;">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="rimage__img rimage__img--fade-in lazyload"
                                 data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/09_c7be3217-13ff-491e-ab9d-1254c9f909ce_{width}x.progressive.png.jpg?v=1552403647"
                                 data-aspect-ratio="1.3709677419354838"


                                 data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/09_c7be3217-13ff-491e-ab9d-1254c9f909ce_170x.progressive.png.jpg?v=1552403647 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/09_c7be3217-13ff-491e-ab9d-1254c9f909ce_170x@2x.progressive.png.jpg?v=1552403647 2x"


                                 alt="">
                        </div>
                    </a>
                        <div class="menu__list menu__level-03 row">
                            <div class="menu__item menu__back d-lg-none"><a
                                    href="collection.html">Clothing</a>
                            </div>
                            <div class="col-lg">
                                <div class="menu__list--styled">

                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Coats</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Jackets</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Jeans</span><span
                                            class="menu__label menu__label--sale px-3 ml-5 order-1">SALE</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>T-Shirts</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Sweatshirts</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Knitwear</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Shirts</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Trousers</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Shorts</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu__item menu__item--has-children col-lg-2">

                        <a href="collection.html"
                           class="menu__title d-flex align-items-center mb-lg-10"><span>Shoes</span>
                            <i class="d-lg-none ml-auto">
                                <svg aria-hidden="true" focusable="false"
                                     role="presentation" class="icon icon-theme-231"
                                     viewBox="0 0 24 24">
                                    <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                                </svg>
                            </i></a><a href="collection.html"
                                       class="d-none d-lg-block mb-10">
                        <div class="rimage" style="padding-top:72.94117647058825%;">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="rimage__img rimage__img--fade-in lazyload"
                                 data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/10_87681560-d4ea-462d-83fd-296a0417d5d6_{width}x.progressive.png.jpg?v=1552403657"
                                 data-aspect-ratio="1.3709677419354838"


                                 data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/10_87681560-d4ea-462d-83fd-296a0417d5d6_170x.progressive.png.jpg?v=1552403657 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/10_87681560-d4ea-462d-83fd-296a0417d5d6_170x@2x.progressive.png.jpg?v=1552403657 2x"


                                 alt="">
                        </div>
                    </a>
                        <div class="menu__list menu__level-03 row">
                            <div class="menu__item menu__back d-lg-none"><a
                                    href="collection.html">Shoes</a></div>
                            <div class="col-lg">
                                <div class="menu__list--styled">

                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Trainers</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Boots & Ankle Boots</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Shoes</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Sandals</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu__item menu__item--has-children col-lg-2">

                        <a href="collection.html"
                           class="menu__title d-flex align-items-center mb-lg-10"><span>Accessories</span>
                            <i class="d-lg-none ml-auto">
                                <svg aria-hidden="true" focusable="false"
                                     role="presentation" class="icon icon-theme-231"
                                     viewBox="0 0 24 24">
                                    <path d="M10.806 7.232l3.75 3.75c.117.13.176.28.176.449a.652.652 0 0 1-.176.449l-3.75 3.75a.877.877 0 0 1-.215.127.596.596 0 0 1-.468 0 .877.877 0 0 1-.215-.127.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449l3.32-3.301L9.907 8.13a.652.652 0 0 1-.176-.449c0-.169.059-.319.176-.449a.652.652 0 0 1 .449-.176c.169 0 .319.058.45.176z"/>
                                </svg>
                            </i></a><a href="collection.html"
                                       class="d-none d-lg-block mb-10">
                        <div class="rimage" style="padding-top:72.94117647058825%;">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="rimage__img rimage__img--fade-in lazyload"
                                 data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/11_9b629d9c-ffbe-4100-8413-5d12132122b8_{width}x.progressive.png.jpg?v=1552403665"
                                 data-aspect-ratio="1.3709677419354838"


                                 data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/11_9b629d9c-ffbe-4100-8413-5d12132122b8_200x.progressive.png.jpg?v=1552403665 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/11_9b629d9c-ffbe-4100-8413-5d12132122b8_200x@2x.progressive.png.jpg?v=1552403665 2x"


                                 alt="">
                        </div>
                    </a>
                        <div class="menu__list menu__level-03 row">
                            <div class="menu__item menu__back d-lg-none"><a
                                    href="collection.html">Accessories</a>
                            </div>
                            <div class="col-lg">
                                <div class="menu__list--styled">

                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Backpacks</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Hats</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Belts</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Glasses</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Mobile Accessories</span></a>
                                    </div>
                                    <div class="menu__item"><a
                                            href="collection.html"
                                            class="d-flex align-items-center px-lg-5"><span>Socks</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block mb-lg-30">


                        <div class="promobox promobox--type-02 position-relative d-flex flex-column align-items-center text-center">
                            <div class="w-100">
                                <a href="collection.html" class="w-100">

                                    <div class="image-animation image-animation--from-default image-animation--to-center image-animation--to-opacity">
                                        <div class="rimage"
                                             style="padding-top:128.1481481%;"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                class="rimage__img rimage__img--fade-in lazyload"
                                                data-master="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/07_6f8b51cb-d2f4-451e-bfee-32ab5d5e6645_{width}x.progressive.png.jpg?v=1552403636"
                                                data-aspect-ratio="0.7803468208092486"


                                                data-srcset="https://cdn.shopify.com/s/files/1/0026/2910/7764/files/07_6f8b51cb-d2f4-451e-bfee-32ab5d5e6645_400x.progressive.png.jpg?v=1552403636 1x, https://cdn.shopify.com/s/files/1/0026/2910/7764/files/07_6f8b51cb-d2f4-451e-bfee-32ab5d5e6645_400x@2x.progressive.png.jpg?v=1552403636 2x"


                                                data-scale-perspective="1.1"

                                                alt="">
                                        </div>
                                    </div>
                                </a>
                                <div class="promobox__plate position-absolute d-flex flex-column flex-center px-10 py-7 pointer-events-none">
                                    <p class="promobox__text-line-01 h5 position-relative m-0">
                                        SALE & SPECIAL OFFERS</p>
                                    <p class="promobox__text-line-02 position-relative m-0">
                                        Get up to 20% off</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="menu__item ">

        <a href="http://bit.ly/2UXO8zH"
           class="d-flex align-items-center px-lg-7"><span>Buy Now!</span></a></div>
</div>
</nav>
</div>
<a href="search.html"
class="header__btn-search d-none d-lg-flex align-items-lg-center ml-lg-auto js-popup-button"
data-js-popup-button="navigation"><span class="mr-lg-7">SEARCH</span><i>
<svg aria-hidden="true" focusable="false" role="presentation"
 class="icon icon-theme-168" viewBox="0 0 24 24">
<path d="M13.261 2.475a8.177 8.177 0 0 1 2.588 1.738 8.172 8.172 0 0 1 1.738 2.588 7.97 7.97 0 0 1 .635 3.164 7.836 7.836 0 0 1-.527 2.861 8.355 8.355 0 0 1-1.426 2.412l4.902 4.902c.117.131.176.28.176.449s-.059.319-.176.449c-.065.052-.137.095-.215.127s-.156.049-.234.049-.156-.017-.234-.049-.149-.075-.215-.127l-4.902-4.902c-.703.6-1.507 1.074-2.412 1.426s-1.859.528-2.862.528a7.945 7.945 0 0 1-3.164-.635 8.144 8.144 0 0 1-2.588-1.738 8.15 8.15 0 0 1-1.738-2.588 7.962 7.962 0 0 1-.635-3.164 7.97 7.97 0 0 1 .635-3.164 8.172 8.172 0 0 1 1.738-2.588 8.15 8.15 0 0 1 2.588-1.738c.989-.423 2.044-.635 3.164-.635s2.174.212 3.164.635zM3.759 12.641c.358.834.85 1.563 1.475 2.188s1.354 1.117 2.188 1.475c.833.358 1.726.537 2.676.537s1.843-.179 2.676-.537c.833-.357 1.563-.85 2.188-1.475s1.116-1.354 1.475-2.188a6.705 6.705 0 0 0 .537-2.676c0-.95-.179-1.842-.537-2.676-.358-.833-.85-1.563-1.475-2.188s-1.354-1.116-2.188-1.475c-.835-.356-1.727-.536-2.677-.536s-1.843.18-2.676.537c-.833.358-1.563.85-2.188 1.475S4.117 6.456 3.759 7.289a6.694 6.694 0 0 0-.537 2.676c0 .951.178 1.843.537 2.676z"/>
</svg>
</i>
</a>
</div>
<div class="header__sticky-sidebar position-absolute d-none align-items-lg-center top-0 right-0 h-100 mr-15">
<div class="ml-lg-15" data-js-sticky-replace-here="wishlist"></div>
<div class="ml-lg-15" data-js-sticky-replace-here="compare"></div>
<div class="ml-lg-15" data-js-sticky-replace-here="cart"></div>
</div>
</div>
<div class="header__border border-bottom d-none d-lg-block"></div>
</div>
<div class="header__border border-bottom d-lg-none"></div>
</div>
</header>