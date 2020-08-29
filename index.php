<?php include("koneksi.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>DW-Tube</title>
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><b>DW-Tube</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=category">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=video">Video</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <div class="row">
            <div class="col-10">
            <?php 
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
            
                    switch ($page) {
                        case 'home':
                            include "home.php";
                            break;
                        case 'category':
                            include "category.php";
                            break;
                        case 'video':
                            include "video.php";
                            break;			
                        case 'addCategory':
                            include "addCategory.php";
                            break;			
                        case 'editCategory':
                            include "editCategory.php";
                            break;			
                        case 'addVideo':
                            include "addVideo.php";
                            break;    			
                        // case 'editVideo':
                        //     include "editVideo.php";
                        //     break;    			
                        default:
                            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                            break;
                    }
                }else{
                    include "home.php";
                }
            
                ?>
            </div>
            
        </div>
        <br>
        <!-- <div id="footer">
		    <strong>Copyright &copy; 2020 Fani Indriyaningsih .</strong> All rights reserved.
	    </div> -->
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>