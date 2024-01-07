<?php
$sql = "SELECT * FROM urunler";

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $type = $_GET['id'];

    $sql .= " WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $type, PDO::PARAM_INT);
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
            <h4 class="page-title">Ürün Düzenle</h4>
         </div>
      </div>
      <!-- End Breadcrumb-->
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <div class="card-title">Ürün Düzenle</div>
                  <hr>
                  <?php
                            foreach ($urunler as $urun) {?>
                  <form>
                     <div class="form-group">
                        <label for="input-1">Ürün Adı</label>
                        <input type="text" class="form-control" id="input-1" placeholder="Ürün Adını Giriniz"  value="<?=$urun['urun_adi']?>">
                     </div>
                     <div class="form-group">
                        <label for="input-2">Ürün Marka</label>
                        <input type="text" class="form-control" id="input-2" placeholder="Ürün Markasını Giriniz" value="<?=$urun['urun_marka']?>">
                     </div>
                     <div class="form-group">
                        <label for="input-4">Ürün Fiyat</label>
                        <input type="text" class="form-control" id="input-4" placeholder="Ürün Fiyatını Giriniz"  value="<?=$urun['urun_fiyat']?>">
                     </div>
                     <div class="form-group">
                        <label for="input-5">Ürün Resim 1</label>
                        <input type="file" class="form-control" id="input-5" placeholder="Ürünün İlk Resmi" value="<?=$urun['urun_resim']?>">
                     </div>
                     <div class="form-group">
                        <label for="input-5">Ürün Resim 2</label>
                        <input type="file" class="form-control" id="input-5" placeholder="Ürünün İkinci Resmi" value="<?=$urun['urun_resim1']?>">
                     </div>
                     <div class="form-group">
                        <label for="input-5">Ürün Resim 3</label>
                        <input type="file" class="form-control" id="input-5" placeholder="Ürünün Üçüncü Resmi" value="<?=$urun['urun_resim2']?>">
                     </div>
                     <div class="form-group">
                        <label for="input-5">Ürün Resim 4</label>
                        <input type="file" class="form-control" id="input-5" placeholder="Ürünün Dördüncü Resmi" value="<?=$urun['urun_resim3']?>">
                     </div>
                     <div class="form-group">
                        <label for="input-4">Ürün İndirim</label>
                        <input type="text" class="form-control" id="input-4" placeholder="Örnek Yüzde 10 İndirim İçin 10 Yazınız" value="<?=$urun['urun_indirim']?>">
                     </div>
                     <div class="form-group">
                        <label for="input-4">Ürün Kategori</label>
                        <input type="text" class="form-control" id="input-4" placeholder="Ürün Kategori Giriniz"  value="<?=$urun['urun_kategori']?>">
                     </div>
                     <div class="form-group">
                        <label for="input-4">Ürün AltKategorisi</label>
                        <input type="text" class="form-control" id="input-4" placeholder="Ürün AltKategorisi Giriniz" value="<?=$urun['urun_altkategorileri']?>">
                     </div>
                     <div class="form-group">
                        <label for="input-4">Ürün Açıklama</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control" id="input-4" placeholder="HTML Kullanabilirsiniz" value="<?=$urun['urun_aciklama']?>"></textarea>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Kaydet</button>
                     </div>
                  </form>
                  <?php }?> 
               </div>
            </div>
         </div>
      </div>
      <div class="overlay toggle-menu"></div>
      <!--end overlay-->
   </div>
   <!-- End container-fluid-->
</div>