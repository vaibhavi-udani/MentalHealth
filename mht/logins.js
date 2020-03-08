//global characters
var userDatabase = [];
var ID = 0;

var su_btn = document.getElementById("signUp-bt");
var li_btn = document.getElementById("login-bt");
var su_name = document.getElementById("su-name");

//0 if on sign up 
//1 if on log in
var su_li = 0;

function user(id, name, pass) {
    this.username = name;
    this.password = pass;
    this.id = id;
    userDatabase.push(this);
    ID++;
}

//sign up change
function signUp() {


    su_name.style.display = 'block';
    su_btn.style.backgroundColor = "#96B7BE";
    li_btn.style.backgroundColor = "#6F6F6E";
    //check if it is on signup page
    if (su_li == 1) {
        su_li = 0;
        document.getElementById("loginForm").reset();
        return false;
    } else {
        name = document.getElementById("name").value;
        username = document.getElementById("username").value;
        password = document.getElementById("password").value;
        
        if (name == "" && username == "" && password == "") {
            alert("missing information: make sure all text boxes are filled out.");
            return false;
        }
    }

}

function login() {


    su_name.style.display = 'none';
    li_btn.style.backgroundColor = "#96B7BE";
    su_btn.style.backgroundColor = "#6F6F6E";

    if (su_li == 0) {
        su_li = 1;
        document.getElementById("loginForm").reset();
        return false;
        
    } else {
        username = document.getElementById("username").value;
        password = document.getElementById("password").value;

        if (username == "" || password == "") {
            alert("missing information: make sure all text boxes are filled out.");
            return false;
        }
        
    }
}
