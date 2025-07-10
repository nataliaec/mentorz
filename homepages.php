

<section class="hero-banner">
  <div class="overlay">
    <h1>Mentorz</h1>
    <p>Your journey to professional growth starts with the right mentor</p>
    <a href="mentors.php" class="cta-button">Explore Mentors</a>
  </div>
</section>

<section class="section dark">
  <h2>Featured Mentors</h2>
  <div class="mentor-carousel">
    <?php
    $featuredMentors = [
      ["name" => "Sarah Johnson", "title" => "Senior Software Engineer", "image" => "https://via.placeholder.com/300x180?text=Sarah+J"],
      ["name" => "Marcus Lee", "title" => "Marketing Strategist", "image" => "https://via.placeholder.com/300x180?text=Marcus+L"],
      ["name" => "Ava Chen", "title" => "Product Manager", "image" => "https://via.placeholder.com/300x180?text=Ava+C"],
    ];
    foreach ($featuredMentors as $mentor): ?>
      <div class="mentor-card">
        <img src="<?= $mentor['image'] ?>" alt="<?= htmlspecialchars($mentor['name']) ?>">
        <div class="mentor-info">
          <h3><?= htmlspecialchars($mentor['name']) ?></h3>
          <p><?= htmlspecialchars($mentor['title']) ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section">
  <h2>Explore by Category</h2>
  <div class="categories">
    <div class="category-tile">Tech & Development</div>
    <div class="category-tile">Marketing & Branding</div>
    <div class="category-tile">Leadership & Management</div>
    <div class="category-tile">Creative & Design</div>
  </div>
</section>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MentorHub</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <header class="main-header">
    <div class="logo">MentorHub</div>
    <nav>
      <ul class="nav-links">
        <li><a href="/">Sign Up</a></li>
        <li><a href="mentors.php">Mentors</a></li>
        <li><a href="profile.php">Profile</a></li>
      </ul>
    </nav>
  </header>

<style>
/* Base styles */
body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background-color: #0f0f0f;
  color: #ffffff;
}

a {
  text-decoration: none;
  color: #1da1f2;
}

/* Header */
.main-header {
  background-color: #1a1a1a;
  padding: 20px 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 1.8rem;
  font-weight: bold;
  color: #ffffff;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 20px;
}

.nav-links li a {
  font-weight: 500;
  color: #ffffff;
}

/* Hero Banner */
.hero-banner {
  position: relative;
  background: url('https://via.placeholder.com/1600x600?text=Mentor+Banner') center/cover no-repeat;
  height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.overlay {
  background-color: rgba(0, 0, 0, 0.65);
  padding: 40px;
  text-align: center;
}

.overlay h1 {
  font-size: 2.8rem;
  margin-bottom: 10px;
}

.overlay p {
  font-size: 1.2rem;
  margin-bottom: 20px;
}

.cta-button {
  padding: 12px 25px;
  background-color: #1da1f2;
  color: white;
  border-radius: 4px;
  font-weight: bold;
  transition: background-color 0.2s ease;
}

.cta-button:hover {
  background-color: #0d8ddb;
}

/* Sections */
.section {
  padding: 50px 40px;
}

.section h2 {
  margin-bottom: 30px;
}

/* Mentor Carousel */
.mentor-carousel {
  display: flex;
  gap: 20px;
  overflow-x: auto;
  padding-bottom: 10px;
}

.mentor-card {
  background-color: #1e1e1e;
  border-radius: 8px;
  min-width: 300px;
  flex: 0 0 auto;
  overflow: hidden;
}

.mentor-card img {
  width: 100%;
  height: auto;
}

.mentor-info {
  padding: 15px;
}

.mentor-info h3 {
  margin: 0;
  color: #1da1f2;
}

/* Category Tiles */
.categories {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.category-tile {
  flex: 1 1 200px;
  background-color: #252525;
  padding: 30px;
  text-align: center;
  font-weight: bold;
  border-radius: 6px;
  transition: background 0.3s;
}

.category-tile:hover {
  background-color: #333;
}

/* Footer */
footer {
  padding: 30px;
  text-align: center;
  background-color: #1a1a1a;
  color: #888;
}

</style>