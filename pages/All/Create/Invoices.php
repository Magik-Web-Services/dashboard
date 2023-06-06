<?php include('../../common/head.php'); ?>
<?php include('../../database/dbconnect.php'); ?>

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
                <div class="container-fluid">
                    <div class="column content-column txn-creation-column">
                        <div class="ember-view">
                            <div class="ember-view"></div>
                        </div>
                        <div class="scroll-y noscroll-x fill body scrollbox">
                            <div class="ember-view">
                                <div class="header">
                                    <div class="ember-view">
                                        <div class="ember-view"></div>
                                        <div class="ember-view">
                                            <div class="ember-view"></div>
                                        </div>
                                    </div> <span class="close-details py-2 mt-5 pr-3 mr-3"></span>
                                    <h3 class="mb-4"> New Invoice</h3>
                                </div>
                                <div class="fill-container row header-separator"></div> 
                                <form>
                                    <div class=" ">
                                        <div tabindex="-1" class="no-outline ember-view"></div>
                                        <div class="primary-info">
                                            <div class="zb-txn-form">

                                            <div class="row mb-3">
                                                    <label class="col-form-label col-lg-2 required"> Name</label>
                                                    <div class="col-lg-6 input-group">

                                                        <!-- <input type="text" class="form-control border-0 small searchCustomer"> -->
                                                        <!--  -->
                                                        <select class="form-select form-control" aria-label="Default select example">
                                                            <option disabled>select customer</option>
                                                            <?php
                                                            $sql = "SELECT * FROM `dashboard_customers`";
                                                            $result = mysqli_query($conn, $sql);
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                                <option value="<?php echo $row["fName"];
                                                                                echo "&nbsp;";
                                                                                echo $row["lName"]; ?>"><?php echo $row["fName"];
                                                                                    echo "&nbsp;";
                                                                                    echo $row["lName"]; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <!-- <select class="form-control searchCustomer"> -->
                                                        <!-- <option value="one">First</option>
                                                            <option value="two" disabled="disabled">Second (disabled)</option>
                                                            <option value="three">Third</option> -->
                                                        <!-- </select> -->
                                                        <!--  -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row"><label class="col-form-label col-lg-2 col-form-label">Invoice#</label>
                                                <div class="col-lg-4"><input name="Quote" value="INV-000001" class="ember-text-field ember-view form-control" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row"><label class="col-form-label col-lg-2 col-form-label">Order Number</label>
                                                <div class="col-lg-4"><input name="Reference" class="ember-text-field ember-view form-control" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="row"><label class="col-form-label col-lg-2 required">Invoice Date</label>
                                            <div class="col-lg-4"> <input placeholder="dd/MM/yyyy" class="ember-text-field zf-date-picker date-picker ember-view form-control" data-integrity="date" type="date">
                                                <div class="font-xs pt-1">To create transaction dated before 01/07/2017, <a href="#">click here</a></div>
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="form-control-plaintext">Terms</p>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="ember-view">
                                                    <div class="ac-box "><span class="ac-selected form-control " tabindex="0"> <span data-integrity-label="" class="flex-grow-1 mr-0">Due on Receipt</div> 
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <p class="form-control-plaintext">Due Date</p>
                                            </div>
                                            <div class="col-lg-2 badge-editable"><input placeholder="dd/MM/yyyy" class="ember-text-field zf-date-picker date-picker ember-view form-control editable" type="date">
                                                <div class="text-danger cb d-none">Choose a due date on or after the invoice date.</div>
                                            </div>
                                        </div>
                                        <hr class="bdr-light xlg">
                                        <div class="form-group">
                                            <div class="row"><label class="col-form-label col-form-label col-lg-2">Salesperson</label>
                                                <div class="col-lg-4">
                                                    <div class="ember-view">
                                                        <div class="ac-box "><span class="ac-selected form-control " tabindex="0"> <span class="placeholder-text mr-0">Select or Add Salesperson</span>
                                                                <div class="ac-toggle-container"><i class="zf-ac-toggler"></i></div>
                                                            </span></div> 
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="row"></div>
                                        <hr class="bdr-light lg">
                                        <div class="form-group">
                                            <div class="row"><label class="col-form-label col-form-label col-lg-2">Subject&nbsp; <span></span> </label>
                                                <div class="col-lg-6">
                                                    <textarea rows="1" placeholder="Let your customer know what this Quote is for" maxlength="250" class="ember-text-area ember-view form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zb-txn-form">
                                        <hr class="bdr-light lg">
                                        <div class="form-group font-xs clearfix ">
                                            <div class="float-right mt-2  d-none">
                                                <div class="row ">
                                                    <div class="ember-view col-lg-12">
                                                        <div class="text-right txn-exrate float-right" style="position:relative">
                                                            <div class="d-inline-block ">(As on 23/05/2023)&nbsp;</div>
                                                            <div class="d-inline-block"> 1 = 0 INR <a class=" px-2" href="#" data-ember-action="" data-ember-action-850="850"></a> </div>
                                                            <div  class="popover-container ember-view">
                                                                <div class="d-none popover bs-popover-bottom ember-view pop-over-div"></div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <table class="line-item-table line-item-table-light" id="addlineData">
                                            <thead class="line-item-header invoice-nodiscount line-item-us">
                                                <tr>
                                                    <th class="borderl line-item-column over-flow item-details">Item Details</th>
                                                    <th class="borderb line-item-column over-flow item-qty text-right">Quantity </th>
                                                    <th class="borderb line-item-column over-flow item-rate text-right">Rate </th>
                                                    <th class="borderr line-item-column  item-amount text-right">Amount </th>
                                                </tr>
                                            </thead>
                                            <tbody class="ember-view line-item-body invoice-nodiscount">
                                                <tr class="ember-view line-item new-line-item line-item-us ">
                                                    <td class="line-item-column item-details borderl ember-view">
                                                        <div class="height65">
                                                            <div class="d-flex">
                                                                <div class="item-field mb-3 ">
                                                                    <div class="item-autocomplete ember-view">
                                                                        <div><textarea placeholder="Type or click to select an item." class="border0 zb-invoice-item-textarea ember-text-area form-control item-description ember-view"></textarea></div>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td> 
                                                    <td class="borderb line-item-column item-qty ember-view">
                                                        <div class="height65">
                                                            <input value="1.00" class="border0 ember-text-field text-right ember-view form-control qty-field " type="text">
                                                            <div class="ember-view">
                                                                <div class="font-xs text-right px-3"></div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="borderb line-item-column item-rate ember-view">
                                                        <div class="height65">
                                                            <input value="0.00" class="border0 ember-text-field text-right ember-view form-control qty-field " type="text">
                                                            <div class="ember-view">
                                                                <div class="font-xs text-right px-3"></div> 
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="line-item-column item-amount text-right borderr ember-view">
                                                        <div class="height65">0.00 <div class="item-actions-container">
                                                                <div class="item-actions"><span class="action"></span></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="deleteIcon deleteRow">
                                                        <i class="fa-solid fa-trash" style="color: #f00000;"></i>
                                                    </td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                        <div class="row flex-column">
                                            <div class="add-line-item col-lg-5 d-flex flex-column mt-3">
                                                <div  class="dropdown  Additem ember-view btn-group line-seperator align-self-start add-line-item-btn" ><span id="Addline" class="btn btn-md" data-ember-action="" data-ember-action-876="876"> <i class="fa-solid fa-circle-plus" style="color: #188dfa;"></i> Add another line</span> <span id="ember877" class="pr-2 dropdown-toggle ember-view add-line-item-separator"></span>
                                                    <div  class="dropdown-menu dropdown-menu ember-view"><button class="dropdown-item text-capitalize" type="button" data-ember-action="" data-ember-action-879="879">Add items in bulk</button><button class="dropdown-item text-capitalize" type="button" data-ember-action="" data-ember-action-880="880">Add Item Header</button></div>
                                                </div> 
                                            </div>
                                            <div class="total-section invoice-discount col-lg-6 mt-5 rounded-xlg mr-4 grey-bg" id="total-section">
                                                <div class="ember-view">
                                                    <div class="ember-view">
                                                        <div class="ember-view collapse show">
                                                            <div class="total-row sub-total d-flex justify-content-between mt-3">
                                                                <div class="total-label">Sub Total <br> </div>
                                                                <div class="total-amount">0.00</div>
                                                            </div>
                                                            <div class="total-row d-flex justify-content-between mb-2">
                                                                <div class="total-label">
                                                                    <div class="flex-nowrap row grid3row">
                                                                        <div class="col-lg-5 col-sm-5 col-5 pl-0">
                                                                            <div class="form-control-plaintext">Discount </div>
                                                                        </div>

                                                                        <div class="col-lg-15 input-group">
                                                                            <input type="text" class="form-control border-0 small">
                                                                            <div class="input-group-append">
                                                                                <select class="width55 btn form-select ember-text-field form-control ac-search-txt ember-view" style="background-color: #eee; width: 70px;" name="unit" required>
                                                                                    <option value="₹">₹</option>
                                                                                    <option value="%">%</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="total-amount" style="line-height: 2;"><span style=" float: right;">0.00</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="table-row pb-2" id="tds-field">
                                                                <div class="grid3row">
                                                                    <div class="total-label">
                                                                        <div class="grid2row">
                                                                            <div class="col-lg-5 col-sm-5 col-5 py-2">
                                                                                <div class="form-check form-check-inline"><input id="tds1" name="tds" checked class="TDS ember-view form-check-input" type="radio" value="tcs"> <label for="a3a3bd5d2" class="form-check-label">&nbsp;TDS</label>
                                                                                <input id="tcs1" name="tds" class="TCS ember-view form-check-input ml-4" type="radio" value="tcs"> <label for="a1e38c87e" class="form-check-label">&nbsp;TCS</label> </div>
                                                                            </div>
                                                                            <div class="input-group-append">
                                                                                <select class="width55 btn form-select ember-text-field form-control ac-search-txt ember-view" style="background-color: #fff; border: 1px solid #d1d3e2;" name="tds" required>
                                                                                    <option value="Commission or Brokerage 5%">Commission or Brokerage 5%</option>
                                                                                    <option value="Commission or Brokerage (Reduced) 3.75%">Commission or Brokerage (Reduced) 3.75%</option>
                                                                                    <option value="Dividend 10%">Dividend 10%</option>
                                                                                    <option value="Dividend (Reduced) 7.5%">Dividend (Reduced) 7.5%</option>
                                                                                    <option value="Other Interest than securities 10%">Other Interest than securities 10%</option>
                                                                                    <option value="Other Interest than securities (Reduced) 7.5%">Other Interest than securities (Reduced) 7.5%</option>
                                                                                    <option value="Payment of contractors for Others 2%">Payment of contractors for Others 2%</option>
                                                                                    <option value="Payment of contractors for Others (Reduced) 1.5%">Payment of contractors for Others (Reduced) 1.5%</option>
                                                                                    <option value="Payment of contractors HUF/Indiv 1%">Payment of contractors HUF/Indiv 1%</option>
                                                                                    <option value="Payment of contractors HUF/Indiv (Reduced) 0.75%">Payment of contractors HUF/Indiv (Reduced) 0.75%</option>
                                                                                    <option value="Professional Fees 10%">Professional Fees 10%</option>
                                                                                    <option value="Professional Fees (Reduced) 7.5%">Professional Fees (Reduced) 7.5%</option>
                                                                                    <option value="Rent on land or furniture etc 10%">Rent on land or furniture etc 10%</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="total-amount" style="line-height: 2">
                                                                        <div id="ember901" class="popover-container ember-view">
                                                                            <div class="text-muted align-center" style="float: right;">-0.00 </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                        <div id="ember893" class="ember-view"></div>
                                                        <div id="ember894" class="ember-view"></div>
                                                        <div class="table-row">
                                                            <div class="total-row grid3row mb-2">
                                                                <div class="badge-editable total-label">
                                                                    <div class="grid2row">
                                                                        <div class="mr-3 col-lg-20"><input id="ember895" class="ember-text-field ember-view form-control editable" type="text"></div>
                                                                        <div class="col-lg-20"><input id="ember896" class="ember-text-field text-right ember-view form-control" type="text"></div> <i class="popover-help-trigger" id="a3712c240"></i> 
                                                                    </div>
                                                                </div>
                                                                <div class="total-amount ml-5" style="line-height: 2; text-align: right;">0.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="table-row tdsNone" id="tcs-field">
                                                            <div class="grid3row">
                                                                <div class="total-label">
                                                                    <div class="grid2row">
                                                                        <div class="col-lg-5 col-sm-5 col-5 py-2">
                                                                            <div class="form-check form-check-inline"><input id="tds2" name="tcs" class="TDS ember-view form-check-input" type="radio" value="tcs"> <label for="a3a3bd5d2" class="form-check-label">&nbsp;TDS</label><input name="tcs" checked class="TCS ember-view form-check-input ml-4"  type="radio" id="tcs2" value="tcs"> <label for="a1e38c87e" class="form-check-label">&nbsp;TCS</label> </div>
                                                                        </div>
                                                                        <div class="col-lg-18 tds-select">
                                                                            <div id="ember899" class="ember-view">
                                                                                <div class="ac-box "><span class="ac-selected form-control " tabindex="0"> <span class="placeholder-text mr-0">Select a Tax</span>
                                                                                        <div class="ac-toggle-container"><i class="zf-ac-toggler"></i></div>
                                                                                    </span></div> 
                                                                            </div> 
                                                                        </div> <i class="popover-help-trigger" id="a928c85a4"></i> 
                                                                    </div>
                                                                </div>
                                                                <div class="total-amount" style="line-height: 2">
                                                                    <div id="ember901" class="popover-container ember-view">
                                                                        <div class="text-muted align-center" style="float: right;">0 </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="total-row gross-total mb-3  ">
                                                        <div class="total-label">Total ( ₹ ) </div>
                                                        <div class="total-amount ">0.00</div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fill-container txn-bottom-form grey-bg mt-7">
                                        <div class="zb-txn-form">
                                            <div class="row clearfix seperator-col">
                                                <div class="col-lg-6 coll">
                                                    <div class="form-group">
                                                        <div class="mb-2">Terms &amp; Conditions</div>
                                                        <div><textarea rows="4" placeholder="Enter the terms and conditions of your business to be displayed in your transaction" id="ember671" class="ember-text-area form-control ember-view"></textarea>
                                                            <div class="form-check d-none"><input id="a8104d58e" class="ember-checkbox ember-view form-check-input" type="checkbox"> <label for="a8104d58e" class="form-check-label"><span class="hightlight">Use this in future for all quotes of all customers.</span></label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 coll">
                                                    <div id="ember672" class="form-group ember-view">
                                                        <p class="form-control-plaintext">
                                                        <div class="font-xs">Attach File(s) to Quote</div>
                                                        <div>
                                                            <span class="btn">
                                                                <input multiple="" accept="image/gif,image/jpeg,image/png,image/bmp,application/pdf,application/doc, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/xml, text/csv, .xml, text/xml" type="file">
                                                            </span>
                                                            <div class="mt-1">
                                                                <div>
                                                                    <div>
                                                                        <small class="text-muted">
                                                                            You can upload a maximum of 3 files, 5MB each
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zb-txn-form">
                                        <div class="btn-toolbar pb-5 mb-5 fixed-actions fill-container">
                                            <div id="ember912" class="dropdown ember-view btn-group"><button id="ember913" class="mr-2 btn btn-primary ember-view" type="submit"> Send</button> </div>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('../../common/footer.php'); ?>
        </div>
    </div>
    <?php
    include('../../common/bottom.php');
    include('../../common/bottomjs.php');
    ?>