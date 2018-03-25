<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Files containing words</title>
</head>
<body>
<?="Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
Директория и искомое слово задаются как параметры функции." .PHP_EOL?>
<?php
    $path = ".";
    $searchwrd = 'utf-8';
    function list_files($path, $searchwrd) {
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $k => $v) {
            $t = fopen($v, 'r');
            $text = fread($t, filesize($v));
            fclose($t);
            if (stripos($text, $searchwrd) === false) {
                unset($files[$k]);
            }
        }
        return $files;
    }
    print_r(list_files($path, $searchwrd));
?>
</form>
</body>
</html>