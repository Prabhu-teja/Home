function call(){
    var text=document.getElementById("speak").value;
    alert(text);
    x=speechSynthesis;
    x.speak(new SpeechSynthesisUtterance());
    x.speak(new SpeechSynthesisUtterance(text));
    text.value="";
}
