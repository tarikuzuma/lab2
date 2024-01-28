/*
  Program uses classes , Functions, and Objects to reveal content when scrolled to.
  The IntersectionObserver object is used to check if the element is in the viewport.
  If it is, the class visible is added to the element.
  The class visible contains the CSS to make the element visible.
  The class hidden is used to hide the element.
  The class hidden2 is used to hide the element.
  The class visible2 is used to make the element visible.
  The class visible2 contains the CSS to make the element visible.
  The class hidden2 is used to hide the element.
*/ 

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

const buttons = document.querySelectorAll("[data-carousel-button]")

// project.css
// Add animation to the carousel
buttons.forEach(button => {
  button.addEventListener("click", () => {
    const offset = button.dataset.carouselButton === "next" ? 1 : -1;
    changeSlide(offset);
  });
});

// Function to change the slide based on the offset
function changeSlide(offset) {
  const slides = document.querySelector("[data-carousel] [data-slides]");
  const activeSlide = slides.querySelector("[data-active]");
  let newIndex = [...slides.children].indexOf(activeSlide) + offset;

  if (newIndex < 0) newIndex = slides.children.length - 1;
  if (newIndex >= slides.children.length) newIndex = 0;

  slides.children[newIndex].dataset.active = true;
  delete activeSlide.dataset.active;
}

// Set an interval to change the slide every 5 seconds
setInterval(() => {
  changeSlide(1); // Change to the next slide
}, 4000);