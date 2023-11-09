1, My name is Abhimanyu P S, basicaly i am from kerala,kozhikode, I have completed Diploma in Computer Engineering and IT infrastructure from Nettur Technical Training Foundation in Bangalore. After that i hava joined in AOF Engineering systems as a postion of jonior software enginner postion there i have worked in multiple project as a backend developer, There I used Laravel and Codeigniter as backend. Currently I am working in Trivandrum, Tech Butomy as a Software Enginner junior Analyst, working as a backend developer in Laravel projects.

2,  Laravel - versions 8,9,10
    PHP 
    Git
    Rest API
    FireBase
    HTML/CSS
    javascript
    Ajax
    JQuery
    Vue.js

3,  Laravel
    PHP
    Python
    Vue.js
    React.js

4, I have mostly intrested to learn Vue.js and its framework also intrest in React.js
   also have intersted to Work and learn DevOps


## Social Profile

1,  https://github.com/abhi-manyu143

2,  https://www.linkedin.com/in/abhimanyu-p-s-5ab035196/

3,  Nil

## The Real Stuff.

1, Function StringToArray($num)
{
    #array = [];
    if($num)
    {
        $string = strval($num);
        
        for($i = 0; $i < strlen($string); $i++ )
        {
            $ch = $string[$i];
            $array[] = $ch;
        }

    }

    return $array;
}

2,   ->To Pig Latin and Back

        Function ToPigLatin($text)
        {
            $PigLatinText = $this->translateToPigLatin($text);

            return  $PigLatinText;
        }

3,  -> Back

        Function Back($text)
        {
            $englishText = $this->translateFromPigLatin($text);

            return  $englishText;
        }


    -> transalate to piglatin

    Function translateToPigLatin($text)
    {
        $words = explode(' ', $text);
        $latin_words = [];

        foreach ($words as $word) {
            if (ctype_alpha($word)) {
                $firstLetter = substr($word, 0, 1);
                $restOfWord = substr($word, 1);
                $pig_latin_word = $restOfWord . $firstLetter . 'ay';
                $latin_words[] = $pig_latin_word;
            } else {
                $latin_words[] = $word;
            }
        }

        return implode(' ', $latin_words);
    }

4,  git link -- https://github.com/abhi-manyu143/ERP



