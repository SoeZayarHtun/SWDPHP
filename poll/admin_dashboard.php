<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "testdb");

// handle poll creation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_poll'])) {
    $question = $_POST['question'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];

    // Handle image upload
    $image_path = null;
    if (isset($_FILES['poll_image']) && $_FILES['poll_image']['error'] == 0) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) mkdir($target_dir, 0755, true);

        $image_name = time() . "_" . basename($_FILES['poll_image']['name']);
        $target_file = $target_dir . $image_name;

        if (move_uploaded_file($_FILES['poll_image']['tmp_name'], $target_file)) {
            $image_path = $target_file;
        }
    }

    $stmt = $conn->prepare("INSERT INTO poll (question, option1, option2, votes1, votes2, image) VALUES (?, ?, ?, 0, 0, ?)");
    $stmt->bind_param("ssss", $question, $option1, $option2, $image_path);
    $stmt->execute();
    $stmt->close();

    $msg = "Poll created successfully!";
}

// handle poll deletion
if (isset($_GET['delete'])) {
    $delete_id = intval($_GET['delete']);

    // Delete image file if exists
    $row = $conn->query("SELECT image FROM poll WHERE id=$delete_id")->fetch_assoc();
    if ($row['image'] && file_exists($row['image'])) {
        unlink($row['image']);
    }

    $conn->query("DELETE FROM poll WHERE id=$delete_id");
    header("Location: admin_dashboard.php");
    exit;
}

// fetch all polls
$result = $conn->query("SELECT * FROM poll ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <div class="d-flex">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>

<div class="container my-5">

    <?php if (!empty($msg)) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $msg; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            Create New Poll
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="create_poll" value="1">
                <div class="mb-3">
                    <label class="form-label">Question</label>
                    <input type="text" name="question" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Option 1</label>
                    <input type="text" name="option1" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Option 2</label>
                    <input type="text" name="option2" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Poll Image (optional)</label>
                    <input type="file" name="poll_image" class="form-control" accept="image/*">
                </div>
                <button class="btn btn-success">Create Poll</button>
            </form>
        </div>
    </div>

    <h4>Existing Polls</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Votes</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo htmlspecialchars($row['question']); ?></td>
                        <td><?php echo htmlspecialchars($row['option1']); ?></td>
                        <td><?php echo htmlspecialchars($row['option2']); ?></td>
                        <td><?php echo $row['votes1']; ?> / <?php echo $row['votes2']; ?></td>
                        <td>
                            <?php if ($row['image']) { ?>
                                <img src="<?php echo $row['image']; ?>" alt="Poll Image" width="80">
                            <?php } else { ?>
                                N/A
                            <?php } ?>
                        </td>
                        <td>
                            <a href="poll.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm" target="_blank">
                                View Poll
                            </a>
                            <a href="admin_dashboard.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this poll?');">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
