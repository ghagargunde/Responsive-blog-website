<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- blog style -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>iBlog - Heaven for bloggers</title>
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="/">
            <span><img src="img/logo.png" width="94px" alt=""></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png">
                            <?php echo "Welcome ". $_SESSION['username']?>
                        </a>
                    </li>


                </ul>


            </div>
            <form class="form-inline my-2 my-lg-0"  action="search.php" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>


        </div>
    </nav>

    <div class="container mt-4">
        <h3>
            <?php echo "Welcome ". $_SESSION['username']?>! You can now use this website
        </h3>
        <hr>
        <div class="max-width-1 m-auto">

        </div>
        <div class="m-auto content max-width-1 my-2">
            <div class="content-left">
                <h1>The heaven for bloggers</h1>
                <p>iBlog is a website which lets you submit an article which upon approval will be up on our website and
                    you
                    can get a good amount of reach from here!</p>
                <p>My Halloween decorations are staying in the box this year. To be honest, they didn???t make it out of
                    the
                    box last year either. My Halloween spirit has officially been bludgeoned to death by teenagers who
                    no
                    longer care and a persistent October fear of the Northern California wildfires. And speaking of
                    fear,
                    isn???t there more than enough of that going around? Maybe all of us can pretend that Halloween isn???t
                    even
                    happening this year?</p>
            </div>
            <div class="content-right">
                <img src="img/home.svg" alt="iBlog">
            </div>
        </div>

        <div class="max-width-1 m-auto">
            <hr>
        </div>
        <div class="home-articles max-width-1 m-auto font2">
            <h2>Featured Articles</h2>

            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/3.png" alt="article">
                </div>
                <div class="home-article-content font1">
                    <a href="/login/blogpost.php">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                    </a>

                    <div>Author Name</div>
                    <span>07 January | 6 min read</span>
                </div>
            </div>
            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/1.png" alt="article">
                </div>
                <div class="home-article-content font1">
                    <a href="/login/blogpost.php">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                    </a>

                    <div>Author Name</div>
                    <span>07 January | 6 min read</span>
                </div>
            </div>
            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/2.png" alt="article">
                </div>
                <div class="home-article-content font1">
                    <a href="/login/blogpost.php">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                    </a>

                    <div>Author Name</div>
                    <span>07 January | 6 min read</span>
                </div>
            </div>
            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/1.png" alt="article">
                </div>
                <div class="home-article-content font1">
                    <a href="/login/blogpost.php">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                    </a>

                    <div>Author Name</div>
                    <span>07 January | 6 min read</span>
                </div>
            </div>
            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/11.svg" alt="article">
                </div>
                <div class="home-article-content font1">
                    <a href="/login/blogpost.php">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                    </a>

                    <div>Author Name</div>
                    <span>07 January | 6 min read</span>
                </div>
            </div>
            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/3.png" alt="article">
                </div>
                <div class="home-article-content font1">
                    <a href="/login/blogpost.php">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                    </a>

                    <div>Author Name</div>
                    <span>07 January | 6 min read</span>
                </div>
            </div>
            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/2.png" alt="article">
                </div>
                <div class="home-article-content font1">
                    <a href="/login/blogpost.php">
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                    </a>

                    <div>Author Name</div>
                    <span>07 January | 6 min read</span>
                </div>
            </div>
            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/11.svg" alt="article">
                </div>
                <div class="home-article-content font1">
                    <a href="/login/blogpost.php">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                    </a>

                    <div>Author Name</div>
                    <span>07 January | 6 min read</span>
                </div>
            </div>

        </div>

        <div class="footer">
            <p>Copyright &copy; iBlog.com </p>
            <a href="https://www.vecteezy.com/free-vector/typewriter">Sam Credits: </a>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>