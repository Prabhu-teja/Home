function call(){
    var text=document.getElementById("speak").value;
    var u=new SpeechSynthesisisUtterance();
    u.rate=1;
    u.pitch=0.5;
    u.text=text;
    x=speechSynthesis;
    //speak(new SpeechSynthesisUtterance());
    x.speak(u)
    text.value="";
}
