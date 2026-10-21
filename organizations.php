<?php
require_once 'display_organization.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="nav-wrapper">
        <div class="nav-container">
            <div class="left-side-nav-container">
                <div class="logo">
                    <img src="Hub monogram.svg" id="tech-hub-logo" alt="">
                </div>
                <div class="title-and-university">
                    <p>VSU Organization Hub</p>
                    <p id="p-university-name">VIRGINIA STATE UNIVERSITY</p>
                </div>
            </div>
            <div class="middle-side-nav-container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="organizations.html">Organizations</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="right-side-nav-container">
                <div class="concept">
                    <p>STUDENT PROJECT CONCEPT</p>
                </div>
                <div class="authorize-button">
                    <p>Log in</p>
                    <img src="log-in.svg" alt="">
                </div>
            </div>
            
        </div>
    </div>  
    <section class="organizations">
    <h1>Student Organizations</h1>

    <table class="organizations-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Description</th>
                <th>Advisor</th>
                <th>Contact</th>
            </tr>
        </thead>

        <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['type']) ?></td>
                        <td><?= htmlspecialchars($row['description']) ?></td>
                        <td><?= htmlspecialchars($row['advisor']) ?></td>
                        <td><?= htmlspecialchars($row['contact']) ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No organizations found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>

</body>
</html>

<?php
$conn->close();
?>