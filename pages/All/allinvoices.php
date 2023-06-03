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
                        <span><span class="filter-title over-flow " style="color: #212529; font-size: 2.5rem; font-weight: 700;">All Invoices</span></span>

                        <a href="Create/Invoices.php" class="ember-view btn-group"><button class="btn btn-primary" id="ad10255b5">New</button>
                        </a>
                    </div>

                    <table border="1" class="mt-5 table" id="myTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>COMPANY NAME</th>
                                <th>EMAIL</th>
                                <th>WORK PHONE</th>
                                <th>RECEIVABLES (BCY)</th>
                                <th>UNUSED CREDITS (BCY)</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <?php include('../common/footer.php'); ?>
        </div>
    </div>
    <?php
    include('../common/bottom.php');
    include('../common/bottomjs.php');
    ?>