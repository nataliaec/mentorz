<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MentorHub – Messages</title>
  <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
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
      margin-bottom: 1.5rem;
      color: #0077cc;
    }

    .message-wrapper {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }

    .message {
      background: #fff;
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0,0,0,0.05);
      display: flex;
      align-items: flex-start;
      gap: 1rem;
    }

    .message img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
    }

    .message-content {
      flex: 1;
    }

    .message-header {
      display: flex;
      justify-content: space-between;
      font-weight: 500;
      margin-bottom: 0.3rem;
    }

    .message-text {
      font-size: 0.95rem;
      line-height: 1.4;
      color: #444;
    }

    .timestamp {
      font-size: 0.8rem;
      color: #888;
    }

    @media (max-width: 600px) {
      nav {
        flex-direction: column;
        align-items: flex-start;
      }

      .nav-links {
        margin-top: 0.5rem;
      }

      .nav-links a {
        margin-left: 0;
        margin-right: 1rem;
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
    <h1>Your Messages</h1>
    <div class="message-wrapper">

      <div class="message">
        <img src="https://i.pravatar.cc/50?img=20" alt="Mentor Avatar">
        <div class="message-content">
          <div class="message-header">
            <span>Sarah Johnson</span>
            <span class="timestamp">Today, 10:15 AM</span>
          </div>
          <div class="message-text">
            Hi! Just confirming our session for tomorrow at 3PM. Let me know if you need to reschedule.
          </div>
        </div>
      </div>

      <div class="message">
        <img src="https://i.pravatar.cc/50?img=14" alt="Mentor Avatar">
        <div class="message-content">
          <div class="message-header">
            <span>Marcus Lee</span>
            <span class="timestamp">Yesterday, 6:42 PM</span>
          </div>
          <div class="message-text">
            Great insights during our last chat! I’ve sent you the presentation resources we discussed.
          </div>
        </div>
      </div>

      <div class="message">
        <img src="https://i.pravatar.cc/50?img=17" alt="Mentor Avatar">
        <div class="message-content">
          <div class="message-header">
            <span>Ava Chen</span>
            <span class="timestamp">July 8, 11:30 AM</span>
          </div>
          <div class="message-text">
            Looking forward to helping you refine your product roadmap. Please upload your notes ahead of time.
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
