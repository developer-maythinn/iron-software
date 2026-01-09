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

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="<?= base_url('assets/bootstrap-5.3.8/css/bootstrap.min.css') ?>">

  <!-- <link rel="stylesheet" href="<?= base_url('assets/css/global.css') ?>"> -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet"
    href="<?= base_url('assets/css/global.css') ?>?v=<?= filemtime(FCPATH . 'assets/css/global.css') ?>">

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

    <section class="hero-section position-relative z-1" aria-labelledby="hero-heading">
      <div class="row hero-content mt-lg-5 py-3 justify-content-center">
        <div class="col-lg-9">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <img src="<?= base_url('assets/images/logo/hero-logo.svg') ?>" alt="IronPDF logo" class="img-fluid"
                  loading="eager" />
                <h4 class="iron-heading-3 title">
                  <?= esc($hero['eyebrow'] ?? 'Building on the success of IronPDF for .NET') ?>
                </h4>

                <h1 id="hero-heading" class="iron-heading-1">
                  <?= esc($hero['title'] ?? 'Beta Software Program') ?>
                  <span class="d-block"><?= esc($hero['product'] ?? 'IronPDF for C++') ?></span>
                </h1>
                <p class="iron-heading-light " style="color: var(--purple-200)" aria-label="Status">

                  <?= esc($hero['status'] ?? 'Coming soon') ?>
                </p>
              </div>
              <div class="col-lg-6">
                <img src="<?= base_url('assets/images/IMAGE.svg') ?>" fetchpriority="high" alt="Hero illustration"
                  class="img-fluid d-lg-none object-fit-contain hero-img z-2" loading="eager" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row hero-form justify-content-center">
        <div class="col-lg-9">
          <div class="container py-5">
            <div class="row">
              <div class="col-md-12">
                <h2 class="iron-heading-2 mb-1">Be one of the first</h2>
                <h3 class="iron-heading-3">Sign up now to get early access</h3>
                <div class="container mt-4">
                  <div class="row">
                    <div class="col-md-10 col-lg-6 col-12 px-0">
                      <form method="post" action="<?= base_url('landing/subscribe') ?>" class="signup-form"
                        aria-label="Early access signup">
                        <div class="signup-container position-relative">
                          <div class="input-wrapper d-flex">
                            <label for="heroEmail" class="visually-hidden">Email address</label>
                            <input id="heroEmail" name="email" type="email" required inputmode="email"
                              aria-required="true"
                              placeholder="<?= esc($hero['emailPlaceholder'] ?? 'Enter email address') ?>"
                              class="signup-input form-control me-2">
                            <button type="submit" class="signup-button btn btn-primary">
                              <?= esc($hero['ctaText'] ?? 'Sign up now') ?>
                              <i class="fa-solid fa-caret-right ms-1" aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="d-md-flex flex-wrap align-items-start align-items-lg-center mt-4">
                  <div class="custom-badge custom-badge-color-700 d-inline">
                    # Coming Soon
                  </div>
                  <p class="mb-0 mt-3 mt-lg-0 ms-2">
                    IronPDF Beta Program also coming soon for <b>Python</b> |
                    <b>Node.JS</b> | <b>Java</b>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <section class="iron-pdf-section position-relative z-1 overflow-hidden">
    <img src="<?= base_url('assets/images/Rectangle-7.svg') ?>" alt="Background pattern" loading="lazy"
      class="img-fluid position-absolute object-fit-cover h-100 bg-img" aria-hidden="true" />
    <div class="row justify-content-center py-5">
      <div class="col-lg-9">
        <div class="position-relative">
          <h3 class="iron-heading-2 text-center my-4">IronPDF for C++</h3>
          <div class="badge-container position-absolute">
            <div class="coming-soon-badge text-uppercase p-2 lh-sm">
              Coming soon
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between">
                <div class="px-3 d-flex align-items-start">
                  <span class="fw-bold me-2">#</span>
                  <span class="iron-heading-normal-light">Generate PDFs from HTML in C++</span>
                </div>

                <div class="divider d-none d-lg-block"></div>

                <div class="px-3 d-flex align-items-start">
                  <span class="fw-bold me-2">#</span>
                  <span class="iron-heading-normal-light">Combine, split, and modify PDFs quickly in C++</span>
                </div>

                <div class="divider d-none d-lg-block"></div>

                <div class="px-3 d-flex align-items-start">
                  <span class="fw-bold me-2">#</span>
                  <span class="iron-heading-normal-light">Extract text and images from PDFs using C++</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row para-section justify-content-center py-5">
      <div class="col-lg-9">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p class="iron-heading-normal-light lh-lg">
                The new <b>IronPDF library for C++</b> will enhance the C++
                developer&apos;s tool set with robust PDF generation and
                conversion capabilities. Developers will be able to generate
                new PDFs from HTML content (from text or from URL), as well as
                to combine, split, extract, and modify content from existing
                PDFs.
              </p>
              <p class="iron-heading-normal-light lh-lg mt-4">
                <b>IronPDF for C++</b> will help developers create C++
                applications that can do all of these PDF processing tasks and
                more, with speed, precision, control, and excellence.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="library-section">
    <div class="row justify-content-center py-5">
      <div class="col-lg-9">
        <div class="container py-4">
          <div class="row">
            <div class="col-lg-3 position-relative">
              <div class="filter position-absolute z-1">
                <div class="filter1"></div>
                <div class="filter2"></div>
              </div>
              <img src="<?= base_url('assets/images/HTML-to-PDF-icon.svg') ?>" alt="HTML to PDF icon"
                class="img-fluid position-relative z-2" loading="lazy" />
            </div>
            <div class="col">
              <h3 class="iron-heading-2 mb-3">
                Why make a <span>C++ PDF Library</span>
              </h3>
              <p class="iron-heading-normal-light lh-lg">
                C++ is one of the most popular, oldest, and important
                programming languages in use, being the language of choice in
                low-level systems and network programming and other domains
                where performance is critical.
              </p>
              <p class="iron-heading-normal-light lh-lg">
                The release of IronPDF for C++ will aid developers in building
                performant applications that can carry out PDF-related
                processing tasks
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="early-section overflow-hidden">
    <div class="row justify-content-center py-5">
      <div class="col-lg-9">
        <div class="container py-4 position-relative">
          <img src="<?= base_url('assets/images/Rectangle-7.svg') ?>" alt="Background pattern" loading="lazy"
            class="img-fluid position-absolute object-fit-cover bg-img" aria-hidden="true" />
          <div class="row">
            <div class="col">
              <h3 class="iron-heading-2 mb-3">
                Early Access to <span>C++ PDF Library</span>
              </h3>
              <p class="iron-heading-normal-light lh-lg">
                Joining the early access program will allow you to collaborate
                closely with our engineering team. You will be playing a key
                role in the development process as you share your early
                experiences using the C++ PDF library before its official
                launch. Your continual feedback after we release the library
                will be immensely helpful as we release new features and
                improve on existing features.
              </p>
            </div>
          </div>
          <div class="row mt-4 gap-3 gap-lg-0">
            <div class="col-12 col-lg-4">
              <div class="custom-badge-container rounded-pill p-3 w-100 d-flex gap-3">
                <div class="custom-badge custom-badge-color-700">
                  # Released
                </div>
                <img src="<?= base_url('assets/images/logo/java.svg') ?>" class="img-fluid" alt="Java logo"
                  loading="lazy" />
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="custom-badge-container rounded-pill p-3 w-100 d-flex gap-3">
                <div class="custom-badge badge-bg-dark ">
                  # Coming Soon
                </div>
                <img src="<?= base_url('assets/images/logo/python.svg') ?>" class="img-fluid" alt="Python logo"
                  loading="lazy" />
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="custom-badge-container rounded-pill p-3 w-100 d-flex gap-3">
                <div class="custom-badge badge-bg-dark ">
                  # Coming Soon
                </div>
                <img src="<?= base_url('assets/images/logo/node.svg') ?>" class="img-fluid" alt="Node.js logo"
                  loading="lazy" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="text-center py-5 position-relative z-4">
    <h4>Sign up to our <span>Beta Program</span></h4>

    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6 col-12 px-3 ">
          <form method="post" action="<?= base_url('landing/subscribe') ?>" aria-label="Footer signup">
            <div class="signup-container position-relative">
              <div class="input-wrapper d-flex">
                <label for="footerEmail" class="visually-hidden">Email address</label>
                <input type="email" id="footerEmail" name="email"
                  placeholder="<?= esc($footerCta['emailPlaceholder'] ?? $hero['emailPlaceholder'] ?? 'Enter email address') ?>"
                  class="signup-input form-control me-2" autocomplete="email" required aria-required="true">
                <button type="submit" class="signup-button btn btn-primary">
                  <?= esc($footerCta['ctaText'] ?? 'Sign up now') ?>
                  <i class="fa-solid fa-caret-right ms-1" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?= base_url('assets/bootstrap-5.3.8/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"
    defer></script> -->
  <!-- <script src="/assets/js/landing.js" defer></script> -->
</body>

</html>