<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="index-dashboard">
  <div class="row">
    <div class="col-sm-2 col-md-2">
      <?php require APPROOT . '/views/inc/sidebar.php'; ?>
    </div>

    <div class="col-sm-9 col-md-10 ms-auto">
      <section class="container mt-5" style="width: 100%;">
        <!-- op deze plek komt de tapel -->
        <div class="tapel-aanvragen">
          <div class="container">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">naam_aanvrager</th>
                  <th scope="col">user_id</th>
                  <th scope="col">naam_artikel</th>
                  <th scope="col">uitgeleend</th>
                  <th scope="col">opbrengst</th>
                  <th scope="col">status</th>
                  <th scope="col">Action</th>




                </tr>
              </thead>
              <?php


              $tableRows = "";


              foreach ($data['aanvrag'] as $key => $value) {
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
        <button class='btn btn-secondary dropdown-toggle btn-sm' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown'aria-expanded='false'>
    Dropdown button
  </button>
  <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
    <li><a class='dropdown-item' href='#'>Action</a></li>
    <li><a class='dropdown-item' href='#?id$value->id'><span class='bi bi-pencil-square text-danger'></span> Update</a></li>
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