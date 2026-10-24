// BUG: wrong element id — 'searchInput' does not exist (actual id is 'search-box')
var inputs = document.querySelectorAll('#search-box, #main-search');
var category = document.getElementById('category');
var cards = document.querySelectorAll('.trail-card');
var emptyMsg = document.getElementById('trails-no-results');

function applyFilter(source) {
  if (source) inputs.forEach(function (i) { i.value = source.value; });
  var q = (inputs[0] ? inputs[0].value : '').toLowerCase().trim();
  var cat = category ? category.value : '';
  var shown = 0;

  cards.forEach(function (card) {
    var textHit = card.textContent.toLowerCase().includes(q);
    var catHit = !cat || card.dataset.category === cat;
    var hit = textHit && catHit;
    card.style.display = hit ? '' : 'none';
    if (hit) shown++;
  });
  if (emptyMsg) emptyMsg.hidden = shown > 0;
}

inputs.forEach(function (i) {
  i.addEventListener('input', function () { applyFilter(i); });
});
if (category) category.addEventListener('change', function () { applyFilter(); });
