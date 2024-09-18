

function sendEmail(){
    let firstName = document.getElementById("firstName").value;
    let lastName = document.getElementById("lastName").value;
    let fullName = firstName.concat(" ", lastName);

    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let mess = document.getElementById("message").value;

    let messageBody = "Name: "+ fullName + "<br> Email: " + email + "<br> Phone: " + phone + "<br> Message: " + mess;

    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "techlinx24@gmail.com",
        Password : "DC892D296993252AB629AA7D3D06D4227EAC",
        To : 'techlinx24@gmail.com',
        From : "techlinx24@gmail.com",
        Subject : "Contact enquiry form",
        Body : messageBody
    }).then(
      message => {
        if(message == 'OK'){
            swal("Success!", "Form has been successfully submitted. We'll get back to you soon!", "success");
        }else{
            swal("Error", "Submission failed. Entered mail id has been already used", "Error"); 
        }
      }
    );
}
