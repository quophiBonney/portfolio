<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solomon Bonney</title>

    <!--Core Bootstrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css">

    <!--Fontawesome--->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header justify-content-center text-center">
                <img src="vendor/img/developer.jpg" alt="solomon_bonney_web_dev" width="150" height="150"
                    class="mr-4 rounded-circle img-thumbnail shadow-sm img-fluid mt-3">
                <h5 class="m-0">Solomon Bonney</h5>
                <p class="font-weight-mormal text-muted mb-0 ml-2">Software Engineer</p>
            </div>
            <ul class="list-unstyled components">
                <li class="nav-link active text-secondary">
                    <a href="index.php"><i class="fa fa-home"></i>Home</a>
                </li>
                <li class="nav-link text-secondary">
                    <a href="about.php"><i class="fa fa-info"></i>About Me </a>
                </li>
                <li class="nav-link text-secondary">
                    <a href="skills.php"><i class="fa fa-code"></i>Skills</a>
                </li>
                <li class="nav-link text-secondary">
                    <a href="projects.php">Projects</a>

                </li>
                <li class="nav-link text-secondary">
                    <a href="resume.php"><i class="fas fa-youtube"></i>Resume</a>
                </li>
                <li class="nav-link text-secondary">
                    <a href="contact.php"><i class="fa fa-phone"></i>Contact</a>
                </li>
                <li class="nav-link text-secondary">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Follow
                        Me</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i>Instagram</a>
                        </li>
                        <li>
                            <a href="#">Youtube</a>
                        </li>
                        <li>
                            <a href="#">Github</a>
                        </li>
                        <li>
                            <a href="#">Telegram</a>
                        </li>
                    </ul>
                </li>
                <p><small>&copy; 2021 All rights reserved</small></p>
            </ul>
        </nav>

        <!--Content Begins Here-->
        <div id="content">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button type="button" class="border-0" id="sidebarCollapse">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <h5 class="heading-name">Solomon_Bonney</h5>
                </div>
            </nav>

            <div class="image-cover">
                <img class="img-fluid intro-pic" src="vendor/img/C360_20210317-131359-57.png">
                <p class="mt-2">
                    <button class="btn btn-secondary">Projects</button>
                    <button class="btn btn-secondary">Github</button>
                    <button class="btn btn-secondary">Youtube</button>
                    <button class="btn btn-secondary">Telegram</button>
                </p>
                <br>
            </div>
            <div class="line"></div>
            <div class="row">
                <div class="col-md-12 bg-white mt-5">
                    <h6 class="my_info mt-3">
                        Who Am I<i class="fa fa-question bg-light text-center"></i>
                    </h6>
                    <p class="text-center">Hi! I graduated from IPMC College Of Technlology with a Software Engineering
                        diploma. Right now, I'm a freelancer Software Engineer. Previously, I worked on School
                        Management System for CodLogic Software Engineering Ltd. Outside worked I spend an unhealthy
                        amount of time writing and reading code, taking walks and observing different ways of doing
                        things. Fun life huh?
                </div>
                <div class="col-md-12 bg-white mt-5">
                    <h6 class="my_skills mt-3">
                        Skill<span class="bg-dark s">s</span>
                    </h6>
                    <div class="container">
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <div class="col-md-5">
                                    <i class="fa fa-code ml-5"></i>
                                    <div class="d-flex mt-5">
                                        <ul class="skills-list">
                                            <li><small>HTML(5)</small></li>
                                            <li><small>CSS(3)</small></li>
                                            <li><small>JavaScript</small></li>
                                            <li><small>PHP</small></li>
                                        </ul>
                                        <ul class="skills-list">
                                            <li><small>JQuery</small></li>
                                            <li><small>C</small></li>
                                            <li><small>VB.Net</small></li>
                                            <li><small>Kotlin</small></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <i class="fa fa-database"></i>
                                    <div class="d-flex mt-5">
                                        <ul class="skills-list">
                                            <li><small>Bootstrap</small></li>
                                            <li><small>MySQL</small></li>
                                            <li><small>SQL</small></li>
                                            <li><small>Firebase</small></li>
                                        </ul>
                                        <ul class="skills-list">
                                            <li><small>Amazon Web Services</small></li>
                                            <li><small>C</small></li>
                                            <li><small>PHP</small></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="row">
                    <div class="col-md-12 bg-white mt-4">
                        <h6 class="my_info mt-3">
                            Project<span class="bg-dark s">s</span>
                        </h6>
                        <div class="d-flex">
                            <span class="letter-design">C</span>
                            <h5 class="project-title">Ecommerce Website<br>
                                <p class="text-muted">HTML5, CSS3, PHP, Bootstrap, MySQL</p>
                            </h5>
                        </div>
                        <p class="project-info">Worked on this website to create the easiest and efficient ecommerce
                            site with advanced and improved features.</p>
                        <div class="col-md-11 shadow border">
                            <center>
                                <img class="img-fluid project-image" src="vendor/img/developer.jpg">
                            </center>
                        </div>
                        <br>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.js"
                    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
                    crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
                    crossorigin="anonymous">
                </script>

                <script>
                $(document).ready(function() {
                    $("#sidebarCollapse").on('click', function() {
                        $("#sidebar").toggleClass('active');
                    });

                });
                </script>
</body>

</html>