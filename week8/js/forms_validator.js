/* Validates if whatever is put in the form will not be empty.
   Also makes it so that text will be "see more..." if it exceeds over 500 characters. */

document.addEventListener("DOMContentLoaded", function() {
    var comments = document.querySelectorAll(".comment_text");
    comments.forEach(function(comment) {
        if (comment.textContent.length > 500) {
            var truncatedText = comment.textContent.substring(0, 500);
            var fullText = comment.textContent;
            comment.innerHTML = truncatedText + '<span class="see-more">... <a href="#" class="see-more-link">See more</a></span>';
            
            comment.addEventListener("click", function(event) {
                if (event.target.classList.contains("see-more-link")) {
                    event.preventDefault();
                    comment.innerHTML = fullText + ' <span class="see-less"> <a href="#" class="see-less-link">See less</a></span>';
                } else if (event.target.classList.contains("see-less-link")) {
                    event.preventDefault();
                    comment.innerHTML = truncatedText + ' <span class="see-more">... <a href="#" class="see-more-link">See more</a></span>';
                }
            });
        }
    });
});
