<?php
require "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebKitTool.com</title>
    <link rel="icon"href="favicon\android-icon-72x72.png"type="image/png">

    <!-- font awesome font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">
    <!--css link-->
    <link rel="stylesheet"type="text/css"href="linear.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> 
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine&effect=anaglyph|shadow-multiple|3d">
          <!-- google font link -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&family=Rubik:ital,wght@0,300;0,400;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">
<style>  
    
</style>
</head>

<body onload="loaded()">
   <!-- <nav> -START HEADER SECTION-->
    <div class="preloader"></div>
      <div class="container-fluid">
    
    <div class="seperator"></div>
    <div class="main-heading-container">
        <h1 id="main-heading"class="font-effect-anaglyph">Generate linear-gradient 3 colors</h1>
        
    </div>
        <div class="main-content">
    <div class="tool">
         <div id="gradient-direction">
            <button id="right-top" class="direction_btn"onclick="generateRightTop()"><i class="bi bi-arrow-down-square-fill"></i></button>
            <button id="right"class="direction_btn"onclick="generateRight()"><i class="bi bi-arrow-down-square-fill"></i></button>
            <button id="right-bottom"class="direction_btn"onclick="generateRightBottom()"><i class="bi bi-arrow-down-square-fill"></i></button>
            <button id="bottom"class="direction_btn"onclick="generateBottom()"><i class="bi bi-arrow-down-square-fill"></i></button>
            <button id="left-bottom"class="direction_btn"onclick="generateLeftBottom()"><i class="bi bi-arrow-down-square-fill"></i></button>
            <button id="left"class="direction_btn"onclick="generateLeft()"><i class="bi bi-arrow-down-square-fill"></i></button>
            <button id="top-left"class="direction_btn"onclick="generateTopLeft()"><i class="bi bi-arrow-down-square-fill"></i></button>
            <button id="top"class="direction_btn"onclick="generateTop()"><i class="bi bi-arrow-down-square-fill"></i></button>
        </div> 
        <div class="color-picker">
            <label for="start-color">start color:</label>
            <input type="color"id="start-color"value="#D16BA5">
            <label for="end-color">mid Color:</label>
            <input type="color"id="end-color"value="#86A8E7">
            <label for="third-color"id="third-label">end Color:</label>
            <input type="color"id="third-color"value="#5FFBF1">
        </div>
        
        <div class="preview" id="preview"></div>
        <button id="copy-btn">Copy!</button>
        <textarea id="output"readonly></textarea>
    </div>
   </div>
  
</div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="/linear/linear.js"></script>
<script src="script/preloader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
<?php 
  require "footer.php";
?>
</html>