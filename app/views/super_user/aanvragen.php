<?php require APPROOT . '/views/inc/header.php'; ?>

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

        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($data['aanvrag'] as $aanvrag): ?>
            <tr>
                <td><?echo $aanvrag->id;?></td>
                <td><?=$aanvrag['naam_aanvrager']?></td>
                <td><?=$aanvrag['naam_artikel']?></td>
                <td><?=$aanvrag['uitgeleend']?></td>
                <td><?=$aanvrag['opbrengst']?></td>
                <td><?=$aanvrag['']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$aanvrag['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$aanvrag['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>

    
    </tbody>
  </table>
    </div>
</div>
<?php  

?>

 
 