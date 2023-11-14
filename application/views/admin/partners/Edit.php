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
                            <h1 class="h2 mb-0 ls-tight">Partners</h1>
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
                        <form action="<?= base_url('admin_partners_edit_act/'.$partners_data['p_id']); ?>" method="POST" name="partners_form" enctype="multipart/form-data" id="partners_form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <label for="partners_title">Partners Title</label>
                                        <input value="<?php echo $partners_data['p_title']; ?>" type="text" name="partners_title" class="form-control" id="partners_title" placeholder="Title name">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="partners_link">Link</label>
                                        <input value="<?php echo $partners_data['p_link']; ?>" type="text" name="partners_link" class="form-control" id="partners_link" placeholder="Link">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="rounded border border-2 border-dashed border-primary-hover position-relative mt-3">
                                            <div style="background-size:170px; background-repeat:no-repeat; background-position:0px center; background-image: url('../uploads/courses/<?php echo $partners_data['p_img']; ?>');" class="d-flex justify-content-center px-5 py-5"><label for="file_upload" class="position-absolute w-full h-full top-0 start-0 cursor-pointer"><input id="file_upload" name="file_upload" type="file" class="visually-hidden"></label>
                                                <div class="text-center">
                                                    <div class="text-2xl text-muted">
                                                        <i class="bi bi-upload"></i>
                                                    </div>
                                                    <div class="d-flex text-sm mt-3">
                                                        <p class="font-semibold">Upload a file or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 3MB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer border-0 py-5">
                        <div class="d-flex flex-row justify-content-end mx-n1">
                            <button type="submit" class="btn d-inline-flex btn-sm btn-primary mx-1" form="partners_form">
                                <span class=" pe-2">
                                    <i class="bi bi-pencil">
                                    </i>
                                </span>
                                <span>Edit</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://clever.webpixels.io/js/main.js"></script>
    </body>

    </html>