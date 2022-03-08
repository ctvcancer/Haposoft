const navBarIcon = document.querySelector(".nav__bar__icon")
            const menu = document.querySelector("#menu")

            navBarIcon.addEventListener("click", () => {
                menu.classList.toggle("active__menu")
            })
            console.log(navBarIcon);