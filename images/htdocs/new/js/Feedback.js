
function validateDate(dateInput) {
   
    if (!dateInput.value) {
      alert("Please enter a date.");
      return false;
    }
  
    
    const regex = /^\d{4}-\d{2}-\d{2}$/;
    if (!regex.test(dateInput.value)) {
      alert("Please enter the date in YYYY-MM-DD format.");
      return false;
    }
  
    
    return true;
  }
  

  function handleFormSubmit(event) {
    event.preventDefault(); 
  
    const dateInput = document.querySelector('.id input[type="date"]');
    const userNameInput = document.querySelector('.id input[type="text"]');
    const feedbackTextarea = document.querySelector('textarea');
  

    if (!validateDate(dateInput)) {
      return; 
    }
  

    const data = {
      date: dateInput.value,
      userName: userNameInput.value,
      feedback: feedbackTextarea.value,
    };
  

    console.log("Feedback submitted:", data);
  

    dateInput.value = "";
    userNameInput.value = "";
    feedbackTextarea.value = "";
  }
  

  const form = document.querySelector('form');
  form.addEventListener('submit', handleFormSubmit); 
  