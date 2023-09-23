// Lenis Smooth Scroll
const lenis = new Lenis()

lenis.on('scroll', (e) => {
  console.log(e)
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

// Split Animation
var lettering = new Lettering('.letters');
lettering.words();

setTimeout(function () {
  const effects = document.querySelectorAll(".letters");

  effectsInit(effects, window);
}, 200);