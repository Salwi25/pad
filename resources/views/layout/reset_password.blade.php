<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- CSS Style -->
    <link href="css/auth.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
</head>
<body> 
    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="header">
                        <h1 class="text-center">Lupa Password</h1>
                    </div>
                    <div class="login-form">
                        <label for="email">Email UGM</label>
                        <input type="email" class="form-control" id="email" placeholder="nama@mail.ugm.ac.id">

                        <button class="login">Reset Password</button>
                        <div class= "text-center mt-4">
                            <span class="d-inline">Silakan check email untuk melakukan reset password</span>
                        </div>  
                    </div> 
                </div>    
            </div>      
        </div>
        <div class="login-right w-50 h-100 bg-primary">
            <div class="img-position">
                <img src="images/group.png" class="d-block w-100">
            </div>    
        </div>      
    </section>
    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
</html>