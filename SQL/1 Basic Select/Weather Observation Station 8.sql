SELECT DISTINCT CITY FROM STATION WHERE SUBSTR(CITY,1,1) IN('A','E','I','O','U','a','e','i','o','u') 
	AND SUBSTR(CITY,-1,1) IN('A','E','I','O','U','a','e','i','o','u');