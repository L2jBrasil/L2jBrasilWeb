! function (t, a) {
  ! function (t) {
    "use strict";
    var a = function (a) {
      var e = this;
      e.options = a, e.$window = t(window), e.$document = t(document), e.isMobile = /Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/g.test(navigator.userAgent || navigator.vendor || window.opera), e.navbarSmall = !1, e.navbarMaxTop = 100
    };
    a.DEFAULT = {
      parallax: !0,
      navbarSmall: !1,
      fadeBetweenPages: !0,
      php: {
        twitter: "./php/twitter/tweet.php",
        instagram: "./php/instagram/instagram.php"
      }
    }, a.prototype.init = function (a) {
      function e() {
        o.options.navbarSmall || (o.options.navbarSmall = t(".navbar-youplay").hasClass("navbar-small")), t('[data-toggle="tooltip"]').tooltip({
          container: "body"
        }), t('[data-toggle="popover"]').popover(), o.fadeBetweenPages(), o.initAnchors(), o.initFacebook(), o.initInstagram(), o.initTwitter(), o.initOwlCarousel(), o.initMagnificPopup(), o.initSliderRevolution(), o.initIsotope(), o.initHexagonRating(), o.navbarCollapse(), o.options.navbarSmall || (o.$window.on("scroll", function () {
          o.navbarSize(o.$window.scrollTop())
        }), o.navbarSize(o.$window.scrollTop())), o.navbarSubmenuFix(), o.$document.on("click", ".search-toggle", function (t) {
          t.preventDefault(), o.searchToggle()
        }), o.$document.on("keyup", function (t) {
          27 === t.keyCode && o.searchToggle("close")
        }), o.$document.on("focus", "input, textarea", function () {
          o.inputsActive(this, !0)
        }), o.$document.on("blur", "input, textarea", function () {
          o.inputsActive(this)
        }), t("input, textarea").filter("[autofocus]:eq(0)").focus(), o.initAjaxForm(), t(".youplay-accordion, .panel-group").find(".collapse").on("shown.bs.collapse", function () {
          t(this).parent().find(".icon-plus").removeClass("icon-plus").addClass("icon-minus"), o.refresh()
        }).on("hidden.bs.collapse", function () {
          t(this).parent().find(".icon-minus").removeClass("icon-minus").addClass("icon-plus"), o.refresh()
        }), o.initJarallax()
      }
      var o = this;
      o.options = t.extend({}, this.options, a), t(".page-preloader").length ? t(window).on("load", function () {
        e(), setTimeout(function () {
          t(".page-preloader").fadeOut(function () {
            t(this).find("> *").remove()
          })
        }, 200)
      }) : (e(), t(window).on("load", function () {
        o.refresh()
      }))
    }, a.prototype.refresh = function () {
      window.dispatchEvent(new Event("resize"))
    }, a.prototype.initOwlCarousel = function () {
      if ("undefined" != typeof t.fn.owlCarousel) {
        var a = 0;
        t(".owl-carousel").each(function () {
          var e = "youplay-carousel-" + a++,
            o = t(this).attr("data-autoplay"),
            n = parseFloat(t(this).attr("data-stage-padding") || 0),
            i = parseFloat(t(this).attr("data-item-padding") || 0);
          t(this).owlCarousel({
            loop: !0,
            stagePadding: n,
            dots: !0,
            autoplay: !!o,
            autoplayTimeout: o,
            autoplaySpeed: 600,
            autoplayHoverPause: !0,
            responsive: {
              0: {
                items: 3
              },
              500: {
                items: 4
              },
              992: {
                items: 5
              },
              1200: {
                items: 6
              }
            }
          }).addClass(e), i && t("<style>." + e + " .owl-item { padding-left: " + i + "px; padding-right: " + i + "px; }</style>").appendTo("head")
        }), t(".youplay-carousel").each(function () {
          var e = "youplay-carousel-" + a++,
            o = t(this).attr("data-autoplay"),
            n = parseFloat(t(this).attr("data-stage-padding") || 70),
            i = parseFloat(t(this).attr("data-item-padding") || 0);
          t(this).addClass("owl-carousel").owlCarousel({
            loop: !0,
            stagePadding: n,
            nav: !0,
            dots: !1,
            autoplay: !!o,
            autoplayTimeout: o,
            autoplaySpeed: 600,
            autoplayHoverPause: !0,
            navText: ["", ""],
            responsive: {
              0: {
                items: 1
              },
              500: {
                items: 2
              },
              992: {
                items: 3
              },
              1200: {
                items: 4
              }
            }
          }).addClass(e), i && t("<style>." + e + " .owl-item { padding-left: " + i + "px; padding-right: " + i + "px; }</style>").appendTo("head")
        }), t(".youplay-slider").each(function () {
          var e = "youplay-carousel-" + a++,
            o = t(this).attr("data-autoplay");
          t(this).addClass("owl-carousel").owlCarousel({
            loop: !0,
            nav: !1,
            autoplay: o ? !0 : !1,
            autoplayTimeout: o,
            autoplaySpeed: 600,
            autoplayHoverPause: !0,
            items: 1
          }).addClass(e)
        })
      }
    }, a.prototype.initMagnificPopup = function () {
      if ("undefined" != typeof t.fn.magnificPopup) {
        var a = {
          closeOnContentClick: !0,
          closeBtnInside: !1,
          fixedContentPos: !1,
          mainClass: "mfp-no-margins mfp-img-mobile mfp-with-fade",
          tLoading: '<div class="preloader"></div>',
          removalDelay: 300,
          image: {
            verticalFit: !0,
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
          }
        };
        t(".image-popup").magnificPopup(t.extend({
          type: "image"
        }, a)), t(".video-popup").magnificPopup(t.extend({
          type: "iframe"
        }, a)), t(".gallery-popup").magnificPopup(t.extend({
          delegate: ".owl-item:not(.cloned) a",
          type: "image",
          gallery: {
            enabled: !0,
            navigateByImgClick: !0,
            preload: [0, 1]
          },
          callbacks: {
            elementParse: function (t) {
              var a = /youtube.com|youtu.be|vimeo.com/g.test(t.src);
              a ? t.type = "iframe" : t.type = "image"
            }
          }
        }, a))
      }
    }, a.prototype.initSliderRevolution = function () {
      if ("undefined" != typeof t.fn.revolution) {
        var a = this;
        t(".rs-youplay").each(function () {
          var e = t(this),
            o = {
              dottedOverlay: "none",
              navigationType: "bullet",
              navigationArrows: "solo",
              navigationStyle: "preview4",
              fullWidth: e.hasClass("rs-fullwidth") ? "on" : "off",
              fullScreen: e.hasClass("rs-fullscreen") ? "on" : "off",
              spinner: "spinner4"
            },
            n = e.find(".tp-banner").show().revolution(o);
          n.on("revolution.slide.onloaded", function () {
            a.refresh()
          })
        })
      }
    }, a.prototype.initIsotope = function () {
      if ("undefined" != typeof t.fn.isotope) {
        t(".isotope").each(function () {
          var a = t(this).find(".isotope-options"),
            e = t(this).find(".isotope-list").isotope({
              itemSelector: ".item"
            });
          e.imagesLoaded && e.imagesLoaded().progress(function () {
            e.isotope("layout")
          }), e.on("arrangeComplete", function () {
            self.refresh()
          }), a.on("click", "> :not(.active)", function (a) {
            t(this).addClass("active").siblings().removeClass("active");
            var o = t(this).attr("data-filter");
            a.preventDefault(), e.isotope({
              filter: function () {
                if ("all" === o) return !0;
                var a = t(this).attr("data-filters");
                if (a) {
                  a = a.split(",");
                  for (var e in a)
                    if (a[e].replace(/\s/g, "") === o) return !0
                }
                return !1
              }
            })
          })
        })
      }
    }, a.prototype.initJarallax = function () {
      this.options.parallax && !this.isMobile && ("undefined" != typeof skrollr && "undefined" == typeof this.skrollr && (this.skrollr = skrollr.init({
        smoothScrolling: !1,
        forceHeight: !1
      })), "undefined" != typeof t.fn.jarallax && (t(".youplay-banner-parallax:not(.banner-top) .image").each(function () {
        var a = parseFloat(t(this).attr("data-speed"));
        t(this).jarallax({
          speed: isNaN(a) ? .4 : a
        })
      }), t(".youplay-banner-parallax.banner-top").each(function () {
        var a = t(this).children(".image"),
          e = t(this).children(".info");
        t(this).jarallax({
          type: "custom",
          imgSrc: "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",
          imgWidth: 1,
          imgHeight: 1,
          onScroll: function (t) {
            var o = Math.min(250, 250 * (1 - t.visiblePercent)),
              n = Math.min(150, 150 * (1 - t.visiblePercent));
            a.css({
              transform: "translate3d(0, " + o + "px, 0)"
            }), e.css({
              opacity: t.visiblePercent < 0 ? 1 : t.visiblePercent,
              transform: "translate3d(0, " + n + "px, 0)"
            })
          }
        })
      }), t(".youplay-footer-parallax").each(function () {
        var a = t(this).children(".wrapper"),
          e = t(this).find(".social > .container");
        t(this).jarallax({
          type: "custom",
          imgSrc: "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",
          imgWidth: 1,
          imgHeight: 1,
          onScroll: function (t) {
            var o = Math.max(-50, -50 * (1 - t.visiblePercent));
            a.css({
              transform: "translate3d(0, " + o + "%, 0)"
            }), e.css({
              transform: "translate3d(0, 0, 0)",
              opacity: t.visiblePercent < 0 ? 1 : t.visiblePercent
            })
          }
        })
      })))
    }, a.prototype.initFacebook = function () {
      if (t(".fb-page").length) {
        var a = this;
        t("body").append('<div id="fb-root"></div>'),
          function (t, a, e) {
            if ("file:" !== location.protocol) {
              var o, n = t.getElementsByTagName(a)[0];
              t.getElementById(e) || (o = t.createElement(a), o.id = e, o.src = "../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4", n.parentNode.insertBefore(o, n))
            }
          }(document, "script", "facebook-jssdk"), window.fbAsyncInit = function () {
            FB.Event.subscribe("xfbml.render", function () {
              a.refresh()
            })
          }
      }
    }, a.prototype.initInstagram = function () {
      var a = this,
        e = t(".youplay-instagram");
      if (e.length && a.options.php.instagram) {
        var o = function (t, a) {
          for (var e = ["link", "image", "caption"], o = 0, n = e.length; n > o; o++) a = a.replace(new RegExp("{{" + e[o] + "}}", "gi"), t[e[o]]);
          return a
        };
        e.each(function () {
          var e = t(this),
            n = {
              userID: e.attr("data-instagram-user-id") || null,
              count: e.attr("data-instagram-count") || 6,
              template: e.attr("data-instagram-template") || ['<div class="col-xs-4">', '    <a href="{{link}}" target="_blank">', '        <img src="{{image}}" alt="{{caption}}" class="kh-img-stretch">', "    </a>", "</div>"].join(" "),
              loadingText: "Loading...",
              failText: "Failed to load data",
              apiPath: a.options.php.instagram
            };
          n.userID || t.error("If you want to fetch instagram images, you must define the user ID. How to get it see here - http://jelled.com/instagram/lookup-user-id"), e.html('<div class="col-xs-12">' + n.loadingText + "</div>"), t.getJSON(n.apiPath, {
            userID: n.userID,
            count: n.count
          }, function (t) {
            e.html("");
            for (var i = 0; i < n.count; i++) {
              var s = !1;
              if (t[i]) s = t[i];
              else {
                if (!t.statuses || !t.statuses[i]) break;
                s = t.statuses[i]
              }
              var r = {
                link: s.link,
                image: s.images.thumbnail.url,
                caption: s.caption
              };
              e.append(o(r, n.template))
            }
            a.refresh()
          }).fail(function (a) {
            e.html('<div class="col-xs-12">' + n.failText + "</div>"), t.error(a.responseText)
          })
        })
      }
    }, a.prototype.initTwitter = function () {
      var a = t(".youplay-twitter"),
        e = this;
      if (a.length && e.options.php.twitter) {
        var o = function (t, a) {
          for (var e = ["date", "tweet", "avatar", "url", "retweeted", "screen_name", "user_name"], o = 0, n = e.length; n > o; o++) a = a.replace(new RegExp("{{" + e[o] + "}}", "gi"), t[e[o]]);
          return a
        };
        a.each(function () {
          var a = t(this),
            n = {
              username: a.attr("data-twitter-user-name") || null,
              list: null,
              hashtag: a.attr("data-twitter-hashtag") || null,
              count: a.attr("data-twitter-count") || 2,
              hideReplies: "true" === a.attr("data-twitter-hide-replies") ? !0 : !1,
              template: a.attr("data-twitter-template") || ["<div>", '    <div class="youplay-twitter-icon"><i class="fa fa-twitter"></i></div>', '    <div class="youplay-twitter-date date">', "        <span>{{date}}</span>", "    </div>", '    <div class="youplay-twitter-text">', "       {{tweet}}", "    </div>", "</div>"].join(" "),
              loadingText: "Loading...",
              failText: "Failed to load data",
              apiPath: e.options.php.twitter
            };
          n.list && !n.username && t.error("If you want to fetch tweets from a list, you must define the username of the list owner."), a.html("<span>" + n.loadingText + "</span>"), t.getJSON(n.apiPath, {
            username: n.username,
            list: n.list,
            hashtag: n.hashtag,
            count: n.count,
            exclude_replies: n.hideReplies
          }, function (t) {
            a.html("");
            for (var i = 0; i < n.count; i++) {
              var s = !1;
              if (t[i]) s = t[i];
              else {
                if (!t.statuses || !t.statuses[i]) break;
                s = t.statuses[i]
              }
              var r = {
                user_name: s.user.name,
                date: s.date_formatted,
                tweet: s.text_entitled,
                avatar: '<img src="' + s.user.profile_image_url + '" />',
                url: "https://twitter.com/" + s.user.screen_name + "/status/" + s.id_str,
                retweeted: s.retweeted,
                screen_name: "@" + s.user.screen_name
              };
              a.append(o(r, n.template))
            }
            e.refresh()
          }).fail(function (e) {
            a.html(n.failText), t.error(e.responseText)
          })
        })
      }
    }, a.prototype.fadeBetweenPages = function () {
      var a = this;
      a.options.fadeBetweenPages && t(".page-preloader").length && a.$document.on("click", 'a:not(.no-fade):not(.search-toggle):not(.image-popup):not(.video-popup):not([target="_blank"]):not(.btn):not(.button):not([href*="#"]):not([href^="mailto"]):not([href^="javascript:"])', function (a) {
        if (!t(this).parents(".gallery-popup:eq(0)").length && t(this).attr("href")) {
          var e = this.href;
          (!t(this).hasClass("dropdown-toggle") || "hidden" !== t(this).next(".dropdown-menu").css("visibility") && !t(this).parent().hasClass("open")) && e && (a.preventDefault(), t(".page-preloader").fadeIn(400, function () {
            window.location.href = e
          }))
        }
      })
    }, a.prototype.initAnchors = function () {
      t(document).on("click", "a", function (a) {
        var e = this.hash,
          o = this.baseURI === window.location.href;
        if (e && o) {
          var n = t(e),
            i = e.replace(/^#/, "");
          n.length && (n.attr("id", ""), document.location.hash = i, n.attr("id", i), t("html, body").stop().animate({
            scrollTop: n.offset().top - 80
          }, 700), a.preventDefault())
        }
      })
    }, a.prototype.navbarSize = function (a) {
      a > this.navbarMaxTop && !this.navbarSmall && (this.navbarSmall = !0, t(".navbar-youplay").addClass("navbar-small")), a <= this.navbarMaxTop && this.navbarSmall && (this.navbarSmall = !1, t(".navbar-youplay").removeClass("navbar-small"))
    }, a.prototype.navbarCollapse = function () {
      var a = this;
      a.$document.on("click", ".navbar-youplay [data-toggle=off-canvas]", function () {
        var a = t(".navbar-youplay").find(t(this).attr("data-target")),
          e = a.hasClass("collapse");
        a[(e ? "remove" : "add") + "Class"]("collapse"), t(".navbar-youplay")[(e ? "add" : "remove") + "Class"]("youplay-navbar-collapsed")
      });
      var e;
      a.$window.on("resize", function () {
        t(".navbar-youplay").addClass("no-transition"), clearTimeout(e), e = setTimeout(function () {
          t(".navbar-youplay").removeClass("no-transition")
        }, 50)
      }), a.$document.on("click", ".youplay-navbar-collapsed ~ .content-wrap", function () {
        t(".navbar-youplay").find("[data-toggle=off-canvas]").click()
      }), a.options.fadeBetweenPages && t(".page-preloader").length || a.$document.on("click", ".navbar-youplay .dropdown-toggle", function () {
        "visible" !== t(this).next(".dropdown-menu").css("visibility") || t(this).parent().hasClass("open") || (window.location.href = this.href)
      })
    }, a.prototype.navbarSubmenuFix = function () {
      t(".navbar-youplay").on("click", ".dropdown-menu .dropdown-toggle", function (a) {
        t(this).parent(".dropdown").toggleClass("open"), a.preventDefault(), a.stopPropagation()
      })
    }, a.prototype.initAjaxForm = function () {
      this.$document.on("submit", ".youplay-form-ajax", function (a) {
        a.preventDefault();
        var e = t(this),
          o = e.find('[type="submit"]');
        o.is(".disabled") || o.is("[disabled]") || t.post(t(this).attr("action"), t(this).serialize(), function (t) {
          swal({
            type: "success",
            title: "Success!",
            text: t,
            showConfirmButton: !0,
            confirmButtonClass: "btn-default"
          }), e[0].reset()
        }).fail(function (t) {
          swal({
            type: "error",
            title: "Error!",
            text: t.responseText,
            showConfirmButton: !0,
            confirmButtonClass: "btn-default"
          })
        })
      })
    }, a.prototype.searchToggle = function (a) {
      var e = t(".search-block"),
        o = e.hasClass("active");
      "close" === a && !o || "open" === a && o || (o ? e.removeClass("active") : (e.addClass("active"), setTimeout(function () {
        e.find("input").focus()
      }, 120)))
    }, a.prototype.inputsActive = function (a, e) {
      e ? t(a).parent().addClass("input-filled") : t(a).parent().removeClass("input-filled")
    }, a.prototype.initHexagonRating = function () {
      "undefined" !== t.fn.hexagonProgress && t(".youplay-hexagon-rating:not(.youplay-hexagon-rating-ready)").each(function () {
        var a = parseFloat(t(this).attr("data-max")) || 10,
          e = parseFloat(t(this).text()) || 0,
          o = parseFloat(t(this).attr("data-size")) || 120,
          n = t(this).attr("data-back-color") || "rgba(255,255,255,0.1)",
          i = t(this).attr("data-front-color") || "#fff";
        t(this).css({
          width: o,
          height: o
        }).hexagonProgress({
          value: e / a,
          size: o,
          animation: !1,
          startAngle: (60 + 1e-8) * Math.PI / 180,
          lineWidth: 2,
          clip: !0,
          lineBackFill: {
            color: n
          },
          lineFrontFill: {
            color: i
          }
        }), t(this).addClass("youplay-hexagon-rating-ready")
      })
    }, window.youplay = new a(a.DEFAULT)
  }(jQuery), a["true"] = t
}({}, function () {
  return this
}());