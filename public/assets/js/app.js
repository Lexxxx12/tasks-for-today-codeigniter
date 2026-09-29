const sidebar = document.querySelector('#sidebar');
const menuButton = document.querySelector('#menuButton');
const scrim = document.querySelector('#scrim');

function setMenu(open) {
  sidebar?.classList.toggle('open', open);
  document.body.classList.toggle('menu-open', open);
  menuButton?.setAttribute('aria-expanded', String(open));
}

menuButton?.addEventListener('click', () => setMenu(!sidebar.classList.contains('open')));
scrim?.addEventListener('click', () => setMenu(false));

const search = document.querySelector('#taskSearch');
const filterButtons = [...document.querySelectorAll('[data-filter]')];
const taskRows = [...document.querySelectorAll('#taskList .task-row')];
let activeFilter = 'all';

function filterTasks() {
  const query = search?.value.trim().toLowerCase() ?? '';
  let visible = 0;
  taskRows.forEach((row) => {
    const matchesFilter = activeFilter === 'all' || row.dataset.status === activeFilter;
    const matchesSearch = row.dataset.search.includes(query);
    const show = matchesFilter && matchesSearch;
    row.classList.toggle('hidden', !show);
    if (show) visible++;
  });
  document.querySelector('#filterEmpty')?.classList.toggle('hidden', visible !== 0);
  const count = document.querySelector('#resultCount');
  if (count) count.textContent = `${visible} ${visible === 1 ? 'task' : 'tasks'}`;
}

search?.addEventListener('input', filterTasks);
filterButtons.forEach((button) => button.addEventListener('click', () => {
  activeFilter = button.dataset.filter;
  filterButtons.forEach((item) => item.classList.toggle('active', item === button));
  filterTasks();
}));
