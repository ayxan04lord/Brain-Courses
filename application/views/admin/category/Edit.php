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
                        <h5 class="mb-0">Edit</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin_category_edit_act/'.$category_data['cg_id']); ?>" method="POST" enctype="multipart/form-data" id="category_form">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <label for="course_category">Category</label>
                                        <input value="<?php echo $category_data['cg_name']; ?>" type="text" name="course_category" class="form-control" id="course_category" placeholder="Category name">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer border-0 py-5">
                        <div class="d-flex flex-row justify-content-end mx-n1">
                        <button type="submit" class="btn d-inline-flex btn-sm btn-primary mx-1" form="category_form">
                        <span>Edit</span>
                        <span class=" pe-2">
                            <i class="bi bi-pencil"></i>
                        </span>
                        
                    </button>
                        </div>

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