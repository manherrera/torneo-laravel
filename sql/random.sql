INSERT INTO ronda1peleas (participante_id, rownum1, clonparticipante_id, rownum2)
SELECT
	a.id AS participante_id,
	a.rownum AS rownum,
	b.id AS clonparticipante_id,
	b.rownum AS rownum
FROM
	(SELECT id, ROW_NUMBER()OVER(PARTITION BY partido ORDER BY peso1 ASC) AS RowNum FROM participantes WHERE partido="rojo") a INNER JOIN
	(SELECT id, ROW_NUMBER()OVER(PARTITION BY partido ORDER BY peso1 ASC) AS RowNum FROM participantes WHERE partido="verde") b
	
	ON (a.rownum = b.rownum);

	

INSERT INTO ronda2peleas (participante_id, rownum1, clonparticipante_id, rownum2)
SELECT
	a.id AS participante_id,
	a.rownum AS rownum,
	b.id AS clonparticipante_id,
	b.rownum AS rownum
FROM
	(SELECT id, ROW_NUMBER()OVER(PARTITION BY partido ORDER BY peso2 ASC) AS RowNum FROM participantes WHERE partido="rojo") a INNER JOIN
	(SELECT id, ROW_NUMBER()OVER(PARTITION BY partido ORDER BY peso2 ASC) AS RowNum FROM participantes WHERE partido="verde") b
	
	ON (a.rownum = b.rownum);
	

INSERT INTO ronda3peleas (participante_id, rownum1, clonparticipante_id, rownum2)
SELECT
	a.id AS participante_id,
	a.rownum AS rownum,
	b.id AS clonparticipante_id,
	b.rownum AS rownum
FROM
	(SELECT id, ROW_NUMBER()OVER(PARTITION BY partido ORDER BY peso3 ASC) AS RowNum FROM participantes WHERE partido="rojo") a INNER JOIN
	(SELECT id, ROW_NUMBER()OVER(PARTITION BY partido ORDER BY peso3 ASC) AS RowNum FROM participantes WHERE partido="verde") b
	
	ON (a.rownum = b.rownum);


INSERT INTO ronda4peleas (participante_id, rownum1, clonparticipante_id, rownum2)
SELECT
	a.id AS participante_id,
	a.rownum AS rownum,
	b.id AS clonparticipante_id,
	b.rownum AS rownum
FROM
	(SELECT id, ROW_NUMBER()OVER(PARTITION BY partido ORDER BY peso4 ASC) AS RowNum FROM participantes WHERE partido="rojo") a INNER JOIN
	(SELECT id, ROW_NUMBER()OVER(PARTITION BY partido ORDER BY peso4 ASC) AS RowNum FROM participantes WHERE partido="verde") b
	
	ON (a.rownum = b.rownum);
	

INSERT INTO ronda5peleas (participante_id, rownum1, clonparticipante_id, rownum2)
SELECT
	a.id AS participante_id,
	a.rownum AS rownum,
	b.id AS clonparticipante_id,
	b.rownum AS rownum
FROM
	(SELECT id, ROW_NUMBER()OVER(PARTITION BY partido ORDER BY peso5 ASC) AS RowNum FROM participantes WHERE partido="rojo") a INNER JOIN
	(SELECT id, ROW_NUMBER()OVER(PARTITION BY partido ORDER BY peso5 ASC) AS RowNum FROM participantes WHERE partido="verde") b
	
	ON (a.rownum = b.rownum);