var audio = document.getElementById("music");
var button = document.getElementById("mute_button");
function mute(){
	if(audio.muted)
	{
		audio.muted = false;
		button.classList.remove("mute");
	}
	else
	{
		audio.muted = true;
		button.classList.add("mute");
	}
}