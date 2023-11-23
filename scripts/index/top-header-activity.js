const topHeader = document.querySelector("#top-header");
const topHeaderBgImage = topHeader.querySelector("img#top-header__bg-image");
const imagesCount = parseInt(topHeaderBgImage.getAttribute("images"));

var currentImageNumber = 0;

const mainLoop = async () => {
    if(topHeaderBgImage instanceof Image) {
        const lowQualityClass = "low-quality-image";

        currentImageNumber += 1;
        if(currentImageNumber >= imagesCount) currentImageNumber = 0;

        var backgroundLoader = new Image();
        
        backgroundLoader.addEventListener("load", ()=>{
            topHeaderBgImage.addEventListener("load", ()=>topHeaderBgImage.classList.remove(lowQualityClass), {once:true});
            topHeaderBgImage.src = backgroundLoader.src;
            backgroundLoader = null;
        });

        backgroundLoader.src = "images/source/index/top-header/"+currentImageNumber.toString()+".jpg";

        await new Promise((resolve, reject)=>{
            topHeaderBgImage.classList.add(lowQualityClass);
            topHeaderBgImage.src = "images/low/index/top-header/"+currentImageNumber.toString()+".jpg";
            topHeaderBgImage.onload = ()=>resolve(null);
        });

        await topHeaderBgImage.animate(
            [
                {"transform":"scale(1.2)"},
                {"transform":"scale(1)"}
            ],
            {
                duration:8000
            }
        ).finished;

        
    }
};

setInterval(mainLoop, 8000);
mainLoop();