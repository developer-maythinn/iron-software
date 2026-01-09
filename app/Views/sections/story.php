<section class="iron-pdf-section position-relative z-1 overflow-hidden" aria-labelledby="story-heading">
  <img src="<?= base_url('assets/images/Rectangle-7.svg') ?>" alt="Background pattern" loading="lazy"
    class="img-fluid position-absolute object-fit-cover h-100 bg-img" aria-hidden="true" />
  <div class="row justify-content-center py-5">
    <div class="col-lg-9">
      <div class="position-relative">
        <h2 id="story-heading" class="iron-heading-2 text-center my-4">
          <?= esc($story['title'] ?? 'IronPDF for C++') ?>
        </h2>
        <?php if (!empty($story['badge'])): ?>
          <div class="badge-container position-absolute">
            <div class="coming-soon-badge text-uppercase p-2 lh-sm">
              <?= esc($story['badge']) ?>
            </div>
          </div>
        <?php endif; ?>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between" role="list"
              aria-label="Key features">
              <?php foreach ($featureStrip as $i => $f): ?>
                <div class="px-3 d-flex align-items-start" role="listitem">
                  <span class="fw-bold me-2" aria-hidden="true">#</span>
                  <span class="iron-heading-normal-light"><?= esc($f['label'] ?? '') ?></span>
                </div>
                <?php if ($i < count($featureStrip) - 1): ?>
                  <div class="divider d-none d-lg-block"></div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if (!empty($story['paragraphs'])): ?>
    <div class="row para-section justify-content-center py-5">
      <div class="col-lg-9">
        <div class="container">
          <div class="row">
            <div class="col-12">

              <?php foreach ($story['paragraphs'] as $p): ?>
                <p class="iron-heading-normal-light lh-lg">
                  <?= nl2br(strip_tags($p, '<strong><b>')) ?>
                </p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>