<?php

function showValue($post) {
  if (is_array($post)) {
    return h(implode(", ", (array)$post));
  } else {
    return h($post);
  }
}

function putSeparated($data) {
  if (is_array($data)) {
    return implode(", ", (array)$data);
  } else {
    return $data;
  }
}
