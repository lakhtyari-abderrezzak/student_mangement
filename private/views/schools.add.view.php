<?php echo $this->view('includes/header'); ?>
<?php echo $this->view('includes/nav'); ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="login-container px-4">
                <h1 class="text-center">Create School</h1>
                <form method="post">
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
                    <div class="mb-3">
                        <label for="email" class="form-label">School Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-school"></i></span>
                            <input type="text" name="school" value="<?= getValue('school') ?>" class="form-control"
                                id="school" placeholder="School Name">
                        </div>
                    </div>
    
    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
    
                    
                </form>
            </div>
        </div>
    </div>

    <?php echo $this->view('includes/footer'); ?>