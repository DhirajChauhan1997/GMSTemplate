	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">

		<div class="row">
			<div class="col-5 align-self-center">
				<h4 class="page-title">Dashboard</h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Library</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="col-7 align-self-center">
				<div class="d-flex no-block justify-content-end align-items-center">
					<div class="m-r-10">
						<div class="lastmonth"></div>
					</div>
					<div class=""><small>LAST MONTH</small>
						<h4 class="text-info m-b-0 font-medium">$58,256</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Sales chart -->
		<!-- ============================================================== -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="d-md-flex align-items-center">
							<div>
								<h4 class="card-title">Sales Summary</h4>
								<h5 class="card-subtitle">Overview of Latest Month</h5>
							</div>
							<div class="ml-auto d-flex no-block align-items-center">
								<ul class="list-inline font-12 dl m-r-15 m-b-0">
									<li class="list-inline-item text-info"><i class="fa fa-circle"></i> Iphone</li>
									<li class="list-inline-item text-primary"><i class="fa fa-circle"></i> Ipad</li>
								</ul>
								<div class="dl">
									<select class="custom-select">
										<option value="0" selected>Monthly</option>
										<option value="1">Daily</option>
										<option value="2">Weekly</option>
										<option value="3">Yearly</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- column -->
							<div class="col-lg-4">
								<h1 class="m-b-0 m-t-30">$6,890.68</h1>
								<h6 class="font-light text-muted">Current Month Earnings</h6>
								<h3 class="m-t-30 m-b-0">1,540</h3>
								<h6 class="font-light text-muted">Current Month Sales</h6>
								<a class="btn btn-info m-t-20 p-15 p-l-25 p-r-25 m-b-20" href="javascript:void(0)">Last Month Summary</a>
							</div>
							<!-- column -->
							<div class="col-lg-8">
								<div class="campaign ct-charts"></div>
							</div>
							<!-- column -->
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- Info Box -->
					<!-- ============================================================== -->
					<div class="card-body border-top">
						<div class="row m-b-0">
							<!-- col -->
							<div class="col-lg-3 col-md-6">
								<div class="d-flex align-items-center">
									<div class="m-r-10"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>
									<div><span>Wallet Balance</span>
										<h3 class="font-medium m-b-0">$3,567.53</h3>
									</div>
								</div>
							</div>
							<!-- col -->
							<!-- col -->
							<div class="col-lg-3 col-md-6">
								<div class="d-flex align-items-center">
									<div class="m-r-10"><span class="text-cyan display-5"><i class="mdi mdi-star-circle"></i></span></div>
									<div><span>Referral Earnings</span>
										<h3 class="font-medium m-b-0">$769.08</h3>
									</div>
								</div>
							</div>
							<!-- col -->
							<!-- col -->
							<div class="col-lg-3 col-md-6">
								<div class="d-flex align-items-center">
									<div class="m-r-10"><span class="text-info display-5"><i class="mdi mdi-shopping"></i></span></div>
									<div><span>Estimate Sales</span>
										<h3 class="font-medium m-b-0">5489</h3>
									</div>
								</div>
							</div>
							<!-- col -->
							<!-- col -->
							<div class="col-lg-3 col-md-6">
								<div class="d-flex align-items-center">
									<div class="m-r-10"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>
									<div><span>Earnings</span>
										<h3 class="font-medium m-b-0">$23,568.90</h3>
									</div>
								</div>
							</div>
							<!-- col -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Sales chart -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Email campaign chart -->
		<!-- ============================================================== -->
		<div class="row">
			<div class="col-lg-8 col-xl-6">
				<div class="card card-hover">
					<div class="card-body">
						<div class="d-md-flex align-items-center">
							<div>
								<h4 class="card-title">Email Campaigns</h4>
								<h5 class="card-subtitle">Overview of Email Campaigns</h5>
							</div>
							<div class="ml-auto align-items-center">
								<div class="dl">
									<select class="custom-select">
										<option value="0" selected>Monthly</option>
										<option value="1">Daily</option>
										<option value="2">Weekly</option>
										<option value="3">Yearly</option>
									</select>
								</div>
							</div>
						</div>
						<!-- column -->
						<div class="row m-t-40">
							<!-- column -->
							<div class="col-lg-6">
								<div id="visitor" style="height:290px; width:100%;" class="m-t-20"></div>
							</div>
							<!-- column -->
							<div class="col-lg-6">
								<h1 class="display-6 m-b-0 font-medium">45%</h1>
								<span>Open Ratio for Campaigns</span>
								<ul class="list-style-none">
									<li class="m-t-20"><i class="fas fa-circle m-r-5 text-cyan font-12"></i> Open Ratio <span class="float-right">45%</span></li>
									<li class="m-t-20"><i class="fas fa-circle m-r-5 text-info font-12"></i> Clicked Ratio <span class="float-right">14%</span></li>
									<li class="m-t-20"><i class="fas fa-circle m-r-5 text-orange font-12"></i> Un-Open Ratio <span class="float-right">25%</span></li>
									<li class="m-t-20"><i class="fas fa-circle m-r-5 text-primary font-12"></i> Bounced Ratio <span class="float-right">17%</span></li>
								</ul>
							</div>
						</div>
						<!-- column -->
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xl-6">
				<div class="card card-hover">
					<div class="card-body" style="background:url(assets/images/background/active-bg.png) no-repeat top center;">
						<div class="p-t-20 text-center">
							<i class="mdi mdi-file-chart display-4 text-orange d-block"></i>
							<span class="display-4 d-block font-medium">368</span>
							<span>Active Visitors on Site</span>
							<!-- Progress -->
							<div class="progress m-t-40" style="height:4px;">
								<div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar bg-orange" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<!-- Progress -->
							<!-- row -->
							<div class="row m-t-30 m-b-20">
								<!-- column -->
								<div class="col-4 border-right text-left">
									<h3 class="m-b-0 font-medium">60%</h3>Desktop
								</div>
								<!-- column -->
								<div class="col-4 border-right">
									<h3 class="m-b-0 font-medium">28%</h3>Mobile
								</div>
								<!-- column -->
								<div class="col-4 text-right">
									<h3 class="m-b-0 font-medium">12%</h3>Tablet
								</div>
							</div>
							<a href="javascript:void(0)" class="waves-effect waves-light m-t-20 btn btn-lg btn-info accent-4 m-b-20">View More Details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Email campaign chart -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Ravenue - page-view-bounce rate -->
		<!-- ============================================================== -->
		<div class="row">
			<!-- column -->
			<div class="col-lg-4">
				<div class="card bg-info text-white  card-hover">
					<div class="card-body">
						<h4 class="card-title">Revenue Statistics</h4>
						<div class="d-flex align-items-center m-t-30">
							<div class="" id="ravenue"></div>
							<div class="ml-auto">
								<h3 class="font-medium white-text m-b-0">$351</h3><span class="white-text op-5">Jan 10 - Jan 20</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- column -->
			<div class="col-lg-4">
				<div class="card bg-cyan text-white  card-hover">
					<div class="card-body">
						<h4 class="card-title">Page Views</h4>
						<h3 class="white-text m-b-0"><i class="ti-arrow-up"></i> 6548</h3>
					</div>
					<div class="m-t-20" id="views"></div>
				</div>
			</div>
			<!-- column -->
			<div class="col-lg-4">
				<div class="card  card-hover">
					<div class="card-body">
						<h4 class="card-title">Bounce Rate</h4>
						<div class="d-flex no-block align-items-center m-t-30">
							<div class="">
								<h3 class="font-medium m-b-0">56.33%</h3><span class="">Total Bounce</span>
							</div>
							<div class="ml-auto">
								<div style="max-width:150px; height:60px;" class="m-b-40">
									<canvas id="bouncerate"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
