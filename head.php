<?php
// Central SEO / meta include for ancient-greek.net
// Set these variables before including this file:
//   $page_title         - Page title (required)
//   $page_description   - Meta description (required)
//   $page_canonical     - Canonical URL path, e.g. "/about.php" (required)
//   $page_image         - OG image path relative to root (optional)
//   $page_type          - "website" or "article" (default: "website")
//   $page_schema_type   - Schema type: "Article" (default), "Review", "Book"
//   $page_item_name     - For Review type: name of the book/item being reviewed
//   $page_date          - Publication date in ISO format, e.g. "2021-11-28"
//   $page_noindex       - true to keep the page out of search engines (optional)

$site_name = "ancient-greek.net";
$site_url = "https://ancient-greek.net";
$default_description = "Learn Ancient Greek with free resources — original texts, translations, audio books, book reviews, vocabulary, and grammar documents from Classical to Byzantine Greek.";

if (!isset($page_title)) $page_title = $site_name;
if (!isset($page_description)) $page_description = $default_description;
if (!isset($page_canonical)) $page_canonical = "/";
if (!isset($page_image)) $page_image = "/media/imgs/header.webp";
if (!isset($page_type)) $page_type = "website";
if (!isset($page_schema_type)) $page_schema_type = "Article";
if (!isset($page_date)) $page_date = "";
if (!isset($page_noindex)) $page_noindex = false;

$full_url = $site_url . $page_canonical;
$full_image_url = $site_url . $page_image;
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="author" content="Marvin Johanning">
<meta name="theme-color" content="#242424">
<link rel="canonical" href="<?php echo $full_url; ?>">
<?php if ($page_noindex): ?>
<meta name="robots" content="noindex, follow">
<?php endif; ?>

<!-- Open Graph -->
<meta property="og:type" content="<?php echo $page_type; ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:url" content="<?php echo $full_url; ?>">
<meta property="og:site_name" content="<?php echo $site_name; ?>">
<meta property="og:locale" content="en_US">
<meta property="og:image" content="<?php echo $full_image_url; ?>">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="350">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:image" content="<?php echo $full_image_url; ?>">

<link rel="preload" as="style" href="/CSS/styles.css">
<link rel="stylesheet" href="/CSS/styles.css">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>

<!-- JSON-LD: WebSite (all pages) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "ancient-greek.net",
  "url": "<?php echo $site_url; ?>",
  "description": "<?php echo htmlspecialchars($default_description, ENT_QUOTES, 'UTF-8'); ?>",
  "author": {
    "@type": "Person",
    "name": "Marvin Johanning",
    "url": "https://marvinjohanning.de"
  },
  "inLanguage": ["en", "grc"],
  "about": {
    "@type": "Language",
    "name": "Ancient Greek"
  }
}
</script>

<?php if ($page_type === 'article'): ?>
<?php
$schema_date_block = $page_date ? ",\n  \"datePublished\": \"{$page_date}\"" : "";
?>
<!-- JSON-LD: Article / Review / Book (content pages) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "<?php echo $page_schema_type; ?>",
  "headline": "<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>",
  "description": "<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>",
  "image": "<?php echo $full_image_url; ?>",
  "author": {
    "@type": "Person",
    "name": "Marvin Johanning"
  },
  "publisher": {
    "@type": "Organization",
    "name": "ancient-greek.net"
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php echo $full_url; ?>"
  }<?php if ($page_schema_type === 'Review' && isset($page_item_name)): ?>,
  "itemReviewed": {
    "@type": "Book",
    "name": "<?php echo htmlspecialchars($page_item_name, ENT_QUOTES, 'UTF-8'); ?>"
  }<?php endif; ?><?php echo $schema_date_block; ?>
}
</script>
<?php endif; ?>
<?php
