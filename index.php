<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            turkeytragedy
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- CSS -->
        <link href="./main.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <ul class="nav nav-pills bg-white" style="padding: 10px; border-radius: 4px; border-color: BFBFBF; border-width: 1px; border-style:solid; ">
                <a class="navbar-brand" href="./index.php">
                    <img src="https://www.countryflagicons.com/FLAT/32/TR.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                    <img src="https://www.countryflagicons.com/FLAT/32/SY.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                </a>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="./reportform.php">Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./list.php">List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./contacts.php">Contact us</a>
                </li>
                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Language</a>
                    <ul class="dropdown-menu">
                    <li><a id="en" class="dropdown-item" href="#">English</a></li>
                    <li><a id="tr" class="dropdown-item" href="#">Türkçe</a></li>
                    <li><a id="ae" class="dropdown-item" href="#">العربيه</a></li>
                    <li><a id="ru" class="dropdown-item" href="#">Русский</a></li>
                    </ul>
                </li>
            </ul>
            <div class="card-group">
                <div class="card">
                    <img src="./includes/rescueteam.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Report found or lost people</h5>
                        <p class="card-text"><small class="text-muted">
                            If you have lost the contact with a relative or a 
                            friend that lived nearby the earthquake location
                            or if you have found one of the earthquake victims, 
                            feel free to leave your report.</small>
                        </p>
                        <a href="./reportform.php" class="btn btn-dark">Make a report</a>
                    </div>
                </div>
                <div class="card">
                    <img src="./includes/list.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">List</h5>
                        <p class="card-text">
                            This is a list that containes information about the 
                            victims of the earthquake. We will make sure that
                            the rescue team monitor throw this list.
                        </p>
                        <a href="./list.php" class="btn btn-dark">Check the list</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
