<!DOCTYPE html>
<html>
    <head>
        <title>
            Reports
        </title>
        <?php require_once("external.php");?>
    </head>

    <body>

    <header style="margin-bottom:100px">
        <?php include("header.php")?>
    </header>
  
<div class="container rounded-1 col-9 col-lg-3 pe-4 ps-4 pt-4 pb-4" style="background-color:white; border: 1px solid black; height: 80vh;">


<h2>Choose The Voting title</h2>

    <form action="analytics.php" method="post">
        
        <label for="voting-title" class="form-label">Voting Title:</label>
        <select name="" id="voting-title" class="form-control">
            <option value="CR">CR</option>
            <option value="CR">VCR</option>
            <option value="CR">CR</option>
        </select>
        
        <button class="btn btn-primary my-3" type="submit">Submit</button>
        
    </form>
    
</div>
    </body>


</html>