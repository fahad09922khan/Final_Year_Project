<?php
include("partial/header.php");
?>
<?php
include("partial/sidebar.php");
?>
<?php
include("config.php");
include("../functions.php");

?>

<style>
    .myalert.alert.alert-danger {
        position: absolute;
        top: 10px;
        right: -100%;
        z-index: 9999;
        animation: showing 5s;
    }

    .myalert ul {
        margin-bottom: 0;
        padding-left: 1rem;
    }

    @keyframes showing {

        5%,
        85% {
            right: 10px;
        }

        90% {
            right: -100%;
        }

        100% {
            display: none;
        }
    }
</style>
<main style="margin-top: 100px">
    <div class="container-fluid pt-4">
        <div class="form-outline mb-4">
            <input type="search" class="form-control" id="datatable-search-input">
            <label class="form-label" for="datatable-search-input">Search</label>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4 class="card-title mb-0" style="color: #f86f2d;">E Books</h4>

                            <button class="btn btn-theme" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Add Books</button>
                        </div>
                        <div class="table table-striped table-bordered">
                            <table class="table" id="">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Name </th>
                                        <th> Description </th>
                                        <th> Attachment </th>
                                        <th> Action </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select * from tbl_books order by id desc ";
                                    $res = mysqli_query($con, $sql);
                                    $c = 1;
                                    foreach ($res as $key) { ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $key['bname'] ?></td>
                                            <td><?= $key['bdesc'] ?></td>
                                            <td> <a href="uploadfiles/<?= $key['attachmeent'] ?>" download="<?= $key['attachmeent'] ?>">Download</a></td>
                                            <td class="text-right"><a href="php_request/booksdel.php?d=<?= $key['id'] ?>"><button type="button" class="btn btn-danger btn-icon ms-2">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </button></a></td>
                                        </tr>
                                    <?php $c++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Books</h5>
                    <button type="button" class="close" data-mdb-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">

                        <label for="">Book Title</label>
                        <input type="text" class="form-control mb-4" name="bookname" placeholder="Enter Book name" minlength="6" required>
                        <label for="">Book Description</label>
                        <textarea name="bookdesc" class="form-control mb-4" placeholder="Enter Book Description" rows="5" minlength="12" required></textarea>
                        <label for="">Book Attachhment</label>
                        <input type="file" name="bookattachment" accept=".pdf,.doc,.docx" class="form-control mb-4" placeholder="Enter Book name" required>
                        <div class="modal-footer px-0">
                            <button type="button" class="btn btn-dark" data-mdb-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="savebtn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!--Main Navigation-->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript" src="js/admin.js"></script>

</body>

</html>

<?php


if (isset($_POST['savebtn'])) {

    $books = $_FILES['bookattachment']['name'];
    $path = $_FILES['bookattachment']['tmp_name'];


    extract($_POST);
    if (empty($bookname)) {
        $errors[] = "Book name is required.";
    }
    if (empty($bookdesc)) {
        $errors[] = "Book description is required.";
    }
    // Validate book attachment
    if (isset($_FILES["bookattachment"]) && $_FILES["bookattachment"]["error"] === UPLOAD_ERR_OK) {
        $allowedExtensions = array("pdf", "doc", "docx");
        $fileExtension = pathinfo($_FILES["bookattachment"]["name"], PATHINFO_EXTENSION);

        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            $errors[] = "Only PDF and DOC files are allowed.";
        }
    } else {
        $errors[] = "Book attachment is required.";
    }

    if (empty($errors)) {
        if (move_uploaded_file($path, 'uploadfiles/' . $books)) {
            $q = "insert into tbl_books values(null,'$bookname','$bookdesc','$books',0)";
            mysqli_query($con, $q);
            echo "<script>alert('Books details has been added successfully.')</script>";
            echo "<script>window.location.href='ebooks.php'</script>";

        }
        // header("Location: success.php");
        // exit();
    } else {
        echo "<script>console.log('teest')</script>";
        if (!empty($errors)) {
            echo '<div class="myalert alert alert-danger">
                <ul>';
            foreach ($errors as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul>
            </div>';
        }
    }
    // if (move_uploaded_file($path, 'uploadfiles/' . $books)) {
    //     $q = "insert into tbl_books values(null,'$bookname','$bookdesc','$books',0)";

    //     mysqli_query($con, $q);
    //     echo "<script>alert('Books details has been added successfully.')</script>";
    // }
}





?>