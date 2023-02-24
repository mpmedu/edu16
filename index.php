<?php
  session_start();
  define('YR', date("Y"));
  define('SUBJECT', 'Home page');
  
?>
  

<!DOCTYPE html>
<html>
<head>
  <meta charset="iso-8859-1">
  <meta name="keywords" content="Questions and answers, Multiple choice questions, quiz, 
                        Game, Multiple choice options, School tests, University tests, General knowledge,
                        Test yourself, The QnA site, The QnA website, Various subjects, Various topics,
                        TestU, TestU website, test you">
  <meta name="description" content="The QnA site, The QnA website, Questions and answers, Multiple choice questions, quiz, Game, Multiple choice options, School tests, University tests, General knowledge, Test yourself">
  <title>TestU</title>
  <!-- 
  <link rel="stylesheet" href="../../lib/css/common.css">
  <link rel="stylesheet" href="../../lib/css/edu.css">
  <link rel="stylesheet" href="../../lib/css/edu.all.css">
  <link rel="stylesheet" href="lib/css/edu.all.css">
  <script src="../../lib/js/myNamespace2.js"></script>
  
 -->
 <link rel="stylesheet" href="./lib/css/edu.all.css">
 <link rel="stylesheet" href="./lib/css/myExpl.css">


</head>

<!-- ****** body ****** -->
 
<body>

<div id = 'startupDiv'>
    <svg width='400px' height='200px'>
      <ellipse id="egg" cx="200" cy="100" rx="180" ry="90" />
      <text x='50' y='108' font-size='20px' fill='white'>Please wait while the page loads...</text>
    </svg>
  </div>



  <!-- <script src="../../lib/js/myNamespace2.PP.adv.min.js"></script> -->

  <!-- <script src="../../lib/js/myNamespace2.js"></script> -->
  
  <style></style>
  <script>
    // this code disables the back button
    history.pushState(null, document.title, location.href);
    window.addEventListener('popstate', function (event)  {
      history.pushState(null, document.title, location.href);
    });  
  </script>
  

<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

  <div id='bodymask' class='nodisplay'></div>   <!-- must be first div in body -->
  

	<div id="topdiv">
    <p id="debug" class="nodisplay">D</p>
    <p id="siteName"></p>
    <p id="pageName"></p>
    
    <div id="scorecontainer" class='nodisplay'>
      <p id="numqs">Questions in test &nbsp;<input id="score_input" type="text" disabled="true"></p>
      <p style="text-align:center;margin-top:6px;"><span id="thescore" >0/0</span></p>
    </div>
    
    <div id="topmenucontainer" style="left:-2000px;">
      <div id='topmenumask'></div>
      <div id='toprightmenumask'></div>
      
      <div id = 'mainmenu_placeholder'></div>
      
      <p id="fn">Filename  <input id="fn_output" type="text" disabled="true"></p>
    </div>
    
    <div id="gamecontainer" style="left:-2000px;">
      <div id='gamecontainermask'></div>
      <button id="gobutton">New game</button>
      <p><input id="clock" type="text" disabled="true"> </p>
    </div>
    
	</div>    <!-- end topdiv -->
  
  <!-- 
  
 -->
  
  
  <noscript><h3 style="margin-left:2%;color:red">Javascript must be enabled to use this website</h3></noscript>
  
  
  <!-- dialogmask is used to mask the background when dialogs are shown -->
  <div id="dialogmask" class="nodisplay dialogmask"></div>
    <!-- wrapper contains the content, at start up it is empty, then init() puts the info, then the startup dialog is shown  -->
  <div id="wrapper">
  </div>
  <!-- wrappermask masks the wrapper when the game is played after a choice has been made  -->
  <div id='wrappermask' class='nodisplay'></div>
  
  <div id="bottomdiv">
    <br>
    <span id="Footer1_Copyright">Copyright <?php echo YR; ?>  All rights reserved.</span>  
    <br><br>
    <div style="position:absolute; top:7px; right:30px; text-align:center;">
      <p style="fontsize:8px;">Audio volume</p>
      <div id="cont" class="roundCorners">
        <div id="ball" class="roundCorners">
        </div>
      </div>
    </div>
  </div>
  
  
  <?php
  // the template files are put into this position
  require_once('./htmlTemplates/tem_common.php');
  require_once('./htmlTemplates/tem_edu.php');
  require_once('./htmlTemplates/tem_resources.php');
  ?>
  
  <!-- 
  <script type="text/JavaScript" src="jQuery/jquery-1.10.2.js"></script>
  
  <script src="../../lib/js/myNamespace2.js"></script>
  <script src="../../lib/js/common.js"></script>
  <script src="../../lib/js/edumeta.js"></script>
  <script src="../../lib/js/edu.js"></script>
  <script src="../../lib/js/edu.PP.adv.min.js"></script>
  edu.PP.adv.min.js
  <script src="../../lib/js/jquery-1.10.2.min.js"></script>
  <script src="../../lib/js/myNamespace2.PP.adv.min.js"></script>
  <script src="../../lib/js/common.PP.adv.min.js"></script>
  <script src="../../lib/js/edumeta.PP.adv.min.js"></script>
  <script src="../../lib/js/edu.adv.min.js"></script>
  
  <script src="../../lib/js/jquery-1.10.2.min.js"></script>
  <script src="../../lib/js/myNamespace2.js"></script>
  <script src="../../lib/js/common.js"></script>
  <script src="../../lib/js/edumeta.js"></script>
  <script src="../../lib/js/edu.js"></script>
 
  <script src="../../lib/js/edu.all.js"></script>
  
  <script src="../../lib/js/myNamespace2.js"></script>
  <script src="../../lib/js/common.js"></script>
  <script src="../../lib/js/edumeta.js"></script>
  <script src="../../lib/js/edu.PP.adv.min.js"></script>
  
  <script src="../../lib/js/jquery-1.10.2.min.js"></script>
  <script src="../../lib/js/eduall.PP.adv.min.js"></script>
  
  <script src="../../lib/js/edu.all.js"></script>
  use the following for the uploaded version
  <script src="lib/js/edu.all.js"></script>
  
  
  <script src="../../lib/js/jquery-1.10.2.min.js"></script>
  <script src="../../lib/js/common.PP.adv.min.js"></script>
  <script src="../../lib/js/edumeta.js"></script>
  <script src="../../lib/js/edu.js"></script>
  
  <script src="../../lib/js/jquery-1.10.2.min.js"></script>
  <script src="../../lib/js/common.PP.adv.min.js"></script>
  <script src="../../lib/js/edumeta.PP.adv.min.js"></script>
  <script src="../../lib/js/edu.PP.adv.min.js"></script>
  
  <script src="../../lib/js/common.js"></script>
  -->

  <!-- note that you can't go futher back than the root, ie htdocs -->
  <!-- <script src="../../../../../../lib/js/myNamespace2.js"></script> -->

  <!-- <script src="../../lib/js/myNamespace2.PP.adv.min.js"></script> -->

  <!-- <script src="../../lib/js/jquery-1.10.2.min.js"></script> -->
  <!-- <script src="../../lib/js/jquery-1.10.2.min.js"></script> -->

  <!-- <script src="../../lib/js/myJsLib1.js"></script>
  <script src="../../lib/js/common2022.12.07.js"></script>
  <script src="../../lib/js/edumeta.js"></script>
  <script src="../../lib/js/edu.js"></script> -->

  <!-- <script src="../../lib/js/common.js"></script> -->
  
  <!-- <script src="lib/js/edu.all.js"></script> -->

  <!-- <script src="../../lib/js/jquery-1.10.2.min.js"></script> -->


  <!-- <script src="../../lib/js/jquery-1.10.2.min.js"></script> -->
  
  
  
  
  <!-- <script src="lib/js/common2022.12.07.js"></script> -->
  <!-- 
  
  
  
  <script src="lib/js/myNamespace2.js"></script>
  
  <script src="lib/js/myJsLib1.js"></script>
  
  <script src="lib/js/common.jQfree.js"></script> 
  
  <script src="../../lib/js_from_edu16 2023.01.18/common.jQfree.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/common.jQfree.adv.min.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/edu.js"></script>
    <script src="lib/js/edumeta.js"></script>
	  <script src="lib/js/myExpl.js"></script>


  -->
  
  <!-- myNamespace2.js must be first and myJsLib1.js must be 2nd -->
  <!--
  <script src="../../lib/js_from_edu16 2023.01.18/myNamespace2.PP.adv.min.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/myJsLib1.PP.adv.min.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/common.jQfree.PP.adv.min.js"></script>
    <script src="../../lib/js_from_edu16 2023.01.18/edu.PP.adv.min.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/edumeta.PP.adv.min.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/myExpl.PP.adv.min.js"></script>
  
  
  
  <script src="../../lib/js_from_edu16 2023.01.18/myNamespace2.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/myJsLib1.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/common.jQfree.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/edu.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/edumeta.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/myExpl.js"></script>
  
  <script src="./lib/js/myNamespace2.js"></script>
  <script src="./lib/js/myJsLib1.js"></script>
  <script src="./lib/js/common.jQfree.js"></script>
  <script src="./lib/js/edu.js"></script>
  <script src="./lib/js/edumeta.js"></script>
  <script src="./lib/js/myExpl.js"></script>
  
  this is the joining of all PP.adv files using copy /b in Command Prompt
  <script src="../../lib/js_from_edu16 2023.01.18/eduall.PP.adv.min.js"></script>
  
  <script src="../../lib/js_from_edu16 2023.01.18/eduall.combined.PP.adv.min.js"></script>
  <script src="../../lib/js_from_edu16 2023.01.18/eduall.combined.adv.min.js"></script>
  
  <script src="./lib/js/eduall.combined.adv.min.js"></script>
  
//-->

<script src="./lib/js/eduall.combined.adv.min.js"></script>

  <script>
  <!--
//-->
  </script>
  
</body> 
</html>
   
   
