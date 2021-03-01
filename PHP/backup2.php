<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body{
                background-image: url("background.png");
                width:80%;
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
                
            }
            #search input{
                border:none;
                opacity:0.7;
                border-radius:5px;
            }
            #bdy
            {
                
                margin-top:20px;
                
            }
            
            #bdy2{
                background-color:#00A185;
                
                border-radius:2px;
                height:100%;
            }
            #bdy2 ul{
                list-style:none;
                padding:10px;
                
                font-size:20px;
                
            }
            #bdy2_hd{
                color:white;
                font-weight:bold;
                font-size:24px;
                padding:10px;
            }
            #bdy2 ul li{
                
                font-size:15px;
                
                color:white;
                font-weight:bold;
                
            }
            #btm_li{
                background-color: #00816B;
                padding:2px;
                margin-left:-15px;
                margin-right:-15px;
                
            }
            #btm_li a{
                text-decoration:none;
                color:white;
                font-weight:bold;
                font-size:15px;
            }
            #content
            {
                background-color:white;
                padding:10px;
                margin-right:-1px;
            }
            #colm2
            {
                background-color:#3E97BC;
            }
            #colm2 ul{
                list-style: none;
            }
           
        </style>
    </head>
<body>
    <div class="container-fluid" id="main_body">  
        <div class="row" id="logo">
            <div class="col-sm-4"><img src="logo.png" width="auto" height="auto"></div>
        </div>
        
        <div class="row" id="search">
            <div class="col-lg-9 col-md-8 col-sm-6"></div>
            <div class="col-lg-3 col-md-4 col-sm-6"><input type="text" placeholder="Search Site">&#128269;</div>
        </div>
        
        <div class="row" id="menu">
            <div class="col-sm-2"><p><a href="#">Home</a></p></div>
            <div class="col-sm-2"><p><a href="#">About us</a></p></div>
            <div class="col-sm-2"><p><a href="#">FPSA</a></p></div>
            <div class="col-sm-2"><p><a href="#">News</a></p></div>
            <div class="col-sm-2"><p><a href="#">Parents</a></p></div>
            <div class="col-sm-2"><p><a href="#">Contact</a></p></div>  
        </div>
        
        <div class="row" id="bdy">
            <div class="col-sm-10 col-md-8 col-lg-9" id="bdy1"><img src="1.jpg"
                                         width="100%" height="100%"></div>
            
            
            <div class="col-sm-2 col-md-4 col-lg-3" id="bdy2">
                <?php echo"<p id='bdy2_hd'>Latest News</p>";?>
                <ul>
                    <li style="margin-bottom:20px;"><?php echo"Covid-19 Updates"; ?></li>
                    <li style="margin-bottom:20px;"><?php echo"Year 5 launch new APP"?></li>
                    <li style="margin-bottom:20px;"><?php echo"David Beckham Visits Holly Grange!"?></li>
                </ul>
                <div class="row" id="btm_li">
                    <div class="col-sm-5"><a href="#">All News</a></div>
                    <div class="col-sm-6"><a href="#">NewsLetters</a></div>
                    <div class="col-sm-1"></div>
                </div>
                    
            </div>
        </div>
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-8 col-md-8 col-lg-9">
                <div id="content">
                <?php echo"<h1 style='color: #00816B;'>Welcome to Holly Grange Primary School</h1>";?>
                <?php echo"Now Bootstrap is going to say "
                . "at the small size, look at classes with -sm- in them and use those. At the medium size, "
                        . "look at classes with -md- in them and use those. At the large size, look at classes with the word -lg- in them and use those.
                        The following example will result in a 25%/75% split on small devices, 
                        a 50%/50% split on medium devices, and a 33%/66% split on large devices:"?>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-3" id="colm2">
                <?php echo"<h3 style='color:white'>Diary Dates</h3>"?>
                <ul>
                    <li><?php echo"<h1>10Jan</h1> Morbi varlus commodo pulvin nunc temper"?></li>
                    <li><?php echo"<h1>12Jan</h1> Morbi varlus commodo pulvin nunc temper"?></li>
                    <li><?php echo"<h1>14Jan</h1> Morbi varlus commodo pulvin nunc temper"?></li>
                </ul>
                <div class="row" style="background-color:#347999">
                    <div class="col-sm-6"><?php echo"<a href='#'style='text-decoration:none;color:white;font-size:15px;font-weight:bold;'>More dates</a>"?></div>
                    <div class="col-sm-5"><?php echo"<a href='#' style='text-decoration:none;color:white;"
                    . "font-size:15px;font-weight:bold;'>Calender</a>"?></div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
        
    
    </div>
</body>
</html>
