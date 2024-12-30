```php
function processData(array $data): array {
  return array_map(function ($value) {
    if (is_array($value)) {
      return processData($value); // Recursive call
    } elseif (is_string($value) && strlen($value) > 10) {
      return substr($value, 0, 10); // Truncate long strings
    }
    return $value; // Return unchanged for other data types
  }, $data);
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
print_r($processedData); // Correct output - Original array unchanged
```