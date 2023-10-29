document.addEventListener("DOMContentLoaded", function() {
    const editButtons = document.querySelectorAll(".edit-button");
    const deleteButtons = document.querySelectorAll(".delete-button");
    const showButtons = document.querySelectorAll(".show-button");

    editButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            // Logika ketika tombol Edit diklik
        });
    });

    deleteButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            if (confirm('Yakin ingin menghapus penulis ' + button.getAttribute("data-author") + '?')) {
                // Logika ketika tombol Hapus diklik
            }
        });
    });

    showButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            // Logika ketika tombol Tampilkan diklik
        });
    });
});
