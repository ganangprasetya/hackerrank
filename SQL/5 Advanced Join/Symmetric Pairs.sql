SELECT DISTINCT A.X AS W,A.Y FROM FUNCTIONS A ,FUNCTIONS B 
WHERE A.X =B.Y AND B.X = A.Y AND A.X < B.X UNION ALL SELECT A1.X AS W,A1.Y 
FROM FUNCTIONS A1 WHERE A1.X = A1.Y GROUP BY A1.X,A1.Y HAVING COUNT(*)>1 ORDER BY W;