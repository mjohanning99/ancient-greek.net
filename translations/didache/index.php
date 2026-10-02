<?php
$page_title = "The Didache — Translation and Transliteration — ancient-greek.net";
$page_description = "My first translation from Ancient Greek: the Didache, a very early Christian treatise whose simple Greek makes it a fine text for a learner.";
$page_canonical = "/translations/didache/";
$page_image = "/media/imgs/StJerome.webp";
$page_type = "article";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/head.php'); ?>
</head>

<body>
  <?php include('header.php'); ?>

<div class="heading-greek">
  <h1>The Didache — Translation and Transliteration</h1>
  <h3>Διδαχὴ κυρίου διὰ τῶν δώδεκα ἀποστόλων τοῖς ἔθνεσιν</h3>
  <i>The teaching of the Lord as presented to the nations (gentiles) through the twelve apostles</i>
  <img src="/media/imgs/rev2217.webp" width="200" height="200" onerror="this.onerror=null; this.src='/media/imgs/rev2217.jpg'" alt="Ancient Greek" width="200" height="200">
  <i>Revelation 22-17, similar to a prayer found in the Didache</i>
</div>


<div class="article">
    <p class="blocktext">The so-called <i>Didache</i> — Greek for <q>teaching</q> — is a very early Christian treatise, believed to have been written in the 1<sup>st</sup> century AD. It’s composition is relativey simple with very few uncommmon words and very short sentences, hence why I have chosen this as my first text to translate. I would like to thank <a href="https://github.com/jtauber">James Tauber</a> for making the original Greek text for this available on his GitHub page.</p>
</div>

<div align="center">
    <h2>Chapters</h2>
    <h3><a href="chapters/chapter1.php" class="menu">Chapter 1</a></h3>
    <h3><a href="chapters/chapter2.php" class="menu">Chapter 2</a></h3>
    <h3><a href="chapters/chapter3.php" class="menu">Chapter 3</a></h3>
</div>

<footer>
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
</html>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
</body>
