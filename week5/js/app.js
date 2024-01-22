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


// Function to reveal content when scrolled to
// Object to hold all the elements to be revealed
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

// Select all the elements with the class hidden and add them to observer
const hiddenElements = document.querySelectorAll('.hidden, .hidden2');
hiddenElements.forEach(element => {
  observer.observe(element);
});

// When the user scrolls down 20px from the top of the document, slide down the navbar
// When the user scrolls to the top of the page, slide up the navbar (50px out of the top view)
window.onscroll = function() {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("navbar").style.top = "0";
    document.querySelector('.nav_main').classList.add('greenBackground');
  } else {
    document.getElementById("navbar").style.top = "-50px";
    document.querySelector('.nav_main').classList.remove('greenBackground');
  }
}
