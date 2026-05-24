<?php
// connect to database
$conn = new mysqli("localhost", "root", "", "testdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// get poll id
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    // get first poll as default
    $res = $conn->query("SELECT id FROM poll LIMIT 1");
    if ($res->num_rows == 0) {
        die("No polls found!");
    }
    $id = $res->fetch_assoc()['id'];
}

// fetch poll data
$result = $conn->query("SELECT * FROM poll WHERE id=$id");
if ($result->num_rows == 0) {
    die("Poll not found!");
}
$poll = $result->fetch_assoc();

// handle vote
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vote = $_POST['vote'];

    if ($vote == "1") {
        $conn->query("UPDATE poll SET votes1 = votes1 + 1 WHERE id=$id");
    } elseif ($vote == "2") {
        $conn->query("UPDATE poll SET votes2 = votes2 + 1 WHERE id=$id");
    }

    // refresh to show updated results
    header("Location: poll.php?id=$id");
    exit;
}

// calculate percentages
$total = $poll['votes1'] + $poll['votes2'];
$percent1 = $total > 0 ? round(($poll['votes1'] / $total) * 100) : 0;
$percent2 = $total > 0 ? round(($poll['votes2'] / $total) * 100) : 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Poll - <?php echo htmlspecialchars($poll['question']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container p-5">

    <h3><?php echo htmlspecialchars($poll['question']); ?></h3>

    <!-- Display image if exists -->
    <?php if (!empty($poll['image']) && file_exists($poll['image'])): ?>
        <div class="mb-4">
            <img src="<?php echo $poll['image']; ?>" alt="Poll Image" class="img-fluid rounded">
        </div>
    <?php endif; ?>

    <form method="post" class="mb-4">
        <button type="submit" name="vote" value="1" class="btn btn-primary m-2">
            <?php echo htmlspecialchars($poll['option1']); ?>
        </button>
        <button type="submit" name="vote" value="2" class="btn btn-success m-2">
            <?php echo htmlspecialchars($poll['option2']); ?>
        </button>
    </form>

    <h4>Results:</h4>

    <p><?php echo htmlspecialchars($poll['option1']) . ": " . $poll['votes1'] . " votes (" . $percent1 . "%)"; ?></p>
    <div class="progress mb-3">
        <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $percent1; ?>%">
            <?php echo $percent1; ?>%
        </div>
    </div>

    <p><?php echo htmlspecialchars($poll['option2']) . ": " . $poll['votes2'] . " votes (" . $percent2 . "%)"; ?></p>
    <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $percent2; ?>%">
            <?php echo $percent2; ?>%
        </div>
    </div>

</body>
</html>
