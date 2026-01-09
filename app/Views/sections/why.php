<section class="library-section" aria-labelledby="why-heading">
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
            <h2 id="why-heading" class="iron-heading-2 mb-3">

              <?= strip_tags($why['title'] ?? 'Why make a C++ PDF Library', '<b><strong><span>') ?>
            </h2>
            <?php foreach ($why['paragraphs'] ?? [] as $p): ?>
              <p class="iron-heading-normal-light lh-lg"><?= nl2br(esc($p)) ?></p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>