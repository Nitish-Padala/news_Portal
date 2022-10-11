<?php include('inc/function.php'); ?>
<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
<?php include('config/connection.php'); ?>
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


<div class="content-wrapper">
    <?php
    $category = mysqli_query($conn, "SELECT * FROM categories");
    ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <?php if (isset($_SESSION['delemsg'])) { ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>Category Deleted Successfully</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php }
                    unset($_SESSION['delemsg']);

                    ?>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                            <button type="button" style="float:right" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add New</button>
                            <form action="action/categoryaction.php" method="post">
                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Catagory</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <label>Name of the Category</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL.no</th>
                                        <th>Name of category</th>
                                        <th>created at</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_array($category)) {

                                ?>


<!-- edit category modal -->


                                <div class="modal fade" id="edit<?php echo $row['id'] ?>">
                                  <form action="action/editaction.php?id=<?php echo $row['id'] ?>" method="post">

                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Catagory</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                 <input type="hidden" name="xid" value="<?php echo $row['id'] ?>" >
                                                <div class="modal-body">
                                                    <label>Name of the Category</label>
                                                    <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control">

                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" name="edit_submit" class="btn btn-primary">Update</button>


                                                </div>
                                            </div>

                                        </div>

                                    </form>

                                </div>



<!-- edit category modal end -->
                                    <tr>

                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["created_on"]; ?></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#edit<?php echo $row['id'] ?>"><i class="feather icon-edit">Edit</i></a>
                                            ||
                                            <a href="categoridelet.php?id=<?php echo $row["id"] ?>" onclick='return confirm("Are you sure?")'><i class="feather icon-trash-2">Delete</i></a>
                                        </td>


                                    </tr>

                                <?php $i++;
                                } ?>

                                <tfoot>
                                    <tr>

                                        <th>SL.no</th>
                                        <th>Name of category</th>
                                        <th>created at</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>



<?php include('inc/footer.php'); ?>


<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>



<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2022 04:07:56 GMT -->

</html>