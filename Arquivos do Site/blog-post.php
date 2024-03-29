<?php require_once("config.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <title>Blog - <?php echo $nome_site ?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/icone2.ico" type="image/x-icon">

  <!-- Font awesome -->
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">   
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
  <!-- Date Picker -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">    
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

  <!-- Main style sheet -->
  <link href="style.css" rel="stylesheet">    


  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>        
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Pre Loader -->
    <div id="aa-preloader-area">
      <div class="mu-preloader">
        <img src="assets/img/preloader2.gif" alt=" loader img">
      </div>
    </div>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Topo</span>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header section -->
    <header id="mu-header">  
      <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
        <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- LOGO -->  
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo2.png" alt="Logo img"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
              <li><a href="index.php">HOME</a></li>
              <li><a href="blog.php">BLOG</a></li>                       

            </ul>                            
          </div><!--/.nav-collapse -->       
        </div>          
      </nav> 
    </header>
    <!-- End header section --> 

    <!-- Start Blog banner  -->
    <section id="mu-blog-banner">
      <div class="container">
        <div class="mu-blog-banner-area">

        </div>
      </div>
    </section>
    <!-- End Blog banner -->  

    <!-- Start Blog -->
    <section id="mu-blog">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-blog-area">
              <div class="row">
                <div class="col-md-8 col-sm-8">
                  <div class="mu-blog-content mu-blog-details">
                    <!-- Start Single blog item -->
                    <article class="mu-news-single">
                      <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!</a></h2>
                      <figure class="mu-news-img">
                        <a href="#"><img src="assets/img/news/1.jpg" alt="img"></a>                      
                      </figure>
                      <div class="mu-news-single-content">                      
                        <ul class="mu-meta-nav">
                          <li>By Admin</li>
                          <li>Date: May 10 2016</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                        <blockquote>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempore ipsam, harum, quae amet fugiat nostrum quam error quis illum id ratione explicabo repellat laboriosam architecto, rerum vel velit necessitatibus?</p>
                          <cite> - Mr. Jhon</cite>
                        </blockquote>    
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, itaque perspiciatis a fugiat cupiditate eveniet.</p>  

                      </div>


                    </article>
                    <!-- End Single blog item -->                  
                  </div>
                  <!-- Start Blog navigation -->

                  <!-- End Blog navigation -->


                </div>
                <!-- Start Blog Sidebar -->
                <div class="col-md-4 col-sm-4">             
                  <aside class="mu-blog-sidebar">
                    <!-- Blog Sidebar Single -->
                    <div class="mu-blog-sidebar-single">
                      <h3>Categories</h3>
                      <ul class="mu-catg-nav">
                        <li><a href="#">Cake</a></li>
                        <li><a href="#">Pizza</a></li>
                        <li><a href="#">Drinks</a></li>
                        <li><a href="#">Dessert</a></li>
                        <li><a href="#">Chicken</a></li>
                        <li><a href="#">Beef</a></li>
                        <li><a href="#">Mutton</a></li>
                      </ul>
                    </div>
                    <!-- End Blog Sidebar Single -->
                    <!-- Blog Sidebar Single -->
                    <div class="mu-blog-sidebar-single">
                      <h3>Recent News</h3>
                      <ul class="mu-recent-news-nav">
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, ipsum!</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, ipsum!</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, ipsum!</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, ipsum!</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, ipsum!</a></li>
                      </ul>
                    </div>
                    <!-- End Blog Sidebar Single -->

                    <!-- End Blog Sidebar Single -->
                  </aside>
                </div>
                <!-- End Blog Sidebar -->
              </div>
            </div>
          </div>
        </div>



        <!-- Start Blog comments thread -->
        <div class="row">
          <div class="col-md-8">
            <div class="mu-comments-area">
              <h3>5 Comentários</h3>
              <div class="comments">
                <ul class="commentlist">
                  <li>
                    <div class="media">

                      <div class="media-body">
                       <h4 class="author-name">David Muller</h4>
                       <span class="comments-date"> Posted on 12th May, 2016</span>
                       <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>

                     </div>
                   </div>
                 </li>

               </ul>
               <!-- comments pagination -->

             </div>
           </div>
         </div>

         <!-- Start Blog comments thread -->
         <!-- Start comments box -->

         <div class="col-md-4">
          <div id="respond">
            <h3 class="reply-title">Faça seu Comentário</h3>
            <form id="commentform" method="post">
              
              <p class="comment-form-author">
                <label for="author">Nome <span class="required">*</span></label>
                <input class="form-control" type="text" name="nome" value="" size="30" required="required">
              </p>
              <p class="comment-form-email">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" name="email" value="" aria-required="true" required="required">
              </p>
              
              <p class="comment-form-comment">
                <label for="comment">Comment</label>
                <textarea name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
              </p>
              
              <p class="form-submit">
                <input type="submit" name="submit" class="mu-send-btn" value="Comentar">
              </p>        
            </form>
          </div>
        </div>
      </div>

      <!-- End comments box -->


    </div>
  </section>
  <!-- End Blog -->


  <?php require_once("rodape.php"); ?>


<!-- jQuery library -->  
<script src="assets/js/jquery.min.js"></script>  
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.js"></script>   
<!-- Slick slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="assets/js/waypoints.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
<!-- Date Picker -->
<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
<!-- Mixit slider -->
<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->        
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

<!-- Custom js -->
<script src="assets/js/custom.js"></script> 

</body>
</html>