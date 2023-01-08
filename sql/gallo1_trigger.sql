/* Trigger para insercion multiple (Anillo Gallos 1): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g1llo AFTER INSERT ON participantes FOR EACH ROW
BEGIN
	
    INSERT INTO g1llos (equipo_id, gallo1_anillo)
    VALUES (NEW.id,
	    NEW.gallo1_anillo);
END;$$



/* Trigger para edicion multiple (Anillo Gallos 1): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g1llo2 AFTER UPDATE ON participantes FOR EACH ROW
BEGIN

    UPDATE g1llos
    SET gallo1_anillo= NEW.gallo1_anillo
    WHERE equipo_id= NEW.id;
    
END;$$