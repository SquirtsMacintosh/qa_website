<?php include 'php/sessionchecker.php' ?>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="../res/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="style/css" href="../res/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="style/css" href="../style/newStyle.css">
</head>
<div class="grid">
  <div class="row">
    <div class="container-fluid">
      <div class="btn-group pull-right" role="group">
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Docs<span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="../docs/addquizDoc.php">Adding Quizzes</a></li>
            <li><a href="../docs/coursemanagementDoc.php">Managing Courses</a></li>
            <li><a href="../docs/gradebookDoc.php">Gradebook Tutorial</a></li>
          </ul>
        </div>
        <button type="button" class="btn btn-default" onclick="window.location='../aboutPage.php'">About</button>
        <button type="button" class="btn btn-default" onclick="window.location='../php/logout.php'">Log Out</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="container-fluid">
      <ul class ="nav nav-stacked col-lg-2 col-md-2 col-sm-2">
        <li role="presentation"><a href="../mainPage.php">Main</a></li>
        <li role="presentation"><a href="../teachertools/quizPage.php">Add Quizzes</a></li>
        <li role="presentation"><a class="active" href="../teachertools/gradebookPage.php">Quiz Gradebook</a></li>
        <li role="presentation"><a href="../teachertools/courseManagerPage.php"> Course Management</a></li>
        <li role="presentation"><a href="../contactPage.php">Support</a></li>
      </ul>
      <h1>Gradebook</h1>
    </div>
  </div>
</div>
</html>
