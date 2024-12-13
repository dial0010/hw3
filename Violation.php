<?php
require_once("util-db.php");
require_once("model-Violation.php");

$pageTitle = "Violations";
include "view-header.php";

// Handling form submissions (Add, Delete, Edit)
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertViolation($_POST['vNumber'], $_POST['vReason'])) {
                echo '<div class="alert alert-success" role="alert">Violation added.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;
        case "Delete":
            if (deleteViolation($_POST['cid'])) {
                echo '<div class="alert alert-success" role="alert">Violation deleted.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;
        case "Edit":
            if (updateViolation($_POST['vNumber'], $_POST['vReason'], $_POST['cid'])) {
                echo '<div class="alert alert-success" role="alert">Violation edited.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;
    }
}

// Fetch all violations
$Violations = selectViolation();

// Fetch violation reasons and count the occurrences
$violationTypes = [];
while ($violation = $Violations->fetch_assoc()) {
    $violationType = $violation['Violation_reason'];
    if (isset($violationTypes[$violationType])) {
        $violationTypes[$violationType]++;
    } else {
        $violationTypes[$violationType] = 1;
    }
}

// Prepare data for the violation chart
$violationNames = array_keys($violationTypes);
$violationCounts = array_values($violationTypes);
?>

<div class="container">
    <h1 class="my-4">Violation Management</h1>

    <!-- Chart for Violation Types -->
    <canvas id="violationChart"></canvas>

    <script>
    // Chart for grouping violations by type (pie chart)
    var ctx = document.getElementById('violationChart').getContext('2d');
    var violationChart = new Chart(ctx, {
        type: 'pie', // Pie chart for violation types
        data: {
            labels: <?php echo json_encode($violationNames); ?>, // Violation types
            datasets: [{
                label: 'Violations per Type',
                data: <?php echo json_encode($violationCounts); ?>, // Violation counts
                backgroundColor: ['#FF5733', '#33FF57', '#3357FF', '#FF33A1'], // Different colors for each slice
                borderColor: 'rgba(0, 0, 0, 0.1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
    </script>

    <!-- Violation Form for Add/Edit -->
    <h2 class="my-4">Manage Violations</h2>
    <form method="post">
        <div class="mb-3">
            <label for="vNumber" class="form-label">Violation Number</label>
            <input type="text" class="form-control" id="vNumber" name="vNumber" required>
        </div>
        <div class="mb-3">
            <label for="vReason" class="form-label">Violation Reason</label>
            <input type="text" class="form-control" id="vReason" name="vReason" required>
        </div>
        <input type="hidden" name="actionType" value="Add">
        <button type="submit" class="btn btn-primary">Add Violation</button>
    </form>

    <!-- Display Violations Table -->
    <h3 class="my-4">Existing Violations</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Violation Number</th>
                <th>Violation Reason</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Displaying all violations in the table
            $Violations = selectViolation();
            while ($violation = $Violations->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $violation['Violation_number']; ?></td>
                    <td><?php echo $violation['Violation_reason']; ?></td>
                    <td>
                        <!-- Edit Button (opens the modal to edit violation) -->
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editViolationModal<?php echo $violation['Violation_id']; ?>">Edit</button>

                        <!-- Delete Button (opens confirmation dialog) -->
                        <form method="post" class="d-inline">
                            <input type="hidden" name="cid" value="<?php echo $violation['Violation_id']; ?>">
                            <input type="hidden" name="actionType" value="Delete">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

                <!-- Modal for Editing Violation -->
                <div class="modal fade" id="editViolationModal<?php echo $violation['Violation_id']; ?>" tabindex="-1" aria-labelledby="editViolationModalLabel<?php echo $violation['Violation_id']; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editViolationModalLabel<?php echo $violation['Violation_id']; ?>">Edit Violation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <div class="mb-3">
                                        <label for="vNumber" class="form-label">Violation Number</label>
                                        <input type="text" class="form-control" id="vNumber" name="vNumber" value="<?php echo $violation['Violation_number']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="vReason" class="form-label">Violation Reason</label>
                                        <input type="text" class="form-control" id="vReason" name="vReason" value="<?php echo $violation['Violation_reason']; ?>" required>
                                    </div>
                                    <input type="hidden" name="cid" value="<?php echo $violation['Violation_id']; ?>">
                                    <input type="hidden" name="actionType" value="Edit">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </tbody>
    </table>

</div>

<?php include "view-footer.php"; ?>
