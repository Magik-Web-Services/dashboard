
<!-- Bootstrap core JavaScript-->
<script src="<?php echo INV_ASSETS; ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo INV_ASSETS; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript -->
<script src="<?php echo INV_ASSETS; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo INV_ASSETS; ?>/js/sb-admin-2.min.js"></script>

<!-- data tables -->
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<!-- <script src="//cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js"></script> -->
<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
// Ajax
$('.searchCustomer').select2({
    ajax: {
        // type: "GET",
        // url: "backend-script.php",             
        // dataType: "html",         
        url: "https://api.github.com/search/repositories",
        dataType: 'json',
        data: (params) => {
            return {
                q: params.term,
            }
        },
        processResults: (data, params) => {
            const results = data.items.map(item => {
                return {
                    id: item.id,
                    text: item.full_name || item.name,
                };
            });
            return {
                results: results,
            }
        },
    },
});
</script>

<!--  -->
<script src="<?php echo INV_ASSETS; ?>/js/script.js"></script>
