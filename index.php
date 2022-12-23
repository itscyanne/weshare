<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | WeShare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <div class="d-flex" role="search">
               <a class="nav-link" href="logout.php">Logout</a>
            </di>
        </div>
    </div>
</nav>


    <div class="container px-4 mt-2">

        <div class="row gx-5">
            <div class="col-md-8">

                <!--      Add post          -->
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?= htmlentities($_SERVER['PHP_SELF']); ?>">
                            <div class="form-group mb-3">
                                <label>What is going on?</label>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>

                            <div class="col-md-3">
                                <button type="submit" name="post" class="btn btn-success">Post</button>
                            </div>
                        </form>
                    </div>
                </div>


                        <!--Post Card-->
                    <div class="animate__animated animate bounce card mt-3">
                        <div class="card-body">
                            <h5 class="card-title ms-1">Sample Post</h5>
                            <p class="card-text mb-5 ms-1">See more bootstrap code snippets on my website</p>

                            <a href="https://freesnippetcode.blogspot.com/" target="_blank" class="btn btn-primary mb-1 mt-1 ">Go now</a>
                        </div>
                    </div>




            </div>

            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        <h6>My Profile</h6>
                    </div>
                    <div class="card-body">



                    </div>
                </div>

            </div>
        </div>

    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
