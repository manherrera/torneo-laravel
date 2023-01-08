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

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_suma_puntaje AFTER UPDATE ON puntajes FOR EACH ROW
BEGIN
    SET @result = (SELECT SUM((puntos1)+(puntos2)+(puntos3)+(puntos4)+(puntos5))
    FROM participantes WHERE id = NEW.equipo_id);

    UPDATE participantes SET puntaje_total= @result WHERE id= NEW.equipo_id;
END;$$

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g1llo AFTER INSERT ON participantes FOR EACH ROW
BEGIN
    INSERT INTO g1llos (equipo_id, gallo1_anillo)
    VALUES (NEW.id,
	        NEW.gallo1_anillo);
END;$$

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g1llo2 AFTER UPDATE ON participantes FOR EACH ROW
BEGIN
    UPDATE g1llos
    SET gallo1_anillo= NEW.gallo1_anillo
    WHERE equipo_id= NEW.id;
END;$$

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g2llo AFTER INSERT ON participantes FOR EACH ROW
BEGIN
    INSERT INTO g2llos (equipo_id, gallo2_anillo)
    VALUES (NEW.id,
	        NEW.gallo2_anillo);
END;$$

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g2llo2 AFTER UPDATE ON participantes FOR EACH ROW
BEGIN
    UPDATE g2llos
    SET gallo2_anillo= NEW.gallo2_anillo
    WHERE equipo_id= NEW.id;
END;$$

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g3llo AFTER INSERT ON participantes FOR EACH ROW
BEGIN
    INSERT INTO g3llos (equipo_id, gallo3_anillo)
    VALUES (NEW.id,
	        NEW.gallo3_anillo);
END;$$

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g3llo2 AFTER UPDATE ON participantes FOR EACH ROW
BEGIN
    UPDATE g3llos
    SET gallo3_anillo= NEW.gallo3_anillo
    WHERE equipo_id= NEW.id;
END;$$

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g4llo AFTER INSERT ON participantes FOR EACH ROW
BEGIN
    INSERT INTO g4llos (equipo_id, gallo4_anillo)
    VALUES (NEW.id,
	        NEW.gallo4_anillo);
END;$$

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g4llo2 AFTER UPDATE ON participantes FOR EACH ROW
BEGIN
    UPDATE g4llos
    SET gallo4_anillo= NEW.gallo4_anillo
    WHERE equipo_id= NEW.id;
END;$$

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g5llo AFTER INSERT ON participantes FOR EACH ROW
BEGIN
    INSERT INTO g5llos (equipo_id, gallo5_anillo)
    VALUES (NEW.id,
	        NEW.gallo5_anillo);
END;$$

DELIMITER $$
CREATE OR REPLACE TRIGGER tg_g5llo2 AFTER UPDATE ON participantes FOR EACH ROW
BEGIN
    UPDATE g5llos
    SET gallo5_anillo= NEW.gallo5_anillo
    WHERE equipo_id= NEW.id;
END;$$