```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strlen($value) > 10) {
      $data[$key] = substr($value, 0, 10); // Truncate long strings
    }
  }
  return $data;
}

$data = [
  'name' => 'John Doe',
  'address' => '123 Main Street, Anytown, CA 91234',
  'details' => [
    'city' => 'Anytown',
    'state' => 'CA',
    'zip' => '91234'
  ]
];

$processedData = processData($data);
print_r($processedData); // Unexpected output due to reference
```