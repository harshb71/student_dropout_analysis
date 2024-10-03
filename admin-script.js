// Show the Login form and hide the Sign-up form
function showLoginForm() {
    document.getElementById('loginForm').style.display = 'block';
    document.getElementById('signupForm').style.display = 'none';
  }
  
  // Show the Sign-up form and hide the Login form
  function showSignupForm() {
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('signupForm').style.display = 'block';
  }
  
  // Validate Login form
  function validateLoginForm() {
    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;
  
    if (email === '' || password === '') {
      alert('Please fill in all fields');
      return false;
    }
  
    // Further validation can be added here (e.g., email format, password strength)
    return true;
  }
  
  // Validate Sign-up form
  function validateSignupForm() {
    const name = document.getElementById('signupName').value;
    const email = document.getElementById('signupEmail').value;
    const password = document.getElementById('signupPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
  
    if (name === '' || email === '' || password === '' || confirmPassword === '') {
      alert('Please fill in all fields');
      return false;
    }
  
    if (password !== confirmPassword) {
      alert('Passwords do not match');
      return false;
    }
  
    // Further validation can be added here (e.g., password strength)
    return true;
  }
  