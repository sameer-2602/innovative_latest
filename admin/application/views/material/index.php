
<div class="container">
    <div class="row-fluid">
        <div class="span9">

            <!-- block -->
            <div class="block">
                <?php
                if (!empty($this->session->flashdata('success'))) {
                    echo "<div class='alert alert-success'>"
                    . "<strong>" . $this->session->flashdata('success') . "</strong>"
                    . "</div>";
                }
                ?>
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><h3>Slider Image</h3></div>
                    <div class="" style="padding-left: 1000px;">
                        <a href="<?= base_url(); ?>materials/add" class="btn btn-success" >Add</a>
                    </div>
                </div>
                <div class="block-content collapse in">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>File Tag</th>
                                <th>File Title</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php  foreach ($result as $val): ?>
                                <tr>
                                    <td><?= $val['image_tag']; ?></td>
                                    <td><?= $val['image_title']; ?></td>
<!--                                    <td>--><?//= $val['image_sub_title']; ?><!--</td>-->
									<td><a href="<?= '../uploads/'.$val['material_file'];?>" style="height: 100px;width: 100px;"/><?=$val['material_file']?></a></td>
                                    <td>
                                        <a href="<?= base_url() ?>materials/delete/<?= $val['id'] ?>/<?= $val['material_file'] ?>" class="btn btn-danger">Delete</a>
                                    </td>  
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /block -->
        </div>

        <!-- block -->

    </div>
</div>


<!--Popup-->

