const wraper = document.querySelector(".wraper"),
    carousel = document.querySelector(".carousel"),
    images = document.querySelectorAll("img"),
    buttons = document.querySelectorAll(".button");

let imageIndex = 1,
    intervalid;

// Define function the start automatic image slider
const autoSlide = () => {
    // Start the slideshow by calling slideImage() every 2 seconds
    intervalid = setInterval(() => slideImage(++imageIndex), 2000);
};
// call autoSlide function on page load
autoSlide();
// A function that updates the carousel display to show the specified image
const slideImage = () => {
    // Update the carousel display to show the specified image
    carousel.style.transform = "translate(-${imageIndex * 100}%)";
};
