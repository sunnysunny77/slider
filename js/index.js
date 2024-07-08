// import '../node_modules/bootstrap/js/dist/alert';
// import '../node_modules/bootstrap/js/dist/button';
// import '../node_modules/bootstrap/js/dist/carousel';
// import '../node_modules/bootstrap/js/dist/collapse';
// import '../node_modules/bootstrap/js/dist/dropdown';
// import '../node_modules/ootstrap/js/dist/modal';
// import '../node_modules/bootstrap/js/dist/offcanvas';
// import '../node_modules/bootstrap/js/dist/popover';
// import '../node_modules/bootstrap/js/dist/scrollspy';
// import '../node_modules/bootstrap/js/dist/tab';
// import '../node_modules/bootstrap/js/dist/toast';
// import '../node_modules/bootstrap/js/dist/tooltip';
import "../node_modules/@fortawesome/fontawesome-free/js/all.js";
import { events } from "./utillites.js";
import { slider_8 } from "./slider_8.js";
import { slider_7 } from "./slider_7.js";
import { slider_6 } from "./slider_6.js";
import { slider_5 } from "./slider_5.js";
import { slider_4 } from "./slider_4.js";
import { slider_3 } from "./slider_3.js";
import { slider_2 } from "./slider_2.js";
import { slider_1 } from "./slider_1.js";
import { service_worker } from "./service_worker.js";

events(window, "load", () => {
  slider_8();
  slider_7();
  slider_6();
  slider_5();
  slider_4();
  slider_3();
  slider_2();
  slider_1();
  //service_worker();
});