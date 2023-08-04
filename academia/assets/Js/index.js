// VARIAVEIS DOS FORMULÁRIOS
let formSecretaria = document.querySelector('.box-adm')
let formAluno = document.querySelector('.box-aluno')
let formPersonal = document.querySelector('.box-personal')
function exibirSecretaria() {
//Exibir formulário da Secretaria
    formSecretaria.style.display = 'block'
    formAluno.style.display = 'none'
    formPersonal.style.display = 'none'
    document.querySelector('body').style.marginTop = '15px'
}
function exibirAluno() {
    //Exibir formulário da Aluno
    formAluno.style.display = 'block'
    formSecretaria.style.display ='none'
    formPersonal.style.display = 'none'
    document.querySelector('body').style.marginTop = '15px'
}
function exibirPersonal() {
    //Exibir formulário da Personal
    formPersonal.style.display = 'block'
    formSecretaria.style.display = 'none'
    formAluno.style.display = 'none'
    document.querySelector('body').style.marginTop = '15px'
}
//BOTÕES DE EVENTO
const btSecretaria = document.querySelector('#bt-secretaria')
btSecretaria.addEventListener("click", exibirSecretaria)

const btAluno = document.querySelector('#bt-aluno')
btAluno.addEventListener("click", exibirAluno)

const btPersonal = document.querySelector('#bt-personal')
btPersonal.addEventListener("click", exibirPersonal)
