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
  
    for (var i = 1; i <= 10; i++) {
       var shade = document.createElement("span");
       shade.classList.add("shade");
      shade.style.backgroundColor = shadeColor(color, -10 * i);
  
      // Add event listener to shade element
      shade.addEventListener("click", function() {
        var bgColor = window.getComputedStyle(this).getPropertyValue("background-color");
        console.log(bgColor);
       // var hexCode = bgColor.match(/#[0-9a-f]{6}/i)[0];
        let colorCode = document.getElementById("color-code").textContent = bgColor+";";
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
