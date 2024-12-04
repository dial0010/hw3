<div class="container mt-4">
    <h1 class="text-center text-primary mb-4">Drivers List</h1>

    <!-- Search Bar -->
    <form class="mb-4" method="get" action="Drivers.php">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for Drivers..." name="searchTerm" value="<?= isset($_GET['searchTerm']) ? $_GET['searchTerm'] : ''; ?>">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    <!-- Add Driver Form -->
    <form method="post" action="Drivers.php">
        <div class="mb-3">
            <label for="dName" class="form-label">Driver's Name</label>
            <input type="text" class="form-control" id="dName" name="dName" required>
        </div>
        <div class="mb-3">
            <label for="dBrand" class="form-label">Car Brand</label>
            <input type="text" class="form-control" id="dBrand" name="dBrand" required>
        </div>
        <input type="hidden" name="actionType" value="Add">
        <button type="submit" class="btn btn-success">Add Driver</button>
    </form>

    <!-- Drivers Table -->
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Driver's Name</th>
                <th scope="col">Car Brand</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($Drivers->num_rows > 0) {
                while ($driver = $Drivers->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $driver['Drivers_id'] . "</td>";
                    echo "<td>" . $driver['Drivers_name'] . "</td>";
                    echo "<td>" . $driver['Car_brand'] . "</td>";
                    echo "<td>
                            <a href='#' class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#editDriverModal" . $driver['Drivers_id'] . "'>Edit</a>
                            <form method='post' action='Drivers.php' class='d-inline'>
                                <input type='hidden' name='did' value='" . $driver['Drivers_id'] . "'>
                                <input type='hidden' name='actionType' value='Delete'>
                                <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
                            </form>
                          </td>";
                    echo "</tr>";

                    // Edit Modal
                    echo "
                    <div class='modal fade' id='editDriverModal" . $driver['Drivers_id'] . "' tabindex='-1' aria-labelledby='editDriverModalLabel' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='editDriverModalLabel'>Edit Driver</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <form method='post' action='Drivers.php'>
                                        <div class='mb-3'>
                                            <label for='dName' class='form-label'>Driver's Name</label>
                                            <input type='text' class='form-control' name='dName' value='" . $driver['Drivers_name'] . "' required>
                                        </div>
                                        <div class='mb-3'>
                                            <label for='dBrand' class='form-label'>Car Brand</label>
                                            <input type='text' class='form-control' name='dBrand' value='" . $driver['Car_brand'] . "' required>
                                        </div>
                                        <input type='hidden' name='did' value='" . $driver['Drivers_id'] . "'>
                                        <input type='hidden' name='actionType' value='Edit'>
                                        <button type='submit' class='btn btn-primary'>Update Driver</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>No drivers found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Footer included from view-footer.php -->
