<!-- Include Header Page -->

<?php
$pageTitle = "دنكس - المدونة";
include 'header.php';
include 'functions.php';

  $post = new Post;
  $posts = $post->get_allposts();
?>

    <!-- Page Content -->
    <div class="container page-content" dir="rtl">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">


         <!-- PHP Get Data from DataBase and Function POSTS -->
         <?php

           
            foreach($posts as $post) {
            
          ?>
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="img/<?php echo $post['image']; ?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $post['title'];?></h2>
              <p class="card-text"><?php echo $post['content']; ?></p>
              <a href="post.php?id=<?php echo $post['id'];?>" class="btn btn-primary">&rarr; إقرأ المزيد</a>
            </div>
            <div class="card-footer text-muted">
              تم النشر في  
              <?php echo date('Y-m-d', $post['date']); ?>
            </div>
          </div>


          <?php
            } ### end of foreach to get posts

          ?>


          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

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

                    <img class="d-block img-fluid slider-img" src="img/<?php echo $project['image']; ?>" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                      <a class="slider-title" href="<?php echo $project['link']; ?>"><h3><?php echo $project['title']; ?></h3></a>
                      
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



    $(".carousel-item:first").addClass('active'); // This is the change.
});

</script>

<!-- Include Footer Page -->
<?php
include 'footer.php';
?>    