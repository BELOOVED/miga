<?php
$sql = "SELECT * FROM users ORDER BY id DESC";

if(isset($_GET['type']) && !empty($_GET['type'])) {
    $type = $_GET['type'];

    $sql .= " WHERE status = :status";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':status', $type, PDO::PARAM_INT);
} else {
    $stmt = $pdo->prepare($sql);
}

$stmt->execute();
$kullanicilar = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
         <div class="col-sm-9">
            <h4 class="page-title">Kullanıcılar</h4>
         </div>
         <div class="col-sm-3">
            <div class="btn-group float-sm-right">
               <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Ayarlar</button>
               <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
               <span class="caret"></span>
               </button>
               <div class="dropdown-menu">
                  <a href="javaScript:void();" class="dropdown-item">Yeni Kullanıcı Ekle</a>
                  <a href="javaScript:void();" class="dropdown-item">Tüm Kullanıcları Sil</a>
                  <a href="javaScript:void();" class="dropdown-item">Tüm Sepetleri Sil</a>
                  <a href="javaScript:void();" class="dropdown-item">Tüm Adresleri Sil</a>
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
                              <th scope="col">Adı Soyadı</th>
                              <th scope="col">Telefon</th>
                              <th scope="col">Email</th>
                              <th scope="col">Sepetteki Ürünleri</th>
                              <th scope="col">Bulunduğu Sayfa</th>
                              <th scope="col">Adres</th>
                              <th scope="col">Siparişleri</th>
                              <th scope="col">IP</th>
                              <th scope="col">Kayıt Tarihi</th>
                              <th scope="col">Son Görülme</th>
                              <th scope="col">İşlem Yap</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($kullanicilar as $kullanici) {?>
                            <tr>
                              <th scope="row"><?=$kullanici['id']?></th>
                              <td><?=$kullanici['adi']?> <?=$kullanici['soyadi']?></td> 
                              <td><?=$kullanici['phone']?></td> 
                              <td><?=$kullanici['eposta']?></td> 
                              <td ><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smalllsizemodal<?=$kullanici['id']?>">Göster</button></td> 
                              <td><?=$kullanici['sayfa']?></td> 
                              <td ><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smallsizemodal<?=$kullanici['id']?>">Göster</button></td>
                              <td ><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smallllsizemodal<?=$kullanici['id']?>">Göster</button></td>
                              <td><?=$kullanici['ip']?></td> 
                              <td>
                                <?php
                                $mysqlDate = $kullanici['time'];
                                $dateTime = new DateTime($mysqlDate);
                                $now = new DateTime();

                                $diff = $now->diff($dateTime);
                                
                                if ($diff->days == 0) {
                                    $hours = $diff->h;
                                    $minutes = $diff->i;
                                    $seconds = $diff->s;

                                    if ($hours > 0) {
                                        echo "$hours saat önce";
                                    } elseif ($minutes > 0) {
                                        echo "$minutes dakika önce";
                                    } else {
                                        echo "$seconds saniye önce";
                                    }
                                } else {
                                    setlocale(LC_TIME, 'tr_TR.utf8', 'tr_TR', 'tr', 'turkish');
                                    echo strftime('%e %B %Y %H:%M', $dateTime->getTimestamp());
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                $mysqlDate = $kullanici['currenttime'];
                                $dateTime = new DateTime($mysqlDate);
                                $now = new DateTime();

                                $diff = $now->diff($dateTime);

                                if ($diff->days == 0) {
                                    $hours = $diff->h;
                                    $minutes = $diff->i;
                                    $seconds = $diff->s;

                                    if ($hours > 0) {
                                        echo "$hours saat önce";
                                    } elseif ($minutes > 0) {
                                        echo "$minutes dakika önce";
                                    } else {
                                        echo "$seconds saniye önce";
                                    }
                                } else {
                                    setlocale(LC_TIME, 'tr_TR.utf8', 'tr_TR', 'tr', 'turkish');
                                    echo strftime('%e %B %Y %H:%M', $dateTime->getTimestamp());
                                }
                                ?>
                            </td>



                              <td>
                                
                              <button class="btn btn-primary btn-block m-1" onclick="window.location.href = 'kullaniciduzenle?id=<?=$kullanici['id']?>'" >Düzenle</button>
                              <button class="btn btn-primary btn-block m-1" onclick="deleteData('users', <?=$kullanici['id']?>, this)">Sil</button>
                              </td>  
                           </tr>
                            <?php }?> 
                           
                        </tbody>
                        <tfoot>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Adı Soyadı</th>
                              <th scope="col">Telefon</th>
                              <th scope="col">Email</th>
                              <th scope="col">Sepetteki Ürünleri</th>
                              <th scope="col">Bulunduğu Sayfa</th>
                              <th scope="col">Adres</th>
                              <th scope="col">Siparişleri</th>
                              <th scope="col">IP</th>
                              <th scope="col">Kayıt Tarihi</th>
                              <th scope="col">Son Görülme</th>
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
<?php
                            foreach ($kullanicilar as $kullanici) {?>
            <div class="modal fade" id="smallsizemodal<?=$kullanici['id']?>" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Adres Bilgileri</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Adres Bilgileri</h5>
                                <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">İl</th>
                                        <th scope="col">İlçe</th>
                                        <th scope="col">Mahalle</th>
                                        <th scope="col">Bina No</th>
                                        <th scope="col">Kat No</th>
                                        <th scope="col">Daire No</th>
                                        <th scope="col">Adres Tarifi</th>
                                        <th scope="col">Adres İsmi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><?=$kullanici['sehir']?></td>
                                        <td><?=$kullanici['ilce']?></td>
                                        <td><?=$kullanici['mahalle']?></td>
                                        <td><?=$kullanici['bina_no']?></td>
                                        <td><?=$kullanici['kat_no']?></td>
                                        <td><?=$kullanici['daire_no']?></td>
                                        <td><?=$kullanici['adres_tarifi']?></td>
                                        <td><?=$kullanici['adres_ismi']?></td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-white btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Kapat</button>
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-check-square-o"></i> Sipariş Güncelle </button>
                      </div>
                    </div>
                  </div>
            </div>
            <?php }?>