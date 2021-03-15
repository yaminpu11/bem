

<!--==========================
      visi Us Section
    ============================-->
    <section id="header-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header">
                <h1><lang>Vision</lang> & <lang>Mision</lang></h1>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section id="visi" class="intro-visi">
     
      <div class="container">

        <div class="row" style="padding: 15px 0;">
          <div class="col-lg-6 wow fadeInUp img-hidden" style="visibility: visible; animation-name: fadeInUp; text-align: center;">
            <img width="800px" src="<?php echo base_url('assets/img/vision.png')?>" alt="" >
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" style="visibility: visible; animation-name: fadeInUp;">
            <div class="visi-content">
               <!--  <h2><lang>Vision</lang> </h2> -->
                    <div id="viewVisi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
             <!--  <h2>Visi </h2>
               <?= $visi['VisiEng'];  ?> -->
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp img-show" style="visibility: visible; animation-name: fadeInUp; text-align: center;">
            <img width="800px" src="<?php echo base_url('assets/img/vision.png')?>" alt="" >
          </div>

        </div>

        <div class="row" style="padding: 15px 0;">

            <div class="col-lg-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align: center;">
              <img width="800px" src="<?php echo base_url('assets/img/mision.png')?>" alt="" >
            </div>
            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" style="visibility: visible; animation-name: fadeInUp;">
              <div class="visi-content">
                   <!--  <h2><lang>Mision</lang> </h2> -->

                    <div id="viewMisi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                <!-- <h2>Misi </h2>
                <?= $visi['MisiEng'];  ?> -->
              </div>
            </div>
       
        </div>

    </section><!-- #visi -->
    <script type="text/javascript">
      $(document).ready(function () {
//      getdataProdiTextingtipe('tipe,element');  
        getdataProdiTexting('vision','#viewVisi');
        getdataProdiTexting('mission','#viewMisi');
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
                

                $('#viewProdiName').html(d.ProdiName);
                $('#viewProdi').html(d.ProdiName);
                $('#viewProdiWhy').html(d.ProdiName);
                $('#viewKaprodiName').html(Kaprodi);
                $('#viewDosenName').html(Kaprodi);
            }
        })
    }
    </script>
