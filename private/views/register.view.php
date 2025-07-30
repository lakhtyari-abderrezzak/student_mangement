<?php echo $this->view('includes/header'); ?>
<?php echo $this->view('includes/nav'); ?>

<div class="container">
    <div class="login-container px-4">
        <h3 class="login-title">Register</h3>
        <?php if (isset($errors) && count($errors) > 0): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= esc($error); ?></li>
                    <?php endforeach; ?>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form method="post">
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" name="first_name" class="form-control" value="<?= getValue('first_name'); ?>"
                        placeholder="Enter your first name">
                </div>
            </div>
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" name="last_name" class="form-control" value="<?= getValue('last_name'); ?>"
                        placeholder="Enter your last name">
                </div>
            </div>
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" value="<?= getValue('email'); ?>" name="email"
                        placeholder="you@example.com">
                </div>
            </div>
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-users"></i></span>
                    <select name="gender" class="form-control">
                        <option selected disabled>--Select Gender--</option>
                        <option <?= getSelected('gender', 'male'); ?> value="male">Male</option>
                        <option <?= getSelected('gender', 'female'); ?> value="female">female</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-ribbon"></i></span>
                    <select name="rank" class="form-control">
                        <option <?= getSelected('rank', ''); ?> disabled>--Select Rank--</option>
                        <option <?= getSelected('rank', 'student'); ?> value="student">Student</option>
                        <option <?= getSelected('rank', 'reception'); ?> value="reception">Reception</option>
                        <option <?= getSelected('rank', 'lecturer'); ?> value="lecturer">Lecturer</option>
                        <option <?= getSelected('rank', 'admin'); ?> value="admin">Admin</option>
                        <option <?= getSelected('rank', 'super-admin'); ?> value="super-admin">Super Admin</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" <?= getValue('password') ?> name="password"
                        placeholder="Password">
                </div>
            </div>

            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" <?= getValue('confirm_password') ?>
                        name="confirm_password" placeholder="Confirm Password">
                </div>
            </div>

            <div class="d-grname gap-2">
                <button type="submit" class="btn btn-success">Register</button>
            </div>

            <div class="text-center mt-3">
                <a href="<?= ROOT . 'login' ?>">Already have an account? Login</a>
            </div>
        </form>
    </div>
</div>

<?php echo $this->view('includes/footer'); ?>