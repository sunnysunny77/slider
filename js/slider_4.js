import { events, get_position } from "./utillites.js";

export const slider_4 = () => {
  const figure_one = document.querySelector(".figure-one");
  const figure_two = document.querySelector(".figure-two");
  const height_container = document.querySelector(".height-container");
  const scroll = document.querySelectorAll(".scroll");

  if (scroll.length === 0 || !figure_one || !figure_two || !height_container) {
    return;
  }

  events(
    window,
    "scroll",
    () => {
      if (window.innerWidth < 992) {
        return;
      }

      const line =
        height_container.offsetTop +
        height_container.getBoundingClientRect().height * 0.25 -
        figure_one.getBoundingClientRect().height / 2 -
        figure_two.getBoundingClientRect().height / 2;
      let scrollY = window.scrollY;

      if (scrollY < line) {
        figure_two.classList.replace("d-lg-has-height", "d-lg-0-height");
        figure_one.classList.replace("d-lg-0-height", "d-lg-has-height");
      }

      if (scrollY > line) {
        figure_one.classList.replace("d-lg-has-height", "d-lg-0-height");
        figure_two.classList.replace("d-lg-0-height", "d-lg-has-height");
      }
    },
    { passive: true }
  );

  const handle_scroll_animation_desktop = () => {
    if (window.innerWidth < 992) {
      return;
    }

    const position = get_position(height_container);
    const contains = height_container.classList.contains(
      "scroll-animation-desktop"
    );
    const height = height_container.getBoundingClientRect().height;
    const scroll_desktop = window.scrollY;
    const top = position;
    const bottom = position + height / 2.5;

    if (scroll_desktop < top && contains) {
      height_container.classList.remove("scroll-animation-desktop");
    }

    if (scroll_desktop > top && scroll_desktop < bottom && !contains) {
      height_container.classList.add("scroll-animation-desktop");
    }

    if (scroll_desktop > bottom && contains) {
      height_container.classList.remove("scroll-animation-desktop");
    }
  };

  const handle_scroll_animation_mobile = () => {
    if (window.innerWidth > 991) {
      return;
    }

    for (const index of scroll) {
      const position = get_position(index);
      const contains = index.classList.contains("scroll-animation-mobile");
      const height = index.getBoundingClientRect().height;
      const scroll_mobile =
        window.scrollY + window.innerHeight - height - height / 6;

      if (scroll_mobile > position && !contains) {
        index.classList.add("scroll-animation-mobile");
      }

      if (scroll_mobile < position && contains) {
        index.classList.remove("scroll-animation-mobile");
      }
    }
  };

  events(window, "scroll", handle_scroll_animation_desktop, { passive: true });
  events(window, "resize", handle_scroll_animation_desktop, { passive: true });
  events(window, "scroll", handle_scroll_animation_mobile, { passive: true });
  events(window, "resize", handle_scroll_animation_mobile, { passive: true });
};
