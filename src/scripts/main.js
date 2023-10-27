window.addEventListener("load", function () {
    // Elements
    var loader = document.querySelector(".loader")
    var object1 = document.querySelector('.object-1')
    var object2 = document.querySelector('.object-2')
    var textLoader = document.querySelector('.text-loader')
    var logo = document.querySelector('.img-logo')
    
    loader.classList.add('opacity-100')
    object1.classList.add('show')
    object2.classList.add('show')
    textLoader.classList.add('opacity-100')
    logo.classList.add('scale-100')
    
    setTimeout(function() {
        var content = document.getElementById("content");
        content.style.display = "block";
        loader.classList.remove('opacity-100')
        loader.classList.add('opacity-0')
        loader.classList.add('delay-300')
        setTimeout( () => {
            loader.style.display = "none"
        }, 1000)
    }, 1500);
    
});