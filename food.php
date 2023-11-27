<?php
      @include 'links.php';
?>
    <link rel="stylesheet" href="food.css" />
<section id="menu" class="menu" data-bs-target="#d_menu">
      <div class="container" style="padding-bottom: 300px">
      <div class="section-header">
                <h2>Our Menu</h2>
                <p>Check Our <span>Hunger Menu</span></p>
              </div>
        <ul class="nav nav-tabs d-flex justify-content-center">
        <li class="nav-item">
                    <a
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#menu-hunger"
                    >
                      <h4>Hunger</h4>
                    </a>
                  </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="tab"
              data-bs-target="#menu-breakfast"
            >
              <h4>Breakfast</h4>
            </a>
          </li>

          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="tab"
              data-bs-target="#menu-lunch"
            >
              <h4>Lunch</h4>
            </a>
          </li>

          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="tab"
              data-bs-target="#menu-dinner"
            >
              <h4>Dinner</h4>
            </a>
          </li>
        </ul>
        

        <div id="d_menu" class="tab-content">
<div class="tab-pane fade active show" id="menu-hunger">
            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Hunger</h3>
            </div>
<div class="art-board">
               <div class="art-board__container">
                  <div class="card">
                     <div class="card__image">
                        <img src="./img/dal-paratha.png" alt="" />
                     </div>
                     <div class="card__info">
                        <div class="car__info--title">
                           <h3>Dal Paratha</h3>
                           <p>MAsoor Daal with Paratha</p>
                        </div>
                        <div class="card__info--price">
                           <p>20৳</p>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>

                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card__image">
                        <img src="./img/chicken.png" alt="" />
                     </div>
                     <div class="card__info">
                        <div class="car__info--title">
                           <h3>Chicken Curry</h3>
                           <p>Jhaaal Chicken Curry</p>
                        </div>
                        <div class="card__info--price">
                           <p>50৳</p>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>

                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card__image">
                        <img src="./img/varta.png" alt="" />
                     </div>
                     <div class="card__info">
                        <div class="car__info--title">
                           <h3>Varta</h3>
                           <p>Various kinds of Varta</p>
                        </div>
                        <div class="card__info--price">
                           <p>10৳</p>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                    <div class="card__image">
                       <img src="./img/beef.png" alt="" />
                    </div>
                    <div class="card__info">
                       <div class="car__info--title">
                          <h3>Beef Curry</h3>
                          <p>Beef Curry 6 pieces</p>
                       </div>
                       <div class="card__info--price">
                          <p>100৳</p>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                       </div>
                    </div>
                 </div>
                 <div class="card">
                  <div class="card__image">
                     <img src="./img/vaat.png" alt="" />
                  </div>
                  <div class="card__info">
                     <div class="car__info--title">
                        <h3>Vaat</h3>
                        <p>White plain rice</p>
                     </div>
                     <div class="card__info--price">
                        <p>10৳</p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                     </div>
                  </div>
               </div>
               <div class="card">
                <div class="card__image">
                   <img src="./img/dim vuna.png" alt="" />
                </div>
                <div class="card__info">
                   <div class="car__info--title">
                      <h3>Dim Vuna</h3>
                      <p>Egg Curry</p>
                   </div>
                   <div class="card__info--price">
                      <p>10৳</p>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                   </div>
                </div>
             </div>
                </div>
            </div>
            </div>
          <div class="tab-pane fade" id="menu-breakfast">
            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Breakfast</h3>
            </div>

            <div class="row gy-5">
              <div class="col-lg-4 menu-item">
                <a href="./img/sabji-paratha.png" class="glightbox"
                  ><img
                    src="./img/sabji-paratha.png"
                    class="menu-img img-fluid"
                    alt=""
                /></a>
                <h4>Sabji Paratha</h4>
                <p class="ingredients">Vegetabbles and Paratha</p>
                <p class="price">30৳</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="./img/dim-paratha.png" class="glightbox"
                  ><img
                    src="./img/dim-paratha.png"
                    class="menu-img img-fluid"
                    alt=""
                /></a>
                <h4>Dim Paratha</h4>
                <p class="ingredients">Egg omlette paratha</p>
                <p class="price">50৳</p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="./img/dal-paratha.png" class="glightbox"
                  ><img
                    src="./img/dal-paratha.png"
                    class="menu-img img-fluid"
                    alt=""
                /></a>
                <h4>Dal Paratha</h4>
                <p class="ingredients">Dal with Paratha</p>
                <p class="price">30৳</p>
              </div>
            </div>
          </div>
        
        <!-- Lunch -->
        <div class="tab-pane fade" id="menu-lunch">
          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Lunch</h3>
          </div>

          <div class="row gy-5">
            <div class="col-lg-4 menu-item">
              <a href="./img/vaat.png" class="glightbox"
                ><img
                  src="./img/vaat.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>Vaat</h4>
              <p class="ingredients">White plain rice</p>
              <p class="price">10৳</p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="./img/chicken.png" class="glightbox"
                ><img
                  src="./img/chicken.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>Chicken Curry</h4>
              <p class="ingredients">Chicken Jhaal Curry</p>
              <p class="price">50৳</p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="./img/beef.png" class="glightbox"
                ><img
                  src="./img/beef.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>Beef</h4>
              <p class="ingredients">Beef Curry [6 pieces]</p>
              <p class="price">100৳</p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="./img/dim vuna.png" class="glightbox"
                ><img
                  src="./img/dim vuna.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>Dim Bhuna</h4>
              <p class="ingredients">Egg Vhuna with Onion</p>
              <p class="price">30৳</p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="./img/murighanta.png" class="glightbox"
                ><img
                  src="./img/murighanta.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>MuriGhanta</h4>
              <p class="ingredients">Fish Head with Masoor Daal</p>
              <p class="price">30৳</p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="./img/fish.png" class="glightbox"
                ><img
                  src="./img/fish.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>Fish Curry</h4>
              <p class="ingredients">Rui Mach Curry</p>
              <p class="price">40৳</p>
            </div>
          </div>
        </div>
        <!-- Dinner -->
        <div class="tab-pane fade" id="menu-dinner">
          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Dinner</h3>
          </div>

          <div class="row gy-5">
            <div class="col-lg-4 menu-item">
              <a href="./img/khichuri.png" class="glightbox"
                ><img
                  src="./img/khichuri.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>Khichuri</h4>
              <p class="ingredients">Rice and Daal Mixed</p>
              <p class="price">30৳</p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="./img/vaat.png" class="glightbox"
                ><img
                  src="./img/vaat.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>Vaat</h4>
              <p class="ingredients">White plain rice</p>
              <p class="price">10৳</p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="./img/chicken.png" class="glightbox"
                ><img
                  src="./img/chicken.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>Chicken Curry</h4>
              <p class="ingredients">Chicken Jhaal Curry</p>
              <p class="price">50৳</p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="./img/beef.png" class="glightbox"
                ><img
                  src="./img/beef.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>Beef</h4>
              <p class="ingredients">Beef Curry [6 pieces]</p>
              <p class="price">100৳</p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="./img/dim vuna.png" class="glightbox"
                ><img
                  src="./img/dim vuna.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>Dim Bhuna</h4>
              <p class="ingredients">Egg Vhuna with Onion</p>
              <p class="price">30৳</p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="./img/murighanta.png" class="glightbox"
                ><img
                  src="./img/murighanta.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>MuriGhanta</h4>
              <p class="ingredients">Fish Head with Masoor Daal</p>
              <p class="price">30৳</p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="./img/fish.png" class="glightbox"
                ><img
                  src="./img/fish.png"
                  class="menu-img img-fluid"
                  alt=""
              /></a>
              <h4>Fish Curry</h4>
              <p class="ingredients">Rui Mach Curry</p>
              <p class="price">40৳</p>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  <link
      href="./vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="./vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="./vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="./vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="./vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./vendor/aos/aos.js"></script>
    <script src="./vendor/glightbox/js/glightbox.min.js"></script>
    <script src="./vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="./vendor/swiper/swiper-bundle.min.js"></script>


    <script src="dropdown.js"></script>

