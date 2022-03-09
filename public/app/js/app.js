const navBarIcon = document.querySelector(".nav-bar-icon")
            const menu = document.querySelector("#menu")

            navBarIcon.addEventListener("click", () => {
                navBarIcon.classList.toggle('fa-xmark')
                menu.classList.toggle("active-menu")
            })
            console.log(navBarIcon);
            