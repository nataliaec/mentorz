<?php

// Sample data: list of mentors
$mentors = [
    [
        "name" => "Sarah Johnson",
        "profession" => "Senior Software Engineer",
        "bio" => "10+ years in backend development and systems architecture. Loves mentoring early devs.",
        "availability" => "Mondays & Wednesdays (5PM - 7PM EST)"
    ],
    [
        "name" => "Marcus Lee",
        "profession" => "Marketing Strategist",
        "bio" => "Digital marketing expert with a passion for brand growth and storytelling.",
        "availability" => "Tuesdays (2PM - 6PM EST), Fridays (10AM - 12PM EST)"
    ],
    [
        "name" => "Ava Chen",
        "profession" => "Product Manager at TechNova",
        "bio" => "Focuses on product-market fit, team collaboration, and lean MVP development.",
        "availability" => "Flexible: Book via calendar link"
    ],
    [
        "name" => "David Osei",
        "profession" => "UX/UI Designer",
        "bio" => "Designs accessible, user-first experiences. Happy to mentor creatives and devs.",
        "availability" => "Weekends (1PM - 4PM EST)"
    ],
    [
        "name" => "Elena Moretti",
        "profession" => "Data Scientist at InsightAI",
        "bio" => "Background in ML, Python, and big data pipelines. Great for analytics-driven roles.",
        "availability" => "Thursdays (12PM - 3PM EST)"
    ]
];
?>

<section class="info-section">
  <h2>Our Mentors</h2>
  <div class="mentor-cards">
    <?php foreach ($mentors as $mentor): ?>
      <div class="mentor-card">
        <h3><?= htmlspecialchars($mentor['name']) ?></h3>
        <p><strong>Profession:</strong> <?= htmlspecialchars($mentor['profession']) ?></p>
        <p><strong>About:</strong> <?= htmlspecialchars($mentor['bio']) ?></p>
        <p><strong>Availability:</strong> <?= htmlspecialchars($mentor['availability']) ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>


<style>
    .mentor-cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px;
  margin-top: 40px;
}

.mentor-card {
  background-color: #ffffff;
  border: 1px solid #cde1f9;
  border-radius: 10px;
  padding: 20px;
  width: 300px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.06);
  transition: transform 0.2s ease-in-out;
}

.mentor-card:hover {
  transform: translateY(-4px);
}

.mentor-card h3 {
  margin-top: 0;
  color: #1a73e8;
}
</style>