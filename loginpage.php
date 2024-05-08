<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
  .gr img{
height:100px;
width:350px;
padding-right:25px;
}
</style>
<body>
<section class="bg-light vh-100 d-flex">
    <div class="col-3 m-auto">
      <div class="card">
        <div class="card-body">
          <div class="gr"><img src="imgs/GR.png" alt="GR EDUCATION"></div>
          <form action="actions/login.php" method="POST">
            <!-- Material input -->
                <div class="md-form">
                  <input type="text" id="email" name="email" class="form-control">
                  <label for="email">Your Email</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                  <input type="password" id="password" name="password" class="form-control">
                  <label for="password">Your Password</label>
                </div>
            <div class="text-center">
              <button class="btn btn-secondary" name="login">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
