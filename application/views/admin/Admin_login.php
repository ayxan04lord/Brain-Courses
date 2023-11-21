<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>Login Courses</title>
    <link rel="stylesheet" type="text/css" href="https://clever.webpixels.io/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://clever.webpixels.io/css/utilities.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script defer="defer" data-domain="webpixels.works" src="https://plausible.io/js/script.js"></script>
</head>

<body>
    <div>
        <div class="px-5 py-5 p-lg-0 h-screen bg-surface-secondary d-flex flex-column justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="col-12 col-md-9 col-lg-6 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
                    <div class="row">
                        <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
                            <div class="text-center mb-12">

                                <h1 class="ls-tight font-bolder mt-6">Admin</h1>

                            </div>
                            <form class="user" action="<?php echo base_url('admin_login_act'); ?>" method="POST">
                                <div class="mb-5">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" autocomplete="false">
                                </div>
                                <div class="mb-5">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div><label class="form-label" for="password">Password</label></div>
                                        <div class="mb-2"></div>
                                    </div>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="false">
                                </div>
                                
                                <div><button type="submit" class="btn btn-primary btn-user w-full">Sign in</button></div>
                                <input type="text" name="captcha"><?php echo $this->session->userdata('adm_captcha')['image']; ?>
                                <?php if ($this->session->flashdata('err')) { ?>
                                    <div class="alert alert-danger alert-dismissible mt-2">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        
                                    <?php echo $this->session->flashdata('err'); ?>
                                    </div>
                                <?php } ?>

                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/main.js"></script>
</body>

</html>