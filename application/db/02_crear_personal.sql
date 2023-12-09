DROP TABLE IF EXISTS personal;
CREATE TABLE personal (
    cve_personal serial,
    nom_personal text,
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
