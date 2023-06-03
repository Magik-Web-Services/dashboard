<?php
include_once("../dbconnect.php");

if (isset($_GET['itemsedit'])) {
    $sno = $_GET['itemsedit'];
    $sqlQuery = "SELECT * FROM `database_items` WHERE itemId = {$sno}";
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
                <div class="column content-column ml-3">
                    <div class="fill header">
                        <h3> Edit Item</h3> <span class="close-details close-details-header float-right>
                    </div>
                    <div class=" scroll-y noscroll-x fill body scrollbox">
                            <form class="item-creation" autocomplete="off" method="post" action="<?php echo SITE_URL ?>pages/database/edit/editItems.php?editItem=<?php echo $sno; ?>">
                                <div tabindex="-1" id="ember277" class="no-outline ember-view"></div>
                                <div class="primary-info">
                                    <div class="item-new">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <fieldset class="form-group">
                                                    <div class="row">
                                                        <legend class="col-lg-3 pt-0 col-form-label">Type </legend>
                                                        <div class="col-lg-8">
                                                            <div class="form-check form-check-inline">
                                                                <?php
                                                                if ($row["productType"] == "goods") {

                                                                    echo '<input name="eproductType" checked  class="ember-view form-check-input" type="radio" value="goods">';
                                                                } else {
                                                                    echo '<input name="eproductType" class="ember-view form-check-input" type="radio" value="goods">';
                                                                }
                                                                ?>
                                                                <label class="form-check-label" for="eproductType">Goods</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <?php
                                                                if ($row["productType"] == "service") {
                                                                    echo '<input name="eproductType" checked class="ember-view form-check-input" type="radio" value="service">';
                                                                }else{
                                                                    echo '<input name="eproductType" class="ember-view form-check-input" type="radio" value="service">';
                                                                }
                                                                ?>
                                                                <label class="form-check-label" for="eproductType">Service</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <div class="row">
                                                        <legend class="col-lg-3 col-form-label required">Name</legend>
                                                        <div class="col-lg-8">
                                                            <div class="form-group"><input required id="ember278" name="eName" value="<?php echo $row["Name"] ?>" class="width55 form-control ember-text-field ember-view" type="text"></div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="row form-group"><label class="col-lg-3 col-form-label"><span>Unit</span> <span id="a1bc82970"></span> </label>
                                                    <div class="col-lg-8">
                                                        <div id="ember279" class="type-ahead ember-view">
                                                            <div id="ember280" class="dropdown show ac-dropdown ember-view">
                                                                <div class="auto-select ac-selected" tabindex="-1">
                                                                    <select class="width55 form-select ember-text-field form-control ac-search-txt ember-view" name="eunit" required>
                                                                        <option value="box">box</option>
                                                                        <option value="cm">cm</option>
                                                                        <option value="dz">Ms</option>
                                                                        <option value="ft">ft</option>
                                                                        <option value="g">g</option>
                                                                        <option value="in">in</option>
                                                                        <option value="kg">kg</option>
                                                                        <option value="km">km</option>
                                                                        <option value="lb">lb</option>
                                                                        <option value="mg">mg</option>
                                                                        <option value="ml">ml</option>
                                                                        <option value="m">m</option>
                                                                        <option value="pcs">pcs</option>
                                                                    </select>
                                                                    <i class="zf-ac-toggler"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="zb-txn-form item-new">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row form-group"><label class="col-form-label col-lg-4"><span class="text-dashed-underline" id="a4a4b62f5"><span class="required">Selling Price</span></span> </label>
                                                <div class="col-lg-8">
                                                    <div class="width55 input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">INR</span></div> <input value="<?php echo $row["sellingPrice"] ?>" required name="esellingPrice" class="ember-text-field text-left ember-view form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group"><label class="col-form-label col-lg-4">Description</label>
                                                <div class="col-lg-8"><textarea value="qdd" required name="eDescription" id="ember283" class="width55 ember-text-area ember-view form-control"><?php echo $row["Description"] ?></textarea></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="txn-creation-column">
                                    <div class="btn-toolbar fixed-actions"><button name="editItem" class="btn btn-primary ember-view" type="submit"> Save</button></div>
                                </div>
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