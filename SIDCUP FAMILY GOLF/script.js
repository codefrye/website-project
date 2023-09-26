var csr =document.querySelector("#cursor")
var blr =document.querySelector("#blurr-cursor")
document.addEventListener("mousemove",function(dets){
    csr.style.left=dets.x+30+"px"
    csr.style.top=dets.y+"px"
    blr.style.left=dets.x-250 +"px"
    blr.style.top=dets.y-250+"px"
    
})
var h4all= document.querySelectorAll("#nav h4")
h4all.forEach(function(elem) {
  elem.addEventListener("mouseenter",function(){
    csr.style.scale=3
    csr.style.border="1px solid #fff"
    csr.style.backgroundColor="transparent"
  })
  elem.addEventListener("mouseleave",function(){
    csr.style.scale=1
    csr.style.border="0px solid #95C11E"
    csr.style.backgroundColor="#95C11E"
  })
});

gsap.to("#nav", {
  backgroundColor: "#000",
  duration: 0.5,
  height: "100px",
  scrollTrigger: {
    trigger: "#nav",
    scroller: "body",
    // markers: true,
    start: "top -10%",
    end: "top -11%",
    scrub: 2,
  },
});

gsap.to("#main", {
    backgroundColor: "#000",
    scrollTrigger: {
      trigger: "#main",
      scroller:"body",
    //   markers: true,
      start:"top -25%",
      end:"top -80%",
      scrub:2,
    },
  });

gsap.from("#aboutus img,#about-us-in",{
  y:50,
  opacity:0,
  duration:1,
  stagger:0.4,
  scrollTrigger:{
    trigger:"#aboutus",
    scroller:"body",
    start:"top 60%",
    end:"top 55%",
    scrub:2
}
  })

  gsap.from(".card",{
    scale:0.8,
    opacity:0,
    duration:1,
    stagger:0.1,
    scrollTrigger:{
      trigger:".card",
      scroller:"body",
      start:"top 70%",
      end:"top 65%",
      scrub:2
  }
    })  
   
    gsap.from("#colon1",{
      y:-70,
      x:-70,
      scrollTrigger:{
        trigger:"#colon1",
        scroller:"body",
        start:"top 60%",
        end:"top 45%",
        scrub:2
    }
      })    
    gsap.from("#colon2",{
      y:-70,
      x:-70,
      scrollTrigger:{
        trigger:"#colon2",
        scroller:"body",
        start:"top 60%",
        end:"top 45%",
        scrub:2
    }
      })   
      
gsap.from("#page4 h1",{
  y:50,
  scrollTrigger:{
    trigger:"#page4 h1",
    scroller:"body",
    start:"top 100%",
    end:"top 70%",
    scrub:3
}

})