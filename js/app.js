//import "../node_modules/bootstrap/dist/js/bootstrap.bundle.js";
import "../node_modules/@fortawesome/fontawesome-free/js/all.min.js";
import { events } from "./utillites.js";
import { slider_8 } from "./slider_8.js";
import { slider_7 } from "./slider_7.js";
import { slider_6 } from "./slider_6.js";
import { slider_5 } from "./slider_5.js";
import { slider_4 } from "./slider_4.js";
import { slider_3 } from "./slider_3.js";
import { slider_2 } from "./slider_2.js";
import { slider_1 } from "./slider_1.js";

events(window, "load", () => {
  slider_8();
  slider_7();
  slider_6();
  slider_5();
  slider_4();
  slider_3();
  slider_2();
  slider_1();
});