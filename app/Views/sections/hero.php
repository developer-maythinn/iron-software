<section class="hero-section position-relative z-1" aria-labelledby="hero-heading">
    <div class="row hero-content mt-lg-5 py-3 justify-content-center">
        <div class="col-lg-9">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <img src="<?= base_url('assets/images/logo/hero-logo.svg') ?>" alt="IronPDF logo"
                            class="img-fluid" loading="eager" />
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
                        <img src="<?= base_url('assets/images/IMAGE.svg') ?>" fetchpriority="high"
                            alt="Hero illustration" class="img-fluid d-lg-none object-fit-contain hero-img z-2"
                            loading="eager" decoding="async" />
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
                        <h3 class="iron-heading-3">Sign up NOW to get early access!</h3>
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-md-10 col-lg-6 col-12 px-0">
                                    <form method="post" action="<?= base_url('landing/subscribe') ?>"
                                        class="signup-form" aria-label="Early access signup">
                                        <div class="signup-container position-relative">
                                            <div class="input-wrapper d-flex">
                                                <label for="heroEmail" class="visually-hidden">Email address</label>
                                                <input id="heroEmail" name="email" type="email" autocomplete="true" required
                                                    inputmode="email" aria-required="true"
                                                    placeholder="<?= esc($hero['emailPlaceholder'] ?? 'Enter email address') ?>"
                                                    class="signup-input form-control me-2">
                                                <button type="submit" class="signup-button">
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