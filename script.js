let radio = document.querySelector('.manual-btn')
let cont = 1

document.getElementById('radio1').checked = true

setInterval(() => {
    nextImg()
}, 10000);

function nextImg(td) {
    cont++
    if (cont > 3) {
        cont = 1
    }

    document.getElementById('radio'+cont).checked = true
}