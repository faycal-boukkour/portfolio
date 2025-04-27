document.addEventListener("DOMContentLoaded", function() {
    // Get button scroll
    var mybutton = document.getElementById("scrollToTopBtn");

    // show the button or not
    window.onscroll = function() {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        mybutton.classList.remove("hidden");
      } else {
        mybutton.classList.add("hidden");
      }
    };

    // scroll to top
    mybutton.onclick = function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    };
  });
