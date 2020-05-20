var chat = false; //ob Chat-FENSTER sichtbar ist oder nicht
var button = true;
function addchat(state = chat) {
    if (!state){
        //document.getElementById("chatF").classList.remove("d-none");
        console.log("bis anzeigen");
        //document.getElementById("chatB").style.visibility = "hidden";
        $("#chatF").removeClass("d-none");
        //document.getElementById("chatF").innerHTML = '</br><?php include "inc/chat.inc.php"?>';
        console.log("bis nach kommentaren");
        document.getElementById("main").style.width = "73.65vw";
        $("#main").css("width", "73.65vw");
        console.log("bis breite");
        document.getElementById("main").style.backgroundColor = "red";
        $("#main").css("background-color", "red");
        console.log("bis nach Farbe");
        document.getElementById("chatB").style.display = "none";
        console.log("bis button verbergen");
    }else{
        document.getElementById("chatF").classList.add("d-none");
        document.getElementById("main").style.width = "initial";
        //$("#chatF").addClass("d-none");
        //document.getElementById("chatF").innerHTML = "";
        //document.getElementById("chatB").style.visibility = "visible";
        document.getElementById("chatB").style.display = "initial";
    }
    chat = !chat;
}

function rmall(state = button) {
    addchat(true);
    if(state){
        document.getElementById("chatB").style.display = "none";
    }else{
        document.getElementById("chatB").style.display = "initial";}
    button = !button;
}