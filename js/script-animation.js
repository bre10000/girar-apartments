var tl = new TimelineLite;

tl.from('.main-banner', 1, { opacity: 0, ease: "power1.inOut" });
tl.staggerFrom('.reveal span', 1.5, { opacity: 0, y: 320, ease: "power1.inOut" }, 0.2);

tl.restart();


// var s = new Siema({
//   selector: '.siema',
//   duration: 500,
//   easing: 'ease-out',
//   perPage: 1,
//   startIndex: 0,
//   draggable: false,
//   multipleDrag: true,
//   threshold: 20,
//   loop: true,
// });

// setInterval(() => {
//   s.next();
// }, 5000);



let timelineApartments = gsap.timeline({
  // yes, we can add it to an entire timeline!
  scrollTrigger: {
    trigger: ".trigger1",
    //   pin: true,   // pin the trigger element while active
    start: "top bottom", // when the top of the trigger hits the top of the viewport
    end: "+=300", // end after scrolling 500px beyond the start
    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
    snap: {
      snapTo: "labels", // snap to the closest label in the timeline
      duration: { min: 0.5, max: 3 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
      delay: .5, // wait 0.2 seconds from the last scroll event before doing the snapping
      ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
    }
  }
});

// add animations and labels to the timeline
timelineApartments.addLabel("start")
  .from(".apartments", { scale: 0.4, autoAlpha: 0 })
  .to(".reveal", { scale: 0.8, autoAlpha: .2, transformOrigin: "0 0" }, "-=1")
  .to(".main-banner", { scale: 1.05, transformOrigin: "center center" }, "-=1")
  .addLabel("end")






let timelineArea = gsap.timeline({
  // yes, we can add it to an entire timeline!
  scrollTrigger: {
    trigger: ".trigger2",
    //   pin: true,   // pin the trigger element while active
    start: "top bottom", // when the top of the trigger hits the top of the viewport
    end: "+=300", // end after scrolling 500px beyond the start
    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
    snap: {
      snapTo: "labels", // snap to the closest label in the timeline
      duration: { min: 0.5, max: 3 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
      delay: .5, // wait 0.2 seconds from the last scroll event before doing the snapping
      ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
    }
  }
});

// add animations and labels to the timeline
timelineArea.addLabel("start")
  .from(".area", { scale: 0.4, autoAlpha: 0 })
  .addLabel("end")








let timelineParking = gsap.timeline({
  // yes, we can add it to an entire timeline!
  scrollTrigger: {
    trigger: ".trigger3",
    //   pin: true,   // pin the trigger element while active
    start: "top bottom", // when the top of the trigger hits the top of the viewport
    end: "+=300", // end after scrolling 500px beyond the start
    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
    snap: {
      snapTo: "labels", // snap to the closest label in the timeline
      duration: { min: 0.5, max: 3 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
      delay: .5, // wait 0.2 seconds from the last scroll event before doing the snapping
      ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
    }
  }
});

// add animations and labels to the timeline
timelineParking.addLabel("start")
  .from(".parking", { scale: 0.4, autoAlpha: 0 })
  .addLabel("end")



let timelineView = gsap.timeline({
  // yes, we can add it to an entire timeline!
  scrollTrigger: {
    trigger: ".trigger4",
    pin: true,   // pin the trigger element while active
    start: "top top", // when the top of the trigger hits the top of the viewport
    end: "+=700", // end after scrolling 500px beyond the start
    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
    snap: {
      snapTo: "labels", // snap to the closest label in the timeline
      duration: { min: 0.5, max: 3 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
      delay: .5, // wait 0.2 seconds from the last scroll event before doing the snapping
      ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
    }
  }
});

// add animations and labels to the timeline
timelineView.addLabel("start")
  .to(".panorama-view", { autoAlpha: 1 })
  .addLabel("end345q")
  .from(".panorama-view", 7, { scale: 1.3, autoAlpha: 1, ease: "power1.inOut" })
  .addLabel("end")
  .from(".living-room", 7, { scale: 3.8, autoAlpha: 0, ease: "power1.inOut" }, "-=7")
  .addLabel("end24")
  .to(".panorama-view", { autoAlpha: 1 })
  .addLabel("end")
  .to(".panorama-view", { autoAlpha: 1 })
  .addLabel("end")
  .to(".panorama-view", { autoAlpha: 1 })
  .addLabel("end")
  .to(".panorama-view", { autoAlpha: 1 })
  .addLabel("end")



let timelineViewText = gsap.timeline({
  // yes, we can add it to an entire timeline!
  scrollTrigger: {
    trigger: ".trigger5",
    //   pin: true,   // pin the trigger element while active
    start: "top bottom", // when the top of the trigger hits the top of the viewport
    end: "+=300", // end after scrolling 500px beyond the start
    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
    snap: {
      snapTo: "labels", // snap to the closest label in the timeline
      duration: { min: 0.5, max: 3 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
      delay: .5, // wait 0.2 seconds from the last scroll event before doing the snapping
      ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
    }
  }
});

// add animations and labels to the timeline
timelineViewText.addLabel("start")
  .from('.view-text-desc', 3, { opacity: 0, y: 100, ease: "power1.inOut" })
  .addLabel("middle")
  .staggerFrom('.reveal-2 span', 3, { opacity: 0, y: 320, ease: "power1.inOut" }, 0.2);




let timelineMap = gsap.timeline({
  // yes, we can add it to an entire timeline!
  scrollTrigger: {
    trigger: ".trigger6",
    pin: true,   // pin the trigger element while active
    start: "top top", // when the top of the trigger hits the top of the viewport
    end: "+=700", // end after scrolling 500px beyond the start
    scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
    snap: {
      snapTo: "labels", // snap to the closest label in the timeline
      duration: { min: 0.5, max: 3 }, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
      delay: .5, // wait 0.2 seconds from the last scroll event before doing the snapping
      ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
    }
  }
});

// add animations and labels to the timeline
timelineMap.addLabel("start")
  .to(".panorama-view", { autoAlpha: 1 })
  .addLabel("middle345")
  .from('#map-image', 15, { autoAlpha: 0.5, scale: 1.05, ease: "power1.inOut" })
  .addLabel("middle76")
  .staggerFrom('.reveal-3 span', 15, { opacity: 0, y: 320, ease: "power1.inOut" }, 0.2)
  .addLabel("middle56")
  .from('.reveal-4', 3, { autoAlpha: 0, y: 20, ease: "power1.inOut" })
  .addLabel("middle5")
  .staggerFrom('#mapPath path', 35, { "stroke-dashoffset": 2500, ease: "power1.inOut" }, 0.5)
  .addLabel("middle34")
  .from("#labels", 15, { autoAlpha: 0, y: -20, scale: 0.95, ease: "power1.inOut" })
  .addLabel("end34")
  .to(".panorama-view", 5, { autoAlpha: 1 })
  .addLabel("end");


