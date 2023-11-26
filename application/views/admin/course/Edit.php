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
                            <h1 class="h2 mb-0 ls-tight">Courses</h1>
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
                        <!-- Nav pills -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" href="#home">AZE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#menu1">ENG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#menu2">RUS</a>
                            </li>
                        </ul>

                        <form action="<?= base_url('admin_course_edit_act/' . $course_data['c_id']); ?>" method="POST" enctype="multipart/form-data" id="course_form">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tab-content">
                                        <div id="home" class="container tab-pane active">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label for="course_title_az">Course Title AZE</label>
                                                    <input value="<?php echo $course_data['c_title_az']; ?>" type="text" name="course_title_az" class="form-control" id="course_title_az" placeholder="Project name">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="course_description_az">Course Description AZE</label>
                                                    <textarea name="course_description_az" id="course_description_az" rows="9" class="form-control"><?php echo $course_data['c_desc_az']; ?></textarea>
                                                    <script>
                                                        CKEDITOR.replace('course_description_az');
                                                    </script>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="menu1" class="container tab-pane fade">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label for="course_title_en">Course Title ENG</label>
                                                    <input value="<?php echo $course_data['c_title_en']; ?>" type="text" name="course_title_en" class="form-control" id="course_title_en" placeholder="Project name">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="course_description_en">Course Description ENG</label>
                                                    <textarea  name="course_description_en" id="course_description_en" rows="9" class="form-control"><?php echo $course_data['c_desc_en']; ?></textarea>
                                                    <script>
                                                        CKEDITOR.replace('course_description_en');
                                                    </script>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="menu2" class="container tab-pane fade">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label for="course_title_ru">Course Title RUS</label>
                                                    <input value="<?php echo $course_data['c_title_ru']; ?>" type="text" name="course_title_ru" class="form-control" id="course_title_ru" placeholder="Project name">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="course_description_ru">Course Description RUS</label>
                                                    <textarea  name="course_description_ru" id="course_description_ru" rows="9" class="form-control"><?php echo $course_data['c_desc_ru']; ?></textarea>
                                                    <script>
                                                        CKEDITOR.replace('course_description_ru');
                                                    </script>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="rounded border border-2 border-dashed border-primary-hover position-relative mt-3">
                                            <div style="background-size:170px; background-repeat:no-repeat; background-position:0px center; background-image: url('../uploads/courses/<?php echo $course_data['c_img']; ?>');" class="d-flex justify-content-center px-5 py-5">
                                                <label for="file_upload" class="position-absolute w-full h-full top-0 start-0 cursor-pointer">
                                                    <input id="file_upload" name="file_upload" type="file" class="visually-hidden">
                                                </label>
                                                <div class="text-center">
                                                    <div class="text-2xl text-muted"><i class="bi bi-upload"></i></div>
                                                    <div class="d-flex text-sm mt-3">
                                                        <p class="font-semibold">Upload a file or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 3MB</p>
                                                </div>
                                            </div>
                                        </div>
                                        <select name="course_select_option" class="form-select mt-3" aria-label="Default select example">
                                            <option>Category</option>
                                            <?php foreach ($categories_list as $category) : ?>
                                                <option <?= $course_data['c_category'] == $category['cg_id'] ? 'selected' : ''; ?> value="<?php echo $category['cg_id']; ?>"><?php echo $category['cg_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="row mt-3">
                                            <div class="form-check form-switch me-n2"><input class="form-check-input" type="checkbox" name="course_status" id="switch-dark-mode" <?= $course_data['c_status'] ? 'checked' : ''; ?>></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <div class="card-footer border-0 py-5">
                            <div class="d-flex flex-row justify-content-end mx-n1">
                                <div class="col-md-3">
                                    <button type="submit" class="btn d-inline-flex btn-sm btn-warning mx-1" form="course_form">
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