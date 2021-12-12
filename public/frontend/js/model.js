//=============  show images and play a video popup  ==============// 
const allImg = Array.from(document.querySelectorAll('.gallary__data img'));
const allVideosLink = Array.from(document.querySelectorAll('.gallary__data span'));
const myModel = document.querySelector('.model__gallary');
const myModelVideo = document.querySelector('.model__gallary-vidoes');
const imgModel = document.querySelector('.model__gallary-img img');
const vidModel = document.querySelector('.model__gallary-vid video');
const closeModel1 = document.getElementById('btn__close-model-1');
const closeModel2 = document.getElementById('btn__close-model-2');
const prevModel = document.getElementById('btn__prev-model');
const nextModel = document.getElementById('btn__next-model');
var currentIndex = 0;

allImg.forEach(img => {
    img.addEventListener('click' , showBoxModel)
    function showBoxModel (e) {
        let imgSrc = e.target.src;
        myModel.style.display = "flex";
        imgModel.src = imgSrc;
        currentIdex = allImg.indexOf(e.target)
    }
});

allVideosLink.forEach( videoLink => {
    videoLink.addEventListener("click" , () => {
        // const link = "assets/images/video/جمعية المتقاعدين بمنطقة نجران.mkv";
        const link = videoLink.target
        console.log(link);
        myModelVideo.style.display = "flex";
        vidModel.firstElementChild.src = link;
    })
} )


closeModel1.addEventListener('click' , () => {
    myModel.style.display = "none";
});
closeModel2.addEventListener('click' , () => {
    myModelVideo.style.display = "none";
});
nextModel.addEventListener('click' , nextBtn);
prevModel.addEventListener('click' , prevBtn);


function nextBtn() {
    imgModel.src = allImg[currentIndex].src;
    currentIndex++;
    if (currentIndex == allImg.length) {
        currentIndex = 0;
    }
}
function prevBtn() {
    imgModel.src = allImg[currentIndex].src;
    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = allImg.length-1;
    }
}


document.addEventListener("keydown" , function(e) {
    if(e.key == 39)
    {
        nextModel();
    } 
    else if(e.key == 37)
    {
        prevModel();
    }
    else if(e.key == 32)
    {
        closeModels();
    }
});
//=============  play a video popup  ==============// 