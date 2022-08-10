$(document).ready(function() {
  $(".btn-next").click(function(e) {
    if (step == 1) {
      if ($("#username1").val() == "") {
        showError($("#step1"), "Please enter username");
        $("#username1")
          .parents(".input-holder")
          .addClass("error");
        return;
      }
      if ($("#email").val() == "") {
        showError($("#step1"), "Please enter email");
        $("#email")
          .parents(".input-holder")
          .addClass("error");
        return;
      }
      if (
        !$("#username1")
          .val()
          .match(/^[A-Za-z0-9_\-]+$/)
      ) {
        showError(
          $("#step1"),
          "For username you should use English letters and digits only!"
        );
        $("#username1")
          .parents(".input-holder")
          .addClass("error");
        return;
      }
      if (!validateEmail($("#email").val())) {
        showError($("#step1"), "email format not correct");
        $("#email")
          .parents(".input-holder")
          .addClass("error");
        return;
      }
      if ($("#accept").prop("checked") == false) {
        showError(
          $("#step1"),
          "You have to agree with the Terms and Conditions!"
        );
        return;
      }
      nextStep();
    } else if (step == 2) {
      if ($("#password").val() == "") {
        showError($("#step2"), "Please enter your password!");
        $("#password")
          .parents(".input-holder")
          .addClass("error");
        return;
      }
      if ($("#password").val().length < 6) {
        showError($("#step2"), "Password must be at least 6 characters");
        $("#password")
          .parents(".input-holder")
          .addClass("error");
        return;
      }
      if ($("#password_confirmation").val() != $("#password").val()) {
        showError($("#step2"), "Please check your password!");
        $("#password_confirmation")
          .parents(".input-holder")
          .addClass("error");
        return;
      }
      nextStep();
    } else if (step == 3) {
      window.localStorage.setItem("username", $("#username1").val());
      window.localStorage.setItem("email", $("#email").val());
      if ($("#fullname").val() == "") {
        showError($("#step3"), "Please enter your full name!");
        $("#fullname")
          .parents(".input-holder")
          .addClass("error");
        return;
      }
      if ($("#questions").prop("selectedIndex") == 0) {
        showError($("#step3"), "Please select secure question!");
        return;
      }
      if (
        $("#questions").prop("selectedIndex") > 0 &&
        $("#securityAnswer").val() == ""
      ) {
        showError($("#step3"), "Please answer the question of choice!");
        $("#securityAnswer")
          .parents(".input-holder")
          .addClass("error");
        return;
      }
      $(".btn-next").addClass("waiting");
      $(".btn-next").css("pointer-events", "none");
      // e.preventDefault();
      // var formData = new FormData(e.target);
      // fetch("register", { 
      //   method: 'POST',
      //   body: formData
      // }).then(() => console.log('success'));
      $("#regform").submit();
    }
  });

  function showError(step, txt) {
    step.find(".error-msg>span").text(txt);
    step.find(".error-msg").removeClass("hidden");
  }
  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  $(".btn-prev").click(function() {
    backStep();
  });

  var step = 1;
  function nextStep() {
    $("#nav" + step).removeClass("active");
    $("#nav" + step).addClass("complete");
    $("#step" + step)
      .find(".error-msg")
      .removeClass("hidden");

    $("#step" + step).removeClass("active");
    $("#step" + step).addClass("complete");
    deActiveTabIndex($("#step" + step));
    step++;
    $("#nav" + step).addClass("active");
    $("#step" + step).addClass("active");
    activeTabIndex($("#step" + step));
    if (step == 4) {
      $(".step-control").slideUp();
    }
    $(".btn-prev").removeClass("invisible");
  }

  function backStep() {
    $("#nav" + step).removeClass("active");
    $("#step" + step).removeClass("active");
    deActiveTabIndex($("#step" + step));
    step--;
    if (step >= 1) {
      $("#nav" + step).removeClass("complete");
      $("#nav" + step).addClass("active");

      $("#step" + step).removeClass("complete");
      $("#step" + step).addClass("active");
      activeTabIndex($("#step" + step));
    }
    if (step == 1) {
      $(".btn-prev").addClass("invisible");
    }
  }

  function activeTabIndex(step) {
    var tabindex = 1;
    step.find("input,select").each(function() {
      if (this.type != "hidden") {
        var $input = $(this);
        $input.attr("tabindex", tabindex);
        tabindex++;
      }
    });
  }
  function deActiveTabIndex(step) {
    step.find("input,select").each(function() {
      if (this.type != "hidden") {
        var $input = $(this);
        $input.attr("tabindex", -1);
      }
    });
  }
});
