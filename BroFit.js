const form = document.querySelector('form');
 function validateForm()
{
 // Get the values of the input fields
 const name = document.forms["form"]["name"].value;
 const email = document.forms["form"]["email"].value;
 const mobileNumber = document.forms["form"]["phone"].value;
 // Validate the First Name field
 const NameRegex = /^[a-zA-Z]*$/;
 if (!firstNameRegex.test(name)) {
 alert("First Name should only contain alphabet characters.");
 return false;
 }
 // Validate the E-mail id field
 const emailRegex = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9]*[.-]+[a-z]*$/;
 if (!emailRegex.test(email)) {
 alert("E-mail id must follow the standard pattern: name@abc.com");
 return false;
 }
 // Validate the Mobile Number field
 const mobileNumberRegex = /^\d{10}$/;
 if (!mobileNumberRegex.test(mobileNumber)) {
 alert("Mobile Number should contain 10 digits only.");
 return false;
 }
}
form.addEventListener('submit',validateForm());
