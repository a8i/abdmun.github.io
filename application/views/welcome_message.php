<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pernikahan Abdul & Ika</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Abdul & Ika Menikah Website">
    <meta name="author" content="Goalabs">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url().'assets/'?>images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url().'assets/'?>images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url().'assets/'?>images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=base_url().'assets/'?>images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?=base_url().'assets/'?>images/favicon/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!--load google/external fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Roboto+Slab:300,400" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- main style --> 
    <link rel="stylesheet" href="<?=base_url().'assets/'?>styles/main.css">
    <link rel="stylesheet" href="<?=base_url().'assets/'?>styles/lity.css">
    <link rel="stylesheet" href="<?=base_url().'assets/'?>styles/responsive.css">
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="<?=base_url();?>" />
    <meta property="og:image" itemprop="image" content="<?=base_url().'assets/'?>images/favicon/apple-touch-icon.png" />
  </head>
  <body>
    <h1 class="show-for-sr">Abdul & Ika Wedding Party Invitational</h1>
    <!-- sticky navbar -->
    <div data-sticky-container>
      <div class="title-bar ">
        <button class="hamburger hamburger--arrow align-right" type="button" data-toggle="offCanvas">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>

    <!-- end sticky navbar -->
    <!-- wrapping all content including off-canvas -->
    <div class="off-canvas-wrapper">
      <div class="off-canvas position-right" id="offCanvas" data-off-canvas data-close-on-click="false" data-content-scroll="false">
        <ul class="vertical menu text-center">
          <li><a href="#top">ABDUL & IKA</a></li>
          <li><a href="#the-couple">KEDUA MEMPELAI</a></li>
          <li><a href="#the-stories">THE STORIES</a></li>
          <li><a href="#timer">COUNTDOWN</a></li>
          <li><a href="#events">ACARA</a></li>
          <li><a href="#rsvp-form">UNDANGAN</a></li>
          <li><a href="#people">GALLERY</a></li>
          <li><a href="#gallery">VIDEOS</a></li>
          <li><a href="#gifts">TERIMAKASIH</a></li>
        </ul>
      </div><!-- end of off-canvas -->
      <!-- start wrapping main content -->
      <div class="off-canvas-content" data-off-canvas-content>
        <!-- welcome screen -->
        <section id="top" class="row expanded welcome-screen" style="background-image:url(<?=base_url().'assets/'?>images/welcome-screen/IMG_9136.jpg);" data-top-top="transform:translateY(-20px)" data-top-bottom="transform:translateY(320px)"><!-- change background-image with yours -->
          <div class="column">
            <div class="welcome-text">
              <div class="headline">We're Getting Maried</div>
              <div class="center-names">
                  <h2 class="show-for-sr">Abdul & Ika are getting married</h2>
                  <div class="center"><div class="left">Abdul</div>&<div class="right">Ika</div></div>
              </div>
              <div class="footline">25 / AGUSTUS / 2018</div>
            </div>
          </div>
        </section>
        <!-- end welcome screen -->
        <!-- section with custom paralax divider -->
        <section id="the-couple" class="row expanded couple custom-paralax pinetrees-cloudy">
          <div class="wrapper"></div>
          <div class="body">
            <h2 class="text-center main-heading">Kedua Mempelai</h2>
            <h5 class="text-center">Akhirnya hari itupun datang sesuai dengan waktu yang telah ditentukan.</h5>
            <div class="row picture-frame">
              <div class="people1">
                <div class="thumbnail thumbnail-line thumbnail-circle thumbnail-xs"><img alt="Abdul" src="<?=base_url().'assets/'?>images/content/people1.jpg"></div>
                <h5>kamu adalah wanita yang ingin selalu aku bahagiakan</h5>
                <a href="https://www.instagram.com/abd_mun/"><i class="fa fa-instagram"></i> abd_mun</a>
              </div><!-- end of bride 1 -->
              <div class="frame-wrapper">
                <div class="frame">
                  <img alt="Abdul & Ika" src="<?=base_url().'assets/'?>images/content/IMG_9343.JPG">
                </div>
              </div><!-- end frame couple wedding/prewedding shoot -->
              <div class="people2">
                <div class="thumbnail thumbnail-line thumbnail-circle thumbnail-xs"><img alt="Ika" src="<?=base_url().'assets/'?>images/content/people2.jpg"></div>
                <h5>Darimu aku belajar arti ketulusan tanpa pernah mendapat balasan rasa yang seimbang..</h5>
                <a href="https://www.instagram.com/ika.dewi16/"><i class="fa fa-instagram"></i> ika.dewi16</a>
              </div><!-- end of bride 2 -->
            </div>
          </div>
        </section>
        <!-- end section with custom paralax divider -->
        <!-- divider image carousel -->
        <section class="row expanded carousel-container">
          <h2 class="show-for-sr">Prewedding shot Abdul & Ika</h2>
          <div class="carousel-5">
            <div class="item">
              <img alt="" src="<?=base_url().'assets/'?>images/content/t1.JPG">
            </div>
            <div class="item">
              <img alt="" src="<?=base_url().'assets/'?>images/content/t2.JPG">
            </div>
            <div class="item">
              <img alt="" src="<?=base_url().'assets/'?>images/content/t3.JPG">
            </div>
            <div class="item">
              <img alt="" src="<?=base_url().'assets/'?>images/content/t4.JPG">
            </div>
            <div class="item">
              <img alt="" src="<?=base_url().'assets/'?>images/content/t5.JPG">
            </div>
            <div class="item">
              <img alt="" src="<?=base_url().'assets/'?>images/content/t6.JPG">
            </div>
            <div class="item">
              <img alt="" src="<?=base_url().'assets/'?>images/content/t7.JPG">
            </div>
          </div>
        </section>
        <!-- end divider image carouesel -->
        <!-- timeline/story -->
        <section id="the-stories" class="row timeline expanded natural-white-texture">
          <div class="column">
            <div class="timeline-wrapper">
              <h2 class="text-center main-heading">The Stories</h2>
              
              <h5 class="text-center">present...</h5>
              <ul class="story wobbly">
                <li><!-- event 1 -->
                  <div class="column">
                    <span class="date">25 Agustus 2018</span>
                    <h3>Menikah</h3>
                    <p>dan hari bahagia itupun datang..<a class="button hollow secondary" href="#rsvp-form">RSVP!</a></p>
                  </div> 
                  <div class="column image"><div class="thumbnail thumbnail-xl thumbnail-circle thumbnail-line"><img alt="" src="<?=base_url().'assets/'?>images/content/menikah.jpeg"></div></div>
                </li><!-- end of event 1 -->
                <li><!-- event 2 -->
                  <div class="column">
                    <span class="date">1 April 2018</span>
                    <h3>Tunangan</h3>
                    <p>Kami serius, dan ini adalah bukti dari keseriusan kami.</p>
                  </div>
                  <div class="column image"><div class="thumbnail thumbnail-xl thumbnail-circle thumbnail-line"><img alt="" src="<?=base_url().'assets/'?>images/content/tunangan1.jpeg"></div></div>
                </li><!-- end of event 2 -->
                <li><!-- event 3 -->
                  <div class="column">
                    <span class="date">1 oktober 2017</span>
                    <h3>Ketemu</h3>
                    <p>Setelah sekelian lama gak saling kontak, kamipun dipertemukan di satu momen, satu waktu yang menentukan..</p>
                  </div>
                  <div class="column image"><div class="thumbnail thumbnail-xl thumbnail-circle thumbnail-line"><img alt="" src="<?=base_url().'assets/'?>images/content/IMG_0261.JPG"></div></div>
                </li><!-- end of event 3 -->
              </ul>
              <h5 class="text-center">...old story</h5>
            </div>
            <!-- end of timeline/story paralax wraping in desktop/tablet -->
          </div>
        </section>
        <!-- end timeline/story -->
        <!-- time counter -->
        <section id="timer" class="row expanded time-countdown" style="background-image:url(images/content/t8.JPG);"><!-- change background url -->
          <div class="bg-overlay bg-overlay-heart bg-overlay-dark animated wobble_bg"></div>
          <div class="column text-center">
            <div class="row">
              <h2>Kami harap kamu bisa hadir</h2>
            </div>
            <div class="row counter" id="getting-started" data-end-date="2018/08/25"></div>
            <div class="row"><a class="button standout" href="#rsvp-form">Undangan</a></div>
          </div>
          <!-- need js to handling this, go to bottom of this file to change end-date event -->
        </section>
        <!-- end time counter -->
        <!-- Blogpost -->
        <section id="events" class="row blog-container">
          <div class="column body">
            <h2 class="text-center main-heading">Acara</h2>
            <h5 class="quote text-center">Merupakan suatu kebahagian bagi kami jika kamu bisa datang di hari bahagia ini...</h5>
            <div class="blog">
              <!-- eachpost 1 start -->
              <div class="each-post">
                <div class="thumbnail thumbnail-xxl"><img alt="" src="<?=base_url().'assets/'?>images/content/tunangan.jpeg"></div>
                <div class="content">
                  <h3>Akad Nikah</h3>
                  <div class="meta-post">
                    <span class="location">
                      Dusun Krajan RT/RW 001/002,<br> 
                      Ds. Pasirkamuning,<br> 
                      Kec. Talagasari, Kab. Karawang, Jawa Barat</span>
                    <span class="date-time">8:30 AM - 11:00 AM WIB, 25 Agustus 2018</span>
                  </div>
                  <!-- <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p> -->
                </div>
              </div>
              <!-- end eachpost 1 start -->
              <!-- eachpost 2 start -->
              <div class="each-post">
                <div class="thumbnail thumbnail-xxl"><img alt="" src="<?=base_url().'assets/'?>images/content/24-square.jpg"></div>
                <div class="content">
                  <h3>Resepsi</h3>
                  <div class="meta-post">
                    <span class="location">
                      Dusun Krajan RT/RW 001/002,<br> 
                      Ds. Pasirkamuning,<br> 
                      Kec. Talagasari, Kab. Karawang, Jawa Barat</span>
                    <span class="date-time">11:00 AM - Selesai, 25 Agustus 2018</span>
                  </div>
                  <!-- <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p> -->
                </div>
              </div>
              <!-- end eachpost 2 start -->
            </div>
          </div>
        </section>
        <!-- end Blogpost -->

        <!-- FORM RSVP -->
        <section id="rsvp-form" class="special-form">
          <div class="bg-overlay bg-overlay-ellipse"><div class="ellipse-line"></div></div>
          <div class="column">
            <div class="title">
              <h2>UNDANGAN</h2>
              <h5>Silahkan masukan Email dan no HP supaya kami bisa mengirim undangan.</h5>  
            </div>
            <!-- // START FORM // -->
            <form id="submit-rsvp" data-abide novalidate><!-- add parameter to form if necessary -->
              <div class="greetings">
                <div class="message">
                  <h3 class="quote">
                    Dont be late! see ya  
                  </h3>  
                </div>
              </div>
              <div class="row">
                <div class="column small-12 medium-4">
                  <label>
                    <input type="text" name="name" placeholder="Nama" required>
                    <span class="form-error">
                      Silahkan masukan Nama Anda
                    </span>
                  </label>
                </div>  
                <div class="column small-12 medium-4">
                  <label>
                    <input type="text" name="phone" placeholder="No HP" pattern="number" required>
                    <span class="form-error">
                      Silahkan masukan no telepon anda
                    </span>
                  </label>
                </div>  
                <div class="column small-12 medium-4">
                  <label>
                    <input type="email" name="email" placeholder="Alamat Email" pattern="email" required>
                    <span class="form-error">
                      Silahkan masukan email anda
                    </span>
                  </label>
                </div>  
              </div>
              <div class="row text-center">
                <div class="column"><button type="submit">SUBMIT</button></div>
              </div>
            </form>
            <!-- // END of FORM // -->

          </div>
        </section>
        <!-- end FORM RSVP -->
        
        <!-- people gallery -->
        <section id="people" class="row asanoha behind expanded">
          <div class="column body">
            <h2 class="text-center main-heading">Gallery</h2>
            <h5 class="text-center">Ini adalah beberapa potret kebahagiaan yang kami rasakan..</h5>
            <!-- carousel family -->
            <div class="row carousel-container">
              <h4 class="text-center">White</h4>
              <div class="carousel-5">
                <div class="item">
                  <!-- item 1 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/w4-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                      White 1
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-love"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 1 -->
                <div class="item">
                  <!-- item 2 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/w6-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       White 2
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 2 -->
                <div class="item">
                  <!-- item 3 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/w3-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       White 3
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 3 -->
                <div class="item">
                  <!-- item 4 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/w1-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       White 4
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 4 -->
                <div class="item">
                  <!-- item 5 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/w5-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       White 5
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 5 -->
                <div class="item">
                  <!-- item 5 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/w2-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                      White 6
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 5 -->
              </div>
            </div>
            <!-- end carousel family -->
            <!-- carousel Groomsmen -->
            <div class="row carousel-container">
              <h4 class="text-center">Brown</h4>
              <div class="carousel-5">
                <div class="item">
                  <!-- item 1 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/br1-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                      Brown 1
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 1 -->
                <div class="item">
                  <!-- item 2 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/br2-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       Brown 2
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 2 -->
                <div class="item">
                  <!-- item 3 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/br3-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       Brown 3
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 3 -->
                <div class="item">
                  <!-- item 4 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/br4-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       Brown 4
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 4 -->
                <div class="item">
                  <!-- item 5 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/br5-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       Brown 5
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 5 -->
                <div class="item">
                  <!-- item 5 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/br6-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       Brown 6
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 5 -->
              </div>
            </div>
            <!-- end carousel Groomsmen -->
            <!-- carousel Bridesmaids -->
            <div class="row carousel-container">
              <h4 class="text-center">Black</h4>
              <div class="carousel-5">
                <div class="item">
                  <!-- item 1 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/b2-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       Black 1
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 1 -->
                <div class="item">
                  <!-- item 2 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/b1-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       Black 2
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 2 -->
                <div class="item">
                  <!-- item 2 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/b6-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       Black 3
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 2 -->
                <div class="item">
                  <!-- item 3 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/b3-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       Black 4
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 3 -->
                <div class="item">
                  <!-- item 4 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/b4-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       Black 5
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 4 -->
                <div class="item">
                  <!-- item 5 -->
                  <img alt="" src="<?=base_url().'assets/'?>images/content/b5-sq.jpg">
                  <div class="hover-item">
                    <div class="desc">
                       Black 6
                      <span class="social-media">
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- END - item 5 -->
              </div>
            </div>
            <!-- end carousel Bridesmaids -->
          </div>
        </section>
        <!-- end people gallery -->
        <!-- Photo Gallery -->
        <section id="gallery" class="row expanded gallery-container">
          <div class="column body">
            <h2 class="text-center main-heading">Videos</h2>
            
            <!-- <ul class="filters">
              define categories
              <li class="" data-group="white">White</li>
              <li class="" data-group="black">Black</li>
              <li class="" data-group="brown">Brown</li>
            </ul> -->

            <!-- div galleries wrapper -->    
            <div id="grid" class="row galleries">
              <!-- gallery 1 -->
              <div class="gallery-sizer"></div>
              <!-- .gallery-sizer is markup helper for js (required) -->
              <figure class="gallery column large-6 medium-6 small-12" data-groups='["white"]'>
                <a href="//www.youtube.com/watch?v=xKrusvtUa6g" data-lity>
                  <img src="<?=base_url().'assets/'?>images/content/tb1.jpg" alt="">
                  <div class="label-wrapper">
                    <div class="label">Forest Love</div>
                  </div>
                </a>
              </figure>
              <figure class="gallery column large-6 medium-6 small-12" data-groups='["white"]'>
                <a href="//www.youtube.com/watch?v=_CHE9J32wXc" data-lity>
                  <img src="<?=base_url().'assets/'?>images/content/tb2.jpg" alt="">
                  <div class="label-wrapper">
                    <div class="label">Braga Story</div>
                  </div>
                </a>
              </figure>
              <!-- END - gallery 1 -->
              
            </div>
            <!-- END - div .galleries wrapper -->
          </div>
        </section>
        <!-- end photo gallery -->

        <!-- Section Short Contact and address + Google maps -->
        <section class="row expanded asanoha text-center">
          <h2 class="show-for-sr">Lokasi Pernikahan Abdul & Ika</h2>
          <div class="column">
            <div class="row spacing s-30"></div>
            <div class="row">
            <div class="column">
              <a href="tel:62-856-1119595">+(62) 856 1119595 (IKA)</a><br>
              <a href="tel:62-899-6226977">+(62) 899 6226977 (ABDUL)</a>
            </div>
            <div class="column"><span class="lnr lnr-map-marker"></span> Dusun Krajan RT/RW 001/002,  Ds. Pasirkamuning, Kec. Talagasari, Kab. Karawang, Jawa Barat<br><a href="http://bit.ly/lokasiabdulikamenikah">-> Lokasi <-</a></div>
            <div class="column"><a href="mailto:admin@abdulikamenikah.info"> admin@abdulikamenikah.info </a></div>
            </div>
            <div class="row spacing s-30"></div>
          </div>
        </section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.120842258473!2d107.39114631476927!3d-6.247802995477538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac37b49e1e7d4b9c!2sMimi+Publik!5e0!3m2!1sen!2sus!4v1534516535553"
          width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <!-- <div id="map" data-lat="-8.1037781" data-long="115.0890078" data-title="My wedding here!"></div> -->
        <!-- LOAD GOOGLE MAPS -->
        <!-- end of maps thing -->

        <!-- begin gifts section -->
        <section id="gifts" class="row expanded smooth-waves">
          <div class="column">
            <h2 class="text-center main-heading">Terimakasih</h2>
            <h5 class="text-center">Kami tunggu ya..</h5>
            <div class="spacing s-70"></div>
          </div>
        </section>
        <!-- end gifts section -->

        <!-- begin footer -->
        <footer class="row expanded" style="background-image:url(images/50bzi1f6ura-jason-leem.jpg);">
          <div class="bg-overlay bg-overlay-dark-green"></div>
          <div class="column">
            <h2 class="text-center">Save the date of wedding</h2>
              <div class="row spacing s-30"></div>
              <div class="row">
                <div class="center-names trendy">
                    <div class="center"><div class="left">Abdul</div>&<div class="right">Ika</div></div>
                </div>
              </div>
              <div class="row spacing s-50"></div>
              <h2 class="text-center">25 Agustus 2018</h2>
              <div class="row spacing s-50"></div>
              <div class="row footline">
                <div class="column small-12 large-3">
                  <a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-twitter-square"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="column small-12 large-6">Handcrafted with <i class="fa fa-heart"></i> by <a href="http://bit.ly/goalabs" target="_blank">Goalabs</a> 2017</div>
                <div class="column small-12 large-3">
                  <a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-tumblr"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
              </div>
          </div>
        </footer><!-- end footer -->
      </div><!-- END div off-canvas main content -->
    </div><!-- END div off-canvas wrapper -->
    
    <!--js files-->
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?=base_url().'assets/'?>scripts/vendor/what-input.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/'?>scripts/vendor/foundation.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/'?>scripts/lity.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/'?>scripts/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/'?>scripts/lightbox.min.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/'?>scripts/skrollr.min.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/'?>scripts/shuffle.min.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/'?>scripts/jquery.countdown.js"></script>    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe64UN4DwnwezKAgXNHEaPS7MVxeuyuqI&callback=initMap"></script>
    <script type="text/javascript" src="<?=base_url().'assets/'?>scripts/app.js"></script>
    <script type="text/javascript" src="<?=base_url().'assets/'?>scripts/additional.js"></script>
  </body>
</html>
