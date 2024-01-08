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
                            <h1 class="h2 mb-0 ls-tight">Courses List</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">

                                <a href="<?= base_url('admin_course_create'); ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span>Create</span>
                                    <span class=" pe-2 mr-3">
                                        <i class="bi bi-plus"></i>
                                    </span>

                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->

                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="courseDataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Img</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $id_courses = 1;
                                foreach ($courses_data as $course_item) : ?>
                                    <tr>
                                        <td><?= $id_courses++; ?></td>
                                        <td>
                                            <p class="text-truncate" style="max-width: 82px;"><?= $course_item["c_title_en"]; ?></p>
                                        </td>
                                        
                                        <td>
                                            <p><?= substr($course_item["c_desc_en"], 0, 20 ) ; ?>...</p>
                                        </td>
                                        <td><?= $course_item["cg_name_en"]; ?></td>
                                        <td><?= $course_item["c_status"] ? "Active" : "Deactive"; ?></td>
                                        <td style="max-width: 150px;"><a target="_blank" href="<?php echo base_url('uploads/courses/' . $course_item['c_img']); ?>"><img  src="<?php echo base_url('uploads/courses/' . $course_item['c_img']); ?>" alt="" style="object-fit: contain; object-position:top; width:100%;  aspect-ratio:initial;"></a></td>


                                        <td>
                                            <a href="<?php echo base_url('admin_course_edit/') . $course_item['c_id']; ?>" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                                <button type="submit" class=" pe-2">
                                                    <i class="bi bi-pencil"></i>
                                                </button>

                                            </a>
                                            <a href="<?php echo base_url('admin_course_details/') . $course_item['c_id']; ?>" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                                <button type="submit" class=" pe-2">
                                                    <i class="bi bi-eye"></i>
                                                </button>

                                            </a>
                                            <a onclick="return confirm('Are you sure want to delete this item?')" href="<?php echo base_url('admin_course_delete/') . $course_item['c_id']; ?>" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                                <button type="submit" class=" pe-2">
                                                    <i class="bi bi-trash"></i>
                                                </button>

                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
                        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#courseDataTable').DataTable();
                            });
                        </script>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>
<script src="https://clever.webpixels.io/js/main.js"></script>
</body>

</html>