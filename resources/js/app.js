import './bootstrap';

import { MultiRangeSlider, initTE } from "tw-elements";

initTE({ MultiRangeSlider });

const basicExample = document.querySelector("#multi-range-basic");
const oneRangeValueBasic = document.querySelector("#multi-range-basic-value");

basicExample.addEventListener("valueChanged.te.multiRangeSlider", (e) => {
  const [first, second] = e.values.rounded;
  oneRangeValueBasic.innerHTML = `
    Value:
    <div class="flex flex-col">
      <div>First: ${first}</div>
      <div>Second: ${second}</div>
    </div>
    `;
});