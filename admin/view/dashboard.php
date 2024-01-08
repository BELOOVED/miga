<?php
$sql = "SELECT * FROM siparisler";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$siparisler = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total = count($siparisler);
$sql5 = "SELECT SUM(tutar) as toplamTutar FROM siparisler";
$stmt4 = $pdo->prepare($sql5);
$stmt4->execute();
$total5 = $stmt4->fetch(PDO::FETCH_ASSOC);
?>
<?php
$sql1 = "SELECT * FROM users";

$stmt1 = $pdo->prepare($sql1);
$stmt1->execute();
$users = $stmt1->fetchAll(PDO::FETCH_ASSOC);
$total1 = count($users);

?>
<?php
$sql2 = "SELECT * FROM kategoriler";

$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$kategoriler = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$total2 = count($kategoriler);

?>
<div class="content-wrapper">
    <div class="container-fluid">

  <div class="row mt-3">
    <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Siparişler <span class="float-right badge badge-light">Tamamı</span></p>
           <div class="">
           <h4 class="mb-0 py-3"><?=$total?> <span class="float-right"><i class="fa fa-home"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar" style="width:100%"></div>
             </div>
          </div>
        </div>
      </div>
     </div>


     <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Kullanıcılar <span class="float-right badge badge-light">Tamamı</span></p>
           <div class="">
           <h4 class="mb-0 py-3"><?=$total1?> <span class="float-right"><i class="fa fa-search"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar" style="width:100%"></div>
             </div>
          </div>
            </div>
      </div>
     </div>

     <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Kazançlar <span class="float-right badge badge-light">Tamamı</span></p>
           <div class="">
           <h4 class="mb-0 py-3">₺<?=$total5?> <span class="float-right"><i class="fa fa-try"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar" style="width:45%"></div>
             </div>
          </div>
         </div>
      </div>
     </div>

   </div><!--End Row-->
     
     <div class="card">
       <div class="card-header">Property Order Status
          <div class="btn-group group-round btn-group-sm float-right">
              <button type="button" class="btn btn-white waves-effect waves-light">Monthly</button>
              <button type="button" class="btn btn-light waves-effect waves-light">Weekly</button>
              <button type="button" class="btn btn-light waves-effect waves-light">Daily</button>
            </div>
       </div>
       <div class="card-body">
         <div class="row align-items-center">
           <div class="col-12 col-lg-3 text-center">
             <p class="mt-4">Total Orders</p>
             <h4 class="mb-0">4,350</h4>
             <hr>
             <p>Total Payments</p>
             <h4 class="mb-0">$80,520</h4>
           </div>
           <div class="col-12 col-lg-9">
		     <div class="chart-container-11"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
               <canvas id="dash2-chart1" width="635" height="280" style="display: block; width: 635px; height: 280px;" class="chartjs-render-monitor"></canvas>
			 </div>
           </div>
         </div><!--End Row-->
       </div>
     </div><!--End Card-->
	 
	 <div class="row">
	   <div class="col-lg-6">
	     <div class="card">
		     <div class="card-header">En Pahalı Ürünler
				 <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				  <div class="dropdown-menu dropdown-menu-right">
				  <a class="dropdown-item" href="javascript:void();">Action</a>
				  <a class="dropdown-item" href="javascript:void();">Another action</a>
				  <a class="dropdown-item" href="javascript:void();">Something else here</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="javascript:void();">Separated link</a>
				   </div>
				  </div>
				 </div>
			   </div>
			   
			    <ul class="list-group list-group-flush">
				  <li class="list-group-item">
				    <div class="media align-items-center">
                    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$810,000 . 04 Beds . 03 Baths</small>
					</div>
				   </div>
				  </li>
				  <li class="list-group-item">
				    <div class="media align-items-center">
                    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$2,560,000 . 08 Beds . 07 Baths</small>
					</div>
				   </div>
				  </li>
				  <li class="list-group-item">
				    <div class="media align-items-center">
                    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$910,300 . 03 Beds . 02 Baths</small>
					</div>
				   </div>
				  </li>
				  <li class="list-group-item">
				    <div class="media align-items-center">
                     <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$1,140,650 . 06 Beds . 03 Baths</small>
					</div>
				   </div>
				  </li>
				  <li class="list-group-item">
				    <div class="media align-items-center">
                    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$1,140,650 . 06 Beds . 03 Baths</small>
					</div>
				   </div>
				  </li>
				  <li class="list-group-item">
				    <div class="media align-items-center">
                    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$910,300 . 03 Beds . 02 Baths</small>
					</div>
				   </div>
				  </li>
				</ul>
			<div class="card-footer text-center bg-transparent border-0">
			  <a href="javascript:void();">View all listings</a>
			</div>
           
         </div>
	   </div>
	   
	   <div class="col-lg-6">
	     <div class="card">
		     <div class="card-header">Kategoriler
				 <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				  <div class="dropdown-menu dropdown-menu-right">
				  <a class="dropdown-item" href="javascript:void();">Action</a>
				  <a class="dropdown-item" href="javascript:void();">Another action</a>
				  <a class="dropdown-item" href="javascript:void();">Something else here</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="javascript:void();">Separated link</a>
				   </div>
				  </div>
				 </div>
			   </div>
               
			 <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-white">
					<i class="fa fa-cutlery"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Restaurants</h6>
                </div>
                 <div class="date">
                 Submited List: 250
                 </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-white">
					<i class="fa fa-bed"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Hotels</h6>
                </div>
                 <div class="date">
                 Submited List: 90
                 </div>
                </div>
              </li>
			  <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-white">
					<i class="fa fa-glass"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Nightclubs</h6>
                </div>
                 <div class="date">
                 Submited List: 260
                 </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-white">
					<i class="fa fa-video-camera"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Movie Theaters</h6>
                </div>
                 <div class="date">
                 Submited List: 150
                 </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-white">
					<i class="fa fa-shopping-bag"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Shopping</h6>
                </div>
                 <div class="date">
                 Submited List: 300
                 </div>
                </div>
              </li>
			  <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-white">
					<i class="fa fa-lightbulb-o"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Museums</h6>
                </div>
                 <div class="date">
                 Submited List: 150
                 </div>
                </div>
              </li>
            </ul>
			
			<div class="card-footer text-center border-0">
			  <a href="javascript:void();">View all Categories</a>
			</div>
           
         </div>
	   </div>
	 </div><!--End Row-->

<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->

   </div>