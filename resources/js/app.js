import './bootstrap';

import Swiper, { Navigation, Pagination } from 'swiper';
  // import Swiper and modules styles
  import 'swiper/css';
  import 'swiper/css/navigation';
  import 'swiper/css/pagination';
const swiper = new Swiper('.swiper', {
    // Optional parameters
    modules: [Navigation, Pagination],
    direction: 'horizontal',
    
    autoplay: {
        delay: 5000
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      type: "bullets",
      clickable: true,
    },

  });
  