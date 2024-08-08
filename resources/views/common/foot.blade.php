
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 15,
      },
    },
  });

  function closeParagraph(event, span) {
    event.stopPropagation(); // Prevent the click from toggling the paragraph
    span.parentElement.nextElementSibling.style.display = 'none';
  }

  function toggleParagraph(paragraph) {
    const nextParagraph = paragraph.nextElementSibling;
    if (nextParagraph) {
      nextParagraph.style.display = nextParagraph.style.display === 'none' ? 'block' : 'none';
    }
  }
  document.getElementById('navbarToggler').addEventListener('click', function () {
    var navbarContent = document.getElementById('navbarSupportedContent');
    navbarContent.classList.toggle('show');
  });
</script>