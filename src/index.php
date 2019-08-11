<?php
if($_POST["submit"]) {
    $recipient="bluevision97@gmail.com";
    $subject=$_POST["subject"];
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail:
    $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: 
    $sender <$senderEmail>");

    $thankYou="<h3>Thank you! Your message has been sent.</h3>";
}
?>
<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 600, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
        <link rel="stylesheet" href="style.css">
        <title>Daniel Crain</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <main id="main">
        <div class="nav">
            <div>
                <label class="heading">DANIEL CRAIN</label>
            </div>
            <div>
                <a href="#portfolio"><div class="link link-portfolio">Portfolio</div></a>
                <a href="#contact"><div class="link">Contact</div></a>
            </div>
        </div>

        <div class="parallax">        
            <div class="typing">
                <p>Hello, I'm Daniel</p> 
                <p>A Web Developer</p>
                <p>and UI/UX Designer</p>
            </div>
            <p id="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Fusce nec viverra libero, et vulputate orci. Quisque vel elit risus. 
                Proin eleifend suscipit dictum. Mauris viverra metus ac purus varius elementum. 
                Nulla ex quam, vestibulum quis maximus nec, elementum in tellus. 
                Maecenas velit odio, imperdiet ut laoreet eget, suscipit vel risus. 
                Aenean sed laoreet orci. Suspendisse potenti. Sed fringilla mattis metus, 
                eu pretium libero sollicitudin sed.</p>
        </div>
        <div id="portfolio">
            <label class="heading">Portfolio</label>
        </div>
        <div id="portfolio-content">
            
            <div class="preview">
                <div>
                    <a href="#portfolio"><div class="preview-link">Leonardo Da Vinci Artwork Gallery</div></a>
                    <h2>Technology</h2>
                    <p>lorem ipsum, more latin filler stuffies.</p>
                    <div class="launch hide-desktop" onclick="window.open('./davinci/main.html')";>Launch</div>
                </div>
                <div id="container1">
                    <img src="./images/davinci_thumb.png" class="image" style="width:100%">
                    <div class="overlay1"></div>     
                    <div class="launch hide-mobile" onclick="window.open('./davinci/main.html')";>Launch</div>
                </div>
            </div>

            <div class="preview">
                <div>
                <a href="#portfolio"><div class="preview-link">Ice Cream Cone Builder</div></a>
                    <h2>Technology</h2>
                    <p>lorem ipsum, more latin filler stuffies.</p>
                    <div class="launch hide-desktop" onclick="window.open('https://codesandbox.io/s/broken-pine-lh3z1')";>Launch</div>
                </div>
                <div id="container2">
                    <img src="./images/ice_cream_thumb.png" class="image"/>
                    <div class="overlay2"></div>     
                    <div class="launch hide-mobile" onclick="window.open('https://codesandbox.io/s/broken-pine-lh3z1')";>Launch</div>
                </div>
            </div>  

            <div class="preview">
                <div>
                <a href="#portfolio"><div class="preview-link">Product Landing Page</div></a>
                    <h2>Technology</h2>
                    <p>lorem ipsum, more latin filler stuffies.</p>
                </div>
                <div id="">
                    <img src="./images/survey_thumb.png" class="image"/>
                </div>
            </div>
        </div>

        <div id="contact-heading">
            <label class="heading">Contact Me</label>
        </div>
      
        <div id="contact-form">
            <form method="post" action="index.php">
                <div id="contact">
                    <div class="row">
                    <input name="sender" id="name" class="text" type="text" placeholder="Name*" required>
                    </div>
                    <div class="row">
                    <input name="senderEmail" class="text" type="email" placeholder="Email*" required>
                    </div>
                    <div class="row">
                    <input name="subject" class="text" type="text" placeholder="Subject">
                    </div>
                    <div class="row">
                    <textarea name="message" class="text textarea" placeholder="Message"></textarea>
                    </div>
                    <div id="button-submit">
                        <input type="submit" name="submit" class="submit">
                    </div>
                    <div id="thankyou">
                    <?=$thankYou ?>
                    </div>
                    
                    <div id="connect-links">
                        <a href="https://github.com/bluevision/"  target="_blank"><img src="./images/github.png"></a>
                        <a href="https://www.linkedin.com/in/daniel-c-05bb56102/" target="_blank"><img src="./images/linkedin.png"></a>
                        <a href="https://twitter.com/CrainDaniel/" target="_blank"><img src="./images/twitter.png"></a>
                    </div>
                </div>
            </form>
        </div>
    </main>
</html>