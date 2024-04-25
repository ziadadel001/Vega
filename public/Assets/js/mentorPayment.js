const radio = document.querySelectorAll(".radioBtn");
const form = document.querySelectorAll(".payment-form");

radio.forEach((el) =>
  el.addEventListener("click", function (e) {
    const clicked = e.target.closest(".radioBtn");
    if (!clicked) return;
    document
      .querySelectorAll(".innerRadio")
      .forEach((el) => el.classList.remove("radioActive"));
    document
      .querySelectorAll(".tab")
      .forEach((el) => el.classList.remove("active"));

    form.forEach((el) => el.classList.add("hidden"));

    // handling tabs
    clicked.querySelector(".innerRadio").classList.add("radioActive");
    clicked.closest(".tab").classList.add("active");

    // handling content
    document
      .querySelector(`#form-${clicked.dataset.tab}`)
      .classList.remove("hidden");
    formSubmition(document.querySelector(`#form-${clicked.dataset.tab}`));
  })
);

// payment form validation
const submitBtn = document.querySelector(".submitBtn");
const popup = document.querySelector(".popup");
const overlay = document.querySelector(".overlay");
const okBtn = document.querySelector(".ok");
okBtn.addEventListener("click", function () {
  popup.classList.add("hidden");
  overlay.classList.add("hidden");
});
////
function formSubmition(form) {
  submitBtn.addEventListener("click", function (e) {
    const cardName = form.querySelector("#card-name");
    const cardNum = form.querySelector("#card-num");
    const expire = form.querySelector("#expire");
    const cvc = form.querySelector("#CVC");
    const phoneNum = form.querySelector("#fawry");

    if (
      cardName?.value == "" ||
      cardNum?.value == "" ||
      expire?.value == "" ||
      cvc?.value == "" ||
      phoneNum?.value == ""
    ) {
      form.querySelectorAll("input").forEach((el) => {
        if (el.value == "") {
          el.style.borderColor = "red";
          el.nextElementSibling.classList.remove("hidden");
        } else {
          el.style.borderColor = "";
          el.nextElementSibling.classList.add("hidden");
        }
      });

      e.preventDefault();
      return false;
    } else {
      form.submit();
    }
  });
}
formSubmition(document.querySelector("#form-1"));

////

// display session details in payment confirmation
const sessionDetailsContainer = document.querySelector(
  ".session__details--container"
);
const dateTime = localStorage.getItem("dateAndTime").split(",");
const renderSessionDetails = function () {
  const html = `
    <h5 class="">Session Details</h5>
    <h2>200 EGP</h2>
    <p class="m-0 text-muted">Mentor:</p>
    <div class="session-mentordata">
        <img
        src="assets/images/heroPerson1.jpg"
        class="float-start me-2 mt-1"
        alt="..."
        />
        <div class="d-flex flex-column gap-1">
        <h6 class="m-0">Mariam Gamal</h6>
        <p class="m-0 text-muted">Ux Leader & Career Coach at Ex-Adobe</p>
        </div>
    </div>
    <div class="mt-4">
            <img
              src="assets/images/MentorInfoPage/tag.png"
              class="float-start me-2 mt-1"
              alt="..."
            />
            <div class="d-flex flex-column gap-1">
              <h6 class="m-0">Portfolio Review</h6>
              <p class="m-0 text-muted">Topic</p>
            </div>
          </div>
          <div class="mt-2">
            <img
              src="assets/images/MentorInfoPage/clockIcon.png"
              class="float-start me-2 mt-1"
              alt="..."
            />
            <div class="d-flex flex-column gap-1">
              <h6 class="m-0">${dateTime[1]}</h6>
              <p class="m-0 text-muted">Time</p>
            </div>
          </div>
          <div class="mt-2">
            <img
              src="assets/images/MentorInfoPage/timer.png"
              class="float-start me-2 mt-1"
              alt="..."
            />
            <div class="d-flex flex-column gap-1">
              <h6 class="m-0">30 minutes</h6>
              <p class="m-0 text-muted">Duration</p>
            </div>
          </div>
          <div class="mt-2">
            <img
              src="assets/images/MentorInfoPage/calendar.png"
              class="float-start me-2 mt-1"
              alt="..."
            />
            <div class="d-flex flex-column gap-1">
              <h6 class="m-0">${dateTime[0].split(" ")[2]} ${
    dateTime[0].split(" ")[1]
  }</h6>
              <p class="m-0 text-muted">Date</p>
            </div>
          </div>`;
  sessionDetailsContainer.insertAdjacentHTML("afterbegin", html);
};
renderSessionDetails();
