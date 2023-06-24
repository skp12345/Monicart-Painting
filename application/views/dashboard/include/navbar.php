<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php ?>">Hi,&nbsp;&nbsp;<small><?php echo $_SESSION['admin_email'];?></a>
		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item mx-4">
					<a
						class="nav-link active"
						aria-current="page"
						href="<?php echo site_url();?>home"
						>Home</a
					>
				</li>
			</ul>
			<form class="d-flex" role="search">
				<a
					class="btn btn-outline-danger"
					href="<?php echo site_url();?>dash/logout"
					>Logout</a
				>
			</form>
		</div>
	</div>
</nav>
<!-- navbar -->