$(document).ready(function(){
    window.canvas = new fabric.Canvas('card_canvas');
    var url = $('#card_canvas').attr('data-src');
    addImage(url);
   /* texts code */
   fabric.Object.prototype.transparentCorners = false;
   fabric.Object.prototype.padding = 5;
   
    $('#add_text').on('click',function(){
        $(this).toggleClass('active');
    })
    $('#removeButton').on('click',function(){
        canvas.getActiveObject().remove()  ;  
    })

    canvas.on('mouse:down', function(options) {
        var a = options.e.offsetX-35;
        var b = options.e.offsetY-15;
        if (options.target.type =='image' && $('#add_text').hasClass('active')) {
            Addtext(a,b);
        }
    });
    
    document.getElementById('text-color').onchange = function() {
            canvas.getActiveObject().setFill(this.value);
            canvas.renderAll();
        };
    document.getElementById('text-color').onchange = function() {
            canvas.getActiveObject().setFill(this.value);
            canvas.renderAll();
        };
        
        document.getElementById('text-bg-color').onchange = function() {
            canvas.getActiveObject().setBackgroundColor(this.value);
            canvas.renderAll();
        };
        
        document.getElementById('text-lines-bg-color').onchange = function() {
            canvas.getActiveObject().setTextBackgroundColor(this.value);
            canvas.renderAll();
        };

        document.getElementById('text-stroke-color').onchange = function() {
            canvas.getActiveObject().setStroke(this.value);
            canvas.renderAll();
        };	

        document.getElementById('text-stroke-width').onchange = function() {
            canvas.getActiveObject().setStrokeWidth(this.value);
            canvas.renderAll();
        };				
    
        document.getElementById('font-family').onchange = function() {
            canvas.getActiveObject().setFontFamily(this.value);
            canvas.renderAll();
        };
        
        document.getElementById('text-font-size').onchange = function() {
            canvas.getActiveObject().setFontSize(this.value);
            canvas.renderAll();
        };
        
        document.getElementById('text-line-height').onchange = function() {
            canvas.getActiveObject().setLineHeight(this.value);
            canvas.renderAll();
        };
        
        document.getElementById('text-align').onchange = function() {
            canvas.getActiveObject().setTextAlign(this.value);
            canvas.renderAll();
        };
        
    
    radios5 = document.getElementsByName("fonttype");  // wijzig naar button
    for(var i = 0, max = radios5.length; i < max; i++) {
        radios5[i].onclick = function() {
            
            if(document.getElementById(this.id).checked == true) {
                if(this.id == "text-cmd-bold") {
                    canvas.getActiveObject().set("fontWeight", "bold");
                }
                if(this.id == "text-cmd-italic") {
                    canvas.getActiveObject().set("fontStyle", "italic");
                }
                if(this.id == "text-cmd-underline") {
                    canvas.getActiveObject().set("textDecoration", "underline");
                }
                if(this.id == "text-cmd-linethrough") {
                    canvas.getActiveObject().set("textDecoration", "line-through");
                }
                if(this.id == "text-cmd-overline") {
                    canvas.getActiveObject().set("textDecoration", "overline");
                }
                
                
                
            } else {
                if(this.id == "text-cmd-bold") {
                    canvas.getActiveObject().set("fontWeight", "");
                }
                if(this.id == "text-cmd-italic") {
                    canvas.getActiveObject().set("fontStyle", "");
                }  
                if(this.id == "text-cmd-underline") {
                    canvas.getActiveObject().set("textDecoration", "");
                }
                if(this.id == "text-cmd-linethrough") {
                    canvas.getActiveObject().set("textDecoration", "");
                }  
                if(this.id == "text-cmd-overline") {
                    canvas.getActiveObject().set("textDecoration", "");
                }
            }
            
            
            canvas.renderAll();
        }
    }
     
   /* texts code */    


   /* image uploader */
   document.getElementById('uploadedImg').onchange = function handleImage(e) {
    var reader = new FileReader();
      reader.onload = function (event){
        var imgObj = new Image();
        imgObj.src = event.target.result;
        imgObj.onload = function () {
          var image = new fabric.Image(imgObj);
          image.set({
                angle: 0,
                padding: 10,
                cornersize:10,
                height:110,
                width:110,
          });
          canvas.centerObject(image);
          canvas.add(image);
          canvas.setActiveObject(image);
          canvas.renderAll();
        }
      }
      reader.readAsDataURL(e.target.files[0]);
    }

   /* image uploader */
});
    




function addImage(url){
    canvas.getObjects().forEach(function(o){
        if(o.id=="background_img"){
            canvas.remove(o);
        }
    });
    console.log(canvas.getObjects().length)
    fabric.Image.fromURL(url, function(myImg) {
        var final_width =myImg.width;
        var final_height = myImg.height;
        var imageRatio = myImg.width/myImg.height;
        console.log(final_width,final_height,imageRatio);
        if(myImg.width>window.fullwidth){
            //final_width = max_w_pos
            final_height = final_width/ imageRatio;
        
        }
        final_width = canvas.width;
        final_height = final_height/ imageRatio;
        var myImg = myImg.set({ id:"background_img",name:"Background Img",left: 0, top: 0 ,width:400,height:600,selectable: false});
        myImg.hoverCursor = 'default';
        canvas.add(myImg); 
        canvas.renderAll();
        console.log(canvas.getObjects().length);
        /* cardCanvas.getObjects().forEach(function(o){
            if(o.id=="background_img"){
                cardCanvas.sendToBack(o);
            }
        }); */
    });
    canvas.renderAll();
    console.log(canvas.getObjects().length);
    
  }

function addTexts(heading='Heading',width){
    var o = {
        id:'heading',
        width: 400,
        top: 60,
        left: 7,
        fontSize: 25,
        textAlign: 'center',
        fixedWidth: 400,
        selectable: false
    };
    if(width){
        if (width > o.fixedWidth) {
            o.fontSize *= o.fixedWidth / (width + 50);
            o.width = o.fixedWidth;
        }
    }

    var text1 =  new fabric.Textbox(heading, o);
    cardCanvas.add(text1);
    
}
var ID = function () {
    return '_' + Math.random().toString(36).substr(2, 9);
  };

function Addtext(a,b) { 
    var id = ID();
    var o = new fabric.IText('Sample', { 
        left: a,
        top: b,
        fontFamily: 'arial black',
        fill: $('#text-color').val(),
        fontSize: 20,
        id:id,
    });
    canvas.add(o);
    canvas.bringToFront(o);
    canvas.setActiveObject(o);
    o.selectAll();
    o.enterEditing()
    //o.hiddenTextarea.focus();
    $('#add_text').removeClass('active');
}



 