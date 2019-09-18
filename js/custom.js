(
function($) {

  imagenes()


  //
  console.log("Custom Scripts OK.");

}()
)

function imagenes() {
  jQuery(".imgLiquid.imgLiquidFill").imgLiquid()
  jQuery(".imgLiquid.imgLiquidNoFill").imgLiquid({
    fill:false
  })
  console.log("Image containers OK.");
}
function grid() {
  $('#container').masonry({
    itemSelector : '.item',
    columnWidth : 240
  });
  console.log("Masonry containers OK.");
}
