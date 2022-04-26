-- mysql

/* Tabla de hechos */

CREATE TABLE FactFireInsuranceSales (
    billing_id  int primary key auto_increment,
    statement_account_no varchar(12) not null,
    statement_date date not null,
    policy_number varchar(12) not null,
    client_id int not null,
    building_city_id int not null,
    product_id int not null,
    premium float not null,
    other_charges float not null,
    total_charges float not null,
    coverage_date_from date not null,
    coverage_date_to date not null,
    total_amount_paid float not null
);

/* Table of dimensions */
CREATE TABLE dimFireInsuranceProducts (
    product_id int primary key AUTO_INCREMENT,
    product_name    varchar(50) not null
);

/* Table of clients */

CREATE TABLE dimClient (
    client_id int primary key auto_increment,
    client_name varchar(50) not null
);

/* Table of cities */

CREATE TABLE dimCity (
    city_id int primary key auto_increment,
    city_name varchar(50) not null,
    state_name varchar(50) not null
);

/* Table of dates */

CREATE TABLE dimDate (
    transaction_date date primary key,
    year SMALLINT not null,
    month_number varchar(2) not null,
    year_month_number varchar(7) not null,
    year_month_short varchar(8) not null,
    month_name_short varchar(3) not null,
    month_name_long varchar(20) not null,
    day_of_week_number TINYINT not null,
    day_of_week varchar(20) not null,
    day_of_week_short varchar(3) not null,
    quarter varchar(2) not null,
    year_quarter varchar(7) not null,
    week_number TINYINT not null
);

