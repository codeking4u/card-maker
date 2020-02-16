$(document).ready(function(){
    window.cardCanvas = new fabric.Canvas('card_canvas');
    var url = $('#card_canvas').attr('data-src');
    addImage(url);
    addTexts();


    $('#heading').on('keyup',function(){
          cardCanvas.getObjects().forEach(function(o){
              if(o.id=='heading'){
                    if (o.width > o.fixedWidth) {
                        o.fontSize *= o.fixedWidth / (o.width + 1);
                        o.width = o.fixedWidth;
                    }
                    cardCanvas.remove(o);
                    cardCanvas.renderAll();
                    var text = $('#heading').val();
                    
                    addTexts(text);
                    console.log(o.width)
              }
          });
          
          /* var t1 = opt.target;
          if (t1.width > t1.fixedWidth) {
              t1.fontSize *= t1.fixedWidth / (t1.width + 1);
              t1.width = t1.fixedWidth;
          } */
    });
  
        
});
    




function addImage(url){
    cardCanvas.getObjects().forEach(function(o){
        if(o.id=="background_img"){
            cardCanvas.remove(o);
        }
    });
    console.log(cardCanvas.getObjects().length)
    fabric.Image.fromURL(url, function(myImg) {
        var final_width =myImg.width;
        var final_height = myImg.height;
        var imageRatio = myImg.width/myImg.height;
        console.log(final_width,final_height,imageRatio);
        if(myImg.width>window.fullwidth){
            //final_width = max_w_pos
            final_height = final_width/ imageRatio;
        
        }
        final_width = cardCanvas.width;
        final_height = final_height/ imageRatio;
        var myImg = myImg.set({ id:"background_img",name:"Background Img",left: 0, top: 0 ,width:600,height:800,selectable: false});
        myImg.hoverCursor = 'default';
        cardCanvas.add(myImg); 
        cardCanvas.renderAll();
        console.log(cardCanvas.getObjects().length);
        /* cardCanvas.getObjects().forEach(function(o){
            if(o.id=="background_img"){
                cardCanvas.sendToBack(o);
            }
        }); */
    });
    cardCanvas.renderAll();
    console.log(cardCanvas.getObjects().length);
    
  }

  function addTexts(heading='Heading'){
    var text1 =  new fabric.Textbox(heading, {
        id:'heading',
        width: 600,
        top: 60,
        left: 0,
        fontSize: 25,
        textAlign: 'center',
        fixedWidth: 600,
        selectable: false
    });
      cardCanvas.add(text1);
  }

 