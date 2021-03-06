//dep learn tabs
$(function () {
  var tab = $(".learn__tabs > div");
  //tab.hide().filter(":first").show();
  tab.hide().filter(":first").fadeIn(800, "linear");

  $(".learn__descr-btns--wraper a")
    .click(function () {
      tab.hide();
      // tab.filter(this.hash).show();
      tab.filter($(this).data("id")).fadeIn(800, "linear");
      $(".learn__descr-btns--wraper a").removeClass("active");
      $(".learn__descr-btns--wraper a").removeClass("learn__active");
      $(this).addClass("active");
      $(this).addClass("learn__active");
      let tab1 = $(".tab1");
      if (tab1.hasClass("active")) {
        tab1.closest("div").addClass("learn__active");
      } else {
        tab1.closest("div").removeClass("learn__active");
      }
      let tab2 = $(".tab2");
      if (tab2.hasClass("active")) {
        tab2.closest("div").addClass("learn__active");
      } else {
        tab2.closest("div").removeClass("learn__active");
      }
      return false;
    })
    .filter(":first")
    .click();
});

//dep price tabs
$(function () {
  var priceTab = $(".price__tabs > div");
  priceTab.hide().filter(":first").fadeIn(800, "linear");
  $(".price__calc-tabBtn a")
    .click(function () {
      priceTab.hide();
      priceTab.filter($(this).data("id")).fadeIn(800, "linear");
      $(".price__calc-tabBtn a").removeClass("active");
      $(".price__calc-tabBtn a").removeClass("price__tab-target");
      $(this).addClass("active");
      $(this).addClass("price__tab-target");
      return false;
    })
    .filter(":first")
    .click();
});
//programm tabs
$(function () {
  var priceTab = $(".programm__tabs--items > div");
  priceTab.hide().filter(":first").fadeIn(800, "linear");
  $(".programm__tabs-item")
    .click(function () {
      priceTab.hide();
      priceTab.filter($(this).data("id")).fadeIn(800, "linear");
      $(".programm__tabs-item").removeClass("active");
      $(".programm__tabs-item").removeClass("programm__tabs-active");
      $(this).addClass("active");
      $(this).addClass("programm__tabs-active");
      return false;
    })
    .filter(":first")
    .click();
});