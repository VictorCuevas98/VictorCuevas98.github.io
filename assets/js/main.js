    function reproducir(){
        var video = document.getElementById('bg-video');
        video.play();
    }

    window.addEventListener('load', reproducir, false);

   /* boton de cerrar */
   $(function () {
        $("[alt='tooltip']").tooltip();
    });

    $(".btn-close").mouseover(function(){
        gsap.to(".btn-close",{duration:0.7, rotation: 360, scale: 1.2});
    });

    $(".btn-close").mouseleave(function(){
        gsap.to(".btn-close",{duration:0.7, rotation: 0, scale: 1.2});
    });

    /*Animacion principal */
    gsap.set(".cls-1", {visibility:"visible"});
    gsap.set(".cls-2", {visibility:"visible"});
    gsap.from(".pluma",{duration: 3, opacity: 0});
    //gsap.from(".cls-1",{duration: 5, drawSVG:0, ease:"power1.inOut", delay:1});
    //gsap.from(".cls-2",{duration: 5, drawSVG:0, ease:"power1.inOut", delay:1});
    gsap.to(".pluma2", {duration: 5, x: 1000, opacity: 0 , ease: "slow (0.3, 2, false)", delay: 2});
    gsap.to(".pluma1", {duration: 5, x: -1000, opacity: 0 , ease: "slow (0.1, 0.1, false)", delay: 2});
    
    let tl = gsap.timeline({delay: 4})
    .to("#text2", {duration:2, text: "Ing. Victor Cuevas"})
    .to("#text2",{duration:1, y:40, ease:"slow"})
    .from("#text1",{duration:1, y:-40, ease:"slow"},"-=1")
    .to("#text1",{duration:3, text: " Bienvenido al Curso de Subestaciones"});


    gsap.to("#bg-video",{duration:2, opacity: 0.2, delay:8});


    const lt = gsap.timeline({repeat:10, repeatDelay:2, yoyo:true, delay: 6});
    lt.to(".terminal", {duration: 4, text: ">_ Proccesses: 2010 total, 2 running, 9 stuck, 199 sleeping, 981 theads"})
    .to(".terminal", {duration: 4, text: ">_ Load Avg: 1.40, 1.75, 1.99 CPU usage: 4.15% user, 4.40% sys, 91.44% idle"})
    .to(".terminal", {duration: 3, text: ">_ SharedLibs: 1648K resident, 60 data, 80 linkedit."})
    .to(".terminal", {duration: 4, text: ">_ MemRegions: 31278 total, 1892M resident, 117 private, 564M shared."})
    .to(".terminal", {duration: 3, text: ">_ OhysMem: 5893M used (1191M wired). 18G unused."});