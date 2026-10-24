<?php
/* Template Name: Trails Test Page */
get_header();
?>
<header class="site-header-trails">
  <h1>Hiking Advantures</h1>
  <p>Find your next trail with MyRehat</p>
  <input id="main-search" type="text" placeholder="Search homepage...">
</header>

<div class="trails-promo">
  <strong>Limited offer:</strong> 20% off all guided hikes this month.
</div>

<main class="trails-main">
  <div class="trails-search-row">
    <input id="search-box" type="text" placeholder="Search trails...">
    <select id="category">
      <option value="">All categories</option>
      <option value="mountain">Mountain</option>
      <option value="beach">Beach</option>
      <option value="forest">Forest</option>
    </select>
  </div>
  <p id="trails-no-results" hidden>No trails found.</p>

  <div class="trails-cards">
    <article class="trail-card" data-category="mountain">
      <h3>Mount Rinjani Sunrise</h3>
      <p>2-day guided summit trek, Lombok.</p>
      <span class="price">RM 350 / pax</span>
    </article>
    <article class="trail-card" data-category="beach">
      <h3>Pulau Perhentian Coastal Walk</h3>
      <p>Easy coastal trail, Terengganu.</p>
      <span class="price">RM 120 / pax</span>
    </article>
    <article class="trail-card" data-category="forest">
      <h3>Taman Negara Canopy Trail</h3>
      <p>Rainforest walk, Pahang.</p>
      <span class="price">RM 180 / pax</span>
    </article>
    <article class="trail-card" data-category="mountain">
      <h3>Mount Kinabalu Base Trek</h3>
      <p>Highland trek, Sabah.</p>
      <span class="price">RM 420 / pax</span>
    </article>
    <article class="trail-card" data-category="beach">
      <h3>Langkawi Sunset Ridge</h3>
      <p>Evening ridge walk, Kedah.</p>
      <span class="price">RM 95 / pax</span>
    </article>
    <article class="trail-card" data-category="forest">
      <h3>Belum Mossy Forest</h3>
      <p>Misty forest trail, Perak.</p>
      <span class="price">RM 150 / pax</span>
    </article>
  </div>

  <section class="trails-booking">
    <h2><?php echo esc_html( myrehat_test_booking_title() ); ?></h2>
    <form id="booking-form">
      <label>Name <input type="text" name="name" required></label>
      <label>Date <input type="date" name="date" required></label>
      <p id="trails-total">Total: -</p>
      <button type="submit">Request booking</button>
    </form>
    <div id="trails-confirmation" hidden></div>
  </section>
</main>

<footer class="trails-footer">
  <nav>
    <a href="#">FAQ</a>
    <a href="#">Contact Us</a>
    <a href="#">PDPA</a>
    <a href="#">Privacy Policy Statement</a>
    <a href="#">Blog</a>
    <a href="#">Careers</a>
    <a href="#">Terms of Service</a>
    <a href="#">Sitemap</a>
  </nav>
  <nav>
  <a href="https://facebook.com/" aria-label="Facebook" target="_blank" rel="noopener">
    <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.5 21v-8h2.7l.4-3.2h-3.1V7.8c0-.9.3-1.5 1.6-1.5h1.7V3.4c-.3 0-1.3-.1-2.4-.1-2.4 0-4 1.5-4 4.1v2.4H7.7V13h2.7v8h3.1z"/></svg>
  </a>
  <a href="https://linkedin.com/" aria-label="LinkedIn" target="_blank" rel="noopener">
    <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM3 9.5h4V21H3V9.5zm7 0h3.8v1.6h.1c.5-1 1.8-2 3.7-2 4 0 4.7 2.6 4.7 6V21h-4v-5.1c0-1.2 0-2.8-1.7-2.8s-2 1.3-2 2.700V21h-4V9.5z"/></svg>
  </a>
  <a href="https://instagram.com/" aria-label="Instagram" target="_blank" rel="noopener">
    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor"/></svg>
  </a>
  <a href="https://tiktok.com/" aria-label="TikTok" target="_blank" rel="noopener">
    <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M16.6 3c.3 2.100 1.500 3.500 3.600 3.700v3c-1.300.1-2.500-.3-3.600-1v6.300c0 6.300-6.800 8.300-9.900 3.800-2-3 -.8-7.800 4.200-8v3.200c-.4.100-.8.200-1.200.3-1.400.5-2.100 1.500-1.800 2.700.6 2.500 4.600 2.100 4.600-1.200V3h4.100z"/></svg>
  </a>
  <a href="https://youtube.com/" aria-label="YouTube" target="_blank" rel="noopener">
    <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M21.600 7.200a2.500 2.500 0 0 0-1.800-1.800C18.200 5 12 5 12 5s-6.200 0-7.800.4A2.500 2.500 0 0 0 2.400 7.200C2 8.800 2 12 2 12s0 3.200.4 4.800a2.500 2.500 0 0 0 1.800 1.800C5.800 19 12 19 12 19s6.200 0 7.800-.4a2.500 2.500 0 0 0 1.800-1.800c.4-1.600.4-4.800.4-4.800s0-3.200-.4-4.800zM10 15V9l5.200 3L10 15z"/></svg>
  </a>
  </nav>
  <p>&copy; 2026 MyRehat</p>
</footer>
<?php get_footer(); ?>
