<?php
/* This is how you echo out database information on the screen
foreach ($data['users'] as $user) {
    echo "Information: " . $user->user_name . $user->user_email;
    echo "<br>";
}
*/
?>
<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="container">
<h1><?php echo $data['description']; ?>
</h1>

<div class="users_buttens">
    <div class="container">
        <div class="text-center">        
              <a class="btn btn-success" href="<?php echo URLROOT; ?>super_user/index">Super User</a>
              <a class="btn btn-danger" href="<?php echo URLROOT; ?>">User</a>
              <a class="btn btn-warning" href="<?php echo URLROOT; ?>">User</a>

        </div>

    </div>

</div>
</div>


