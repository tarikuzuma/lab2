/*window.addEventListener('scroll', revealContent);

function revealContent() {
  const intro = document.querySelector('.intro');
  const content = document.querySelector('.content');
  const introBottom = intro.getBoundingClientRect().bottom;

  if (introBottom <= window.innerHeight) {
    content.classList.add('visible');
    content.classList.remove('hidden');
  }
}*/

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      if (entry.target.classList.contains('hidden')) {
        entry.target.classList.add('visible');
      } else if (entry.target.classList.contains('hidden2')) {
        entry.target.classList.add('visible2');
      }
    } else {
      entry.target.classList.remove('visible', 'visible2');
    }
  });
});

const hiddenElements = document.querySelectorAll('.hidden, .hidden2');
hiddenElements.forEach(element => {
  observer.observe(element);
});



