<?php
$page_title = "My Physical Shelf — ancient-greek.net";
$page_description = "Reviews of the books about and in Ancient Greek that I physically own — textbooks, readers, Greek New Testaments and more.";
$page_canonical = "/shelf/physical/";
$page_image = "/media/imgs/shelf.webp";
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
  <h1>My Ancient Greek Books (Physical)</h1>
  <h3>Τὰ βιβλία μου τῷ τὴν γλῶτταν μαθεῖν καὶ ἀναγνῶσαι</h3>
  <i>My books for learning and reading the language</i>
  <img alt="A stack of my Ancient Greek textbooks: Athenaze, Reading Greek and Hansen and Quinn" src="/media/imgs/shelf.webp" width="400" height="400" onerror="this.onerror=null; this.src='/media/imgs/shelf.jpg'" width="400" height="400">
</div>


<div class="article">
  <p class="blocktext">Welcome to my shelf. This page contains some information regarding the various books that I physically own that have something to do with either <i>learning</i> or <i>reading</i> this fascinating language. As my collection, inevitably, grows, this page will be updated; and I therefore recommend you come back here every so often if you wish to receive some information regarding some resources for learning and reading this language.</p>
</div>

<div class="row">
  <div class="column">
    <h2>Textbooks</h2>
    <h3><a href="hq.php" class="menu">Hansen & Quinn’s <i>Greek, An Intensive Course</i></a></h3>
    <p>Information on one of the most (in)famous book for learning Attic Greek.</p>

    <h3><a href="readinggreek.php" class="menu">JACT’s <i>Reading Greek</i></a></h3>
    <p>Some information regarding my main book for studying the language — with some comments regarding Hansen and Quinn.</p>

    <h3><a href="germanbook.php" class="menu">Random German book found at the library</a></h3>
    <p>Some information regarding a book I found at the library simply titled <q>Die griechische Sprache</q></p>
  </div>

  <div class="column">
    <h2>Prose / poetry books (stuff to read)</h2>

    <h3><a href="itathenaze.php" class="menu">Italian Athenaze</a></h3>
    <p>Some information about the Italian Athenaze.</p>

    <h3><a href="novumtestamentum.php" class="menu">Nestle-Aland Novum Testamentum Graece</a></h3>
    <p>The New Testament in its original language — Koine Greek.</p>

    <h3><a href="readersedition.php" class="menu">The Greek New Testament. A Reader’s Edition</a></h3>
    <p>A reader’s edition of the Greek New Testament; perfect for (lower-)intermediate students.</p>

    <h3><a href="readerseditionot.php" class="menu">Septuaginta: A Reader’s Edition</a></h3>
    <p>A readers’s edition of the Greek Old Testament (Septuaginta); one of my favourites.</p>

    <h3><a href="vaticanusbible.php" class="menu">The Vaticanus Bible</a></h3>
    <p>A pseudo-facsimile of (one) the oldest copies of the Bible — in a more modern format.</p>
  </div>

  <div class="column">
    <h2>Others</h2>
  </div>
</div>
</body>

<footer>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
</footer>
</html>
