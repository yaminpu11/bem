
<!--==========================
      About Us Section
    ============================-->
    <section id="header-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header">
                <h1><lang>Greetings from Head of Program</lang> </h1>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section id="about" >

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img" id="viewKaprodiPhoto">
              <!-- <img src="<?php echo base_url()?>/assets/img/<?= $sambutan->Images ?>" alt=""> -->
            </div>
          </div>
          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <!-- <h2><?= $sambutan->NamaKaprodi ?></h2>
              <h3><?= $sambutan->JabatanKaprodi ?></h3>
              <p><?= $sambutan->Sambutan ?></p> -->
              <h2 id="viewKaprodiName"></h2>
              <h3><lang>Head of Study Program</lang> <span id="viewProdi"></span></h3>
              <div id="viewSambutan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->
    <script type="text/javascript">
      $(document).ready(function () {
//      getdataProdiTextingtipe('tipe,element');  
        getdataProdiTexting('welcoming','#viewSambutan');
        getDetailProdi();
        

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
                    $('#viewKaprodiPhoto').append('<img src="'+locimgkaprodi+''+v.Photo+'" alt="'+d.Kaprodi+'">');
                });

                $('#viewProdiName').html(d.ProdiName);
                $('#viewProdi').html(d.ProdiName);
                $('#viewProdiWhy').html(d.ProdiName);
                $('#viewKaprodiName').html(Kaprodi);
                $('#viewDosenName').html(Kaprodi);
            }
        })
    }
    </script>

