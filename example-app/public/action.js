
document.addEventListener("DOMContentLoaded", function() {
    var textElement = document.getElementById('bankaccount');
    textElement.textContent = textElement.textContent.replace(/[a-zA-Z0-9]/g, '*');
});

document.addEventListener("DOMContentLoaded", function() {
    var textElement = document.getElementById('phone');
    var textContent = textElement.textContent;
    var newTextContent = '';
    
    for (var i = 0; i < textContent.length - 2; i++) {
        newTextContent += '*';
    }
    
    newTextContent += textContent.slice(-2); // Thêm lại hai ký tự cuối cùng
    textElement.textContent = newTextContent;
});

document.addEventListener('DOMContentLoaded', function() {
    var emailElement = document.getElementById('email');
    var email = emailElement.textContent;
    var maskedEmail = maskEmail(email);
    emailElement.textContent = maskedEmail;
});

function maskEmail(email) {
    var atIndex = email.indexOf('@');
    if (atIndex > 2) {
        var maskedPortion = email.substr(2, atIndex - 2).replace(/./g, '*');
        var maskedEmail = email.substr(0, 2) + maskedPortion + email.substr(atIndex);
        return maskedEmail;
    }
    return email;
}
