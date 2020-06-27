var loginForm = document.getElementById("login");
var createAccount = document.getElementById("createAccount");
loginForm.style.display = "block";
createAccount.style.display = "none";

function toggleLogin(){
    if(loginForm.style.display == "block" && createAccount.style.display == "none"){
        loginForm.style.display = "none";
        createAccount.style.display = "block";
    }else{
        loginForm.style.display = "block";
        createAccount.style.display = "none";
    }
} 


// finishBooking.style.display = "none";
// finishBooking.className = "hide_display";
function selectDoctor(x){
    var doctorList = document.getElementById("doctorList");
    var finishBooking = document.getElementById("finishBooking");
    doctorList.style.display = "none";
    finishBooking.className = "show_display";
    document.getElementById("docId").value = x;
}


function createAccountValidation()
{
    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var retypedPassword = document.getElementById("retypedPassword").value;
    if(name == "" || age == "" || email == "" || password == "" || retypedPassword == "")
    {
        alert("Complete filling form brfore submitting");
    }else
    {
        if(password == retypedPassword)
        {
            createAccount.submit();
        }else
        {
            alert("The entered passwords are not thesame");
        }
    }
}
function loginValidation()
{
    var email = document.getElementById("loginEmail").value;
    var password = document.getElementById("loginPassword").value;

    if(email == "" || password == "")
    {
        alert("Complete filling form brfore submitting");
    }else
    {
        loginForm.submit();
    }
}

document.getElementById("searchForm").reset();


function search(){
    var query = document.getElementById("searchQuery").value;
    if(query != ""){
        
        var search = new XMLHttpRequest();
        search.open("GET", "ajax_processes.php?query="+query, true);

        search.onload = function(){
            document.getElementById("display").innerHTML = this.responseText;
        }

        search.send();
    }
}