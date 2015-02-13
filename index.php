<?php 
require('header.php');
require('phpLibs/recaptchalib.php');

$reCAPTCHA = new ReCaptcha("6LfhsQETAAAAAFY2MzO7PZVriUEiAO7yLiMtm-ri");
if (isset($_POST)) {
    $response = $reCAPTCHA->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
    if ($response->success) {
        $message = "From: " . $_POST['fullName'] . "\n";
        $message .= "Email: " . $_POST['email'] . "\n";
        $message .= "Phone: " . $_POST['phone'] . "\n\n";
        $message .= "Message: " . $_POST['message'];
        mail('alastairparagas@gmail.com', 'Message from Aparagas.com', $message);
        ?>
        <div class="alert alert-success row-full pad">
            <div class="row">
                <i class="fa fa-2x fa-info"></i> Woohoo! Your message has been succesfully sent to me! Please wait 24-48 hours for my response.
            </div>
        </div>
        <?php
    }
}
?>

<div id="leaderboard" class="row-full">
    <div class="row">
        <div id="profilePicture" class="grid-3">
            <img class="round" src="profile_picture.jpg" />
        </div>
        <div id="about" class="grid-9 pad">
            <h1>I am Alastair Paragas</h1>
            <p>I am a College Student and a Programmer. I am a Front-end developer specializing in HTML, CSS, 
                and Javascript (having experience in native, jQuery and Angular.JS), Back-end developer specializing in PHP 
                (having experience in native, Laravel and CakePHP framework), and an explorative User-Interface/Experience designer using 
                Photoshop and Illustrator. 
                <br/><br/>
                I am a part and co-founder of an internet-based startup named Stela, where we make fun and productive apps 
                that try to promote freedom and transparency while solving the needs of 
                modern world convenience.
                <br/><br/>
                Although I could use a framework/library like Bootstrap or Foundation or a Content Management System like Wordpress, I opted
                to instead develop this site from scratch with HTML and CSS so that I can showcase how able, independent and framework 
                agnostic I can be as a developer.
            </p>
            <a target="_new" href="https://www.facebook.com/alastairparagas" title="Follow me on Facebook!"><i class="fa fa-facebook"></i>Facebook</a>
            <a target="_new" href="http://lnkd.in/pb4gbg" title="Link with me on LinkedIn!"><i class="fa fa-linkedin"></i>LinkedIn</a>
            <a target="_new" href="http://aparagas.tumblr.com" title="Tumble with me on Tumblr!"><i class="fa fa-tumblr"></i>Tumblr</a>
            <a target="_new" href="http://www.youtube.com/user/alastairparagas/videos" title="Watch me on Youtube!"><i class="fa fa-youtube"></i>Youtube</a>
            <a target="_new" href="https://medium.com/@alastairparagas" title="Read me on Medium!"><i class="fa fa-medium"></i>Medium</a>
        </div>
    </div>
</div>
<div id="aboutMore" class="row">
    <div class="grid-4 pad" id="skills">
        <h2><i class="fa fa-gavel"></i>Skills</h2>
        <p>
            In order of proficiency, I am skilled with PHP, MySQL, HTML, CSS, Javascript and Java as well as API protocol 
            languages like XML, JSON, YAML, and OAuth. I have had minor experience in Python, Visual Basic, C#, and Ruby on Rails
            during my childhood. I am also into the great frameworks of Laravel, CakePHP, Angular.JS, Ionic and jQuery.
        </p>
    </div>
    <div class="grid-4 pad" id="philosophy">
        <h2><i class="fa fa-flag"></i>Philosophy</h2>
        <p>
            Whenever I start or develop individual projects, I follow by a certain creed - that whatever I 
            create will help the general public, that whatever the system that project is created in practices 
            transparency and security, and that the system will mostly be powered by the community. I often take 
            a step back and reflect upon these tenets.
        </p>
    </div>
    <div class="grid-4 pad" id="inspiration">
        <h2><i class="fa fa-bullhorn"></i>Inspiration</h2>
        <p>
            I learned programming at such a young age through the possibility of having my own computer, given 
            to me by my parents at the end of my Freshman Year high school. Coming from the Philippines, I have 
            never had my own computer for the earlier parts of my life, and have barely, if any, touched or 
            experienced one. Having one mesmerized me.
        </p>
    </div>   
</div>
<div id="contactMe" class="row">
    <div id="aboutContact" class="grid-6 pad">
        <h2>Contact Me</h2>
        <p>
            Need me for any web development advice, tutorials, tips, tricks, and/or are inquiring for any kind of work? 
            Need a website, mobile app, or data-driven application created? Send any inquiries through the form or email 
            me at alastairparagas@gmail.com!
        </p>
    </div>
    <div id="contactForm" class="grid-4 offset-1 pad">
        <form method="post">
            <div>
                <label for="fullName">Full Name</label>
                <input type="text" name="fullName" placeholder="Full Name e.g. John Doe" required/>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email address e.g. johndoe@test.com" required/>
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="text" name="phone" placeholder="Phone Number e.g. #(123)456-7890" required/>
            </div>
            <div>
                <label for="message">Message</label>
                <textarea name="message" placeholder="Message to send" required></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="6LfhsQETAAAAAMzGLeEdPN_0S-YN5vdp2ILAjVG6"></div>
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <div>
                <input type="submit" value="Send Message" />
            </div>
        </form>
    </div>
</div>
<?php require('footer.php'); ?>