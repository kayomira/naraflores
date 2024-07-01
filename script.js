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

function validateForm() {
    var x = document.forms["formdproduto"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
}


function addchart() {
    if (confirm('Você deseja adicionar este item ao carrinho?') == true){
    alert('O item foi adicionado ao carrinho com sucesso!')
    } else {}
}

  function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){  
    var sep = 0;  
    var key = '';  
    var i = j = 0;  
    var len = len2 = 0;  
    var strCheck = '0123456789';  
    var aux = aux2 = '';  
    var whichCode = (window.Event) ? e.which : e.keyCode;  
    if (whichCode == 13 || whichCode == 8) return true;  
    key = String.fromCharCode(whichCode); // Valor para o código da Chave  
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida  
    len = objTextBox.value.length;  
    for(i = 0; i < len; i++)  
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;  
    aux = '';  
    for(; i < len; i++)  
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);  
    aux += key;  
    len = aux.length;  
    if (len == 0) objTextBox.value = '';  
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;  
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;  
    if (len > 2) {  
        aux2 = '';  
        for (j = 0, i = len - 3; i >= 0; i--) {  
            if (j == 3) {  
                aux2 += SeparadorMilesimo;  
                j = 0;  
            }  
            aux2 += aux.charAt(i);  
            j++;  
        }  
        objTextBox.value = '';  
        len2 = aux2.length;  
        for (i = len2 - 1; i >= 0; i--)  
        objTextBox.value += aux2.charAt(i);  
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);  
    }  
    return false;  
}  

// CONTADOR

function vapo() {
    const value = document.getElementById('value');
    const plusB = document.getElementById('plus');
    const lessB = document.getElementById('less');
    const valorunitario = document.getElementById('precounitario');

    let unitario = parseFloat(valorunitario.innerHTML);

    const change = document.querySelector('.change');
    let valorChange = parseFloat(change.innerHTML);

    let valor = parseInt(value.innerHTML, 10);

    const quantity = document.getElementById('quantity');
    const subtotal = document.getElementById('subtotal');
    const total = document.getElementById('total');

    let soma = valorChange;
    let currentSubtotal = unitario * valor;
    let currentTotal = currentSubtotal + parseFloat(total.innerHTML.replace('R$', ''));

    plusB.addEventListener('mousedown', () => {
        valor += 1;
        value.innerHTML = valor;

        soma += unitario;
        change.innerHTML = soma.toFixed(2);

        currentSubtotal = unitario * valor;
        subtotal.innerHTML = `R$${currentSubtotal.toFixed(2)}`;
        currentTotal = currentSubtotal; 
        total.innerHTML = currentTotal.toFixed(2);

        quantity.innerHTML = `${valor}x`;

        console.log(unitario);
    });

    lessB.addEventListener('mousedown', () => {
        if (valor > 0) {
            valor -= 1;
            value.innerHTML = valor;

            soma -= unitario;
            change.innerHTML = soma.toFixed(2);

            currentSubtotal = unitario * valor;
            subtotal.innerHTML = `R$${currentSubtotal.toFixed(2)}`;
            currentTotal = currentSubtotal; 
            total.innerHTML = currentTotal.toFixed(2);

            quantity.innerHTML = `${valor}x`;

            console.log('preço' + unitario);
        }
    });
}