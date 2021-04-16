<body>
	<!--Navbar dan Side Navbar START-->
	<div class="navbar">
		<div>			
			<span class="sidenavToggle" onclick="toggleSidenav()">&#9776></span>
			<p>Aplikasi SPP Sekolah</p>
			<a id="webLogo">L O G O</a>
		</div>
	</div>
	<div class="sidenav" id="sideNavig">
		<a href="<?= base_url('pageDashboard')?> " id="dashboard">Dashboard</a>
		<button class="dropdown-btn">Database 
			<i class="fa fa-caret-down"></i>
		</button>
			<div class="dropdown-container">		
				<a href="<?= base_url('pageCRUD/tablesiswa')?>"id="siswa">Siswa</a>
				<a href="<?= base_url('pageCRUD/tablekelas')?>"id="kelas">Kelas</a>
				<a href="<?= base_url('pageCRUD/tablepetugas')?>"id="petugas">Petugas</a>
			<!--END-->	
			</div>
		<a href="<?= base_url('pageTransaksi')?>" id="transaksi">Transaksi</a>
		<a href="<?= base_url('pageHistori')?>" id="histori">Histori</a>
		<a href="<?= base_url('pageLaporan')?>" id="laporan">Laporan</a>
		<a href="<?= base_url('pageLogin/logout')?>">Log-out</a>
	</div>
	<!--Navbar dan Side Navbar END-->