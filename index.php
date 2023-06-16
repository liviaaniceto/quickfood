<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  <link rel="shortcut icon" href="./fotos/android-chrome-192x192.png" type="image/x-icon">
  <title>QUICKFOOD</title>
</head>

<body>
  <nav class="menu">
    <img src="./fotos/Main Logo.png">

    <a href="#">Home</a>
    <a href="sobre.html">Sobre</a>
    <a href="contato.html">Contato</a>

    </a>
  </nav><br>
  <script>
    // Array com a relação de estados e cidades
    var estadosECidades = {
      "Acre": ["Acrelândia", "Assis Brasil", "Brasiléia", "Bujari", "Capixaba", "Cruzeiro do Sul", "Epitaciolândia", "Feijó", "Jordão", "Mâncio Lima", "Manoel Urbano", "Marechal Thaumaturgo", "Plácido de Castro", "Porto Acre", "Porto Walter", "Rio Branco", "Rodrigues Alves", "Santa Rosa do Purus", "Sena Madureira", "Senador Guiomard", "Tarauacá", "Xapuri"],
      "Alagoas": ["Água Branca", "Anadia", "Arapiraca", "Atalaia", "Barra de Santo Antônio", "Barra de São Miguel", "Batalha", "Belém", "Belo Monte", "Boca da Mata", "Branquinha", "Cacimbinhas", "Cajueiro", "Campestre", "Campo Alegre", "Campo Grande", "Canapi", "Capela", "Carneiros", "Chã Preta", "Coité do Nóia", "Colônia Leopoldina", "Coqueiro Seco", "Coruripe", "Craíbas", "Delmiro Gouveia", "Dois Riachos", "Estrela de Alagoas", "Feira Grande", "Feliz Deserto", "Flexeiras", "Girau do Ponciano", "Ibateguara", "Igaci", "Igreja Nova", "Inhapi", "Jacaré dos Homens", "Jacuípe", "Japaratinga", "Jaramataia", "Jequiá da Praia", "Joaquim Gomes", "Jundiá", "Junqueiro", "Lagoa da Canoa", "Limoeiro de Anadia", "Maceió", "Major Isidoro", "Mar Vermelho", "Maragogi", "Maravilha", "Marechal Deodoro", "Maribondo", "Mata Grande", "Matriz de Camaragibe", "Messias", "Minador do Negrão", "Monteirópolis", "Murici", "Novo Lino", "Olho d'Água das Flores", "Olho d'Água do Casado", "Olho d'Água Grande", "Olivença", "Ouro Branco", "Palestina", "Palmeira dos Índios", "Pão de Açúcar", "Pariconha", "Paripueira", "Passo de Camaragibe", "Paulo Jacinto", "Penedo", "Piaçabuçu", "Pilar", "Pindoba", "Piranhas", "Poço das Trincheiras", "Porto Calvo", "Porto de Pedras", "Porto Real do Colégio", "Quebrangulo", "Rio Largo", "Roteiro", "Santa Luzia do Norte", "Santana do Ipanema", "Santana do Mundaú", "São Brás", "São José da Laje", "São José da Tapera", "São Luís do Quitunde", "São Miguel dos Campos", "São Miguel dos Milagres", "São Sebastião", "Satuba", "Senador Rui Palmeira", "Tanque d'Arca", "Taquarana", "Teotônio Vilela", "Traipu", "União dos Palmares", "Viçosa"],
      "Amazonas": ["Alvarães", "Amaturá", "Anamã", "Anori", "Apuí", "Atalaia do Norte", "Autazes", "Barcelos", "Barreirinha", "Benjamin Constant", "Beruri", "Boa Vista do Ramos", "Boca do Acre", "Borba", "Caapiranga", "Canutama", "Carauari", "Careiro", "Careiro da Várzea", "Coari", "Codajás", "Eirunepé", "Envira", "Fonte Boa", "Guajará", "Humaitá", "Ipixuna", "Iranduba", "Itacoatiara", "Itamarati", "Itapiranga", "Japurá", "Juruá", "Jutaí", "Lábrea", "Manacapuru", "Manaquiri", "Manaus", "Manicoré", "Maraã", "Maués", "Nhamundá", "Nova Olinda do Norte", "Novo Airão", "Novo Aripuanã", "Parintins", "Pauini", "Presidente Figueiredo", "Rio Preto da Eva", "Santa Isabel do Rio Negro", "Santo Antônio do Içá", "São Gabriel da Cachoeira", "São Paulo de Olivença", "São Sebastião do Uatumã", "Silves", "Tabatinga", "Tapauá", "Tefé", "Tonantins", "Uarini", "Urucará", "Urucurituba"],
      "Amapá": ["Amapá", "Calçoene", "Cutias", "Ferreira Gomes", "Itaubal", "Laranjal do Jari", "Macapá", "Mazagão", "Oiapoque", "Pedra Branca do Amapari", "Porto Grande", "Pracuúba", "Santana", "Serra do Navio", "Tartarugalzinho", "Vitória do Jari"],
      "Ceará": ["Abaiara", "Acarape", "Acaraú", "Acopiara", "Aiuaba", "Alcântaras", "Altaneira", "Alto Santo", "Amontada", "Antonina do Norte", "Apuiarés", "Aquiraz", "Aracati", "Aracoiaba", "Ararendá", "Araripe", "Aratuba", "Arneiroz", "Assaré", "Aurora", "Baixio", "Banabuiú", "Barbalha", "Barreira", "Barro", "Barroquinha", "Baturité", "Beberibe", "Bela Cruz", "Boa Viagem", "Brejo Santo", "Camocim", "Campos Sales", "Canindé", "Capistrano", "Caridade", "Cariré", "Caririaçu", "Cariús", "Carnaubal", "Cascavel", "Catarina", "Catunda", "Caucaia", "Cedro", "Chaval", "Choró", "Chorozinho", "Coreaú", "Crateús", "Crato", "Croatá", "Cruz", "Deputado Irapuan Pinheiro", "Ererê", "Eusébio", "Farias Brito", "Forquilha", "Fortaleza", "Fortim", "Frecheirinha", "General Sampaio", "Graça", "Granja", "Granjeiro", "Groaíras", "Guaiúba", "Guaraciaba do Norte", "Guaramiranga", "Hidrolândia", "Horizonte", "Ibaretama", "Ibiapina", "Ibicuitinga", "Icapuí", "Icó", "Iguatu", "Independência", "Ipaporanga", "Ipaumirim", "Ipu", "Ipueiras", "Iracema", "Irauçuba", "Itaiçaba", "Itaitinga", "Itapagé", "Itapipoca", "Itapiúna", "Itarema", "Itatira", "Jaguaretama", "Jaguaribara", "Jaguaribe", "Jaguaruana", "Jardim", "Jati", "Jijoca de Jericoacoara", "Juazeiro do Norte", "Jucás", "Lavras da Mangabeira", "Limoeiro do Norte", "Madalena", "Maracanaú", "Maranguape", "Marco", "Martinópole", "Massapê", "Mauriti", "Meruoca", "Milagres", "Milhã", "Miraíma", "Missão Velha", "Mombaça", "Monsenhor Tabosa", "Morada Nova", "Moraújo", "Morrinhos", "Mucambo", "Mulungu", "Nova Olinda", "Nova Russas", "Novo Oriente", "Ocara", "Orós", "Pacajus", "Pacatuba", "Pacoti", "Pacujá", "Palhano", "Palmácia", "Paracuru", "Paraipaba", "Parambu"],
      "Espírito Santo": ["Serra", "Vila Velha", "Cariacica", "Vitória", "Cachoeiro de Itapemirim", "Linhares", "São Mateus", "Guarapari", "Colatina", "Aracruz", "Viana", "Nova Venécia", "Barra de São Francisco", "Santa Maria de Jetibá"],
      "Goiás": ["Goiânia", "Aparecida de Goiânia", "Anápolis", "Rio Verde", "Águas Lindas de Goiás", "Valparaíso de Goiás", "Luziânia", "Trindade", "Itumbiara", "Formosa", "Planaltina", "Jataí", "Caldas Novas", "Cidade Ocidental", "Goianésia"],
      "Maranhão": ["São Luís", "Imperatriz", "São José de Ribamar", "Paço do Lumiar", "Barra do Corda", "Caxias", "Timon", "Açailândia", "Grajaú", "Balsas", "Bacabal", "Santa Inês", "Codó", "Barreirinhas", "Pinheiro", "Chapadinha", "Tutóia", "Santa Luzia", "Itapecuru-Mirim", "Buriticupu", "Coroatá", "Presidente Dutra", "Zé Doca", "Colinas"],
      "Mato Grosso": ["Água Boa", "Alta Floresta", "Alto Araguaia", "Alto Garças", "Alto Paraguai", "Alto Taquari", "Apiacás", "Araguaiana", "Araguainha", "Araputanga", "Arenápolis", "Aripuanã", "Barão de Melgaço", "Barra do Bugres", "Barra do Garças", "Bom Jesus do Araguaia", "Brasnorte", "Cáceres", "Campinápolis", "Campo Novo do Parecis", "Campo Verde", "Campos de Júlio", "Canabrava do Norte", "Canarana", "Carlinda", "Castanheira", "Chapada dos Guimarães", "Cláudia", "Cocalinho", "Colíder", "Colniza", "Comodoro", "Confresa", "Conquista D'Oeste", "Cotriguaçu", "Curvelândia", "Denise", "Diamantino", "Dom Aquino", "Feliz Natal", "Figueirópolis D'Oeste", "Gaúcha do Norte", "General Carneiro", "Glória D'Oeste", "Guarantã do Norte", "Guiratinga", "Indiavaí", "Ipiranga do Norte", "Itanhangá", "Itaúba", "Itiquira", "Jaciara", "Jangada", "Jauru", "Juara", "Juína", "Juruena", "Juscimeira", "Lambari D'Oeste", "Lucas do Rio Verde", "Luciara", "Marcelândia", "Matupá", "Mirassol d'Oeste", "Nobres", "Nortelândia", "Nossa Senhora do Livramento", "Nova Bandeirantes", "Nova Brasilândia", "Nova Canaã do Norte", "Nova Guarita", "Nova Lacerda", "Nova Marilândia", "Nova Maringá", "Nova Monte Verde", "Nova Mutum", "Nova Nazaré", "Nova Olímpia", "Nova Santa Helena", "Nova Ubiratã", "Nova Xavantina", "Novo Horizonte do Norte", "Novo Mundo", "Novo Santo Antônio", "Novo São Joaquim", "Paranaíta", "Paranatinga", "Pedra Preta", "Peixoto de Azevedo"],
      "Mato Grosso do Sul": ["Água Clara", "Alcinópolis", "Amambaí", "Anastácio", "Anaurilândia", "Angélica", "Antônio João", "Aparecida do Taboado", "Aquidauana", "Aral Moreira", "Bandeirantes", "Bataguassu", "Bataiporã", "Bela Vista", "Bodoquena", "Bonito", "Brasilândia", "Caarapó", "Camapuã", "Campo Grande", "Caracol", "Cassilândia", "Chapadão do Sul", "Corguinho", "Coronel Sapucaia", "Corumbá", "Costa Rica", "Coxim", "Deodápolis", "Dois Irmãos do Buriti", "Douradina", "Dourados", "Eldorado", "Fátima do Sul", "Figueirão", "Glória de Dourados", "Guia Lopes da Laguna", "Iguatemi", "Inocência", "Itaporã", "Itaquiraí", "Ivinhema", "Japorã", "Jaraguari", "Jardim", "Jateí", "Juti", "Ladário", "Laguna Carapã", "Maracaju", "Miranda", "Mundo Novo", "Naviraí", "Nioaque", "Nova Alvorada do Sul", "Nova Andradina", "Novo Horizonte do Sul", "Paranaíba", "Paranhos", "Pedro Gomes", "Ponta Porã", "Porto Murtinho", "Ribas do Rio Pardo", "Rio Brilhante", "Rio Negro", "Rio Verde de Mato Grosso", "Rochedo", "Santa Rita do Pardo", "São Gabriel do Oeste", "Selvíria", "Sete Quedas", "Sidrolândia", "Sonora", "Tacuru", "Taquarussu", "Terenos", "Três Lagoas", "Vicentina"],
      "Minas Gerais": ["Aguanil", "Águas Formosas", "Águas Vermelhas", "Aimorés", "Aiuruoca", "Alagoa", "Albertina", "Além Paraíba", "Alfenas", "Alfredo Vasconcelos", "Almenara", "Alpercata", "Alpinópolis", "Alterosa", "Alto Caparaó", "Alto Jequitibá", "Alto Rio Doce", "Alvarenga", "Alvinópolis", "Alvorada de Minas", "Amparo do Serra", "Andradas", "Andrelândia", "Angelândia", "Antônio Carlos", "Antônio Dias", "Antônio Prado de Minas", "Araçaí", "Aracitaba", "Araçuaí", "Araguari", "Arantina", "Araponga", "Araporã", "Arapuá", "Araújos", "Araxá", "Arceburgo", "Arcos", "Areado", "Argirita", "Aricanduva", "Arinos", "Astolfo Dutra", "Ataléia", "Augusto de Lima", "Baependi", "Baldim", "Bambuí", "Bandeira", "Bandeira do Sul", "Barão de Cocais", "Barão de Monte Alto", "Barbacena", "Barra Longa", "Barroso", "Bela Vista de Minas", "Belmiro Braga", "Belo Horizonte", "Belo Oriente", "Belo Vale", "Berilo", "Berizal", "Bertópolis", "Betim", "Bias Fortes", "Bicas", "Biquinhas", "Boa Esperança", "Bocaina de Minas", "Bocaiúva", "Bom Despacho", "Bom Jardim de Minas", "Bom Jesus da Penha", "Bom Jesus do Amparo", "Bom Jesus do Galho", "Bom Repouso", "Bom Sucesso", "Bonfim", "Bonfinópolis de Minas", "Bonito de Minas", "Borda da Mata", "Botelhos", "Botumirim", "Brás Pires", "Brasilândia de Minas", "Brasília de Minas", "Brasópolis", "Braúnas", "Brumadinho", "Bueno Brandão", "Buenópolis", "Bugre", "Buritis", "Buritizeiro", "Cabeceira Grande", "Cabo Verde", "Cachoeira da Prata", "Cachoeira de Minas", "Cachoeira de Pajeú", "Cachoeira Dourada", "Caetanópolis", "Caeté", "Caiana", "Cajuri", "Caldas", "Camacho", "Camanducaia", "Cambuí", "Cambuquira", "Campanário", "Campanha"],
      "Pará": ["Abel Figueiredo", "Acará", "Afuá", "Água Azul do Norte", "Alenquer", "Almeirim", "Altamira", "Anajás", "Ananindeua", "Anapu", "Augusto Corrêa", "Aurora do Pará", "Aveiro", "Bagre", "Baião", "Bannach", "Barcarena", "Belém", "Belterra", "Benevides", "Bom Jesus do Tocantins", "Bonito", "Bragança", "Brasil Novo", "Brejo Grande do Araguaia", "Breu Branco", "Breves", "Bujaru", "Cachoeira do Arari", "Cachoeira do Piriá", "Cametá", "Canaã dos Carajás", "Capanema", "Capitão Poço", "Castanhal", "Chaves", "Colares", "Conceição do Araguaia", "Concórdia do Pará", "Cumaru do Norte", "Curionópolis", "Curralinho", "Curuá", "Curuçá", "Dom Eliseu", "Eldorado dos Carajás", "Faro", "Floresta do Araguaia", "Garrafão do Norte", "Goianésia do Pará", "Gurupá", "Igarapé-Açu", "Igarapé-Miri", "Inhangapi", "Ipixuna do Pará", "Irituia", "Itaituba", "Itupiranga", "Jacareacanga", "Jacundá", "Juruti", "Limoeiro do Ajuru", "Mãe do Rio", "Magalhães Barata", "Marabá", "Maracanã", "Marapanim", "Marituba", "Medicilândia", "Melgaço", "Mocajuba", "Moju", "Monte Alegre", "Muaná", "Nova Esperança do Piriá", "Nova Ipixuna", "Nova Timboteua", "Novo Progresso", "Novo Repartimento", "Óbidos", "Oeiras do Pará", "Oriximiná", "Ourém", "Ourilândia do Norte", "Pacajá", "Palestina do Pará", "Paragominas", "Parauapebas", "Pau D'Arco", "Peixe-Boi", "Piçarra", "Placas", "Ponta de Pedras", "Portel", "Porto de Moz", "Prainha", "Primavera", "Quatipuru", "Redenção", "Rio Maria", "Rondon do Pará", "Rurópolis", "Salinópolis", "Salvaterra", "Santa Bárbara do Pará", "Santa Cruz do Arari", "Santa Izabel do Pará", "Santa Luzia do Pará", "Santa Maria das Barreiras", "Santa Maria do Pará", "Santana do Araguaia", "Santarém", "Santarém Novo", "Santo Antônio do Tauá", "São Caetano de Odivelas", "São Domingos do Araguaia"],
      "Paraíba": ["Aroeiras", "Assunção", "Baía da Traição", "Bananeiras", "Baraúna", "Barra de Santa Rosa", "Barra de Santana", "Barra de São Miguel", "Bayeux", "Belém", "Belém do Brejo do Cruz", "Bernardino Batista", "Boa Ventura", "Boa Vista", "Bom Jesus", "Bom Sucesso", "Bonito de Santa Fé", "Boqueirão", "Borborema", "Brejo do Cruz", "Brejo dos Santos", "Caaporã", "Cabaceiras", "Cabedelo", "Cachoeira dos Índios", "Cacimba de Areia", "Cacimba de Dentro", "Cacimbas", "Caiçara", "Cajazeiras", "Cajazeirinhas", "Caldas Brandão", "Camalaú", "Campina Grande", "Campo de Santana", "Capim", "Caraúbas", "Carrapateira", "Casserengue", "Catingueira", "Catolé do Rocha", "Caturité", "Conceição", "Condado", "Conde", "Congo", "Coremas", "Coxixola", "Cruz do Espírito Santo", "Cubati", "Cuité", "Cuité de Mamanguape", "Cuitegi", "Curral de Cima", "Curral Velho", "Damião", "Desterro", "Diamante", "Dona Inês", "Duas Estradas", "Emas", "Esperança", "Fagundes", "Frei Martinho", "Gado Bravo", "Guarabira", "Gurinhém", "Gurjão", "Ibiara", "Igaracy", "Imaculada", "Ingá", "Itabaiana", "Itaporanga", "Itapororoca", "Itatuba", "Jacaraú", "Jericó", "João Pessoa", "Joca Claudino", "Juarez Távora", "Juazeirinho", "Junco do Seridó", "Juripiranga", "Juru", "Lagoa", "Lagoa de Dentro", "Lagoa Seca", "Lastro", "Livramento", "Logradouro", "Lucena", "Mãe d'Água", "Malta"],
      "Paraná": ["Abatiá", "Adrianópolis", "Agudos do Sul", "Almirante Tamandaré", "Altamira do Paraná", "Altônia", "Alto Paraná", "Alto Piquiri", "Alvorada do Sul", "Amaporã", "Ampére", "Anahy", "Andirá", "Ângulo", "Antonina", "Antônio Olinto", "Apucarana", "Arapongas", "Arapoti", "Arapuã", "Araruna", "Araucária", "Ariranha do Ivaí", "Assaí", "Assis Chateaubriand", "Astorga", "Atalaia", "Balsa Nova", "Bandeirantes", "Barbosa Ferraz", "Barra do Jacaré", "Barracão", "Bela Vista da Caroba", "Bela Vista do Paraíso", "Bituruna", "Boa Esperança", "Boa Esperança do Iguaçu", "Boa Ventura de São Roque", "Boa Vista da Aparecida", "Bocaiúva do Sul", "Bom Jesus do Sul", "Bom Sucesso", "Bom Sucesso do Sul", "Borrazópolis", "Braganey", "Brasilândia do Sul", "Cafeara", "Cafelândia", "Cafezal do Sul", "Califórnia", "Cambará", "Cambé", "Cambira", "Campina da Lagoa", "Campina do Simão", "Campina Grande do Sul", "Campo Bonito", "Campo do Tenente", "Campo Largo", "Campo Magro", "Campo Mourão", "Cândido de Abreu", "Candói", "Cantagalo", "Capanema", "Capitão Leônidas Marques", "Carambeí", "Carlópolis", "Cascavel", "Castro", "Catanduvas", "Centenário do Sul", "Cerro Azul", "Céu Azul", "Chopinzinho", "Cianorte", "Cidade Gaúcha", "Clevelândia", "Colombo", "Colorado", "Congonhinhas", "Conselheiro Mairinck", "Contenda", "Corbélia", "Cornélio Procópio", "Coronel Domingos Soares", "Coronel Vivida", "Corumbataí do Sul", "Cruz Machado", "Cruzeiro do Iguaçu", "Cruzeiro do Oeste", "Cruzeiro do Sul", "Cruzmaltina", "Curitiba", "Curiúva", "Diamante d'Oeste", "Diamante do Norte", "Diamante do Sul", "Dois Vizinhos", "Douradina", "Doutor Camargo", "Doutor Ulysses", "Enéas Marques", "Engenheiro Beltrão", "Esperança Nova", "Entre Rios do Oeste", "Esperança Nova", "Espigão Alto do Iguaçu", "Farol", "Faxinal", "Fazenda Rio Grande", "Fênix", "Fernandes Pinheiro"],
      "Pernambuco": ["Abreu e Lima", "Afogados da Ingazeira", "Afrânio", "Agrestina", "Água Preta", "Águas Belas", "Alagoinha", "Aliança", "Altinho", "Amaraji", "Angelim", "Aracoiaba", "Araripina", "Arcoverde", "Barra de Guabiraba", "Barreiros", "Belém de Maria", "Belém do São Francisco", "Belo Jardim", "Betânia", "Bezerros", "Bodocó", "Bom Conselho", "Bom Jardim", "Bonito", "Brejão", "Brejinho", "Brejo da Madre de Deus", "Buenos Aires", "Buíque", "Cabo de Santo Agostinho", "Cabrobó", "Cachoeirinha", "Caetés", "Calçado", "Calumbi", "Camaragibe", "Camocim de São Félix", "Camutanga", "Canhotinho", "Capoeiras", "Carnaíba", "Carnaubeira da Penha", "Carpina", "Caruaru", "Casinhas", "Catende", "Cedro", "Chã de Alegria", "Chã Grande", "Condado", "Correntes", "Cortês", "Cumaru", "Cupira", "Custódia", "Dormentes", "Escada", "Exu", "Feira Nova", "Fernando de Noronha", "Ferreiros", "Flores", "Floresta", "Frei Miguelinho", "Gameleira", "Garanhuns", "Glória do Goitá", "Goiana", "Granito", "Gravatá", "Iati", "Ibimirim", "Ibirajuba", "Igarassu", "Iguaraci", "Ilha de Itamaracá", "Inajá", "Ingazeira", "Ipojuca", "Ipubi", "Itacuruba", "Itaíba", "Itambé", "Itapetim", "Itapissuma", "Itaquitinga", "Jaboatão dos Guararapes", "Jaqueira", "Jataúba", "Jatobá", "João Alfredo", "Joaquim Nabuco", "Jucati", "Jupi", "Jurema", "Lagoa do Carro", "Lagoa do Itaenga", "Lagoa do Ouro", "Lagoa dos Gatos", "Lagoa Grande", "Lajedo", "Limoeiro", "Macaparana", "Machados", "Manari", "Maraial", "Mirandiba", "Moreilândia", "Moreno", "Nazaré da Mata", "Olinda", "Orobó", "Orocó", "Ouricuri", "Palmares", "Palmeirina", "Panelas", "Paranatama", "Parnamirim", "Passira", "Paudalho", "Paulista", "Pedra", "Pesqueira", "Petrolândia", "Petrolina", "Poção", "Pombos"],
      "Piauí": ["Acauã", "Agricolândia", "Água Branca", "Alagoinha do Piauí", "Alegrete do Piauí", "Alto Longá", "Altos", "Alvorada do Gurguéia", "Amarante", "Angical do Piauí", "Anísio de Abreu", "Antônio Almeida", "Aroazes", "Aroeiras do Itaim", "Arraial", "Assunção do Piauí", "Avelino Lopes", "Baixa Grande do Ribeiro", "Barra D'Alcântara", "Barras", "Barreiras do Piauí", "Barro Duro", "Batalha", "Bela Vista do Piauí", "Belém do Piauí", "Beneditinos", "Bertolínia", "Betânia do Piauí", "Boa Hora", "Bocaina", "Bom Jesus", "Bom Princípio do Piauí", "Bonfim do Piauí", "Boqueirão do Piauí", "Brasileira", "Brejo do Piauí", "Buriti dos Lopes", "Buriti dos Montes", "Cabeceiras do Piauí", "Cajazeiras do Piauí", "Cajueiro da Praia", "Caldeirão Grande do Piauí", "Campinas do Piauí", "Campo Alegre do Fidalgo", "Campo Grande do Piauí", "Campo Largo do Piauí", "Campo Maior", "Canavieira", "Canto do Buriti", "Capitão de Campos", "Capitão Gervásio Oliveira", "Caracol", "Caraúbas do Piauí", "Caridade do Piauí", "Castelo do Piauí", "Caxingó", "Cocal", "Cocal de Telha", "Cocal dos Alves", "Coivaras", "Colônia do Gurguéia", "Colônia do Piauí", "Conceição do Canindé", "Coronel José Dias", "Corrente", "Cristalândia do Piauí", "Cristino Castro", "Curimatá", "Currais", "Curral Novo do Piauí", "Curralinhos", "Demerval Lobão", "Dirceu Arcoverde", "Dom Expedito Lopes", "Dom Inocêncio", "Domingos Mourão", "Elesbão Veloso", "Eliseu Martins", "Esperantina", "Fartura do Piauí", "Flores do Piauí", "Floresta do Piauí", "Floriano", "Francinópolis", "Francisco Ayres", "Francisco Macedo", "Francisco Santos", "Fronteiras", "Geminiano", "Gilbués", "Guadalupe", "Guaribas", "Hugo Napoleão", "Ilha Grande", "Inhuma", "Ipiranga do Piauí", "Isaías Coelho", "Itainópolis", "Itaueira", "Jacobina do Piauí", "Jaicós", "Jardim do Mulato"],
      "Rio de Janeiro": ["Angra dos Reis", "Aperibé", "Araruama", "Areal", "Armação dos Búzios", "Arraial do Cabo", "Barra do Piraí", "Barra Mansa", "Belford Roxo", "Bom Jardim", "Bom Jesus do Itabapoana", "Cabo Frio", "Cachoeiras de Macacu", "Cambuci", "Campos dos Goytacazes", "Cantagalo", "Carapebus", "Cardoso Moreira", "Carmo", "Casimiro de Abreu", "Comendador Levy Gasparian", "Conceição de Macabu", "Cordeiro", "Duas Barras", "Duque de Caxias", "Engenheiro Paulo de Frontin", "Guapimirim", "Iguaba Grande", "Itaboraí", "Itaguaí", "Italva", "Itaocara", "Itaperuna", "Itatiaia", "Japeri", "Laje do Muriaé", "Macaé", "Macuco", "Magé", "Mangaratiba", "Maricá", "Mendes", "Mesquita", "Miguel Pereira", "Miracema", "Natividade", "Nilópolis", "Niterói", "Nova Friburgo", "Nova Iguaçu", "Paracambi", "Paraíba do Sul", "Parati", "Paty do Alferes", "Petrópolis", "Pinheiral", "Piraí", "Porciúncula", "Porto Real", "Quatis", "Queimados", "Quissamã", "Resende", "Rio Bonito", "Rio Claro", "Rio das Flores", "Rio das Ostras", "Rio de Janeiro", "Santa Maria Madalena", "Santo Antônio de Pádua", "São Fidélis", "São Francisco de Itabapoana", "São Gonçalo", "São João da Barra", "São João de Meriti", "São José de Ubá", "São José do Vale do Rio Preto", "São Pedro da Aldeia", "São Sebastião do Alto", "Sapucaia", "Saquarema", "Seropédica", "Silva Jardim", "Sumidouro", "Tanguá", "Teresópolis", "Trajano de Moraes", "Três Rios", "Valença", "Varre-Sai", "Vassouras", "Volta Redonda"],
      "Rio Grande do Norte": ["Acari", "Açu", "Afonso Bezerra", "Água Nova", "Alexandria", "Almino Afonso", "Alto do Rodrigues", "Angicos", "Antônio Martins", "Apodi", "Areia Branca", "Arês", "Augusto Severo", "Baía Formosa", "Baraúna", "Barcelona", "Bento Fernandes", "Bodó", "Bom Jesus", "Brejinho", "Caiçara do Norte", "Caiçara do Rio do Vento", "Caicó", "Campo Redondo", "Canguaretama", "Caraúbas", "Carnaúba dos Dantas", "Carnaubais", "Ceará-Mirim", "Cerro Corá", "Coronel Ezequiel", "Coronel João Pessoa", "Cruzeta", "Currais Novos", "Doutor Severiano", "Encanto", "Equador", "Espírito Santo", "Extremoz", "Felipe Guerra", "Fernando Pedroza", "Florânia", "Francisco Dantas", "Frutuoso Gomes", "Galinhos", "Goianinha", "Governador Dix-Sept Rosado", "Grossos", "Guamaré", "Ielmo Marinho", "Ipanguaçu", "Ipueira", "Itajá", "Itaú", "Jaçanã", "Jandaíra", "Janduís", "Januário Cicco", "Japi", "Jardim de Angicos", "Jardim de Piranhas", "Jardim do Seridó", "João Câmara", "João Dias", "José da Penha", "Jucurutu", "Jundiá", "Lagoa d'Anta", "Lagoa de Pedras", "Lagoa de Velhos", "Lagoa Nova", "Lagoa Salgada", "Lajes", "Lajes Pintadas", "Lucrécia", "Luís Gomes"],
      "Rio Grande do Sul": ["Aceguá", "Água Santa", "Agudo", "Ajuricaba", "Alecrim", "Alegrete", "Alegria", "Almirante Tamandaré do Sul", "Alpestre", "Alto Alegre", "Alto Feliz", "Alvorada", "Amaral Ferrador", "Ametista do Sul", "André da Rocha", "Anta Gorda", "Antônio Prado", "Arambaré", "Araricá", "Aratiba", "Arroio do Meio", "Arroio do Padre", "Arroio do Sal", "Arroio do Tigre", "Arroio dos Ratos", "Arroio Grande", "Arvorezinha", "Augusto Pestana", "Áurea", "Bagé", "Balneário Pinhal", "Barão", "Barão de Cotegipe", "Barão do Triunfo", "Barra do Guarita", "Barra do Quaraí", "Barra do Ribeiro", "Barra do Rio Azul", "Barra Funda", "Barracão", "Barros Cassal", "Benjamin Constant do Sul", "Bento Gonçalves", "Boa Vista das Missões", "Boa Vista do Buricá", "Boa Vista do Cadeado", "Boa Vista do Incra", "Boa Vista do Sul", "Bom Jesus", "Bom Princípio", "Bom Progresso", "Bom Retiro do Sul", "Boqueirão do Leão", "Bossoroca", "Bozano", "Braga", "Brochier", "Butiá", "Caçapava do Sul", "Cacequi", "Cachoeira do Sul", "Cachoeirinha", "Cacique Doble", "Caibaté", "Caiçara", "Camaquã", "Camargo", "Cambará do Sul", "Campestre da Serra", "Campina das Missões", "Campinas do Sul", "Campo Bom", "Campo Novo", "Campos Borges", "Candelária", "Cândido Godói", "Candiota", "Canela", "Canguçu", "Canoas", "Canudos do Vale", "Capão Bonito do Sul", "Capão da Canoa", "Capão do Cipó", "Capão do Leão", "Capela de Santana", "Capitão", "Capivari do Sul", "Caraá", "Carazinho", "Carlos Barbosa", "Carlos Gomes", "Casca"],
      "Rondônia": ["Alta Floresta d'Oeste", "Alto Alegre do Parecis", "Alto Paraíso", "Alvorada d'Oeste", "Ariquemes", "Buritis", "Cabixi", "Cacaulândia", "Cacoal", "Campo Novo de Rondônia", "Candeias do Jamari", "Castanheiras", "Cerejeiras", "Chupinguaia", "Colorado do Oeste", "Corumbiara", "Costa Marques", "Cujubim", "Espigão d'Oeste", "Governador Jorge Teixeira", "Guajará-Mirim", "Itapuã do Oeste", "Jaru", "Ji-Paraná", "Machadinho d'Oeste", "Ministro Andreazza", "Mirante da Serra", "Monte Negro", "Nova Brasilândia d'Oeste", "Nova Mamoré", "Nova União", "Novo Horizonte do Oeste", "Ouro Preto do Oeste", "Parecis", "Pimenta Bueno", "Pimenteiras do Oeste", "Porto Velho", "Presidente Médici", "Primavera de Rondônia", "Rio Crespo", "Rolim de Moura", "Santa Luzia d'Oeste", "São Felipe d'Oeste", "São Francisco do Guaporé", "São Miguel do Guaporé", "Seringueiras", "Teixeirópolis", "Theobroma", "Urupá", "Vale do Anari", "Vale do Paraíso", "Vilhena"],
      "Roraima": ["Alto Alegre", "Amajari", "Boa Vista", "Bonfim", "Cantá", "Caracaraí", "Caroebe", "Iracema", "Mucajaí", "Normandia", "Pacaraima", "Rorainópolis", "São João da Baliza", "São Luiz", "Uiramutã"],
      "Santa Catarina": ["Abdon Batista", "Abelardo Luz", "Agrolândia", "Agronômica", "Água Doce", "Águas de Chapecó", "Águas Frias", "Águas Mornas", "Alfredo Wagner", "Alto Bela Vista", "Anchieta", "Angelina", "Anita Garibaldi", "Anitápolis", "Antônio Carlos", "Apiúna", "Arabutã", "Araquari", "Araranguá", "Armazém", "Arroio Trinta", "Arvoredo", "Ascurra", "Atalanta", "Aurora", "Balneário Arroio do Silva", "Balneário Barra do Sul", "Balneário Camboriú", "Balneário Gaivota", "Bandeirante", "Barra Bonita", "Barra Velha", "Bela Vista do Toldo", "Belmonte", "Benedito Novo", "Biguaçu", "Blumenau", "Bocaina do Sul", "Bom Jardim da Serra", "Bom Jesus", "Bom Jesus do Oeste", "Bom Retiro", "Bombinhas", "Botuverá", "Braço do Norte", "Braço do Trombudo", "Brunópolis", "Brusque", "Caçador", "Caibi", "Calmon", "Camboriú", "Campo Alegre", "Campo Belo do Sul", "Campo Erê", "Campos Novos", "Canelinha", "Canoinhas", "Capão Alto", "Capinzal", "Capivari de Baixo", "Catanduvas", "Caxambu do Sul", "Celso Ramos", "Cerro Negro", "Chapadão do Lageado", "Chapecó", "Cocal do Sul", "Concórdia", "Cordilheira Alta", "Coronel Freitas", "Coronel Martins", "Correia Pinto", "Corupá", "Criciúma", "Cunha Porã", "Cunhataí", "Curitibanos", "Descanso", "Dionísio Cerqueira", "Dona Emma", "Doutor Pedrinho", "Entre Rios", "Ermo", "Erval Velho", "Faxinal dos Guedes", "Flor do Sertão", "Florianópolis", "Formosa do Sul", "Forquilhinha", "Fraiburgo", "Frei Rogério", "Galvão", "Garopaba", "Garuva", "Gaspar", "Governador Celso Ramos", "Grão Pará", "Gravatal", "Guabiruba", "Guaraciaba", "Guaramirim", "Guarujá do Sul", "Guatambú", "Herval d'Oeste", "Ibiam", "Ibicaré", "Ibirama", "Içara", "Ilhota", "Imaruí", "Imbituba", "Imbuia", "Indaial", "Iomerê", "Ipira", "Iporã do Oeste", "Ipuaçu", "Ipumirim"],
      "São Paulo": ["Adamantina", "Adolfo", "Aguaí", "Águas da Prata", "Águas de Lindóia", "Águas de Santa Bárbara", "Águas de São Pedro", "Agudos", "Alambari", "Alfredo Marcondes", "Altair", "Altinópolis", "Alto Alegre", "Alumínio", "Álvares Florence", "Álvares Machado", "Álvaro de Carvalho", "Alvinlândia", "Americana", "Américo Brasiliense", "Américo de Campos", "Amparo", "Analândia", "Andradina", "Angatuba", "Anhembi", "Anhumas", "Aparecida", "Aparecida d'Oeste", "Apiaí", "Araçariguama", "Araçatuba", "Araçoiaba da Serra", "Aramina", "Arandu", "Arapeí", "Araraquara", "Araras", "Arco-Íris", "Arealva", "Areias", "Areiópolis", "Ariranha", "Artur Nogueira", "Arujá", "Aspásia", "Assis", "Atibaia", "Auriflama", "Avaí", "Avanhandava", "Avaré", "Bady Bassitt", "Balbinos", "Bálsamo", "Bananal", "Barão de Antonina", "Barbosa", "Bariri", "Barra Bonita", "Barra do Chapéu", "Barra do Turvo", "Barretos", "Barrinha", "Barueri", "Bastos", "Batatais", "Bauru", "Bebedouro", "Bento de Abreu", "Bernardino de Campos", "Bertioga", "Bilac", "Birigui", "Biritiba-Mirim", "Boa Esperança do Sul", "Bocaina", "Bofete", "Boituva", "Bom Jesus dos Perdões", "Bom Sucesso de Itararé", "Borá", "Boracéia", "Borborema", "Borebi", "Botucatu", "Bragança Paulista", "Braúna", "Brejo Alegre", "Brodowski", "Brotas", "Buri", "Buritama", "Buritizal", "Cabreúva", "Caçapava", "Cachoeira Paulista", "Caconde", "Cafelândia", "Caiabu", "Caieiras", "Caiuá", "Cajamar", "Cajati", "Cajobi", "Cajuru", "Campina do Monte Alegre", "Campinas", "Campo Limpo Paulista", "Campos do Jordão", "Campos Novos Paulista", "Cananéia", "Canas", "Cândido Mota", "Cândido Rodrigues", "Canitar", "Capão Bonito", "Capela do Alto", "Capivari", "Caraguatatuba", "Carapicuíba", "Cardoso", "Casa Branca", "Paraguaçu Paulista"],
      "Sergipe": ["Amélia Rodrigues", "Araçás", "Araci", "Aramari", "Candeal", "Capela", "Conceição das Alagoas", "Conceição do Jacuípe", "Conde", "Coração de Maria", "Cruz das Almas", "Elísio Medrado", "Feira de Santana", "Ipecaetá", "Ipirá", "Irará", "Itabaiana", "Itaberaba", "Itaparica", "Itatim", "Lamarão", "Madre de Deus", "Mairi", "Mata de São João", "Nova Fátima", "Ouriçangas", "Pedrão", "Pintadas", "Piraí do Norte", "Pirajá", "Pojuca", "Rafael Jambeiro", "Riachão do Jacuípe", "Ribeira do Amparo", "Ribeira do Pombal", "Ruy Barbosa", "Salinas da Margarida", "Santa Bárbara", "Santa Teresinha", "Santaluz", "Santo Amaro", "Santo Antônio de Jesus", "Santo Estêvão", "São Felipe", "São Gonçalo dos Campos", "São Sebastião do Passé", "Sapeaçu", "Sátiro Dias", "Saúde", "Seabra", "Senhor do Bonfim", "Serra Preta", "Serrinha", "Simões Filho", "Tanquinho", "Teodoro Sampaio", "Terra Nova", "Tucano", "Uauá", "Vera Cruz"],
      "Tocantins": ["Abreulândia", "Aguiarnópolis", "Aliança do Tocantins", "Almas", "Alvorada", "Ananás", "Angico", "Aparecida do Rio Negro", "Aragominas", "Araguacema", "Araguaçu", "Araguaína", "Araguanã", "Araguatins", "Arapoema", "Arraias", "Augustinópolis", "Aurora do Tocantins", "Axixá do Tocantins", "Babaçulândia", "Bandeirantes do Tocantins", "Barra do Ouro", "Barrolândia", "Bernardo Sayão", "Bom Jesus do Tocantins", "Brasilândia do Tocantins", "Brejinho de Nazaré", "Buriti do Tocantins", "Cachoeirinha", "Campos Lindos", "Cariri do Tocantins", "Carmolândia", "Carrasco Bonito", "Caseara", "Centenário", "Chapada da Natividade", "Chapada de Areia", "Colinas do Tocantins", "Colméia", "Combinado", "Conceição do Tocantins", "Couto de Magalhães", "Cristalândia", "Crixás do Tocantins", "Darcinópolis", "Dianópolis", "Divinópolis do Tocantins", "Dois Irmãos do Tocantins", "Dueré", "Esperantina", "Fátima", "Figueirópolis", "Filadélfia", "Formoso do Araguaia", "Fortaleza do Tabocão", "Goianorte", "Goiatins", "Guaraí", "Gurupi", "Ipueiras", "Itacajá", "Itaguatins", "Itapiratins", "Itaporã do Tocantins", "Jaú do Tocantins", "Juarina", "Lagoa da Confusão", "Lagoa do Tocantins", "Lajeado", "Lavandeira", "Lizarda", "Luzinópolis", "Marianópolis do Tocantins", "Mateiros", "Maurilândia do Tocantins", "Miracema do Tocantins", "Miranorte", "Monte do Carmo", "Monte Santo do Tocantins", "Muricilândia", "Natividade", "Nazaré", "Nova Olinda", "Nova Rosalândia", "Novo Acordo", "Novo Alegre", "Novo Jardim", "Oliveira de Fátima", "Palmas", "Palmeirante", "Palmeiras do Tocantins", "Palmeirópolis", "Paraíso do Tocantins", "Paranã", "Pau d'Arco", "Pedro Afonso", "Peixe", "Pequizeiro", "Pindorama do Tocantins", "Piraquê", "Pium"],
      // Adicione mais estados e cidades conforme necessário
    };

    // Função para atualizar as cidades quando o estado é selecionado
    function atualizarCidades() {
      var estadoSelect = document.getElementById("uf");
      var cidadeSelect = document.getElementById("cidade");
      var estadoSelecionado = estadoSelect.value;

      // Limpar as opções atuais do select de cidades
      cidadeSelect.innerHTML = "";

      // Obter as cidades correspondentes ao estado selecionado
      var cidades = estadosECidades[estadoSelecionado];

      // Adicionar as novas opções de cidades ao select
      for (var i = 0; i < cidades.length; i++) {
        var cidadeOption = document.createElement("option");
        cidadeOption.text = cidades[i];
        cidadeOption.value = cidades[i];
        cidadeSelect.appendChild(cidadeOption);
      }
    }
  </script>
  </head>

  <body>

  <main>
    <div class="esquerda">
      <h1>ENTRAR</h1>
    
      <form action="login.php" method="post">
      
        <b><label for="email">E-mail: </label></b>
        <input type="email" name="email" required><br>

        <b><label for="senha">Senha: </label></b>
        <input type="password" name="senha" required><br>

        <div class="form_button">
          <button type="submit" name="submit" value="Entrar">Entrar</button>
        </div>
      
      </form>
  
    </div>

    <div class="direita">
      <h1>CADASTRAR</h1>

      <form action="cadastrar_usuario.php" method="post">
  
        <b><label for="nome">Nome: </label></b>
        <input type="text" name="nome" required><br>

        <b><label for="email">E-mail: </label></b>
        <input type="email" name="email" required><br>

        <div class="dois_campos">
          <div class="campo_individual">
            <b><label for="telefone">Telefone: </label></b>
            <input type="text" name="telefone" maxLength="11" required><br>
          </div>
    
          <div class="campo_individual">
            <b><label for="idade">Idade: </label></b>
            <input type="number" id="idade" name="idade" required>
          </div>
        </div>

        <div class="dois_campos">
          <div class="campo_individual">
            <b><label for="uf">Estado: </label></b>
            <select id="uf" name="uf" onchange="atualizarCidades()">
              <b><option value="">Selecione um estado</option></b>
              <option value="Acre">Acre</option>
              <option value="Alagoas">Alagoas</option>
              <option value="Amazonas">Amazonas</option>
              <option value="Amapá">Amapá</option>
              <option value="Bahia">Bahia</option>
              <option value="Ceará">Ceará</option>
              <option value="Espírito Santo">Espírito Santo</option>
              <option value="Goiás">Goiás</option>
              <option value="Maranhão">Maranhão</option>
              <option value="Mato Grosso">Mato Grosso</option>
              <option value="Mato Grosso do Sul ">Mato Grosso do Sul</option>
              <option value="Minas Gerais">Minas Gerais</option>
              <option value="Pará">Pará</option>
              <option value="Paraíba">Paraíba</option>
              <option value="Paraná">Paraná</option>
              <option value="Pernambuco">Pernambuco</option>
              <option value="Piauí">Piauí</option>
              <option value="Rio de Janeiro">Rio de Janeiro</option>
              <option value="Rio Grande do Norte">Rio Grande do Norte</option>
              <option value="Rio Grande do Sul">Rio Grande do Sul</option>
              <option value="Rondônia">Rondônia</option>
              <option value="Roraima">Roraima</option>
              <option value="Santa Catarina">Santa Catarina</option>
              <option value="São Paulo">São Paulo</option>
              <option value="Sergipe">Sergipe</option>
              <option value="Tocantins">Tocantins</option>
              <!-- Adicione mais estados conforme necessário -->
            </select>
          </div>


          <div class="campo_individual">
            <b><label for="cidade">Cidade: </label></b>
            <select id="cidade" name="cidade">
              <option value="">Selecione um estado primeiro</option>
            </select>
          </div>
        </div>

        <b><label for="endereco">Endereço: </label></b>
        <input type="text" id="endereco" name="endereco" required>

        <b><label for="cep">CEP: </label></b>
        <input type="text" id="cep" name="cep" required>
        
        <b><label for="senha">SENHA: </label></b>
        <input type="password" id="senha" name="senha" required>

        <div class="form_button">
          <button type="submit" name="submit" value="Agendar">Cadastrar</button>
        </div>

      </form>

    </div>

  </main>

  </body>
</html>