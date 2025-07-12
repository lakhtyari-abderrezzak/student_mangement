<?php echo $this->view('includes/header'); ?>
<?php echo $this->view('includes/nav'); ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1>Schools</h1>
                <a href="<?=ROOT?>schools/add" class="btn btn-primary">Add School</a>
            </div>
            <?php if(isset($schools) && count($schools) > 0) : ?>
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>School Name</th>
                        <th>Date Created</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($schools as $school): ?>
                        <tr>
                            <td><?php echo esc($school->id); ?></td>
                            <td><?php echo esc($school->school); ?></td>
                            <td><?php echo esc($school->date); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
                <div class="alert alert-info">No schools found.</div>
            <?php endif; ?>

        </div>
    </div>

<?php echo $this->view('includes/footer'); ?>