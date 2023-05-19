<?php
// Kontrolloni nëse forma është dorëzuar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Përpunoni të dhënat e formës së shtimit të produktit
  // Përmbajtja e formës mund të qaset përmes $_POST superglobal

  // Validoni dhe ruani të dhënat e produktit në bazën e të dhënave ose ku do që të shihni të arsyeshme
  // Përdorni metoda dhe funksione të sigurta për të trajtuar të dhënat e hyra nga përdoruesi

  // Pas ruajtjes së produktit, mund të kryeni veprime shtesë, si shfaqja e një mesazhi të suksesshëm, ridrejtimi në faqen e listimit të produkteve, etj.
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Shto produkt</title>
</head>
<body>
  <h1>Shto produkt</h1>
  
  <!-- Forma për shtimin e produktit -->
  <form method="POST" action="shto_produkt.php">
    <!-- Fushat e nevojshme për shtimin e produktit -->
    <label for="emri">Emri:</label>
    <input type="text" name="emri" id="emri" required>
    
    <label for="cmimi">Cmimi:</label>
    <input type="number" name="cmimi" id="cmimi" required>
    
    <!-- Shtoni fusha të tjera sipas nevojave tuaja -->
    
    <button type="submit">Shto</button>
  </form>
</body>
</html>