<?php
$sql = "SELECT * FROM kategoriler ORDER BY id DESC";

if(isset($_GET['type']) && !empty($_GET['type'])) {
    $type = $_GET['type'];

    $sql .= " WHERE status = :status";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':status', $type, PDO::PARAM_INT);
} else {
    $stmt = $pdo->prepare($sql);
}

$stmt->execute();
$kategoriler = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
         <div class="col-sm-9">
            <h4 class="page-title">Kategoriler</h4>
         </div>
         <div class="col-sm-3">
            <div class="btn-group float-sm-right">
               <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Ayarlar</button>
               <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
               <span class="caret"></span>
               </button>
               <div class="dropdown-menu">
                  <a href="javascript:;" class="dropdown-item">Yeni Kategori Ekle</a>
                  <a href="javascript:;" onclick="deleteAllData('users')" class="dropdown-item">Tüm Kategorileri Sil</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Kategoriler</div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="default-datatable" class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Kategori Adı</th>
                              <th scope="col">Altkategorileri</th>
                              <th scope="col">Markalar</th>
                              <th scope="col">İşlem Yap</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($kategoriler as $kategori) {?>
                            <tr>
                              <th scope="row"><?=$kategori['id']?></th>
                              <td><?php echo isset($kategori['kategori_adi']) ? $kategori['kategori_adi'] : 'Kategori Adı Bulunamadı';?></td>
                              <td><?php echo isset($kategori['altkategoriler']) ? $kategori['altkategoriler'] : 'Altkategori Bulunamadı';?></td>
                              <td><?php echo isset($kategori['markalar']) ? $kategori['markalar'] : 'Markalar Bulunamadı';?></td>

                              <td>
                              <button class="btn btn-primary btn-block m-1" onclick="window.location.href = 'kullaniciduzenle?id=<?=$kategori['id']?>'" >Düzenle</button>
                              <button class="btn btn-primary btn-block m-1" onclick="deleteData('kategoriler', <?=$kategori['id']?>, this)">Sil</button>
                              </td>  
                           </tr>
                            <?php }?> 
                           
                        </tbody>
                        <tfoot>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Kategori Adı</th>
                              <th scope="col">Altkategorileri</th>
                              <th scope="col">Markalar</th>
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
                            foreach ($kategoriler as $kategori) {?>
            <div class="modal fade" id="smallsizemodal<?=$kategori['id']?>" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Kategoriyi Düzenle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Kategori İçerikleri</div>
                                    <hr>
                                    <form>
                                    <div class="form-group">
                                        <label for="input-1">Kategori Adı</label>
                                        <input name="kategori_adi" type="text" class="form-control" id="input-1" placeholder="Kategori Adı" value="<?php echo isset($kategori['kategori_adi']) ? $kategori['kategori_adi'] : 'Kategori Adı Bulunamadı';?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-2">Altkategorileri</label>
                                        <input name="altkategoriler" type="text" class="form-control" id="input-2" placeholder="Altkategorileri" value="<?php echo isset($kategori['altkategoriler']) ? $kategori['altkategoriler'] : 'Altkategoriler Bulunamadı';?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Markalar</label>
                                        <input name="markalar" type="text" class="form-control" id="input-3" placeholder="Markalar" value="<?php echo isset($kategori['markalar']) ? $kategori['markalar'] : 'Markalar Bulunamadı';?>">
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