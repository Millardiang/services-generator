<a?php
// Start the session if needed
session_start();
require_once 'assets/classes/geoplugin.class.php';
require 'assets/db.php';
$trkVisits = 1
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DivumWX - Open Source Weather Station Skin</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta name="description" content="DivumWX is an open-source software skin for your weewx weather station, offering responsive design and dynamic theming.">
  <meta name="keywords" content="DivumWX, weewx, weather station, open source, theme, responsive">
  <meta property="og:title" content="DivumWX - Open Source Weather Station Skin">
  <meta property="og:description" content="Enhance your weewx weather station with DivumWX's responsive design and dynamic theme.">
  <meta property="og:image" content="img/logo.svg">
  <meta property="og:url" content="https://www.divumwx.org">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="https://kit.fontawesome.com/772d7a8539.js" crossorigin="anonymous"></script>
</head>
<body data-theme="light">
  <div id="navbar-container"></div>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 col-sm-12 mx-auto text-center my-5">
        <h1 class="display-4">Welcome to DivumWX</h1>
        <p class="lead">DivumWX is a modern, responsive user interface for <a href="https://weewx.com/">WeeWX</a> weather systems, designed to give your weather station a clean, elegant, and customizable frontend.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-10 col-sm-12 mx-auto text-left my-5">
        <p>
          Originally inspired by the WeeWX version of Brian Underdown's Weather34 website template set. Brian's main website was https://weather34.com/homeweatherstation/index.html. In January, 2019, Brian asked others to take over the distribution/maintenance of his design whilst he concentrated on development of MB NanoSD, called Weather34 MB-SMART. That WeeWX version of the template was, at that time, actively developed by Ian Millard and Jerry Dietrich.</p>
        <p>
          That version was designed explicitly to harness the powerful WeeWX database to generate the weather data charts and statistical data. It was originally built on the current MB-UB40-IHVN which was maintained by Lightmaster (Meteobridge-Weather34-Template). Although we maintained a similar look and feel with MB-UB40-IHVN,the weewx-Weather34 had many unique features. That version was assembled with it's own install package and using its own unique utility, w34_installer.py, to install. This greatly simplified the installation process from that of previous versions.
          As interest in the Meteo-Weather34 port waned, Ian and team shifted over to calling the software Weather34 and started maintaining the repository themselves. The members of the team have shifted over time, with Ian Millard being the Lead/owner of the codebase. The team that maintained Weather34 did everything they could to being it forward to and use the newer technologies that were available but the legacy code was a blocker. So the decision was made to do a rewrite of the codebase. A freeze was placed on Weather34 at version 4.3.1, meaning no further enhancements would be done, only security patches and bug fixes. The Weather 34 codebase was forked and the three main programmers, Iam Millard, Sean Balfour and Steven Sheeley.</p>
          Key features:
            <ul>
              <li>Easy Installation via custom Python installer.</li>
              <li>Completely responsive UI to support any screen size, from full desktop to mobile phone.<span data-bs-toggle="tooltip" data-bs-placement="top" title="A true mobile app is under development as well." style="text-decoration: underline;"><sup>1</sup></span></li>
              <li>Minimal CLI setup required.</li>
              <li>Complete web-based setup for first time start-up.</li>
              <li>Native support for localization.</li>
              <li>Complete web-based, password protected, administration dashboard.</li>
              <li>Provides 24 different modules to populate your home page with.</li>
              <li>Provides a toggleable visitation system that shows you where visits are coming from, using no PII <a href="https://www.oaic.gov.au/privacy/your-privacy-rights/your-personal-information/what-is-personal-information" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="PII (Personally Identifiable Information) is any data that can identify someone — names, IP addresses, addresses, etc." style="text-decoration: underline;"><sup>2</sup></a> and displays it on a map, no lower than the city level.</li>
              <li>Provides its own SQLite database to maintain website relevant data.</li>
            </ul>
        </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="footer text-center py-3">
    <div class="container">
      <p>&copy; 2025 Team DivumWX. All rights reserved.</p>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="js/script.js" defer></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      loadNavbar("navbar-container"); // Load the navbar into the #navbar-container div
    });
  </script>
</body>
</html>
