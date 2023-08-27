const menuButton = document.getElementById('menu'),
  header = document.querySelector('header'),
  nav = document.getElementById('header-nav'),
  internalLinks = document.querySelectorAll('#internal-nav a', '#header-logo');

menuButton.addEventListener('click', () => {
  header.classList.toggle('header--ativo');
})

window.onclick = e => {
  if (
    header.classList.contains('header--ativo') &&
    !e.target.matches('#nav') &&
    !e.target.matches('#menu') &&
    !e.target.matches('#menu div') &&
    !e.target.matches('.nav_1280')
  ) {
    header.classList.remove('header--ativo')
  }
};

internalLinks.forEach(each => {
  each.addEventListener('click', e => {
    e.preventDefault();

    const href = event.currentTarget.getAttribute('href'),
      section = document.querySelector(href);

    window.scrollTo({
      top: section.offsetTop - 100,
      behavior: 'smooth'
    });

    // console.log(section.getBoundingClientRect().top - 100)

    header.classList.remove('header--ativo')
  })
})