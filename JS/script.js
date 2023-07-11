const form = document.getElementById('myform');
const booktitle = document.getElementById('booktitle');
const bookauthor = document.getElementById('bookauthor');
const bookisbn = document.getElementById('bookisbn');
const bookupload = document.getElementById('fileToupload');

form.addEventListener('submit',e => {
    e.preventDefault();

    inputvalidation();
});

const setError = (element,message) => {
    const formGroup = element.parentElement;
    const errorDisplay = formGroup.querySelector('.error');

    errorDisplay.innerText = message;
    formGroup.classList.add('error');
    formGroup.classList.remove('success');
}

const setSuccess = element => {
    const formGroup = element.parentElement;
    const errorDisplay = formGroup.querySelector('.error');

    errorDisplay.innerText='';
    formGroup.classList.add('success');
    formGroup.classList.remove('error');
}

const inputvalidation = () => {
    const booktitlevalue = booktitle.value.trim();
    const bookauthorvalue = bookauthor.value.trim();
    const bookisbnvalue = bookisbn.value.trim();
    const bookuploadvalue = bookupload.value.trim();


    if(booktitlevalue===''){
        setError(booktitle,'book title is required');
    } /*else {
        setSuccess(booktitle);
    }*/

    if(bookauthorvalue===''){
        setError(bookauthor,'book author is required');
    }/* else {
        setSuccess(bookauthor);
    }*/

    if(bookisbnvalue===''){
        setError(bookisbn,'book isbn is required');
    } /*else {
        setSuccess(bookisbn);
    }*/

    if(bookuploadvalue===''){
        setError(fileToupload,'book to upload is required');
    } /*else {
        setSuccess(fileToupload);
    }*/

}