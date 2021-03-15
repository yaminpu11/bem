  <!--==========================
    Intro Section
  ============================-->
 <!--  <section id="intro" class="clearfix"> -->
  <section id="intro" class="clearfix">
      <!--Carousel Wrapper-->
      <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
          <?php for($i=0; $i < count($slider); $i++){?>
          <?php if($i == 0){$active = 'active';}else{$active = '';}?>
          <li data-target="#carousel-example-1z" data-slide-to="<?php echo $i;?>" class="<?php echo $active;?>"></li>
          <?php }?>
          <!-- <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li> -->
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <!--First slide-->

          <?php 
            $count=0;
            foreach ($slider as $sld){
            $count++;
           if($count == 1){$active = 'active';}else{$active = '';}?>
          <div class="carousel-item <?= $active ?>">
            <div class="view">
            </div>
            <img class="d-block w-100" src="<?php echo base_url()?>/assets/img/<?= $sld->Images?>" alt="<?= $sld->Title ?>">  
            <!--/.Controls-->
         <!--/.Carousel Wrapper-->
            <div class="carousel-caption">
                <div class="animated fadeInDown">
                  <div class="container  h-100">
                  <div class="row justify-content-center align-self-center">
                    <div class="col-md-12 intro-info order-md-first order-last">
                      <h2><?= $sld->Title ?> <!-- <br>& <span>Rekayasa Konstruksi</span> --></h2>
                      <div>
                        <a href="http://admission.podomorouniversity.ac.id/registrasi" class="btn-get-started scrollto">Registrasi Online</a>
                      </div>
                    </div>
                
            <!-- <div class="col-md-6 intro-img order-md-last order-first">
              <img src="<?php echo base_url('assets/img/intro-img.svg" alt="')?>" class="img-fluid">
            </div> -->
                  </div>
                  </div>
                </div>
              </div>          
          </div>
          <?php
          }
          ?>
          
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="about">

      <div class="container">
        <header class="section-header">
          <h3>Overview</h3>
        </header>

        <div class="row">
          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="<?php echo base_url()?>/assets/img/<?= $sambutan->Images ?>" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
               <h2><?= $sambutan->NamaKaprodi ?></h2>
              <h3><?= $sambutan->JabatanKaprodi ?></h3>
              <p><?= $sambutan->Sambutan ?></p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


    <!--==========================
      Services Section
    ============================-->
   
    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container" style="padding-right: 40px; padding-left: 40px;">
        <?php for ($i=0; $i < count($why); $i++): ?>
        <header class="section-header">
          <h3>Mengapa Teknik Sipil Bidang Manajemen & Rekayasa Konstruksi?</h3>
          <p><?= $why[$i]['Why'] ?></p>
        </header>

        <div class="row">

        <!--   <div class="col-lg-6">
            <div class="why-us-img">
              <img src="<?php echo base_url('assets/img/1000x600-71449facility-prev10.jpg')?>" alt="" class="img-fluid">
            </div>
          </div> -->

          <div class="col-lg-6">
            <div class="why-us-content">
              
                <div class="features wow bounceInUp clearfix">
                  <i class="fa fa-diamond" style="color: #f058dc;"></i>
                  <h4>Tentang</h4>
                  <p><?= $why[$i]['TentangProdi'] ?></p>
                </div>

                <div class="features wow bounceInUp clearfix">
                  <i class="fa fa-graduation-cap" style="color: #ffb774;"></i>
                  <h4>Profile Lulusan</h4>
                  <p><?=  $why[$i]['ProfileLulusan'] ?></p>
                </div>
                
            </div>
          </div>
        
       
        <div class="col-lg-6">
          <div class="why-us-content">
                <div class="features wow bounceInUp clearfix">
                  <i class="fa fa-rocket" style="color: #589af1;"></i>
                  <h4>Keunggulan</h4>
                  <p><?= $why[$i]['Keunggulan'] ?></p>
                </div>
          
                 
                <div class="features wow bounceInUp clearfix">
                  <i class="fa fa-object-group" style="color: #ffb774;"></i>
                  <h4>Peluang Karir</h4>
                  <p><?= $why[$i]['PeluangKarir'] ?></p>
                </div>

          </div>
        </div>
      </div>
      <?php endfor ?>
  </div>

</section>

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Features Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="<?php echo base_url('assets/img/features-1.svg')?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Visi </h4>
            <p>
              <?= $visi['Visi']; ?>
            </p>
            
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="<?php echo base_url('assets/img/features-2.svg')?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Misi </h4>
            <?= $visi['Misi']; ?>
          </div>
          
        </div>
        <!-- <div class="row">
          <div class="col-lg-12">
          <button class="btn btn-light-blue">MORE</button>
          </div>
        </div> -->

      </div>
    </section><!-- #about -->


    <!--==========================
      Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row justify-content-center">


        
      <div class="col-lg-4 col-md-4">
        <div class="card mb-2">
          
          <div class="col-xs-6 col-sm-3 img-card">
          <img class="dosen-img-top" src="<?php echo base_url('assets/img/96x150-93625MRK - Ferdinand2.jpg')?>"
            alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Ferdinand Fassa</h4>
            <p class="card-text">Kepala Program Studi Teknik Sipil Bidang Manajemen & Rekayasa Konstruksi</p>
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item li-1"><i class="fa fa-phone  fa-dosen clor-1" ></i>   08128206940</li>
            <li class="list-group-item li-2"><i class="fa fa-send fa-dosen clor-2"></i>   ferdinand.fassa@podomorouniversity.ac.id</li>
          </ul>
         
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card mb-2">
          <div class="col-xs-6 col-sm-3 img-card">
          <img class="dosen-img-top" src="<?php echo base_url('assets/img/96x150-33669MRK - Susy2.jpg')?>"
            alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Dr. Susy Fatena Rostiyanti, ST., M.Sc.</h4>
            <p class="card-text">Dosen Teknik Sipil Bidang Manajemen & Rekayasa Konstruksi</p>
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item li-1"><i class="fa fa-phone  fa-dosen clor-1" ></i> 021-29200546 ext 431</li>
            <li class="list-group-item li-2"><i class="fa fa-send fa-dosen clor-2"></i> susy.rostiyanti@podomorouniversity.ac.id</li>
          </ul>
         
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card mb-2">
          <div class="col-xs-6 col-sm-3 img-card">
          <img class="dosen-img-top" src="<?php echo base_url('assets/img/96x150-69791MRK - Felix2.jpg')?>"
            alt="Card image cap">
          </div>

          <div class="card-body">
            <h4 class="card-title font-weight-bold">Andre Feliks Setiawan, S.T., M.Sc.</h4>
            <p class="card-text">Dosen Teknik Sipil Bidang Manajemen & Rekayasa Konstruksi</p>
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item li-1"><i class="fa fa-phone  fa-dosen clor-1" ></i> 021-29200-456 ext 409</li>
            <li class="list-group-item li-2"><i class="fa fa-send fa-dosen clor-2"></i> andre.feliks@podomorouniversity.ac.id</li>
          </ul>
         
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card mb-2">
          <div class="col-xs-6 col-sm-3 img-card">
          <img class="dosen-img-top" src="<?php echo base_url('assets/img/96x150-47328MRK - Pratama2.jpg')?>"
            alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Pratama Haditua Reyner Siregar, S.T., M.T.</h4>
            <p class="card-text">Dosen Teknik Sipil Bidang Manajemen & Rekayasa Konstruksi</p>
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item li-1"><i class="fa fa-phone  fa-dosen clor-1" ></i> 082112981827</li>
            <li class="list-group-item li-2"><i class="fa fa-send fa-dosen clor-2"></i> pratama.haditua@podomorouniversity.ac.id</li>
          </ul>
         
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card mb-2">
          <div class="col-xs-6 col-sm-3 img-card">
          <img class="dosen-img-top" src="<?php echo base_url('assets/img/96x150-63290hansen2.jpg')?>"
            alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Seng Hansen, S.T., M.Sc.</h4>
            <p class="card-text">Dosen Teknik Sipil Bidang Manajemen & Rekayasa Konstruksi</p>
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item li-1"><i class="fa fa-phone  fa-dosen clor-1" ></i>   (021) 2920 0456 ext 409</li>
            <li class="list-group-item li-2"><i class="fa fa-send fa-dosen clor-2"></i> seng.hansen@podomorouniversity.ac.id</li>
          </ul>
         
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card mb-2">
          <div class="col-xs-6 col-sm-3 img-card">
          <img class="dosen-img-top" src="<?php echo base_url('assets/img/96x150-69276MRK - Ario2.jpg')?>"
            alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Ario Bintang Koesalamwardi </h4>
            <p class="card-text">Dosen Teknik Sipil Bidang Manajemen & Rekayasa Konstruksi</p>
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item li-1"><i class="fa fa-phone  fa-dosen clor-1" ></i> 081280008471</li>
            <li class="list-group-item li-2"><i class="fa fa-send fa-dosen clor-2"></i> ario.bintang@podomorouniversity.ac.id</li>
          </ul>
         
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 align-self-center">
        <div class="card mb-2">
          <div class="col-xs-6 col-sm-3 img-card">
          <img class="dosen-img-top" src="<?php echo base_url('assets/img/96x150-19847SATRIA2.jpg')?>"
            alt="Card image cap">
          </div>
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Satria Agus Nugroho, S.T., M.T.</h4>
            <p class="card-text">Dosen Teknik Sipil Bidang Manajemen & Rekayasa Konstruksi</p>
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item li-1"><i class="fa fa-phone  fa-dosen clor-1" ></i> 021-29200-456 ext 409</li>
            <li class="list-group-item li-2"><i class="fa fa-send fa-dosen clor-2"></i> satria.agus@podomorouniversity.ac.id</li>
          </ul>
         
          </div>
        </div>
      </div>

      </div>
    </section><!-- #team -->


    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
              <?php foreach ($testimoni as $testi) {?>

              <div class="testimonial-item">
                <img src="<?php echo base_url()?>/assets/img/<?= $testi->Images?>" class="testimonial-img" alt="">
                <h3><?= $testi->NameTesti ?></h3>
                <h4>Mahasiswi <?= $testi->Jurusan ?>, Angkatan <?php $date=$testi->Angkatan; $angtn=date("Y", strtotime($date)); echo $angtn?></h4>
                <p>
                  <?= $testi->Description ?>
                </p>
              </div>

              <?php 
                } 
              ?>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->


    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 >Berita</h3>
<!--           <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
 -->        </header>

        <div class="row">
        <?php
          foreach ($news as $n) {
        ?>
          <div class="col-md-6 col-lg-4 wow bounceInUp padding-0" data-wow-duration="1.4s">
            <div class="box">
              <div  style="background: #fceef3;padding: 0px"><img width="100%" src="<?php echo base_url()?>/assets/img/<?= $n->Images ?>"></div>
              
              <h4 class="title"><a href=""><?= $n->TitleNews ?></a></h4>
              <div class="tit-berita"> <p><small>Create by</small> <?= $n->UserCreate ?> </p>
                <p><?= $n->DateCreate ?></p>
              </div>
              <p class="description"><?= $n->Description ?></p>
            </div>
          </div>
        <?php } ?>
          

        </div>

      </div>
    </section><!-- #services -->


    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="<?php echo base_url('assets/img/clients/alliance.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/apl.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/ba_paulbocuse.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/babson2.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/certiport.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/daegu.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/france-langue.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/institut-francais.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/ritz.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/shangrila-2.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/microsoft.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/Untitled-5.png')?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/utm-space.png')?>" alt="">
        </div>

      </div>
    </section><!-- #clients -->


    <!--==========================
      Pricing Section
    ============================-->
    

  </main>