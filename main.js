document.addEventListener("DOMContentLoaded", function () {
  // Franquias
  let slider1 = new Splide("#slider1", {
    type: "slider",
    perPage: 1,
    rewind: true,
    autoplay: false,
    width: "100%",
  })
  slider1.mount()

  // Imagens
  let slider2 = new Splide("#slider2", {
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
  slider2.mount()
})
