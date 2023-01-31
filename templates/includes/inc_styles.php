<!-- CSS Framework | Configurado en settings.php | defecto = Bootstrap 5 -->
<?php echo get_css_framework(); ?>

<!-- Font awesome 5 -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<!-- Todo plugin debe ir debajo de está línea -->
<!-- Toastr css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="<?php echo CSS . 'custom.toastr.css?v=' . get_version(); ?>">

<!-- Waitme css -->
<link rel="stylesheet" href="<?php echo PLUGINS . 'waitme/waitMe.min.css'; ?>">

<!-- Lightbox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" />

<!-- CDN Vue js 3 | definido en settings.php -->
<?php echo get_vuejs(); ?>

<!-- Estilos NiceAdmin-pro -->
<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?php echo ASSETS . 'vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet">
<link href="<?php echo ASSETS . 'vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet">
<link href="<?php echo ASSETS . 'vendor/quill/quill.snow.css'; ?>" rel="stylesheet">
<link href="<?php echo ASSETS . 'vendor/quill/quill.bubble.css'; ?>" rel="stylesheet">
<link href="<?php echo ASSETS . 'vendor/remixicon/remixicon.css'; ?>" rel="stylesheet">
<link href="<?php echo ASSETS . 'vendor/simple-datatables/style.css'; ?>" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?php echo CSS . 'style.css'; ?>" rel="stylesheet">


<!-- Estilos registrados manualmente -->
<?php echo load_styles(); ?>

<!-- Estilos personalizados deben ir en main.css o abajo de esta línea -->
<link rel="stylesheet" href="<?php echo CSS . 'main.css?v=' . get_version(); ?>">