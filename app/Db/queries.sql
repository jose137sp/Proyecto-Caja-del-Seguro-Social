Create database CSS_Ing_web

Create table Paciente (
Cédula char (11) not null
    Constraint Paciente_Cédula_pk primary key 
    Constraint Paciente_Cédula_ck check(Cédula like '[0][1-9][-][0-9][0-9][0-9][-][0-9][0-9][0-9][0-9]'
                                            or Cédula like '[1][0-3][-][0-9][0-9][0-9][-][0-9][0-9][0-9][0-9]'
                                            or Cédula like '[E][-][0-9][-][0-9][0-9][0-9][0-9][0-9][0-9]'),
Nombres varchar (50) not null,
Apellidos varchar (50) not null, 
Fecha_nacimiento date not null,
tipo_de_sangre varchar (2) not null,
Teléfono varchar(10) not null,
Correo_electronico nvarchar(80) not null,
Dirección varchar (100) not null
)
go

Create table citas (
N_Cita int identity (1000,1) not null
    Constraint Citas_ncitas_pk primary key,
fecha_cita datetime not null,
Estado varchar (15) not null
    constraint Estado_cita_ck check (Estado like 'Por asistir' or Estado like 'Asitido'),
Especialidad varchar (25) not null
    constraint Especialidad_citas_ck check (Especialidad like 'Neurología'or Especialidad like 'Cardiología' or Especialidad like 'Gineco-obstetricia' 
    or Especialidad like 'Oftalmología' or Especialidad like 'Geriatría'),
Policlínica varchar (50) not null
    constraint Policlínica_citas_ck check (Policlínica like 'Policlínica especializada de la Caja del Seguro Social' or 
Policlínica like 'Policlínica de la CSS Dr. Carlos N. Brin' or Policlínica like 'Policlínica Dr. Manuel Ferrer Valdés' or Policlínica like 'Policlínica Alejandro De La Guardia' 
or Policlínica like 'Policlínica Dr. Generoso Guardia Caja De Seguro Social')
)
go

Create table Medico (
Ced_Médico char (11) not null
    Constraint Medico_Cédula_pk primary key
    Constraint Medico_Cédula_ck check(Ced_Médico like '[0][1-9][-][0-9][0-9][0-9][-][0-9][0-9][0-9][0-9]'
                                      or Ced_Médico like '[1][0-3][-][0-9][0-9][0-9][-][0-9][0-9][0-9][0-9]'),
Nombre_Médico varchar (50) not null,
Apellido_Médico varchar (50) not null,
Especialidad varchar (25) not null,
Contraseña nvarchar (25) not null
)
go

Create table Policlínica (
Nombre_p varchar (75) not null
    Constraint Pclínica_policlínica_pk primary key,
Dirección varchar (100) not null,
Teléfono_p char (10) not null 
)
go