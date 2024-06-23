const loginButton = document.querySelector('.login-button')
const signupButton = document.querySelector('.signup-button');


loginButton.addEventListener("click", () => {
  document.body.innerHTML = "<h1>You clicked the Log in button</h1>"
})


signupButton.addEventListener("click", () => {
  document.body.innerHTML = "<h1>You clicked the Sign up button</h1>"
})