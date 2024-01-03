<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Migros Admin</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-theme bg-theme1">



<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Migros Admin</h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-img" src="https://i.ibb.co/JngyMRP/photo-2023-11-22-17-31-24.jpg" alt="user avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name">xAmphitrite</h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
            <li><a href="/"><i class="icon-user"></i>  Anasayfa</a></li>
            <li><a href="adminyonet"><i class="icon-user"></i>  Admin Düzenle</a></li>
            <li><a href="siteyarlari"><i class="icon-settings"></i> Site Ayarları</a></li>
      <li><a href="logOut();"><i class="icon-power"></i> Çıkış</a></li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu">
   <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Anasayfa</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
        
		  <li><a href="gunlukozet"><i class="zmdi zmdi-dot-circle-alt"></i>  Günlük Özet</a></li>
		  <li><a href="aylikozet"><i class="zmdi zmdi-dot-circle-alt"></i>  Aylık Özet</a></li>

		</ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Ürünler</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
    <li><a href="urunler"><i class="zmdi zmdi-dot-circle-alt"></i> Tüm Ürünler</a></li>
        <?php
                            $sql = "SELECT * FROM kategoriler";

                            $stmt = $pdo->prepare($sql);
                            $stmt->execute();

                            $kategoriler = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($kategoriler as $kategori) {?>
		  <li><a href="urunler?type=<?=$kategori['id']?>"><i class="zmdi zmdi-dot-circle-alt"></i> <?=$kategori['kategori_adi']?></a></li>
          <?php }?> 
		  <li><a href="kategoriduzenle"><i class="zmdi zmdi-dot-circle-alt"></i> Kategorileri Düzenle</a></li>

		</ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Siparişler</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
        
		  <li><a href="kredikarti"><i class="zmdi zmdi-dot-circle-alt"></i>  Kredi Kartı</a></li>
		  <li><a href="iban"><i class="zmdi zmdi-dot-circle-alt"></i>  IBAN</a></li>

		</ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Kullanıcılar</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
        
		  <li><a href="kullanicilar?type=0"><i class="zmdi zmdi-dot-circle-alt"></i>  Kayıt Olanlar</a></li>
		  <li><a href="kullanicilar?type=1"><i class="zmdi zmdi-dot-circle-alt"></i>  Giriş Yapanlar</a></li>

		</ul>
      </li>
     
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-light badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
        <span class="badge badge-light">12</span>
         <li class="list-group-item d-flex justify-content-between align-items-center">
          yeni sipariş var
          
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">Tün Ödemeleri Gör</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
        <span class="badge badge-info">14</span>
          <li class="list-group-item d-flex justify-content-between align-items-center">
          yeni kullanıcı var
          
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">Tüm Kullanıcıları Gör</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://i.ibb.co/JngyMRP/photo-2023-11-22-17-31-24.jpg" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://i.ibb.co/JngyMRP/photo-2023-11-22-17-31-24.jpg" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">xAmphitrite</h6>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item" onclick="window.location.href = 'kredikarti'"><i class="icon-wallet mr-2"></i> Loglar</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item" onclick="window.location.href= 'adminyonet'"><i class="icon-user mr-2"></i> Admini Düzenle</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item" onclick="window.location.href= 'siteyarlari'"><i class="icon-settings mr-2"></i> Site Ayarları</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item" onclick="logOut()"><i class="icon-power mr-2"></i> Çıkış</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>