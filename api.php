<?php
$node = $_POST['node'];


$australia = '{"nodes":[ 
	                      {"text":"job", "uri":"#job", "value":1, "group":0},
	                      {"text":"Australia", "uri":"#Australia", "value":1, "group":3},
	                      {"text":"artificial intelligence", "uri":"#artificial_intelligence", "value":1, "group":0},
	                      {"text":"city", "uri":"#city", "value":1, "group":0},
	                      {"text":"income", "uri":"#income", "value":1, "group":0},
	                      {"text":"customer", "uri":"#customer", "value":1, "group":0},
	                      {"text":"energy", "uri":"#energy", "value":1, "group":0},
	                      {"text":"solar power", "uri":"#solar_power", "value":1, "group":0},
	                      {"text":"automation", "uri":"#automation", "value":1, "group":0},
	                      {"text":"retail", "uri":"#retail", "value":1, "group":0},
	                      {"text":"World", "uri":"#World", "value":1, "group":3}
	                    ], 
	            "links": [
	                      {"source":1, "target":3, "value":1, "text":4409673},
	                      {"source":1, "target":5, "value":1, "text":4410086},
	                      {"source":1, "target":4, "value":1, "text":4408895},
	                      {"source":1, "target":9, "value":1, "text":4410086},
	                      {"source":1, "target":7, "value":2, "text":"2 stmts"},
	                      {"source":6, "target":1, "value":1, "text":"4410086"},
	                      {"source":6, "target":10, "value":1, "text":"4409485"},
	                      {"source":6, "target":0, "value":1, "text":"4406494"},
	                      {"source":6, "target":9, "value":1, "text":"4410086"},
	                      {"source":6, "target":7, "value":1, "text":"4410086"},
	                      {"source":6, "target":2, "value":1, "text":"4406494"},
	                      {"source":6, "target":8, "value":1, "text":"4406494"},
	                      {"source":6, "target":5, "value":1, "text":"4410086"}
	                    ]
            }';

$retail = '{"nodes":[ {"text":"job", "uri":"#job", "value":1, "group":0},{"text":"Australia", "uri":"#Australia", "value":1, "group":3},{"text":"artificial intelligence", "uri":"#artificial_intelligence", "value":1, "group":0},{"text":"consumer", "uri":"#consumer", "value":1, "group":0},{"text":"customer", "uri":"#customer", "value":1, "group":0},{"text":"energy", "uri":"#energy", "value":1, "group":0},{"text":"solar power", "uri":"#solar_power", "value":1, "group":0},{"text":"automation", "uri":"#automation", "value":1, "group":0},{"text":"manufacturing", "uri":"#manufacturing", "value":1, "group":0},{"text":"brand", "uri":"#brand", "value":1, "group":0},{"text":"retail", "uri":"#retail", "value":1, "group":0},{"text":"World", "uri":"#World", "value":1, "group":3}], "links": [{"source":5, "target":1, "value":1, "text":"4410086"},{"source":5, "target":11, "value":1, "text":"4409485"},{"source":5, "target":0, "value":1, "text":"4406494"},{"source":5, "target":10, "value":1, "text":"4410086"},{"source":5, "target":6, "value":1, "text":"4410086"},{"source":5, "target":2, "value":1, "text":"4406494"},{"source":5, "target":7, "value":1, "text":"4406494"},{"source":5, "target":4, "value":1, "text":"4410086"},{"source":10, "target":1, "value":1, "text":4410086},{"source":10, "target":11, "value":1, "text":4408725},{"source":10, "target":6, "value":1, "text":4410086},{"source":10, "target":9, "value":1, "text":4408725},{"source":10, "target":3, "value":1, "text":4408725},{"source":10, "target":4, "value":1, "text":4410086},{"source":10, "target":8, "value":1, "text":4409649}]}';
$solar_power = '{"nodes":[ {"text":"job", "uri":"#job", "value":1, "group":0},{"text":"Australia", "uri":"#Australia", "value":1, "group":3},{"text":"artificial intelligence", "uri":"#artificial_intelligence", "value":1, "group":0},{"text":"care", "uri":"#care", "value":1, "group":0},{"text":"patient", "uri":"#patient", "value":1, "group":0},{"text":"gas", "uri":"#gas", "value":1, "group":0},{"text":"India", "uri":"#India", "value":1, "group":3},{"text":"customer", "uri":"#customer", "value":1, "group":0},{"text":"energy", "uri":"#energy", "value":1, "group":0},{"text":"solar power", "uri":"#solar_power", "value":1, "group":0},{"text":"automation", "uri":"#automation", "value":1, "group":0},{"text":"power-generation", "uri":"#power-generation", "value":1, "group":0},{"text":"wind power", "uri":"#wind_power", "value":1, "group":0},{"text":"retail", "uri":"#retail", "value":1, "group":0},{"text":"World", "uri":"#World", "value":1, "group":3}], "links": [{"source":8, "target":1, "value":1, "text":"4410086"},{"source":8, "target":14, "value":1, "text":"4409485"},{"source":8, "target":0, "value":1, "text":"4406494"},{"source":8, "target":13, "value":1, "text":"4410086"},{"source":8, "target":9, "value":1, "text":"4410086"},{"source":8, "target":2, "value":1, "text":"4406494"},{"source":8, "target":10, "value":1, "text":"4406494"},{"source":8, "target":7, "value":1, "text":"4410086"},{"source":9, "target":1, "value":2, "text":"2 stmts"},{"source":9, "target":6, "value":1, "text":4409976},{"source":9, "target":14, "value":1, "text":4410045},{"source":9, "target":12, "value":1, "text":4410045},{"source":9, "target":3, "value":1, "text":4409976},{"source":9, "target":7, "value":1, "text":4410086},{"source":9, "target":5, "value":1, "text":4410044},{"source":9, "target":4, "value":1, "text":4409976},{"source":9, "target":11, "value":1, "text":4410045},{"source":9, "target":13, "value":1, "text":4410086}]}';

switch ($node) {
	case 'Australia':
		echo $australia;
		break;	

	case 'solar power':
		echo $australia;
		break;

	case 'retail':
		echo $australia;
		break;
	default:
		
		break;
}
