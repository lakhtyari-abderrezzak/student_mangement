<?php echo $this->view('includes/header'); ?>
<?php echo $this->view('includes/nav'); ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1>Schools</h1>
                <a href="<?= ROOT ?>schools/add" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Add School
                </a>
            </div>
            <?php if (isset($schools) && count($schools) > 0): ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User name</th>
                            <th>School Name</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($schools as $school): ?>
                            <tr>
                                <td><?php echo esc($school->id); ?></td>
                                <td><i class="fas fa-user me-2"></i><?php echo $school->user->first_name . ' ' . $school->user->last_name; ?></td>
                                <td><?php echo esc($school->school); ?></td>
                                <td><?php echo get_date($school->date); ?></td>
                                <td>
                                    <a href="<?= ROOT ?>schools/edit/<?php echo esc($school->id); ?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit text-white"></i></a>
                                    <a href="<?= ROOT ?>schools/delete/<?php echo esc($school->id); ?>"
                                        class="btn btn-danger btn-sm"><i class="fas fa-trash text-white"></i></a>
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