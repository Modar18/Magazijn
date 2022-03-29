
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Hello, world!</title>
</head>

<body>
    <div class="index-dashboard">
        <div class="row">
            <div class="col-sm-2 col-md-2">
                <?php require APPROOT . '/views/inc/super_user_sidebar.php'; ?>
            </div>

            <div class="col-sm-9 col-md-10 ms-auto">
                <section class="container mt-5" style="width: 100%;">
                    <!-- op deze plek komt de tapel -->
                    <div class="tapel-aanvragen">
                        <div class="container">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Naam_aanvrager</th>
                                        <th>User_id</th>
                                        <th>Naam_artikel</th>
                                        <th>Uitgeleend</th>
                                        <th>Opbrengst</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php

                                $tableRows = "";


                                foreach ($data['aanvragen'] as $key => $value) {
                                    switch ($value->status) {
                                        case "0":
                                            $status = "<span class='badge badge-success bg-danger badge-pill'>Not actief</span>";
                                            break;
                                        case "1":
                                            $status = "<span class='badge badge-success bg-success badge-pill'>Actief</span>";
                                    }
                                    $tableRows .= "
<td>$value->id</td>
<td>$value->naam_aanvrager</td>
<td>$value->user_id</td>
<td>$value->naam_artikel</td>
<td>$value->uitgeleend</td>
<td>$value->opbrengst</td>
<td>$status</td>


<td  class= text-center> 
<button class='btn btn-primary dropdown-toggle btn-sm' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown'aria-expanded='false'>
Dropdown button
</button>
<ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
<li><a class='dropdown-item ' href='#'>Action</a></li>
<li><a class='dropdown-item' href='" . URLROOT . "super_user/update/$value->id'><span class='bi bi-pencil-square text-danger'></span> Update</a></li>
<li><a class='dropdown-item' href='#?id$value->id'><span class='bi bi-x-circle text-danger'></span> Delete</a></li>

</ul>
</td>


</tr> ";
                                }
                                ?>

                                <tbody>
                                    <tr>
                                        <?php
                                        echo $tableRows;
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php
                    ?>
                </section>
            </div>
        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>



</body>

</html>