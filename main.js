document.addEventListener("DOMContentLoaded", function () {
  let splide = new Splide(".splide", {
    type: "slider",
    perPage: 1,
    rewind: true,
    autoplay: true,
    width: "800px",
    gap: "1rem",
    intersection: {
      inView: {
        autoplay: true,
      },
      outView: {
        autoplay: false,
      },
    },
  })
  splide.mount()
})
