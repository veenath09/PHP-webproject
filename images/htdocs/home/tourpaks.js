// Select the filter toggle button and the filters
const filterToggle = document.getElementById("filter-toggle");
const filters = document.getElementById("filters");

// Function to toggle the visibility of the filters
function toggleFilters() {
    if (filters.style.display === 'none') {
        filters.style.display = 'block';
    } else {
        filters.style.display = 'none';
    }
}

// Add an event listener to the filter toggle button
filterToggle.addEventListener('click', toggleFilters);

// Add an event listener to the window object to handle size changes
window.addEventListener('resize', function() {
    // If the window width is greater than 992px, show the filters
    if (window.innerWidth > 992) {
        filters.style.display = 'block';
    } else {
        // Otherwise, hide the filters
        filters.style.display = 'none';
    }
});
