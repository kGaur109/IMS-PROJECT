<!doctype html>
<html>

<head>
<title>IMS PROJECT</title>
<link rel="stylesheet" href="style.css">
</head>

<body style="background-color:white;">
<h1 style=" color:red"> Fantasy Forum - <span style="color: #1f85cf">Student's best friend</span></h1>
  <div style="width:95%;">
  <div>
  <ul style="  list-style-type: none; margin: 0; padding: 0; overflow: hidden; background-color: #153aa1;">
   <li style="float:left;"><a style="  display: block; background-color:#bf1919; color: white; text-align: center; padding: 14px 16px; text-decoration: none;" onmouseover="this.style.backgroundColor='#153aa1';" onmouseout="this.style.backgroundColor='#bf1919';" class="item" href="index.php"> Home </a></li>
   <li style="float:left;"><a style="  display: block; background-color:#bf1919; color: white; text-align: center; padding: 14px 16px; text-decoration: none;" onmouseover="this.style.backgroundColor='#153aa1';" onmouseout="this.style.backgroundColor='#bf1919';" class="item" href="create_topic.php"> Create a topic</a></li>
   <li style="float:left;"><a style="  display: block; background-color:#bf1919; color: white; text-align: center; padding: 14px 16px; text-decoration: none;" onmouseover="this.style.backgroundColor='#153aa1';" onmouseout="this.style.backgroundColor='#bf1919';" class="item" href="create_cat.php"> Create a category</a></li>

  </ul>

    </div>
    <br>

  <div>

  <div>
    <?php
    session_start();

      if(isset($_SESSION['signed_in']))
      {
          echo 'Hello ' . $_SESSION['user_name'] . '! Not you? <a href="signout.php">Sign out</a>';
      }
      else
      {
          echo '<a href="signin.php">Sign in</a> or <a href="signup.php">create an account</a>.';
      }
      ?>
  </div>
  </div>

  <div id="content">
