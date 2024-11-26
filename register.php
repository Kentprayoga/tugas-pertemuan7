<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
    .gradient-custom {
        background: #6a11cb;
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
    }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                <p class="text-white-50 mb-5">Please fill in your details to create an account!</p>

                                <!-- Form Register -->
                                <form action="./backend/register.php" method="post">
                                    <!-- Name Input -->
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="name" class="form-control form-control-lg"
                                            placeholder="Masukkan nama anda" required>
                                    </div>

                                    <!-- Email Input -->
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="email" class="form-control form-control-lg"
                                            placeholder="Masukkan email anda" required>
                                    </div>

                                    <!-- Password Input -->
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" class="form-control form-control-lg"
                                            placeholder="Masukkan password anda" required>
                                    </div>

                                    <!-- Confirm Password Input -->
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="confirm" class="form-control form-control-lg"
                                            placeholder="Masukkan konfirmasi password anda" required>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="d-grid gap-2 mb-4">
                                        <input type="submit" value="Register" name="submit"
                                            class="btn btn-outline-light btn-lg">
                                    </div>
                                </form>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="index.php">Already have an
                                        account? Login here!</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>