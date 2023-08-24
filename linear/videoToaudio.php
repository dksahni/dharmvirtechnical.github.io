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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> 
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine&effect=anaglyph|shadow-multiple|3d">

          <style>
    body{
        font-size:20px !important;
        background-image: linear-gradient(to right, #d16ba5, #86a8e7,#5ffbf1);
    }
    #input-section{
        display:flex;
        flex-wrap:wrap;
        align-items: center;
        justify-content:center;
        height:fit-content;
    }
   
    #input-video{
        margin:20px;
    }
    #output-section{
        display:flex;
        align-items:center;
        justify-content:center;
        visibility:hidden;
        margin:20px;
    }
    #convert-button{
        background-color:var(--text-color);
        color:white;
        padding:10px 20px;
        border:none;
        border-radius:5px;
        cursor:pointer;
        margin:20px;
        transition:linear 0.3s;
    }
    #convert-button:hover{
        background-color:var(--text-color-two);
        transform:scale(1.05);
    }
    #output-audio{
        /* margin:20px; */
    }
    #download-button{
        padding:10px 20px;
        cursor:pointer;
        border-radius:20px !important;
        text-decoration:none;
        background-color:var(--primary-color);
        /* --primary-color:#1dd1a1;
        --text-color:#2C3A47;
        --text-color-two:#182C61;
        --content-bg:#CAD3C8;
        --hover-color:#0f9b8e; */
        color:blueviolet;
        font-weight:bold;
        color:white;
        border-radius:5px;
        border:none;
        /* margin:20px; */

    }
    audio{
        border:none;
        width:300px;
    }
#not-select-msg{
    text-align:center;
    font-weight:500;
    display:none;
}
details{
    text-align:center;
}
.accordion-container{
    max-width:60%;
    margin: 20px auto;
}
 .accordion-button{
    font-size:20px !important;
}
/*about service */

.about-service{
    background-color:var(--content-bg);
    border-radius:20px;
    box-shadow:1px 1px 1px grey;
    padding:0 0 20px 0;
}
.about-service-heading{
    text-align:center;
}
.about-service h1{
    text-align:center;
    font-size:2.5rem;
    text-transform:uppercase;
}
.about-service .para,h1{
   padding:20px;
   margin:30px;
   letter-spacing:1px;
   font-family:verdana;
}
.para{
    background-color:var(--primary-color);
    border-radius:20px;
}
</style>
</head>
<body>
    <div style="height:200px"></div>
    <h1 class="about-service-heading font-effect-anaglyph">
    (: Welcome to our website :)
    </h1>
    <div id="input-section">
        <input type="file"id="input-video"accept="video/*">
        <button id="convert-button">convert to audio</button>
    </div>
    <h1 id="not-select-msg">file is not selected ! please select a video from your pc</h1>
    <div id="output-section"style="">
    <audio id="output-audio"controls class="audiplay"nodownload></audio>
    <a id="download-button" download>Download</a>
    </div>
        <div class="accordion-container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            *  How to use ?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Simply choose your video file and click on convert button.
      </div>
    </div>
  </div>
</div>
</div>
<div class="about-service">
    <p class="para1 para">
 There you can easily convert any video file into an audio format. Whether you're a music enthusiast or just want to listen to your favorite podcast on the go, our website makes it easy and convenient to extract audio from any video file.

</p>
<h1 class="font-effect-anaglyph">Features</h1>
<p class="para2 para">
Using our website is simple and straightforward. All you need to do is upload the video file that you want to convert, and our advanced conversion tool will automatically extract the audio and convert it into a high-quality audio format.
</p>
<h1 class="font-effect-anaglyph">Why us</h1>
<p class="para3 para">
In addition to its simple and intuitive interface, our website offers a range of features that make it the best choice for converting video files to audio format. Here are just a few of the features that you'll enjoy when you use our website.
</p>
<p class="para3 para">
 <b>High-Quality</b> Audio: Our advanced conversion tool ensures that the audio extracted from your video files is of the highest quality possible, so you can enjoy crystal-clear sound that is free from distortion or background noise.
</p>
<p class="para4 para">
   <b> Fast and Reliable:</b> With our fast and reliable conversion tool, you can convert video files to audio format in just a few seconds. Plus, our website is designed to work flawlessly on all devices, so you can convert your video files to audio format on your smartphone, tablet, or desktop computer.
</p>
<p class="para5 para">
    <b> Wide Range of Audio Formats:</b> We offer a wide range of audio formats, so you can choose the format that best suits your needs. Whether you want to convert a video file into an MP3, WAV, FLAC, or another format, our website makes it easy and convenient to do so.
</p>
<p class="para6 para">
<b> Safe and Secure:</b> We take the security and privacy of our users seriously, which is why our website uses the latest encryption technology to protect your data. You can rest assured that your video files and personal information are safe and secure when you use our website.
</p>
<p class="para7 para">
    
    In conclusion, our website is the perfect solution for anyone who wants to convert video files into audio format quickly, easily, and conveniently. With its advanced conversion tool, wide range of audio formats, and high-quality audio output, our website is the best choice for anyone who wants to enjoy their favorite video content in audio format. Try our website today and experience the difference for yourself!</p>
</p>
<p></p>
</div>
   <!-- <audio-player data-src="https://github.com/SH20RAJ/AudiPlay/raw/main/Ark.mp3"></audio-player>-->
    <script>
        const inputVideo = document.getElementById("input-video");
        const convertButton = document.getElementById("convert-button");
        const downloadButton = document.getElementById("download-button");
        const outputAudio = document.getElementById("output-audio");
        const inputSection = document.getElementById("input-section");
        const outputSection = document.getElementById("output-section");
        const notSelectMsg = document.getElementById("not-select-msg");
         console.log(inputVideo.value);
        convertButton.addEventListener('click',() =>{
            if(inputVideo.value == null){
                notSelectMsg.style.display = "block";
            }
            else{
            const file = inputVideo.files[0];
            const url = URL.createObjectURL(file);
            outputAudio.src = url;
            const blob = new Blob([file],{type:'audio/mpeg'});

            downloadButton.href = URL.createObjectURL(blob);
            downloadButton.download = `audio_${Date.now()}.mp3`;
            // inputSection.style.display = "none";
            outputSection.style.visibility = "visible";
            }
        });
    </script>
    <script src="script/menubar.js"></script>
    <script src="script/dropdown.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="/linear/linear.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- the-->
    <script type="module" src="https://cdn.jsdelivr.net/gh/SH20RAJ/AudiPlayV2@main/audiplayv2.js"></script>
</body>
<?php 
   require "footer.php";
 ?>
</html>