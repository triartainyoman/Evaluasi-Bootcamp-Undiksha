$(document).ready(function() {
  datatable();

  hapus();
});

function datatable() {
  $('#example').DataTable();
}

function hapus() {
  $('.datatable').on('click', '.btn-hapus', function (e) {
    
    e.preventDefault();
    var route = $(this).data('route');
    var _token = $('body').data('csrf-token');

    Swal.fire({
      title: 'Apakah yakin menghapus data ini?',
      text: "Data ini akan terhapus secara permanen jika di proses!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, saya yakin'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: route,
          type: 'delete',
          data: {
            _token: _token
          },
          success: function() {
            window.location.reload();
          }
        });
        
        Swal.fire(
          'Data Terhapus!',
          'Data produksi berhasil dihapus',
          'success'
        )
      }
    })
  })
}