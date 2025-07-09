<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $field = $_POST['field'];
  $experience = $_POST['experience'];
  $interest = $_POST['interest'];

  $stmt = $conn->prepare("INSERT INTO profiles (user_id, name, field, experience, interest) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("issss", $_SESSION['user_id'], $name, $field, $experience, $interest);
  $stmt->execute();

  header("Location: profile.php");
  exit();
}
?>

<form method="POST">
  <h2>Create Your Profile</h2>
  <input name="name" required placeholder="Full Name">
  <input name="field" required placeholder="Field (e.g., Software Engineering)">
  <input name="experience" required placeholder="Experience (e.g., 3 years)">
  <input name="interest" required placeholder="Mentorship Interest">
  <button type="submit">Save Profile</button>
</form>
<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

$stmt = $conn->prepare("SELECT name, field, experience, interest FROM profiles WHERE user_id = ?");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();

if ($profile = $result->fetch_assoc()) {
?>
  <h2>Welcome, <?= htmlspecialchars($profile['name']) ?></h2>
  <p><strong>Field:</strong> <?= htmlspecialchars($profile['field']) ?></p>
  <p><strong>Experience:</strong> <?= htmlspecialchars($profile['experience']) ?></p>
  <p><strong>Mentorship Interest:</strong> <?= htmlspecialchars($profile['interest']) ?></p>
  <a href="logout.php">Logout</a>
<?php
} else {
  echo "<p>No profile found. <a href='create_profile.php'>Create one</a></p>";
}
?>
