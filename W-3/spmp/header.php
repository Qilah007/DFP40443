<nav style="background: #f4f4f438; padding: 10px; border-bottom: 1px solid #ccc;">
    <strong>My SPMP App</strong>|
    <a href="dashboard.php">My profile</a>|
    <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']);?>!</span>|
    <a href="logout.php" style="color: red;">Logout</a>
</nav>
<hr>