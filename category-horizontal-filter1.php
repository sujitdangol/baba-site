<?php include 'template_parts/header.php'; ?>

        <main class="main">
            <div class="banner banner-cat" style="background-image: url('assets/images/banners/banner-top.jpg');">
                <div class="banner-content container">
                    <h2 class="banner-subtitle">check out over <span>200+</span></h2>
                    <h1 class="banner-title">
                        INCREDIBLE deals
                    </h1>
                    <a href="#" class="btn btn-primary">Shop Now</a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
            
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Men</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <nav class="toolbox horizontal-filter">
                    <div class="toolbox-left">
                        <div class="filter-toggle">
                            <span>Filters:</span>
                            <a href=#>&nbsp;</a>
                        </div>
                    </div><!-- End .toolbox-left -->

                    <div class="toolbox-item toolbox-sort">
                        <div class="select-custom">
                            <select name="orderby" class="form-control">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div><!-- End .select-custom -->

                        <a href="#" class="sorter-btn" title="Set Ascending Direction"><span class="sr-only">Set Ascending Direction</span></a>
                    </div><!-- End .toolbox-item -->

                    <div class="toolbox-item">
                        <div class="toolbox-item toolbox-show">
                            <label>Showing 1–9 of 60 results</label>
                        </div><!-- End .toolbox-item -->

                        <div class="layout-modes">
                            <a href="category.php" class="layout-btn btn-grid active" title="Grid">
                                <i class="icon-mode-grid"></i>
                            </a>
                            <a href="category-list.php" class="layout-btn btn-list" title="List">
                                <i class="icon-mode-list"></i>
                            </a>
                        </div><!-- End .layout-modes -->
                    <div class="toolbox-item">
                </nav>

                <div class="row products-body">
                    <div class="col-lg-9 main-content">
                        <div class="row row-sm">
                            <div class="col-6 col-md-4 col-xl-3">
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
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
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
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
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
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
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
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
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
                                                <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.php">Shoes</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$79.00</span>
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
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="assets/images/products/product-6.jpg" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                        <span class="product-label label-hot">Hot</span>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.php">Training Shoes</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$19.00</span>
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
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="assets/images/products/product-7.jpg" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                        <span class="product-label label-hot">Hot</span>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.php">Sports Shoes</a>
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
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
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
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.php">Hat</a>
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
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="assets/images/products/product-9.jpg" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:70%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.php">Boots</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$59.00</span>
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
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="assets/images/products/product-10.jpg" alt="product">
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
                                            <a href="product.php">Running Shoes</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$63.00</span>
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
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="assets/images/products/product-11.jpg" alt="product">
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
                                            <a href="product.php">Scarf</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$13.99</span>
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
                            </div><!-- End .col-xl-3 -->

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="assets/images/products/product-12.jpg" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                        <span class="product-label label-hot">Hot</span>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.php">Bag</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$4.99</span>
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
                            </div><!-- End .col-xl-3 -->
                        </div><!-- End .row -->

                        <nav class="toolbox toolbox-pagination">
                            <div class="toolbox-item toolbox-show">
                                <label>Showing 1–9 of 60 results</label>
                            </div><!-- End .toolbox-item -->

                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><span>...</span></li>
                                <li class="page-item"><a class="page-link" href="#">15</a></li>
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Men</a>
                                </h3>

                                <div class="collapse show" id="widget-body-2">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Watch Fashion</a></li>
                                            <li><a href="#">Tees, Knits & Polos</a></li>
                                            <li><a href="#">Pants & Denim</a></li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
                                </h3>

                                <div class="collapse show" id="widget-body-3">
                                    <div class="widget-body">
                                        <form action="#">
                                            <div class="price-slider-wrapper">
                                                <div id="price-slider"></div><!-- End #price-slider -->
                                            </div><!-- End .price-slider-wrapper -->

                                            <div class="filter-price-action">
                                                <button type="submit" class="btn btn-primary">Filter</button>

                                                <div class="filter-price-text">
                                                    Price:
                                                    <span id="filter-price-range"></span>
                                                </div><!-- End .filter-price-text -->
                                            </div><!-- End .filter-price-action -->
                                        </form>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Size</a>
                                </h3>

                                <div class="collapse show" id="widget-body-4">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li><a href="#">Small</a></li>
                                            <li><a href="#">Medium</a></li>
                                            <li><a href="#">Large</a></li>
                                            <li><a href="#">Extra Large</a></li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Brand</a>
                                </h3>

                                <div class="collapse show" id="widget-body-5">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li><a href="#">Adidas</a></li>
                                            <li><a href="#">Calvin Klein (26)</a></li>
                                            <li><a href="#">Diesel (3)</a></li>
                                            <li><a href="#">Lacoste (8)</a></li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true" aria-controls="widget-body-6">Color</a>
                                </h3>

                                <div class="collapse show" id="widget-body-6">
                                    <div class="widget-body">
                                        <ul class="config-swatch-list">
                                            <li class="active">
                                                <a href="#">
                                                    <span class="color-panel" style="background-color: #1645f3;"></span>
                                                    <span>Blue</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="color-panel" style="background-color: #f11010;"></span>
                                                    <span>Red</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="color-panel" style="background-color: #fe8504;"></span>
                                                    <span>Orange</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="color-panel" style="background-color: #2da819;"></span>
                                                    <span>Green</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar-wrapper -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
        </main><!-- End .main -->

       <?php include 'template_parts/footer.php'; ?>