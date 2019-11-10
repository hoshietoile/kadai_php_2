<?php

require_once('../app/escape.php');
require_once('../app/formItems.php');
require_once('../app/FormHelper.php');
require_once('../app/FormController.php');

$control = new FormController();
$control->setPage($_POST);

// var_dump($_SERVER['REQUEST_METHOD'] == "POST");
// var_dump($control->getPageFlg());
// var_dump($control->getErrors());

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>株式会社</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <div class="container-fluid row">
    <!--aside-->
    <aside class="col-sm-4">
    <?php
    require_once('template/aside.php');
    ?>
    </aside>
    <!--aside-->

    <!--header-->
    <section id="main-container" class="col-sm-8">
        <header>
          <?php
          require_once('template/header.php');
          ?>
        </header>
        <!--header-->

        <div id="main-inner">
          <!--page nav-->
          <div class="page-nav">
            <?php
            require_once('template/page_nav.php');
            ?>
          </div>
          <!--page_nav-->

          <!--content-->
          <div class="content">
            <?php
            if ($control->getPageFlg() == 2) {
              require_once('thanks.php');
            } elseif ($control->getPageFlg() == 1) {
              require_once('confirm.php');
            } else {
              require_once('contact.php');
            }
            ?>
          </div>
          <!--content-->

          <!--footer-->
          <footer>
            <?php
            require_once('template/footer.php');
            ?>
          </footer>
          <!--footer-->
        </section>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
