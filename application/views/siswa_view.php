<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    body {
    background-color: #eef5ff;
    color: #000;
    transition: background 0.3s, color 0.3s;
    display: flex; /* Menggunakan Flexbox */
    justify-content: center; /* Memposisikan container di tengah secara horizontal */
    align-items: center; /* Memposisikan container di tengah secara vertikal */
    min-height: 100vh; /* Memastikan body memiliki tinggi minimal sebesar viewport */
    margin: 0; /* Menghapus margin default */
    padding: 20px; /* Memberikan padding agar container tidak menempel ke tepi */
}

.container {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: 2px solid #007bff; /* Border default */
    transition: border-color 0.3s ease, box-shadow 0.3s ease; /* Transisi halus */
    width: 100%; /* Lebar container */
    max-width: 800px; /* Lebar maksimum container */
}

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    th {
        background: #007bff;
        color: white;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    .skeleton {
        background: linear-gradient(90deg, #e0e0e0 25%, #f0f0f0 50%, #e0e0e0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
        border-radius: 5px;
    }

    /* Dark Mode */
    body.dark-mode {
        background-color: #121212;
        color: #f1f1f1;
    }

    body.dark-mode .container {
        background: #1e1e1e;
        box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1);
        border-color: #555; /* Warna border container dalam mode dark */
    }

    body.dark-mode .btn-primary {
        background-color: #0056b3;
    }

    body.dark-mode th {
        background: #333;
        color: #f1f1f1;
    }

    /* Dark Mode untuk Tabel */
    body.dark-mode .table {
        background-color: #1e1e1e;
        color: #f1f1f1;
    }

    body.dark-mode .table th,
    body.dark-mode .table td {
        background-color: #1e1e1e;
        color: #f1f1f1;
        border-color: #444;
    }

    body.dark-mode .table-hover tbody tr:hover {
        background-color: #333;
        color: #f1f1f1;
    }

    /* Dark Mode untuk Tombol dalam Tabel */
    body.dark-mode .btn-warning {
        background-color: #ffc107;
        color: black;
    }

    body.dark-mode .btn-danger {
        background-color: #dc3545;
        color: white;
    }

    /* Warna teks judul "Data Siswa" */
    body.dark-mode h2 {
        color: white !important;
    }

    body.dark-mode .form-control {
        background: #2c2c2c;
        color: #fff;
        border: 1px solid #555;
    }

    body.dark-mode .form-control::placeholder {
        color: #bbb;
    }

    body.dark-mode .modal-content {
        background: #222;
        color: #fff;
    }

    body.dark-mode .modal-header {
        border-bottom: 1px solid #555;
    }

    body.dark-mode .btn-close {
        filter: invert(1);
    }

    /* Dark Mode untuk Pagination */
    body.dark-mode .pagination .page-item .page-link {
        color: #f1f1f1;
        border-color: #555;
        background: #222;
    }

    body.dark-mode .pagination .page-item.active .page-link {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    /* CSS untuk tombol dark mode */
    #toggleDarkMode {
        display: block;
        margin: 40px auto;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 25px;
        transition: all 0.3s ease;
    }

    #toggleDarkMode:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Animasi border form */
    @keyframes glowing-border {
        0% {
            border-color: #007bff;
            box-shadow: 0 0 5px #007bff;
        }
        50% {
            border-color: #00ff88;
            box-shadow: 0 0 20px #00ff88;
        }
        100% {
            border-color: #007bff;
            box-shadow: 0 0 5px #007bff;
        }
    }

    .form-control {
        border: 2px solid #007bff;
        border-radius: 5px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        animation: glowing-border 1s infinite;
        outline: none;
    }

    /* Dark Mode untuk Form */
    body.dark-mode .form-control {
        background-color: #2c2c2c;
        color: #f1f1f1;
        border-color: #555;
    }

    body.dark-mode .form-control:focus {
        border-color: #00ff88;
        box-shadow: 0 0 10px #00ff88;
    }

    /* Animasi border kelap-kelip */
    @keyframes blinking-border {
        0% {
            border-color: #007bff;
            box-shadow: 0 0 5px #007bff;
        }
        50% {
            border-color: #00ff88;
            box-shadow: 0 0 20px #00ff88;
        }
        100% {
            border-color: #007bff;
            box-shadow: 0 0 5px #007bff;
        }
    }

    .container.active {
        animation: blinking-border 1s infinite; /* Animasi border kelap-kelip setiap 1 detik */
    }

    body.dark-mode .container.active {
        border-color: #00ff88;
        box-shadow: 0 0 10px #00ff88;
    }

    .pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
    }

    .pagination .page-item {
        margin: 0 4px;
    }

    .pagination .page-item .page-link {
        color: #007bff;
        font-weight: bold;
        padding: 8px 14px;
        border-radius: 50px;
        border: 1px solid #007bff;
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
        box-shadow: 0px 3px 6px rgba(0, 123, 255, 0.4);
    }

    .pagination .page-item .page-link:hover {
        background-color: #0056b3;
        color: white;
        border-color: #0056b3;
        box-shadow: 0px 3px 6px rgba(0, 86, 179, 0.4);
    }

    /* Responsif */
    @media (max-width: 576px) {
        .pagination .page-item .page-link {
            padding: 6px 10px;
            font-size: 14px;
        }
    }

    @keyframes loading {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }

    @media (max-width: 576px) {
        .container {
            padding: 10px;
        }
        .btn {
            font-size: 14px;
            padding: 8px 10px;
        }
    }
</style>
</head>
<body>

<div class="container">
    <h2 class="text-center text-primary">Data Siswa</h2>

    <div class="row mb-3">
        <div class="col-12">
            <input type="text" id="searchInput" class="form-control mb-3" placeholder="Cari siswa...">
            <button id="btnTambah" class="btn btn-primary btn-lg w-100">
                <i class="fa fa-plus"></i> Tambah Siswa
            </button>
        </div>
    </div>
<button id="toggleDarkMode" class="btn btn-dark">
    <i class="fa fa-moon"></i> Dark Mode
</button>

    <div class="row mb-3">
        <div class="col-12 col-md-6 mx-auto text-center">
            <button id="exportExcel" class="btn btn-success me-2">
                <i class="fa fa-file-excel"></i> Export Excel
            </button>
            <button id="exportPDF" class="btn btn-danger">
                <i class="fa fa-file-pdf"></i> Export PDF
            </button>
        </div>
    </div>

    <!-- Skeleton Loader -->
    <div id="skeletonLoader" class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><div class="skeleton" style="height: 20px;"></div></td>
                    <td><div class="skeleton" style="height: 20px;"></div></td>
                    <td><div class="skeleton" style="height: 20px;"></div></td>
                    <td><div class="skeleton" style="height: 20px;"></div></td>
                    <td><div class="skeleton" style="height: 20px;"></div></td>
                </tr>
                <tr>
                    <td><div class="skeleton" style="height: 20px;"></div></td>
                    <td><div class="skeleton" style="height: 20px;"></div></td>
                    <td><div class="skeleton" style="height: 20px;"></div></td>
                    <td><div class="skeleton" style="height: 20px;"></div></td>
                    <td><div class="skeleton" style="height: 20px;"></div></td>
                </tr>
                <!-- Tambahkan lebih banyak baris skeleton sesuai kebutuhan -->
            </tbody>
        </table>
    </div>

    <!-- Tabel Data -->
<div id="dataTableWrapper" class="table-responsive d-none">
    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $row): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['no_hp']; ?></td>
                    <td>
                        <button class="btn btn-warning btn-sm editBtn" 
                            data-id="<?= $row['id']; ?>" 
                            data-nama="<?= $row['nama']; ?>" 
                            data-alamat="<?= $row['alamat']; ?>" 
                            data-nohp="<?= $row['no_hp']; ?>">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-danger btn-sm deleteBtn" 
                            data-href="<?= site_url('siswa/hapus/'.$row['id']); ?>">
                            <i class="fa fa-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="row mt-4">
    <div class="col-12 d-flex justify-content-center">
        <?= $pagination; ?>
    </div>
</div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="modalTambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Tambah Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url('siswa/simpan'); ?>" method="POST">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>No HP</label>
                            <input type="text" name="no_hp" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="modalEdit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title">Edit Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="formEdit" method="POST" action="<?= site_url('siswa/update'); ?>">
                        <input type="hidden" name="id" id="editId">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" id="editNama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" name="alamat" id="editAlamat" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>No HP</label>
                            <input type="text" name="no_hp" id="editNoHp" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-warning w-100">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="modalHapus">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="#" id="confirmDelete" class="btn btn-danger">Hapus</a>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Tambahkan Library TableExport.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tableexport@5.2.0/dist/js/tableexport.min.js"></script>

    <script>
        $(document).ready(function () {
    console.log("Document ready!");

    // Simulasikan loading data
    setTimeout(function () {
        console.log("Menghilangkan loading...");
        $("#skeletonLoader").fadeOut(500, function () {
            console.log("Loading hilang, menampilkan tabel...");
            $("#dataTableWrapper").removeClass("d-none").show();
        });
    }, 2000); // Ubah timeout sesuai kebutuhan

    // Fitur Pencarian
    $("#searchInput").on("keyup", function () {
        console.log("Pencarian aktif...");
        
        var value = $(this).val().toLowerCase();
        console.log("Kata kunci pencarian:", value);

        $("#dataTable tbody tr").each(function () {
            var rowText = $(this).text().toLowerCase();
            console.log("Baris:", rowText);
            
            if (rowText.indexOf(value) > -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

    // Export Excel
    $("#exportExcel").click(function () {
        let table = document.getElementById("dataTable");
        let wb = XLSX.utils.table_to_book(table, {sheet: "Data Siswa"});
        XLSX.writeFile(wb, "Data_Siswa.xlsx");
    });

    // Export PDF
    $("#exportPDF").click(function () {
        var bodyData = [
            ['ID', 'Nama', 'Alamat', 'No HP']
        ];

        $("#dataTable tbody tr").each(function () {
            var rowData = [
                $(this).find("td:eq(0)").text(),
                $(this).find("td:eq(1)").text(),
                $(this).find("td:eq(2)").text(),
                $(this).find("td:eq(3)").text()
            ];
            bodyData.push(rowData);
        });

        var docDefinition = {
            content: [
                { text: 'Data Siswa', style: 'header' },
                {
                    table: {
                        headerRows: 1,
                        widths: ['auto', '*', '*', '*'],
                        body: bodyData
                    }
                }
            ],
            styles: {
                header: { fontSize: 16, bold: true, margin: [0, 0, 0, 10] }
            }
        };

        pdfMake.createPdf(docDefinition).download("Data_Siswa.pdf");
    });

    // Modal Edit
    $(document).on('click', '.editBtn', function () {
        $("#editId").val($(this).data('id'));
        $("#editNama").val($(this).data('nama'));
        $("#editAlamat").val($(this).data('alamat'));
        $("#editNoHp").val($(this).data('nohp'));
        $("#modalEdit").modal("show");
    });

    // Modal Hapus (Menggunakan Event Delegation)
    $(document).on('click', '.deleteBtn', function () {
        let url = $(this).data('href'); // Ambil URL hapus dari tombol
        $("#confirmDelete").attr("href", url); // Set URL ke tombol hapus di modal
        $("#modalHapus").modal("show"); // Tampilkan modal hapus
    });

    // Menampilkan modal tambah siswa saat tombol diklik
    $("#btnTambah").click(function () {
        $("#modalTambah").modal("show");
    });
});

// AJAX Pagination dengan Perbaikan Skeleton
$(document).ready(function () {
    $(document).on('click', '.pagination .page-item a', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');

        // Sembunyikan tabel dan tampilkan skeleton
        $("#dataTableWrapper").addClass("d-none");
        $("#skeletonLoader").fadeIn(500);

        // Lakukan AJAX request
        $.ajax({
            url: url,
            method: 'GET',
            success: function (response) {
                setTimeout(function () {
                    // Sembunyikan skeleton dan tampilkan data baru
                    $("#skeletonLoader").fadeOut(500, function () {
                        $("#dataTableWrapper").html($(response).find('#dataTableWrapper').html()).removeClass('d-none');
                        $('.pagination').html($(response).find('.pagination').html());
                    });
                }, 1000); // Simulasikan loading
            },
            error: function () {
                // Jika terjadi error, sembunyikan skeleton dan tampilkan pesan error
                $("#skeletonLoader").fadeOut(500, function () {
                    alert("Terjadi kesalahan saat memuat data.");
                    $("#dataTableWrapper").removeClass('d-none');
                });
            }
        });
    });
});
    </script>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("toggleDarkMode");
    const body = document.body;
    const title = document.querySelector("h2"); // Ambil elemen "Data Siswa"

    // Cek mode sebelumnya dari localStorage
    if (localStorage.getItem("darkMode") === "enabled") {
        body.classList.add("dark-mode");
        toggleButton.innerHTML = '<i class="fa fa-sun"></i> Light Mode';
        toggleButton.classList.remove("btn-dark");
        toggleButton.classList.add("btn-light");

        // Ganti warna judul "Data Siswa"
        if (title) {
            title.style.color = "white";
        }
    }

    // Toggle Mode
    toggleButton.addEventListener("click", function () {
        if (body.classList.contains("dark-mode")) {
            body.classList.remove("dark-mode");
            localStorage.setItem("darkMode", "disabled");
            toggleButton.innerHTML = '<i class="fa fa-moon"></i> Dark Mode';
            toggleButton.classList.remove("btn-light");
            toggleButton.classList.add("btn-dark");

            // Kembalikan warna judul
            if (title) {
                title.style.color = "#007bff";
            }
        } else {
            body.classList.add("dark-mode");
            localStorage.setItem("darkMode", "enabled");
            toggleButton.innerHTML = '<i class="fa fa-sun"></i> Light Mode';
            toggleButton.classList.remove("btn-dark");
            toggleButton.classList.add("btn-light");

            // Ubah warna judul menjadi putih
            if (title) {
                title.style.color = "white";
            }
        }
    });
});

</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const container = document.querySelector('.container'); // Ambil elemen container
    const toggleButton = document.getElementById('toggleDarkMode'); // Ambil tombol dark mode

    // Tambahkan event listener untuk tombol dark mode
    toggleButton.addEventListener('click', function () {
        container.classList.toggle('active'); // Toggle class 'active' pada container
    });
});
</script>

</body>
</html>