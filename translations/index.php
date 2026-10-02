<?php
$page_title = "My Translations of Ancient Greek Texts — ancient-greek.net";
$page_description = "My own translations of Ancient Greek texts — the New Testament, Herodotus and the Didache — with transliterations of the original Greek.";
$page_canonical = "/translations/";
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
  <h1>My Translations of Ancient Greek Texts</h1>
  <h3>Ἁι τοῦ Κλεοφίλου μεταφράσεις</h3>
  <i>Marvin's translations</i>
  <img src="/media/imgs/StJerome.webp" width="250" height="250" onerror="this.onerror=null; this.src='/media/imgs/StJerome.jpg'" alt="Ancient Greek" width="250" height="250">
  <i>St. Jerome (translated the Bible into Latin) — Jan Matsys, 1537</i>
</div>


<div class="article">
  <p class="blocktext">One thing that the majority of students of ancient languages do is the translation of various texts. I always try to translate texts in a natural manner, so that they are both close to the original text but also do not sound odd or strange in English. Each individual work’s page will have its chapters in separate <i>.php</i> files with both the original Greek and a transliteration.</p>
</div>

<div class="column-center">
  <h2>Texts</h2>
  <div class="row">
    <div class="column-2">
      <h3><a href="didache/index.php" class="menu">The Didache — Διδαχή</a></h3>
        <p>An early Christian treatise.</p>

      <h3><a href="histories1/index.php" class="menu">Herodotus’ Histories — Ἱστορίαι Ἡροδότου (Book I)</a></h3>
        <p>A work written by the <i>Father of History</i> detailing, amongst other things, the Greco-Persian Wars.</p>
    </div>

    <div class="column-2">
      <h3><a href="GNT/index.php" class="menu">The Greek New Testament</a></h3>
        <p>One of the holy books of Christianity in its original language.</p>
    </div>
  </div>
</div>

<footer>
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
</html>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
</body>
