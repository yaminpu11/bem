
function getdataProdiTexting(Type, element) {

    var url = base_url_js_server_ws+'api-prodi/__getDataProdiTexting';

    var data = {
        LangCode : current_language,
        ProdiID : GlobalProdiID,
        Type : Type
    };
    var token = jwt_encode(data,'UAP)(*');
    $.post(url,{token:token},function (jsonResult) {
        // console.log(jsonResult);
        if(jsonResult.length>0){
            var d = jsonResult[0];
            $(element).html(d.Description);
        }
    });

}

function getDataKnowledge(Type,IDCat, element) {

    var url = base_url_js_server_ws+'api-prodi/__getContentKnowledge';

    var data = {
        LangCode : current_language,
        ProdiID : GlobalProdiID,
        Type : Type,
        IDCat : IDCat
    };
    var token = jwt_encode(data,'UAP)(*');
    var locimg = base_url_js_server_ws+'uploads/prodi/';
    $.post(url,{token:token},function (jsonResult) {
        // console.log('ok');
        var no='1';
        var no2='1';
            if(jsonResult.length>0){

                var dok = '',
                    title = '';
                $.each(jsonResult,function (i,v) {
                  //   <!-- Tab pane -->
                  //       <a class="nav-link active" data-toggle="tab" role="tab" aria-controls="addition" href="https://codepen.io/JoelStransky/pen/eGYWpe.html" data-target="#addition">Addition</a>
                  //       <a class="nav-link" data-toggle="tab" role="tab" aria-controls="kitchen" href="https://codepen.io/JoelStransky/pen/eGYWpe.html" data-target="#kitchen">Kitchen</a>
                  
                  // <!-- Carousel Pane -->
                  // <div class="tab-content">
                  //   <div class="tab-pane show active fade" role="tabpanel" id="addition">Addition</div> 
                  //   <div class="tab-pane fade" role="tabpanel" id="kitchen">Kitchen</div> 
                  // </div>
                    
                    dok +=  '<div class="tab-content">'+
                              '<div class="tab-pane show fade';
                              if(no++ == no2++){
                    dok += '"active"';
                              }
                    dok += '" role="tabpanel" id="addition'+v.ID+'">'+
                                '<h3>HOME '+v.ID+'</h3>'+
                                '<p>Some content.</p>'+
                              '</div>'+
                            '</div>';
                    title +='<a class="nav-link" data-id='+v.ID+' onclick="getActived(this.getAttribute(data-id));" data-toggle="tab" role="tab" aria-controls="addition" href="https://codepen.io/JoelStransky/pen/eGYWpe.html" data-target="#addition'+v.ID+'">Addition '+v.ID+'</a>';

                    // dok += '<div class="tab-content" id="v-pills-tabContent">'+
                    //             '<div class="tab-pane fade show " id="v-pills-home-'+v.ID+'" role="tabpanel" aria-labelledby="v-pills-home-tab">'+
                    //             '<iframe src="'+locimg+''+v.File+'" width="100%" height="600px" style="border: none;" />'+
                    //             '</iframe>'+
                    //             '</div>'
                    //         '</div>';

                    // title +='<a class="nav-link"  data-toggle="pill" href="#v-pills-home-'+v.ID+'" role="tab" aria-controls="v-pills-home-'+v.ID+'" aria-selected="true" data-target="#v-pills-home-'+v.ID+'"><label>'+no++ +'. </label> '+v.Title+'</a>';



                });
                // $('.nav-link').click(function () {
                //        alert('ok');
                //             $('.nav li a.active').removeClass('active');
                //             $(this).find("a").addClass('active');
                //         });

                $('#filedocument').append(dok);
                $('#v-pills-tab').append(title);
                // $('.tab-pane').first().addClass('active');
                // $('.nav-link').first().addClass('active');

            }else{

                $('#filedocument').append('<div class="panel py-5 px-5">'+
                    '<h1>Sorry something went wrong file not found !!!</h1>'+
                    '</div>');

            }        
          

    });
}