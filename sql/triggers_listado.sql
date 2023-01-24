DELIMITER $$
CREATE OR REPLACE TRIGGER tg_puntaje AFTER INSERT ON participantes FOR EACH ROW
BEGIN
    INSERT INTO puntajes (id, equipo_id, puntos1, puntos2, puntos3, puntos4, puntos5)
    VALUES (NEW.id,
	    NEW.id,
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
CREATE OR REPLACE TRIGGER tg_clone1 AFTER INSERT ON participantes FOR EACH ROW
BEGIN
    INSERT INTO clonparticipantes (id, equipo, partido, gallo1_anillo, peso1, puntos1,
					   gallo2_anillo, peso2, puntos2,
					   gallo3_anillo, peso3, puntos3,
					   gallo4_anillo, peso4, puntos4,
					   gallo5_anillo, peso5, puntos5)
					   
    VALUES (NEW.id ,NEW.equipo, NEW.partido,
	    NEW.gallo1_anillo, NEW.peso1, NEW.puntos1,
	    NEW.gallo2_anillo, NEW.peso2, NEW.puntos2,
	    NEW.gallo3_anillo, NEW.peso3, NEW.puntos3,
	    NEW.gallo4_anillo, NEW.peso4, NEW.puntos4,
	    NEW.gallo5_anillo, NEW.peso5, NEW.puntos5);
END;$$


DELIMITER $$
CREATE OR REPLACE TRIGGER tg_clone2 AFTER UPDATE ON participantes FOR EACH ROW
BEGIN
    UPDATE clonparticipantes
    SET equipo= NEW.equipo, partido= NEW.partido,
			    gallo1_anillo= NEW.gallo1_anillo, peso1=NEW.peso1, puntos1=NEW.puntos1,
			    gallo2_anillo= NEW.gallo2_anillo, peso2=NEW.peso2, puntos2=NEW.puntos2,
			    gallo3_anillo= NEW.gallo3_anillo, peso3=NEW.peso3, puntos3=NEW.puntos3,
			    gallo4_anillo= NEW.gallo4_anillo, peso4=NEW.peso4, puntos4=NEW.puntos4,
			    gallo5_anillo= NEW.gallo5_anillo, peso5=NEW.peso5, puntos5=NEW.puntos5
			    
    WHERE id= NEW.id;
END;$$


DELIMITER $$
CREATE OR REPLACE TRIGGER tg_deleteclone AFTER DELETE ON participantes FOR EACH ROW
BEGIN
	DELETE FROM clonparticipantes
	WHERE id = OLD.id;
END;$$