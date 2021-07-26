//Hook up the tweet display

const wallDay = document.querySelector(".days");
const wallHour = document.querySelector(".hours");
const wallMinute = document.querySelector(".minutes");
const wallSecond = document.querySelector(".seconds");

let today = new Date();

function currentDay() {
  let today = new Date();
  let currentDay = today.getDate();
  return currentDay;
}

function currentHour() {
  let today = new Date();
  let currentHour = today.getHours();
  return currentHour;
}

wallDay.addEventListener("timeupdate", currentDay);
wallHour.addEventListener("timeupdate", currentHour);

$(document).ready(function () {
  $(".countdown").countdown(
    {
      date: "27 dec 2019 18:30:00",
      format: "on",
    },

    function () {}
  );
});
