%sistema experto basado en inteligencia multiple.
%------------------------------------------------------------------
%HECHOS

%espacial
inteligencia([arquitectura],espacial).
inteligencia([disenio_industrial,disenio_grafico],espacial1).
inteligencia([ingenieria_civil],espacial2).
inteligencia(espacial,si).
inteligencia(espacial1,si).
inteligencia(espacial2,si).

%cinetico corporal
inteligencia([licenciatura_en_artes_visuales],cinetico_corporal).
inteligencia(cinetico_corporal,si).

%MUSICAL
inteligencia([musica],musical).
inteligencia(musical,si).

%interpersonal
inteligencia([administracion_de_empresa],interpersonal).
inteligencia([mercadeo,comercio_internacional_y_mercadeo],interpersonal1).
inteligencia([sociologia_del_desarrollo],interpersonal2).
inteligencia([derecho],interpersonal3).
inteligencia([tecnologia_en_promocion_de_la_salud],interpersonal4).
inteligencia(interpersonal,si).
inteligencia(interpersonal1,si).
inteligencia(interpersonal2,si).
inteligencia(interpersonal3,si).
inteligencia(interpersonal4,si).

%intrapersonal
inteligencia([licenciatura_en_filosofia_y_letras],intrapersonal).
inteligencia([psicologia],intrapersonal1).
inteligencia(intrapersonal,si).
inteligencia(intrapersonal1,si).

%naturalista
inteligencia([ingenieria_agronomica],naturalista).
inteligencia([ingenieria_agroforestal,ingenieria_ambiental],naturalista1).
inteligencia([biologia],naturalista2).
inteligencia([quimica],naturalista3).
inteligencia([geografia_aplicada_a_la_organizacion_del_espacio_y_planificacion_regional],naturalista4).
inteligencia([licenciatura_en_ciencias_sociales],naturalista5).
inteligencia([ingenieria_de_produccion_acuicola],naturalista6).
inteligencia([licenciatura_en_educacion_basica_con_enfasis_en_ciencias_naturales_y_educacion_ambiental],naturalista7).
inteligencia([ingenieria_agroindustrial],naturalista8).
inteligencia([zootecnia],naturalista9).
inteligencia([medicina_veterinaria],naturalista10).
inteligencia(naturalista,si).
inteligencia(naturalista1,si).
inteligencia(naturalista2,si).
inteligencia(naturalista3,si).
inteligencia(naturalista4,si).
inteligencia(naturalista5,si).
inteligencia(naturalista6,si).
inteligencia(naturalista7,si).
inteligencia(naturalista8,si).
inteligencia(naturalista9,si).
inteligencia(naturalista10,si).


%linguistica
inteligencia([centro_de_idiomas,licenciatura_en_educacion_basica_humanides,lengua_castellana_e_ingles_espanol_ingles],linguistica).
inteligencia([licenciatura_en_educacion_basica_ingles_frances,licenciatura_en_educacion_preescolar_y_basica_primaria_ingles],linguistica1).
inteligencia([licenciatura_en_lengua_castellana_y_literatura],linguistica2).
inteligencia(linguistica,si).
inteligencia(linguistica1,si).
inteligencia(linguistica2,si).

%logica matematica
inteligencia([contaduria_publica],logica_matematica).
inteligencia([licenciatura_en_informatica,licenciatura_en_matematicas],logica_matematica1).
inteligencia([ingenieria_de_sistemas,tecnologia_en_computacion],logica_matematica2).
inteligencia([economia],logica_matematica3).
inteligencia([ingenieria_electronica],logica_matematica4).
inteligencia([fisica],logica_matematica5).
inteligencia(logica_matematica,si).
inteligencia(logica_matematica1,si).
inteligencia(logica_matematica2,si).
inteligencia(logica_matematica3,si).
inteligencia(logica_matematica4,si).
inteligencia(logica_matematica5,si).



%REGLAS
espacial:-inteligencia(X,espacial),write(X).
reg1(X,Y):-inteligencia(Y,X).
espacial1:-inteligencia(X,espacial1),write(X).
reg1(X,Y):-inteligencia(Y,X).
espacial2:-inteligencia(X,espacial2),write(X).
reg1(X,Y):-inteligencia(Y,X).

cinetico_corporal:-inteligencia(A,cinetico_corporal),write(A).
reg2(A,B):-inteligencia(B,A).

musical:-inteligencia(C,musical),write(C).
reg3(C,D):-inteligencia(D,C).

interpersonal:-inteligencia(E,interpersonal),write(E).
reg4(E,F):-inteligencia(F,E).
interpersonal1:-inteligencia(E,interpersonal1),write(E).
reg4(E,F):-inteligencia(F,E).
interpersonal2:-inteligencia(E,interpersonal2),write(E).
reg4(E,F):-inteligencia(F,E).
interpersonal3:-inteligencia(E,interpersonal3),write(E).
reg4(E,F):-inteligencia(F,E).
interpersonal4:-inteligencia(E,interpersonal4),write(E).
reg4(E,F):-inteligencia(F,E).

intrapersonal:-inteligencia(G,intrapersonal),write(G).
reg5(G,H):-inteligencia(H,G).
intrapersonal1:-inteligencia(G,intrapersonal1),write(G).
reg5(G,H):-inteligencia(H,G).

naturalista:-inteligencia(J,naturalista),write(J).
reg6(I,J):-inteligencia(J,I).
naturalista1:-inteligencia(J,naturalista1),write(J).
reg6(I,J):-inteligencia(J,I).
naturalista2:-inteligencia(J,naturalista2),write(J).
reg6(I,J):-inteligencia(J,I).
naturalista3:-inteligencia(J,naturalista3),write(J).
reg6(I,J):-inteligencia(J,I).
naturalista4:-inteligencia(J,naturalista4),write(J).
reg6(I,J):-inteligencia(J,I).
naturalista5:-inteligencia(J,naturalista5),write(J).
reg6(I,J):-inteligencia(J,I).
naturalista6:-inteligencia(J,naturalista6),write(J).
reg6(I,J):-inteligencia(J,I).
naturalista7:-inteligencia(J,naturalista7),write(J).
reg6(I,J):-inteligencia(J,I).
naturalista8:-inteligencia(J,naturalista8),write(J).
reg6(I,J):-inteligencia(J,I).
naturalista9:-inteligencia(J,naturalista9),write(J).
reg6(I,J):-inteligencia(J,I).
naturalista10:-inteligencia(J,naturalista10),write(J).
reg6(I,J):-inteligencia(J,I).

linguistica:-inteligencia(K,linguistica),write(K).
reg7(K,L):-inteligencia(L,K).
linguistica1:-inteligencia(K,linguistica1),write(K).
reg7(K,L):-inteligencia(L,K).
linguistica2:-inteligencia(K,linguistica2),write(K).
reg7(K,L):-inteligencia(L,K).

logica_matematica:-inteligencia(M,logica_matematica),write(M).
reg8(M,N):-inteligencia(N,M).
logica_matematica1:-inteligencia(M,logica_matematica1),write(M).
reg8(M,N):-inteligencia(N,M).
logica_matematica2:-inteligencia(M,logica_matematica2),write(M).
reg8(M,N):-inteligencia(N,M).
logica_matematica3:-inteligencia(M,logica_matematica3),write(M).
reg8(M,N):-inteligencia(N,M).
logica_matematica4:-inteligencia(M,logica_matematica4),write(M).
reg8(M,N):-inteligencia(N,M).
logica_matematica5:-inteligencia(M,logica_matematica5),write(M).
reg8(M,N):-inteligencia(N,M).


