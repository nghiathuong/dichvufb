</div>
<!-- page-main closed -->
<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright © 2022 <a href="javascript:void(0)">Lương Bình Dương</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="https://fb.com/luongbinhduong.mOzil"> Lương Bình Dương </a>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER CLOSED -->

</div>
<!-- page -->

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>


<!-- BOOTSTRAP JS -->
<script src="<?= BASE_URL('') ?>assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?= BASE_URL('') ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- INPUT MASK JS-->
<script src="<?= BASE_URL('') ?>assets/plugins/input-mask/jquery.mask.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="<?= BASE_URL('') ?>assets/plugins/sidemenu/sidemenu.js"></script>

<!-- SIDEBAR JS -->
<script src="<?= BASE_URL('') ?>assets/plugins/sidebar/sidebar.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="<?= BASE_URL('') ?>assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="<?= BASE_URL('') ?>assets/plugins/p-scroll/pscroll.js"></script>
<script src="<?= BASE_URL('') ?>assets/plugins/p-scroll/pscroll-1.js"></script>


<!-- INTERNAL SELECT2 JS -->
<script src="<?= BASE_URL('') ?>assets/plugins/select2/select2.full.min.js"></script>
<script src="<?= BASE_URL('') ?>assets/js/select2.js"></script>

<?php
if ($showDatabase == true) {
?>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/js/table-data.js"></script>

<?php } ?>
<?php if ($show_chart == true) { ?>

    <!-- CHART-CIRCLE JS-->
    <script src="<?=BASE_URL('')?>assets/plugins/circle-progress/circle-progress.min.js"></script>

    <!-- CHARTJS JS -->
    <script src="<?=BASE_URL('')?>assets/plugins/chart/Chart.bundle.js"></script>
    <!-- <script src="<?=BASE_URL('')?>assets/js/chart.js"></script> -->
<?php } ?>
<!-- Color Theme js -->
<script src="<?= BASE_URL('') ?>assets/js/themeColors.js"></script>

<!-- Sticky js -->
<script src="<?= BASE_URL('') ?>assets/js/sticky.js"></script>

<!-- CUSTOM JS -->
<script src="<?= BASE_URL('') ?>assets/js/chat.js"></script>


<!-- Switcher js -->
<script src="<?= BASE_URL('') ?>assets/switcher/js/switcher.js"></script>
<!-- CUSTOMSMED -->
<script src="<?= BASE_URL('') ?>assets/js/function.js?06092005"></script>
<script>
    setTimeout(function() {
        $('#modal_thongbao').modal('show');
    }, 1500);
</script>

</body>

</html>