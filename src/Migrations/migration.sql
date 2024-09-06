CREATE TABLE bike_role(
   Id_role INT AUTO_INCREMENT,
   name VARCHAR(150)  NOT NULL,
   PRIMARY KEY(Id_role)
);
ALTER TABLE bike_role ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE bike_level(
   Id_level INT AUTO_INCREMENT,
   name VARCHAR(100)  NOT NULL,
   PRIMARY KEY(Id_level)
);
ALTER TABLE bike_level ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE bike_type(
   Id_type INT AUTO_INCREMENT,
   name VARCHAR(150)  NOT NULL,
   PRIMARY KEY(Id_type)
);
ALTER TABLE bike_type ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE bike_user(
   Id_user INT AUTO_INCREMENT,
   last_name VARCHAR(150)  NOT NULL,
   first_name VARCHAR(150)  NOT NULL,
   email VARCHAR(150)  NOT NULL,
   password VARCHAR(250)  NOT NULL,
   rgpd DATE NOT NULL,
   Id_role INT NOT NULL,
   PRIMARY KEY(Id_user),
   FOREIGN KEY(Id_role) REFERENCES bike_role(Id_role)
);
ALTER TABLE bike_user ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE bike_route(
   Id_route INT AUTO_INCREMENT,
   name VARCHAR(250)  NOT NULL,
   description TEXT NOT NULL,
   duration TIME NOT NULL,
   distance VARCHAR(50)  NOT NULL,
   elevation VARCHAR(50)  NOT NULL,
   altitude VARCHAR(50)  NOT NULL,
   circuit BOOLEAN NOT NULL,
   creation_date DATETIME NOT NULL,
   map_link VARCHAR(150)  NOT NULL,
   Id_type INT NOT NULL,
   Id_level INT NOT NULL,
   Id_user INT NOT NULL,
   PRIMARY KEY(Id_route),
   FOREIGN KEY(Id_type) REFERENCES bike_type(Id_type),
   FOREIGN KEY(Id_level) REFERENCES bike_level(Id_level),
   FOREIGN KEY(Id_user) REFERENCES bike_user(Id_user)
);
ALTER TABLE bike_route ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE bike_comment(
   Id_comment INT AUTO_INCREMENT,
   text VARCHAR(250) ,
   creation_date DATETIME,
   Id_route INT NOT NULL,
   Id_user INT NOT NULL,
   PRIMARY KEY(Id_comment),
   FOREIGN KEY(Id_route) REFERENCES bike_route(Id_route),
   FOREIGN KEY(Id_user) REFERENCES bike_user(Id_user)
);
ALTER TABLE bike_comment ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE bike_like(
   Id_like INT AUTO_INCREMENT,
   vote INT,
   Id_route INT NOT NULL,
   Id_user INT NOT NULL,
   PRIMARY KEY(Id_like),
   FOREIGN KEY(Id_route) REFERENCES bike_route(Id_route),
   FOREIGN KEY(Id_user) REFERENCES bike_user(Id_user)
);
ALTER TABLE bike_like ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE bike_favourite(
   Id_user INT,
   Id_route INT,
   PRIMARY KEY(Id_user, Id_route),
   FOREIGN KEY(Id_user) REFERENCES bike_user(Id_user),
   FOREIGN KEY(Id_route) REFERENCES bike_route(Id_route)
);
ALTER TABLE bike_favourite ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
