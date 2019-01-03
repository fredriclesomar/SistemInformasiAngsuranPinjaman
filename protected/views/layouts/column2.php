<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

	<!-- menu sebelah kiri-->
	<div class="row">
	<div class="span2" id="sidebar">
	 <?php  $this->widget('bootstrap.widgets.TbMenu', array(
          'type'=>'list',
          'items'=>array(
                        array('label'=>'CONTROLL'),
                        array('label'=>'Home', 'icon'=>'home', 'url'=>array('site/index')),
                      //  array('label'=>'User', 'icon'=>'user', 'url'=>array('site/tblUser')),
                    //    array('label'=>'Ganti Password', 'icon'=>'pencil','url'=>array('site/gantiPassword')),
                        array('label'=>'Perekaman Lokasi'),
                        array('label'=>'Provinsi', 'icon'=>'cog', 'url'=>array('provinsi/index')),
                        array('label'=>'Kota', 'icon'=>'cog', 'url'=>array('kota/index')),
                 //       array('label'=>'Persegi', 'icon'=>'book', 'url'=>array('kotak/hitung')),
                        array('label'=>'Kota per Provinsi', 'icon'=>'cog', 'url'=>array('kota/provinsi')),
                        array('label'=>'Pembukuan Utang'),
                        array('label'=>'Member', 'icon'=>'user', 'url'=>array('anggota/index')),
                        array('label'=>'Pekerjaan', 'icon'=>'user', 'url'=>array('pekerjaan/index')),
                        array('label'=>'Pinjaman', 'icon'=>'tags', 'url'=>array('pinjaman/index')),
                        array('label'=>'Angsuran', 'icon'=>'tags', 'url'=>array('angsuran/angsuranPerAnggota')),
                        array('label'=>'Help', 'icon'=>'flag', 'url'=>array('site/help')),
                ),
            
              )); 
		
	?>
	</div> <!-- sidebar -->
 
	<!-- halaman isi -->
	<div class="span10" id="main-content">
		<?php echo $content; ?>
	</div><!-- content -->
    </div>
   </div>
 <?php $this->endContent(); ?>