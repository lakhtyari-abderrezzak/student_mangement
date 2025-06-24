<?php echo $this->view('includes/header'); ?>
<?php echo $this->view('includes/nav'); ?>

<div class="container glass-container mt-10">

    <!-- Profile Image and Table -->
    <div class="row text-center align-items-start mb-2">
        <!-- Profile Image Column -->
        <div class="mb-4 col-12 col-md-4 col-lg-3">
            <img src="https://icons.iconarchive.com/icons/pictogrammers/material/128/school-icon.png" alt="User Profile"
                class="profile-img mb-2" style="width:65px; height:65px;">
            <h3 class="fw-bold">John Doe</h3>
        </div>

        <!-- Profile Table Column -->
        <div class="table-responsive col-12 col-md-8 col-lg-9">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th scope="row">First Name</th>
                        <td><?= $user->first_name?></td>
                    </tr>
                    <tr>
                        <th scope="row">Last Name</th>
                        <td><?= $user->last_name?></td>
                    </tr>
                    <tr>
                        <th scope="row">Gender</th>
                        <td><?= $user->gender?></td>
                    </tr>
                    <tr>
                        <th scope="row">Rank</th>
                        <td><?= $user->rank?></td>
                    </tr>
                    <tr>
                        <th scope="row">Date created</th>
                        <td><?= $user->date?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Profile Navigation -->
    <div class="row mb-4">
        <div class="col">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <!-- Nav Tabs -->
                <ul class="nav nav-tabs mb-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=ROOT?>info">Basic info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>classes">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>tests">Tests</a>
                    </li>
                </ul>

                <!-- Search Bar (aligned right) -->
                <form class="d-flex" role="search">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary ms-2" type="submit">Search</button>
                </form>
            </div>
        </div>

    </div>

</div>

<?php echo $this->view('includes/footer'); ?>