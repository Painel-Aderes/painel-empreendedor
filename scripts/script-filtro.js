const toggleFiltro = document.getElementById('section-filtro__mobile'),
  toggleFiltroBtn = document.getElementById('toggle-filtro'),
  clearFiltro = document.getElementById('filtro-limpa');

toggleFiltroBtn.addEventListener('click', (e) => {
  toggleFiltro.classList.toggle('filtro--ativo')
})

clearFiltro.addEventListener('click', e => e.preventDefault());