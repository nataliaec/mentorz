<?php
session_start();

// Simulate a logged-in user (replace with real auth later)
$_SESSION['user_id'] = 1;

// Simulate saved name/bio for simplicity
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['name'] = $_POST['name'] ?? '';
    $_SESSION['bio'] = $_POST['bio'] ?? '';
}

// Simulated connected mentors (this could come from a database)
$connectedMentors = [
    "Sarah Johnson – Senior Software Engineer",
    "Marcus Lee – Marketing Strategist",
    "Ava Chen – Product Manager at TechNova"
];

?>

<section class="info-section">
  <h2>Your Profile</h2>
  
  <form method="POST" class="profile-form">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="<?= htmlspecialchars($_SESSION['name'] ?? '') ?>" required />

    <label for="bio">Bio</label>
    <textarea name="bio" id="bio" rows="5" required><?= htmlspecialchars($_SESSION['bio'] ?? '') ?></textarea>

    <button type="submit" class="cta-button">Save Profile</button>
  </form>
</section>

<section class="info-section">
  <h2>Connected Mentors</h2>
  <ul class="mentor-list">
    <?php foreach ($connectedMentors as $mentor): ?>
      <li><?= htmlspecialchars($mentor) ?></li>
    <?php endforeach; ?>
  </ul>
</section>

<style>
.profile-form {
  max-width: 600px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 15px;
  margin-top: 30px;
}

.profile-form label {
  font-weight: bold;
  margin-bottom: 5px;
}

.profile-form input,
.profile-form textarea {
  padding: 10px;
  font-size: 1rem;
  border: 1px solid #ccc;
  border-radius: 6px;
  background-color: #fff;
}

.mentor-list {
  list-style-type: disc;
  text-align: left;
  max-width: 600px;
  margin: 30px auto;
  padding-left: 20px;
}
</style>
