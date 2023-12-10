DROP TABLE IF EXISTS empleados;
CREATE TABLE empleados (
    cve_empleado serial,
    nom_empleado text,
    jerarquia text,
    cargo text,
    correo text,
    telefono text,
    region text,
    zona text,
    estado text,
    municipio text,
    ciudad text,
    lat float,
    lon float
);
