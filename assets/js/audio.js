document.addEventListener("DOMContentLoaded, function() {
    startplayer();
}, false);
let player;
function startplayer() {
    player = document.getElementById("music");
    player.controls = false;
}
function play_audio() {
    player.play();
}
function pause_audio() {
    player.pause();
}
function change_volume() {
    player.volume = document.getElementById("player-change-vol").value;
}
