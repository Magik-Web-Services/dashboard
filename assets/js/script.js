$(document).ready(function () {
    // Add another line
    let tr = `<tr class="ember-view line-item new-line-item line-item-us tablerow">
    <td class="line-item-column item-details borderl ember-view">
        <div class="height65">
            <div class="d-flex">
                <div class="item-field mb-3 ">
                    <div class="item-autocomplete ember-view">
                        <div><textarea placeholder="Type or click to select an item."
                                class="border0 zb-invoice-item-textarea ember-text-area form-control item-description ember-view"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </td>
    <td class="borderb line-item-column item-qty ember-view">
        <div class="height65"><input value="1.00"
                class="border0 ember-text-field text-right ember-view form-control qty-field "
                type="text">
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
</tr>`;

    // delete row
    deletes = document.getElementsByClassName('deleteRow');
    tableRow = document.getElementsByClassName('tablerow');

    const deleteRow = () => {
        Array.from(deletes).forEach(element => {
            element.addEventListener("click", () => {
                if (tableRow.length != 1) {
                    let row = element.parentElement
                    row.remove()
                }
            })
        })
    }

    // Add another line 

    jQuery('#Addline').click(function () {
        jQuery('#addlineData tbody').append(tr);
        deleteRow()
    })


    // TDs And TCs
    $(".TDS").each(function () {
        $(this).click(function () {
            console.log("tds");
            $('#tcs-field').addClass("tdsNone");
            $('#tds-field').removeClass("tdsNone");
            $('#tds1').prop('checked', true);
        })
    })

    $(".TCS").each(function () {
        $(this).click(function () {
            console.log("tcs");
            $('#tds-field').addClass("tdsNone");
            $('#tcs-field').removeClass("tdsNone");
            $('#tcs2').prop('checked', true);
        })
    })


    // Data tables
    let table = $('#myTable').DataTable({
        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        },
        order: [[1, 'asc']]
    });


    // Database

    // Customers

    // Customerdeletes
    let Customerdeletes = jQuery('.Customerdeletes');
    Array.from(Customerdeletes).forEach(element => {
        element.addEventListener("click", (e) => {
            sno = e.target.id

            if (confirm("Are you sure you want to delete this Customer!")) {
                window.location = `../../pages/database/delete/delete.php?Customerdeletes=${sno}`;
            }
        })
    })

    // MultiCustomerdeletes
    // $('#Customer_Delete').click(function () {
    //     let rowdata = table.rows('.selected').data();
    //     // console.log(rowdata[0][1])
    //     // window.location = `../../pages/database/delete/delete.php?MultiCustomerdeletes=${rowdata}`;

    //     // let msg = '';
    //     for (let i = 0; i < rowdata.length; i++) {
    //         let sno = rowdata[i][1]
    //         // msg += rowdata[i]
    //         window.location = `../../pages/database/delete/delete.php?mCustomerdeletes=${rowdata}`;
    //     }
    //     // alert(msg);
    // });

    // Customersedit
    let Customersedit = jQuery('.Customersedit');
    Array.from(Customersedit).forEach(element => {
        element.addEventListener("click", (e) => {
            sno = e.target.id
            window.location = `../../pages/database/edit/Customersedit.php?Customersedit=${sno}`;
        })
    })

    // Item

    // itemsdeletes
    let itemsdeletes = jQuery('.itemsdeletes');
    Array.from(itemsdeletes).forEach(element => {
        element.addEventListener("click", (e) => {
            sno = e.target.id
            if (confirm("Are you sure you want to delete this item!")) {
                window.location = `../../pages/database/delete/delete.php?itemsdeletes=${sno}`;
            }
        })
    })

    // itemsedit
    let itemsedit = jQuery('.itemsedit');
    Array.from(itemsedit).forEach(element => {
        element.addEventListener("click", (e) => {
            sno = e.target.id
            window.location = `../../pages/database/edit/itemsedit.php?itemsedit=${sno}`;
        })
    })
});