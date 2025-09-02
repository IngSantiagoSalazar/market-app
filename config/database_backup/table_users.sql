CREATE TABLE USERS(
 id BIGSERIAL PRIMARY KEY, 
 firstname VARCHAR(30) NOT NULL,
 lastname VARCHAR(30) NOT NULL,
 mobile_number VARCHAR(20) NOT NULL,
 ide_number VARCHAR(15) NULL UNIQUE,
 adress TEXT NULL,
 birthday DATE NULL,
 email VARCHAR(200) NOT NULL UNIQUE,
 password TEXT NOT NULL,
 status BOOLEAN NOT NULL DEFAULT TRUE,
 created_at TIMESTAMPTZ NOT NULL DEFAULT now(),
 updated_at TIMESTAMPTZ NOT NULL DEFAULT now(),
 deleted_at TIMESTAMPTZ null
 );
 --insertar nombres tabla
 insert into users (firstname,lastname,mobile_number,email,password)

Values('Santiago','Salazar','3144976641','santiago.salazaar23@gmail.com','1234');