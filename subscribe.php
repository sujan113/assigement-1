<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Successfully-Pizza</title>
    <link rel="icon" type="image/x-icon" href="logo.ico" />
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap");

    * {
      margin: 0;
      padding: 0;
    }
    main{
      width:80%;
      height:60%;
      display: block;
      align-items: center;
      margin: 0 auto;

    }
    body {
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
        url("C:\Users\chapa\OneDrive\Desktop\assigement of html\pizza.jpg")
          no-repeat center center fixed;

      background-size: cover;
    }
    header {
      height: 90px;
      width: 1100px;
      display: block;
      padding: 1%;
      color: white;
      margin-left: 23px;
    }
    header img {
      border-radius: 25px;
      height: 90%;
      width: 80px;
      height: 90px;
    }
    form {
      display: block;
      align-items: center;
      max-width: 718px;
      margin: auto;
      background-color: rgb(255, 255, 255, 0.6);
      padding: 20px;
      border-radius: 8px;
    }
    legend {
      display: block;
      margin: 0 auto;
      align-items: center;
      border-bottom: 4px solid #4CAF50;
    }
    .email-address{
      font-size: 25px;
      line-height: 60px;
    }
    .footer-text{
  margin-top: 15%;
  display: block;
  border: 4px solid #29df6e;
  height: 20%;
}
footer{
  color: black;
  text-align: center;
  background-color: #f8f9fa;
  font-family: "Libre Baskerville", serif;
  font-size: 20px;
  padding: 1.2%;
}


  </style>
  <body>
    <header>
      <img src="logo.png" alt="logo of pizza" />
    </header>
   
      <form>
        <legend>Sucessfully Ordered</legend><br>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $emailAddress = $_GET["emailAddress"];
    $orderType = $_GET["type"];
    $phoneNumber = $_GET["phoneNumber"];

    echo "<span class='email-address'>Thank you for ordering the pizza and it will be  ".$orderType." to "  . $emailAddress. " and the contact number ".$phoneNumber . "</span>";

}
?>
      </form>
    <div class="footer-text"></div>
    <footer>HTML,CSS | Sujan chapagain | All rights reserved.</footer>
  </body>
</html>
