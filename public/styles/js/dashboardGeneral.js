var vipInterval;
$(document).ready(function () {
    vipInterval = setInterval(function () { checkVIP(); }, 1000);

    $("#vip-deposit").click(function () {
        openModal("vip-subscription");
    });
    $("#submit-vip").click(function () {
        if ($(".vip-type").is(":checked")) {
            $("#formVip").submit();
        } else {
            $(".error-msg>span").text("Please select your Payment");
            $(".error-msg").removeClass("hidden");
        }
    });
});

function checkVIP() {
    var accType = window.localStorage.getItem("accType");
    if (accType != null && accType != "" && accType != "-1") {
        if (accType == "0") {
            $(".membership-type").slideDown();
        } else {
            $(".profile-type").removeClass("hidden");
            $(".vip-navbar").slideDown();
        }
        clearInterval(vipInterval);
    }
}

