// update poliklinik section title
$('.poliTitle').on('submit', function (e) {
  e.preventDefault();
  let formData = new FormData(this);
  $.ajax({
    url: base_url + "/admin/setting/poli/title",
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

// .updatePoliForm on submit 
$('.poliUpdate').on('submit', function (e) {
  e.preventDefault();

  let formData = new FormData(this);
  formData.append('_token', $('meta[name=csrf-token]').attr('content'));

  $.ajax({
    url: base_url + "/admin/setting/poli/update",
    method: "POST",
    data: formData,
    processData: false,
    contentType: false,
    beforeSend: function () {
      console.log(formData);
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

// .updatePoliForm on submit 
$('.poliDelete').on('submit', function (e) {
  e.preventDefault();

  let formData = new FormData(this);
  formData.append('_token', $('meta[name=csrf-token]').attr('content'));

  $.ajax({
    url: base_url + "/admin/setting/poli/delete",
    headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
    method: "POST",
    data: formData,
    processData: false,
    contentType: false,
    beforeSend: function () {
      console.log(formData.getAll);
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