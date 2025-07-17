<<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jane Doe – Profile | MentorMatch</title>
  <style>
    :root {
      --primary: #2563eb;
      --bg-light: #f3f4f6;
      --text-dark: #111827;
      --text-light: #6b7280;
      --tag-bg: #e0f2fe;
      --tag-text: #0369a1;
    }

    body {
      margin: 0;
      font-family: 'Helvetica Neue', sans-serif;
      background-color: var(--bg-light);
      color: var(--text-dark);
    }

    header {
      background-color: #1f2937;
      padding: 1rem 2rem;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 1.5rem;
      margin: 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin-left: 1.5rem;
      font-weight: 500;
    }

    .profile-container {
      max-width: 760px;
      background: white;
      margin: 3rem auto;
      padding: 2rem;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
    }

    .profile-header {
      display: flex;
      align-items: center;
      gap: 1.5rem;
      border-bottom: 1px solid #e5e7eb;
      padding-bottom: 1.5rem;
    }

    .profile-header img {
      width: 100px;
      height: 100px;
      object-fit: cover;
    }

    .profile-header h2 {
      margin: 0;
      font-size: 1.6rem;
    }

    .profile-header p {
      margin: 4px 0;
      color: var(--text-light);
    }

    .role-tag {
      display: inline-block;
      background-color: var(--tag-bg);
      color: var(--tag-text);
      padding: 0.3rem 0.75rem;
      font-size: 0.8rem;
      margin-top: 0.3rem;
    }

    .section {
      margin-top: 2rem;
    }

    .section h3 {
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
    }

    .section p {
      line-height: 1.6;
      color: #374151;
    }

    .tags span {
      display: inline-block;
      background: #d1fae5;
      color: #047857;
      padding: 0.4rem 0.8rem;
      font-size: 0.85rem;
      margin: 0.3rem 0.4rem 0 0;
    }

    .edit-btn {
      margin-top: 2rem;
      background-color: var(--primary);
      color: white;
      border: none;
      padding: 0.7rem 1.5rem;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.2s ease;
    }

    .edit-btn:hover {
      background-color: #1d4ed8;
    }

    @media (max-width: 600px) {
      .profile-header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav {
        display: none;
      }
    }
  </style>
</head>
<body>

  <header>
        <header class="header">
      <nav class="navbar">
        <h2 class="logo">
          <a href="#">
            <img src="image.png" alt="Mentorz logo"/>
            Mentorz
          </a>
        </h2>
        <input type="checkbox" id="menu-toggle" />
        <label for="menu-toggle" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          </svg>
        </label>
        <ul class="links">
          <li><a href="homepage.php">Home</a></li>
          <li><a href="sesssions.php">Sessions</a></li>
          <li><a href="mentors2.html">Mentors</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Learn More</a></li>
        </ul>
  </header>

  <div class="profile-container">
    <div class="profile-header">
      <img src="https://via.placeholder.com/100" alt="Jane Doe" />
      <div>
        <h2>Jane Doe</h2>
        <p>Marketing Analyst · New York, NY</p>
        <span class="role-tag">Mentee</span>
      </div>
    </div>

    <div class="section">
      <h3>About Me</h3>
      <p>
        I’m a curious and motivated professional with a background in marketing and a growing interest in product development.
        I’m currently transitioning into tech and seeking mentors who can offer insight into product strategy and team leadership.
      </p>
    </div>

    <div class="section">
      <h3>Looking For Mentorship In</h3>
      <div class="tags">
        <span>Product Management</span>
        <span>Networking</span>
        <span>Leadership</span>
      </div>
    </div>

    <button class="edit-btn">Edit Profile</button>
  </div>

</body>
</html>
