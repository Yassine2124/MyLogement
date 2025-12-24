import './bootstrap';
import iziToast from "izitoast";

window.showToast = (message, type = 'success') => {
    iziToast[type]({
        title: type === 'success' ? 'Succès' : 'Info',
        message: message,
        position: 'topCenter',
        timeout: 6000
    });
};
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
