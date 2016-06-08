<?php
$client = new TextmagicRestClient('miguelmendez', 'OLBfKheAujXjZu1SEXJF2aOf2U6zsO');
$result = ' ';
try {
    $result = $client->messages->create(
        array(
            'text' => 'Hello from TextMagic PHP',
            'phones' => implode(', ', array('99900000'))
        )
    );
}
catch (\Exception $e) {
    if ($e instanceof RestException) {
        print '[ERROR] ' . $e->getMessage() . "\n";
        foreach ($e->getErrors() as $key => $value) {
            print '[' . $key . '] ' . implode(',', $value) . "\n";
        }
    } else {
        print '[ERROR] ' . $e->getMessage() . "\n";
    }
    return;
}
echo $result['id'];
?>