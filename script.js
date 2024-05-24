// scripts.js

document.addEventListener("DOMContentLoaded", function() {
  // Handle signup form submission
  const signupForm = document.getElementById("signupForm");
  signupForm.addEventListener("submit", function(event) {
    event.preventDefault();
    
    const name = signupForm.elements["Fname"].value;
    const email = signupForm.elements["email"].value;
    const password = signupForm.elements["password"].value;

    // Simple validation
    if (!name || !email || !password) {
      alert("Please fill out all fields.");
      return;
    }

    // Save user data to local storage
    const user = {
      name: name,
      email: email,
      password: password
    };

    localStorage.setItem("user", JSON.stringify(user));
    alert("Registration successful!");
    signupForm.reset();
  });

  // Handle login form submission
  const loginForm = document.getElementById("loginForm");
  loginForm.addEventListener("submit", function(event) {
    event.preventDefault();

    const email = loginForm.elements["email"].value;
    const password = loginForm.elements["password"].value;

    // Simple validation
    if (!email || !password) {
      alert("Please fill out all fields.");
      return;
    }

    // Retrieve user data from local storage
    const storedUser = JSON.parse(localStorage.getItem("user"));

    if (storedUser) {
      if (storedUser.email === email && storedUser.password === password) {
        // alert("Login successful!");
        // loginForm.reset();
         window.location.href = "./student/Files.php";
      } else {
        alert("Incorrect email or password.");
      }
    } else {
      alert("No registered user found. Please sign up first.");
    }
  });
});
