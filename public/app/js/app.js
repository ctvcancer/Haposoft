$(document).ready(() => {
    const navBarIcon = document.querySelector(".nav-bar-icon")
    const menu = document.querySelector("#menu")
  
    navBarIcon.addEventListener("click", () => {
      menu.classList.toggle("active-menu")
    })
  
    $('.feedback-carousel').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 2,
      arrows: false,
      autoplay: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }]
    })
  
    $('.contact-logo').click(function () {
      $('.contact-logo > a').toggleClass('contact-active')
      $('.info-contact').toggleClass('info-contact-active')
    })
  })
  