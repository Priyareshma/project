create table useraccount (id int primary key auto_increment not null,firstname varchar(100) not null,lastname varchar(100) not null,dob date not null,gender varchar(100) not null,email varchar(200) not null);
desc useraccount;
alter table useraccount add column token double not null;
alter table useraccount add column otp double not null;
alter table useraccount add column createdtime time not null;
alter table useraccount add column otptime time not null;
alter table useraccount add column status int(10) not null;
select * from useraccount;
 //servername:localhost, Username:newuser , Password:password , Databasename:Sample2
