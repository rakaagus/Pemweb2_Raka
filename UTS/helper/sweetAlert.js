function popUp(code) {
  switch (code) {
    case 1:
      Swal.fire({
        title: "Sukses!",
        text: "Berhasil Input Data BMI",
        icon: "success",
        confirmButtonText: "Cool",
      });
      break;
    case 2:
      Swal.fire({
        title: "Error!",
        text: "Masukan Anda Salah",
        icon: "error",
        confirmButtonText: "Cool",
      });
      break;
  }
}
