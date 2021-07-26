<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Foundation-Task-4: Reverse associative array's $key=>$value</title>
</head>
<body>
<?php
class FileOwners {
    public static function groupByOwners($files) {
        $change = array();
        foreach($files as $key=>$value) {
        $change[$value][] = $key; //reverse "key" and "value"
        }
        return $change;
    }
}
$files = array (
    "Baseball Bat" => "John",
	"Golf Ball" => "Stan",
	"Tennis Racket" => "John"
);
// Calling the function
echo "Output by groupByOwners function is : ", json_encode(FileOwners::groupByOwners($files));
?>
</body>
</html>