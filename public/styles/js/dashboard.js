$(document).ready(function () {
  function doughnut() {
    var lbl = [];
    var d = [];
    var color = [];
    var fl = 0;
    $(".payement-wrap ul li").each(function (i) {
      d[i] = $(this).attr("data-val");
      lbl[i] = $(this).attr("data-lbl");
      if (d[i] > 0) {
        fl = 1;
      }
      if (lbl[i] == "PerfectMoney") {
        color[i] = "#dd4646";
      } else if (lbl[i] == "Payeer") {
        color[i] = "#52a4c8";
      } else if (lbl[i] == "Bitcoin") {
        color[i] = "#f18d41";
      } else if (lbl[i] == "Ethereum") {
        color[i] = "#435b91";
      }
    });
    if (fl == 0) {
      lbl = [];
      d = [];
      color = [];
      lbl[0] = "no balance";
      d[0] = 1;
      color[0] = "#eff2f3";
    }
    new Chart(document.getElementById("doughnut-chart"), {
      type: "doughnut",
      data: {
        labels: lbl,
        datasets: [
          {
            backgroundColor: color,
            data: d
          }
        ]
      },
      options: {
        title: {
          display: true,
          text: "Balance Review"
        },
        legend: {
          display: false
        },
        cutoutPercentage: 70,
        tooltips: {
          title: "Total Earning",
          backgroundColor: "#FFF",
          titleFontSize: 10,
          titleFontColor: "#223641",
          bodyFontColor: "#000",
          bodyFontSize: 10,
          displayColors: false,
          cornerRadius: 2,
          xPadding: 10,
          yPadding: 12,
          caretSize: 8,
          caretPadding: 15,
          position: "nearest",
          yAlign: "bottom",
          xAlign: "center",
          borderColor: "#dcad5e",
          borderWidth: 0.5
        }
      }
    });
  }
  
  //****************************************** */

  doughnut();

});




function getTitleChart() {

  var month = new Array();
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";
  var d = new Date();
  var n = month[d.getMonth()];
  var y = d.getFullYear();
  $(".chart-range span").text(n + " " + y);

}

