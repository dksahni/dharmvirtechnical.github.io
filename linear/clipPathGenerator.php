<?php 
  require "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
     <!--css link-->
     <link rel="stylesheet"type="text/css"href="linear.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> 
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine&effect=anaglyph|shadow-multiple|3d">

    <style>
body{
  background-image: linear-gradient(to right, #d16ba5, #86a8e7,#5ffbf1);
}
#clip-container {
  position: relative;
  overflow: hidden;
  width: 300px;
  height: 300px;
  margin:10px auto;
  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}

#clip-image {
  width:300px;
  height:300px;
  clip-path:circle(50% at 50% 50%);
}

#clip-points {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.clip-point {
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: blueviolet;
  transform: translate(-50%,-50%);
  cursor:pointer;
}

#clip-image{
    height:300px;
    width:300px;
}
#preset-shapes option{
    height:200px;
    width:200px;
    padding:10px;
    font-size:18px;
}
select{
  margin:auto !important;
  font-size:1.4rem !important;
  padding:0 0 0 10px  !important;
  border-radius: 20px !important;
  background-color:antiquewhite !important;
  width:auto !important;

}
.generated-code-container{
  display:flex !important;
  flex-direction: column;
  align-items: center !important;
  justify-items: center !important;
}

#generated-code {
  max-width:100vw;
  width:400px;
height: 100px;
border:1px solid blueviolet;
outline:none;
border-left:20px solid blueviolet;
border-radius:20px;
padding:10px;
font-size:20px;
}
#generated-code::selection{
  background-color:blueviolet;
  color:white;
}
.btn-container{
  display:flex;
  align-items:center;
  justify-content:center;
}
#copy-btn,#generate-code,#custom-shape{
  padding:5px;
  font-size:1.3rem;
  background-color:blueviolet;
  border:none;
  margin:10px;
  border-radius:10px;
  color:white;
  cursor:pointer;
}
.accordion{
max-width:80%;
margin:30px auto;
font-size:2rem;
}
.accordion-button{
font-size:20px !important;
}

@media screen and (max-width:800px){
    .shade-container{
        background-size:100%;
    }
    .accordion-container{
        width:100%;
        margin:10px auto;
    }
}
    </style>
</head>
<body>
<div class="preloader"></div>
  <div class="seperator"></div>
  <h1 id="main-heading"class="font-effect-anaglyph">Clip path Generator</h1>
    <div id="clip-container">
        <img src="image/clippath.jpg" id="clip-image">
        <div id="clip-points"></div>
      </div>
      <div class="form-floating" id="controls">
        <select id="preset-shapes"class="form-select">
          <option value="circle">Circle</option>
          <option value="square">Square</option>
          <option value="triangle">Triangle</option>
          <option value="parallelogram">Parallelogram</option>
          <option value="rhombus">Rhombus</option>
          <option value="trapezium">Trapezium</option>
          <option value="kite">kite</option>
          <option value="pentagon">Pentagon</option>
          <option value="hexagon">Hexagon</option>
          <option value="heptagon">Heptagon</option>
          <option value="octagon">Octagon</option>
          <option value="nonagon">Nonagon</option>
          <option value="decagon">Decagon</option>
          <option value="oval">Oval</option>
          <option value="star">star</option>
          <option value="left-arrow">Left-arrow</option>
          <option value="right-arrow">Right-arrow</option>
        </select>
        <div class="btn-container">
          <button id="generate-code">Generate Code</button>
          <button id="custom-shape">Custom Shape</button>
        </div>
      </div>
      <div class="generated-code-container">
        <button id="copy-btn">Copy code</button>
        <textarea id="generated-code"></textarea>
      </div>

        <div class="accordion-container">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        * How to use ?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>select desired shape using select button.</strong>After selecting shape click on generate button the clip-path code automatically generated. Now you can copy code using copy code button.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      * How to create custom shape ?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>There are custom shape can generate, click on custom shape button </strong>Now you can easily create your custom shape using points.there is limited features available make sure I will extends this features in comming days. 
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      *  feedback ?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>please send us any website related issue or suggession on email: </strong>
        <a href="mailto:mytechnotube97@gmail.com">mytechnotube97@gmail.com</a>
      </div>
    </div>
  </div>
</div>
  
        <script>

const image = document.querySelector("#clip-image");
const clipPointsContainer = document.querySelector("#clip-points");
const presetShapes = document.querySelector("#preset-shapes");
const generateCodeButton = document.querySelector("#generate-code");
const generatedCode = document.querySelector("#generated-code");

let customPoints = [];

presetShapes.addEventListener("change", function(event) {
switch (event.target.value) {
case "circle":
image.style.clipPath = "circle(50% at 50% 50%)";
break;
case "square":
image.style.clipPath = "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)";
break;
case "triangle":
image.style.clipPath = "polygon(50% 0%, 100% 100%, 0% 100%)";
break;
case "parallelogram":
      image.style.clipPath = "polygon(20% 0, 100% 0, 80% 100%, 0 100%)";
      break;
    case "rhombus":
      image.style.clipPath =  "polygon(50% 0, 100% 50%, 50% 100%, 0 50%)";
     break;
      case "trapezium":
      image.style.clipPath =  "polygon(20% 0, 80% 0, 100% 100%, 0 100%)";
      break;
      case "kite":
      image.style.clipPath =  "polygon(50% 0, 100% 50%, 50% 100%, 0 50%)";
      break;
      case "pentagon":
      image.style.clipPath =  "polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%)";
      break;
      case "hexagon":
      image.style.clipPath =  "polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%)";
      break;
      case "heptagon":
      image.style.clipPath =  "polygon(50% 0%, 87% 25%, 100% 62%, 70% 100%, 30% 100%, 13% 62%, 25% 25%)";
      break;
      case "octagon":
      image.style.clipPath =  "polygon(29% 0%, 71% 0%, 100% 29%, 100% 71%, 71% 100%, 29% 100%, 0% 71%, 0% 29%)";
      break;
      case "nonagon":
      image.style.clipPath =  "polygon(50% 0%, 81% 16%, 98% 52%, 86% 88%, 50% 100%, 14% 88%, 2% 52%, 19% 16%, 50% 0%)";
      break;
      case "decagon":
      image.style.clipPath =  "polygon(50% 0%, 78% 12%, 95% 38%, 95% 68%, 78% 95%, 50% 100%, 22% 95%, 5% 68%, 5% 38%, 22% 12%)";
      break;
      case "oval":
        image.style.clipPath = "ellipse(50% 50% at 50% 50%)";
        break;
        case "star":
            image.style.clipPath = "polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%)";
        break;
        case "left-arrow":
            image.style.clipPath = "polygon(40% 0%, 40% 20%, 100% 20%, 100% 80%, 40% 80%, 40% 100%, 0% 50%)";
            break;
            case "right-arrow":
            image.style.clipPath = "polygon(0% 20%, 60% 20%, 60% 0%, 100% 50%, 60% 100%, 60% 80%, 0% 80%)";
            break;
}      
});
// Create 4 points for the user to manipulate
const customBtn = document.getElementById('custom-shape');
customBtn.addEventListener('click',()=>{
  customPoints = [
{ x: 25, y: 25 },
{ x: 75, y: 25 },
{ x: 75, y: 75 },
{ x: 25, y: 75 }
];
renderCustomPoints();
function renderCustomPoints() {
clipPointsContainer.innerHTML = "";
customPoints.forEach(function(point, index) {
const clipPoint = document.createElement("div");
clipPoint.classList.add("clip-point");
clipPoint.style.left = `${point.x}%`;
clipPoint.style.top = `${point.y}%`;
clipPoint.addEventListener("mousedown", function(event) {
event.preventDefault();
handlePointDrag(index, event.clientX, event.clientY);
});
clipPointsContainer.appendChild(clipPoint);
});
updateClipPath();
}

function handlePointDrag(index, startX, startY) {
const clipPoint = customPoints[index];
const containerRect = clipPointsContainer.getBoundingClientRect();
let currentX = startX;
let currentY = startY;
document.addEventListener("mousemove", handleMove);
document.addEventListener("mouseup", handleMouseUp);
function handleMove(event) {
const deltaX = event.clientX - currentX;
const deltaY = event.clientY - currentY;
currentX = event.clientX;
currentY = event.clientY;
clipPoint.x += (deltaX / containerRect.width) * 100;
clipPoint.y += (deltaY / containerRect.height) * 100;
renderCustomPoints();
}
function handleMouseUp() {
document.removeEventListener("mousemove", handleMove);
document.removeEventListener("mouseup", handleMouseUp);
}
}

function updateClipPath() {  let clipPathValue = "polygon(";
  customPoints.forEach(function(point) {
    clipPathValue += `${point.x}% ${point.y}%, `;
  });
  clipPathValue = clipPathValue.slice(0, -2);
  clipPathValue += ")";
  image.style.clipPath = clipPathValue;
}

});

generateCodeButton.addEventListener("click",generateCode);
 function generateCode(){
  const clipPath = image.style.clipPath;
  generatedCode.innerText = `clip-path: ${clipPath};`;

  const copyBtn = document.getElementById('copy-btn');
CopyText = clipPath;
copyBtn.addEventListener('focus',()=>{
    navigator.clipboard.writeText(CopyText);
    copyBtn.style.backgroundColor = "yellowgreen";
    copyBtn.innerHTML = "copyed";
});
copyBtn.addEventListener('blur',()=>{
  copyBtn.style.backgroundColor = "blueviolet";
    copyBtn.innerHTML = "copy";
});
}

      </script>
      <!--bootstrap js link-->
      <script src="script/dropdown.js"></script>
      <script src="script/menubar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
<?php 
  require "footer.php";
?>