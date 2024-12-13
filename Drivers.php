<?php 
require_once("util-db.php");  
require_once("model-Drivers.php");

$pageTitle = "Drivers";
include "view-header.php";

// Handling form submissions
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertDrivers($_POST['dName'], $_POST['dBrand'])) {
                echo '<div class="alert alert-success" role="alert">Driver added successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error adding driver.</div>';
            }
            break;
        case "Delete":
            if (deleteDrivers($_POST['did'])) {
                echo '<div class="alert alert-success" role="alert">Driver deleted successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error deleting driver.</div>';
            }
            break;
        case "Edit":
            if (updateDrivers($_POST['dName'], $_POST['dBrand'], $_POST['did'])) {
                echo '<div class="alert alert-success" role="alert">Driver updated successfully.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error updating driver.</div>';
            }
            break;
    }
}

// Fetching all drivers
$Drivers = selectDrivers();
?>

<div class="container">
    <h1 class="my-4">Driver Management</h1>

    <!-- Form to add new driver -->
    <form method="post" action="">
        <div class="mb-3">
            <label for="dName" class="form-label">Driver Name</label>
            <input type="text" class="form-control" id="dName" name="dName" required>
        </div>
        <div class="mb-3">
            <label for="dBrand" class="form-label">Car Brand</label>
            <input type="text" class="form-control" id="dBrand" name="dBrand" required>
        </div>
        <input type="hidden" name="actionType" value="Add">
        <button type="submit" class="btn btn-primary">Add Driver</button>
    </form>

    <!-- Table of drivers -->
    <h2 class="my-4">List of Drivers</h2>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Driver</th>
                <th>Car Brand</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through drivers and display them in the table
            $i = 1; // Counter for row numbers
            while ($Driver = $Drivers->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <!-- Add icon next to Driver Name -->
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <?= $Driver['Drivers_name']; ?>
                    </td>
                    <td>
                        <!-- Add icon next to Car Brand -->
                        <i class="fa fa-car" aria-hidden="true"></i>
                        <?= $Driver['Car_brand']; ?>
                    </td>
                    <td>
                        <!-- Edit and Delete actions -->
                        <form method="post" action="" class="d-inline-block">
                            <input type="hidden" name="did" value="<?= $Driver['Drivers_id']; ?>">
                            <input type="hidden" name="dName" value="<?= $Driver['Drivers_name']; ?>">
                            <input type="hidden" name="dBrand" value="<?= $Driver['Car_brand']; ?>">
                            <input type="hidden" name="actionType" value="Edit">
                            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                        </form>
                        <form method="post" action="" class="d-inline-block">
                            <input type="hidden" name="did" value="<?= $Driver['Drivers_id']; ?>">
                            <input type="hidden" name="actionType" value="Delete">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
                $i++; // Increment the row number
            }
            ?>
        </tbody>
    </table>
</div>

<?php include "view-footer.php"; ?>
