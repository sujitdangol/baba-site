<?php include 'template_parts/header.php'; ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </div><!-- End .container -->
                
            </nav><div class="page-header">
                <div class="container">
                    <h1>Contact Us</h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->

            <div class="container">
                <div id="map"></div><!-- End #map -->

                <div class="row">
                    <div class="col-md-8">
                        <h2 class="light-title">Write <strong>Us</strong></h2>

                        <form action="#">
                            <div class="form-group required-field">
                                <label for="contact-name">Name</label>
                                <input type="text" class="form-control" id="contact-name" name="contact-name" required>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="contact-email">Email</label>
                                <input type="email" class="form-control" id="contact-email" name="contact-email" required>
                            </div><!-- End .form-group -->

                            <div class="form-group">
                                <label for="contact-phone">Phone Number</label>
                                <input type="tel" class="form-control" id="contact-phone" name="contact-phone">
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="contact-message">What’s on your mind?</label>
                                <textarea cols="30" rows="1" id="contact-message" class="form-control" name="contact-message" required></textarea>
                            </div><!-- End .form-group -->

                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div><!-- End .form-footer -->
                        </form>
                    </div><!-- End .col-md-8 -->

                    <div class="col-md-4">
                        <h2 class="light-title">Contact <strong>Details</strong></h2>

                        <div class="contact-info">
                            <div>
                                <i class="icon-phone"></i>
                                <p><a href="tel:">0201 203 2032</a></p>
                                <p><a href="tel:">0201 203 2032</a></p>
                            </div>
                            <div>
                                <i class="icon-mobile"></i>
                                <p><a href="tel:">201-123-3922</a></p>
                                <p><a href="tel:">302-123-3928</a></p>
                            </div>
                            <div>
                                <i class="icon-mail-alt"></i>
                                <p><a href="mailto:#">porto@gmail.com</a></p>
                                <p><a href="mailto:#">porto@portotemplate.com</a></p>
                            </div>
                            <div>
                                <i class="icon-skype"></i>
                                <p>porto_skype</p>
                                <p>porto_template</p>
                            </div>
                        </div><!-- End .contact-info -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-8"></div><!-- margin -->
        </main><!-- End .main -->

        <?php include 'template_parts/footer.php'; ?>