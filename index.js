const loginButton = document.querySelector('.login-button')
const signupButton = document.querySelector('.signup-button');
const login = `<h1>You clicked the Log in button</h1> 
               <form action="./index.php">
                  username: <br>
                  <input type="text" name="username"> <br>
                  password: <br>
                  <input type="password" name="password"> <br>
                  <input type="submit" name="login" value="Log in">
               </form>`

const signup = `<h1>You clicked the Sign up button</h1> 
                <form action="./index.php">
                  username: <br>
                  <input type="text" name="username"> <br>
                  password: <br>
                  <input type="password" name="password"> <br>
                  re-enter password: <br>
                  <input type="password" name="reEnterPassword"> <br>
                  <input type="submit" name="signup" value="Sign up">
               </form>`

loginButton.addEventListener("click", () => {
  document.body.innerHTML = login
})


signupButton.addEventListener("click", () => {
  document.body.innerHTML = signup
})