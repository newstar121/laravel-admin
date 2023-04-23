<!-- @@include("partials/main.html") -->
@relativeInclude('partials.main')
<link rel="stylesheet" href="assets/css/custom.css">
<head>

        <!-- @@include("partials/title-meta.html", {"title": "Dashboard"}) -->
        @relativeInclude('partials.title-meta')

        <!-- @@include("partials/head-css.html") -->
        @relativeInclude('partials.head-css')

    </head>

    <!-- @@include("partials/body.html") -->
    @relativeInclude('partials.body')

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- @@include("partials/menu.html") -->
            @relativeInclude('partials.menu')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <div class="page-title">
                                        <h4 class="mb-0 font-size-18">Dashboard</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item active">Welcome to Agroxa Dashboard</li>
                                        </ol>
                                    </div>

                                    <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <div id="header-chart-1" data-colors='["--bs-primary"]'></div>
                                            <div class="info">Balance $ 2,317</div>
                                        </div>
                                        <div class="state-graph">
                                            <div id="header-chart-2" data-colors='["--bs-danger"]'></div>
                                            <div class="info">Item Sold 1230</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Start page content-wrapper -->
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Orders
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Orders</h5>
                                                    <h3 class="mb-3 text-white">1,587</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-info"> +11% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-cube-outline display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Revenue
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Revenue</h5>
                                                    <h3 class="mb-3 text-white">$46,785</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-danger"> -29% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-buffer display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Av. Price
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Average Price
                                                    </h5>
                                                    <h3 class="mb-3 text-white">15.9</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-primary"> 0% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-tag-text-outline display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Pr. Sold
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Product Sold
                                                    </h5>
                                                    <h3 class="mb-3 text-white">1890</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-info"> +89% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-briefcase-check display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-8 border-end">
                                                    <h4 class="card-title mb-4">Sales Report</h4>
                                                    <div id="morris-area-example" class="dashboard-charts morris-charts" data-colors='["--bs-light", "--bs-warning", "--bs-primary"]'>
                                                    </div>
                                                </div>
                                                <!-- End Col -->

                                                <div class="col-xl-4">
                                                    <h4 class="card-title mb-4">Yearly Sales Report</h4>
                                                    <div class="p-3">
                                                        <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="pills-first-tab"
                                                                    data-bs-toggle="pill" href="#pills-first" role="tab"
                                                                    aria-controls="pills-first"
                                                                    aria-selected="true">2015</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="pills-second-tab"
                                                                    data-bs-toggle="pill" href="#pills-second" role="tab"
                                                                    aria-controls="pills-second"
                                                                    aria-selected="false">2016</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="pills-third-tab"
                                                                    data-bs-toggle="pill" href="#pills-third" role="tab"
                                                                    aria-controls="pills-third"
                                                                    aria-selected="false">2017</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content">
                                                            <div class="tab-pane show active" id="pills-first"
                                                                role="tabpanel" aria-labelledby="pills-first-tab">
                                                                <div class="p-3">
                                                                    <h2>$17562</h2>
                                                                    <p class="text-muted">Maecenas nec odio et ante
                                                                        tincidunt tempus. Donec vitae sapien ut libero
                                                                        venenatis faucibus Nullam quis ante.</p>
                                                                    <a href="#" class="text-primary">Read more...</a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="pills-second" role="tabpanel"
                                                                aria-labelledby="pills-second-tab">
                                                                <div class="p-3">
                                                                    <h2>$18614</h2>
                                                                    <p class="text-muted">Maecenas nec odio et ante
                                                                        tincidunt tempus. Donec vitae sapien ut libero
                                                                        venenatis faucibus Nullam quis ante.</p>
                                                                    <a href="#" class="text-primary">Read more...</a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="pills-third" role="tabpanel"
                                                                aria-labelledby="pills-third-tab">
                                                                <div class="p-3">
                                                                    <h2>$19752</h2>
                                                                    <p class="text-muted">Maecenas nec odio et ante
                                                                        tincidunt tempus. Donec vitae sapien ut libero
                                                                        venenatis faucibus Nullam quis ante.</p>
                                                                    <a href="#" class="text-primary">Read more...</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Sales Analytics</h4>
                                            <div id="morris-donut-example"class="dashboard-charts morris-charts" data-colors='["--bs-light",  "--bs-primary", "--bs-warning"]'></div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3">Inbox</h4>
                                            <div data-simplebar style="max-height: 334px;">
                                                <div class="inbox-wid">
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="assets/images/users/avatar-1.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Irene</h6>
                                                            <p class="inbox-item-text text-muted mb-0">Hey! there I'm
                                                                available...</p>
                                                            <p class="inbox-item-date text-muted">13:40 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="assets/images/users/avatar-2.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Jennifer</h6>
                                                            <p class="inbox-item-text text-muted mb-0">I've finished it! See
                                                                you
                                                                so...</p>
                                                            <p class="inbox-item-date text-muted">13:34 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="assets/images/users/avatar-3.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Richard</h6>
                                                            <p class="inbox-item-text text-muted mb-0">This theme is
                                                                awesome!
                                                            </p>
                                                            <p class="inbox-item-date text-muted">13:17 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="assets/images/users/avatar-4.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Martin</h6>
                                                            <p class="inbox-item-text text-muted mb-0">Nice to meet you</p>
                                                            <p class="inbox-item-date text-muted">12:20 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="assets/images/users/avatar-5.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Sean</h6>
                                                            <p class="inbox-item-text text-muted mb-0">Hey! there I'm
                                                                available...</p>
                                                            <p class="inbox-item-date text-muted">11:47 AM</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-5 text-dark">Recent Activity Feed</h4>
                                            <div>
                                                <ul class="nav nav-pills nav-justified recent-activity-tab mb-4"
                                                    id="recent-activity-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="activity1-tab" data-bs-toggle="pill"
                                                            href="#activity1" role="tab" aria-controls="activity1"
                                                            aria-selected="true">21 Sep</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="activity2-tab" data-bs-toggle="pill"
                                                            href="#activity2" role="tab" aria-controls="activity2"
                                                            aria-selected="false">22 Sep</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="activity3-tab" data-bs-toggle="pill"
                                                            href="#activity3" role="tab" aria-controls="activity3"
                                                            aria-selected="false">23 Sep</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="activity4-tab" data-bs-toggle="pill"
                                                            href="#activity4" role="tab" aria-controls="activity4"
                                                            aria-selected="false">24 Sep</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="activity1" role="tabpanel"
                                                        aria-labelledby="activity1-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>21 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Responded to need
                                                                    “Volunteer
                                                                    Activities”</h5>
                                                                <p>Aenean vulputate eleifend tellus</p>
                                                                <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae
                                                                    sapien ut libero venenatis faucibus Nullam quis ante.
                                                                </p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="activity2" role="tabpanel"
                                                        aria-labelledby="activity2-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>22 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Added an interest
                                                                    “Volunteer
                                                                    Activities”</h5>
                                                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit
                                                                    amet consectetur velit sed quia non tempora incidunt.
                                                                </p>
                                                                <p>Ut enim ad minima veniam quis nostrum</p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="activity3" role="tabpanel"
                                                        aria-labelledby="activity3-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>23 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Joined the group
                                                                    “Boardsmanship Forum”
                                                                </h5>
                                                                <p>Nemo enim voluptatem quia voluptas</p>
                                                                <p>Donec pede justo fringilla vel aliquet nec vulputate eget
                                                                    arcu. In enim justo rhoncus ut imperdiet a venenatis
                                                                    vitae. </p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="activity4" role="tabpanel"
                                                        aria-labelledby="activity4-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>24 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Attending the event “Some
                                                                    New Event”
                                                                </h5>
                                                                <p>At vero eos et accusamus et iusto odio</p>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                                    voluptatem accusantium doloremque laudantium </p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Top product sales</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover align-middle mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Computers</h5>
                                                                <p class="text-muted mb-0">The languages only differ</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-pie"
                                                                        data-peity='{ "fill": ["#f16c69", "#f2f2f2"]}'
                                                                        data-width="54" data-height="54">70/100</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">70%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Laptops</h5>
                                                                <p class="text-muted mb-0">Maecenas tempus tellus</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-donut"
                                                                        data-peity='{ "fill": ["#35a989", "#f2f2f2"], "innerRadius": 20, "radius": 32 }'
                                                                        data-width="54" data-height="54">9,4</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">84%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Ipad</h5>
                                                                <p class="text-muted mb-0">Donec pede justo</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-pie"
                                                                        data-peity='{ "fill": ["#1b82ec", "#f2f2f2"]}'
                                                                        data-width="54" data-height="54">62/100</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">62%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Mobile</h5>
                                                                <p class="text-muted mb-0">Aenean leo ligula</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-donut"
                                                                        data-peity='{ "fill": ["#35a989", "#f2f2f2"], "innerRadius": 20, "radius": 32 }'
                                                                        data-width="54" data-height="54">20,4</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">89%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Latest Transaction</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover align-middle mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">(#) Id</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col" colspan="2">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">#15236</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Jeanette
                                                                    James
                                                                </div>
                                                            </td>
                                                            <td>14/8/2018</td>
                                                            <td>$104</td>
                                                            <td><span class="badge bg-success">Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15237</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Christopher
                                                                    Taylor
                                                                </div>
                                                            </td>
                                                            <td>15/8/2018</td>
                                                            <td>$112</td>
                                                            <td><span class="badge bg-warning">Pending</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15238</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Edward
                                                                    Vazquez
                                                                </div>
                                                            </td>
                                                            <td>15/8/2018</td>
                                                            <td>$116</td>
                                                            <td><span class="badge bg-success">Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15239</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Michael
                                                                    Flannery
                                                                </div>
                                                            </td>
                                                            <td>16/8/2018</td>
                                                            <td>$109</td>
                                                            <td><span class="badge bg-primary">Cancel</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15240</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Jamie
                                                                    Fishbourne
                                                                </div>
                                                            </td>
                                                            <td>17/8/2018</td>
                                                            <td>$120</td>
                                                            <td><span class="badge bg-success">Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- End Cardbody -->
                                    </div>
                                    <!-- End card -->
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Latest Order</h4>
                                            <div class="table-responsive order-table">
                                                <table class="table table-hover align-middle mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">(#) Id</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Date/Time</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col" colspan="2">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">#14562</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Matthew
                                                                    Drapeau
                                                                </div>
                                                            </td>
                                                            <td>17/8/2018
                                                                <p class="font-size-13 text-muted mb-0">8:26AM</p>
                                                            </td>
                                                            <td>$104</td>
                                                            <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14563</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Ralph Shockey
                                                                </div>
                                                            </td>
                                                            <td>18/8/2018
                                                                <p class="font-size-13 text-muted mb-0">10:18AM</p>
                                                            </td>
                                                            <td>$112</td>
                                                            <td><span class="badge bg-soft-warning rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                                    Pending</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14564</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Alexander
                                                                    Pierson
                                                                </div>
                                                            </td>
                                                            <td>18//8/2018
                                                                <p class="font-size-13 text-muted mb-0">12:36PM</p>
                                                            </td>
                                                            <td>$116</td>
                                                            <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14565</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Robert Rankin
                                                                </div>
                                                            </td>
                                                            <td>19/8/2018
                                                                <p class="font-size-13 text-muted mb-0">11:47AM</p>
                                                            </td>
                                                            <td>$109</td>
                                                            <td><span class="badge bg-soft-primary rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-primary"></i>
                                                                    Cancel</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14566</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Myrna Shields
                                                                </div>
                                                            </td>
                                                            <td>20/8/2018
                                                                <p class="font-size-13 text-muted mb-0">02:52PM</p>
                                                            </td>
                                                            <td>$120</td>
                                                            <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end page-content-wrapper-->

                    </div>
                    <!-- Container-fluid -->
                </div>
                <!-- End Page-content -->


                <!-- @@include("partials/footer.html") -->
                @relativeInclude('partials.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- @@include("partials/right-sidebar.html") -->
        @relativeInclude('partials.right-sidebar')

        <!-- @@include("partials/vendor-scripts.html") -->
        @relativeInclude('partials.vendor-scripts')
        <!-- Peity JS -->
        <script src="assets/libs/peity/jquery.peity.min.js"></script>

        <script src="assets/libs/morris.js/morris.min.js"></script>

        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Dashboard init JS -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>
