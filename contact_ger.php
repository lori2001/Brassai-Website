<!DOCTYPE html>
<html lang="ger">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halász Gyula Webpage</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="homepage">
    	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index_ger.html">Halász Gyula</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index_ger.html">Home</a></li>
                        <li><a href="about_brassai_ger.html">Über Brassaï</a></li>
						<li><a href="about_us_ger.html">Über uns</a></li>
                        <li><a href="photos_ger.html">Fotos</a></li>
                        <!--/<li><a href="portfolio.html">Portfolio</a></li>-->
                        <!--/<li><a href="blog.html">Blog</a></li> -->
                        <li class="active"><a href="contact_ger.php">Kontakt</a></li>
						<li class="dropdown">
							<a href="index_ger.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="images/language/german.gif" alt="..." class="img-thumbnail icon-small">  <span>Deutsch</span> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="contact_ro.php" class="language"> <img src="images/language/roman.gif" alt="..." class="img-thumbnail icon-small">  <span>Rumänisch</span></a></li>
								<!--<li><a href="about_brassai_eng.html" class="language"> <img src="images/language/english.gif" alt="..." class="img-thumbnail icon-small">  <span>Englisch</span></a></li>
								<li><a href="about_brassai_ru.html" class="language"><img src="images/language/russia.gif" alt="..." class="img-thumbnail icon-small">  <span>Russisch</span></a></li>
								<li><a href="about_brassai_chn.html" class="language"><img src="images/language/china.gif" alt="..." class="img-thumbnail icon-small">  <span>Chinesisch</span></a></li>-->
								<li><a href="contact.php" class="language"><img src="images/language/magyar.gif" alt="..." class="img-thumbnail icon-small">  <span>Ungarisch</span></a></li>
							</ul>
						</li>
                    </ul>
					
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2></h2>
                <p class="lead"></p>
            </div>
            <div class="center">
               <p class="lead"><br><br></p>
               <img src="images/csoportkep.jpg" alt="Brassai szem kép" style="max-width:100%;">
            </div>
            <div class="center">
                <h2>Schreib uns!</h2>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form method="post">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Namen *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>E-Mail *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Telefon</label>
                             <input type="number" name= "phone" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Titel *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Nachricht *</label>
                            <textarea name="message" id="message" required class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Senden</button>
                        </div>
                    </div>
                </form>
				<?php include('send_contact_form.php') ?>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

 	<div class="top-bar">
		<div class="container">
			<div class="row">
			    <div class="col-lg-12">
				   <div class="social">
						<ul class="social-share">
							<li><a href="https://www.facebook.com/brassaioroksegunk/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/_brassaii_/"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://brassaiart.tumblr.com/"><i class="fa fa-tumblr"></i></a></li> 
						</ul>
				   </div>
                </div>
			</div>
		</div><!--/.container-->
	</div><!--/.top-bar-->
	
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 brassaioroksegunk. All Rights Reserved.
                </div>
               <!-- <div class="col-sm-6">
                    <ul class="pull-right"><p class="lead">Támogatóink</p></ul>
                </div>-->
            </div>
        </div>
    </footer><!--/#footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>