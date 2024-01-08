<?php
$sql = "SELECT * FROM siparisler";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$siparisler = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total = count($siparisler);
$sql5 = "SELECT SUM(tutar) as toplamTutar FROM siparisler";
$stmt4 = $pdo->prepare($sql5);
$stmt4->execute();
$total5 = $stmt4->fetch(PDO::FETCH_ASSOC);
?>
<?php
$sql1 = "SELECT * FROM users";

$stmt1 = $pdo->prepare($sql1);
$stmt1->execute();
$users = $stmt1->fetchAll(PDO::FETCH_ASSOC);
$total1 = count($users);

?>
<?php
$sql2 = "SELECT * FROM kategoriler";

$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$kategoriler = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$total2 = count($kategoriler);

?>
<?php
$sql3 = "SELECT * FROM urunler ORDER BY urun_fiyat DESC Limit 7";

$stmt3 = $pdo->prepare($sql3);
$stmt3->execute();
$urunler = $stmt3->fetchAll(PDO::FETCH_ASSOC);
$total7 = count($urunler);

?>
<div class="content-wrapper">
    <div class="container-fluid">

  <div class="row mt-3">
    <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Siparişler <span class="float-right badge badge-light">Tamamı</span></p>
           <div class="">
           <h4 class="mb-0 py-3"><?=$total?> <span class="float-right"><i class="fa fa-home"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar" style="width:100%"></div>
             </div>
          </div>
        </div>
      </div>
     </div>


     <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Kullanıcılar <span class="float-right badge badge-light">Tamamı</span></p>
           <div class="">
           <h4 class="mb-0 py-3"><?=$total1?> <span class="float-right"><i class="fa fa-search"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar" style="width:100%"></div>
             </div>
          </div>
            </div>
      </div>
     </div>

     <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Kazançlar <span class="float-right badge badge-light">Tamamı</span></p>
           <div class="">
           <h4 class="mb-0 py-3">₺<?=$total5['toplamTutar']?> <span class="float-right"><i class="fa fa-try"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar" style="width:45%"></div>
             </div>
          </div>
         </div>
      </div>
     </div>

   </div><!--End Row-->
     
     
	 
	 <div class="row">
	   <div class="col-lg-6">
	     <div class="card">
		     <div class="card-header">En Pahalı Ürünler
				 <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				  <div class="dropdown-menu dropdown-menu-right">
				  <a class="dropdown-item" href="urunler">Ürünlere Git</a>
				  <a class="dropdown-item" href="urunekle">Ürün Ekle</a>
				   </div>
				  </div>
				 </div>
			   </div>
			   
			    <ul class="list-group list-group-flush">

          <?php
                            foreach ($urunler as $urun) {?>
				  <li class="list-group-item">
				    <div class="media align-items-center">
            <a target="_blank" href="<?=$urun['urun_resim']?>"> <img src="<?=$urun['urun_resim']?>" alt="user avatar" class="customer-img rounded"></a>
					<div class="media-body ml-3">
					  <h6 class="mb-0"><a href="/urun/<?=seo($urun['urun_adi'])?>/<?=seo($urun['id'])?>" target="_blank"><?=$urun['urun_adi']?></a></h6>
					  <small class="small-font">₺<?=$urun['urun_fiyat']?></small>
					</div>
				   </div>
				  </li>
          <?php }?>
				</ul>
			<div class="card-footer text-center bg-transparent border-0">
			  <a href="urunler">Tüm Ürünleri Görüntüle</a>
			</div>
           
         </div>
	   </div>
	   
	   <div class="col-lg-6">
	     <div class="card">
		     <div class="card-header">Kategoriler
				 <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				  <div class="dropdown-menu dropdown-menu-right">
				  <a class="dropdown-item" href="kategoriduzenle">Kategorilere Git</a>
				   </div>
				  </div>
				 </div>
			   </div>
               
			 <ul class="list-group list-group-flush">
       <?php
                            foreach ($kategoriler as $kategori) {?>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-white">
					<i class="fa fa-home"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0"><?=$kategori['kategori_adi']?></h6>
                </div>
                </div>
              </li>
              <?php }?>
            </ul>
			
			<div class="card-footer text-center border-0">
			  <a href="kategoriduzenle">Tüm Kategorileri Düzenle</a>
			</div>
           
         </div>
	   </div>
	 </div><!--End Row-->

<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->

   </div>