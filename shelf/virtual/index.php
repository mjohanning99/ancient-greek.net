<?php
$page_title = "My Virtual Shelf — ancient-greek.net";
$page_description = "Reviews of the books about and in Ancient Greek that I do not own physically.";
$page_canonical = "/shelf/virtual/";
$page_image = "/media/imgs/herodold.webp";
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
  <h1>My Ancient Greek Books (Digital)</h1>
  <h3>Τὰ βιβλία μου τὰ εἰκονικὰ τῷ τὴν γλῶτταν μαθεῖν καὶ ἀναγνῶσαι</h3>
  <i>My virtual (false) books for learning and reading the language</i>
  <img src="/media/imgs/reimer_librarian.webp" width="250" height="250" onerror="this.onerror=null; this.src='/media/imgs/reimer_librarian.jpg'" alt="Ancient Greek" width="250" height="250">
  <i>In the Library — 1850 – 1866, Georg Reimer</i>
</div>


<div class="article">
  <p class="blocktext">Lacking a better way of expressing the concept of <q>virtuality</q> in Ancient Greek, I chose, instead, to simply say that these are the books which are <i>false</i> or <i>unreal</i>. These are, obviously, rather plentiful, as many books were written in the 19<sup>th</sup> and early 20<sup>th</sup> century which are now in the public domain. It is therefore rather difficult to find ones which are helpful and which may aid one in one’s learning of the language and knowing which ones to discard. Below you will find something not even close to resembling an entire list, but rather a short overview of the virtual books I am using or have used to study this language. As always, click the links to get to my review about it.</p>
</div>

<div class="row">
  <div class="column">
    <h2>Textbooks</h2>
  </div>

  <div class="column">
    <h2>Prose / poetry books (stuff to read)</h2>
    <h3><a class="menu" href="histories.php">Herodotus’ Histories</a></h3>
    <p>A book written in the Ionic dialect of Greek recording the traditions and histories of cultures known to the Greeks such as the Persians.</p>
  </div>

  <div class="column">
    <h2>Others</h2>
    <h3><a class="menu" href="sprechensie.php">Sprechen Sie Attisch?</a></h3>
    <p>This book written in German at the beginning of the 20th century aims at providing the reader with a set of vernacular phrases.</p>
  </div>
</div>
</body>

<footer>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
</footer>
</html>
