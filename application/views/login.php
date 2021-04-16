<!--Header: partOne.php-->
<body>
	<div class="loginbox d-inline-block">
		<h1>L O G O</h1>	
	</div>

	<div class="loginbox form_SPP">
	<h1>Login</h1>
		<form class="d-inline-table loginTab" method="POST" action="<?= base_url('pageLogin/aksi_login')?>">
			<div class="d-table-row">
				<label class="d-table-cell">Username</label>
				<input class="d-table-cell" type="text" id="username" name="username"/>
			</div>
			<div class="d-table-row">
				<label class="d-table-cell">Password</label>
				<input class="d-table-cell" type="password" id="password" name="password"/>
			</div>
	</div>
			<div class="d-block">
				<button type="submit" class="loginclicky">
					Login
				</button>
			</div>
		</form>
</body>

</html>
