<?php require_once('../../private/initialize.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="../scripts/script.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password Generator</title>
  </head>
  <body>
    <h1>Password Generator</h1>
    <div id="password-display">
      <p id="password"></p>
    </div>
    <div class="options">
      <label for="length">Password Length:</label>
      <input type="number" id="length" min="8" value="16" max="50" required />
    </div>
    <div class="options">
      <label for="lowercase">Include Lowercase Letters:</label>
      <input type="checkbox" id="lowercase" checked />
    </div>
    <div class="options">
      <label for="uppercase">Include Uppercase Letters:</label>
      <input type="checkbox" id="uppercase" checked />
    </div>
    <div class="options">
      <label for="numbers">Include Numbers:</label>
      <input type="checkbox" id="numbers" checked />
    </div>
    <div class="options">
      <label for="symbols">Include Symbols:</label>
      <input type="checkbox" id="symbols" checked />
    </div>
    <button onclick="generatePassword()">Generate Password</button>

    <script>
      window.onload = generatePassword; // Call generatePassword on page load
    </script>
  </body>
</html>