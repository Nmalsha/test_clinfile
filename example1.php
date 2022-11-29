<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
    <?php

$json_data = file_get_contents("exemple-1.json");
$alldata = json_decode($json_data, true);

// $rulesdata = $data['rules'];
buildquery($alldata);

function buildquery($alldata)
{

    foreach ($alldata['rules'] as $key1 => $data) {

        if ($key1) {

            print(" " . $alldata['condition']) . " ";
        }

        if (isset($data['rules'])) {
            print(" ( ");
            buildquery($data);
            print(" ) ");
        } else {

            print(" " . $data['id']) . " ";
            print(" " . $data['operator']) . " ";
            if ($data['value'] != null) {
                print(" " . $data['value']) . " ";
            }

        }

    }
}

?>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
