document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('loginModal');
    const loginBtn = document.getElementById('loginBtn');
    const closeBtn = document.querySelector('.close');

    loginBtn.onclick = function() {
        modal.style.display = 'block';
    }

    closeBtn.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var submenuButtons = document.querySelectorAll('nav ul li > a');
    var submenus = document.querySelectorAll('.submenu');

    submenuButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            var submenu = this.nextElementSibling;
            
            // Close all submenus
            submenus.forEach(function(sm) {
                if (sm !== submenu) {
                    sm.style.display = 'none';
                }
            });
            
            // Toggle the clicked submenu
            if (submenu) {
                submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
            }
        });
    });
});

    const verMasButtons = document.querySelectorAll('.ver-mas');
    verMasButtons.forEach(button => {
        button.addEventListener('click', () => {
            const infoExtra = button.nextElementSibling;
            if (infoExtra.style.display === 'none' || infoExtra.style.display === '') {
                infoExtra.style.display = 'block';
            } else {
                infoExtra.style.display = 'none';
            }
        });
    });

const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider_sec");
let sliderSectionLast = sliderSection[sliderSection.length -1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin', sliderSectionLast);

function Next() {
  let sliderSectionFirst = document.querySelectorAll(".slider_sec")[0];
  slider.style.marginLeft = "-200%";
  slider.style.transition = "all 0.5s";
  setTimeout(function(){
    slider.style.transition = "none";
    slider.insertAdjacentElement('beforeend', sliderSectionFirst);
    slider.style.marginLeft = "-100%";
  }, 500);
}

function Prev() {
  let sliderSection = document.querySelectorAll(".slider_sec");
  let sliderSectionLast = sliderSection[sliderSection.length -1];
  slider.style.marginLeft = "0";
  slider.style.transition = "all 1s";
  setTimeout(function(){
    slider.style.transition = "none";
    slider.insertAdjacentElement('afterbegin', sliderSectionLast);
    slider.style.marginLeft = "-100%";
  }, 500);
}

btnRight.addEventListener('click', function(){
  Next();
});

btnLeft.addEventListener('click', function(){
  Prev();
});

setInterval(function(){
  Next();
}, 5000);
