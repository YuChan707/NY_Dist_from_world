<?php
    //print ("Hello, World!\n");

//read the csv and put together the select element and send it back to the HTML]
    $file = 'distance_NY_worldcapitals_partial.csv';
//ensuring the csv file exists and it canc reate an input stream out of it
    if (file_exists($file) && $fileStream = fopen($file, 'r')) {
        //prepare to read th file
        //first skip the first two lines on the csv file
        $numreading = 1;

        //send back the start of the select e,ement to the HTML page
        print("<select name='countryList' onchange='showDistance()'>\n");
        print("<option value=''>Select a country</option>\n");

        //loop throught
        while (($recordArray = fgetcsv($fileStream, 0, ",")) !== FALSE) {
            //skip the first two lines
            if ($numreading <= 2) {
                $numreading++;
            }//end of the loop
            else {
                //extract the component of the record we read
                $country = $recordArray[0];
                $capital = $recordArray[1];
                $miles = $recordArray[2];
                $km = $recordArray[3];

                //populate the select element with option
                //but first let's put togerger the value of the option
                $optionValue = $country . "," . $capital . "," . $miles . "," . $km;
                //now send the option to HTML
                print("<option value='".$optionValue."'>".$country.",".$capital."</option>\n");
            }
        }//end of the while loop

        //send back the close of select element
        print("</select>\n");

        //close the file stream 
        fclose($fileStream);
    } else {
        die("File not found or unable to open file.");
    }

?>