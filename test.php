<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <link href="tabelle.css" rel="stylesheet">
    <title>Tabelle</title>
  </head>
  <body>
  <h1>PHP-Test</h1>
<?PHP
$rowCount = rand(10,20);
$colCount = rand(5,12);

printf("<table>\r\n");
for ($row = 0; $row<$rowCount; $row++)
{
  printf("<tr>\r\n");
  for($col = 0; $col < $colCount; $col++)
  {
    printf("<td> (%d/%d) </td>\r\n", $row,$col);
  }
  printf("</tr>\r\n");
}
printf("</table>\r\n");
?>
  </body>
</html>
