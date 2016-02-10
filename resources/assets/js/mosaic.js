var mobile_breakpoint = 767;

if(typeof mHeight === 'undefined'){
	mHeight = 80;
}

function mosaico()
{
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	// console.log("width = " + windowWidth + "px");
	// console.log("height = " + windowHeight + "px");
	var middleHeight;

	//90%
	var mosaicHeight = (windowHeight * mHeight)/100;
	// console.log("90% height = " + mH + "px"); 

	$('.mosaic-wrapper, .ver').css({
		height : mosaicHeight,
		width : windowWidth
	});

	$('.btn').css({
		"margin-top" : (mosaicHeight/2)-35
	});

	//top row 45%
	var topHeight = (mosaicHeight * 50)/100;
	//bottom row 55%
	var bottomHeight = (mosaicHeight * 50)/100;

	$('.top').css({
		width : windowWidth,
		height : topHeight
	});
	$('.bottom').css({
		width : windowWidth,
		height : bottomHeight
	});

	$('.one, .two, .three, .uno, .dos, .tres').css({
		height : topHeight
	});

	$('.four, .five, .six, .cuatro, .cinco, .seis').css({
		height : bottomHeight
	});

	if (windowWidth <= 768) {

		topHeight = (mosaicHeight * 30)/100;
		middleHeight = (mosaicHeight * 40)/100;

		$('.top, .bottom').css({
			height : topHeight
		});

		$('.middle').css({
			height : middleHeight
		});

		$('.one, .three, .five, .six, .uno, .tres, .cinco, .seis').css({
			height : topHeight
		});
		$('.three-sm').css({
			height : middleHeight
		});

	};
}

function backgroundCover(selector){
    $(selector).each(function(){

        var $container = $(this);
        var $container_width = $(this).outerWidth();
        var $container_height = $(this).outerHeight();

        var image_url = $container.css('background-image');
        var image;
        image_url = image_url.match(/^url\("?(.+?)"?\)$/);

        if (image_url[1]) {
            image_url = image_url[1];
            image = new Image();

            image.src = image_url;

            // just in case it is not already loaded
            $(image).load(function () {
                var cW = $container_width;
            var cH = $container_height;
            var iW = image.width;
            var iH = image.height;

            // If image is to narrow scale to match container width
            if (iW < cW) {
                var ratio = cW / iW;
                iW = cW;
                iH = iH * ratio;
            }

            // If image is too short scale to match container height
                if (iH < cH) {
                var ratio = cH / iH;
                iH = cH;
                iW = iW * ratio;
            }

            // If image is bigger in both dimensions scale down to match an edge
            if (iW > cW && iH > cH) {
                var widthRatio = cW / iW;
                var heightRatio = cH / iH;

                if (widthRatio > heightRatio) {
                    iW = cW;
                    iH = iH * widthRatio;
                } else {
                    iH = cH;
                    iW = iW * heightRatio;
                }
            }

            $container.css({ 
                    "background-size": iW+"px "+iH+"px"
                });
            });
        }
    });
}

var tiempo;
var tiempoTotal;

var index = 0;
var iindex = 0;
var cont = 7;
var totalImages = images.length;
var imgPerCont = Math.floor(totalImages/cont);
var imgModu = totalImages%cont;
var imagesArrayContainer = [];
var imgArray = getImagesArray();

function getImagesArray(){

	if (imagesArrayContainer.length == 0) {
		images = shuffle(images);

		for (var i = 0; i < cont; i++) {
			//imagesArrayContainer.push();
			var imgeArray = [];
			
			for (var j = 0; j < imgPerCont; j++) {
				imgeArray.push(images[index]);
				index++;
			}

			if (imgModu != 0) {
				imgeArray.push(images[index]);
				index++;
				imgModu--;
			};

			imagesArrayContainer.push(imgeArray);
		}
	}

	
	return imagesArrayContainer;

}

function shuffle(o){
   for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
   return o;
};

function fader(element){

	tiempo = element.attr('data-delay'); 

	//console.log(images);


	element.chickenDinner({
	   path: 'assets/mosaic/',
	   fadeInTime:2000,
	   cssBG: 'true',
	   delay: tiempo,
	   TheImages: imgArray[iindex],
	});

	//console.log(imgArray[iindex]);
	iindex++;
	if (iindex == imagesArrayContainer.length) {
		iindex = 0;
	};

	tiempoTotal = parseInt(tiempo) + 4000;

	backgroundCover(element);

	setTimeout(function(){
		fader(element);
	}, window.tiempoTotal);
}


$(function(){
	//console.log(imgModu);
	//console.log(images);	
	// console.log("Son " + images.length + " imagenes")
	mosaico();
	backgroundCover('.section-header');
	$('.mosaico').hide();
	$('.mosaico').each(function(){
		fader($(this));
	});
	
});

$(window).resize(function(){
	clearTimeout(timeOut);
	timeOut = setTimeout(function(){ 
		mosaico();
		backgroundCover('.mosaico');
		backgroundCover('.section-header');
	}, 300);
});