<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Images/programmer.jpg">
    <title>WebHunter Help Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"><link rel="stylesheet" href="Styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background-image: url("/Images/2.jpg");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <center>
        <img src="Images/logo.png" alt="Logo" title="WebHunter">
    </center>
    <nav class="navbar navbar-dark navbar-expand-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#NavBar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                WebHunter
            </a>
            <div class="collapse navbar-collapse" id="NavBar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" title="Home" href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="About" href="about.html">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Contact Us" href="contactus.html">
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Downloads" href="tools.html">
                            Download Tools
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" title="Help" href="#">
                            Help
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron">
            <form method="POST" autocomplete="off">
                <div class="md-form">
                    <h class="display-3">
                        <marquee behaviour="scroll" >
                            Welcome to the Website
                        </marquee>
                    </h>
                    <h3>
                        If you want to suggest any update to the Website. Fill the Form below and submit to send your message to the developer.
                    </h3>
                    <br><br>
                    Enter your Name 
                    <br><br>
                    <input type="text" class="form-control form-control-lg" spellcheck="false" name="nm" required>
                    <br><br>
                    Enter your Email-ID 
                    <br><br>
                    <input type="email" class="form-control form-control-lg" spellcheck="false" name="em" required>
                    <br><br>
                    Enter your Message Here
                    <br><br>
                    <textarea class="form-control form-control-lg" rows="10" cols="70" spellcheck="false" name="textme" required></textarea>
                    <br><br>
                    <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['textme']))
{
    if($_POST['textme']!=NULL and $_POST['nm']!=NULL)
    {
        $data=$_POST['textme'];
        $fp=fopen('data.txt','a');
        if(!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        fwrite($fp,"IP         :  ".$ip."\nNAME       :  ".$_POST['nm']."\nEMAIL-ID   :  ".$_POST['em']."\nMESSAGE    :  ".$data."\n");
        fwrite($fp,"\n\n\n\n");
        fclose(fp);
        echo "<br><p style='color: green'>✔✔Message Sent</p>";
    }
    else
    {
        echo "<script>alert('Enter valid value')</script>";
    }
}
?>