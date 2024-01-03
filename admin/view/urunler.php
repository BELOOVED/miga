<?php
$sql = "SELECT * FROM urunler";

if(isset($_GET['type']) && !empty($_GET['type'])) {
    $type = $_GET['type'];

    $sql .= " WHERE urun_kategori_id = :kategori_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':kategori_id', $type, PDO::PARAM_INT);
} else {
    $stmt = $pdo->prepare($sql);
}

$stmt->execute();
$urunler = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
         <div class="col-sm-9">
            <h4 class="page-title">Ürünler</h4>
         </div>
         <div class="col-sm-3">
            <div class="btn-group float-sm-right">
               <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Ayarlar</button>
               <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
               <span class="caret"></span>
               </button>
               <div class="dropdown-menu">
                  <a href="javaScript:void();" class="dropdown-item">Yeni Ürün Ekle</a>
                  <a href="javaScript:void();" class="dropdown-item">Tüm Ürünleri Sil</a>
                  <a href="javaScript:void();" class="dropdown-item">Migros'tan Ürün Çek</a>
                  <div class="dropdown-divider"></div>
                  <a href="javaScript:void();" class="dropdown-item">Tüm Ürünleri Deaktif Et</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Tüm Ürünler</div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="default-datatable" class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Ürün Resmi</th>
                              <th scope="col">Ürün Adı</th>
                              <th scope="col">Ürün Marka</th>
                              <th scope="col">Ürün Fiyatı</th>
                              <th scope="col">Ürün Kategori</th>
                              <th scope="col">İşlem Yap</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($urunler as $urun) {?>
                            <tr>
                              <th scope="row"><?=$urun['id']?></th>
                              <td><a target="_blank" href="<?=$urun['urun_resim']?>"><img src="<?=$urun['urun_resim']?>" width="100" height="100" /></a></td>
                              <td><a href="/urun/<?=seo($urun['urun_adi'])?>/<?=seo($urun['id'])?>" target="_blank"><?=$urun['urun_adi']?></a></td>
                              <td><?=$urun['urun_marka']?></td>
                              <td><?=$urun['urun_fiyat']?></td>
                              <td><?=$urun['urun_kategori']?></td>
                              <td>
                                
                              <button class="btn btn-primary btn-block m-1" onclick="window.location.href = 'urunduzenle?id=<?=$urun['id']?>'" >Düzenle</button>
                              <button class="btn btn-primary btn-block m-1" onclick="deleteData('urunler', <?=$urun['id']?>, this)">Sil</button>
                              </td>  
                           </tr>
                            <?php }?> 
                           
                        </tbody>
                        <tfoot>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Ürün Resmi</th>
                              <th scope="col">Ürün Adı</th>
                              <th scope="col">Ürün Marka</th>
                              <th scope="col">Ürün Fiyatı</th>
                              <th scope="col">Ürün Kategori</th>
                              <th scope="col">İşlem Yap</th>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--End Row-->
      <!--start overlay-->
      <div class="overlay toggle-menu"></div>
      <!--end overlay-->
   </div>
   <!-- End container-fluid-->
</div>