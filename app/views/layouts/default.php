<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $this->_siteTitle ?></title>
    <link rel="stylesheet" href="<?=PROOT?>css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?=PROOT?>css/custom.css" media="screen" title="no title" charset="utf-8">
    <script src="<?=PROOT?>js/jquery-2.2.4.min.js"></script>
    <script src="<?=PROOT?>js/bootstrap.min.js"></script>

    <?= $this->content('head'); ?>



  </head>
  <body>
  <?php include 'main_menu.php' ?>
  <!-- <div class="container-fluid" style="min-height:cal(100% - 125px);">
 
   </div> -->
   <?= $this->content('body'); ?>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

