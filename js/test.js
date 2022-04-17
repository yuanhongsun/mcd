const animation = bodymovin.loadAnimation({
  container: document.getElementById('animate'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: './js/data.json'
});
