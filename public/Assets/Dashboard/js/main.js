//side bar menu hide/show
let nav = document.getElementById("mySidenav");
let main = document.getElementById("main");

function toggleNav() {
  nav.classList.toggle("nav-open");
  main.classList.toggle("main-shrink");
}

//to set sidebar closed as default in small screens
let x = window.matchMedia("(max-width: 768px)");
function myFunction(x) {
  if (x.matches) {
    // If media query matches
    nav.classList.remove("nav-open");
    main.classList.remove("main-shrink");
  }
}

//side bar menu list collapse
let coll = document.getElementsByClassName("collapsibles");
let i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    let content = this.nextElementSibling;
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
      content.style.paddingTop = "0px";
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
      content.style.paddingTop = "35px";
    }
  });
}

// BAR CHART
var barChartOptions = {
  series: [
    {
      data: [10, 8, 6, 4, 2, 8],
    },
  ],
  chart: {
    type: "bar",
    height: 300,
    toolbar: {
      show: false,
    },
  },
  colors: ["#5635AF", "#ec8f32", "#012332", "#ED0F58", "#fecd3f", "#3eb65e"],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: "40%",
    },
  },
  dataLabels: {
    enabled: false,
  },
  legend: {
    show: false,
  },
  xaxis: {
    categories: [
      "Web Devlopment",
      "Mobile Application",
      "Ai",
      "Machine Learning",
      "Data Science",
      "Ui Ux",
    ],
  },
  yaxis: {
    title: {
      text: "Count",
    },
  },
};

var barChart = new ApexCharts(
  document.querySelector("#bar-chart"),
  barChartOptions
);
barChart.render();

// AREA CHART
var areaChartOptions = {
  series: [
    {
      name: "",
      data: [31, 40, 28, 51, 42, 109, 100],
    },
    {
      name: "",
      data: [11, 32, 45, 32, 34, 52, 41],
    },
  ],
  chart: {
    height: 350,
    type: "area",
    toolbar: {
      show: false,
    },
  },
  colors: ["#4f35a1", "#Ec8f32"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "straight",
  },
  labels: ["Launch", "Week1", "Week2", "Week3", "Week4", "Week5", "Week6"],
  markers: {
    size: 0,
  },
  yaxis: [
    {
      title: {
        text: "",
      },
    },
    {
      opposite: true,
      title: {
        text: "",
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  },
};

var areaChart = new ApexCharts(
  document.querySelector("#area-chart"),
  areaChartOptions
);
areaChart.render();

// Comparison Chart

var options = {
  series: [
    {
      data: [44, 55, 41, 64, 22, 43, 21],
    },
    {
      data: [53, 32, 33, 52, 13, 44, 32],
    },
  ],
  colors: ["#4f35a1", "#DFD8F3"],

  chart: {
    type: "bar",
    height: 430,
  },
  plotOptions: {
    bar: {
      horizontal: false,
      dataLabels: {
        position: "top",
      },
    },
  },
  dataLabels: {
    enabled: true,
    offsetX: -6,
    style: {
      fontSize: "12px",
      colors: ["#fff"],
    },
  },
  stroke: {
    show: true,
    width: 1,

    colors: ["#fff"],
  },
  tooltip: {
    shared: true,
    intersect: false,
  },
  xaxis: {
    categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
  },
};

var chart = new ApexCharts(document.querySelector("#comp-chart"), options);
chart.render();

// Pie Chart

var options = {
  series: [66, 55, 41],
  labels: ["Direct", "Affilliate", "Reffal"],
  chart: {
    type: "donut",
  },
  responsive: [
    {
      breakpoint: 480,
      options: {
        chart: {
          width: 200,
        },
        legend: {
          position: "bottom",
        },
      },
    },
  ],
};

var chart = new ApexCharts(document.querySelector("#pie-chart"), options);
chart.render();

// active Users
var options = {
  series: [
    {
      name: "",
      data: [
        44, 55, 57, 56, 61, 58, 63, 60, 66, 44, 55, 57, 56, 61, 58, 63, 60, 66,
        44, 55, 57, 56, 61, 58, 63, 60, 66, 78,
      ],
    },
  ],
  chart: {
    type: "bar",
    height: 350,
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "55%",
      endingShape: "rounded",
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"],
  },
  xaxis: {
    categories: [""],
  },
  yaxis: {
    title: {
      text: " ()",
    },
  },
  fill: {
    opacity: 1,
    colors: "#7F56D9",
  },
};

var chart = new ApexCharts(document.querySelector("#active-chart"), options);
chart.render();
