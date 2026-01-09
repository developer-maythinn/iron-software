<?php
/**
 * @var array $content
 * @var string|null $contentError
 */

$meta = $content['meta'] ?? [];
$hero = $content['hero'] ?? [];
$featureStrip = $content['featureStrip'] ?? [];
$story = $content['story'] ?? [];
$why = $content['why'] ?? [];
$early = $content['earlyAccess'] ?? [];
$statuses = $content['programStatuses'] ?? [];
$footerCta = $content['footerCta'] ?? [];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="<?= esc($meta['description'] ?? 'IronPDF for C++ beta program landing page') ?>">
  <meta name="keywords" content="IronPDF, C++, PDF, HTML to PDF, beta">
  <meta name="author" content="Iron Software">
  <meta name="robots" content="index,follow">
  <title><?= esc($meta['title'] ?? 'IronPDF for C++ Beta') ?></title>

  <!-- Open Graph -->
  <meta property="og:title" content="<?= esc($meta['title'] ?? '') ?>">
  <meta property="og:description" content="<?= esc($meta['description'] ?? '') ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= esc(current_url()) ?>">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= esc($meta['title'] ?? '') ?>">
  <meta name="twitter:description" content="<?= esc($meta['description'] ?? '') ?>">

  <link rel="canonical" href="<?php echo current_url(); ?>" />
  <!-- Performance: preconnect to CDNs -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="<?= base_url('assets/bootstrap-5.3.8/css/bootstrap.min.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/css/global.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

  <!-- <link rel="stylesheet"
    href="<?= base_url('assets/css/global.css') ?>?v=<?= filemtime(FCPATH . 'assets/css/global.css') ?>">
  <link rel="stylesheet"
    href="<?= base_url('assets/css/style.css') ?>?v=<?= filemtime(FCPATH . 'assets/css/style.css') ?>"> -->

  <!-- Structured data -->
  <script type="application/ld+json">
  {"@context":"https://schema.org","@type":"SoftwareApplication","name":"<?= esc($meta['title'] ?? 'IronPDF for C++') ?>","description":"<?= esc($meta['description'] ?? '') ?>","applicationCategory":"DeveloperApplication"}
  </script>
</head>

<body class="position-relative">
  <a class="visually-hidden-focusable" href="#main">Skip to main content</a>

  <img src="<?= base_url('assets/images/IMAGE.svg') ?>" alt="Decorative abstract background" aria-hidden="true"
    class="d-none d-lg-block img-fluid w-50 position-absolute top-0 end-0 object-fit-contain hero-img z-2"
    loading="eager" />
  <header>
    <nav class="navbar navbar-expand-lg custom-nav">
      <div class="container-fluid justify-content-start">
        <a class="navbar-brand" href="<?= base_url('/') ?>" aria-label="Home">
          <img src="<?= base_url('assets/images/logo/logo1.svg') ?>" class="img-fluid" alt="Iron Software logo" />
        </a>
        <ul class="navbar-nav gap-2 flex-row">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle iron-heading-5 text-uppercase" aria-current="page" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item iron-heading-5 text-uppercase" href="#">Action</a>
              </li>
              <li>
                <a class="dropdown-item iron-heading-5 text-uppercase" href="#">Another action</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item iron-heading-5 text-uppercase" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link iron-heading-5 text-uppercase" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link iron-heading-5 text-uppercase" href="#">Career</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main id="main" role="main">
    <?= view('sections/hero', ['hero' => $hero]) ?>
  </main>

  <?= view('sections/story', ['story' => $story, 'featureStrip' => $featureStrip]) ?>
  <?= view('sections/why', ['why' => $why]) ?>
  <?= view('sections/early-access', ['early' => $early, 'statuses' => $statuses]) ?>
  <?= view('sections/footer', ['footerCta' => $footerCta, 'hero' => $hero]) ?>

  <script src="<?= base_url('assets/bootstrap-5.3.8/js/bootstrap.bundle.min.js') ?>" defer></script>
</body>

</html>