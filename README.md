# JsonBash

A PHP Package for Generating Basic Structure for Json Response Like Status , Message , Data.

***

## Installation

```bash
$ composer require harshilkaneria/jsonbash
```

***
## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Json\Bash\JsonBash;


// Case 1 Basic

$data = array();
$data['id']= '1';
$data['name']=  'harshil';
$data['lastname']=  'kaneria';

$string = new JsonBash();
echo $string->jsonmanager(true,"Data Fetch Successfully",$data);

// Result of Case 1

{
	status : true,
	message : "Data Fetch Sucessfully"
	data : {
		id:'1',
		name: 'harshil',
		lastname: 'kaneria'
	}
}


// Case 2 Remove Predefind Fileds


$data = array();
$data['id']= '1';
$data['name']=  'harshil';
$data['lastname']=  'kaneria';

$string = new JsonBash();
echo $string->jsonmanager(false,null,$data);

// Result of Case 2

{
	status :false,
	data : {
		id:'1',
		name: 'harshil',
		lastname: 'kaneria'
	}
}


// Case 3 Add Custom Fileds


$data = array();
$data['id']= '1';
$data['name']=  'harshil';
$data['lastname']=  'kaneria';

$code = array();
$code['statuscode'] = "200";

$string = new JsonBash();
echo $string->jsonmanager(true,null,$data,$code);

// Result of Case 3

{
	status : true,
	data : {
		id:'1',
		name: 'harshil',
		lastname: 'kaneria'
	},
	statuscode :'200'
}

?>
```

***
## License

[MIT](LICENSE)

***