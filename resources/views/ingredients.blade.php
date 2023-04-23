<!-- @@include("partials/main.html") -->
@relativeInclude('partials.main')
<head>

    <!-- @@include("partials/title-meta.html", {"title":"Editable Table"}) -->
    @relativeInclude('partials.title-meta',
    ["title"=>"Editable Table"])
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-autoFill-bs4/css/autoFill.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/libs/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

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

                    <!-- @@include("partials/page-title.html",{"pagetitle": "Agroxa", "subtitle":"Tables", "title":"Editable Table"}) -->
                    @relativeInclude('partials.page-title',
                    ["pagetitle"=> "Agroxa", "subtitle"=>"Tables", "title"=>"Editable Table"])
                    <!-- Start Page-content-Wrapper -->
                    <div class="page-content-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- <h4 class="card-title">Table Edits</h4> -->
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Add</button>
                                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3 row">
                                                                <label for="example-text-input" class="col-md-3 col-form-label">SKU</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="text" value="Artisanal kale"
                                                                        id="example-text-input">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-search-input"
                                                                    class="col-md-3 col-form-label">Picture</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="search" value="How do I shoot web"
                                                                        id="example-search-input">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-email-input"
                                                                    class="col-md-3 col-form-label">Name</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="email" value="bootstrap@example.com"
                                                                        id="example-email-input">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-url-input" class="col-md-3 col-form-label">Type</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="url"
                                                                        id="example-url-input">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-tel-input"
                                                                    class="col-md-3 col-form-label">Minimal Stock</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="tel" value="1-(555)-555-5555"
                                                                        id="example-tel-input">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-number-input"
                                                                    class="col-md-3 col-form-label">Unit</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="number" value="42"
                                                                        id="example-number-input">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-number-input"
                                                                    class="col-md-3 col-form-label">Unit Cost(Supplier)</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="number" value="42"
                                                                        id="example-number-input">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-number-input"
                                                                    class="col-md-3 col-form-label">Recipe</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="number" value="42"
                                                                        id="example-number-input">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-number-input"
                                                                    class="col-md-3 col-form-label">Edit</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="number" value="42"
                                                                        id="example-number-input">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-number-input"
                                                                    class="col-md-3 col-form-label">Inactivate</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="number" value="42"
                                                                        id="example-number-input">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        <!-- <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making
                                            table rows editable.</p> -->

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>SKU</th>
                                                        <th>Picture</th>
                                                        <th>Name</th>
                                                        <th>Type</th>
                                                        <th>Minimal Stock</th>
                                                        <th>Unit</th>
                                                        <th>Unit Cost (Supplier)</th>
                                                        <th>Recipe</th>
                                                        <th>Edit</th>
                                                        <th>Inactivate</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($data) {
                                                            foreach ($data as $key => $value) {?>
                                                        <tr>
                                                            <td data-field="id" style="width: 80px"><?=$value['id']?></td>
                                                            <td data-field="sku" style="width: 80px"><?=$value['sku']?></td>
                                                            <td data-field="picture" style="width: 80px"><?=$value['picture']?></td>
                                                            <td data-field="name" style="width: 80px"><?=$value['name']?></td>
                                                            <td data-field="type" style="width: 80px"><?=$value['type']?></td>
                                                            <td data-field="stock" style="width: 80px"><?=$value['stock']?></td>
                                                            <td data-field="unit" style="width: 80px"><?=$value['unit']?></td>
                                                            <td data-field="cost" style="width: 80px"><?=$value['cost']?></td>
                                                            <td data-field="recipe" style="width: 80px"><?=$value['recipe']?></td>
                                                            <td style="width: 100px"><? $value['edit'] == 1?>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light">Edit</button>
                                                            </td>
                                                            <td data-field="inactive" style="width: 80px"><?=$value['inactive']?>
                                                                <button type="button" class="btn btn-danger waves-effect waves-light">Inactive</button>
                                                        </td>

                                                        </tr>
                                                    <?php }
}
?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Page Content Wrapper-->
                </div>
                <!-- Container-Fluid -->
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
    <!-- Table Editable plugin -->
    <script src="assets/libs/table-edits/build/table-edits.min.js"></script>

    <script src="assets/js/pages/table-editable.int.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- <script src="assets/js/app.js"></script> -->
</body>

</html>