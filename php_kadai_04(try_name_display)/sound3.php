<!-- GPT 音声ファイルの再生が最初のクリック時に遅延しているため発生しています。一般的に、音声ファイルの再生はブラウザがファイルをダウンロードするまでに時間がかかるため、初回の再生では遅延が発生することがあります。

この問題を解決するには、音声ファイルの事前ロードまたはプリロードを行う必要があります。

以下は、音声ファイルのプリロードを行う修正済みのコード例です。 -->


<?php
  $audioFile = "sound/beep_04.wav";
  echo "<!DOCTYPE html>
  <html>
  <body>
  <audio id='audioPlayer'>
    <source src='$audioFile' type='audio/wav'>
    Your browser does not support the audio element.
  </audio>
  <script>
    var audioPlayer = document.getElementById('audioPlayer');
    audioPlayer.preload = 'auto';
    audioPlayer.load();
  </script>
  <button onclick='audioPlayer.play();'>Play Sound</button>
  </body>
  </html>";
  
