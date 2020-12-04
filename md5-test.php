<?php
$contoh_string1 = "String Percobaan 1";
$contoh_string2 = "String Percobaan 2";
$contoh_string3 = "Percobaan Kuliah EL4120 Jaringan Komputer";
$contoh_string4 = "Percobaan Kuliah EL4120 Jaringan Komputes";

$md5_string_1 = md5($contoh_string1);
$md5_string_2 = md5($contoh_string2);
$md5_string_3 = md5($contoh_string3);
$md5_string_4 = md5($contoh_string4);

printf("string1: %s\n", $contoh_string1);
printf("string2: %s\n", $contoh_string2);
printf("string3: %s\n", $contoh_string3);
printf("string4: %s\n", $contoh_string4);

printf("MD5  1: %s\n", $md5_string_1);
printf("MD5  2: %s\n", $md5_string_2);
printf("MD5  3: %s\n", $md5_string_3);
printf("MD5  4: %s\n", $md5_string_4);

printf("SHA1 1: %s\n", sha1($contoh_string1));
printf("SHA1 2: %s\n", sha1($contoh_string2));
?>