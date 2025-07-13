<?php
// Include config for database connection
require_once 'config.php';

// Define role titles
$roleTitles = [
    0 => 'Citizen',
    2 => 'Electrician',
    3 => 'Water Supply Manager',
    4 => 'Waste Management Officer',
    5 => 'Road Maintenance Worker',
    6 => 'Public Park Supervisor'
];

// Fetch users with Role 0 (Citizen)
$queryCitizens = "SELECT * FROM users WHERE Role = 0";
$stmtCitizens = $conn->prepare($queryCitizens);
$stmtCitizens->execute();
$citizens = $stmtCitizens->fetchAll(PDO::FETCH_ASSOC);

// Fetch users with Role > 1 (Staff)
$queryStaff = "SELECT * FROM users WHERE Role > 1";
$stmtStaff = $conn->prepare($queryStaff);
$stmtStaff->execute();
$staff = $stmtStaff->fetchAll(PDO::FETCH_ASSOC);

// Fetch all forms
$queryForms = "SELECT * FROM forms";
$stmtForms = $conn->prepare($queryForms);
$stmtForms->execute();
$forms = $stmtForms->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles_staff_dashboard.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Include Sidebar -->
    <?php include('staff_sidebar.php'); ?>

    <!-- Main Content Area -->
    <div class="main-content">
        <div class="dashboard-header">
            <h1>Staff Dashboard</h1>
            <button class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>
        </div>

        <!-- Citizens Table -->
        <section>
            <div class="section-header">
                <h2>Citizens</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($citizens as $user): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['First_Name'] . ' ' . $user['Last_Name']); ?></td>
                            <td><?php echo htmlspecialchars($user['Email']); ?></td>
                            <td><?php echo $roleTitles[0]; ?></td>
                            <td>
                                <span class="view-only">View Only</span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <!-- Staff Table -->
        <section>
            <div class="section-header">
                <h2>Staff</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($staff as $user): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['First_Name'] . ' ' . $user['Last_Name']); ?></td>
                            <td><?php echo htmlspecialchars($user['Email']); ?></td>
                            <td><?php echo htmlspecialchars($roleTitles[$user['Role']] ?? 'Staff'); ?></td>
                            <td>
                                <span class="view-only">View Only</span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <!-- Forms Table -->
        <section>
            <h2>Form Submissions</h2>
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Form Title</th>
                        <th>Form Content</th>
                        <th>Status</th>
                        <th>Submission Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($forms as $form): ?>
                        <?php
                        // Fetch user name by matching User_ID
                        $userQuery = "SELECT First_Name, Last_Name FROM users WHERE User_ID = :userID";
                        $userStmt = $conn->prepare($userQuery);
                        $userStmt->execute([':userID' => $form['User_ID']]);
                        $user = $userStmt->fetch(PDO::FETCH_ASSOC);
                        $userName = $user ? htmlspecialchars($user['First_Name'] . ' ' . $user['Last_Name']) : 'Unknown User';

                        // Decode JSON content
                        $formContent = json_decode($form['Form_Content'], true);
                        ?>
                        <tr id="form-<?php echo $form['Form_ID']; ?>">
                            <td><?php echo $userName; ?></td>
                            <td><?php echo htmlspecialchars($form['Form_Title']); ?></td>
                            <td>
                                <?php if ($formContent): ?>
                                    <ul style="list-style: none; padding: 0;">
                                        <?php foreach ($formContent as $key => $value): ?>
                                            <li><strong><?php echo htmlspecialchars(ucwords(str_replace('_', ' ', $key))); ?>:</strong> 
                                                <?php if ($key === 'location'): ?>
                                                    <a href="<?php echo htmlspecialchars($value); ?>" target="_blank">Click here</a>
                                                <?php else: ?>
                                                    <?php echo htmlspecialchars($value); ?>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    No content available
                                <?php endif; ?>
                            </td>
                            <td class="status">
                                <?php if ($form['Status'] === 'Approved'): ?>
                                    <span class="status-approved">Approved</span>
                                <?php elseif ($form['Status'] === 'Disapproved'): ?>
                                    <span class="status-disapproved">Disapproved</span>
                                <?php else: ?>
                                    <span class="status-pending">Pending</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo htmlspecialchars($form['Submission_Date']); ?></td>
                            <td>
                                <div class="action-buttons">
                                <button class="btn green approve-btn" data-id="<?php echo $form['Form_ID']; ?>">Approve</button>
                                <button class="btn red disapprove-btn" data-id="<?php echo $form['Form_ID']; ?>">Disapprove</button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>

    <script>
        $(document).ready(function () {
            // Approve button click handler
            $(".approve-btn").click(function () {
                const formId = $(this).data("id");
                $.post("update_form_status.php", { id: formId, status: "Approved" }, function (response) {
                    if (response.success) {
                        const statusCell = $(`#form-${formId} .status`);
                        statusCell.html('<span class="status-approved">Approved</span>');
                    } else {
                        alert("Failed to update status.");
                    }
                }, "json");
            });

            // Disapprove button click handler
            $(".disapprove-btn").click(function () {
                const formId = $(this).data("id");
                $.post("update_form_status.php", { id: formId, status: "Disapproved" }, function (response) {
                    if (response.success) {
                        const statusCell = $(`#form-${formId} .status`);
                        statusCell.html('<span class="status-disapproved">Disapproved</span>');
                    } else {
                        alert("Failed to update status.");
                    }
                }, "json");
            });
        });
    </script>
</body>
</html>
