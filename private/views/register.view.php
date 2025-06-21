<?php echo $this->view('includes/header'); ?>
<?php echo $this->view('includes/nav'); ?>

<div class="container">
<div class="login-container">
    <h3 class="login-title">Register</h3>
    <form>
        <div class="mb-3">
            <label for="email" class="form-label">First name</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="email" name="firstname" class="form-control" id="email" placeholder="Enter your first name" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Last name</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="email" name="lastname" class="form-control" id="email" placeholder="Enter your last name" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Gender</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-users"></i></span>
                <select name="gender" id="" class="form-control">
                    <option selected disabled>--Select Gender--</option>
                    <option value="male">Male</option>
                    <option value="female">female</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Rank</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-ribbon"></i></span>
                <select name="gender" id="" class="form-control">
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
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" required>
            </div>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success">Register</button>
        </div>

        <div class="text-center mt-3">
            <a href="#">Already have an account? Login</a>
        </div>
    </form>
</div>
</div>

<?php echo $this->view('includes/footer'); ?>
