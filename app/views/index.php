<?php
/* This is how you echo out database information on the screen
foreach ($data['users'] as $user) {
    echo "Information: " . $user->user_name . $user->user_email;
    echo "<br>";
}
*/
?>
<?php require APPROOT . '/views/inc/header.php'; ?>
<h2><?php echo $data['description']; ?>
</h2>

<div class="users_buttens">
    <div class="container">
        <div class="text-center">        
              <a class="btn btn-success" href="<?php echo URLROOT; ?>super_user/index">Super User</a>
              <a class="btn btn-danger" href="<?php echo URLROOT; ?>financial_admin/index">Financial Admin</a>
              <a class="btn btn-success" href="<?php echo URLROOT; ?>docent/index">Docent</a>
              <a class="btn btn-danger" href="<?php echo URLROOT; ?>student/index">Student</a>

        </div>

    </div>

</div>


