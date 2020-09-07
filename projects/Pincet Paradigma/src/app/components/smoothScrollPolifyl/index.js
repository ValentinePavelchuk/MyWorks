import smoothscroll from "smoothscroll-polyfill";

smoothscroll.polyfill();

$(document).ready(function () {
  $('a[href^="#"]').click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var t = $(this.hash);
      if (
        ((t = t.length ? t : $("[name=" + this.hash.slice(1) + "]")), t.length)
      )
        return $("html,body").animate({ scrollTop: t.offset().top }, 500), !1;
    }
  });
});