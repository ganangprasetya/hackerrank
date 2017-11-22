(SELECT CITY, char_length(CITY) AS len_city FROM STATION WHERE char_length(CITY)=(SELECT char_length(CITY) 
        FROM STATION order BY char_length(CITY) LIMIT 1) ORDER BY CITY LIMIT 1) UNION ALL 
(SELECT CITY, char_length(CITY) AS len_city FROM STATION WHERE char_length(CITY)=(SELECT char_length(CITY) 
        FROM STATION ORDER BY char_length(CITY) DESC LIMIT 1) ORDER BY CITY DESC LIMIT 1) ORDER BY char_length(CITY);