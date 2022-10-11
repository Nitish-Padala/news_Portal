<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> -->
            <div class="info">
                <a href="dashboard.php" class="d-block"><?php echo $_SESSION['USER_NAME']; ?></a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <div>
            <ul class="nav nav-treeview">
                <li><a href="categorie.php" class="nav-link active">
                        categories
                    </a></li>
                    <li><a href="view_post.php" class="nav-link active">
                        Post
                    </a></li>
                    <li><a href="logout.php" class="nav-link active">
                        Logout
                    </a></li>
            </ul>
        </div>



    </div>
</aside>