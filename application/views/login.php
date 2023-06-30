<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/logo.png" />
    <title><?php echo $title ?></title>
    <link href="<?php echo base_url() ?>assets/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-secondary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h4 class="text-center font-weight-light my-4 text-uppercase">Sistem Informasi Perpustakaan</h4>
                                </div>

                                <div class="card-body">
                                    <h5 class="text-center font-weight-light my-3 mt-0"><?php echo $title ?></h5>
                                    <?php if ($this->session->flashdata('message')) { ?>
                                        <div class="alert alert-danger"><?php echo $this->session->flashdata('message'); ?></div>
                                    <?php } ?>


                                    <form method="post" action="<?php echo base_url() ?>index.php/login/auth">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" />
                                            <label for="inputEmail">Email address</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" />
                                            <label for="inputPassword">Password</label>

                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="showPassword" type="checkbox" onclick="tooglePassword()" />
                                            <label class="form-check-label" for="showPassword">Show Password</label>
                                        </div>

                                        <div class=" mt-4 mb-0">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-footer text-center py-3">
                                    Copyright &copy; Perpustakaan <?php echo date("Y") ?>
                                </div>
                            </div>
                            <!-- card -->
                        </div>
                        <!-- col -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>assets/scripts.js"></script>

    <script>
        function tooglePassword() {
            let x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>
<!-- 
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title ?></title>
</head>

<body>
    <h2><?php echo $title ?></h2>
    <form action="<?php echo base_url('index.php/login/auth') ?>" method="post">
        <?php if ($this->session->flashdata('message')) {
            echo $this->session->flashdata('message');
        } ?>

        <label>Email</label>
        <input type="text" name="email" required><br>
        <label>Password</label>
        <input type="psssword" name="password" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html> -->