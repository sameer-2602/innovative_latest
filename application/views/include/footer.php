
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="nav-footer py-sm-4 py-3">
    <div class="container-fluid">
        <div class="buttom-nav ">
            <nav class="border-line py-2">
                <ul class="nav justify-content-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link scroll">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#service" class="nav-link scroll">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link scroll">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link scroll">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<footer class="py-3">
    <div class="container">
        <div class="copy-agile-right text-center">
            <div class="list-social-icons text-center py-lg-4 py-md-3 py-3">
                <ul>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                    <li><a href="#"><span class="fas fa-rss"></span></a></li>
                   
                </ul>
            </div>
            <p> 
                © innovative 2019 All rights Reserved | Design By Innovative Team.
            </p>
        </div>
    </div>
</footer>
<!--//footer-->
<!--model-->
<div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLiveLabel" data-blast="color">ClassWork</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  class="form-add" method="post" action="mentors_list/mentorlist">
            <div class="modal-body">
                
                    <label>User Name</label>
                    <input type="text" name="username" class="form-control username"><br>
                    <lable>Select courses</lable>
                    <select class="form-control course" name="course_id">
                        <?php foreach ($course as $val): ?>
                            <option value="<?= $val['id'] ?>"><?= $val['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btnadd" value="sub">save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--//model-->
<!------------MODEL LOGIN--------->


<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form method="post" action="<?=base_url();?>home/login">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login Here</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
            <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter password">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit"  name="sub" class="btn btn-success">Login</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</form>
  </div>
</div>

<!--------------------->


<!----------
REGSITER MODEL------------>
 <div class="modal fade" id="register">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!--  Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register Here</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form class="Regform" enctype="multipart/form-data" method="post" action="<?=base_url();?>home/register" style="padding: 10px;margin: 10px;">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Enter Username" required="">
            </div>
              <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Enter Email" required="">
            </div>
             <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Enter Password" required="">
            </div>
             <div class="form-group">
              <select name="state_id" class="form-control" required="">
                  <option>SELECT State</option>
                  <?php foreach($state as $val):?>
                    <option value="<?=$val['sid']?>"><?=$val['sname']?></option>
                  <?php endforeach;?>
              </select>
            </div>
             <div class="form-group">
              <select name="city_id" class="form-control" required="">
                  <option>SELECT City</option>
                   <?php foreach($city as $val1):?>
                    <option value="<?=$val1['cid']?>"><?=$val1['cname']?></option>
                  <?php endforeach;?>
              </select>
            </div>
            <div class="form-group">
              <select name="course_id" class="form-control" required="">
                  <option>SELECT Course</option>
                   <?php foreach($course as $val2):?>
                    <option value="<?=$val2['id']?>"><?=$val2['name']?></option>
                  <?php endforeach;?>
              </select>
            </div>
            <div class="form-group">
              <input type="text" name="landmark" class="form-control" placeholder="Enter landmark" required="">
            </div>
            <div class="form-group">
              <input type="file" name="profile" placeholder="please select profile pic"  required="">
            </div>
            <div class="form-group">
              <label>Your are ?</label>
              <input type="radio" name="role_id" value="2"  required="">Mentor
              <input type="radio" name="role_id" value="3" required="">Student
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" name="sub" class="btn btn-success btnreg">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<!--------->
<!--js working-->
<script src="<?= base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.countup.js"></script>
<script src='<?= base_url(); ?>assets/js/jquery-2.2.3.min.js'></script>
<!--//js working--> 
<!--blast colors change-->
<script src="<?= base_url(); ?>assets/js/blast.min.js"></script>
<!--//blast colors change-->
<!--responsiveslides banner-->
<script src="<?= base_url(); ?>assets/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 900,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
		  <!--responsive tabs-->	 
<script src="<?= base_url(); ?>assets/js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });

</script>
<!--// responsive tabs-->	
<!--About OnScroll-Number-Increase-JavaScript -->

<script>
    $('.counter').countUp();
</script>
<!-- //OnScroll-Number-Increase-JavaScript -->	  
<!-- start-smoth-scrolling -->
<script src="<?= base_url(); ?>assets/js/move-top.js"></script>
<script src="<?= base_url(); ?>assets/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1100,
            easingType: 'linear'
        };
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>

<!-- <script type="text/javascript">
    $(document).ready(function(){
        $(".btnadd").on('click',function(e){
            var username = $(".username").val();
            var course = $(".course").val();
            var callfunction = "";
                e.preventDefault();
                e.stopPropagation();
            $.ajax({
                url:callfunction,
                type:"post",
                data:{username,course},
                crossDomain : true,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
               success:function(response){

               }
            })
        })
    })
</script> -->
<!-- //here ends scrolling icon -->
<!--bootstrap working-->
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
</body>
</html>