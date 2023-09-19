<!DOCTYPE html>
<html>
    <head>
        <title>Conduct Voting</title>

        <?php require_once("external.php")?>
    </head>

    <body>
        <header style="margin-bottom:100px"><?php require_once("header.php")?></header>
       
        <div style="height:80vh; width:40vw; background-color:skyblue;"class="container d-flex align-items-center justify-content-center rounded-1">

            <form action="scan-id-card.php" method="post">
                
                <label for="voting-title" class="form-label">Voting Title</label>
                <select name="voting-title" id="voting-title"  class="form-control" style="width:30vw">
                    <option value="cr">CR</option>
                    <option value="vcr">VCR</option>
                    <option value="cr">CR</option>
                </select>
             
                
                <button type="submit" class="btn btn-primary my-2">Submit</button>
                
            </form>
        </div>

    </body>
</html>