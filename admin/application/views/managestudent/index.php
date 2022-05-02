<div class="container">
        <!-- block -->
        <div class="block" style="margin-right: 30px;" >
            <div class="navbar navbar-inner block-header" >
                <div class="muted pull-left"><legend><?= $page_heading; ?></legend></div>
                <div class="pull-right">
                    <a href="<?= base_url(); ?>managestudent/add" class="btn btn-success">ADD</a>
                </div>
            </div>
           
                <table class="table table-striped" >
                    <thead>
                        <tr>
                            <th>user_id</th>
                            <th>username</th>
                            <th>role_id</th>
                            <th>Action</th>

                        </tr>
                        <?php foreach ($result as $val): ?>
                            <tr>
                                <td><?= $val['user_id']; ?></td>
                                <td><?= $val['username']; ?></td>
                                <td><?= $val['role_id']; ?></td>
                                <td>
                                    <a  class="btn btn-info" href="<?= base_url(); ?>managestudent/edit/<?= $val['user_id']; ?>">Edit</a>
                                    <a  class="btn btn-danger" href="<?= base_url(); ?>managestudent/delete/<?= $val['user_id']; ?>">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </thead>

                </table>
            </div>
        </div>
        <!-- /block -->
</div>