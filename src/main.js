import './input.css'

const menuButton = document.querySelector('[data-menu-button]')
const mobileMenu = document.querySelector('[data-mobile-menu]')
const menuLinks = document.querySelectorAll('[data-menu-link]')
const openIcon = document.querySelector('[data-menu-icon-open]')
const closeIcon = document.querySelector('[data-menu-icon-close]')
const yearNode = document.querySelector('[data-current-year]')

if (yearNode) {
  yearNode.textContent = String(new Date().getFullYear())
}

if (menuButton && mobileMenu) {
  const setMenuState = (isOpen) => {
    mobileMenu.classList.toggle('hidden', !isOpen)
    menuButton.setAttribute('aria-expanded', String(isOpen))
    openIcon?.classList.toggle('hidden', isOpen)
    closeIcon?.classList.toggle('hidden', !isOpen)
  }

  setMenuState(false)

  menuButton.addEventListener('click', () => {
    const isOpen = menuButton.getAttribute('aria-expanded') === 'true'
    setMenuState(!isOpen)
  })

  menuLinks.forEach((link) => {
    link.addEventListener('click', () => setMenuState(false))
  })

  window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
      setMenuState(false)
    }
  })

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      setMenuState(false)
    }
  })
}
