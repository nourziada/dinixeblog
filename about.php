<?php 
	$pageTitle = "دنكس - من دنكس ";
	include 'header.php';
	include 'functions.php';
 ?>


<!-- Page Content -->
    <div class="container page-content" dir="rtl">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
 
            <div class="col-xs-12 noPadding">
                <div class="pull-right noPadding">
                    <div class="dinixeSection">
                        دنكس
                    </div>
                    <div class="sectionTitle"><span>قصة دنكس</span></div>
                </div>
            </div>
            
            <br><br><br><br>
            <div class="sectionContent  col-xs-12" data-readmore="" aria-expanded="true" id="rmjs-1">
            بين لندن والوطن العربي انطلقت قصة دنكس من خلال لقاء بين مبرمج في الوطن العربي وبين ريادي اعمال قابع في لندن هذا اللقاء الذي قرب المسافات وكسر الحدود كانت هذه الشرارة الأولى لفكرة خلقت الإبداع وبحثت عن الحلقة المفقودة في عالم البرمجة .
			<br>
			إنها حلقة التخصص والجودة والأمان حيث دار الحوار بينهما . فكان ذلك ميلاد جديد لشركة دنكس أول شركة الكترونية تعكس ثقافة الجيل الجديد من الرواد حيث تركز  الشركة اعمالها في الشرق الأوسط في مجال صناعة تطبيقات الآندرويد كأول شركة متخصصة في هذا المجال.
			<br>
			دنكس لديها ايمانا عميقا في الانسان المبدع والمبتكر لهذا جعلته اول هدف لنجاحها فهو عنصراً إيجابياً يساهم فعلياً في مواكبة التطور التكنولوجي العالمي  , كل هذه القيم كان وراءها رائدان في عالم الأعمال والتكنولوجيا لهما ظل مطبوع خلف الشعار , يلونانه بنظراتهم للمستقبل , ويشعلان منه طاقة تبنى فريقا مبدعا وخلاقا وذلك من خلال قيامهما برسم قصة نجاحهما الكترونيا لتصل الى كل أصعدة هذا العالم المترامي الأطراف صاحب الثقافات المختلفة , ليظهران للعالم كله أنه رغم العقبات والتحديات هناك من يبني لرفعة شأن الإنسانية ويبحث عن الابداع عبر فضاء الانترنت .            

			</div>


			
           	<div class="sectionTitle  col-xs-12 sectionVision">
            	<img src="http://dinixe.com/wp-content/themes/dinixe/assets/img/Vision.png">
            	<span>الرؤية</span>
           	</div>
           	<div class="sectionContent  col-xs-12" style="max-height: none; height: 140px;" data-readmore="" aria-expanded="true" id="rmjs-2">
            نهدف الى توظيف فريق ابتكاري محترف متمثل في 25 مبرمج ومصمم لنكون الشركة الاكترونية الاولى في الشرق الأوسط التي ستقدم 150 منتج رقمي احترافي في نظام التشغيل الآندرويد كل عام على مستوى الحكومات والشركات ورواد الاعمال            
            </div>
            
        
    		
            <div class="sectionTitle  col-xs-12">
            	<img src="http://dinixe.com/wp-content/themes/dinixe/assets/img/mission.png">
            	<span>الرسالة</span>
            </div>

            <div class="sectionContent  col-xs-12" style="max-height: none;">
                دنكس أول شركة  الكترونية في الشرق الأوسط متخصصة في صناعة تطبيقات الآندرويد بجودة وإبداع وأمان عالي             
            </div>
       


       	</div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Side Widget -->
          <div class="card my-4 info-card">
            <h5 class="card-header header-f">دنكس</h5>
            <div class="card-body body-f">
               أول شركة الكترونية في الشرق الأوسط متخصصة في صناعة تطبيقات الآندرويد بجودة وإبداع وأمان عالي                         
            </div>

            <a class="card-brand" href="https://play.google.com/store/apps/dev?id=5010563152392790021"><img src="img/googlePlayButton.png" alt="Dinixe"></a>
          </div>

          <!-- Search Widget -->
          <div class="card my-4 search-card">
            <h5 class="card-header header-f">إبحث</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="إبحث عن ....">
                <span class="input-group-btn">
                  <button class="btn btn-secondary " type="button">إذهب!</button>
                </span>
              </div>
            </div>
          </div>


          <!-- Projects Widget -->
          <div class="card my-4">
            <h5 class="card-header header-f">مشاريع تقنية</h5>
            <div class="card-body">
             
              <div id="carouselExampleIndicators" class="carousel slide slider-apps" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">

			<?php 

			  $side = new Side;
			  $projects = $side->get_projects();

			  foreach($projects as $project) {


			?>


                  <div class="carousel-item">

                    <img class="d-block img-fluid slider-img" src="img/<?php echo $project['image']; ?>" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <a class="slider-title" href="<?php echo $project['link']; ?>"><h3><?php echo $project['title']; ?></h3>
                      
                    </div>

                    <div class="d-none d-md-block carousel-caption-para">
                      <p><?php echo $project['content'];  ?></p>
                    </div>

                    

                  </div>

<?php
  }##### end of foreach of the projects
 ?>  

                 

              </div>
               

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>


            </div>
          </div>

       

        </div>

      </div>
      <!-- /.row -->
    </div>


<script>
$(document).ready(function(){



    $(".nav-item:first").removeClass('active'); // This is the change.
    $(".nav-item:nth(2)").removeClass('active'); // This is the change.
    $(".nav-item:nth(1)").addClass('active'); // This is the change.


});

</script>


<?php include 'footer.php'; ?>
