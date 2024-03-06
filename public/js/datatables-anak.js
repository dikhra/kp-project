$(document).ready(function() {
    $('#tableAnak').DataTable({
        language: {
            "sEmptyTable": "Tidak ada data yang tersedia pada tabel ini",
            "sInfo": "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
            "sInfoEmpty": "Menampilkan 0 hingga 0 dari 0 entri",
            "sInfoFiltered": "(disaring dari _MAX_ total entri)",
            "sInfoPostFix": "",
            "sInfoThousands": ",",
            "sLengthMenu": "Tampilkan _MENU_ entri",
            "sLoadingRecords": "Memuat...",
            "sProcessing": "Sedang diproses...",
            "sSearch": "Cari:",
            "sZeroRecords": "Tidak ditemukan data yang cocok",
            "oPaginate": {
                "sFirst": "Pertama",
                "sLast": "Terakhir",
                "sNext": "Selanjutnya",
                "sPrevious": "Sebelumnya"
            },
            "oAria": {
                "sSortAscending": ": aktifkan untuk mengurutkan kolom secara ascending",
                "sSortDescending": ": aktifkan untuk mengurutkan kolom secara descending"
            }
        }
    });
  });
