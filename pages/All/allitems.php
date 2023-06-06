<?php include('../common/head.php'); ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include('../common/sidebar.php'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include('../common/header.php'); ?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-flex justify-content-between mb-3">
                        <span><span class="filter-title over-flow " style="color: #212529; font-size: 2.5rem; font-weight: 700;">Items</span></span>

                        <a href="Create/items.php" class="ember-view btn-group"><button class="btn btn-primary" id="ad10255b5">New</button>
                        </a>
                    </div>
                    <form action="../database/delete/mdelete.php" method="POST">
                    <table border="1" class="mt-5 table" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th>RATE</th>
                                <th>USAGE UNIT</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('../database/All/allitemsdb.php')
                            ?>
                        </tbody>
                        <tfoot>
                            <button type="submit" name="mDeleteIT" class="btn btn-danger mb-3">Delete</button>
                        </tfoot>
                    </table>
                    </form>
                </div>
            </div>
            <?php include('../common/footer.php'); ?>
        </div>
    </div>
    <?php
    include('../common/bottom.php');
    include('../common/bottomjs.php');
    ?>