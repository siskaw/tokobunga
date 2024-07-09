<div class="container-fluid">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/slider1.jpg') ?>" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
         <h5>FIVILIAN FLOWERS</h5>
        <p>Every flower blooms own time</p>
     </div>
     </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/slider2.jpg') ?>" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
         <h5>FIVILIAN FLOWERS</h5>
        <p>Where flower bloom so does hope</p>
     </div>
    </div>    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="row text-center mt-4">
        <?php foreach ($bunga_hidup as $brg) : ?>

            <div class="card ml-3 mb-3" style="width: 16rem;">
            <img class="card-img-top" src="<?php echo base_url('uploads/' . $brg->gambar) ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                <small><?php echo $brg->keterangan ?></small><br>
                <span class="badge badge-success mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.')  ?></span><br>
                <?php echo anchor('dashboard/beli_sekarang/' .$brg->id_brg, '<div class="btn btn-sm
                btn-primary"> Beli Sekarang</div>') ?>
                <?php echo anchor('dashboard/detail/' .$brg->id_brg, '<div class="btn btn-sm
                btn-success"> Detail</div>') ?>
                
              </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>
