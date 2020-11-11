<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mdbootstrap.com/previews/ecommerce-demo/examples/pages/basic/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Nov 2020 18:29:28 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Roboto Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&amp;display=swap">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/vendor/fontawesome-free/css/all.min.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../assets/css/mdb-pro.min.css">
  <!-- Material Design Bootstrap Ecommerce -->
  <link rel="stylesheet" href="../assets/css/mdb.ecommerce.min.css">
  <!-- Your custom styles (optional) -->

</head>

<body class="skin-light">

  <!--Main Navigation-->
  <header>
    <div class="jumbotron color-grey-light mt-70">
      <div class="d-flex align-items-center h-100">
        <div class="container text-center py-5">
          <h3 class="mb-0">Shopping cart</h3>
        </div>
      </div>
    </div>

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Block Content-->
      <section class="mt-5 mb-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-8">

            <!-- Card -->
            <div class="card wish-list mb-4">
              <div class="card-body">

                <h5 class="mb-4">Tickets (<span>1</span> item)</h5>

                <div class="row mb-4">
                  <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                      <img class="img-fluid w-100"
                        src="../../../../../img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                      <a href="#!">
                        <div class="mask waves-effect waves-light">
                          <img class="img-fluid w-100"
                            src="../../../../../img/Photos/Horizontal/E-commerce/Vertical/12.jpg">
                          <div class="mask rgba-black-slight waves-effect waves-light"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5>Rilla Party Gh</h5>
                          <p class="mb-3 text-muted text-uppercase small">Datee: 01/01/2021</p>
                          <p class="mb-2 text-muted text-uppercase small">Venue: @the woods</p>
                          <p class="mb-3 text-muted text-uppercase small">7pm till late</p>
                        </div>
                        <div>
                          <div class="def-number-input number-input safari_only mb-0 w-100">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                              class="minus"></button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                              class="plus"></button>
                          </div>
                          <small id="passwordHelpBlock" class="form-text text-muted text-center">
                            (Note, 1 ticket)
                          </small>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                              class="fas fa-trash-alt mr-1"></i> Remove item </a>
                          <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                              class="fas fa-heart mr-1"></i> Move to wish list </a>
                        </div>
                        <p class="mb-0"><span><strong>$17.99</strong></span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
                  items to your cart does not mean booking them.</p>

              </div>
            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">
              <div class="card-body">

                <h5 class="mb-4">Expected shipping delivery</h5>

                <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
              </div>
            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">
              <div class="card-body">

                <h5 class="mb-4">We accept</h5>

                <img class="mr-2" width="45px"
                  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                  alt="Visa">
                <img class="mr-2" width="45px"
                  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                  alt="American Express">
                <img class="mr-2" width="45px"
                  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                  alt="Mastercard">
                <img class="mr-2" width="45px"
                  src="../../../../../../z9t4u9f6.stackpathcdn.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.html"
                  alt="PayPal acceptance mark">
              </div>
            </div>
            <!-- Card -->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4">

            <!-- Card -->
            <div class="card mb-4">
              <div class="card-body">

                <h5 class="mb-3">The total amount of</h5>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    Temporary amount
                    <span>$53.98</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                    Shipping
                    <span>Gratis</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                    <div>
                      <strong>The total amount of</strong>
                      <strong>
                        <p class="mb-0">(including VAT)</p>
                      </strong>
                    </div>
                    <span><strong>$53.98</strong></span>
                  </li>
                </ul>

                <a type="button" href= "/checkout" class="btn btn-primary btn-block waves-effect waves-light">go to
                  checkout</a>

              </div>
            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">
              <div class="card-body">

                <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
                  aria-expanded="false" aria-controls="collapseExample">
                  Add a discount code (optional)
                  <span><i class="fas fa-chevron-down pt-1"></i></span>
                </a>

                <div class="collapse" id="collapseExample">
                  <div class="mt-3">
                    <div class="md-form md-outline mb-0">
                      <input type="text" id="discount-code" class="form-control font-weight-light"
                        placeholder="Enter discount code">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card -->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Block Content-->

    </div>
  </main>
  <!--Main layout-->

  <!-- Footer -->
  <footer class="page-footer font-small elegant-color">

    <div class="color-primary">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left pt-4 pt-md-5">

      <!-- Grid row -->
      <div class="row mt-1 mt-md-0 mb-4 mb-md-0">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

          <!-- Links -->
          <h5>About me</h5>
          <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

          <p class="foot-desc mb-0">Here you can use rows and columns to organize your footer content. Lorem
            ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

          <!-- Links -->
          <h5>Products</h5>
          <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

          <ul class="list-unstyled foot-desc">
            <li class="mb-2">
              <a href="#!">MDBootstrap</a>
            </li>
            <li class="mb-2">
              <a href="#!">MDWordPress</a>
            </li>
            <li class="mb-2">
              <a href="#!">BrandFlow</a>
            </li>
            <li class="mb-2">
              <a href="#!">Bootstrap Angular</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

          <!-- Links -->
          <h5>Useful links</h5>
          <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

          <ul class="list-unstyled foot-desc">
            <li class="mb-2">
              <a href="#!">Your Account</a>
            </li>
            <li class="mb-2">
              <a href="#!">Become an Affiliate</a>
            </li>
            <li class="mb-2">
              <a href="#!">Shipping Rates</a>
            </li>
            <li class="mb-2">
              <a href="#!">Help</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

          <!-- Links -->
          <h5>Contacts</h5>
          <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

          <ul class="fa-ul foot-desc ml-4">
            <li class="mb-2"><span class="fa-li"><i class="far fa-map"></i></span>New York, Avenue Street 10
            </li>
            <li class="mb-2"><span class="fa-li"><i class="fas fa-phone-alt"></i></span>042 876 836 908</li>
            <li class="mb-2"><span class="fa-li"><i class="far fa-envelope"></i></span>company@example.com</li>
            <li><span class="fa-li"><i class="far fa-clock"></i></span>Monday - Friday: 10-17</li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="../../../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <!-- MDB Ecommerce JavaScript -->
    <script type="text/javascript" src="../assets/js/mdb.ecommerce.min.js"></script>
  <script>

  </script>
</body>


<!-- Mirrored from mdbootstrap.com/previews/ecommerce-demo/examples/pages/basic/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Nov 2020 18:29:36 GMT -->
</html>