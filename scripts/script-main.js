const menuButton = document.getElementById('menu'),
  header = document.querySelector('header'),
  nav = document.getElementById('header-nav');
// ,
// internalLinks = document.querySelectorAll('#internal-nav a', '#header-logo');

menuButton.addEventListener('click', () => {
  header.classList.toggle('header--ativo');
})

window.onclick = e => {
  if (
    header.classList.contains('header--ativo') &&
    !e.target.matches('#header-nav') &&
    !e.target.matches('#menu') &&
    !e.target.matches('#menu div') &&
    !e.target.matches('#publico-nav-button')
  ) {
    header.classList.remove('header--ativo')
  }
};

// internalLinks.forEach(each => {
//   each.addEventListener('click', e => {
//     e.preventDefault();

//     const href = event.currentTarget.getAttribute('href'),
//       section = document.querySelector(href);

//     window.scrollTo({
//       top: section.offsetTop - 100,
//       behavior: 'smooth'
//     });

//     header.classList.remove('header--ativo')
//   })
// })

const publicoNav = document.getElementById('publico-nav'),
  publicoNavButton = document.getElementById('publico-nav-button');

publicoNavButton.addEventListener('click', e => {
  e.preventDefault();
  publicoNav.classList.toggle('--publico-nav--ativo')
})