@extends('layout/main')
@section('main')
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Grouped multiple cards for statistics starts here -->
<div class="row grouped-multiple-statistics-card">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
            <div class="d-flex align-items-start mb-sm-1 mb-xl-0 border-right-blue-grey border-right-lighten-5">
              <span class="card-icon primary d-flex justify-content-center mr-3">
                <i class="icon p-1 icon-bar-chart customize-icon font-large-2 p-1"></i>
              </span>
              <div class="stats-amount mr-3">
                <h3 class="heading-text text-bold-600">$95k</h3>
                <p class="sub-heading">Revenue</p>
              </div>
              <span class="inc-dec-percentage">
                <small class="success"><i class="fas fa-long-arrow-alt-up"></i></i> 5.2%</small>
              </span>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
            <div class="d-flex align-items-start mb-sm-1 mb-xl-0 border-right-blue-grey border-right-lighten-5">
              <span class="card-icon danger d-flex justify-content-center mr-3">
                <i class="icon p-1 icon-pie-chart customize-icon font-large-2 p-1"></i>
              </span>
              <div class="stats-amount mr-3">
                <h3 class="heading-text text-bold-600">18.63%</h3>
                <p class="sub-heading">Growth Rate</p>
              </div>
              <span class="inc-dec-percentage">
                <small class="danger"><i class="fas fa-long-arrow-alt-down"></i></i> 2.0%</small>
              </span>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
            <div class="d-flex align-items-start border-right-blue-grey border-right-lighten-5">
              <span class="card-icon success d-flex justify-content-center mr-3">
                <i class="icon p-1 icon-graph customize-icon font-large-2 p-1"></i>
              </span>
              <div class="stats-amount mr-3">
                <h3 class="heading-text text-bold-600">$27k</h3>
                <p class="sub-heading">Sales</p>
              </div>
              <span class="inc-dec-percentage">
                <small class="success"><i class="fas fa-long-arrow-alt-up"></i></i> 10.0%</small>
              </span>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
            <div class="d-flex align-items-start">
              <span class="card-icon warning d-flex justify-content-center mr-3">
                <i class="icon p-1 icon-basket-loaded customize-icon font-large-2 p-1"></i>
              </span>
              <div class="stats-amount mr-3">
                <h3 class="heading-text text-bold-600">13700</h3>
                <p class="sub-heading">Orders</p>
              </div>
              <span class="inc-dec-percentage">
                <small class="danger"><i class="fas fa-long-arrow-alt-down"></i></i> 13.6%</small>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Grouped multiple cards for statistics ends here -->

<!-- Minimal modern charts for power consumption, region statistics and sales etc. starts here -->
<div class="row minimal-modern-charts">
  <!-- power consumption chart -->
  <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-12 col-12 power-consumption-stats-chart">
    <div class="card">
      <div class="card-content pt-2 px-1">
        <div class="row">
          <div class="col-8 d-flex">
            <div class="ml-1">
              <h4 class="power-consumption-stats-title text-bold-500">Power consumption</h4>
            </div>
            <div class="ml-50 mr-50">
              <p>(kWh/100km)</p>
            </div>
          </div>
          <div class="col-4 d-flex justify-content-end pr-3">
            <div class="dark-text">
              <h5 class="power-consumption-active-tab text-bold-500">Week</h5>
            </div>
            <div class="light-text ml-2">
              <h5>Month</h5>
            </div>
          </div>
        </div>
        <div id="spline-chart"></div>
      </div>
    </div>
  </div>

  <!-- tracking stats chart -->
  <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-12 tracking-stats-chart">
    <div class="card chart-with-tabs">
      <div class="card-content">
        <ul class="nav nav-pills card-tabs mb-2 pl-2 border-bottom-blue-grey border-bottom-lighten-5" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link text-primary bg-transparent active px-0 mr-1 py-1" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Charts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary bg-transparent px-0 py-1" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tracking</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="body-header pl-2">
              <div class="d-flex">
                <h3 class="mr-2 body-header-title text-bold-600 mb-0">1,934</h3>
                <small class="success"><i class="fas fa-long-arrow-alt-up"></i></i> +8.0%</small>
              </div>
              <div class="body-header-subtitle">
                <span class="text-muted">Sales</span>
              </div>
            </div>
            <div id="product_sales_column_basic_chart"></div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="tracking-tab-container px-2">
              <div class="tracking-tab-content">
                <div class="top-content d-flex flex-wrap justify-content-start mt-2 pb-1 mb-2">
                  <div class="tracking-heading-icon mr-2">
                    <i class="icon icon-pie-chart"></i>
                  </div>
                  <div class="pb-75">
                    <h5 class="tracking-tab-title mb-0 text-bold-600">Total Sales</h5>
                    <small class="text-muted">Top selling products</small>
                  </div>
                </div>
                <div class="bottom-content">
                  <ul class="tracking-list list-group">
                    <li class="list-group-item border py-1 px-0 d-flex justify-content-between align-items-center">
                      <span class="tracking-task text-bold-600 text-left">Stack Admin</span>
                      <span class="badge badge-pill badge-warning px-1 py-50">Medium</span>
                    </li>
                    <li class="list-group-item border py-1 px-0 d-flex justify-content-between align-items-center">
                      <span class="tracking-task text-bold-600 text-left">Convex Admin</span>
                      <span class="badge badge-pill badge-success px-1 py-50">High</span>
                    </li>
                    <li class="list-group-item border py-1 px-0 d-flex justify-content-between align-items-center">
                      <span class="tracking-task text-bold-600 text-left">Frest Admin</span>
                      <span class="badge badge-pill badge-warning px-1 py-50">Medium</span>
                    </li>
                    <li class="list-group-item border py-1 px-0 d-flex justify-content-between align-items-center">
                      <span class="tracking-task text-bold-600 text-left">Material Admin</span>
                      <span class="badge badge-pill badge-danger px-1 py-50">Low</span>
                    </li>
                    <li class="list-group-item border py-1 px-0 d-flex justify-content-between align-items-center">
                      <span class="tracking-task text-bold-600 text-left">Vuexy Admin</span>
                      <span class="badge badge-pill badge-success px-1 py-50">High</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- region stats chart -->
  <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-12 region-stats-chart">
    <div class="card statistic-card">
      <div class="card-content">
        <div class="top-row statistics-card-title border-bottom-blue-grey border-bottom-lighten-5">
          <div class="py-1 pl-2 primary">
            <span class="mb-1">Region Statistics</span>
          </div>
        </div>
        <div class="statistics-chart d-flex justify-content-center align-self-center">
          <div id="sales_in_region_pie_donut"></div>
        </div>
        <div class="statistics-chart-data d-flex justify-content-center ml-auto mr-auto pb-50 mb-2">
          <div class="collection mr-1">
            <span class="bullet bullet-xs bullet-warning"></span>
            <span class="font-weight-bold">26%</span>
          </div>
          <div class="collection mr-1">
            <span class="bullet bullet-xs bullet-danger"></span>
            <span class="font-weight-bold">44%</span>
          </div>
          <div class="collection mr-1">
            <span class="bullet bullet-xs bullet-primary"></span>
            <span class="font-weight-bold">28%</span>
          </div>
        </div>
        <div class="statistic-card-footer d-flex">
          <div class="column-data py-1 text-center border-top-blue-grey border-top-lighten-5 flex-grow-1 text-center border-right-blue-grey border-right-lighten-5">
            <p class="font-large-1 mb-0">$6.9k</p>
            <span>Revenue</span>
          </div>
          <div class="column-data py-1 flex-grow-1 text-center border-top-blue-grey border-top-lighten-5">
            <p class="font-large-1 mb-0">25</p>
            <span>Sales</span>
          </div>
          <div class="column-data py-1 flex-grow-1 text-center border-top-blue-grey border-top-lighten-5 border-left-blue-grey border-left-lighten-5">
            <p class="font-large-1 mb-0">11</p>
            <span>Products</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- latest update tracking chart-->
  <div class="col-xxl-4 col-xl-8 col-lg-8 col-md-12 col-12 latest-update-tracking">
    <div class="card">
      <div class="card-header latest-update-heading d-flex justify-content-between">
        <h4 class="latest-update-heading-title text-bold-500">Latest Update</h4>
        <div class="dropdown update-year-menu pb-1">
          <a class="bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">2019</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">2018</a>
            <a class="dropdown-item" href="#">2017</a>
            <a class="dropdown-item" href="#">2016</a>
          </div>
        </div>
      </div>
      <div class="card-content latest-update-tracking-list pt-0 pb-1 px-2 position-relative">
        <ul class="list-group">
          <li class="list-group-item pt-0 px-0 latest-updated-item border-0 d-flex justify-content-between">
            <div class="d-flex align-items-center">
              <span class="list-group-item-icon d-inline mr-1">
                <i class="icon text-primary bg-light-primary icon-bag total-products-icon rounded-circle p-50"></i>
              </span>
              <div>
                <p class="mb-25 latest-update-item-name text-bold-600">Total Products</p>
                <small class="font-small-3">1.2k Products</small>
              </div>
            </div>
            <span class="update-profit text-bold-600">$10.5k</span>
          </li>
          <li class="list-group-item px-0 latest-updated-item border-0 d-flex justify-content-between">
            <div class="d-flex align-items-center">
              <span class="list-group-item-icon d-inline mr-1">
                <i class="icon icon-graph bg-light-info text-info total-sales-icon rounded-circle p-50"></i>
              </span>
              <div>
                <p class="mb-25 latest-update-item-name text-bold-600">Total Sales</p>
                <small class="font-small-3">39.2k Sales</small>
              </div>
            </div>
            <span class="update-profit text-bold-600">26M</span>
          </li>
          <li class="list-group-item px-0 latest-updated-item border-0 d-flex justify-content-between">
            <div class="d-flex align-items-center">
              <span class="list-group-item-icon d-inline mr-1">
                <i class="icon icon-bag bg-light-danger text-danger total-products-icon rounded-circle p-50"></i>
              </span>
              <div>
                <p class="mb-25 latest-update-item-name text-bold-600">Total Products</p>
                <small class="font-small-3">1.2k Products</small>
              </div>
            </div>
            <span class="update-profit text-bold-600">$10.5k</span>
          </li>
          <li class="list-group-item px-0 latest-updated-item border-0 d-flex justify-content-between">
            <div class="d-flex align-items-center">
              <div class="list-group-item-icon d-inline mr-1">
                <i class="icon icon-credit-card bg-light-primary text-primary total-revenue-icon rounded-circle p-50"></i>
              </div>
              <div>
                <p class="mb-25 latest-update-item-name text-bold-600">Total Revenue</p>
                <small class="font-small-3">45.5k New Revenue</small>
              </div>
            </div>
            <span class="update-profit text-bold-600">15.6M</span>
          </li>
          <li class="list-group-item px-0 latest-updated-item border-0 d-flex justify-content-between">
            <div class="d-flex align-items-center">
              <span class="list-group-item-icon d-inline mr-1">
                <i class="icon icon-graph bg-light-info text-info total-sales-icon rounded-circle p-50"></i>
              </span>
              <div>
                <p class="mb-25 latest-update-item-name text-bold-600">Total Sales</p>
                <small class="font-small-3">39.2k Sales</small>
              </div>
            </div>
            <span class="update-profit text-bold-600">26M</span>
          </li>
          <li class="list-group-item px-0 latest-updated-item border-0 pb-0 d-flex justify-content-between">
            <div class="d-flex align-items-center">
              <div class="list-group-item-icon d-inline mr-1">
                <i class="icon icon-credit-card bg-light-danger text-danger total-revenue-icon rounded-circle p-50"></i>
              </div>
              <div>
                <p class="mb-25 latest-update-item-name text-bold-600">Total Revenue</p>
                <small class="font-small-3">45.5k New Revenue</small>
              </div>
            </div>
            <span class="update-profit text-bold-600">15.6M</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- info and time tracking chart -->
  <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="card info-time-tracking">
      <div class="card-content">
        <div class="row">
          <div class="col-12 pt-2 pb-2 border-bottom-blue-grey border-bottom-lighten-5">
            <div class="info-time-tracking-title d-flex justify-content-between align-items-center">
              <h4 class="pl-2 mb-0 title-info-time-heading text-bold-500">Information Time Tracking</h4>
              <span class="pr-2">
                <i class="icon icon-settings"></i>
              </span>
            </div>
          </div>
          <div class="col-12">
            <div class="info-time-tracking-content">
              <div class="row">
                <div class="col-md-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                  <div class="general-task-loading pr-2 pl-4 px-sm-4 px-md-2 py-md-2 d-flex justify-content-start">
                    <div id="general_task_radial_bar_chart"></div>
                    <div class="task-content d-flex flex-column align-items-start justify-content-center">
                      <h5 class="font-weight-bold mt-2 mt-sm-0">General task loading</h5>
                      <p class="leading-para">
                        The system automatically detects the loading of your tasks. including sales and revenue.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="pr-2 total-stats pl-4 px-sm-4 px-md-2 py-md-2 d-flex justify-content-start">
                    <div id="info_tracking_total_stats"></div>
                    <div
                      class="pl-2 ml-50 stats-content d-flex flex-column align-items-start justify-content-center pr-2">
                      <h5 class="font-weight-bold">Total Stats</h5>
                      <p class="leading-para">Your criticaly anylyzed success data regarding revenue and sales for the
                        last week.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Minimal modern charts for power consumption, region statistics and sales etc. starts here -->
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block"><a class="customizer-close" href="#"><i class="feather icon-x font-medium-3"></i></a><a class="customizer-toggle bg-danger" href="#">
      <i class="fas fa-cog font-medium-3 fa-spin fa fa-spin fa-fw white"></i>
    </a><div class="customizer-content p-2">
	<h4 class="text-uppercase mb-0">Theme Customizer</h4>
	<hr>
	<p>Customize & Preview in Real Time</p>
	
	<h5 class="mt-1 text-bold-500">Layout Options</h5>
	<ul class="nav nav-tabs nav-underline nav-justified layout-options">
		<li class="nav-item">
			<a class="nav-link layouts active" id="baseIcon-tab21-base" data-toggle="tab" aria-controls="tabIcon21-base" href="#tabIcon21-base" aria-expanded="true">Layouts</a>
		</li>
		<li class="nav-item">
			<a class="nav-link navigation" id="baseIcon-tab22-base" data-toggle="tab" aria-controls="tabIcon22-base" href="#tabIcon22-base" aria-expanded="false">Navigation</a>
		</li>
		<li class="nav-item">
			<a class="nav-link navbar" id="baseIcon-tab23-base" data-toggle="tab" aria-controls="tabIcon23-base" href="#tabIcon23-base" aria-expanded="false">Navbar</a>
		</li>
	</ul>
	<div class="tab-content px-1 pt-1">
		<div role="tabpanel" class="tab-pane active" id="tabIcon21-base" aria-expanded="true" aria-labelledby="baseIcon-tab21-base">
			
				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="collapsed-sidebar" id="collapsed-sidebar">
					<label class="custom-control-label" for="collapsed-sidebar">Collapsed Menu</label>
				</div>
			
				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="fixed-layout" id="fixed-layout">
					<label class="custom-control-label" for="fixed-layout">Fixed Layout</label>
				</div>
			
				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
					<label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
				</div>

				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="static-layout" id="static-layout">
					<label class="custom-control-label" for="static-layout">Static Layout</label>
				</div>
			
		</div>
		<div class="tab-pane" id="tabIcon22-base" aria-labelledby="baseIcon-tab22-base">
			
				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="native-scroll" id="native-scroll">
					<label class="custom-control-label" for="native-scroll">Native Scroll</label>
				</div>
			
				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="right-side-icons" id="right-side-icons">
					<label class="custom-control-label" for="right-side-icons">Right Side Icons</label>
				</div>
			
				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="bordered-navigation" id="bordered-navigation">
					<label class="custom-control-label" for="bordered-navigation">Bordered Navigation</label>
				</div>
			
				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="flipped-navigation" id="flipped-navigation">
					<label class="custom-control-label" for="flipped-navigation">Flipped Navigation</label>
				</div>
			
				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="collapsible-navigation" id="collapsible-navigation">
					<label class="custom-control-label" for="collapsible-navigation">Collapsible Navigation</label>
				</div>
			
				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="static-navigation" id="static-navigation">
					<label class="custom-control-label" for="static-navigation">Static Navigation</label>
				</div>
			
		</div>
		<div class="tab-pane" id="tabIcon23-base" aria-labelledby="baseIcon-tab23-base">
			
				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="brand-center" id="brand-center">
					<label class="custom-control-label" for="brand-center">Brand Center</label>
				</div>
			
				<div class="custom-control custom-checkbox mb-1">
					<input type="checkbox" class="custom-control-input" name="navbar-static-top" id="navbar-static-top">
					<label class="custom-control-label" for="navbar-static-top">Static Top</label>
				</div>
			
		</div>
	</div>

	<hr>

	<h5 class="mt-1 text-bold-500">Navigation Color Options</h5>
	<ul class="nav nav-tabs nav-underline nav-justified color-options">
		<li class="nav-item">
			<a class="nav-link nav-semi-light active" id="color-opt-1" data-toggle="tab" aria-controls="clrOpt1" href="#clrOpt1" aria-expanded="false">Semi Light</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav-semi-dark" id="color-opt-2" data-toggle="tab" aria-controls="clrOpt2" href="#clrOpt2" aria-expanded="false">Semi Dark</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav-dark" id="color-opt-3" data-toggle="tab" aria-controls="clrOpt3" href="#clrOpt3" aria-expanded="false">Dark</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav-light" id="color-opt-4" data-toggle="tab" aria-controls="clrOpt4" href="#clrOpt4" aria-expanded="true">Light</a>
		</li>
	</ul>
	<div class="tab-content px-1 pt-1">
		<div role="tabpanel" class="tab-pane active" id="clrOpt1" aria-expanded="true" aria-labelledby="color-opt-1">
			<div class="row">
				<div class="col-6">
					<h6>Solid</h6>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="default-solid">
							<label class="custom-control-label" for="default-solid">Default</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="primary-solid">
							<label class="custom-control-label" for="primary-solid">Primary</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="danger-solid">
							<label class="custom-control-label" for="danger-solid">Danger</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-success" id="success-solid">
							<label class="custom-control-label" for="success-solid">Success</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="blue">
							<label class="custom-control-label" for="blue">Blue</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="cyan">
							<label class="custom-control-label" for="cyan">Cyan</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="pink">
							<label class="custom-control-label" for="pink">Pink</label>
						</div>
					
				</div>
				<div class="col-6">
					<h6>Gradient</h6>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" checked class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue">
							<label class="custom-control-label" for="bg-gradient-x-grey-blue">Default</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary">
							<label class="custom-control-label" for="bg-gradient-x-primary">Primary</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger">
							<label class="custom-control-label" for="bg-gradient-x-danger">Danger</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success">
							<label class="custom-control-label" for="bg-gradient-x-success">Success</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue">
							<label class="custom-control-label" for="bg-gradient-x-blue">Blue</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan">
							<label class="custom-control-label" for="bg-gradient-x-cyan">Cyan</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink">
							<label class="custom-control-label" for="bg-gradient-x-pink">Pink</label>
						</div>
					
				</div>
			</div>
		</div>
		<div class="tab-pane" id="clrOpt2" aria-labelledby="color-opt-2">
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-sdark-clr" checked class="custom-control-input bg-default" data-bg="bg-default" id="opt-default">
					<label class="custom-control-label" for="opt-default">Default</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="opt-primary">
					<label class="custom-control-label" for="opt-primary">Primary</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="opt-danger">
					<label class="custom-control-label" for="opt-danger">Danger</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="opt-success">
					<label class="custom-control-label" for="opt-success">Success</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="opt-blue">
					<label class="custom-control-label" for="opt-blue">Blue</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="opt-cyan">
					<label class="custom-control-label" for="opt-cyan">Cyan</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="opt-pink">
					<label class="custom-control-label" for="opt-pink">Pink</label>
				</div>
			
		</div>
		<div class="tab-pane" id="clrOpt3" aria-labelledby="color-opt-3">
			<div class="row">
				<div class="col-6">
					<h3>Solid</h3>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="solid-blue-grey">
							<label class="custom-control-label" for="solid-blue-grey">Default</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="solid-primary">
							<label class="custom-control-label" for="solid-primary">Primary</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="solid-danger">
							<label class="custom-control-label" for="solid-danger">Danger</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="solid-success">
							<label class="custom-control-label" for="solid-success">Success</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="solid-blue">
							<label class="custom-control-label" for="solid-blue">Blue</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="solid-cyan">
							<label class="custom-control-label" for="solid-cyan">Cyan</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="solid-pink">
							<label class="custom-control-label" for="solid-pink">Pink</label>
						</div>
					
				</div>

				<div class="col-6">
					<h3>Gradient</h3>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue1">
							<label class="custom-control-label" for="bg-gradient-x-grey-blue1">Default</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary1">
							<label class="custom-control-label" for="bg-gradient-x-primary1">Primary</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger1">
							<label class="custom-control-label" for="bg-gradient-x-danger1">Danger</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success1">
							<label class="custom-control-label" for="bg-gradient-x-success1">Success</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue1">
							<label class="custom-control-label" for="bg-gradient-x-blue1">Blue</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan1">
							<label class="custom-control-label" for="bg-gradient-x-cyan1">Cyan</label>
						</div>
					
						<div class="custom-control custom-radio mb-1">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink1">
							<label class="custom-control-label" for="bg-gradient-x-pink1">Pink</label>
						</div>
					
				</div>
			</div>
		</div>
		<div class="tab-pane" id="clrOpt4" aria-labelledby="color-opt-4">
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey bg-lighten-4" id="light-blue-grey">
					<label class="custom-control-label" for="light-blue-grey">Default</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-primary" data-bg="bg-primary bg-lighten-4" id="light-primary">
					<label class="custom-control-label" for="light-primary">Primary</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-danger" data-bg="bg-danger bg-lighten-4" id="light-danger">
					<label class="custom-control-label" for="light-danger">Danger</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-success" data-bg="bg-success bg-lighten-4" id="light-success">
					<label class="custom-control-label" for="light-success">Success</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-blue" data-bg="bg-blue bg-lighten-4" id="light-blue">
					<label class="custom-control-label" for="light-blue">Blue</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan bg-lighten-4" id="light-cyan">
					<label class="custom-control-label" for="light-cyan">Cyan</label>
				</div>
			
				<div class="custom-control custom-radio mb-1">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-pink" data-bg="bg-pink bg-lighten-4" id="light-pink">
					<label class="custom-control-label" for="light-pink">Pink</label>
				</div>
			
		</div>
	</div>

	<hr>

	<h5 class="mt-1 mb-1 text-bold-500">Menu Color Options</h5>
	<div class="form-group">
		<!-- Outline Button group -->
		<div class="btn-group customizer-sidebar-options" role="group" aria-label="Basic example">
			<button type="button" class="btn btn-outline-info" data-sidebar="menu-light">Light Menu</button>
			<button type="button" class="btn btn-outline-info" data-sidebar="menu-dark">Dark Menu</button>
		</div>
	</div>
</div>
    </div>
    @endsection