<?php $Segment1 = $this->uri->segment(1); ?>
<style type="text/css">
  iframe {
    width: 246px;
    height: 140px;
  }
  .card-body p {
    text-align: left;
    font-size: 14px;
    color: #495057;
    font-weight: 400;
    min-height: 0;
    margin: 0;
  }
</style>
<section id="header-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header">
            <h1><lang>BLOGS</lang> </h1>
            <p class="text-left text-orange mb-4"><small><a href="<?= base_url()?>">Home</a> / <a href="#"><lang>News</lang></a></small></p>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<section id="about">
  <div class="container">
      <div class="card card-cascade wider reverse mb-5 " >

        <!-- Card image -->
        <div class="view  overlay py-5" style="background-image: url(assets/images/event.png);
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;filter: grayscale(1);min-height: 450px;">
          <!-- <img class="card-img-top" src="<?= base_url()?>/assets/images/event.png"
            alt="Card image cap"> -->
         
            <div class="mask rgba-black-light rgba-gradient"></div>
                     
        </div>
        <content class="text-center container">
          <div class="row">
            <div class="card-body card-body-cascade text-center shadow-none p-0">
                <!-- Grid row -->
                <div class="row row-cols-1 row-cols-md-3 justify-content-md-center " >      
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-left m-0 " >
                    <!-- Buttons-->
                    <section class="p-5" id="bem">
                    </section>

                    <div id="pagination"></div>
                    <!-- <nav class="py-5" >
                      <ul class="pagination pagination-circle pg-blue justify-content-center">
                        <li class="page-item disabled"><a class="page-link">First</a></li>
                        <li class="page-item disabled">
                          <a class="page-link" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>
                        <li class="page-item">
                          <a class="page-link" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link">Last</a></li>
                      </ul>                
                    </nav> -->              

                  </div>
                </div>
                <!-- Grid row -->
            </div>
          </div>
        </content>
      </div>
  </div>
</section>

<script type="text/javascript">
  // $(document).ready(function () { 
  //   getApiNewsBlogsAll('BPM','#bpm');
  //   getApiNewsBlogsAll('UKM','#ukm');
  //   getApiNewsBlogsAll('BEM','#bem');
  // }); 

  $(document).ready(function(){    
      var type = 'bem';  
      var idNmtype='bem';
      // alert(type);
     // Detect pagination click
     $('#pagination').on('click','a',function(e){
       e.preventDefault(); 
       var pageno = $(this).attr('data-ci-pagination-page');
       loadPagination(pageno);
     });

     loadPagination(0);

     // Load pagination
     function loadPagination(pagno){
        
        var data = {
                type : type,
            };
        var token = jwt_encode(data,'UAP)(*');
        var url = base_url_js+'getapinewsblogsall/'+pagno;           

        $.ajax({
        type: "POST",
        dataType: "json",
        url: url,
        async : true,
        cache: false,
        data: { token: token },       
        success: function( response ) 
        { 
            $('#pagination').html(response.pagination);
            getApiNewsBlogsAll(response.result,response.row);
         }
        });
     }

      // news all

      function getApiNewsBlogsAll(response,sno) {
          sno = Number(sno);
          if(response.length>0){
                var i;
                var locimg = base_url_admblog+'upload/';
                for(i=0,variArray=response.length; i<variArray; i++){ //Fast looping array
                    var strtittlew1 = response[i].Title;
                    var titleres1 = (strtittlew1.length>30) ? strtittlew1.split(' ')[0]+' '+strtittlew1.split(' ')[1]+' '+strtittlew1.split(' ')[2]+' '+strtittlew1.split(' ')[3]+'...' : strtittlew1;
                    var str = response[i].Content;
                    var res = str.substring(210,0);
                    var activeLink = (i == 0) ? 'active' : '';
                    var name = response[i].Name;
                    console.log(name);
                    var create = (response[i].Name =='') ? name : 'admin' ;
                    $('#'+idNmtype+'').append(

                        '<div class="row">'+

                          '<div class="col-lg-5 col-xl-4">'+

                            '<div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">'+
                              '<img class="w-100 img-fitter" data-src="'+locimg+''+response[i].Images+'" height="335px" alt="'+response[i].Title+'">'+
                              '<a href='+base_url_blog+'article/'+response[i].ID_title+'/'+response[i].SEO_title+'" target="_blank">'+
                                '<div class="mask rgba-white-slight"></div>'+
                              '</a>'+
                            '</div>'+

                          '</div>'+

                          '<div class="col-lg-7 col-xl-8">'+

                            '<h3 class="font-weight-bold mb-3"><strong>'+titleres1+'</strong></h3>'+
                            '<p class="dark-grey-text">'+res+'...</p>'+
                            '<p>by <a class="font-weight-bold">'+create+'</a>, '+response[i].CreateAT+'</p>'+
                            '<a href="'+base_url_blog+'article/'+response[i].ID_title+'/'+response[i].SEO_title+'" target="_blank" class="btn btn-primary btn-md ml-0">Read more</a>'+

                          '</div>'+

                        '</div><hr class="my-5">');

                    }  
                    $('.img-fitter').imgFitter({
                        // CSS background position
                        backgroundPosition: 'center center',
                        // for image loading effect
                        fadeinDelay: 400,
                        fadeinTime: 1200

                    });
                  
                  
          }else{
            $('#'+idNmtype+'').append('<div class="col-md-12 px-sm-0 p-4"><a class="news-title smaller mt-md-2 pl-0"> <h3 class="font-weight-bold mb-3  text-danger"><strong> Sorry !!!, page not found </strong></h3></a></div>');  
          }
          
      }
     });
</script>

