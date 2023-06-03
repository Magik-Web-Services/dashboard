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
                        <span><span class="filter-title over-flow " style="color: #212529; font-size: 2.5rem; font-weight: 700;">Active Customer</span></span>
                        <a href="Create/Customers.php" class="ember-view btn-group"><button class="btn btn-primary">New</button>
                        </a>
                    </div>
                    <form action="../database/delete/mdelete.php" method="POST">
                        <table border="1" class="mt-5 table display" id="myTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <!-- <th style="display: none;"></th> -->
                                    <th>Name</th>
                                    <th>COMPANY NAME</th>
                                    <th>EMAIL</th>
                                    <th>WORK PHONE</th>
                                    <th>Creation_Date</th>
                                    <th>Modified_Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../database/All/allCustomersdb.php')
                                ?>
                            </tbody>
                            <tfoot>
                                <button type="submit" name="mDeleteCus" class="btn btn-danger mb-3">Delete</button>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
            <?php include('../common/footer.php');
            include('../common/mDeleteCustomers.php'); ?>
        </div>
    </div>
    <?php
    include('../common/bottom.php');
    include('../common/bottomjs.php');
    ?>