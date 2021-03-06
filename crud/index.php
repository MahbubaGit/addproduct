<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud operation</title>
    <style>
        form {
            background-color: azure;
            padding: 10px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 6px;
        }
    </style>

</head>

<body>
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="insert1.php" method="post" enctype="multipart/form-data">
                    <h3>Crud operation</h3>
                    <div class="mb-3">
                        product name:
                        <input type="text" class="form-control" name="name">

                    </div>
                    <div class="mb-3">
                        product price:
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        product image:
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary col-12">Add</button>


                </form>
            </div>
        </div>
    </div>
    <br>
    <tr>
        <div class="container">
            <div class="row justify-content-center">

                <table class="table table-success table-striped">




                    <thead>
                        <tr>
                            <th scope='col'>Id </th>
                            <th scope='col'> Name </th>
                            <th scope='col'>price </th>
                            <th scope='col'>image</th>
                            <th scope='col'>Update </th>
                            <th scope='col'>Delete </th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        include 'config.php';
                        $allData = mysqli_query($conn, "SELECT * FROM `crud`");
                        while ($row = mysqli_fetch_array($allData)) {
                            echo "<tr> 
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><img src='$row[image]' alt='product image' width='100px'></td>
                        <td><a class='btn btn-warning' href='update.php?id=$row[id]'>update</a></td>
                        <td><a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a></td>
                    </tr>";
                        }


                        ?>

                    </tbody>


                </table>


            </div>


        </div>








        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>

</html>