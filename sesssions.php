<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Website Homepage HTML and CSS | CodingNepal</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
        <h2 class="logo"><a href="#">Mentorz</a></h2>
        <input type="checkbox" id="menu-toggle" />
        <label for="menu-toggle" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </label>
        <ul class="links">
          <li><a href="homepage.php">Home</a></li>
          <li><a href="sesssions.php">Sessions</a></li>
          <li><a href="mentors2.html">Mentors</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Learn More</a></li>
        </ul>
        
      </nav>
    </header>
  
  </body>
</html>
<style>
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}
body {
  height: 100vh;
  width: 100%;
  background: linear-gradient(to bottom, #175d69 23%, #330c43 95%);
}
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
}
.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 100%;
  margin: 0 auto;
  padding: 20px 15px;
}
.navbar .logo a {
  font-size: 1.8rem;
  text-decoration: none;
  color: #fff;
}
.navbar .links {
  display: flex;
  align-items: center;
  list-style: none;
  gap: 35px;
}
.navbar .links a {
  font-weight: 500;
  text-decoration: none;
  color: #fff;
  padding: 10px 0;
  transition: 0.2s ease;
}
.navbar .links a:hover {
  color: #47b2e4;
}
.navbar .buttons a {
  text-decoration: none;
  color: #fff;
  font-size: 1rem;
  padding: 15px 0;
  transition: 0.2s ease;
}
.navbar .buttons a:not(:last-child) {
  margin-right: 30px;
}
.navbar .buttons .signin:hover {
  color: #47b2e4;
}
.navbar .buttons .signup {
  border: 1px solid #fff;
  padding: 10px 20px;
  border-radius: 0.375rem;
  text-align: center;
  transition: 0.2s ease;
}
.navbar .buttons .signup:hover {
  background-color: #47b2e4;
  color: #fff;
}
.hero-section {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  height: 95vh;
  padding: 0 15px;
  max-width: 1200px;
  margin: 0 auto;
}
.hero-section .hero {
  max-width: 50%;
  color: #fff;
}
.hero h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}
.hero p {
  font-size: 1.2rem;
  margin-bottom: 20px;
  color: #c9c7c7;
}
.hero-section .img img {
  width: 517px;
}
.hero-section .buttons {
  margin-top: 40px;
}
.hero-section .buttons a {
  text-decoration: none;
  color: #fff;
  padding: 12px 24px;
  border-radius: 0.375rem;
  font-weight: 600;
  transition: 0.2s ease;
  display: inline-block;
}
.hero-section .buttons a:not(:last-child) {
  margin-right: 15px;
}
.buttons .join {
  background-color: #47b2e4;
}
.hero-section .buttons .learn {
  border: 1px solid #fff;
  border-radius: 0.375rem;
}
.hero-section .buttons a:hover {
  background-color: #47b2e4;
}
/* Hamburger menu styles */
#menu-toggle {
  display: none;
}
#hamburger-btn {
  font-size: 1.8rem;
  color: #fff;
  cursor: pointer;
  display: none;
  order: 1;
}
@media screen and (max-width: 1023px) {
  .navbar .logo a {
    font-size: 1.5rem;
  }
  .links {
    position: fixed;
    left: -100%;
    top: 75px;
    width: 100%;
    height: 100vh;
    padding-top: 50px;
    background: #175d69;
    flex-direction: column;
    transition: 0.3s ease;
  }
  .navbar #menu-toggle:checked ~ .links {
    left: 0;
  }
  .navbar #hamburger-btn {
    display: block;
  }
  .header .buttons {
    display: none;
  }
  .hero-section .hero {
    max-width: 100%;
    text-align: center;
  }
  .hero-section img {
    display: none;
  }
}
</style>
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
      background:rgb(19, 79, 89);
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
      color:rgb(19, 79, 89);
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
<html>
  <body>

  <div class="container">
<br>
<br>
<br>
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
