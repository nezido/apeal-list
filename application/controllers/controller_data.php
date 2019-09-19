<?php

class Controller_Data extends Controller
{
    public $filename = 'list.json';

    function action_write()
    {
        if (!isset($_POST))
            return array("Error" => "No valid data");

        $sid = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
        $data = array('apeal-type' => $_POST['apeal-type'],
            'surname' => $_POST['surname'],
            'name' => $_POST['name'],
            'last-name' => $_POST['last-name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'text-apeal' => $_POST['text-apeal'],
            'sid' => $sid);

        // read the file if present
        $handle = @fopen($this->filename, 'r+');

        // create the file if needed
        if ($handle === false) {
            $handle = fopen($this->filename, 'w+');
        }

        if ($handle) {
            // seek to the end
            fseek($handle, 0, SEEK_END);

            // are we at the end of is the file empty
            if (ftell($handle) > 0) {
                // move back a byte
                fseek($handle, -1, SEEK_END);

                // add the trailing comma
                fwrite($handle, ',', 1);

                // add the new json string
                fwrite($handle, json_encode($data) . ']');
            } else {
                // write the first event inside an array
                fwrite($handle, json_encode(array($data)));
            }

            // close the handle on the file
            fclose($handle);
        }

        //move files
        foreach ($_FILES["file"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $path = "uploads/".$sid."/";
                if ( !is_dir($path)) {
                    mkdir($path);
                }
                $tmp_name = $_FILES["file"]["tmp_name"][$key];
                $name = basename($_FILES["file"]["name"][$key]);
                move_uploaded_file($tmp_name, "$path/$name");
            }
        }
        header('Location: /list');
    }

    function action_read()
    {
        header("Content-type: application/json");
        $data = json_decode(file_get_contents($this->filename), TRUE);
        $jsonAnswer = array('test' => 'true');
        echo json_encode($jsonAnswer);
    }
}