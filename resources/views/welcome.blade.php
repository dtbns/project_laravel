@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page page-home">
                <div class="toolbar tabbar tabbar-labels toolbar-bottom">
                    <div class="toolbar-inner">
                        <a href="#tab-1" class="tab-link tab-link-active">
                            <i class="ti-home"></i>
                            <span class="tabbar-label">Home</span>
                        </a>
                        <a href="#tab-2" class="tab-link">
                            <i class="ti-heart "></i>
                            <span class="tabbar-label">Wishlist</span>
                        </a>
                        <a href="#tab-3" class="tab-link">
                            <i class="ti-shopping-cart"></i>
                            <span class="tabbar-label">Cart</span>
                        </a>
                        <a href="#tab-4" class="tab-link">
                            <i class="ti-control-shuffle"></i>
                            <span class="tabbar-label">Transaction</span>
                        </a>
                        <a href="#tab-5" class="tab-link">
                            <i class="ti-user"></i>
                            <span class="tabbar-label">Account</span>
                        </a>
                    </div>
                </div>
                <div class="tabs page-content">
                    <div id="tab-1" class="tab tab-active">
                        <!-- home -->

                        <!-- navbar home -->
                        <div class="navbar navbar-home">
                            <div class="navbar-inner sliding">
                                <div class="left">
                                    <a href="#" class="panel-open" data-panel="left"><i class="ti-align-left"></i></a>
                                </div>
                                <div class="title">
                                    <form class="searchbar">
                                        <div class="searchbar-input-wrap">
                                            <input type="search" placeholder="Search">
                                            <i class="searchbar-icon"></i>
                                            <span class="input-clear-button"></span>
                                        </div>
                                        <span class="searchbar-disable-button">Cancel</span>
                                    </form>
                                </div>
                                <div class="right">
                                    <a href="/notification/"><i class="ti-bell"></i></a>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <!-- end navbar home -->

                        <!-- sidebar -->
                        <div class="panel panel-left panel-cover">
                            <div class="list links-list">
                                <ul>
                                    <li>
                                        <a href="/product/" class="panel-close">
                                            <div class="item-media">
                                                <i class="ti-shopping-cart"></i>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title">
                                                    Product
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/categories/" class="panel-close">
                                            <div class="item-media">
                                                <i class="ti-layers-alt"></i>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title">
                                                    Categories
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/blog/" class="panel-close">
                                            <div class="item-media">
                                                <i class="ti-rss"></i>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title">
                                                    Blog
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/order-history/" class="panel-close">
                                            <div class="item-media">
                                                <i class="ti-time"></i>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title">
                                                    Order History
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/tracking-order/" class="panel-close">
                                            <div class="item-media">
                                                <i class="ti-truck"></i>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title">
                                                    Tracking Order
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/settings/" class="panel-close">
                                            <div class="item-media">
                                                <i class="ti-settings"></i>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title">
                                                    Settings
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sign-in/" class="panel-close">
                                            <div class="item-media">
                                                <i class="ti-shift-right"></i>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title">
                                                    Sign In
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sign-up/" class="panel-close">
                                            <div class="item-media">
                                                <i class="ti-plus"></i>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title">
                                                    Sign Up
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/index/" class="panel-close">
                                            <div class="item-media">
                                                <i class="ti-power-off"></i>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title">
                                                    Logout
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end sidebar -->

                        <!-- slider -->
                        <div class="slider">
                            <div class="container">
                                <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" class="swiper-container swiper-init swiper-container-horizontal">
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="content">
                                                <img src="images/banner1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="content">
                                                <img src="images/banner2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="content">
                                                <img src="images/banner3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end slider -->

                        <!-- categories home -->
                        <div class="categories-home segments">
                            <div class="container">
                                <div class="section-title">
                                    <h3>Categories
                                        <a href="/categories/" class="view-all-link">View All</a>
                                    </h3>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <div class="content">
                                            <a href="/categories-details/">
                                                <i class="ti-crown"></i>
                                                <span>Fashion</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content">
                                            <a href="/categories-details/">
                                                <i class="ti-slice"></i>
                                                <span>Food</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content">
                                            <a href="/categories-details/">
                                                <i class="ti-car"></i>
                                                <span>Automotive</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content">
                                            <a href="/categories-details/">
                                                <i class="ti-camera"></i>
                                                <span>Camera</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <div class="content">
                                            <a href="/categories-details/">
                                                <i class="ti-plug"></i>
                                                <span>Tech</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content">
                                            <a href="/categories-details/">
                                                <i class="ti-basketball"></i>
                                                <span>Sport</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content">
                                            <a href="/categories-details/">
                                                <i class="ti-desktop"></i>
                                                <span>Electronic</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content">
                                            <a href="/categories-details/">
                                                <i class="ti-plus"></i>
                                                <span>Health</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end categories home -->

                        <!-- divider -->
                        <div class="divider"></div>
                        <!-- end divider -->

                        <!-- promotion -->
                        <div class="promotion segments">
                            <div data-space-between="10" data-slides-per-view="auto" class="swiper-container swiper-init demo-swiper-auto">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="first-content">
                                            <h4>Promo</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, voluptates, maxime! Temporibus.</p>
                                            <a href="" class="view-all-link">View All <i class="ti-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <img src="images/product1.jpg" alt="">
                                            <div class="text">
                                                <a href="/product-details/"><p>Original Sweater With 100% Wool Fabric</p></a>
                                                <span class="price">$10.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <img src="images/product2.jpg" alt="">
                                            <div class="text">
                                                <a href="/product-details/"><p>Mountain Shoes - Middle to Low Hiking</p></a>
                                                <span class="price">$15.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <img src="images/product3.jpg" alt="">
                                            <div class="text">
                                                <a href="/product-details/"><p>Casual Dress Shirt Men Long Sleeves</p></a>
                                                <span class="price">$17.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end promotion -->

                        <!-- divider -->
                        <div class="divider"></div>
                        <!-- end divider -->

                        <!-- product -->
                        <div class="product-home segments">
                            <div class="container">
                                <div class="section-title">
                                    <h3>Product
                                        <a href="/product/" class="view-all-link">View All</a>
                                    </h3>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <div class="content">
                                            <img src="images/product4.jpg" alt="">
                                            <div class="text">
                                                <a href="/product-details/"><p>Casual Dress Shirt Men Long Sleeves</p></a>
                                                <span class="price">$30.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="content">
                                            <img src="images/product5.jpg" alt="">
                                            <div class="text">
                                                <a href="/product-details/"><p>Limited Edition Backpacks 1 variant</p></a>
                                                <span class="price">$41.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <div class="content">
                                            <img src="images/product6.jpg" alt="">
                                            <div class="text">
                                                <a href="/product-details/"><p>Jacket Casual For Men or Women</p></a>
                                                <span class="price">$50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="content">
                                            <img src="images/product7.jpg" alt="">
                                            <div class="text">
                                                <a href="/product-details/"><p>Anti-hot Motorcycle Gloves. Import</p></a>
                                                <span class="price">$22.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end product -->
                        

                        <!-- end home -->

                    </div>
                    <div id="tab-2" class="tab">

                        <!-- navbar page -->
                        <div class="navbar navbar-page">
                            <div class="navbar-inner sliding">
                                <div class="title">
                                    Wishlist
                                </div>
                                <div class="right">
                                    <a href="/search/"><i class="ti-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end navbar page -->

                        <!-- wishlist -->
                        <div class="wishlist segments">
                            <div class="container">
                                <div class="wrap-content">
                                    <div class="list">
                                        <ul>
                                            <li class="swipeout">
                                                <div class="item-content swipeout-content">
                                                    <div class="row">
                                                        <div class="col-25">
                                                            <div class="content-image">
                                                                <img src="images/wishlist1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-50">
                                                            <div class="content-text">
                                                                <a href="/product-details/"><p>Anti-hot Motorcycle Gloves. Import</p></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-25">
                                                            <div class="content-info">
                                                                <span class="price">$22.00</span>
                                                                <span class="wishlist-status">Avaible</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swipeout-actions-left">
                                                    <a href="#" @click="showToastBottom"><i class="ti-shopping-cart"></i></a>
                                                </div>
                                                <div class="swipeout-actions-right">
                                                    <a href="#" class="swipeout-delete"><i class="ti-trash"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                

                                <div class="wrap-content">
                                    <div class="list">
                                        <ul>
                                            <li class="swipeout">
                                                <div class="item-content swipeout-content">
                                                    <div class="row">
                                                        <div class="col-25">
                                                            <div class="content-image">
                                                                <img src="images/wishlist2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-50">
                                                            <div class="content-text">
                                                                <a href="/product-details/"><p>Mountain Shoes - Middle to Low Hiking</p></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-25">
                                                            <div class="content-info">
                                                                <span class="price">$44.00</span>
                                                                <span class="wishlist-status">Avaible</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swipeout-actions-left">
                                                    <a href="#" @click="showToastBottom"><i class="ti-shopping-cart"></i></a>
                                                </div>
                                                <div class="swipeout-actions-right">
                                                    <a href="#" class="swipeout-delete"><i class="ti-trash"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="wrap-content">
                                    <div class="list">
                                        <ul>
                                            <li class="swipeout">
                                                <div class="item-content swipeout-content">
                                                    <div class="row">
                                                        <div class="col-25">
                                                            <div class="content-image">
                                                                <img src="images/wishlist3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-50">
                                                            <div class="content-text">
                                                                <a href="/product-details/"><p>Soft Gaming Chair, Strong and Durable</p></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-25">
                                                            <div class="content-info">
                                                                <span class="price">$66.00</span>
                                                                <span class="wishlist-status">Avaible</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swipeout-actions-left">
                                                    <a href="#" @click="showToastBottom"><i class="ti-shopping-cart"></i></a>
                                                </div>
                                                <div class="swipeout-actions-right">
                                                    <a href="#" class="swipeout-delete"><i class="ti-trash"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="wrap-content">
                                    <div class="list">
                                        <ul>
                                            <li class="swipeout">
                                                <div class="item-content swipeout-content">
                                                    <div class="row">
                                                        <div class="col-25">
                                                            <div class="content-image">
                                                                <img src="images/wishlist4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-50">
                                                            <div class="content-text">
                                                                <a href="/product-details/"><p>Limited Edition Backpacks 1 variant</p></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-25">
                                                            <div class="content-info">
                                                                <span class="price">$41.00</span>
                                                                <span class="wishlist-status">Avaible</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swipeout-actions-left">
                                                    <a href="#" @click="showToastBottom"><i class="ti-shopping-cart"></i></a>
                                                </div>
                                                <div class="swipeout-actions-right">
                                                    <a href="#" class="swipeout-delete"><i class="ti-trash"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="wrap-content">
                                    <div class="list">
                                        <ul>
                                            <li class="swipeout no-mb">
                                                <div class="item-content swipeout-content">
                                                    <div class="row">
                                                        <div class="col-25">
                                                            <div class="content-image">
                                                                <img src="images/wishlist5.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-50">
                                                            <div class="content-text">
                                                                <a href="/product-details/"><p>Jacket Casual For Men or Women</p></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-25">
                                                            <div class="content-info">
                                                                <span class="price">$50.00</span>
                                                                <span class="wishlist-status status-sold">Sold</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swipeout-actions-left">
                                                    <a href="#" @click="showToastBottom"><i class="ti-shopping-cart"></i></a>
                                                </div>
                                                <div class="swipeout-actions-right">
                                                    <a href="#" class="swipeout-delete"><i class="ti-trash"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end wishlist -->
                    </div>
                    <div id="tab-3" class="tab">

                        <!-- navbar page -->
                        <div class="navbar navbar-page">
                            <div class="navbar-inner sliding">
                                <div class="title">
                                    Cart
                                </div>
                            </div>
                        </div>
                        <!-- end navbar page -->

                        <!-- cart -->
                        <div class="cart segments">
                            <div class="container">
                                <div class="wrap-content">
                                    <div class="row">
                                        <div class="col-25">
                                            <div class="content-image">
                                                <img src="images/product1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-55">
                                            <div class="content-text">
                                                <a href="/product-details/"><p>Original Sweater With 100% Wool Fabric</p></a>
                                            </div>
                                        </div>
                                        <div class="col-20">
                                            <div class="content-info">
                                                <span class="price">$30.00</span>
                                                <form class="list">
                                                    <div class="item-input-wrap">
                                                        <input type="number" value="1">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>                        
                                    </div>
                                </div>

                                <!-- small divider -->
                                <div class="small-divider"></div>
                                <!-- end  small divider -->

                                <div class="wrap-content">
                                    <div class="row">
                                        <div class="col-25">
                                            <div class="content-image">
                                                <img src="images/product12.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-55">
                                            <div class="content-text">
                                                <a href="/product-details/"><p>Running Watches for Men in a Modern Style</p></a>
                                            </div>
                                        </div>
                                        <div class="col-20">
                                            <div class="content-info">
                                                <span class="price">$60.00</span>
                                                <form class="list">
                                                    <div class="item-input-wrap">
                                                        <input type="number" value="1">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- small divider -->
                                <div class="small-divider"></div>
                                <!-- end  small divider -->

                                <div class="wrap-content">
                                    <div class="row">
                                        <div class="col-25">
                                            <div class="content-image">
                                                <img src="images/product14.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-55">
                                            <div class="content-text">
                                                <a href="/product-details/"><p>Gamepad New Design With Modern Style</p></a>
                                            </div>
                                        </div>
                                        <div class="col-20">
                                            <div class="content-info">
                                                <span class="price">$33.00</span>
                                                <form class="list">
                                                    <div class="item-input-wrap">
                                                        <input type="number" value="1">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- small divider -->
                                <div class="small-divider"></div>
                                <!-- end  small divider -->

                                <div class="wrap-content">
                                    <div class="row">
                                        <div class="col-25">
                                            <div class="content-image">
                                                <img src="images/product4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-55">
                                            <div class="content-text">
                                                <a href="/product-details/"><p>Casual Dress Shirt Men Long Sleeves</p></a>
                                            </div>
                                        </div>
                                        <div class="col-20">
                                            <div class="content-info">
                                                <span class="price">$30.00</span>
                                                <form class="list">
                                                    <div class="item-input-wrap">
                                                        <input type="number" value="1">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- small divider -->
                                <div class="small-divider"></div>
                                <!-- end  small divider -->

                                <div class="wrap-content">
                                    <div class="row">
                                        <div class="col-25">
                                            <div class="content-image">
                                                <img src="images/product5.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-55">
                                            <div class="content-text">
                                                <a href="/product-details/"><p>Limited Edition Backpacks 1 variant</p></a>
                                            </div>
                                        </div>
                                        <div class="col-20">
                                            <div class="content-info">
                                                <span class="price">$41.00</span>
                                                <form class="list">
                                                    <div class="item-input-wrap">
                                                        <input type="number" value="1">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- small divider -->
                                <div class="small-divider"></div>
                                <!-- end  small divider -->

                                <div class="wrap-content">
                                    <div class="row">
                                        <div class="col-25">
                                            <div class="content-image">
                                                <img src="images/product6.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-55">
                                            <div class="content-text">
                                                <a href="/product-details/"><p>Jacket Casual For Men or Women</p></a>
                                            </div>
                                        </div>
                                        <div class="col-20">
                                            <div class="content-info">
                                                <span class="price">$50.00</span>
                                                <form class="list">
                                                    <div class="item-input-wrap">
                                                        <input type="number" value="1">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- small divider -->
                                <div class="small-divider"></div>
                                <!-- end  small divider -->

                                <div class="wrap-action-cart">
                                    <ul>
                                        <li class="content-total">
                                            <h6>Total : <span>$194.00</span></h6>
                                        </li>
                                        <li class="content-button">
                                            <a href="/checkout/" class="button">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end cart -->
                    </div>

                    <div id="tab-4" class="tab">

                        <!-- navbar page -->
                        <div class="navbar navbar-page">
                            <div class="navbar-inner sliding">
                                <div class="title">
                                    Transaction
                                </div>
                                <div class="right">
                                    <a href=""><i class="ti-info-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end navbar page -->

                        <!-- transaction -->
                        <div class="transaction segments">
                            <div class="container">
                                <div class="row">
                                    <div class="col-25">
                                        <div class="content-image">
                                            <img src="images/product1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="content-text">
                                            <a href="/product-details/">
                                                <p>Original Sweater With 100% Wool Fabric</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content-info">
                                            <span class="price">
                                                $30.00
                                            </span>
                                            <span class="transaction-status">COMPLETED</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <div class="content-image">
                                            <img src="images/product2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="content-text">
                                            <a href="/product-details/">
                                                <p>Running Watches for Men in a Modern Style</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content-info">
                                            <span class="price">
                                                $60.00
                                            </span>
                                            <span class="transaction-status">COMPLETED</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <div class="content-image">
                                            <img src="images/product3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="content-text">
                                            <a href="/product-details/">
                                                <p>Gamepad New Design With Modern Style</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content-info">
                                            <span class="price">
                                                $33.00
                                            </span>
                                            <span class="transaction-status">COMPLETED</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <div class="content-image">
                                            <img src="images/product4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="content-text">
                                            <a href="/product-details/">
                                                <p>Casual Dress Shirt Men Long Sleeves</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content-info">
                                            <span class="price">
                                                $30.00
                                            </span>
                                            <span class="transaction-status">COMPLETED</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <div class="content-image">
                                            <img src="images/product5.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="content-text">
                                            <a href="/product-details/">
                                                <p>Limited Edition Backpacks 1 variant</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content-info">
                                            <span class="price">
                                                $41.00
                                            </span>
                                            <span class="transaction-status">COMPLETED</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <div class="content-image">
                                            <img src="images/product6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="content-text">
                                            <a href="/product-details/">
                                                <p>Jacket Casual For Men or Women</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-25">
                                        <div class="content-info">
                                            <span class="price">
                                                $50.00 
                                            </span>
                                            <span class="transaction-status">COMPLETED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end transaction -->
                    </div>

                    <div id="tab-5" class="tab">

                        <!-- navbar page -->
                        <div class="navbar navbar-page">
                            <div class="navbar-inner sliding">
                                <div class="title">
                                    My Account
                                </div>
                                <div class="right">
                                    <a href="/settings/"><i class="ti-settings"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end navbar page -->

                        <!-- account buyer -->
                        <div class="account-buyer segments">
                            <div class="header">
                                <div class="mask"></div>
                                <img src="images/banner2.jpg" alt="">
                                <div class="user-caption">
                                    <img src="images/comment1.png" alt="">
                                    <div class="title-name">
                                        <h5>Robin Smith</h5>
                                        <a href="/edit-profile/">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="info-balance segments">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-50">
                                            <div class="content">
                                                <span>Your Balance</span>
                                                <h5>$120.00</h5>
                                            </div>
                                        </div>
                                        <div class="col-50">
                                            <div class="content">
                                                <button class="button">Top Up</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="account-menu">
                                <div class="list links-list">
                                    <ul>
                                        <li>
                                            <a href="/notification/" class="panel-close">
                                                <div class="item-media">
                                                    <i class="ti-bell"></i>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">
                                                        Notification
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/cart/" class="panel-close">
                                                <div class="item-media">
                                                    <i class="ti-shopping-cart"></i>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">
                                                        My Cart
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/wishlist/" class="panel-close">
                                                <div class="item-media">
                                                    <i class="ti-heart"></i>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">
                                                        My Wishlist
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/transaction/" class="panel-close">
                                                <div class="item-media">
                                                    <i class="ti-control-shuffle"></i>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">
                                                        Transaction
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/settings/" class="panel-close">
                                                <div class="item-media">
                                                    <i class="ti-settings"></i>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">
                                                        Settings
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/about/" class="panel-close">
                                                <div class="item-media">
                                                    <i class="ti-info-alt"></i>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">
                                                        About
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/contact/" class="panel-close">
                                                <div class="item-media">
                                                    <i class="ti-email"></i>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">
                                                        Contact
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/index/" class="panel-close">
                                                <div class="item-media">
                                                    <i class="ti-power-off"></i>
                                                </div>
                                                <div class="item-inner">
                                                    <div class="item-title">
                                                        Logout
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end account buyer -->
                    </div>
                </div>
            </div>
</div>
@endsection
