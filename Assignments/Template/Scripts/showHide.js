function Check() {
    if (document.getElementById('other').checked) {
        document.getElementById('otherField').style.display = 'block';
        
    } 
    else {
        document.getElementById('otherGender').value = '';
        document.getElementById('otherField').style.display = 'none';
        document.getElementById('male').value = 'Male';
        document.getElementById('female').value = 'Female';

   }
   window.onload = Check();
}