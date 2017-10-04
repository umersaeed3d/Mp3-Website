<?php   
        include('session.php'); 
?>        
<?php
    include('config.php');
    
    $uploadOk = 1;
    $songerror = "";
    $songerror1 = "";
    $songerror2 = "";
    $songerror3 = "";
    $songerror4 = "";
    $songerror5 = "";
    $songerror6 = "";
    $file = "";           
    $file2 = "";           
if (isset($_POST['upload_single'])) {

     
    $nameartist = mysqli_real_escape_string($db,strip_tags($_POST['name_artist']));
    $singlename =  mysqli_real_escape_string($db,strip_tags($_POST['single_name']));
    $singleartist =  mysqli_real_escape_string($db,strip_tags($_POST['single_artist']));
    $release_date =  mysqli_real_escape_string($db,strip_tags($_POST['release_date']));
    $new_tag =  mysqli_real_escape_string($db,strip_tags($_POST['new_tag']));

    $singlepicname = $_FILES['single_pic']['name'];
    $singlepictmpname = $_FILES['single_pic']['tmp_name'];
    $targetsinglefile = "images/{$singlepicname}";
    $imageFileType = pathinfo($targetsinglefile,PATHINFO_EXTENSION);

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $file = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
        }

    $singlesong = $_FILES['single_song']['name'];
    $singlesongtmpname = $_FILES['single_song']['tmp_name'];
    $targetsong = 'music/';
    $targetsongfile = $targetsong . basename($_FILES['single_song']['name']);

   
        
            if ($uploadOk == 0) {
                echo "<script>alert('Sorry, your file was not uploaded.');</script>";
            // if everything is ok, try to upload file
            } else {
    $single_ins = "INSERT INTO latest_single(name_artist, single_name, single_artist,release_date,single_pic,single_song,new_tag) VALUES ('$nameartist' , '$singlename' , '$singleartist', '$release_date', '$singlepicname' , '$singlesong' , '$new_tag')";
    $single_query = mysqli_query($db,$single_ins) or die(mysqli_error($db));
                if ($single_query) {
                                   
                    if (move_uploaded_file($singlepictmpname, $targetsinglefile)) {
                       $file =  "The image has been uploaded.";  
                     } else {
                         $file = "Sorry, there was an error uploading your file.";
                        }
                   if ( move_uploaded_file($singlesongtmpname, $targetsongfile) or die(mysqli_error($db))) {
                         $songerror = "The song has been uploaded";
                     } else {
                            $songerror = "Sorry, there was an error uploading your file.";        
                        }
                }
                
               }
                                       
}  


if (isset($_POST['upload_album'])) {

     
    $albumname = mysqli_real_escape_string($db,strip_tags($_POST['albumname']));
    $albumdate =  mysqli_real_escape_string($db,strip_tags($_POST['albumreleasedate']));
    $albumcast =  mysqli_real_escape_string($db,strip_tags($_POST['albumcast']));
    $songname1 = mysqli_real_escape_string($db,strip_tags($_POST['songname1']));
    $songname2 = mysqli_real_escape_string($db,strip_tags($_POST['songname2']));
    $songname3 = mysqli_real_escape_string($db,strip_tags($_POST['songname3']));
    $songname4 = mysqli_real_escape_string($db,strip_tags($_POST['songname4']));
    $songname5 = mysqli_real_escape_string($db,strip_tags($_POST['songname5']));
    $songname6 = mysqli_real_escape_string($db,strip_tags($_POST['songname6']));
    $newtag = mysqli_real_escape_string($db,strip_tags($_POST['newtag']));

    $albumpicname = $_FILES['albumpic']['name'];
    $albumpictmpname = $_FILES['albumpic']['tmp_name'];
    $targetalbumfile = "images/{$albumpicname}";
    $imageFileType = pathinfo($targetalbumfile,PATHINFO_EXTENSION);

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $file2 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
        }

    $albumsong1 = $_FILES['albumsong1']['name'];
    $albumsong1tmpname = $_FILES['albumsong1']['tmp_name'];
    $targetsong = 'music/';
    $targetsongfile1 = $targetsong . basename($_FILES['albumsong1']['name']);


    $albumsong2 = $_FILES['albumsong2']['name'];
    $albumsong2tmpname = $_FILES['albumsong2']['tmp_name'];
    $targetsong = 'music/';
    $targetsongfile2 = $targetsong . basename($_FILES['albumsong2']['name']);


    $albumsong3 = $_FILES['albumsong3']['name'];
    $albumsong3tmpname = $_FILES['albumsong3']['tmp_name'];
    $targetsong = 'music/';
    $targetsongfile3 = $targetsong . basename($_FILES['albumsong3']['name']);


    $albumsong4 = $_FILES['albumsong4']['name'];
    $albumsong4tmpname = $_FILES['albumsong4']['tmp_name'];
    $targetsong = 'music/';
    $targetsongfile4 = $targetsong . basename($_FILES['albumsong4']['name']);


    $albumsong5 = $_FILES['albumsong5']['name'];
    $albumsong5tmpname = $_FILES['albumsong5']['tmp_name'];
    $targetsong = 'music/';
    $targetsongfile5 = $targetsong . basename($_FILES['albumsong5']['name']);


    $albumsong6 = $_FILES['albumsong6']['name'];
    $albumsong6tmpname = $_FILES['albumsong6']['tmp_name'];
    $targetsong = 'music/';
    $targetsongfile6 = $targetsong . basename($_FILES['albumsong6']['name']);



   
        
            if ($uploadOk == 0) {
                echo "<script>alert('Sorry, your file was not uploaded.');</script>";
            // if everything is ok, try to upload file
            } else {
    $album_ins = "INSERT INTO latest_album(albumname, albumreleasedate, albumcast,albumpic,albumsong1,albumsong2, albumsong3, albumsong4, albumsong5, albumsong6, songname1 , songname2, songname3, songname4, songname5, songname6, newtag) VALUES ('$albumname' , '$albumdate' , '$albumcast', '$albumpicname', '$albumsong1' , '$albumsong2' , '$albumsong3' , '$albumsong4' , '$albumsong5' , '$albumsong6' , '$songname1' , '$songname2' , '$songname3' , '$songname4' , '$songname5' , '$songname6' , '$newtag')";
    $album_query = mysqli_query($db,$album_ins) or die(mysqli_error($db));
                if ($album_query) {
                                   
                    if (move_uploaded_file($albumpictmpname, $targetalbumfile)) {
                       $file2 =  "The image has been uploaded.";  
                     } else {
                         $file2 = "Sorry, there was an error uploading your file.";
                        }
                   if ( move_uploaded_file($albumsong1tmpname, $targetsongfile1) ) {
                         $songerror1 = "The song has been uploaded";
                     } else {
                            $songerror1 = "Sorry, there was an error uploading your file.";        
                        }
                    if ( move_uploaded_file($albumsong2tmpname, $targetsongfile2) ) {
                         $songerror2 = "The song has been uploaded";
                     } else {
                            $songerror2 = "Sorry, there was an error uploading your file.";        
                        }
                    if ( move_uploaded_file($albumsong3tmpname, $targetsongfile3) ) {
                         $songerror3 = "The song has been uploaded";
                     } else {
                            $songerror3 = "Sorry, there was an error uploading your file.";        
                        }
                    if ( move_uploaded_file($albumsong4tmpname, $targetsongfile4) ) {
                         $songerror4 = "The song has been uploaded";
                     } else {
                            $songerror4 = "Sorry, there was an error uploading your file.";        
                        }
                    if ( move_uploaded_file($albumsong5tmpname, $targetsongfile5 ) ) {
                         $songerror5 = "The song has been uploaded";
                     } else {
                            $songerror5 = "Sorry, there was an error uploading your file.";        
                        }
                    if ( move_uploaded_file($albumsong6tmpname, $targetsongfile6) ) {
                         $songerror6 = "The song has been uploaded";
                     } else {
                            $songerror6 = "Sorry, there was an error uploading your file.";        
                        }                    
                }
                
               }
                                       
}  
       
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
        <link href="css/admin-panel.css" rel="stylesheet">

        
    
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
                        <a href="index.php"><button class="btn btn-top align-middle btn-light" type="button">Home</button></a>
                        <button class="btn btn-top align-middle btn-light" type="button">Bollywood</button>

                        <ul class="ul-social">
                            <li class="social fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                            <li class="social tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                        </ul>
                    </form>
                </nav>
            </div>
            
            <div class="row justify-content-center align-items-end">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    
                    
                    <div id="accordion">
                    
                     <h2>Welcome <?php echo $login_session; ?></h2>
                     <a href="logout.php"  ><button class="btn btn-danger">Log Out</button></a>
                    
                        <h1 class="margin-top">Upload Files</h1>
                        <h5 class="margin-bottom">Upload music files here.</h5>
                        
                        <div class="header"><h4>Upload Albums in Bollywood Albums Section</h4></div>
                        <div class="border-wrapper">
                            <div>
                                <ul>
                                    <li><label class="form-control-label">Enter Album Name</label>
                                    <form>
                                        <input type="text" class="form-control" placeholder="Album name">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Album Picture</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Album Song 1</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Album Song 2</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Album Song 3</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Album Song 4</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Album Song 5</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Album Song 6</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Album Song 7</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Album Song 8</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Album Song 9</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Album Song 10</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                </ul>
                                <form>
                                    <button type="submit" class="btn btn-primary upload-btn">Upload</button>
                                </form>
                            </div>
 
                        <div class="header"><h4>Upload Latest Bollywood Singles</h4></div>
                        <div class="border-wrapper">
                            <div>
                                
                                <form method="POST" enctype="multipart/form-data">
                                <ul>
                                    <li><label class="form-control-label">Enter Song &amp; Artist Name</label>
                                        <input type="text" class="form-control" placeholder="Song name - Artist name" name="name_artist">
                                    </li>
                                    <li><label class="form-control-label">Enter Song Name Only</label>
                                        <input type="text" class="form-control" placeholder="Song name Only" name="single_name">
                                    </li>
                                    <li><label class="form-control-label">Enter Artist Name Only</label>
                                        <input type="text" class="form-control" placeholder="Artist name Only" name="single_artist">
                                    </li>
                                    <li><label class="form-control-label">Release Date</label>
                                        <input type="text" class="form-control" placeholder="i.e. 2017" name="release_date">
                                    </li>
                                     <li><label class="form-control-label">Tag</label>
                                        <input type="text" class="form-control" placeholder="NEW" name="new_tag">
                                    </li>
                                    <li><label class="form-control-label">Upload Song Picture</label>
                                    
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="single_pic"><span style="color: red;"><?php echo $file; ?></span>
                                    </li>
                                    <li><label class="form-control-label">Upload Song</label>
                                
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="single_song"><span style="color: red;"><?php echo $songerror; ?></span>
                                    </li>
                                </ul>
                                
                                    <button type="submit" method="POST" class="btn btn-primary upload-btn" name="upload_single">Upload</button>
                                </form>
                            </div>
                        </div>
                         
                        <div class="header"><h4>Upload Latest Bollywood Albums</h4></div>
                        <div class="border-wrapper">
                            <div>
                                <form method="POST" enctype="multipart/form-data">    
                                  <ul>
                                    <li><label class="form-control-label">Enter Album Name</label>
                                    
                                        <input type="text" class="form-control" placeholder="Album name" name="albumname">
                                    </li>
                                    <li><label class="form-control-label">Release Date</label>
                                    
                                        <input type="text" class="form-control" placeholder="i.e 2017" name="albumreleasedate">
                                    </li>
                                    <li><label class="form-control-label">Cast</label>
                                    
                                        <input type="text" class="form-control" placeholder="Ajay Devgan,Akshay Kumar ....." name="albumcast">
                                    </li>
                                    <li><label class="form-control-label">Tag</label>
                                    
                                        <input type="text" class="form-control" placeholder="NEW" name="newtag">
                                    </li>
                                    <li><label class="form-control-label">Upload Album Picture</label>
                                    
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="albumpic"><span style="color: red;"><?php echo $file2; ?></span>
                                    </li><br>
                                    <li><label class="form-control-label">Enter Song Name1 With Singer</label>
                                    
                                        <input type="text" class="form-control" placeholder="Musafir-Atif Aslam" name="songname1">
                                    </li>
                                    <li><label class="form-control-label">Upload Album Song 1</label>
                                    
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="albumsong1"><span style="color: red;"><?php echo $songerror1; ?></span>
                                    </li><br>
                                    <li><label class="form-control-label">Enter Song Name2 With Singer</label>
                                    
                                        <input type="text" class="form-control" placeholder="Musafir-Atif Aslam" name="songname2">
                                    </li>
                                    <li><label class="form-control-label">Upload Album Song 2</label>
                                    
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="albumsong2"><span style="color: red;"><?php echo $songerror2; ?></span>
                                    </li><br>
                                    <li><label class="form-control-label">Enter Song Name3 With Singer</label>
                                    
                                        <input type="text" class="form-control" placeholder="Musafir-Atif Aslam" name="songname3">
                                    </li>
                                    <li><label class="form-control-label">Upload Album Song 3</label>
                                    
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="albumsong3"><span style="color: red;"><?php echo $songerror3; ?></span>
                                    </li><br>
                                    <li><label class="form-control-label">Enter Song Name4 With Singer</label>
                                    
                                        <input type="text" class="form-control" placeholder="Musafir-Atif Aslam" name="songname4">
                                    </li>
                                    <li><label class="form-control-label">Upload Album Song 4</label>
                                    
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="albumsong4"><span style="color: red;"><?php echo $songerror4; ?></span>
                                    </li><br>
                                    <li><label class="form-control-label">Enter Song Name5 With Singer</label>
                                    
                                        <input type="text" class="form-control" placeholder="Musafir-Atif Aslam" name="songname5">
                                    </li>
                                    <li><label class="form-control-label">Upload Album Song 5</label>
                                    
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="albumsong5"><span style="color: red;"><?php echo $songerror5; ?></span>
                                    </li><br>
                                    <li><label class="form-control-label">Enter Song Name6 With Singer</label>
                                    
                                        <input type="text" class="form-control" placeholder="Musafir-Atif Aslam" name="songname6">
                                    </li>
                                    <li><label class="form-control-label">Upload Album Song 6</label>
                                    
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="albumsong6"><span style="color: red;"><?php echo $songerror6; ?></span>
                                    </li>
                                  </ul>  
                                
                                    <button type="submit" class="btn btn-primary upload-btn" name="upload_album">Upload</button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="header"><h4>Upload Other MP3 Songs</h4></div>
                        <div class="border-wrapper">
                            <div>
                                <ul>
                                    <li><label class="form-control-label">Enter Song &amp; Artist Name</label>
                                    <form>
                                        <input type="text" class="form-control" placeholder="Song name - Artist name">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Song Picture</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                    <li><label class="form-control-label">Upload Song</label>
                                    <form>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </form></li>
                                </ul>
                                <form>
                                    <button type="submit" class="btn btn-primary upload-btn">Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            
            
            <div class="row margin-bottom footer" style="width: 100%">
                <div class="madeby"><p> Made by </p></div>
                <a href="http://umerusman.tk" target="_blank"><div> 
                    <svg class="imgGlobal" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 425 424"><defs><style>.cls-1{fill:url(#radial-gradient);}.cls-2{fill:none;stroke:#000;stroke-width:10px;}.cls-2,.cls-5{stroke-miterlimit:10;}.cls-3{fill:#b3b3b3;}.cls-4{fill:url(#radial-gradient-2);}.cls-5{fill:#ccc;stroke:#b3b3b3;}</style><radialGradient id="radial-gradient" cx="1044" cy="539" r="180" gradientUnits="userSpaceOnUse"><stop offset="0.03" stop-color="#4d4d4d"/><stop offset="0.18" stop-color="#4d4d4d"/><stop offset="0.32" stop-color="#4d4d4d"/><stop offset="0.99" stop-color="#1a1a1a"/></radialGradient><radialGradient id="radial-gradient-2" cx="357.5" cy="67.5" r="67.5" xlink:href="#radial-gradient"/></defs><title>u-square</title><path class="cls-1" d="M1152,402V359H881a17,17,0,0,0-17,17V702a17,17,0,0,0,17,17h326a17,17,0,0,0,17-17V432h-42A30.09,30.09,0,0,1,1152,402Z" transform="translate(-864 -295)"/><path class="cls-2" d="M1135,811" transform="translate(-864 -295)"/><path class="cls-2" d="M776,811" transform="translate(-864 -295)"/><path class="cls-3" d="M1135,657H953a26,26,0,0,1-26-26V449a26,26,0,0,1,26-26h182a26,26,0,0,1,26,26V631A26,26,0,0,1,1135,657ZM953,441a8,8,0,0,0-8,8V631a8,8,0,0,0,8,8h182a8,8,0,0,0,8-8V449a8,8,0,0,0-8-8Z" transform="translate(-864 -295)"/><path class="cls-3" d="M1079,657h-74.37l-1-.24A69.46,69.46,0,0,1,978.72,644c-11.28-9-24.72-25.66-24.72-54V480c0-11.38,10.08-21,22-21h29a22,22,0,0,1,22,22v62.13a47.36,47.36,0,0,0,24,41.18l3.7,2.09a64.74,64.74,0,0,0,6.26,3.14V481a22,22,0,0,1,22-22h28.88a22,22,0,0,1,22,22.2l-.6,64.62a64.51,64.51,0,0,1-29.38,53.73c-8.91,5.77-17,9.22-24.9,10.36Zm-72.14-18H1061V608.61a69.24,69.24,0,0,1-15.11-6.53l-3.7-2.09a65.39,65.39,0,0,1-33.2-56.86V481a4,4,0,0,0-4-4H976c-2.35,0-4,1.95-4,3V590C972,626.91,1001.19,637.32,1006.86,639ZM1083,477a4,4,0,0,0-4,4V591.6c4.6-1.1,9.43-3.48,15.1-7.16a46,46,0,0,0,21.18-38.79l.6-64.62a4,4,0,0,0-4-4Z" transform="translate(-864 -295)"/><rect class="cls-4" x="290" width="135" height="135" rx="30" ry="30"/><path class="cls-5" d="M1186.92,419.88a21.87,21.87,0,0,1-1.74-4.35,14.89,14.89,0,0,1-.55-3.87q0-8.22,16.52-20.23,4.58-3.32,7.11-5.22,18.26-13.83,26.67-25.05t8.42-21.73q0-9.25-6.24-15t-16.44-5.73a24.05,24.05,0,0,0-13.83,3.91q-5.77,3.91-10.12,12.29a16.44,16.44,0,0,1-5-4.66,9.63,9.63,0,0,1-1.66-5.37q0-8.14,8.89-13.95t22.17-5.81q16.6,0,26.91,9.25t10.31,23.95q0,15.1-13.67,31.3t-43.39,36.2q2.21.08,6,.16,6.8.16,8.85.16a184.85,184.85,0,0,0,25.13-1.38q9.72-1.38,14.7-4.23a34.73,34.73,0,0,1,1.54,5.1,21.89,21.89,0,0,1,.51,4.54q0,5.22-3.32,7.31t-12.17,2.09q-6.72,0-18.85-.4t-17.58-.4q-5.53,0-10.27.28T1186.92,419.88Z" transform="translate(-864 -295)"/></svg>
                </div></a>
                <div class="madeby2"><p> Copyrights &copy; 2017 FFFMp3, All Right Reserved. </p></div>
            </div>
            </div>
        </div>
        
        <script>
          $( function() {
            $( "#accordion" ).accordion({
              collapsible: true
            });
          } );
        </script>
    </body>
</html>

                
    

