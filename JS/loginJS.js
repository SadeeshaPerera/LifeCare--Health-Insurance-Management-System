var state = false;
function toggle() {
    if(state) {
        document.getElementById("password").setAttribute("type", "password");
        document.getElementById("eyeClose").style.color='black';
        state = false;
    }
    else {
        document.getElementById("password").setAttribute("type", "text");
        document.getElementById("eyeClose").style.color='red';
        state = true;
    }
}