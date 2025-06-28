<?php echo $this->view('includes/header'); ?>
<?php echo $this->view('includes/nav'); ?>

<div class="container">
<div class="login-container px-4">
    <h3 class="login-title">Register</h3>
    <?php 
    if(isset($errors) && !empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <form method="post">
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="firstname" class="form-control"  placeholder="Enter your first name" >
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="lastname" class="form-control"  placeholder="Enter your last name" >
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="you@example.com" >
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-users"></i></span>
                <select name="gender" name="gender" class="form-control">
                    <option selected disabled>--Select Gender--</option>
                    <option value="male">Male</option>
                    <option value="female">female</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-ribbon"></i></span>
                <select name="rank" class="form-control">
                    <option selected disabled>--Select Rank--</option>
                    <option value="student">Student</option>
                    <option value="reception">Reception</option>
                    <option value="lecturer">Lecturer</option>
                    <option value="admin">Admin</option>
                    <option value="super-admin">Super Admin</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" >
            </div>
        </div>

        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" name="confirm-password" placeholder="Confirm Password" >
            </div>
        </div>

        <div class="d-grname gap-2">
            <button type="submit" class="btn btn-success">Register</button>
        </div>

        <div class="text-center mt-3">
            <a href="#">Already have an account? Login</a>
        </div>
    </form>
</div>
</div>

<?php echo $this->view('includes/footer'); ?>
