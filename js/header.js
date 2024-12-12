window.onload = function() {
    document.getElementById('toggle-button').addEventListener('click', function () {
        document.getElementById('nav-list').style.display = document.getElementById('nav-list').style.display === 'none' ? 'flex' : 'none';
    });
};