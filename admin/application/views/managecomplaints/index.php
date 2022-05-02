<div class="container">
  
        <!-- block -->
        <div class="block" style="margin-right: 30px;">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Users</div>

                
            </div>
            <div class="block-content collapse in">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>C_tittle</th>
                            <th>C_description</th>
                            <th>user_id</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $val): ?>
                        <tr>
                            <td><?=$val['id'];?></td>
                            <td><?=$val['c_tittle'];?></td>
                            <td><?=$val['c_description'];?></td>
                            <td><?=$val['user_id'];?></td>
                            <td >
                                
                                <a href="<?=base_url()?>managecomplaints/view/<?=$val['user_id']?>" class="btn btn-warning" >view</a>
                                <a href="<?=base_url()?>managecomplaints/reply/<?=$val['user_id']?>" class="btn btn-info" >Replay</a>
                                <a href="<?=base_url()?>managecomplaints/delete/<?=$val['id']?>" class="btn btn-danger">Delete</a>
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

