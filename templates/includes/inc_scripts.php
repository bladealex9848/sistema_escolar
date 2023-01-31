<!-- jQuery | definido en settings.php -->
<?php echo get_jquery(); ?>

<!-- CSS Framework scripts | Por defecto Bootstrap 5 | definido en settings.php -->
<?php echo get_css_framework_scripts(); ?>

<!-- Axios | definido en settings.php -->
<?php echo get_axios(); ?>

<!-- SweetAlert2 -->
<?php echo get_sweetalert2(); ?>

<!-- Toastr js -->
<?php echo get_toastr(); ?>

<!-- waitme js -->
<?php echo get_waitMe(); ?>

<!-- Lightbox js -->
<?php echo get_lightbox(); ?>

<!-- Vendor JS Files -->
<script src="<?php echo ASSETS . 'vendor/apexcharts/apexcharts.min.js'; ?>"></script>
<script src="<?php echo ASSETS . 'vendor/apexcharts/apexcharts.min.js'; ?>"></script>
<script src="<?php echo ASSETS . 'vendor/chart.js/chart.umd.js'; ?>"></script>
<script src="<?php echo ASSETS . 'vendor/echarts/echarts.min.js'; ?>"></script>
<script src="<?php echo ASSETS . 'vendor/quill/quill.min.js'; ?>"></script>
<script src="<?php echo ASSETS . 'vendor/simple-datatables/simple-datatables.js'; ?>"></script>
<script src="<?php echo ASSETS . 'vendor/tinymce/tinymce.min.js'; ?>"></script>
<script src="<?php echo ASSETS . 'vendor/php-email-form/validate.js'; ?>"></script>

<!-- Template Main JS File -->
<script src="<?php echo JS . 'main_NiceAdmin-pro.js'; ?>"></script>

<!-- Objeto Bee Javascript registrado -->
<?php echo load_bee_obj(); ?>

<!-- Scripts registrados manualmente -->
<?php echo load_scripts(); ?>

<!-- Scripts personalizados Bee Framework -->
<script src="<?php echo JS . 'main.js?v=' . get_version(); ?>"></script>