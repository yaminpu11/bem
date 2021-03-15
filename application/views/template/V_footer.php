<!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="row">

                <div class="col-lg-4">

                  <div class="footer-info">
                   <img src="<?php echo base_url('assets/img/LOGO-Podomoro-University-L-mono-W.png')?>" alt="">
                    <img style="width: 100%;padding: 10px 19px;" src="<?php echo base_url('assets/img/babson-logo-02.png')?>" alt="">
                  </div>

                </div>

                <div class="col-lg-4">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                      <li><a target="_blank" href="http://www.alumni.podomorouniversity.ac.id/">Alumni</a></li>
                      <li><a href="<?php echo base_url('penelitian'); ?>">Penelitian</a></li>
                      <li><a href="<?php echo base_url('mahasiswa'); ?>">Mahasiswa</a></li>
                      <li><a href="<?php echo base_url('news'); ?>">News</a></li>
                    </ul>
                  </div>
                </div>
                  <div class="col-lg-4">
                  <div class="footer-links ">
                    <h4>Contact Us</h4>
                    <p class="text-left"> Central Park Mall 3rd Floor - Unit 112 <br>
                        Podomoro City, Jl. Let. Jend. S. Parman Kav. 28<br>
                        West Jakarta, 11470, Indonesia<br>
                        <strong>Phone:</strong> 021-29200456<br>
                        <strong>Email:</strong> info@podomorouniversity.ac.id<br>
                        Monday - Friday 10 AM - 5 PM <br>
                        Saturday 10 AM - 4 PM <br>
                        Sunday & Public Holiday CLOSED<br>
                      
                      
                    </p>
                  </div>
                 
                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                  </div>

            </div>

          </div>

         

          

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2019 <strong>Podomoro University.</strong>. All Rights Reserved.
      </div>
      <div class="credits">
       
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  
  <script type="text/javascript">
   $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
</script>
<script type="text/javascript">
  $(function () { 
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1000) { 
            $('.navbar .navbar-brand img').attr('src','http://placehold.it/220?text=Original+Logo!');
        }
        if ($(this).scrollTop() < 1000) { 
            $('.navbar .navbar-brand img').attr('src','http://placehold.it/120?text=Original+Logo!');
        }
    })
});
</script>

<script type="text/javascript">
           // Header scroll class
  $(window).scroll(function() {

    if ($(this).scrollTop() > 100) {
      $('#logo').addClass('hide');
    } else {
      $('#logo').removeClass('hide');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#logo').addClass('hide');
  }
  $(window).scroll(function() {

    if ($(this).scrollTop() > 100) {
      $('#logoshow').removeClass('hide');
    } else {
            $('#logoshow').addClass('hide');

    }
  });

  if ($(window).scrollTop() > 100) {
    $('#logoshow').addClass('hide');
  }

</script>

        
</body>
</html>
