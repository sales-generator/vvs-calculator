CREATE TABLE BASE_2017Q1(
  tn_pos VARCHAR(255),
  tn_code VARCHAR(255),
  tn_name TEXT,
  tn_period VARCHAR(255),
  tn_money VARCHAR(255),
  tn_percentage VARCHAR(255),
  tn_region VARCHAR(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE BASE_2017Q2(
  tn_pos VARCHAR(255),
  tn_code VARCHAR(255),
  tn_name TEXT,
  tn_period VARCHAR(255),
  tn_money VARCHAR(255),
  tn_percentage VARCHAR(255),
  tn_region VARCHAR(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IM_new(
  g33 VARCHAR(10) PRIMARY KEY,
  TEXTV TEXT,
  g46 INT(11),
  g38 INT(11),
  g315a INT(11),
  cnt INT(11)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IM_old(
  g33 VARCHAR(10) PRIMARY KEY,
  TEXTV TEXT,
  g46 INT(11),
  g38 INT(11),
  g315a INT(11),
  cnt INT(11)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE EX_new(
  g33 VARCHAR(10) PRIMARY KEY,
  TEXTV TEXT,
  g46 INT(11),
  g38 INT(11),
  g315a INT(11),
  cnt INT(11)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE EX_old(
  g33 VARCHAR(10) PRIMARY KEY,
  TEXTV TEXT,
  g46 INT(11),
  g38 INT(11),
  g315a INT(11),
  cnt INT(11)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE BASE_2017Q1;
DROP TABLE import_new;

SELECT * FROM import_new;

/*test-vss db*/

/*https://vvs-info.ru/widgets/upload/base_quaters.php*/