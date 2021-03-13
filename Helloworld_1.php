<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
        <style>
            body{
                background-image: url("background.png");
                width:80%;
                
                
                background-repeat: no-repeat;
                background-size: cover;
                font-family:'Architects Daughter';
            }
            #menu{
                 
                border:1px solid #00A185;
                padding:7px;
                border-radius:5px;
                background-color:#00A185;  
                margin-top:25px;
                
            }
            #menu a{
                font-size:20px;
                color:white;
                font-weight:bold;
            }
            #main_body
            {
                
                margin-left:27%;
            }
            #logo{
                
                margin-top:20px;
                
            }
            #logo img{
                border-radius:5px;
                box-shadow:5px 10px grey;
            }
            #search{
                
                margin-top:15px;
                margin-left:60%;
                
            }
            #search input{
                border:none;
                
                border-radius:5px;
            }
            #content{
                background-color:white;
                padding:10px;
                margin-top:10px;
                
            }
            #ul1{
                background-color:#00A185;
                padding:10px;
            }
            #ul1 ul
            {
                list-style: none;
                padding:0px;
            }
            #ul1 h3{
                color:white;
                font-weight:bold;
            }
            #btm_ul1
            {
              background-color:#077F6A;
              padding:10px;
              
              font-weight:bold;
              font-size:19px;
              
            }
            #btm_ul1 a{
                color:white;
                
            }
            #ul2{
                background-color:#3E97BC;
                padding:10px;
            }
            #ul2 ul{
                list-style:none;
                padding:0px;
            }
            ul li
            {
                color:white;
                font-size:18px;
            }
            
            
           
        </style>
    </head>
<body>
    <div class="container-fluid" id="main_body">  
            <div class="row" id="logo">
                <div class="col-sm-4"><img src="logo.png" width="auto" height="auto"></div>
            </div>
        
            <div class="row" id="search">
                
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <input type="search" placeholder="Search Site">
                    <img src="search.png" height="15px" weidth="15px">  </div>
            </div>
        
            <div class="row" id="menu">
                <div class="col-sm-2"><p><a href="#">Home</a></p></div>
                <div class="col-sm-2"><p><a href="#">About us</a></p></div>
                <div class="col-sm-2"><p><a href="#">FPSA</a></p></div>
                <div class="col-sm-2"><p><a href="#">News</a></p></div>
                <div class="col-sm-2"><p><a href="#">Parents</a></p></div>
                <div class="col-sm-2"><p><a href="#">Contact</a></p></div>  
            </div>
        
        <div class="row" style="margin-top:15px;">
                <div class="col-sm-8 col-md-8 col-lg-9"><img src="1.jpg"
                                             width="100%" height="100%">
                    <div id="content">
                    <?php echo"<h1 style='color: #00816B;'>Welcome to Holly Grange Primary School</h1>";?>
                        <img src="float.png" height="100%" weidth="100%" style="float:left;padding-right:10px;">
                    <?php echo"<p>Now Bootstrap is going to say "
                    . "at the small size, look at classes with -sm- in them and use those. At the medium size, "
                            . "look at classes with -md- in them and use those. At the large size, look at classes with the word -lg- in them and use those.
                            The following example will result in a 25%/75% split on small devices, 
                            a 50%/50% split on medium devices, and a 33%/66% split on large devices:If your server has activated support for PHP you do not need to do anything.

Just create some .php files, place them in your web directory, and the server will automatically parse them for you.

You do not need to compile anything or install any extra tools.

Because PHP is free, most web hosts offer PHP support.The following example will result in a 25%/75% split on small devices, 
                            a 50%/50% split on medium devices, and a 33%/66% split on large devices:If your server has activated support for PHP you do not need to do anything.

Just create some .php files, place them in your web directory, and the server will automatically parse them for you.

You do not need to compile anything or install any extra tools.

Because PHP is free, most web hosts offer PHP support.</p>"?>
                        </div>
                </div>
            
            
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div id="ul1">
                        <?php echo"<h3>Latest News</h3>";?>
                        <ul>
                            <li style="margin-bottom:20px;"><i style='font-size:20px' class='far'>&#xf15c;&ensp;</i><?php echo"Covid-19 Updates"; ?></li>
                            <li style="margin-bottom:20px;"><i style='font-size:20px' class='far'>&#xf15c;&ensp;</i><?php echo"Year 5 launch new APP"?></li>
                            <li style="margin-bottom:20px;"><i style='font-size:20px' class='far'>&#xf15c;&ensp;</i><?php echo"David Beckham Visits Holly Grange!"?></li>
                        </ul>
                    </div>
                        <div id="btm_ul1">
                            <a href="#">All News</a>&emsp;&ensp;
                            <a href="#">NewsLetters</a>
                            
                        </div>
                    
                
                    <div style="margin-top:20px;" id="ul2">
                        <?php echo"<h3 style='color:white;font-weight:bold;'>Diary Dates</h3>"?>
                        <ul>
                            <li><?php echo"<h3>10Jan</h3> Morbi varlus commodo pulvin nunc temper"?></li>
                            <li><?php echo"<h3>12Jan</h3> Morbi varlus commodo pulvin nunc temper"?></li>
                            <li><?php echo"<h3>14Jan</h3> Morbi varlus commodo pulvin nunc temper"?></li>
                        </ul>
                    </div>
                        <div style="background-color:#347999;padding:10px;margin-bottom: 10px;">
                            <?php echo"<a href='#'style='text-decoration:none;color:white;font-size:19px;font-weight:bold;'>More dates</a>"?>
                            &emsp;&ensp;<?php echo"<a href='#' style='text-decoration:none;color:white;font-size:19px;font-weight:bold;'>Calender</a>"?>
                            
                        </div>
                    
                    
                </div>
        </div>
        
        
    
    </div>
</body>
</html>
