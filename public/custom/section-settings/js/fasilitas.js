// update fasilitas section title
$('.fasilitasTitle').on('submit', function (e) {
  e.preventDefault();
  let formData = new FormData(this);
  $.ajax({
    url: base_url + "/admin/setting/fasilitas/title",
    method: "POST",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    beforeSend: function () {
      Swal.fire({
        title: 'Loading',
        html: 'Please wait...',
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
        },
      });
    },
    success: function (data) {
      if (data.status == 'success') {
        Swal.fire({
          icon: 'success',
          title: 'Success',
          text: data.message,
          showConfirmButton: false,
          timer: 1500
        }).then(() => {
          location.reload();
        });
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: data.message,
        });
      }
    },
    error: function (xhr, status, error) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Ada yang salah!',
        showConfirmButton: false,
        timer: 1500
      });
    }
  });
});