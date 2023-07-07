<?php
include("partial/header.php");
include("config.php");
include("php_request/functions.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['users_name']) && isset($_POST['id'])) {
        $users_name = $_POST['users_name'];
        $id = $_POST['id'];

        // Validate and sanitize the input values here if needed

        $q = "UPDATE tbl_fooddonate SET vid='$users_name', status=1 WHERE id='$id'";
        if (mysqli_query($con, $q)) {
            // Update successful
            successMsg('Volunteer Added!');
            echo "<script>window.location.href='fooddonation.php'</script>";
            exit;
        } else {
            // Error occurred while executing the query
            echo "Error: " . mysqli_error($con);
        }
    } else {
        // Invalid form data
        echo "Invalid form submission";
    }
}

include("partial/sidebar.php");
?>

<main style="margin-top: 100px">
    <div class="container-scroller">
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 mx-auto grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Request Assign Form</h4>
                                    <p class="card-description"> </p>
                                    <form class="forms-sample" method="POST">
                                        <div class="form-group row align-items-center">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Volunteer Name</label>
                                            <div class="col-sm-8">
                                                <select name="users_name" id="users_name" class="form-control" style="height: 45px;" required>
                                                    <option value="">Please Select one...</option>
                                                    <?php
                                                    $sql = "SELECT * FROM tbl_volunteer WHERE status = 1 ORDER BY name ASC";
                                                    $res = mysqli_query($con, $sql);
                                                    if ($res) {
                                                        while ($row = mysqli_fetch_assoc($res)) {
                                                            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Add a hidden input field to store the id value -->
                                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                        <a href="fooddonation.php" class="btn btn-light">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
