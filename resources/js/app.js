import './bootstrap';


//Alpine js
import Alpine from 'alpinejs';

import allData from './allData';

window.Alpine = Alpine

Alpine.data('allData', allData);

Alpine.start();


