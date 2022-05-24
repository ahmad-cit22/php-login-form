<?php
require_once "includes/header.php"
?>



<div class="container">
    <div class="row">
        <div class="mt-5 p-4 col-md-6 m-auto border border-success shadow-lg mb-5 rounded">
            <h2 class="text-center text-success">User Log in Form</h2>
            <!-- form starts -->
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="name">

                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
                    <div class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile Number</label>
                    <input type="number" class="form-control" name="mNumber">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control mb-4" name="pass" </div>

                    <!-- php code starts -->
                    <?php

                    if (isset($_POST["submitBtn"])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $mNumber = $_POST['mNumber'];
                        $password = $_POST['pass'];

                        if (!$name) {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Name field is left blank!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
                        }
                        if (!$email) {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Email field is left blank!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
                        }
                        if (!$mNumber) {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Mobile number field is left blank!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
                        }
                        if (!$password) {
                            echo '<div class="mb-4 alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Password field is left blank!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
                        }
                    }
                    ?>

                    <!-- php code ends -->


                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-block fs-5" name="submitBtn">Submit</button>
                    </div>



            </form>
        </div>
    </div>
</div>




<?php
require_once "includes/footer.php"
?>