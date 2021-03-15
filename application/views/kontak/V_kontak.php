
<section class="kontak">

  <!--Section heading-->
  <h2 class="section-heading font-weight-bold pt-4 text-center"><lang>Contact</lang></h2>
  <!--Section description-->
  <p class="section-description pb-4 text-center"><lang>Feel free to contact us and we will contact you directly</lang></p>

  <div class="container">
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 mb-4">

      <!--Form with header-->
      <div class="card">

        <div class="card-body">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3><i class="fa fa-envelope"></i> <lang>Write to us</lang>:</h3>
          </div>

          <!-- <p class="tex-p" style="">We'll write rarely, but with only the best content.</p> -->
          
          <!--Body-->
          <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i> <label for="form-name"><lang>Your name</lang></label>
            <input type="text" id="form-name" class="form-control input" name = "Name">
          </div>

          <div class="md-form">
            <i class="fa fa-envelope prefix grey-text" style="font-size: 20px;"></i> <label for="form-email" ><lang>Your email</lang></label>

            <input type="text" id="form-email" class="form-control input" name = "Email">
          </div>

          <div class="md-form">
            <i class="fa fa-tag prefix grey-text"></i><label for="form-Subject"><lang>Subject</lang></label>
            <input type="text" id="form-Subject" class="form-control input" name = "Subject">
            
          </div>

          <div class="md-form">
            <i class="fa fa-pencil prefix grey-text"></i><label for="form-text"><lang>Messages</lang></label>
            <textarea id="form-text" class="form-control md-textarea input" name = "Message" rows="3"></textarea>
            
          </div>

          <div class="text-center mt-4">
            <button class="btn btn-light-blue" id="btnSave" action= "add" data-id ="">Submit</button>
          </div>

        </div>

      </div>
      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.655520046476!2d106.78941111536962!3d-6.176848262248083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f65f1c966b81%3A0x80e01463bb72c6e9!2sUniversitas%20Agung%20Podomoro!5e0!3m2!1sid!2sid!4v1571904498108!5m2!1sid!2sid"
          frameborder="0" style="border:0" allowfullscreen></iframe>
          
      </div>

      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4 kon-p">
          <a class="btn-floating blue accent-1"><i class="fa fa-map-marker"></i></a>
         
          <p>Central Park Mall 3rd Floor - Unit 112</p>
          <p>Podomoro City, Jl. Let. Jend. S. Parman Kav. 28</p>
          <p>West Jakarta, 11470, Indonesia</p>
        </div>

        <div class="col-md-4 kon-p">
          <a class="btn-floating blue accent-1"><i class="fa fa-phone"></i></a>
          <p>+ 021-29200456</p>
          <p>Monday - Friday 10 AM - 5 PM </p>
          <p>Saturday 10 AM - 4 PM <p>
          <p>Sunday & Public Holiday CLOSED</p>
        </div>

        <div class="col-md-4 kon-p">
          <a class="btn-floating blue accent-1"><i class="fa fa-envelope"></i></a>
          <p>info@podomorouniversity.ac.id</p>
          
        </div>
      </div>

    </div>
    <!--Grid column-->

  </div>
  </div>

</section>

<script type="text/javascript">
  var uniqid =  "<?php echo $uniqid ?>";
  // console.log(uniqid);
  var App_V_kontak = {
      validation : function(arr){
          var toatString = "";
              var result = "";
              for(var key in arr) {
                 switch(key)
                 {
                  case 'Email' :
                    var string = App_V_kontak.jssclean(arr[key]).trim();
                    result = Validation_email(string,key);
                    if (result['status'] == 0) {
                      toatString += result['messages'] + "<br>";
                    }
                    break;
                  default:
                      var string = App_V_kontak.jssclean(arr[key]).trim();
                      result = Validation_required(string,key);
                      if (result['status'] == 0) {
                        toatString += result['messages'] + "<br>";
                      }
                 }
              }
              if (toatString != "") {
                toastr.error(toatString, 'Failed!!');
                return false;
              }
              return true
      },

      SubmitData : function(action='add',ID='',selector){
          var data = {};
          $('.input').each(function(){
              var field = $(this).attr('name');
               data[field] = $(this).val(); 
          })

          // validation 
          var validation =  (action == 'delete') ? true : App_V_kontak.validation(data);
          if (validation) {
              if (confirm('Are you sure ?')) {
                  var dataform = {
                      ID : ID,
                      data : data,
                      action : action,
                      uniqid : uniqid,
                  };
                  var token = jwt_encode(dataform,"UAP)(*");
                  loading_button2(selector);
                  var url = base_url_js + "_contact/crud";
                  $.post(url,{ token:token },function (resultJson) {
                          
                  }).done(function(resultJson) {
                      
                      setTimeout(function () {
                         end_loading_button2(selector);
                         toastr.success('Success');
                         location.reload();
                      },1000);
                  }).fail(function() {
                      toastr.error("Connection Error, Please try again", 'Error!!');
                      end_loading_button2(selector); 
                  }).always(function() {
                       end_loading_button2(selector);              
                  }); 
              }
          }

      },

      Loaded : function(){

      },

      jssclean : function(string){
        var div = document.createElement('div');
        div.innerHTML = string;
        var scripts = div.getElementsByTagName('script');
        var i = scripts.length;
        while (i--) {
          scripts[i].parentNode.removeChild(scripts[i]);
        }
        return div.innerHTML;
      },
  };

  $(document).ready(function(){
    App_V_kontak.Loaded();
  })


  $('#btnSave').click(function () {
    var ID = $(this).attr('data-id');
    var selector = $(this);
    var action = $(this).attr('action');
    App_V_kontak.SubmitData(action,ID,selector);
  });
</script>
