<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mentorz Dashboard</title>

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
  <nav>
    <div class="logo-name">
      <div class="logo-image">
        <img src="images/logo.png" alt="Mentorz">
      </div>
      <span class="logo_name">MentorHub</span>
    </div>

    <div class="menu-items">
      <ul class="nav-links">
        <li><a href="#">
          <i class="uil uil-dashboard"></i>
          <span class="link-name">Dashboard</span>
        </a></li>
        <li><a href="mentors2.php">
          <i class="uil uil-users-alt"></i>
          <span class="link-name">Mentors</span>
        </a></li>
        <li><a href="#">
          <i class="uil uil-calendar-alt"></i>
          <span class="link-name">Sessions</span>
        </a></li>
        <li><a href="#">
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

  <section class="dashboard">
    <div class="top">
      <i class="uil uil-bars sidebar-toggle"></i>
      <div class="search-box">
        <i class="uil uil-search"></i>
        <input type="text" placeholder="Search mentors or topics...">
      </div>
    </div>

    <div class="dash-content">
      <div class="overview">
        <div class="title">
          <i class="uil uil-dashboard"></i>
          <span class="text">Welcome to Mentorz</span>
        </div>

        <div class="boxes">
          <div class="box box1">
            <i class="uil uil-users-alt"></i>
            <span class="text">Total Mentors</span>
            <span class="number">128</span>
          </div>
          <div class="box box2">
            <i class="uil uil-calendar-alt"></i>
            <span class="text">Upcoming Sessions</span>
            <span class="number">12</span>
          </div>
          <div class="box box3">
            <i class="uil uil-user-check"></i>
            <span class="text">Your Connections</span>
            <span class="number">34</span>
          </div>
        </div>
      </div>

      <div class="activity">
        <div class="title">
          <i class="uil uil-clock-three"></i>
          <span class="text">Recent Mentor Activity</span>
        </div>

        <div class="activity-data">
          <div class="data names">
            <span class="data-title">Mentor</span>
            <span class="data-list">Sarah Johnson</span>
            <span class="data-list">Marcus Lee</span>
            <span class="data-list">Ava Chen</span>
            <span class="data-list">David Osei</span>
            <span class="data-list">Elena Moretti</span>
          </div>
          <div class="data profession">
            <span class="data-title">Field</span>
            <span class="data-list">Software Engineering</span>
            <span class="data-list">Marketing</span>
            <span class="data-list">Product</span>
            <span class="data-list">UX/UI</span>
            <span class="data-list">Data Science</span>
          </div>
          <div class="data session">
            <span class="data-title">Next Session</span>
            <span class="data-list">July 12</span>
            <span class="data-list">July 14</span>
            <span class="data-list">July 15</span>
            <span class="data-list">July 16</span>
            <span class="data-list">July 18</span>
          </div>
          <div class="data status">
            <span class="data-title">Status</span>
            <span class="data-list">Available</span>
            <span class="data-list">Booked</span>
            <span class="data-list">Available</span>
            <span class="data-list">Available</span>
            <span class="data-list">Booked</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="script.js"></script>
</body>
</html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

:root {
  --primary-color: #eaf4ff;
  --secondary-color: #d0e8ff;
  --accent-color: #3a8ddb;
  --text-color: #333;
  --light-text: #666;
  --white: #fff;
  --box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  --transition: 0.3s ease-in-out;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  background-color: var(--primary-color);
  color: var(--text-color);
}

nav {
  position: fixed;
  top: 0;
  left: 0;
  height: 100vh;
  width: 240px;
  background-color: var(--white);
  box-shadow: var(--box-shadow);
  padding: 20px 0;
  transition: var(--transition);
}

.logo-name {
  display: flex;
  align-items: center;
  padding: 0 20px;
}

.logo-image img {
  width: 40px;
  height: 40px;
  object-fit: cover;
  border-radius: 50%;
}

.logo_name {
  font-size: 20px;
  font-weight: 600;
  margin-left: 10px;
  color: var(--accent-color);
}

.menu-items {
  margin-top: 40px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: calc(100% - 90px);
}

.nav-links li,
.logout-mode li {
  list-style: none;
}

.nav-links a,
.logout-mode a {
  display: flex;
  align-items: center;
  padding: 12px 20px;
  color: var(--text-color);
  text-decoration: none;
  transition: var(--transition);
}

.nav-links a:hover,
.logout-mode a:hover {
  background-color: var(--secondary-color);
  color: var(--accent-color);
  border-left: 4px solid var(--accent-color);
}

.nav-links i,
.logout-mode i {
  font-size: 20px;
  margin-right: 10px;
}

.dashboard {
  margin-left: 240px;
  padding: 30px;
  background-color: var(--primary-color);
  min-height: 100vh;
  transition: var(--transition);
}

.top {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.search-box {
  display: flex;
  align-items: center;
  position: relative;
  max-width: 400px;
  width: 100%;
}

.search-box input {
  width: 100%;
  padding: 10px 15px 10px 40px;
  border: 1px solid #ccc;
  border-radius: 6px;
  outline: none;
  font-size: 14px;
}

.search-box i {
  position: absolute;
  left: 12px;
  color: var(--light-text);
  font-size: 18px;
}

.dash-content .title {
  display: flex;
  align-items: center;
  margin: 30px 0 20px;
}

.dash-content .title i {
  font-size: 24px;
  color: var(--accent-color);
  background-color: var(--white);
  padding: 8px;
  border-radius: 50%;
  margin-right: 10px;
}

.dash-content .title .text {
  font-size: 22px;
  font-weight: 500;
  color: var(--text-color);
}

.boxes {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

.box {
  flex: 1;
  min-width: 220px;
  background-color: var(--white);
  padding: 20px;
  border-radius: 12px;
  box-shadow: var(--box-shadow);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  transition: var(--transition);
}

.box:hover {
  transform: translateY(-5px);
}

.box i {
  font-size: 28px;
  color: var(--accent-color);
  margin-bottom: 10px;
}

.box .text {
  font-size: 14px;
  color: var(--light-text);
}

.box .number {
  font-size: 28px;
  font-weight: 600;
  color: var(--text-color);
}

.activity {
  margin-top: 40px;
}

.activity .title {
  margin-bottom: 20px;
}

.activity-data {
  display: flex;
  overflow-x: auto;
  padding-bottom: 10px;
}

.data {
  min-width: 150px;
  margin-right: 20px;
}

.data-title {
  font-size: 16px;
  font-weight: 600;
  color: var(--accent-color);
}

.data-list {
  margin-top: 10px;
  font-size: 14px;
  color: var(--text-color);
  line-height: 1.8;
}
</style>