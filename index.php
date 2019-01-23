<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TEDxUFTM 2018</title>

    <link rel="shortcut icon" href="https://pa.tedcdn.com/favicon.ico">

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body data-spy="scroll" data-target="#site-nav">

    <?php include('menu.php'); ?>

    <header id="site-header" class="site-header valign-center"> 
        <div class="intro">
            <!-- <h1 style="margin-top: 0px;">A segunda edição chega em Uberaba</h1> -->
        </div>
    </header>

    <?php include('about.php'); ?>

    <section id="facts" class="section bg-image-1 facts text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <i class="ion-ios-calendar"></i>
                    <h3>2018<br>08 de Dezembro</h3>
                
                </div>
                <div class="col-sm-3">

                    <i class="ion-ios-location"></i>
                    <h3>Kinoplex - Sala 06<br>Uberaba-MG</h3>
                
                </div>
                <div class="col-sm-3">

                    <i class="ion-pricetags"></i>
                    <h3>100<br>Ingressos</h3>
                
                </div>
                <div class="col-sm-3">
                
                    <i class="ion-speakerphone"></i>
                    <h3>8<br>Speakers</h3>
                
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <?php include('speakers.php'); ?>

    <?php include('registration.php'); ?>

    <section id="contribution" class="section bg-image-2 contribution">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <h1 class="text-uppercase mt0 font-400">Reflexão</h1> -->
                    
                    <h2>
                        " As pessoas vão esquecer o que você disse, as pessoas vão esquecer o que você fez, mas as pessoas nunca 
                          esquecerão como você as fez sentir " (Maya Angelou)
                    </h2>

                </div>
            </div>
        </div>
    </section>

    <?php include('agenda.php'); ?>

    <?php include('team.php'); ?>

    <?php include('partners.php'); ?>

    <?php //include('questions.php'); ?>

    <?php include('fotos.php'); ?>

    <?php include('localization.php'); ?>

    <?php include('footer.php'); ?>

    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>