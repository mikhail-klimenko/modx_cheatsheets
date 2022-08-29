<?php

//поиск и создание производителя по названию

$vendor_names = ['Ford', 'Toyota', 'Nissan'];

foreach ($vendor_names as $name_vendor) {
    
    if (!$vendor = $modx->getObject('msVendor', array('name' => $name_vendor))) {
        $vendor = $modx->newObject('msVendor', array('name' => $name_vendor));
    		$vendor->save();
    } 
    
    $vendor_id = $vendor->get('id');
    
    echo $vendor_id . PHP_EOL;
}
