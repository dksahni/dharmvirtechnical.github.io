 <?php 
   require 'navbar.php';
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
    <link rel="stylesheet"type="text/css"href="flatColor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> 
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine&effect=anaglyph|shadow-multiple|3d">

        </head>
<body>
<div style="height:120px"></div>
    <div class="shade-container">
        <h1 id="main-heading"class="font-effect-anaglyph">Color Shade Generator</h1>
        <input type="color"id="color-input"onchange="generateShades()"value="#d16ba5">
        <div id="shades-container">
            <!-- shades will be added here -->
            <div class="shade"></div>
          </div>
          <span id="color-code"></span>
          <button class="copy-button"id="copyBtn">Copy code!</button>
          <span class="copy-message" id="copyMessage">color code copied to clipboard!</span>
    </div>
    <h1 class="shade-about-heading">
        (: welcome to our website webtoolkit :)
      </h1>
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
        <strong>choose desired color using input color.</strong>After selecting color click outside of the selection area. Now Shades of given color will be generated.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      * How to copy rgb color code ?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>For copying color code your just click on the color box that color code you want to copy. </strong>Now color code show in bottom area. Then you can easily copy color code using copy button.
    
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
    </div>
    <script>
      let copyBtn = document.getElementById('copyBtn');
let shades = document.getElementById('shades');
window.onload = function() {
    let colorInput = document.getElementById("color-input");
    colorInput.addEventListener("change", function() {
      generateShades(colorInput.value);
      copyBtn.style.display = "block";
    });
  };
  function generateShades(color) {
    var shadesContainer = document.getElementById("shades-container");
    shadesContainer.innerHTML = "";
  
    if (color === undefined) {
      return;
    }
  
    for (var i = 1; i <= 20; i++) {
       var shade = document.createElement("span");
       shade.classList.add("shade");
      shade.style.backgroundColor = shadeColor(color, -5 * i);
      // Add event listener to shade element
      shade.addEventListener("click", function() {
        var bgColor = window.getComputedStyle(this).getPropertyValue("background-color");
        shade.innerHTML = bgColor;

     //   var hexCode = bgColor.match(/#[0-9a-f]{6}/i)[];
        let colorCode = document.getElementById("color-code").textContent = bgColor+";";
        const hexColorCode = bgColor.toString(16);
       copyBtn.addEventListener('click',()=>{
        
        const textToCopy = colorCode;
        navigator.clipboard.writeText(textToCopy);
        const copyMessage = document.getElementById("copyMessage");
        copyMessage.classList.add("show");
        setTimeout(function() {
            copyMessage.classList.remove("show");
        }, 2000);  
       });
        
    });
  
      shadesContainer.appendChild(shade);
    }
  
}

  function shadeColor(color, percent) {
    var R = parseInt(color.substring(1,3),16);
    var G = parseInt(color.substring(3,5),16);
    var B = parseInt(color.substring(5,7),16);
  
    R = Math.min(255, Math.max(0, parseInt(R * (100 + percent) / 100)));
    G = Math.min(255, Math.max(0, parseInt(G * (100 + percent) / 100)));
    B = Math.min(255, Math.max(0, parseInt(B * (100 + percent) / 100)));
  
    var RR = R.toString(16).padStart(2, '0');
    var GG = G.toString(16).padStart(2, '0');
    var BB = B.toString(16).padStart(2, '0');
  
    return "#" + RR + GG + BB;
  }
  

  function copyText() {
    const textToCopy = colorCode;
    navigator.clipboard.writeText(textToCopy);
    const copyMessage = document.getElementById("copyMessage");
    copyMessage.classList.add("show");
    setTimeout(function() {
        copyMessage.classList.remove("show");
    }, 2000);
}

    </script>
    <!-- <script src="flatColor.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="script/dropdown.js"></script>
<script src="script/menubar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
 <?php 
   require "footer.php";
 ?> 
</html>