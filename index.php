<?php
    require("functions.php");
    $checked = false;

    if(isset($_POST["submit"])){
        $getRest = Fibonacci($_POST);
        if($getRest){
            $checked = true;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css import -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/costum.css" />
    <!-- favicon -->
    <link rel="icon" href="assets/img/fav.png" type="image/x-icon" />

    <title>Jepri Cerdas::Deret Fibonacci</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md sticky-top shadow-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/fav.png" width="30" height="30" class="d-inline-block align-top" alt=""
                        loading="lazy" />
                    <span class="ml-2">Jepri Cerdas</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Deret Fibonacci <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aritmatika.php">Barisan Aritmatika</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="container d-flex p-0 p-lg-5 p-md-5 justify-content-center position-relative overflow-hidden">
                <div class="d-flex row shadow p-5 bg-white rounded justify-content-center justify-content-lg-between">
                    <!-- Input Section -->
                    <div class="col-12 col-md-10 col-lg-6 p-0 mt-5 mt-lg-0">
                        <!-- Header -->
                        <div class="text-primary">
                            <h2>Deret Fibonacci</h2>
                            <hr />
                        </div>
                        <!-- Form -->
                        <form action="index.php" method="post">
                            <!-- F1 input -->
                            <div class="form-group">
                                <label for="name">Bilangan Pertama (F1)</label>
                                <input type="number" class="form-control" name="f1" autocomplete="off" required value ="<?= ($checked)  ? $getRest["f1"] : "";?>"/>
                            </div>
                            <!-- F2 input -->
                            <div class="form-group">
                                <label for="name">Bilangan Kedua (F2)</label>
                                <input type="number" class="form-control" name="f2" autocomplete="off" required value ="<?= ($checked)  ? $getRest["f2"] : "";?>"/>
                            </div>
                            <!-- Un input -->
                            <div class="form-group">
                                <label for="name">Jumlah N (Un)</label>
                                <input type="number" class="form-control" name="Un" autocomplete="off" min="1" required value ="<?= ($checked)  ? $getRest["Un"] : "";?>"/>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Get Result</button>
                        </form>
                    </div>
                    <!-- Rest Section -->
                    <div class="col-12 col-md-10 col-lg-5 p-0 mt-5 mt-lg-0">
                        <!-- Header -->
                        <div class="text-muted">
                            <h2>Result</h2>
                            <hr />
                        </div>
                        <!-- Rest -->
                        <div class="mt-0 mt-lg-5 mt-md-5">
                            <textarea class="form-control" id="validationTextarea" placeholder="This is result area."
                                rows="8" cols="76" disabled style="background-color: white" ><?= ($checked)  ? $getRest["rest"] : "";?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg bg-top position-absolute d-none d-md-block d-lg-block">
                <img src="assets/img/bg.png" alt="" />
            </div>
            <div class="bg bg-bot position-absolute d-none d-md-block d-lg-block">
                <img src="assets/img/bg.png" alt="" />
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>