# Landing Page QA Checklist

## Design & Layout
- [ ] Hero section: Logo, title, form aligned (spacing, margins)
- [ ] Feature strip: Equal spacing, dividers on desktop only
- [ ] All sections: Consistent padding (py-5), container widths
- [ ] Background images: No distortion, proper aspect ratio
- [ ] Badge text: Uppercase, color contrast meets WCAG AA
- [ ] Form labels: Hidden visually, accessible to screen readers

## Responsiveness
- [ ] Mobile (375px): Single column, stacked layout, touch-friendly inputs
- [ ] Tablet (768px): 2-column layouts, grid adjustments
- [ ] Desktop (992px+): Feature strip horizontal, full layouts
- [ ] Images: Responsive with `img-fluid` class
- [ ] Navigation: Dropdown works on touch

## Cross-Browser (Chrome, Firefox, Safari)
- [ ] CSS rendering: Styles applied correctly
- [ ] SVG images: Display without artifacts
- [ ] Form validation: HTML5 email input functional
- [ ] Object-fit: `object-fit-contain` and `object-fit-cover` work
- [ ] No console errors

## SEO & Accessibility
- [ ] Title: Present and descriptive (< 60 chars)
- [ ] Meta description: Present (< 160 chars)
- [ ] Canonical link: Correct URL
- [ ] Heading hierarchy: H1 > H2 > H3 (no skips)
- [ ] Alt text: All images have descriptive alt text
- [ ] Decorative images: `aria-hidden="true"`
- [ ] Skip link: `<a href="#main">Skip to main content</a>`
- [ ] Form labels: All inputs have `<label>` tags
- [ ] JSON-LD: SoftwareApplication schema valid
- [ ] OG & Twitter tags: Present and correct

## Core Web Vitals
- [ ] LCP < 2.5s: Hero image `fetchpriority="high"`, `loading="eager"`
- [ ] CLS < 0.1: All images have width/height attributes
  - Header logo: 120×40
  - Hero logo: 60×60
  - Hero illustration: 400×500
  - Background patterns: 1200×800
  - Status logos: 40×40
- [ ] FID < 100ms: Bootstrap JS deferred

## Performance
- [ ] Preconnect to CDNs: Bootstrap, Font Awesome
- [ ] Lazy loading: `loading="lazy"` for below-fold images
- [ ] SVG format: Optimized file size
- [ ] No render-blocking resources
- [ ] Critical CSS: Inline or early-loaded


## Lighthouse Targets (100)
- Performance: 100
- Accessibility: 100
- Best Practices: 100
- SEO: 100

---

## 🔍 Code Quality

### Positive Aspects
✅ **Clean Separation** — Each section in its own file, easy to maintain  
✅ **Data-Driven** — Single JSON source of truth, no hardcoded content  
✅ **Secure** — All user content escaped with `esc()`, no XSS vulnerabilities  
✅ **Accessible** — ARIA labels, form labels, semantic HTML  
✅ **Performance** — Preconnect, lazy/eager loading, deferred JS, image dimensions  
✅ **SEO** — Proper meta tags, heading hierarchy, JSON-LD schema  



**Status**: Ready for QA  
**Last Updated**: 2026-01-09

