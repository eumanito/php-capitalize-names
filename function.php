<?php

function capitalize($string, $encoding = 'UTF-8')
    {
        $word_splitters = [' ', '-', "O’", "L’", "D’", 'St.', 'Mc', "Dall'", "l’", "d’", "a’", "o’"];
        $lowercase_exceptions = ['the', 'van', 'den', 'von', 'und', 'der', 'da', 'of', 'and', "d’",
            'das', 'do', 'dos', 'e', 'el'];
        $uppercase_exceptions = ['III', 'IV', 'VI', 'VII', 'VIII', 'IX', 'ME', 'EIRELI', 'EPP', 'S/A', 'S.A', 'LTDA'];

        $string = mb_strtolower($string, $encoding);
        $string = str_replace("'", "’", $string);

        foreach ($word_splitters as $delimiter)
        {
            $words = explode($delimiter, $string);
            $newwords = array();

            foreach ($words as $word)
            {
                if (in_array(mb_strtoupper($word, $encoding), $uppercase_exceptions))
                    $word = mb_strtoupper($word, $encoding);
                else
                    if (!in_array($word, $lowercase_exceptions))
                        $word = mb_strtoupper(mb_substr($word, 0, 1), $encoding)
                            .mb_substr($word, 1);

                $newwords[] = $word;
            }

            if (in_array(mb_strtolower($delimiter, $encoding), $lowercase_exceptions))
                $delimiter = mb_strtolower($delimiter, $encoding);

            $string = join($delimiter, $newwords);
        }

        return $string;
    }