function Click(category)
{
    var e = window.getElementById("category");
    var strSel = "The Value is: " + e.options[e.selectedIndex].value + " and text is: " + e.options[e.selectedIndex].value;
    alert(strSel);
}
//function catclick() {
var e = document.getElementById("category");
var strUser = e.options[e.selectedIndex].value;
}