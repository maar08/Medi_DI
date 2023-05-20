<?php
include_once("My_CV_dbo.php");
include_once("Login_dbo.php");
if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
}

include "header.php";
include "navbar.php";
global $con;
?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4" style="margin-top: 18px;">
                <div class="card">
                    <?php if (!empty($image) && file_exists($image)) : ?>
                    <?php else : ?>
                        <div class="text-center">
                            <i class="bi bi-person-circle" style="font-size: 10rem;"></i>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="<?php echo $image; ?>" class="card-img-top" alt="User Image"/>
                            <?php echo $name; ?></h5>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-house-door"></i> <?php echo $address; ?></li>
                            <li><i class="bi bi-phone"></i> <?php echo $phone; ?></li>
                            <li><i class="bi bi-envelope"></i> <?php echo $email; ?></li>
                        </ul>
                        <h6 class="mt-3">Skills</h6>
                        <p class="card-text"><?php echo $skill; ?></p>
                        <h6>Languages</h6>
                        <p class="card-text"><?php echo $language; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8" style="margin-top: 18px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Work Experience</h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $companyname; ?></h6>
                        <p class="card-text"><?php echo $cposition; ?></p>
                        <p class="card-text"><?php echo $cstartdate; ?></p>
                        <p class="card-text"><?php echo $cenddate; ?></p>
                        <a href="Delete_info.php" class="card-link" name="deletew" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Education</h5>
                        <div>
                            <h6 class="card-title">Institution</h6>
                            <p><?php echo $institute; ?></p>
                        </div>
                        <div>
                            <h6 class="card-title">College Name</h6>
                            <p><?php echo $collegename; ?></p>
                        </div>
                        <div>
                            <h6 class="card-title">School Name</h6>
                            <p><?php echo $schoolname; ?></p>
                        </div>
                        <div>
                            <h6 class="card-title">Training</h6>
                            <p><?php echo $training; ?></p>
                        </div>
                        <div>
                            <h6 class="card-title">Volunteering</h6>
                            <p><?php echo $volunteering; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php";
?>