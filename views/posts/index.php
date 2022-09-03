<?php
echo '<ul>';
foreach ($danhsachsv as $post) {
  echo '<li>
  <a href="index.php?controller=posts&action=showPost&mssv=' . $post->mssv . '">' . $post->ho_va_ten . '</a>
  </li>';
}
echo '</ul>';
?>