</div>
</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->


<!-- Jquery JS-->
<script src="<?= base_url('assets/vendor/jquery-3.2.1.min.js') ?>"></script>
<!-- Bootstrap JS-->
<script src="<?= base_url('vendor/bootstrap-4.1/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap-4.1/bootstrap.min.js') ?>"></script>
<!-- Vendor JS       -->
<script src="<?= base_url('assets/vendor/slick/slick.min.js') ?>">
</script>
<script src="<?= base_url('assets/vendor/wow/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/animsition/animsition.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>">
</script>
<script src="<?= base_url('assets/vendor/counter-up/jquery.waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/counter-up/jquery.counterup.min.js') ?>">
</script>
<script src="<?= base_url('assets/vendor/circle-progress/circle-progress.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
<script src="<?= base_url('assets/vendor/chartjs/Chart.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/select2/select2.min.js') ?>">
</script>

<!-- Main JS-->
<script src="<?= base_url('assets/js/main.js') ?>"></script>

<script>
    $(document).ready(function () {
    
    $(".del-record").click(function () {
        if (!confirm("Do you Want to Delete Record")) {
            return false;
        }
    });
   
});
</script>

</body>

</html>
<!-- end document-->