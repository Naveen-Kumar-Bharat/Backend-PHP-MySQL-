const submitButton = document.querySelector(".f-right"); // Select the submit button
const submitMsg = document.querySelector(".submitMsg"); // Select the message element
console.log(submitMsg);
submitButton.addEventListener("click", () => {
  // Temporarily show the message after form submission
  submitMsg.style.display = "block";

  setTimeout(() => {
    // Hide the message after 2 seconds
    console.log("Message hidden");
    submitMsg.style.display = "none";
    alert("Your form has been submitted successfully");
  }, 2000);
});
