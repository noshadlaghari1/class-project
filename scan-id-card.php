<!Doctype html>
<html>
    <head>
        <title>Scan your Id</title>

        <?php require_once("external.php") ?>
    </head>

    <body>
    <header style="margin-bottom:100px">
        <?php include("header.php")?>
    </header>    

    <div class="container" style="background-color:skyblue; height:80vh">


        <div class="row  d-flex align-items-center gap-5">
            
            <div class="col p-5">
                
                <form action="std-info.php" method="post">
                    <h2>Scan Your Id Card Here</h2>
                    <!-- <label for="id-card" class="form-label">Scan Your Id Here</label> -->
                    <textarea class="form-control" id="id-card" rows="10"></textarea>
                    
                    <button type="submit" class="btn btn-primary my-2">Submit</button>
                    <a href="index.php" class="btn btn-danger">Close Voting</a>
                </form>
                
            </div>
            
            
            <div class="col p-5">
                
                <img src="images/qr-code.jpg" alt="qr code scanner" class="img-fluid" style="border-radius:10px">
                
            </div>
        </div>
    </div>
        
    </body>
    </html>