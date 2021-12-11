Create database CSS_Ing_web

Create table Paciente (
cedula char (11) not null
    Constraint Paciente_Cédula_pk primary key 
    Constraint Paciente_Cédula_ck check(Cedula like '[0][1-9][-][0-9][0-9][0-9][-][0-9][0-9][0-9][0-9]'
                                            or Cedula like '[1][0-3][-][0-9][0-9][0-9][-][0-9][0-9][0-9][0-9]'
                                            or Cedula like '[E][-][0-9][-][0-9][0-9][0-9][0-9][0-9][0-9]'),
nombres varchar (50) not null,
apellidos varchar (50) not null, 
fechanac date not null,
tipo_sangre varchar (2) not null,
direccion varchar (100) not null
)
go

Create table citas (
numero_cita int identity (1000,1) not null
    Constraint Citas_ncitas_pk primary key,
fecha_cita date not null,
estado varchar (15) not null default 'Por asistir'
    constraint Estado_cita_ck check (Estado like 'Por asistir' or Estado like 'Asitido'),
id_medico int (11) not null
    constraint citas_IDmedico_fk foreign key (id_medico)
        references Medico (id_medico),
id_especialidad int not null
    constraint Especialidad_citas_ck check (Especialidad like 'Neurología'or Especialidad like 'Cardiología' or Especialidad like 'Gineco-obstetricia' 
    or Especialidad like 'Oftalmología' or Especialidad like 'Geriatría')
    constraint Especialidad_citas_fk foreign key (id_especialidad)
        references Especialidad (id_especialidad)
        on update cascade,
id_policlínica int not null
    constraint Policlínica_citas_ck check (Policlínica like 'Policlínica especializada de la Caja del Seguro Social' or 
Policlínica like 'Policlínica de la CSS Dr. Carlos N. Brin' or Policlínica like 'Policlínica Dr. Manuel Ferrer Valdés' or Policlínica like 'Policlínica Alejandro De La Guardia' 
or Policlínica like 'Policlínica Dr. Generoso Guardia Caja De Seguro Social')
    constraint citas_id_policlinica_fk foreign key (id_policlínica)
        references policlínica(Cod_p)

cedula_paciente varchar (11)
    constraint citas_cedulapaciente_fk foreign key (cedula_paciente)
        references paciente(cedula) 
)
go

Create table Medico (
id_medico int identity(1,1) not null
    constraint id_medico_pk primary key,
cedula_medico char (11) not null
    Constraint Medico_Cédula_ck check(Ced_Médico like '[0][1-9][-][0-9][0-9][0-9][-][0-9][0-9][0-9][0-9]'
                                    or Ced_Médico like '[1][0-3][-][0-9][0-9][0-9][-][0-9][0-9][0-9][0-9]'),
nombre_medico varchar (50) not null,
apellido_medico varchar (50) not null,
especialidad_medico int not null,
    constraint especialidad_medico_fk foreign key (especialidad_medico)
        references Especialidad (cod_e)
)
go

Create table Especialidad (
id_especialidad int identity (1,1) not null
	constraint code_especialidad_pk primary key,
nombre_especialidad varchar (25) not null,
id_medico char (11) not null
    constraint especialidad_IDmedico_fl foreign key (id_medico)
        references Medico (id_medico)
)
go

Create table Policlínica (
id_policlinica  int identity(1,1) not null
    Constraint codp_policlínica_pk primary key,
nombre_poli varchar (75) not null,
direccion_poli varchar (100) not null,
telefono_poli char (10) not null 
)
go

Create table Contacto (
numero_cita int identity (1000,1) not null
    constraint contacto_numerocita_fk foreign key (N_Cita)
        references citas (N_Cita),
cedula_paciente char (11) not null
    constraint contacto_cedulapaciente_fk foreign key (cedula_paciente)
        references paciente(Cedula),
telefono varchar(10) not null,
email nvarchar(80) not null,
constraint ncitapaciente_citap_pk primary key (N_cita,Paciente_ced)
)
go

Create table registro_citas (
cedula_medico char (11) not null
    constraint Medced_citam_fk foreign key (Medico_ced)
        references Medico (Ced_Médico),
numero_cita int identity (1000,1) not null 
    constraint ncita_citam_fk foreign key (N_Cita)
        references citas (N_Cita),
fecha_cita
constraint ncitamedico_citap_pk primary key (N_cita,Medico_ced)
)
go