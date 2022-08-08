$(document).ready(function () {
    var tl=new TimelineMax();
    tl.fromTo('.intro-title strong',1, {autoAlpha:0, y:-150},{autoAlpha:1, y:0})
    .fromTo('.services-intro p',1, {autoAlpha:0, y:150},{autoAlpha:1, y:0},"-=.5")
    .fromTo('.intro-title span',.3, {scale:0},{scale:1},"-=.5")
});

var tlBasic=new TimelineMax({paused:true});
tlBasic.fromTo('.clBasic',1,{drawSVG:"0%"},{drawSVG:"100%"})
//tlBasic.fromTo('.clGeneral',1,{drawSVG:"0%"},{drawSVG:"100%"},"-=1")
.staggerFromTo(".starter-anim",1,{autoAlpha:0,y:-100},{autoAlpha:1,y:0},.2,"-=.7")
.staggerFromTo(".general-anim",1,{autoAlpha:0,y:-100},{autoAlpha:1,y:0},.2,"-=1.4")
.fromTo('.c1',1,{scale:0,transformOrigin: 'center center'},{scale:1},"-=.5")
.fromTo('.c2',1,{scale:0,transformOrigin: 'center center'},{scale:1},"-=.5")
.fromTo('.c4',1,{scale:0,transformOrigin: 'center center'},{scale:1},"-=.5")
.fromTo('.c3',1,{drawSVG:"0%"},{drawSVG:"100%"},"-=.5");

var tlVip=new TimelineMax({paused:true});
tlVip.staggerFromTo('.vip-plans li',.8,{autoAlpha:0,y:-500} ,{autoAlpha:1,y:0} ,.2)
.fromTo('.clVip',1,{drawSVG:"0%"},{drawSVG:"100%"},"-=.3")
.fromTo('.cr1',1,{scale:0,transformOrigin: 'center center'},{scale:1},"-=.5")
.fromTo('.cr2',1,{scale:0,transformOrigin: 'center center'},{scale:1},"-=.5")
.fromTo('.cr4',1,{scale:0,transformOrigin: 'center center'},{scale:1},"-=.5")
.fromTo('.cr3',1,{drawSVG:"0%"},{drawSVG:"100%"},"-=.5")
.fromTo(".vip-detail",.7,{autoAlpha:0,x:-500} ,{autoAlpha:1,x:0},"-=3.5")

var scrollMagicControl = new ScrollMagic.Controller();
var scene1 = new ScrollMagic.Scene({ triggerElement: ".services-content",reverse: false})
.on("enter", function (){ tlBasic.play(); tlWavBasic.play();tllineBasic.play()})

var scene2 = new ScrollMagic.Scene({ triggerElement: ".vip-membership",reverse: false})
.on("enter", function(){ tlVip.play(); tlWavVip.play();tllineVip.play()})

scrollMagicControl.addScene([scene1,scene2]);

var tlWavVip=new TimelineMax({paused:true,yoyo:false, repeat:-1},4)
tlWavVip.fromTo('.cr3',3,{scale:0,transformOrigin: 'center center'},{scale:1})

var tlWavBasic=new TimelineMax({paused:true,yoyo:false, repeat:-1},4)
tlWavBasic.fromTo('.c3',3,{scale:0,transformOrigin: 'center center'},{scale:1})


var tllineBasic=new TimelineMax({paused:true,yoyo:false,repeat:-1,delay:5})
tllineBasic.fromTo('.clBasic',2,{drawSVG:"0% 100%"},{drawSVG:"100% 100%"})
.fromTo('.clBasic1',2,{drawSVG:"0%"},{drawSVG:"100%"},"-=1")


var tllineVip=new TimelineMax({paused:true,yoyo:false,repeat:-1,delay:5})
tllineVip.fromTo('.clVip',2,{drawSVG:"0% 100%"},{drawSVG:"100% 100%"})
.fromTo('.clVip1',2,{drawSVG:"0%"},{drawSVG:"100%"},"-=1")





