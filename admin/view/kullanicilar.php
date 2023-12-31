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
               <button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smalllsizemodal">Kullanıcı Ekle</button>
                  <a href="javascript:;" onclick="deleteAllData('users')" class="dropdown-item">Tüm Kullanıcları Sil</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Kullanıcılar</div>
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
                              <td><?php if ($kullanici['adi'] !== null || $kullanici['soyadi'] !== null) {echo $kullanici['adi'] ?? '';echo ' ';echo $kullanici['soyadi'] ?? ''; } else {echo 'Ad Soyad Yok';}?></td>
                              <td><?php echo isset($kullanici['phone']) ? $kullanici['phone'] : 'Telefon Girilmemiş';?></td>
                              <td><?php echo isset($kullanici['eposta']) ? $kullanici['eposta'] : 'E-Mail Girilmemiş';?></td>
                              <td ><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smalllsizemodal<?=$kullanici['id']?>">Göster</button></td> 
                              <td style="text-transform: capitalize; color: #fff; text-shadow: 0 0 5px #fff;">
                                <?php
                                if (strpos($kullanici['sayfa'], 'urunler/') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank"> Ürünleri İnceliyor</a>';
                                }elseif (strpos($kullanici['sayfa'], 'urun/') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Ürün Sayfasında</a>';
                                }elseif (strpos($kullanici['sayfa'], 'sepetim') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Sepette!</a>';
                                }elseif (strpos($kullanici['sayfa'], 'odeme') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Ödeme Sayfasında!</a>';
                                }elseif (strpos($kullanici['sayfa'], 'adres') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Adres Dolduruyor!</a>';
                                }elseif (strpos($kullanici['sayfa'], 'teslimat') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Teslimat Tarihi Seçiyor!</a>';
                                }elseif (strpos($kullanici['sayfa'], 'anasayfa') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Anasayfada!</a>';
                                }elseif (strpos($kullanici['sayfa'], 'kategoriler') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Kategorileri İnceliyor!</a>';
                                }elseif (strpos($kullanici['sayfa'], 'giris') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Giriş Yapıyor!</a>';
                                }elseif (strpos($kullanici['sayfa'], 'kayit') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Kayıt Oluyor!</a>';
                                }elseif (strpos($kullanici['sayfa'], 'kampanyalar') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Kampanyalara Bakıyor!</a>';
                                }elseif (strpos($kullanici['sayfa'], 'hesabim') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Hesabım Sayfasında!</a>';
                                }elseif (strpos($kullanici['sayfa'], 'uyelik') !== false) {
                                    $url = '/' . $kullanici['sayfa'];
                                    echo '<a href="' . $url . '" target="_blank">Üye Olabilir!</a>';
                                } else {
                                    echo !empty($kullanici['sayfa']) ? $kullanici['sayfa'] : 'Aktif Değil';
                                }
                                ?>
                            </td>

                              <td ><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smallsizemodal<?=$kullanici['id']?>">Göster</button></td>
                              <td ><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smallllsizemodal<?=$kullanici['id']?>">Göster</button></td>
                              <td><?php echo isset($kullanici['ip']) ? $kullanici['ip'] : 'IP Yok';?></td>
                              <td style="text-transform: capitalize; color: green; text-shadow: 0 0 5px green;">
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
                            <td style="text-transform: capitalize; color: green; text-shadow: 0 0 5px green;">
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
                                
                              <button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smalllllsizemodal<?=$kullanici['id']?>">Düzenle</button>
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
                                        <td><?php echo isset($kullanici['sehir']) ? $kullanici['sehir'] : 'İl Girilmemiş';?></td>
                                        <td><?php echo isset($kullanici['ilce']) ? $kullanici['ilce'] : 'İlçe Girilmemiş';?></td>
                                        <td><?php echo isset($kullanici['mahalle']) ? $kullanici['mahalle'] : 'Mahalle Girilmemiş';?></td>
                                        <td><?php echo isset($kullanici['bina_no']) ? $kullanici['bina_no'] : 'Bina No Girilmemiş';?></td>
                                        <td><?php echo isset($kullanici['kat_no']) ? $kullanici['kat_no'] : 'Kat No Girilmemiş';?></td>
                                        <td><?php echo isset($kullanici['daire_no']) ? $kullanici['daire_no'] : 'Daire No Girilmemiş';?></td>
                                        <td><?php echo isset($kullanici['adres_tarifi']) ? $kullanici['adres_tarifi'] : 'Adres Tarifi Yok';?></td>
                                        <td><?php echo isset($kullanici['adres_ismi']) ? $kullanici['adres_ismi'] : 'Adres İsmi Yok';?></td>
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
                      </div>
                    </div>
                  </div>
            </div>
            <?php }?>
            <?php
                            foreach ($kullanicilar as $kullanici) {?>
            <div class="modal fade" id="smalllllsizemodal<?=$kullanici['id']?>" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Kullanıcıyı Düzenle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Kullanıcıyı Düzenle</div>
                                    <hr>
                                    <form>
                                    <div class="form-group">
                                        <label for="input-1">Adı</label>
                                        <input name="kategori_adi" type="text" class="form-control" id="input-1" placeholder="Adını Giriniz" value="<?=$kullanici['adi']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-2">Soyadı</label>
                                        <input name="altkategoriler" type="text" class="form-control" id="input-2" placeholder="Soyadını Giriniz"  value="<?=$kullanici['soyadi']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Telefon</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Telefon Giriniz"  value="<?=$kullanici['phone']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">E-Posta</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="E-Posta Giriniz" value="<?=$kullanici['eposta']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">İl</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="İl Giriniz" value="<?=$kullanici['sehir']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">İlçe</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="İlçe Giriniz" value="<?=$kullanici['ilce']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Mahalle</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Mahalle Giriniz" value="<?=$kullanici['mahalle']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Adres İsmi</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Adres İsmi Giriniz"  value="<?=$kullanici['adres_ismi']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Bina No</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Bina No Giriniz" value="<?=$kullanici['bina_no']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Kat No</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Kat No Giriniz" value="<?=$kullanici['kat_no']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Daire No</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Daire No Giriniz" value="<?=$kullanici['daire_no']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Adres Tarifi</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Adres Tarifi Giriniz" value="<?=$kullanici['adres_tarifi']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Siparişleri</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Ürünlerin ID numaralarına göre yazınız. Örneğin(1,2,3)"  value="<?=$kullanici['siparisleri']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">IP</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="IP Giriniz. Örneğin (255.255.255.255)" value="<?=$kullanici['ip']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Kayıt Olunan Tarih</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Örneğin (2024-01-07 12:57:52)" value="<?=$kullanici['time']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Son Görülme Tarihi</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="rneğin (2024-01-07 15:57:52)" value="<?=$kullanici['currenttime']?>">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Ekle</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-white btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Kapat</button>
                      </div>
                    </div>
                  </div>
            </div>
            <?php }?>
            <div class="modal fade" id="smalllsizemodal" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Kullanıcı Ekle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Kullanıcı Bilgileri</div>
                                    <hr>
                                    <form>
                                    <div class="form-group">
                                        <label for="input-1">Adı</label>
                                        <input name="kategori_adi" type="text" class="form-control" id="input-1" placeholder="Adını Giriniz" >
                                    </div>
                                    <div class="form-group">
                                        <label for="input-2">Soyadı</label>
                                        <input name="altkategoriler" type="text" class="form-control" id="input-2" placeholder="Soyadını Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Telefon</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Telefon Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">E-Posta</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="E-Posta Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">İl</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="İl Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">İlçe</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="İlçe Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Mahalle</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Mahalle Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Adres İsmi</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Adres İsmi Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Bina No</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Bina No Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Kat No</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Kat No Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Daire No</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Daire No Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Adres Tarifi</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Adres Tarifi Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Siparişleri</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Ürünlerin ID numaralarına göre yazınız. Örneğin(1,2,3)">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">IP</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="IP Giriniz. Örneğin (255.255.255.255)">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Kayıt Olunan Tarih</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Örneğin (2024-01-07 12:57:52)">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Son Görülme Tarihi</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="rneğin (2024-01-07 15:57:52)">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Ekle</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-white btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Kapat</button>
                      </div>
                    </div>
                  </div>
            </div>