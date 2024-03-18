import "./styles.css";

const rive = require("@rive-app/canvas");

let skinTriggerInput;
const riveInstance = new rive.Rive({
  // Hosted .riv asset, or a local one. Uncomment line 8 to try with
  // a local basketball.riv asset, or add your own!
  src: "skin-test.riv",
  layout: new rive.Layout({
    fit: rive.Fit.Cover,
    alignment: rive.Alignment.Center
  }),
  canvas: document.getElementById("canvas"),
  autoplay: true,
  stateMachines: "Motion",
  // When the Rive instance loads, grab a reference to the state machine inputs
  // Store references in variables you can use across your app
  onLoad: (_) => {
    const stateMachineInputs = riveInstance.stateMachineInputs("Motion");
    skinTriggerInput = stateMachineInputs[0];
  }
});

// On click of this button, fire the trigger input from Rive to advance
// the state machine and change skins
const btn = document.querySelector(".btn");
btn.onclick = function () {
  skinTriggerInput.fire();
};
