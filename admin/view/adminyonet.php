<?php
$sql = "SELECT * FROM admin_users ORDER BY id DESC";

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
            <h4 class="page-title">Admin Ekle / Düzenle</h4>
         </div>
         <div class="col-sm-3">
            <div class="btn-group float-sm-right">
               <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Ayarlar</button>
               <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
               <span class="caret"></span>
               </button>
               <div class="dropdown-menu">
               <button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smalllsizemodal">Admin Ekle</button>
                  <a href="javascript:;" onclick="deleteAllData('admin_users')" class="dropdown-item">Tüm Adminleri Sil (Önerilmez)</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Adminler</div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="default-datatable" class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Kullanıcı Adı</th>
                              <th scope="col">Şifre</th>
                              <th scope="col">İşlem Yap</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($kullanicilar as $kullanici) {?>
                            <tr>
                              <th scope="row"><?=$kullanici['id']?></th>
                              <td><?php echo isset($kullanici['phone']) ? $kullanici['phone'] : 'Kullanıcı Adı Yok';?></td>
                              <td><?php echo isset($kullanici['eposta']) ? $kullanici['eposta'] : 'Şifre Yok';?></td>
                              
                              
                              <td>
                                
                              <button class="btn btn-primary btn-block m-1" data-toggle="modal" data-target="#smallsizemodal<?=$kullanici['id']?>">Düzenle</button>
                              <button class="btn btn-primary btn-block m-1" onclick="deleteData('admin_users', <?=$kullanici['id']?>, this)">Sil</button>
                              </td>  
                           </tr>
                            <?php }?> 
                           
                        </tbody>
                        <tfoot>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Kullanıcı Adı</th>
                              <th scope="col">Şifre</th>
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
                        <h5 class="modal-title">Admin Düzenle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Admin Düzenle</div>
                                    <hr>
                                    <form>
                                    <div class="form-group">
                                        <label for="input-1">Kullanıcı Adı</label>
                                        <input name="kategori_adi" type="text" class="form-control" id="input-1" placeholder="Kullanıcı Adını yazınız" value="<?php echo isset($kullanici['admin_login']) ? $kullanici['admin_login'] : 'Kullanıcı Adı Bulunamadı';?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-2">Şifre</label>
                                        <input name="altkategoriler" type="text" class="form-control" id="input-2" placeholder="Şifre Giriniz" value="<?php echo isset($kullanici['admin_password']) ? $kullanici['admin_password'] : 'Şifre Bulunamadı';?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Güncelle</button>
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
                        <h5 class="modal-title">Admin Ekle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Admin İçerikleri</div>
                                    <hr>
                                    <form>
                                    <div class="form-group">
                                        <label for="input-1">Kullanıcı Adı</label>
                                        <input name="kategori_adi" type="text" class="form-control" id="input-1" placeholder="Kullanıcı Adı Giriniz" >
                                    </div>
                                    <div class="form-group">
                                        <label for="input-2">Şifre</label>
                                        <input name="altkategoriler" type="text" class="form-control" id="input-2" placeholder="Şifre Giriniz">
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