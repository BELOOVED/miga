<?php
$id = $_GET['q'];
try {
    $sql = "SELECT * FROM urunler";
    if ($id !== null) {
        $sql .= " WHERE urun_kategori_id = :id";
    }
    $stmt = $pdo->prepare($sql);
    if ($id !== null) {
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    }

    $stmt->execute();
    $urunler = $stmt->fetchAll(PDO::FETCH_ASSOC);


} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}

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
               <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
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
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
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