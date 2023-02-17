<?php
echo '<ul>';
foreach ($cities as $city) {
  echo '<li>
    <a href="index.php?controller=cities&action=showCity&id=' . $city['id'] . '">' . $city['name'] . '</a>
  </li>';
}
echo '</ul>';