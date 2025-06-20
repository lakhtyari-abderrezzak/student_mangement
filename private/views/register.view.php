<?php echo $this->view('includes/header'); ?>

<div class="login-container">
    <h3 class="login-title">Register</h3>
    <form>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
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

<?php echo $this->view('includes/footer'); ?>
