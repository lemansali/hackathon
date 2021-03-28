<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Varna Info</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/v-and-dot.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-dark-grey.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">  
    <style>
      *{
        font-family: 'Pacifico', cursive;
      }
      .h3{
        font-family: 'Pacifico', cursive;
      }
    </style>
    <script>
    function myFunction() {
      document.documentElement.style.scrollBehavior = "smooth";
    }
    </script>
  </head>
<body>

  <!--NAVBAR--->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="index.php" class="w3-bar-item w3-button"><b>VN</b> Info</a>

      <div class="w3-right w3-mobile">
        <a href="#images" class="w3-bar-item w3-mobile w3-button" onclick="myFunction()">Снимки</a>
        <a href="#section2" class="w3-bar-item w3-mobile w3-button" onclick="myFunction()">Сигнали</a>
        <a href="feedback.html" class="w3-bar-item w3-mobile w3-button">Отзиви</a>
        <a href="contact.html" class="w3-bar-item w3-mobile w3-button">Контакти</a>
      </div>
    </div>
  </div>

  <!--HEADER-->

  <header class="w3-display-container w3-content w3-wide" style="max-width:100%;" id="home">
  <img class="w3-image" src="images/varna2.jpg" alt="VARNA" width="110%" height="800">
</header>

<div class="w3-container">
  <div id="projects" class="w3-container w3-padding-32">
    <h2 class="w3-border-bottom w3-border-light-grey w3-padding-16 h3">Снимки</h2>
  </div>

  <div id="images" class="w3-row-padding" >

    <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
              <img src="images/image.jpg"style="width:100%">
        </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
          <img src="images/image1.jpg" style="width:100%">
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
          <img src="images/image2.jpg" style="width:100%">
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
          <img src="images/image3.jpg" style="width:100%">
      </div>
    </div>
  </div>

<!--REPORT FORM -->
<form action="connect2.php" method="post" enctype="multipart/form-data" class="w3-container w3-margin">
  <div  id="section2" class="w3-row">
<h2 class="w3-center h3">Подайте сигнал</h2>

<div class="w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input id="user_name" class="w3-input w3-border" name="first" type="text" placeholder="Име" required>
    </div>
</div>

<div class="w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest">
        <input id="user_lastname" class="w3-input w3-border" name="last" type="text" placeholder="Фамилия" required>
      </div>
    </div>
    <div class="w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
        <div class="w3-rest">
          <input id="email" class="w3-input w3-border" name="email" type="text" placeholder="E-поща" required>
    </div>
</div>

<div class=" w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input id="phone" class="w3-input w3-border" name="phone" type="text" placeholder="+359" required>
    </div>
</div>


<div class=" w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input id="address" class="w3-input w3-border" name="address" type="text" placeholder="Адрес" required>
    </div>
</div>

<div class="w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input id="report" class="w3-input w3-border" name="message" type="text" placeholder="Тук е мястото за Вашия сигнал !" required>
    </div>
</div>
<div class="w3-section">
<label for="type"><b>Вид на сигнала:</b></label><br>
		   <input type="radio" id="type" name="signals" value="Нередност">
           <label for="male">Нередност</label><br>
           <input type="radio" id="type" name="signals" value="Положителен сигнал">
           <label for="female">Положителен сигнал</label><br>
</div>

</div>
  <input type="file" id="reportimg" name="file" enctype="multipart/form-data">
  <input type="submit" class="w3-button w3-black w3-right" name='but_upload'>
</form>
<!--REPORT FORM -->
<hr>
<!-- Footer -->
<footer class="w3-row-padding w3-padding-32">
  <div class="w3-third">
    <h5 class="h3">Контакти</h5>
    <p>Phone: +359 89 897 5353<br>
      Email: leman.sali@ue-varna.bg<br>
      Email: serkan.s00@ue-varna.bg </p>
    <p>Powered by: <a href="https://www.varna.bg/" target="_blank">Община Варна</a></p>
  </div>

  <div class="w3-third">
    <h5 class="h3">Социални мрежи:</h5>
    <ul class="w3-ul w3-hoverable">
      <li class="w3-padding-16">
        <p>
          <!-- Facebook -->
          <a class="fb-ic" href="#" target="_blank">Facebook
          <i class="fa fa-facebook-f fa-lg text-primary mr-md-5 mr-3 fa-2x"></i>
          </a>
       </p>
      </li>
      <li class="w3-padding-16">
        <p>
          <!-- Twitter -->
          <a class="tw-ic" href="#" target="_blank">Twitter
          <i class="fa fa-twitter fa-lg text-info  mr-md-5 mr-3 fa-2x"></i>
          </a>
       </p>
      </li>
      <li class="w3-padding-16">
        <p>
          <!--Instagram-->
          <a class="ins-ic" href="#" target="_blank">Instagram
          <i class="fa fa-instagram fa-lg text-warning mr-md-5 mr-3 fa-2x"></i>
          </a>
       </p>
      </li> 
    </ul>
  </div>
  <div class="w3-third w3-serif">
    <h5 class="h3">Популярни тагове</h5>
    <p>
      <span class="w3-tag w3-black w3-margin-bottom">Варна</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Нередности</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
      <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Положителни отзиви</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Графити</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
      <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Природа</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Градска среда</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
      <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Красиви места</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Интересно</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
      <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Нероботещо осветление</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Любопитно</span>
    </p>
  </div>
</footer>
</div>
</body>
</html>
