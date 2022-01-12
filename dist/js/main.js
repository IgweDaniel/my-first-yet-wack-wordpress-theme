const links = document.querySelectorAll('a.nav__link')
const hamburger = document.querySelector('.hamburger')
const nav = document.querySelector('header nav')

links.forEach(link => {
    link.addEventListener('click', (e) => {
        links.forEach(e => {
            e.classList.remove('current')
            nav.classList.remove('show')
        })
        if (!(e.target.classList.contains("current"))) {
            e.target.classList.add("current")
        }
    })
})

hamburger.addEventListener('click', () => {
    nav.classList.add('show')
})