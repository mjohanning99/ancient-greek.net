<?php
$page_title = "Ancient Greek Audio — ancient-greek.net";
$page_description = "Listen to spoken Ancient Greek: free recordings of the Gospel of John, read in the original Greek using the Lucian pronunciation.";
$page_canonical = "/audio.php";
$page_image = "/media/imgs/header.webp";
$page_type = "article";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/head.php'); ?>
</head>

<body>
  <?php include('header.php'); ?>
  <fieldset class="separator-styled radius">
    <legend align="center">
      <img alt="" src="/media/icons/vessel.png">
        ΑΚΟΥΕ ΕΜΑΥΤΟΥ
      <img alt="" src="/media/icons/vessel.png">
    <legend align="center">
  </fieldset>

<div class="heading-greek">
  <h1>Audio</h1>
  <h3>Ἀκούε τοὺς λόγους τοὺς ἀρχαίους</h3>
  <i>Listen to the ancient words</i>
  <img alt="Screenshot of Audacity while editing a recording of Ancient Greek" src="/media/imgs/audio_editing.webp" width="400" height="400" onerror="this.onerror=null; this.src='/media/imgs/audio_editing.png'" width="400" height="400">
  <i>A screenshot of my editing audio using Audacity</i>
</div>



<div class="column-center">
  <div class="article">
    <h2>Listen to Ancient Greek</h2>
    <p>Below you will find links that, upon their having been clicked, will download the audio version of whatever text you selected. As of of right now (May 18th, 2022), the only thing you can download is the first chapter of the Gospel of John. You can also play the audio directly whilst reading the translation and transliteration. Simply open <a href="/translations/GNT/gospels/john/index.php">the translation page</a> and select the chapter you wish you read / listen to. If audio has already been made available for that chapter, you will see an audio player at the top of the page.</p>
  </div>
</div>

<div class="separator">
  <img alt="" class="no" src="/media/icons/hieroglyphs.png">
    ΚΑΤΑΛΑΒΟΥ ΤΟΥΣ ΛΟΓΟΥΣ
  <img alt="" class="no" src="/media/icons/hieroglyphs.png">
</div>

<div class="row">
  <div class="column-center">
    <h2>The Gospel of John</h2>
    <h3><a href="/media/audio/gospelofjohn/John_1.mp3" class="menu">Download audio for chapter 1</a>
  </div>
</div>

<footer>
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
</html>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
</body>
