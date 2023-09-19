<!DOCTYPE html>
<html>
    <head>
        <title>Add Voting Title</title>
        <?php include("external.php");?>
    </head>

    <style>
       
    </style>

    <body>
        <header style="margin-bottom:100px">
            <?php require_once("header.php");?>
        </header>

<div class="container">


    <!-- Add voting Title section -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addvotingtitle">Add New</button>

    <br>
    <br>
            
            <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="addvotingtitle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                <!-- Form Starts Here -->

                <form action="">
                    <label for="voting-title" class="form-label">Voting Title:</label>
                    <input type="text" class="form-control" id="voting-title">
                    
                </form>
                <!-- Form ends Here -->


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add Title</button>
                </div>
            </div>
        </div>
    </div>



    <table class="table  table-border border-dark">
        <thead>
            <tr class="table-dark">
                <th>Sr No.</th>
                <th>Voting Title</th>
            </tr>
        </thead>
        <tbody class="table-striped">
            <tr>
                <td>1</td>
                <td>CR</td>

            </tr>
            <tr>
                <td>2</td>
                <td>VCR</td>

            </tr>
            <tr>
                <td>3</td>
                <td>CR</td>

            </tr>
            <tr>
                <td>4</td>
                <td>VCR</td>

            </tr>
            <tr>
                <td>5</td>
                <td>CR</td>

            </tr>
        </tbody>
    </table>

    </div>
    </body>
</html>