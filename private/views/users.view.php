<?= $this->view('includes/header') ?>
<?= $this->view('includes/nav') ?>

<div class="container">
    <h1 class="text-center">Staff</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>profile</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Rank</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td>
                                        <a href="<?= ROOT ?>profile">
                                            <img src="https://icons.iconarchive.com/icons/pictogrammers/material/128/school-icon.png"
                                                 alt="User Profile" class="profile-img" style="width:30px; height:30px;">
                                        </a>
                                    </td>
                                    <td><?= esc($user->first_name) ?></td>
                                    <td><?= esc($user->last_name) ?></td>
                                    <td><?= esc($user->email) ?></td>
                                    <td><?= esc($user->rank) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <a href="<?= ROOT ?>register" class="btn btn-primary">Add New Staff</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->view('includes/footer') ?>