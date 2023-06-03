<?php
include_once("../dbconnect.php");

if (isset($_GET['Customersedit'])) {
    $sno = $_GET['Customersedit'];
    $sqlQuery = "SELECT * FROM `database_customers` WHERE customers_id = {$sno}";
    $result = mysqli_query($conn, $sqlQuery);

    $row = $result->fetch_assoc();
};
?>


<?php include('../../common/head.php'); ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include('../../common/sidebar.php'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include('../../common/header.php'); ?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->

                <div class="column content-column txn-creation-column ml-3">
                    <div class="scroll-y noscroll-x fill body scrollbox">
                        <div class="header">
                            <div id="ember574" class="ember-view">
                                <div id="ember575" class="ember-view"></div>
                                <div id="ember577" class="ember-view">
                                    <div id="ember578" class="ember-view"></div>
                                </div>
                            </div>
                            <h3 class="mb-4">Edit Customer </h3>
                            <div id="ember579" class="ember-view">
                                <div id="ember580" class="ember-view"></div>
                            </div>
                        </div>
                        <div class="fill-container header-separator"></div>
                        <form class="contact-create" method="post" action="<?php echo SITE_URL ?>pages/database/edit/editCustomers.php?editCustomers=<?php echo $sno; ?>">
                            <div tabindex="-1" id="ember581" class="no-outline ember-view"></div>
                            <div class="row zb-txn-form">
                                <div class="col-lg-8">
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-lg-3 pt-0"><span class="text-dashed-underline">Customer Type</span> </legend>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <?php
                                                    if ($row["customerType"] == "business") {
                                                        echo '<input name="eCustomer_Type" checked class="ember-view form-check-input" type="radio" value="business">';
                                                    } else {
                                                        echo '<input name="eCustomer_Type" class="ember-view form-check-input" type="radio" value="business">';
                                                    }
                                                    ?>
                                                    <label class="form-check-label" for="eCustomer_Type">Business</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <?php
                                                    if ($row["customerType"] == "individual") {
                                                        echo '<input name="eCustomer_Type"  checked class="ember-view form-check-input" type="radio" value="individual">';
                                                    } else {
                                                        echo '<input name="eCustomer_Type" class="ember-view form-check-input" type="radio" value="individual">';
                                                    }
                                                    ?>
                                                    <label class="form-check-label" for="eCustomer_Type">Individual</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group">
                                        <div class="row"><label class="col-form-label col-lg-3"><span class="text-dashed-underline" id="a22b39078">Primary Contact</span> </label>
                                            <div class="inline-fields col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div id="ember582" class="type-ahead ember-view">
                                                            <div id="ember583" class="dropdown show ac-dropdown ember-view">
                                                                <div class="auto-select ac-selected" tabindex="-1">
                                                                    <select class="width55 form-select ember-text-field form-control ac-search-txt ember-view" name="esalutation" required aria-label="Default select example">
                                                                        <?php
                                                                        if ($row["salutation"] == "Mr") {
                                                                            echo '<option selected value="Mr">Mr</option>';
                                                                        } else {
                                                                            echo '<option value="Mr">Mr</option>';
                                                                        }
                                                                        ?>

                                                                        <?php
                                                                        if ($row["salutation"] == "Mrs") {
                                                                            echo '<option selected value="Mrs">Mrs</option>';
                                                                        } else {
                                                                            echo '<option value="Mrs">Mrs</option>';
                                                                        }
                                                                        ?>

                                                                        <?php
                                                                        if ($row["salutation"] == "Ms") {
                                                                            echo '<option selected value="Ms">Ms</option>';
                                                                        } else {
                                                                            echo '<option value="Ms">Ms</option>';
                                                                        }
                                                                        ?>

                                                                        <?php
                                                                        if ($row["salutation"] == "Miss") {
                                                                            echo '<option selected value="Miss">Miss</option>';
                                                                        } else {
                                                                            echo '<option value="Miss">Miss</option>';
                                                                        }
                                                                        ?>

                                                                        <?php
                                                                        if ($row["salutation"] == "Dr") {
                                                                            echo '<option selected value="Dr">Dr</option>';
                                                                        } else {
                                                                            echo '<option value="Dr">Dr</option>';
                                                                        }
                                                                        ?>
                                                                    </select>

                                                                    <i class="zf-ac-toggler"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4"><input placeholder="First Name" name="eFname" value="<?php echo $row["fName"] ?>" required class="width55 ember-text-field ember-view form-control" type="text"></div>
                                                    <div class="col-lg-4"><input placeholder="Last Name" name="eLname" value="<?php echo $row["lName"] ?>" required class="width55 ember-text-field ember-view form-control" type="text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row"><label class="col-form-label col-lg-3">Company Name</label>
                                            <div class="col-lg-6"><input value="<?php echo $row["companyName"] ?>" name="eCompany_Name" required class="width55 ember-text-field ember-view form-control" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row"><label class="col-form-label col-lg-3 required"><span class="text-dashed-underline" id="ad16cf945">Customer Display Name</span> </label>
                                            <div class="col">
                                                <div class="row form-group align-items-end">
                                                    <div class="col-lg-8">
                                                        <div id="ember588" class="type-ahead ember-view">
                                                            <div id="ember589" class="dropdown show ac-dropdown ember-view">
                                                                <div class="auto-select ac-selected" tabindex="-1"><input name="ecustomerDisplayName" required autocomplete="off" required autocorrect="off" value="<?php echo $row["customerDisplayName"] ?>" class="width55 ember-text-field form-control ac-search-txt ember-view" type="text"> <i class="zf-ac-toggler"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row"><label class="col-form-label col-lg-3 ">Customer Email</label>
                                            <div class="col-lg-6"><input name="ecustomerEmail" value="<?php echo $row["customerEmail"] ?>" class="width55 ember-text-field ember-view form-control" required type="email"></div> <span class="position-relative" id="aea039373"><span class="float-left form-control-plaintext"></span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row"><label class="col-form-label col-lg-3">Customer Phone</label>
                                            <div class="col-lg-3 pr-3"><input name="eworkPhone" required placeholder="Work Phone" value="<?php echo $row["workPhone"] ?>" class="width55 ember-text-field ember-view form-control" type="tel"></div>
                                            <div class="col-lg-3 pl-3"><input name="eMobile" required placeholder="Mobile" value="<?php echo $row["mobile"] ?>" class="width55 ember-text-field ember-view form-control" type="tel"></div> <span class="position-relative"><span class="float-left form-control-plaintext"></span></span>
                                        </div>
                                    </div>
                                    <div class="row"><label class="col-form-label col-lg-3">Skype Name/Number</label>
                                        <div class="col-lg-6 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">
                                                        <div><i class="fa-brands fa-skype" style="color: #00aff0;"></i></div>
                                                    </span></div> <input name="eSkype" value="<?php echo $row["Skype"] ?>" class="ember-text-field ember-view form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Designation</label>
                                        <div class="col-lg-6"><input name="eDesignation" value="<?php echo $row["Designation"] ?>" class="ember-text-field ember-view form-control" type="text"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Department</label>
                                        <div class="col-lg-6"><input name="eDepartment" value="<?php echo $row["Department"] ?>" class="ember-text-field ember-view form-control" type="text"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row"><label class="col-form-label col-lg-3">Website</label>
                                            <div class="col-lg-6"><input name="eWebsite" required id="ember595" value="<?php echo $row["website"] ?>" class="width55 ember-text-field ember-view form-control" type="text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-toolbar fixed-actions fill-container mb-4"><button name="Customersedit" class="btn btn-primary ember-view mr-2" type="submit"> Save</button></div>
                        </form>
                    </div>
                </div>
                <?php include('../../common/footer.php'); ?>
            </div>
        </div>
        <?php
        include('../../common/bottom.php');
        include('../../common/bottomjs.php');
        ?>
        <!-- Page level plugins -->
</body>

</html>