<!-- You are not supposed to see this -->
<a href="#" target="_blank">
<img src="https://hitwebcounter.com/counter/counter.php?page=7181941&style=0036&nbdigits=5&type=ip&initCount=0" title="unique visitors" Alt=" counter Visits" align="left"  border="0" width="200" length="200" >
</a>                                    

<style>
#myVideo {
  position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    z-index: -100;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    background-size: cover;
    
    

}
</style>
<video autoplay muted loop id="myVideo">
  <source src="myvideo.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
                   


<!DOCTYPE html>
<html xmlns>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Edexcel&Cambridge Resources</title>
<style>img[alt="www.000webhost.com"]{display:none;}
       #bar {position:relative; right:20px;}
</style>

</head>



<body>
  <!-- Logo --> 
  <img src="Logo.jpg" alt="Logo" length="300" width="160"  style="position:relative; top:45px; left:120px; border:2px solid black; ">
  
  <div id="main">
  	<h1 style="font-family:Rockwell; "><ins><a href="index.php" style="color:black;">Edexcel&Cambridge Resources</a></ins></h1>
  	<div id="header">
    	<a id="bar" href="https://mahdeencv.000webhostapp.com/" style="text-shadow:3px 2px 0 black">Home</a>
        <a id="bar" href="EdexcelASA2Level.php" style="text-shadow:3px 2px 0 black">Edexcel AS/A2 Level</a>
        <a id="bar" href="IGCSE.php" style="text-shadow:3px 2px 0 black">Cambridge IGCSE</a>
        <a id="bar" href="ComingSoon.html" style="text-shadow:3px 2px 0 black">Cambridge AS/A2 Level</a>
        <a id="bar" href="Ebooks.php" style="text-shadow:1px 2px 0 black">E-Books</a>
        <a id="bar" href="ComingSoon.html" style="text-shadow:2px 2px 0 black">Contact Me</a>
    </div>
    <div id="contentColumn">
		
     
    <h2>Updates</h2>
        <div class="divider"></div>
        <p><strong>+  Added October 2019 Units 1-6 Edexcel At 16th January 2020.</strong></p>
        <p><strong>+  Added Jan 2020 Pure 1 and C12 question papers and Oct 19 M1, and P2 papers.</strong></p>
        <p><strong>+  Added E-books Section with free Cambridge Books in PDF.</strong></p>
        <p><strong>+  Added IGCSE section with October November 2019 for ESL,Chem,Bio,Phy,Math,& Computer Science.</strong></p>
        <p><strong>+  Added New 2018 Pearson Edexcel A Level Books including Pure Mathematics 1-2, Statistics 1-2-3, Mechanics 1-2-3, Biology-Physics-Chemistry Book 1, Further Mathematics 1-2, Decisions Mathematics 1.</strong></p>
        <p><strong>+  Added Scroll feature, just swipe downwards on a list on mobile on either pages.</strong></p>
        <p><strong>+ Added *
1) Jan 2020 Edexcel IAL Pure Maths 1, 2, 3 (WMA01-03) Question Papers and Markschemes
2) Jan 2020 Edexcel IAL Mechanics, and Statistics 1 (WME01, WST01) question papers and markschemes
3) Jan 2020 C12 and C34 Questions Papers and markschemes</strong></p>
  
    <div class="share" style="position:relative; top:240px; ">
        <h2>Share</h2>
            <div class="divider"></div>
        
        <!-- Facebook -->
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEdexcelCambridge-PapersUnits-104394507771726%2F%3Fview_public_for%3D104394507771726&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="400" height="130" style="position:relative; left:17px; border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        <div class="addthis_inline_share_toolbox" style="position:relative; left:15px; top:10px;  "></div>
    </div>
        

        
  </div>

  <div id="navColumn">

		<div class="subHeader"><h3 style="text-shadow:2px 2px 0 black">Social Media</h3></div>
            <ul>
                <li><a href="https://www.youtube.com/c/MahdeenSkyYT">Youtube</a></li>
                <li><a href="https://www.reddit.com/user/MahdeenSky">Reddit</a></li>
                <li><a href="https://www.instagram.com/mahdeensky_illustrations/">Instagram</a></li>
                <li><a href="https://www.linkedin.com/in/mahdeen-islam-a873b1177/">Linkedin</a></li>
            </ul>

  </div>
  
  
  
</div>

        <div id="footer" style="position:relative; top:260px; "><a href="https://www.youtube.com/c/MahdeenSkyYT">Temporary Site</a> by <a href="https://www.youtube.com/c/MahdeenSkyYT">MahdeenSkyYT</a></div>
    
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e1fa5d7bad13620"></script>

</body>
</html>

<?php
 

$ip = getenv("REMOTE_ADDR"); 
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "";;
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 

$fh = fopen('log.txt', 'a');
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
fclose($fh);
?>