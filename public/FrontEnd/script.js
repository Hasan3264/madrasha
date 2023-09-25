const popupTrigger = document.querySelector('.popup-trigger');
const popup = document.querySelector('.popup');
const popupClose = document.querySelector('.popup__close');

popupTrigger.addEventListener('click', (e) => {
  popup.classList.add('show');
  document.body.style.cssText = `overflow: hidden;`;

});

popupClose.addEventListener('click', (e) => {
  popup.classList.remove('show');
  document.body.style.cssText = '';
});

// close on click on overlay

popup.addEventListener('click', (e) => {
  if (e.target === popup) {
    popup.classList.remove('show');
    document.body.style.cssText = '';
  }
});

// close on press of escape button

document.addEventListener('keydown', (e) => {
    if (e.code === "Escape" && popu.classList.contains('show')) {
      popu.classList.remove('show');
      document.body.style.cssText = '';
    }
  });


  const popupTrigge = document.querySelector('.popup-trigge');
const popu = document.querySelector('.popu');
const popuClose = document.querySelector('.popu__close');

popupTrigge.addEventListener('click', (e) => {
  popu.classList.add('show');
  document.body.style.cssText = `overflow: hidden;`;

});

popuClose.addEventListener('click', (e) => {
  popu.classList.remove('show');
  document.body.style.cssText = '';
});

// close on click on overlay

popu.addEventListener('click', (e) => {
  if (e.target === popu) {
    popu.classList.remove('show');
    document.body.style.cssText = '';
  }
});

// close on press of escape button

document.addEventListener('keydown', (e) => {
    if (e.code === "Escape" && popu.classList.contains('show')) {
      popu.classList.remove('show');
      document.body.style.cssText = '';
    }
  });

