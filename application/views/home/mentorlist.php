<body style="background-image: url('<?=base_url();?>assets/images/mentor_bg.jpg');">
<!-- Team -->
<?= ob_start();?>

<section id="team" class="pb-5" style="margin-top: 150px; ">
    <div class="container">
        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">

            <!-- ./Team member -->
            <!-- Team member -->
            <?php 
            
            // print_r($mentor);
            // exit;
            ?>
            <?php foreach ($mentor as $mkey => $mval): ?>
                <?php 
                // print_r($mval['profile']);
                // exit;
                    if($mval['profile'] == null || $mval['profile'] == ""){
                        $mval['profile'] = 'sample.png';
                        // echo $mval['profile'];
                        // exit;
                    }
                    
                    
                    ?>
                <div class="col-md-4 mt-5">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class="rounded-circle" src="<?=base_url();?>/assets/user_profile/<?=$mval['profile'];?>" alt="card image circle" style="height: 100px; width:100px;"></p>
                                        <br>
                                        <h4 class="card-title"><?=$mval['username']?></h4>
                                        <p class="card-text"><?=$mval['about_user']?></p><br>
                                        <a href="<?= base_url(); ?>message/index/<?=$mval['user_id']?>" class="btn btn-primary btn-sm"><i class="fa fa-plus">View More</i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Team -->
</body>