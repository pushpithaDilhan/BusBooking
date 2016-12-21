create table customer
	(name		varchar(100), 
	 NIC			varchar(10), 
	 address		varchar(200),
     occupation     varchar(20),
     email          varchar(100),
     username       varchar(32),                // md5 hashed
     password       varchar(32),
     primary key (username),                // md5 hashed
	 
	);

create table login
	(role_id		varchar(10), 
	 username			varchar(32), 
	 password		varchar(32),
     role     varchar(3),
     INDEX (username, password)
	);

CREATE TABLE bus ( `registration_no` VARCHAR(9) NOT NULL , `owner` VARCHAR(100) NOT NULL , `route_no` VARCHAR(10) NOT NULL , PRIMARY KEY (`registration_no`)) ;
INSERT INTO bus (`registration_no`, `owner`, `route_no`) VALUES ('WPNB-1522', 'T.S. Wijenayaka', '255');
INSERT INTO bus (`registration_no`, `owner`, `route_no`) VALUES ('WPNA-8201', 'T.D. Muthuhettigama', '383/2');
INSERT INTO bus (`registration_no`, `owner`, `route_no`) VALUES ('SPME-6739', 'L. Bandara', '02');

CREATE TABLE route ( `route_no` VARCHAR(10) NOT NULL , `first_station` VARCHAR(50) NOT NULL , `second_station` VARCHAR(50) NOT NULL , `price` INT(6) NOT NULL , PRIMARY KEY (`route_no`)) ;
INSERT INTO route (`route_no`, `first_station`, `second_station`, `price`) VALUES ('255', 'Colombo', 'Kandy', '250');
INSERT INTO route (`route_no`, `first_station`, `second_station`, `price`) VALUES ('383/2', 'Jaffna', 'Galle', '530');
INSERT INTO route (`route_no`, `first_station`, `second_station`, `price`) VALUES ('02', 'Galle', 'Colombo', '180');
INSERT INTO route (`route_no`, `first_station`, `second_station`, `price`) VALUES ('92', 'Colombo', 'Kuliyapitiya', '220');

create table owner
	(name		varchar(100), 
	 NIC			varchar(10), 
	 address		varchar(200),    
     email          varchar(100),
     username       varchar(32),               
     password       varchar(32),
     primary key (NIC)         	 
	);

create table active_busses
(
	bus_id varchar(9),
	route_no varchar(6),
	start_loc varchar(20),
	end_loc varchar(20),
	date varchar(10),
	time varchar(8),
	seats_available int
);

INSERT INTO active_busses(`bus_id`, `route_no`, `start_loc`, `end_loc`, `date`, `time`, `seats_available`) VALUES ('WPNA-8201','383/2','Jaffna','Galle','2016/12/20','8.00 AM',54);