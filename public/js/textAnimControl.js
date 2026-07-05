// Wrap every letter in a span
var textWrapper = document.querySelectorAll('.ml13');
textWrapper[0].innerHTML = textWrapper[0].textContent.replace(/\S/g, "<span class='letter'>$&</span>");
textWrapper[1].innerHTML = textWrapper[1].textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
.add({
  targets: '.ml13 .letter',
  translateY: [100,0],
  translateZ: 0,
  opacity: [0,1],
  easing: "easeOutExpo",
  duration: 1400,
  delay: (el, i) => 300 + 60 * i
})

anime.timeline({loop: false})
.add({
  targets: '.entry-img-frame',
  translateY: [100,0],
  translateZ: 0,
  opacity: [0,1],
  easing: "easeOutExpo",
  duration: 800,
  delay: (el, i) => 300 + 60 * i
})

//Date and time setup
function step(timestamp) {
  var dateHld = document.getElementById("dateCounter");
  var timeHld = document.getElementById("timeCounter");
  var jktDate = new Date();

  dateHld.innerHTML = jktDate.toLocaleDateString('en-US', {
    month: 'long',
    day: 'numeric',
    year: 'numeric',
    timeZone: "Asia/Jakarta"
  })

  timeHld.innerHTML = jktDate.toLocaleTimeString('en-US', {
    hour: 'numeric',
    second: 'numeric',
    minute: '2-digit',
    hour12: true,
    timeZone: "Asia/Jakarta"
  })

  requestAnimationFrame(step);
}

requestAnimationFrame(step);