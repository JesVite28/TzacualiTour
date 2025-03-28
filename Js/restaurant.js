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


document.addEventListener('DOMContentLoaded', () => {
    const verMasButtons = document.querySelectorAll('.ver-mas');
    const socialServicesBtn = document.getElementById('social-services-btn');
    const socialServicesSubmenu = document.getElementById('social-services-submenu');

    const comercialServicesBtn = document.getElementById('comercial-services-btn');
    const comercialServicesSubmenu = document.getElementById('comercial-services-submenu');

    const reservarBtns = document.querySelectorAll('.reservarBtn');
    const reservarModal = document.getElementById('reservarModal');
    const closeBtns = document.querySelectorAll('.close');

    closeBtns.forEach(btn => {
        btn.onclick = () => {
            reservarModal.style.display = 'none';
        };
    });

    reservarBtns.forEach(button => {
        button.addEventListener('click', () => {
            reservarModal.style.display = 'block';
        });
    });

    socialServicesBtn.onclick = () => {
        if (socialServicesSubmenu.style.display === 'none' || socialServicesSubmenu.style.display === '') {
            socialServicesSubmenu.style.display = 'block';
        } else {
            socialServicesSubmenu.style.display = 'none';
        }
    };

    comercialServicesBtn.onclick = () => {
        if (comercialServicesSubmenu.style.display === 'none' || comercialServicesSubmenu.style.display === '') {
            comercialServicesSubmenu.style.display = 'block';
        } else {
            comercialServicesSubmenu.style.display = 'none';
        }
    };
    
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
});

