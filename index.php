<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Optc Guide</title>
  <script src="jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Include meta tag to ensure proper rendering and touch zooming -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Include jQuery Mobile stylesheets -->
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

<!-- Include the jQuery library -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include the jQuery Mobile library -->
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link rel="shortcut icon" href="img/Mugiwara.ico">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
<script> 
        $(document).ready(function() { 
        $('#btn_click').on('click', function() { 
            var url = 'index.php';  
            $('#div1-wrapper').load(url + ' #div1'); 
         }); 
        }); 

        $(document).ready(function() { 
        $('#btn_click1').on('click', function() { 
            var url = 'index.php';  
            $('#div2-wrapper').load(url + ' #div2'); 
         }); 
        }); 
         $(document).ready(function() { 
        $('#btn_click2').on('click', function() { 
            var url = 'index.php';  
            $('#div3-wrapper').load(url + ' #div3'); 
         }); 
        }); 
          $(document).ready(function() { 
        $('#btn_click3').on('click', function() { 
            var url = 'index.php';  
            $('#div4-wrapper').load(url + ' #div4'); 
         }); 
        }); 
           $(document).ready(function() { 
        $('#btn_click4').on('click', function() { 
            var url = 'index.php';  
            $('#div5-wrapper').load(url + ' #div5'); 
         }); 
        }); 
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
</head>
<body onload="startTime()">


<div id="page-1" data-role="page">
   <a href="index.php"><img id="logo" src="img/optclogo.png"></a>
    <div data-role="header">
        
        <a href="index.php" data-icon="arrow-l" data-iconpos="left" data-rel="back" data-transition="slide" data-direction="reverse">Back</a>
        <h1 id="OnePieceFonts">Weekly</h1>
    </div>

    <div id="content1" data-role="content">
        <div id="txt"></div>
        <p id="Globaltime">Global time</p>
            <div id="container">
            <div id="first">
                    <img src="img/characters/f0599.png" id="fortnight1">
                </div>
            <div id="second">
                     <p id="fortinfo"><strong>Apprentices! Shanks and Buggy !</strong>: Pirate Apprentices Shanks and Buggy have come to Extra Island! Have you taken on these young up-and-coming pirates? <a href="#openModal2">More info..</a> </p>

                </div>
                             
            </div>
             </br>
             <div id="container">
            <div id="first">
                    <img src="img/characters/f0603.png" id="fortnight1">
                </div>
            <div id="second">
                     <p id="fortinfo"><strong>For 24 hours only! Clash!! with Eneru!!</strong>: Can your crew stand up to divine retribution? </p>    
                </div>             
            </div>
            </br>
             <div id="container">
            <div id="first">
                    <img src="img/characters/f0445.png" id="fortnight1">
                </div>
            <div id="second">
                     <p id="fortinfo"><strong>Supersonic Duck Squad!</strong>:The Supersonic Duck Squadron is conducting their practice exercises on Extra Island! Don’t miss your chance to recruit one of them for your crew!</p>    
                </div>             
            </div>
            </br>
             <div id="container">
            <div id="first">
                    <img src="img/characters/f0231.png" id="fortnight1">
                </div>
            <div id="second">
                     <p id="fortinfo"><strong>Hina’s Resort Getaway</strong>:Black Cage Hina is heading to Extra Island to cash in on some downtime. Do you have what it takes to crash her resort vacation?</p>    
                </div>             
            </div>
            </br>
            <div id="first1">
                    <img src="img/new_characters.png" id="fortnight12">
                </div>
                </br>
                </br>
                </br>
            <div id="container">
            <div id="first">
                    <img src="img/characters/f1353.png" id="fortnight1">
                </div>
            <div id="second">
                     <p id="fortinfo"><strong>Silvers Rayleigh Pirate King Crewman</strong>:Former first mate for the Roger Pirates. He’s retired from the high seas, but is still capable of holding back a Navy admiral with a single sword. After Ace died in the Paramount War, he appeared before Luffy and trained him in controlling his Haki.</p>    
                </div>             
            </div>
            </br>
            <div id="container">
            <div id="first">
                    <img src="img/characters/f1302.png" id="fortnight1">
                </div>
            <div id="second">
                     <p id="fortinfo"><strong>Prisoner: Buggy the Clown Prison Break Alliance</strong>:Captain of the Buggy Pirates. While attempting to escape Impel Down, he got caught up with Luffy and fell into Level 1, the Crimson Hell. It took all of his Chop-Chop powers to escape.</p>    
                </div>             
            </div>
            </br>
            <div id="container">
            <div id="first">
                    <img src="img/characters/f1362.png" id="fortnight1">
                </div>
            <div id="second">
                     <p id="fortinfo"><strong>Roronoa Zoro Straw Hat Pirates: Born Again</strong>:Three-Sword Style Straw Hat Pirates swordsman. He trained under Mihawk, the adversary he swore he’d defeat someday, for two years to improve his skills. That allowed him to defeat the best swordsman on Fish-Man Island, showing just how much he had grown.</p>    
                </div>             
            </div>
            </br>
            <div id="container">
            <div id="first">
                    <img src="img/characters/f0353.png" id="fortnight1">
                </div>
            <div id="second">
                     <p id="fortinfo"><strong>Zephyr Neo Marines Leader</strong>:Leader of the Neo Marines and former Navy Admiral. Goes by the name "Z." Used Armament Haki while in the Navy, and gained the name "Black Arm Zephyr" due to the way his arms turned black when using it.</p>
                </div>             
            </div>
        </div>
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#page-1" data-role="tab" data-icon="grid" class="ui-btn-active">Weekly</a></li>
                <li><a href="#page-2" data-role="tab" data-icon="grid">Units</a></li>
                <li><a href="#page-3" data-role="tab" data-icon="grid">Team Generator</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="page-2" data-role="page">
  <a href="index.php"><img id="logo" src="img/optclogo.png"></a>
    <div data-role="header">
        <a href="index.php" data-icon="arrow-l" data-iconpos="left" data-rel="back" data-transition="slide" data-direction="reverse">Back</a>
        <h1>Units</h1>
    </div>
    <div id=content data-role="content">
        <p>Units</p>
        <?php
$mysqli = new mysqli("localhost", "root", "", "optc1");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$path = "img/characters/";
//            $files = scandir($path);
 //           foreach ($files as &$value) {
    $sql = "SELECT * FROM `characters`";
    $result = $mysqli -> query ($sql);
    while ( $data = $result -> fetch_assoc())
    {      
        echo '<a href="# ">';  
        echo "<img src='" .$path ."/"  .$data ['image']."' ></a>";

    }

?>
    </div>
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#page-1" data-role="tab" data-icon="grid">Weekly</a></li>
                <li><a href="#page-2" data-role="tab" data-icon="grid" class="ui-btn-active">Units</a></li>
                <li><a href="#page-3" data-role="tab" data-icon="grid">Team Generator</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="page-3" data-role="page">
<a href="index.php"><img id="logo" src="img/optclogo.png"></a>
    <div data-role="header">
        <a href="index.php" data-icon="arrow-l" data-iconpos="left" data-rel="back" data-transition="slide" data-direction="reverse">Back</a>
        <h1>Sugofest</h1>
    </div>
    <div id=content2 data-role="content">
        <h3>Rules!</h3>
        <p>You roll one time to get your team!</p>
        <p>You can roll again if you captain is a : penguin, crab, dragon, seahorse,lobster or turtle</p>
        <p>You keep rolling till u got a character u got, after that u go on to the next sub</p>
        <p>You have to use the evolved/unevolved card of that character if you evolved him or havent yet</p>
        <p id="Captain">Captain</p>
           <?php

                $dir = "img/characters";
                $images = scandir($dir);
                $i = rand(2, sizeof($images)-1);
                $a = rand(3, sizeof($images)-1);
                $b = rand(4, sizeof($images)-1);
                $c = rand(6, sizeof($images)-1);
                $d = rand(5, sizeof($images)-1);
            ?>
        <div id="div1-wrapper"> 
                <div id="div1"> 
                <img src="img/characters/<?php echo $images[$i]; ?>" alt="" />
        </div> 
            
                </div> 
                <button type="button" id="btn_click" /> Generate a new leader! </button>
             </br>
             <h3>Subs</h3>
        <div id="div2-wrapper" >
            <div id="div2">    
            <img src="img/characters/<?php echo $images[$a]; ?>" alt="" />
            </div>
            </div>
            <button type="button" id="btn_click1" /> Generate a new sub </button>
            <div id="div3-wrapper" >
            <div id="div3">
            <img src="img/characters/<?php echo $images[$b]; ?>" alt="" />
            </div>
            </div>
            <button type="button" id="btn_click2" /> Generate new a sub </button>
            <div id="div4-wrapper" >
            <div id="div4">
            <img src="img/characters/<?php echo $images[$c]; ?>" alt="" />
            </div>
            </div>
            <button type="button" id="btn_click3" /> Generate new a sub </button>
            <div id="div5-wrapper" >
            <div id="div5">
            <img src="img/characters/<?php echo $images[$d]; ?>" alt="" />
            </div>
            </div>
            <button type="button" id="btn_click4" /> Generate new a sub </button>
            </div>
    </div>
    
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#page-1" data-role="tab" data-icon="grid">Weekly</a></li>
                <li><a href="#page-2" data-role="tab" data-icon="grid">Units</a></li>
                <li><a href="#page-3" data-role="tab" data-icon="grid" class="ui-btn-active">Team Generator</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>