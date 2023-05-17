/* 
        HERE IS THE DATABASE SCHEME OF VITAL EVENT REGISTRAION SYSTEM.
 */


/* create database named vital_registration_database */

CREATE database vital_registration_database;

/* create person table*/
CREATE TABLE person_table (
	ssn varchar(50),
    image varchar(2048),
	name varchar(50) not null,
    f_name varchar(50)  not null,
    g_name varchar(50)  not null,
    sex varchar(1)  not null,
    birth_date date  not null,
    birth_place varchar(50) not null,
    email varchar(50)  not null,
    pass varchar(50) not null,
    PRIMARY KEY (ssn)
);


/* create birth table */
CREATE TABLE birth_table (
    b_ssn varchar(50), 
    p_ssn varchar(50),
    image varchar(2048),
    name varchar(50)  not null,
    f_name varchar(50)  not null,
    g_name varchar(50)  not null,
    sex varchar(1)  not null,
    birth_date date  not null,
    birth_place varchar(50)  not null,
    PRIMARY KEY(b_ssn),
    FOREIGN KEY(p_ssn) REFERENCES person_table(ssn)	
    on DELETE CASCADE ON UPDATE CASCADE
);


/* create marriage table */
CREATE TABLE marriage_table (
m_ssn varchar(50),
    p_ssn varchar(50),
    image varchar(2048),
    name varchar(50)  not null,
    f_name varchar(50) not null,
    g_name varchar(50) not null,
    birth_date date not null,
    birth_place varchar(50) not null,
    PRIMARY KEY(m_ssn),
    FOREIGN KEY(p_ssn) REFERENCES person_table(ssn) 
    on DELETE CASCADE ON UPDATE CASCADE
);
    
/* create death table */
CREATE TABLE death_table(
	d_ssn varchar(50),
    p_ssn varchar(50),
    image varchar(2048),
    name varchar(50)  not null,
    f_name varchar(50)  not null,
    g_name varchar(50)  not null,
    sex varchar(1)  not null,
    birth_place varchar(50)  not null,
    birth_date date  not null,
    death_date date  not null,
    PRIMARY KEY(d_ssn),
    FOREIGN KEY(p_ssn) REFERENCES person_table(ssn)
    on DELETE CASCADE ON UPDATE CASCADE
);
