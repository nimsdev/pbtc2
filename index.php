<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jonathan Belok</title>
    <meta name="description" content="Perspective Page View Navigation: Transforms the page in 3D to reveal a menu" />
    <meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/popup.css" />
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" href="wow/css/libs/animate.css">
    <link rel="stylesheet" href="wow/css/site.css">
    <link rel="stylesheet" href="wow/css/animated.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cousine' rel='stylesheet' type='text/css'>
    <script src="js/modernizr.custom.25376.js"></script>
  </head>
  <body> 
    <div id="perspective" class="perspective effect-moveleft">
      <div class="container">
        <div class="mcbox">
          <div class="wrapper">
            <audio id="music" preload="true">
              <source src="audio/track.mp3">
                <!--https://www.youtube.com/watch?v=cNMd7S5VB-E track source JCOLE beat -->
            </audio>
            <section class="wow fadeInDown2" data-wow-duration=".5s" data-wow-delay="3.5s" style="height:0px;">  
            <div id="audioplayer">
               <center><button id="pButton" class="play" onclick="play()"></button></center>
              <div id="timeline">
                <div id="playhead"></div>
              </div>
            </div><!-- audio plauer -->
              </section><!--- fade section -->
            <!-- wrapper needed for scroll -->
            <!-- <div class="34238479"><button id="showMenu">Portfolio Quick Links</button></div>-->
            <div class="overlay0">
              <section class="wow fadeInDown2" data-wow-duration="1s" data-wow-delay=".5s" style="height:80px;">
                <h2 class="name">Jonathan Belok</h2>
                <h3>Website Design &middot; Website Development &middot; Graphic Design</h3>
              </section>
              <section class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="height:50px;">
                <center>
                  <button id="showMenu">Portfolio Quick Links</button>
                  <!--                               <a class="showmore2" href="#">More Info</a>-->
                </center>
              </section>
            </div>
            <!-- overlay1 --->
            <div class="overlay2">
              <center>
                <section class="wow fadeInLeft_" data-wow-duration="1.5s" data-wow-delay="1.5s" style="height:auto;">
                  <table>
                    <tr>
                      <td class="myrte2">
                        <section class="wow fadeInUpFirst" data-wow-duration=".5s" data-wow-delay="1.5s" style="height:100px;">                     
                          <a class="buttonPop" href="#popup1"><i class="fa fa-user"></i><br><span style="font-size:12pt;color: !important;">Me</span></a>
                        </section>
                      </td>
                      <td class="myrte2">
                        <section class="wow fadeInUpSecond" data-wow-duration=".5s" data-wow-delay="2.2s" style="height:100px;">                         
                          <a class="buttonPop" href="#popup2"><i class="fa fa-code"></i><br><span style="font-size:12pt;color: !important;">My Work</span></a>
                        </section>
                      </td>
                      <td class="myrte2">
                        <section class="wow fadeInUpThird" data-wow-duration=".5s" data-wow-delay="2.9s" style="height:100px;">                       
                          <a class="buttonPop" href="#popup3"><i class="fa fa-envelope-o"></i><br><span style="font-size:12pt;color: !important;">Contact</span></a>
                        </section>
                      </td>
                    </tr>
                  </table>
                </section>
              </center>
              <div id="popup1" class="overlay">
                <div class="popup">
                  <h2 style="color:#444;letter-spacing:4px;font-weight:100;">Me</h2>
                  <a class="close" href="#">&times;</a>
                  <div class="content">
                    My name is Jonathan, and I have been a web designer &amp; developer for 6 years. I pride myself on creative &amp; modern desgins. I follow current web trends, and I understand what makes a website appealing to viewers. 
                    <br><br>
                    When collaborating with others on projects, it is important that everyone is heard, all possibilities for success are explored, and that everyone is satisfied and happy with the completed work.
                    <br><br>
                    I also enjoy cycling, running and basketball!
                  </div>
                </div>
              </div>
              <!--                         My Work                    -->
              <div id="popup2" class="overlay">
                <div class="popup2">
                  <h2 style="color:#444;letter-spacing:4px;font-weight:100;">My Work</h2>
                  <a class="close" href="#">&times;</a>
                  <div class="content">
                    <!----- portfolio box 1 ------>    
                    <div class="portfoliobox">
                      <img src="images/schoolitupScreenshot.png">	<br>
                      <br>
                      <span style="color:#333;letter-spacing:2px;font-size:14pt;padding-left:20px;">Schoolitup</span>
                      <p class="firstpara">
                        <b> <i class="fa fa-pencil-square-o"></i> Description:</b><br>          
                        Schoolitup is a photo sharing website for students. They upload photos about life at their schools, follow each other, like photos, &amp; look for other students.
                      </p>
                      <p class="secondpara">
                        <b style="text-transform:capitalize;"><i class="fa fa-desktop"></i> Tools Used:</b><br>
                        html, css, photoshop
                      </p>
                      <p class="firstpara">
                        <b> <i class="fa fa-link"></i> Link:</b>&nbsp;
                        <a class="portlinks" href="http://jonathanbe.github.io/schoolitup-landing">Landing Page</a>
                      </p>
                    </div>
                    <!-- portfoliobox -->
                    <!----- portfolio box 2 ------>
                    <div class="portfoliobox">
                      <img src="images/schoolitupPhotosScreenshot.png">	<br>
                      <br>
                      <span style="color:#333;letter-spacing:2px;font-size:14pt;padding-left:20px;">Schoolitup (Main Site)</span>
                      <p class="firstpara">
                        <b> <i class="fa fa-pencil-square-o"></i> Description:</b><br>          
                        Schoolitup is a photo sharing website for students. They upload photos about life at their schools, follow each other, like photos, &amp; look for other students.
                      </p>
                      <p class="secondpara">
                        <b style="text-transform:capitalize;"><i class="fa fa-desktop"></i> Tools Used:</b><br>
                        php, html, css, js, sql, photoshop
                      </p>
                      <p class="firstpara">
                        <b> <i class="fa fa-link"></i> Link:</b>&nbsp;
                        <a class="portlinks" href="http://schoolitup.com/sid-jenkins">Photos Section</a>
                      </p>
                    </div>
                    <!-- portfoliobox -->
                    <!----- portfolio box 3 ------>
                    <div class="portfoliobox">
                      <img src="images/crumyumScreenshot.png">	<br>
                      <br>
                      <span style="color:#333;letter-spacing:2px;font-size:14pt;padding-left:20px;">Crumyum (Landing Page)</span>
                      <p class="firstpara">
                        <b> <i class="fa fa-pencil-square-o"></i> Description:</b><br>          
                        Users are provided a list of options, and they just answer what they're in the mood for. They are then reccomended a meal, a dessert, or a drink,
                      </p>
                      <p class="secondpara">
                        <b style="text-transform:capitalize;"><i class="fa fa-desktop"></i> Tools Used:</b><br>
                        html, css, js, paint.net/pinta
                      </p>
                      <p class="firstpara">
                        <b> <i class="fa fa-link"></i> Link:</b>&nbsp;
                        <a class="portlinks" href="http:://www.crumyumapp.com">Landing Page</a>
                      </p>
                    </div>
                    <!-- portfoliobox -->
                    <!-- portfolio box 4 ---->
                    <div class="portfoliobox">
                      <img src="images/crumyumWebScreenshot.png">	<br>
                      <br>
                      <span style="color:#333;letter-spacing:2px;font-size:14pt;padding-left:20px;">Crumyum (Start Page)</span>
                      <p class="firstpara">
                        <b> <i class="fa fa-pencil-square-o"></i> Description:</b><br>          
                        Users are provided a list of options, and they just answer what they're in the mood for. They are then reccomended a meal, a dessert, or a drink,
                      </p>
                      <p class="secondpara">
                        <b style="text-transform:capitalize;"><i class="fa fa-desktop"></i> Tools Used:</b><br>
                        html, css, js, paint.net/pinta
                      </p>
                      <p class="firstpara">
                        <b> <i class="fa fa-link"></i> Link:</b>&nbsp;
                        <a class="portlinks" href="http:://www.crumyumapp.com/web">Category Start Page</a>
                      </p>
                    </div>
                    <!-- portfoliobox -->
                    <!-- portfolio box 5 ---->
                    <div class="portfoliobox">
                      <img src="images/crumyumRecScreenshot.png">	<br>
                      <br>
                      <span style="color:#333;letter-spacing:2px;font-size:14pt;padding-left:20px;">Crumyum (Recipe Page)</span>
                      <p class="firstpara">
                        <b> <i class="fa fa-pencil-square-o"></i> Description:</b><br>          
                        Users are provided a list of options, and they just answer what they're in the mood for. They are then reccomended a meal, a dessert, or a drink,
                      </p>
                      <p class="secondpara">
                        <b style="text-transform:capitalize;"><i class="fa fa-desktop"></i> Tools Used:</b><br>
                        html, css, js, paint.net/pinta
                      </p>
                      <p class="firstpara">
                        <b> <i class="fa fa-link"></i> Link:</b>&nbsp;
                        <a class="portlinks" href="http://www.crumyumapp.com/web/start/asian-dishes/meals/kung-pao-chicken/">Recipe Page</a>
                      </p>
                    </div>
                    <!-- portfoliobox -->
                    <!-- portfolio box 5 ---->
                    <div class="portfoliobox">
                      <img src="images/rmcScreenshot.png">	<br>
                      <br>
                      <span style="color:#333;letter-spacing:2px;font-size:14pt;padding-left:20px;">RMC Construction</span>
                      <p class="firstpara">
                        <b> <i class="fa fa-pencil-square-o"></i> Description:</b><br>          
                        A construction company in the Ottawa area. The company provides all types of home renovations, indoor &amp; outdoor work, &amp; building services.
                      </p>
                      <p class="secondpara">
                        <b style="text-transform:capitalize;"><i class="fa fa-desktop"></i> Tools Used:</b><br>
                        html, css
                      </p>
                      <p class="firstpara">
                        <b> <i class="fa fa-link"></i> Link:</b>&nbsp;
                        <a class="portlinks" href="http://jonathanbe.github.io/rmc">Main Site</a>
                      </p>
                    </div>
                    <!-- portfoliobox -->
                    <!-- portfolio box 6 ---->
                    <div class="portfoliobox">
                      <img src="images/bryvoScreenshot.png">	<br>
                      <br>
                      <span style="color:#333;letter-spacing:2px;font-size:14pt;padding-left:20px;">Bryvo Studios</span>
                      <p class="firstpara">
                        <b> <i class="fa fa-pencil-square-o"></i> Description:</b><br>          
                        Website design company - Various projects were creating ranging from large social networks, to websites and apps for small businesses.
                      </p>
                      <p class="secondpara">
                        <b style="text-transform:capitalize;"><i class="fa fa-desktop"></i> Tools Used:</b><br>
                        html, css, js, paint.net
                      </p>
                      <p class="firstpara">
                        <b> <i class="fa fa-link"></i> Link:</b>&nbsp;
                        <a class="portlinks" href="http://jonathanbe.github.io/bryvo-studios/">Main Site</a>
                      </p>
                    </div>
                    <!-- portfoliobox -->
                    <!-- portfolio box 6 ---->
                    <div class="portfoliobox">
                      <!--            <img src="images/kyastoScreenshot.png">	<br>-->
                      <img src="images/yeezyseason.gif">	<br>
                      <br>
                      <span style="color:#333;letter-spacing:2px;font-size:14pt;padding-left:20px;">Kyasto Kicks</span>
                      <p class="firstpara">
                        <b> <i class="fa fa-pencil-square-o"></i> Description:</b><br>          
                        A website dedicated to delivering the latest news in fashion. They provide fashion tips for women, men, and children, and weekly blog about newest trends.
                      </p>
                      <p class="secondpara">
                        <b style="text-transform:capitalize;"><i class="fa fa-desktop"></i> Tools Used:</b><br>
                        html, css, js, paint.net
                      </p>
                      <p class="firstpara">
                        <b> <i class="fa fa-link"></i> Link:</b>&nbsp;
                        <a class="portlinks" href="http://jonathanbe.github.io/kyasto/">Site (before client info update)</a>
                      </p>
                    </div>
                    <!-- portfoliobox -->
                    <!-- portfolio box 7 ---->
                    <div class="portfoliobox">
                      <img src="images/vd4aScreenshot.png">	<br>
                      <br>
                      <span style="color:#333;letter-spacing:2px;font-size:14pt;padding-left:20px;">Vacation Deals 4 All</span>
                      <p class="firstpara">
                        <b> <i class="fa fa-pencil-square-o"></i> Description:</b><br>          
                        A travel company that provides low rates on hotels, spas, and resorts all over the world. 
                      </p>
                      <p class="secondpara">
                        <b style="text-transform:capitalize;"><i class="fa fa-desktop"></i> Tools Used:</b><br>
                        html, css, js, paint.net/photoshop, wordpress
                      </p>
                      <p class="firstpara">
                        <b> <i class="fa fa-link"></i> Link:</b>&nbsp;
                        <a class="portlinks" href="http://jonathanbe.github.io/vacationdeals4all-web//">Landing Page</a>
                      </p>
                    </div>
                    <!-- portfoliobox -->
                    <!-- portfolio box 8 ---->
                    <div class="portfoliobox">
                      <img src="images/audicrossScreenshot.png">	<br>
                      <br>
                      <span style="color:#333;letter-spacing:2px;font-size:14pt;padding-left:20px;">Audicross</span>
                      <p class="firstpara">
                        <b> <i class="fa fa-pencil-square-o"></i> Description:</b><br>          
                        A small demo site for a class project. It is a mockup site for a new line of cars, motorcycles and utility vehicles for the automotive company Audi.
                      </p>
                      <p class="secondpara">
                        <b style="text-transform:capitalize;"><i class="fa fa-desktop"></i> Tools Used:</b><br>
                        html, css
                      </p>
                      <p class="firstpara">
                        <b> <i class="fa fa-link"></i> Link:</b>&nbsp;
                        <a class="portlinks" href="http://www.crumyumapp.com/xaudicross/">Mockup Site</a>
                      </p>
                    </div>
                    <!-- portfoliobox -->
                  </div>
                </div>
              </div>
              <div id="popup3" class="overlay">
                <div class="popup3">
                  <h2 style="color:#444;letter-spacing:4px;font-weight:100;">Contact</h2>
                  <a class="close" href="#">&times;</a>
                  <div class="content">
                      
                    <!--
                    <input class="contact" placeholder="Name" / >
                    <input class="contact" placeholder="Email" / >
                    <textarea class="contact" placeholder="message" ></textarea>
                    <a class="contact2">Contact</a>
                    -->
                      
                      <?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 

    <input class="contact" name="name" type="text" placeholder="name"/>
   
    <input class="contact" name="email" type="text" placeholder="email"/>
    
    <textarea class="contact" name="message" placeholder="message"></textarea> <br><br>
    <input class="contactbutton" type="submit" value="Contact"/> 
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("jnb.writer@gmail.com", $subject, $message, $from); 
        echo "Thank you for contacting me. I will read your inquiry, and be in touch withing the next 24 hours."; 
        } 
    }   
?> 
                  </div>
                </div>
              </div>
            </div>
              
              
              
              
            <!--music player / button -->  
            <script>
              var music = document.getElementById('music'); // id for audio element
              var duration; // Duration of audio clip
              var pButton = document.getElementById('pButton'); // play button
              
              var playhead = document.getElementById('playhead'); // playhead
              
              var timeline = document.getElementById('timeline'); // timeline
              // timeline width adjusted for playhead
              var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;
              
              // timeupdate event listener
              music.addEventListener("timeupdate", timeUpdate, false);
              
              //Makes timeline clickable
              timeline.addEventListener("click", function (event) {
              moveplayhead(event);
              music.currentTime = duration * clickPercent(event);
              }, false);
              
              // returns click as decimal (.77) of the total timelineWidth
              function clickPercent(e) {
              return (e.pageX - timeline.offsetLeft) / timelineWidth;
              }
              
              // Makes playhead draggable 
              playhead.addEventListener('mousedown', mouseDown, false);
              window.addEventListener('mouseup', mouseUp, false);
              
              // Boolean value so that mouse is moved on mouseUp only when the playhead is released 
              var onplayhead = false;
              // mouseDown EventListener
              function mouseDown() {
              onplayhead = true;
              window.addEventListener('mousemove', moveplayhead, true);
              music.removeEventListener('timeupdate', timeUpdate, false);
              }
              // mouseUp EventListener
              // getting input from all mouse clicks
              function mouseUp(e) {
              if (onplayhead == true) {
              moveplayhead(e);
              window.removeEventListener('mousemove', moveplayhead, true);
              // change current time
              music.currentTime = duration * clickPercent(e);
              music.addEventListener('timeupdate', timeUpdate, false);
              }
              onplayhead = false;
              }
              // mousemove EventListener
              // Moves playhead as user drags
              function moveplayhead(e) {
              var newMargLeft = e.pageX - timeline.offsetLeft;
              if (newMargLeft >= 0 && newMargLeft <= timelineWidth) {
              playhead.style.marginLeft = newMargLeft + "px";
              }
              if (newMargLeft < 0) {
              playhead.style.marginLeft = "0px";
              }
              if (newMargLeft > timelineWidth) {
              playhead.style.marginLeft = timelineWidth + "px";
              }
              }
              
              // timeUpdate 
              // Synchronizes playhead position with current point in audio 
              function timeUpdate() {
              var playPercent = timelineWidth * (music.currentTime / duration);
              playhead.style.marginLeft = playPercent + "px";
              if (music.currentTime == duration) {
              pButton.className = "";
              pButton.className = "play";
              }
              }
              
              //Play and Pause
              function play() {
              // start music
              if (music.paused) {
              music.play();
              // remove play, add pause
              pButton.className = "";
              pButton.className = "pause";
              } else { // pause music
              music.pause();
              // remove pause, add play
              pButton.className = "";
              pButton.className = "play";
              }
              }
              
              // Gets audio file duration
              music.addEventListener("canplaythrough", function () {
              duration = music.duration;  
              }, false);
              
              
              
              
            </script>
            <!--- overlay 2 -->
          </div>
          <!-- wrapper -->
        </div>
        <!-- /container -->
      </div>
      <!-- mcbox -->
      <!--                    <div class="overlay1">hi</div>  overlay 2 ---->
      <nav class="outer-nav right vertical">
        <h2>Recent Projects:</h2>
        <span style="font-size:10pt;color:#CFB53B;font-weight:bold;letter-spacing:4px;">crumyumapp</span>  <a href="http://www.crumyumapp.com" style="display:inline-block;" target="_blank">landing</a>&nbsp;<span style="font-size:10pt;color:white;">/</span>&nbsp;<a href="http://www.crumyumapp.com/web" style="display:inline-block;" target="_blank">web</a>&nbsp;<span style="font-size:10pt;color:white;">/</span>
        <a href="http://www.crumyumapp.com/all-meals-dir" style="display:inline-block;" target="_blank">main</a> 
        <div class="linkspace"></div>
        <span style="font-size:10pt;color:#CFB53B;display:inline-block;font-weight:bold;letter-spacing:2px;">schoolitup</span> 
        <a href="http://jonathanbe.github.io/schoolitup-landing" style="display:inline-block;" target="_blank">landing</a>&nbsp;<span style="font-size:10pt;color:white;">/</span>&nbsp;<a href="http://www.schoolitup.com/photos" style="display:inline-block;" target="_blank">main</a> 
        <a href="http://jonathanbe.github.io/rmc" target="_blank">RMC Construction</a>  
        <a href="http://jonathanbe.github.io/bryvo-studios" target="_blank">Bryvo Studios</a>  
        <a href="http://jonathanbe.github.io/kyasto" target="_blank">Kyasto Kicks</a>  
        <a href="http://jonathanbe.github.io/vacationdeals4all-web" target="_blank">VacationDeals4All</a>  
        <a href="http://jonathanbe.github.io/xaudicross" target="_blank">audicross</a>  
      </nav>
    </div>
    <!-- /perspective -->
    <script src="js/classie.js"></script>
    <script src="js/menu.js"></script>
    <script src="wow/dist/wow.min.js"></script>
    <script>
      wow = new WOW(
        {
          animateClass: 'animated',
          offset:       100,
          callback:     function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
          }
        }
      );
      wow.init();
      document.getElementById('moar').onclick = function() {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
      };
    </script>        
  </body>
</html>
