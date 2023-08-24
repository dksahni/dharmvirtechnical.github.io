<?php 
  require "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"href="/favicon/webtoolkit.png">
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
            background-image:url('image/contact-us.jpg');
            background-size:contain;
            background-repeat:repeat-Y;
            /* background-color:#1dd1a1; */
        }
        #contact-us-heading{
            text-align:center;
            padding:40px 0px;
            font-size:35px;
            color:var(--content-bg);


        }
        form{
            background-image:url('image/message.png');
            background-repeat:no-repeat;
            background-size: contain;
            /* background-size:contain; */
            max-width:600px;
            margin:0 auto;
            display:flex;
            padding:20px;
            flex-direction:column;
            background-color:#CAD3C8;
        }
        label,input,textarea{
            margin-bottom: 10px;
            font-size:17px !important;
            
        }
        input:focus,
        textarea:focus{
            border:none;
            outline:none;
        }
        
        label{
            font-weight:bold;
        }
        input,textarea{
            padding-left:10px;
            border:1px solid #ccc;
            border-radius:10px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
        }
        
        button{
            margin-top:20px !important;
            font-size:20px !important;
            padding:10px;
            background-color:#4CAF50;
            color:#fff;
            border:none;
            border-radius:15px !important;
        }
        button:hover{
            background-color: #3e8e41;
        }
        #submited{
            text-align:center;
            font-size:20px;
            color:yellowgreen;
            text-shadow:1px 1px 1px black;
            display:inline-block;
            margin:auto;
            width:100%;
            display:none;  
        }
    </style>
</head>
<body style="background-color:#1dd1a;">
    <div style="height:130px"></div>
    <h1 id="contact-us-heading">Contact us</h1>
    <div class="container">
        <span id="submited">Thank you ! for your valuable time..</span>
        <form action=""id="contact-form">
                <label for="name">Name:</label>
                <input type="text"id="name"name="name"required>
                
                <label for="email">Email:</label>
                <input type="email"id="email"name="email"required>
                <label for="message">Name:</label>
                 <textarea name="message" id="message" rows="5"required></textarea>
                <button type="submit">Submit</button>
        </form>
    </div>
    <script>
        // Select the form and the input fields
const form = document.querySelector('form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const messageInput = document.querySelector('#message');

// Add an event listener to the form for when it is submitted
form.addEventListener('submit', function(event) {
  // Prevent the form from submitting and refreshing the page
  event.preventDefault();

  // Initialize a boolean variable to track whether the form is valid
  let isFormValid = true;

  // Validate the name field
  if (nameInput.value.trim() === '') {
    nameInput.nextElementSibling.textContent = 'Please enter your name.';
    isFormValid = false;
  } else {
    nameInput.nextElementSibling.textContent = '';
  }

  // Validate the email field
  const emailPattern = /^\S+@\S+\.\S+$/;
  if (emailInput.value.trim() === '') {
    emailInput.nextElementSibling.textContent = 'Please enter your email.';
    isFormValid = false;
  } else if (!emailPattern.test(emailInput.value)) {
    emailInput.nextElementSibling.textContent = 'Please enter a valid email address.';
    isFormValid = false;
  } else {
    emailInput.nextElementSibling.textContent = '';
  }

  // Validate the message field
  if (messageInput.value.trim() === '') {
    messageInput.nextElementSibling.textContent = 'Please enter a message.';
    isFormValid = false;
  } else {
    messageInput.nextElementSibling.textContent = '';
  }

  // If the form is valid, submit it
  if (isFormValid) {
    form.submit();
  }
});

        </script>
       <script src="script/dropdown.js"></script>
       <script src="script/menubar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
<?php 
  require "footer.php";
?>
</html>