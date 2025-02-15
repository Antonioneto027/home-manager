<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<main>
    <div class="container d-flex justify-content-center align-items-center min-vh-100 text-center">
        <form class="g-4 d-flex flex-column gap-3 w-50">
            <div class="shadow p-3 mb-5 bg-white rounded d-flex align-items-center flex-column">
                <div class="col-md-10 mb-3">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="row m-3"> 
                    <div class="col-md-6 my-3">
                        <label for="inputName1" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="inputName1">
                    </div>
                    <div class="col-md-6 my-3">
                        <label for="inputName2" class="form-label">Second Name</label>
                        <input type="text" class="form-control" id="inputName2">
                    </div>
                </div>
                <div class="col-md-10 mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-10 mb-3">
                    <label for="inputStreet" class="form-label">Street Name</label>
                    <input type="text" class="form-control text-center" id="inputAddress">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="inputNumber" class="form-label">Street Number</label>
                    <input type="text" class="form-control" id="inputAddress2">
                </div>
                <div class="col-md-5 mb-3">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-5 mb-3">
                    <label for="inputState" class="form-label">State/Province</label>
                    <input type="text" class="form-control" id="inpuState">
                </div>
                <div class="col-md-5 mb-3">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>