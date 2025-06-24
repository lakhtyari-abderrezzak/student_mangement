<?php echo $this->view('includes/header'); ?>
<?php echo $this->view('includes/nav'); ?>

<div class="login-container">
    <h3 class="login-title">Login</h3>
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

      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>

      <div class="text-center mt-3">
        <a href="#">Forgot password?</a>
      </div>
    </form>
  </div>

<?php echo $this->view('includes/footer'); ?>
