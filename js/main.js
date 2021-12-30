// show add form 

function addRecord(){
    let btnAdd = document.querySelector('.btn_add');
    let formAdd = document.querySelector('.form_add');

    btnAdd.addEventListener('click', ()=>{
        formAdd.classList.toggle('active');
    })
}

addRecord();