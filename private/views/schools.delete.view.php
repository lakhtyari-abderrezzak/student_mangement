<?php echo $this->view('includes/header'); ?>
<?php echo $this->view('includes/nav'); ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="login-container px-4">
                <h3 class="text-center">Are you sure you want to delete <span class="text-danger"><?= $row->school ?> School??</span></h3>
                <form method="post">
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="hidden" name="id"  class="form-control"
                                 placeholder="School Name">
                        </div>
                    </div>
    
    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
    
                    
                </form>
            </div>
        </div>
    </div>

    <?php echo $this->view('includes/footer'); ?>