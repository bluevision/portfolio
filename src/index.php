<?php
if(isset($_POST["submit"])) {
    $recipient="bluevision97@gmail.com";
    $subject=$_POST["subject"];
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];


    $txt = "You have received an e-mail from ".$sender.".\n\n".$message;
    mail($recipient, $subject, $txt, "From: 
    $sender <$senderEmail>");

    $thankYou="<h3>Thank you! Your message has been sent.</h3>";
    header("Location: index.php?mailsend");
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
            <div id="about-me">
            <img id="me" src="./images/me.jpg">
            <div class="typing">
                <p>Hello, I'm Daniel,</p> 
                <p>A Web Developer</p>
                <p>and UI/UX Designer</p>
            </div>
            </div> 
            <p id="paragraph" class="tab"> I currently reside in west Michigan with my wife and two children. Proficient with HTML, CSS, 
            and JavaScript, I love making beautiful user interfaces and an intuitive user experience. 
            I’m interested in automating business processes, to provide a seamless customer experience, 
            streamline sales, and ultimately increase revenue; Highly driven and a self-learner, I’m currently 
            diving into JavaScript frameworks, React.JS and Vue.JS, to build web applications that do just that.</p>
        </div>
        <div id="portfolio">
            <label class="heading">Portfolio Projects</label>
        </div>
        <div id="portfolio-content">
            
            <div class="preview davinci">
                <div>
                    <a href="./davinci/main.html" target="_blank"><div class="preview-link">Leonardo DaVinci Artwork Gallery</div></a>
                    <p>A timeline of Leonardo DaVinci's major extant works. Using JQuery, the artwork previews expand into a full image once tapped or clicked, along with a corresponding description.</p>
                    <div class="launch hide-desktop" onclick="window.open('./davinci/main.html')";>Launch</div>
               </div>
                    <div id="container1">
                        <img src="./images/davinci_thumb.png" class="image" style="width:100%">
                        <div class="overlay1"></div>     
                        <div class="launch hide-mobile" onclick="window.open('./davinci/main.html')";>Launch</div>
                    </div>
                    <div class="technologies">
                        <img src="./images/jquery.png">
                        <img src="./images/css3.png">
                    </div>
            </div>

            <div class="preview ice-cream">
                <div>
                <a href="https://codesandbox.io/s/broken-pine-lh3z1" target="_blank"><div class="preview-link">Ice Cream Builder</div></a>
                    <p>A proof-of-concept ecommerce platform for products with multiple options in unique categories. Built in React, Ice Cream Builder tracks user selection and updates the total price accordingly. It scales easily for additional options and is configurable to accomodate other products. </p>
                    <div class="launch hide-desktop" onclick="window.open('https://codesandbox.io/s/broken-pine-lh3z1')";>Launch</div>
                </div>
                <div id="container2">
                    <img src="./images/ice_cream_thumb.png" class="image"/>
                    <div class="overlay2"></div>     
                    <div class="launch hide-mobile" onclick="window.open('https://codesandbox.io/s/broken-pine-lh3z1')";>Launch</div>
                </div>
                    <div class="technologies">
                        <img src="./images/react.png">
                        <img src="./images/css3.png">
                    </div>
            </div>

            <div class="preview crm">
                <div>
                <a href="https://github.com/bluevision/vue-crm/" target="_blank"><div class="preview-link">Contact List</div></a>
                    <p>Contact List is built in VueJS with Material Design components. You can add, delete, or modify existing contacts. Find contacts with the search menu by first, last, or company name.</p>
                    <div class="launch hide-desktop" onclick="window.open('https://github.com/bluevision/vue-crm/')";>View on GitHub</div>
                </div>
                <div id="container3">
                    <img src="./images/contact.png" class="image"/>
                    <div class="overlay3"></div>     
                    <div class="launch hide-mobile" onclick="window.open('https://github.com/bluevision/vue-crm/')";>View on GitHub</div>
                </div>
                <div class="technologies">
                        <img src="./images/vue.png">
                        <img src="./images/css3.png">
                    </div>
            </div>
        </div>

        <div id="contact-heading">
            <label class="heading">Contact Me</label>
        </div>
      
        <div id="contact-form">
            <form method="post" action="index.php">
                <div id="contact">
                <p style="color: white; margin-top: 2em; font-size: 1.2em;">If you like my work, send me a message! I'm always interested to hear about an exciting new opportunity.</p>
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
                    <button type="submit" class="submit">Send</button>
                    </div>
                    <div id="thankyou">
                    <?=$thankYou ?>
                    </div>
                    
                    <div class="connect-links">
                        <a href="https://github.com/bluevision/"  target="_blank"><img src="./images/github.png"></a>
                        <a href="https://www.linkedin.com/in/danielrcrain/" target="_blank"><img src="./images/linkedin.png"></a>
                        <a href="https://twitter.com/CrainDaniel/" target="_blank"><img src="./images/twitter.png"></a>
                    </div>
                </div>
            </form>
        </div>
    </main>
</html>