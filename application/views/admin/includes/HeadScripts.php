<?php

if(!isset($_SESSION['admin_id'])){
    $this->session->set_flashdata('err', 'Enter the password and login!');
    redirect(base_url('admin_login'));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover" />
        <meta name="color-scheme" content="dark light" />
        <title>Brain Dashboard</title>

        <link rel="stylesheet" type="text/css" href="https://clever.webpixels.io/css/main.css" />
        <link rel="stylesheet" type="text/css" href="https://clever.webpixels.io/css/utilities.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
        <script defer="defer" data-domain="webpixels.works" src="https://plausible.io/js/script.js"></script>
        <link rel="shortcut icon" href="<?php echo base_url('public/admin/assets/img/favicon.ico'); ?>" type="image/x-icon">
        <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>

</head>
<body>