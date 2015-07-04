<?php

//*****************************************************************************
$T=tmpl_open('t2.html');

//*****************************************************************************
// Unknown keys

$data = array(
	'dsgdsgsdgd' => array(
		'osomfjdks' => 1
	)
);

tmpl_set($T, $data);

tmpl_set($T, '/', $data);

tmpl_set_global($T, 'key', 'value');

tmpl_get($T, '/path/to/nowhere');

//*****************************************************************************
echo tmpl_parse($T);

tmpl_unset($T, '/');

tmpl_close($T);
