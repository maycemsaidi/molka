document.getElementById('toggleFormBtn').addEventListener('click', function() {
    var form = document.getElementById('addVoyageForm');
    if (form.style.display === 'none') {
        form.style.display = 'block';
    } else {
        form.style.display = 'none';
    }
});
