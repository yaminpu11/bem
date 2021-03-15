

<!--==========================
      visi Us Section
    ============================-->
    <section id="header-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header">
                <h1><lang>Knowledge Base</lang></h1>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section id="visi" class="intro-visi">
     

    <div class="container py-5">       
        
        <div class="col pb-4 py-5">
          <h1 class="font-weight-bold dark-grey-text my-2 text-center h1-responsive"><lang>Knowledge Base</lang></h1>
          <hr class="w-header bg-blue-hr">      
          <p class="text-center text-grey mb-4"><small><a href="<?= base_url()?>">Home</a> / <a href="#"><lang>Knowledge Base</lang></a></small></p>
        </div>
        <div class="row"  style="padding: 10px;">

      <?php 
        foreach ($allcategory as $key => $value) 
      {
      ?>
      <a href="<?= base_url()?>knowledge/<?=$value->ID?>"><div class="btn btn-primary"><?=$value->Name?> <span class="badge badge-danger ml-2"><?=$value->jml;?></span></div></a>
      <?php }?> 
        </div>
        <div class="row" style="padding: 15px 0;">
          <div class="col">
            <div class="card testimonial-card h-100">
              <div class="row">
              <div class="col-md-9 col-sm-12" id="filedocument">

          
            <!-- <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <iframe
                src="<?= base_url('assets/file/download.pdf')?>"
                width="800px"
                height="600px"
                style="border: none;" />
              </iframe>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <iframe
                src="<?= base_url('assets/file/download.pdf')?>"
                width="800px"
                height="600px"
                style="border: none;" />
              </iframe>
              </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <iframe
                src="<?= base_url('assets/file/download.pdf')?>"
                width="800px"
                height="600px"
                style="border: none;" />
              </iframe>
              </div>
                
              </div> -->
          </div>
          <div class="col-md-3 col-sm-12" >
            <div class="nav flex-column nav-pills mr-3 titledocument px-0" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="padding: 1rem;   padding-top: 2rem;">
                <!-- <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                  aria-controls="v-pills-home" aria-selected="true">Document one</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                  aria-controls="v-pills-profile" aria-selected="false">Document two</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                  aria-controls="v-pills-messages" aria-selected="false">Document tree</a> -->
                
              </div>
          </div>
        </div>
        </div>

          </div>
    </div>

  </div>

    </section><!-- #visi -->
    <script type="text/javascript">
      $(document).ready(function () {        
//      getdataProdiTextingtipe('tipe,element');  
        var id='<?= $this->uri->segment(2) ?>';
        getDataKnowledge('knowledge',id,'#filedocument');   
        // getCurrentLanguage();
        // console.log(current_language);

        // console.log(getCurrentLanguage);
        

      });
        function goDoSomething(data_id){       

            alert("data-id:"+data_id+", data-option:"+data_option);
        }


    </script>