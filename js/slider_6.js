const slider_6 = () => {
  const button_group = document.querySelectorAll(".button-group");
  const action_aside = document.querySelectorAll(".action-aside");

  if (button_group.length === 0 || action_aside.length === 0) {
    return;
  }

  let current;
  let count;
  let inter_id;

  const disabled = (bool) => {
    for (const index of button_group) {
      index.disabled = bool;
    }
  };

  const interval = () => {
    count--;

    if (count === 0) {
      clearInterval(inter_id);
      action_aside[current].classList.replace(
        "has-animation",
        "has-animation-out"
      );
    }
  };

  for (const [i, index] of button_group.entries()) {
    events(index, "click", () => {
      count = 12;
      clearInterval(inter_id);
      inter_id = setInterval(interval, 1000);
      disabled(true);
      setTimeout(() => {
        disabled(false);
        index.focus();
      }, 3000);

      if (current === undefined) {
        return (action_aside[i].classList.add("has-animation"), current = i);
      }
 
      action_aside[current].classList.replace(
        "has-animation",
        "has-animation-out"
      );

      current = i;

      setTimeout(() => {
        action_aside[i].classList.replace(
          "has-animation-out",
          "has-animation"
        ) || action_aside[i].classList.add("has-animation");
      }, 1000);
    });
  }
};
