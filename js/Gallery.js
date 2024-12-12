let images = document.querySelectorAll('.image img');
    let popup = document.querySelector('.popup-image');
    let popupImage = popup.querySelector('img');
    let closeButton = popup.querySelector('span');

    images.forEach(image => {
      image.addEventListener('click', () => {
        popup.style.display = 'flex';
        popupImage.src = image.src;
		 document.getElementById('content').classList.add('blur');
      });
    });

    closeButton.addEventListener('click', () => {
      popup.style.display = 'none';
	    document.getElementById('content').classList.remove('blur');
    });
	
	document.addEventListener('click', event => {
  if (event.target === popup) {
    popup.style.display = 'none';
	document.getElementById('content').classList.remove('blur');
  }
});