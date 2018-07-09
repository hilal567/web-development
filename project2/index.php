<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
    }

    /* Style the links inside the navigation bar */

    .topnav a {
      float: left;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
      align-self: center;
    }

    /* Change the color of links on hover */

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Add a color to the active/current link */

    .topnav a.active {
      background-color: #4CAF50;
      color: white;
    }

    .clear {
      color: white;
    }

    .menu {
      float: left;
      width: 20%;
      text-align: center;
    }

    .menu a {
      background-color: #e5e5e5;
      padding: 8px;
      margin-top: 7px;
      display: inline;
      width: 100%;
      color: black;
      float: right;
      text-decoration: none;
      list-style: none;
    }

    .main {
      float: left;
      width: 60%;
      padding: 0 20px;
      height: 20%;
      color: black;
    }

    .right {
      background-color: #e5e5e5;
      float: left;
      width: 40%;
      padding: 15px;
      margin-top: 40px;
      text-align: center;
      color: black;
      height: 100%;
    }

    button {
      width: 10%;
      height: 50px;
      border-radius: 7px;
      background-color: red;
    }

    iframe {
      width: 60%;
      height: 500px;
    }

    .lower {
      margin-top: 40px;
    }

    footer @media only screen and (max-width:620px) {
      /* For mobile phones: */
      .menu,
      .main,
      .right {
        width: 100%;
      }
    }
  </style>
</head>

<body style="font-family:Verdana;color:#aaaaaa;">

  <div style="background-color:#e5e5e5;padding:15px;text-align:center;">
    <div style="overflow:auto;list-style: none;text-decoration: none">
      <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>


        <a class="active" href="login.php"  style="float:right;" > Login</a> </div>


    </div>

    <div class="main">
      <h1>About Us</h1>
      </br>
      <h2>The Digital Matatus Project</h2>
      <strong>Digital Matatus</strong> shows how to leverage the ubiquitous nature of cellphone technology in developing countries
      to collect data for essential infrastructure, give it out freely and in the process spur innovation and improved services
      for citizens. Conceived out of collaboration between Kenyan and American universities and the technology sector in
      Nairobi, this project captured transit data for Nairobi, developed mobile routing applications and designed a new transit
      map for the city. The data, maps and apps are free and available to the public, transforming the way people navigate
      and think about their transportation system.
      </br>
      </br>
      </br>
      </br>
      <iframe src="https://player.vimeo.com/video/63423795?color=ff9933&amp;title=0&amp;byline=0&amp;portrait=0" width="500" height="281"
        frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
      <div class="clear">
        <h2>Lorum Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
          magna aliquam erat volutpat.</p>
      </div>
    </div>


    <div class="right">
      <h2>About</h2>
      <p>Digital Matatus continues to collect and update data on matatu routes in Nairobi and is beginning projects elsewhere.
        Our vision is to use technology and local partnerships to make public transit in cities more visible, legible, service
        oriented, efficient, and open. Our work supports city data collection on transit by developing unique data collection
        tools and creating a process that involves and engages the transit community in each city. We hope to spread our
        data collection process to more cities where informal and semi-formal transit is an essential part of the public
        transit system.</p>
      <div class="lower">
        <h2>Contact us</h2>
        Telephone: +254 795 291 708</br>
        Our offices: Ole sangale road strathmore university</br>

        P.O.Box :80100 -23456.

      </div>
    </div>
  </div>

  <?php include("footer.php");?>

</body>

</html>