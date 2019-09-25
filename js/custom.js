jQuery(document).ready(()=>{

  sliders()
  imagenes()

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
     infinite: true,
     autoPlay: true,
  })

  console.log("Sliders OK.")

}
