<!DOCTYPE html>
<html>
  <header>
  @extends('layouts.app')
    @section('title', $viewData['title'])
    @section('subtitle', $viewData['subtitle'])
    @section('content')
  </header>
  <head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    
<meta content="utf-8" http-equiv="encoding">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  
    
  
  </head>
  <body>

  <div class="row">
            @foreach ($viewData['lista_por_edads'] as $listaporedad)
                <div class="col-md-4 col-lg-3 mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="{{ route('listaporedad.show', ['id' => $listaporedad->getId()]) }}"
                                class="btn bg-primary text-white">Cálculo de lista nominal por edades:
                                {{ $listaporedad->getCreatedAt() }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    
    <form id="formularioPorEdad" action="/python/cgi-enabled/calculo_listanominal_rangoedad.py" method="POST">
    @method('PUT')
    @csrf
    <ul >
    <li>
      <h2 class="h2">Lista nominal por rangos de edad</h2>
</li>

<label for="entidades">Elija la entidad y/o el municipio a consultar:</label>
<br>

<label for="lb_entidad" id="lb_entidad" style="display: none;"></label>
<label for="lb_municipio" id="lb_municipio" style="display: none;"></label>

<br>

<!-- Añade un "change" event listener por elemento <select> -->
<select name="entidades" id="entidad-select" onchange="showSelect()">
<option value="">Selecciona una entidad</option>
<option value="AGUASCALIENTES">Aguascalientes</option>
<option value="BAJA CALIFORNIA">Baja California</option>
<option value="BAJA CALIFORNIA SUR">Baja California Sur</option>
<option value="CAMPECHE">Campeche</option>
<option value="COAHUILA">Coahuila</option>
<option value="COLIMA">Colima</option>
<option value="CHIAPAS">Chiapas</option>
<option value="CHIHUAHUA">Chihuahua</option>
<option value="CIUDAD DE MEXICO">Ciudad de Mexico</option>
<option value="DURANGO">Durango</option>
<option value="GUANAJUATO">Guanajuato</option>
<option value="GUERRERO">Guerrero</option>
<option value="HIDALGO">Hidalgo</option>
<option value="JALISCO">Jalisco</option>
<option value="MEXICO">Estado de Mexico</option>
<option value="MICHOACAN">Michoacan</option>
<option value="MORELOS">Morelos</option>
<option value="NAYARIT">Nayarit</option>
<option value="NUEVO LEON">Nuevo Leon</option>
<option value="OAXACA">Oaxaca</option>
<option value="PUEBLA">Puebla</option>
<option value="QUERETARO">Queretaro</option>
<option value="QUINTANA ROO">Quintana Roo</option>
<option value="SAN LUIS POTOSI">San Luis Potosi</option>
<option value="SINALOA">Sinaloa</option>
<option value="SONORA">Sonora</option>
<option value="TABASCO">Tabasco</option>
<option value="TAMAULIPAS">Tamaulipas</option>
<option value="TLAXCALA">Tlaxcala</option>
<option value="VERACRUZ">Veracruz</option>
<option value="YUCATAN">Yucatan</option>
<option value="ZACATECAS">Zacatecas</option>
      </select>


      <!-- Añade los elementos de <select> para los estados de la republica, pero los esconde por default -->
      <select name="aguascalientes" id="aguascalientes-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="AGUASCALIENTES">Aguascalientes</option>
<option value="ASIENTOS">Asientos</option>
<option value="CALVILLO">Calvillo</option>
<option value="COSIO">Cosio</option>
<option value="EL LLANO">El Llano</option>
<option value="JESUS MARIA">Jesus Maria</option>
<option value="PABELLON DE ARTEAGA">Pabellon De Arteaga</option>
<option value="RINCON DE ROMOS">Rincon De Romos</option>
<option value="SAN FRANCISCO DE LOS ROMO">San Francisco De Los Romo</option>
<option value="SAN JOSE DE GRACIA">San Jose De Gracia</option>
<option value="TEPEZALA">Tepezala</option>
      </select>
      
      <select name="bajacalifornia" id="bajacalifornia-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ENSENADA">Ensenada</option>
<option value="MEXICALI">Mexicali</option>
<option value="PLAYAS DE ROSARITO">Playas De Rosarito</option>
<option value="SAN QUINTIN">San Quintin</option>
<option value="TECATE">Tecate</option>
<option value="TIJUANA">Tijuana</option>
      </select>

      <select name="bajacaliforniasur" id="bajacaliforniasur-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="COMONDU">Comondu</option>
<option value="LA PAZ">La Paz</option>
<option value="LORETO">Loreto</option>
<option value="LOS CABOS">Los Cabos</option>
<option value="MULEGE">Mulege</option>
      </select>

      <select name="campeche" id="campeche-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="CALAKMUL ">Calakmul </option>
<option value="CALKINI">Calkini</option>
<option value="CAMPECHE">Campeche</option>
<option value="CANDELARIA">Candelaria</option>
<option value="CARMEN">Carmen</option>
<option value="CHAMPOTON">Champoton</option>
<option value="DZITBALCHE">Dzitbalche</option>
<option value="ESCARCEGA">Escarcega</option>
<option value="HECELCHAKAN">Hecelchakan</option>
<option value="HOPELCHEN">Hopelchen</option>
<option value="PALIZADA">Palizada</option>
<option value="SEYBAPLAYA">Seybaplaya</option>
<option value="TENABO">Tenabo</option>
      </select>

      <select name="coahuila" id="coahuila-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ABASOLO">Abasolo</option>
<option value="ACUÐA">Acuða</option>
<option value="ALLENDE">Allende</option>
<option value="ARTEAGA">Arteaga</option>
<option value="CANDELA">Candela</option>
<option value="CASTAÐOS">Castaðos</option>
<option value="CUATROCIENEGAS">Cuatrocienegas</option>
<option value="ESCOBEDO">Escobedo</option>
<option value="FRANCISCO I. MADERO">Francisco I. Madero</option>
<option value="FRONTERA">Frontera</option>
<option value="GENERAL CEPEDA">General Cepeda</option>
<option value="GUERRERO">Guerrero</option>
<option value="HIDALGO">Hidalgo</option>
<option value="JIMENEZ">Jimenez</option>
<option value="JUAREZ">Juarez</option>
<option value="LAMADRID">Lamadrid</option>
<option value="MATAMOROS">Matamoros</option>
<option value="MONCLOVA">Monclova</option>
<option value="MORELOS">Morelos</option>
<option value="MUZQUIZ">Muzquiz</option>
<option value="NADADORES">Nadadores</option>
<option value="NAVA">Nava</option>
<option value="OCAMPO">Ocampo</option>
<option value="PARRAS">Parras</option>
<option value="PIEDRAS NEGRAS">Piedras Negras</option>
<option value="PROGRESO">Progreso</option>
<option value="RAMOS ARIZPE">Ramos Arizpe</option>
<option value="SABINAS">Sabinas</option>
<option value="SACRAMENTO">Sacramento</option>
<option value="SALTILLO">Saltillo</option>
<option value="SAN BUENAVENTURA">San Buenaventura</option>
<option value="SAN JUAN DE SABINAS">San Juan De Sabinas</option>
<option value="SAN PEDRO">San Pedro</option>
<option value="SIERRA MOJADA">Sierra Mojada</option>
<option value="TORREON">Torreon</option>
<option value="VIESCA">Viesca</option>
<option value="VILLA UNION">Villa Union</option>
<option value="ZARAGOZA">Zaragoza</option>
      </select>

      <select name="colima" id="colima-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ARMERIA">Armeria</option>
<option value="COLIMA">Colima</option>
<option value="COMALA">Comala</option>
<option value="COQUIMATLAN">Coquimatlan</option>
<option value="CUAUHTEMOC">Cuauhtemoc</option>
<option value="IXTLAHUACAN">Ixtlahuacan</option>
<option value="MANZANILLO">Manzanillo</option>
<option value="MINATITLAN">Minatitlan</option>
<option value="TECOMAN">Tecoman</option>
<option value="VILLA DE ALVAREZ">Villa De Alvarez</option>
      </select>

      <select name="chiapas" id="chiapas-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ACACOYAGUA">Acacoyagua</option>
<option value="ACALA">Acala</option>
<option value="ACAPETAHUA">Acapetahua</option>
<option value="ALDAMA">Aldama</option>
<option value="ALTAMIRANO">Altamirano</option>
<option value="AMATAN">Amatan</option>
<option value="AMATENANGO DE LA FRONTERA">Amatenango De La Frontera</option>
<option value="AMATENANGO DEL VALLE">Amatenango Del Valle</option>
<option value="ANGEL ALBINO CORZO">Angel Albino Corzo</option>
<option value="ARRIAGA">Arriaga</option>
<option value="BEJUCAL DE OCAMPO">Bejucal De Ocampo</option>
<option value="BELLA VISTA">Bella Vista</option>
<option value="BENEMERITO DE LAS AMERICAS">Benemerito De Las Americas</option>
<option value="BERRIOZABAL">Berriozabal</option>
<option value="BOCHIL">Bochil</option>
<option value="CACAHOATAN">Cacahoatan</option>
<option value="CAPITAN LUIS ANGEL VIDAL">Capitan Luis Angel Vidal</option>
<option value="CATAZAJA">Catazaja</option>
<option value="CHALCHIHUITAN">Chalchihuitan</option>
<option value="CHAMULA">Chamula</option>
<option value="CHANAL">Chanal</option>
<option value="CHAPULTENANGO">Chapultenango</option>
<option value="CHENALHO">Chenalho</option>
<option value="CHIAPA DE CORZO">Chiapa De Corzo</option>
<option value="CHIAPILLA">Chiapilla</option>
<option value="CHICOASEN">Chicoasen</option>
<option value="CHICOMUSELO">Chicomuselo</option>
<option value="CHILON">Chilon</option>
<option value="CINTALAPA">Cintalapa</option>
<option value="COAPILLA">Coapilla</option>
<option value="COMITAN DE DOMINGUEZ">Comitan De Dominguez</option>
<option value="COPAINALA">Copainala</option>
<option value="EL BOSQUE">El Bosque</option>
<option value="EL PARRAL">El Parral</option>
<option value="EL PORVENIR">El Porvenir</option>
<option value="EMILIANO ZAPATA">Emiliano Zapata</option>
<option value="ESCUINTLA">Escuintla</option>
<option value="FRANCISCO LEON">Francisco Leon</option>
<option value="FRONTERA COMALAPA">Frontera Comalapa</option>
<option value="FRONTERA HIDALGO">Frontera Hidalgo</option>
<option value="HONDURAS DE LA SIERRA">Honduras De La Sierra</option>
<option value="HUEHUETAN">Huehuetan</option>
<option value="HUITIUPAN">Huitiupan</option>
<option value="HUIXTAN">Huixtan</option>
<option value="HUIXTLA">Huixtla</option>
<option value="IXHUATAN">Ixhuatan</option>
<option value="IXTACOMITAN">Ixtacomitan</option>
<option value="IXTAPA">Ixtapa</option>
<option value="IXTAPANGAJOYA">Ixtapangajoya</option>
<option value="JIQUIPILAS">Jiquipilas</option>
<option value="JITOTOL">Jitotol</option>
<option value="JUAREZ">Juarez</option>
<option value="LA CONCORDIA">La Concordia</option>
<option value="LA GRANDEZA">La Grandeza</option>
<option value="LA INDEPENDENCIA">La Independencia</option>
<option value="LA LIBERTAD">La Libertad</option>
<option value="LA TRINITARIA">La Trinitaria</option>
<option value="LARRAINZAR">Larrainzar</option>
<option value="LAS MARGARITAS">Las Margaritas</option>
<option value="LAS ROSAS">Las Rosas</option>
<option value="MAPASTEPEC">Mapastepec</option>
<option value="MARAVILLA TENEJAPA">Maravilla Tenejapa</option>
<option value="MARQUES DE COMILLAS">Marques De Comillas</option>
<option value="MAZAPA DE MADERO">Mazapa De Madero</option>
<option value="MAZATAN">Mazatan</option>
<option value="METAPA">Metapa</option>
<option value="MEZCALAPA">Mezcalapa</option>
<option value="MITONTIC">Mitontic</option>
<option value="MONTECRISTO DE GUERRERO">Montecristo De Guerrero</option>
<option value="MOTOZINTLA">Motozintla</option>
<option value="NICOLAS RUIZ">Nicolas Ruiz</option>
<option value="OCOSINGO">Ocosingo</option>
<option value="OCOTEPEC">Ocotepec</option>
<option value="OCOZOCOAUTLA DE ESPINOSA">Ocozocoautla De Espinosa</option>
<option value="OSTUACAN">Ostuacan</option>
<option value="OSUMACINTA">Osumacinta</option>
<option value="OXCHUC">Oxchuc</option>
<option value="PALENQUE">Palenque</option>
<option value="PANTELHO">Pantelho</option>
<option value="PANTEPEC">Pantepec</option>
<option value="PICHUCALCO">Pichucalco</option>
<option value="PIJIJIAPAN">Pijijiapan</option>
<option value="PUEBLO NUEVO SOLISTAHUACAN">Pueblo Nuevo Solistahuacan</option>
<option value="RAYON">Rayon</option>
<option value="REFORMA">Reforma</option>
<option value="RINCON CHAMULA SAN PEDRO">Rincon Chamula San Pedro</option>
<option value="SABANILLA">Sabanilla</option>
<option value="SALTO DE AGUA">Salto De Agua</option>
<option value="SAN ANDRES DURAZNAL">San Andres Duraznal</option>
<option value="SAN CRISTOBAL DE LAS CASAS">San Cristobal De Las Casas</option>
<option value="SAN FERNANDO">San Fernando</option>
<option value="SAN JUAN CANCUC">San Juan Cancuc</option>
<option value="SAN LUCAS">San Lucas</option>
<option value="SANTIAGO EL PINAR">Santiago El Pinar</option>
<option value="SILTEPEC">Siltepec</option>
<option value="SIMOJOVEL">Simojovel</option>
<option value="SITALA">Sitala</option>
<option value="SOCOLTENANGO">Socoltenango</option>
<option value="SOLOSUCHIAPA">Solosuchiapa</option>
<option value="SOYALO">Soyalo</option>
<option value="SUCHIAPA">Suchiapa</option>
<option value="SUCHIATE">Suchiate</option>
<option value="SUNUAPA">Sunuapa</option>
<option value="TAPACHULA">Tapachula</option>
<option value="TAPALAPA">Tapalapa</option>
<option value="TAPILULA">Tapilula</option>
<option value="TECPATAN">Tecpatan</option>
<option value="TENEJAPA">Tenejapa</option>
<option value="TEOPISCA">Teopisca</option>
<option value="TILA">Tila</option>
<option value="TONALA">Tonala</option>
<option value="TOTOLAPA">Totolapa</option>
<option value="TUMBALA">Tumbala</option>
<option value="TUXTLA CHICO">Tuxtla Chico</option>
<option value="TUXTLA GUTIERREZ">Tuxtla Gutierrez</option>
<option value="TUZANTAN">Tuzantan</option>
<option value="TZIMOL">Tzimol</option>
<option value="UNION JUAREZ">Union Juarez</option>
<option value="VENUSTIANO CARRANZA">Venustiano Carranza</option>
<option value="VILLA CORZO">Villa Corzo</option>
<option value="VILLACOMALTITLAN">Villacomaltitlan</option>
<option value="VILLAFLORES">Villaflores</option>
<option value="YAJALON">Yajalon</option>
<option value="ZINACANTAN">Zinacantan</option>
      </select>

      <select name="chihuahua" id="chihuahua-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="AHUMADA">Ahumada</option>
<option value="ALDAMA">Aldama</option>
<option value="ALLENDE">Allende</option>
<option value="AQUILES SERDAN">Aquiles Serdan</option>
<option value="ASCENSION">Ascension</option>
<option value="BACHINIVA">Bachiniva</option>
<option value="BALLEZA">Balleza</option>
<option value="BATOPILAS DE MANUEL GOMEZ MORIN">Batopilas De Manuel Gomez Morin</option>
<option value="BOCOYNA">Bocoyna</option>
<option value="BUENAVENTURA">Buenaventura</option>
<option value="CAMARGO">Camargo</option>
<option value="CARICHI">Carichi</option>
<option value="CASAS GRANDES">Casas Grandes</option>
<option value="CHIHUAHUA">Chihuahua</option>
<option value="CHINIPAS">Chinipas</option>
<option value="CORONADO">Coronado</option>
<option value="COYAME DEL SOTOL">Coyame Del Sotol</option>
<option value="CUAUHTEMOC">Cuauhtemoc</option>
<option value="CUSIHUIRIACHI">Cusihuiriachi</option>
<option value="DELICIAS">Delicias</option>
<option value="DR. BELISARIO DOMINGUEZ">Dr. Belisario Dominguez</option>
<option value="EL TULE">El Tule</option>
<option value="GALEANA">Galeana</option>
<option value="GOMEZ FARIAS">Gomez Farias</option>
<option value="GRAN MORELOS">Gran Morelos</option>
<option value="GUACHOCHI">Guachochi</option>
<option value="GUADALUPE Y CALVO">Guadalupe Y Calvo</option>
<option value="GUADALUPE">Guadalupe</option>
<option value="GUAZAPARES">Guazapares</option>
<option value="GUERRERO">Guerrero</option>
<option value="HIDALGO DEL PARRAL">Hidalgo Del Parral</option>
<option value="HUEJOTITAN">Huejotitan</option>
<option value="IGNACIO ZARAGOZA">Ignacio Zaragoza</option>
<option value="JANOS">Janos</option>
<option value="JIMENEZ">Jimenez</option>
<option value="JUAREZ">Juarez</option>
<option value="JULIMES">Julimes</option>
<option value="LA CRUZ">La Cruz</option>
<option value="LOPEZ">Lopez</option>
<option value="MADERA">Madera</option>
<option value="MAGUARICHI">Maguarichi</option>
<option value="MANUEL BENAVIDES">Manuel Benavides</option>
<option value="MATACHI">Matachi</option>
<option value="MATAMOROS">Matamoros</option>
<option value="MEOQUI">Meoqui</option>
<option value="MORELOS">Morelos</option>
<option value="MORIS">Moris</option>
<option value="NAMIQUIPA">Namiquipa</option>
<option value="NONOAVA">Nonoava</option>
<option value="NUEVO CASAS GRANDES">Nuevo Casas Grandes</option>
<option value="OCAMPO">Ocampo</option>
<option value="OJINAGA">Ojinaga</option>
<option value="PRAXEDIS G. GUERRERO">Praxedis G. Guerrero</option>
<option value="RIVA PALACIO">Riva Palacio</option>
<option value="ROSALES">Rosales</option>
<option value="ROSARIO">Rosario</option>
<option value="SAN FRANCISCO DE BORJA">San Francisco De Borja</option>
<option value="SAN FRANCISCO DE CONCHOS">San Francisco De Conchos</option>
<option value="SAN FRANCISCO DEL ORO">San Francisco Del Oro</option>
<option value="SANTA BARBARA">Santa Barbara</option>
<option value="SANTA ISABEL">Santa Isabel</option>
<option value="SATEVO">Satevo</option>
<option value="SAUCILLO">Saucillo</option>
<option value="TEMOSACHIC">Temosachic</option>
<option value="URIQUE">Urique</option>
<option value="URUACHI">Uruachi</option>
<option value="VALLE DE ZARAGOZA">Valle De Zaragoza</option>
      </select>

      <select name="ciudaddemexico" id="ciudaddemexico-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ALVARO OBREGON">Alvaro Obregon</option>
<option value="AZCAPOTZALCO">Azcapotzalco</option>
<option value="BENITO JUAREZ">Benito Juarez</option>
<option value="COYOACAN">Coyoacan</option>
<option value="CUAJIMALPA DE MORELOS">Cuajimalpa De Morelos</option>
<option value="CUAUHTEMOC">Cuauhtemoc</option>
<option value="GUSTAVO A. MADERO">Gustavo A. Madero</option>
<option value="IZTACALCO">Iztacalco</option>
<option value="IZTAPALAPA">Iztapalapa</option>
<option value="LA MAGDALENA CONTRERAS">La Magdalena Contreras</option>
<option value="MIGUEL HIDALGO">Miguel Hidalgo</option>
<option value="MILPA ALTA">Milpa Alta</option>
<option value="TLAHUAC">Tlahuac</option>
<option value="TLALPAN">Tlalpan</option>
<option value="VENUSTIANO CARRANZA">Venustiano Carranza</option>
<option value="XOCHIMILCO">Xochimilco</option>
      </select>

      <select name="durango" id="durango-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="CANATLAN">Canatlan</option>
<option value="CANELAS">Canelas</option>
<option value="CONETO DE COMONFORT">Coneto De Comonfort</option>
<option value="CUENCAME">Cuencame</option>
<option value="DURANGO">Durango</option>
<option value="EL ORO">El Oro</option>
<option value="GOMEZ PALACIO">Gomez Palacio</option>
<option value="GUADALUPE VICTORIA">Guadalupe Victoria</option>
<option value="GUANACEVI">Guanacevi</option>
<option value="HIDALGO">Hidalgo</option>
<option value="INDE">Inde</option>
<option value="LERDO">Lerdo</option>
<option value="MAPIMI">Mapimi</option>
<option value="MEZQUITAL">Mezquital</option>
<option value="NAZAS">Nazas</option>
<option value="NOMBRE DE DIOS">Nombre De Dios</option>
<option value="NUEVO IDEAL">Nuevo Ideal</option>
<option value="OCAMPO">Ocampo</option>
<option value="OTAEZ">Otaez</option>
<option value="PANUCO DE CORONADO">Panuco De Coronado</option>
<option value="PEÐON BLANCO">Peðon Blanco</option>
<option value="POANAS">Poanas</option>
<option value="PUEBLO NUEVO">Pueblo Nuevo</option>
<option value="RODEO">Rodeo</option>
<option value="SAN BERNARDO">San Bernardo</option>
<option value="SAN DIMAS">San Dimas</option>
<option value="SAN JUAN DE GUADALUPE">San Juan De Guadalupe</option>
<option value="SAN JUAN DEL RIO">San Juan Del Rio</option>
<option value="SAN LUIS DEL CORDERO">San Luis Del Cordero</option>
<option value="SAN PEDRO DEL GALLO">San Pedro Del Gallo</option>
<option value="SANTA CLARA">Santa Clara</option>
<option value="SANTIAGO PAPASQUIARO">Santiago Papasquiaro</option>
<option value="SIMON BOLIVAR">Simon Bolivar</option>
<option value="SUCHIL">Suchil</option>
<option value="TAMAZULA">Tamazula</option>
<option value="TEPEHUANES">Tepehuanes</option>
<option value="TLAHUALILO">Tlahualilo</option>
<option value="TOPIA">Topia</option>
<option value="VICENTE GUERRERO">Vicente Guerrero</option>
      </select>

      <select name="guanajuato" id="guanajuato-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ABASOLO">Abasolo</option>
<option value="ACAMBARO">Acambaro</option>
<option value="APASEO EL ALTO">Apaseo El Alto</option>
<option value="APASEO EL GRANDE">Apaseo El Grande</option>
<option value="ATARJEA">Atarjea</option>
<option value="CELAYA">Celaya</option>
<option value="COMONFORT">Comonfort</option>
<option value="CORONEO">Coroneo</option>
<option value="CORTAZAR">Cortazar</option>
<option value="CUERAMARO">Cueramaro</option>
<option value="DOCTOR MORA">Doctor Mora</option>
<option value="DOLORES HIDALGO CUNA DE LA INDEPENDENCIA NACIONAL">Dolores Hidalgo Cuna De La Independencia Nacional</option>
<option value="GUANAJUATO">Guanajuato</option>
<option value="HUANIMARO">Huanimaro</option>
<option value="IRAPUATO">Irapuato</option>
<option value="JARAL DEL PROGRESO">Jaral Del Progreso</option>
<option value="JERECUARO">Jerecuaro</option>
<option value="LEON">Leon</option>
<option value="MANUEL DOBLADO">Manuel Doblado</option>
<option value="MOROLEON">Moroleon</option>
<option value="OCAMPO">Ocampo</option>
<option value="PENJAMO">Penjamo</option>
<option value="PUEBLO NUEVO">Pueblo Nuevo</option>
<option value="PURISIMA DEL RINCON">Purisima Del Rincon</option>
<option value="ROMITA">Romita</option>
<option value="SALAMANCA">Salamanca</option>
<option value="SALVATIERRA">Salvatierra</option>
<option value="SAN DIEGO DE LA UNION">San Diego De La Union</option>
<option value="SAN FELIPE">San Felipe</option>
<option value="SAN FRANCISCO DEL RINCON">San Francisco Del Rincon</option>
<option value="SAN JOSE ITURBIDE">San Jose Iturbide</option>
<option value="SAN LUIS DE LA PAZ">San Luis De La Paz</option>
<option value="SAN MIGUEL DE ALLENDE">San Miguel De Allende</option>
<option value="SANTA CATARINA">Santa Catarina</option>
<option value="SANTA CRUZ DE JUVENTINO ROSAS">Santa Cruz De Juventino Rosas</option>
<option value="SANTIAGO MARAVATIO">Santiago Maravatio</option>
<option value="SILAO DE LA VICTORIA">Silao De La Victoria</option>
<option value="TARANDACUAO">Tarandacuao</option>
<option value="TARIMORO">Tarimoro</option>
<option value="TIERRA BLANCA">Tierra Blanca</option>
<option value="URIANGATO">Uriangato</option>
<option value="VALLE DE SANTIAGO">Valle De Santiago</option>
<option value="VICTORIA">Victoria</option>
<option value="VILLAGRAN">Villagran</option>
<option value="XICHU">Xichu</option>
<option value="YURIRIA">Yuriria</option>
      </select>

      <select name="guerrero" id="guerrero-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
        <option value="ACAPULCO DE JUAREZ">Acapulco De Juarez</option>
<option value="ACATEPEC">Acatepec</option>
<option value="AHUACUOTZINGO">Ahuacuotzingo</option>
<option value="AJUCHITLAN DEL PROGRESO">Ajuchitlan Del Progreso</option>
<option value="ALCOZAUCA DE GUERRERO">Alcozauca De Guerrero</option>
<option value="ALPOYECA">Alpoyeca</option>
<option value="APAXTLA">Apaxtla</option>
<option value="ARCELIA">Arcelia</option>
<option value="ATENANGO DEL RIO">Atenango Del Rio</option>
<option value="ATLAMAJALCINGO DEL MONTE">Atlamajalcingo Del Monte</option>
<option value="ATLIXTAC">Atlixtac</option>
<option value="ATOYAC DE ALVAREZ">Atoyac De Alvarez</option>
<option value="AYUTLA DE LOS LIBRES">Ayutla De Los Libres</option>
<option value="AZOYU">Azoyu</option>
<option value="BENITO JUAREZ">Benito Juarez</option>
<option value="BUENAVISTA DE CUELLAR">Buenavista De Cuellar</option>
<option value="CHILAPA DE ALVAREZ">Chilapa De Alvarez</option>
<option value="CHILPANCINGO DE LOS BRAVO">Chilpancingo De Los Bravo</option>
<option value="COAHUAYUTLA DE JOSE MARIA IZAZAGA">Coahuayutla De Jose Maria Izazaga</option>
<option value="COCHOAPA EL GRANDE">Cochoapa El Grande</option>
<option value="COCULA">Cocula</option>
<option value="COPALA">Copala</option>
<option value="COPALILLO">Copalillo</option>
<option value="COPANATOYAC">Copanatoyac</option>
<option value="COYUCA DE BENITEZ">Coyuca De Benitez</option>
<option value="COYUCA DE CATALAN">Coyuca De Catalan</option>
<option value="CUAJINICUILAPA">Cuajinicuilapa</option>
<option value="CUALAC">Cualac</option>
<option value="CUAUTEPEC">Cuautepec</option>
<option value="CUETZALA DEL PROGRESO">Cuetzala Del Progreso</option>
<option value="CUTZAMALA DE PINZON">Cutzamala De Pinzon</option>
<option value="EDUARDO NERI">Eduardo Neri</option>
<option value="FLORENCIO VILLARREAL">Florencio Villarreal</option>
<option value="GENERAL CANUTO A. NERI">General Canuto A. Neri</option>
<option value="GENERAL HELIODORO CASTILLO">General Heliodoro Castillo</option>
<option value="HUAMUXTITLAN">Huamuxtitlan</option>
<option value="HUITZUCO DE LOS FIGUEROA">Huitzuco De Los Figueroa</option>
<option value="IGUALA DE LA INDEPENDENCIA">Iguala De La Independencia</option>
<option value="IGUALAPA">Igualapa</option>
<option value="ILIATENCO">Iliatenco</option>
<option value="IXCATEOPAN DE CUAUHTEMOC">Ixcateopan De Cuauhtemoc</option>
<option value="JOSE JOAQUIN DE HERRERA">Jose Joaquin De Herrera</option>
<option value="JUAN R. ESCUDERO">Juan R. Escudero</option>
<option value="JUCHITAN">Juchitan</option>
<option value="LA UNION DE ISIDORO MONTES DE OCA">La Union De Isidoro Montes De Oca</option>
<option value="LEONARDO BRAVO">Leonardo Bravo</option>
<option value="MALINALTEPEC">Malinaltepec</option>
<option value="MARQUELIA">Marquelia</option>
<option value="MARTIR DE CUILAPAN">Martir De Cuilapan</option>
<option value="METLATONOC">Metlatonoc</option>
<option value="MOCHITLAN">Mochitlan</option>
<option value="OLINALA">Olinala</option>
<option value="OMETEPEC">Ometepec</option>
<option value="PEDRO ASCENCIO ALQUISIRAS">Pedro Ascencio Alquisiras</option>
<option value="PETATLAN">Petatlan</option>
<option value="PILCAYA">Pilcaya</option>
<option value="PUNGARABATO">Pungarabato</option>
<option value="QUECHULTENANGO">Quechultenango</option>
<option value="SAN LUIS ACATLAN">San Luis Acatlan</option>
<option value="SAN MARCOS">San Marcos</option>
<option value="SAN MIGUEL TOTOLAPAN">San Miguel Totolapan</option>
<option value="TAXCO DE ALARCON">Taxco De Alarcon</option>
<option value="TECOANAPA">Tecoanapa</option>
<option value="TECPAN DE GALEANA">Tecpan De Galeana</option>
<option value="TELOLOAPAN">Teloloapan</option>
<option value="TEPECOACUILCO DE TRUJANO">Tepecoacuilco De Trujano</option>
<option value="TETIPAC">Tetipac</option>
<option value="TIXTLA DE GUERRERO">Tixtla De Guerrero</option>
<option value="TLACOACHISTLAHUACA">Tlacoachistlahuaca</option>
<option value="TLACOAPA">Tlacoapa</option>
<option value="TLALCHAPA">Tlalchapa</option>
<option value="TLALIXTAQUILLA DE MALDONADO">Tlalixtaquilla De Maldonado</option>
<option value="TLAPA DE COMONFORT">Tlapa De Comonfort</option>
<option value="TLAPEHUALA">Tlapehuala</option>
<option value="XALPATLAHUAC">Xalpatlahuac</option>
<option value="XOCHIHUEHUETLAN">Xochihuehuetlan</option>
<option value="XOCHISTLAHUACA">Xochistlahuaca</option>
<option value="ZAPOTITLAN TABLAS">Zapotitlan Tablas</option>
<option value="ZIHUATANEJO DE AZUETA">Zihuatanejo De Azueta</option>
<option value="ZIRANDARO">Zirandaro</option>
<option value="ZITLALA">Zitlala</option>
      </select>

      <select name="hidalgo" id="hidalgo-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ACATLAN">Acatlan</option>
<option value="ACAXOCHITLAN">Acaxochitlan</option>
<option value="ACTOPAN">Actopan</option>
<option value="AGUA BLANCA DE ITURBIDE">Agua Blanca De Iturbide</option>
<option value="AJACUBA">Ajacuba</option>
<option value="ALFAJAYUCAN">Alfajayucan</option>
<option value="ALMOLOYA">Almoloya</option>
<option value="APAN">Apan</option>
<option value="ATITALAQUIA">Atitalaquia</option>
<option value="ATLAPEXCO">Atlapexco</option>
<option value="ATOTONILCO DE TULA">Atotonilco De Tula</option>
<option value="ATOTONILCO EL GRANDE">Atotonilco El Grande</option>
<option value="CALNALI">Calnali</option>
<option value="CARDONAL">Cardonal</option>
<option value="CHAPANTONGO">Chapantongo</option>
<option value="CHAPULHUACAN">Chapulhuacan</option>
<option value="CHILCUAUTLA">Chilcuautla</option>
<option value="CUAUTEPEC DE HINOJOSA">Cuautepec De Hinojosa</option>
<option value="EL ARENAL">El Arenal</option>
<option value="ELOXOCHITLAN">Eloxochitlan</option>
<option value="EMILIANO ZAPATA">Emiliano Zapata</option>
<option value="EPAZOYUCAN">Epazoyucan</option>
<option value="FRANCISCO I. MADERO">Francisco I. Madero</option>
<option value="HUASCA DE OCAMPO">Huasca De Ocampo</option>
<option value="HUAUTLA">Huautla</option>
<option value="HUAZALINGO">Huazalingo</option>
<option value="HUEHUETLA">Huehuetla</option>
<option value="HUEJUTLA DE REYES">Huejutla De Reyes</option>
<option value="HUICHAPAN">Huichapan</option>
<option value="IXMIQUILPAN">Ixmiquilpan</option>
<option value="JACALA DE LEDEZMA">Jacala De Ledezma</option>
<option value="JALTOCAN">Jaltocan</option>
<option value="JUAREZ HIDALGO">Juarez Hidalgo</option>
<option value="LA MISION">La Mision</option>
<option value="LOLOTLA">Lolotla</option>
<option value="METEPEC">Metepec</option>
<option value="METZTITLAN">Metztitlan</option>
<option value="MINERAL DE LA REFORMA">Mineral De La Reforma</option>
<option value="MINERAL DEL CHICO">Mineral Del Chico</option>
<option value="MINERAL DEL MONTE">Mineral Del Monte</option>
<option value="MIXQUIAHUALA DE JUAREZ">Mixquiahuala De Juarez</option>
<option value="MOLANGO DE ESCAMILLA">Molango De Escamilla</option>
<option value="NICOLAS FLORES">Nicolas Flores</option>
<option value="NOPALA DE VILLAGRAN">Nopala De Villagran</option>
<option value="OMITLAN DE JUAREZ">Omitlan De Juarez</option>
<option value="PACHUCA DE SOTO">Pachuca De Soto</option>
<option value="PACULA">Pacula</option>
<option value="PISAFLORES">Pisaflores</option>
<option value="PROGRESO DE OBREGON">Progreso De Obregon</option>
<option value="SAN AGUSTIN METZQUITITLAN">San Agustin Metzquititlan</option>
<option value="SAN AGUSTIN TLAXIACA">San Agustin Tlaxiaca</option>
<option value="SAN BARTOLO TUTOTEPEC">San Bartolo Tutotepec</option>
<option value="SAN FELIPE ORIZATLAN">San Felipe Orizatlan</option>
<option value="SAN SALVADOR">San Salvador</option>
<option value="SANTIAGO DE ANAYA">Santiago De Anaya</option>
<option value="SANTIAGO TULANTEPEC DE LUGO GUERRERO">Santiago Tulantepec De Lugo Guerrero</option>
<option value="SINGUILUCAN">Singuilucan</option>
<option value="TASQUILLO">Tasquillo</option>
<option value="TECOZAUTLA">Tecozautla</option>
<option value="TENANGO DE DORIA">Tenango De Doria</option>
<option value="TEPEAPULCO">Tepeapulco</option>
<option value="TEPEHUACAN DE GUERRERO">Tepehuacan De Guerrero</option>
<option value="TEPEJI DEL RIO DE OCAMPO">Tepeji Del Rio De Ocampo</option>
<option value="TEPETITLAN">Tepetitlan</option>
<option value="TETEPANGO">Tetepango</option>
<option value="TEZONTEPEC DE ALDAMA">Tezontepec De Aldama</option>
<option value="TIANGUISTENGO">Tianguistengo</option>
<option value="TIZAYUCA">Tizayuca</option>
<option value="TLAHUELILPAN">Tlahuelilpan</option>
<option value="TLAHUILTEPA">Tlahuiltepa</option>
<option value="TLANALAPA">Tlanalapa</option>
<option value="TLANCHINOL">Tlanchinol</option>
<option value="TLAXCOAPAN">Tlaxcoapan</option>
<option value="TOLCAYUCA">Tolcayuca</option>
<option value="TULA DE ALLENDE">Tula De Allende</option>
<option value="TULANCINGO DE BRAVO">Tulancingo De Bravo</option>
<option value="VILLA DE TEZONTEPEC">Villa De Tezontepec</option>
<option value="XOCHIATIPAN">Xochiatipan</option>
<option value="XOCHICOATLAN">Xochicoatlan</option>
<option value="YAHUALICA">Yahualica</option>
<option value="ZACUALTIPAN DE ANGELES">Zacualtipan De Angeles</option>
<option value="ZAPOTLAN DE JUAREZ">Zapotlan De Juarez</option>
<option value="ZEMPOALA">Zempoala</option>
<option value="ZIMAPAN">Zimapan</option>
      </select>

      <select name="jalisco" id="jalisco-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ACATIC">Acatic</option>
<option value="ACATLAN DE JUAREZ">Acatlan De Juarez</option>
<option value="AHUALULCO DE MERCADO">Ahualulco De Mercado</option>
<option value="AMACUECA">Amacueca</option>
<option value="AMATITAN">Amatitan</option>
<option value="AMECA">Ameca</option>
<option value="ARANDAS">Arandas</option>
<option value="ATEMAJAC DE BRIZUELA">Atemajac De Brizuela</option>
<option value="ATENGO">Atengo</option>
<option value="ATENGUILLO">Atenguillo</option>
<option value="ATOTONILCO EL ALTO">Atotonilco El Alto</option>
<option value="ATOYAC">Atoyac</option>
<option value="AUTLAN DE NAVARRO">Autlan De Navarro</option>
<option value="AYOTLAN">Ayotlan</option>
<option value="AYUTLA">Ayutla</option>
<option value="BOLAÐOS">Bolaðos</option>
<option value="CABO CORRIENTES">Cabo Corrientes</option>
<option value="CASIMIRO CASTILLO">Casimiro Castillo</option>
<option value="CAÐADAS DE OBREGON">Caðadas De Obregon</option>
<option value="CHAPALA">Chapala</option>
<option value="CHIMALTITAN">Chimaltitan</option>
<option value="CHIQUILISTLAN">Chiquilistlan</option>
<option value="CIHUATLAN">Cihuatlan</option>
<option value="COCULA">Cocula</option>
<option value="COLOTLAN">Colotlan</option>
<option value="CONCEPCION DE BUENOS AIRES">Concepcion De Buenos Aires</option>
<option value="CUAUTITLAN DE GARCIA BARRAGAN">Cuautitlan De Garcia Barragan</option>
<option value="CUAUTLA">Cuautla</option>
<option value="CUQUIO">Cuquio</option>
<option value="DEGOLLADO">Degollado</option>
<option value="EJUTLA">Ejutla</option>
<option value="EL ARENAL">El Arenal</option>
<option value="EL GRULLO">El Grullo</option>
<option value="EL LIMON">El Limon</option>
<option value="EL SALTO">El Salto</option>
<option value="ENCARNACION DE DIAZ">Encarnacion De Diaz</option>
<option value="ETZATLAN">Etzatlan</option>
<option value="GOMEZ FARIAS">Gomez Farias</option>
<option value="GUACHINANGO">Guachinango</option>
<option value="GUADALAJARA">Guadalajara</option>
<option value="HOSTOTIPAQUILLO">Hostotipaquillo</option>
<option value="HUEJUCAR">Huejucar</option>
<option value="HUEJUQUILLA EL ALTO">Huejuquilla El Alto</option>
<option value="IXTLAHUACAN DE LOS MEMBRILLOS">Ixtlahuacan De Los Membrillos</option>
<option value="IXTLAHUACAN DEL RIO">Ixtlahuacan Del Rio</option>
<option value="JALOSTOTITLAN">Jalostotitlan</option>
<option value="JAMAY">Jamay</option>
<option value="JESUS MARIA">Jesus Maria</option>
<option value="JILOTLAN DE LOS DOLORES">Jilotlan De Los Dolores</option>
<option value="JOCOTEPEC">Jocotepec</option>
<option value="JUANACATLAN">Juanacatlan</option>
<option value="JUCHITLAN">Juchitlan</option>
<option value="LA BARCA">La Barca</option>
<option value="LA HUERTA">La Huerta</option>
<option value="LA MANZANILLA DE LA PAZ">La Manzanilla De La Paz</option>
<option value="LAGOS DE MORENO">Lagos De Moreno</option>
<option value="MAGDALENA">Magdalena</option>
<option value="MASCOTA">Mascota</option>
<option value="MAZAMITLA">Mazamitla</option>
<option value="MEXTICACAN">Mexticacan</option>
<option value="MEZQUITIC">Mezquitic</option>
<option value="MIXTLAN">Mixtlan</option>
<option value="OCOTLAN">Ocotlan</option>
<option value="OJUELOS DE JALISCO">Ojuelos De Jalisco</option>
<option value="PIHUAMO">Pihuamo</option>
<option value="PONCITLAN">Poncitlan</option>
<option value="PUERTO VALLARTA">Puerto Vallarta</option>
<option value="QUITUPAN">Quitupan</option>
<option value="SAN CRISTOBAL DE LA BARRANCA">San Cristobal De La Barranca</option>
<option value="SAN DIEGO DE ALEJANDRIA">San Diego De Alejandria</option>
<option value="SAN GABRIEL">San Gabriel</option>
<option value="SAN IGNACIO CERRO GORDO">San Ignacio Cerro Gordo</option>
<option value="SAN JUAN DE LOS LAGOS">San Juan De Los Lagos</option>
<option value="SAN JUANITO DE ESCOBEDO">San Juanito De Escobedo</option>
<option value="SAN JULIAN">San Julian</option>
<option value="SAN MARCOS">San Marcos</option>
<option value="SAN MARTIN DE BOLAÐOS">San Martin De Bolaðos</option>
<option value="SAN MARTIN HIDALGO">San Martin Hidalgo</option>
<option value="SAN MIGUEL EL ALTO">San Miguel El Alto</option>
<option value="SAN PEDRO TLAQUEPAQUE">San Pedro Tlaquepaque</option>
<option value="SAN SEBASTIAN DEL OESTE">San Sebastian Del Oeste</option>
<option value="SANTA MARIA DE LOS ANGELES">Santa Maria De Los Angeles</option>
<option value="SANTA MARIA DEL ORO">Santa Maria Del Oro</option>
<option value="SAYULA">Sayula</option>
<option value="TALA">Tala</option>
<option value="TALPA DE ALLENDE">Talpa De Allende</option>
<option value="TAMAZULA DE GORDIANO">Tamazula De Gordiano</option>
<option value="TAPALPA">Tapalpa</option>
<option value="TECALITLAN">Tecalitlan</option>
<option value="TECHALUTA DE MONTENEGRO">Techaluta De Montenegro</option>
<option value="TECOLOTLAN">Tecolotlan</option>
<option value="TENAMAXTLAN">Tenamaxtlan</option>
<option value="TEOCALTICHE">Teocaltiche</option>
<option value="TEOCUITATLAN DE CORONA">Teocuitatlan De Corona</option>
<option value="TEPATITLAN DE MORELOS">Tepatitlan De Morelos</option>
<option value="TEQUILA">Tequila</option>
<option value="TEUCHITLAN">Teuchitlan</option>
<option value="TIZAPAN EL ALTO">Tizapan El Alto</option>
<option value="TLAJOMULCO DE ZUÐIGA">Tlajomulco De Zuðiga</option>
<option value="TOLIMAN">Toliman</option>
<option value="TOMATLAN">Tomatlan</option>
<option value="TONALA">Tonala</option>
<option value="TONAYA">Tonaya</option>
<option value="TONILA">Tonila</option>
<option value="TOTATICHE">Totatiche</option>
<option value="TOTOTLAN">Tototlan</option>
<option value="TUXCACUESCO">Tuxcacuesco</option>
<option value="TUXCUECA">Tuxcueca</option>
<option value="TUXPAN">Tuxpan</option>
<option value="UNION DE SAN ANTONIO">Union De San Antonio</option>
<option value="UNION DE TULA">Union De Tula</option>
<option value="VALLE DE GUADALUPE">Valle De Guadalupe</option>
<option value="VALLE DE JUAREZ">Valle De Juarez</option>
<option value="VILLA CORONA">Villa Corona</option>
<option value="VILLA GUERRERO">Villa Guerrero</option>
<option value="VILLA HIDALGO">Villa Hidalgo</option>
<option value="VILLA PURIFICACION">Villa Purificacion</option>
<option value="YAHUALICA DE GONZALEZ GALLO">Yahualica De Gonzalez Gallo</option>
<option value="ZACOALCO DE TORRES">Zacoalco De Torres</option>
<option value="ZAPOPAN">Zapopan</option>
<option value="ZAPOTILTIC">Zapotiltic</option>
<option value="ZAPOTITLAN DE VADILLO">Zapotitlan De Vadillo</option>
<option value="ZAPOTLAN DEL REY">Zapotlan Del Rey</option>
<option value="ZAPOTLAN EL GRANDE">Zapotlan El Grande</option>
<option value="ZAPOTLANEJO">Zapotlanejo</option>
      </select>

      <select name="mexico" id="mexico-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ACAMBAY DE RUIZ CASTAÐEDA">Acambay De Ruiz Castaðeda</option>
<option value="ACOLMAN">Acolman</option>
<option value="ACULCO">Aculco</option>
<option value="ALMOLOYA DE ALQUISIRAS">Almoloya De Alquisiras</option>
<option value="ALMOLOYA DE JUAREZ">Almoloya De Juarez</option>
<option value="ALMOLOYA DEL RIO">Almoloya Del Rio</option>
<option value="AMANALCO">Amanalco</option>
<option value="AMATEPEC">Amatepec</option>
<option value="AMECAMECA">Amecameca</option>
<option value="APAXCO">Apaxco</option>
<option value="ATENCO">Atenco</option>
<option value="ATIZAPAN DE ZARAGOZA">Atizapan De Zaragoza</option>
<option value="ATIZAPAN">Atizapan</option>
<option value="ATLACOMULCO">Atlacomulco</option>
<option value="ATLAUTLA">Atlautla</option>
<option value="AXAPUSCO">Axapusco</option>
<option value="AYAPANGO">Ayapango</option>
<option value="CALIMAYA">Calimaya</option>
<option value="CAPULHUAC">Capulhuac</option>
<option value="CHALCO">Chalco</option>
<option value="CHAPA DE MOTA">Chapa De Mota</option>
<option value="CHAPULTEPEC">Chapultepec</option>
<option value="CHIAUTLA">Chiautla</option>
<option value="CHICOLOAPAN">Chicoloapan</option>
<option value="CHICONCUAC">Chiconcuac</option>
<option value="CHIMALHUACAN">Chimalhuacan</option>
<option value="COACALCO DE BERRIOZABAL">Coacalco De Berriozabal</option>
<option value="COATEPEC HARINAS">Coatepec Harinas</option>
<option value="COCOTITLAN">Cocotitlan</option>
<option value="COYOTEPEC">Coyotepec</option>
<option value="CUAUTITLAN IZCALLI">Cuautitlan Izcalli</option>
<option value="CUAUTITLAN">Cuautitlan</option>
<option value="DONATO GUERRA">Donato Guerra</option>
<option value="ECATEPEC DE MORELOS">Ecatepec De Morelos</option>
<option value="ECATZINGO">Ecatzingo</option>
<option value="EL ORO">El Oro</option>
<option value="HUEHUETOCA">Huehuetoca</option>
<option value="HUEYPOXTLA">Hueypoxtla</option>
<option value="HUIXQUILUCAN">Huixquilucan</option>
<option value="ISIDRO FABELA">Isidro Fabela</option>
<option value="IXTAPALUCA">Ixtapaluca</option>
<option value="IXTAPAN DE LA SAL">Ixtapan De La Sal</option>
<option value="IXTAPAN DEL ORO">Ixtapan Del Oro</option>
<option value="IXTLAHUACA">Ixtlahuaca</option>
<option value="JALTENCO">Jaltenco</option>
<option value="JILOTEPEC">Jilotepec</option>
<option value="JILOTZINGO">Jilotzingo</option>
<option value="JIQUIPILCO">Jiquipilco</option>
<option value="JOCOTITLAN">Jocotitlan</option>
<option value="JOQUICINGO">Joquicingo</option>
<option value="JUCHITEPEC">Juchitepec</option>
<option value="LA PAZ">La Paz</option>
<option value="LERMA">Lerma</option>
<option value="LUVIANOS">Luvianos</option>
<option value="MALINALCO">Malinalco</option>
<option value="MELCHOR OCAMPO">Melchor Ocampo</option>
<option value="METEPEC">Metepec</option>
<option value="MEXICALTZINGO">Mexicaltzingo</option>
<option value="MORELOS">Morelos</option>
<option value="NAUCALPAN DE JUAREZ">Naucalpan De Juarez</option>
<option value="NEXTLALPAN">Nextlalpan</option>
<option value="NEZAHUALCOYOTL">Nezahualcoyotl</option>
<option value="NICOLAS ROMERO">Nicolas Romero</option>
<option value="NOPALTEPEC">Nopaltepec</option>
<option value="OCOYOACAC">Ocoyoacac</option>
<option value="OCUILAN">Ocuilan</option>
<option value="OTUMBA">Otumba</option>
<option value="OTZOLOAPAN">Otzoloapan</option>
<option value="OTZOLOTEPEC">Otzolotepec</option>
<option value="OZUMBA">Ozumba</option>
<option value="PAPALOTLA">Papalotla</option>
<option value="POLOTITLAN">Polotitlan</option>
<option value="RAYON">Rayon</option>
<option value="SAN ANTONIO LA ISLA">San Antonio La Isla</option>
<option value="SAN FELIPE DEL PROGRESO">San Felipe Del Progreso</option>
<option value="SAN JOSE DEL RINCON">San Jose Del Rincon</option>
<option value="SAN MARTIN DE LAS PIRAMIDES">San Martin De Las Piramides</option>
<option value="SAN MATEO ATENCO">San Mateo Atenco</option>
<option value="SAN SIMON DE GUERRERO">San Simon De Guerrero</option>
<option value="SANTO TOMAS">Santo Tomas</option>
<option value="SOYANIQUILPAN DE JUAREZ">Soyaniquilpan De Juarez</option>
<option value="SULTEPEC">Sultepec</option>
<option value="TECAMAC">Tecamac</option>
<option value="TEJUPILCO">Tejupilco</option>
<option value="TEMAMATLA">Temamatla</option>
<option value="TEMASCALAPA">Temascalapa</option>
<option value="TEMASCALCINGO">Temascalcingo</option>
<option value="TEMASCALTEPEC">Temascaltepec</option>
<option value="TEMOAYA">Temoaya</option>
<option value="TENANCINGO">Tenancingo</option>
<option value="TENANGO DEL AIRE">Tenango Del Aire</option>
<option value="TENANGO DEL VALLE">Tenango Del Valle</option>
<option value="TEOLOYUCAN">Teoloyucan</option>
<option value="TEOTIHUACAN">Teotihuacan</option>
<option value="TEPETLAOXTOC">Tepetlaoxtoc</option>
<option value="TEPETLIXPA">Tepetlixpa</option>
<option value="TEPOTZOTLAN">Tepotzotlan</option>
<option value="TEQUIXQUIAC">Tequixquiac</option>
<option value="TEXCALTITLAN">Texcaltitlan</option>
<option value="TEXCALYACAC">Texcalyacac</option>
<option value="TEXCOCO">Texcoco</option>
<option value="TEZOYUCA">Tezoyuca</option>
<option value="TIANGUISTENCO">Tianguistenco</option>
<option value="TIMILPAN">Timilpan</option>
<option value="TLALMANALCO">Tlalmanalco</option>
<option value="TLALNEPANTLA DE BAZ">Tlalnepantla De Baz</option>
<option value="TLATLAYA">Tlatlaya</option>
<option value="TOLUCA">Toluca</option>
<option value="TONANITLA">Tonanitla</option>
<option value="TONATICO">Tonatico</option>
<option value="TULTEPEC">Tultepec</option>
<option value="TULTITLAN">Tultitlan</option>
<option value="VALLE DE BRAVO">Valle De Bravo</option>
<option value="VALLE DE CHALCO SOLIDARIDAD">Valle De Chalco Solidaridad</option>
<option value="VILLA DE ALLENDE">Villa De Allende</option>
<option value="VILLA DEL CARBON">Villa Del Carbon</option>
<option value="VILLA GUERRERO">Villa Guerrero</option>
<option value="VILLA VICTORIA">Villa Victoria</option>
<option value="XALATLACO">Xalatlaco</option>
<option value="XONACATLAN">Xonacatlan</option>
<option value="ZACAZONAPAN">Zacazonapan</option>
<option value="ZACUALPAN">Zacualpan</option>
<option value="ZINACANTEPEC">Zinacantepec</option>
<option value="ZUMPAHUACAN">Zumpahuacan</option>
<option value="ZUMPANGO">Zumpango</option>
      </select>

      <select name="michoacan" id="michoacan-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ACUITZIO">Acuitzio</option>
<option value="AGUILILLA">Aguililla</option>
<option value="ALVARO OBREGON">Alvaro Obregon</option>
<option value="ANGAMACUTIRO">Angamacutiro</option>
<option value="ANGANGUEO">Angangueo</option>
<option value="APATZINGAN">Apatzingan</option>
<option value="APORO">Aporo</option>
<option value="AQUILA">Aquila</option>
<option value="ARIO">Ario</option>
<option value="ARTEAGA">Arteaga</option>
<option value="BRISEÐAS">Briseðas</option>
<option value="BUENAVISTA">Buenavista</option>
<option value="CARACUARO">Caracuaro</option>
<option value="CHARAPAN">Charapan</option>
<option value="CHARO">Charo</option>
<option value="CHAVINDA">Chavinda</option>
<option value="CHERAN">Cheran</option>
<option value="CHILCHOTA">Chilchota</option>
<option value="CHINICUILA">Chinicuila</option>
<option value="CHUCANDIRO">Chucandiro</option>
<option value="CHURINTZIO">Churintzio</option>
<option value="CHURUMUCO">Churumuco</option>
<option value="COAHUAYANA">Coahuayana</option>
<option value="COALCOMAN DE VAZQUEZ PALLARES">Coalcoman De Vazquez Pallares</option>
<option value="COENEO">Coeneo</option>
<option value="COJUMATLAN DE REGULES">Cojumatlan De Regules</option>
<option value="CONTEPEC">Contepec</option>
<option value="COPANDARO">Copandaro</option>
<option value="COTIJA">Cotija</option>
<option value="CUITZEO">Cuitzeo</option>
<option value="ECUANDUREO">Ecuandureo</option>
<option value="EPITACIO HUERTA">Epitacio Huerta</option>
<option value="ERONGARICUARO">Erongaricuaro</option>
<option value="GABRIEL ZAMORA">Gabriel Zamora</option>
<option value="HIDALGO">Hidalgo</option>
<option value="HUANDACAREO">Huandacareo</option>
<option value="HUANIQUEO">Huaniqueo</option>
<option value="HUETAMO">Huetamo</option>
<option value="HUIRAMBA">Huiramba</option>
<option value="INDAPARAPEO">Indaparapeo</option>
<option value="IRIMBO">Irimbo</option>
<option value="IXTLAN">Ixtlan</option>
<option value="JACONA">Jacona</option>
<option value="JIMENEZ">Jimenez</option>
<option value="JIQUILPAN">Jiquilpan</option>
<option value="JOSE SIXTO VERDUZCO">Jose Sixto Verduzco</option>
<option value="JUAREZ">Juarez</option>
<option value="JUNGAPEO">Jungapeo</option>
<option value="LA HUACANA">La Huacana</option>
<option value="LA PIEDAD">La Piedad</option>
<option value="LAGUNILLAS">Lagunillas</option>
<option value="LAZARO CARDENAS">Lazaro Cardenas</option>
<option value="LOS REYES">Los Reyes</option>
<option value="MADERO">Madero</option>
<option value="MARAVATIO">Maravatio</option>
<option value="MARCOS CASTELLANOS">Marcos Castellanos</option>
<option value="MORELIA">Morelia</option>
<option value="MORELOS">Morelos</option>
<option value="MUGICA">Mugica</option>
<option value="NAHUATZEN">Nahuatzen</option>
<option value="NOCUPETARO">Nocupetaro</option>
<option value="NUEVO PARANGARICUTIRO">Nuevo Parangaricutiro</option>
<option value="NUEVO URECHO">Nuevo Urecho</option>
<option value="NUMARAN">Numaran</option>
<option value="OCAMPO">Ocampo</option>
<option value="PAJACUARAN">Pajacuaran</option>
<option value="PANINDICUARO">Panindicuaro</option>
<option value="PARACHO">Paracho</option>
<option value="PARACUARO">Paracuaro</option>
<option value="PATZCUARO">Patzcuaro</option>
<option value="PENJAMILLO">Penjamillo</option>
<option value="PERIBAN">Periban</option>
<option value="PUREPERO">Purepero</option>
<option value="PURUANDIRO">Puruandiro</option>
<option value="QUERENDARO">Querendaro</option>
<option value="QUIROGA">Quiroga</option>
<option value="SAHUAYO">Sahuayo</option>
<option value="SALVADOR ESCALANTE">Salvador Escalante</option>
<option value="SAN LUCAS">San Lucas</option>
<option value="SANTA ANA MAYA">Santa Ana Maya</option>
<option value="SENGUIO">Senguio</option>
<option value="SUSUPUATO">Susupuato</option>
<option value="TACAMBARO">Tacambaro</option>
<option value="TANCITARO">Tancitaro</option>
<option value="TANGAMANDAPIO">Tangamandapio</option>
<option value="TANGANCICUARO">Tangancicuaro</option>
<option value="TANHUATO">Tanhuato</option>
<option value="TARETAN">Taretan</option>
<option value="TARIMBARO">Tarimbaro</option>
<option value="TEPALCATEPEC">Tepalcatepec</option>
<option value="TINGAMBATO">Tingambato</option>
<option value="TINGUINDIN">Tinguindin</option>
<option value="TIQUICHEO DE NICOLAS ROMERO">Tiquicheo De Nicolas Romero</option>
<option value="TLALPUJAHUA">Tlalpujahua</option>
<option value="TLAZAZALCA">Tlazazalca</option>
<option value="TOCUMBO">Tocumbo</option>
<option value="TUMBISCATIO">Tumbiscatio</option>
<option value="TURICATO">Turicato</option>
<option value="TUXPAN">Tuxpan</option>
<option value="TUZANTLA">Tuzantla</option>
<option value="TZINTZUNTZAN">Tzintzuntzan</option>
<option value="TZITZIO">Tzitzio</option>
<option value="URUAPAN">Uruapan</option>
<option value="VENUSTIANO CARRANZA">Venustiano Carranza</option>
<option value="VILLAMAR">Villamar</option>
<option value="VISTA HERMOSA">Vista Hermosa</option>
<option value="YURECUARO">Yurecuaro</option>
<option value="ZACAPU">Zacapu</option>
<option value="ZAMORA">Zamora</option>
<option value="ZINAPARO">Zinaparo</option>
<option value="ZINAPECUARO">Zinapecuaro</option>
<option value="ZIRACUARETIRO">Ziracuaretiro</option>
<option value="ZITACUARO">Zitacuaro</option>
      </select>

      <select name="morelos" id="morelos-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="AMACUZAC">Amacuzac</option>
<option value="ATLATLAHUCAN">Atlatlahucan</option>
<option value="AXOCHIAPAN">Axochiapan</option>
<option value="AYALA">Ayala</option>
<option value="COATETELCO">Coatetelco</option>
<option value="COATLAN DEL RIO">Coatlan Del Rio</option>
<option value="CUAUTLA">Cuautla</option>
<option value="CUERNAVACA">Cuernavaca</option>
<option value="EMILIANO ZAPATA">Emiliano Zapata</option>
<option value="HUITZILAC">Huitzilac</option>
<option value="JANTETELCO">Jantetelco</option>
<option value="JIUTEPEC">Jiutepec</option>
<option value="JOJUTLA">Jojutla</option>
<option value="JONACATEPEC">Jonacatepec</option>
<option value="MAZATEPEC">Mazatepec</option>
<option value="MIACATLAN">Miacatlan</option>
<option value="OCUITUCO">Ocuituco</option>
<option value="PUENTE DE IXTLA">Puente De Ixtla</option>
<option value="TEMIXCO">Temixco</option>
<option value="TEMOAC">Temoac</option>
<option value="TEPALCINGO">Tepalcingo</option>
<option value="TEPOZTLAN">Tepoztlan</option>
<option value="TETECALA">Tetecala</option>
<option value="TETELA DEL VOLCAN">Tetela Del Volcan</option>
<option value="TLALNEPANTLA">Tlalnepantla</option>
<option value="TLALTIZAPAN DE ZAPATA">Tlaltizapan De Zapata</option>
<option value="TLAQUILTENANGO">Tlaquiltenango</option>
<option value="TLAYACAPAN">Tlayacapan</option>
<option value="TOTOLAPAN">Totolapan</option>
<option value="XOCHITEPEC">Xochitepec</option>
<option value="XOXOCOTLA">Xoxocotla</option>
<option value="YAUTEPEC">Yautepec</option>
<option value="YECAPIXTLA">Yecapixtla</option>
<option value="ZACATEPEC">Zacatepec</option>
<option value="ZACUALPAN DE AMILPAS">Zacualpan De Amilpas</option>
      </select>

      <select name="nayarit" id="nayarit-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ACAPONETA">Acaponeta</option>
<option value="AHUACATLAN">Ahuacatlan</option>
<option value="AMATLAN DE CAÐAS">Amatlan De Caðas</option>
<option value="BAHIA DE BANDERAS">Bahia De Banderas</option>
<option value="COMPOSTELA">Compostela</option>
<option value="DEL NAYAR">Del Nayar</option>
<option value="HUAJICORI">Huajicori</option>
<option value="IXTLAN DEL RIO">Ixtlan Del Rio</option>
<option value="JALA">Jala</option>
<option value="LA YESCA">La Yesca</option>
<option value="ROSAMORADA">Rosamorada</option>
<option value="RUIZ">Ruiz</option>
<option value="SAN BLAS">San Blas</option>
<option value="SAN PEDRO LAGUNILLAS">San Pedro Lagunillas</option>
<option value="SANTA MARIA DEL ORO">Santa Maria Del Oro</option>
<option value="SANTIAGO IXCUINTLA">Santiago Ixcuintla</option>
<option value="TECUALA">Tecuala</option>
<option value="TEPIC">Tepic</option>
<option value="TUXPAN">Tuxpan</option>
<option value="XALISCO">Xalisco</option>
      </select>

      <select name="nuevoleon" id="nuevoleon-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ABASOLO">Abasolo</option>
<option value="AGUALEGUAS">Agualeguas</option>
<option value="ALLENDE">Allende</option>
<option value="ANAHUAC">Anahuac</option>
<option value="APODACA">Apodaca</option>
<option value="ARAMBERRI">Aramberri</option>
<option value="BUSTAMANTE">Bustamante</option>
<option value="CADEREYTA JIMENEZ">Cadereyta Jimenez</option>
<option value="CARMEN">Carmen</option>
<option value="CERRALVO">Cerralvo</option>
<option value="CHINA">China</option>
<option value="CIENEGA DE FLORES">Cienega De Flores</option>
<option value="DR. ARROYO">Dr. Arroyo</option>
<option value="DR. COSS">Dr. Coss</option>
<option value="DR. GONZALEZ">Dr. Gonzalez</option>
<option value="GALEANA">Galeana</option>
<option value="GARCIA">Garcia</option>
<option value="GRAL. BRAVO">Gral. Bravo</option>
<option value="GRAL. ESCOBEDO">Gral. Escobedo</option>
<option value="GRAL. TERAN">Gral. Teran</option>
<option value="GRAL. TREVIÐO">Gral. Treviðo</option>
<option value="GRAL. ZARAGOZA">Gral. Zaragoza</option>
<option value="GRAL. ZUAZUA">Gral. Zuazua</option>
<option value="GUADALUPE">Guadalupe</option>
<option value="HIDALGO">Hidalgo</option>
<option value="HIGUERAS">Higueras</option>
<option value="HUALAHUISES">Hualahuises</option>
<option value="ITURBIDE">Iturbide</option>
<option value="JUAREZ">Juarez</option>
<option value="LAMPAZOS DE NARANJO">Lampazos De Naranjo</option>
<option value="LINARES">Linares</option>
<option value="LOS ALDAMAS">Los Aldamas</option>
<option value="LOS HERRERAS">Los Herreras</option>
<option value="LOS RAMONES">Los Ramones</option>
<option value="MARIN">Marin</option>
<option value="MELCHOR OCAMPO">Melchor Ocampo</option>
<option value="MIER Y NORIEGA">Mier Y Noriega</option>
<option value="MINA">Mina</option>
<option value="MONTEMORELOS">Montemorelos</option>
<option value="MONTERREY">Monterrey</option>
<option value="PARAS">Paras</option>
<option value="PESQUERIA">Pesqueria</option>
<option value="RAYONES">Rayones</option>
<option value="SABINAS HIDALGO">Sabinas Hidalgo</option>
<option value="SALINAS VICTORIA">Salinas Victoria</option>
<option value="SAN NICOLAS DE LOS GARZA">San Nicolas De Los Garza</option>
<option value="SAN PEDRO GARZA GARCIA">San Pedro Garza Garcia</option>
<option value="SANTA CATARINA">Santa Catarina</option>
<option value="SANTIAGO">Santiago</option>
<option value="VALLECILLO">Vallecillo</option>
<option value="VILLALDAMA">Villaldama</option>
      </select>

      <select name="oaxaca" id="oaxaca-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ABEJONES">Abejones</option>
<option value="ACATLAN DE PEREZ FIGUEROA">Acatlan De Perez Figueroa</option>
<option value="ANIMAS TRUJANO">Animas Trujano</option>
<option value="ASUNCION CACALOTEPEC">Asuncion Cacalotepec</option>
<option value="ASUNCION CUYOTEPEJI">Asuncion Cuyotepeji</option>
<option value="ASUNCION IXTALTEPEC">Asuncion Ixtaltepec</option>
<option value="ASUNCION NOCHIXTLAN">Asuncion Nochixtlan</option>
<option value="ASUNCION OCOTLAN">Asuncion Ocotlan</option>
<option value="ASUNCION TLACOLULITA">Asuncion Tlacolulita</option>
<option value="AYOQUEZCO DE ALDAMA">Ayoquezco De Aldama</option>
<option value="AYOTZINTEPEC">Ayotzintepec</option>
<option value="CALIHUALA">Calihuala</option>
<option value="CANDELARIA LOXICHA">Candelaria Loxicha</option>
<option value="CAPULALPAM DE MENDEZ">Capulalpam De Mendez</option>
<option value="CHAHUITES">Chahuites</option>
<option value="CHALCATONGO DE HIDALGO">Chalcatongo De Hidalgo</option>
<option value="CHIQUIHUITLAN DE BENITO JUAREZ">Chiquihuitlan De Benito Juarez</option>
<option value="CIENEGA DE ZIMATLAN">Cienega De Zimatlan</option>
<option value="CIUDAD IXTEPEC">Ciudad Ixtepec</option>
<option value="COATECAS ALTAS">Coatecas Altas</option>
<option value="COICOYAN DE LAS FLORES">Coicoyan De Las Flores</option>
<option value="CONCEPCION BUENAVISTA">Concepcion Buenavista</option>
<option value="CONCEPCION PAPALO">Concepcion Papalo</option>
<option value="CONSTANCIA DEL ROSARIO">Constancia Del Rosario</option>
<option value="COSOLAPA">Cosolapa</option>
<option value="COSOLTEPEC">Cosoltepec</option>
<option value="CUILAPAM DE GUERRERO">Cuilapam De Guerrero</option>
<option value="CUYAMECALCO VILLA DE ZARAGOZA">Cuyamecalco Villa De Zaragoza</option>
<option value="EL BARRIO DE LA SOLEDAD">El Barrio De La Soledad</option>
<option value="EL ESPINAL">El Espinal</option>
<option value="ELOXOCHITLAN DE FLORES MAGON">Eloxochitlan De Flores Magon</option>
<option value="FRESNILLO DE TRUJANO">Fresnillo De Trujano</option>
<option value="GUADALUPE DE RAMIREZ">Guadalupe De Ramirez</option>
<option value="GUADALUPE ETLA">Guadalupe Etla</option>
<option value="GUELATAO DE JUAREZ">Guelatao De Juarez</option>
<option value="GUEVEA DE HUMBOLDT">Guevea De Humboldt</option>
<option value="H VILLA TEZOATLAN SEGURA Y LUNA CUNA IND OAX">H Villa Tezoatlan Segura Y Luna Cuna Ind Oax</option>
<option value="HEROICA CIUDAD DE EJUTLA DE CRESPO">Heroica Ciudad De Ejutla De Crespo</option>
<option value="HEROICA CIUDAD DE HUAJUAPAN DE LEON">Heroica Ciudad De Huajuapan De Leon</option>
<option value="HEROICA CIUDAD DE JUCHITAN DE ZARAGOZA">Heroica Ciudad De Juchitan De Zaragoza</option>
<option value="HEROICA CIUDAD DE TLAXIACO">Heroica Ciudad De Tlaxiaco</option>
<option value="HUAUTEPEC">Huautepec</option>
<option value="HUAUTLA DE JIMENEZ">Huautla De Jimenez</option>
<option value="IXPANTEPEC NIEVES">Ixpantepec Nieves</option>
<option value="IXTLAN DE JUAREZ">Ixtlan De Juarez</option>
<option value="LA COMPAÐIA">La Compaðia</option>
<option value="LA PE">La Pe</option>
<option value="LA REFORMA">La Reforma</option>
<option value="LA TRINIDAD VISTA HERMOSA">La Trinidad Vista Hermosa</option>
<option value="LOMA BONITA">Loma Bonita</option>
<option value="MAGDALENA APASCO">Magdalena Apasco</option>
<option value="MAGDALENA JALTEPEC">Magdalena Jaltepec</option>
<option value="MAGDALENA MIXTEPEC">Magdalena Mixtepec</option>
<option value="MAGDALENA OCOTLAN">Magdalena Ocotlan</option>
<option value="MAGDALENA PEÐASCO">Magdalena Peðasco</option>
<option value="MAGDALENA TEITIPAC">Magdalena Teitipac</option>
<option value="MAGDALENA TEQUISISTLAN">Magdalena Tequisistlan</option>
<option value="MAGDALENA TLACOTEPEC">Magdalena Tlacotepec</option>
<option value="MAGDALENA YODOCONO DE PORFIRIO DIAZ">Magdalena Yodocono De Porfirio Diaz</option>
<option value="MAGDALENA ZAHUATLAN">Magdalena Zahuatlan</option>
<option value="MARISCALA DE JUAREZ">Mariscala De Juarez</option>
<option value="MARTIRES DE TACUBAYA">Martires De Tacubaya</option>
<option value="MATIAS ROMERO AVENDAÐO">Matias Romero Avendaðo</option>
<option value="MAZATLAN VILLA DE FLORES">Mazatlan Villa De Flores</option>
<option value="MESONES HIDALGO">Mesones Hidalgo</option>
<option value="MIAHUATLAN DE PORFIRIO DIAZ">Miahuatlan De Porfirio Diaz</option>
<option value="MIXISTLAN DE LA REFORMA">Mixistlan De La Reforma</option>
<option value="MONJAS">Monjas</option>
<option value="NATIVIDAD">Natividad</option>
<option value="NAZARENO ETLA">Nazareno Etla</option>
<option value="NEJAPA DE MADERO">Nejapa De Madero</option>
<option value="NUEVO ZOQUIAPAM">Nuevo Zoquiapam</option>
<option value="OAXACA DE JUAREZ">Oaxaca De Juarez</option>
<option value="OCOTLAN DE MORELOS">Ocotlan De Morelos</option>
<option value="PINOTEPA DE DON LUIS">Pinotepa De Don Luis</option>
<option value="PLUMA HIDALGO">Pluma Hidalgo</option>
<option value="PUTLA VILLA DE GUERRERO">Putla Villa De Guerrero</option>
<option value="REFORMA DE PINEDA">Reforma De Pineda</option>
<option value="REYES ETLA">Reyes Etla</option>
<option value="ROJAS DE CUAUHTEMOC">Rojas De Cuauhtemoc</option>
<option value="SALINA CRUZ">Salina Cruz</option>
<option value="SAN AGUSTIN AMATENGO">San Agustin Amatengo</option>
<option value="SAN AGUSTIN ATENANGO">San Agustin Atenango</option>
<option value="SAN AGUSTIN CHAYUCO">San Agustin Chayuco</option>
<option value="SAN AGUSTIN DE LAS JUNTAS">San Agustin De Las Juntas</option>
<option value="SAN AGUSTIN ETLA">San Agustin Etla</option>
<option value="SAN AGUSTIN LOXICHA">San Agustin Loxicha</option>
<option value="SAN AGUSTIN TLACOTEPEC">San Agustin Tlacotepec</option>
<option value="SAN AGUSTIN YATARENI">San Agustin Yatareni</option>
<option value="SAN ANDRES CABECERA NUEVA">San Andres Cabecera Nueva</option>
<option value="SAN ANDRES DINICUITI">San Andres Dinicuiti</option>
<option value="SAN ANDRES HUAXPALTEPEC">San Andres Huaxpaltepec</option>
<option value="SAN ANDRES HUAYAPAM">San Andres Huayapam</option>
<option value="SAN ANDRES IXTLAHUACA">San Andres Ixtlahuaca</option>
<option value="SAN ANDRES LAGUNAS">San Andres Lagunas</option>
<option value="SAN ANDRES NUXIÐO">San Andres Nuxiðo</option>
<option value="SAN ANDRES PAXTLAN">San Andres Paxtlan</option>
<option value="SAN ANDRES SINAXTLA">San Andres Sinaxtla</option>
<option value="SAN ANDRES SOLAGA">San Andres Solaga</option>
<option value="SAN ANDRES TEOTILALPAM">San Andres Teotilalpam</option>
<option value="SAN ANDRES TEPETLAPA">San Andres Tepetlapa</option>
<option value="SAN ANDRES YAA">San Andres Yaa</option>
<option value="SAN ANDRES ZABACHE">San Andres Zabache</option>
<option value="SAN ANDRES ZAUTLA">San Andres Zautla</option>
<option value="SAN ANTONINO CASTILLO VELASCO">San Antonino Castillo Velasco</option>
<option value="SAN ANTONINO EL ALTO">San Antonino El Alto</option>
<option value="SAN ANTONINO MONTE VERDE">San Antonino Monte Verde</option>
<option value="SAN ANTONIO ACUTLA">San Antonio Acutla</option>
<option value="SAN ANTONIO DE LA CAL">San Antonio De La Cal</option>
<option value="SAN ANTONIO HUITEPEC">San Antonio Huitepec</option>
<option value="SAN ANTONIO NANAHUATIPAM">San Antonio Nanahuatipam</option>
<option value="SAN ANTONIO SINICAHUA">San Antonio Sinicahua</option>
<option value="SAN ANTONIO TEPETLAPA">San Antonio Tepetlapa</option>
<option value="SAN BALTAZAR CHICHICAPAM">San Baltazar Chichicapam</option>
<option value="SAN BALTAZAR LOXICHA">San Baltazar Loxicha</option>
<option value="SAN BALTAZAR YATZACHI EL BAJO">San Baltazar Yatzachi El Bajo</option>
<option value="SAN BARTOLO COYOTEPEC">San Bartolo Coyotepec</option>
<option value="SAN BARTOLO SOYALTEPEC">San Bartolo Soyaltepec</option>
<option value="SAN BARTOLO YAUTEPEC">San Bartolo Yautepec</option>
<option value="SAN BARTOLOME AYAUTLA">San Bartolome Ayautla</option>
<option value="SAN BARTOLOME LOXICHA">San Bartolome Loxicha</option>
<option value="SAN BARTOLOME QUIALANA">San Bartolome Quialana</option>
<option value="SAN BARTOLOME YUCUAÐE">San Bartolome Yucuaðe</option>
<option value="SAN BARTOLOME ZOOGOCHO">San Bartolome Zoogocho</option>
<option value="SAN BERNARDO MIXTEPEC">San Bernardo Mixtepec</option>
<option value="SAN BLAS ATEMPA">San Blas Atempa</option>
<option value="SAN CARLOS YAUTEPEC">San Carlos Yautepec</option>
<option value="SAN CRISTOBAL AMATLAN">San Cristobal Amatlan</option>
<option value="SAN CRISTOBAL AMOLTEPEC">San Cristobal Amoltepec</option>
<option value="SAN CRISTOBAL LACHIRIOAG">San Cristobal Lachirioag</option>
<option value="SAN CRISTOBAL SUCHIXTLAHUACA">San Cristobal Suchixtlahuaca</option>
<option value="SAN DIONISIO DEL MAR">San Dionisio Del Mar</option>
<option value="SAN DIONISIO OCOTEPEC">San Dionisio Ocotepec</option>
<option value="SAN DIONISIO OCOTLAN">San Dionisio Ocotlan</option>
<option value="SAN ESTEBAN ATATLAHUCA">San Esteban Atatlahuca</option>
<option value="SAN FELIPE JALAPA DE DIAZ">San Felipe Jalapa De Diaz</option>
<option value="SAN FELIPE TEJALAPAM">San Felipe Tejalapam</option>
<option value="SAN FELIPE USILA">San Felipe Usila</option>
<option value="SAN FRANCISCO CAHUACUA">San Francisco Cahuacua</option>
<option value="SAN FRANCISCO CAJONOS">San Francisco Cajonos</option>
<option value="SAN FRANCISCO CHAPULAPA">San Francisco Chapulapa</option>
<option value="SAN FRANCISCO CHINDUA">San Francisco Chindua</option>
<option value="SAN FRANCISCO DEL MAR">San Francisco Del Mar</option>
<option value="SAN FRANCISCO HUEHUETLAN">San Francisco Huehuetlan</option>
<option value="SAN FRANCISCO IXHUATAN">San Francisco Ixhuatan</option>
<option value="SAN FRANCISCO JALTEPETONGO">San Francisco Jaltepetongo</option>
<option value="SAN FRANCISCO LACHIGOLO">San Francisco Lachigolo</option>
<option value="SAN FRANCISCO LOGUECHE">San Francisco Logueche</option>
<option value="SAN FRANCISCO NUXAÐO">San Francisco Nuxaðo</option>
<option value="SAN FRANCISCO OZOLOTEPEC">San Francisco Ozolotepec</option>
<option value="SAN FRANCISCO SOLA">San Francisco Sola</option>
<option value="SAN FRANCISCO TELIXTLAHUACA">San Francisco Telixtlahuaca</option>
<option value="SAN FRANCISCO TEOPAN">San Francisco Teopan</option>
<option value="SAN FRANCISCO TLAPANCINGO">San Francisco Tlapancingo</option>
<option value="SAN GABRIEL MIXTEPEC">San Gabriel Mixtepec</option>
<option value="SAN ILDEFONSO AMATLAN">San Ildefonso Amatlan</option>
<option value="SAN ILDEFONSO SOLA">San Ildefonso Sola</option>
<option value="SAN ILDEFONSO VILLA ALTA">San Ildefonso Villa Alta</option>
<option value="SAN JACINTO AMILPAS">San Jacinto Amilpas</option>
<option value="SAN JACINTO TLACOTEPEC">San Jacinto Tlacotepec</option>
<option value="SAN JERONIMO COATLAN">San Jeronimo Coatlan</option>
<option value="SAN JERONIMO SILACAYOAPILLA">San Jeronimo Silacayoapilla</option>
<option value="SAN JERONIMO SOSOLA">San Jeronimo Sosola</option>
<option value="SAN JERONIMO TAVICHE">San Jeronimo Taviche</option>
<option value="SAN JERONIMO TECOATL">San Jeronimo Tecoatl</option>
<option value="SAN JERONIMO TLACOCHAHUAYA">San Jeronimo Tlacochahuaya</option>
<option value="SAN JORGE NUCHITA">San Jorge Nuchita</option>
<option value="SAN JOSE AYUQUILA">San Jose Ayuquila</option>
<option value="SAN JOSE CHILTEPEC">San Jose Chiltepec</option>
<option value="SAN JOSE DEL PEÐASCO">San Jose Del Peðasco</option>
<option value="SAN JOSE DEL PROGRESO">San Jose Del Progreso</option>
<option value="SAN JOSE ESTANCIA GRANDE">San Jose Estancia Grande</option>
<option value="SAN JOSE INDEPENDENCIA">San Jose Independencia</option>
<option value="SAN JOSE LACHIGUIRI">San Jose Lachiguiri</option>
<option value="SAN JOSE TENANGO">San Jose Tenango</option>
<option value="SAN JUAN ACHIUTLA">San Juan Achiutla</option>
<option value="SAN JUAN ATEPEC">San Juan Atepec</option>
<option value="SAN JUAN BAUTISTA ATATLAHUCA">San Juan Bautista Atatlahuca</option>
<option value="SAN JUAN BAUTISTA COIXTLAHUACA">San Juan Bautista Coixtlahuaca</option>
<option value="SAN JUAN BAUTISTA CUICATLAN">San Juan Bautista Cuicatlan</option>
<option value="SAN JUAN BAUTISTA GUELACHE">San Juan Bautista Guelache</option>
<option value="SAN JUAN BAUTISTA JAYACATLAN">San Juan Bautista Jayacatlan</option>
<option value="SAN JUAN BAUTISTA LO DE SOTO">San Juan Bautista Lo De Soto</option>
<option value="SAN JUAN BAUTISTA SUCHITEPEC">San Juan Bautista Suchitepec</option>
<option value="SAN JUAN BAUTISTA TLACHICHILCO">San Juan Bautista Tlachichilco</option>
<option value="SAN JUAN BAUTISTA TLACOATZINTEPEC">San Juan Bautista Tlacoatzintepec</option>
<option value="SAN JUAN BAUTISTA TUXTEPEC">San Juan Bautista Tuxtepec</option>
<option value="SAN JUAN BAUTISTA VALLE NACIONAL">San Juan Bautista Valle Nacional</option>
<option value="SAN JUAN CACAHUATEPEC">San Juan Cacahuatepec</option>
<option value="SAN JUAN CHICOMEZUCHIL">San Juan Chicomezuchil</option>
<option value="SAN JUAN CHILATECA">San Juan Chilateca</option>
<option value="SAN JUAN CIENEGUILLA">San Juan Cieneguilla</option>
<option value="SAN JUAN COATZOSPAM">San Juan Coatzospam</option>
<option value="SAN JUAN COLORADO">San Juan Colorado</option>
<option value="SAN JUAN COMALTEPEC">San Juan Comaltepec</option>
<option value="SAN JUAN COTZOCON">San Juan Cotzocon</option>
<option value="SAN JUAN DE LOS CUES">San Juan De Los Cues</option>
<option value="SAN JUAN DEL ESTADO">San Juan Del Estado</option>
<option value="SAN JUAN DEL RIO">San Juan Del Rio</option>
<option value="SAN JUAN DIUXI">San Juan Diuxi</option>
<option value="SAN JUAN EVANGELISTA ANALCO">San Juan Evangelista Analco</option>
<option value="SAN JUAN GUELAVIA">San Juan Guelavia</option>
<option value="SAN JUAN GUICHICOVI">San Juan Guichicovi</option>
<option value="SAN JUAN IHUALTEPEC">San Juan Ihualtepec</option>
<option value="SAN JUAN JUQUILA MIXES">San Juan Juquila Mixes</option>
<option value="SAN JUAN JUQUILA VIJANOS">San Juan Juquila Vijanos</option>
<option value="SAN JUAN LACHAO">San Juan Lachao</option>
<option value="SAN JUAN LACHIGALLA">San Juan Lachigalla</option>
<option value="SAN JUAN LAJARCIA">San Juan Lajarcia</option>
<option value="SAN JUAN LALANA">San Juan Lalana</option>
<option value="SAN JUAN MAZATLAN">San Juan Mazatlan</option>
<option value="SAN JUAN MIXTEPEC">San Juan Mixtepec</option>
<option value="SAN JUAN OZOLOTEPEC">San Juan Ozolotepec</option>
<option value="SAN JUAN PETLAPA">San Juan Petlapa</option>
<option value="SAN JUAN QUIAHIJE">San Juan Quiahije</option>
<option value="SAN JUAN QUIOTEPEC">San Juan Quiotepec</option>
<option value="SAN JUAN SAYULTEPEC">San Juan Sayultepec</option>
<option value="SAN JUAN TABAA">San Juan Tabaa</option>
<option value="SAN JUAN TAMAZOLA">San Juan Tamazola</option>
<option value="SAN JUAN TEITA">San Juan Teita</option>
<option value="SAN JUAN TEITIPAC">San Juan Teitipac</option>
<option value="SAN JUAN TEPEUXILA">San Juan Tepeuxila</option>
<option value="SAN JUAN TEPOSCOLULA">San Juan Teposcolula</option>
<option value="SAN JUAN YAEE">San Juan Yaee</option>
<option value="SAN JUAN YATZONA">San Juan Yatzona</option>
<option value="SAN JUAN YUCUITA">San Juan Yucuita</option>
<option value="SAN JUAN ÐUMI">San Juan Ðumi</option>
<option value="SAN LORENZO ALBARRADAS">San Lorenzo Albarradas</option>
<option value="SAN LORENZO CACAOTEPEC">San Lorenzo Cacaotepec</option>
<option value="SAN LORENZO CUAUNECUILTITLA">San Lorenzo Cuaunecuiltitla</option>
<option value="SAN LORENZO TEXMELUCAN">San Lorenzo Texmelucan</option>
<option value="SAN LORENZO VICTORIA">San Lorenzo Victoria</option>
<option value="SAN LORENZO">San Lorenzo</option>
<option value="SAN LUCAS CAMOTLAN">San Lucas Camotlan</option>
<option value="SAN LUCAS OJITLAN">San Lucas Ojitlan</option>
<option value="SAN LUCAS QUIAVINI">San Lucas Quiavini</option>
<option value="SAN LUCAS ZOQUIAPAM">San Lucas Zoquiapam</option>
<option value="SAN LUIS AMATLAN">San Luis Amatlan</option>
<option value="SAN MARCIAL OZOLOTEPEC">San Marcial Ozolotepec</option>
<option value="SAN MARCOS ARTEAGA">San Marcos Arteaga</option>
<option value="SAN MARTIN DE LOS CANSECOS">San Martin De Los Cansecos</option>
<option value="SAN MARTIN HUAMELULPAM">San Martin Huamelulpam</option>
<option value="SAN MARTIN ITUNYOSO">San Martin Itunyoso</option>
<option value="SAN MARTIN LACHILA">San Martin Lachila</option>
<option value="SAN MARTIN PERAS">San Martin Peras</option>
<option value="SAN MARTIN TILCAJETE">San Martin Tilcajete</option>
<option value="SAN MARTIN TOXPALAN">San Martin Toxpalan</option>
<option value="SAN MARTIN ZACATEPEC">San Martin Zacatepec</option>
<option value="SAN MATEO CAJONOS">San Mateo Cajonos</option>
<option value="SAN MATEO DEL MAR">San Mateo Del Mar</option>
<option value="SAN MATEO ETLATONGO">San Mateo Etlatongo</option>
<option value="SAN MATEO NEJAPAM">San Mateo Nejapam</option>
<option value="SAN MATEO PEÐASCO">San Mateo Peðasco</option>
<option value="SAN MATEO PIÐAS">San Mateo Piðas</option>
<option value="SAN MATEO RIO HONDO">San Mateo Rio Hondo</option>
<option value="SAN MATEO SINDIHUI">San Mateo Sindihui</option>
<option value="SAN MATEO TLAPILTEPEC">San Mateo Tlapiltepec</option>
<option value="SAN MATEO YOLOXOCHITLAN">San Mateo Yoloxochitlan</option>
<option value="SAN MATEO YUCUTINDOO">San Mateo Yucutindoo</option>
<option value="SAN MELCHOR BETAZA">San Melchor Betaza</option>
<option value="SAN MIGUEL ACHIUTLA">San Miguel Achiutla</option>
<option value="SAN MIGUEL AHUEHUETITLAN">San Miguel Ahuehuetitlan</option>
<option value="SAN MIGUEL ALOAPAM">San Miguel Aloapam</option>
<option value="SAN MIGUEL AMATITLAN">San Miguel Amatitlan</option>
<option value="SAN MIGUEL AMATLAN">San Miguel Amatlan</option>
<option value="SAN MIGUEL CHICAHUA">San Miguel Chicahua</option>
<option value="SAN MIGUEL CHIMALAPA">San Miguel Chimalapa</option>
<option value="SAN MIGUEL COATLAN">San Miguel Coatlan</option>
<option value="SAN MIGUEL DEL PUERTO">San Miguel Del Puerto</option>
<option value="SAN MIGUEL DEL RIO">San Miguel Del Rio</option>
<option value="SAN MIGUEL EJUTLA">San Miguel Ejutla</option>
<option value="SAN MIGUEL EL GRANDE">San Miguel El Grande</option>
<option value="SAN MIGUEL HUAUTLA">San Miguel Huautla</option>
<option value="SAN MIGUEL MIXTEPEC">San Miguel Mixtepec</option>
<option value="SAN MIGUEL PANIXTLAHUACA">San Miguel Panixtlahuaca</option>
<option value="SAN MIGUEL PERAS">San Miguel Peras</option>
<option value="SAN MIGUEL PIEDRAS">San Miguel Piedras</option>
<option value="SAN MIGUEL QUETZALTEPEC">San Miguel Quetzaltepec</option>
<option value="SAN MIGUEL SANTA FLOR">San Miguel Santa Flor</option>
<option value="SAN MIGUEL SOYALTEPEC">San Miguel Soyaltepec</option>
<option value="SAN MIGUEL SUCHIXTEPEC">San Miguel Suchixtepec</option>
<option value="SAN MIGUEL TECOMATLAN">San Miguel Tecomatlan</option>
<option value="SAN MIGUEL TENANGO">San Miguel Tenango</option>
<option value="SAN MIGUEL TEQUIXTEPEC">San Miguel Tequixtepec</option>
<option value="SAN MIGUEL TILQUIAPAM">San Miguel Tilquiapam</option>
<option value="SAN MIGUEL TLACAMAMA">San Miguel Tlacamama</option>
<option value="SAN MIGUEL TLACOTEPEC">San Miguel Tlacotepec</option>
<option value="SAN MIGUEL TULANCINGO">San Miguel Tulancingo</option>
<option value="SAN MIGUEL YOTAO">San Miguel Yotao</option>
<option value="SAN NICOLAS HIDALGO">San Nicolas Hidalgo</option>
<option value="SAN NICOLAS">San Nicolas</option>
<option value="SAN PABLO COATLAN">San Pablo Coatlan</option>
<option value="SAN PABLO CUATRO VENADOS">San Pablo Cuatro Venados</option>
<option value="SAN PABLO ETLA">San Pablo Etla</option>
<option value="SAN PABLO HUITZO">San Pablo Huitzo</option>
<option value="SAN PABLO HUIXTEPEC">San Pablo Huixtepec</option>
<option value="SAN PABLO MACUILTIANGUIS">San Pablo Macuiltianguis</option>
<option value="SAN PABLO TIJALTEPEC">San Pablo Tijaltepec</option>
<option value="SAN PABLO VILLA DE MITLA">San Pablo Villa De Mitla</option>
<option value="SAN PABLO YAGANIZA">San Pablo Yaganiza</option>
<option value="SAN PEDRO AMUZGOS">San Pedro Amuzgos</option>
<option value="SAN PEDRO APOSTOL">San Pedro Apostol</option>
<option value="SAN PEDRO ATOYAC">San Pedro Atoyac</option>
<option value="SAN PEDRO CAJONOS">San Pedro Cajonos</option>
<option value="SAN PEDRO COMITANCILLO">San Pedro Comitancillo</option>
<option value="SAN PEDRO COXCALTEPEC CANTAROS">San Pedro Coxcaltepec Cantaros</option>
<option value="SAN PEDRO EL ALTO">San Pedro El Alto</option>
<option value="SAN PEDRO HUAMELULA">San Pedro Huamelula</option>
<option value="SAN PEDRO HUILOTEPEC">San Pedro Huilotepec</option>
<option value="SAN PEDRO IXCATLAN">San Pedro Ixcatlan</option>
<option value="SAN PEDRO IXTLAHUACA">San Pedro Ixtlahuaca</option>
<option value="SAN PEDRO JALTEPETONGO">San Pedro Jaltepetongo</option>
<option value="SAN PEDRO JICAYAN">San Pedro Jicayan</option>
<option value="SAN PEDRO JOCOTIPAC">San Pedro Jocotipac</option>
<option value="SAN PEDRO JUCHATENGO">San Pedro Juchatengo</option>
<option value="SAN PEDRO MARTIR QUIECHAPA">San Pedro Martir Quiechapa</option>
<option value="SAN PEDRO MARTIR YUCUXACO">San Pedro Martir Yucuxaco</option>
<option value="SAN PEDRO MARTIR">San Pedro Martir</option>
<option value="SAN PEDRO MIXTEPEC">San Pedro Mixtepec</option>
<option value="SAN PEDRO MOLINOS">San Pedro Molinos</option>
<option value="SAN PEDRO NOPALA">San Pedro Nopala</option>
<option value="SAN PEDRO OCOPETATILLO">San Pedro Ocopetatillo</option>
<option value="SAN PEDRO OCOTEPEC">San Pedro Ocotepec</option>
<option value="SAN PEDRO POCHUTLA">San Pedro Pochutla</option>
<option value="SAN PEDRO QUIATONI">San Pedro Quiatoni</option>
<option value="SAN PEDRO SOCHIAPAM">San Pedro Sochiapam</option>
<option value="SAN PEDRO TAPANATEPEC">San Pedro Tapanatepec</option>
<option value="SAN PEDRO TAVICHE">San Pedro Taviche</option>
<option value="SAN PEDRO TEOZACOALCO">San Pedro Teozacoalco</option>
<option value="SAN PEDRO TEUTILA">San Pedro Teutila</option>
<option value="SAN PEDRO TIDAA">San Pedro Tidaa</option>
<option value="SAN PEDRO TOPILTEPEC">San Pedro Topiltepec</option>
<option value="SAN PEDRO TOTOLAPAM">San Pedro Totolapam</option>
<option value="SAN PEDRO Y SAN PABLO AYUTLA">San Pedro Y San Pablo Ayutla</option>
<option value="SAN PEDRO Y SAN PABLO TEPOSCOLULA">San Pedro Y San Pablo Teposcolula</option>
<option value="SAN PEDRO Y SAN PABLO TEQUIXTEPEC">San Pedro Y San Pablo Tequixtepec</option>
<option value="SAN PEDRO YANERI">San Pedro Yaneri</option>
<option value="SAN PEDRO YOLOX">San Pedro Yolox</option>
<option value="SAN PEDRO YUCUNAMA">San Pedro Yucunama</option>
<option value="SAN RAYMUNDO JALPAN">San Raymundo Jalpan</option>
<option value="SAN SEBASTIAN ABASOLO">San Sebastian Abasolo</option>
<option value="SAN SEBASTIAN COATLAN">San Sebastian Coatlan</option>
<option value="SAN SEBASTIAN IXCAPA">San Sebastian Ixcapa</option>
<option value="SAN SEBASTIAN NICANANDUTA">San Sebastian Nicananduta</option>
<option value="SAN SEBASTIAN RIO HONDO">San Sebastian Rio Hondo</option>
<option value="SAN SEBASTIAN TECOMAXTLAHUACA">San Sebastian Tecomaxtlahuaca</option>
<option value="SAN SEBASTIAN TEITIPAC">San Sebastian Teitipac</option>
<option value="SAN SEBASTIAN TUTLA">San Sebastian Tutla</option>
<option value="SAN SIMON ALMOLONGAS">San Simon Almolongas</option>
<option value="SAN SIMON ZAHUATLAN">San Simon Zahuatlan</option>
<option value="SAN VICENTE COATLAN">San Vicente Coatlan</option>
<option value="SAN VICENTE LACHIXIO">San Vicente Lachixio</option>
<option value="SAN VICENTE NUÐU">San Vicente Nuðu</option>
<option value="SANTA ANA ATEIXTLAHUACA">Santa Ana Ateixtlahuaca</option>
<option value="SANTA ANA CUAUHTEMOC">Santa Ana Cuauhtemoc</option>
<option value="SANTA ANA DEL VALLE">Santa Ana Del Valle</option>
<option value="SANTA ANA TAVELA">Santa Ana Tavela</option>
<option value="SANTA ANA TLAPACOYAN">Santa Ana Tlapacoyan</option>
<option value="SANTA ANA YARENI">Santa Ana Yareni</option>
<option value="SANTA ANA ZEGACHE">Santa Ana Zegache</option>
<option value="SANTA ANA">Santa Ana</option>
<option value="SANTA CATALINA QUIERI">Santa Catalina Quieri</option>
<option value="SANTA CATARINA CUIXTLA">Santa Catarina Cuixtla</option>
<option value="SANTA CATARINA IXTEPEJI">Santa Catarina Ixtepeji</option>
<option value="SANTA CATARINA JUQUILA">Santa Catarina Juquila</option>
<option value="SANTA CATARINA LACHATAO">Santa Catarina Lachatao</option>
<option value="SANTA CATARINA LOXICHA">Santa Catarina Loxicha</option>
<option value="SANTA CATARINA MECHOACAN">Santa Catarina Mechoacan</option>
<option value="SANTA CATARINA MINAS">Santa Catarina Minas</option>
<option value="SANTA CATARINA QUIANE">Santa Catarina Quiane</option>
<option value="SANTA CATARINA QUIOQUITANI">Santa Catarina Quioquitani</option>
<option value="SANTA CATARINA TAYATA">Santa Catarina Tayata</option>
<option value="SANTA CATARINA TICUA">Santa Catarina Ticua</option>
<option value="SANTA CATARINA YOSONOTU">Santa Catarina Yosonotu</option>
<option value="SANTA CATARINA ZAPOQUILA">Santa Catarina Zapoquila</option>
<option value="SANTA CRUZ ACATEPEC">Santa Cruz Acatepec</option>
<option value="SANTA CRUZ AMILPAS">Santa Cruz Amilpas</option>
<option value="SANTA CRUZ DE BRAVO">Santa Cruz De Bravo</option>
<option value="SANTA CRUZ ITUNDUJIA">Santa Cruz Itundujia</option>
<option value="SANTA CRUZ MIXTEPEC">Santa Cruz Mixtepec</option>
<option value="SANTA CRUZ NUNDACO">Santa Cruz Nundaco</option>
<option value="SANTA CRUZ PAPALUTLA">Santa Cruz Papalutla</option>
<option value="SANTA CRUZ TACACHE DE MINA">Santa Cruz Tacache De Mina</option>
<option value="SANTA CRUZ TACAHUA">Santa Cruz Tacahua</option>
<option value="SANTA CRUZ TAYATA">Santa Cruz Tayata</option>
<option value="SANTA CRUZ XITLA">Santa Cruz Xitla</option>
<option value="SANTA CRUZ XOXOCOTLAN">Santa Cruz Xoxocotlan</option>
<option value="SANTA CRUZ ZENZONTEPEC">Santa Cruz Zenzontepec</option>
<option value="SANTA GERTRUDIS">Santa Gertrudis</option>
<option value="SANTA INES DE ZARAGOZA">Santa Ines De Zaragoza</option>
<option value="SANTA INES DEL MONTE">Santa Ines Del Monte</option>
<option value="SANTA INES YATZECHE">Santa Ines Yatzeche</option>
<option value="SANTA LUCIA DEL CAMINO">Santa Lucia Del Camino</option>
<option value="SANTA LUCIA MIAHUATLAN">Santa Lucia Miahuatlan</option>
<option value="SANTA LUCIA MONTEVERDE">Santa Lucia Monteverde</option>
<option value="SANTA LUCIA OCOTLAN">Santa Lucia Ocotlan</option>
<option value="SANTA MAGDALENA JICOTLAN">Santa Magdalena Jicotlan</option>
<option value="SANTA MARIA ALOTEPEC">Santa Maria Alotepec</option>
<option value="SANTA MARIA APAZCO">Santa Maria Apazco</option>
<option value="SANTA MARIA ATZOMPA">Santa Maria Atzompa</option>
<option value="SANTA MARIA CAMOTLAN">Santa Maria Camotlan</option>
<option value="SANTA MARIA CHACHOAPAM">Santa Maria Chachoapam</option>
<option value="SANTA MARIA CHILCHOTLA">Santa Maria Chilchotla</option>
<option value="SANTA MARIA CHIMALAPA">Santa Maria Chimalapa</option>
<option value="SANTA MARIA COLOTEPEC">Santa Maria Colotepec</option>
<option value="SANTA MARIA CORTIJO">Santa Maria Cortijo</option>
<option value="SANTA MARIA COYOTEPEC">Santa Maria Coyotepec</option>
<option value="SANTA MARIA DEL ROSARIO">Santa Maria Del Rosario</option>
<option value="SANTA MARIA DEL TULE">Santa Maria Del Tule</option>
<option value="SANTA MARIA ECATEPEC">Santa Maria Ecatepec</option>
<option value="SANTA MARIA GUELACE">Santa Maria Guelace</option>
<option value="SANTA MARIA GUIENAGATI">Santa Maria Guienagati</option>
<option value="SANTA MARIA HUATULCO">Santa Maria Huatulco</option>
<option value="SANTA MARIA HUAZOLOTITLAN">Santa Maria Huazolotitlan</option>
<option value="SANTA MARIA IPALAPA">Santa Maria Ipalapa</option>
<option value="SANTA MARIA IXCATLAN">Santa Maria Ixcatlan</option>
<option value="SANTA MARIA JACATEPEC">Santa Maria Jacatepec</option>
<option value="SANTA MARIA JALAPA DEL MARQUES">Santa Maria Jalapa Del Marques</option>
<option value="SANTA MARIA JALTIANGUIS">Santa Maria Jaltianguis</option>
<option value="SANTA MARIA LA ASUNCION">Santa Maria La Asuncion</option>
<option value="SANTA MARIA LACHIXIO">Santa Maria Lachixio</option>
<option value="SANTA MARIA MIXTEQUILLA">Santa Maria Mixtequilla</option>
<option value="SANTA MARIA NATIVITAS">Santa Maria Nativitas</option>
<option value="SANTA MARIA NDUAYACO">Santa Maria Nduayaco</option>
<option value="SANTA MARIA OZOLOTEPEC">Santa Maria Ozolotepec</option>
<option value="SANTA MARIA PAPALO">Santa Maria Papalo</option>
<option value="SANTA MARIA PETAPA">Santa Maria Petapa</option>
<option value="SANTA MARIA PEÐOLES">Santa Maria Peðoles</option>
<option value="SANTA MARIA QUIEGOLANI">Santa Maria Quiegolani</option>
<option value="SANTA MARIA SOLA">Santa Maria Sola</option>
<option value="SANTA MARIA TATALTEPEC">Santa Maria Tataltepec</option>
<option value="SANTA MARIA TECOMAVACA">Santa Maria Tecomavaca</option>
<option value="SANTA MARIA TEMAXCALAPA">Santa Maria Temaxcalapa</option>
<option value="SANTA MARIA TEMAXCALTEPEC">Santa Maria Temaxcaltepec</option>
<option value="SANTA MARIA TEOPOXCO">Santa Maria Teopoxco</option>
<option value="SANTA MARIA TEPANTLALI">Santa Maria Tepantlali</option>
<option value="SANTA MARIA TEXCATITLAN">Santa Maria Texcatitlan</option>
<option value="SANTA MARIA TLAHUITOLTEPEC">Santa Maria Tlahuitoltepec</option>
<option value="SANTA MARIA TLALIXTAC">Santa Maria Tlalixtac</option>
<option value="SANTA MARIA TONAMECA">Santa Maria Tonameca</option>
<option value="SANTA MARIA TOTOLAPILLA">Santa Maria Totolapilla</option>
<option value="SANTA MARIA XADANI">Santa Maria Xadani</option>
<option value="SANTA MARIA YALINA">Santa Maria Yalina</option>
<option value="SANTA MARIA YAVESIA">Santa Maria Yavesia</option>
<option value="SANTA MARIA YOLOTEPEC">Santa Maria Yolotepec</option>
<option value="SANTA MARIA YOSOYUA">Santa Maria Yosoyua</option>
<option value="SANTA MARIA YUCUHITI">Santa Maria Yucuhiti</option>
<option value="SANTA MARIA ZACATEPEC">Santa Maria Zacatepec</option>
<option value="SANTA MARIA ZANIZA">Santa Maria Zaniza</option>
<option value="SANTA MARIA ZOQUITLAN">Santa Maria Zoquitlan</option>
<option value="SANTIAGO AMOLTEPEC">Santiago Amoltepec</option>
<option value="SANTIAGO APOALA">Santiago Apoala</option>
<option value="SANTIAGO APOSTOL">Santiago Apostol</option>
<option value="SANTIAGO ASTATA">Santiago Astata</option>
<option value="SANTIAGO ATITLAN">Santiago Atitlan</option>
<option value="SANTIAGO AYUQUILILLA">Santiago Ayuquililla</option>
<option value="SANTIAGO CACALOXTEPEC">Santiago Cacaloxtepec</option>
<option value="SANTIAGO CAMOTLAN">Santiago Camotlan</option>
<option value="SANTIAGO CHAZUMBA">Santiago Chazumba</option>
<option value="SANTIAGO CHOAPAM">Santiago Choapam</option>
<option value="SANTIAGO COMALTEPEC">Santiago Comaltepec</option>
<option value="SANTIAGO DEL RIO">Santiago Del Rio</option>
<option value="SANTIAGO HUAJOLOTITLAN">Santiago Huajolotitlan</option>
<option value="SANTIAGO HUAUCLILLA">Santiago Huauclilla</option>
<option value="SANTIAGO IHUITLAN PLUMAS">Santiago Ihuitlan Plumas</option>
<option value="SANTIAGO IXCUINTEPEC">Santiago Ixcuintepec</option>
<option value="SANTIAGO IXTAYUTLA">Santiago Ixtayutla</option>
<option value="SANTIAGO JAMILTEPEC">Santiago Jamiltepec</option>
<option value="SANTIAGO JOCOTEPEC">Santiago Jocotepec</option>
<option value="SANTIAGO JUXTLAHUACA">Santiago Juxtlahuaca</option>
<option value="SANTIAGO LACHIGUIRI">Santiago Lachiguiri</option>
<option value="SANTIAGO LALOPA">Santiago Lalopa</option>
<option value="SANTIAGO LAOLLAGA">Santiago Laollaga</option>
<option value="SANTIAGO LAXOPA">Santiago Laxopa</option>
<option value="SANTIAGO LLANO GRANDE">Santiago Llano Grande</option>
<option value="SANTIAGO MATATLAN">Santiago Matatlan</option>
<option value="SANTIAGO MILTEPEC">Santiago Miltepec</option>
<option value="SANTIAGO MINAS">Santiago Minas</option>
<option value="SANTIAGO NACALTEPEC">Santiago Nacaltepec</option>
<option value="SANTIAGO NEJAPILLA">Santiago Nejapilla</option>
<option value="SANTIAGO NILTEPEC">Santiago Niltepec</option>
<option value="SANTIAGO NUNDICHE">Santiago Nundiche</option>
<option value="SANTIAGO NUYOO">Santiago Nuyoo</option>
<option value="SANTIAGO PINOTEPA NACIONAL">Santiago Pinotepa Nacional</option>
<option value="SANTIAGO SUCHILQUITONGO">Santiago Suchilquitongo</option>
<option value="SANTIAGO TAMAZOLA">Santiago Tamazola</option>
<option value="SANTIAGO TAPEXTLA">Santiago Tapextla</option>
<option value="SANTIAGO TENANGO">Santiago Tenango</option>
<option value="SANTIAGO TEPETLAPA">Santiago Tepetlapa</option>
<option value="SANTIAGO TETEPEC">Santiago Tetepec</option>
<option value="SANTIAGO TEXCALCINGO">Santiago Texcalcingo</option>
<option value="SANTIAGO TEXTITLAN">Santiago Textitlan</option>
<option value="SANTIAGO TILANTONGO">Santiago Tilantongo</option>
<option value="SANTIAGO TILLO">Santiago Tillo</option>
<option value="SANTIAGO TLAZOYALTEPEC">Santiago Tlazoyaltepec</option>
<option value="SANTIAGO XANICA">Santiago Xanica</option>
<option value="SANTIAGO XIACUI">Santiago Xiacui</option>
<option value="SANTIAGO YAITEPEC">Santiago Yaitepec</option>
<option value="SANTIAGO YAVEO">Santiago Yaveo</option>
<option value="SANTIAGO YOLOMECATL">Santiago Yolomecatl</option>
<option value="SANTIAGO YOSONDUA">Santiago Yosondua</option>
<option value="SANTIAGO YUCUYACHI">Santiago Yucuyachi</option>
<option value="SANTIAGO ZACATEPEC">Santiago Zacatepec</option>
<option value="SANTIAGO ZOOCHILA">Santiago Zoochila</option>
<option value="SANTO DOMINGO ALBARRADAS">Santo Domingo Albarradas</option>
<option value="SANTO DOMINGO ARMENTA">Santo Domingo Armenta</option>
<option value="SANTO DOMINGO CHIHUITAN">Santo Domingo Chihuitan</option>
<option value="SANTO DOMINGO DE MORELOS">Santo Domingo De Morelos</option>
<option value="SANTO DOMINGO INGENIO">Santo Domingo Ingenio</option>
<option value="SANTO DOMINGO IXCATLAN">Santo Domingo Ixcatlan</option>
<option value="SANTO DOMINGO NUXAA">Santo Domingo Nuxaa</option>
<option value="SANTO DOMINGO OZOLOTEPEC">Santo Domingo Ozolotepec</option>
<option value="SANTO DOMINGO PETAPA">Santo Domingo Petapa</option>
<option value="SANTO DOMINGO ROAYAGA">Santo Domingo Roayaga</option>
<option value="SANTO DOMINGO TEHUANTEPEC">Santo Domingo Tehuantepec</option>
<option value="SANTO DOMINGO TEOJOMULCO">Santo Domingo Teojomulco</option>
<option value="SANTO DOMINGO TEPUXTEPEC">Santo Domingo Tepuxtepec</option>
<option value="SANTO DOMINGO TLATAYAPAM">Santo Domingo Tlatayapam</option>
<option value="SANTO DOMINGO TOMALTEPEC">Santo Domingo Tomaltepec</option>
<option value="SANTO DOMINGO TONALA">Santo Domingo Tonala</option>
<option value="SANTO DOMINGO TONALTEPEC">Santo Domingo Tonaltepec</option>
<option value="SANTO DOMINGO XAGACIA">Santo Domingo Xagacia</option>
<option value="SANTO DOMINGO YANHUITLAN">Santo Domingo Yanhuitlan</option>
<option value="SANTO DOMINGO YODOHINO">Santo Domingo Yodohino</option>
<option value="SANTO DOMINGO ZANATEPEC">Santo Domingo Zanatepec</option>
<option value="SANTO TOMAS JALIEZA">Santo Tomas Jalieza</option>
<option value="SANTO TOMAS MAZALTEPEC">Santo Tomas Mazaltepec</option>
<option value="SANTO TOMAS OCOTEPEC">Santo Tomas Ocotepec</option>
<option value="SANTO TOMAS TAMAZULAPAN">Santo Tomas Tamazulapan</option>
<option value="SANTOS REYES NOPALA">Santos Reyes Nopala</option>
<option value="SANTOS REYES PAPALO">Santos Reyes Papalo</option>
<option value="SANTOS REYES TEPEJILLO">Santos Reyes Tepejillo</option>
<option value="SANTOS REYES YUCUNA">Santos Reyes Yucuna</option>
<option value="SILACAYOAPAM">Silacayoapam</option>
<option value="SITIO DE XITLAPEHUA">Sitio De Xitlapehua</option>
<option value="SOLEDAD ETLA">Soledad Etla</option>
<option value="TAMAZULAPAM DEL ESPIRITU SANTO">Tamazulapam Del Espiritu Santo</option>
<option value="TANETZE DE ZARAGOZA">Tanetze De Zaragoza</option>
<option value="TANICHE">Taniche</option>
<option value="TATALTEPEC DE VALDES">Tataltepec De Valdes</option>
<option value="TEOCOCUILCO DE MARCOS PEREZ">Teococuilco De Marcos Perez</option>
<option value="TEOTITLAN DE FLORES MAGON">Teotitlan De Flores Magon</option>
<option value="TEOTITLAN DEL VALLE">Teotitlan Del Valle</option>
<option value="TEOTONGO">Teotongo</option>
<option value="TEPELMEME VILLA DE MORELOS">Tepelmeme Villa De Morelos</option>
<option value="TLACOLULA DE MATAMOROS">Tlacolula De Matamoros</option>
<option value="TLACOTEPEC PLUMAS">Tlacotepec Plumas</option>
<option value="TLALIXTAC DE CABRERA">Tlalixtac De Cabrera</option>
<option value="TOTONTEPEC VILLA DE MORELOS">Totontepec Villa De Morelos</option>
<option value="TRINIDAD ZAACHILA">Trinidad Zaachila</option>
<option value="UNION HIDALGO">Union Hidalgo</option>
<option value="VALERIO TRUJANO">Valerio Trujano</option>
<option value="VILLA DE CHILAPA DE DIAZ">Villa De Chilapa De Diaz</option>
<option value="VILLA DE ETLA">Villa De Etla</option>
<option value="VILLA DE TAMAZULAPAM DEL PROGRESO">Villa De Tamazulapam Del Progreso</option>
<option value="VILLA DE TUTUTEPEC">Villa De Tututepec</option>
<option value="VILLA DE ZAACHILA">Villa De Zaachila</option>
<option value="VILLA DIAZ ORDAZ">Villa Diaz Ordaz</option>
<option value="VILLA HIDALGO">Villa Hidalgo</option>
<option value="VILLA SOLA DE VEGA">Villa Sola De Vega</option>
<option value="VILLA TALEA DE CASTRO">Villa Talea De Castro</option>
<option value="VILLA TEJUPAM DE LA UNION">Villa Tejupam De La Union</option>
<option value="YAXE">Yaxe</option>
<option value="YOGANA">Yogana</option>
<option value="YUTANDUCHI DE GUERRERO">Yutanduchi De Guerrero</option>
<option value="ZAPOTITLAN LAGUNAS">Zapotitlan Lagunas</option>
<option value="ZAPOTITLAN PALMAS">Zapotitlan Palmas</option>
<option value="ZIMATLAN DE ALVAREZ">Zimatlan De Alvarez</option>
      </select>

      <select name="puebla" id="puebla-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ACAJETE">Acajete</option>
<option value="ACATENO">Acateno</option>
<option value="ACATLAN">Acatlan</option>
<option value="ACATZINGO">Acatzingo</option>
<option value="ACTEOPAN">Acteopan</option>
<option value="AHUACATLAN">Ahuacatlan</option>
<option value="AHUATLAN">Ahuatlan</option>
<option value="AHUAZOTEPEC">Ahuazotepec</option>
<option value="AHUEHUETITLA">Ahuehuetitla</option>
<option value="AJALPAN">Ajalpan</option>
<option value="ALBINO ZERTUCHE">Albino Zertuche</option>
<option value="ALJOJUCA">Aljojuca</option>
<option value="ALTEPEXI">Altepexi</option>
<option value="AMIXTLAN">Amixtlan</option>
<option value="AMOZOC">Amozoc</option>
<option value="AQUIXTLA">Aquixtla</option>
<option value="ATEMPAN">Atempan</option>
<option value="ATEXCAL">Atexcal</option>
<option value="ATLEQUIZAYAN">Atlequizayan</option>
<option value="ATLIXCO">Atlixco</option>
<option value="ATOYATEMPAN">Atoyatempan</option>
<option value="ATZALA">Atzala</option>
<option value="ATZITZIHUACAN">Atzitzihuacan</option>
<option value="ATZITZINTLA">Atzitzintla</option>
<option value="AXUTLA">Axutla</option>
<option value="AYOTOXCO DE GUERRERO">Ayotoxco De Guerrero</option>
<option value="CALPAN">Calpan</option>
<option value="CALTEPEC">Caltepec</option>
<option value="CAMOCUAUTLA">Camocuautla</option>
<option value="CAXHUACAN">Caxhuacan</option>
<option value="CAÐADA MORELOS">Caðada Morelos</option>
<option value="CHALCHICOMULA DE SESMA">Chalchicomula De Sesma</option>
<option value="CHAPULCO">Chapulco</option>
<option value="CHIAUTLA">Chiautla</option>
<option value="CHIAUTZINGO">Chiautzingo</option>
<option value="CHICHIQUILA">Chichiquila</option>
<option value="CHICONCUAUTLA">Chiconcuautla</option>
<option value="CHIETLA">Chietla</option>
<option value="CHIGMECATITLAN">Chigmecatitlan</option>
<option value="CHIGNAHUAPAN">Chignahuapan</option>
<option value="CHIGNAUTLA">Chignautla</option>
<option value="CHILA DE LA SAL">Chila De La Sal</option>
<option value="CHILA">Chila</option>
<option value="CHILCHOTLA">Chilchotla</option>
<option value="CHINANTLA">Chinantla</option>
<option value="COATEPEC">Coatepec</option>
<option value="COATZINGO">Coatzingo</option>
<option value="COHETZALA">Cohetzala</option>
<option value="COHUECAN">Cohuecan</option>
<option value="CORONANGO">Coronango</option>
<option value="COXCATLAN">Coxcatlan</option>
<option value="COYOMEAPAN">Coyomeapan</option>
<option value="COYOTEPEC">Coyotepec</option>
<option value="CUAPIAXTLA DE MADERO">Cuapiaxtla De Madero</option>
<option value="CUAUTEMPAN">Cuautempan</option>
<option value="CUAUTINCHAN">Cuautinchan</option>
<option value="CUAUTLANCINGO">Cuautlancingo</option>
<option value="CUAYUCA DE ANDRADE">Cuayuca De Andrade</option>
<option value="CUETZALAN DEL PROGRESO">Cuetzalan Del Progreso</option>
<option value="CUYOACO">Cuyoaco</option>
<option value="DOMINGO ARENAS">Domingo Arenas</option>
<option value="ELOXOCHITLAN">Eloxochitlan</option>
<option value="EPATLAN">Epatlan</option>
<option value="ESPERANZA">Esperanza</option>
<option value="FRANCISCO Z. MENA">Francisco Z. Mena</option>
<option value="GENERAL FELIPE ANGELES">General Felipe Angeles</option>
<option value="GUADALUPE VICTORIA">Guadalupe Victoria</option>
<option value="GUADALUPE">Guadalupe</option>
<option value="HERMENEGILDO GALEANA">Hermenegildo Galeana</option>
<option value="HONEY">Honey</option>
<option value="HUAQUECHULA">Huaquechula</option>
<option value="HUATLATLAUCA">Huatlatlauca</option>
<option value="HUAUCHINANGO">Huauchinango</option>
<option value="HUEHUETLA">Huehuetla</option>
<option value="HUEHUETLAN EL CHICO">Huehuetlan El Chico</option>
<option value="HUEHUETLAN EL GRANDE">Huehuetlan El Grande</option>
<option value="HUEJOTZINGO">Huejotzingo</option>
<option value="HUEYAPAN">Hueyapan</option>
<option value="HUEYTAMALCO">Hueytamalco</option>
<option value="HUEYTLALPAN">Hueytlalpan</option>
<option value="HUITZILAN DE SERDAN">Huitzilan De Serdan</option>
<option value="HUITZILTEPEC">Huitziltepec</option>
<option value="IXCAMILPA DE GUERRERO">Ixcamilpa De Guerrero</option>
<option value="IXCAQUIXTLA">Ixcaquixtla</option>
<option value="IXTACAMAXTITLAN">Ixtacamaxtitlan</option>
<option value="IXTEPEC">Ixtepec</option>
<option value="IZUCAR DE MATAMOROS">Izucar De Matamoros</option>
<option value="JALPAN">Jalpan</option>
<option value="JOLALPAN">Jolalpan</option>
<option value="JONOTLA">Jonotla</option>
<option value="JOPALA">Jopala</option>
<option value="JUAN C. BONILLA">Juan C. Bonilla</option>
<option value="JUAN GALINDO">Juan Galindo</option>
<option value="JUAN N. MENDEZ">Juan N. Mendez</option>
<option value="LA MAGDALENA TLATLAUQUITEPEC">La Magdalena Tlatlauquitepec</option>
<option value="LAFRAGUA">Lafragua</option>
<option value="LIBRES">Libres</option>
<option value="LOS REYES DE JUAREZ">Los Reyes De Juarez</option>
<option value="MAZAPILTEPEC DE JUAREZ">Mazapiltepec De Juarez</option>
<option value="MIXTLA">Mixtla</option>
<option value="MOLCAXAC">Molcaxac</option>
<option value="NAUPAN">Naupan</option>
<option value="NAUZONTLA">Nauzontla</option>
<option value="NEALTICAN">Nealtican</option>
<option value="NICOLAS BRAVO">Nicolas Bravo</option>
<option value="NOPALUCAN">Nopalucan</option>
<option value="OCOTEPEC">Ocotepec</option>
<option value="OCOYUCAN">Ocoyucan</option>
<option value="OLINTLA">Olintla</option>
<option value="ORIENTAL">Oriental</option>
<option value="PAHUATLAN">Pahuatlan</option>
<option value="PALMAR DE BRAVO">Palmar De Bravo</option>
<option value="PANTEPEC">Pantepec</option>
<option value="PETLALCINGO">Petlalcingo</option>
<option value="PIAXTLA">Piaxtla</option>
<option value="PUEBLA">Puebla</option>
<option value="QUECHOLAC">Quecholac</option>
<option value="QUIMIXTLAN">Quimixtlan</option>
<option value="RAFAEL LARA GRAJALES">Rafael Lara Grajales</option>
<option value="SAN ANDRES CHOLULA">San Andres Cholula</option>
<option value="SAN ANTONIO CAÐADA">San Antonio Caðada</option>
<option value="SAN DIEGO LA MESA TOCHIMILTZINGO">San Diego La Mesa Tochimiltzingo</option>
<option value="SAN FELIPE TEOTLALCINGO">San Felipe Teotlalcingo</option>
<option value="SAN FELIPE TEPATLAN">San Felipe Tepatlan</option>
<option value="SAN GABRIEL CHILAC">San Gabriel Chilac</option>
<option value="SAN GREGORIO ATZOMPA">San Gregorio Atzompa</option>
<option value="SAN JERONIMO TECUANIPAN">San Jeronimo Tecuanipan</option>
<option value="SAN JERONIMO XAYACATLAN">San Jeronimo Xayacatlan</option>
<option value="SAN JOSE CHIAPA">San Jose Chiapa</option>
<option value="SAN JOSE MIAHUATLAN">San Jose Miahuatlan</option>
<option value="SAN JUAN ATENCO">San Juan Atenco</option>
<option value="SAN JUAN ATZOMPA">San Juan Atzompa</option>
<option value="SAN MARTIN TEXMELUCAN">San Martin Texmelucan</option>
<option value="SAN MARTIN TOTOLTEPEC">San Martin Totoltepec</option>
<option value="SAN MATIAS TLALANCALECA">San Matias Tlalancaleca</option>
<option value="SAN MIGUEL IXITLAN">San Miguel Ixitlan</option>
<option value="SAN MIGUEL XOXTLA">San Miguel Xoxtla</option>
<option value="SAN NICOLAS BUENOS AIRES">San Nicolas Buenos Aires</option>
<option value="SAN NICOLAS DE LOS RANCHOS">San Nicolas De Los Ranchos</option>
<option value="SAN PABLO ANICANO">San Pablo Anicano</option>
<option value="SAN PEDRO CHOLULA">San Pedro Cholula</option>
<option value="SAN PEDRO YELOIXTLAHUACA">San Pedro Yeloixtlahuaca</option>
<option value="SAN SALVADOR EL SECO">San Salvador El Seco</option>
<option value="SAN SALVADOR EL VERDE">San Salvador El Verde</option>
<option value="SAN SALVADOR HUIXCOLOTLA">San Salvador Huixcolotla</option>
<option value="SAN SEBASTIAN TLACOTEPEC">San Sebastian Tlacotepec</option>
<option value="SANTA CATARINA TLALTEMPAN">Santa Catarina Tlaltempan</option>
<option value="SANTA INES AHUATEMPAN">Santa Ines Ahuatempan</option>
<option value="SANTA ISABEL CHOLULA">Santa Isabel Cholula</option>
<option value="SANTIAGO MIAHUATLAN">Santiago Miahuatlan</option>
<option value="SANTO TOMAS HUEYOTLIPAN">Santo Tomas Hueyotlipan</option>
<option value="SOLTEPEC">Soltepec</option>
<option value="TECALI DE HERRERA">Tecali De Herrera</option>
<option value="TECAMACHALCO">Tecamachalco</option>
<option value="TECOMATLAN">Tecomatlan</option>
<option value="TEHUACAN">Tehuacan</option>
<option value="TEHUITZINGO">Tehuitzingo</option>
<option value="TENAMPULCO">Tenampulco</option>
<option value="TEOPANTLAN">Teopantlan</option>
<option value="TEOTLALCO">Teotlalco</option>
<option value="TEPANCO DE LOPEZ">Tepanco De Lopez</option>
<option value="TEPANGO DE RODRIGUEZ">Tepango De Rodriguez</option>
<option value="TEPATLAXCO DE HIDALGO">Tepatlaxco De Hidalgo</option>
<option value="TEPEACA">Tepeaca</option>
<option value="TEPEMAXALCO">Tepemaxalco</option>
<option value="TEPEOJUMA">Tepeojuma</option>
<option value="TEPETZINTLA">Tepetzintla</option>
<option value="TEPEXCO">Tepexco</option>
<option value="TEPEXI DE RODRIGUEZ">Tepexi De Rodriguez</option>
<option value="TEPEYAHUALCO DE CUAUHTEMOC">Tepeyahualco De Cuauhtemoc</option>
<option value="TEPEYAHUALCO">Tepeyahualco</option>
<option value="TETELA DE OCAMPO">Tetela De Ocampo</option>
<option value="TETELES DE AVILA CASTILLO">Teteles De Avila Castillo</option>
<option value="TEZIUTLAN">Teziutlan</option>
<option value="TIANGUISMANALCO">Tianguismanalco</option>
<option value="TILAPA">Tilapa</option>
<option value="TLACHICHUCA">Tlachichuca</option>
<option value="TLACOTEPEC DE BENITO JUAREZ">Tlacotepec De Benito Juarez</option>
<option value="TLACUILOTEPEC">Tlacuilotepec</option>
<option value="TLAHUAPAN">Tlahuapan</option>
<option value="TLALTENANGO">Tlaltenango</option>
<option value="TLANEPANTLA">Tlanepantla</option>
<option value="TLAOLA">Tlaola</option>
<option value="TLAPACOYA">Tlapacoya</option>
<option value="TLAPANALA">Tlapanala</option>
<option value="TLATLAUQUITEPEC">Tlatlauquitepec</option>
<option value="TLAXCO">Tlaxco</option>
<option value="TOCHIMILCO">Tochimilco</option>
<option value="TOCHTEPEC">Tochtepec</option>
<option value="TOTOLTEPEC DE GUERRERO">Totoltepec De Guerrero</option>
<option value="TULCINGO">Tulcingo</option>
<option value="TUZAMAPAN DE GALEANA">Tuzamapan De Galeana</option>
<option value="TZICATLACOYAN">Tzicatlacoyan</option>
<option value="VENUSTIANO CARRANZA">Venustiano Carranza</option>
<option value="VICENTE GUERRERO">Vicente Guerrero</option>
<option value="XAYACATLAN DE BRAVO">Xayacatlan De Bravo</option>
<option value="XICOTEPEC">Xicotepec</option>
<option value="XICOTLAN">Xicotlan</option>
<option value="XIUTETELCO">Xiutetelco</option>
<option value="XOCHIAPULCO">Xochiapulco</option>
<option value="XOCHILTEPEC">Xochiltepec</option>
<option value="XOCHITLAN DE VICENTE SUAREZ">Xochitlan De Vicente Suarez</option>
<option value="XOCHITLAN TODOS SANTOS">Xochitlan Todos Santos</option>
<option value="YAONAHUAC">Yaonahuac</option>
<option value="YEHUALTEPEC">Yehualtepec</option>
<option value="ZACAPALA">Zacapala</option>
<option value="ZACAPOAXTLA">Zacapoaxtla</option>
<option value="ZACATLAN">Zacatlan</option>
<option value="ZAPOTITLAN DE MENDEZ">Zapotitlan De Mendez</option>
<option value="ZAPOTITLAN">Zapotitlan</option>
<option value="ZARAGOZA">Zaragoza</option>
<option value="ZAUTLA">Zautla</option>
<option value="ZIHUATEUTLA">Zihuateutla</option>
<option value="ZINACATEPEC">Zinacatepec</option>
<option value="ZONGOZOTLA">Zongozotla</option>
<option value="ZOQUIAPAN">Zoquiapan</option>
<option value="ZOQUITLAN">Zoquitlan</option>

      </select>

      <select name="queretaro" id="queretaro-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="AMEALCO DE BONFIL">Amealco De Bonfil</option>
<option value="ARROYO SECO">Arroyo Seco</option>
<option value="CADEREYTA DE MONTES">Cadereyta De Montes</option>
<option value="COLON">Colon</option>
<option value="CORREGIDORA">Corregidora</option>
<option value="EL MARQUES">El Marques</option>
<option value="EZEQUIEL MONTES">Ezequiel Montes</option>
<option value="HUIMILPAN">Huimilpan</option>
<option value="JALPAN DE SERRA">Jalpan De Serra</option>
<option value="LANDA DE MATAMOROS">Landa De Matamoros</option>
<option value="PEDRO ESCOBEDO">Pedro Escobedo</option>
<option value="PEÐAMILLER">Peðamiller</option>
<option value="PINAL DE AMOLES">Pinal De Amoles</option>
<option value="QUERETARO">Queretaro</option>
<option value="SAN JOAQUIN">San Joaquin</option>
<option value="SAN JUAN DEL RIO">San Juan Del Rio</option>
<option value="TEQUISQUIAPAN">Tequisquiapan</option>
<option value="TOLIMAN">Toliman</option>
      </select>

      <select name="quintanaroo" id="quintanaroo-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="BACALAR">Bacalar</option>
<option value="BENITO JUAREZ">Benito Juarez</option>
<option value="COZUMEL">Cozumel</option>
<option value="FELIPE CARRILLO PUERTO">Felipe Carrillo Puerto</option>
<option value="ISLA MUJERES">Isla Mujeres</option>
<option value="JOSE MARIA MORELOS">Jose Maria Morelos</option>
<option value="LAZARO CARDENAS">Lazaro Cardenas</option>
<option value="OTHON P. BLANCO">Othon P. Blanco</option>
<option value="PUERTO MORELOS">Puerto Morelos</option>
<option value="SOLIDARIDAD">Solidaridad</option>
<option value="TULUM">Tulum</option>
      </select>

      <select name="sanluispotosi" id="sanluispotosi-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="AHUALULCO">Ahualulco</option>
<option value="ALAQUINES">Alaquines</option>
<option value="AQUISMON">Aquismon</option>
<option value="ARMADILLO DE LOS INFANTE">Armadillo De Los Infante</option>
<option value="AXTLA DE TERRAZAS">Axtla De Terrazas</option>
<option value="CARDENAS">Cardenas</option>
<option value="CATORCE">Catorce</option>
<option value="CEDRAL">Cedral</option>
<option value="CERRITOS">Cerritos</option>
<option value="CERRO DE SAN PEDRO">Cerro De San Pedro</option>
<option value="CHARCAS">Charcas</option>
<option value="CIUDAD DEL MAIZ">Ciudad Del Maiz</option>
<option value="CIUDAD FERNANDEZ">Ciudad Fernandez</option>
<option value="CIUDAD VALLES">Ciudad Valles</option>
<option value="COXCATLAN">Coxcatlan</option>
<option value="EBANO">Ebano</option>
<option value="EL NARANJO">El Naranjo</option>
<option value="GUADALCAZAR">Guadalcazar</option>
<option value="HUEHUETLAN">Huehuetlan</option>
<option value="LAGUNILLAS">Lagunillas</option>
<option value="MATEHUALA">Matehuala</option>
<option value="MATLAPA">Matlapa</option>
<option value="MEXQUITIC DE CARMONA">Mexquitic De Carmona</option>
<option value="MOCTEZUMA">Moctezuma</option>
<option value="RAYON">Rayon</option>
<option value="RIOVERDE">Rioverde</option>
<option value="SALINAS">Salinas</option>
<option value="SAN ANTONIO">San Antonio</option>
<option value="SAN CIRO DE ACOSTA">San Ciro De Acosta</option>
<option value="SAN LUIS POTOSI">San Luis Potosi</option>
<option value="SAN MARTIN CHALCHICUAUTLA">San Martin Chalchicuautla</option>
<option value="SAN NICOLAS TOLENTINO">San Nicolas Tolentino</option>
<option value="SAN VICENTE TANCUAYALAB">San Vicente Tancuayalab</option>
<option value="SANTA CATARINA">Santa Catarina</option>
<option value="SANTA MARIA DEL RIO">Santa Maria Del Rio</option>
<option value="SANTO DOMINGO">Santo Domingo</option>
<option value="SOLEDAD DE GRACIANO SANCHEZ">Soledad De Graciano Sanchez</option>
<option value="TAMASOPO">Tamasopo</option>
<option value="TAMAZUNCHALE">Tamazunchale</option>
<option value="TAMPACAN">Tampacan</option>
<option value="TAMPAMOLON CORONA">Tampamolon Corona</option>
<option value="TAMUIN">Tamuin</option>
<option value="TANCANHUITZ">Tancanhuitz</option>
<option value="TANLAJAS">Tanlajas</option>
<option value="TANQUIAN DE ESCOBEDO">Tanquian De Escobedo</option>
<option value="TIERRA NUEVA">Tierra Nueva</option>
<option value="VANEGAS">Vanegas</option>
<option value="VENADO">Venado</option>
<option value="VILLA DE ARISTA">Villa De Arista</option>
<option value="VILLA DE ARRIAGA">Villa De Arriaga</option>
<option value="VILLA DE GUADALUPE">Villa De Guadalupe</option>
<option value="VILLA DE LA PAZ">Villa De La Paz</option>
<option value="VILLA DE RAMOS">Villa De Ramos</option>
<option value="VILLA DE REYES">Villa De Reyes</option>
<option value="VILLA HIDALGO">Villa Hidalgo</option>
<option value="VILLA JUAREZ">Villa Juarez</option>
<option value="XILITLA">Xilitla</option>
<option value="ZARAGOZA">Zaragoza</option>
      </select>

      <select name="sinaloa" id="sinaloa-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="AHOME">Ahome</option>
<option value="ANGOSTURA">Angostura</option>
<option value="BADIRAGUATO">Badiraguato</option>
<option value="CHOIX">Choix</option>
<option value="CONCORDIA">Concordia</option>
<option value="COSALA">Cosala</option>
<option value="CULIACAN">Culiacan</option>
<option value="EL FUERTE">El Fuerte</option>
<option value="ELOTA">Elota</option>
<option value="ESCUINAPA">Escuinapa</option>
<option value="GUASAVE">Guasave</option>
<option value="MAZATLAN">Mazatlan</option>
<option value="MOCORITO">Mocorito</option>
<option value="NAVOLATO">Navolato</option>
<option value="ROSARIO">Rosario</option>
<option value="SALVADOR ALVARADO">Salvador Alvarado</option>
<option value="SAN IGNACIO">San Ignacio</option>
<option value="SINALOA">Sinaloa</option>
      </select>

      <select name="sonora" id="sonora-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ACONCHI">Aconchi</option>
<option value="AGUA PRIETA">Agua Prieta</option>
<option value="ALAMOS">Alamos</option>
<option value="ALTAR">Altar</option>
<option value="ARIVECHI">Arivechi</option>
<option value="ARIZPE">Arizpe</option>
<option value="ATIL">Atil</option>
<option value="BACADEHUACHI">Bacadehuachi</option>
<option value="BACANORA">Bacanora</option>
<option value="BACERAC">Bacerac</option>
<option value="BACOACHI">Bacoachi</option>
<option value="BACUM">Bacum</option>
<option value="BANAMICHI">Banamichi</option>
<option value="BAVIACORA">Baviacora</option>
<option value="BAVISPE">Bavispe</option>
<option value="BENITO JUAREZ">Benito Juarez</option>
<option value="BENJAMIN HILL">Benjamin Hill</option>
<option value="CABORCA">Caborca</option>
<option value="CAJEME">Cajeme</option>
<option value="CANANEA">Cananea</option>
<option value="CARBO">Carbo</option>
<option value="CUCURPE">Cucurpe</option>
<option value="CUMPAS">Cumpas</option>
<option value="DIVISADEROS">Divisaderos</option>
<option value="EMPALME">Empalme</option>
<option value="ETCHOJOA">Etchojoa</option>
<option value="FRONTERAS">Fronteras</option>
<option value="GENERAL PLUTARCO ELIAS CALLES">General Plutarco Elias Calles</option>
<option value="GRANADOS">Granados</option>
<option value="GUAYMAS">Guaymas</option>
<option value="HERMOSILLO">Hermosillo</option>
<option value="HUACHINERA">Huachinera</option>
<option value="HUASABAS">Huasabas</option>
<option value="HUATABAMPO">Huatabampo</option>
<option value="HUEPAC">Huepac</option>
<option value="IMURIS">Imuris</option>
<option value="LA COLORADA">La Colorada</option>
<option value="MAGDALENA">Magdalena</option>
<option value="MAZATAN">Mazatan</option>
<option value="MOCTEZUMA">Moctezuma</option>
<option value="NACO">Naco</option>
<option value="NACORI CHICO">Nacori Chico</option>
<option value="NACOZARI DE GARCIA">Nacozari De Garcia</option>
<option value="NAVOJOA">Navojoa</option>
<option value="NOGALES">Nogales</option>
<option value="ONAVAS">Onavas</option>
<option value="OPODEPE">Opodepe</option>
<option value="OQUITOA">Oquitoa</option>
<option value="PITIQUITO">Pitiquito</option>
<option value="PUERTO PEÐASCO">Puerto Peðasco</option>
<option value="QUIRIEGO">Quiriego</option>
<option value="RAYON">Rayon</option>
<option value="ROSARIO">Rosario</option>
<option value="SAHUARIPA">Sahuaripa</option>
<option value="SAN FELIPE DE JESUS">San Felipe De Jesus</option>
<option value="SAN IGNACIO RIO MUERTO">San Ignacio Rio Muerto</option>
<option value="SAN JAVIER">San Javier</option>
<option value="SAN LUIS RIO COLORADO">San Luis Rio Colorado</option>
<option value="SAN MIGUEL DE HORCASITAS">San Miguel De Horcasitas</option>
<option value="SAN PEDRO DE LA CUEVA">San Pedro De La Cueva</option>
<option value="SANTA ANA">Santa Ana</option>
<option value="SANTA CRUZ">Santa Cruz</option>
<option value="SARIC">Saric</option>
<option value="SOYOPA">Soyopa</option>
<option value="SUAQUI GRANDE">Suaqui Grande</option>
<option value="TEPACHE">Tepache</option>
<option value="TRINCHERAS">Trincheras</option>
<option value="TUBUTAMA">Tubutama</option>
<option value="URES">Ures</option>
<option value="VILLA HIDALGO">Villa Hidalgo</option>
<option value="VILLA PESQUEIRA">Villa Pesqueira</option>
<option value="YECORA">Yecora</option>
      </select>

      <select name="tabasco" id="tabasco-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="BALANCAN">Balancan</option>
<option value="CARDENAS">Cardenas</option>
<option value="CENTLA">Centla</option>
<option value="CENTRO">Centro</option>
<option value="COMALCALCO">Comalcalco</option>
<option value="CUNDUACAN">Cunduacan</option>
<option value="EMILIANO ZAPATA">Emiliano Zapata</option>
<option value="HUIMANGUILLO">Huimanguillo</option>
<option value="JALAPA">Jalapa</option>
<option value="JALPA DE MENDEZ">Jalpa De Mendez</option>
<option value="JONUTA">Jonuta</option>
<option value="MACUSPANA">Macuspana</option>
<option value="NACAJUCA">Nacajuca</option>
<option value="PARAISO">Paraiso</option>
<option value="TACOTALPA">Tacotalpa</option>
<option value="TEAPA">Teapa</option>
<option value="TENOSIQUE">Tenosique</option>
      </select>

      <select name="tamaulipas" id="tamaulipas-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ABASOLO">Abasolo</option>
<option value="ALDAMA">Aldama</option>
<option value="ALTAMIRA">Altamira</option>
<option value="ANTIGUO MORELOS">Antiguo Morelos</option>
<option value="BURGOS">Burgos</option>
<option value="BUSTAMANTE">Bustamante</option>
<option value="CAMARGO">Camargo</option>
<option value="CASAS">Casas</option>
<option value="CIUDAD MADERO">Ciudad Madero</option>
<option value="CRUILLAS">Cruillas</option>
<option value="EL MANTE">El Mante</option>
<option value="GOMEZ FARIAS">Gomez Farias</option>
<option value="GONZALEZ">Gonzalez</option>
<option value="GUEMEZ">Guemez</option>
<option value="GUERRERO">Guerrero</option>
<option value="GUSTAVO DIAZ ORDAZ">Gustavo Diaz Ordaz</option>
<option value="HIDALGO">Hidalgo</option>
<option value="JAUMAVE">Jaumave</option>
<option value="JIMENEZ">Jimenez</option>
<option value="LLERA">Llera</option>
<option value="MAINERO">Mainero</option>
<option value="MATAMOROS">Matamoros</option>
<option value="MENDEZ">Mendez</option>
<option value="MIER">Mier</option>
<option value="MIGUEL ALEMAN">Miguel Aleman</option>
<option value="MIQUIHUANA">Miquihuana</option>
<option value="NUEVO LAREDO">Nuevo Laredo</option>
<option value="NUEVO MORELOS">Nuevo Morelos</option>
<option value="OCAMPO">Ocampo</option>
<option value="PADILLA">Padilla</option>
<option value="PALMILLAS">Palmillas</option>
<option value="REYNOSA">Reynosa</option>
<option value="RIO BRAVO">Rio Bravo</option>
<option value="SAN CARLOS">San Carlos</option>
<option value="SAN FERNANDO">San Fernando</option>
<option value="SAN NICOLAS">San Nicolas</option>
<option value="SOTO LA MARINA">Soto La Marina</option>
<option value="TAMPICO">Tampico</option>
<option value="TULA">Tula</option>
<option value="VALLE HERMOSO">Valle Hermoso</option>
<option value="VICTORIA">Victoria</option>
<option value="VILLAGRAN">Villagran</option>
<option value="XICOTENCATL">Xicotencatl</option>
      </select>

      <select name="tlaxcala" id="tlaxcala-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ACUAMANALA DE MIGUEL HIDALGO">Acuamanala De Miguel Hidalgo</option>
<option value="AMAXAC DE GUERRERO">Amaxac De Guerrero</option>
<option value="APETATITLAN DE ANTONIO CARVAJAL">Apetatitlan De Antonio Carvajal</option>
<option value="APIZACO">Apizaco</option>
<option value="ATLANGATEPEC">Atlangatepec</option>
<option value="ATLTZAYANCA">Atltzayanca</option>
<option value="BENITO JUAREZ">Benito Juarez</option>
<option value="CALPULALPAN">Calpulalpan</option>
<option value="CHIAUTEMPAN">Chiautempan</option>
<option value="CONTLA DE JUAN CUAMATZI">Contla De Juan Cuamatzi</option>
<option value="CUAPIAXTLA">Cuapiaxtla</option>
<option value="CUAXOMULCO">Cuaxomulco</option>
<option value="EL CARMEN TEQUEXQUITLA">El Carmen Tequexquitla</option>
<option value="EMILIANO ZAPATA">Emiliano Zapata</option>
<option value="ESPAÐITA">Espaðita</option>
<option value="HUAMANTLA">Huamantla</option>
<option value="HUEYOTLIPAN">Hueyotlipan</option>
<option value="IXTACUIXTLA DE MARIANO MATAMOROS">Ixtacuixtla De Mariano Matamoros</option>
<option value="IXTENCO">Ixtenco</option>
<option value="LA MAGDALENA TLALTELULCO">La Magdalena Tlaltelulco</option>
<option value="LAZARO CARDENAS">Lazaro Cardenas</option>
<option value="MAZATECOCHCO DE JOSE MARIA MORELOS">Mazatecochco De Jose Maria Morelos</option>
<option value="MUÐOZ DE DOMINGO ARENAS">Muðoz De Domingo Arenas</option>
<option value="NANACAMILPA DE MARIANO ARISTA">Nanacamilpa De Mariano Arista</option>
<option value="NATIVITAS">Nativitas</option>
<option value="PANOTLA">Panotla</option>
<option value="PAPALOTLA DE XICOHTENCATL">Papalotla De Xicohtencatl</option>
<option value="SAN DAMIAN TEXOLOC">San Damian Texoloc</option>
<option value="SAN FRANCISCO TETLANOHCAN">San Francisco Tetlanohcan</option>
<option value="SAN JERONIMO ZACUALPAN">San Jeronimo Zacualpan</option>
<option value="SAN JOSE TEACALCO">San Jose Teacalco</option>
<option value="SAN JUAN HUACTZINCO">San Juan Huactzinco</option>
<option value="SAN LORENZO AXOCOMANITLA">San Lorenzo Axocomanitla</option>
<option value="SAN LUCAS TECOPILCO">San Lucas Tecopilco</option>
<option value="SAN PABLO DEL MONTE">San Pablo Del Monte</option>
<option value="SANCTORUM DE LAZARO CARDENAS">Sanctorum De Lazaro Cardenas</option>
<option value="SANTA ANA NOPALUCAN">Santa Ana Nopalucan</option>
<option value="SANTA APOLONIA TEACALCO">Santa Apolonia Teacalco</option>
<option value="SANTA CATARINA AYOMETLA">Santa Catarina Ayometla</option>
<option value="SANTA CRUZ QUILEHTLA">Santa Cruz Quilehtla</option>
<option value="SANTA CRUZ TLAXCALA">Santa Cruz Tlaxcala</option>
<option value="SANTA ISABEL XILOXOXTLA">Santa Isabel Xiloxoxtla</option>
<option value="TENANCINGO">Tenancingo</option>
<option value="TEOLOCHOLCO">Teolocholco</option>
<option value="TEPETITLA DE LARDIZABAL">Tepetitla De Lardizabal</option>
<option value="TEPEYANCO">Tepeyanco</option>
<option value="TERRENATE">Terrenate</option>
<option value="TETLA DE LA SOLIDARIDAD">Tetla De La Solidaridad</option>
<option value="TETLATLAHUCA">Tetlatlahuca</option>
<option value="TLAXCALA">Tlaxcala</option>
<option value="TLAXCO">Tlaxco</option>
<option value="TOCATLAN">Tocatlan</option>
<option value="TOTOLAC">Totolac</option>
<option value="TZOMPANTEPEC">Tzompantepec</option>
<option value="XALOZTOC">Xaloztoc</option>
<option value="XALTOCAN">Xaltocan</option>
<option value="XICOHTZINCO">Xicohtzinco</option>
<option value="YAUHQUEMEHCAN">Yauhquemehcan</option>
<option value="ZACATELCO">Zacatelco</option>
<option value="ZITLALTEPEC DE TRINIDAD SANCHEZ SANTOS">Zitlaltepec De Trinidad Sanchez Santos</option>
      </select>

      <select name="veracruz" id="veracruz-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ACAJETE">Acajete</option>
<option value="ACATLAN">Acatlan</option>
<option value="ACAYUCAN">Acayucan</option>
<option value="ACTOPAN">Actopan</option>
<option value="ACULA">Acula</option>
<option value="ACULTZINGO">Acultzingo</option>
<option value="AGUA DULCE">Agua Dulce</option>
<option value="ALAMO TEMAPACHE">Alamo Temapache</option>
<option value="ALPATLAHUAC">Alpatlahuac</option>
<option value="ALTO LUCERO DE GUTIERREZ BARRIOS">Alto Lucero De Gutierrez Barrios</option>
<option value="ALTOTONGA">Altotonga</option>
<option value="ALVARADO">Alvarado</option>
<option value="AMATITLAN">Amatitlan</option>
<option value="AMATLAN DE LOS REYES">Amatlan De Los Reyes</option>
<option value="ANGEL R. CABADA">Angel R. Cabada</option>
<option value="APAZAPAN">Apazapan</option>
<option value="AQUILA">Aquila</option>
<option value="ASTACINGA">Astacinga</option>
<option value="ATLAHUILCO">Atlahuilco</option>
<option value="ATOYAC">Atoyac</option>
<option value="ATZACAN">Atzacan</option>
<option value="ATZALAN">Atzalan</option>
<option value="AYAHUALULCO">Ayahualulco</option>
<option value="BANDERILLA">Banderilla</option>
<option value="BENITO JUAREZ">Benito Juarez</option>
<option value="BOCA DEL RIO">Boca Del Rio</option>
<option value="CALCAHUALCO">Calcahualco</option>
<option value="CAMARON DE TEJEDA">Camaron De Tejeda</option>
<option value="CAMERINO Z. MENDOZA">Camerino Z. Mendoza</option>
<option value="CARLOS A. CARRILLO">Carlos A. Carrillo</option>
<option value="CARRILLO PUERTO">Carrillo Puerto</option>
<option value="CASTILLO DE TEAYO">Castillo De Teayo</option>
<option value="CATEMACO">Catemaco</option>
<option value="CAZONES DE HERRERA">Cazones De Herrera</option>
<option value="CERRO AZUL">Cerro Azul</option>
<option value="CHACALTIANGUIS">Chacaltianguis</option>
<option value="CHALMA">Chalma</option>
<option value="CHICONAMEL">Chiconamel</option>
<option value="CHICONQUIACO">Chiconquiaco</option>
<option value="CHICONTEPEC">Chicontepec</option>
<option value="CHINAMECA">Chinameca</option>
<option value="CHINAMPA DE GOROSTIZA">Chinampa De Gorostiza</option>
<option value="CHOCAMAN">Chocaman</option>
<option value="CHONTLA">Chontla</option>
<option value="CHUMATLAN">Chumatlan</option>
<option value="CITLALTEPETL">Citlaltepetl</option>
<option value="COACOATZINTLA">Coacoatzintla</option>
<option value="COAHUITLAN">Coahuitlan</option>
<option value="COATEPEC">Coatepec</option>
<option value="COATZACOALCOS">Coatzacoalcos</option>
<option value="COATZINTLA">Coatzintla</option>
<option value="COETZALA">Coetzala</option>
<option value="COLIPA">Colipa</option>
<option value="COMAPA">Comapa</option>
<option value="CORDOBA">Cordoba</option>
<option value="COSAMALOAPAN">Cosamaloapan</option>
<option value="COSAUTLAN DE CARVAJAL">Cosautlan De Carvajal</option>
<option value="COSCOMATEPEC">Coscomatepec</option>
<option value="COSOLEACAQUE">Cosoleacaque</option>
<option value="COTAXTLA">Cotaxtla</option>
<option value="COXQUIHUI">Coxquihui</option>
<option value="COYUTLA">Coyutla</option>
<option value="CUICHAPA">Cuichapa</option>
<option value="CUITLAHUAC">Cuitlahuac</option>
<option value="EL HIGO">El Higo</option>
<option value="EMILIANO ZAPATA">Emiliano Zapata</option>
<option value="ESPINAL">Espinal</option>
<option value="FILOMENO MATA">Filomeno Mata</option>
<option value="FORTIN">Fortin</option>
<option value="GUTIERREZ ZAMORA">Gutierrez Zamora</option>
<option value="HIDALGOTITLAN">Hidalgotitlan</option>
<option value="HUATUSCO">Huatusco</option>
<option value="HUAYACOCOTLA">Huayacocotla</option>
<option value="HUEYAPAN DE OCAMPO">Hueyapan De Ocampo</option>
<option value="HUILOAPAN DE CUAUHTEMOC">Huiloapan De Cuauhtemoc</option>
<option value="IGNACIO DE LA LLAVE">Ignacio De La Llave</option>
<option value="ILAMATLAN">Ilamatlan</option>
<option value="ISLA">Isla</option>
<option value="IXCATEPEC">Ixcatepec</option>
<option value="IXHUACAN DE LOS REYES">Ixhuacan De Los Reyes</option>
<option value="IXHUATLAN DE MADERO">Ixhuatlan De Madero</option>
<option value="IXHUATLAN DEL CAFE">Ixhuatlan Del Cafe</option>
<option value="IXHUATLAN DEL SURESTE">Ixhuatlan Del Sureste</option>
<option value="IXHUATLANCILLO">Ixhuatlancillo</option>
<option value="IXMATLAHUACAN">Ixmatlahuacan</option>
<option value="IXTACZOQUITLAN">Ixtaczoquitlan</option>
<option value="JALACINGO">Jalacingo</option>
<option value="JALCOMULCO">Jalcomulco</option>
<option value="JALTIPAN">Jaltipan</option>
<option value="JAMAPA">Jamapa</option>
<option value="JESUS CARRANZA">Jesus Carranza</option>
<option value="JILOTEPEC">Jilotepec</option>
<option value="JOSE AZUETA">Jose Azueta</option>
<option value="JUAN RODRIGUEZ CLARA">Juan Rodriguez Clara</option>
<option value="JUCHIQUE DE FERRER">Juchique De Ferrer</option>
<option value="LA ANTIGUA">La Antigua</option>
<option value="LA PERLA">La Perla</option>
<option value="LANDERO Y COSS">Landero Y Coss</option>
<option value="LAS CHOAPAS">Las Choapas</option>
<option value="LAS MINAS">Las Minas</option>
<option value="LAS VIGAS DE RAMIREZ">Las Vigas De Ramirez</option>
<option value="LERDO DE TEJADA">Lerdo De Tejada</option>
<option value="LOS REYES">Los Reyes</option>
<option value="MAGDALENA">Magdalena</option>
<option value="MALTRATA">Maltrata</option>
<option value="MANLIO FABIO ALTAMIRANO">Manlio Fabio Altamirano</option>
<option value="MARIANO ESCOBEDO">Mariano Escobedo</option>
<option value="MARTINEZ DE LA TORRE">Martinez De La Torre</option>
<option value="MECATLAN">Mecatlan</option>
<option value="MECAYAPAN">Mecayapan</option>
<option value="MEDELLIN DE BRAVO">Medellin De Bravo</option>
<option value="MIAHUATLAN">Miahuatlan</option>
<option value="MINATITLAN">Minatitlan</option>
<option value="MISANTLA">Misantla</option>
<option value="MIXTLA DE ALTAMIRANO">Mixtla De Altamirano</option>
<option value="MOLOACAN">Moloacan</option>
<option value="NANCHITAL DE LAZARO CARDENAS DEL RIO">Nanchital De Lazaro Cardenas Del Rio</option>
<option value="NAOLINCO">Naolinco</option>
<option value="NARANJAL">Naranjal</option>
<option value="NARANJOS AMATLAN">Naranjos Amatlan</option>
<option value="NAUTLA">Nautla</option>
<option value="NOGALES">Nogales</option>
<option value="OLUTA">Oluta</option>
<option value="OMEALCA">Omealca</option>
<option value="ORIZABA">Orizaba</option>
<option value="OTATITLAN">Otatitlan</option>
<option value="OTEAPAN">Oteapan</option>
<option value="OZULUAMA">Ozuluama</option>
<option value="PAJAPAN">Pajapan</option>
<option value="PANUCO">Panuco</option>
<option value="PAPANTLA">Papantla</option>
<option value="PASO DE OVEJAS">Paso De Ovejas</option>
<option value="PASO DEL MACHO">Paso Del Macho</option>
<option value="PEROTE">Perote</option>
<option value="PLATON SANCHEZ">Platon Sanchez</option>
<option value="PLAYA VICENTE">Playa Vicente</option>
<option value="POZA RICA DE HIDALGO">Poza Rica De Hidalgo</option>
<option value="PUEBLO VIEJO">Pueblo Viejo</option>
<option value="PUENTE NACIONAL">Puente Nacional</option>
<option value="RAFAEL DELGADO">Rafael Delgado</option>
<option value="RAFAEL LUCIO">Rafael Lucio</option>
<option value="RIO BLANCO">Rio Blanco</option>
<option value="SALTABARRANCA">Saltabarranca</option>
<option value="SAN ANDRES TENEJAPAN">San Andres Tenejapan</option>
<option value="SAN ANDRES TUXTLA">San Andres Tuxtla</option>
<option value="SAN JUAN EVANGELISTA">San Juan Evangelista</option>
<option value="SAN RAFAEL">San Rafael</option>
<option value="SANTIAGO SOCHIAPAN">Santiago Sochiapan</option>
<option value="SANTIAGO TUXTLA">Santiago Tuxtla</option>
<option value="SAYULA DE ALEMAN">Sayula De Aleman</option>
<option value="SOCHIAPA">Sochiapa</option>
<option value="SOCONUSCO">Soconusco</option>
<option value="SOLEDAD ATZOMPA">Soledad Atzompa</option>
<option value="SOLEDAD DE DOBLADO">Soledad De Doblado</option>
<option value="SOTEAPAN">Soteapan</option>
<option value="TAMALIN">Tamalin</option>
<option value="TAMIAHUA">Tamiahua</option>
<option value="TAMPICO ALTO">Tampico Alto</option>
<option value="TANCOCO">Tancoco</option>
<option value="TANTIMA">Tantima</option>
<option value="TANTOYUCA">Tantoyuca</option>
<option value="TATAHUICAPAN DE JUAREZ">Tatahuicapan De Juarez</option>
<option value="TATATILA">Tatatila</option>
<option value="TECOLUTLA">Tecolutla</option>
<option value="TEHUIPANGO">Tehuipango</option>
<option value="TEMPOAL">Tempoal</option>
<option value="TENAMPA">Tenampa</option>
<option value="TENOCHTITLAN">Tenochtitlan</option>
<option value="TEOCELO">Teocelo</option>
<option value="TEPATLAXCO">Tepatlaxco</option>
<option value="TEPETLAN">Tepetlan</option>
<option value="TEPETZINTLA">Tepetzintla</option>
<option value="TEQUILA">Tequila</option>
<option value="TEXCATEPEC">Texcatepec</option>
<option value="TEXHUACAN">Texhuacan</option>
<option value="TEXISTEPEC">Texistepec</option>
<option value="TEZONAPA">Tezonapa</option>
<option value="TIERRA BLANCA">Tierra Blanca</option>
<option value="TIHUATLAN">Tihuatlan</option>
<option value="TLACHICHILCO">Tlachichilco</option>
<option value="TLACOJALPAN">Tlacojalpan</option>
<option value="TLACOLULAN">Tlacolulan</option>
<option value="TLACOTALPAN">Tlacotalpan</option>
<option value="TLACOTEPEC DE MEJIA">Tlacotepec De Mejia</option>
<option value="TLALIXCOYAN">Tlalixcoyan</option>
<option value="TLALNELHUAYOCAN">Tlalnelhuayocan</option>
<option value="TLALTETELA">Tlaltetela</option>
<option value="TLAPACOYAN">Tlapacoyan</option>
<option value="TLAQUILPA">Tlaquilpa</option>
<option value="TLILAPAN">Tlilapan</option>
<option value="TOMATLAN">Tomatlan</option>
<option value="TONAYAN">Tonayan</option>
<option value="TOTUTLA">Totutla</option>
<option value="TRES VALLES">Tres Valles</option>
<option value="TUXPAN">Tuxpan</option>
<option value="TUXTILLA">Tuxtilla</option>
<option value="URSULO GALVAN">Ursulo Galvan</option>
<option value="UXPANAPA">Uxpanapa</option>
<option value="VEGA DE ALATORRE">Vega De Alatorre</option>
<option value="VERACRUZ">Veracruz</option>
<option value="VILLA ALDAMA">Villa Aldama</option>
<option value="XALAPA">Xalapa</option>
<option value="XICO">Xico</option>
<option value="XOXOCOTLA">Xoxocotla</option>
<option value="YANGA">Yanga</option>
<option value="YECUATLA">Yecuatla</option>
<option value="ZACUALPAN">Zacualpan</option>
<option value="ZARAGOZA">Zaragoza</option>
<option value="ZENTLA">Zentla</option>
<option value="ZONGOLICA">Zongolica</option>
<option value="ZONTECOMATLAN">Zontecomatlan</option>
<option value="ZOZOCOLCO DE HIDALGO">Zozocolco De Hidalgo</option>
      </select>

      <select name="yucatan" id="yucatan-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="ABALA">Abala</option>
<option value="ACANCEH">Acanceh</option>
<option value="AKIL">Akil</option>
<option value="BACA">Baca</option>
<option value="BOKOBA">Bokoba</option>
<option value="BUCTZOTZ">Buctzotz</option>
<option value="CACALCHEN">Cacalchen</option>
<option value="CALOTMUL">Calotmul</option>
<option value="CANSAHCAB">Cansahcab</option>
<option value="CANTAMAYEC">Cantamayec</option>
<option value="CELESTUN">Celestun</option>
<option value="CENOTILLO">Cenotillo</option>
<option value="CHACSINKIN">Chacsinkin</option>
<option value="CHANKOM">Chankom</option>
<option value="CHAPAB">Chapab</option>
<option value="CHEMAX">Chemax</option>
<option value="CHICHIMILA">Chichimila</option>
<option value="CHICXULUB PUEBLO">Chicxulub Pueblo</option>
<option value="CHIKINDZONOT">Chikindzonot</option>
<option value="CHOCHOLA">Chochola</option>
<option value="CHUMAYEL">Chumayel</option>
<option value="CONKAL">Conkal</option>
<option value="CUNCUNUL">Cuncunul</option>
<option value="CUZAMA">Cuzama</option>
<option value="DZAN">Dzan</option>
<option value="DZEMUL">Dzemul</option>
<option value="DZIDZANTUN">Dzidzantun</option>
<option value="DZILAM DE BRAVO">Dzilam De Bravo</option>
<option value="DZILAM GONZALEZ">Dzilam Gonzalez</option>
<option value="DZITAS">Dzitas</option>
<option value="DZONCAUICH">Dzoncauich</option>
<option value="ESPITA">Espita</option>
<option value="HALACHO">Halacho</option>
<option value="HOCABA">Hocaba</option>
<option value="HOCTUN">Hoctun</option>
<option value="HOMUN">Homun</option>
<option value="HUHI">Huhi</option>
<option value="HUNUCMA">Hunucma</option>
<option value="IXIL">Ixil</option>
<option value="IZAMAL">Izamal</option>
<option value="KANASIN">Kanasin</option>
<option value="KANTUNIL">Kantunil</option>
<option value="KAUA">Kaua</option>
<option value="KINCHIL">Kinchil</option>
<option value="KOPOMA">Kopoma</option>
<option value="MAMA">Mama</option>
<option value="MANI">Mani</option>
<option value="MAXCANU">Maxcanu</option>
<option value="MAYAPAN">Mayapan</option>
<option value="MERIDA">Merida</option>
<option value="MOCOCHA">Mococha</option>
<option value="MOTUL">Motul</option>
<option value="MUNA">Muna</option>
<option value="MUXUPIP">Muxupip</option>
<option value="OPICHEN">Opichen</option>
<option value="OXKUTZCAB">Oxkutzcab</option>
<option value="PANABA">Panaba</option>
<option value="PETO">Peto</option>
<option value="PROGRESO">Progreso</option>
<option value="QUINTANA ROO">Quintana Roo</option>
<option value="RIO LAGARTOS">Rio Lagartos</option>
<option value="SACALUM">Sacalum</option>
<option value="SAMAHIL">Samahil</option>
<option value="SAN FELIPE">San Felipe</option>
<option value="SANAHCAT">Sanahcat</option>
<option value="SANTA ELENA">Santa Elena</option>
<option value="SEYE">Seye</option>
<option value="SINANCHE">Sinanche</option>
<option value="SOTUTA">Sotuta</option>
<option value="SUCILA">Sucila</option>
<option value="SUDZAL">Sudzal</option>
<option value="SUMA">Suma</option>
<option value="TAHDZIU">Tahdziu</option>
<option value="TAHMEK">Tahmek</option>
<option value="TEABO">Teabo</option>
<option value="TECOH">Tecoh</option>
<option value="TEKAL DE VENEGAS">Tekal De Venegas</option>
<option value="TEKANTO">Tekanto</option>
<option value="TEKAX">Tekax</option>
<option value="TEKIT">Tekit</option>
<option value="TEKOM">Tekom</option>
<option value="TELCHAC PUEBLO">Telchac Pueblo</option>
<option value="TELCHAC PUERTO">Telchac Puerto</option>
<option value="TEMAX">Temax</option>
<option value="TEMOZON">Temozon</option>
<option value="TEPAKAN">Tepakan</option>
<option value="TETIZ">Tetiz</option>
<option value="TEYA">Teya</option>
<option value="TICUL">Ticul</option>
<option value="TIMUCUY">Timucuy</option>
<option value="TINUM">Tinum</option>
<option value="TIXCACALCUPUL">Tixcacalcupul</option>
<option value="TIXKOKOB">Tixkokob</option>
<option value="TIXMEHUAC">Tixmehuac</option>
<option value="TIXPEHUAL">Tixpehual</option>
<option value="TIZIMIN">Tizimin</option>
<option value="TUNKAS">Tunkas</option>
<option value="TZUCACAB">Tzucacab</option>
<option value="UAYMA">Uayma</option>
<option value="UCU">Ucu</option>
<option value="UMAN">Uman</option>
<option value="VALLADOLID">Valladolid</option>
<option value="XOCCHEL">Xocchel</option>
<option value="YAXCABA">Yaxcaba</option>
<option value="YAXKUKUL">Yaxkukul</option>
<option value="YOBAIN">Yobain</option>
      </select>


      <select name="zacatecas" id="zacatecas-select" style="display: none;" onchange="showSelect()">
      <option value="">Selecciona un municipio</option>
      <option value="TODOS">Todos los municipios</option>
      <option value="APOZOL">Apozol</option>
<option value="APULCO">Apulco</option>
<option value="ATOLINGA">Atolinga</option>
<option value="BENITO JUAREZ">Benito Juarez</option>
<option value="CALERA">Calera</option>
<option value="CAÐITAS DE FELIPE PESCADOR">Caðitas De Felipe Pescador</option>
<option value="CHALCHIHUITES">Chalchihuites</option>
<option value="CONCEPCION DEL ORO">Concepcion Del Oro</option>
<option value="CUAUHTEMOC">Cuauhtemoc</option>
<option value="EL PLATEADO DE JOAQUIN AMARO">El Plateado De Joaquin Amaro</option>
<option value="EL SALVADOR">El Salvador</option>
<option value="FRESNILLO">Fresnillo</option>
<option value="GENARO CODINA">Genaro Codina</option>
<option value="GENERAL ENRIQUE ESTRADA">General Enrique Estrada</option>
<option value="GENERAL FRANCISCO R. MURGUIA">General Francisco R. Murguia</option>
<option value="GENERAL PANFILO NATERA">General Panfilo Natera</option>
<option value="GUADALUPE">Guadalupe</option>
<option value="HUANUSCO">Huanusco</option>
<option value="JALPA">Jalpa</option>
<option value="JEREZ">Jerez</option>
<option value="JIMENEZ DEL TEUL">Jimenez Del Teul</option>
<option value="JUAN ALDAMA">Juan Aldama</option>
<option value="JUCHIPILA">Juchipila</option>
<option value="LORETO">Loreto</option>
<option value="LUIS MOYA">Luis Moya</option>
<option value="MAZAPIL">Mazapil</option>
<option value="MELCHOR OCAMPO">Melchor Ocampo</option>
<option value="MEZQUITAL DEL ORO">Mezquital Del Oro</option>
<option value="MIGUEL AUZA">Miguel Auza</option>
<option value="MOMAX">Momax</option>
<option value="MONTE ESCOBEDO">Monte Escobedo</option>
<option value="MORELOS">Morelos</option>
<option value="MOYAHUA DE ESTRADA">Moyahua De Estrada</option>
<option value="NOCHISTLAN DE MEJIA">Nochistlan De Mejia</option>
<option value="NORIA DE ANGELES">Noria De Angeles</option>
<option value="OJOCALIENTE">Ojocaliente</option>
<option value="PANUCO">Panuco</option>
<option value="PINOS">Pinos</option>
<option value="RIO GRANDE">Rio Grande</option>
<option value="SAIN ALTO">Sain Alto</option>
<option value="SANTA MARIA DE LA PAZ">Santa Maria De La Paz</option>
<option value="SOMBRERETE">Sombrerete</option>
<option value="SUSTICACAN">Susticacan</option>
<option value="TABASCO">Tabasco</option>
<option value="TEPECHITLAN">Tepechitlan</option>
<option value="TEPETONGO">Tepetongo</option>
<option value="TEUL DE GONZALEZ ORTEGA">Teul De Gonzalez Ortega</option>
<option value="TLALTENANGO DE SANCHEZ ROMAN">Tlaltenango De Sanchez Roman</option>
<option value="TRANCOSO">Trancoso</option>
<option value="TRINIDAD GARCIA DE LA CADENA">Trinidad Garcia De La Cadena</option>
<option value="VALPARAISO">Valparaiso</option>
<option value="VETAGRANDE">Vetagrande</option>
<option value="VILLA DE COS">Villa De Cos</option>
<option value="VILLA GARCIA">Villa Garcia</option>
<option value="VILLA GONZALEZ ORTEGA">Villa Gonzalez Ortega</option>
<option value="VILLA HIDALGO">Villa Hidalgo</option>
<option value="VILLANUEVA">Villanueva</option>
<option value="ZACATECAS">Zacatecas</option>
      </select>



<li>

      <h3>URL de Lista nominal:</h3>

      <input id="lb_URL_ListaPorEdad" name="lb_URL_ListaPorEdad" type="text" required="required">

</li>

<li>
      <button type="button" class="send" id="send">
        Generar
    </button>
</li>


<li>
      <h4>Lista nominal total:  </h4> 
      <output class="listatotal" id="lb_ListaNominalCalculada" name ="respuesta" for="lb_ListaNominalCalculada"></output>

</li>

<li>
      <h4>Rango de Edad 1</h4>
</li>

<li>
      <span class="mujeres">Lista nominal mujeres 18-24:  </span> 
      <output id="lb_ListaNominalMujeres_18_24" for="lb_ListaNominalMujeres_18_24"></output>


</li>
      <li>
      <span class="hombres">Lista nominal hombres 18-24:  </span> 
      <output id="lb_ListaNominalHombres_18_24" for="lb_ListaNominalHombres_18_24"></output>

</li>

<li>
      <h4>Rango de Edad 2</h4>
</li>

<li>
      <span class="mujeres">Lista nominal mujeres 25-34:  </span> 
      <output id="lb_ListaNominalMujeres_25_34"  for="lb_ListaNominalMujeres_25_34"></output>


</li>
      <li>
      <span class="hombres">Lista nominal hombres 25-34:  </span> 
      <output id="lb_ListaNominalHombres_25_34" for="lb_ListaNominalHombres_25_34"></output>

</li>

<li>
      <h4>Rango de Edad 3</h4>
</li>

<li>
      <span class="mujeres">Lista nominal mujeres 35-49:  </span> 
      <output id="lb_ListaNominalMujeres_35_49" for="lb_ListaNominalMujeres_35_49"></output>


</li>
      <li>
      <span class="hombres">Lista nominal hombres 35-49:  </span> 
      <output id="lb_ListaNominalHombres_35_49" for="lb_ListaNominalHombres_35_49"></output>

</li>

<li>
      <h4>Rango de Edad 4</h4>
</li>

<li>
      <span class="mujeres">Lista nominal mujeres 50-64:  </span> 
      <output id="lb_ListaNominalMujeres_50_64" for="lb_ListaNominalMujeres_50_64"></output>


</li>
      <li>
      <span class="hombres">Lista nominal hombres 50-64:  </span> 
      <output id="lb_ListaNominalHombres_50_64" for="lb_ListaNominalHombres_50_64"></output>

</li>

<li>
      <h4>Rango de Edad 5</h4>
</li>

<li>
      <span class="mujeres">Lista nominal mujeres 65 o más:  </span> 
      <output id="lb_ListaNominalMujeres_65" name ="respuesta" for="lb_ListaNominalMujeres_65"></output>


</li>
      <li>
      <span class="hombres">Lista nominal hombres 65 o más:  </span> 
      <output id="lb_ListaNominalHombres_65" name ="respuesta" for="lb_ListaNominalHombres_65"></output>

</li>


<li>
      <h3 class="h2">Proporción en relación con lista nominal</h3>
</li>

<li>
      <span class="mujeres">Proporción mujeres 18-24:  </span> 
      <output id="lb_ProporcionMujeres_18_24" for="lb_ProporcionMujeres_18_24"></output>


</li>
      <li>
      <span class="hombres">Proporción hombres 18-24:  </span> 
      <output id="lb_ProporcionHombres_18_24" for="lb_ProporcionHombres_18_24"></output>

</li>

<li>
      <span class="mujeres">Proporción mujeres 25-34:  </span> 
      <output id="lb_ProporcionMujeres_25_34"  for="lb_ProporcionMujeres_25_34"></output>


</li>
      <li>
      <span class="hombres">Proporción hombres 25-34:  </span> 
      <output id="lb_ProporcionHombres_25_34" for="lb_ProporcionHombres_25_34"></output>

</li>

<li>
      <span class="mujeres">Proporción mujeres 35-49:  </span> 
      <output id="lb_ProporcionMujeres_35_49" for="lb_ProporcionMujeres_35_49"></output>


</li>
      <li>
      <span class="hombres">Proporción hombres 35-49:  </span> 
      <output id="lb_ProporcionHombres_35_49" for="lb_ProporcionHombres_35_49"></output>

</li>

<li>
      <span class="mujeres">Proporción mujeres 50-64:  </span> 
      <output id="lb_ProporcionMujeres_50_64" for="lb_ProporcionMujeres_50_64"></output>


</li>
      <li>
      <span class="hombres">Proporción hombres 50-64:  </span> 
      <output id="lb_ProporcionHombres_50_64" for="lb_ProporcionHombres_50_64"></output>

</li>

<li>
      <span class="mujeres">Proporción mujeres 65 o más:  </span> 
      <output id="lb_ProporcionMujeres_65" for="lb_ProporcionMujeres_65"></output>


</li>
      <li>
      <span class="hombres">Proporción hombres 65 o más:  </span> 
      <output id="lb_ProporcionHombres_65" for="lb_ProporcionHombres_65"></output>

</li>

</form>

<form id="formularioNumEncuestadores" action="/python/cgi-enabled/calculo_numEncuestadores.py" method="POST">
    @method('PUT')

<li>

      <h3 class="h2">Número de encuestas:</h3>

      <input id="lb_input_numEncuestadores" id="lb_input_numEncuestadores" name="lb_input_numEncuestadores" type="text">

</li>

<li>
      <button type="button" class="sendEncuestadores" id="sendEncuestadores">
        Calcular número de encuestas
    </button>
</li>

<li>
      <span class="mujeres">Encuestas mujeres 18-24:  </span> 
      <output id="lb_encuestadoresMujeres_18_24" for="lb_encuestadoresMujeres_18_24"></output>


</li>
      <li>
      <span class="hombres">Encuestas hombres 18-24:  </span> 
      <output id="lb_encuestadoresHombres_18_24" for="lb_encuestadoresHombres_18_24"></output>

</li>

<li>
      <span class="mujeres">Encuestas mujeres 25-34:  </span> 
      <output id="lb_encuestadoresMujeres_25_34"  for="lb_encuestadoresMujeres_25_34"></output>


</li>
      <li>
      <span class="hombres">Encuestas hombres 25-34:  </span> 
      <output id="lb_encuestadoresHombres_25_34" for="lb_encuestadoresHombres_25_34"></output>

</li>

<li>
      <span class="mujeres">Encuestas mujeres 35-49:  </span> 
      <output id="lb_encuestadoresMujeres_35_49" for="lb_encuestadoresMujeres_35_49"></output>


</li>
      <li>
      <span class="hombres">Encuestas hombres 35-49:  </span> 
      <output id="lb_encuestadoresHombres_35_49" for="lb_encuestadoresHombres_35_49"></output>
</li>

<li>
      <span class="mujeres">Encuestas mujeres 50-64:  </span> 
      <output id="lb_encuestadoresMujeres_50_64" for="lb_encuestadoresMujeres_50_64"></output>
</li>
      <li>
      <span class="hombres">Encuestas hombres 50-64:  </span> 
      <output id="lb_encuestadoresHombres_50_64" for="lb_encuestadoresHombres_50_64"></output>
</li>

<li>
      <span class="mujeres">Encuestas mujeres 65 o más:  </span> 
      <output id="lb_encuestadoresMujeres_65" for="lb_encuestadoresMujeres_65"></output>
</li>
      <li>
      <span class="hombres">Encuestas hombres 65 o más:  </span> 
      <output id="lb_encuestadoresHombres_65" for="lb_encuestadoresHombres_65"></output>
</li>

<div class="col">
   <div class="mb-3 row">
   <button type="button" class="store-button" id="store-button">Registrar resultado</button>
  </div>
 </div>

  </ul>
      
</form>

<script>
        function showSelect() {
          var entidadesSelect = document.getElementById("entidad-select");
          var aguascalientesSelect = document.getElementById("aguascalientes-select");
          var bajacaliforniaSelect = document.getElementById("bajacalifornia-select");
          var bajacaliforniasurSelect = document.getElementById("bajacaliforniasur-select");
          var campecheSelect = document.getElementById("campeche-select");
          var coahuilaSelect = document.getElementById("coahuila-select");
          var colimaSelect = document.getElementById("colima-select");
          var chiapasSelect = document.getElementById("chiapas-select");
          var chihuahuaSelect = document.getElementById("chihuahua-select");
          var ciudaddemexicoSelect = document.getElementById("ciudaddemexico-select");
          var durangoSelect = document.getElementById("durango-select");
          var guanajuatoSelect = document.getElementById("guanajuato-select");
          var guerreroSelect = document.getElementById("guerrero-select");
          var hidalgoSelect = document.getElementById("hidalgo-select");
          var jaliscoSelect = document.getElementById("jalisco-select");
          var mexicoSelect = document.getElementById("mexico-select");
          var michoacanSelect = document.getElementById("michoacan-select");
          var morelosSelect = document.getElementById("morelos-select");
          var nayaritSelect = document.getElementById("nayarit-select");
          var nuevoleonSelect = document.getElementById("nuevoleon-select");
          var oaxacaSelect = document.getElementById("oaxaca-select");
          var pueblaSelect = document.getElementById("puebla-select");
          var queretaroSelect = document.getElementById("queretaro-select");
          var quintanarooSelect = document.getElementById("quintanaroo-select");
          var sanluispotosiSelect = document.getElementById("sanluispotosi-select");
          var sinaloaSelect = document.getElementById("sinaloa-select");
          var sonoraSelect = document.getElementById("sonora-select");
          var tabascoSelect = document.getElementById("tabasco-select");
          var tamaulipasSelect = document.getElementById("tamaulipas-select");
          var tlaxcalaSelect = document.getElementById("tlaxcala-select");
          var veracruzSelect = document.getElementById("veracruz-select");
          var yucatanSelect = document.getElementById("yucatan-select");
          var zacatecasSelect = document.getElementById("zacatecas-select");

          document.getElementById("lb_ListaNominalCalculada").innerHTML = "";
document.getElementById("lb_ListaNominalMujeres_18_24").innerHTML = "";
document.getElementById("lb_ListaNominalHombres_18_24").innerHTML = "";
document.getElementById("lb_ListaNominalMujeres_25_34").innerHTML = "";
document.getElementById("lb_ListaNominalHombres_25_34").innerHTML = "";
document.getElementById("lb_ListaNominalMujeres_35_49").innerHTML = "";
document.getElementById("lb_ListaNominalHombres_35_49").innerHTML = "";
document.getElementById("lb_ListaNominalMujeres_50_64").innerHTML = "";
document.getElementById("lb_ListaNominalHombres_50_64").innerHTML = "";
document.getElementById("lb_ListaNominalMujeres_65").innerHTML = "";
document.getElementById("lb_ListaNominalHombres_65").innerHTML = "";
document.getElementById("lb_ProporcionMujeres_18_24").innerHTML = "";
document.getElementById("lb_ProporcionHombres_18_24").innerHTML = "";
document.getElementById("lb_ProporcionMujeres_25_34").innerHTML = "";
document.getElementById("lb_ProporcionHombres_25_34").innerHTML = "";
document.getElementById("lb_ProporcionMujeres_35_49").innerHTML = "";
document.getElementById("lb_ProporcionHombres_35_49").innerHTML = "";
document.getElementById("lb_ProporcionMujeres_50_64").innerHTML = "";
document.getElementById("lb_ProporcionHombres_50_64").innerHTML = "";
document.getElementById("lb_ProporcionMujeres_65").innerHTML = "";
document.getElementById("lb_ProporcionHombres_65").innerHTML = "";


          if (entidadesSelect.value === "AGUASCALIENTES") {
            aguascalientesSelect.style.display = "block";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
            document.getElementById("lb_municipio").innerHTML = aguascalientesSelect.value;
            
            console.log(lb_municipio.innerHTML)
            console.log(aguascalientesSelect.value)
            console.log(lb_entidad.innerHTML)
          } else if (entidadesSelect.value === "BAJA CALIFORNIA") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "block";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
            document.getElementById("lb_municipio").innerHTML = bajacaliforniaSelect.value;

          } else if (entidadesSelect.value === "BAJA CALIFORNIA SUR") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "block";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
            document.getElementById("lb_municipio").innerHTML = bajacaliforniasurSelect.value;
          } else if (entidadesSelect.value === "CAMPECHE") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "block";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
            document.getElementById("lb_municipio").innerHTML = campecheSelect.value;
          }else if (entidadesSelect.value === "COAHUILA") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "block";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = coahuilaSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "COLIMA") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "block";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = colimaSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "CHIAPAS") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "block";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = chiapasSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "CHIHUAHUA") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "block";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = chihuahuaSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "CIUDAD DE MEXICO") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "block";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = ciudaddemexicoSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "DURANGO") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "block";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = durangoSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "GUANAJUATO") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "block";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = guanajuatoSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "GUERRERO") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "block";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = guerreroSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "HIDALGO") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "block";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = hidalgoSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "JALISCO") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "block";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = jaliscoSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "MEXICO") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "block";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = mexicoSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "MICHOACAN") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "block";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = michoacanSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "MORELOS") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "block";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = morelosSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "NAYARIT") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "block";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = nayaritSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "NUEVO LEON") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "block";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = nuevoleonSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;

          }else if (entidadesSelect.value === "OAXACA") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "block";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = oaxacaSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;

          }else if (entidadesSelect.value === "PUEBLA") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "block";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = pueblaSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "QUERETARO") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "block";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = queretaroSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "QUINTANA ROO") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "block";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = quintanarooSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "SAN LUIS POTOSI") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "block";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = sanluispotosiSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "SINALOA") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "block";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = sinaloaSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "SONORA") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "block";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = sonoraSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "TABASCO") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "block";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = tabascoSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "TAMAULIPAS") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "block";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = tamaulipasSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "TLAXCALA") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "block";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = tlaxcalaSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "VERACRUZ") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "block";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = veracruzSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "YUCATAN") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "block";
            zacatecasSelect.style.display = "none";
            document.getElementById("lb_municipio").innerHTML = yucatanSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          }else if (entidadesSelect.value === "ZACATECAS") {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "block";
            document.getElementById("lb_municipio").innerHTML = zacatecasSelect.value;
            document.getElementById("lb_entidad").innerHTML = entidadesSelect.value;
          } else {
            aguascalientesSelect.style.display = "none";
            bajacaliforniaSelect.style.display = "none";
            bajacaliforniasurSelect.style.display = "none";
            campecheSelect.style.display = "none";
            coahuilaSelect.style.display = "none";
            colimaSelect.style.display = "none";
            chiapasSelect.style.display = "none";
            chihuahuaSelect.style.display = "none";
            ciudaddemexicoSelect.style.display = "none";
            durangoSelect.style.display = "none";
            guanajuatoSelect.style.display = "none";
            guerreroSelect.style.display = "none";
            hidalgoSelect.style.display = "none";
            jaliscoSelect.style.display = "none";
            mexicoSelect.style.display = "none";
            michoacanSelect.style.display = "none";
            morelosSelect.style.display = "none";
            nayaritSelect.style.display = "none";
            nuevoleonSelect.style.display = "none";
            oaxacaSelect.style.display = "none";
            pueblaSelect.style.display = "none";
            queretaroSelect.style.display = "none";
            quintanarooSelect.style.display = "none";
            sanluispotosiSelect.style.display = "none";
            sinaloaSelect.style.display = "none";
            sonoraSelect.style.display = "none";
            tabascoSelect.style.display = "none";
            tamaulipasSelect.style.display = "none";
            tlaxcalaSelect.style.display = "none";
            veracruzSelect.style.display = "none";
            yucatanSelect.style.display = "none";
            zacatecasSelect.style.display = "none";
          }
        }
      </script>

<script>
$(document).ready(function(){
  $('#send').click(function(){

      const municipio = document.getElementById("lb_municipio").innerHTML;
      const entidad = document.getElementById("lb_entidad").innerHTML;
      const URL_lista_poredad = $('[name=lb_URL_ListaPorEdad').val();
      console.log({entidad})
      console.log({municipio})
      console.log({lb_entidad})
      console.log({lb_municipio})

        $.ajax({
          url : '/python/cgi-enabled/calculo_listanominal_rangoedad.py',
          method : 'get',
          data : {municipio_py : municipio, entidad_py : entidad, lista_poredad_py : URL_lista_poredad},
          dataType : 'json',
          success : function(data)
          {
            console.log(data)
            $("#lb_ListaNominalCalculada").html(data[0])
            $("#lb_ListaNominalMujeres_18_24").html(data[1])
            $("#lb_ListaNominalHombres_18_24").html(data[2])
            $("#lb_ListaNominalMujeres_25_34").html(data[3])
            $("#lb_ListaNominalHombres_25_34").html(data[4])
            $("#lb_ListaNominalMujeres_35_49").html(data[5])
            $("#lb_ListaNominalHombres_35_49").html(data[6])
            $("#lb_ListaNominalMujeres_50_64").html(data[7])
            $("#lb_ListaNominalHombres_50_64").html(data[8])
            $("#lb_ListaNominalMujeres_65").html(data[9])
            $("#lb_ListaNominalHombres_65").html(data[10])
            $("#lb_ProporcionMujeres_18_24").html(data[11])
            $("#lb_ProporcionHombres_18_24").html(data[12])
            $("#lb_ProporcionMujeres_25_34").html(data[13])
            $("#lb_ProporcionHombres_25_34").html(data[14])
            $("#lb_ProporcionMujeres_35_49").html(data[15])
            $("#lb_ProporcionHombres_35_49").html(data[16])
            $("#lb_ProporcionMujeres_50_64").html(data[17])
            $("#lb_ProporcionHombres_50_64").html(data[18])
            $("#lb_ProporcionMujeres_65").html(data[19])
            $("#lb_ProporcionHombres_65").html(data[20])
            
            proporcion_18_24_Mujeres = data[11]
            proporcion_18_24_Hombres = data[12]
            proporcion_25_34_Mujeres = data[13]
            proporcion_25_34_Hombres = data[14]
            proporcion_35_49_Mujeres = data[15]
            proporcion_35_49_Hombres = data[16]
            proporcion_50_64_Mujeres = data[17]
            proporcion_50_64_Hombres = data[18]
            proporcion_65_Mujeres = data[19]
            proporcion_65_Hombres = data[20]

          },
            error: function(xhr, textStatus, errorThrown) {
                // Handle any error that occurs during the AJAX request
                alert("Ocurrió un error: \n" + errorThrown );
                console.log(textStatus);
                console.log(errorThrown);
            }
      });    
});
});
</script>
<script>


$(document).ready(function(){
  $('#sendEncuestadores').click(function(){

      const numEncuestadores = $('[name=lb_input_numEncuestadores').val();
      const encuestadores_Mujeres_18_24 = proporcion_18_24_Mujeres
      const encuestadores_Hombres_18_24 = proporcion_18_24_Hombres
      const encuestadores_Mujeres_25_34 = proporcion_25_34_Mujeres
      const encuestadores_Hombres_25_34 = proporcion_25_34_Hombres
      const encuestadores_Mujeres_35_49 = proporcion_35_49_Mujeres
      const encuestadores_Hombres_35_49 = proporcion_35_49_Hombres
      const encuestadores_Mujeres_50_64 = proporcion_50_64_Mujeres
      const encuestadores_Hombres_50_64 = proporcion_50_64_Hombres
      const encuestadores_Mujeres_65 = proporcion_65_Mujeres
      const encuestadores_Hombres_65 = proporcion_65_Hombres
      
      console.log(numEncuestadores)
      console.log(encuestadores_Mujeres_18_24)
      console.log(encuestadores_Hombres_18_24)
      console.log(encuestadores_Mujeres_25_34)
      console.log(encuestadores_Hombres_25_34)
      console.log(encuestadores_Mujeres_35_49)
      console.log(encuestadores_Hombres_35_49)
      console.log(encuestadores_Mujeres_50_64)
      console.log(encuestadores_Hombres_50_64)
      console.log(encuestadores_Mujeres_65)
      console.log(encuestadores_Hombres_65)

        $.ajax({
          url : '/python/cgi-enabled/calculo_numEncuestadores.py',
          method : 'get',
          data : {
                  numEncuestadores_py : numEncuestadores,
                  encuestadores_Mujeres_18_24_py : encuestadores_Mujeres_18_24,
                  encuestadores_Hombres_18_24_py : encuestadores_Hombres_18_24,
                  encuestadores_Mujeres_25_34_py : encuestadores_Mujeres_25_34,
                  encuestadores_Hombres_25_34_py : encuestadores_Hombres_25_34,
                  encuestadores_Mujeres_35_49_py : encuestadores_Mujeres_35_49,
                  encuestadores_Hombres_35_49_py : encuestadores_Hombres_35_49,
                  encuestadores_Mujeres_50_64_py : encuestadores_Mujeres_50_64,
                  encuestadores_Hombres_50_64_py : encuestadores_Hombres_50_64,
                  encuestadores_Mujeres_65_py : encuestadores_Mujeres_65,
                  encuestadores_Hombres_65_py : encuestadores_Hombres_65
                  },
          dataType : 'json',
          success : function(data)
          {
            $("#lb_encuestadoresMujeres_18_24").html(data[0])
            $("#lb_encuestadoresHombres_18_24").html(data[1])
            $("#lb_encuestadoresMujeres_25_34").html(data[2])
            $("#lb_encuestadoresHombres_25_34").html(data[3])
            $("#lb_encuestadoresMujeres_35_49").html(data[4])
            $("#lb_encuestadoresHombres_35_49").html(data[5])
            $("#lb_encuestadoresMujeres_50_64").html(data[6])
            $("#lb_encuestadoresHombres_50_64").html(data[7])
            $("#lb_encuestadoresMujeres_65").html(data[8])
            $("#lb_encuestadoresHombres_65").html(data[9])
            console.log(data)
          },
            error: function(xhr, textStatus, errorThrown) {
                // Handle any error that occurs during the AJAX request
                alert("Ocurrió un error: \n" + errorThrown );
                console.log(textStatus);
                console.log(errorThrown);
            }
      });    
});
});

</script>
<script>
                        $(document).ready(function() {
                            $('#store-button').click(function() {
                              const entidad = document.getElementById("lb_entidad").innerHTML;
                              const municipio = document.getElementById("lb_municipio").innerHTML;
                              const URL_ListaPorEdad = $('[name=lb_URL_ListaPorEdad').val();
                              const ListaNominalCalculada = $('#lb_ListaNominalCalculada').val();
                              const ListaNominalMujeres_18_24 = $('#lb_ListaNominalMujeres_18_24').val();
                              const ListaNominalHombres_18_24 = $('#lb_ListaNominalHombres_18_24').val();
                              const ListaNominalMujeres_25_34 = $('#lb_ListaNominalMujeres_25_34').val();
                              const ListaNominalHombres_25_34 = $('#lb_ListaNominalHombres_25_34').val();
                              const ListaNominalMujeres_35_49 = $('#lb_ListaNominalMujeres_35_49').val();
                              const ListaNominalHombres_35_49 = $('#lb_ListaNominalHombres_35_49').val();
                              const ListaNominalMujeres_50_64 = $('#lb_ListaNominalMujeres_50_64').val();
                              const ListaNominalHombres_50_64 = $('#lb_ListaNominalHombres_50_64').val();
                              const ListaNominalMujeres_65 = $('#lb_ListaNominalMujeres_65').val();
                              const ListaNominalHombres_65 = $('#lb_ListaNominalHombres_65').val();
                              const ProporcionMujeres_18_24 = $('#lb_ProporcionMujeres_18_24').val();
                              const ProporcionHombres_18_24 = $('#lb_ProporcionHombres_18_24').val();
                              const ProporcionMujeres_25_34 = $('#lb_ProporcionMujeres_25_34').val();
                              const ProporcionHombres_25_34 = $('#lb_ProporcionHombres_25_34').val();
                              const ProporcionMujeres_35_49 = $('#lb_ProporcionMujeres_35_49').val();
                              const ProporcionHombres_35_49 = $('#lb_ProporcionHombres_35_49').val();
                              const ProporcionMujeres_50_64 = $('#lb_ProporcionMujeres_50_64').val();
                              const ProporcionHombres_50_64 = $('#lb_ProporcionHombres_50_64').val();
                              const ProporcionMujeres_65 = $('#lb_ProporcionMujeres_65').val();
                              const ProporcionHombres_65 = $('#lb_ProporcionHombres_65').val();
                              const numEncuestadores = $('[name=lb_input_numEncuestadores').val();
                              const EncuestadoresMujeres_18_24 = $('#lb_encuestadoresMujeres_18_24').val();
                              const EncuestadoresHombres_18_24 = $('#lb_encuestadoresHombres_18_24').val();
                              const EncuestadoresMujeres_25_34 = $('#lb_encuestadoresMujeres_25_34').val();
                              const EncuestadoresHombres_25_34 = $('#lb_encuestadoresHombres_25_34').val();
                              const EncuestadoresMujeres_35_49 = $('#lb_encuestadoresMujeres_35_49').val();
                              const EncuestadoresHombres_35_49 = $('#lb_encuestadoresHombres_35_49').val();
                              const EncuestadoresMujeres_50_64 = $('#lb_encuestadoresMujeres_50_64').val();
                              const EncuestadoresHombres_50_64 = $('#lb_encuestadoresHombres_50_64').val();
                              const EncuestadoresMujeres_65 = $('#lb_encuestadoresMujeres_65').val();
                              const EncuestadoresHombres_65 = $('#lb_encuestadoresHombres_65').val();
                              console.log(entidad);
                              console.log(municipio);
                              console.log(URL_ListaPorEdad);
                              console.log(ListaNominalCalculada);
                              console.log(ListaNominalMujeres_18_24);
                              console.log(ListaNominalHombres_18_24);
                              console.log(ListaNominalMujeres_25_34);
                              console.log(ListaNominalHombres_25_34);
                              console.log(ListaNominalMujeres_35_49);
                              console.log(ListaNominalHombres_35_49);
                              console.log(ListaNominalMujeres_50_64);
                              console.log(ListaNominalHombres_50_64);
                              console.log(ListaNominalMujeres_65);
                              console.log(ListaNominalHombres_65);
                              console.log(ProporcionMujeres_18_24);
                              console.log(ProporcionHombres_18_24);
                              console.log(ProporcionMujeres_25_34);
                              console.log(ProporcionHombres_25_34);
                              console.log(ProporcionMujeres_35_49);
                              console.log(ProporcionHombres_35_49);
                              console.log(ProporcionMujeres_50_64);
                              console.log(ProporcionHombres_50_64);
                              console.log(ProporcionMujeres_65);
                              console.log(ProporcionHombres_65);
                              console.log(numEncuestadores);
                              console.log(EncuestadoresMujeres_18_24);
                              console.log(EncuestadoresHombres_18_24);
                              console.log(EncuestadoresMujeres_25_34);
                              console.log(EncuestadoresHombres_25_34);
                              console.log(EncuestadoresMujeres_35_49);
                              console.log(EncuestadoresHombres_35_49);
                              console.log(EncuestadoresMujeres_50_64);
                              console.log(EncuestadoresHombres_50_64);
                              console.log(EncuestadoresMujeres_65);
                              console.log(EncuestadoresHombres_65);
                                $.ajax({
                                    url: '{{ route('listaporedad.store') }}',
                                    method: 'POST',
                                    data: {
                                          _token: '{{ csrf_token() }}',
                                          lb_entidad: entidad,
                                          lb_municipio: municipio,
                                          lb_URL_ListaPorEdad: URL_ListaPorEdad,
                                          lb_ListaNominalCalculada: ListaNominalCalculada,
                                          lb_ListaNominalMujeres_18_24 : ListaNominalMujeres_18_24,
                                          lb_ListaNominalHombres_18_24 : ListaNominalHombres_18_24,
                                          lb_ListaNominalMujeres_25_34 : ListaNominalMujeres_25_34,
                                          lb_ListaNominalHombres_25_34 : ListaNominalHombres_25_34,
                                          lb_ListaNominalMujeres_35_49 : ListaNominalMujeres_35_49,
                                          lb_ListaNominalHombres_35_49 : ListaNominalHombres_35_49,
                                          lb_ListaNominalMujeres_50_64 : ListaNominalMujeres_50_64,
                                          lb_ListaNominalHombres_50_64 : ListaNominalHombres_50_64,
                                          lb_ListaNominalMujeres_65 : ListaNominalMujeres_65,
                                          lb_ListaNominalHombres_65 : ListaNominalHombres_65,
                                          lb_ProporcionMujeres_18_24 : ProporcionMujeres_18_24,
                                          lb_ProporcionHombres_18_24 : ProporcionHombres_18_24,
                                          lb_ProporcionMujeres_25_34 : ProporcionMujeres_25_34,
                                          lb_ProporcionHombres_25_34 : ProporcionHombres_25_34,
                                          lb_ProporcionMujeres_35_49 : ProporcionMujeres_35_49,
                                          lb_ProporcionHombres_35_49 : ProporcionHombres_35_49,
                                          lb_ProporcionMujeres_50_64 : ProporcionMujeres_50_64,
                                          lb_ProporcionHombres_50_64 : ProporcionHombres_50_64,
                                          lb_ProporcionMujeres_65 : ProporcionMujeres_65,
                                          lb_ProporcionHombres_65 : ProporcionHombres_65,
                                          lb_input_numEncuestadores : numEncuestadores,
                                          lb_encuestadoresMujeres_18_24 : EncuestadoresMujeres_18_24,
                                          lb_encuestadoresHombres_18_24 : EncuestadoresHombres_18_24,
                                          lb_encuestadoresMujeres_25_34 : EncuestadoresMujeres_25_34,
                                          lb_encuestadoresHombres_25_34 : EncuestadoresHombres_25_34,
                                          lb_encuestadoresMujeres_35_49 : EncuestadoresMujeres_35_49,
                                          lb_encuestadoresHombres_35_49 : EncuestadoresHombres_35_49,
                                          lb_encuestadoresMujeres_50_64 : EncuestadoresMujeres_50_64,
                                          lb_encuestadoresHombres_50_64 : EncuestadoresHombres_50_64,
                                          lb_encuestadoresMujeres_65 : EncuestadoresMujeres_65,
                                          lb_encuestadoresHombres_65 : EncuestadoresHombres_65
                                    },
                                    dataType: 'json',
                                    success: function(response) {
                                        // Handle the response from the server
                                        location.reload();
                                        alert("Se guardó con éxito");
                                        console.log(response);
                                    },
                                    error: function(xhr, textStatus, errorThrown) {
                                        // Handle any error that occurs during the AJAX request
                                        alert("Ocurrió un error: \n" + errorThrown );
                                        console.log(textStatus);
                                        console.log(errorThrown);
                                    }
                                });
                            });
                        });
                    </script> 
</body>
</html>
@endsection
