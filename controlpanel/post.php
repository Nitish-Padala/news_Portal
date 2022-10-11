<?php include('inc/function.php'); ?>
<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
<?php include('config/connection.php'); ?>
<!-- <?php // session_start();
        ?> -->


<!DOCTYPE html>
<html>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New Post</h3>
                        </div>

                        <form action="action/postaction.php" method="POST" enctype='multipart/form-data'>
                            <div class="card-body">
                                <div class="form-group">

                                    <label for="exampleInputtitle">Category</label>
                                    <select class="form-control" name="category">
                                        <option>select</option>
                                        <?php
                                        $sql = mysqli_query($conn, "SELECT * FROM `categories`");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                        ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">

                                    <label for="exampleInputtitle">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputtitle" placeholder="Enter title">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputdiscription">Discription</label>
                                    <input type="text" class="form-control" id="exampleInputdiscription" placeholder="Discription">
                                </div> -->
                                <div class="form-group">
                                    <label>Discription</label>
                                    <!-- <div id="editor">This is some sample content.</div> -->
                                    <textarea id="editor" class="form-control" name="discription" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Poster Image :</label>
                                    <input type="file" name="image"  id="exampleInputFile">

                                    <!-- <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="form-check">
                                    <!-- <input type="checkbox" name="breaking_news" class="form-check-input" id="breaking_news"> -->
                                    <label class="form-check-label" for="breaking_news">Breaking News :

                                        <input type="radio" name="breaking_news" value=1> Yes
                                        <input type="radio" name="breaking_news" value=0> No


                                    </label>


                                </div>
                                <div >
                                    <label >Select The type of news</label >
                                        <div> 
                                            <!-- <input type="hidden" name="main" value = 0> -->
                                            <label> <input type="checkbox" name="main" value="1"> Main</label> 
                                        </div>
                                        <div>
                                            <!-- <input type="hidden" name="top_stories" value = 0> -->
                                            <label> <input type="checkbox" name="top_stories" value= "1"> Top Stories</label> 
                                        </div>
                                        <div>
                                            <!-- <input type="hidden" name="trending" value = 0> -->
                                            <label> <input type="checkbox" name="trending"  value="1"> Trendings</label> 
                                      
                                        </div>
                                    

                                </div>
                            </div>

                            <div class="card-footer">

                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>



</html>


<?php include('inc/footer.php'); ?>