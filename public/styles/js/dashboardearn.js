$(document).ready(function () {
  function earnings() {
    var lbl = [];
    var d = [];
    var color = [];
    var fl = 0;
	 var ctx = document.getElementById("line-chart").getContext("2d");
	var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
    gradientStroke.addColorStop(0, "rgba(138,160,166,.3)");
    gradientStroke.addColorStop(0.21, "#afe9dc");
    gradientStroke.addColorStop(0.5, "#2ad289");
    gradientStroke.addColorStop(0.77, "#afe9dc");
    gradientStroke.addColorStop(1, "rgba(175,233,220,.3)");

    var gradientBar = ctx.createLinearGradient(0, 200, 0, 0);
    gradientBar.addColorStop(0, "rgba(42,210,137,.5)");
    gradientBar.addColorStop(1, "rgba(255,255,255,0)");
    $(".datariumz-wrap ul li").each(function (i) {
      d[i] = $(this).attr("data-val");
      lbl[i] = $(this).attr("data-lbl");
      if (d[i] > 0) {
        fl = 1;
      }
      if (lbl[i] == "Datatium1") {
        color[i] = "#dd4646";
      } else if (lbl[i] == "Datatium2") {
        color[i] = "#52a4c8";
      } else if (lbl[i] == "Datatium3") {
        color[i] = "#f18d41";
      } else if (lbl[i] == "Datatium4") {
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
    new Chart(document.getElementById("line-chart"), {
      type: "line",
      data: {
        labels: lbl,
        datasets: [
          {
			  
            borderColor: gradientStroke,
              fill: false,
              borderWidth: 2,
              lineTension: 0,
              pointBorderColor: "rgba(0, 0, 0, 0)",
              pointBackgroundColor: "rgba(0, 0, 0, 0)",
              pointHoverBackgroundColor: "#2ad289",
              pointHoverBorderColor: "#fff",
              pointBorderWidth: 5,
              pointHoverRadius: 6,
              pointHoverShadowColor: "rgba(42,210,137,.5)",
              pointHoverOuterGlowWidth: 20,
              pointHoverOuterGlowColor: "rgba(42,210,137,1)",
              hoverBorderColor: gradientStroke,
            data: d
          }
        ]
      },
      options: {
        title: {
          display: false,
          text: "Earnings of Months"
        },
        legend: {
          display: false
        },
		
            scales: {
              xAxes: [
                {
                  gridLines: {
                    drawOnChartArea: false,
                    color: "rgba(245,249,250,.3)",
                    // drawBorder: false
                  },
                  ticks: {
                    fontSize: 10,
                    fontColor: "rgba(245,249,250,.3)",
                    maxTicksLimit: 31,
                    stepSize: 1,
                    min: 0,
                    autoSkip: false
                  }
                }
              ],
              yAxes: [
                {
                  gridLines: {
                    color: "rgba(245,249,250,.1)"
                    // drawOnChartArea: false
                  },
                  //display: false,
                  ticks: {
                    beginAtZero: true,
                    fontColor: "rgba(245,249,250,.3)",
                  },
                  //type: 'logarithmic',
                }
              ]
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
              callbacks: {
                title: function (tooltipItems, data) {
                  return "Total Earning";
                },
                label: function (tooltipItems, data) {
                  return tooltipItems.yLabel + " USD";
                }
              }
            },
      }
    });
  }
  
  //****************************************** */
  
  earnings();
  
});
