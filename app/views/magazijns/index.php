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
                  <th scope="col">naam</th>
                  <th scope="col">omschrijving</th>
                  <th scope="col">Prijs</th>
                </tr>
              </thead>
              <?php
              $tableRows = "";
              foreach ($data['magazijn'] as $key => $value) {
                
                $tableRows .= "
        <td>$value->id</td>
        <td>$value->naam</td>
        <td>$value->omschrijving</td>
        <td>$value->prijs</td>
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