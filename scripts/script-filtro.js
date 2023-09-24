const toggleFiltro = document.getElementById('section-filtro__mobile'),
  toggleFiltroBtn = document.getElementById('toggle-filtro');

toggleFiltroBtn.addEventListener('click', (e) => {
  toggleFiltro.classList.toggle('filtro--ativo')
})
