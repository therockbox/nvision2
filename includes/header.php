<!DOCTYPE html>

<html>
<head lang="en">
  <meta charset="UTF-8">
  <title><?php echo $page_title; ?></title>

  <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
 
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="pagewrapper"> <!-- Assists in keeping footer at bottom -->
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="span4">
          <h1><a href="index.php">nVision</a>
          </h1>
        </div>
        <div class="span8">
         <ul class="nav">
          <li><a href="about.php" <?php if ($thispage=="about us")
          echo 'id="current-page"'; ?>>Our Company</a></li>
          <li><a href="portfolio.php" <?php if ($thispage=="portfolio")
          echo 'id="current-page"'; ?>>Portfolio</a></li>
          <li><a href="contact.php" <?php if ($thispage=="contact")
          echo 'id="current-page"'; ?>>Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Header -->
<div id="content">