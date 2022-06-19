DROP DATABASE ProductsData;
CREATE DATABASE ProductsData;
use ProductsData;


CREATE TABLE Products(
    ProductsID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (ProductsID),
    ProductsName VARCHAR(250),
    ProductsImage VARCHAR(250),
    ProductsPrice VARCHAR(250),
    ProductLink VARCHAR(250),
    ProductVideo VARCHAR(50)
);

CREATE TABLE Users(
    UserID INT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    Email VARCHAR(255) UNIQUE,
    PSW VARCHAR(255),
    PRIMARY KEY (UserID)
);

CREATE TABLE Language(
    LanguageID INT NOT NULL AUTO_INCREMENT,
    LanguageName VARCHAR(20),
    PRIMARY KEY (LanguageID)
);


CREATE TABLE Description(
    DescriptionID INT NOT NULL AUTO_INCREMENT,
    ProductsID INT NOT NULL,
    LanguageID INT NOT NULL,
    DescriptionText VARCHAR(250),
    DescriptionText2 MEDIUMTEXT,
    PRIMARY KEY (DescriptionID),
    FOREIGN KEY (ProductsID) REFERENCES Products(ProductsID),
    FOREIGN KEY (LanguageID) REFERENCES Language(LanguageID)
);


INSERT INTO Language (LanguageName) VALUES("English");
INSERT INTO Language (LanguageName) VALUES("Portuguese");



INSERT INTO Products (ProductsName, ProductsPrice, ProductsImage, ProductLink) VALUES ("RedDeadRedemption2", "59.99€", "../IMAGES/Red%20Dead2.jpg", "https://store.steampowered.com/app/1174180/Red_Dead_Redemption_2/");
INSERT INTO Products (ProductsName, ProductsPrice, ProductsImage, ProductLink) VALUES ("CSGO","13.25€","../IMAGES/CSGO.jpg", "https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/");
INSERT INTO Products (ProductsName, ProductsPrice, ProductsImage, ProductLink) VALUES ("GarrysMod","9.99€","../IMAGES/GarrysMod.jpg", "https://store.steampowered.com/app/4000/Garrys_Mod/");
INSERT INTO Products (ProductsName, ProductsPrice, ProductsImage, ProductLink) VALUES ("DeadByDaylight","19.99€","../IMAGES/DeadDaylight.jpg", "https://store.steampowered.com/app/381210/Dead_by_Daylight/");
INSERT INTO Products (ProductsName, ProductsPrice, ProductsImage, ProductLink) VALUES ("Don't Starve","14.99€","../IMAGES/Don'tStarve.jpg", "https://store.steampowered.com/app/322330/Dont_Starve_Together/");
INSERT INTO Products (ProductsName, ProductsPrice, ProductsImage, ProductLink) VALUES ("Dota2","Free","../IMAGES/Dota.jpg", "https://store.steampowered.com/app/570/Dota_2/");
INSERT INTO Products (ProductsName, ProductsPrice, ProductsImage, ProductLink) VALUES ("DragonBall","59.99€","../IMAGES/DragonBall.jpg", "https://store.steampowered.com/app/851850/DRAGON_BALL_Z_KAKAROT/");
INSERT INTO Products (ProductsName, ProductsPrice, ProductsImage, ProductLink) VALUES ("Skyrim","49.99€","../IMAGES/Skyrim.jpg", "https://store.steampowered.com/app/489830/The_Elder_Scrolls_V_Skyrim_Special_Edition/");
INSERT INTO Products (ProductsName, ProductsPrice, ProductsImage, ProductLink) VALUES ("Civilization","14.99€","../IMAGES/Civilization.jpg", "https://store.steampowered.com/app/289070/Sid_Meiers_Civilization_VI/");


/*Red Dead Redemption2 */
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(1,1,/* Descritpion EN*/"Red Dead Redemption 2 Is an action-adventure video game developed and published by Rockstar Games. It is the third title in the Red Dead series and a prequel to Red Dead Redemption.","Arthur Morgan and the Van der Linde gang are outlaws on the run. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. As deepening internal divisions threatens to tear the gang apart, Arthur must make a choice between his own ideals and loyalty to the gang who raised him.");
INSERT INTO Description (ProductsID,LanguageID,DescriptionText, DescriptionText2) VALUES(1,2,/* Descritpion PT*/"Red Dead Redemption 2 é um jogo eletrônico de ação-aventura desenvolvido e publicado pela Rockstar Games. É o terceiro título da série Red Dead e uma prequela de Red Dead Redemption.","Arthur Morgan e a gangue Van der Linde são bandidos em fuga. Com agentes federais e os melhores caçadores de recompensas do país em seu encalço, a gangue deve roubar, roubar e lutar pelo coração acidentado da América para sobreviver. À medida que divisões internas cada vez mais profundas ameaçam separar a gangue, Arthur deve fazer uma escolha entre seus próprios ideais e a lealdade à gangue que o criou.");

/* CSGO */
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(2,1,/* Description EN*/"Counter-Strike: Global Offensive is an online game developed by Valve Corporation and Hidden Path Entertainment, being a sequel to Counter-Strike: Source."," It is the fourth main title of the franchise.Counter-Strike: Global Offensive (CS:GO) expands on the team-based action gameplay introduced by the first game in the series nearly 20 years ago. CS:GO contains new maps, characters, weapons and game modes, as well as updated versions of classic CS content (such as de_dust2).");
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(2,2,/* Description PT*/"Counter-Strike: Global Offensive é um jogo online desenvolvido pela Valve Corporation e pela Hidden Path Entertainment, sendo uma sequência de Counter-Strike: Source."," É o quarto título principal da franquia.Counter-Stri Strike (CS:GO) expande a ação baseada em equipamentos de manutenção pelo primeiro jogo da série: O primeiro jogo da série 20 anos atrás. O CS:GO contém novos mapas, personagens, armas e modos de jogo, além de versões atualizadas de conteúdo do CS clássico (como de_dust2).");

/* GarrysMod */
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2 ) VALUES(3,1,/* Descritpion EN*/"Garry's Mod is a computer game created in 2004 by Garry Newman. The current version of Garry's Mod receives regular updates through Valve's Steam service.","Garry's Mod is a physical challenge. Contrary to what is usual, there are no predefined goals. We give you the tools and let you play. You can manipulate and assemble objects to create your own contraptions - whether it's a car, a rocket, a catapult or something that doesn't even have a name yet - it's in your hands. If you're not very good at building, don't worry! You can put several characters in different positions.");
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(3,2,/* Descritpion PT*/"Garry's Mod é um jogo de computador criado em 2004 por Garry Newman. A versão atual de Garry's Mod recebe atualizações regulares através do serviço Steam da Valve.","O Garry's Mod é um desafio físico. Ao contrário do que é habitual, não há objectivos predefinidos. Nós damos-lhe as ferramentas e deixamo-lo jogar. Pode manipular e juntar os objectos para criar as suas próprias engenhocas - quer seja um carro, um foguetão, uma catapulta ou alguma coisa que ainda nem sequer tenha nome - está nas suas mãos. Se não for muito bom a construir, não se preocupe! Pode colocar várias personagens em posições disparatadas.");

/* DeadByDaylight */
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(4,1,/* Descritpion EN*/"Dead by Daylight is an asymmetric multiplayer survival horror game developed by Behavior Interactive and published by Starbreeze Studios.","Dead by Daylight is a multiplayer (4vs1) horror game where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught, tortured and killed.");
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(4,2,/* Descritpion PT*/"Dead by Daylight é um jogo de terror de sobrevivência assimétrico multijogador desenvolvido pela Behaviour Interactive e publicado pela Starbreeze Studios.","Dead by Daylight é um jogo de terror multiplayer (4vs1) onde um jogador assume o papel do assassino selvagem, e os outros quatro jogadores jogam como sobreviventes, tentando escapar do assassino e evitar ser pego, torturado e morto.");
 
/* Don't Starve */
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(5,1,/* Description EN*/"Don't Starve is an action-adventure electronic game with survival and roguelike elements developed and published by Klei Entertainment.","Fight, Farm, Build and Explore Together in the standalone multiplayer expansion to the uncompromising wilderness survival game, Don't Starve. Enter a strange and unexplored world full of odd creatures, hidden dangers, and ancient secrets. Gather resources to craft items and build structures that match your survival style. Play your way as you unravel the mysteries of 'The Constant'.");
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(5,2,/* Description PT*/"Don't Starve é um jogo eletrônico de ação-aventura com elementos de sobrevivência e roguelike desenvolvido e publicado pela Klei Entertainment.","Lute, cultive, construa e explore juntos na expansão multiplayer autônoma do intransigente jogo de sobrevivência na selva, Don't Starve. Entre em um mundo estranho e inexplorado cheio de criaturas estranhas, perigos ocultos e segredos antigos. Reúna recursos para criar itens e construir estruturas que combinem com seu estilo de sobrevivência. Jogue do seu jeito enquanto desvenda os mistérios de 'The Constant'.");

/* Dota */
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(6,1,/* Description EN*/"Dota 2 is an electronic game in the Multiplayer Online Battle Arena genre, developed by Valve Corporation as a sequel to Defense of the Ancients, a modification of a map developed for Warcraft III: The Frozen Throne.","When it comes to the diversity of heroes, abilities, and powerful items, Dota is second to none — every match is unique. Any hero can take on several and has a variety of items to help function as roles for each match. Dota puts no limits on how it encourages you in your own style.");
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(6,2,/* Description PT*/"Dota 2 é um jogo eletrônico gratuito do gênero batalha multijogador, desenvolvido pela produtora Valve Corporation como sequência do Defense of the Ancients, lançado em julho de 2013 na plataforma Steam.","Quando se trata de diversidade de heróis, habiLanguageIDades e itens poderosos, o Dota é inigualável — cada partida é única. Qualquer herói pode assumir várias funções e há uma abundância de itens para ajudar a satisfazer as necessidades de cada partida. O Dota não impõe limites na forma como jogas, incentiva-te a exprimir o teu próprio estilo.");

/* Dragon Ball */
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(7,1,/* Description EN*/"Dragon Ball Z: Kakarot is an open-world action RPG game developed by CyberConnect2 and published by Bandai Namco Entertainment. Based on the Dragon Ball franchise.","Experience the story of DRAGON BALL Z from the most epic events to the most carefree side quests, including all-new story moments that answer some of DRAGON BALL's most pressing questions for the first time!");
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(7,2,/* Description PT*/"Dragon Ball Z: Kakarot é um jogo eletrônico de RPG de ação em mundo aberto desenvolvido pela CyberConnect2 e publicado pela Bandai Namco Entertainment.Baseado na franquia Dragon Ball.","Vive a história do DRAGON BALL Z desde os eventos mais épicos até às missões secundárias mais despreocupadas, incluindo momentos de história inéditos que respondem pela primeira vez a algumas das questões mais prementes do DRAGON BALL!");

/* Skyrim */
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(8,1,/* Description EN*/"The Elder Scrolls V: Skyrim is an action RPG video game developed by Bethesda Game Studios and published by Bethesda Softworks. It is the fifth main game in the The Elder Scrolls series, following The Elder Scrolls IV: Oblivion.","Winner of more than 200 Game of the Year Awards, Skyrim Special Edition brings the epic fantasy to life in stunning detail. The Special Edition includes the critically acclaimed game and add-ons with all-new features like remastered art and effects, volumetric god rays, dynamic depth of field, screen-space reflections, and more. Skyrim Special Edition also brings the full power of mods to the PC and consoles.");
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(8,2,/* Description EN*/"The Elder Scrolls V: Skyrim é um jogo eletrônico de RPG de ação desenvolvido pela Bethesda Game Studios e publicado pela Bethesda Softworks. É o quinto jogo principal da série The Elder Scrolls, seguindo The Elder Scrolls IV: Oblivion.","Vencedor de mais de 200 prêmios de Jogo do Ano, Skyrim Special Edition dá vida à fantasia épica com detalhes impressionantes. A Edição Especial inclui o jogo e complementos aclamados pela crítica com recursos totalmente novos, como arte e efeitos remasterizados, raios divinos volumétricos, profundidade de campo dinâmica, reflexões no espaço da tela e muito mais. Skyrim Special Edition também traz todo o poder dos mods para PC e consoles.");

/* Civilization */
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(9,1,/* Description EN*/"Civilization VI is an electronic game developed by Firaxis Games and 2K Games. It is the sequence of Civilization V, showing differences both in graphics and in the interface with its new graphics engine.","Originally created by legendary video game designer Sid Meier, Civilization is a turn-based strategy game where you try to build an empire that can stand the test of time. Become Ruler of the World by establishing and leading a civilization from the Stone Age to the Information Age. Wage wars, conduct diplomacy, advance your culture and face off against the greatest historical leaders as you attempt to build the greatest civilization the world has ever known.");
INSERT INTO Description (ProductsID,LanguageID,DescriptionText,DescriptionText2) VALUES(9,2,/* Description PT*/"Civilization VI é um jogo eletrônico desenvolvido pela Firaxis Games e pela 2K Games. É a sequência de Civilization V, apresentando diferenças tanto nos gráficos quanto na interface com o seu novo motor gráfico.","Criado originalmente pelo lendário designer de videojogos Sid Meier, Civilization é um jogo de estratégia por turnos onde tentas construir um império capaz de resistir ao passar do tempo. Torna-te Regente do Mundo ao estabelecer e LanguageIDerar uma civilização desde a Idade da Pedra até à Era da Informação. Trava guerras, conduz a diplomacia, avança a tua cultura e enfrenta os maiores líderes históricos enquanto tentas erigir a maior civilização que o mundo alguma vez conheceu.");

