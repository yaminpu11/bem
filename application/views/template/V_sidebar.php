 
<?php
$hal = $this->uri->segment(1);
?>
 <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="<?=($hal=='')?'active':'';?>"><a href="<?php echo base_url(''); ?>">Beranda</a></li>
          <li class="drop-down"><a >Tentang</a>
             <ul>
              <li class="<?=($hal=='sambutan')?'active':'';?>"><a href="<?php echo base_url('sambutan'); ?>">Sambutan Kepala Prodi</a></li>
              <li class="<?=($hal=='visi-misi')?'active':'';?>"><a href="<?php echo base_url('visi-misi'); ?>">Visi dan Misi</a></li>
              <li class="<?=($hal=='structure-organisasi')?'active':'';?>"><a href="<?php echo base_url('structure-organisasi'); ?>">Structur Organisasi</a></li>
              <li class="<?=($hal=='dosen')?'active':'';?>"><a href="<?php echo base_url('dosen'); ?>">Dosen</a></li>
              <li class="<?=($hal=='fasilitas')?'active':'';?>"><a href="<?php echo base_url('fasilitas'); ?>">Fasilitas</a></li>
             </ul>
          </li>
          <li class="<?=($hal=='penelitian')?'active':'';?>"><a href="<?php echo base_url('penelitian'); ?>">Penelitian</a></li>
          <li class="<?=($hal=='agenda')?'active':'';?>"><a href="<?php echo base_url('agenda'); ?>">Agenda</a></li>
          <li class="<?=($hal=='mahasiswa')?'active':'';?>"><a href="<?php echo base_url('mahasiswa'); ?>">Mahasiswa</a></li>
          <li ><a target="_blank" href="http://alumni.podomorouniversity.ac.id/">Alumni</a></li>
          <li class="<?=($hal=='galeri')?'active':'';?>"><a href="<?php echo base_url('galeri'); ?>">Galeri</a></li>
          <li class="<?=($hal=='kontak')?'active':'';?>"><a href="<?php echo base_url('kontak'); ?>">Kontak</a></li>
        </ul>
        <div class="social-links mobile-reg">
          
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="" style="padding: 2px "><img class="flag-in" src="<?php echo base_url('assets/img/in.png')?>"></a> <span>|</span> <a href="http://admission.podomorouniversity.ac.id/registrasi" class="btn-mobile-reg">REGISTRASI</a>
<!--           <a href="" style="padding: 2px " ><img class="flag-in" src="<?php echo base_url('assets/img/en.png')?>"></a>
 -->      
        </div>
      </nav><!-- .main-nav -->

      </div>
  </header><!-- #header -->