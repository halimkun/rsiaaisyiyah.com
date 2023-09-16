// update article section title
$('.articleSectionTitle').on('submit', function (e) {
  e.preventDefault();
  let formData = new FormData(this);
  $.ajax({
    url: base_url + "/admin/setting/artikel/title",
    method: "POST",
    data: formData,
    processData: false,
    contentType: false,
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