<?php 
$conn=mysqli_connect("localhost","root","","website");

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $country=$_POST['country'];
    $website=$_POST['subject'];
    $sql= "INSERT INTO contact (fname, lname,country, subject) VALUES ('$fname' ,'$lname', '$country','$website')";
    echo $sql;
    $query=mysqli_query($conn,$sql);
    if($query)
    {
      echo  '<script>alert("comment successfully saved");</script>"';
    }
    else
    {
        echo '<script>alert("unsuccessfully,try again");</script>"';
       
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chasing Horizons</title>

    <!-- font awesome icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <!-- swiper slider css file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.css"
        integrity="sha512-m3pAvNriL711NMlhkZHK6K4Tu2/RjtrzyjxZU8mlAbxxoDoURy27KajN1LGTLeEEPvaN12mKAgSCrYEwF9y0jA=="
        crossorigin="anonymous" />

    <!-- custom style.css file -->
    <link rel="stylesheet" href="style.css">
    <style>
        
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

        .title {
            font-size: 150px;
            float: left;
            margin-top: 50px;
        }
    </style>

</head>

<body>

    <!-- Header -->
    <header id="header" class="shadow bg-light">
        <nav class="container navbar">
            <a href="/index.html" class="nav-brand text-dark">
                Chasing Horizons
            </a>

            <!-- toggle button -->
            <button class="toggle-button">
                <span><i class="fas fa-bars"></i></span>
            </button>

            <!-- collapse on toggle button click -->
            <div class="collapse">
                <ul class="navbar-nav">
                    <a href="index.html" class="nav-link">Home</a>
                    <a href="france.php" class="nav-link">Blog</a>
                    <a href="#" class="nav-link">Pages</a>
                    <a href="aboutu.html" class="nav-link">About</a>
                    <a href="contact.php" class="nav-link">Contact</a>
                </ul>
            </div>

            <!-- collapse on toggle button click -->
            <div class="collapse">
                <ul class="navbar-nav">
                    <div class="search-box">
                        <a href="https://www.google.com/" class="nav-link"><i class="fas fa-search"></i></a>
                    </div>
                    <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/aditi72972128" class="nav-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
                    <a href="fab fa-linkedin" class="nav-link"><i class="fab fa-linkedin"></i></a>
                </ul>
            </div>
        </nav>
    </header>
    <!-- .Header -->

    <!-- Main Site -->
    <main id="site-main">

        
    </main>
    <!-- .Main Site -->
    <div class="container">
        <form action="" method="post">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname" placeholder="Your name..">
      
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" placeholder="Your last name..">
      
          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>
      
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" name="submit" value="Submit">
        </form>
      </div>
    <!-- footer -->
    <footer id="footer">
        <div class="container">
            <div class="row mb-3">
                <div class="col-3">
                    <h2 class="footer-title secondary-title">About</h2>

                    <div class="secondary-title text-secondary">
                        <p class="mt-2 ">
                            Travel with me to the unexplored places before.
                            Life is short!!! Hurry up, don't waste your time.Pack your bags and join me because
                            travelling - it leaves you speechless and then turn you into storyteller.
                        </p>

                        <address>
                            <i class="fas fa-map-marker-alt text-primary"></i>
                            5 South Main Street Los Angeles, ZZ-96110 USA
                        </address>

                        <div class="phone">
                            <i class="fas fa-mobile text-primary"></i>
                            125-896-485
                        </div>

                        <div class="email">
                            <i class="fas fa-envelope text-primary"></i>
                            mehtaaditi2000@gmail.com
                        </div>

                    </div>
                </div>
                <div class="col-3">
                    <h2 class="footer-title secondary-title">Feature Post</h2>

                    <div class="feature-post">
                        <div class="flex-item">
                            <article class="article">
                                <div class="d-flex">
                                    <a href="thailand.html">
                                        <img src="./assets/thailand.jpg" class="object-fit px-1" alt="">
                                        <div class="px-1">
                                            <a href="#" class="text-title display-2 text-dark">
                                                Thailand, -Life a visitor feels,has not been wasted on Thais.
                                            </a>
                                            <p class="secondary-title text-secondary display-3">
                                                <span><i class="far fa-clock text-primary"></i> Clock 31, 2019
                                                </span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="flex-item">
                            <article class="article">
                                <div class="d-flex">
                                    <a href="kedarkantha.html">
                                        <img src="./assets/kedarkantha.jpeg" class="object-fit px-1" alt="">
                                        <div class="px-1">
                                            <a href="#" class="text-title display-2 text-dark">
                                                Kedarkantha,Uttarakhand-Life is better in Hiking Boots!!!
                                            </a>
                                            <p class="secondary-title text-secondary display-3">
                                                <span><i class="far fa-clock text-primary"></i> Clock Wed 27, 2022
                                                </span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="flex-item">
                            <article class="article">
                                <div class="d-flex">
                                    <a href="bali.html">
                                        <img src="./assets/bali.jpg" class="object-fit px-1" alt="">
                                        <div class="px-1">
                                            <a href="#" class="text-title display-2 text-dark">
                                                Bali,Indonesia-that bali life....
                                            </a>
                                            <p class="secondary-title text-secondary display-3">
                                                <span><i class="far fa-clock text-primary"></i> Clock 13, 2021
                                                </span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <h2 class="footer-title secondary-title">Tags</h2>

                    <div class="tags">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="nav-link btn bg-light">Tourism</a>
                            <a href="#" class="nav-link btn bg-light">Food</a>
                            <a href="#" class="nav-link btn bg-light">Nature</a>
                            <a href="#" class="nav-link btn bg-light">Explore</a>
                            <a href="#" class="nav-link btn bg-light">Naturelovers</a>
                        </div>
                    </div>

                    <h2 class="footer-title secondary-title mt-2">Social</h2>

                    <div class="tags social">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="nav-link btn bg-light"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="nav-link btn bg-light"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="nav-link btn bg-light"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="nav-link btn bg-light"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- copyrights  -->
            <div class="copyrights">
                <p class="text-center text-secondary display-2">
                    © 2022 <a href="#" class="text-primary">Chasing Horizons</a> - All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    <!-- .footer -->



    <!-- masonry libray for horizontal grid -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"
        integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ=="
        crossorigin="anonymous"></script>

    <!-- swiper slider cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js"
        integrity="sha512-1LlEYE0qExJ/GUfAJ0k2K2fB5sIvMv/q6ueo3syohvQ3ElWDQVSMUOf39cxaDWHtNu7M6lF6ZC1H6A1m3SvheA=="
        crossorigin="anonymous"></script>

    <!-- custom javascript main.js file -->
    <script src="main.js"></script>
</body>

</html>