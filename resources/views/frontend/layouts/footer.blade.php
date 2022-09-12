    <!-- Footer Start -->
    <section class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><img src="{{url('frontend/img/logo.png')}}" class="p-2" width="70"
                                height="80" alt="logo">ramlaxman
                            group</h1>
                    </a>
                    <p class="m-0">With 18 years of experience, Ramlaxman Innovations offers automation services.
                        Through a variety of goods, we assist both domestic and foreign consumers in Nepal.</p>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="text-white mb-4">Newsletter</h3>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;"
                                placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Neel Saraswati Marga, Lazimpat, Kathmandu</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>014416900</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@ramlaxmangroup.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Our Services</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web Development</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Apps
                            Development</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Artificial
                            Intelligence</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Graphics & Creative
                            Design</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Logo Design</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Id and vCard
                            Design</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms &
                            Condition</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Regular FAQs</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help & Support</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid bg-dark text-white-50 border-top py-4"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">Ramlaxman Innovations</a>. All Rights
                        Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white" href="https://htmlcodex.com">Development Department
                            RL Group</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-pill btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>



                <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="{{url('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontend/js/activeMenu.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('frontend/js/main.js')}}"></script>
    <script>
        $(document).ready(function () {
            // Gets the video src from the data-src on each button
            var $videoSrc;
            $('.video-btn').click(function () {
                $videoSrc = $(this).data("src");
            });
            console.log($videoSrc);
            // when the modal is opened autoplay it  
            $('#myModal').on('shown.bs.modal', function (e) {
                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
                $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
            })
            // stop playing the youtube video when I close the modal
            $('#myModal').on('hide.bs.modal', function (e) {
                // a poor man's stop video
                $("#video").attr('src', $videoSrc);
            })
            // document ready  
        });
    </script>
</body>

</html>