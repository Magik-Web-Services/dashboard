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
                            <h3 class="mb-4">New Customer</h3>
                            <div id="ember579" class="ember-view">
                                <div id="ember580" class="ember-view"></div>
                            </div>
                        </div>
                        <div class="fill-container header-separator"></div>
                        <form class="contact-create" method="post" action="<?php echo SITE_URL ?>pages/database/items/customersdb.php">
                            <div tabindex="-1" id="ember581" class="no-outline ember-view"></div>
                            <div class="row zb-txn-form">
                                <div class="col-lg-8">
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-lg-3 pt-0"><span class="text-dashed-underline" id="a79ec5fec">Customer Type</span> </legend>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline"><input name="Customer_Type" id="a63195242" class="ember-view form-check-input" checked type="radio" value="business"> <label class="form-check-label" for="a63195242">Business</label></div>
                                                <div class="form-check form-check-inline"><input name="Customer_Type" id="a2db1f682" class="ember-view form-check-input" type="radio" value="individual"> <label class="form-check-label" for="a2db1f682">Individual</label></div>
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
                                                                    <select class="width55 form-select ember-text-field form-control ac-search-txt ember-view" name="salutation" required aria-label="Default select example">
                                                                        <option value="Mr">Mr</option>
                                                                        <option value="Mrs">Mrs</option>
                                                                        <option value="Ms">Ms</option>
                                                                        <option value="Miss">Miss</option>
                                                                        <option value="Dr">Dr</option>
                                                                    </select>

                                                                    <i class="zf-ac-toggler"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4"><input placeholder="First Name" name="Fname" autofocus="" id="ember585" required class="width55 ember-text-field ember-view form-control" type="text"></div>
                                                    <div class="col-lg-4"><input placeholder="Last Name" name="Lname" id="ember586" required class="width55 ember-text-field ember-view form-control" type="text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row"><label class="col-form-label col-lg-3">Company Name</label>
                                            <div class="col-lg-6"><input id="ember587" name="Company_Name" required class="width55 ember-text-field ember-view form-control" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row"><label class="col-form-label col-lg-3 required"><span class="text-dashed-underline" id="ad16cf945">Customer Display Name</span> </label>
                                            <div class="col">
                                                <div class="row form-group align-items-end">
                                                    <div class="col-lg-8">
                                                        <div id="ember588" class="type-ahead ember-view">
                                                            <div id="ember589" class="dropdown show ac-dropdown ember-view">
                                                                <div class="auto-select ac-selected" tabindex="-1"><input name="customerDisplayName" required autocomplete="off" spellcheck="false" required placeholder="" autocorrect="off" autocapitalize="off" id="ember590" class="width55 ember-text-field form-control ac-search-txt ember-view" type="text"> <i class="zf-ac-toggler"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row"><label class="col-form-label col-lg-3 ">Customer Email</label>
                                            <div class="col-lg-6"><input name="customerEmail" id="ember591" class="width55 ember-text-field ember-view form-control" required type="email"></div> <span class="position-relative" id="aea039373"><span class="float-left form-control-plaintext"></span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row"><label class="col-form-label col-lg-3">Customer Phone</label>
                                            <div class="col-lg-3 pr-3"><input name="workPhone" required placeholder="Work Phone" id="ember592" class="width55 ember-text-field ember-view form-control" type="tel"></div>
                                            <div class="col-lg-3 pl-3"><input name="Mobile" required placeholder="Mobile" id="ember593" class="width55 ember-text-field ember-view form-control" type="tel"></div> <span class="position-relative" id="a14f22f61"><span class="float-left form-control-plaintext"></span></span>
                                        </div>
                                    </div>
                                    <div class="row"><label class="col-form-label col-lg-3">Skype Name/Number</label>
                                        <div class="col-lg-6 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">
                                                        <div><i class="fa-brands fa-skype" style="color: #00aff0;"></i></div>
                                                    </span></div> <input name="Skype" class="ember-text-field ember-view form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Designation</label>
                                        <div class="col-lg-6"><input name="Designation" class="ember-text-field ember-view form-control" type="text"></div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Department</label>
                                        <div class="col-lg-6"><input name="Department" class="ember-text-field ember-view form-control" type="text"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row"><label class="col-form-label col-lg-3">Website</label>
                                            <div class="col-lg-6"><input name="Website" required id="ember595" class="width55 ember-text-field ember-view form-control" type="text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-toolbar fixed-actions fill-container mb-4"><button id="ember643" class="btn btn-primary ember-view mr-2" type="submit"> Save</button></div>
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