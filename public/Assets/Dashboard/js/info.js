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

const div1 = document.getElementById("div1");
const div2 = document.getElementById("div2");
const div3 = document.getElementById("div3");
const div4 = document.getElementById("div4");
const showDiv1Button = document.getElementById("showDiv1");
const showDiv2Button = document.getElementById("showDiv2");
const showDiv3Button = document.getElementById("showDiv3");
const showDiv4Button = document.getElementById("showDiv4");

showDiv1Button.addEventListener("click", () => {
  div1.style.display = "block";
  div2.style.display = "none";
});

showDiv2Button.addEventListener("click", () => {
  div1.style.display = "none";
  div2.style.display = "block";
});
//

var areaChartOptions = {
  series: [
    {
      name: "",
      data: [31, 40, 28, 51, 42, 109, 100],
    },
  ],
  chart: {
    height: 350,
    type: "area",
    toolbar: {
      show: false,
    },
  },
  colors: ["#4f35a1"],
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
