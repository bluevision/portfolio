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
        <link rel="stylesheet" href="style.css">
        <title>Daniel Crain</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <main id="main">
        <div class="nav">
            <div class="links">
                <label class="heading">DANIEL CRAIN</label>
            </div>
            <div class="links">
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
            
            <div class="preview" onclick="window.open('./davinci/main.html')";>
                <div>
                    <img src="./images/davinci_thumb.png">
                </div>     
                <div>
                    <h3>Leonardo Da Vinci Artwork Gallery</h3>
                    <h2>Technology</h2>
                    <p>lorem ipsum, more latin filler stuffies.</p>
                </div>
            </div>

            <div class="preview">
                <div>
                    <img src="./images/ice_cream_thumb.png"/>
                </div>
                <div>
                    <h3>Ice Cream Cone Builder</h3>
                    <h2>Technology</h2>
                    <p>lorem ipsum, more latin filler stuffies.</p>
                </div>
            </div>  
            <div class="preview">
                <span>
                    <img src="./images/survey_thumb.png"/>
                </span>
                <span>
                    <h3>Ice Cream Cone Builder</h3>
                    <h2>Technology</h2>
                    <p>lorem ipsum, more latin filler stuffies.</p>
                </span>
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