jQuery(document).ready(()=>{

  sliders()
  imagenes()
  forza_textos()

  //
  console.log("Custom Scripts OK.");

})

function imagenes() {
  jQuery(".imgLiquid.imgLiquidFill").imgLiquid()
  jQuery(".imgLiquid.imgLiquidNoFill").imgLiquid({
    fill:false
  })
  console.log("Image containers OK.");
}
function grid() {
  jQuery('#container-galeria').masonry({
    itemSelector : '.item',
    columnWidth : 240
  });
  console.log("Masonry OK.");
}

function sliders() {

  jQuery("#inicio-slick-team").slick({
    speed: 1000,
    fade: false,
    cssEase: 'linear',
    centerMode: true,
    dots:true,
    arrows: false,
    centerPadding: '60px',
    slidesToShow: 2,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          arrows: false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 1
        }
      }
    ]
  })

  console.log("Sliders OK.")

}

function forza_textos() {

  setTimeout(()=>{
    let f = document.querySelector('#inicio-exito .vc_btn3-color-blue')//boton inicio ver mas historias de exito

    f.innerHTML = "Leer mas historias de exito"

  },500)
}
