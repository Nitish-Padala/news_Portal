<?php include('inc/function.php'); ?>
<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
<?php include('config/connection.php'); ?>
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


<div class="content-wrapper">
    <div class="img-box">
        <?php

        $category = mysqli_query($conn, "SELECT * FROM forms ORDER BY ID DESC ");


        ?>
        <div>
            <li>
                <a href="post.php" class="nav-link active">
                    <!-- <button class="btn btn-primary">New Post</button> -->
                    <button type="button" style="float:left" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">New Post</button>

                </a>
            </li>

        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL.no</th>
                        <th>Title</th>
                        <th>Discription</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>created by</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_array($category)) {

                ?>


                    <!-- edit category modal -->


                    <div class="modal fade" id="edit<?php echo $row['id'] ?>">
                        <form action="action/posteditaction.php?id=<?php echo $row['id'] ?>" method="post">

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Post</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <input type="hidden" name="xid" value="<?php echo $row['id'] ?>">
                                    <div class="modal-body">
                                        <label>Title</label>
                                        <input type="text" name="title" value="<?php echo $row['title'] ?>" class="form-control">

                                    </div>
                                    <div class="modal-body">
                                        <label>Discription</label>
                                        <input type="text" name="discription" value="<?php echo $row['discription'] ?>" class="form-control">

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
                        <td><?php echo $row["title"]; ?></td>
                        <td><?php echo $row["discription"]; ?></td>
                        <?php

                        $cate_id = $row['categorie_id'];
                        $query = "SELECT * FROM categories WHERE id='$cate_id'";
                        $cat_id = mysqli_query($conn, $query);
                        $cat_name = mysqli_fetch_assoc($cat_id);

                        ?>
                        <td><?php echo $cat_name['name']; ?> </td>
                        <td> <img src="../media/post_image/<?php echo $row['image']; ?>" style="inline-size: 45px;"></td>

                        <?php

                        $user_id = $row['created_by'];
                        $query = "SELECT * FROM user WHERE id='$user_id'";
                        $result = mysqli_query($conn, $query);
                        $username = mysqli_fetch_assoc($result);

                        ?>
                        <td> <?php echo $username['name']; ?></td>


                        <td>
                            <a href="#" data-toggle="modal" data-target="#edit<?php echo $row['id'] ?>"><i class="feather icon-edit">Edit</i></a>
                            ||
                            <a href="post_delete.php?id=<?php echo $row["id"] ?>" onclick='return confirm("Are you sure?")'><i class="feather icon-trash-2">Delete</i></a>
                        </td>
                    </tr>

                <?php $i++;
                } ?>

                <tfoot>
                    <tr>
                        <th>SL.no</th>
                        <th>Title</th>
                        <th>Discription</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>created by</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
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