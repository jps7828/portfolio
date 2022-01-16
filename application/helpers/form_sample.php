<!-- Complete form sample -->


<?php
if (is_post_request()) {
    $admin['first_name']       = $_POST['first_name'] ?? '';
    $admin['last_name']        = $_POST['last_name'] ?? '';
    $admin['email']            = $_POST['email'] ?? '';
    $admin['username']         = $_POST['username'] ?? '';
    $admin['password']         = $_POST['password'] ?? '';
    $admin['confirm_password'] = $_POST['confirm_password'] ?? '';

    $result = check_errors($admin);
    if ($result === true) {
        // $new_id = mysqli_insert_id($db);
        // $_SESSION['message'] = 'Admin created.';
        // redirect_to(url_for('/staff/admins/show.php?id=' . $new_id));
    } else {
        $errors = $result;
    }
} else {
    // display the blank form
    $admin = [];
    $admin["first_name"] = '';
    $admin["last_name"] = '';
    $admin["email"] = '';
    $admin["username"] = '';
    $admin['password'] = '';
    $admin['confirm_password'] = '';
    $errors = '';
}

?>





<!-- Form custom js included for form validation also at client side -->

<form class="row g-3 needs-validation" novalidate method="post" enctype="multipart/form-data" action="<?php echo url_for('e-portal'); ?>">
    <div class="col-md-4">
        <label for="first_name" class="form-label">First name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="" required placeholder="First name...">
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            <?= $errors['first_name'] ?? '' ; ?>
        </div>
    </div>
    <div class="col-md-4">
        <label for="last_name" class="form-label">Last name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="" required placeholder="Last name...">
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            <?= $errors['last_name'] ?? '' ; ?>
        </div>
    </div>
    <div class="col-md-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="" required placeholder="Email..">
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            <?= $errors['email'] ?? '' ; ?>
        </div>
    </div>
    <div class="col-md-4">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="" required placeholder="Username...">
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            <?= $errors['username'] ?? '' ; ?>
        </div>
    </div>
    <div class="col-md-4">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="" required placeholder="Password...">
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            <?= $errors['password'] ?? '' ; ?>
        </div>
    </div>
    <div class="col-md-4">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="" required placeholder="Confirm Password...">
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            <?= $errors['confirm_password'] ?? '' ; ?>
        </div>
    </div>
   
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" name="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>
<!-- Form -->