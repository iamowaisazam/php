The header() function can send a raw HTTP header. You can add the Content-Type header to notify the browser of
the content we are sending.

Consider the following code, where we set Content-Type as text/plain:

header("Content-Type: text/plain");

echo "Hello World";
This will produce a plain text document with the following content:
Hello World

To produce JSON content, use the application/json content type instead:
header("Content-Type: application/json");

// Create a PHP data array.
$data = ["response" => "Hello World"];
// json_encode will convert
echo json_encode($data);
