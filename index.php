<?php include 'template_parts/header.php'; ?>

   

        <main class="main">
            <div class="home-top-container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="home-slider owl-carousel owl-carousel-lazy">
                                <div class="home-slide">
                                    <img class="owl-lazy" src="assets/images/lazy.png" data-src="assets/images/slider/slide-1.jpg" alt="slider image">
                                    <div class="home-slide-content">
                                        <h1>up to 40% off</h1>
                                        <h3>woman clothing</h3>
                                        <a href="category.php" class="btn btn-primary">Shop Now</a>
                                    </div><!-- End .home-slide-content -->
                                </div><!-- End .home-slide -->

                                <div class="home-slide">
                                    <img class="owl-lazy" src="assets/images/lazy.png" data-src="assets/images/slider/slide-2.jpg" alt="slider image">
                                    <div class="home-slide-content">
                                        <h1>up to 50% off</h1>
                                        <h3>New collection</h3>
                                        <a href="category.php" class="btn btn-secondary">Shop Now</a>
                                    </div><!-- End .home-slide-content -->
                                </div><!-- End .home-slide -->
                            </div><!-- End .home-slider -->
                        </div><!-- End .col-lg-8 -->

                        <div class="col-lg-4 top-banners">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="assets/images/banners/banner-1.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="assets/images/banners/banner-2.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="assets/images/banners/banner-3.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .home-top-container -->

            <div class="info-boxes-container">
                <div class="container">
                    <div class="info-box">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4>FREE SHIPPING & RETURN</h4>
                            <p>Free shipping on all orders over $99.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-us-dollar"></i>

                        <div class="info-box-content">
                            <h4>MONEY BACK GUARANTEE</h4>
                            <p>100% money back guarantee</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>ONLINE SUPPORT 24/7</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div><!-- End .container -->
            </div><!-- End .info-boxes-container -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="home-product-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="featured-products-tab" data-toggle="tab" href="#featured-products" role="tab" aria-controls="featured-products" aria-selected="true">Featured Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="latest-products-tab" data-toggle="tab" href="#latest-products" role="tab" aria-controls="latest-products" aria-selected="false">Latest Products</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="featured-products" role="tabpanel" aria-labelledby="featured-products-tab">
                                    <div class="row row-sm">
                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-1.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Baseball Cap</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$28.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>

                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->
                                        
                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-2.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                    <span class="product-label label-sale">-20%</span>
                                                    <span class="product-label label-hot">New</span>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Dress Shoes</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="old-price">$60.00</span>
                                                        <span class="product-price">$48.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        
                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-3.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Leather Belt</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$850.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        
                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-4.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Ratchet Belt</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        
                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-9.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                    <span class="product-label label-sale">-20%</span>
                                                    <span class="product-label label-hot">New</span>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Boots</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="old-price">$60.00</span>
                                                        <span class="product-price">$48.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        
                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-8.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Laptop</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$850.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        
                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .tab-pane -->
                                <div class="tab-pane fade" id="latest-products" role="tabpanel" aria-labelledby="latest-products-tab">
                                    <div class="row row-sm">
                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-5.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Shoes</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$28.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>

                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->
                                        
                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-6.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                    <span class="product-label label-sale">-20%</span>
                                                    <span class="product-label label-hot">New</span>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Training Shoes</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="old-price">$60.00</span>
                                                        <span class="product-price">$48.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        
                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-7.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Sports Shoes</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$850.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        
                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-4.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Ratchet Belt</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        
                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-2.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                    <span class="product-label label-sale">-20%</span>
                                                    <span class="product-label label-hot">New</span>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Dress Shoes</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="old-price">$60.00</span>
                                                        <span class="product-price">$48.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        
                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-3.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.php">Leather Belt</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$850.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        
                                                        <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .home-product-tabs -->

                        <div class="banners-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="assets/images/banners/banner-4.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner -->

                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="assets/images/banners/banner-5.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-4 -->

                                <div class="col-md-8">
                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="assets/images/banners/banner-6.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .banners-group -->
                    </div><!-- End .col-lg-9 -->

                    <aside class="sidebar-home col-lg-3">
                        <div class="widget widget-cats">
                            <h3 class="widget-title">Categories</h3>
                            
                            <ul class="catAccordion">
                                <li>
                                    <a href="category.php">Fashion</a> 
                                    <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-1" aria-expanded="false" aria-controls="accordion-ul-1"></button>

                                    <ul class="collapse" id="accordion-ul-1">
                                        <li><a href="#">WOMEN CLOTHES</a></li>
                                        <li><a href="#">MEN CLOTHES</a></li>
                                        <li><a href="#">HOES</a></li>
                                        <li><a href="#">Accessories</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="category.php">Electronics </a>
                                    <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-2" aria-expanded="false" aria-controls="accordion-ul-2"></button>

                                    <ul class="collapse" id="accordion-ul-2">
                                        <li><a href="#">Computers</a></li>
                                        <li><a href="#">Mobile Phones</a></li>
                                        <li><a href="#">Laptops</a></li>
                                        <li><a href="#">Tablets</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="category.php">Gifts</a>
                                </li>
                                <li>
                                    <a href="category.php">Home & Garden</a>
                                </li>
                                <li>
                                    <a href="category.php">Music</a>
                                </li>
                                <li>
                                    <a href="category.php">Motors</a>
                                    <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-3" aria-expanded="false" aria-controls="accordion-ul-3"></button>

                                    <ul class="collapse" id="accordion-ul-3">
                                        <li><a href="#">Sub Category</a></li>
                                        <li><a href="#">Sub Category</a></li>
                                        <li><a href="#">Sub Category</a></li>
                                        <li><a href="#">Sub Category</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="category.php">Clothes</a>
                                    <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-4" aria-expanded="false" aria-controls="accordion-ul-4"></button>

                                    <ul class="collapse" id="accordion-ul-4">
                                        <li><a href="#">Sub Category</a></li>
                                        <li><a href="#">Sub Category</a></li>
                                        <li><a href="#">Sub Category</a></li>
                                        <li><a href="#">Sub Category</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="assets/images/banners/banner-sidebar-2.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .widget -->

                        <div class="widget">
                            <h3 class="widget-title">From Our Blog</h3>

                            <article class="entry">
                                <div class="entry-media">
                                    <a href="single.php">
                                        <img src="assets/images/blog/sidebar-post-1.jpg" alt="Post">
                                    </a>
                                    <div class="entry-date">
                                        10
                                        <span>Dec</span>
                                    </div><!-- End .entry-date -->
                                </div><!-- End .entry-media -->

                                <div class="entry-body">

                                    <h2 class="entry-title">
                                        <a href="single.php">Fashion News</a>
                                    </h2>

                                    <div class="entry-content">
                                        <p>Lorem Ipsum is simply dummy of the printing and typese ind. Lorem ipsum...</p>

                                        <a href="single.php" class="read-more">(READ MORE)</a>
                                    </div><!-- End .entry-content -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .widget -->

                        <div class="widget widget-block">
                            <h3 class="widget-title">CUSTOM HTML BLOCK</h3>

                            <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has beenindustry.</p>
                        </div><!-- End .widget -->
                    </aside><!-- End .col-lg-3 -->    
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-4"></div><!-- margin -->

            <div class="partners-container">
                <div class="container">
                    <div class="partners-carousel owl-carousel owl-theme">
                        <a href="#" class="partner">
                            <img src="assets/images/logos/1.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/2.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/3.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/4.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/5.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/2.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/1.png" alt="logo">
                        </a>
                    </div><!-- End .partners-carousel -->
                </div><!-- End .container -->
            </div><!-- End .partners-container -->
        </main><!-- End .main -->

<?php include 'template_parts/footer.php'; ?>