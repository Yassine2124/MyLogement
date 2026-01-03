import './bootstrap';
import iziToast from "izitoast";
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

Swiper.use([Navigation, Pagination, Autoplay]);

window.Swiper = Swiper;


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
