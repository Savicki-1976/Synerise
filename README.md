# Synerise

![PHPStan](https://img.shields.io/badge/PHPStan-level%205-brightgreen.svg?style=flat)

## Examples
```
$gateway = new ApiFactory(new SessionFactory());

$credentials = (new Credentials())
    ->setApiKey('API_KEY');

$gateway = $gateway->create($credentials);

$item = $gateway->makes()->item();
$item->setItemKey('KEY');
$item->setValue([
    'code' => 'VALUE_1_3',
    'valid_from' => '2025-10-01',
    'valid_to' => '2025-10-31',
]);

$collection = $gateway->makes()->collection();
$collection->add($item);
    
try {
    $catalogId = '123456';
    $response = $gateway->bagItems()->update()->handle($catalogId, $collection);
    var_dump($response);
} catch (Exception $e) {
    var_dump($e->getMessage());
    var_dump($e->getCode());
    var_dump($e->getTraceAsString());
}
```
## Komendy

| KOMENDA | OPIS |
| ------ | ------ |
| composer phpstan |  PHPStan |
| composer coverage | PHPUnit Coverage |
| composer coverage-html | PHPUnit Coverage HTML (DIR: ./coverage/) |