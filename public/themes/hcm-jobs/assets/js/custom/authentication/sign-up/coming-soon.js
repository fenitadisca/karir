"use strict";
var KTSignupComingSoon = (function () {
  var e, t, o, n, i, r, a;
  return {
    init: function () {
      var s, u;
      (e = document.querySelector("#kt_coming_soon_form")),
        (t = document.querySelector("#kt_coming_soon_submit")),
        (n = document.querySelector("#kt_coming_soon_counter_days")),
        (i = document.querySelector("#kt_coming_soon_counter_hours")),
        (r = document.querySelector("#kt_coming_soon_counter_minutes")),
        (a = document.querySelector("#kt_coming_soon_counter_seconds")),
        (o = FormValidation.formValidation(e, {
          fields: { email: { validators: { notEmpty: { message: "Email address is required" }, emailAddress: { message: "The value is not a valid email address" } } } },
          plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
        })),
        t.addEventListener("click", function (n) {
          n.preventDefault(),
            o.validate().then(function (o) {
              "Valid" == o
                ? (t.setAttribute("data-kt-indicator", "on"),
                  (t.disabled = !0),
                  setTimeout(function () {
                    t.removeAttribute("data-kt-indicator"),
                      (t.disabled = !1),
                      Swal.fire({ text: "You have successfully subscribed !", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } }).then(function (t) {
                        t.isConfirmed && (e.querySelector('[name="email"]').value = "");
                      });
                  }, 2e3))
                : Swal.fire({ text: "Sorry, looks like there are some errors detected, please try again.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
            });
        }),
        (s = new Date("Aug 30, 2021 15:37:25").getTime()),
        (u = function () {
          var e = new Date().getTime(),
            t = s - e,
            o = Math.floor(t / 864e5),
            u = Math.floor((t % 864e5) / 36e5),
            l = Math.floor((t % 36e5) / 6e4),
            c = Math.floor((t % 6e4) / 1e3);
          (n.innerHTML = o), (i.innerHTML = u), (r.innerHTML = l), (a.innerHTML = c);
        }),
        setInterval(u, 1e3),
        u();
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTSignupComingSoon.init();
});
