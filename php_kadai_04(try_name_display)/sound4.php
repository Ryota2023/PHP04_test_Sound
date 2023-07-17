<?php
  $audioFile = "sound/beep_04.wav";
  echo "<!DOCTYPE html>
  <html>
  <body>
  <audio id='audioPlayer' autoplay>
    <source src='$audioFile' type='audio/wav'>
    Your browser does not support the audio element.
  </audio>
  <script>
    window.addEventListener('DOMContentLoaded', function() {
      var audioPlayer = document.getElementById('audioPlayer');
      audioPlayer.play();
    });
  </script>
  </body>
  </html>";
?>
