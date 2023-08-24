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
    <!--css link-->
    <link rel="stylesheet"type="text/css"href="linear.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> 
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine&effect=anaglyph|shadow-multiple|3d">
   
</head>
<body>
<div class="seperator"></div>
    <div class="tool">
        <h1  id="main-heading"class="font-effect-anaglyph">(:two color linear-gradient generator:)</h1>
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
            <label for="start-color">Start color:</label>
            <input type="color"id="start-color"value="#D16BA5">
            <label for="end-color">End Color:</label>
            <input type="color"id="end-color"value="#86A8E7">
            <!-- <label for="third-color">third Color:</label>
            <input type="color"id="third-color"value="#5FFBF1"> -->
        </div>
        
        <div class="preview" id="preview"></div>
        <button id="copy-btn">Copy!</button>
        <textarea id="output"readonly></textarea>
    </div>
    <script>

        const startColorInput = document.querySelector('#start-color');
        const endColorInput = document.querySelector('#end-color');
        const thirdColorInput = document.querySelector("#third-color");
        const preview = document.querySelector('#preview');
        const output = document.querySelector('#output');

        startColorInput.addEventListener('change',generateGradient);
        endColorInput.addEventListener('change',generateGradient);
      //  thirdColorInput.addEventListener('change',generateGradient);
         
        function generateGradient(){
            const startColor = startColorInput.value;
            const endColor = endColorInput.value;
          //  const thirdColor = thirdColorInput.value;
            const gradient = `background-image: linear-gradient(to right, ${startColor}, ${endColor});`;
            preview.style.backgroundImage = `linear-gradient(to right,${startColor}, ${endColor})`;
            document.body.style.backgroundImage = `linear-gradient(to right,${startColor}, ${endColor})`;
            output.textContent = gradient;
        }
        generateGradient();
         function generateRightTop(){
            const startColor = startColorInput.value;
            const endColor = endColorInput.value;
           // const thirdColor = thirdColorInput.value;
            const gradient = `background-image: linear-gradient(to right top, ${startColor}, ${endColor});`;
            preview.style.backgroundImage = `linear-gradient(to right top,${startColor}, ${endColor})`;
            document.body.style.backgroundImage = `linear-gradient(to right top,${startColor}, ${endColor})`;
            output.textContent = gradient;     
         }
         function generateRight(){
            const startColor = startColorInput.value;
            const endColor = endColorInput.value;
           // const thirdColor = thirdColorInput.value;
            const gradient = `background-image: linear-gradient(to right, ${startColor}, ${endColor});`;
            preview.style.backgroundImage = `linear-gradient(to right,${startColor}, ${endColor})`;
            document.body.style.backgroundImage = `linear-gradient(to right ,${startColor}, ${endColor})`;
            output.textContent = gradient;     
         }function generateRightBottom(){
            const startColor = startColorInput.value;
            const endColor = endColorInput.value;
          //  const thirdColor = thirdColorInput.value;
            const gradient = `background-image: linear-gradient(to right bottom, ${startColor}, ${endColor});`;
            preview.style.backgroundImage = `linear-gradient(to right bottom,${startColor}, ${endColor})`;
            document.body.style.backgroundImage = `linear-gradient(to right bottom,${startColor}, ${endColor})`;
            output.textContent = gradient;     
         }function generateBottom(){
            const startColor = startColorInput.value;
            const endColor = endColorInput.value;
            //const thirdColor = thirdColorInput.value;
            const gradient = `background-image: linear-gradient(to bottom, ${startColor}, ${endColor});`;
            preview.style.backgroundImage = `linear-gradient(to bottom,${startColor}, ${endColor})`;
            document.body.style.backgroundImage = `linear-gradient(to bottom,${startColor}, ${endColor})`;
            output.textContent = gradient;     
         }function generateLeftBottom(){
            const startColor = startColorInput.value;
            const endColor = endColorInput.value;
            //const thirdColor = thirdColorInput.value;
            const gradient = `background-image: linear-gradient(to left bottom, ${startColor}, ${endColor});`;
            preview.style.backgroundImage = `linear-gradient(to rleft bottom,${startColor}, ${endColor})`;
            document.body.style.backgroundImage = `linear-gradient(to left bottom,${startColor}, ${endColor})`;
            output.textContent = gradient;     
         }function generateLeft(){
            const startColor = startColorInput.value;
            const endColor = endColorInput.value;
            //const thirdColor = thirdColorInput.value;
            const gradient = `background-image: linear-gradient(to left, ${startColor}, ${endColor});`;
            preview.style.backgroundImage = `linear-gradient(to left,${startColor}, ${endColor})`;
            document.body.style.backgroundImage = `linear-gradient(to left,${startColor}, ${endColor})`;
            output.textContent = gradient;     
         }function generateTopLeft(){
            const startColor = startColorInput.value;
            const endColor = endColorInput.value;
            //const thirdColor = thirdColorInput.value;
            const gradient = `background-image: linear-gradient(to top left, ${startColor}, ${endColor});`;
            preview.style.backgroundImage = `linear-gradient(to top left,${startColor}, ${endColor})`;
            document.body.style.backgroundImage = `linear-gradient(to top left,${startColor}, ${endColor})`;
            output.textContent = gradient;     
         }function generateTop(){
            const startColor = startColorInput.value;
            const endColor = endColorInput.value;
            //const thirdColor = thirdColorInput.value;
            const gradient = `background-image: linear-gradient(to top, ${startColor}, ${endColor});`;
            preview.style.backgroundImage = `linear-gradient(to top,${startColor}, ${endColor})`;
            document.body.style.backgroundImage = `linear-gradient(to top,${startColor}, ${endColor})`;
            output.textContent = gradient;     
         }
         function refress(){
            window.location.reload(); 
         }
         
         let copyBtn = document.getElementById('copy-btn');
         copyBtn.addEventListener('focus',()=>{
            copyBtn.innerHTML = "copyed";
            copyBtn.style.color = "white";
            copyBtn.style.backgroundColor = "yellowgreen";
            
         }); 
         copyBtn.addEventListener('blur',()=>{
            copyBtn.innerHTML = "copy!";
            copyBtn.style.color = "black";
            copyBtn.style.backgroundColor = "white";
            
         }); 

         let copyTarget = output;
         copyBtn.addEventListener('click',()=>{
           // const range = document.createRange();
           //range.selectNode(copyTarget);
           // window.getSelection().addRange(range);
           // document.execCommand("copy");
              copyTarget.select();
              document.execCommand("copy");
          //  window.getSelection().removeAllRanges();

         });
              //navbar 
const navbar = document.querySelector(".navbar");
const btn = document.querySelector(".mobile-nav-icon"); 
let closeBtn = document.querySelector(".close");
btn.addEventListener('click',function fun(){
      navbar.classList.toggle('active');
      btn.style.display = "none";
      closeBtn.style.display = "block";
  });
  closeBtn.addEventListener('click',function(){
    navbar.classList.toggle('active');
    btn.style.display = "block";
  });
  // dropdown list 
//******************* */

let dropdownList = document.getElementById("dropdown-list");
let dropdownBtn = document.getElementById("dropdown-btn");
dropdownBtn.addEventListener('click',()=>{
     dropdownList.classList.toggle('dropdown-active');
 });

    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="linear.js"></script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
<?php 
  require "footer.php";
?>