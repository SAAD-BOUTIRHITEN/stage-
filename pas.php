<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <?php
    $username = "root";
    $password = "";
    $database = new PDO("mysql:host=localhost;dbname=saadbou;", $username, $password);
    $ra = $_POST['cr3'] ?? '';
    if (isset($ra)) {
        $sql1 = $database->prepare("SELECT * FROM login WHERE urn =:valu");
        $checuser = $_POST['cr1'] ?? '';
        $sql1->bindParam("valu", $checuser);
        $sql1->execute();
        $sql = $database->prepare("UPDATE login SET pd=:val WHERE urn=:valee");
        $a = $_POST['cr2'] ?? '';
        $sql->bindParam("val", $a);
        $sql->bindParam("valee", $checuser);
        $sql->execute();
        if ($sql1->rowCount() === 0) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erore username!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div> ';
        } elseif ($sql->execute() == true) {
            echo '<div class="alert alert-success" role="alert">
               operation completed successfully <a href="log.php" class="alert-link">LOGIN.</a>.
              </div> ';
        }
    }
    ?>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="h.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post">

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">New password</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" name="cr1" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid username" />
                            <label class="form-label" for="form3Example3">username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="cr2" id="form3Example4" class="form-control form-control-lg"
                                placeholder="New password" />
                            <label class="form-label" for="form3Example4">New Password</label>
                        </div>



                        <div class="text-center text-lg-start mt-4 pt-2">
                            <input name="cr3" type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" value="login">

                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div style=" position: relative;padding-left: 15%;" class="text-white mb-3 mb-md-0">
                Copyright © 2022. All rights reserved by SAAD BOUTIRHITEN.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <!-- Right -->
        </div>
    </section>
</body>

</html>