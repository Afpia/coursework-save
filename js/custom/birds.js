function birdsLogin() {
  VANTA.BIRDS({
    el: '.login__background',
    mouseControls: true,
    touchControls: false,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    quantity: 3.0,
    birdSize: 1.0,
    wingSpan: 30.0,
    separation: 100.0,
    backgroundAlpha: 0.0,
  });
}

function birdsForgotPassword() {
  VANTA.BIRDS({
    el: '.password__background',
    mouseControls: true,
    touchControls: false,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    quantity: 3.0,
    birdSize: 1.0,
    wingSpan: 30.0,
    separation: 100.0,
    color1: 0x433c69,
    color2: 0x4395aa,
    backgroundAlpha: 0.0,
  });
}
function birdsNewPassword() {
  VANTA.BIRDS({
    el: '.new-pass__background',
    mouseControls: true,
    touchControls: false,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    quantity: 3.0,
    birdSize: 1.0,
    wingSpan: 30.0,
    separation: 100.0,
    color1: 0x847356,
    color2: 0xbd802b,
    backgroundAlpha: 0.0,
  });
}
function birdsSignUp() {
  VANTA.BIRDS({
    el: '.signup__background',
    mouseControls: true,
    touchControls: false,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    quantity: 3.0,
    birdSize: 1.0,
    wingSpan: 30.0,
    separation: 100.0,
    color1: 0x0a0906,
    color2: 0xdd9d74,
    backgroundAlpha: 0.0,
  });
}
export { birdsSignUp, birdsNewPassword, birdsForgotPassword, birdsLogin };