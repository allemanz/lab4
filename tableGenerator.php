<?php
echo "<table><tr>";
echo "<td> </td>";
for($i = 1; $i <= 100; $i++)
{
  echo "<td>" . $i . "</td>";
}
echo "</tr>";
for($i = 1; $i <= 100; $i++)
{
  echo "<tr>" . "<td>" . $i . "</td>";
  for($j = 1; $j <= 100; $j++)
  {
    echo "<td>" . ($i * $j) . "</td>";
  }
  echo "</td>";
}
echo "</table>"
?>
