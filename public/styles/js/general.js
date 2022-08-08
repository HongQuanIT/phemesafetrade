$(document).ready(function () {
  $('.top-icon').click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
  $(".menu-icon").click(function () {
    $(".hidden-menu").addClass("active");
  })
  $(".hidden-menu-close").click(function () {
    $(".hidden-menu").removeClass("active");
  })
  $(".mini-menu").click(function () {
    if (!$(".dashboard-menu").hasClass("open")) {
      $(".dashboard-menu").addClass("open");
      $(".dashboard-nav").slideDown();
    } else {
      $(".dashboard-menu").removeClass("open");
      $(".dashboard-nav").slideUp();
    }
  })
  $("input").focus(function () {
    $(this).parents(".input-holder").removeClass("error");
  });



});

function openIframModal(modalname) {
  var modalIframe = $("." + modalname).find("iframe");
  $(".modal-bg").addClass("active");
  $("html").css({
    "overflow": "hidden"
  });
  $(".modal-holder").fadeIn(300);
  $("." + modalname).fadeIn(300);
  setTimeout(function () {
    resizeIframe(modalIframe);
  }, 650)
}

function openModal(modalname) {
  $(".modal-bg").addClass("active");
  $("html").css({
    "overflow": "hidden"
  });
  $(".modal-holder").fadeIn(300);
  $("." + modalname).fadeIn(300);
}
$(".modal-holder *").click(function (e) {
  e.stopPropagation();
});
$(".modal-holder , .modal-close").click(function (e) {
  e.stopPropagation();
  $(".modal-holder").fadeOut();
  $(".modal-bg").removeClass("active");
  $("html").css("overflow", "");


  if ($(".compound").is(":visible")) {
    setTimeout(function () {
      window.location.reload();
    }, 700)

  }

  if ($(".video").is(":visible")) {
    $("#video").vimeo("unload");
  }

});

function resizeIframe(obj) {
  var iframeHeight = obj.contents().find("body").innerHeight();
  obj.css("height", iframeHeight);
  obj.parents('.modal-content').css("height", iframeHeight);

  setTimeout(function () {
    var iframeHeight = obj.contents().find("body").innerHeight();
    obj.css("height", iframeHeight);
    obj.parents('.modal-content').css("height", iframeHeight);
  }, 1000)
}