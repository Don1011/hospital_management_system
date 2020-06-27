var loginForm = document.getElementById("login");
var createAccount = document.getElementById("createAccount");
loginForm.style.display = "block";
createAccount.style.display = "none";

function toggleLogin()
{
    if(loginForm.style.display == "block" && createAccount.style.display == "none")
    {
        loginForm.style.display = "none";
        createAccount.style.display = "block";
    }else
    {
        loginForm.style.display = "block";
        createAccount.style.display = "none";
    }
}
function selectDoctor()
{
    var doctorList = document.getElementById("doctorList");
    doctorList.style.display = "none";
}
function fileSelect()
{
    var fileLabel = document.getElementById("fileLabel");
    var input = document.getElementById("doctorsPhoto");
    if(input.value != "")
    {   
        var re = /fakepath/gi;
        var newString = input.value.replace(re, "...");
        fileLabel.innerHTML = newString;
    }
}