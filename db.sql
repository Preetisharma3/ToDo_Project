-- -----------------------------
-- Todo Table
-- -----------------------------

Drop table IF EXISTS tbl_todo;
Create table tbl_todo(
    id SERIAL,
    title text DEFAULT NULL,
    created_on timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_on timestamp NULL ON UPDATE CURRENT_TIMESTAMP
);ENGINE=INNODB DEFAULT CHARSET=utf8;
