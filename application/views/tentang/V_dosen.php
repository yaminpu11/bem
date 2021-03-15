<section id="header-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header">
                <h1><lang>Lecturer</lang> </h1>
            </div>
          </div>
        </div>
        </div>
      </div>
  </section>
 <section id="dosen" class="section-bg">

 <div class="container">
      <div class="row justify-content-center" id="viewDosenProdi">
      
      </div>
</div>

</section>
<script type="text/javascript">
  $(document).ready(function () {
       
//      getdataProdiTextingtipe('tipe,element');  
       
        getDetailProdi();
        getDosenProdi();
        

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
                
                
                $('#viewDosenName').html(Kaprodi);
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

                $.each(jsonResult,function (i,v) {

                var ta = (v.TitleAhead!='' && v.TitleAhead!=null) ? v.TitleAhead+' ' : '';
                var tb = (v.TitleBehind!='' && v.TitleBehind!=null) ? ' '+v.TitleBehind : '';

                var lecturername= ta+v.Name+tb;
                
                    $('#viewDosenProdi').append('<div class="col-lg-3 col-md-3">'+
                      '<div class="card mb-2">'+
                        '<div class="col-xs-6 col-sm-3 img-card">'+
                            '<img class="dosen-img-top img-fitter" data-src="'+locimgkaprodi+''+v.Photo+'" alt="'lecturername'" >'+
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
                        '<img class="dosen-img-top img-fitter" src="'+locimgkaprodi+'default-2.png" alt="" >'+
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

</script>
