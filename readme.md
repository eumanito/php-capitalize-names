
## Capitalize Names in PHP

Some use cases:


| Original      | ucwords(strtolower($str) | capitalize($str) |
| :---  | :---  | :--- |
| jOÃO DA SILVA  | João Da Silva  | João da Silva |
| eduardo dall'agnoll  | Eduardo Dall'agnoll  | Eduardo Dall'Agnoll |
| Papa joão xxiii | Papa João Xxiii | Papa João XXIII |
| Google s/a | Google S/a | Google S/A |
| paul mccartney | Paul Mccartney | Paul McCartney |
| nome da empresa ltda | Nome Da Empresa Ltda | Nome da Empresa LTDA |
| nome da empresa me | Nome Da Empresa Me | Nome da Empresa ME |
| Mr. o'donnel  | Mr. O'donnel | Mr. O'Donnel | 


# Install:

Composer install:
```
composer require eumanito/php-capitalize-names
```

# How to use:

```php
include('function.php');
$name = capitalize('paul mccartney');
//returns 'Paul McCartney'