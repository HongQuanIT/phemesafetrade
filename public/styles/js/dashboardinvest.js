$(document).ready(function () {
  function invesments() {
    var lbl = [];
    var d = [];
    var color = [];
    var fl = 0;
	var ctx = document.getElementById("invest-chart").getContext("2d");
	
    $(".datainvest-wrap ul li").each(function (i) {
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
      lbl = []+20;
      d = []+30;
      color = [];
      lbl[0] = "no balance";
      d[0] = 1;
      color[0] = "#eff2f3";
    }
    new Chart(document.getElementById("invest-chart"), {
      type: "bar",
      data: {
        labels: lbl,
        datasets: [
              {
                backgroundColor: "#e2e8ea",
                data: d,
                hoverBackgroundColor: "#2ad288"
              }
            ]
      },
      options: {
            legend: {
              display: false
            },
            title: {
              display: true
            },
            scales: {
              xAxes: [
                {
                  gridLines: {
                    drawOnChartArea: false
                  },
                  barPercentage: 0.4,
                  ticks: {
                    fontSize: 9,
                    fontColor: "rgba(34,54,65,.5)"
                  }
                }
              ],
              yAxes: [
                {
                  gridLines: {
                    drawBorder: false
                  },
                  barPercentage: 0.4,
                  ticks: {
                    fontSize: 10,
                    fontColor: "rgba(34,54,65,.5)",
                    beginAtZero: true,
					/* max: Math.min.apply(this, d) - (Math.min.apply(this, d) * 2 / 100) */
					/* max: Math.max.apply(this, d) + 5, */
					suggestedMax: Math.max.apply(this, d) + (Math.max.apply(this, d) * 20 / 100)
                  }
                }
              ]
            },
            tooltips: {
              backgroundColor: "#FFF",
              bodyFontColor: "#2ad288",
              bodyFontSize: 10,
              displayColors: false,
              cornerRadius: 2,
              xPadding: 10,
              yPadding: 12,
              caretSize: 8,
              /* caretPadding: 10, */
			  caretPadding: 10,
              position: "nearest",
              shadowOffsetX: 3,
              shadowOffsetY: 3,
              shadowBlur: 10,
              shadowColor: "rgba(42, 210, 136, 0.4)",
              yAlign: "bottom",
              xAlign: "center",
              callbacks: {
                title: function (tooltipItems, data) {
                  return "";
                },
                label: function (tooltipItems, data) {
                  return tooltipItems.yLabel + " USD";
                }
              }
            }
          }
    });
  }
  
  function getMax(){
    var max = 0;
    dataSets.forEach(function(x, i){        
        max = Math.max(max, Math.max.apply(null, x.data));
    });

    return max + 2;
}
  
  //****************************************** */

  invesments();

});
