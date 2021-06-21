-- Sergio Garcia


USE SMARTPHONES;


-- Insercion de usuarios
INSERT INTO 100_USUARIOS
( 100_idusuario, 100_nick, 100_correo, 100_contrasena )
VALUES
( 1, "admin", "marcos12@gmail.com", "admin" ),
( 2, "blas_lv", "blaslorenzo@hotmail.com", "admin" ),
( 3, "ACC-76", "abril76@gmail.com", "admin" ),
( 4, "lucas89", "oteroparralucas@outlook.com", "admin" ),
( 5, "albarubio", "alba_rubio19@outlook.es", "admin" ),
( 6, "osquitar", "oscarmoreno@gmail.com", "admin" ),
( 7, "83abel", "contrerasramos23@gmail.es", "admin" ),
( 8, "clarita", "clarita03@gmail.com", "admin" ),
( 9, "daniPrieto", "daniprieto@outlook.com", "admin" ),
( 10, "68Gema", "gemafernandez@outlook.es", "admin" ),
( 11, "crespo21", "lara_crespo_guillen@gmail.es", "admin" ),
( 12, "olgui9", "olga9serrano@gmail.es", "admin" ),
( 13, "bruneted", "diazrueda97@hotmail.es", "admin" ),
( 14, "sara826", "sara826@gmail.com", "admin" ),
( 15, "zoe101", "zoe101@gmail.com", "admin" ),
( 16, "ericdlrio", "ericdelrio18@outlook.es", "admin" ),
( 17, "paulita-11", "paulabernal@gmail.es", "admin" ),
( 18, "ra02ul", "raulcamacho74@hotmail.com", "admin" ),
( 19, "1ker", "1ker-Perez@gmail.com", "admin" );


-- Insercion de redes
INSERT INTO 200_REDES
( 200_idred, 200_nombre )
VALUES
( 1, "2G" ),
( 2, "3G" ),
( 3, "4G" ),
( 4, "5G" );


-- Insercion de sensores
INSERT INTO 300_SENSORES
( 300_idsensor, 300_nombre )
VALUES
( 1, "NFC" ),
( 2, "Lector de huellas" ),
( 3, "Reconocimiento facial" ),
( 4, "Lector de iris" );


-- Insercion de colores
INSERT INTO 400_COLORES
( 400_idcolor, 400_nombre )
VALUES
( 1, "Rojo" ),
( 2, "Azul" ),
( 3, "Verde" ),
( 4, "Purpura" ),
( 5, "Amarillo" ),
( 6, "Blanco" ),
( 7, "Negro" ),
( 8, "Naranja" ),
( 9, "Rosa" ),
( 10, "Dorado" ),
( 11, "Gris" );


-- Insercion tipos de sim
INSERT INTO 500_SIM
( 500_idsim, 500_nombre )
VALUES
( 1, "SIM" ),
( 2, "Micro SIM" ),
( 3, "Nano SIM" ),
( 4, "eSIM" );


-- Insercion de procesadores
INSERT INTO 600_PROCESADORES
( 600_idprocesador, 600_nombre )
VALUES
( 1, "Exynos 7884" ),
( 2, "Exynos 7904" ),
( 3, "Exynos 5410" ),
( 4, "Exynos 8890" ),
( 5, "Exynos 9810" ),
( 6, "A11 Bionic" ),
( 7, "A12 Bionic" ),
( 8, "Snapdragon 821" ),
( 9, "Snapdragon 670" ),
( 10, "Snapdragon 801" ),
( 11, "Snapdragon 835" ),
( 12, "Snapdragon 412" ),
( 13, "Snapdragon 636" );


-- Insercion de sistemas operativos
INSERT INTO 700_SO
( 700_idso, 700_nombre )
VALUES
( 1, "Android" ),
( 2, "IOS" );


-- Insercion de paises
INSERT INTO 800_PAISES
( 800_idpais, 800_iso1, 800_iso2, 800_nombre )
VALUES
( "4", "AF", "AFG", "Afganistán" ),
( "248", "AX", "ALA", "Islas Gland" ),
( "8", "AL", "ALB", "Albania" ),
( "276", "DE", "DEU", "Alemania" ),
( "20", "AD", "AND", "Andorra" ),
( "24", "AO", "AGO", "Angola" ),
( "660", "AI", "AIA", "Anguilla" ),
( "10", "AQ", "ATA", "Antártida" ),
( "28", "AG", "ATG", "Antigua y Barbuda " ),
( "530", "AN", "ANT", "Antillas Holandesas" ),
( "682", "SA", "SAU", "Arabia Saudí" ),
( "12", "DZ", "DZA", "Argelia" ),
( "32", "AR", "ARG", "Argentina" ),
( "51", "AM", "ARM", "Armenia" ),
( "533", "AW", "ABW", "Aruba" ),
( "36", "AU", "AUS", "Australia" ),
( "40", "AT", "AUT", "Austria" ),
( "31", "AZ", "AZE", "Azerbaiyán" ),
( "44", "BS", "BHS", "Bahamas" ),
( "48", "BH", "BHR", "Bahréin" ),
( "50", "BD", "BGD", "Bangladesh" ),
( "52", "BB", "BRB", "Barbados" ),
( "112", "BY", "BLR", "Bielorrusia" ),
( "56", "BE", "BEL", "Bélgica" ),
( "84", "BZ", "BLZ", "Belice" ),
( "204", "BJ", "BEN", "Benin" ),
( "60", "BM", "BMU", "Bermudas" ),
( "64", "BT", "BTN", "Bhután" ),
( "68", "BO", "BOL", "Bolivia" ),
( "70", "BA", "BIH", "Bosnia y Herzegovina" ),
( "72", "BW", "BWA", "Botsuana" ),
( "74", "BV", "BVT", "Isla Bouvet" ),
( "76", "BR", "BRA", "Brasil" ),
( "96", "BN", "BRN", "Brunéi" ),
( "100", "BG", "BGR", "Bulgaria" ),
( "854", "BF", "BFA", "Burkina Faso" ),
( "108", "BI", "BDI", "Burundi" ),
( "132", "CV", "CPV", "Cabo Verde" ),
( "136", "KY", "CYM", "Islas Caimán" ),
( "116", "KH", "KHM", "Camboya" ),
( "120", "CM", "CMR", "Camerún" ),
( "124", "CA", "CAN", "Canadá" ),
( "140", "CF", "CAF", "República Centroafricana" ),
( "148", "TD", "TCD", "Chad" ),
( "203", "CZ", "CZE", "República Checa" ),
( "152", "CL", "CHL", "Chile" ),
( "156", "CN", "CHN", "China" ),
( "196", "CY", "CYP", "Chipre" ),
( "162", "CX", "CXR", "Isla de Navidad" ),
( "336", "VA", "VAT", "Ciudad del Vaticano" ),
( "166", "CC", "CCK", "Islas Cocos" ),
( "170", "CO", "COL", "Colombia" ),
( "174", "KM", "COM", "Comoras" ),
( "180", "CD", "COD", "República Democrática del Congo" ),
( "178", "CG", "COG", "Congo" ),
( "184", "CK", "COK", "Islas Cook" ),
( "408", "KP", "PRK", "Corea del Norte" ),
( "410", "KR", "KOR", "Corea del Sur" ),
( "384", "CI", "CIV", "Costa de Marfil" ),
( "188", "CR", "CRI", "Costa Rica" ),
( "191", "HR", "HRV", "Croacia" ),
( "192", "CU", "CUB", "Cuba" ),
( "208", "DK", "DNK", "Dinamarca" ),
( "212", "DM", "DMA", "Dominica" ),
( "214", "DO", "DOM", "República Dominicana" ),
( "218", "EC", "ECU", "Ecuador" ),
( "818", "EG", "EGY", "Egipto" ),
( "222", "SV", "SLV", "El Salvador" ),
( "784", "AE", "ARE", "Emiratos Árabes Unidos" ),
( "232", "ER", "ERI", "Eritrea" ),
( "703", "SK", "SVK", "Eslovaquia" ),
( "705", "SI", "SVN", "Eslovenia" ),
( "724", "ES", "ESP", "España" ),
( "581", "UM", "UMI", "Islas ultramarinas de Estados Unidos" ),
( "840", "US", "USA", "Estados Unidos" ),
( "233", "EE", "EST", "Estonia" ),
( "231", "ET", "ETH", "Etiopía" ),
( "234", "FO", "FRO", "Islas Feroe" ),
( "608", "PH", "PHL", "Filipinas" ),
( "246", "FI", "FIN", "Finlandia" ),
( "242", "FJ", "FJI", "Fiyi" ),
( "250", "FR", "FRA", "Francia" ),
( "266", "GA", "GAB", "Gabón" ),
( "270", "GM", "GMB", "Gambia" ),
( "268", "GE", "GEO", "Georgia" ),
( "239", "GS", "SGS", "Islas Georgias del Sur y Sandwich del Sur" ),
( "288", "GH", "GHA", "Ghana" ),
( "292", "GI", "GIB", "Gibraltar" ),
( "308", "GD", "GRD", "Granada" ),
( "300", "GR", "GRC", "Grecia" ),
( "304", "GL", "GRL", "Groenlandia" ),
( "312", "GP", "GLP", "Guadalupe" ),
( "316", "GU", "GUM", "Guam" ),
( "320", "GT", "GTM", "Guatemala" ),
( "254", "GF", "GUF", "Guayana Francesa" ),
( "324", "GN", "GIN", "Guinea" ),
( "226", "GQ", "GNQ", "Guinea Ecuatorial" ),
( "624", "GW", "GNB", "Guinea-Bissau" ),
( "328", "GY", "GUY", "Guyana" ),
( "332", "HT", "HTI", "Haití" ),
( "334", "HM", "HMD", "Islas Heard y McDonald" ),
( "340", "HN", "HND", "Honduras" ),
( "344", "HK", "HKG", "Hong Kong" ),
( "348", "HU", "HUN", "Hungría" ),
( "356", "IN", "IND", "India" ),
( "360", "ID", "IDN", "Indonesia" ),
( "364", "IR", "IRN", "Irán" ),
( "368", "IQ", "IRQ", "Iraq" ),
( "372", "IE", "IRL", "Irlanda" ),
( "352", "IS", "ISL", "Islandia" ),
( "376", "IL", "ISR", "Israel" ),
( "380", "IT", "ITA", "Italia" ),
( "388", "JM", "JAM", "Jamaica" ),
( "392", "JP", "JPN", "Japón" ),
( "400", "JO", "JOR", "Jordania" ),
( "398", "KZ", "KAZ", "Kazajstán" ),
( "404", "KE", "KEN", "Kenia" ),
( "417", "KG", "KGZ", "Kirguistán" ),
( "296", "KI", "KIR", "Kiribati" ),
( "414", "KW", "KWT", "Kuwait" ),
( "418", "LA", "LAO", "Laos" ),
( "426", "LS", "LSO", "Lesotho" ),
( "428", "LV", "LVA", "Letonia" ),
( "422", "LB", "LBN", "Líbano" ),
( "430", "LR", "LBR", "Liberia" ),
( "434", "LY", "LBY", "Libia" ),
( "438", "LI", "LIE", "Liechtenstein" ),
( "440", "LT", "LTU", "Lituania" ),
( "442", "LU", "LUX", "Luxemburgo" ),
( "446", "MO", "MAC", "Macao" ),
( "807", "MK", "MKD", "ARY Macedonia" ),
( "450", "MG", "MDG", "Madagascar" ),
( "458", "MY", "MYS", "Malasia" ),
( "454", "MW", "MWI", "Malawi" ),
( "462", "MV", "MDV", "Maldivas" ),
( "466", "ML", "MLI", "Malí" ),
( "470", "MT", "MLT", "Malta" ),
( "238", "FK", "FLK", "Islas Malvinas" ),
( "580", "MP", "MNP", "Islas Marianas del Norte" ),
( "504", "MA", "MAR", "Marruecos" ),
( "584", "MH", "MHL", "Islas Marshall" ),
( "474", "MQ", "MTQ", "Martinica" ),
( "480", "MU", "MUS", "Mauricio" ),
( "478", "MR", "MRT", "Mauritania" ),
( "175", "YT", "MYT", "Mayotte" ),
( "484", "MX", "MEX", "México" ),
( "583", "FM", "FSM", "Micronesia" ),
( "498", "MD", "MDA", "Moldavia" ),
( "492", "MC", "MCO", "Mónaco" ),
( "496", "MN", "MNG", "Mongolia" ),
( "500", "MS", "MSR", "Montserrat" ),
( "508", "MZ", "MOZ", "Mozambique" ),
( "104", "MM", "MMR", "Myanmar" ),
( "516", "NA", "NAM", "Namibia" ),
( "520", "NR", "NRU", "Nauru" ),
( "524", "NP", "NPL", "Nepal" ),
( "558", "NI", "NIC", "Nicaragua" ),
( "562", "NE", "NER", "Níger" ),
( "566", "NG", "NGA", "Nigeria" ),
( "570", "NU", "NIU", "Niue" ),
( "574", "NF", "NFK", "Isla Norfolk" ),
( "578", "NO", "NOR", "Noruega" ),
( "540", "NC", "NCL", "Nueva Caledonia" ),
( "554", "NZ", "NZL", "Nueva Zelanda" ),
( "512", "OM", "OMN", "Omán" ),
( "528", "NL", "NLD", "Países Bajos" ),
( "586", "PK", "PAK", "Pakistán" ),
( "585", "PW", "PLW", "Palau" ),
( "275", "PS", "PSE", "Palestina" ),
( "591", "PA", "PAN", "Panamá" ),
( "598", "PG", "PNG", "Papúa Nueva Guinea" ),
( "600", "PY", "PRY", "Paraguay" ),
( "604", "PE", "PER", "Perú" ),
( "612", "PN", "PCN", "Islas Pitcairn" ),
( "258", "PF", "PYF", "Polinesia Francesa" ),
( "616", "PL", "POL", "Polonia" ),
( "620", "PT", "PRT", "Portugal" ),
( "630", "PR", "PRI", "Puerto Rico" ),
( "634", "QA", "QAT", "Qatar" ),
( "826", "GB", "GBR", "Reino Unido" ),
( "638", "RE", "REU", "Reunión" ),
( "646", "RW", "RWA", "Ruanda" ),
( "642", "RO", "ROU", "Rumania" ),
( "643", "RU", "RUS", "Rusia" ),
( "732", "EH", "ESH", "Sahara Occidental" ),
( "90", "SB", "SLB", "Islas Salomón" ),
( "882", "WS", "WSM", "Samoa" ),
( "16", "AS", "ASM", "Samoa Americana" ),
( "659", "KN", "KNA", "San Cristóbal y Nevis" ),
( "674", "SM", "SMR", "San Marino" ),
( "666", "PM", "SPM", "San Pedro y Miquelón" ),
( "670", "VC", "VCT", "San Vicente y las Granadinas" ),
( "654", "SH", "SHN", "Santa Helena" ),
( "662", "LC", "LCA", "Santa Lucía" ),
( "678", "ST", "STP", "Santo Tomé y Príncipe" ),
( "686", "SN", "SEN", "Senegal" ),
( "891", "CS", "SCG", "Serbia y Montenegro" ),
( "690", "SC", "SYC", "Seychelles" ),
( "694", "SL", "SLE", "Sierra Leona" ),
( "702", "SG", "SGP", "Singapur" ),
( "760", "SY", "SYR", "Siria" ),
( "706", "SO", "SOM", "Somalia" ),
( "144", "LK", "LKA", "Sri Lanka" ),
( "748", "SZ", "SWZ", "Suazilandia" ),
( "710", "ZA", "ZAF", "Sudáfrica" ),
( "736", "SD", "SDN", "Sudán" ),
( "752", "SE", "SWE", "Suecia" ),
( "756", "CH", "CHE", "Suiza" ),
( "740", "SR", "SUR", "Surinam" ),
( "744", "SJ", "SJM", "Svalbard y Jan Mayen" ),
( "764", "TH", "THA", "Tailandia" ),
( "158", "TW", "TWN", "Taiwán" ),
( "834", "TZ", "TZA", "Tanzania" ),
( "762", "TJ", "TJK", "Tayikistán" ),
( "86", "IO", "IOT", "Territorio Británico del Océano Índico" ),
( "260", "TF", "ATF", "Territorios Australes Franceses" ),
( "626", "TL", "TLS", "Timor Oriental" ),
( "768", "TG", "TGO", "Togo" ),
( "772", "TK", "TKL", "Tokelau" ),
( "776", "TO", "TON", "Tonga" ),
( "780", "TT", "TTO", "Trinidad y Tobago" ),
( "788", "TN", "TUN", "Túnez" ),
( "796", "TC", "TCA", "Islas Turcas y Caicos" ),
( "795", "TM", "TKM", "Turkmenistán" ),
( "792", "TR", "TUR", "Turquía" ),
( "798", "TV", "TUV", "Tuvalu" ),
( "804", "UA", "UKR", "Ucrania" ),
( "800", "UG", "UGA", "Uganda" ),
( "858", "UY", "URY", "Uruguay" ),
( "860", "UZ", "UZB", "Uzbekistán" ),
( "548", "VU", "VUT", "Vanuatu" ),
( "862", "VE", "VEN", "Venezuela" ),
( "704", "VN", "VNM", "Vietnam" ),
( "92", "VG", "VGB", "Islas Vírgenes Británicas" ),
( "850", "VI", "VIR", "Islas Vírgenes de los Estados Unidos" ),
( "876", "WF", "WLF", "Wallis y Futuna" ),
( "887", "YE", "YEM", "Yemen" ),
( "262", "DJ", "DJI", "Yibuti" ),
( "894", "ZM", "ZMB", "Zambia" ),
( "716", "ZW", "ZWE", "Zimbabue");


-- Insercion de camaras
INSERT INTO 900_CAMARAS
( 900_idcamara, 900_mp, 900_focal )
VALUES
( 1, 13, 1.9 ),
( 2, 5, 2.0 ),
( 3, 5, 2.2 ),
( 4, 8, 2.0 ),
( 5, 16, 1.7 ),
( 6, 16, 2.0 ),
( 7, 13, 2.2 ),
( 8, 2, 2.4 ),
( 9, 12, 1.7 ),
( 10, 5, 1.7 ),
( 11, 12, 1.5 ),
( 12, 8, 1.7 ),
( 13, 12, 1.8 ),
( 14, 12, 2.4 ),
( 15, 7, 2.2 ),
( 16, 12, 1.8 ),
( 17, 12, 2.4 ),
( 18, 12, 2.0 ),
( 19, 8, 2.4 ),
( 20, 8, 2.2 ),
( 21, 13, 2.0 ),
( 22, 20, 2.6 );


-- Insercion de memorias ram
INSERT INTO 1000_RAM
( 1000_idram, 1000_memoria, 1000_mag )
VALUES
( 1, 2, "GB" ),
( 2, 3, "GB" ),
( 3, 4, "GB" ),
( 4, 6, "GB" ),
( 5, 8, "GB" );


-- Insercion de almacenamientos internos
INSERT INTO 2000_ALMACENAMIENTOS
( 2000_idalmacenamiento, 2000_memoria, 2000_mag )
VALUES
( 1, 16, "GB" ),
( 2, 32, "GB" ),
( 3, 64, "GB" ),
( 4, 128, "GB" ),
( 5, 256, "GB" ),
( 6, 512, "GB" );


-- Insercion de marcas
INSERT INTO 850_MARCAS
( 850_idmarca, 850_nombre, 800_idpais )
VALUES
( 1, "Samsung", "410" ),
( 2, "Apple", "840" ),
( 3, "Google", "840" ),
( 4, "Huawei", "156" ),
( 5, "Xiaomi", "156" ),
( 6, "OnePlus", "156"),
( 7, "BQ", "724" );


-- Insercion de familias
INSERT INTO 852_SMARTPHONES
( 852_idsmartphone, 852_familia, 850_idmarca, 700_idso )
VALUES
( 1, "Galaxy A", 1, 1 ),
( 2, "Galaxy S", 1, 1 ),
( 3, "iPhone X", 2, 2 ),
( 4, "Pixel", 3, 1 ),
( 5, "1+", 6, 1 ),
( 6, "Aquaris X", 7, 1 );


-- Insercion de modelos
INSERT INTO 855_MODELOS
( 855_idmodelo, 855_nombre, 855_anio, 855_alto, 855_ancho, 855_grosor, 855_peso, 855_bateria, 855_multisim, 855_sd, 855_jack, 500_idsim, 600_idprocesador, 852_idsmartphone )
VALUES
( 1, "Galaxy A10", "2019", 155.6, 75.6, 7.9, 168, 3400, true, true, true, 3, 1, 1 ),
( 2, "Galaxy A20", "2019", 158.4, 74.7, 7.8, 169, 4000, true, true, true, 3, 1, 1 ),
( 3, "Galaxy A30", "2019", 158.5, 74.7, 7.7, 165, 4000, true, true, true, 3, 2, 1 ),
( 4, "Galaxy S4", "2013", 136.6, 69.8, 7.9, 130, 2600, false, true, true, 2, 3, 2 ),
( 5, "Galaxy S7", "2016", 142.4, 69.6, 7.9, 152, 3000, false, true, true, 3, 4, 2 ),
( 6, "Galaxy S9", "2018", 147.7, 68.7, 8.5, 163, 3000, false, true, true, 3, 5, 2 ),
( 7, "iPhone X", "2017", 143.6, 70.9, 7.7, 174, 2716, false, false, false, 3, 6, 3 ),
( 8, "iPhone XR", "2018", 150.9, 75.7, 8.3, 194, 2942, true, false, false, 3, 7, 3 ),
( 9, "iPhone XS", "2017", 143.6, 70.9, 7.7, 177, 2658, true, false, false, 4, 7, 3 ),
( 10, "Pixel", "2016", 143.8, 69.5, 8.5, 143, 2770, false, false, true, 3, 8, 4 ),
( 11, "Pixel 3a", "2019", 151.3, 70.1, 8.2, 147, 3000, false, false, true, 3, 9, 4 ),
( 12, "OnePlus One", "2014", 152.9, 75.9, 8.9, 162, 3100, false, false, true, 2, 10, 5 ),
( 13, "OnePlus 5", "2017", 154.2, 74.1, 7.3, 153, 3300, true, false, true, 3, 11, 5 ),
( 14, "Aquaris X5", 2015, 144.4, 70.5, 7.5, 148, 2900, true, true, true, 3, 12, 6 ),
( 15, "Aquaris X2", 2018, 150.7, 72.3, 8.3, 163, 3100, true, true, true, 3, 13, 6 );


-- Insercion de comentarios de los usuarios
INSERT INTO 150_COMENTARIOS
( 150_idcomentario, 150_comentario, 150_fecha, 855_idmodelo, 100_idusuario )
VALUES
( null, "1", "2000/01/01", 1, 1 ),
( null, "2", "2000/01/01", 1, 1 ),
( null, "3", "2000/01/01", 1, 1 ),
( null, "4", "2000/01/01", 1, 2 ),
( null, "5", "2000/01/01", 1, 2 ),
( null, "6", "2000/01/01", 1, 2 ),
( null, "7", "2000/01/01", 1, 3 ),
( null, "8", "2000/01/01", 1, 3 ),
( null, "9", "2000/01/01", 1, 3 ),
( null, "10", "2000/01/01", 1, 4 ),
( null, "11", "2000/01/01", 1, 4 ),
( null, "12", "2000/01/01", 1, 5 ),
( null, "13", "2000/01/01", 1, 5 ),
( null, "14", "2000/01/01", 1, 6 ),
( null, "15", "2000/01/01", 1, 6 ),
( null, "16", "2000/01/01", 1, 7 ),
( null, "17", "2000/01/01", 1, 7 ),
( null, "18", "2000/01/01", 1, 8 ),
( null, "19", "2000/01/01", 1, 9 ),
( null, "20", "2000/01/01", 1, 10 ),
( null, "21", "2000/01/01", 1, 10 ),
( null, "22", "2000/01/01", 1, 10 ),
( null, "23", "2000/01/01", 1, 10 ),
( null, "24", "2000/01/01", 1, 11 ),
( null, "25", "2000/01/01", 1, 12 ),
( null, "26", "2000/01/01", 1, 13 ),
( null, "27", "2000/01/01", 1, 14 ),
( null, "28", "2000/01/01", 1, 14 ),
( null, "29", "2000/01/01", 1, 14 ),
( null, "30", "2000/01/01", 1, 14 ),
( null, "31", "2000/01/01", 1, 15 ),
( null, "32", "2000/01/01", 1, 15 ),
( null, "33", "2000/01/01", 1, 15 ),
( null, "34", "2000/01/01", 1, 16 ),
( null, "35", "2000/01/01", 1, 17 ),
( null, "36", "2000/01/01", 1, 18 ),
( null, "37", "2000/01/01", 1, 18 ),
( null, "38", "2000/01/01", 1, 19 );


-- Relacion de los modelos y sus conectividades
INSERT INTO 255_MODELOS_REDES
( 855_idmodelo, 200_idred )
VALUES
( 1, 1 ),
( 1, 2 ),
( 1, 3 ),
( 2, 1 ),
( 2, 2 ),
( 2, 3 ),
( 3, 1 ),
( 3, 2 ),
( 3, 3 ),
( 4, 1 ),
( 4, 2 ),
( 5, 1 ),
( 5, 2 ),
( 5, 3 ),
( 6, 1 ),
( 6, 2 ),
( 6, 3 ),
( 7, 1 ),
( 7, 2 ),
( 7, 3 ),
( 8, 1 ),
( 8, 2 ),
( 8, 3 ),
( 9, 1 ),
( 9, 2 ),
( 9, 3 ),
( 9, 4 ),
( 10, 1 ),
( 10, 2 ),
( 10, 3 ),
( 11, 1 ),
( 11, 2 ),
( 11, 3 ),
( 12, 1 ),
( 12, 2 ),
( 12, 3 ),
( 13, 1 ),
( 13, 2 ),
( 13, 3 ),
( 14, 1 ),
( 14, 2 ),
( 14, 3 ),
( 15, 1 ),
( 15, 2 ),
( 15, 3 );


-- Relacion de los modelos y sus sensores
INSERT INTO 355_MODELOS_SENSORES
( 855_idmodelo, 300_idsensor )
VALUES
( 1, 3 ),
( 2, 2 ),
( 2, 3 ),
( 3, 2 ),
( 3, 3 ),
( 4, 1 ),
( 5, 1 ),
( 5, 2 ),
( 6, 1 ),
( 6, 2 ),
( 6, 3 ),
( 6, 4 ),
( 7, 1 ),
( 7, 3 ),	
( 8, 1 ),
( 8, 3 ),
( 9, 1 ),	
( 9, 3 ),
( 10, 1 ),
( 10, 2 ),
( 11, 1 ),
( 11, 2 ),
( 12, 1 ),
( 13, 1 ),
( 13, 2 ),
( 13, 3 ),
( 15, 1 ),
( 15, 2 );


-- Relacion de los modelos y sus colores
INSERT INTO 455_MODELOS_COLORES
( 855_idmodelo, 400_idcolor )
VALUES
( 1, 1 ),
( 1, 2 ),
( 1, 7 ),
( 2, 1 ),
( 2, 2 ),
( 2, 7 ),
( 2, 9 ),
( 3, 1 ),
( 3, 2 ),
( 3, 7 ),
( 4, 2 ),
( 4, 6 ),
( 4, 7 ),
( 5, 6 ),
( 5, 7 ),
( 5, 9 ),
( 5, 10 ),
( 5, 11 ),
( 6, 1 ),
( 6, 2 ),
( 6, 4 ),
( 6, 7 ),
( 6, 10 ),
( 6, 11 ),
( 7, 7 ),
( 7, 11 ),
( 8, 1 ),
( 8, 2 ),
( 8, 5 ),
( 8, 6 ),
( 8, 7 ),
( 8, 9 ),
( 9, 7 ),
( 9, 10 ),
( 9, 11 ),
( 10, 2 ),
( 10, 7 ),
( 10, 11 ),
( 11, 4 ),
( 11, 6 ),
( 11, 7 ),
( 12, 6 ),
( 12, 7 ),
( 13, 7 ),
( 13, 11 ),
( 14, 6 ),
( 14, 7 ),
( 14, 9 ),
( 15, 6 ),
( 15, 7 );


-- Insercion de las imagenes de cada modelo
INSERT INTO 857_IMAGENES
( 857_idimagen, 857_ruta, 855_idmodelo )
VALUES
( null, "imgs/Galaxy A10.png", 1 ),
( null, "imgs/Galaxy A20.png", 2 ),
( null, "imgs/Galaxy A30.png", 3 ),
( null, "imgs/Galaxy S4.png", 4 ),
( null, "imgs/Galaxy S7.png", 5 ),
( null, "imgs/Galaxy S9.png", 6 ),
( null, "imgs/iPhoneX.png", 7 ),
( null, "imgs/iPhoneXR.png", 8 ),
( null, "imgs/iPhoneXS.png", 9 ),
( null, "imgs/Pixel.png", 10 ),
( null, "imgs/Pixel 3a.png", 11 ),
( null, "imgs/OnePlus One.png", 12 ),
( null, "imgs/OnePlus 5.png", 13 ),
( null, "imgs/Aquaris X5.png", 14 ),
( null, "imgs/Aquaris X2.png", 15 );


-- Relacion de los modelos y sus camaras
INSERT INTO 955_MODELOS_CAMARAS
( 855_idmodelo, 900_idcamara, 955_video, 955_numero, 955_tipo )
VALUES
( 1, 1, "1080p@30fps", 1, true ),
( 1, 2, null, 1, false ),
( 2, 1, "1080p@30fps", 1, true ),
( 2, 3, null, 2, true ),
( 2, 4, null, 1, false ),
( 3, 5, "1080p@30fps", 1, true ),
( 3, 3, null, 2, true ),
( 3, 6, null, 1, false ),
( 4, 7, "1080p@30fps", 1, true ),
( 4, 8, null, 1, false ),
( 5, 9, "2160p@30fps", 1, true ),
( 5, 10, null, 1, false ),
( 6, 11, "2160p@60fps", 1, true ),
( 6, 12, "1440p@30fps", 1, false ),
( 7, 13, "2160p@60fps", 1, true ),
( 7, 14, null, 2, true ),
( 7, 15, "1080p@30fps", 1, false ),
( 8, 13, "2160p@60fps", 1, true ),
( 8, 15, "1080p@60fps", 1, false ),
( 9, 16, "2160p@60fps", 1, true ),
( 9, 17, null, 2, true ),
( 9, 15, "1080p@60fps", 1, false ),
( 10, 18, "2160p@30fps", 1, true ),
( 10, 19, "1080p@30fps", 1, false ),
( 11, 16, "2160p@30fps", 1, true ),
( 11, 20, "1080p@30fps", 1, false ),
( 12, 21, "2160p@30fps", 1, true ),
( 12, 2, "720p@30fps", 1, false ),
( 13, 5, "2160p@30fps", 1, true ),
( 13, 22, null, 2, true ),
( 13, 6, "1080p@30fps", 1, false ),
( 14, 21, "1080p@30fps", 1, true ),
( 14, 2, null, 1, false ),
( 15, 16, "2160p@30fps", 1, true ),
( 15, 3, null, 2, true ),
( 15, 4, "1080p@30fps", 1, false );


-- Insercion de las variantes de memoria de cada modelo
INSERT INTO 1555_VARIANTES
( 855_idmodelo, 1000_idram, 2000_idalmacenamiento, 1555_precio )
VALUES
( 1, 1, 2, 120 ),
( 2, 2, 2, 200 ),
( 3, 2, 2, 210 ),
( 3, 3, 3, 250 ),
( 4, 1, 1, 320 ),
( 4, 1, 2, 360 ),
( 4, 1, 3, 400 ),
( 5, 3, 2, 699 ),
( 5, 3, 3, 759 ),
( 6, 3, 3, 720 ),
( 6, 3, 4, 770 ),
( 6, 3, 5, 820 ),
( 7, 2, 3, 999 ),
( 7, 2, 5, 1149 ),
( 8, 2, 3, 749 ),
( 8, 2, 4, 799 ),
( 8, 2, 5, 899 ),
( 9, 3, 3, 999 ),
( 9, 3, 5, 1149 ),
( 9, 3, 6, 1349 ),
( 10, 3, 2, 649 ),
( 10, 3, 4, 749 ),
( 11, 3, 3, 399 ),
( 12, 2, 1, 299 ),
( 12, 2, 3, 349 ),
( 13, 4, 3, 479 ),
( 13, 5, 4, 600 ),
( 14, 1, 1, 230 ),
( 14, 2, 2, 280 ),
( 15, 2, 2, 310 ),
( 15, 3, 3, 360 );


-- Relacion entre los modelos y los moviles que compra cada usuario
INSERT INTO 155_COMPRAS
( 100_idusuario, 855_idmodelo, 1000_idram, 2000_idalmacenamiento, 155_fecha )
VALUES
( 1, 4, 1, 2, "2016/11/04" ),
( 3, 7, 2, 3, "2017/09/08" ),
( 10, 2, 2, 2, "2019/02/10" ),
( 8, 10, 3, 2, "2016/08/26" ),
( 15, 12, 2, 3, "2015/03/15" ),
( 1, 3, 3, 3, "2019/03/26" ),
( 8, 11, 3, 3, "2019/05/17" ),
( 15, 2, 2, 2, "2019/02/10" ),
( 1, 13, 5, 4, "2018/12/12" ),
( 15, 8, 2, 5, "2019/01/28" ),
( 9, 2, 2, 2, "2019/04/09" );


-- Valoraciones de los usuarios que compran un movil hacia ese modelo
INSERT INTO 156_VALORACIONES
( 100_idusuario, 855_idmodelo, 156_valoracion )
VALUES
( 1, 4, 8 ),
( 3, 7, 9 ),
( 10, 2, 5 ),
( 8, 10, 7 ),
( 15, 12, 9 ),
( 1, 3, 6 ),
( 8, 11, 7 ),
( 15, 2, 5 ),
( 1, 13, 9 ),
( 15, 8, 7 ),
( 9, 2, 6 );



