$(function () {
  $('.tombolTambahData').on('click', function () {
    $('#judulModal').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');

    $('#id').val('');
    $('#nama').val('');
    $('#nim').val('');
    $('#email').val('');
    $('#jurusan').val('');
  });

  $('.tampilModalUbah').on('click', function () {
    $('#judulModal').html('Ubah Data Mahasiswa'); $('.modal-footer button[type=submit]').html('Ubah Data'); $('.modal-body form').attr('action', 'http://localhost/PW2020_192101032/phpmvc/public/mahasiswa/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/PW2020_192101032/phpmvc/public/mahasiswa/getubah', data: { id: id },
      method: 'post',
      datatype: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#nim').val(data.nim);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);

      }
    });
  });
});