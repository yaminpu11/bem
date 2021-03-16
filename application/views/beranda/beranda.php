<!--==========================
    Intro Section
  ============================-->
<!--  <section id="intro" class="clearfix"> -->

<section id="intro" class="clearfix">
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
        <!--Indicators-->
        <ol class="carousel-indicators" id="indicators">
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox" id="viewSliderProdi" >
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
                <h3><lang>Greetings from Head of Arunika</lang></h3>
            </header>

            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img" id="viewKaprodiPhoto">
                        <img src="<?php echo base_url()?>/assets/img/<?= $sambutan->Images ?>" alt="">

                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="about-content">
                        <h2 id="viewKaprodiName"></h2>
                        <h3><lang>Head of Arunika</lang> <span id="viewProdi"></span></h3>
                        <div id="viewSambutan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
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
    <section id="why-us" class=" wow fadeIn">
        <div class="container" style="padding-right: 40px; padding-left: 40px;">
            
            <div class="row">

                <div class="col-lg-6">
                    <div class="why-us-content">

                        <div class="features wow bounceInUp clearfix">
                            <i class="fa fa-diamond"></i>
                            <h4><lang>Vision</lang></h4>
                        </div>
                        <p id="viewAbout"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

                       

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-us-content">
                        <div class="features wow bounceInUp clearfix">
                            <i class="fa fa-rocket"></i>
                            <h4><lang>Mission</lang></h4>

                        </div>
                        <p id="viewExcellence"><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li><li> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li><li> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li></p>                      

                    </div>
                </div>
            </div>
           
        </div>

    </section>

    

    <!--==========================
      Team Section
    ============================-->
    <section id="team" class="">
        <div class="container">
            <div class="section-header">
                <h3><lang>Team</lang></h3>
                <p><lang>Team of study programs</lang></p>
            </div>

            <div class="row justify-content-center" id="viewDosenProdi">

            </div>
        </div>
    </section>

    <!-- #team -->


    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp ">
        <div class="container">

            <header class="section-header">
                <h3><lang>Partner Collaborations</lang></h3>
            </header>

            <div class="owl-carousel clients-carousel" id="viewPartnerProdi">
            </div>

        </div>
    </section><!-- #clients -->
</main>


<script>

    $(document).ready(function () {
        window.G_Type = 'testimonials';
//      getdataProdiTextingtipe('tipe,element');
        getdataProdiTexting('welcoming','#viewSambutan');
        getdataProdiTexting('vision','#viewVisi');
        getdataProdiTexting('mission','#viewMisi');
        getdataProdiTexting('whychoose','#viewWhy');
        // getdataProdiTexting('about','#viewAbout');
        // getdataProdiTexting('graduate','#viewGraduate');
        // getdataProdiTexting('excellence','#viewExcellence');
        // getdataProdiTexting('career','#viewCareer');
        // getdataProdiTexting('testimonials','#viewTestiText');
        getDetailProdi();
        getDosenProdi();
        getTestiProdi();
        getPartnerProdi();
        getSliderProdi();

    });

    function getDetailProdi() {
        var data = {
            LangCode : current_language,
            ProdiID : GlobalProdiID
        };
        var token = jwt_encode(data,'UAP)(*');
        var url = base_url_js_server_ws+'api-prodi/__getDetailProdi';
        var locimgkaprodi = base_url_js_server_ws+'images/Kaprodi/';
        $.post(url,{token:token},function (jsonResult) {
            if(jsonResult.length>0){
                var d = jsonResult[0];
                var ta = (d.TitleAhead!='' && d.TitleAhead!=null) ? d.TitleAhead+' ' : '';
                var tb = (d.TitleBehind!='' && d.TitleBehind!=null) ? ' '+d.TitleBehind : '';
                var Kaprodi = ta+''+d.Kaprodi+''+tb;
                // Photo Kprodi
                $.each(jsonResult,function (i,v) {
                    $('#viewKaprodiPhoto').append('<img src="'+locimgkaprodi+''+v.Photo+'" alt="'+v.Kaprodi+'">');
                });

                $('#viewProdiName').html(d.ProdiName);
                $('#viewProdi').html(d.ProdiName);
                $('#viewProdiWhy').html(d.ProdiName);
                $('#viewKaprodiName').html(Kaprodi);
                // $('#viewDosenName').html(Kaprodi);
            }
        })
    }

    function getDosenProdi() {
        var data = {
            LangCode : current_language,
            ProdiID : GlobalProdiID,
        };
        var token = jwt_encode(data,'UAP)(*');
        var url = base_url_js_server_ws+'api-prodi/__getDosenProdi';
        var locimgkaprodi = base_url_js_server_ws+'images/Lecturer/';
        $.post(url,{token:token},function (jsonResult) {
            if(jsonResult.length>0){
                // var d = jsonResult[0];
                // // Photo Kprodi
                // var ta = (d.TitleAhead!='' && d.TitleAhead!=null) ? d.TitleAhead+' ' : '';
                // var tb = (d.TitleBehind!='' && d.TitleBehind!=null) ? ' '+d.TitleBehind : '';

                $.each(jsonResult,function (i,v) {

                    var ta = (v.TitleAhead!='' && v.TitleAhead!=null) ? v.TitleAhead+' ' : '';
                    var tb = (v.TitleBehind!='' && v.TitleBehind!=null) ? ' '+v.TitleBehind : '';
                    var lecturername= ta+v.Name+tb;

                    $('#viewDosenProdi').append('<div class="col-lg-3 col-md-3">'+
                        '<div class="card mb-2">'+
                            '<div class="col-xs-6 col-sm-3 img-card">'+
                                '<img class="dosen-img-top img-fitter" data-src="'+locimgkaprodi+''+v.Photo+'" alt="'+lecturername+'" >'+
                            ' </div>'+
                            '<div class="card-body">'+
                                    '<h4 class="card-title font-weight-bold">'+lecturername+'</h4>'+
                                    '<p class="card-text" style="text-align:center">Dosen '+v.ProdiName+'</p>'+
                            '</div>'+
                        '</div>'+
                    '</div>');
                });

                $('.img-fitter').imgFitter({

                  // CSS background position
                  backgroundPosition: 'center top',

                  // for image loading effect
                  fadeinDelay: 400,
                  fadeinTime: 1200
                  
                });

            }
            else{
                for(var i=1;i<=3;i++){
                    $('#viewDosenProdi').append('<div class="col-lg-3 col-md-3">'+
                        '<div class="card mb-2">'+
                        '<div class="col-xs-6 col-sm-3 img-card">'+
                        '<img class="dosen-img-top img-fitter" data-src="'+locimgkaprodi+'default-2.png" alt="" >'+
                        ' </div>'+
                        '<div class="card-body">'+
                        '<h4 class="card-title font-weight-bold">Lorem ipsum dolor</h4>'+
                        '<p class="card-text" style="text-align:center">Dosen consectetur</p>'+
                        '</div>'+
                        '</div>'+
                        '</div>');
                }

            }
        })

    }
    function getTestiProdi() {
        var data = {
            LangCode : current_language,
            ProdiID : GlobalProdiID,
            Type : G_Type,
        };
        var token = jwt_encode(data,'UAP)(*');
        var url = base_url_js_server_ws+'api-prodi/__getTestiProdi';
        var locimgprodi = base_url_js_server_ws+'images/Testimonials/';
        $.post(url,{token:token},function (jsonResult) {
            if(jsonResult.length>0){
                var d = jsonResult[0];
                var ta = (d.TitleAhead!='' && d.TitleAhead!=null) ? d.TitleAhead+' ' : '';
                var tb = (d.TitleBehind!='' && d.TitleBehind!=null) ? ' '+d.TitleBehind : '';
                $.each(jsonResult,function (i,v) {
                    $('#viewTestiProdi').append('<div class="testimonial-item">'+
                        '<img src="'+locimgprodi+''+v.Photo+'" class="testimonial-img" alt="">'+
                        '<h3>'+v.Name+'</h3>'+
                        '<h4>Mahasiswi '+v.Name1+'</h4>'+
                        '<p id="viewTestiText">'+v.Description+'</p>'+
                        ' </div>');
                });

                $('.img-fitter').imgFitter({

                  // CSS background position
                  backgroundPosition: 'center top',

                  // for image loading effect
                  fadeinDelay: 400,
                  fadeinTime: 1200
                  
                });


            }
            else{
                $('#viewTestiProdi').append('<div class="testimonial-item">'+
                    '<img src="'+locimgprodi+'default-2.png" class="testimonial-img" alt="">'+
                    '<h3>Lorem ipsum dolor sit amet</h3>'+
                    '<h4>Consectetur adipiscing elit</h4>'+
                    '<p id="viewTestiText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'+
                    ' </div>'+//2
                    '<div class="testimonial-item">'+
                    '<img src="'+locimgprodi+'default-2.png" class="testimonial-img" alt="">'+
                    '<h3>Lorem ipsum dolor sit amet</h3>'+
                    '<h4>Consectetur adipiscing elit</h4>'+
                    '<p id="viewTestiText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'+
                    ' </div>');
            }

            loadTestimonialCarosel();

        })

    }

    function getPartnerProdi() {
        var data = {
            ProdiID : GlobalProdiID,
        };

        var token = jwt_encode(data,'UAP)(*');
        var url = base_url_js_server_ws+'api-prodi/__getPartnerProdi';
        var locimgprodi = base_url_js_server_ws+'images/Partner/';
        $.post(url,{token:token},function (jsonResult) {
            if(jsonResult.length>0){
                $.each(jsonResult,function (i,v) {
                    $('#viewPartnerProdi').append('<img src="'+locimgprodi+''+v.Images+'" alt="'+v.NamePartner+'">');
                });
                loadPartner();
            }
            else{
                $('#viewPartnerProdi').append('<img src="'+locimgprodi+'default-2.png" alt=""><img src="'+locimgprodi+'default-2.png" alt=""><img src="'+locimgprodi+'default-2.png" alt="">'+
                    '<img src="'+locimgprodi+'default-2.png" alt=""><img src="'+locimgprodi+'default-2.png" alt=""><img src="'+locimgprodi+'default-2.png" alt="">');
                $("#viewPartnerProdi").owlCarousel();
            }
        })
    }

    function getSliderProdi() {
        var data = {
            ProdiID : GlobalProdiID,
        };
        var token = jwt_encode(data,'UAP)(*');
        var url = base_url_js_server_ws+'api-prodi/__getSliderProdi';
        var locimgprodi = base_url_js_server_ws+'images/Slider/';
        // var locimgbem = base_url_js+'assets/img/slider/';

        $.post(url,{token:token},function (jsonResult) {
            if(jsonResult.length>0){
                var response = '',
                    indicator = '';
                $.each(jsonResult,function (i,v) {

                    response += '<div class="carousel-item item">'+
                        '<img class="d-block w-100"  src="'+locimgprodi+''+v.Images+'" alt="'+v.Title+'">'+
                        // '<div class="carousel-caption">'+
                        //     '<div class="animated fadeInUp">'+
                        //        '<div class="container  h-100">'+
                        //             '<div class="row justify-content-center align-self-center">'+
                        //                 '<div class="col-md-12 intro-info order-md-first order-last">'+
                        //                   ' <h2></h2>'+
                        //                 '<div>'+
                        //                     '<a href="'+v.Url+'" class="btn-get-started scrollto">Read More</a>'+
                        //             '</div>'+
                        //         '</div>'+
                        //     '</div>'+
                        // '</div>'+
                        '</div>';

                    indicator += '<li data-target="#carousel-example-1z" data-slide-to="'+i+'"></li>';



                });

                $('#viewSliderProdi').append(response);
                $('#indicators').append(indicator);
                $('.item').first().addClass('active');
                $('.carousel-indicators > li').first().addClass('active');
                $("#carousel-example-1z").carousel();
            }
            else
                {
                $('#viewSliderProdi').append('<div class="carousel-item item active">'+
                    '<img class="d-block w-100"  src="'+locimgprodi+'bem.png" alt="">'+
                    '</div>');

            }

        })
    }


</script>