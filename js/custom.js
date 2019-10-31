jQuery(document).ready(()=>{

  slider_team()
  slider_galeria()
  imagenes()
  forza_textos()
  quitaDescripcionMenu()
  // blog_container()
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

function slider_team() {

  jQuery("#inicio-slick-team").slick({
    speed: 1000,
    fade: false,
    cssEase: 'linear',
    centerMode: true,
    dots:true,
    arrows: false,
    centerPadding: '60px',
    slidesToShow: 2,
    autoplay: false,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          arrows: false,
          centerPadding: '40px',
          slidesToShow: 2
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

function slider_galeria() {

  jQuery("#slick-galeria").slick({
    speed: 1000,
    fade: false,
    cssEase: 'linear',
    centerMode: true,
    dots:true,
    arrows: false,
    centerPadding: '60px',
    slidesToShow: 2,
    autoplay: false,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          arrows: false,
          centerPadding: '40px',
          slidesToShow: 2
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

function quitaDescripcionMenu() {
  x = document.querySelectorAll('.menu-item-desc')
  x.forEach((item)=>{
    item.parentNode.removeChild(item)
  })

}

function blog_container() {
  x = document.querySelector('.js-masonry')
  x.classList.add("container")
}
