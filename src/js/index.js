window.addEventListener("load", init());

const loader = document.querySelector(".loader");
const main = document.querySelector(".containers");

function init() {
  setTimeout(() => {
    // loader.style.width = 0;
    loader.style.opacity = 0;
    loader.style.display = "none";
        

    main.style.overflow = "visible";
    setTimeout(() => {
      main.style.height = "auto";
      main.style.opacity = 1;
    }, 50);
  }, 2900);
}

// Animate on scroll logic
AOS.init({
  once: true,
  easing: "ease-in-out",
  offset: 160,
  duration: 1000
});

let countDownDate = new Date("July 30, 2020 15:37:25").getTime();

// Update the count down every 1 second
let x = setInterval(function () {
  // Get today's date and time
  let now = new Date().getTime();

  // Find the distance between now and the count down date
  let distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  let days = Math.floor(distance / (1000 * 60 * 60 * 24));
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.querySelector(".countdown-day").innerHTML = days;
  document.querySelector(".countdown-hour").innerHTML = hours;
  document.querySelector(".countdown-minutes").innerHTML = minutes;
  document.querySelector(".countdown-seconds").innerHTML = seconds;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
