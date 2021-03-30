//  BASIC SUBMIT
function submitFunction() {
    document.getElementById("frm1").submit();
}

//FIND THE "VALUE" ATTRIBUTE OF EACH ELEMENT IN THE FORM
function find_Value_Attrbitue_forEachElement() {
    var x = document.getElementById("frm1");
    var text = "";
    var i;
    for (i = 0; i < x.length; i++) {
        text += x.elements[i].value + "<br>";
    }
    document.getElementById("demo").innerHTML = text; // OPTIONAL FOR DISPLAY
}

//FIND THE "ACTION" ATTRIBUTE OF THE FORM
function find_Action_Attribute_of_the_Form() {
    var x = document.getElementById("frm1").action;
    document.getElementById("demo").innerHTML = x; // OPTIONAL FOR DISPLAY
}


//DISPLAY ACCEPT-CHARSET OF THE FORM:
function myFunction() {
    var x = document.getElementById("frm1").acceptCharset;
    document.getElementById("demo").innerHTML = x; // OPTIONAL FOR DISPLAY
}


//DISPLAY HOW MANY ELEMENTS IN THE FORM
function myFunction() {
    var x = document.getElementById("frm1").length;
    document.getElementById("demo").innerHTML = x; // OPTIONAL FOR DISPLAY
}

//FIND THE METHOD FOR SENDING FORM DATA  EX. GET | POST 
function myFunction() {
    var x = document.getElementById("frm1").method;
    document.getElementById("demo").innerHTML = x;
}

//FIND THE NAME OF THE FORM
function myFunction() {
    var x = document.getElementById("frm1").name;
    document.getElementById("demo").innerHTML = x;
}

//DISPLAY THE VALUE OF THE FORM
function myFunction() {
    var x = document.getElementById("frm1").method;
    document.getElementById("demo").innerHTML = x;
}

//DISPLAY THE TARGET OF THE FORM
function myFunction() {
    var x = document.getElementById("frm1").target;
    document.getElementById("demo").innerHTML = x;
}



//DISPLAY THE SELECTED OPTION IN A DROPDOWN LIST
function getOption() {
    var obj = document.getElementById("mySelect");
    document.getElementById("demo").innerHTML =
        obj.options[obj.selectedIndex].text;
}