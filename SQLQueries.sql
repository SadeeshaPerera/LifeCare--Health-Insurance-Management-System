/*CREATE TABLES*/

/*Table Registered User*/
CREATE TABLE Registered_User
(
        User_ID varchar (15) NOT NULL,
	User_Type varchar (30) NOT NULL,
	First_Name varchar (30) NOT NULL,
	Last_Name varchar (30) NOT NULL,
	U_Email varchar (30) NOT NULL,
	Home_No varchar (10) NOT NULL,
	Street varchar (20) NOT NULL,
	City varchar (20) NOT NULL,
	Postal_Code varchar (15) NOT NULL,
	Country varchar (20) NOT NULL,
	U_PNumber decimal (10,0) NOT NULL,
	DOB date NOT NULL,
	Gender varchar (15) NOT NULL,
	Username varchar (20) NOT NULL,
	Password varchar (255) NOT NULL,

	CONSTRAINT REG_USER_PK PRIMARY KEY(User_ID)
);
       ALTER TABLE Registered_User
	ADD CONSTRAINT RU_EMAIL_CHK CHECK (U_Email LIKE '%_@__%.__%');

	ALTER TABLE Registered_User
	ADD CONSTRAINT GENDER_CHK CHECK (Gender IN ('Male' , 'Female' , 'Custom'));

	ALTER TABLE Registered_User
	ADD CONSTRAINT U_TYPE_CHK CHECK (User_Type IN ('Admin', 'User', 'Developer', 'Agent'));


/*Table Health Care Provider*/
CREATE TABLE Health_Care_Provider
(
       HCP_ID varchar (20) NOT NULL,
	HCP_Name varchar (40) NOT NULL,
	HCP_Email varchar (30) NOT NULL,
	HCP_PNo decimal (10,0) NOT NULL,
	HCP_Address varchar (60) NOT NULL,
	Specialization varchar (80) NOT NULL,
	Service varchar (90) NOT NULL,
	Certification varchar (100) NOT NULL,
	License varchar (100) NOT NULL,

	CONSTRAINT HCP_PK PRIMARY KEY(HCP_ID)
);
       ALTER TABLE Health_Care_Provider
	ADD CONSTRAINT HCP_EMAIL_CHK CHECK (HCP_Email LIKE '%_@__%.__%');

	
/*Table Package*/
CREATE TABLE Package
(
       Pkg_ID varchar (20) NOT NULL,
	Pkg_Name varchar (20) NOT NULL,
	Pkg_Description varchar (200) NOT NULL,
	Deductible real NOT NULL,
	Co_Payment real NOT NULL,
	Max_Coverage_Limit varchar (15) NOT NULL, 
	Payment_Interval varchar (15) NOT NULL,
	Waiting_Period varchar (10) NOT NULL,
	Premium_Amount real NOT NULL,
	Regulation varchar (90) NOT NULL,
	Total_Amount real NOT NULL,

	CONSTRAINT PACKAGE_PK PRIMARY KEY(Pkg_ID)
);


/*Table System*/
CREATE TABLE System
(
       S_ID varchar (15) NOT NULL,
	Version varchar (50) NOT NULL,
	S_Name varchar (30) NOT NULL,
	Installation_Date date NOT NULL,

	CONSTRAINT SYSTEM_PK PRIMARY KEY(S_ID)
);


/*Table Insurance Company*/
CREATE TABLE Insurance_Company
(
       Licence_No varchar (20) NOT NULL,
	C_Name varchar (30) NOT NULL,
	C_PNumber decimal (10,0) NOT NULL,
	C_Email varchar (30) NOT NULL,
	Home_No varchar (10) NOT NULL,
	Street varchar (20) NOT NULL,
	City varchar (20) NOT NULL,
	Postal_Code varchar (15) NOT NULL,
	Country varchar (20) NOT NULL,

	CONSTRAINT INS_COMP_PK PRIMARY KEY(Licence_No)
);
       ALTER TABLE Insurance_Company
	ADD CONSTRAINT INC_EMAIL_CHK CHECK (C_Email LIKE '%_@__%.__%');


/*Table Policy*/
CREATE TABLE Policy
(
       Policy_ID varchar (20) NOT NULL,
	User_ID varchar (15) NOT NULL,
	Pkg_ID varchar (20) NOT NULL,
	Policy_Type varchar (50) NOT NULL,
	Effective_Date date NOT NULL,
	Expiration_Date date NOT NULL,
	Policy_Status varchar (20) NOT NULL,

	CONSTRAINT POLICY_PK PRIMARY KEY(Policy_ID),

	CONSTRAINT POLICY_FK1 FOREIGN KEY(User_ID) REFERENCES Registered_User(User_ID),
	CONSTRAINT POLICY_FK2 FOREIGN KEY(Pkg_ID) REFERENCES Package(Pkg_ID)
);
       ALTER TABLE Policy
	ADD CONSTRAINT POLICY_CHK CHECK (Policy_Status IN ('Active' , 'Inactive' , 'Pending' , 'Denied'));


/*Table Claim*/
CREATE TABLE Claim
(
       Claim_ID varchar (20) NOT NULL,
	Policy_ID varchar (20) NOT NULL,
	User_ID varchar (15) NOT NULL,
	HCP_ID varchar (20) NOT NULL,
       Claim_Type varchar (50) NOT NULL,
       Amount real NOT NULL,
       Status_Type varchar (20) NOT NULL,
       Submission_Date date NOT NULL,
       Processing_Date date NOT NULL,
       Payment_Date date,
	Reason varchar (40) NOT NULL,

       CONSTRAINT CLAIM_PK PRIMARY KEY(Claim_ID),

       CONSTRAINT CLAIM_FK1 FOREIGN KEY(Policy_ID) REFERENCES Policy (Policy_ID),
	CONSTRAINT CLAIM_FK2 FOREIGN KEY(User_ID) REFERENCES Registered_User(User_ID),
	CONSTRAINT CLAIM_FK3 FOREIGN KEY(HCP_ID) REFERENCES Health_Care_Provider(HCP_ID)
);
       ALTER TABLE Claim
       ADD CONSTRAINT CLAIM_CHK CHECK (Status_Type IN ('Approved' , 'Denied' , 'Pending'));










/*INSERT DATA TO THE TABLES*/
 
/*Registered_User Table Details*/
INSERT INTO Registered_User VALUES ('198863184203', 'User', 'Saman', 'Silva', 'samansilva@gmail.com', 'N0.45/2', 'Araliya Road', 'Ja-Ela', '11350', 'Sri Lanka', '0713560160', '1998-03-11', 'Male', 'SamanSilva', '455268a3ff2c93e5010f48baf269d964');

INSERT INTO Registered_User VALUES ('197313046228', 'Admin', 'Ramesh', 'Fernando', 'rameshfernando@gmail.com', 'N0.124/7', 'Deans Road', 'Batticaloa', '30016', 'Sri Lanka', '0714447345', '1973-12-07', 'Male', 'RameshFernando', '3c591ecd96a4d5c39232eb425378b0fb');

INSERT INTO Registered_User VALUES ('199306228473', 'User', 'Thilini', 'Perera', 'thiliniperera@gmail.com', 'N0.167', 'Prince Street', 'Negombo', '11410', 'Sri Lanka', '0703638238', '1993-06-24', 'Female', 'ThiliniPerera', '9ecabe5526e1c896a609ab0202e1697d');

INSERT INTO Registered_User VALUES ('200105338239', 'User', 'Achini', 'Hirunika', 'achinihirunika@gmail.com', 'N0.90/A', 'Church Street', 'Kalutara', '12200', 'Sri Lanka', '0771734892', '2001-05-19', 'Female', 'AchiniHirunika', 'e865dd24837bda79945b185b12fd8539');

INSERT INTO Registered_User VALUES ('198820436752', 'User', 'Harsha', 'Rodrigo', 'harsharodrigo@gmail.com', 'N0.48', 'Flower Road', 'Galle', '80280', 'Sri Lanka', '0782349561', '1988-01-31', 'Male', 'HarshaRodrigo', 'b3486158d6bca48ea7d9972d560d94e8');



/*Health_Care_Provider Table Details*/
INSERT INTO Health_Care_Provider VALUES ('H0001', 'Asiri Health Hospital', 'infochl@asiri.lk', '0114665500', 'No.144, Norris Canal Road, Colombo-10', 'Cardiology and Cardiothoracic Surgery', 'Inpatient Care, Outpatient Care, Emergency Care, Surgery', 'JCI Accreditation, ISO Certification, Ministry of Health Approvals', 'Private Hospital License, Medical Practitioner Licenses');

INSERT INTO Health_Care_Provider VALUES ('H0002', 'Nawaloka Hospital', 'info@nawaloka.com', '0115777777', '23, Deshamanya, H K Dharmadasa Mawatha, Colombo-02', 'Neurology and Neurosurgery', 'Inpatient Care, Outpatient Care, Diagnostic Services', 'JCI Accreditation, ISO Certification, CAP Accreditation', 'Private Hospital License, Medical Practitioner Licenses, Pharmaceutical License');

INSERT INTO Health_Care_Provider VALUES ('H0003', 'National Hospital', 'info@nationalhospital.com', '0112691111', 'The National Hospital of Sri Lanka, Colombo-10', 'Orthopedics and Joint Replacement Surgery', 'Inpatient Care, Outpatient Care, Maternity and Obstetrics', 'Ministry of Health Approvals, Medical Council Approvals, Radiology License', 'Private Hospital License, Medical Practitioner Licenses');

INSERT INTO Health_Care_Provider VALUES ('H0004', 'Hemas Hospital', 'info@hemas.com', '0114731731', '75, Braybrooke Place, Colombo 02', 'Nephrology and Kidney Transplantation', 'Consultations and Outpatient Care, Inpatient Care, Laboratory and Imaging Services', 'Private Hospital License, ISO Certification, Laboratory Accreditation', 'Medical Practitioner Licenses, Pharmaceutical License');

INSERT INTO Health_Care_Provider VALUES ('H0005', 'National Institute of Mental Health', 'info@nimh.health.gov.lk', '0112578234', 'NIMH, Mulleriyawa New Town', 'Psychotherapy and Counseling', 'Psychiatric Assessment and Diagnosis', 'Accreditation from the Ministry of Health, ISO Certification, Research and Academic Affiliations', 'Registration with the Ministry of Health, Professional Licenses of Staff');



/*Package Table Details*/
INSERT INTO Package VALUES ('P0001', 'Basic Package', 'Coverage for hospitalization expenses , Regular health check-ups , Prescription medication coverage', '8000.00', '10000.00', '100000.00', 'Monthly', '5 month', '20000.00', 'Essential Health Benefits, Regulatory Requirements', '150000.00');

INSERT INTO Package VALUES ('P0002', 'Standard Package', 'Full coverage for hospitalization expenses , Regular health check-ups , Prescription medication coverage , Dental and vision coverage', '12000.00', '15000.00', '200000.00', 'Monthly', '3 months', '50000.00', 'Coverage for Medical Services, Pre-authorization and Referral Requirements', '300000.00');

INSERT INTO Package VALUES ('P0003', 'Premium Package', 'Full coverage for hospitalization expenses , Regular health check-ups , Prescription medication coverage , Dental and vision coverage , Specialist consultations', '16000.00', '20000.00', '400000.00', 'Monthly', '1 month', '80000.00', 'Extensive Coverage, Reduced or No Cost-Sharing', '1000000.00');



/*System Table Details*/
INSERT INTO System VALUES ('B4000', 'Epic 2020', 'Epic', '2020-02-23');

INSERT INTO System VALUES ('B4001', 'Cerner HealtheIntent', 'Cerner', '2013-12-02');

INSERT INTO System VALUES ('B4002', 'Optum360 version 2022', 'Optum', '2022-04-29');

INSERT INTO System VALUES ('B4003', 'MedeAnalytics 7.2', 'MedeAnalytics', '2015-09-04');

INSERT INTO System VALUES ('B4004', 'HealthRules 5.0', 'HealthEdge', '2019-01-14');


/*Insurance_Company Table Details*/
INSERT INTO Insurance_Company VALUES ('I001', 'LifeCare', '0112935195', 'lifecare@gmail.com', 'No.17', 'Horton Place', 'Cinnamon Garden', '00700', 'Sri Lanka');



/*Policy Table Details*/
INSERT INTO Policy VALUES ('P100', '198863184203', 'P0003', 'Access Policy', '2019-03-05', '2024-03-05', 'Active');

INSERT INTO Policy VALUES ('P102', '197313046228', 'P0002', 'Encryption Policy', '2020-11-25', '2025-11-25', 'Active');

INSERT INTO Policy VALUES ('P103', '199306228473', 'P0001', 'Auditing Policy', '2023-06-04', '2028-06-04', 'Pending');

INSERT INTO Policy VALUES ('P104', '200105338239', 'P0003', 'Validation Policy', '2017-09-28', '2023-09-28', 'Inactive');

INSERT INTO Policy VALUES ('P105', '198820436752', 'P0002', 'Backup and Recovery Policy', '2018-02-17', '2023-02-17', 'Denied');



/*Claim Table Details*/
INSERT INTO Claim VALUES ('C01', 'P100', '198863184203', 'H0001', 'Medical Claim', '20000.00', 'Pending', '2023-05-31', '2023-06-05', '' , 'Medical Treatment and Hospitalization');

INSERT INTO Claim VALUES ('C02', 'P102', '197313046228', 'H0002', 'Dental Claim', '100000.00', 'Approved', '2022-12-04', '2022-12-10', '2022-12-11', 'Dental Care');

INSERT INTO Claim VALUES ('C03', 'P103', '198863184203', 'H0003', 'Vision/Eye Care Claim', '45000.00', 'Pending', '2023-06-01', '2023-06-06', '' , 'Vision Care');

INSERT INTO Claim VALUES ('C04', 'P104', '200105338239', 'H0004', 'Disability Claim', '50000.00', 'Denied', '2020-07-27', '2020-08-01', '', 'Illness or Injury');

INSERT INTO Claim VALUES ('C05', 'P105', '198820436752', 'H0005', 'Medical Claim', '35000.00', 'Approved', '2021-01-23', '2021-01-28', '2021-01-31', 'Medication Expenses');