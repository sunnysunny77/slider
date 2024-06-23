const slider_3 = () => {
  const inner = document.querySelector(".inner");
  const image1 = document.querySelector(".image-1");
  const image2 = document.querySelector(".image-2");
  const image_fill_left = document.querySelector(".image-fill-left");
  const image_fill_right = document.querySelector(".image-fill-right");
  const open_right = document.querySelector(".open-right");
  const open_left = document.querySelector(".open-left");
  const percentage = document.querySelector(".percentage-change");
  const static_count = document.querySelectorAll(".static-count");
  const button_toggle = document.querySelector(".button-toggle");

  if (
    static_count.length === 0 ||
    !inner ||
    !image1 ||
    !image2 ||
    !image_fill_left ||
    !image_fill_right ||
    !open_right ||
    !open_left ||
    !percentage ||
    !button_toggle
  ) {
    return;
  }

  let counter = 0;
  let arraySrc = [];
  let arrayHref = [];
  let arrayText = [];
  let width;
  let percent;
  let intervalId;

  for (const item of static_count) {
    arraySrc.push(item.children[0].src);
    arrayHref.push([
      item.children[1].children[0].href,
      item.children[1].children[0].innerHTML
    ]);
    arrayText.push(item.children[1].innerHTML);
  }

  const percentClac = (counter) => {
    percent = Math.floor((((counter + 1) / static_count.length) * 100) / 1);
  };

  percentClac(counter);

  const interval = () => {
    width = percent > width ? width + 1 : width - 1;
    percentage.style.width = `${width}%`;

    if (percent === width) {
      clearInterval(intervalId);
    }
  };

  const iterationEnd = () => {
    open_right.disabled = false;
    open_left.disabled = false;
    image_fill_left.classList.remove("has-left");
    image_fill_right.classList.remove("has-right");

    if (counter + 1 === static_count.length) {
      image_fill_left.style.backgroundImage = `url(${arraySrc[0]}`;
      image_fill_right.style.backgroundImage = `url(${arraySrc[counter]}`;
      image_fill_left.href = arrayHref[0][0];
      image_fill_right.href = arrayHref[counter][0];
      image_fill_left.innerHTML =
        `<span class="d-none">${  arrayHref[0][1]  }</span>`;
      image_fill_right.innerHTML =
        `<span class="d-none">${  arrayHref[counter][1]  }</span>`;

      return;
    }

    if (counter + 2 === static_count.length) {
      image_fill_left.style.backgroundImage = `url(${arraySrc[counter + 1]}`;
      image_fill_right.style.backgroundImage = `url(${arraySrc[counter]}`;
      image_fill_left.href = arrayHref[counter + 1][0];
      image_fill_right.href = arrayHref[counter][0];
      image_fill_left.innerHTML =
        `<span class="d-none">${  arrayHref[counter + 1][1]  }</span>`;
      image_fill_right.innerHTML =
        `<span class="d-none">${  arrayHref[counter][1]  }</span>`;

      return;
    }

    image_fill_left.style.backgroundImage = `url(${arraySrc[counter + 1]}`;
    image_fill_right.style.backgroundImage = `url(${arraySrc[counter]}`;
    image_fill_left.href = arrayHref[counter + 1][0];
    image_fill_right.href = arrayHref[counter][0];
    image_fill_left.innerHTML =
      `<span class="d-none">${  arrayHref[counter + 1][1]  }</span>`;
    image_fill_right.innerHTML =
      `<span class="d-none">${  arrayHref[counter][1]  }</span>`;
  };

  const iterationStart = () => {
    image1.classList.remove("has-opacity-image");
    image2.classList.remove("has-opacity-image");
    inner.classList.remove("has-opacity-inner");

    if (counter + 1 === static_count.length) {
      image1.style.backgroundImage = `url(${arraySrc[counter]}`;
      image2.style.backgroundImage = `url(${arraySrc[0]}`;
      image1.href = arrayHref[counter][0];
      image2.href = arrayHref[0][0];
      image1.innerHTML =
        `<span class="d-none">${  arrayHref[counter][1]  }</span>`;
      image2.innerHTML = `<span class="d-none">${  arrayHref[0][1]  }</span>`;
      inner.innerHTML = arrayText[counter];

      return;
    }

    if (counter + 2 === static_count.length) {
      image1.style.backgroundImage = `url(${arraySrc[counter]}`;
      image2.style.backgroundImage = `url(${arraySrc[counter + 1]}`;
      image1.href = arrayHref[counter][0];
      image2.href = arrayHref[counter + 1][0];
      image1.innerHTML =
        `<span class="d-none">${  arrayHref[counter][1]  }</span>`;
      image2.innerHTML =
        `<span class="d-none">${  arrayHref[counter + 1][1]  }</span>`;
      inner.innerHTML = arrayText[counter];

      return;
    }

    image1.style.backgroundImage = `url(${arraySrc[counter]}`;
    image2.style.backgroundImage = `url(${arraySrc[counter + 1]}`;
    image1.href = arrayHref[counter][0];
    image2.href = arrayHref[counter + 1][0];
    image1.innerHTML =
      `<span class="d-none">${  arrayHref[counter][1]  }</span>`;
    image2.innerHTML =
      `<span class="d-none">${  arrayHref[counter + 1][1]  }</span>`;
    inner.innerHTML = arrayText[counter];
  };

  events(
    open_left,
    "click",
    (event) => {
      event.preventDefault();
      counter--;
      if (counter === -1) {
        counter = static_count.length - 1;
      }
      percentClac(counter);
      open_right.disabled = true;
      open_left.disabled = true;
      inner.classList.add("has-opacity-inner");
      image1.classList.add("has-opacity-image");
      image2.classList.add("has-opacity-image");
      image_fill_right.classList.add("has-right");
      setTimeout(iterationStart, 750);
      setTimeout(iterationEnd, 1500);
      intervalId = setInterval(interval, 20);
    },
    null
  );

  events(
    open_right,
    "click",
    (event) => {
      event.preventDefault();
      counter++;
      if (counter === static_count.length) {
        counter = 0;
      }
      percentClac(counter);
      open_right.disabled = true;
      open_left.disabled = true;
      inner.classList.add("has-opacity-inner");
      image1.classList.add("has-opacity-image");
      image2.classList.add("has-opacity-image");
      image_fill_left.classList.add("has-left");
      setTimeout(iterationStart, 750);
      setTimeout(iterationEnd, 1500);
      intervalId = setInterval(interval, 20);
    },
    null
  );

  image1.style.backgroundImage = `url(${arraySrc[0]}`;
  image2.style.backgroundImage = `url(${arraySrc[1]}`;
  image_fill_left.style.backgroundImage = `url(${arraySrc[1]}`;
  image_fill_right.style.backgroundImage = `url(${arraySrc[0]}`;
  image1.href = arrayHref[0][0];
  image2.href = arrayHref[1][0];
  image_fill_left.href = arrayHref[1][0];
  image_fill_right.href = arrayHref[0][0];
  image1.innerHTML = `<span class="d-none">${  arrayHref[0][1]  }</span>`;
  image2.innerHTML = `<span class="d-none">${  arrayHref[1][1]  }</span>`;
  image_fill_left.innerHTML =
    `<span class="d-none">${  arrayHref[1][1]  }</span>`;
  image_fill_right.innerHTML =
    `<span class="d-none">${  arrayHref[0][1]  }</span>`;
  inner.innerHTML = arrayText[0];
  width = percent;
  percentage.style.width = `${width}%`;

  events(button_toggle, "click", (event) => {
    const obj = document.querySelector(".shrink-container");
    obj.classList.toggle("has-shrink");
  });
};
