<?php 
$conn=mysqli_connect("localhost","root","","website");

if(isset($_POST['submit']))
{

    $name=$_POST['name'];
    $email=$_POST['email'];
    $website=$_POST['website'];
    $message=$_POST['message'];
    $sql= "INSERT INTO comment (name, email, website, message) VALUES ('$name' ,'$email', '$website', '$message')";
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
                    <a href="france.php" class="nav-link">Blogs</a>
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

        <!-- Post Content -->
        <section class="container">
            <article id="post">
                <!-- article heading -->
                <div class="headings text-center">
                    <div class="category">
                        <a href="#" class="nav-link">Itchy Travel Fleet</a>
                    </div>

                    <div class="title">
                        <h2 class="text-title text-dark display-1">Paris, France-The City Of Light.</h2>
                    </div>

                    <div class="meta">
                        <a href="#" class="link display-2 text-secondary px-1">
                            <i class="fas fa-user text-primary"></i> John Stephens
                        </a>
                        <a href="#" class="link display-2 text-secondary px-1">
                            <i class="fas fa-clock text-primary"></i> Clock Wed 02, 2019
                        </a>
                        <a href="#" class="link display-2 text-secondary px-1">
                            <i class="fas fa-comments text-primary"></i> 5
                        </a>
                    </div>

                </div>

                <!-- thumbnail  -->
                <div class="thumbnail mt-3">
                    <img src="./assets/france.jpg.jpg" class="thumbnail" alt="">
                </div>

                <!-- content -->
                <div class="content text-dark display-2 secondary-title mt-3">
                    <p>To me Paris is two things: romance and the Louvre. Romance seems to permeate the city. A walk
                        along the Seine at night. A view of the Eiffel Tower. A view of the city from Sacr?? Coeur in
                        Montmartre. Or nice romantic dinner in some small side street near Moulin Rouge. If you want to
                        spend a romantic weekend with someone then Paris is the right place.
                        To especially appreciate Paris you need to have a wonderful view of the city.

                    </p>
                    <p>
                        Here is a list of places with the best views of Paris
                        1. Sacr?? Coeur in Montmartre
                        2. Notre Dame's tower
                        3. Commanding views from the Tour Montparnasse (skyscraper in Paris)
                        4. Arc de Triomphe
                    </p>
                    <p>
                        Now I do not need to explain in much detail the importance of the Louvre. Only the most
                        important art museum in the world. I can spend days there. You need to be selective when
                        visiting the Louvre
                        Remember two things though when visiting Paris. There are long lines to climb the Eiffel Tower
                        and to get into the Louvre. Plan accordingly.
                        Also do not forget to visit Versailles when you visit Paris. No trip to Paris is complete
                        without visiting it
                    </p>
                </div>
            </article>

            <!-- post footer -->
            <div class="post-footer mb-3">
                <div class="post-tags d-flex flex-wrap justify-content-center">
                    <a href="#" class="nav-link btn bg-light">Tourism</a>
                    <a href="#" class="nav-link btn bg-light">Food</a>
                    <a href="#" class="nav-link btn bg-light">Nature</a>
                    <a href="#" class="nav-link btn bg-light">Explore</a>
                    <a href="#" class="nav-link btn bg-light">Naturelovers</a>
                </div>

                <div class="post-author text-center">
                    <div class="author-avatar">
                        <img src="./assets/face/face1.jpg" class="rounded" alt="">
                    </div>

                    <div class="author-info py-2">
                        <h3 class="text-dark">John stephens</h3>

                        <p class="text-secondary secondary-title">
                           I am  born To travel so that's what i am doing now.Travelling-it leaves me speechless 
                            and turns into storyteller.
                        </p>

                        <div class="post-tags d-flex flex-wrap justify-content-center">
                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                </div>

                <!-- post related -->
                <div class="post-realted py-2">
                    <div class="row justify-content-center">
                        <div class="prev">
                            <div class="py-2">
                                <a href="thailand.html" class="display-2 text-dark">
                                    <i class="fas fa-chevron-left"></i>
                                    Previous Post
                                </a>
                            </div>
                            <article class="article text-center">
                                <div class="d-flex">
                                    <a href="thailand.html">
                                        <img src="./assets/thailand.jpg" class="object-fit" alt="">
                                    </a>
                                    <div class="cart-body px-1">
                                        <div class="category">
                                            <a href="thailand.html" class="link text-primary text-secondary">Thailand</a>
                                        </div>
                                       <a href="#" class="text-title display-1 text-dark">
                                            -that bali 
                                            <br>life....
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="next text-right">
                            <div class="py-2">
                                <a href="pahalgam.html" class="display-2 text-dark">
                                    Next Post
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                            <article class="article text-center">
                                <div class="d-flex">
                                    <div class="cart-body px-1">
                                        <div class="category">
                                            <a href="pahalgam.html" class="link text-primary text-secondary">pahalgam</a>
                                        </div>
                                        <a href="#" class="text-title display-1 text-dark">
                                           -The Heaven on
                                           <br> Earth.
                                    </div>
                                    <a href="pahalgam.html">
                                        <img src="./assets/pahalgam.jpg" class="object-fit" alt="">
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="post-comments py-2">
                    <h3 class="text-center display-1 secondary-title py-2">3 Comments</h3>

                    <div class="comment-details">
                        <div class="comment-item py-2">
                            <div class="d-flex">
                                <div class="avatar px-2">
                                    <img src="./assets/face/franceface.jpg" class="rounded" alt="">
                                </div>
                                <div class="comment-content">
                                    <h5 class="display-2 m-0">Phoebe</h5>
                                    <p class="title-secondary text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore aliqua. Quis ipsum suspendisse ultrices gravida lacus vel
                                        facilisis.
                                    </p>
                                </div>
                            </div>
                            <!-- comment reply -->
                            <div class="reply py-2">
                                <div class="d-flex">
                                    <div class="avatar px-2">
                                        <img src="./assets/face/face2.jpg" class="rounded" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <h5 class="display-2 m-0">Charles</h5>
                                        <p class="title-secondary text-dark">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore aliqua. Quis ipsum suspendisse ultrices gravida
                                            lacus vel facilisis.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="comment-item py-2">
                            <div class="d-flex">
                                <div class="avatar px-2">
                                    <img src="./assets/face/face3.jpg" class="rounded" alt="">
                                </div>
                                <div class="comment-content">
                                    <h5 class="display-2 m-0">Brandon Kelley</h5>
                                    <p class="title-secondary text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore aliqua. Quis ipsum suspendisse ultrices gravida lacus vel
                                        facilisis.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-center display-1 secondary-title py-2">Leave Comment</h3>

                  <form action="" method="post">
                  <div class="comment-form">
                        <div class="d-flex justify-content-between flex-wrap">
                           
                            <input type="text" name="name" class="form-control " placeholder="Name">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <input type="text" name="website" class="form-control" placeholder="Website">
                        </div>
                        <textarea class="form-control mt-3" name="message"  placeholder="Message" rows="10"></textarea>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary display-2 text-light mt-2">Submit</button>
                        </div>
                    </div>
                  </form>
                </div>

            </div>
            <!-- .post footer -->

        </section>
       

    </main>
    <!-- .Main Site -->

    <!-- footer -->
    <footer id="footer">
        <div class="container">
            <div class="row mb-3">
                <div class="col-3">
                    <h2 class="footer-title secondary-title">About Us</h2>

                    <div class="secondary-title text-secondary">
                        <p class="mt-2 ">
                            Trvel with me to the unexplored places before.
                            Life is short!!! Hurry up, don't waste your time.Pack your bags and join me because 
                            travelling - it leaves you speechless and  then turn you into storyteller.
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
                                    <a href="london.html">
                                        <img src="./assets/london.jpg" class="object-fit px-1" alt="">
                                        <div class="px-1">
                                            <a href="#" class="text-title display-2 text-dark">
                                                London,It is difficult to speak adequately or justly of London.
                                            </a>
                                            <p class="secondary-title text-secondary display-3">
                                                <span><i class="far fa-clock text-primary"></i> Clock 16, 2018
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
                    ?? 2022 <a href="#" class="text-primary">Chasing Horizons</a> -  All rights reserved.
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