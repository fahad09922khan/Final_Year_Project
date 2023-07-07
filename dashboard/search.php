<?php
include("config.php");
?>


<?php
                                                $search = isset($_POST['search']) ? $_POST['search'] : '';

                                                // Modify the SQL query to include the search condition
                                                $sql = "SELECT tbl_clothes_donation.id AS id, tbl_clothes_donation.donor_name AS donor_name, tbl_clothes_donation.email AS email, tbl_clothes_donation.phone AS phone, tbl_clothes_donation.address AS addresss, tbl_clothes_donation.city AS city, tbl_clothes_donation.state AS state, tbl_clothes_donation.country AS country, tbl_clothes_donation.zipcode AS zipcode, tbl_clothes_donation.clothing_type AS clothing_type, tbl_clothes_donation.clothing_size AS clothing_size, tbl_clothes_donation.quantity AS quantity, tbl_clothes_donation.conditions AS conditions, tbl_clothes_donation.donation_date AS donation_date, tbl_clothes_donation.country AS country, tbl_volunteer.name AS vname, tbl_clothes_donation.status AS status
                                                        FROM tbl_clothes_donation
                                                        LEFT JOIN tbl_volunteer ON tbl_clothes_donation.vid = tbl_volunteer.id
                                                        WHERE tbl_clothes_donation.donor_name LIKE '%$search%' OR tbl_clothes_donation.email LIKE '%$search%' OR tbl_clothes_donation.phone LIKE '%$search%' OR tbl_clothes_donation.city LIKE '%$search%' OR tbl_clothes_donation.country LIKE '%$search%' OR tbl_clothes_donation.city LIKE '%$search%' OR tbl_clothes_donation.clothing_size LIKE '%$search%'
                                                        ORDER BY tbl_clothes_donation.id DESC";

                                                $res = mysqli_query($con, $sql);

                                                if ($res === false) {
                                                    echo "Error executing the query: " . mysqli_error($con);
                                                }

                                                $c = 1;

                                                while ($row = mysqli_fetch_assoc($res)) {
                                                ?>
                                                    <tr>
                                                        <td><?= $c ?></td>
                                                        <td><?= $row['donor_name'] ?></td>
                                                        <td><?= $row['email'] ?></td>
                                                        <td><?= $row['phone'] ?></td>
                                                        <td><?= $row['addresss'] ?></td>
                                                        <td><?= $row['city'] ?></td>
                                                        <td><?= $row['state'] ?></td>
                                                        <td><?= $row['country'] ?></td>
                                                        <td><?= $row['zipcode'] ?></td>
                                                        <td><?= $row['clothing_type'] ?></td>
                                                        <td><?= $row['clothing_size'] ?></td>
                                                        <td><?= $row['quantity'] ?></td>
                                                        <td><?= $row['conditions'] ?></td>
                                                        <td><?= $row['donation_date'] ?></td>
                                                        <td>
                                                            <?php if ($row['status'] == 0) { ?>
                                                                <label class="badge badge-gradient-danger text-dark">Not Yet</label>
                                                            <?php } else { ?>
                                                                <?= $row['vname'] ?>
                                                            <?php } ?>
                                                        </td>
                                                        <td class="d-flex">
                                                            <a href="request_assign.php?id=<?= $row['id'] ?>" class="btn btn-gradient-dark me-2 btn-icon d-flex align-items-center justify-content-center">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="php_request/volunteerdel.php?id=<?= $row['id'] ?>"><button type="button" class="btn btn-danger btn-icon ms-2">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </button></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    $c++;
                                                }
                                                ?>