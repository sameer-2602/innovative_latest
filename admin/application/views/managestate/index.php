
<div class="container">
<div class="row-fluid">
    <div class="span9">
        
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left"><h3>STATE DETAILS</h3></div>
                <div class="" style="padding-left: 1000px;">
                    <a href="<?= base_url(); ?>managestate/add" class="btn btn-success" >Add</a>
                </div>
            </div>

                <table class="table table-striped">
                  
                    <thead>
                        <tr>
                            <th>State_id</th>
                            <th>State_name</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <?php foreach($result as $val): ?>
                    <tr>
                        <td><?=$val['sid'];?></td>
                        <td><?=$val['sname'];?></td>
                        <td><a href="<?= base_url();?>/managestate/edit/<?=$val['sid'];?>" class="btn btn-info">EDIT</a>
                        <a href="<?= base_url();?>/managestate/delete/<?=$val['sid'];?>" class="btn btn-danger">DELETE</a></td>
                        
                    </tr>
                    <?php endforeach;?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /block -->
    </div>

    <!-- block -->

