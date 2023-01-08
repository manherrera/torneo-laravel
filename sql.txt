/* Trigger para insercion multiple (Puntos): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_puntaje AFTER INSERT ON participantes FOR EACH ROW
BEGIN
	
    INSERT INTO puntajes (equipo_id, puntos1, puntos2, puntos3, puntos4, puntos5)
    VALUES (NEW.id,
	    NEW.puntos1,
	    NEW.puntos2,
	    NEW.puntos3,
	    NEW.puntos4,
	    NEW.puntos5);
END;$$



/* Trigger para edicion multiple (Puntos): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_puntaje2 AFTER UPDATE ON puntajes FOR EACH ROW
BEGIN

    UPDATE participantes
    SET puntos1= NEW.puntos1,
        puntos2= NEW.puntos2,
        puntos3= NEW.puntos3,
        puntos4= NEW.puntos4,
        puntos5= NEW.puntos5 
    WHERE id= NEW.equipo_id;
    
END;$$



/* Trigger para suma de puntajes (Puntaje Total): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_suma_puntaje AFTER UPDATE ON puntajes FOR EACH ROW
BEGIN
    SET @result = (SELECT SUM((puntos1)+(puntos2)+(puntos3)+(puntos4)+(puntos5))
    FROM participantes WHERE id = NEW.equipo_id);

    UPDATE participantes SET puntaje_total= @result WHERE id= NEW.equipo_id;
END;$$