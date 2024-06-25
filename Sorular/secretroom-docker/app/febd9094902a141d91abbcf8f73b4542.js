/*
		Designed by: Jarlan Perez
		Original image: https://www.artstation.com/artwork/VdBllN

*/


const h = document.querySelector("#h");
const b = document.body;

let base = (e) => {
    var x = e.pageX / window.innerWidth - 0.5;
    var y = e.pageY / window.innerHeight - 0.5;
    h.style.transform = `
        perspective(90vw)
        rotateX(${ y * 4  + 75}deg)
        rotateZ(${ -x * 12  + 45}deg)
        translateZ(-9vw)
    `;
}

b.addEventListener("pointermove", base);

// Sayfa yüklendiğinde çalışacak olan kod bloğu
window.onload = function() {
    // Herhangi bir yere tıklanıldığında veya Ctrl + u tuşlarına basıldığında playAudio fonksiyonunu çağır
    document.addEventListener("click", playAudio);
    document.addEventListener("keydown", function(event) {
        if (event.ctrlKey && event.key === 'u') {
            playAudio();
        }
    });
};

// Ses dosyasını çalacak olan fonksiyon
function playAudio() {
    // Ses dosyasını oynat
    var audio = new Audio('29f480fd5b98de603ba4720efa8383ae.mp3');
    audio.play();
}
