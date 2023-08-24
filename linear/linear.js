
    const startColorInput = document.querySelector('#start-color');
    const endColorInput = document.querySelector('#end-color');
    const thirdColorInput = document.querySelector("#third-color");
    const preview = document.querySelector('#preview');
    const output = document.querySelector('#output');
    const mainHeading = document.getElementById('main-heading');
    const twoColor = document.getElementById("two-color");
    const threeColor = document.getElementById("three-color");

    startColorInput.addEventListener('change',generateGradient);
    endColorInput.addEventListener('change',generateGradient);
    thirdColorInput.addEventListener('change',generateGradient);


    function generateGradient(){
        const startColor = startColorInput.value;
        const endColor = endColorInput.value;
        const thirdColor = thirdColorInput.value;
        const gradient = `background-image: linear-gradient(to right, ${startColor}, ${endColor},${thirdColor});`;
        preview.style.backgroundImage = `linear-gradient(to right,${startColor}, ${endColor},${thirdColor})`;
        document.body.style.backgroundImage = `linear-gradient(to right,${startColor}, ${endColor},${thirdColor})`;
        output.textContent = gradient;        
    }
    generateGradient();
      //change button state on click

        let rightTopBtn = document.getElementById("right-top");
        rightTopBtn.addEventListener('focus',function(){
            rightTopBtn.style.backgroundColor = "#EEEEEE";
                    rightTopBtn.style.color = "white";
        });
        rightTopBtn.addEventListener('blur',function(){
            rightTopBtn.style.backgroundColor = "";
                    rightTopBtn.style.color = "";
            
        });

        let rightBtn = document.getElementById("right");
        rightBtn.addEventListener('focus',function(){
            rightBtn.style.backgroundColor = "#EEEEEE";
                    rightBtn.style.color = "white";
        });
        rightBtn.addEventListener('blur',function(){
            rightBtn.style.backgroundColor = "";
                    rightBtn.style.color = "";
            
        });

        let rightBottom = document.getElementById("right-bottom");
        rightBottom.addEventListener('focus',function(){
            rightBottom.style.backgroundColor = "#EEEEEE";
                    rightBottom.style.color = "white";
        });
        rightBottom.addEventListener('blur',function(){
            rightBottom.style.backgroundColor = "";
                    rightBottom.style.color = "";
            
        });
         
        let bottom = document.getElementById("bottom");
        bottom.addEventListener('focus',function(){
            bottom.style.backgroundColor = "#EEEEEE";
                    bottom.style.color = "white";
        });
        bottom.addEventListener('blur',function(){
            bottom.style.backgroundColor = "";
            bottom.style.color = "";
            
        });
        // let leftBottom = document.getElementById("left-bottom");

        let leftBottom = document.getElementById("left-bottom");
        leftBottom.addEventListener('focus',function(){
            leftBottom.style.backgroundColor = "#EEEEEE";
            leftBottom.style.color = "white";
        });
        leftBottom.addEventListener('blur',function(){
            leftBottom.style.backgroundColor = "";
            leftBottom.style.color = "";
            
        });
        
        // let Bottom = document.getElementById("bottom");
        let left = document.getElementById("left");
        left.addEventListener('focus',function(){
            left.style.backgroundColor = "#EEEEEE";
                    left.style.color = "white";
        });
        left.addEventListener('blur',function(){
            left.style.backgroundColor = "";
                    left.style.color = "";
            
        });
    
        // let topLeft = document.getElementById("top-left");
        // let top = document.getElementById("top");
        let topLeft = document.getElementById("top-left");
        topLeft.addEventListener('focus',function(){
            topLeft.style.backgroundColor = "#EEEEEE";
                    topLeft.style.color = "white";
        });
        topLeft.addEventListener('blur',function(){
            topLeft.style.backgroundColor = "";
                    topLeft.style.color = "";
            
        });
         let topBtn = document.getElementById("top");
         topBtn.addEventListener('focus',function(){
             topBtn.style.backgroundColor = "#EEEEEE";
                     topBtn.style.color = "white";
         });
         topBtn.addEventListener('blur',function(){
             topBtn.style.backgroundColor = "";
                     topBtn.style.color = "";
      
         });

      function generateRightTop(){
        const startColor = startColorInput.value;
        const endColor = endColorInput.value;
        const thirdColor = thirdColorInput.value;
        const gradient = `background-image: linear-gradient(to right top, ${startColor}, ${endColor},${thirdColor});`;
        preview.style.backgroundImage = `linear-gradient(to right top,${startColor}, ${endColor},${thirdColor})`;
        document.body.style.backgroundImage = `linear-gradient(to right top,${startColor}, ${endColor},${thirdColor})`;
        output.textContent = gradient;     
     }
     function generateRight(){
        const startColor = startColorInput.value;
        const endColor = endColorInput.value;
        let thirdColor = thirdColorInput.value;

        const gradient = `background-image: linear-gradient(to right, ${startColor}, ${endColor},${thirdColor});`;
        preview.style.backgroundImage = `linear-gradient(to right,${startColor}, ${endColor},${thirdColor})`;
        document.body.style.backgroundImage = `linear-gradient(to right ,${startColor}, ${endColor},${thirdColor})`;
        output.textContent = gradient;     
     }function generateRightBottom(){
        const startColor = startColorInput.value;
        const endColor = endColorInput.value;
        const thirdColor = thirdColorInput.value;
        const gradient = `background-image: linear-gradient(to right bottom, ${startColor}, ${endColor},${thirdColor});`;
        preview.style.backgroundImage = `linear-gradient(to right bottom,${startColor}, ${endColor},${thirdColor})`;
        document.body.style.backgroundImage = `linear-gradient(to right bottom,${startColor}, ${endColor},${thirdColor})`;
        output.textContent = gradient;     
     }function generateBottom(){
        const startColor = startColorInput.value;
        const endColor = endColorInput.value;
        const thirdColor = thirdColorInput.value;
        const gradient = `background-image: linear-gradient(to bottom, ${startColor}, ${endColor},${thirdColor});`;
        preview.style.backgroundImage = `linear-gradient(to bottom,${startColor}, ${endColor},${thirdColor})`;
        document.body.style.backgroundImage = `linear-gradient(to bottom,${startColor}, ${endColor},${thirdColor})`;
        output.textContent = gradient;     
     }function generateLeftBottom(){
        const startColor = startColorInput.value;
        const endColor = endColorInput.value;
        const thirdColor = thirdColorInput.value;
        const gradient = `background-image: linear-gradient(to left bottom, ${startColor}, ${endColor},${thirdColor});`;
        preview.style.backgroundImage = `linear-gradient(to rleft bottom,${startColor}, ${endColor},${thirdColor})`;
        document.body.style.backgroundImage = `linear-gradient(to left bottom,${startColor}, ${endColor},${thirdColor})`;
        output.textContent = gradient;     
     }function generateLeft(){
        const startColor = startColorInput.value;
        const endColor = endColorInput.value;
        const thirdColor = thirdColorInput.value;
        const gradient = `background-image: linear-gradient(to left, ${startColor}, ${endColor},${thirdColor});`;
        preview.style.backgroundImage = `linear-gradient(to left,${startColor}, ${endColor},${thirdColor})`;
        document.body.style.backgroundImage = `linear-gradient(to left,${startColor}, ${endColor},${thirdColor})`;
        output.textContent = gradient;     
     }function generateTopLeft(){
        const startColor = startColorInput.value;
        const endColor = endColorInput.value;
        const thirdColor = thirdColorInput.value;
        const gradient = `background-image: linear-gradient(to top left, ${startColor}, ${endColor},${thirdColor});`;
        preview.style.backgroundImage = `linear-gradient(to top left,${startColor}, ${endColor},${thirdColor})`;
        document.body.style.backgroundImage = `linear-gradient(to top left,${startColor}, ${endColor},${thirdColor})`;
        output.textContent = gradient;     
     }function generateTop(){
        const startColor = startColorInput.value;
        const endColor = endColorInput.value;
        const thirdColor = thirdColorInput.value;
        let gradient = `background-image: linear-gradient(to top, ${startColor}, ${endColor},${thirdColor});`;
        preview.style.backgroundImage = `linear-gradient(to top,${startColor}, ${endColor},${thirdColor}`;
        document.body.style.backgroundImage = `linear-gradient(to top,${startColor}, ${endColor},${thirdColor});`;
        output.textContent = gradient;     
     }

   
     let copyBtn = document.getElementById('copy-btn');
     copyBtn.addEventListener('focus',()=>{
        copyBtn.innerHTML = "copyed";
        copyBtn.style.color = "white";
        copyBtn.style.backgroundColor = "#EEEEEE";
        
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


/*  ***********************
flat color generator *************
**************************** */
