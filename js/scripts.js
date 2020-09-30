(function ($, root, undefined) {
  $(function () {
    "use strict";
    $(window).on("load", function () {});
    $(window).on("scroll", function () {
      // console.log("SCROLLING : " + $(window).scrollTop()  )
      if ($(window).scrollTop() > 100) {
        $("header").addClass("scrolled");
      } else {
        $("header").removeClass("scrolled");
      }
    });
    $(document).ready(function () {
      app_init.ready();
    });
    const app_init = {
      ready: function ready() {
        app.init();
      },
    };
    const app = {
      init: function init() {
        // let payload = { method: '', data: {} }
        // app.db_req.send(payload, false).then((response) =>{
        // 	if(response.success){ }else{ }
        // });
        // AOS.init();
        app.general_js.init();
        app.loadscripts.init();
        app.form.init();
      },
      general_js: {
        init: function init() {
          $(".single-range-item").on("click", function (e) {
            e.preventDefault();

            console.log("CLICKEC");
            let range_item = $(this).find(".range-item-content");

            if (range_item.find("> div").height() == 0) {
              let h = range_item.find(".range-item-desc").height() + 40;
              range_item.find("> div").css("height", h + "px");
              range_item.find(".range-item-desc").addClass("showing");
            } else {
              range_item.find("> div").css("height", 0);
              range_item.find(".range-item-desc").removeClass("showing");
            }
          });

          console.log("INIT");
          if ($(".hero-bg").length) {
            var hero_rellax = new Rellax(".hero-bg", {
              speed: -5,
            });
          }
          // if($(".datepicker").length){
          // 	$( ".datepicker" ).datepicker(
          // 		{
          // 			changeMonth: true,
          // 			changeYear: true,
          // 			dateFormat: "dd/mm/yy",
          // 			yearRange: "-90:-18"// "1920:2002"
          // 		}
          // 	);
          // }

          $(".scroll-clickable").on("click", function (e) {
            e.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
          });

          $(".clickable").on("click", function (e) {
            e.preventDefault();
            window.location.href = "/comparison-quote";
          });

          // pedro new code
          $(".clickable-new").on("click", function (e) {
            e.preventDefault();
            window.location.href = "/insurance-quote";
          });
          //-----//

          if ($("[data-aos]").length) {
            // var aos = document.createElement('script');
            // aos.onload = function () {  };
            // aos.src = "https://cdnjs.cloudflare.com/ajax/libs/three.js/91/three.min.js"
            // document.body.appendChild(aos); //or something of the likes
            AOS.init();
          }
        },

        is_in_viewport: function is_in_viewport(elem) {
          var bounding = elem.getBoundingClientRect();
          return (
            bounding.top >= 0 &&
            bounding.left >= 0 &&
            bounding.bottom <=
              (window.innerHeight || document.documentElement.clientHeight) &&
            bounding.right <=
              (window.innerWidth || document.documentElement.clientWidth)
          );
        },

        will_be_in_viewport: function will_be_in_viewport(elem, space) {
          var bounding = elem.getBoundingClientRect();
          if (false && $(elem).hasClass("test-img")) {
            console.log("bounding.top " + bounding.top);
            console.log("window.innerHeight " + window.innerHeight);
          }
          return (
            bounding.top - space <=
              (window.innerHeight || document.documentElement.clientHeight) &&
            bounding.left >= 0 &&
            bounding.bottom >= 0 &&
            bounding.right <=
              (window.innerWidth || document.documentElement.clientWidth)
          );
        },
        wait_for_final_event: function wait_for_final_event(
          callback,
          ms,
          uniqueId
        ) {
          if (!uniqueId) {
            uniqueId = "Don't call this twice without a uniqueId";
          }
          if (timers[uniqueId]) {
            clearTimeout(timers[uniqueId]);
          }
          timers[uniqueId] = setTimeout(callback, ms);
        },
      },
      form: {
        form_data: {
          name_1: "",
          dob_1: "",
          name_2: "",
          dob_2: "",

          terms_agree: false,

          cover_group: "",
          cover_value: "",
          cover_length: "",

          email: "",
          telephone: "",
        },
        transition_step: function transition_step() {
          let _this = this;
          // console.log("FORM STATUS: " + JSON.stringify(_this.form_data,2, null) );

          let next = $(".active-step").next();

          $(".active-step").removeClass("active-step");
          setTimeout(() => {
            next.addClass("active-step");
          }, 800);
        },
        animate_step: function animate_step() {
          $(".completed-step").addClass("line-step");
          setTimeout(() => {
            $(".completed-step").last().next().addClass("completed-step");
          }, 420);
        },
        init: function init() {
          let _this = this;
          console.log("FORM INIT....");

          if ($(".checkbox-container").length) {
            $(".checkbox-clickable").on("click", function (e) {
              e.preventDefault();

              if ($(".checkbox-clickable").hasClass("custom-checked")) {
                $(".checkbox-clickable").removeClass("custom-checked");
                _this.form_data.terms_agree = false;
              } else {
                $(".checkbox-clickable").addClass("custom-checked");
                _this.form_data.terms_agree = true;
              }
            });
          }

          $(".quote-buttons button").on("click", function (e) {
            e.preventDefault();
            _this.form_data.cover_group = $(this).attr("data-coverfor");
            if (_this.form_data.cover_group == "me") {
              $(".person-2").addClass("not-applicable");
              _this.form_data.dob_2 = "na";
              _this.form_data.name_2 = "na";
            }
            _this.animate_step();
            _this.transition_step();
          });

          $(".form-next").on("click", function (e) {
            e.preventDefault();
            if (_this.custom_validate()) {
              _this.animate_step();

              if ($(".active-step").hasClass("step-2")) {
                _this.form_data.cover_value = $(
                  ".active-step select option:selected"
                ).val();
                _this.form_data.cover_length = $("#cover-length").val();
              } else if ($(".active-step").hasClass("step-3")) {
                _this.form_data.name_1 = $("#name-1").val();
                _this.form_data.dob_1 =
                  $("#date-day-1 option:selected").val() +
                  "-" +
                  $("#date-month-1 option:selected").val() +
                  "-" +
                  $("#date-year-1 option:selected").val();

                console.log("dob " + _this.form_data.dob_1);
                if (_this.form_data.cover_group != "me") {
                  _this.form_data.name_2 = $("#name-2").val();
                  _this.form_data.dob_2 =
                    $("#date-day-2 option:selected").val() +
                    "-" +
                    $("#date-month-2 option:selected").val() +
                    "-" +
                    $("#date-year-2 option:selected").val();
                }
              }

              _this.transition_step();
            } else {
              alert("Please complete all fields to continue.");
            }
          });

          $(".form-submit").on("click", function (e) {
            e.preventDefault();

            _this.form_data.email = $("#email").val();
            _this.form_data.telephone = $("#telephone").val();
            if (_this.custom_validate()) {
              _this.form_data.email = $("#email").val();
              _this.form_data.telephone = $("#telephone").val();

              _this.submit_form_result();
            } else {
              alert("Please complete all fields to continue.");
            }
          });
        },
        custom_validate: function custom_validate() {
          console.log("VALIDATE....");
          let _this = this;

          if ($(".active-step").hasClass("step-2")) {
            if (
              $(".active-step select option:selected").val() == "empty" ||
              $("#cover-length").val().length < 1
            )
              return false;
          } else if ($(".active-step").hasClass("step-3")) {
            if (_this.form_data.cover_group == "me") {
              if (
                $("#name-1").val().length < 1 ||
                $("#date-day-1 option:selected").val() == "empty" ||
                $("#date-month-1 option:selected").val() == "empty" ||
                $("#date-year-1 option:selected").val() == "empty"
              ) {
                return false;
              }
            } else {
              if (
                $("#name-1").val().length < 1 ||
                $("#date-day-1 option:selected").val() == "empty" ||
                $("#date-month-1 option:selected").val() == "empty" ||
                $("#date-year-1 option:selected").val() == "empty" ||
                $("#name-2").val().length < 1 ||
                $("#date-day-2 option:selected").val() == "empty" ||
                $("#date-month-2 option:selected").val() == "empty" ||
                $("#date-year-2 option:selected").val() == "empty"
              ) {
                return false;
              }
            }
          } else if ($(".active-step").hasClass("step-4")) {
            console.log("step 4");

            if (_this.form_data.terms_agree) {
              if (
                !$("#telephone").hasClass("valid") ||
                !$("#email").hasClass("valid")
              ) {
                console.log("not valid ");
                return false;
              }
            } else {
              return false;
            }
          }
          console.log("SUCCESS VALID");

          return true;
        },
        submit_form_result: function submit_form_result() {
          let _this = this;
          console.log(
            "FORM OBJECT: " + JSON.stringify(_this.form_data, 2, null)
          );
          let payload = {
            method: "submit_form",
            data: _this.form_data,
          };
          app.db_req.send(payload, false).then((response) => {
            console.log("RESPONSE: " + JSON.stringify(response, 2, null));
            if (response.success) {
              // alert("SUCCESS....")

              // Pedro new code
              if (window.location.href.includes("/insurance-quote")) {
                window.location.href = "/completed";
              } else {
                window.location.href = "/thankyou";
              }
              //----//
            } else {
              alert("An error has occurred, please try again.");
            }
          });
        },
      },

      loadscripts: {
        init: function init() {
          let _this = this;

          $(".cta-sect button").on("click", function (e) {
            e.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "fast", function () {});
          });

          $(window).bind("load", function () {
            setTimeout(function () {
              var widget = _this.build_script();
              widget.onload = function () {
                richSnippetReviewsWidgets("vertical-widget-720", {
                  store: "mason-scott",
                  widgetName: "vertical",
                  primaryClr: "#f47e27",
                  layout: "fullWidth",
                  height: 500,
                  numReviews: 10,
                });
              };
              widget.src =
                "https://widget.reviews.co.uk/rich-snippet-reviews-widgets/dist.js";
              document.body.appendChild(widget);

              if ($("form").length) {
                // data-8 service - phone, email
                var data_8 = _this.build_script();

                data_8.src =
                  "https://webservices.data-8.co.uk/javascript/loader.ashx?key=" +
                  api_key +
                  "&load=InternationalTelephoneValidation,EmailValidation";
                document.body.appendChild(data_8);

                // data-8 jquery validation
                var data_8_validate = _this.build_script();
                data_8_validate.onload = function () {
                  $("form").validate({
                    rules: {
                      telephone: {
                        required: "Telephone number is required",
                        d8val_inttelephone_opt: [
                          { name: "RequiredCountry", value: "GB" },
                        ],
                      },
                    },
                  });
                };
                data_8_validate.src =
                  "https://webservices.data-8.co.uk/javascript/jqueryvalidation_min.js";
                document.body.appendChild(data_8_validate);
              }

              // console.log("data 8 loaded")
            }, 200);
          });
        },
        build_script: function build_script() {
          var dynamic_script = document.createElement("script");
          dynamic_script.type = "text/javascript";
          dynamic_script.defer = true;
          return dynamic_script;
        },
      },
      checkCookie: function checkCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(";");
        for (var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == " ") {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      },
      setCookie: function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
      },
      db_req: {
        send: async function send(payload, debug = false) {
          return await fetch("/api/endpoint.php", {
            // PRODUCTION ENDPOINT
            method: "post",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(payload),
          })
            .then((data) => (debug ? data.text() : data.json()))
            .then((data) => {
              if (debug)
                console.log(
                  "DEBUG response: " +
                    payload.method +
                    " : " +
                    JSON.stringify(data, null, 2)
                      .replace(/\\"/g, "")
                      .replace(/<br\s*[\/]?>/gi, " \n ")
                );
              return data;
            })
            .catch((error) => console.log(error));
        },
      },
    };
  });
})(jQuery, this);
