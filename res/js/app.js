var chat = false;
function addchat(state = chat) {
    if (!state){
        document.getElementById("chatF").classList.remove("d-none");
        //$("#chatF").removeClass("d-none");
        //document.getElementById("chatF").innerHTML = '</br><?php include "inc/chat.inc.php"?>';
        document.getElementById("chatB").style.display = "none";
    }else{
        document.getElementById("chatF").classList.add("d-none");
        //$("#chatF").addClass("d-none");
        //document.getElementById("chatF").innerHTML = "";
        document.getElementById("chatB").style.display = "initial";
    }
    chat = !chat;
}