<?php
include_once("Login_dbo.php");
include_once("Update_CV_dbo.php");
if (!isset($_SESSION['username'])) {
    header("Location:Login.php");
}

include "header.php";
include "navbar.php";
?>

<script type="text/javascript">
    function updateAlert() {
        alert("Updated successfully.");
    }
</script>

<form action="Update_CV_dbo.php" method="post" enctype="multipart/form-data">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4" style="margin-top: 25px;">
                <div class="card">
                    <div class="form-group">
                        <label for="image">Profile Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        <?php echo isset($image) ? "<img src='$image' class='mt-2' style='max-width: 200px; height: auto;'/>" : ""; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Basic Info</h5>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full name*</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address*</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $address; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone*</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="skills" class="form-label">Skills*</label>
                            <input type="text" name="skills" class="form-control" value="<?php echo $skill; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="language" class="form-label">Language</label>
                            <input type="text" name="language" class="form-control" value="<?php echo $language; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Working Experience</h5>
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" name="companyName" class="form-control" value="<?php echo $companyname; ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="cposition" class="form-label">Position</label>
                                <input type="text" name="cposition" class="form-control" value="<?php echo $cposition; ?>">
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="startDate" class="form-label">Start Date</label>
                                <input type="date" name="startDate" class="form-control" value="<?php echo $cstartdate; ?>">
                            </div>
                                <div class="col-md-6">
                                    <label for="endDate" class="form-label">End Date</label>
                                    <input type="date" name="endDate" class="form-control" value="<?php echo $cenddate; ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Education</h5>
                            <div class="mb-3">
                                <label for="institute" class="form-label">Institution</label>
                                <input type="text" name="institute" class="form-control" value="<?php echo $institute; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="clgName" class="form-label">College Name</label>
                                <input type="text" name="clgName" class="form-control" value="<?php echo $collegename; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="sclName" class="form-label">School Name</label>
                                <input type="text" name="sclName" class="form-control" value="<?php echo $schoolname; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="trainings" class="form-label">Trainings</label>
                                <input type="text" name="trainings" class="form-control" value="<?php echo $training; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="volunteering" class="form-label">Volunteering</label>
                                <input type="text" name="volunteering" class="form-control" value="<?php echo $volunteering; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" name="cancel" class="btn btn-dark me-md-2">Cancel</button>
                            <button type="submit" name="update" class="btn btn-danger" onclick="updateAlert()">Update</button>
                        </div>
                    </div>
                </div>
            </div>
</form>

<?php
include "footer.php";
?>
