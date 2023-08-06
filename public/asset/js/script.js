document.addEventListener("DOMContentLoaded", function() {
    // Handle registration form submission
    const registrationForm = document.querySelector("form[action='/register']");
    if (registrationForm) {
      registrationForm.addEventListener("submit", function(event) {
        event.preventDefault();
        // Perform validation here if needed
        // Your code to handle registration goes here
        console.log("Registration form submitted!");
      });
    }
  
    // Handle login form submission
    const loginForm = document.querySelector("form[action='/login']");
    if (loginForm) {
      loginForm.addEventListener("submit", function(event) {
        event.preventDefault();
        // Perform validation here if needed
        // Your code to handle login goes here
        console.log("Login form submitted!");
      });
    }
  
    // Handle post deletion confirmation
    const deleteButtons = document.querySelectorAll("form[action^='/delete-post']");
    if (deleteButtons) {
      deleteButtons.forEach(function(button) {
        button.addEventListener("submit", function(event) {
          event.preventDefault();
          if (confirm("Are you sure you want to delete this post?")) {
            event.target.submit();
          }
        });
      });
    }
  });
  