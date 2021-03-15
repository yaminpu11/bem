<style type="text/css">
 * {
  box-sizing: border-box;
}


/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column (if you want) */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide columns by default */
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

/* Add a grey background color on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background color to the active button */
.btn.active {
  background-color: #666;
   color: white;
}
</style>
<!--==========================
      Facilitas Section
    ============================-->
    <section id="header-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header">
                <h1><lang>Facilities</lang> </h1>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
     <section id="portfolio" class="section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters" >
              <li class="filterbtn" data-filter="*" class="filter-active" onclick="filterSelection('all')">All</li>
              <li class="filterbtn" data-filter=".filter-Classroom" onclick="filterSelection('filter-Classroom')"><lang>Classroom</lang></li>
              <li class="filterbtn" data-filter=".filter-Laboratorium" onclick="filterSelection('filter-Laboratory')"><lang>Laboratory</lang></li>
              <li class="filterbtn" data-filter=".filter-Facilities" onclick="filterSelection('filter-Facilities')"><lang>Facilities</lang></li>
            </ul>
          </div>
        </div>

        

<!-- Portfolio Gallery Grid -->
<div class="row" id="viewFacilitiesProdi">
<!-- END GRID -->
</div>

        </div>

      </div>
    </section><!-- #portfolio -->
<script type="text/javascript">
$(document).ready(function () {
  $('.column').addClass('show');

  $('.portfolio-item').addClass('show');
  
  });
filterSelection('all'); // Execute the function and show all columns

function filterSelection(c) {
  $('#column').addClass('show');
  var x, i;
  x = document.getElementsByClassName("column");

  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("portfolio-flters");
var btns = btnContainer.getElementsByClassName("filterbtn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<script type="text/javascript">
  $(document).ready(function () {
    // getCategoryClassroom();
    getCategoryLaboratory();
    // getCategoryFacilities();

  });
    function getCategoryLaboratory() {
    var data = {
        ProdiID : GlobalProdiID,
    };
    var token = jwt_encode(data,'UAP)(*');
    var url = base_url_js_server_ws+'api-prodi/__getCategoryLaboratory';
    var locimgprodi = base_url_js_server_ws+'images/Facilities/';
    $.post(url,{token:token},function (jsonResult) {
        if(jsonResult.length>0){
            var d = jsonResult[0];
            
            $.each(jsonResult,function (i,v) {
                $('#viewFacilitiesProdi').append('<div class="col-lg-4 col-md-6 portfolio-item column show filter-'+v.Category+'" id="column">'+
                    '<div class="portfolio-wrap">'+
                      '<img src="'+locimgprodi+''+v.Photo+'" class="img-fluid" alt="'+v.Name+'">'+
                      '<div class="portfolio-info">'+
                       ' <h4><a href="#">'+v.Name+'</a></h4>'+
                       // ' <p>'+v.Name+'</p>'+
                        '<div>'+
                          '<a href="'+locimgprodi+''+v.Photo+'" class="link-preview" data-lightbox="portfolio" data-title="'+v.Name+'" title="'+v.Name+'"><i class="ion ion-eye"></i></a>'+
                          
                        '</div>'+
                      '</div>'+
                    '</div>'+
                 ' </div>');
            });
         
        }
        else{
            $('#viewFacilitiesProdi').append('<div class="col-lg-4 col-md-6 portfolio-item column show filter-Classroom">'+
              '<div class="portfolio-wrap">'+
                    '<img src="'+locimgprodi+'default-2.png" class="img-fluid" alt="">'+
                    '<div class="portfolio-info">'+
                      '<h4><a href="">Lorem Ipsum</a></h4>'+
                      '<div>'+
                        '<a href="'+locimgprodi+'default-2.png" data-lightbox="portfolio" data-title="" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>'+
                      '</div>'+
                    '</div>'+
                  '</div></div>'+
              '<div class="col-lg-4 col-md-6 portfolio-item column show filter-Facilities">'+
              '<div class="portfolio-wrap">'+
                    '<img src="'+locimgprodi+'default-2.png" class="img-fluid" alt="">'+
                    '<div class="portfolio-info">'+
                      '<h4><a href="">Lorem Ipsum</a></h4>'+
                      '<div>'+
                        '<a href="'+locimgprodi+'default-2.png" data-lightbox="portfolio" data-title="" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>'+
                      '</div>'+
                    '</div>'+
                  '</div></div>'+
              '<div class="col-lg-4 col-md-6 portfolio-item column show filter-Laboratory">'+
              '<div class="portfolio-wrap">'+
                    '<img src="'+locimgprodi+'default-2.png" class="img-fluid" alt="">'+
                    '<div class="portfolio-info">'+
                      '<h4><a href="">Lorem Ipsum</a></h4>'+
                      '<div>'+
                        '<a href="'+locimgprodi+'default-2.png" data-lightbox="portfolio" data-title="" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>'+
                      '</div>'+
                    '</div>'+
                  '</div></div>');
        }

      });
    
    }
</script>

