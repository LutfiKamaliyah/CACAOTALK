<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | Admin</title>

	<!-- core CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="/assets/css/animate.min.css" rel="stylesheet"/>

	<!--  Light Bootstrap Table core CSS    -->
	<link href="/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="/assets/css/demo.css" rel="stylesheet" />


	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link href="/assets/css/datatables.min.css" rel="stylesheet" />
	<link href="/css/font-awesome.min.css" rel="stylesheet">
</head><!--/head-->

<body style="background-color:#f5f5f5;">
	<div class="wrapper">
		<div class="sidebar" data-color="red" data-image="/assets/img/sidebar-4.jpg">
    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
    	<div class="logo">
    		<a href="#" class="simple-text">
    			CACAOTALK
    		</a>
    	</div>
    	<ul class="nav">
    		<li>
    			<a href="/tabel">
    				<i class="pe-7s-graph"></i>
    				<p>BUAH KAKAO</p>
    			</a>
    		</li>
    		<li class="active">
    			<a href="/tanam">
    				<i class="pe-7s-leaf"></i>
    				<p>PEMANTAUAN TANAM</p>
    			</a>
    		</li>
    		<li>
    			<a href="/panen">
    				<i class="pe-7s-scissors"></i>
    				<p>PANEN</p>
    			</a>
    		</li>
    		<li>
    			<a href="/penggudangan">
    				<i class="pe-7s-note2"></i>
    				<p>PENGGUDANGAN</p>
    			</a>
    		</li>
    		<li>
    			<a href="/produksi">
    				<i class="pe-7s-graph3"></i>
    				<p>PRODUKSI</p>
    			</a>
    		</li>
    		<li>
    			<a href="/hasilolahan">
    				<i class="pe-7s-cart"></i>
    				<p>HASIL OLAHAN</p>
    			</a>
    		</li>
    		<li>
    			<a href="/validasiPemesanan">
    				<i class="pe-7s-cart"></i>
    				<p>VALIDASI PEMESANAN</p>
    			</a>
    		</li>
    	</ul>
    </div>
</div>
<div class="main-panel">
	<nav class="navbar navbar-default navbar-fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Dashboard</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="">
							Account
						</a>
					</li>
					<li>
						<a href="#">
							Log out
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-user">
						<div class="image">
							<img src="/assets/img/img-cacao-3.jpg" alt="..."/>
						</div>
						<div class="content">
							<div class="author">
								<a href="#">
									<img class="avatar border-gray" src="/assets/img/cacao-1.jpg" alt="..."/>
									<h4 class="title">PEMANTAUAN TANAMAN KAKAO<br />
									</h4>
									<a href="/tanam/create" class="btn btn-primary">Tambah Penanaman</a>
								</div>
								<table class="table table-striped" id="table_tanam">	
									<thead>
										<th>id tanam</th>
										<th>Nama Buah</th>
										<th>tanggal Penyerbukan</th>
										<th>musim Penyerbukan</th>
										<th>Pohon dalam Penyerbukan</th>
										<th>luas lahan</th>
										<th>AKSI</th>
									</thead>
									<tbody>
										<tr>
											@foreach($tanam as $tanam)
											<td>{{$tanam->id_tanam}}</td>
											<td>{{$tanam->buah->nama_buah}}</td>
											<td>{{$tanam->tanggal_tanam}}</td>
											<td>{{$tanam->musim_tanam}}</td>
											<td>{{$tanam->jumlah_bibit}}</td>
											<td>{{$tanam->luas_lahan}}</td>
											<td>
												<a href="/tanam/{{$tanam->id_tanam}}/edit" class="btn btn-info">
													<i class="pe-7s-pen">
													</i>
												</a>
												<a href="/tanam/{{$tanam->id_tanam}}/del" class="btn btn-danger">
													<i class="pe-7s-trash">
													</i>
												</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function htmlbodyHeightUpdate(){
			var height3 = $( window ).height()
			var height1 = $('.nav').height()+50
			height2 = $('.main').height()
			if(height2 > height3){
				$('html').height(Math.max(height1,height3,height2)+10);
				$('body').height(Math.max(height1,height3,height2)+10);
			}
			else
			{
				$('html').height(Math.max(height1,height3,height2));
				$('body').height(Math.max(height1,height3,height2));
			}

		}
		$(document).ready(function () {
			htmlbodyHeightUpdate()
			$( window ).resize(function() {
				htmlbodyHeightUpdate()
			});
			$( window ).scroll(function() {
				height2 = $('.main').height()
				htmlbodyHeightUpdate()
			});
		});
	</script>
	<script src="/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="/assets/js/chartist.min.js"></script>

	<script src="/assets/js/datatables.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="/assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="/assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="/assets/js/demo.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#table_tanam').DataTable();
		});
	</script>
</body>
</html>
