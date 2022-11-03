import lazyframe from "lazyframe";


const lazyload = {
  elements: document.querySelectorAll(".lazyframe"),
  init: function(){
    console.log('lazyload');
    lazyframe(lazyload.elements,{
      lazyload: true,
      onLoad: (lazyframe) => console.log(lazyframe),
      onAppend: (iframe) => console.log(iframe),
      onThumbnailLoad: (img) => console.log(img),
    }
      
      );
  },

}


export default lazyload;