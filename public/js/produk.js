$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    var alamat_produk = '/api/produk'


    $.ajax({
        url: alamat_produk,
        method: "GET",
        dataType: "json",
        
        success: function (berhasil) {
            console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                
                $("#isinya").append(
                    `
                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="/assets/img/produk/${value.foto}" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">${value.harga}</h4>
                            <p>${value.nama_produk}</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                        </div>
                    </div>
                    
                    `               
                );
                
            });
        }
    });


    
    $.ajax({
        url: alamat_produk,
        method: "GET",
        dataType: "json",
        
        success: function (berhasil) {
            console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                
                $("#testimoni").append(
                    `
                    <div class="col-12">
                    <div class="section_heading text-center">
                        <h2>Testimonials</h2>
                    </div>
                    <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="karl-testimonials-slides owl-carousel">

                       
                        <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="{{ asset('assets/karl/img/bg-img/tes-2.jpg')}}" alt="">
                                </div>
                                <div class="testi-data">
                                    <p>maya maysaroh</p>
                                </div>
                            </div>
                        </div>

                        
                        <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="{{ asset('assets/karl/img/bg-img/tes-3.jpg')}}" alt="">
                                </div>
                                <div class="testi-data">
                                    <p>maitsa pramudita</p>
                                </div>
                            </div>
                        </div>

                                                   <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="{{ asset('assets/karl/img/bg-img/tes-3.jpg')}}" alt="">
                                </div>
                                <div class="testi-data">
                                    <p>sinta</p>
                                </div>
                            </div>
                        </div>

                </div>
            </div>

            
                `               
                );
                
            });
        }
    });


    
    $.ajax({
        url: alamat_produk,
        method: "GET",
        dataType: "json",
        
        success: function (berhasil) {
            console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                
                $("#footer").append(
                    `
                    
                    <footer class="footer_area">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="single_footer_area">
                                    <div class="footer-logo">
                                        <img src="{{ asset('assets/karl/img/core-img/irma.png')}}" alt="">
                                    </div>
                                    <div class="copywrite_text d-flex align-items-center">
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                                <div class="single_footer_area">
                                    <ul class="footer_widget_menu">
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Faq</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                                <div class="single_footer_area">
                                    <ul class="footer_widget_menu">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Our Policies</a></li>
                                        <li><a href="#">Afiliates</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-12 col-lg-5">
                                <div class="single_footer_area">
                                    <div class="footer_heading mb-30">
                                        <h6>Subscribe to our newsletter</h6>
                                    </div>
                                    <div class="subscribtion_form">
                                        <form action="#" method="post">
                                            <input type="email" name="mail" class="mail" placeholder="Your email here">
                                            <button type="submit" class="submit">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="footer_bottom_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="footer_social_area text-center">
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                    
                    `               
                );
                
            });
        }
    });


});