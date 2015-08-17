<?php


    if(isset($_POST['LSec']))
        $_SESSION['SL'] = _isLanguageSupported($_POST['LSec']) ? $_POST['LSec'] : $DEFAULT_LANGUAGE;
    else if(!isset($_SESSION['SL']))
        $_SESSION['SL'] = $DEFAULT_LANGUAGE;

    switch(_getAMLanguage()) {
        case "ru_RU": /* RUSSIAN */
        case "fr_FR": /* FRENCH */
        case "de_DE": /* GERMAN */
        case "es_ES": /* SPANISH - SPAIN */
		default: {  /* SPANISH - SPAIN */
            $L[1] = 'Login Usuario';
            $L[2] = 'Conectarse';
            $L[3] = 'OFFLINE';
            $L[4] = 'Inicio';
            $L[5] = 'Salir';
            $L[6] = 'TE HAS DESCONECTADO';
            $L[7] = 'Volver';
            $L[8] = 'WoWJizzard - UCP';
            $L[9] = '¡ERROR! Si se trata de un error contacta con la administración';

            $L[10] = 'Iniciar transferencia, Primer paso';
            $L[11] = 'Continuar transferencia, Segundo paso';
            $L[12] = 'Cancelar';
            $L[13] = 'Aprobar';
            $L[14] = 'Denegar';
            $L[15] = 'Reiniciar';
            $L[16] = 'No conectado';
            $L[17] = 'Operación realizada';
            $L[18] = 'Pago Insuficiente';
            $L[19] = 'Item roto? Mete la nueva ID aquí';

            $L[20] = 'En progreso';
            $L[21] = 'Aprobado por el MJ';
            $L[22] = 'Denegado por el MJ';
            $L[23] = 'Cancelado por ti';
            $L[24] = 'DENEGADO POR EL SERVIDOR, el dump esta corrupto o no se ha finalizado la operación';
            $L[25] = 'Before start character migration, download & install the game addon "<b>SaveMe</b>" for ';
            $L[26] = 'Enter "<b>/saveme</b>" in the chat frame start make a character dumping.<br/>
            To dump "Bank inventory", open all bags in it, before launch the /saveme command,
            to dump "Profession recipes" turn open the frames of the professions.
            Make log out and the dump file will be saved in the WTF \ Account \ %Username% \ SavedVariables \ saveme.lua <br/>
            New character will appear on <b>GM Account</b>, not your, after review it will be approved, denied or you can cancel it manually, if you want';
            $L[27] = 'Bienvenido al <b>PANEL DE ADMINISTRACIÓN</b> Pincha';
            $L[28] = 'para aprobar o denegar las tranferencias, o si es necesario reiniciar la tranferencia';
            $L[29] = '¡Operación finalizada!</br>Tu personaje esta listo para ser customizado, entra en tu cuenta y termina la operación';

            $L[30] = 'Tienes muchos personajes en el reino:';
            $L[31] = '(mas de 9)';
            $L[32] = 'Del reino: ';
            $L[33] = 'All Queues FULL! Sorry, you need to wait, until one of reviewers be free, Gracias por tu paciencia';
            $L[34] = 'Transferencia del servidor rechazada';
            $L[35] = 'Allowed only 1 Attempt for character';
            $L[36] = 'Tu SaveMe.lua esta corrupto o incompleto, vuelve a usar el AddOn';
            $L[37] = 'Monedas';
            $L[38] = '¡No estás sancionado!';
            $L[39] = 'Consola (Servidor)';

            $L[40] = 'I want transfer to Realm:';
            $L[41] = 'Selected file:';
            $L[42] = 'Please submit your "old" server account details, <b>GM</b> use their, to check your character. <br/> Please enter Valid Data, else migration rejected.';
            $L[43] = 'Your "old" server account';
            $L[44] = 'Your "old" server account`s password';
            $L[45] = 'Server URL, where Game Master can read info or identify your "old" server.';
            $L[46] = 'Select created file "saveme.lua"';
            $L[47] = 'Select in which realm you want to transfer your character';
            $L[48] = 'Sign Item';
            $L[49] = 'Enter item ID';

            $L[50] = 'Choice new name for character, only if your character name will be free your transfer can be allowed for checking';
            $L[51] = 'Character signed for review';
            $L[52] = '"\'^?$%&*()}{@#~?><>,|=_.+¬-\'" characters not allowed';
            $L[53] = 'Spaces not allowed in Character name';
            $L[54] = 'Numeric characters not allowed';
            $L[55] = 'Character name lenght can be from 2 to 16 characters.';
            $L[56] = 'Character with name:';
            $L[57] = 'ya existe';
            $L[58] = 'Session Error, clean Cookie, try again, if happen again contact with adminstrator';
            $L[59] = 'Max username lenght 32 letters';

            $L[60] = 'Your character is Online, please log off with it, before make any actions!';
            $L[61] = 'Select your character';
            $L[62] = 'You do not have any character';
            $L[63] = 'Gratis';
            $L[64] = 'Precio';
            $L[65] = 'Donate Points';
            $L[66] = 'Quitar Sanción';
            $L[67] = '¡Operación finalizada!</br>Tu personaje ha sido teletransportado';
            $L[68] = 'Tu personaje esta listo para ser customizado, entra en tu cuenta y termina la operación';
            $L[69] = 'Quest AutoComplete';

            $L[70] = 'Selecciona misión para completar';
            $L[71] = 'Elige recompensa (objeto) de la misión';
            $L[72] = 'El personaje no dispone de misiones autocompletables';
            $L[73] = 'Tu estado:';
            $L[74] = 'Exaltado';
            $L[75] = 'Venerado';
            $L[76] = 'Honorable';
            $L[77] = 'Amistoso';
            $L[78] = 'Neutral';
            $L[79] = 'Hostil';
            $L[80] = 'Odiado';

            $L[81] = 'Selecionar Facción';
            $L[82] = 'Comprar Objeto';
            $L[83] = 'Personaje: Cambiar Nombre';
            $L[84] = 'Personaje: Customizar';
            $L[85] = 'Personaje: Cambiar Facción';
            $L[86] = 'Personaje: Cambiar Raza';
            $L[87] = 'Personaje: Nivel 80 Instantaneo';
            $L[88] = 'Personaje: Reputación Hexaltado Instantanea';
            $L[89] = 'Personaje: Completar misión instantaneamente';
            $L[90] = 'Personaje: Quitar bufo de Desertor';

            $L[91] = 'Personaje: Teletransporte a Dalaran';
            $L[92] = 'Personaje: Desbloquear';
            $L[93] = 'Cuenta: Cambiar Contraseña';
            $L[94] = 'Cuenta: Quitar Sanción';
            $L[95] = 'Cuenta: Historico de Operaciones';
            $L[96] = 'Cuenta: Obtener';
            $L[97] = 'Creación de Cuenta';
            $L[98] = 'Small Playtime!';
            $L[99] = 'URL Servidor';

            $L[100] = 'Seleccionar Reino';
            $L[101] = 'Guerrero';
            $L[102] = 'Paladín';
            $L[103] = 'Cazador';
            $L[104] = 'Pícaro';
            $L[105] = 'Sacerdote';
            $L[106] = 'Caballero de la Muerte';
            $L[107] = 'Chamán';
            $L[108] = 'Mago';
            $L[109] = 'Brujo';
            $L[110] = 'Todos';
            $L[111] = 'Druida';

            $L[112] = 'Femenino';
            $L[113] = 'Masculino';
            $L[114] = 'antes';
            $L[115] = 'después';
            $L['x'] = 'Puntos de Honor'; // NOT USED 'Honor points';
            $L['x'] = 'Puntos de Arena'; // NOT USED 'Arena points';
            $L[118] = 'Muertes Totales';
            $L[119] = 'Reino';

            $L[120] = 'Desconocido';
            $L[121] = 'Humano';
            $L[122] = 'Orco';
            $L[123] = 'Enano';
            $L[124] = 'Elfo de la Noche';
            $L[125] = 'No-muerto';
            $L[126] = 'Tauren';
            $L[127] = 'Gnomo';
            $L[128] = 'Troll';
            $L[130] = 'Elfo de Sangre';
            $L[131] = 'Draenei';

            $L[140] = 'Fecha';
            $L[141] = 'Descripción';
            $L[142] = 'Personaje';
            $L[143] = 'IP';
            $L[144] = 'El personaje no tiene bufos de desertor activos';
            $L[145] = '¡Error en el Capcha!';
            $L[146] = 'Enviar';
            $L[147] = 'Introduce los datos necesarios para acceder';
            $L[148] = '¡Las contraseñas no coinciden!';
            $L[149] = '¡Los e-mails no coinciden!';

            $L[150] = '¿Aún no tienes una cuenta? ¡Regístrate ya!';
            $L[151] = 'Usuario';
            $L[152] = 'Contraseña';
            $L[153] = 'Confirmar Contraseña';
            $L[154] = 'e-Mail';
            $L[155] = 'Confirmar e-Mail';
            $L[156] = 'Código Capcha';
            $L[157] = 'Error en la contraseña';
            $L[158] = 'Error en el e-mail';
            $L[159] = '¡Ese e-mail ya esta en uso! Usa otra cuenta de e-mail';

            $L[160] = '¡Ese nombre de cuenta ya existe! Elige otro nombre';
            $L[161] = '¡Oferta Limitada!';
            $L[162] = 'Bonus de registro de bienvenida';
            $L[163] = 'Sin movimientos';
            $L[164] = '¡Operación finalizada!</br>Tu personaje esta listo para ser renombrado, entra en tu cuenta y termina la operación';
            $L[165] = 'Sancionado por: ';
            $L[166] = 'Sancionado el: ';
            $L[167] = 'Expira el: ';
            $L[168] = 'AHORA';
            $L[169] = 'Devolver';

            $L[170] = 'Quiero comprar eso';
            $L[171] = 'spend';
            $L[172] = 'Pagos y Donaciones';
            $L[173] = 'Herramientas de Cuenta';
            $L[174] = 'Herramientas de Personaje';
            $L[175] = 'PayPal';
            $L[176] = 'Donar vía PayPal';
            $L[177] = 'Moneyboookers';
            $L[178] = 'Donar vía Moneyboookers';
            $L[179] = 'WebMoney';

            $L[180] = 'Donar vía WebMoney';
            $L[181] = 'Quitar Sanción';
            $L[182] = '¿Cuenta sancionada? No pasa nada';
            $L[183] = 'Cambiar contraseña';
            $L[184] = '¿Quieres cambiar tu contraseña?';
            $L[185] = 'Historico de Operaciones';
            $L[186] = 'Historico de operaciones completadas';
            $L[187] = 'Cambiar nombre';
            $L[188] = 'Cambia el nombre a tu personaje';
            $L[189] = 'Customización';

            $L[190] = 'Cambia de sexo y la apareincia';
            $L[191] = 'Cambiar Facción';
            $L[192] = 'Cambia de la Horda <-> Alianza';
            $L[193] = 'Instant 80';
            $L[194] = '¿Quiere subir rápido?';
            $L[195] = 'Desbloquear';
            $L[196] = '¿Te has quedado atascado?';
            $L[197] = 'Cambiar Raza';
            $L[198] = 'No te gusta la raza que juegas ¡Cámbiala!';
            $L[199] = 'Quitar Desertor';

            $L[200] = 'Has salido de una BG a destiempo';
            $L[201] = 'Teletransporte a Dalaran';
            $L[202] = 'Vete rápido a Dalaran sin esperar';
            $L[203] = 'Reputación Instantánea';
            $L[204] = 'Hazte hexaltado con cualquiera';
            $L[205] = 'Migraciones';
            $L[206] = '¿Quieres migrar tu personaje?';
            $L[207] = 'Compra objetos rápido';
            $L[208] = 'Compra sin malgastar tiempo';
            $L[209] = 'Completar Misiones';

            $L[210] = '¿No puedes hacer una misión?';
            $L[211] = 'Las nuevas contraseñas no coinciden';
            $L[212] = 'Error con la contraseña actual';
            $L[213] = 'Password successfully changed';
            $L[214] = 'Debes saber:</br>> La contraseña no puede ser igual al nombre de cuenta. ¡Esto sería como ir pregonándola en el banco de Dalaran! <
					</br>> La contraseña debe contener al menos una letra minúscula y un caracter numérico <
					</br>> La contraseña debe contener entre ocho y dieciséis caracteres <
					</br>> Tu contraseña sólo puede contener caracteres alfabéticos (A–Z), numéricos (0–9) y signos de puntuación (!"#$%). No aceptamos contraseñas escritas en Darnassiano <
					</br>> Una contraseña segura no será muy efectiva si es utilizada en todas partes, por razones de seguridad, te recomendamos que elijas una contraseña única que no utilices en ninguna otra de tus cuentas online <';
            $L[215] = 'Contraseña actual';
            $L[216] = 'Nueva contraseña';
            $L[217] = 'Repetir nueva contraseña';
            $L[218] = 'Cambiar contraseña';
            $L[219] = 'Looking for someone?';
            $L[220] = 'Look account billing';

            $L[221] = 'ADMIN: Billing';
            $L[222] = 'Seems bad characters, not enough achievements!';
            $L[223] = 'Wrong file!';
            $L[224] = 'Acess denied';
            $L[225] = 'Wrong Migration status. Require "In Progress"';
            $L[226] = 'Items re-sended!';
            $L[227] = 'Migration with ID:';
            $L[228] = 'Approved';
            $L[229] = 'Canceled';
            $L[230] = 'Not meet requirements!';

            $L[231] = 'Character with GUID';
            $L[232] = 'Denied, because';
            $L[233] = 'This character available for renaming process, please log in it, and finish it';
            $L[234] = 'Success operation, Your character is available for change faction process, log in on your account, and do that.';
            $L[235] = 'This character available for change faction process, please log in it, and finish it.';
            $L[236] = 'Success operation, Your character is available for change race, log in on your account, and do that.';
            $L[237] = 'This character available for change race process, please log in it, and finish it.';
            $L[238] = 'Success operation, Item will be arrive via mailbox, check you character ingame!';
            $L[239] = 'Success operation, Character teleported!';
            $L[240] = 'About Us';

            $L[241] = 'Online';
            $L[242] = 'Como conectarse';
            $L[243] = 'Foro';
            $L[244] = 'Panel de Control';
            $L[245] = 'Migración de Personajes';
            $L[246] = 'Registro';
            $L[247] = 'Login';
            $L[248] = 'Changelog';
            $L[249] = 'News feed';
            $L[250] = 'Estadísticas';

            $L[251] = 'RESETEAR';
            $L[252] = 'Modificar';
            $L[253] = 'Enter amount of <i class = "icon-fire"></i> what you want to add, or remove from player.
            if you want remove. type -Amount. Example: -500, if you want to add +500 or just 500,
            in comment enter your comment (max 100 chars) if you left it empty, your username will used like a comment';
            $L[254] = 'Cerrar';
            $L[255] = 'Enter amount';
            $L[256] = 'Introducir comentario';
            $L[257] = 'Cuenta: Eliminado <i class = "icon-fire"></i> por el MJ';
            $L[258] = 'Goblin';
            $L[259] = 'Worgen';
            $L[260] = 'Disponible';

            $L[261] = 'INSPECT';
            $L[262] = 'Donar vía';
            $L[263] = 'Comprar créditos';
            $L[264] = 'Compra créditos para tu cuenta';
            $L[265] = 'Cambio de moneda';
            $L[266] = 'Cambia monedas por <i class = "icon-white icon-fire"></i> o al revés';
            $L[267] = 'Oro -> Créditos';
            $L[268] = 'Créditos -> Oro';
            $L[269] = 'Cuenta: Comprar Oro';
            $L[270] = 'No hay facciones disponibles para esta acción';

            $L[271] = 'e-mail';
            $L[272] = 'Registro';
            $L[273] = 'Último acceso';
            $L[274] = 'Última IP';
            $L[275] = 'Objeto';

            $L[280] = 'Consumible';
            $L[281] = 'Contenedores';
            $L[282] = 'Armas';
            $L[283] = 'Gemas';
            $L[284] = 'Armaduras';
            $L[285] = 'Reactivos';
            $L[286] = 'Proyectiles';
            $L[287] = 'Mercado';
            $L[288] = 'Selecciona una misión para completar: ';
            $L[289] = 'Recetas';
            $L[290] = 'Completar Misión: Paso uno';
            $L[291] = 'Completar Misión: Paso dos';
            $L[292] = 'Misión';
            $L[293] = 'Llaves';
            $L['x'] = ''; // NOT USE
            $L[295] = 'Misc.'; // 'Miscellaneous'
            $L[296] = 'Glifos';
            $L[297] = 'Siguiente';
            $L[298] = 'Anterior';
            $L[299] = 'Echar un vistazo';
            $L['about_us'] =
            '<h2>About us</h2>
                We are community of interests who improve opensource projects related to WoW Emulation. We like this game, we find that as very existing
                to create our own world. We welcome you in our Realms, here you can check lastest and problably one of the best solutions for WoW emulation.
                We are not asking for material benefits to play on our realms, if you like support us, we always accept donations, for pay for cost of production.
                We will thank you for your donation via donation coins (called like Coins or Fire stamps)
                You can withdraw your <i class = \'icon-fire\'></i> every time, just check a conditions, which allow you do that. Fixed rate for withdraw 1 <i class = \'icon-fire\'></i> = 0.09 €
                ';
            $L['how_to_connect'] =
            '<h2>How to connect</h2>
                <ul>
                    <li>Download Game client. (torrent, en_GB, ru_RU)</li>
                    <ul>
                        <li>If you have already have a game client, need change to set realmlist <ADDRESS> </li>
                    </ul>
                    <li>Register & Confirm account</li>
                    <li>Create character</li>
                    <li>Play!</li>
                </ul>';
            break;
        }
        case "en_US": /* ENGLISH */
        default: {  /* ENGLISH */
            $L[1] = 'Member login';
            $L[2] = 'Sign in';
            $L[3] = 'OFFLINE';
            $L[4] = 'Home';
            $L[5] = 'Quit';
            $L[6] = 'You have successfully left your account';
            $L[7] = 'Go Back';
            $L[8] = 'Private Server';
            $L[9] = 'ERROR, IF YOU HAVEN`T DO THAT, CONTACT ADMINISTRATION';

            $L[10] = 'Start Transfer, STEP 1';
            $L[11] = 'Continue Transfer, STEP 2';
            $L[12] = 'Cancel';
            $L[13] = 'Approve';
            $L[14] = 'Deny';
            $L[15] = 'Resend';
            $L[16] = 'Not Logged';
            $L[17] = 'Success operation';
            $L[18] = 'Not enought';
            $L[19] = 'Wrong item? enter new id here';

            $L[20] = 'In Progress';
            $L[21] = 'Approved, by GM';
            $L[22] = 'DENIED, by GM';
            $L[23] = 'Canceled, by you';
            $L[24] = 'DENIED BY SERVER, bad DUMP or not finished migration procedure';
            $L[25] = 'Before start character migration, download & install the game addon "<b>SaveMe</b>" for ';
            $L[26] = 'Enter "<b>/saveme</b>" in the chat frame start make a character dumping.<br/>
            To dump "Bank inventory", open all bags in it, before launch the /saveme command,
            to dump "Profession recipes" turn open the frames of the professions.
            Make log out and the dump file will be saved in the WTF \ Account \ %Username% \ SavedVariables \ saveme.lua <br/>
            New character will appear on <b>GM Account</b>, not your, after review it will be approved, denied or you can cancel it manually, if you want';
            $L[27] = 'Welcome to <b>ADMIN PANEL</b> Click';
            $L[28] = 'for approving or deny their transfers, of if need resend items';
            $L[29] = 'Success operation, Your character is available for customisation, log in on your account, and do that.';

            $L[30] = 'You have so much characters on Realm:';
            $L[31] = '(more then 9)';
            $L[32] = 'For Realm: ';
            $L[33] = 'All Queues FULL! Sorry, you need to wait, until one of reviewers be free, Thank you for Patience!';
            $L[34] = 'Transfer from this Server Rejected.';
            $L[35] = 'Allowed only 1 Attempt for character';
            $L[36] = 'Your SaveMe.lua is corrupted or out of date, please new addon.';
            $L[37] = 'Coins';
            $L[38] = 'You are not banned!';
            $L[39] = 'Console (Server)';

            $L[40] = 'I want transfer to Realm:';
            $L[41] = 'Selected file:';
            $L[42] = 'Please submit your "old" server account details, <b>GM</b> use their, to check your character. <br/> Please enter Valid Data, else migration rejected.';
            $L[43] = 'Your "old" server account';
            $L[44] = 'Your "old" server account`s password';
            $L[45] = 'Server URL, where Game Master can read info or identify your "old" server.';
            $L[46] = 'Select created file "saveme.lua"';
            $L[47] = 'Select in which realm you want to transfer your character';
            $L[48] = 'Sign Item';
            $L[49] = 'Enter item ID';

            $L[50] = 'Choice new name for character, only if your character name will be free your transfer can be allowed for checking';
            $L[51] = 'Character signed for review';
            $L[52] = '"\'^?$%&*()}{@#~?><>,|=_.+¬-\'" characters not allowed';
            $L[53] = 'Spaces not allowed in Character name';
            $L[54] = 'Numeric characters not allowed';
            $L[55] = 'Character name lenght can be from 2 to 16 characters.';
            $L[56] = 'Character with name:';
            $L[57] = 'already exists';
            $L[58] = 'Session Error, clean Cookie, try again, if happen again contact with adminstrator';
            $L[59] = 'Max username lenght 32 letters';

            $L[60] = 'Your character is Online, please log off with it, before make any actions!';
            $L[61] = 'Select your character';
            $L[62] = 'You do not have any character';
            $L[63] = 'Free';
            $L[64] = 'Price';
            $L[65] = 'Donate Points';
            $L[66] = 'Unban account';
            $L[67] = 'Success operation, Your character is teleported.';
            $L[68] = 'This character available for customisation process, please log in it, and finish it';
            $L[69] = 'Quest AutoComplete';

            $L[70] = 'Select quest for autocomplete';
            $L[71] = 'Select reward (item) from quest';
            $L[72] = 'Character do not have active quests for autocomplete';
            $L[73] = 'You status:';
            $L[74] = 'Exalted';
            $L[75] = 'Revered';
            $L[76] = 'Honored';
            $L[77] = 'Friendly';
            $L[78] = 'Neutral';
            $L[79] = 'Unfriendly';
            $L[80] = 'Hated';

            $L[81] = 'Select faction';
            $L[82] = 'Character: Buy item';
            $L[83] = 'Character: Rename';
            $L[84] = 'Character: Customization';
            $L[85] = 'Character: Change Faction';
            $L[86] = 'Character: Change Race';
            $L[87] = 'Character: Instant 80 level';
            $L[88] = 'Character: Instant exalted reputation';
            $L[89] = 'Character: Instant quest complate';
            $L[90] = 'Character: Instant remove deserter debuff';

            $L[91] = 'Character: Instant teleport to Dalaran';
            $L[92] = 'Character: Unstruck';
            $L[93] = 'Account: Password change';
            $L[94] = 'Account: Unban';
            $L[95] = 'Account: Billing History';
            $L[96] = 'Account: Оbtaining';
            $L[97] = 'Account: Registration';
            $L[98] = 'Small Playtime!';
            $L[99] = 'Server URL';

            $L[100] = 'Select Realm';
            $L[101] = 'Warrior';
            $L[102] = 'Paladin';
            $L[103] = 'Hunter';
            $L[104] = 'Rogue';
            $L[105] = 'Priest';
            $L[106] = 'Death Knight';
            $L[107] = 'Shaman';
            $L[108] = 'Mage';
            $L[109] = 'Warlock';
            $L[110] = 'All';
            $L[111] = 'Druid';

            $L[112] = 'Female';
            $L[113] = 'Male';
            $L[114] = 'before';
            $L[115] = 'after';
            $L['x'] = ''; // NOT USED 'Honor points';
            $L['x'] = ''; // NOT USED 'Arena points';
            $L[118] = 'Total Kills';
            $L[119] = 'Realm';

            $L[120] = 'Unknown';
            $L[121] = 'Human';
            $L[122] = 'Orc';
            $L[123] = 'Dwarf';
            $L[124] = 'Night Elf';
            $L[125] = 'Undead';
            $L[126] = 'Tauren';
            $L[127] = 'Gnome';
            $L[128] = 'Troll';
            $L[130] = 'Blood Elf';
            $L[131] = 'Draenei';

            $L[140] = 'Action Date';
            $L[141] = 'Action Description';
            $L[142] = 'Character name';
            $L[143] = 'IP Address';
            $L[144] = 'No active deserter effects on selected character';
            $L[145] = 'Wrong captcha!';
            $L[146] = 'Submit';
            $L[147] = 'Enter all details before submit';
            $L[148] = 'Passwords not match!';
            $L[149] = 'e-Mails not match!';

            $L[150] = 'not registered?';
            $L[151] = 'Username';
            $L[152] = 'Password';
            $L[153] = 'Confirm password';
            $L[154] = 'e-Mail';
            $L[155] = 'Confirm e-Mail';
            $L[156] = 'Enter captcha code here';
            $L[157] = 'Wrong Password!';
            $L[158] = 'Wrong e-Mail';
            $L[159] = 'e-Mail already used! Select other e-Mail';

            $L[160] = 'Username already used! Select other username';
            $L[161] = 'LIMITED OFFER!';
            $L[162] = 'Registration welcome bonus';
            $L[163] = 'No records';
            $L[164] = 'Success operation, Your character is available for rename, log in on your account, for do that.';
            $L[165] = 'Banned by:';
            $L[166] = 'Banned on:';
            $L[167] = 'Expried on:';
            $L[168] = 'NOW';
            $L[169] = 'Cashback!';

            $L[170] = 'I want to buy it!';
            $L[171] = 'spend';
            $L[172] = 'Wallet management';
            $L[173] = 'Account tools';
            $L[174] = 'Character tools:';
            $L[175] = 'PayPal';
            $L[176] = 'Donate via PayPal';
            $L[177] = 'Moneyboookers';
            $L[178] = 'Donate via Moneyboookers';
            $L[179] = 'WebMoney';

            $L[180] = 'Donate via WebMoney';
            $L[181] = 'Unban';
            $L[182] = 'Violate terms of use? Never mind!';
            $L[183] = 'Change Password';
            $L[184] = 'Does your password reliable? isn`t it?';
            $L[185] = 'Account History';
            $L[186] = 'Billing';
            $L[187] = 'Name Change';
            $L[188] = 'Change name, if you don`t like it';
            $L[189] = 'Customize';

            $L[190] = 'Change gender and face';
            $L[191] = 'Faction Change';
            $L[192] = 'Horde >> Alliance >> Horde';
            $L[193] = 'Instant 80';
            $L[194] = 'Lazy for leveling? DO IT NOW!';
            $L[195] = 'Unstruck';
            $L[196] = 'Stuck somewhere? That will help you!';
            $L[197] = 'Race Change';
            $L[198] = 'Wan`t be a orc? Try play with troll!';
            $L[199] = 'Remove Deserter';

            $L[200] = 'That was a mistake for live BG, isn`t it?';
            $L[201] = 'Teleport to Dalaran';
            $L[202] = 'All roads come do Dalaran!';
            $L[203] = 'Instant Exalted Reputation';
            $L[204] = 'Find new friends or huge communities!';
            $L[205] = 'Character Migration';
            $L[206] = 'Why need to spend time for leveling?';
            $L[207] = 'Buy an item instantly';
            $L[208] = 'Why need to spend time for get it?';
            $L[209] = 'Complete quest';

            $L[210] = 'Not work quest? Complete it here!';
            $L[211] = 'New passwords not match each other!';
            $L[212] = 'Wrong current password';
            $L[213] = 'Password successfully changed';
            $L[214] = 'Please enter current and new password (password is case sensitive!)';
            $L[215] = 'Current password';
            $L[216] = 'New password';
            $L[217] = 'Confirm new password';
            $L[218] = 'Change Password';
            $L[219] = 'Looking for someone?';
            $L[220] = 'Look account billing';

            $L[221] = 'ADMIN: Billing';
            $L[222] = 'Seems bad characters, not enough achievements!';
            $L[223] = 'Wrong file!';
            $L[224] = 'Acess denied';
            $L[225] = 'Wrong Migration status. Require "In Progress"';
            $L[226] = 'Items re-sended!';
            $L[227] = 'Migration with ID:';
            $L[228] = 'Approved';
            $L[229] = 'Canceled';
            $L[230] = 'Not meet requirements!';

            $L[231] = 'Character with GUID';
            $L[232] = 'Denied, because';
            $L[233] = 'This character available for renaming process, please log in it, and finish it';
            $L[234] = 'Success operation, Your character is available for change faction process, log in on your account, and do that.';
            $L[235] = 'This character available for change faction process, please log in it, and finish it.';
            $L[236] = 'Success operation, Your character is available for change race, log in on your account, and do that.';
            $L[237] = 'This character available for change race process, please log in it, and finish it.';
            $L[238] = 'Success operation, Item will be arrive via mailbox, check you character ingame!';
            $L[239] = 'Success operation, Character teleported!';
            $L[240] = 'About Us';

            $L[241] = 'Online';
            $L[242] = 'How to connect';
            $L[243] = 'Forum';
            $L[244] = 'Account Panel';
            $L[245] = 'Character Migration';
            $L[246] = 'Registration';
            $L[247] = 'Login';
            $L[248] = 'Changelog';
            $L[249] = 'News feed';
            $L[250] = 'Online Statistic';

            $L[251] = 'RESET';
            $L[252] = 'Modify';
            $L[253] = 'Enter amount of <i class = "icon-fire"></i> what you want to add, or remove from player.
            if you want remove. type -Amount. Example: -500, if you want to add +500 or just 500,
            in comment enter your comment (max 100 chars) if you left it empty, your username will used like a comment';
            $L[254] = 'Close';
            $L[255] = 'Enter amount';
            $L[256] = 'Enter comment';
            $L[257] = 'Account: Remove <i class = "icon-fire"></i> by GM';
            $L[258] = 'Goblin';
            $L[259] = 'Worgen';
            $L[260] = 'Balance';

            $L[261] = 'INSPECT';
            $L[262] = 'Donate via';
            $L[263] = 'Choice how to donate';
            $L[264] = 'Here listed all avaible methods';
            $L[265] = 'Gold Stock';
            $L[266] = 'Exchange gold coins to <i class = "icon-white icon-fire"></i> and back';
            $L[267] = 'I want to sell gold!';
            $L[268] = 'I want to buy gold!';
            $L[269] = 'Account: buy a gold';
            $L[270] = 'No available factions for this action';

            $L[271] = 'e-mail';
            $L[272] = 'Joined';
            $L[273] = 'Last Login';
            $L[274] = 'Last IP';
            $L[275] = 'Item';

            $L[280] = 'Consumable';
            $L[281] = 'Containers';
            $L[282] = 'Weapons';
            $L[283] = 'Gems';
            $L[284] = 'Armor';
            $L[285] = 'Reagents';
            $L[286] = 'Projectiles';
            $L[287] = 'Trade Goods';
            $L[288] = 'Select quest for autocomplete, or leave it, for complete: ';
            $L[289] = 'Recipes';
            $L[290] = 'Complete Quest: Step 1';
            $L[291] = 'Complete Quest: Step 2';
            $L[292] = 'Quest';
            $L[293] = 'Keys';
            $L['x'] = ''; // NOT USE
            $L[295] = 'Misc.'; // 'Miscellaneous'
            $L[296] = 'Glyphs';
            $L[297] = 'Next';
            $L[298] = 'Previous';
            $L[299] = 'Checkout';
            $L['about_us'] =
            '<h2>About us</h2>
                We are community of interests who improve opensource projects related to WoW Emulation. We like this game, we find that as very existing
                to create our own world. We welcome you in our Realms, here you can check lastest and problably one of the best solutions for WoW emulation.
                We are not asking for material benefits to play on our realms, if you like support us, we always accept donations, for pay for cost of production.
                We will thank you for your donation via donation coins (called like Coins or Fire stamps)
                You can withdraw your <i class = \'icon-fire\'></i> every time, just check a conditions, which allow you do that. Fixed rate for withdraw 1 <i class = \'icon-fire\'></i> = 0.09 €
                ';
            $L['how_to_connect'] =
            '<h2>How to connect</h2>
                <ul>
                    <li>Download Game client. (torrent, en_GB, ru_RU)</li>
                    <ul>
                        <li>If you have already have a game client, need change to set realmlist <ADDRESS> </li>
                    </ul>
                    <li>Register & Confirm account</li>
                    <li>Create character</li>
                    <li>Play!</li>
                </ul>';
            break;
        }
    }

    function _getAMLanguage() { global $_SESSION; global $DEFAULT_LANGUAGE; return isset($_SESSION['SL']) ? $_SESSION['SL'] : $DEFAULT_LANGUAGE; }

    function _setAMLanguage($X) {
        global $_SESSION;
        global $DEFAULT_LANGUAGE;
        $_SESSION['SL'] = $X;
        if(_isLanguageSupported($X))
            $_SESSION['SL'] = $X;
        else
            $_SESSION['SL'] = $DEFAULT_LANGUAGE;
    }

    function _isLanguageSupported($X) {
        global $AvailableLanguages;
        $match = null;
        $LANG = explode(',', $AvailableLanguages);
        foreach($LANG as $KEY) {
            $match = $KEY == $X;
            if($match)
                return true;
        }
        return $match;
    }

    function _getWHLanguage() {
        switch(_getAMLanguage()) {
            case "ru_RU": /* RUSSIAN */
                return "ru";
            case "fr_FR": /* FRENCH */
                return "fr";
            case "de_DE": /* GERMAN */
                return "de";
            case "es_ES": /* SPANISH - SPAIN */
			default:
                return "es";
            case "en_US": /* ENGLISH */
            default:
                return "old";
        }
    }
?>