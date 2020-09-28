<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <label for="name">Name:</label>
      <input type="text" value="" id="name" name="name">
      <br>
      <label for="email">Email:</label>
      <input type="text" value="" id="email" name="email">
      <br>
      <label for="major">Major</label><br>
      <input type="radio" value="Computer Science" id="CS" name="major">
      <label for="CS">Computer Science</label>
      <br>
      <input type="radio" value="Web Design and Development" id="WDD" name="major">
      <label for="WDD">Web Design and Development</label>
      <br>
      <input type="radio" value="Computer Information Technology" id="CIT" name="major">
      <label for="CIT">Computer Information Technology</label>
      <br>
      <input type="radio" value="Computer Engineering" id="CE" name="major">
      <label for="CE">Computer Engineering</label>
      <br>
      <br>
      <label for="comments">Comments:</label><br>
      <textarea name="comments" value="" id="comments"></textarea>
      <br>
      <input type="submit" value="Submit">
    </form>
    <?php 
      $name = $_POST["name"];
      $email = $_POST["email"];
      $major = $_POST["major"];
      $comments = $_POST["comments"];
      echo "Your name is " . $name . "<br> Your email is " . "<a href=\"mailto:" . $email . "\"> " . $email . "</a>" ."<br>";
      echo "Your Major is " . $major . "<br>" . "Your comments:<br>" . $comments;
    ?>
  </body>
</html>