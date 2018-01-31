<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('inc/meta.inc.php'); ?>
    <title>Zachery M.J. Meyer's Portfolio - Freelance Writing and Web Development</title>
    <?php require_once('inc/styles.inc.php'); ?>
</head>
<body>
    <?php require_once('inc/nav.inc.php'); ?>
    <div id="index" class="container-fluid">
        <div id="splash" class="jumbotron jumbotron-fluid splash-image">
            <div id="scroll-click" class="scroll-downs" title="Click to Scroll">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
        </div>
        <div id="about" class="about-brief">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="highlight-header">About Me</h2>
                    </div>
                    <div class="col-md-8 about-col">
                        I am interested in projects that encourage and challenge me to expand my skillset. 
                        I have a strong desire to expand my hobby of writing into a professional career path. 
                        I like to write mainly on the topics of politics, economics, computing, and finance. 
                        I am an extremely fast learner and adapt easily to technologies that are not necessarily my forte. 
                        Commensurately, I have a huge interest web development with a focus on decentralized computing and cloud computing, as well as a desire for creative problem-solving and entrepreneurship on the Internet. 
                        I am also very interested in developing for the future machine economy in the Internet of Things.
                    </div>
                </div>
            </div>
        </div>
        <div id="skills" class="skills-highlight">
            <h1 class="highlight-header">Skills</h1>
            <ul>
                <li>Blog Writing</li>
                <li>Social Media Writing</li>
                <li>Academic Writing</li>
                <li>PHP</li>
                <li>HTML</li>
                <li>Javascript</li>
                <li>CSS</li>
                <li>Sass</li>
                <li>AJAX / Axios</li>
                <li>jQuery</li>
                <li>MySQL</li>
                <li>Amazon Web Services</li>
                <li>Laravel PHP Framework</li>
                <li>Phalcon PHP Framework</li>
                <li>Vue.js Javascript Framework</li>
                <li>Git</li>
            </ul>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-col flex-text-left">Copyright &copy; 2018 by Zach Meyer</div>
                    <div class="col-md-6 footer-col flex-text-center">
                        <a class="lets-talk" href="contact.php">Ready? Let's Talk</a>
                    </div>
                    <div class="col-md-3 footer-col flex-text-right icon-container">
                        <a href="https://www.facebook.com/zacmyer" target="_blank" class="icon-link"><i class="fab fa-facebook fa-2x"></i></a>&nbsp;&nbsp;
                        <a href="https://twitter.com/zachdogger" target="_blank" class="icon-link"><i class="fab fa-twitter-square fa-2x"></i></a>&nbsp;&nbsp;
                        <a href="https://www.m.me/zacmyer" target="_blank" class="icon-link"><i class="fab fa-facebook-messenger fa-2x"></i></a>&nbsp;&nbsp;
                        <a href="https://github.com/zachmeyer" target="_blank" class="icon-link"><i class="fab fa-github-square fa-2x"></i></a>&nbsp;&nbsp;
                        <a href="mailto:zach.meyer@outlook.com" target="_blank" class="icon-link"><i class="fas fa-envelope-square fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('inc/scripts.inc.php'); ?>
    <script>
        $(function() {
            $("#scroll-click").click(function() {
                $("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
            });
        });
    </script>
</body>
</html>