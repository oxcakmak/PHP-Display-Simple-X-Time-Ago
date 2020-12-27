<?php
function calcTimeSpan($time, $search = array(), $langFile = array()){  
  $varReturn = array();
  $varSecondsAgo = (time() - strtotime($time));
  if ($varSecondsAgo >= 31536000) {
    $varReturn[] = intval($varSecondsAgo / 31536000) . " %yearAgo%";
  } elseif ($varSecondsAgo >= 2419200) {
    $varReturn[] = intval($varSecondsAgo / 2419200) . " %monthAgo%";
  } elseif ($varSecondsAgo >= 86400) {
    $varReturn[] = intval($varSecondsAgo / 86400) . " %dayAgo%";
  } elseif ($varSecondsAgo >= 3600) {
    $varReturn[] = intval($varSecondsAgo / 3600) . " %hourAgo%";
  } elseif ($varSecondsAgo >= 60) {
    $varReturn[] = intval($varSecondsAgo / 60) . " %minuteAgo%";
  } else {
    $varReturn[] = "%justNow%";
  }
  return str_replace($search, $langFile, $varReturn)[0];
}
?>
