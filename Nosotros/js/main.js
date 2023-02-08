const d = document,
  $carrouselImgs = d.querySelectorAll('.carrousel-content figure'),
  $prev = d.getElementById('prev'), $next = d.getElementById('next'),
  $home = d.getElementById('home-link')
let i = 0;
console.log($home)
d.addEventListener('click', e => {
  if (e.target.matches('#next')) {
    $carrouselImgs[i].classList.remove('carrousel-active');
    i++;
    if (i >= $carrouselImgs.length) {
      i = 0;
    }
    $carrouselImgs[i].classList.add('carrousel-active');
  }
  if (e.target.matches('#prev')) {
    $carrouselImgs[i].classList.remove('carrousel-active');
    i--;
    console.log(i)
    if (i < 0) {
      i = $carrouselImgs.length - 1;

    }
    $carrouselImgs[i].classList.add('carrousel-active');
  }
})

