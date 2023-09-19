<!DOCTYPE html>
<html>

<head>
    <title>
        Student Info
    </title>

    <?php require_once("external.php"); ?>
</head>

<body>
    <header style="margin-bottom:100px;">
        <?php include("header.php"); ?>
    </header>

    <?php 
        if(isset($_POST["submit"])){
            
        }
    ?>

    <div class="container">

    <h2>List of Candidates</h2>
        <div class="list-group">


            <a href="conduct-voting.php" class="list-group-item list-group-item-action"> <img src="images/avatar.png" alt="avatar" height="50px"
                    width="50px">
                <span>Noshad</span></a>
            <a href="scan-id-card.php" class="list-group-item list-group-item-action"> <img src="images/avatar.png" alt="avatar" height="50px"
                    width="50px">
                <span>Noushad ali</span></a>
            <a href="scan-id-card.php" class="list-group-item list-group-item-action"> <img src="images/avatar.png" alt="avatar" height="50px"
                    width="50px">
                <span>Noushad ali</span></a>
            <a href="scan-id-card.php" class="list-group-item list-group-item-action"> <img src="images/avatar.png" alt="avatar" height="50px"
                    width="50px">
                <span>Noushad ali</span></a>


        </div>
    </div>

</body>

</html>