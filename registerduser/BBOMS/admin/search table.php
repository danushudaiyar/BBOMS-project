<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>search table</title>
    <style>
             body {
            background-color:none;
        }
        table{
          text-align: none;
        }
        .Update{
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            cursor:pointer
        }
        .Delete{
            background-color: red;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            cursor:pointer
        }
        h1{
          text-align: center;
        }
            table,tr,th,td
            {
                border: 1px solid black;
            }
            .submit{
                background-color: red;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            cursor:pointer
            }
        </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>How to make Search box & filter data in HTML Table from Database in PHP MySQL </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>campaign Name</th>
                                    <th>organizer</th>
                                    <th>date</th>
                                    <th>location</th>
                                    <th>description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                     
                                    $con = mysqli_connect("localhost","root","","register");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM campaign WHERE CONCAT(id,campaignname,organizer,date,location,description) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['campaignname']; ?></td>
                                                    <td><?= $items['organizer']; ?></td>
                                                    <td><?= $items['date']; ?></td>
                                                    <td><?= $items['location']; ?></td>
                                                    <td><?= $items['description']; ?></td>
                                                     <td> <a href='Updatecampaign.php?id=$row[id]'><input type='Submit' value='Update' class='Update'>
                         <a href='deletecampaign.php?id=$row[id]'><input type='Submit' value='Delete' class='Delete'onclick = 'return check_delete()''</a></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script> 
 function check_delete()
 {
   return confirm('Are You Sure You Want To Delete The Record ?');
 }
</script>