<?php include 'includes/connection.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>News | Optima</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Owl Carousel -->
  <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
  <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

  <!-- Magnific Popup -->
  <link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <!-- Header -->
  <header>

    <?php include 'nav.php';?>

    <!-- header wrapper -->
    <div class="header-wrapper sm-padding bg-grey">
      <div class="container">
        <h2>News</h2>
        
      </div>
    </div>
    <!-- /header wrapper -->

  </header>
  <!-- /Header -->

  <!-- Blog -->
  <div id="blog" class="section">




    <div class="container">
      <div class="row">

        <div class="col-md-8">

          <?php
          $query = "SELECT * FROM posts WHERE status='published' ORDER BY updated_on DESC";
          $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
          if (mysqli_num_rows($run_query) > 0) {
            while ($row = mysqli_fetch_assoc($run_query)) {
              $post_title = $row['title'];
              $post_id = $row['id'];
              $post_author = $row['author'];
              $post_date = $row['postdate'];
              $post_image = $row['image'];
              $post_content = $row['content'];
              $post_tags = $row['tag'];
              $post_status = $row['status'];
              if ($post_status !== 'published') {
                echo "NO POST PLS";
              } else {

                ?>



                <div class="blog">
                  <div class="blog-img">
                    <img class="img-responsive" src="allpostpics/<?php echo $post_image; ?>" alt="" height="200" width="200">
                  </div>


                  <div class="blog-content"> 


                    <p><h3><a href="publicposts.php?post=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h3></p>

                    <p><span class="glyphicon glyphicon-time"></span>Posted on <?php echo $post_date; ?></p>
                    
                      <hr>
                      <p><?php echo substr($post_content, 0, 300) . '.........'; ?></p>
                      <a href="publicposts.php?post=<?php echo $post_id; ?>"><button type="button" class="btn btn-primary">Read More<span class="glyphicon glyphicon-chevron-right"></span></button></a>
                      <hr>

                    </div>
                  </div>

                  <?php }}}?>















<div class="blog">
                  <div class="blog-img">
                    <img class="img-responsive" src="./img/news/2.jpg" alt="" height="400" width="400">
                  </div>


                  <div class="blog-content"> 


                    <p><h3><a href="">Site visit to potash mine project in Eritrea</a></h3></p>

                    <p><span class="glyphicon glyphicon-time"></span>Posted on Dec 2017</p>
                    
                      <hr>
                      <p>Optima staff visited the proposed potash mine project site in Eritrea. As part of the Independent Environmental Health, Social and Safety Consultant (IESC) team, Optima staff members from Seattle, WA and Asmara, Eritrea visited the proposed sites for potash mine and desalination water plant. Visit included meetings with country government officials and local village representatives as part of the due diligence review of the Environmental and Social Impact Assessment (ESIA) report and Bankable Feasibility Studies (BFS) report. </p>
                
                      
                      <hr>

                    </div>
                  </div>







<div class="blog">
                  <div class="blog-img">
                    <img class="img-responsive" src="./img/news/20.png" alt="" height="400" width="400">
                  </div>


                  <div class="blog-content"> 


                    <p><h3><a href="">Completion of Fremont Siphon Sewer Replacement Project, Seattle, Washington</a></h3></p>

                    <p><span class="glyphicon glyphicon-time"></span>Posted on July 2017</p>
                    
                      <hr>
                      <p>Construction of the Fremont Siphon Sewer Replacement by the King County Wastewater Division was recently completed. Optima staff provided Engineering Services during Construction (ESDC) for construction of two 60-in diameter tunnels under Lake Washington Ship Canal using remote controlled micro-tunneling boring machine (MTBM). </p>
                  
                      
                      <hr>

                    </div>
                  </div>






                  <div class="blog">
                  <div class="blog-img">
                    <img class="img-responsive" src="./img/news/11.jpg" alt="" height="400" width="400">
                  </div>


                  <div class="blog-content"> 


                    <p><h3><a href="">Presentation at International Conference on Business and Management, BRAC University, Dhaka</a></h3></p>

                    <p><span class="glyphicon glyphicon-time"></span>Posted on Sept 2017</p>
                    
                      <hr>
                     <p>Aleya Ikbal, VP of Optima, presented the paper titled Performance Framework for Driving Results: How Seattle IT is improving performance using the framework approach at the 1st International Conference on Business and Management organized by BRAC University in Dhaka on Sep 21-22, 2017. </p>
                  
                      
                      <hr>

                    </div>
                  </div>







                  <hr>
                  <ul class="pager">
                    <li class="previous"><a href="#"><span class="glyphicon glyphicon-arrow-left"></span> Older</a></li>
                    <li class="next"><a href="#">Newer <span class="glyphicon glyphicon-arrow-right"></span></a></li>
                  </ul>
                </div>



              </div>


            </div>








          </div>
          <!-- /Blog -->

          <?php include 'footer.php';?>

          <!-- Back to top -->
          <div id="back-to-top"></div>
          <!-- /Back to top -->

          <!-- Preloader -->
          <div id="preloader">
            <div class="preloader">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <!-- /Preloader -->

          <!-- jQuery Plugins -->
          <script type="text/javascript" src="js/jquery.min.js"></script>
          <script type="text/javascript" src="js/bootstrap.min.js"></script>
          <script type="text/javascript" src="js/owl.carousel.min.js"></script>
          <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
          <script type="text/javascript" src="js/main.js"></script>

        </body>

        </html>
