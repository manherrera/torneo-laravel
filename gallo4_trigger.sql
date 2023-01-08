/* Trigger para insercion multiple (Anillo Gallos 4): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g4llo AFTER INSERT ON participantes FOR EACH ROW
BEGIN
	
    INSERT INTO g4llos (equipo_id, gallo4_anillo)
    VALUES (NEW.id,
	    NEW.gallo4_anillo);
END;$$



/* Trigger para edicion multiple (Anillo Gallos 4): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g4llo2 AFTER UPDATE ON participantes FOR EACH ROW
BEGIN

    UPDATE g4llos
    SET gallo4_anillo= NEW.gallo4_anillo
    WHERE equipo_id= NEW.id;
    
END;$$