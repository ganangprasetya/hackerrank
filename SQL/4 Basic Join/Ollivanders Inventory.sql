SELECT A.ID, B.AGE, A.COINS_NEEDED, A.POWER FROM WANDS A INNER JOIN WANDS_PROPERTY B 
ON A.CODE=B.CODE WHERE B.IS_EVIL!=1 AND A.COINS_NEEDED=(SELECT MIN(WANDS.COINS_NEEDED) 
FROM WANDS INNER JOIN WANDS_PROPERTY ON WANDS.CODE=WANDS_PROPERTY.CODE WHERE WANDS_PROPERTY.AGE=B.AGE 
AND WANDS.POWER=A.POWER) ORDER BY A.POWER DESC,B.AGE DESC