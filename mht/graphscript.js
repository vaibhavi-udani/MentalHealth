color = ["#91AB99", "#99C1CF", "#9C91AB", "#B58B8B"];
var months = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
  ];

var dataHappy = new Array(31);
var dataActive = new Array(31);
var dataHealth = new Array(31);
var dataSocial = new Array(31);
var initial = new Array(31);

var chart;
var d = new Date();
var month = d.getMonth() + 1;

document.getElementById("dropdown-month").selectedIndex = parseInt(month)-1;

resetData();
parseData();
drawPlot(initial, color[0]);

function resetData() {
    for (i = 0; i <= 31; i++) {

        dataHappy[i] = {
            y: null
        };
        dataActive[i] = {
            y: null
        };
        dataHealth[i] = {
            y: null
        };
        dataSocial[i] = {
            y: null
        };
        initial[i] = {
            y: null
        };
    }
}

function parseData() {
    var x;
    var dateArr;
    for (var i = 0; i < jArray.length; i++) {
        x = jArray[i].date;
        dateArr = x.split("-");
        if (dateArr[1] == month) {

            dataHappy[dateArr[2]] = {
                y: parseInt(jArray[i].mood)
            };
            dataActive[dateArr[2]] = {
                y: parseInt(jArray[i].active)
            };
            dataHealth[dateArr[2]] = {
                y: parseInt(jArray[i].health)
            };
            dataSocial[dateArr[2]] = {
                y: parseInt(jArray[i].social)
            };
        }

    }
}

function renderGraph(option) {
    document.getElementById('btn-1').style.background = "gray";
    document.getElementById('btn-2').style.background = "gray";
    document.getElementById('btn-3').style.background = "gray";
    document.getElementById('btn-4').style.background = "gray";

    document.getElementById('btn-' + option).style.background = color[option - 1];
    switch (option) {
        case 1:
            drawPlot(dataHappy, color[0]);
            break;
        case 2:
            drawPlot(dataActive, color[1]);
            break;
        case 3:
            drawPlot(dataHealth, color[2]);
            break;
        case 4:
            drawPlot(dataSocial, color[3]);
            break;
    }
}

function drawPlot(arr, colorx) {
    var empty = true;
    arr.forEach(element => {
        if (element.y != null) {
            empty = false;
        }
    });
    
    chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "Monthly Overview"
        },
        axisY: {
            includeZero: true
        },
        data: [{
            lineColor: colorx,
            markerColor: colorx,
            type: "line",
            dataPoints: arr,
            connectNullData: true,
           
	}]
    });
    chart.render();
    if (empty) {
        alert("Please choose a category from the right column and ensure that there are scores recorded for the chosen month");
    }
}

function changeMonth() {
    var dd = document.getElementById("dropdown-month");
    month = (months.indexOf(dd.options[dd.selectedIndex].value) + 1);
    resetData();
    parseData();
}
