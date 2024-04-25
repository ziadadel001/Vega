// const book = document.querySelectorAll(".bookBtn");
// const close = document.querySelector(".closeBtn");
// const overLay = document.querySelector(".overlay");
// const bookingForm = document.querySelector(".booking");
const arrDate = [];

//////////////////// calendar /////////////////////
const currentDate = document.querySelector(".current-date");
const daysContainer = document.querySelector(".days");
const prevNextIcon = document.querySelectorAll(".icons span");

// getting new date, current year and month
let date = new Date(),
  currYear = date.getFullYear(),
  currMonth = date.getMonth();
// storing full name of all months in array
const months = [
  "Jan",
  "Feb",
  "Mar",
  "Apr",
  "May",
  "Jun",
  "Jul",
  "Aug",
  "Sep",
  "Oct",
  "Nov",
  "Dec",
];
const days = ["Sat", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri"];

const renderCalendar = () => {
  // to know either the month is 30days or 31days
  let lastDayOfMonth = new Date(currYear, currMonth + 1, 0).getDate();
  let dayTag = "";

  // render days of the month
  for (let i = 1; i <= lastDayOfMonth; i++) {
    let days = new Date(currYear, currMonth, i).toDateString().split(" ");
    let isToday =
      i === date.getDate() &&
      currMonth === date.getMonth() &&
      currYear === date.getFullYear()
        ? "active"
        : "";
    dayTag += `
    <div class="day ${isToday}">
        <h5>${days[2]}</h5>
        <p class="${isToday}">${days[0]}</p>
    </div>
    `;
  }
  daysContainer.innerHTML = dayTag;
  currentDate.innerText = `${months[currMonth]} ${currYear}`;

  document
    .querySelector(".active")
    .scrollIntoView({ behavior: "smooth", block: "end", inline: "center" });
  selectDate();
};

const sliderHandler = () => {
  const sliderScrollbar = document.querySelector(".slider-scrollbar");
  const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
  const maxScrollLeft = daysContainer.scrollWidth - daysContainer.clientWidth;
  const defaultThumbPosition = date.clientX;

  // handle scroll bar thumb drag
  scrollbarThumb.addEventListener("mousedown", function (e) {
    const startX = e.clientX;
    const thumbPosition = scrollbarThumb.offsetLeft;

    // update thumb position on mouse move
    const handleMouseMove = (e) => {
      const deltaX = e.clientX - startX;
      const newThumbPosition = thumbPosition + deltaX;

      const maxThumbPosition =
        daysContainer.getBoundingClientRect().width -
        scrollbarThumb.offsetWidth;
      const boundedPosition = Math.max(
        0,
        Math.min(maxThumbPosition, newThumbPosition)
      );
      const scrollPosition =
        (boundedPosition / maxThumbPosition) * maxScrollLeft;
      scrollbarThumb.style.left = `${boundedPosition}px`;
      daysContainer.scrollLeft = scrollPosition;
    };

    //remove event listener on mouse move
    const handleMouseUp = () => {
      document.removeEventListener("mousemove", handleMouseMove);
      document.removeEventListener("mouseup", handleMouseUp);
    };

    // add eventlistener for drag interaction
    document.addEventListener("mousemove", handleMouseMove);
    document.addEventListener("mouseup", handleMouseUp);
  });
  const updateScrollThumbPosition = () => {
    const scrollPosition = daysContainer.scrollLeft;
    const thumbPosition =
      (scrollPosition / maxScrollLeft) *
      (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
    scrollbarThumb.style.left = `${thumbPosition}px`;
  };
  prevNextIcon.forEach((icon) => {
    icon.addEventListener("click", () => {
      currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
      if (currMonth < 0 || currMonth > 11) {
        date = new Date(currYear, currMonth);
        currYear = date.getFullYear();
        currMonth = date.getMonth();
      } else {
        date = new Date();
      }
      renderCalendar();
      daysContainer.scrollLeft = defaultThumbPosition;
    });
  });
  daysContainer.addEventListener("scroll", updateScrollThumbPosition);
};
const selectDate = () => {
  const days = daysContainer.querySelectorAll(".day");
  // select a day
  daysContainer.addEventListener("click", function (e) {
    days.forEach((el) => {
      el.classList.remove("active");
      el.querySelectorAll("p").forEach((p) => p.classList.remove("active"));
    });

    const clicked = e.target.closest(".day");
    console.log(clicked);
    if (!clicked) return;

    // set the date with the selected one
    date.setFullYear(
      currYear,
      currMonth,
      clicked.querySelector("h5").textContent
    );
    arrDate.push(date);
    clicked.classList.add("active");
    clicked.querySelectorAll("p").forEach((p) => p.classList.add("active"));

    return arrDate;
  });
};
//update scrollbar thumb position based in days scroll
window.addEventListener("load", sliderHandler);
renderCalendar();
