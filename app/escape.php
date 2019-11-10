<?php

function h($data) {
  echo htmlspecialchars($data, ENT_QUOTES, "UTF-8");
}
