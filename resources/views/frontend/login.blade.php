<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ramlaxman Group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <div class="container card p-4 rounded mt-4 bg-light" style="border-radius: 10px;">
        <form action="login" method="POST">
          @csrf
          <h2>Admin Login</h2>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-secondary rounded-pill">Submit</button>
          </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="{{url('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontend/js/activeMenu.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('frontend/js/main.js')}}"></script>
</body>

</html>