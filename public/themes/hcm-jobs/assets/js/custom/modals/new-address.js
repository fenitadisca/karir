"use strict";
var KTModalNewAddress = (function () {
  var t, e, n, o, i, r;
  return {
    init: function () {
        ((i = new bootstrap.Modal(r)),
        (o = document.querySelector("#kt_modal_new_address_form")),
        (t = document.getElementById("kt_modal_new_address_submit")),
        (e = document.getElementById("kt_modal_new_address_cancel")),
        $(o.querySelector('[name="employe"]'))
          .select2()
          .on("change", function () {
            n.revalidateField("employe");
          }),
        (n = FormValidation.formValidation(o, {
          fields: {
            "first-name": {
              validators: { notEmpty: { message: "Butuh nama lengkap" } },
            },
            "last-name": {
              validators: { notEmpty: { message: "Butuh nama lengkap" } },
            },
            "tanggal-lahir": {
              validators: { notEmpty: { message: "wajib mengisi tanggal lahir" } },
            },
            "asal-kota": {
              validators: { notEmpty: { message: "wajib mengisi kota asal" } },
            },
            pendidikan : {
              validators: { notEmpty: { message: "wajib mengisi pendidikan" } },
            },
            email : {
              validators: { notEmpty: { message: "wajib mengisi email" } },
            },
            nomerTlp : {
              validators: { notEmpty: { message: "wajib mengisi Telepon" } },
            },
            alamat : {
              validators: { notEmpty: { message: "wajib mengisi alamat" } },
            },
            uploadCV : {
              validators: { notEmpty: { message: "wajib mengisi uploadCV" } },
            },
            "cover-letter" : {
              validators: { notEmpty: { message: "wajib mengisi cover-letter" } },
            },
            date: {
              validators: { notEmpty: { message: "Tanggal wajib diisi" } },
            },
            employ: {
              validators: { notEmpty: { message: "Pilih penganti yang ingin digantikan" } },
            },
            divisi: {
              validators: { notEmpty: { message: "Divisi tidak boleh kosong" } },
            },
            "posisi-jabatan": {
              validators: { notEmpty: { message: "Posisi tidak boleh kosong" } },
            },
            city: { validators: { notEmpty: { message: "City is required" } } },
            state: {
              validators: { notEmpty: { message: "State is required" } },
            },
            postcode: {
              validators: { notEmpty: { message: "Postcode is required" } },
            },
          },
          plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
              rowSelector: ".fv-row",
              eleInvalidClass: "",
              eleValidClass: "",
            }),
          },
        })),
        t.addEventListener("click", function (e) {
          e.preventDefault(),
            n &&
              n.validate().then(function (e) {
                console.log("validated!"),
                  "Valid" == e
                    ? (t.setAttribute("data-kt-indicator", "on"),
                      (t.disabled = !0),
                      setTimeout(function () {
                        t.removeAttribute("data-kt-indicator"),
                          (t.disabled = !1),
                          Swal.fire({
                            text: "Form has been successfully submitted!",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: { confirmButton: "btn btn-primary" },
                          }).then(function (t) {
                            t.isConfirmed && i.hide();
                          });
                      }, 2e3))
                    : Swal.fire({
                        text: "Data yang anda masukan masih ada yang kosong mohon dicek kembali.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Kembali",
                        customClass: { confirmButton: "btn btn-primary" },
                      });
              });
        }),
        e.addEventListener("click", function (t) {
          t.preventDefault(),
            Swal.fire({
              text: "Apakah anda yakin akan menghapus data yang akan disimpan?",
              icon: "warning",
              showCancelButton: !0,
              buttonsStyling: !1,
              confirmButtonText: "Yaa!",
              cancelButtonText: "No, return",
              customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-active-light",
              },
            }).then(function (t) {
              t.value
                ? (o.reset(), i.hide())
                : "cancel" === t.dismiss &&
                  Swal.fire({
                    text: "Your form has not been cancelled!.",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: { confirmButton: "btn btn-primary" },
                  });
            });
        }));
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTModalNewAddress.init();
});