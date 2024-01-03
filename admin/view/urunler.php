<?php
$sql = "SELECT * FROM urunler";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$urunler = $stmt->fetchAll(PDO::FETCH_ASSOC);

?> 
<div class="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
         <div class="col-sm-9">
            <h4 class="page-title">Ürünler</h4>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="javaScript:void();">Kategoriler</a></li>
               <li class="breadcrumb-item"><a href="javaScript:void();">Ürünler</a></li>
               <li class="breadcrumb-item active" aria-current="page"><?=$urunler['urun_kategori']?></li>
            </ol>
         </div>
         <div class="col-sm-3">
            <div class="btn-group float-sm-right">
               <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Ayarlar</button>
               <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
               <span class="caret"></span>
               </button>
               <div class="dropdown-menu">
                  <a href="javaScript:void();" class="dropdown-item">Action</a>
                  <a href="javaScript:void();" class="dropdown-item">Another action</a>
                  <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a href="javaScript:void();" class="dropdown-item">Separated link</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Hover Table</h5>
                  <div class="table-responsive">
                     <table class="table table-hover">
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
                              <td><a href="<?=$urun['urun_resim']?>"></a><img src="<?//=$urun['urun_resim']?>" width="100" height="100" /></td>
                              <td><?=$urun['urun_adi']?></td>
                              <td><?=$urun['urun_marka']?></td>
                              <td><?=$urun['urun_fiyat']?></td>
                              <td><?=$urun['urun_kategori']?></td>
                              <td>
                              <button class="btn btn-primary btn-block m-1" >Düzenle</button>
                              <button class="btn btn-primary btn-block m-1" >Sil</button>
                              <button class="btn btn-primary btn-block m-1" >Aktif Et</button>
                              </td>  
                           </tr>
                            <?php }?> 
                           
                        </tbody>
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