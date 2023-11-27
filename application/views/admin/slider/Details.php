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
                            <h1 class="h2 mb-0 ls-tight">Slider</h1>
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
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Detail <a href="<?php echo base_url('admin_slider_list'); ?>"><button type="button" style="float:right" class="btn btn-primary">Back</button></a></h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTablea" width="100%" cellspacing="0">

                                <tr>
                                    <th style="width: 200px;">Title az</th>
                                    <td><?php echo $slider_data['sl_title_az']; ?></td>
                                </tr>

                                <tr>
                                    <th>Title en</th>
                                    <td><?php echo $slider_data['sl_title_en']; ?></td>
                                </tr>

                                <tr>
                                    <th>Title ru</th>
                                    <td><?php echo $slider_data['sl_title_ru']; ?></td>
                                </tr>

                                <tr>
                                    <th>Description az</th>
                                    <td><?php echo $slider_data['sl_description_az']; ?></td>
                                </tr>

                                <tr>
                                    <th>Description en</th>
                                    <td><?php echo $slider_data['sl_description_en']; ?></td>
                                </tr>

                                <tr>
                                    <th>Description ru</th>
                                    <td><?php echo $slider_data['sl_description_ru']; ?></td>
                                </tr>

                              
                                <tr>
                                    <th>Link</th>
                                    <td><?php echo $slider_data['sl_link']; ?></td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <?php if ($slider_data['sl_status'] == "Active") { ?>
                                        <td><span class="success_st">Active</span></td>
                                    <?php  } else { ?>
                                        <td><span class="danger_st">Deactive</span></td>

                                    <?php } ?>
                                </tr>

                                <tr>
                                    <th>Img</th>
                                    <?php if ($slider_data['sl_img']) { ?>
                                        <td><img width="150px" src="<?php echo base_url('uploads/slider/' . $slider_data['sl_img']); ?>" alt=""></td>
                                    <?php } else { ?>
                                        <td><img width="150px" src="https://thumbs.dreamstime.com/b/no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg" alt=""></td>
                                    <?php } ?>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
        </main>
    </div>

</div>
<script src="https://clever.webpixels.io/js/main.js"></script>
</body>

</html>