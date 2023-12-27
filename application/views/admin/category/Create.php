<?php $this->load->view('admin/includes/HeadScripts'); ?>
<!-- Banner -->


<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <?php $this->load->view('admin/includes/Sidebar'); ?>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center my-4">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">Category</h1>
                        </div>
                        <!-- Actions -->

                    </div>
                    <!-- Nav -->

                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Create</h5>
                    </div>
                    <div class="card-body">
                    <?php if($this->session->flashdata('err')): ?>
                                    <div class="alert alert-danger alert-dismissible mb-5">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <?php echo $this->session->flashdata('err'); ?>
                                    </div>
                                    <?php endif; ?>
                        <form action="<?= base_url('admin_category_create_act'); ?>" method="POST" enctype="multipart/form-data" id="category_form">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <label for="course_category_en">Category EN</label>
                                        <input type="text" name="course_category_en" class="form-control" id="course_category_en" placeholder="Category name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <label for="course_category_az">Category AZ</label>
                                        <input type="text" name="course_category_az" class="form-control" id="course_category_az" placeholder="Category name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <label for="course_category_ru">Category RU</label>
                                        <input type="text" name="course_category_ru" class="form-control" id="course_category_ru" placeholder="Category name">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer border-0 py-5">

                        <div class="d-flex flex-row justify-content-end mx-n1">

                            <button type="submit" class="btn d-inline-flex btn-sm btn-primary mx-1" form="category_form">
                                <span>Create</span>
                                <span class=" pe-2 ml-3">
                                    <i class="bi bi-plus"></i>
                                </span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://clever.webpixels.io/js/main.js"></script>
</body>

</html>