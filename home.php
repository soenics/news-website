<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Network Security</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">News</a>
                        </li>

                    </ul>
                    <div class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <a href="index.php"><button class="btn btn-outline-success " type="submit">Logout</button></a>

                    </div>
                </div>
            </div>
        </nav>
        <br>
        <!-- bgnews -->
        <div class="bgtitle"></div><br>
        <!-- /bgnews -->
        <!-- list -->
        <div class="list-group">
            <a href="https://sanantonioreport.org/southwest-research-institute-space-science-alan-stern/"
                class="list-group-item list-group-item-action active" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Meet Alan Stern, Southwest Research Institute’s first official space traveler</h5>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">Alan Stern doesn’t remember a time when he didn’t love learning about outer space.

                    Born in New Orleans in 1957 and raised in Dallas, Stern remembers the great Space Race of the ’60s
                    and ’70s. He remembers marveling at the Apollo space missions and seeing man step foot on the moon
                    for the first time.Alan Stern doesn’t remember a time when he didn’t love learning about outer
                    space.</p>
                <small>Roots in Texas</small>
            </a>
            <a href="https://sanantonioreport.org/utsa-engineering-students-prototype-feeding-robot/"
                class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">A portion of independence: UTSA seniors create prototype robot to help feed
                        disabled individuals</h5>
                    <small class="text-body-secondary">3 days ago</small>
                </div>
                <p class="mb-1">It was his end-of-life struggles with cancer that inspired the UTSA engineering senior
                    to work with a small team of fellow students to create a prototype robot that allows disabled or
                    paralyzed individuals to feed themselves with little to no caregiver assistance, helping them regain
                    a measure of independence.</p>
                <small class="text-body-secondary">
                    LINDSEY CARNETT</small>
            </a>
            <a href="https://sanantonioreport.org/darkhive-san-antonio-startup-week-defense-contracts/"
                class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">After notching early success, Darkhive CEO shares lessons learned with San Antonio
                        startups</h5>
                    <small class="text-body-secondary">3 days ago</small>
                </div>
                <p class="mb-1">It was 2021, and John Goodson faced an inflection point in his career.

                    He had spent the last two and a half years at CTI, a small software and systems development company
                    that provides technologies for the U.S. military. Goodson had worn many hats in his time there,
                    learning the arcane ins and outs of the defense contracting business.</p>
                <small class="text-body-secondary">TRACY IDELL HAMILTON</small>
            </a>
        </div>
        <!--/list  -->
    </div>

</body>

</html>