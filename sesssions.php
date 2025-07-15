<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MentorHub – Sessions</title>
  <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #f4faff;
      color: #333;
    }

    nav {
      background: #0077cc;
      color: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-links a {
      color: white;
      margin-left: 1.5rem;
      text-decoration: none;
      font-weight: 500;
    }

    .container {
      padding: 2rem;
    }

    h1 {
      color: #0077cc;
      margin-bottom: 1.5rem;
    }

    .session-list {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }

    .session-card {
      background: #fff;
      padding: 1rem 1.5rem;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0,0,0,0.05);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .session-details {
      display: flex;
      flex-direction: column;
    }

    .session-details h3 {
      margin-bottom: 0.3rem;
      font-size: 1.1rem;
      color: #333;
    }

    .session-details p {
      font-size: 0.9rem;
      color: #666;
    }

    .session-time {
      text-align: right;
      font-size: 0.9rem;
      color: #555;
    }

    .status {
      font-weight: bold;
      color: green;
    }

    .status.booked {
      color: #ff9800;
    }

    .status.completed {
      color: #888;
    }

    @media (max-width: 600px) {
      .session-card {
        flex-direction: column;
        align-items: flex-start;
      }
      .session-time {
        text-align: left;
        margin-top: 0.5rem;
      }
    }
  </style>
</head>
<body>

  <nav>
    <div class="logo-name">
      <div class="logo-image">
        <img src="images/logo.png" alt="">
      </div>
      <span class="logo_name">Mentorz</span>
    </div>

    <div class="menu-items">
      <ul class="nav-links">
        <li><a href="homepage.php">
          <i class="uil uil-dashboard"></i>
          <span class="link-name">Dashboard</span>
        </a></li>
        <li><a href="mentors.php">
          <i class="uil uil-users-alt"></i>
          <span class="link-name">Mentors</span>
        </a></li>
        <li><a href="sesssions.php">
          <i class="uil uil-calendar-alt"></i>
          <span class="link-name">Sessions</span>
        </a></li>
        <li><a href="messages.php">
          <i class="uil uil-comments-alt"></i>
          <span class="link-name">Messages</span>
        </a></li>
        <li><a href="profile.php">
          <i class="uil uil-user-circle"></i>
          <span class="link-name">Profile</span>
        </a></li>
      </ul>

      <ul class="logout-mode">
        <li><a href="#">
          <i class="uil uil-signout"></i>
          <span class="link-name">Logout</span>
        </a></li>
        <li class="mode">
          <a href="#">
            <i class="uil uil-moon"></i>
            <span class="link-name">Dark Mode</span>
          </a>
          <div class="mode-toggle">
            <span class="switch"></span>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h1>Upcoming & Past Sessions</h1>

    <div class="session-list">

      <div class="session-card">
        <div class="session-details">
          <h3>Sarah Johnson – Software Engineering</h3>
          <p>Zoom Call to review your resume + career path guidance</p>
        </div>
        <div class="session-time">
          July 12, 2025<br>
          3:00 PM – 4:00 PM<br>
          <span class="status">Confirmed</span>
        </div>
      </div>

      <div class="session-card">
        <div class="session-details">
          <h3>Marcus Lee – Marketing Strategy</h3>
          <p>Discuss your campaign portfolio and outreach methods</p>
        </div>
        <div class="session-time">
          July 14, 2025<br>
          1:00 PM – 2:00 PM<br>
          <span class="status booked">Pending</span>
        </div>
      </div>

      <div class="session-card">
        <div class="session-details">
          <h3>Ava Chen – Product Management</h3>
          <p>1:1 on building product roadmaps and stakeholder alignment</p>
        </div>
        <div class="session-time">
          July 8, 2025<br>
          10:00 AM – 11:00 AM<br>
          <span class="status completed">Completed</span>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
