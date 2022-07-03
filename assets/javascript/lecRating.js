


const meanRating = document.querySelector(`.meanRating`);
const meanRatingValue = meanRating.innerHTML;

if (meanRatingValue < 40 ) {
    meanRating.style.color = "#DF1515";
} else if (meanRatingValue < 70 ) {
    meanRating.style.color = "#F2DC15";
} else {
    meanRating.style.color = "#42E20A";
}


const ratingBox = document.querySelectorAll(`.usersRating`);
ratingBox.forEach((box)=> {
    const ratingScore = box.innerHTML;
    
    if (ratingScore < 40) {
        box.style.backgroundColor = "#520000"
    } else if (ratingScore < 70) {
        box.style.backgroundColor = "#BEAC0B"
    } else {
        box.style.backgroundColor = "#003411"
    }
});

