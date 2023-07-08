const form = document.getElementById('myform');
const booktitle = document.getElementById('booktitle');
const bookauthor = document.getElementById('bookauthor');
const bookisbn = document.getElementById('bookisbn');
const bookupload = document.getElementById('bookupload');

form.addEventListener('submit',e => {
    e.preventDefault();

    inputvalidation();
});

const setError = (element,message) => {
    const formGroup = element.parentElement;
    const errorDisplay = formGroup.querySelector('.error');

    errorDisplay.innerText = message;
    formGroup.Classlist.add('error');
    formGroup.Classlist.remove('success');
}

const setSuccess = element => {
    const formGroup = element.parentElement;
    const errorDisplay = formGroup.querySelector('.error');

    errorDisplay.innerText='';
    formGroup.Classlist.add('success');
    formGroup.Classlist.remove('error');
}

const inputvalidation = () => {
    const booktitlevalue = booktitle.value.trim();
    const bookauthorvalue = bookauthor.value.trim();
    const bookisbnvalue = bookisbn.value.trim();
    const bookuploadvalue = bookupload.value.trim();


    if(booktitlevalue===''){
        setError(booktitle,'Book title is required');
    } else {
        setSuccess(booktitle);
    }

    if(bookauthorvalue===''){
        setError(bookauthor,'Book author is required');
    } else {
        setSuccess(bookauthor);
    }

    if(bookisbnvalue===''){
        setError(bookisbn,'Book isbn is required');
    } else {
        setSuccess(bookisbn);
    }

    if(bookuploadvalue===''){
        setError(bookupload,'Book to upload is required');
    } else {
        setSuccess(bookupload);
    }

}