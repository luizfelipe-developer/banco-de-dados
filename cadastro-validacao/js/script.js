function validaNome() {
    if (nome.value.trim()==='') {
        nome.style.background = '#b3093f';
        nome.style.color = 'black';
        return false;
    } else{
        nome.style.background ='transparent';
        nome.style.color = '#fff';
    }
}
function validaEmail() {
    if (email.value.trim()==='') {
        email.style.background = '#b3093f';
        email.style.color = 'black';
        return false;
    } else{
        email.style.background ='transparent';
        email.style.color = '#fff';
    }
}
function validaCidade() {
    if (cidade.value.trim()==='') {
        cidade.style.background = '#b3093f';
        cidade.style.color = 'black';
        return false;
    } else{
        cidade.style.background ='transparent';
        cidade.style.color = '#fff';
    }
}
function validaUf() {
    if (uf.value.trim()==='') {
        uf.style.background = '#b3093f';
        uf.style.color = 'black';
        return false;
    } else{
        uf.style.background ='transparent';
        uf.style.color = '#fff';
    }
}