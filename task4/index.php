<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Text deleting</title>
</head>
<body>
<?="4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции." .PHP_EOL?>
<?php
    $path = ".";
    function list_files ($path) {
        return array_diff(scandir($path), array('.', '..'));
    }
    print_r(list_files ($path));
?>
</form>
</body>
</html>