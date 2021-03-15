<section id="header-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header">
            <h1><lang>Student Programs</lang> </h1>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<section id="dosen" class="section-bg">

<div class="container">

	<div class="row justify-content-md-center" id="viewPU">
		<div class="col-lg-4 col-md-4 ">
    	<div class="col-xs-6 col-sm-3 img-card ">
      		<a href="https://podomorouniversity.ac.id/" target="_blank">
      			<img class="img-thumbnail img-height img-1" src="<?= url_server_ws.'images/logoprodi/PU.png'; ?>"><div class="img-hover">
				    <div class="text"><i class="fa fa-link" aria-hidden="true"></i></div>
				 </div>	          			
          	</a>
     	</div>
    </div> 
</div>
 <div class="row justify-content-center" id="viewProdi">
 	
 </div>
</div>

</section>
<script type="text/javascript">


$(document).ready(function(){
// App_V_Prodi.Loaded();
readLogoProdi();
})


function readLogoProdi(){
	var data = {
         action : 'readLogoProdi',
    };

    var token = jwt_encode(data,'UAP)(*');
    var url = base_url_js_server_ws+'api-prodi/__crudDataProdi';
    var locimgprodi = base_url_js_server_ws+'images/logoprodi/';
    $.post(url,{token:token},function (jsonResult) {
    	 
        if(jsonResult.length>0){
            $.each(jsonResult,function (i,v) {
                $('#viewProdi').append('<div class="col-xs-6 col-sm-6 col-md-3">'+
  		        	'<div class=" img-card ">'+
                  '<div class="img-thumbnail">'+
  		          		'<a href="https://'+v.Host+'" target="_blank">'+
    		          			'<img class=" img-height" src="'+locimgprodi+''+v.FileLogoP+'?>">'+
    		          			'<div class="img-hover">'+
          							   ' <div class="text"><i class="fa fa-link" aria-hidden="true"></i></div>'+
          							' </div>'+		
  		          		'</a>'+
                    '</div>'+
  		         	  '</div>'+
  		          '</div>');
            });

        }
    })
}
</script>
