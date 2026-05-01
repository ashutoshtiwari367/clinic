 <?php
$pageTitle = $pageTitle ?? 'Shri Balaji Clinic Kanpur | Best Physiotherapy, Ayurvedic, Dental & Skin Care';
$pageDesc  = $pageDesc  ?? 'Visit Shri Balaji Clinic Kanpur for expert Physiotherapy, Ayurvedic treatment, General Medicine, Dental care & Laser Skin Treatment. Dr. Ritesh Tiwari & Dr. Arti Tiwari.';
$pageUrl   = $pageUrl   ?? 'https://shribalajicliniclkanpur.in/';
$pageImage = $pageImage ?? 'https://shribalajicliniclkanpur.in/assets/img/og-image.jpg';
$pageKeywords = $pageKeywords ?? 'best clinic in kanpur, physiotherapy kanpur, ayurvedic doctor kanpur, dental specialist kanpur, skin care laser treatment kanpur';
$activePage   = $activePage   ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title><?= htmlspecialchars($pageTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDesc) ?>"/>
<meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>"/>
<meta name="robots" content="index, follow"/>
<meta name="author" content="Shri Balaji Clinic Services, Kanpur"/>
<link rel="canonical" href="<?= htmlspecialchars($pageUrl) ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?= htmlspecialchars($pageUrl) ?>"/>
<meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>"/>
<meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>"/>
<meta property="og:image" content="<?= htmlspecialchars($pageImage) ?>"/>
<meta property="og:locale" content="en_IN"/>
<meta property="og:site_name" content="Shri Balaji Clinic Services"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>"/>
<meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>"/>
<meta name="twitter:image" content="<?= htmlspecialchars($pageImage) ?>"/>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: '#0ea5e9',
        saffron: { DEFAULT:'#f97316', dark:'#ea580c' }
      },
      fontFamily: {
        poppins: ['Poppins','sans-serif'],
        inter:   ['Inter','sans-serif']
      }
    }
  }
}
</script>
<link rel="stylesheet" href="/assets/css/custom.css"/>
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":["MedicalClinic","LocalBusiness"],
  "name":"Shri Balaji Clinic Services",
  "url":"https://shribalajicliniclkanpur.in/",
  "telephone":"+91-9936443366",
  "description":"<?= addslashes($pageDesc) ?>",
  "address":{"@type":"PostalAddress","addressLocality":"Kanpur","addressRegion":"Uttar Pradesh","postalCode":"208001","addressCountry":"IN"},
  "geo":{"@type":"GeoCoordinates","latitude":26.4499,"longitude":80.3319},
  "openingHours":["Mo-Fr 09:00-20:00","Sa 09:00-18:00","Su 10:00-14:00"],
  "medicalSpecialty":["Physiotherapy","Ayurvedic Medicine","General Practice","Dentistry","Dermatology"],
  "aggregateRating":{"@type":"AggregateRating","ratingValue":"4.8","reviewCount":"520","bestRating":"5"},
  "sameAs":["https://facebook.com/shribalajicliniclkanpur","https://instagram.com/shribalajicliniclkanpur"]
}
</script>
</head>
<body class="bg-white font-inter text-gray-700 antialiased">

<!-- Emergency Bar -->
<div class="bg-red-600 text-white text-center py-1.5 text-xs font-medium">
  🚨 <strong>Emergency:</strong>
  <a href="tel:+919936443366" class="underline font-bold hover:text-yellow-200 ml-1">+91-99364 43366</a>
  &nbsp;|&nbsp; 24/7 Emergency Available &nbsp;|&nbsp;
  <span class="text-yellow-200">Kanpur, Uttar Pradesh</span>
</div>

<!-- NAVBAR -->
<nav id="navbar" class="navbar sticky top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-sky-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-18 py-3">

      <!-- Logo -->
      <a href="/index.php" class="flex items-center gap-3 group">
        <div class="w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-transform">
          <img src="./assets/img/logo.jpeg" alt="Shri Balaji Clinic" class="w-full h-full object-contain"/>
        </div>
        <div>
          <div class="font-poppins font-bold text-base leading-tight text-sky-700">Shri Balaji</div>
          <div class="font-poppins text-xs font-semibold tracking-widest uppercase" style="color:#f97316">Clinic Services</div>
        </div>
      </a>

      <!-- Desktop Nav Links -->
      <?php
      $navLinks = [
        ['href'=>'/index.php',       'label'=>'Home',        'id'=>'home'],
        ['href'=>'/about.php',        'label'=>'About Us',    'id'=>'about'],
        ['href'=>'/doctors.php',      'label'=>'Doctors',     'id'=>'doctors'],
        ['href'=>'/services.php',     'label'=>'Services',    'id'=>'services'],
        ['href'=>'/gallery.php',      'label'=>'Gallery',     'id'=>'gallery'],
        ['href'=>'/appointment.php',  'label'=>'Appointment', 'id'=>'appointment'],
        ['href'=>'/contact.php',      'label'=>'Contact',     'id'=>'contact'],
      ];
      ?>
      <div class="hidden lg:flex items-center gap-1">
        <?php foreach ($navLinks as $link):
          $active = ($activePage === $link['id']);
        ?>
          <a href="<?= $link['href'] ?>"
             class="nav-link px-3 py-2 rounded-lg text-sm font-medium font-poppins transition-all
             <?= $active ? 'text-orange-500 font-semibold active' : 'text-gray-600 hover:text-sky-600 hover:bg-sky-50' ?>">
            <?= $link['label'] ?>
          </a>
        <?php endforeach; ?>
        <a href="/appointment.php"
           class="btn-primary ml-2 px-5 py-2.5 rounded-xl text-white text-sm font-semibold font-poppins">
          📅 Book Now
        </a>
      </div>

      <!-- Hamburger -->
      <button id="menuBtn" class="lg:hidden p-2 rounded-lg text-gray-600 hover:bg-sky-50" aria-label="Menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="lg:hidden">
      <div class="py-3 border-t border-sky-100 space-y-1">
        <?php foreach ($navLinks as $link):
          $active = ($activePage === $link['id']);
        ?>
          <a href="<?= $link['href'] ?>"
             class="block px-4 py-2.5 rounded-lg text-sm font-medium font-poppins
             <?= $active ? 'bg-sky-50 text-orange-500 font-semibold' : 'text-gray-600 hover:bg-sky-50 hover:text-sky-600' ?>">
            <?= $link['label'] ?>
          </a>
        <?php endforeach; ?>
        <div class="px-4 pt-1">
          <a href="/appointment.php"
             class="btn-primary block text-center px-5 py-3 rounded-xl text-white text-sm font-semibold font-poppins">
            📅 Book Appointment
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
