/* Trigger para insercion multiple (Anillo Gallos 5): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g5llo AFTER INSERT ON participantes FOR EACH ROW
BEGIN
	
    INSERT INTO g5llos (equipo_id, gallo5_anillo)
    VALUES (NEW.id,
	    NEW.gallo5_anillo);
END;$$



/* Trigger para edicion multiple (Anillo Gallos 5): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g5llo2 AFTER UPDATE ON participantes FOR EACH ROW
BEGIN

    UPDATE g5llos
    SET gallo5_anillo= NEW.gallo5_anillo
    WHERE equipo_id= NEW.id;
    
END;$$