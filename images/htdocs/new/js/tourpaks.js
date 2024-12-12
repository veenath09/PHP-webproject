const filterToggle = document.getElementById("filter-toggle");
const filters = document.getElementById("filters");

function toggleFilters() {
    if (filters.style.display === 'none') {
        filters.style.display = 'block';
    } else {
        filters.style.display = 'none';
    }
}

filterToggle.addEventListener('click', toggleFilters);

window.addEventListener('resize', function() {
    if (window.innerWidth > 992) {
        filters.style.display = 'block';
    } else {
        filters.style.display = 'none';
    }
});
