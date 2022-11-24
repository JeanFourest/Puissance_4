function passwordChanged() {
    var strength = document.getElementById('strength');
    var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    var mediumRegex = new RegExp("^(?=.{8,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*\\W)(?=.*[a-z]))).*$", "g");
    var pwd = document.getElementById("password");
    if (pwd.value.length == 0) {
        strength.innerHTML = '';
    } else if (strongRegex.test(pwd.value)) {
        strength.innerHTML = '<br><span style="accent-color:green"><progress id="password" value="100" max="100"></progress></span><br><span style="color:green">Strong!</span>';
    } else if (mediumRegex.test(pwd.value)) {
        strength.innerHTML = '<br><span style="accent-color:yellow"><progress id="password" value="66" max="100"></progress></span><br><span style="color:yellow">Medium!</span>';
    } else {
        strength.innerHTML = '<br><span style="accent-color:red"><progress id="password" value="33" max="100"></progress></span><br><span style="color:red">Weak!</span>';
    }
}