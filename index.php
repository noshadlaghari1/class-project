<!Doctype html>

<html>

<head>
    <title>Home</title>
   <?php include("external.php")?>
</head>

<body>


<header style="margin-bottom: 70px;">
    <?php include("header.php");?>
</header>

<!-- Hero Section Start -->

<div>
    <div id="intro-example" class="container-fluid text-center"
    style=" background: linear-gradient(rgba(0, 0, 0, 0.40), rgba(0, 0, 0, 0.40)), url('images/vote-1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: 100%; height:80vh; ">
    <div class="mask" style="height: 100%;">
      <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
              <h1 class="mb-3">Welcome to Your Voice, Your Choice!</h1>
              <h5 class="mb-4">
              Discover a world of elections reimagined <br> where students like you drive change. Start voting today and make your mark!.
                </h5>
                <a class="btn btn-outline-light btn-lg m-2" href="student.php"
                role="button">Add Student</a>
                <a class="btn btn-outline-light btn-lg m-2" href="candidate.php"
                role="button">Add Candidate</a>
            </div>
        </div>
    </div>
</div>

</div>
<!-- Hero section End -->

<!-- Upcoming elections starts-->
<div class="container">
    <?php include("upcoming-elections.php");?>
</div>
<!-- Upcoming elections end-->

<footer>

    <?php include("footer.php");?>

</footer>




</body>

</html>