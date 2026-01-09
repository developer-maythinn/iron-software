<section class="early-section overflow-hidden" aria-labelledby="early-heading">
  <div class="row justify-content-center py-5">
    <div class="col-lg-9">
      <div class="container py-4 position-relative">
        <img src="<?= base_url('assets/images/Rectangle-7.svg') ?>" alt="Background pattern" loading="lazy"
          class="img-fluid position-absolute object-fit-cover bg-img" aria-hidden="true" />
        <div class="row">
          <div class="col">
            <h2 id="early-heading" class="iron-heading-2 mb-3">
              <?= strip_tags($early['title'] ?? 'Early Access to C++ PDF Library', '<b><strong><span>') ?>

            </h2>
            <?php foreach ($early['paragraphs'] ?? [] as $p): ?>
              <p class="iron-heading-normal-light lh-lg"><?= nl2br(esc($p)) ?></p>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="row mt-4 gap-3 gap-lg-0" role="list" aria-label="Program statuses">
          <?php $logos = ['Java' => 'java.svg', 'Python' => 'python.svg', 'Node.JS' => 'node.svg']; ?>
          <?php foreach ($statuses ?? [] as $s):
            $logo = '';
            foreach ($logos as $lang => $file) {
              if (stripos($s['product'] ?? '', $lang) !== false) {
                $logo = $file;
                break;
              }
            }
            ?>
            <div class="col-12 col-lg-4" role="listitem">
              <div class="custom-badge-container rounded-pill p-3 w-100 d-flex gap-3">
                <div
                  class="custom-badge <?= strtolower($s['state'] ?? '') === 'released' ? 'custom-badge-color-700' : 'badge-bg-dark' ?>">
                  # <?= esc($s['state'] ?? '') ?>
                </div>
                <?php if ($logo): ?>
                  <img src="<?= base_url('assets/images/logo/' . $logo) ?>" class="img-fluid"
                    alt="<?= esc($s['product'] ?? '') ?> logo" loading="lazy" />
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>