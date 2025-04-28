<?php
$page = $_GET['page'] ?? 'dashboard'; // Default to dashboard
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= ucfirst($page) ?> - DepotTrace</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="main">
    <h1><?= ucfirst($page) ?> Section</h1>

    <?php
    switch ($page) {
       
        case 'parsedlogs':
            echo "<p>Parsed Logs: View and analyze parsed session data.</p>";
            break;
        case 'daily':
            echo "<p>Daily Stats: Overview of today's activity.</p>";
            break;
        case 'monthly':
            echo "<p>Monthly Stats: Summary of this month's sessions and users.</p>";
            break;
        case 'yearly':
            echo "<p>Yearly Stats: Annual performance and trends.</p>";
            break;
        case 'sessions':
            echo "<p>Sessions Overview: Drill down into user session details.</p>";
            break;
        case 'breakdown':
            echo "<p>User Breakdown: View statistics by user type or group.</p>";
            break;
        case 'geography':
            echo "<p>Geography: Session distribution by region or country.</p>";
            break;
        case 'team':
            echo "<p>Team Management: View and manage your team members.</p>";
            break;
        case 'createuser':
            echo "<p>Create User: Add new users to the platform.</p>";
            break;
        case 'customers':
            echo "<p>Customers: View and manage registered customers.</p>";
            break;
        default:
            echo "<p>Welcome to DepotTrace!</p>";
            break;
    }
    ?>
</div>

</body>
</html>
