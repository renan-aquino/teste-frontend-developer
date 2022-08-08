/* Exibir/fechar navegação mobile: */

const header = document.querySelector('header');
const menu = document.querySelector('.menu');
const nav = document.querySelector('.nav-list');

menu.addEventListener('click', () => {
    nav.classList.toggle('display-nav');
    header.toggleAttribute('data-overlay');
    menu.classList.toggle('menu-close');
});

document.addEventListener('click', (e) => {
        
     if(!nav.contains(e.target) && !menu.contains(e.target) && nav.classList.contains('display-nav')) {
      nav.classList.toggle('display-nav');
      header.toggleAttribute('data-overlay');
      menu.classList.toggle('menu-close');
     }
});


/* Exibir/fechar formulário mobile: */

const main = document.querySelector('main');
const openForm = document.querySelector('#toggle-form');
const closeForm = document.querySelector('.close-form');
const mobileForm = document.querySelector('.formulario');

openForm.addEventListener ('click', () => {
    mobileForm.classList.toggle('mostrar-formulario');
    main.toggleAttribute('data-overlay');
});

closeForm.addEventListener ('click', () => {
    mobileForm.classList.toggle('mostrar-formulario');
    main.toggleAttribute('data-overlay');
});

document.addEventListener('click', (e) => {
        
    if(!mobileForm.contains(e.target) && !openForm.contains(e.target) && mobileForm.classList.contains('mostrar-formulario')) {
     mobileForm.classList.toggle('mostrar-formulario');
     main.toggleAttribute('data-overlay');
    }
});



/* Feedback de limitações do formulário: */

const form = document.querySelector('#form');
const nome = document.querySelector('#nome');
const email = document.querySelector('#email');
const telefone = document.querySelector('#telefone');
const msg = document.querySelector('#msg');

form.addEventListener('click', (e) => {
    e.preventDefault;

    validateInput();
});

function setError(element, message) {
    const inputGroup = element.parentElement;
    const small = inputGroup.querySelector('small');

    small.innerText = message;
    inputGroup.classList.add('error');
    inputGroup.classList.remove('success');
}

function setSuccess(element) {
    const inputGroup = element.parentElement;
    const small = inputGroup.querySelector('small');

    small.innerText = '';
    inputGroup.classList.add('success');
    inputGroup.classList.remove('error');
}


const isValidEmail = (email) => {
    const reg = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(String(email).toLowerCase());
}

const validateInput = () => {
    const nomeValue = nome.value.trim();
    const emailValue = email.value.trim();
    const telefoneValue = telefone.value.trim();
    const msgValue = msg.value.trim();


    if(nomeValue === '') {
        setError(nome, 'Preencha o nome.');
    } else {
        setSuccess(nome);
    }

    if(emailValue === '') {
        setError(email, 'Preencha o email.');
    } else if(!isValidEmail(emailValue)) {
        setError(email, 'Escreva um email válido.');
    } else {
        setSuccess(email);
    } 

    if(telefoneValue === '') {
        setError(telefone, 'Preencha o número de telefone.');
    } else if(telefoneValue.length < 15) {
        setError(telefone, 'Escreva um número válido.');
    } else {
        setSuccess(telefone);
    }

    if(!msgValue === '') {
        setSuccess(msg);
    }
}


/* Máscara do campo de telefone: */

var cleavePhone = new Cleave('#telefone', {
    delimiters: ['(', ')', ' ', '-'],
    blocks: [0, 2, 0, 5, 4],
    numericOnly: true
});


/* Impede que os campos do formulário percam a estilização de erro/sucesso ao clicar em 'Enviar' */ 
const input1 = document.querySelector('#input1');
const input2 = document.querySelector('#input2');
const input3 = document.querySelector('#input3');

function checkSucess(){
  if(input1.classList.contains('success') && input2.classList.contains('success') && input3.classList.contains('success')) { 
    return true;
  } else {
    return false;
  }
}