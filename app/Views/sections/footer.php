<footer class="text-center py-5 position-relative z-4" role="contentinfo">

    <h3 class="footer-title mb-4"> <?= strip_tags($footerCta['title'] ?? 'Sign up to our Beta Program', allowed_tags: '<span>') ?>
    </h3>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 col-12 px-3 ">
                <form method="post" action="<?= base_url('landing/subscribe') ?>" aria-label="Footer signup form">

                    <div class="signup-container position-relative">
                        <div class="input-wrapper d-flex">
                            <label for="footerEmail" class="visually-hidden">Email address</label>
                            <input type="email" id="footerEmail" name="email"
                                placeholder="<?= esc($footerCta['emailPlaceholder'] ?? $hero['emailPlaceholder'] ?? 'Enter email address') ?>"
                                class="signup-input form-control me-2" autocomplete="true" required
                                aria-required="true">
                            <button type="submit" class="signup-button ">
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