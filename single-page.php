<?php 
		include 'config.php';
?>
<! DOCTYPE html>

<html>

    <head>
        
        <title>FFF MP3 | Download songs for free</title>
        
            <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800" rel="stylesheet">
        <link href="css/single-page.css" rel="stylesheet">

        
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/0494cc08f3.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelement-and-player.min.js"></script>
         
    </head>
    
    <body>
        
        <div class="container">
            <div class="nav-wrapper">
                <nav class="navbar navbar-first navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png"></a>
                    <form class="form-inline">
                        <button class="btn btn-top align-middle btn-light" type="button">Home</button>
                        <button class="btn btn-top align-middle btn-light" type="button">Bollywood</button>

                        <ul style="display:inline; margin-bottom:1px;">
                            <li class="social fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                            <li class="social tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                        </ul>
                    </form>

                </nav>
                <nav class="navbar navbar-second navbar-light bg-light">
                    <form class="mx-2 my-auto d-inline w-100">
                       <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
                          <input type="text" class="form-control inputfield" placeholder="Search..">
                           <span class="input-group-btn">
                           <button class="btn btn-light searchbtn" type="button">Search</button>
                           </span>
                        </div>
                    </form>
                </nav>
            </div>
            
            <div class="row margin">
                <div class="col-md-3">
                    <div class="categories-head">
                        <h4>Categories</h4>
                    </div>
                    <div class="categories-body">
                        <ul>
                            <li class="li-sidebar"><a class="text-muted" href="#">Bollywood Albums</a></li>
                            <li class="li-sidebar"><a class="text-muted">Bollywood Singles</a></li>
                            <li class="li-sidebar"><a class="text-muted">Pakistani Songs</a></li>
                            <li class="li-sidebar"><a class="text-muted">Punjabi Songs</a></li>
                        </ul>
                    </div>
                    
                    <div class="categories-head">
                        <h4>Quick Links</h4>
                    </div>
                    <div class="categories-body">
                        <ul>
                            <li class="li-sidebar"><a class="text-muted" href="#">Privacy Policy</a></li>
                            <li class="li-sidebar"><a class="text-muted">DCMA</a></li>
                            <li class="li-sidebar"><a class="text-muted">Contact Us</a></li>
                            <li class="li-sidebar"><a class="text-muted">Feedbacks &amp; Complains</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                	<?php
                		if (isset($_GET['get_id'])) {
                		
                		
							$get = "SELECT * FROM latest_single WHERE name_artist='$_GET[get_id]'  ";
							$get_query = mysqli_query($db,$get);
							while ($row=mysqli_fetch_assoc($get_query)) {
								echo "
								 <div class='row row-wrapper'>
                        <div class='col-md-12 album-head'><h4>$row[name_artist]</h4></div>
                    </div>
                    
                    <div class='row row-wrapper'>
                        <div class='col-md-4'>
                            <div class='img-wrapper'><img class='album-img' src='images/$row[single_pic]'></div>
                        </div>
                    
                        <div class='col-md-8'>
                            <div class='border-wrapper margin-top'>
                                <ul class='ul-table'>
                                    <li class='li-table'>
                                        <div><span class='property col-sm-6'>Song</span><span class='value col-sm-6'>$row[single_name]</span></div>
                                    </li>
                                    <li class='li-table'>
                                        <div><span class='property col-sm-6'>Artist </span><span class='value col-sm-6'>$row[single_artist]</span></div>
                                    </li>
                                    <li class='li-table1'>
                                        <div><span class='property col-sm-6'>Released </span><span class='value col-sm-6'>$row[release_date]</span></div>
                                    </li>
                                </ul>
                            </div>
                            <div class='border-wrapper'>
                                <ul class='ul-table'>
                                    <li class='li-table1'>
                                        <div><span class='col-sm-6'><a href='music/$row[single_song]' download>Download Song</a> </span></div>
                                    </li>
                                </ul>
                            </div>
                            <div class='border-wrapper'>
                                <ul class='ul-table'>
                                    <li class='li-table1'>
                                        <audio controls>
                                          <source src='music/$row[single_song]' type='audio/mpeg'>
                                        Your browser does not support the audio element.
                                        </audio>
                                    </li>
                                </ul>
                          
            
								";
							} echo "  </div>
                        </div>
                    </div>
                        
                </div>
            </div>";
						}	                	 
                	?>
                   
            <div class="row margin footer">
                <div class="madeby"><p> Made by </p></div>
                <a href="http://umerusman.tk" target="_blank"><div> 
                    <svg class="imgGlobal" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 425 424"><defs><style>.cls-1{fill:url(#radial-gradient);}.cls-2{fill:none;stroke:#000;stroke-width:10px;}.cls-2,.cls-5{stroke-miterlimit:10;}.cls-3{fill:#b3b3b3;}.cls-4{fill:url(#radial-gradient-2);}.cls-5{fill:#ccc;stroke:#b3b3b3;}</style><radialGradient id="radial-gradient" cx="1044" cy="539" r="180" gradientUnits="userSpaceOnUse"><stop offset="0.03" stop-color="#4d4d4d"/><stop offset="0.18" stop-color="#4d4d4d"/><stop offset="0.32" stop-color="#4d4d4d"/><stop offset="0.99" stop-color="#1a1a1a"/></radialGradient><radialGradient id="radial-gradient-2" cx="357.5" cy="67.5" r="67.5" xlink:href="#radial-gradient"/></defs><title>u-square</title><path class="cls-1" d="M1152,402V359H881a17,17,0,0,0-17,17V702a17,17,0,0,0,17,17h326a17,17,0,0,0,17-17V432h-42A30.09,30.09,0,0,1,1152,402Z" transform="translate(-864 -295)"/><path class="cls-2" d="M1135,811" transform="translate(-864 -295)"/><path class="cls-2" d="M776,811" transform="translate(-864 -295)"/><path class="cls-3" d="M1135,657H953a26,26,0,0,1-26-26V449a26,26,0,0,1,26-26h182a26,26,0,0,1,26,26V631A26,26,0,0,1,1135,657ZM953,441a8,8,0,0,0-8,8V631a8,8,0,0,0,8,8h182a8,8,0,0,0,8-8V449a8,8,0,0,0-8-8Z" transform="translate(-864 -295)"/><path class="cls-3" d="M1079,657h-74.37l-1-.24A69.46,69.46,0,0,1,978.72,644c-11.28-9-24.72-25.66-24.72-54V480c0-11.38,10.08-21,22-21h29a22,22,0,0,1,22,22v62.13a47.36,47.36,0,0,0,24,41.18l3.7,2.09a64.74,64.74,0,0,0,6.26,3.14V481a22,22,0,0,1,22-22h28.88a22,22,0,0,1,22,22.2l-.6,64.62a64.51,64.51,0,0,1-29.38,53.73c-8.91,5.77-17,9.22-24.9,10.36Zm-72.14-18H1061V608.61a69.24,69.24,0,0,1-15.11-6.53l-3.7-2.09a65.39,65.39,0,0,1-33.2-56.86V481a4,4,0,0,0-4-4H976c-2.35,0-4,1.95-4,3V590C972,626.91,1001.19,637.32,1006.86,639ZM1083,477a4,4,0,0,0-4,4V591.6c4.6-1.1,9.43-3.48,15.1-7.16a46,46,0,0,0,21.18-38.79l.6-64.62a4,4,0,0,0-4-4Z" transform="translate(-864 -295)"/><rect class="cls-4" x="290" width="135" height="135" rx="30" ry="30"/><path class="cls-5" d="M1186.92,419.88a21.87,21.87,0,0,1-1.74-4.35,14.89,14.89,0,0,1-.55-3.87q0-8.22,16.52-20.23,4.58-3.32,7.11-5.22,18.26-13.83,26.67-25.05t8.42-21.73q0-9.25-6.24-15t-16.44-5.73a24.05,24.05,0,0,0-13.83,3.91q-5.77,3.91-10.12,12.29a16.44,16.44,0,0,1-5-4.66,9.63,9.63,0,0,1-1.66-5.37q0-8.14,8.89-13.95t22.17-5.81q16.6,0,26.91,9.25t10.31,23.95q0,15.1-13.67,31.3t-43.39,36.2q2.21.08,6,.16,6.8.16,8.85.16a184.85,184.85,0,0,0,25.13-1.38q9.72-1.38,14.7-4.23a34.73,34.73,0,0,1,1.54,5.1,21.89,21.89,0,0,1,.51,4.54q0,5.22-3.32,7.31t-12.17,2.09q-6.72,0-18.85-.4t-17.58-.4q-5.53,0-10.27.28T1186.92,419.88Z" transform="translate(-864 -295)"/></svg>
                </div></a>
                <div class="madeby2"><p> Copyrights &copy; 2017 FFFMp3, All Right Reserved. </p></div>
            </div>
            
            </div>
    </body>
    
</html>