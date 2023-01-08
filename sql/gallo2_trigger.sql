/* Trigger para insercion multiple (Anillo Gallos 2): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g2llo AFTER INSERT ON participantes FOR EACH ROW
BEGIN
	
    INSERT INTO g2llos (equipo_id, gallo2_anillo)
    VALUES (NEW.id,
	    NEW.gallo2_anillo);
END;$$



/* Trigger para edicion multiple (Anillo Gallos 2): */

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g2llo2 AFTER UPDATE ON participantes FOR EACH ROW
BEGIN

    UPDATE g2llos
    SET gallo2_anillo= NEW.gallo2_anillo
    WHERE equipo_id= NEW.id;
    
END;$$