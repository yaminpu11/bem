<!-- Optional FancyBox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css"/>
<link rel="stylesheet" href="<?= base_url('assets/css/masongram.min.css')?>">

<!-- Optional FancyBox -->
<script src="<?= base_url('assets/js/masongram.js')?>"></script>

<script>
   $(document).ready(function () {
        getInstaProdi();
    });
// $(window).scroll(function() {
//     if($(window).scrollTop() == $(document).height() - $(window).height()) {
//       getInstaProdi()
//            // ajax call get data from server and append to the div
//     }
// });

    function getInstaProdi() {
      var data = {
          ProdiID : 1;
      };
      var token = jwt_encode(data,'UAP)(*');
      var url = base_url_js_server_ws+'api-prodi/__getInstaProdi';

      $.post(url,{token:token},function (jsonResult) {
          if(jsonResult.length>0){

              var d = jsonResult[0];
              var UserIDIG = d.UserIDIG;
              var TokenIG = d.TokenIG;
              var access_token = window.location.hash.replace(/#access_token=([\w\d.]+)/, '$1');
              var authorization = 'https://api.instagram.com/oauth/authorize/?client_id=924f677fa3854436947ab4372ffa688df&redirect_uri=' + window.location + '&response_type=token&scope=basic';
              if (!access_token) {
                  access_token = TokenIG;
                 
              }
              // $(window).scroll(function() {
              //  if($(window).scrollTop() == $(document).height() - $(window).height()) {
              //     alert('ok');
              //     $('#tampil_pesan').html('<button class="btn btn-primary" type="button" disabled><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>  Loading...</button>');
              //          // ajax call get data from server and append to the div
              //   }
              // });

              $('#photos').masongram({
                  access_token: access_token,
                  count: 18,
                  loop:false,
                  size: 'standard_resolution',
                  caption:
                      '<div class="text-center">' +
                      // '<p data-if="{likes}"><i class="fa fa-heart text-danger"></i> {likes}</p>' +
                      '<p data-if="{caption}"></p>' +
                      '<a tabindex="-1" class="btn btn-primary" href="https://fruskac.net/en/map?c={location},12z" target="_blank" data-if="{location}"><i class="fa fa-map-o"></i> </a> ' +
                      '<a tabindex="-1" class="btn btn-primary" href="{link}" target="_blank" data-if="{link}"><i class="fa fa-instagram"></i> </a> ' +
                      // Optional FancyBox button
                      // '<a tabindex="-1 href="{{image}}" class="link-preview" data-lightbox="portfolio" data-title="{{caption}}" title="Preview"><i class="ion ion-eye"></i></a>'+
                     '<a tabindex="-1" data-caption="{caption}" class="btn btn-primary instagram"  title="Preview" data-fancybox="instagram" href="{image}"><i class="fa fa-photo"></i> </a>' +
                      '</div>'
              });
              
      //      $(window).scroll(function(){
      //   var WindowHeight = $('#photos').height();
       
      //   if ((WindowHeight > 600  )) {
      //     // alert('ok');
      // //   }
      // // if($(window).scrollTop() +1 >= 1080 - WindowHeight)
      // // {
       
      //   setTimeout(function(){
      //     $('#tampil_pesan').html('<button class="btn " type="button" disabled><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>  Loading...</button>');
      //   }, 1000);
      // }else{

      // }
      // });
              $('.authorization').attr('href', authorization);
              if (/#access_token=([\w\d.]+)/.test(window.location.hash)) {
                  $('.display.user').removeClass('hidden');
              } else {
                  $('.display.default').removeClass('hidden');
              }

            }
          })
      }

      

</script>
<script>
  (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments);
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m);
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-52141130-1', 'auto');
  ga('send', 'pageview');
</script>
<script>
    $(function () {
        $(".instagram").fancybox();
    });
</script>

<section id="header-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header">
            <h1><lang>GALLERY</lang> </h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="portfolio" class="">
  <div class="container">
<!-- dedicated container or MasonGram -->
       
    <div id="photos"></div>
    <div class="col-md-12 mb-5  text-center" id="tampil_pesan"></div> 
  </div>
</section>


