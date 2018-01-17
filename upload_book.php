<?php
touch('./json/newbook.json');
$json = file_get_contents('./json/newbook.json');
$records = (array)json_decode($json, true);
$i = count($records);
$records[] = [
    'isbn' => $i,
    'book_name' => "test$i",
    'author' => "hoge hoge"
];
$out_json = json_encode($records);
print_r($out_json);
file_put_contents('./json/newbook.json', $out_json, LOCK_EX);
?>
