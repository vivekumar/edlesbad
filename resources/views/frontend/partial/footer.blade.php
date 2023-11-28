        <!-- Start Footer Area -->
        <footer id="htc__footer">
          <!-- Start Footer Widget -->
          <div class="footer__container bg__cat--1">
            <div class="container">
              <div class="row">
                <!-- Start Single Footer Widget -->
                <div class="col-lg-3 col-md-6">
                  <div class="footer">
                    <!-- <h2 class="title__line--2">ABOUT US</h2> -->
                    <div class="ft__details">
                      <p>Edles Bad GmbH <br>

                        Silostrasse 9 <br>

                        CH-5606 Dintikon / AG</p>
                    </div>
                    <!-- <div class="ft__details">
                                    <p>Edles Bad GmbH is a full-service supplier and offers all the products that make a beautiful bathroom.</p>
                                    <div class="ft__social__link">
                                        <ul class="social__link">
                                            <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                  </div>
                </div>
                <!-- End Single Footer Widget -->

                <!-- Start Single Footer Widget -->
                <div class="col-lg-3 col-md-6 xmt-40 smt-40">
                  <div class="ft__details">
                    <p>
                      T ++41 (0)56 511 23 20 <br>

                      F ++41 (0)56 511 23 21 <br>

                      info@edles-bad.ch
                    </p>
                  </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-lg-3 col-md-6 xmt-40">
                  <div class="footer">
                    <h2 class="title__line--2">information</h2>
                    <div class="ft__inner">
                      <ul class="ft__list">
                        <li><a href="ueber-uns-edlesbad.php">About us</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">Prospekte</a></li>
                        <li><a href="#">Bilder</a></li>
                        <li><a href="blog.php">Blog</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-lg-3 col-md-6 xmt-40 smt-40">
                  <div class="row">
                    <div class="col-12 text-center">
                      <a href="http://www.webwiki.ch/edles-bad.ch" target="_blank">
                        <img src="images/logo/edles-bad-ch-bewertung-round-220.png" width="120" alt="">
                        <br>
                        <br>
                        <p class="main-color"> Hier können Sie uns bewerten. </p>
                      </a>
                    </div>
                    <div class="col-12 mt-4 text-center">
                      <a href="https://www.google.ch/search?rlz=1C1CHBD_deCH780CH780&q=edles+bad&spell=1&sa=X&ved=0ahUKEwip6ZOqgIveAhXGEiwKHb68CVoQBQgoKAA&biw=1787&bih=880" target="_blank">
                        <img src="images/logo/google-rating.jpg" alt="">
                      </a>
                    </div>
                    <!-- <div class="col-6 text-center mt-4">
                                    <img src="images/logo/logo-footer.png" alt="">
                                    <br>
                                    <small>© Edles Bad GmbH 2015</small>
                                    <br>
                                    <small><a class="main-color" href="https://www.firegroup.ch/de/" target="_blank">Onlineshop by firegroup</a></small>
                                </div> -->
                  </div>
                  <img src="" alt="">
                </div>
                <!-- End Single Footer Widget -->
              </div>
            </div>
          </div>
          <!-- End Footer Widget -->
          <!-- Start Copyright Area -->
          <div class="htc__copyright bg__cat--5">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="copyright__inner">
                    <p>Copyright© <a href="index.php">Edles Bad</a> 2023. All right reserved.</p>
                    <p>Powered by : <a href="https://www.infoicontechnologies.com/" target="_blank" title="Infoicon Technologies Pvt Ltd">Infoicon</a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Copyright Area -->
        </footer>
        <!-- End Footer Style -->
        </div>
        <!-- Body main wrapper end -->

        <!-- Placed js at the end of the document so the pages load faster -->


        <script>
          $('.slider').each(function() {
            var $this = $(this);
            var $group = $this.find('.slide_group');
            var $slides = $this.find('.slide');
            var bulletArray = [];
            var currentIndex = 0;
            var timeout;

            function move(newIndex) {
              var animateLeft, slideLeft;

              advance();

              if ($group.is(':animated') || currentIndex === newIndex) {
                return;
              }

              bulletArray[currentIndex].removeClass('active');
              bulletArray[newIndex].addClass('active');

              if (newIndex > currentIndex) {
                slideLeft = '100%';
                animateLeft = '-100%';
              } else {
                slideLeft = '-100%';
                animateLeft = '100%';
              }

              $slides.eq(newIndex).css({
                display: 'block',
                left: slideLeft
              });
              $group.animate({
                left: animateLeft
              }, function() {
                $slides.eq(currentIndex).css({
                  display: 'none'
                });
                $slides.eq(newIndex).css({
                  left: 0
                });
                $group.css({
                  left: 0
                });
                currentIndex = newIndex;
              });
            }

            function advance() {
              clearTimeout(timeout);
              timeout = setTimeout(function() {
                if (currentIndex < ($slides.length - 1)) {
                  move(currentIndex + 1);
                } else {
                  move(0);
                }
              }, 4000);
            }

            $('.next_btn').on('click', function() {
              if (currentIndex < ($slides.length - 1)) {
                move(currentIndex + 1);
              } else {
                move(0);
              }
            });

            $('.previous_btn').on('click', function() {
              if (currentIndex !== 0) {
                move(currentIndex - 1);
              } else {
                move(3);
              }
            });

            $.each($slides, function(index) {
              var $button = $('<a class="slide_btn">&bull;</a>');

              if (index === currentIndex) {
                $button.addClass('active');
              }
              $button.on('click', function() {
                move(index);
              }).appendTo('.slide_buttons');
              bulletArray.push($button);
            });

            advance();
          });
        </script>



        <!-- jquery latest version -->
        <script src="js/vendor/jquery-3.2.1.min.js"></script>
        <!-- Popper js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap framework js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All js plugins included in this file. -->
        <script src="js/plugins.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <!-- Waypoints.min.js. -->
        <script src="js/waypoints.min.js"></script>
        <!-- Main js file that contents all jQuery plugins activation. -->
        <script src="js/main.js"></script>