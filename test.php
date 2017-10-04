<?php
    include('config.php');
   

         
if (isset($_POST['insert'])) {

     
    $nameartist = $_POST['name_artist'];
    $singlename =  $_POST['single_name'];
    $singleartist =  $_POST['single_artist'];
    $releasedate =  $_POST['release_date'];
    
    
    $ins = "INSERT INTO test(name_artist, single_name, single_artist) VALUES('$nameartist' , '$singlename' , '$singleartist')";
    $query = mysqli_query($db,$ins) or die(mysqli_error($db));

    if ($query) {
         echo "<script> alert('Done');</script>";
    }                      
}  
       
?>                 
<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
<form method="post" >
                                <div class="form-group">
                                    <label>Enter Song &amp; Artist Name</label>
                                        <input type="text" class="form-control" placeholder="Song name - Artist name" name="name_artist">
                                </div>
                                <div class="form-group">
                                <label>Enter Song Name Only</label>
                                        <input type="text" class="form-control" placeholder="Song name Only" name="single_name">
                                </div>
                                <div class="form-group">
                                <label>Enter Artist Name Only</label>
                                        <input type="text" class="form-control" placeholder="Artist name Only" name="single_artist">
                                </div>
                                <div class="form-group">
                                <label>Release Date</label>
                                        <input type="text" class="form-control" placeholder="i.e. 2017" name="release_date">
                                </div>
                                <div class="form-group">
                                <label>Upload Song Picture</label>
                                    
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="single_pic"><span style="color: red;"></span>
                                </div>
                                <div class="form-group">
                                <label>Upload Song</label>
                                
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="single_song">
                                                                
                                    <input type="submit" class="btn btn-primary upload-btn" name="insert">
                                 </div>   
                                </form>
</body>
</html>
