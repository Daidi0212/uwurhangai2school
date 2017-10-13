N2Require("SmartSliderWidgetArrowImage",[],[],function(e,i,t){function s(i,t,s,h){this.slider=window[i],this.slider.started(e.proxy(this.start,this,i,t,s,h))}return s.prototype.start=function(i,t,s,h){return this.slider.sliderElement.data("arrow")?!1:(this.slider.sliderElement.data("arrow",this),this.deferred=e.Deferred(),this.slider.sliderElement.on("SliderDevice",e.proxy(this.onDevice,this)).trigger("addWidget",this.deferred),this.previous=e("#"+i+"-arrow-previous").on("click",e.proxy(function(e){e.stopPropagation(),this.slider[nextend.rtl.previous]()},this)),this.previousResize=this.previous.find(".n2-resize"),0==this.previousResize.length&&(this.previousResize=this.previous),this.next=e("#"+i+"-arrow-next").on("click",e.proxy(function(e){e.stopPropagation(),this.slider[nextend.rtl.next]()},this)),this.nextResize=this.next.find(".n2-resize"),0==this.nextResize.length&&(this.nextResize=this.next),this.desktopRatio=t,this.tabletRatio=s,this.mobileRatio=h,void e.when(this.previous.n2imagesLoaded(),this.next.n2imagesLoaded()).always(e.proxy(this.loaded,this)))},s.prototype.loaded=function(){this.previousWidth=this.previousResize.width(),this.previousHeight=this.previousResize.height(),this.nextWidth=this.nextResize.width(),this.nextHeight=this.nextResize.height(),this.previousResize.find("img").css("width","100%"),this.nextResize.find("img").css("width","100%"),this.onDevice(null,{device:this.slider.responsive.getDeviceMode()}),this.deferred.resolve()},s.prototype.onDevice=function(e,i){var t=1;switch(i.device){case"tablet":t=this.tabletRatio;break;case"mobile":t=this.mobileRatio;break;default:t=this.desktopRatio}this.previousResize.width(this.previousWidth*t),this.previousResize.height(this.previousHeight*t),this.nextResize.width(this.nextWidth*t),this.nextResize.height(this.nextHeight*t)},s});
N2Require("SmartSliderWidgetThumbnailDefault",[],[],function(i,t,s){"use strict";function e(t,s){this.slider=window[t],this.slider.started(i.proxy(this.start,this,t,s))}return e.prototype.start=function(t,s){if(this.slider.sliderElement.data("thumbnail"))return!1;this.slider.sliderElement.data("thumbnail",this),this.parameters=i.extend({captionSize:0,minimumThumbnailCount:1.5,invertGroupDirection:0},s),this.ratio=1,this.hidden=!1,this.forceHidden=!1,this.forceHiddenCB=null,this.group=2,this.itemPerPane=1,this.currentI=0,this.offset=0,this.horizontal={prop:"width",Prop:"Width",sideProp:nextend.rtl.left,invProp:"height"},this.vertical={prop:"height",Prop:"Height",sideProp:"top",invProp:"width"},this.group=parseInt(s.group),this.orientation=s.orientation,"vertical"==this.orientation&&(this.goToDot=this._goToDot),this.outerBar=this.slider.sliderElement.find(".nextend-thumbnail-default"),this.bar=this.outerBar.find(".nextend-thumbnail-inner"),this.scroller=this.bar.find(".nextend-thumbnail-scroller");var e="universalclick";if("mouseenter"==s.action&&(e="mouseenter"),this.dots=this.scroller.find("> div").on(e,i.proxy(this.onDotClick,this)),this.images=this.dots.find(".n2-ss-thumb-image"),nextend.rtl.isRtl?(this.previous=this.outerBar.find(".nextend-thumbnail-next").on("click",i.proxy(this.previousPane,this)),this.next=this.outerBar.find(".nextend-thumbnail-previous").on("click",i.proxy(this.nextPane,this))):(this.previous=this.outerBar.find(".nextend-thumbnail-previous").on("click",i.proxy(this.previousPane,this)),this.next=this.outerBar.find(".nextend-thumbnail-next").on("click",i.proxy(this.nextPane,this))),this.slider.isShuffled){for(var o=0;o<this.slider.realSlides.length;o++){var r=this.slider.realSlides[o];this.dots.eq(r.originalIndex).appendTo(this.scroller)}this.dots=this.scroller.find("> div")}if(this.thumbnailDimension={width:this.dots.outerWidth(!0),height:this.dots.outerHeight(!0)},this.thumbnailDimension.widthMargin=this.thumbnailDimension.width-this.dots.outerWidth(),this.thumbnailDimension.heightMargin=this.thumbnailDimension.height-this.dots.outerHeight(),this.imageDimension={width:this.images.outerWidth(!0),height:this.images.outerHeight(!0)},this.sideDimension=.25*this.thumbnailDimension[this[this.orientation].prop],"horizontal"==this.orientation?(this.scroller.height(this.thumbnailDimension.height*this.group),this.bar.height(this.scroller.outerHeight(!0))):(this.scroller.width(this.thumbnailDimension.width*this.group),this.bar.width(this.scroller.outerWidth(!0))),this.slider.sliderElement.on({BeforeVisible:i.proxy(this.onReady,this),sliderSwitchTo:i.proxy(this.onSlideSwitch,this)}),this.slider.firstSlideReady.done(i.proxy(this.onFirstSlideSet,this)),0==s.overlay){var h=!1;switch(s.area){case 1:h="Top";break;case 12:h="Bottom";break;case 5:h="Left";break;case 8:h="Right"}h&&(this.offset=parseFloat(this.outerBar.data("offset")),this.slider.responsive.addStaticMargin(h,this))}},e.prototype.onFirstSlideSet=function(i){this.activateDots(i.index),this.goToDot(i.index)},e.prototype.onReady=function(){this.slider.sliderElement.on("SliderResize",i.proxy(this.onSliderResize,this)),this.onSliderResize()},e.prototype.onSliderResize=function(){null!==this.forceHiddenCB&&this.forceHiddenCB.call(this),this.adjustScrollerSize();var i=this.slider.currentSlide.index;this.activateDots(i),this.goToDot(i)},e.prototype.adjustScrollerSize=function(){var i=this[this.orientation].prop,t=Math.ceil(this.dots.length/this.group)*this.thumbnailDimension[i]*this.ratio,s=this.scroller["outer"+this[this.orientation].Prop]()-this.scroller[i](),e=this.slider.dimensions["thumbnail"+i];e>=t+s?this.scroller[i](e-s):this.scroller[i](t),"horizontal"==this.orientation?this.scroller.height(this.dots.outerHeight(!0)*this.group):this.scroller.width(this.dots.outerWidth(!0)*this.group)},e.prototype.onDotClick=function(i){this.slider.directionalChangeToReal(this.dots.index(i.currentTarget))},e.prototype.onSlideSwitch=function(i,t,s){this.activateDots(t),this.goToDot(s)},e.prototype.activateDots=function(i){this.dots.filter(".n2-active").removeClass("n2-active");for(var t=this.slider.slides[i].slides,s=0;s<t.length;s++)this.dots.eq(t[s].index).addClass("n2-active")},e.prototype.previousPane=function(){this.goToDot(this.currentI-this.itemPerPane*this.group)},e.prototype.nextPane=function(){this.goToDot(this.currentI+this.itemPerPane*this.group)},e.prototype.goToDot=function(i){var t=this[this.orientation],s=1,e=this.slider.dimensions["thumbnail"+t.prop],o=this.sideDimension,r=e-2*o,h=r/this.thumbnailDimension[t.prop];if(h<=this.parameters.minimumThumbnailCount&&(o=.1*e,r=e-2*o,s=r/(this.parameters.minimumThumbnailCount*this.thumbnailDimension[t.prop]),h=r/(this.thumbnailDimension[t.prop]*s)),this.ratio!=s){var n={};n[t.prop]=parseInt(this.thumbnailDimension[t.prop]*s-this.thumbnailDimension[t.prop+"Margin"]);n[t.invProp]=parseInt((this.thumbnailDimension[t.invProp]-this.parameters.captionSize-this.thumbnailDimension[t.prop+"Margin"])*s+this.parameters.captionSize);this.dots.css(n),n={},n[t.prop]=parseInt(this.imageDimension[t.prop]*s),n[t.invProp]=parseInt(this.imageDimension[t.invProp]*s),this.images.css(n),this.bar.css(t.invProp,"auto"),this.ratio=s,this.slider.responsive.doNormalizedResize(),this.adjustScrollerSize()}h=Math.floor(h),i=Math.max(0,Math.min(this.dots.length-1,i));var a,l={};a=this.parameters.invertGroupDirection?Math.floor(i%Math.ceil(this.dots.length/this.group)/h):Math.floor(i/this.group/h);var d=-(this.scroller["outer"+t.Prop]()-e);a==Math.floor((this.dots.length-1)/this.group/h)?(l[t.sideProp]=-(a*h*this.thumbnailDimension[t.prop]*s),0==a?this.previous.removeClass("n2-active"):this.previous.addClass("n2-active"),this.next.removeClass("n2-active")):a>0?(l[t.sideProp]=-(a*h*this.thumbnailDimension[t.prop]*s-o),this.previous.addClass("n2-active"),this.next.addClass("n2-active")):(l[t.sideProp]=0,this.previous.removeClass("n2-active"),this.next.addClass("n2-active")),d>=l[t.sideProp]&&(l[t.sideProp]=d,this.next.removeClass("n2-active")),NextendTween.to(this.scroller,.5,l).play(),this.currentI=i,this.itemPerPane=h},e.prototype._goToDot=function(t){if(!this.forceHidden){var s=this[this.orientation],e=this.slider.dimensions["thumbnail"+s.prop],o=(e-2*this.sideDimension)/this.thumbnailDimension[s.prop];if(0!=e&&o<this.parameters.minimumThumbnailCount-.5?this.hidden||("horizontal"==this.orientation?this.outerBar.css("height",0):this.outerBar.css("width",0),this.hidden=!0,this.forceHidden=!0,setTimeout(i.proxy(function(){this.forceHiddenCB=function(){this.forceHiddenCB=null,this.forceHidden=!1}},this),300),this.slider.responsive.doNormalizedResize()):this.hidden&&o>=this.parameters.minimumThumbnailCount+.5&&(this.hidden=!1,"horizontal"==this.orientation?this.outerBar.css("height",""):this.outerBar.css("width",""),this.slider.responsive.doNormalizedResize()),!this.hidden){o=Math.floor(o),t=Math.max(0,Math.min(this.dots.length-1,t));var r,h={};r=this.parameters.invertGroupDirection?Math.floor(t%Math.ceil(this.dots.length/this.group)/o):Math.floor(t/this.group/o);var n=-(this.scroller["outer"+s.Prop]()-e);r==Math.floor((this.dots.length-1)/this.group/o)?(h[s.sideProp]=-(r*o*this.thumbnailDimension[s.prop]),0==r?this.previous.removeClass("n2-active"):this.previous.addClass("n2-active"),this.next.removeClass("n2-active")):r>0?(h[s.sideProp]=-(r*o*this.thumbnailDimension[s.prop]-this.sideDimension),this.previous.addClass("n2-active"),this.next.addClass("n2-active")):(h[s.sideProp]=0,this.previous.removeClass("n2-active"),this.next.addClass("n2-active")),n>=h[s.sideProp]&&(h[s.sideProp]=n,this.next.removeClass("n2-active")),NextendTween.to(this.scroller,.5,h).play()}this.currentI=t,this.itemPerPane=o}},e.prototype.isVisible=function(){return this.outerBar.is(":visible")},e.prototype.getSize=function(){return"horizontal"==this.orientation?this.outerBar.height()+this.offset:this.outerBar.width()+this.offset},e});
