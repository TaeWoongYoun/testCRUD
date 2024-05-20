function loadFile(input){
    let file = input.files[0];
    let newImg = document.createElement('img');
    let container = document.getElementById('showImg');

    container.innerHTML = '';

    newImg.src = URL.createObjectURL(file);
    container.appendChild(newImg);
}