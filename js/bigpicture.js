let main = document.getElementById("main-banner")
let main2 = document.getElementById("main-banner-2")
let main3 = document.getElementById("main-banner-3")

let gallery_images = document.getElementsByClassName("gallery-item");


for (let element of gallery_images) {
    let image_element = element.getElementsByTagName('img')[0]
    element.addEventListener('click', () => {
        console.log({image_element}, image_element.getAttribute('data-bp'))
        BigPicture({
            el: element,
            imgSrc: image_element.getAttribute('data-bp'),
            // gallery: '#image_container'
        })
        // BigPicture({
        //     el: element,
        //     imgSrc: image_element.getAttribute('data-bp'),
        //     gallery: '#image_container',
        // })
    })
};

function openPreview (url, element) {
    BigPicture({
        el: element,
        imgSrc: url
    })
}