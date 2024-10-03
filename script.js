// Function to open modal
function openModal() {
    document.getElementById("loginSignupModal").style.display = "block";
  }
  
  // Function to close modal
  function closeModal() {
    document.getElementById("loginSignupModal").style.display = "none";
  }
  
  // Close the modal when clicking outside of the modal content
  window.onclick = function(event) {
    const modal = document.getElementById("loginSignupModal");
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  