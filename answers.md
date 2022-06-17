## About Me.

Im Anjana Sivadas from Ernakulam. Im a Junior PHP Developer with 1.3 years of experience from iROID Technologies Kochin. I've hands on experience in HTML, CSS, JS, Jquery, Ajax, Bootstrap and MySQL. And Im also familiar with using git.

During my time with iROID, I've worked on multi-vendor Ecommerce Web and API development which was on Laravel 8. And also have experience in using third party platforms and API integrations such as Shiprocket API integration, Instashipin API integration, Sendgrid mail integration, MSG91 sms integration etc.

Now I'm looking for a more productive role that suit my skills and ability to grow further.
Im a quick learner and ready to take new challenges to improve my skills and knowledge.

Im using Windows 10 OS and I'm also familiar with Linux. Using Visual Studio Code as IDE.

## Social Profile
1. https://github.com/AJ-143
2. www.linkedin.com/in/anjana-sivadas143.

## The real stuff.
1. PHP [Frameworks:Codeigniter,Laravel], Python[Frameworks:Django], C, C++.
2. <?php

        function numToArray($num){
            $array = str_split($num);
            return $array;
        }

        $numToArray = numToArray(123);
        print_r($numToArray);       
    ?>
    
    <!-- Output:  Array ( [0] => 1 [1] => 2 [2] => 3 )-->

3. <?php

        function translateText($text){
            if(strpos($text, 'ay')){
                $words = explode(' ', $text);
                $translated = '';
                foreach ($words as $word) {
                    $str = substr($word, 0, -2);
                    $last = substr($str, -1);
                    $new = substr($str, 0, -1);
                    $translated .= $last.$new." "; 
                }
            }else{
                $words = explode(' ', $text);
                $translated = '';
                foreach ($words as $word) {
                    $first = $word[0];
                    $translated .= substr($word, 1).$first."ay ";
                }
            }
            return $translated;
        }

        $toPigLatin = translateText("Yellow Fish");
        echo "Text to Pig Latin : ".$toPigLatin."<br>";       

        $toText = translateText($toPigLatin);
        echo "Pig Latin to Text : ".$toText;     
    ?>

    <!-- Output: Text to Pig Latin : ellowYay ishFay Pig Latin to Text : Yellow Fish-->

