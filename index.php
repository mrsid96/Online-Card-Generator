<?php
require_once 'myClass.php';
$db = new myClass();
$hny = array("May each day of the upcoming year bring happiness, excitement and sweet surprises on your doorstep! Wishing you and all your dear ones a fabulous New Year.","Forget all the pain, sorrows and failures of the past year. Welcome this year with a true and big smile. Happy New Year!","The New Year is the perfect time to unfold new horizons and realizing all dreams. Rediscover the strength and courage that lies within you and continue to move forward.","May you be blessed this new year with inner peace, true love and unconditioned joy! Happy New Year!","On the New Year, we look back on all the warm memories, feel proud of our achievements and take a lesson from our previous mistakes. Have a year filled with endless fun and laugher.","Prior to the sunrise of the first sun of 2017, let me paint all the rays with blessings of success and happiness for you. Here’s wishing you a wonderful New Year!","As we enter this New Year together, let’s promise to always be there for each other and rise above every fall and shortcoming. Happy New Year!","When you are on the road to success, the most important rule is to keep going forward and never look back. May you reach your goal and have a worthwhile journey!","In this New Year, let’s make a promise to oneself. A promise to be a better human being, a better family person and most importantly a better citizen for our country.","Nights are dark but days are bright, keep your head and heart in a place that’s right. Don’t get sad as it’s almost near. Yes! We are talking about an upcoming New Year.","My good wishes for you are just not confined to the upcoming year but for many more years to come. Have a rocking New Year!","2016 is going out… New Year 2017 is coming in! Do a twist turn, a turn and dance all night long. Wishing you 365 days of total fun and enjoyment.","If you are happy, celebrate this New Year with a smile on your face. If you are not happy, still do so to make your near and dear ones smile this New Year.","There are things that are left undone or some things left unsaid but what can’t be left undone is wishing you a happy New Year.","Be grateful that you could see a New Year in your life again. Learn from your past flaws and take on the world in high spirits!");

$mc = array("Christmas brings family and friends together; it helps us appreciate the love in our lives we can often take for granted. May the true meaning of the holiday season fill your heart and home with many blessings.","May this holiday season sparkle and shine, may all of your wishes and dreams come true, and may you feel this happiness all year round.","During this season of giving, let us take time to slow down and enjoy the simple things. May this wonderful time of the year touch your heart in a special way. Wishing you much happiness today and throughout the New Year.","Having you as my friend makes me feel as if it is Christmas every day. The warmth and comfort that comes with this season reminds me of you.","Christmas is the season for peace, joy and fellowship with family and friends. May the yuletide spirit fill your heart and home with an abundance of mercy, contentment, laughter and harmony.","It is the season for giving and remembering and sharing the love. Christmas is a time when we take stock of our blessings and reach out to those who have touched our lives. Thank you for being such a wonderful friend/sibling.","The best of the Christmas season to you.May the message of Christmas fill your life with joy and peace. Best wishes to you and your family during this holiday season.","Wishing you peace, joy, and all the best this wonderful holiday has to offer. May this incredible time of giving and spending time with family bring you joy that lasts throughout the year.","Take time during the rush of the holidays to enjoy the things in life that really matter. Take in the serene moments spent with friends and loved ones, and may the wonder of Christmas surround you throughout the holiday season.","During this time of faith and family, may the true meaning of Christmas fill you with joy. Wishing you a Merry Christmas and a blessed New Year.");

$td = array("Dear Teacher,Thanks for inspiring hope in me;Igniting my imagination;And instilling in me – a love of learning.Happy Teacher’s Day!","You Guided Me When I Was Lost You Suported Me When I Was Weak, You Have Enlightened me all through..","May not say it always. But, I mean it whenever I say it. Thank You Teacher For all the things you have done for me.Happy Teachers Day!","You are not just a teacher, But a true inspiration to me. You did not just do your job, But a lot more than this. Thank you teacher and have a wonder Teacher’s Day","For Teaching Children Lessons, To Help Them As They Grow, Let This Gift Remind You, You’re The Best Teacher We Know!");


$hbd = array("Celebrate your birthday today. Celebrate being Happy every day.","May your birthday and every day be filled with the warmth of sunshine, the happiness of smiles, the sounds of laughter, the feeling of love and the sharing of good cheer.","I hope you have a wonderful day and that the year ahead is filled with much love, many wonderful surprises and gives you lasting memories that you will cherish in all the days ahead. Happy Birthday.","They say that you can count your true friends on 1 hand - but not the candles on your birthday cake!","May your birthday be filled with many happy hours and your life with many happy birthdays. HAPPY BIRTHDAY !!","So many candles for such a small cake? Happy Birthday.","I hope your special day will bring you lots of happiness, love and fun. You deserve them a lot. Enjoy!","Have a wonderful birthday. I wish your every day to be filled with lots of love, laughter, happiness and the warmth of sunshine.","May your coming year surprise you with the happiness of smiles, the feeling of love and so on. I hope you will find plenty of sweet memories to cherish forever. Happy birthday.","On your special day, I wish you good luck. I hope this wonderful day will fill up your heart with joy and blessings. Have a fantastic birthday, celebrate the happiness on every day of your life. Happy Birthday!!","May this birthday be filled with lots of happy hours and also your life with many happy birthdays, that are yet to come. Happy birthday.","Let’s light the candles and celebrate this special day of your life. Happy birthday.","You are very special and that’s why you need to float with lots of smiles on your lovely face. Happy birthday.");

$vd = array("A day without you in my life should never come and even if it does, let that be the last day of my life.","A day without you is a day without sun, a night without you is a night without moon; a life without you is a life without life.","As busy as we get, we need to be reminded that we are still sweethearts. Valentine’s Day is a good day for me to stop and realize how wonderful you make me feel. Happy Valentine’s Day.","Cupid shoots well for me! He hit you and me with perfect aim.","Love is too weak a word for what I feel for you. One life is too small a time to express how madly I am in love with you.","Every time I see you, I feel a little flame in my heart, that lights up, because… I LOVE YOU!","You walked in, and the sun broke through the clouds. Suddenly, life was worth living, and it became this big adventure. Thank you for being part of my life.","Curved high on a mountain, covered deep in dew, I saw these words… I LOVE YOU!","Even though Valentine’s day costs a lot more with a girlfriend, you are the one girl in this world who is totally worth it.","Every moment I am not without you, my tears fill the ocean blue…By mine, my love, forever.","I do not think often, I do not think much, but when I do, I think of you only.","I don’t just love you. I love that I get to have you as my Valentine. Happy Valentine’s Day!","I feel the happiest when I think about you, coz I love you.","I love you today, I love you tomorrow, and I love you forever…till I die…","I loved you then and I love you now. But I am least bothered as I can’t imagine doing anything else.","I loved you when the sun set yesterday, I love you when the moon comes tonight and I will love when the sun rises tomorrow.");

if(isset($_GET['msg']) && isset($_GET['name']) && isset($_GET['type']))
{
  //echo "<script>alert('".$_GET['name'],$_GET['type'],$_GET['msg']."');</script>";
  $db->add($_GET['name'],$_GET['msg'],$_GET['type']);
}
else if(isset($_GET['gid']))
{
  $data = $db->getD($_GET['gid']);
}
else if(isset($_GET['name']) && isset($_GET['type']))
{
  $name=$_GET['name'];
  $type=$_GET['type'];
}
?>
<html>
  <head>
      <title>Online Card Service</title>
      <meta name="description" content="New way of wishing your dear ones, This is an online card generator. Just enter your name, an occation and either an auto generated or a personalized message, you are good to go.">
      <meta name="keywords" content="Online Greetings, Online Happy New year card, Online Happy Birthday Card, Online Valentine day card, Online Teacher Day Card, Happy New year cards, Happy Birthday cards, Valentine Day cards, Teacher day card, Online Christmas Cards, Christmas cards">
      <meta name="author" content="Sidharth Patnaik">
      <meta property="og:title" content="Online Greeting Service" />
      <meta property="og:image" content="img/e-card.jpg">
      <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="shortcut icon" type="image/png" href="img/fav.png"/>
      <script type="text/javascript" src='https://haroen.me/floating.js/floating.js'></script>
      <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Concert+One);
        @import url(http://fonts.googleapis.com/css?family=Oleo+Script);
        body{
          background-image: url('img/xbg.png')
        }
        .hex {
          background: rgba(255, 255, 255, 0.32);
          margin-top: 20px;
          padding: 10px;
        }
        .myGlow
        {
          color: #fff;
          text-shadow: #fff 0 0 10px;
          -webkit-animation-duration: 1s;
          -webkit-animation-name: myglow;
          -webkit-animation-direction: alternate;
          -webkit-animation-iteration-count: infinite;
          animation-duration: 1s;
          animation-name: myglow;
          animation-direction: alternate;
          animation-iteration-count: infinite;
        }
        
        .myWooble {
        animation:wobble 5s ease-in-out infinite;
        transform-origin:center center;
        transform-style:preserve-3d;
        text-align:center; 
        }
        .myWooble h2{
            animation:glow 15s ease-in-out infinite;
            font:900 4em 'Concert One', sans-serif;
            line-height:1.0;
        }
        .myText {
          margin-top: 30px;
          font:400 1.5em 'Oleo Script', sans-serif;
          line-height:1.0;
        }
        @keyframes wobble {
          0%,100%{ transform:rotate3d(1,1,0,40deg); }
          25%{ transform:rotate3d(-1,1,0,40deg); }
          50%{ transform:rotate3d(-1,-1,0,40deg); }
          75%{ transform:rotate3d(1,-1,0,40deg); }
        }
        @keyframes glow {
          0%,100%{ text-shadow:0 0 30px red; }
          25%{ text-shadow:0 0 30px orange; }
          50%{ text-shadow:0 0 30px forestgreen; }
          75%{ text-shadow:0 0 30px cyan; }
        }
         @-webkit-keyframes myglow {
        from { text-shadow: 0 0 0px white; }
        to { text-shadow: 0 0 20px white; }
        }
        #xpand,#toggleOff{
          display: none;
        }
      </style>
      <script type="text/javascript">
        function xpandFunc(a)
        {
            if(a==1)
            {
                document.getElementById('xpand').style.display='block';
                document.getElementById('toggleOff').style.display='block';
                document.getElementById('toggleOn').style.display='none';
            }
            else
            {
                document.getElementById('xpand').style.display='none';
                document.getElementById('toggleOff').style.display='none';
                document.getElementById('toggleOn').style.display='block';
            }
        }
      </script>
      <script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="bootstrap/js/whatsapp-button.js";h.appendChild(s);}</script>
      <!-- Start of StatCounter Code for Default Guide -->
      <script type="text/javascript">
        var sc_project=11186821; 
        var sc_invisible=1; 
        var sc_security="cac6dafd"; 
        var scJsHost = (("https:" == document.location.protocol) ?
        "https://secure." : "http://www.");
        document.write("<sc"+"ript type='text/javascript' src='" +
        scJsHost+
        "statcounter.com/counter/counter.js'></"+"script>");
      </script>
      <!-- End of StatCounter Code for Default Guide -->
  </head>
  <body>
    <div class="container" id="myLogo" style="margin-top:5%;text-align: center;">
      <img src="img/logo.png" class="img-responsive">
    </div>
    <div class="container hex">
        <div class="row" id="panel">
          <?php
            if(isset($data) && count($data)>0)
            {
              echo "<script>document.getElementById('panel').style.display='none';</script>";
              echo "<script>document.getElementById('myLogo').style.display='none';</script>";
            }
          ?>
          <div class="col-sm-4">
            <div class='panel panel-primary'>
              <div class='panel-heading'>
                <h3 class='panel-title' style="text-align:center;">
                  Give Your Details
                </h3>
              </div>
              <div class='panel-body' id="pbody">
                <form class="form-horizontal" method="get" action="<?php $_PHP_SELF ?>">
                  <div class="form-group">
                    <div class="col-sm-12 off-set-2">
                      <input type="text" class="form-control" required name="name" placeholder="Enter Your Name" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12 off-set-2">
                        <select class="form-control" name="type">
                          <option value ="0" selected>Select The Type</option>
                          <option value ="1">Happy New Year</option>
                          <option value ="2">Merry Christmas</option>
                          <option value ="3">Happy Birthday</option>
                          <option value ="4">Valentine's Day</option>
                          <option value ="5">Teachers's Day</option>
                        </select>
                    </div>
                  </div>
                  <input type="submit" style="width:100%" class='btn btn-primary' value="Done, Generate Message !" >
                </form>
              </div>
            </div>
          </div>
          <div class ="col-sm-8">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Online Cards -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-1310637855599376"
                 data-ad-slot="3241633846"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <div class='panel panel-primary'>
              <div class='panel-heading'>
                <h3 class='panel-title' style="text-align:center;">
                  Generated Message
                </h3>
              </div>
              <div class='panel-body'>
                <form class="form-horizontal" method="get" action="<?php $_PHP_SELF ?>">
                <?php
                  if(isset($name) && isset($type))
                  {
                    //$msg=""
                    echo "<script>document.getElementById('pbody').innerHTML='Already Submited ".explode(' ',trim($name))[0].".<br/>Now either use the generated message or enter your personalized message...';</script>";
                    switch ($type) {
                      case 0:
                        echo "<script>alert('Error, Please Select a type !');window.open('index.php','_parent');</script>";
                        break;
                      case 1:
                        $msg = $hny[rand(0,count($hny)-1)];
                        break;
                      case 2:
                        $msg = $mc[rand(0,count($mc)-1)];
                        break;
                      case 3:
                        $msg = $hbd[rand(0,count($hbd)-1)];
                        break;
                      case 4:
                        $msg = $vd[rand(0,count($vd)-1)];
                        break;
                      case 5:
                        $msg = $td[rand(0,count($td)-1)];
                        break;
                    }
                    ?>
                  <div class="form-group">
                    <div class="col-sm-12 off-set-2">
                      <textarea class="form-control" name="msg" placeholder="Enter Your Message"><?php echo $msg;?></textarea>  
                    </div>
                  </div>
                  <input type="hidden" name="name" value="<?php echo $name;?>">
                  <input type="hidden" name="type" value="<?php echo $type;?>">
                  <input type="submit" style="width:100%" class='btn btn-primary' value="Done, Generate Card !" >
                </form>
                <?php
                  }
                  else
                  {
                ?>
                  <h3 style="text-align:center;">Please Enter Your Name and select type to generate message !</h3>
                <?php 
                  } 
                ?>
              </div>
            </div>
          </div>
        </div>
        <?php 
          if(isset($data) && count($data)>0)
          {
            //echo count($data),$data["msg"],$data['uid'],$data['name'],$data['type'];
            switch ($data['type']) {
              case 1:
                $scr="floating({
                        content: '😇',
                        number: 3,
                        duration: 11
                      });
                      floating({
                        content: '🌟',
                        number: 5,
                        duration: 8
                      });";
                $topic="Happy New</br>Year";
                break;
              case 2:
                $scr="floating({
                        content: '🌟',
                        number: 5,
                        duration: 10
                      });
                      floating({
                        content: '😊',
                        number: 5,
                        duration: 7
                      });";
                $topic="Merry Christmas";
                break;
              case 3:
                $scr="floating({
                  content: '😝',
                  number: 5,
                  duration: 11
                });
                floating({
                  content: '😈',
                  number: 5,
                  duration: 7
                });";
                $topic="Happy<br/>Birthday";
                break;
              case 4:
                $scr="floating({
                  content: '😍',
                  number: 5,
                  duration: 7
                });
                floating({
                  content: '😗',
                  number: 5,
                  duration: 10
                });";
                $topic="Happy Valentine's</br>Day, Love!";
                break;
              case 5:
                $scr="floating({
                  content: '😇',
                  number: 3,
                  duration: 11
                });floating({
                  content: '😊',
                  number: 5,
                  duration: 9
                });";
                $topic="Happy Teacher’s</br>Day";
                break;
         }
            $urlShare="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            ?>
          <script>
            <?php echo $scr; ?>
          </script>
          <div class="row" style="background-image:url('img/bg.png');color:white;padding:10px;">
            <div class='col-sm-12'>
              <h2 style="text-align:center; font-size: 4em;">"<?php echo explode(' ',trim($data['name']))[0]; ?>"</h2>
              <h4 class="myGlow" style="text-align:center;">Wishing You</h4>
              <div class="myWooble"><h2><?php echo $topic;?></h2></div>
              <p class="myText"><?php echo $data['msg'];?></p>
              <h3 style="text-align: right;">-<?php echo $data['name'];?></h3>
            </div>
          </div>
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- Online Cards -->
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-1310637855599376"
               data-ad-slot="3241633846"
               data-ad-format="auto"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
            <div class="panel panel-primary panel-heading" onclick="xpandFunc(1)" id="toggleOn" style="text-align:center;">Share this card [Show Options]</div>
            <div class="panel panel-primary panel-heading" onclick="xpandFunc(2)" id="toggleOff" style="text-align:center;">Share this card [Hide Options]</div>
            <div class="row" id="xpand" style="background-image:url('img/bg.png');color:white;padding:10px;">
                <div class='col-sm-8'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                          <h3 class='panel-title' style="text-align:center;">
                            Share This Card With friends
                          </h3>
                        </div>
                      <div class='panel-body'>
                        <center>
                            <div class="form-group">
                            <textarea class="js-cuttextarea form-control" ><?php echo $urlShare;?></textarea>

                            <p><div class="js-textareacutbtn btn btn-default" disable>Copy Shareable Link</div></p>
                            <b style="color:black;">-- Or --</b><br/>
                            <a href="whatsapp://send" data-text="An Online Card From <?php echo explode(' ',trim($data['name']))[0]; ?>:" data-href="" class="wa_btn wa_btn_s" >Whatsapp</a>
                            <script type="text/javascript">
                                  var cutTextareaBtn = document.querySelector('.js-textareacutbtn');

                                cutTextareaBtn.addEventListener('click', function(event) {  
                                  var cutTextarea = document.querySelector('.js-cuttextarea');  
                                  cutTextarea.select();

                                  try {  
                                    var successful = document.execCommand('copy');  
                                    var msg = successful ? 'successful' : 'unsuccessful';  
                                    alert('Copied successfully !');  
                                  } catch(err) {  
                                    console.log('Oops, unable to cut');  
                                  }  
                                }); 
                            </script>
                        </center>
                    </div>
                  </div>
                </div>
                <div class='col-sm-4'>
                  <div class='panel panel-primary'>
                    <div class='panel-heading'>
                      <h3 class='panel-title' style="text-align:center;">
                        Create Your Card
                      </h3>
                    </div>
                    <div class='panel-body' id="pbody">
                      <form class="form-horizontal" method="get" action="<?php $_PHP_SELF ?>">
                        <div class="form-group">
                           <input type="text" class="form-control" required name="name" placeholder="Enter Your Name" >
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="type">
                              <option value ="0" selected>Select The Type</option>
                              <option value ="1">Happy New Year</option>
                              <option value ="2">Merry Christmas</option>
                              <option value ="3">Happy Birthday</option>
                              <option value ="4">Valentine's Day</option>
                              <option value ="5">Teachers's Day</option>
                            </select>
                        </div>
                        <input type="submit" style="width:100%" class='btn btn-primary' value="Done, Generate Message !" >
                      </form>
                    </div>
                  </div>
                </div>
            </div>
              
          <br/>
        <?php
          }
        ?>
        <div class="well" style='text-align: center;'>Powered by <a href="http://dproguru.com">dProGuru</a></div>
    </div>
  </body>
</html>