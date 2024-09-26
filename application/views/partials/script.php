
<script>
  // JavaScript to scroll to the section based on query parameter
  window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    const sectionId = urlParams.get('section');
    if (sectionId) {
      var section = document.getElementById(sectionId);
      if (section) {
        section.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    }
  };
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
      const typewriterElement = document.getElementById('typewriter');
      const dataText = ["Welcome.", "To.", "Party Perfect.", "We.", "Beleive.", "Your.", "Celebration.", "deserves.", "to.", "be.", "extraordinary.", ];

      function typeWriter(text, i, fnCallback) {
        if (i < text.length) {
          typewriterElement.innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true"></span>';
          setTimeout(function() {
            typeWriter(text, i + 1, fnCallback);
          }, 100);
        } else if (typeof fnCallback == 'function') {
          setTimeout(fnCallback, 700);
        }
      }

      function startTextAnimation(i) {
        if (i >= dataText.length) {
          i = 0; // restart animation loop
        }
        typeWriter(dataText[i], 0, function() {
          startTextAnimation(i + 1);
        });
      }

      startTextAnimation(0);
    });
  </script>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("openModalBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.classList.remove("hide-popup");
      modal.classList.add("show-popup");
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.classList.remove("show-popup");
      modal.classList.add("hide-popup");
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.classList.remove("show-popup");
        modal.classList.add("hide-popup");
      }
    }
  </script>
  <script>
    // Get the modal
    var modal1 = document.getElementById("myModal1");

    // Get the button that opens the modal
    var btn1 = document.getElementById("openModalBtn1");

    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close1")[0];

    // When the user clicks the button, open the modal 
    btn1.onclick = function() {
      modal1.classList.remove("hide-popup");
      modal1.classList.add("show-popup");
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
      modal1.classList.remove("show-popup");
      modal1.classList.add("hide-popup");
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal1) {
        modal1.classList.remove("show-popup");
        modal1.classList.add("hide-popup");
      }
    }
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      // Check if there is a section to scroll to from localStorage
      const section = localStorage.getItem('scrollToSection');
      if (section) {
        const element = document.getElementById(section);
        if (element) {
          element.scrollIntoView({
            behavior: 'smooth'
          });
        }
        localStorage.removeItem('scrollToSection');
      }

      // Set up click event listeners on nav links
      document.querySelectorAll('.nav-link.scrollto').forEach(link => {
        link.addEventListener('click', function(e) {
          const section = this.getAttribute('data-section');
          if (section) {
            localStorage.setItem('scrollToSection', section);
          }
        });
      });
    });
  </script>

<script>
        function changePeople(amount) {
            var peopleInput = document.getElementById('number-of-people');
            var currentValue = parseInt(peopleInput.value);
            var newValue = currentValue + amount;
            if (newValue < 1) newValue = 1;
            peopleInput.value = newValue;
        }
    </script>