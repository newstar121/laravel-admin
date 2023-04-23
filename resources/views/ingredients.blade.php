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

    <meta id="csrf-token" content="{{ csrf_token() }}" />
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
                                                            <input style="visibility:hidden" id="id">
                                                            <div class="mb-3 row">
                                                                <label for="example-text-input" class="col-md-3 col-form-label">SKU</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="text" value="Artisanal kale"
                                                                        id="sku">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-search-input"
                                                                    class="col-md-3 col-form-label">Picture</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="search" value="How do I shoot web"
                                                                        id="picture">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-email-input"
                                                                    class="col-md-3 col-form-label">Name</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="email" value="bootstrap@example.com"
                                                                        id="name">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-url-input" class="col-md-3 col-form-label">Type</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="url"
                                                                        id="type">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-tel-input"
                                                                    class="col-md-3 col-form-label">Minimal Stock</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="tel" value="1-(555)-555-5555"
                                                                        id="stock">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-number-input"
                                                                    class="col-md-3 col-form-label">Unit</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="number" value="42"
                                                                        id="unit">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-number-input"
                                                                    class="col-md-3 col-form-label">Unit Cost(Supplier)</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="number" value="42"
                                                                        id="cost">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-number-input"
                                                                    class="col-md-3 col-form-label">Recipe</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="number" value="42"
                                                                        id="recipe">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-number-input"
                                                                    class="col-md-3 col-form-label">Edit</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="number" value="42"
                                                                        id="edit">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                            <div class="mb-3 row">
                                                                <label for="example-number-input"
                                                                    class="col-md-3 col-form-label">Inactivate</label>
                                                                <div class="col-md-9">
                                                                    <input class="form-control" type="number" value="42"
                                                                        id="inactivate">
                                                                </div>
                                                            </div>
                                                            <!-- End Row -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" id="saveBtn" class="btn btn-primary waves-effect waves-light">Save
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
                                                        <th>No</th>
                                                        <th style="visibility:hidden; width: 0px">ID</th>
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
                                                        <tr id="tr-<?=$value->id?>">
                                                            <td id="no" data-value="<?=$key + 1?>" style="width: 20px"><?=$key + 1?></td>
                                                            <td id="id" data-value="<?=$value->id?>" style="visibility: hidden; width: 0px"><?=isset($value->id) ? $value->id : NULL ?></td>
                                                            <td id="sku" data-value="<?=$value->sku?>" style="width: 80px"><?=$value->sku?></td>
                                                            <td id="picture" data-value="<?=$value->picture?>" style="width: 80px"><?=$value->picture?></td>
                                                            <td id="name" data-value="<?=$value->name?>" style="width: 80px"><?=$value->name?></td>
                                                            <td id="type" data-value="<?=$value->type?>" style="width: 80px"><?=$value->type?></td>
                                                            <td id="stock" data-value="<?=$value->stock?>" style="width: 80px"><?=$value->stock?></td>
                                                            <td id="unit" data-value="<?=$value->unit?>" style="width: 80px"><?=$value->unit?></td>
                                                            <td id="cost" data-value="<?=$value->cost?>" style="width: 80px"><?=$value->cost?></td>
                                                            <td id="recipe" data-value="<?=$value->recipe?>" style="width: 80px"><?=$value->recipe?></td>
                                                            <td style="width: 100px">
                                                                <button type="button" data-id=<?= $value->id?> class="btn btn-primary waves-effect waves-light editBtn">Edit</button>
                                                            </td>
                                                            
                                                            <td id="inactivate" style="width: 80px">
                                                            <?php if($value->isActived) {?>    
                                                                <button type="button" data-id=<?= $value->id?> class="btn btn-danger waves-effect waves-light inactiveBtn">Inactive</button>
                                                            <?php } else { ?>
                                                                <button type="button" data-id=<?= $value->id?> class="btn btn-primary waves-effect waves-light activeBtn">Active</button>
                                                            <?php } ?>
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
    <!-- <script src="assets/libs/table-edits/build/table-edits.min.js"></script> -->

    <!-- <script src="assets/js/pages/table-editable.int.js"></script> -->

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script type="text/javascript">

        $("button.activeBtn").click(function(e) {
            e.preventDefault();
            var activeId = parseInt(this.dataset.id);
            
            var csrfObj = $('meta#csrf-token');
            var csrf = $('meta#csrf-token').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrf
                }
            });
        
            $.ajax({
            type:'POST',
            url:"{{ route('setActive.post') }}",
            data:{
                id: activeId,
                isActived: 1
            },
            success:function(data){
                $('#myModal').modal('hide');
                window.location = '/ingredients';
            }});
        });

        $("button.inactiveBtn").click(function(e) {
            e.preventDefault();
            var activeId = parseInt(this.dataset.id);
            
            var csrfObj = $('meta#csrf-token');
            var csrf = $('meta#csrf-token').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrf
                }
            });
        
            $.ajax({
            type:'POST',
            url:"{{ route('setActive.post') }}",
            data:{
                id: activeId,
                isActived: 0
            },
            success:function(data){
                $('#myModal').modal('hide');
                window.location = '/ingredients';
            }});
        });

        $("button.editBtn").click(function(e){
            e.preventDefault();
            var editId = parseInt(this.dataset.id);
            var trid = "table tbody tr#tr-" + editId;
            var tableData = $(trid);
            
            var id = parseInt(this.dataset.id);
            var sku = $(trid + " td#sku").data('value');
            var picture = $(trid + " td#picture").data('value');
            var name = $(trid + " td#name").data('value');
            var type = $(trid + " td#type").data('value');
            var stock = $(trid + " td#stock").data('value');
            var unit = $(trid + " td#unit").data('value');
            var cost = $(trid + " td#cost").data('value');
            var recipe = $(trid + " td#recipe").data('value');
            $('#myModal').modal('show');
            
            $('#myModal input#id').val(id);
            $('#myModal input#sku').val(sku);
            $('#myModal input#picture').val(picture);
            $('#myModal input#name').val(name);
            $('#myModal input#type').val(type);
            $('#myModal input#stock').val(stock);
            $('#myModal input#unit').val(unit);
            $('#myModal input#cost').val(cost);
            $('#myModal input#recipe').val(recipe);
        });
        $("button#saveBtn").click(function(e){
            
            e.preventDefault();
            var id = $("input#id").val();
            var sku = $("input#sku").val();
            var picture = $("input#picture").val();
            var name = $("input#name").val();
            var type = $("input#type").val();
            var stock = $("input#stock").val();
            var unit = $("input#unit").val();
            var cost = $("input#cost").val();
            var recipe = $("input#recipe").val();
            
            var csrfObj = $('meta#csrf-token');
            var csrf = $('meta#csrf-token').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrf
                }
            });
        
            $.ajax({
            type:'POST',
            url:"{{ route('ingredients.post') }}",
            data:{
                id: id,
                sku: sku,
                picture: picture,
                name: name,
                type: type,
                stock: stock,
                unit: unit,
                cost: cost,
                recipe: recipe
            },
            success:function(data){
                $('#myModal').modal('hide');
                
                // $.ajax({
                //     type:'GET',
                //     url:"{{ route('ingredients.get') }}",  
                // });

                window.location = '/ingredients';
            }});
            
        });
    </script>
</body>

</html>