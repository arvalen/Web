const parallax_el = document.querySelectorAll(".parallax");

let xValue = 0, yValue = 0;
let rotateDegree = 0;

function update(cursorPosition){

    parallax_el.forEach(el => {
        let speedx = el.dataset.speedx;
        let speedy = el.dataset.speedy;
        let speedz = el.dataset.speedz;

        let isInLeft =
            parseFloat(getComputedStyle(el).left) < window.innerWidth / 2 ? 1 : -1;
        let zValue = 
            (cursorPosition - parseFloat(getComputedStyle(el).left)) * isInLeft * 0.1;
        
        el.style.transform = 
        `perspective(2300px)
        translateX(calc(-50% + ${-xValue * speedx}px)) 
        translateY(calc(-50% + ${yValue * speedy}px)) 
        translateZ(${zValue * speedz}px)
        rotateY(${rotateDegree}deg)`;

    });
}

update(0);

window.addEventListener("mousemove", (e) => {
    if (timeline.isActive()) return;

    xValue = e.clientX - window.innerWidth / 2;
    yValue = e.clientY - window.innerHeight / 2;
    rotateDegree = (xValue / (window.innerWidth / 2)) * 8;

    update(e.clientX);
});


let timeline = gsap.timeline();

timeline.from(".1jauh",{
    top: `${+document.querySelector(".1jauh").offsetHeight / 2 - 100}px`,
    duration: 1,
});

timeline.from(".1sekitar",{
    top: `${+document.querySelector(".1sekitar").offsetHeight / 0.012}px`,
    duration: 1,
});

timeline.from(
    ".text h1",
    {
        y:
            window.innerHeight - 
            document.querySelector(".text h1").getBoundingClientRect().top + 150,
        duration: 1,
    },
    "1.5"
)
.from(".text h2",
    {
        y: - 100,
        opacity: 0,
        duration: 1,
    },
    "1.5"
)

.from(".hide",
    {
        opacity: 0,
        duration: 1,
    },
    "1.5"
);
