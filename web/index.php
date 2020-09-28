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
      <label for="visited">What continents have you visited?</label><br>
      <input type="checkbox" value="North America" name="NA" id="NA"> 
      <label for="NA">North America</label>
      <br>

      <input type="checkbox" value="South America" name="SA" id="SA"> 
      <label for="SA">South America</label>
      <br>

      <input type="checkbox" value="Europe" name="EU" id="EU"> 
      <label for="EU">Europe</label>
      <br>

      <input type="checkbox" value="Asia" name="A" id="A"> 
      <label for="A">Asia</label>
      <br>

      <input type="checkbox" value="Australia" name="HJ" id="HJ"> 
      <label for="HJ">Australia</label>
      <br>

      <input type="checkbox" value="Africa" name="AFR" id="AFR"> 
      <label for="AFR">Africa</label>
      <br>

      <input type="checkbox" value="Antarctica" name="AN" id="AN"> 
      <label for="AN">Antarctica</label>
      <br>

      <input type="submit" value="Submit">
    </form>
    <?php 
      $name = $_POST["name"];
      $email = $_POST["email"];
      $major = $_POST["major"];

      $comments = $_POST["comments"];
      echo "Your name is " . $name . "<br> Your email is " . "<a href=\"mailto:" . $email . "\"> " . $email . "</a>" ."<br>";
      echo "Your Major is " . $major . "<br>" . "Your comments:<br>" . $comments . "<br> You have visited ";

      if (isset($_POST["NA"]))
      {
        echo $_POST["NA"] . " ";
      }

      if (isset($_POST["SA"]))
      {
        echo $_POST["SA"] . " ";
      }

      if (isset($_POST["EU"]))
      {
        echo $_POST["EU"] . " ";
      }

      if (isset($_POST["A"]))
      {
        echo $_POST["A"] . " ";
      }

      if (isset($_POST["HJ"]))
      {
        echo $_POST["HJ"] . " ";
      }

      if (isset($_POST["AFR"]))
      {
        echo $_POST["AFR"] . " ";
      }

      if (isset($_POST["AN"]))
      {
        echo $_POST["AN"] . " ";
      }
      
    ?>
  </body>
</html>